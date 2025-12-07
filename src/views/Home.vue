<template>
    <section class="min-h-screen flex flex-col justify-center items-center text-center px-6 bg-gray-50">
  
      <!-- Hero Text -->
      <h1 class="text-5xl md:text-7xl font-title font-extrabold text-dark mb-6 leading-tight">
        Desarrollo Web Profesional <br />
        <span class="text-primary">Webcats.mx</span>
      </h1>
  
      <p class="text-lg md:text-xl text-dark/70 max-w-2xl mb-10">
        Sitios web modernos, rápidos y seguros. Hosting, optimización, paneles administrativos, y soluciones a la medida.
      </p>
  
      <!-- Botón principal -->
      <a
        href="/contacto"
        class="px-8 py-4 bg-primary text-white font-semibold rounded-xl shadow-md hover:bg-accent transition-all"
      >
        Cotizar mi proyecto 🚀
      </a>
  
      <!-- Imagen hero (opcional) -->
      <img
        :src="hero"
        alt="Desarrollo Web"
        class="w-full max-w-xl mt-16 opacity-90"
        v-if="true"
      />

      <section class="py-24 bg-white px-6">
  <h2 class="text-4xl font-title font-bold text-center text-dark mb-14">
    Servicios Webcats.mx
  </h2>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-10 max-w-6xl mx-auto">

    <!-- Servicio 1 -->
    <ServiceCard>
      <template #icon>💻</template>
      <template #title>Desarrollo Web Profesional</template>
      <template #description>
        Sitios modernos, rápidos y optimizados. Landing pages, e-commerce,
        paneles admin y sistemas a la medida.
      </template>
    </ServiceCard>

    <!-- Servicio 2 -->
    <ServiceCard>
      <template #icon>🛠️</template>
      <template #title>SysAdmin & Hosting</template>
      <template #description>
        Configuración de servidores, WHM/cPanel, DNS, SSL, correo empresarial,
        migraciones y seguridad.
      </template>
    </ServiceCard>

    <!-- Servicio 3 -->
    <ServiceCard>
      <template #icon>⚙️</template>
      <template #title>DevOps Jr</template>
      <template #description>
        Automatización, pipelines, optimización, entornos locales y productivos,
        control de versiones y despliegues.
      </template>
    </ServiceCard>

  </div>
</section>

  
    </section>
  </template>
  
  <script setup>
  import hero from "../assets/hero.png";
  import ServiceCard from "../components/ServiceCard.vue";
  </script>
  