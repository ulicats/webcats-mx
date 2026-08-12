<script setup>
import AppHeader from '../../../components/projects/vidrios-aluminio/AppHeader.vue'
import Hero from '../../../components/projects/vidrios-aluminio/Hero.vue'

// Conforme los vayamos creando:
//
import Services from '../../../components/projects/vidrios-aluminio/Services.vue'
import About from '../../../components/projects/vidrios-aluminio/About.vue'
import Projects from '../../../components/projects/vidrios-aluminio/Projects.vue'
//import BeforeAfter from '../../../components/projects/vidrios-aluminio/BeforeAfter.vue'
import Process from '../../../components/projects/vidrios-aluminio/Process.vue'
import Materials from '../../../components/projects/vidrios-aluminio/Materials.vue'
import WhyUs from '../../../components/projects/vidrios-aluminio/WhyUs.vue'
import QuoteCalculator from '../../../components/projects/vidrios-aluminio/QuoteCalculator.vue'
import Coverage from '../../../components/projects/vidrios-aluminio/Coverage.vue'
import Reviews from '../../../components/projects/vidrios-aluminio/Reviews.vue'
import FAQ from '../../../components/projects/vidrios-aluminio/FAQ.vue'
import CTA from '../../../components/projects/vidrios-aluminio/CTA.vue'
import Footer from '../../../components/projects/vidrios-aluminio/Footer.vue'
// import WhatsAppButton from '../../../components/projects/vidrios-aluminio/WhatsAppButton.vue'
</script>

<template>
  <div class="vidrios-aluminio-demo">
    <AppHeader />

    <main>
      <Hero />
      <Services />
      <About />
      <Projects />
      <!--BeforeAfter /-->
      <Process />
      <WhyUs />
      <Materials />
      <QuoteCalculator />
      <Coverage />
      <Reviews />
      <FAQ />
      <CTA />
     
    </main>

    
    <Footer />
    <!--
    <WhatsAppButton />
    -->
  </div>
</template>

<style scoped>
.vidrios-aluminio-demo {
  width: 100%;
  min-height: 100vh;
  overflow-x: hidden;
}
</style>