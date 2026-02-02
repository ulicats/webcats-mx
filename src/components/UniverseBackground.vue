<template>
  <div class="fixed inset-0 z-10 overflow-hidden bg-black">
    <!-- Nebulosa suave + glow -->
    <div class="absolute inset-0 nebula"></div>

    <!-- Canvas estrellas -->
    <canvas ref="canvas" class="absolute inset-0 h-full w-full"></canvas>

    <!-- Vignette -->
    <div class="absolute inset-0 pointer-events-none vignette"></div>

    <!-- Noise sutil -->
    <div class="absolute inset-0 pointer-events-none noise"></div>
  </div>
</template>

<script setup>
import { onMounted, onBeforeUnmount, ref } from "vue";

const canvas = ref(null);

let ctx;
let rafId = null;

const DPR = Math.min(window.devicePixelRatio || 1, 2);
let W = 0;
let H = 0;

// Capas de estrellas (profundidad)
let layers = [];
const LAYER_CONFIG = [
  { countFactor: 1.0, size: [0.4, 1.2], speed: 0.06, alpha: [0.08, 0.35] }, // lejos
  { countFactor: 0.65, size: [0.6, 1.6], speed: 0.12, alpha: [0.12, 0.55] }, // medio
  { countFactor: 0.35, size: [0.9, 2.2], speed: 0.18, alpha: [0.18, 0.75] }, // cerca
];

let lastT = 0;

// mouse parallax
const mouse = { x: 0.5, y: 0.5 };
const parallax = { x: 0, y: 0 };

function rand(min, max) {
  return Math.random() * (max - min) + min;
}

function makeStars(count, sizeMin, sizeMax, aMin, aMax) {
  return Array.from({ length: count }, () => ({
    x: Math.random() * W,
    y: Math.random() * H,
    r: rand(sizeMin, sizeMax),
    a: rand(aMin, aMax),
    tw: rand(0.0015, 0.01), // twinkle speed
    ph: rand(0, Math.PI * 2), // phase
  }));
}

function resize() {
  const c = canvas.value;
  if (!c) return;

  W = window.innerWidth;
  H = window.innerHeight;

  c.width = Math.floor(W * DPR);
  c.height = Math.floor(H * DPR);
  c.style.width = W + "px";
  c.style.height = H + "px";

  ctx = c.getContext("2d");
  ctx.setTransform(DPR, 0, 0, DPR, 0, 0);

  // densidad adaptable a pantalla (sin matar performance)
  const baseDensity = Math.min(520, Math.floor((W * H) / 7000));

  layers = LAYER_CONFIG.map((cfg) => {
    const count = Math.floor(baseDensity * cfg.countFactor);
    return {
      cfg,
      stars: makeStars(count, cfg.size[0], cfg.size[1], cfg.alpha[0], cfg.alpha[1]),
      driftX: rand(-0.08, 0.08),
      driftY: rand(0.02, 0.12),
    };
  });
}

function drawBackground() {
  // fondo con gradiente suave + leve color
  const g = ctx.createRadialGradient(W * 0.5, H * 0.35, 80, W * 0.5, H * 0.35, Math.max(W, H));
  g.addColorStop(0, "rgba(255,255,255,0.05)");
  g.addColorStop(0.35, "rgba(80,255,220,0.02)"); // toque Webcats
  g.addColorStop(1, "rgba(0,0,0,0)");
  ctx.fillStyle = g;
  ctx.fillRect(0, 0, W, H);
}

function tick(t) {
  if (!ctx) return;
  const dt = Math.min(0.033, (t - lastT) / 1000 || 0.016);
  lastT = t;

  // suaviza parallax (no brusco)
  parallax.x += ((mouse.x - 0.5) - parallax.x) * 0.06;
  parallax.y += ((mouse.y - 0.5) - parallax.y) * 0.06;

  ctx.clearRect(0, 0, W, H);
  drawBackground();

  // dibuja capas
  for (let i = 0; i < layers.length; i++) {
    const layer = layers[i];
    const { speed } = layer.cfg;

    // offset por mouse (capas cercanas se mueven más)
    const mx = (parallax.x * 2) * (10 + i * 10);
    const my = (parallax.y * 2) * (8 + i * 10);

    for (const s of layer.stars) {
      // drift súper lento
      s.x += (layer.driftX * speed) * (60 * dt);
      s.y += (layer.driftY * speed) * (60 * dt);

      // wrap
      if (s.x < -10) s.x = W + 10;
      if (s.x > W + 10) s.x = -10;
      if (s.y < -10) s.y = H + 10;
      if (s.y > H + 10) s.y = -10;

      // twinkle real
      s.ph += s.tw * (60 * dt);
      const twinkle = 0.6 + 0.4 * Math.sin(s.ph);
      const alpha = s.a * twinkle;

      ctx.beginPath();
      ctx.arc(s.x + mx, s.y + my, s.r, 0, Math.PI * 2);
      ctx.fillStyle = `rgba(255,255,255,${alpha})`;
      ctx.fill();

      // glow leve en estrellas cercanas
      if (i === 2 && s.r > 1.4) {
        ctx.beginPath();
        ctx.arc(s.x + mx, s.y + my, s.r * 2.2, 0, Math.PI * 2);
        ctx.fillStyle = `rgba(120,255,230,${alpha * 0.08})`;
        ctx.fill();
      }
    }
  }

  rafId = requestAnimationFrame(tick);
}

function onMouseMove(e) {
  mouse.x = e.clientX / W;
  mouse.y = e.clientY / H;
}

function onTouchMove(e) {
  const t = e.touches?.[0];
  if (!t) return;
  mouse.x = t.clientX / W;
  mouse.y = t.clientY / H;
}

function onResize() {
  resize();
}

onMounted(() => {
  resize();
  window.addEventListener("resize", onResize, { passive: true });
  window.addEventListener("mousemove", onMouseMove, { passive: true });
  window.addEventListener("touchmove", onTouchMove, { passive: true });

  rafId = requestAnimationFrame(tick);
});

onBeforeUnmount(() => {
  window.removeEventListener("resize", onResize);
  window.removeEventListener("mousemove", onMouseMove);
  window.removeEventListener("touchmove", onTouchMove);
  if (rafId) cancelAnimationFrame(rafId);
});
</script>

<style scoped>
/* nebulosa: muy suave, no invade */
.nebula {
  background:
    radial-gradient(circle at 20% 20%, rgba(120,255,230,0.06), transparent 45%),
    radial-gradient(circle at 80% 30%, rgba(255,255,255,0.05), transparent 45%),
    radial-gradient(circle at 50% 85%, rgba(120,170,255,0.04), transparent 55%);
  filter: blur(30px);
  opacity: 0.9;
}

/* viñeta cinematográfica */
.vignette {
  background: radial-gradient(circle at 50% 35%, rgba(0,0,0,0) 0%, rgba(0,0,0,0.55) 65%, rgba(0,0,0,0.9) 100%);
}

/* noise sin imagen externa */
.noise {
  opacity: 0.09;
  mix-blend-mode: overlay;
  background-image:
    repeating-linear-gradient(
      0deg,
      rgba(255, 255, 255, 0.06) 0px,
      rgba(255, 255, 255, 0.06) 1px,
      transparent 1px,
      transparent 2px
    ),
    repeating-linear-gradient(
      90deg,
      rgba(255, 255, 255, 0.04) 0px,
      rgba(255, 255, 255, 0.04) 1px,
      transparent 1px,
      transparent 3px
    );
}
</style>
