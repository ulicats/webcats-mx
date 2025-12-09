<template>
  <!-- BANNER PRINCIPAL -->
  <section
    class="relative min-h-screen flex flex-col justify-center items-center text-center px-6 bg-[#0d0d0f] text-white overflow-hidden"
  >
    <!-- SLIDER -->
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

    <!-- CONTENIDO -->
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
          Cotizar mi proyecto 🚀
        </a>

        <a
          href="/portafolio"
          class="px-8 py-4 bg-[#2a2a2a] border border-gray-600 text-white font-semibold rounded-xl hover:bg-[#3a3a3a] transition-all"
        >
          Ver portafolio 📁
        </a>
      </div>
    </div>
  </section>

  <!-- SERVICIOS -->
  <section class="bg-white py-24 px-6">
    <h2 class="text-4xl font-bold text-center text-gray-900 mb-4">
      Servicios Webcats.mx
    </h2>

    <p class="text-center text-gray-600 max-w-2xl mx-auto mb-12">
      Soluciones completas de diseño web, servidores, administración, seguridad y optimización.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 max-w-6xl mx-auto">

      <!-- TARJETA 1 -->
      <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition-shadow overflow-hidden">
        <div class="relative">
          <img :src="desarrollo" alt="Desarrollo Web" class="w-full h-52 object-cover" />
          <span class="absolute top-3 left-3 bg-[#ff8c00] text-white text-xs font-semibold px-3 py-1 rounded-full shadow">
            DESARROLLO WEB
          </span>
        </div>

        <div class="p-6">
          <h3 class="text-xl font-bold text-gray-900 mb-3">Desarrollo Web Profesional</h3>
          <p class="text-gray-600 mb-5 text-sm leading-relaxed">
            Sitios modernos, rápidos y optimizados. Paneles admin, tiendas, sistemas internos y landing pages de alto nivel.
          </p>
          <a href="/servicios" class="text-primary font-semibold hover:underline">
            Leer más >>
          </a>
        </div>
      </div>

      <!-- TARJETA 2 -->
      <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition-shadow overflow-hidden">
        <div class="relative">
          <img :src="servidores" alt="Administración de Servidores" class="w-full h-52 object-cover" />
          <span class="absolute top-3 left-3 bg-[#0078ff] text-white text-xs font-semibold px-3 py-1 rounded-full shadow">
            SERVIDORES
          </span>
        </div>

        <div class="p-6">
          <h3 class="text-xl font-bold text-gray-900 mb-3">Administración de Servidores</h3>
          <p class="text-gray-600 mb-5 text-sm leading-relaxed">
            WHM/cPanel, DNS, SSL, cuentas de correo, optimización, seguridad y mantenimiento profesional 24/7.
          </p>
          <a href="/servicios" class="text-primary font-semibold hover:underline">
            Leer más >>
          </a>
        </div>
      </div>

      <!-- TARJETA 3 -->
      <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition-shadow overflow-hidden">
        <div class="relative">
          <img :src="devops" alt="DevOps Jr" class="w-full h-52 object-cover" />
          <span class="absolute top-3 left-3 bg-[#6a00ff] text-white text-xs font-semibold px-3 py-1 rounded-full shadow">
            DEVOPS JR
          </span>
        </div>

        <div class="p-6">
          <h3 class="text-xl font-bold text-gray-900 mb-3">DevOps Jr & Automatización</h3>
          <p class="text-gray-600 mb-5 text-sm leading-relaxed">
            Pipelines, Git, entornos controlados, despliegues sin errores, automatización de tareas y flujos escalables.
          </p>
          <a href="/servicios" class="text-primary font-semibold hover:underline">
            Leer más >>
          </a>
        </div>
      </div>

    </div>
  </section>

  

  <!-- SECCIÓN QUIÉN SOY (con animación scroll) -->
  <section 
    class="relative w-full min-h-[70vh] text-white py-24 px-6 overflow-hidden"
    ref="quienSoyRef"
  >
    <!-- Fondo -->
    <div 
      class="absolute inset-0 bg-cover bg-left opacity-40"
      style="background-image: url('/assets/webcats/fondo-tech.webp');"
    ></div>

    <!-- Overlay -->
    <div class="absolute inset-0 bg-gradient-to-r from-[#0d0d0f]/95 to-[#0d0d0f]/70"></div>

    <!-- Contenido animado -->
    <div 
      :class="[
        'relative max-w-5xl mx-auto text-center transition-all duration-[900ms] ease-out',
        quienSoyVisible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'
      ]"
    >
      <h2 class="text-4xl font-bold mb-6">¿Quién soy?</h2>

      <p class="text-lg leading-relaxed text-gray-300 mb-6">
        👋 <strong>Hola, soy Ulises Guzmán</strong>, SysAdmin y Desarrollador Web con más de 
        <strong>7 años de experiencia</strong> trabajando con servidores Linux, WHM/cPanel, PHP,
        MySQL, DNS y SMTP.
      </p>

      <p class="text-lg leading-relaxed text-gray-300 mb-6">
        Fundé <strong>Webcats.mx</strong> para crear sitios rápidos, seguros y listos para producción,
        combinando desarrollo y administración de servidores.
      </p>

      <p class="text-lg leading-relaxed text-gray-300 mb-6">
        Actualmente me especializo en <strong>DevOps Jr</strong>, integrando Docker, CI/CD y automatización.
      </p>

      <p class="text-lg leading-relaxed text-gray-300">
        Si buscas a alguien que domine tanto el código como los servidores,
        <strong>aquí estoy para ayudarte</strong>.
      </p>
    </div>
  </section>
</template>

<script setup>
  import desarrollo from "@/assets/webcats/desarrollo-web.webp"
  import servidores from "@/assets/webcats/servidores.webp"
  import devops from "@/assets/webcats/devops.webp"
  
  import { ref, onMounted } from "vue"
  
  const sliderImages = [
    "/assets/slider/servers.jpg",
    "/assets/slider/code.jpg",
    "/assets/slider/devops.jpg",
  ]
  
  const currentSlide = ref(0)
  
  onMounted(() => {
    if (sliderImages.length) {
      setInterval(() => {
        currentSlide.value = (currentSlide.value + 1) % sliderImages.length
      }, 4000)
    }
  })
  
  /* =============================
     ANIMACIÓN SCROLL – QUIÉN SOY (REPETIBLE)
    ============================= */
const quienSoyRef = ref(null)
const quienSoyVisible = ref(false)

onMounted(() => {
  const observer = new IntersectionObserver(
    (entries) => {
      const entry = entries[0]

      if (entry.isIntersecting) {
        // Activa animación
        quienSoyVisible.value = true
      } else {
        // Resetea animación al salir
        quienSoyVisible.value = false
      }
    },
    { threshold: 0.4 } // Ajusta sensibilidad
  )

  if (quienSoyRef.value) {
    observer.observe(quienSoyRef.value)
  }
})

  </script>
    
<style>
.fade-enter-active,
.fade-leave-active {
  transition: opacity 1.5s ease;
}
.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}

@keyframes fadeUp {
  0% { opacity: 0; transform: translateY(25px); }
  100% { opacity: 1; transform: translateY(0); }
}
.animate-fade-up {
  animation: fadeUp 0.9s ease-out forwards;
}
</style>
