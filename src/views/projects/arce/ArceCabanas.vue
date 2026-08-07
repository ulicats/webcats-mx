<template>
  <main class="arce-page">
    <AppHeader />
    <Hero />
    <Cabins />
    <Gallery />
    <Reviews />
    <FAQ />
    <Location />
    <Footer />
    <WhatsAppButton />
  </main>
</template>

<script setup>
import AppHeader from "../../../components/projects/arce/AppHeader.vue";
import Hero from "../../../components/projects/arce/Hero.vue";
import Cabins from "../../../components/projects/arce/Cabins.vue";
import Gallery from "../../../components/projects/arce/Gallery.vue";
import Reviews from "../../../components/projects/arce/Reviews.vue";
import FAQ from "../../../components/projects/arce/FAQ.vue";
import Location from "../../../components/projects/arce/Location.vue";
import Footer from "../../../components/projects/arce/Footer.vue";
import WhatsAppButton from "../../../components/projects/arce/WhatsAppButton.vue";
</script>

<style>
@import url("https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;1,500&family=Montserrat:wght@400;500;600;700&display=swap");

.arce-page {
  /* ========= PALETA ========= */
  --arce-navy-950: #13283a;
  --arce-navy-900: #193247;
  --arce-navy-800: #24445d;

  --arce-gold: #b59a3b;
  --arce-gold-light: #d2bb67;
  --arce-gold-soft: #e4d79f;

  --arce-cream: #f6f2e8;
  --arce-white: #ffffff;
  --arce-text: #172534;
  --arce-muted: #6f7880;

  /* ========= TIPOGRAFÍAS ========= */
  --arce-heading: "Cormorant Garamond", serif;
  --arce-body: "Montserrat", sans-serif;

  /* ========= GLOBALES ========= */
  min-height: 100vh;
  overflow-x: hidden;
  background: var(--arce-cream);
  color: var(--arce-text);
  font-family: var(--arce-body);
}

.arce-page *,
.arce-page *::before,
.arce-page *::after {
  box-sizing: border-box;
}

.arce-page h1,
.arce-page h2,
.arce-page h3,
.arce-page p {
  margin: 0;
}

.arce-page a {
  color: inherit;
  text-decoration: none;
}

.arce-page img {
  display: block;
  max-width: 100%;
}
</style>