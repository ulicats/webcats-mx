<template>
  <div class="tepic-page">

    <!-- HEADER -->
    <TepicHeader />

    <!-- CONTENIDO PRINCIPAL -->
    <main>

      <!-- 1. HERO -->
      <TepicHero />

      <!-- 2. CONFIANZA / INTRO -->
      <TepicTrust />

      <!-- 3. SERVICIOS -->
      <TepicServices />

      <!-- 4. POR QUÉ WEBCATS -->
      <TepicWhyUs />

      <!-- 5. PORTAFOLIO -->
      <TepicPortfolio />

      <!-- 6. PROCESO DE TRABAJO -->
      <TepicProcess />

      <!-- 7. TIPOS DE NEGOCIO -->
      <TepicBusinessTypes />

      <!-- 8. CONTENIDO SEO -->
      <TepicSEOContent />

      <!-- 9. PRESENCIA LOCAL EN TEPIC -->
      <TepicLocal />

      <!-- 10. PREGUNTAS FRECUENTES -->
      <TepicFAQ />

      <!-- 11. CTA FINAL -->
      <TepicCTA />

    </main>

    <!-- FOOTER -->
    <TepicFooter />

    <!-- BOTÓN FLOTANTE -->
    <TepicWhatsApp />

  </div>
</template>

<script setup>
import TepicHeader from '../../../components/projects/tepic/TepicHeader.vue'
import TepicHero from '../../../components/projects/tepic/TepicHero.vue'
import TepicTrust from '../../../components/projects/tepic/TepicTrust.vue'
import TepicServices from '../../../components/projects/tepic/TepicServices.vue'
import TepicWhyUs from '../../../components/projects/tepic/TepicWhyUs.vue'
import TepicPortfolio from '../../../components/projects/tepic/TepicPortafolio.vue'
import TepicProcess from '../../../components/projects/tepic/TepicProcess.vue'
import TepicBusinessTypes from '../../../components/projects/tepic/TepicBussinessTypes.vue'
import TepicSEOContent from '../../../components/projects/tepic/TepicSEOContent.vue'
import TepicLocal from '../../../components/projects/tepic/TepicLocal.vue'
import TepicFAQ from '../../../components/projects/tepic/TepicFAQ.vue'
import TepicCTA from '../../../components/projects/tepic/TepicCTA.vue'
import TepicFooter from '../../../components/projects/tepic/TepicFooter.vue'
import TepicWhatsApp from '../../../components/projects/tepic/TepicWhatsApp.vue'
</script>

<style scoped>
.tepic-page {
  width: 100%;
  min-height: 100vh;
}
</style>