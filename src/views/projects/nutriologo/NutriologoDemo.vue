<script setup>
import NutriHeader from "../../../components/projects/nutriologo/NutriHeader.vue";
import NutriHero from "../../../components/projects/nutriologo/NutriHero.vue";
import NutriAbout from "../../../components/projects/nutriologo/NutriAbout.vue";
import NutriServices from "../../../components/projects/nutriologo/NutriServices.vue";
import NutriProcess from "../../../components/projects/nutriologo/NutriProcess.vue";
import NutriResults from "../../../components/projects/nutriologo/NutriResults.vue";
import NutriTestimonials from "../../../components/projects/nutriologo/NutriTestimonials.vue";
import NutriFAQ from "../../../components/projects/nutriologo/NutriFAQ.vue";
import NutriBooking from "../../../components/projects/nutriologo/NutriBooking.vue";
import NutriFooter from "../../../components/projects/nutriologo/NutriFooter.vue";
import NutriWhatsApp from "../../../components/projects/nutriologo/NutriWhatsApp.vue";
</script>

<template>
  <div class="nutriologo-demo">
    <NutriHeader />

    <main>
      <NutriHero />
      <NutriAbout />
      <NutriServices />
      <NutriProcess />
      <NutriResults />
      <NutriTestimonials />
      <NutriFAQ />
      <NutriBooking />
    </main>

    <NutriFooter />
    <NutriWhatsApp />
  </div>
</template>

<style>
@import url('https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Manrope:wght@400;500;600;700&display=swap');
.nutriologo-demo {
  --nutri-bg: #f7f7f2;
  --nutri-primary: #24483a;
  --nutri-secondary: #86a789;
  --nutri-soft: #dce5dc;
  --nutri-white: #ffffff;

  --nutri-text: #26332e;
  --nutri-text-soft: #68756f;
  --nutri-border: #d9e1da;

  --nutri-font-body: "Manrope", sans-serif;
  --nutri-font-title: "DM Serif Display", serif;

  min-height: 100vh;
  background: var(--nutri-bg);
  color: var(--nutri-text);

  font-family: var(--nutri-font-body);
}

.nutriologo-demo h1,
.nutriologo-demo h2,
.nutriologo-demo h3 {
  font-family: var(--nutri-font-title);
  font-weight: 400;
}

.nutriologo-demo button,
.nutriologo-demo input,
.nutriologo-demo select,
.nutriologo-demo textarea {
  font-family: var(--nutri-font-body);
}
</style>