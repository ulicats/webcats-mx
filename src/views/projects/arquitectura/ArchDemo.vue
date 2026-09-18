<script setup>
import ArchHeader from "../../../components/projects/arquitectura/ArchHeader.vue";
import ArchHero from "../../../components/projects/arquitectura/ArchHero.vue";
import ArchStudio from "../../../components/projects/arquitectura/ArchStudio.vue";
import ArchServices from "../../../components/projects/arquitectura/ArchServices.vue";
import ArchProjects from "../../../components/projects/arquitectura/ArchProjects.vue";
import ArchProcess from "../../../components/projects/arquitectura/ArchProcess.vue";
import ArchContact from "../../../components/projects/arquitectura/ArchContact.vue";
import ArchFloorIndicator from "../../../components/projects/arquitectura/ArchFloorIndicator.vue";
import ArchFooter from "../../../components/projects/arquitectura/ArchFooter.vue";
</script>

<template>
  <div class="architecture-page">

    <ArchFloorIndicator />
    <ArchHeader />

    <main class="architecture-plan">
      <ArchHero />
      <ArchStudio />
      <ArchServices />
      <ArchProjects />
      <ArchProcess />
      <ArchContact />

    </main>
    <ArchFooter />

  </div>
</template>

<style scoped>
.architecture-page {
  min-height: 100vh;
  background: #f3f1eb;
  color: #151515;
}

.architecture-plan {
  position: relative;
}
</style>