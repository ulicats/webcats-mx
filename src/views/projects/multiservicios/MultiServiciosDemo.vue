<template>
  <div class="multiservicios-page">

    <MultiHeader />

    <main>
      <MultiHero />
      <MultiTrust />
      <MultiServices />
      <MultiWhyUs />
      <MultiEmergency />
      <MultiProjects />
      <MultiProcess />
      <MultiServiceAreas />
      <MultiReviews />
      <MultiFAQ />
      <MultiCTA />
    </main>

    <MultiFooter />

    <MultiWhatsApp />

  </div>
</template>

<script setup>
import MultiHeader from '../../../components/projects/multiservicios/MultiHeader.vue'
import MultiHero from '../../../components/projects/multiservicios/MultiHero.vue'
import MultiTrust from '../../../components/projects/multiservicios/MultiTrust.vue'
import MultiServices from '../../../components/projects/multiservicios/MultiServices.vue'
import MultiWhyUs from '../../../components/projects/multiservicios/MultiWhyUs.vue'
import MultiEmergency from '../../../components/projects/multiservicios/MultiEmergency.vue'
import MultiProjects from '../../../components/projects/multiservicios/MultiProjects.vue'
import MultiProcess from '../../../components/projects/multiservicios/MultiProcess.vue'
import MultiServiceAreas from '../../../components/projects/multiservicios/MultiServiceAreas.vue'
import MultiReviews from '../../../components/projects/multiservicios/MultiReviews.vue'
import MultiFAQ from '../../../components/projects/multiservicios/MultiFAQ.vue'
import MultiCTA from '../../../components/projects/multiservicios/MultiCTA.vue'
import MultiFooter from '../../../components/projects/multiservicios/MultiFooter.vue'
import MultiWhatsApp from '../../../components/projects/multiservicios/MultiWhatsApp.vue'
</script>

<style scoped>
.multiservicios-page {
  width: 100%;
  min-height: 100vh;
  overflow-x: hidden;
}
</style>