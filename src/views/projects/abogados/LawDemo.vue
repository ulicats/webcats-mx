<template>
  <div class="law-demo">

    <LawHeader />
    <LawHero />
    <LawTrust />
    <LawAbout />
    <LawPracticeAreas />
    <LawProblems />
    <LawProcess />
    <LawTeam />
    <LawWhyUs />
    <LawCaseForm />
    <LawFAQ />
    <LawCTA />
    <LawContact />
    <LawFooter />
    <LawWhatsApp />

  </div>
</template>

<script setup>
import LawHeader from "../../../components/projects/abogados/LawHeader.vue";
import LawHero from "../../../components/projects/abogados/LawHero.vue";
import LawTrust from "../../../components/projects/abogados/LawTrust.vue";
import LawAbout from "../../../components/projects/abogados/LawAbout.vue";
import LawPracticeAreas from "../../../components/projects/abogados/LawPracticeAreas.vue";
import LawProblems from "../../../components/projects/abogados/LawProblems.vue";
import LawProcess from "../../../components/projects/abogados/LawProcess.vue";
import LawTeam from "../../../components/projects/abogados/LawTeam.vue";
import LawWhyUs from "../../../components/projects/abogados/LawWhyUs.vue";
import LawCaseForm from "../../../components/projects/abogados/LawCaseForm.vue";
import LawFAQ from "../../../components/projects/abogados/LawFAQ.vue";
import LawCTA from "../../../components/projects/abogados/LawCTA.vue";
import LawContact from "../../../components/projects/abogados/LawContact.vue";
import LawFooter from "../../../components/projects/abogados/LawFooter.vue";
import LawWhatsApp from "../../../components/projects/abogados/LawWhatsApp.vue";
</script>

<style>
/* =========================================================
   DESPACHO JURÍDICO
   ESTILOS GLOBALES
========================================================= */

.law-demo {
  /* COLORES PRINCIPALES */
  --law-bg: #f4f0e8;
  --law-paper: #fffdf8;

  --law-primary: #172335;
  --law-primary-soft: #26374c;

  --law-gold: #9a7a4f;
  --law-gold-soft: #c7b28f;

  --law-text: #1d2733;
  --law-text-soft: #6f6a62;

  --law-border: #d9cdb9;
  --law-border-dark: #b9a78b;

  --law-white: #ffffff;
  --law-black: #111111;

  /* SOMBRAS */
  --law-shadow-sm: 0 8px 20px rgba(23, 35, 53, 0.06);
  --law-shadow-md: 0 18px 40px rgba(23, 35, 53, 0.08);
  --law-shadow-lg: 0 30px 70px rgba(23, 35, 53, 0.10);

  /* BORDES */
  --law-radius-sm: 4px;
  --law-radius-md: 8px;
  --law-radius-lg: 14px;

  /* ANCHOS */
  --law-container: 1200px;

  /* TRANSICIONES */
  --law-transition: 0.3s ease;

  min-height: 100vh;

  background:
    linear-gradient(
      rgba(255, 253, 248, 0.94),
      rgba(255, 253, 248, 0.94)
    ),
    repeating-linear-gradient(
      0deg,
      rgba(23, 35, 53, 0.012) 0px,
      rgba(23, 35, 53, 0.012) 1px,
      transparent 1px,
      transparent 4px
    );

  color: var(--law-text);

  font-family:
    Georgia,
    "Times New Roman",
    serif;

  overflow-x: hidden;
}

/* =========================================================
   RESET INTERNO
========================================================= */

.law-demo *,
.law-demo *::before,
.law-demo *::after {
  box-sizing: border-box;
}

.law-demo h1,
.law-demo h2,
.law-demo h3,
.law-demo h4,
.law-demo h5,
.law-demo h6,
.law-demo p {
  margin-top: 0;
}

.law-demo img {
  max-width: 100%;
}

.law-demo button,
.law-demo input,
.law-demo textarea,
.law-demo select {
  font: inherit;
}

.law-demo button,
.law-demo a {
  -webkit-tap-highlight-color: transparent;
}

/* =========================================================
   TIPOGRAFÍA
========================================================= */

.law-demo h1,
.law-demo h2,
.law-demo h3,
.law-demo h4 {
  font-family:
    "Cormorant Garamond",
    Georgia,
    "Times New Roman",
    serif;

  color: var(--law-primary);

  font-weight: 600;
}

.law-demo p,
.law-demo li,
.law-demo input,
.law-demo textarea,
.law-demo select,
.law-demo button {
  font-family:
    "Inter",
    Arial,
    sans-serif;
}

/* =========================================================
   CONTENEDOR GENERAL
========================================================= */

.law-container {
  width: min(
    var(--law-container),
    calc(100% - 40px)
  );

  margin: 0 auto;
}

/* =========================================================
   SECCIONES
========================================================= */

.law-section {
  position: relative;

  padding: 110px 0;
}

.law-section--paper {
  background: var(--law-paper);
}

.law-section--soft {
  background: var(--law-bg);
}

.law-section--dark {
  background: var(--law-primary);
  color: var(--law-white);
}

/* =========================================================
   EYEBROW / ETIQUETA PEQUEÑA
========================================================= */

.law-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 12px;

  margin-bottom: 18px;

  color: var(--law-gold);

  font-family:
    "Inter",
    Arial,
    sans-serif;

  font-size: 11px;
  font-weight: 700;

  letter-spacing: 2px;
  text-transform: uppercase;
}

.law-eyebrow::before {
  content: "";

  width: 30px;
  height: 1px;

  background: var(--law-gold);
}

/* =========================================================
   TÍTULOS
========================================================= */

.law-title {
  max-width: 800px;

  margin-bottom: 25px;

  font-size: clamp(40px, 5vw, 68px);
  line-height: 1;

  letter-spacing: -1.5px;
}

.law-title--center {
  margin-left: auto;
  margin-right: auto;

  text-align: center;
}

.law-subtitle {
  max-width: 650px;

  color: var(--law-text-soft);

  font-family:
    "Inter",
    Arial,
    sans-serif;

  font-size: 16px;
  line-height: 1.8;
}

.law-subtitle--center {
  margin-left: auto;
  margin-right: auto;

  text-align: center;
}

/* =========================================================
   BOTONES
========================================================= */

.law-button {
  min-height: 50px;

  display: inline-flex;
  align-items: center;
  justify-content: center;

  gap: 10px;

  padding: 0 24px;

  border: 1px solid var(--law-primary);

  background: var(--law-primary);
  color: var(--law-white);

  text-decoration: none;

  font-family:
    "Inter",
    Arial,
    sans-serif;

  font-size: 12px;
  font-weight: 700;

  letter-spacing: 0.8px;
  text-transform: uppercase;

  cursor: pointer;

  transition:
    background var(--law-transition),
    color var(--law-transition),
    border-color var(--law-transition),
    transform var(--law-transition);
}

.law-button:hover {
  background: var(--law-primary-soft);

  transform: translateY(-2px);
}

.law-button--outline {
  background: transparent;
  color: var(--law-primary);

  border-color: var(--law-gold);
}

.law-button--outline:hover {
  background: var(--law-gold);
  color: var(--law-white);
}

/* =========================================================
   DIVISORES TIPO CONTRATO
========================================================= */

.law-divider {
  width: 100%;

  display: flex;
  align-items: center;

  gap: 16px;

  margin: 35px 0;
}

.law-divider::before,
.law-divider::after {
  content: "";

  flex: 1;

  height: 1px;

  background: var(--law-border);
}

.law-divider span {
  width: 8px;
  height: 8px;

  border: 1px solid var(--law-gold);

  transform: rotate(45deg);
}

/* =========================================================
   TARJETAS
========================================================= */

.law-card {
  position: relative;

  padding: 30px;

  background: var(--law-paper);

  border: 1px solid var(--law-border);

  box-shadow: var(--law-shadow-sm);

  transition:
    transform var(--law-transition),
    box-shadow var(--law-transition),
    border-color var(--law-transition);
}

.law-card:hover {
  transform: translateY(-4px);

  border-color: var(--law-gold-soft);

  box-shadow: var(--law-shadow-md);
}

/* =========================================================
   DETALLE DECORATIVO ESQUINAS
========================================================= */

.law-contract-frame {
  position: relative;

  border: 1px solid var(--law-border-dark);
}

.law-contract-frame::before,
.law-contract-frame::after {
  content: "";

  position: absolute;

  width: 18px;
  height: 18px;

  pointer-events: none;
}

.law-contract-frame::before {
  top: 7px;
  left: 7px;

  border-top: 1px solid var(--law-gold);
  border-left: 1px solid var(--law-gold);
}

.law-contract-frame::after {
  right: 7px;
  bottom: 7px;

  border-right: 1px solid var(--law-gold);
  border-bottom: 1px solid var(--law-gold);
}

/* =========================================================
   NÚMEROS GRANDES
========================================================= */

.law-number {
  color: var(--law-primary);

  font-family:
    "Cormorant Garamond",
    Georgia,
    serif;

  font-size: 52px;
  font-weight: 600;

  line-height: 1;
}

/* =========================================================
   FORMULARIOS
========================================================= */

.law-field {
  display: flex;
  flex-direction: column;

  gap: 8px;
}

.law-field label {
  color: var(--law-primary);

  font-family:
    "Inter",
    Arial,
    sans-serif;

  font-size: 11px;
  font-weight: 700;

  letter-spacing: 1px;
  text-transform: uppercase;
}

.law-field input,
.law-field textarea,
.law-field select {
  width: 100%;

  border: 0;
  border-bottom: 1px solid var(--law-border-dark);

  background: transparent;

  padding: 14px 2px;

  color: var(--law-text);

  outline: none;

  transition:
    border-color var(--law-transition);
}

.law-field input:focus,
.law-field textarea:focus,
.law-field select:focus {
  border-color: var(--law-gold);
}

.law-field textarea {
  min-height: 140px;

  resize: vertical;
}

/* =========================================================
   SELECCIÓN DE TEXTO
========================================================= */

.law-demo ::selection {
  background: var(--law-primary);
  color: var(--law-white);
}

/* =========================================================
   SCROLLBAR
========================================================= */

.law-demo::-webkit-scrollbar {
  width: 10px;
}

.law-demo::-webkit-scrollbar-track {
  background: var(--law-bg);
}

.law-demo::-webkit-scrollbar-thumb {
  background: var(--law-border-dark);
}

/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 950px) {
  .law-section {
    padding: 90px 0;
  }

  .law-title {
    font-size: clamp(38px, 8vw, 58px);
  }
}

@media (max-width: 700px) {
  .law-container {
    width: calc(100% - 28px);
  }

  .law-section {
    padding: 75px 0;
  }

  .law-title {
    font-size: clamp(36px, 10vw, 50px);

    letter-spacing: -1px;
  }

  .law-subtitle {
    font-size: 15px;
  }

  .law-button {
    min-height: 48px;

    padding: 0 18px;
  }
}

@media (max-width: 480px) {
  .law-section {
    padding: 65px 0;
  }

  .law-title {
    font-size: 38px;
  }
}
</style>