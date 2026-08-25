<template>
  <div class="gym-demo">
    <GymHeader />
    <GymHero />
    <GymBenefits />
    <GymFacilities />
    <GymGallery />
    <!--GymTraining /-->
    <GymTrainers />
    <GymPlans />
    <!--GymResults /-->
    <!--GymSchedule /-->
    <GymFAQ />
    <GymCTA />
    <GymLocation />
    <GymFooter />
    <GymWhatsApp />
  </div>
</template>

<script setup>
import GymHeader from "../../../components/projects/gym/GymHeader.vue";
import GymHero from "../../../components/projects/gym/GymHero.vue";
import GymBenefits from "../../../components/projects/gym/GymBenefits.vue";
import GymFacilities from "../../../components/projects/gym/GymFacilities.vue";
import GymGallery from "../../../components/projects/gym/GymGallery.vue";
import GymTraining from "../../../components/projects/gym/GymTraining.vue";
import GymTrainers from "../../../components/projects/gym/GymTrainers.vue";
import GymPlans from "../../../components/projects/gym/GymPlans.vue";
import GymResults from "../../../components/projects/gym/GymResults.vue";
import GymSchedule from "../../../components/projects/gym/GymSchedule.vue";
import GymFAQ from "../../../components/projects/gym/GymFAQ.vue";
import GymCTA from "../../../components/projects/gym/GymCTA.vue";
import GymLocation from "../../../components/projects/gym/GymLocation.vue";
import GymFooter from "../../../components/projects/gym/GymFooter.vue";
import GymWhatsApp from "../../../components/projects/gym/GymWhatsApp.vue";
</script>

<style>
.gym-demo {
  min-height: 100vh;
  background: #0a0a0a;
  color: #ffffff;
  overflow-x: hidden;
}
</style>