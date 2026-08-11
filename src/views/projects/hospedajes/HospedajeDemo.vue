<template>
  <main class="hospedaje-page">
    <AppHeader />
    <Hero />
    <Cabins />
    <Gallery />
    <Reviews />
    <FAQ />
    <Booking />
    <Location />
    <Footer />
    <WhatsAppButton />
  </main>
</template>

<script setup>
import AppHeader from "../../../components/projects/hospedajes/AppHeader.vue";
import Hero from "../../../components/projects/hospedajes/Hero.vue";
import Cabins from "../../../components/projects/hospedajes/Cabins.vue";
import Gallery from "../../../components/projects/hospedajes/Gallery.vue";
import Reviews from "../../../components/projects/hospedajes/Reviews.vue";
import FAQ from "../../../components/projects/hospedajes/FAQ.vue";
import Booking from "../../../components/projects/hospedajes/Booking.vue";
import Location from "../../../components/projects/hospedajes/Location.vue";
import Footer from "../../../components/projects/hospedajes/Footer.vue";
import WhatsAppButton from "../../../components/projects/hospedajes/WhatsAppButton.vue";
</script>

<style>
@import url("https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;1,500&family=Montserrat:wght@400;500;600;700&display=swap");

html {
  scroll-behavior: smooth;
}

.hospedaje-page {
/* ========= PALETA ========= */

--hospedaje-navy: #30382F;
--hospedaje-navy-950: #242A23;
--hospedaje-navy-900: #30382F;
--hospedaje-navy-800: #3D493B;

--hospedaje-gold: #C5A13A;
--hospedaje-gold-light: #D2BB67;
--hospedaje-gold-soft: #E4D79F;

--hospedaje-cream: #F5F0E6;
--hospedaje-white: #FFFFFF;

--hospedaje-text: #263027;
--hospedaje-muted: #737A70;

  /* ========= TIPOGRAFÍAS ========= */
  --hospedaje-heading: "Cormorant Garamond", serif;
  --hospedaje-body: "Montserrat", sans-serif;

  /* ========= GLOBALES ========= */
  min-height: 100vh;
  overflow-x: hidden;
  background: var(--hospedaje-cream);
  color: var(--hospedaje-text);
  font-family: var(--hospedaje-body);
}

.hospedaje-page *,
.hospedaje-page *::before,
.hospedaje-page *::after {
  box-sizing: border-box;
}

.hospedaje-page h1,
.hospedaje-page h2,
.hospedaje-page h3,
.hospedaje-page p {
  margin: 0;
}

.hospedaje-page a {
  color: inherit;
  text-decoration: none;
}

.hospedaje-page img {
  display: block;
  max-width: 100%;
}
</style>