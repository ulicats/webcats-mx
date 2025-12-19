<template>
  <!-- HERO / BANNER PRINCIPAL -->
  <Transition name="hero" appear>
    <section
        :class="[
          'relative min-h-screen flex flex-col justify-center items-center text-center px-6 bg-[#0d0d0f] text-white overflow-hidden',
          { 'hero-animate': heroAnimate }
        ]"
          >
      <div class="absolute inset-0 w-full h-full opacity-20">
        <transition-group name="fade">
          <img
            v-for="(img, index) in sliderImages"
            :key="index"
            v-if="index === currentSlide"
            :src="img"
            class="absolute inset-0 w-full h-full object-cover"
          />
        </transition-group>
        <div class="absolute inset-0 bg-gradient-to-b from-black/60 to-black/90"></div>
      </div>

      <div class="relative z-10 max-w-4xl text-left"> 
        
        <div class="hero-trunk"></div>
        
          <div class="hero-tree">
            <div class="hero-content">

              <!-- RAÍZ -->
              <div class="hero-line hero-root-line">
                <span class="hero-brand">Webcats.mx/</span>
              </div>

              <!-- RAMA 1 -->
              <div class="hero-line hero-title .prompt">
                <span class="branch">├─</span>
                <span class="hero-title-text">Desarrollo Web Profesional</span>
              </div>
           
              <!-- SUBRAMA DESCRIPCIÓN -->
              <div class="hero-line hero-title .prompt">
                <span class="branch">├─</span>
                <span class="hero-desc-text">
                  Soluciones web modernas, seguras y rápidas. Hosting, paneles admin,
                  DevOps, servidores, seguridad web y desarrollo a la medida.
                </span>
              </div>

              <!-- SUBRAMA ACCIONES -->
              <div class="hero-line">
                <span class="branch hero-title .prompt">└─</span>
                <div class="hero-actions">
                  <a href="/contacto" class="cmd-btn primary">
                    &gt; cotizar --proyecto
                  </a>
                  <a href="/portafolio" class="cmd-btn muted">
                    &gt; ver --portafolio
                  </a>
                </div>
              </div>
            </div>
          </div>
       </div>

    </section>
  </Transition>

  <!-- SERVICIOS -->
  <section class="py-20 px-6 bg-[#0d0d0f]">
    <h2 class="text-4xl font-bold text-center text-white mb-4">
      Servicios Webcats.mx
    </h2>

    <p class="text-center text-gray-400 max-w-2xl mx-auto mb-12">
      Soluciones completas de diseño web, servidores, administración, seguridad y optimización.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 max-w-6xl mx-auto">
      <div class="rounded-2xl bg-[#18181b] border border-white/5 shadow-lg hover:shadow-xl transition-all overflow-hidden">
        <div class="relative">
          <img :src="desarrollo" class="w-full h-52 object-cover" />
          <span class="absolute top-3 left-3 bg-[#ff8c00] text-white text-xs font-semibold px-3 py-1 rounded-full shadow">
            DESARROLLO WEB
          </span>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold text-white mb-3">Desarrollo Web Profesional</h3>
          <p class="mb-5 text-sm service-desc">Sitios modernos, rápidos y optimizados.</p>
          <a href="/servicios" class="font-semibold hover:underline service-link">Leer más >></a>
        </div>
      </div>

      <div class="rounded-2xl bg-[#18181b] border border-white/5 shadow-lg hover:shadow-xl transition-all overflow-hidden">
        <div class="relative">
          <img :src="servidores" class="w-full h-52 object-cover" />
          <span class="absolute top-3 left-3 bg-[#0078ff] text-white text-xs font-semibold px-3 py-1 rounded-full shadow">
            SERVIDORES
          </span>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold text-white mb-3">Administración de Servidores</h3>
          <p class="mb-5 text-sm service-desc">WHM/cPanel, DNS, SSL, mantenimiento profesional.</p>
          <a href="/servicios" class="font-semibold hover:underline service-link">Leer más >></a>
        </div>
      </div>

      <div class="rounded-2xl bg-[#18181b] border border-white/5 shadow-lg hover:shadow-xl transition-all overflow-hidden">
        <div class="relative">
          <img :src="devops" class="w-full h-52 object-cover" />
          <span class="absolute top-3 left-3 bg-[#6a00ff] text-white text-xs font-semibold px-3 py-1 rounded-full shadow">
            DEVOPS JR
          </span>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold text-white mb-3">DevOps Jr & Automatización</h3>
          <p class="mb-5 text-sm service-desc">Pipelines, Git, despliegues controlados, CI/CD.</p>
          <a href="/servicios" class="font-semibold hover:underline service-link">Leer más >></a>
        </div>
      </div>
    </div>
  </section>

<!-- ============================ -->
<!--     CLIENT LOGO RUNWAY       -->
<!-- ============================ -->
<section class="bg-[#0d0d0f] py-14 overflow-hidden">
  <div class="max-w-6xl mx-auto px-6">

    <p class="text-center text-sm mb-8 tracking-wide">
      Sitios web desarrollados
    </p>

    <div class="logo-runway">
      <div class="logo-track">
        <img
          v-for="(logo, i) in clientLogos"
          :key="`logo-a-${i}`"
          :src="logo"
          class="logo-item"
          alt="Cliente Webcats"
        />
        <!-- duplicado para loop infinito -->
        <img
          v-for="(logo, i) in clientLogos"
          :key="`logo-b-${i}`"
          :src="logo"
          class="logo-item"
          alt="Cliente Webcats"
        />
      </div>
    </div>

  </div>
</section>


  <!-- ============================ -->
  <!--       TECH STACK TREE        -->
  <!-- ============================ -->

  <section
    class="relative w-full text-black py-5 overflow-hidden"
    ref="techStackRef"
  >
    <div class="relative z-10 max-w-5xl mx-auto text-center mb-20 px-4">
      <h2 class="text-4xl font-bold mb-3">Mi Tech Stack</h2>
      <p class="text-white">
        Pipeline completo desde GitHub hasta el despliegue final.
      </p>
    </div>

    <!-- ========== DESKTOP / TABLET ========== -->
    <div class="tree-desktop-wrapper">
      <div
        class="tree-desktop relative mx-auto hidden md:block"
        style="width: 1200px; height: 650px;"
      >
        <!-- SVG líneas + puntos (igual que lo tenías) -->
        <svg
          class="absolute inset-0 w-full h-full pointer-events-none"
          viewBox="0 0 1200 650"
          xmlns="http://www.w3.org/2000/svg"
        >
          <!-- GitHub → Vite -->
           <circle
            cx="215"
            cy="300"
            r="4"
            class="connector-dot"
            :class="{ 'connector-dot--active': animateLines }"
          />
          <line x1="215" y1="300" x2="285" y2="300"
                stroke="#9AC7E8" stroke-width="3" stroke-linecap="round"
                :class="{ draw: animateLines }" />
            <circle
              cx="285"
              cy="300"
              r="4"
              class="connector-dot"
              :class="{ 'connector-dot--active': animateLines }"
            />
          <!-- Vite → Vue -->
          <circle
            cx="415"
            cy="300"
            r="4"
            class="connector-dot"
            :class="{ 'connector-dot--active': animateLines }"
          />
          <line x1="415" y1="300" x2="535" y2="300"
                stroke="#9AC7E8" stroke-width="3" stroke-linecap="round"
                :class="{ draw: animateLines }" />
          <circle
            cx="535"
            cy="300"
            r="4"
            class="connector-dot"
            :class="{ 'connector-dot--active': animateLines }"
          />
          <!-- Vue → Laravel -->
            <circle
            cx="665"
            cy="300"
            r="4"
            class="connector-dot"
            :class="{ 'connector-dot--active': animateLines }"
          />
          <line x1="665" y1="300" x2="735" y2="300"
                stroke="#9AC7E8" stroke-width="3" stroke-linecap="round"
                :class="{ draw: animateLines }" />
            <circle
              cx="735"
              cy="300"
              r="4"
              class="connector-dot"
              :class="{ 'connector-dot--active': animateLines }"
            />
          <!-- Laravel → WHM -->
            <circle
            cx="865"
            cy="300"
            r="4"
            class="connector-dot"
            :class="{ 'connector-dot--active': animateLines }"
          />
          <line x1="865" y1="300" x2="935" y2="300"
                stroke="#9AC7E8" stroke-width="3" stroke-linecap="round"
                :class="{ draw: animateLines }" />
            <circle
              cx="935"
              cy="300"
              r="4"
              class="connector-dot"
              :class="{ 'connector-dot--active': animateLines }"
            />
          <!-- WHM → cPanel -->
            <circle
            cx="1065"
            cy="300"
            r="4"
            class="connector-dot"
            :class="{ 'connector-dot--active': animateLines }"
          />
          <line x1="1065" y1="300" x2="1085" y2="300"
                stroke="#9AC7E8" stroke-width="3" stroke-linecap="round"
                :class="{ draw: animateLines }" />
          <circle
            cx="1085"
            cy="300"
            r="4"
            class="connector-dot"
            :class="{ 'connector-dot--active': animateLines }"
          />

          <!-- Subnodos Vue -->
          <circle cx="600" cy="235" r="4"
                class="connector-dot"
                :class="{ 'connector-dot--active': animateSub }" />
          <line x1="600" y1="235" x2="600" y2="205"
                stroke="#9AC7E8" stroke-width="3" stroke-linecap="round"
                :class="{ draw: animateSub }" />
          <circle cx="600" cy="205" r="4"
                class="connector-dot"
                :class="{ 'connector-dot--active': animateSub }" />   
                
          <circle cx="657.7" cy="270" r="4"
                class="connector-dot"
                :class="{ 'connector-dot--active': animateSub }" />     
          <line x1="657.7" y1="270" x2="676.2" y2="260.3"
                stroke="#9AC7E8" stroke-width="3" stroke-linecap="round"
                :class="{ draw: animateSub }" />
          <circle cx="676.2" cy="260.3" r="4"
                class="connector-dot"
                :class="{ 'connector-dot--active': animateSub }" />

          <circle cx="646.9" cy="345" r="4"
                class="connector-dot"
                :class="{ 'connector-dot--active': animateSub }" />    
          <line x1="646.9" y1="345" x2="685.3" y2="381.9"
                stroke="#9AC7E8" stroke-width="3" stroke-linecap="round"
                :class="{ draw: animateSub }" />
          <circle cx="685.3" cy="381.9" r="4"
                class="connector-dot"
                :class="{ 'connector-dot--active': animateSub }" />

          <!-- Puntos ● (igual que tenías) -->
          <!-- ... me los salto para no hacer esto kilométrico, pero son los mismos círculos ... -->
        </svg>

        <!-- NODOS PRINCIPALES DESKTOP -->
        <div class="tech-node node-github" :class="{ active: show.github }">
          <img src="/src/assets/icons/git/github.png" />
        </div>

        <div class="tech-node node-vite" :class="{ active: show.vite }">
          <img src="/src/assets/icons/frameworks/vite.png" />
        </div>

        <div class="tech-node node-vue" :class="{ active: show.vue }">
          <img src="/src/assets/icons/frameworks/vue.png" />
        </div>

        <div class="tech-node node-laravel" :class="{ active: show.laravel }">
          <img src="/src/assets/icons/frameworks/laravel.png" />
        </div>

        <div class="tech-node node-whm" :class="{ active: show.whm }">
          <img src="/src/assets/icons/servers/whm.png" />
        </div>

        <div class="tech-node node-cpanel" :class="{ active: show.cpanel }">
          <img src="/src/assets/icons/servers/cpanel.png" />
        </div>

        <!-- Subnodos Vue desktop -->
        <div class="tech-node subnode node-html" :class="{ active: show.html }">
          <img src="/src/assets/icons/frameworks/html.png" />
        </div>
        <div class="tech-node subnode node-js" :class="{ active: show.js }">
          <img src="/src/assets/icons/frameworks/js.png" />
        </div>
        <div class="tech-node subnode node-tailwind" :class="{ active: show.tailwind }">
          <img src="/src/assets/icons/frameworks/tailwind.png" />
        </div>
      </div>
    </div>

    <!-- ========== MOBILE / RESPONSIVE ========== -->
    <div class="tree-mobile md:hidden flex flex-col items-center gap-3 px-8 max-w-xs mx-auto">

      <!-- GitHub -->
      <div class="mobile-node">
        <div class="tech-node mobile-main" :class="{ active: show.github }">
          <img src="/src/assets/icons/git/github.png" />
        </div>
      </div>

      <div class="mobile-connector" :class="{ 'mobile-connector--active': show.github && show.vite }"></div>

      <!-- Vite -->
      <div class="mobile-node">
        <div class="tech-node mobile-main" :class="{ active: show.vite }">
          <img src="/src/assets/icons/frameworks/vite.png" />
        </div>
      </div>

      <div class="mobile-connector" :class="{ 'mobile-connector--active': show.vite && show.vue }"></div>

        <!-- Vite -->
      <div class="mobile-node">
        <div class="tech-node mobile-main" :class="{ active: show.vite }">
          <img src="/src/assets/icons/frameworks/vue.png" />
        </div>

        <!-- Vue + subnodos -->
      <div class="relative vue-mobile-wrapper">
  
          <!-- HTML -->
          <div class="tech-node subnode mobile-sub vue-sub vue-sub--html"
              :class="{ 'vue-sub--visible': show.html }">
            <img src="/src/assets/icons/frameworks/html.png" />
          </div>

          <!-- JS -->
          <div class="tech-node subnode mobile-sub vue-sub vue-sub--js"
              :class="{ 'vue-sub--visible': show.js }">
            <img src="/src/assets/icons/frameworks/js.png" />
          </div>

          <!-- Tailwind -->
          <div class="tech-node subnode mobile-sub vue-sub vue-sub--tailwind"
              :class="{ 'vue-sub--visible': show.tailwind }">
            <img src="/src/assets/icons/frameworks/tailwind.png" />
          </div>

        <!-- LINEAS DESDE VUE HACIA SUBNODOS -->
        <span class="vue-line vue-line-html" :class="{ 'vue-lines-active': show.html }"></span>
        <span class="vue-line vue-line-js" :class="{ 'vue-lines-active': show.js }"></span>
        <span class="vue-line vue-line-tailwind" :class="{ 'vue-lines-active': show.tailwind }"></span>
      </div>

      </div>

      

      <!-- Conector Vue → Laravel -->
      <div class="mobile-connector" :class="{ 'mobile-connector--active': show.vue && show.laravel }"></div>

      <!-- Laravel -->
      <div class="mobile-node">
        <div class="tech-node mobile-main" :class="{ active: show.laravel }">
          <img src="/src/assets/icons/frameworks/laravel.png" />
        </div>
      </div>

      <div class="mobile-connector" :class="{ 'mobile-connector--active': show.laravel && show.whm }"></div>

      <!-- WHM -->
      <div class="mobile-node">
        <div class="tech-node mobile-main" :class="{ active: show.whm }">
          <img src="/src/assets/icons/servers/whm.png" />
        </div>
      </div>

      <div class="mobile-connector" :class="{ 'mobile-connector--active': show.whm && show.cpanel }"></div>

      <!-- cPanel -->
      <div class="mobile-node">
        <div class="tech-node mobile-main" :class="{ active: show.cpanel }">
          <img src="/src/assets/icons/servers/cpanel.png" />
        </div>
      </div>
    </div>
  </section>

  <!-- SECCIÓN QUIÉN SOY -->
  <section
    class="relative w-full min-h-[70vh] text-white py-24 px-6 overflow-hidden"
    ref="quienSoyRef"
  >
    <div class="absolute inset-0 bg-cover bg-left opacity-40"
         style="background-image: url('/assets/webcats/fondo-tech.webp');"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-[#0d0d0f]/95 to-[#0d0d0f]/70"></div>

    <div
      :class="[
        'relative max-w-5xl mx-auto text-center transition-all duration-[900ms] ease-out',
        quienSoyVisible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'
      ]"
    >
      <h2 class="text-4xl font-bold mb-6">¿Quién soy?</h2>

      <p class="text-lg leading-relaxed text-gray-300 mb-6">
        <strong>Hola, soy Ulises Guzmán</strong>, SysAdmin y Desarrollador Web con más de
        <strong>7 años de experiencia</strong> con servidores Linux, WHM/cPanel, PHP, MySQL, DNS y SMTP.
      </p>

      <p class="text-lg leading-relaxed text-gray-300 mb-6">
        Fundé <strong>Webcats.mx</strong> para crear sitios rápidos, seguros y listos para producción.
      </p>

      <p class="text-lg leading-relaxed text-gray-300 mb-6">
        Actualmente me especializo en <strong>DevOps Jr</strong> integrando Docker, CI/CD y automatización.
      </p>

      <p class="text-lg leading-relaxed text-gray-300">
        Si buscas alguien que domine el código y los servidores, <strong>aquí estoy</strong>.
      </p>
    </div>
  </section>
</template>

<script setup>
import { ref, onMounted } from "vue"

import desarrollo from "@/assets/webcats/desarrollo-web.webp"
import servidores from "@/assets/webcats/servidores.webp"
import devops from "@/assets/webcats/devops.webp"
import logoLimalum from "@/assets/logos/logo-limalum.png"
import logoErik from "@/assets/logos/logo_erik.png"
import logoBear from "@/assets/logos/bear_mono.png"
import logoCasillas from "@/assets/logos/logo_casillas.png"
import logoDerma from "@/assets/logos/logo_derma.png"
import logoGeo from "@/assets/logos/logo_geo.png"
import logoNiticolor from "@/assets/logos/niticolor_mono.png"
import logoWlc from "@/assets/logos/wlc_mono.png"
import logoArce from "@/assets/logos/logo_arce.png"

const clientLogos = [
  logoLimalum,
  logoErik,
  logoBear,
  logoCasillas,
  logoDerma,
  logoGeo,
  logoNiticolor,
  logoWlc,
  logoArce
  
]


const sliderImages = [
  "/assets/slider/servers.jpg",
  "/assets/slider/code.jpg",
  "/assets/slider/devops.jpg",
]

const heroAnimate = ref(false)

onMounted(() => {
  setTimeout(() => {
    heroAnimate.value = true
  }, 200)
})

const currentSlide = ref(0)

onMounted(() => {
  if (sliderImages.length) {
    setInterval(() => {
      currentSlide.value =
        (currentSlide.value + 1) % sliderImages.length
    }, 1000)
  }
})

const quienSoyRef = ref(null)
const quienSoyVisible = ref(false)

onMounted(() => {
  const observer = new IntersectionObserver(
    entries => {
      quienSoyVisible.value = entries[0].isIntersecting
    },
    { threshold: 0.4 }
  )

  if (quienSoyRef.value) observer.observe(quienSoyRef.value)
})

const techStackRef = ref(null)

const show = ref({
  github: false,
  vite: false,
  vue: false,
  laravel: false,
  whm: false,
  cpanel: false,
  html: false,
  js: false,
  tailwind: false,
})

const animateLines = ref(false)
const animateSub = ref(false)

onMounted(() => {
  const observer = new IntersectionObserver(
    entries => {
      if (entries[0].isIntersecting) {
        startAnimation()
        observer.disconnect()
      }
    },
    { threshold: 0.3 }
  )

  if (techStackRef.value) observer.observe(techStackRef.value)
})

function startAnimation() {
  setTimeout(() => (show.value.github = true), 200)
  setTimeout(() => (show.value.vite = true), 700)

  setTimeout(() => {
    animateLines.value = true
    show.value.vue = true
  }, 1300)

  setTimeout(() => {
    animateSub.value = true
    show.value.html = true
    show.value.js = true
    show.value.tailwind = true
  }, 1900)

  setTimeout(() => (show.value.laravel = true), 2400)
  setTimeout(() => (show.value.whm = true), 2900)
  setTimeout(() => (show.value.cpanel = true), 3400)
}
</script>

<style>

/* ========================================================= */
/*                    HERO ENTRANCE                          */
/* ========================================================= */

.hero-enter-active {
  transition: opacity 1.2s ease, transform 1.2s ease;
}

.hero-enter-from {
  opacity: 0;
  transform: translateY(40px);
}

.hero-enter-to {
  opacity: 1;
  transform: translateY(0);
}

.hero-tree {
    position: relative;
}

.hero-root-line {
  position: relative;
  padding-left: 24px; /* acerca Webcats.mx a la root */
}

/* línea horizontal desde la root (logo) */
.hero-root-line::before {
  content: "";
  position: absolute;
  left: -140px;              /* longitud de la línea */
  top: 50%;
  width: 90px;              /* tamaño exacto de la conexión */
  height: 4px;
  background: rgba(255,255,255,0.9);
}



@keyframes growTrunk {
  to {
    transform: scaleY(1);
  }
}


/* Home.vue */


/* ================================
   HERO – TERMINAL STYLE
================================ */

.hero-title {
  font-family: 'JetBrains Mono', monospace;
  font-size: clamp(2.2rem, 4vw, 3.4rem);
  font-weight: 700;
  line-height: 1.2;
  margin-bottom: 24px;
  color: #e5e7eb;
}

/* > prompt */
.hero-title .prompt {
  color: #22c55e; /* verde terminal */
  margin-right: 8px;
}

/* comando / título */
.hero-title .cmd {
  display: inline-block;
  color: #7bc6ff; /* azul VS Code */
  font-weight: 800;
}

/* descripción tipo output */
.hero-desc {
  font-family: 'JetBrains Mono', monospace;
  font-size: 14px;
  color: #d1d5db;
  max-width: 680px;
  line-height: 1.7;
  margin-bottom: 40px;
}

/* flecha verde */
.hero-desc .arrow {
  color: #22c55e;
  margin-right: 6px;
}

/* ================================
   HERO TREE STRUCTURE
================================ */

.hero-line {
  display: flex;
  align-items: flex-start;
  gap: 10px;
  font-family: 'JetBrains Mono', monospace;
  margin-bottom: 10px;
  opacity:0;
}

/* ============================= */
/*        HERO TRUNK             */
/* ============================= */

.hero-trunk {
  position: absolute;
  left: -140px;           /* ajusta alineación con Webcats.mx */
  top: -120px;
  width: 4px;
  height: calc(100% + 120px);
  background: linear-gradient(
    to bottom,
    rgba(255,255,255,0.9),
    rgba(255,255,255,0.2)
  );
  border-radius: 4px;
  opacity: 0.9;
  pointer-events:none;
}



/* símbolos */
.branch {
  color: #ffffff;
  
}

.folder {
  color: #7bc6ff;
  font-weight: 700;
}


.hero-animate .hero-actions {
  animation: showLine .4s ease forwards;
  animation-delay: 3s;
  opacity: 0;
}


.hero-animate .hero-line:nth-child(1) {
  animation: showLine .4s ease forwards;
  animation-delay: 1.5s;
}

.hero-animate .hero-line:nth-child(2) {
  animation: showLine .4s ease forwards;
  animation-delay: 1.8s;
}

.hero-animate .hero-line:nth-child(3) {
  animation: showLine .4s ease forwards;
  animation-delay: 2.1s;
}

.hero-animate .hero-line:nth-child(4) {
  animation: showLine .4s ease forwards;
  animation-delay: 2.4s;
}

.hero-animate .hero-line:nth-child(5) {
  animation: showLine .4s ease forwards;
  animation-delay: 2.7s;
}

@keyframes showLine {
  to {
    opacity: 1;
  }
}


@keyframes growTrunk {
  to {
    transform: scaleY(1);
  }
}




/* textos */
.hero-title-text {
  font-size: clamp(2rem, 4vw, 3rem);
  font-weight: 800;
  color: #22c55e;
}

.hero-brand {
  font-size: clamp(2.2rem, 4.2vw, 3.2rem);
  font-weight: 900;
  color: #7bc6ff;
  margin-left:-57px;
}

/* descripción */
.hero-desc-text {
  font-size: 17px;
  color: #d1d5db;
  max-width: 680px;
  line-height: 1.7;
}

/* acciones */
.hero-actions {
  display: flex;
  gap: 16px;
  margin-top: 18px;
}

.cmd-btn {
  font-family: 'JetBrains Mono', monospace;
  padding: 12px 22px;
  border-radius: 12px;
  font-weight: 700;
  text-decoration: none;
  transition: all 0.25s ease;
}

.cmd-btn.primary {
  background: #008330;
  color: #fff;
}

.cmd-btn.primary:hover {
  background: #a0d8ff;
}

.cmd-btn.muted {
  background: #2a2a2a;
  border: 1px solid #555;
  color: #fff;
}

.cmd-btn.muted:hover {
  background: #3a3a3a;
}

/* ========================================================= */
/*                       SECCION SERVICIOS                   */
/* ========================================================= */

.service-desc {
  color: #22c55e; /* verde consola */
  font-family: 'JetBrains Mono', monospace;
  font-size: 0.95rem;
  line-height: 1.6;
}

.service-link {
  color: #facc15; /* amarillo consola */
  font-family: 'JetBrains Mono', monospace;
  font-weight: 600;
  text-decoration: none;
}

.service-link:hover {
  color: #fde047; /* un poquito más vivo */
}




/* ========================================================= */
/*                       FADE SLIDER                         */
/* ========================================================= */
.fade-enter-active,
.fade-leave-active {
  transition: opacity 1.5s ease;
}
.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}

/* ========================================================= */
/*                     DESKTOP TECH TREE                     */
/* ========================================================= */

.tech-node {
  width: 90px;
  height: 90px;
  border-radius: 9999px;
  border: 4px solid #9AC7E8;
  background-color: #ffffff;
  position: absolute;
  transform: translate(-50%, -50%) scale(0.5);
  opacity: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.18);
  transition: opacity 0.45s ease, transform 0.45s ease, box-shadow 0.3s ease;
}

.tech-node.active {
  opacity: 1;
  transform: translate(-50%, -50%) scale(1);
}

.tech-node img {
  width: 60%;
  height: 60%;
  object-fit: contain;
}

/* Subnodos desktop */
.tech-node.subnode {
  width: 70px;
  height: 70px;
}

/* Posiciones desktop */
.node-github { left: 150px; top: 300px; }
.node-vite { left: 350px; top: 300px; }
.node-vue { left: 600px; top: 300px; }
.node-laravel { left: 800px; top: 300px; }
.node-whm { left: 1000px; top: 300px; }
.node-cpanel { left: 1150px; top: 300px; }

/* Subnodos Vue desktop */
.node-html { left: 600px; top: 150px; }
.node-js { left: 725px; top: 235px; }
.node-tailwind { left: 725px; top: 420px; }

/* Líneas animadas */
.draw {
  stroke-dasharray: 200;
  stroke-dashoffset: 200;
  animation: drawLine 1.3s ease forwards;
}
@keyframes drawLine {
  to { stroke-dashoffset: 0; }
}

/* Puntos conectores ● */
.connector-dot {
  fill: #9ac7e8;
  opacity: 0;
  transition: opacity 0.4s ease;
}
.connector-dot--active {
  opacity: 1;
}

/* Wrapper desktop */
.tree-desktop-wrapper {
  height: 505px;
  overflow: hidden;
  margin-top: -130px;
}

/* ========================================================= */
/*                   MOBILE TREE (BASE)                      */
/* ========================================================= */

/* Solo los nodos principales en la columna usan este override */
.tree-mobile .mobile-node > .tech-node {
  position: relative;
  left: 0;
  top: 0;
  transform: scale(1) translate(0, 0);
  margin: 0 auto;
}

.tech-node.mobile-main {
  width: 80px;
  height: 80px;
}

.tech-node.subnode.mobile-sub {
  width: 100px;
  height: 100px;
}

/* Conectores verticales entre nodos principales */
.mobile-connector {
  width: 2px;
  height: 45px;
  background: transparent;
  position: relative;
  opacity: 0;
  transform: scaleY(0.4);
  transform-origin: top;
  transition: opacity 0.35s ease, transform 0.35s ease;
}
.mobile-connector::before,
.mobile-connector::after {
  content: "";
  position: absolute;
  width: 5px;
  height: 5px;
  border-radius: 9999px;
  background: #9ac7e8;
  left: 50%;
  transform: translateX(-50%);
}
.mobile-connector::before { top: -4px; }
.mobile-connector::after { bottom: -4px; }
.mobile-connector--active {
  background: #9ac7e8;
  opacity: 1;
  transform: scaleY(1);
}

/* ========================================================= */
/*       SUBÁRBOL DE VUE – RESPONSIVE (MOBILE)               */
/* ========================================================= */

@media (max-width: 900px) {

  .tree-mobile {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 45px;
    width: 100%;
    padding-bottom: 40px;
  }

  /* Contenedor general de Vue + subnodos */
  .vue-mobile-wrapper {
    position:relative;
    width: 260px;  
    margin: 0 auto;
  }

    
    .vue-mobile-wrapper .tech-node.mobile-main {
        z-index:2;
        position: relative;
        left: 50%;
        transform: translateX(-50%);
    }

  .vue-main {
    position: relative;
    margin: 0 auto;
  }

  .vue-sub {
    position: absolute;
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  .vue-sub--visible {
    opacity: 1;
  }

  /* Posiciones de subnodos */
  .vue-sub--html {
    left: 30px;
    top: -35px;
  }

  .vue-sub--js {
    right: -55px;
    top: 30px;
  }

  .vue-sub--tailwind {
    right: -80px;
    bottom: -15px;
  }

  /* Líneas desde Vue hacia los subnodos */
  .vue-line {
    position: absolute;
    width: 2px;
    background: #9ac7e8;
    top: 0;
    transform-origin: top;
    transition: opacity .3s ease;
    transform: scaleY(0);
  }

  .vue-line::after {
    content: "";
    position: absolute;
    bottom: -4px;
    left: 50%;
    transform: translateX(-50%);
    width: 6px;
    height: 6px;
    background: #9ac7e8;
    border-radius: 9999px;
  }


  .vue-lines-active {
    opacity: 1;
    transform: scaleY(1);
  }

  /* Línea hacia HTML */
  .vue-line-html {
    height: 30px;
    left: 35%;
    top: -35px;
    transform: rotate(90deg);
  }

  /* Línea hacia JS */
  .vue-line-js {
    height: 40px;
    left: 62%;
    top: -19px;
    transform: rotate(-45deg);
  }

   /* Línea hacia Tailwind */
  .vue-line-tailwind {
    height: 47px;
    left: 64%;
    top: -48px;
    transform: rotate(-115deg);
  }

    .hero-trunk {
    left: 20px;
    width: 3px;
    opacity: 1;
  }

}

/* ========================================================= */
/*                CLIENT LOGO RUNWAY                         */
/* ========================================================= */

.logo-runway {
  width: 100%;
  overflow: hidden;
  position: relative;
}

.logo-track {
  display: flex;
  align-items: center;
  gap: 120px;
  width: max-content;
  animation: runwayScroll 45s linear infinite;
  padding:20px 0;
}

.logo-item {
  height: 100px;
  opacity: 0.7;
  filter: grayscale(100%) brightness(1.1);
}


.logo-item:hover {
  opacity: 1;
  transform: translateY(-3px);
}


@keyframes runwayScroll {
  from {
    transform: translateX(0);
  }
  to {
    transform: translateX(-50%);
  }

  

}


/* ========================================================= */
/*                 OCULTAR DESKTOP EN MOBILE                 */
/* ========================================================= */

@media (max-width: 767px) {
  .tree-desktop {
    display: none !important;
  }
  .tree-mobile {
    margin-top: 10px;
  }
}

@media (max-width: 480px) {
  .linea-root {
    opacity: 0.25;
    width: 2px;
  }

  .global-trunk {
    left: 40px;          /* alineado al logo en mobile */
    top: 56px;           /* justo debajo del header */
    width: 4px;
    opacity: 0.25;
    height: calc(100vh - 56px);
  }

  .hero-title {
    font-size: 1.5rem;   /* antes se veía ~1.7–1.8 */
    line-height: 1.2;
    margin-bottom: 8px;
  }

  .hero-description {
    font-size: 0.95rem;
    line-height: 1.55;
    max-width: 94%;
    margin-bottom: 14px;
  }

   .hero-content {
    padding-left: 50px; 
  }

  .hero-tree {
    max-width: 100%;
  }

  .hero-description {
    max-width: 95%;
  }

  .hero-buttons button {
  white-space: nowrap;
}


  .hero-path {
    font-size: 1.25rem;
    margin-bottom:6px;
  }

  .hero-description {
  line-height: 1.6;
  max-width: 90%;
}

.btn-secondary {
  border: 1px solid rgba(255,255,255,0.15);
}

.hero-buttons button {
    font-family: monospace;
    letter-spacing: 0.3px;
  }

  .hero-brand {
    margin-left: -28px;
  }

  .hero-root-line::before {
    left: -28px;
    width: 20px;
    height: 3px;
    opacity: 0.6;
  }

  .cmd-btn{
    font-size:0.7rem;
  }

  .hero-title-text{
    font-size: clamp(2rem, 4vw, 3rem);
  }
 

  .hero-desc-text{
    font-size:14px;
  }

}

@media (max-width: 360px) {
  .hero-title {
    font-size: 1.4rem;
  }

  .hero-path {
    font-size: 1.15rem;
  }

  .hero-buttons button {
    padding: 10px 16px;
    font-size: 0.85rem;
  }
}


</style>
