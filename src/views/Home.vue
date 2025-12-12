<template>
  <!-- HERO / BANNER PRINCIPAL -->
  <section
    class="relative min-h-screen flex flex-col justify-center items-center text-center px-6 bg-[#0d0d0f] text-white overflow-hidden"
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

    <div class="relative z-10 max-w-3xl">
      <h1 class="text-5xl md:text-7xl font-extrabold leading-tight mb-6">
        Desarrollo Web Profesional <br />
        <span class="text-[#7bc6ff]">Webcats.mx</span>
      </h1>

      <p class="text-lg md:text-xl text-gray-300 max-w-2xl mx-auto mb-10">
        Soluciones web modernas, seguras y rápidas. Hosting, paneles admin,
        DevOps, servidores, seguridad web y desarrollo a la medida.
      </p>

      <div class="flex gap-4 justify-center">
        <a
          href="/contacto"
          class="px-8 py-4 bg-[#7bc6ff] text-black font-semibold rounded-xl shadow-lg hover:bg-[#a0d8ff] transition-all"
        >
          Cotizar mi proyecto 
        </a>
        <a
          href="/portafolio"
          class="px-8 py-4 bg-[#2a2a2a] border border-gray-600 text-white font-semibold rounded-xl hover:bg-[#3a3a3a] transition-all"
        >
          Ver portafolio 
        </a>
      </div>
    </div>
  </section>

  <!-- SERVICIOS -->
  <section class="bg-white py-10 px-6">
    <h2 class="text-4xl font-bold text-center text-gray-900 mb-4">
      Servicios Webcats.mx
    </h2>

    <p class="text-center text-gray-600 max-w-2xl mx-auto mb-12">
      Soluciones completas de diseño web, servidores, administración, seguridad y optimización.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 max-w-6xl mx-auto">
      <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition-shadow overflow-hidden">
        <div class="relative">
          <img :src="desarrollo" class="w-full h-52 object-cover" />
          <span class="absolute top-3 left-3 bg-[#ff8c00] text-white text-xs font-semibold px-3 py-1 rounded-full shadow">
            DESARROLLO WEB
          </span>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold text-gray-900 mb-3">Desarrollo Web Profesional</h3>
          <p class="text-gray-600 mb-5 text-sm">Sitios modernos, rápidos y optimizados.</p>
          <a href="/servicios" class="text-primary font-semibold hover:underline">Leer más >></a>
        </div>
      </div>

      <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition-shadow overflow-hidden">
        <div class="relative">
          <img :src="servidores" class="w-full h-52 object-cover" />
          <span class="absolute top-3 left-3 bg-[#0078ff] text-white text-xs font-semibold px-3 py-1 rounded-full shadow">
            SERVIDORES
          </span>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold text-gray-900 mb-3">Administración de Servidores</h3>
          <p class="text-gray-600 mb-5 text-sm">WHM/cPanel, DNS, SSL, mantenimiento profesional.</p>
          <a href="/servicios" class="text-primary font-semibold hover:underline">Leer más >></a>
        </div>
      </div>

      <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition-shadow overflow-hidden">
        <div class="relative">
          <img :src="devops" class="w-full h-52 object-cover" />
          <span class="absolute top-3 left-3 bg-[#6a00ff] text-white text-xs font-semibold px-3 py-1 rounded-full shadow">
            DEVOPS JR
          </span>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold text-gray-900 mb-3">DevOps Jr & Automatización</h3>
          <p class="text-gray-600 mb-5 text-sm">Pipelines, Git, despliegues controlados, CI/CD.</p>
          <a href="/servicios" class="text-primary font-semibold hover:underline">Leer más >></a>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================ -->
  <!--       TECH STACK TREE        -->
  <!-- ============================ -->

  <section
    class="relative w-full bg-white text-black py-5 overflow-hidden"
    ref="techStackRef"
  >
    <div class="relative z-10 max-w-5xl mx-auto text-center mb-20 px-4">
      <h2 class="text-4xl font-bold mb-3">Mi Tech Stack</h2>
      <p class="text-gray-600">
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

const sliderImages = [
  "/assets/slider/servers.jpg",
  "/assets/slider/code.jpg",
  "/assets/slider/devops.jpg",
]

const currentSlide = ref(0)

onMounted(() => {
  if (sliderImages.length) {
    setInterval(() => {
      currentSlide.value =
        (currentSlide.value + 1) % sliderImages.length
    }, 4000)
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
</style>
