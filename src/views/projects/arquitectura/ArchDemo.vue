<script setup>
import { ref, onMounted, onUnmounted } from "vue";

import ArchHeader from "../../../components/projects/arquitectura/ArchHeader.vue";
import ArchHero from "../../../components/projects/arquitectura/ArchHero.vue";
import ArchStudio from "../../../components/projects/arquitectura/ArchStudio.vue";
import ArchServices from "../../../components/projects/arquitectura/ArchServices.vue";
import ArchProjects from "../../../components/projects/arquitectura/ArchProjects.vue";
import ArchProcess from "../../../components/projects/arquitectura/ArchProcess.vue";
import ArchContact from "../../../components/projects/arquitectura/ArchContact.vue";
import ArchFloorIndicator from "../../../components/projects/arquitectura/ArchFloorIndicator.vue";
import ArchFooter from "../../../components/projects/arquitectura/ArchFooter.vue";

/* ==========================================
   BOTÓN VOLVER AL INICIO
========================================== */

const showBackToTop = ref(false);

const handleScroll = () => {
  // Aparece después de recorrer aproximadamente
  // el 80% de la primera pantalla.
  showBackToTop.value = window.scrollY > window.innerHeight * 0.8;
};

const backToTop = () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
};

onMounted(() => {
  window.addEventListener("scroll", handleScroll, {
    passive: true,
  });

  handleScroll();
});

onUnmounted(() => {
  window.removeEventListener("scroll", handleScroll);
});
</script>

<template>
  <div class="architecture-page">

    <!-- INDICADOR DEL RECORRIDO -->
    <ArchFloorIndicator />

    <!-- HEADER -->
    <ArchHeader />

    <!-- PLANO / CONTENIDO -->
    <main class="architecture-plan">

      <ArchHero />

      <ArchStudio />

      <ArchServices />

      <ArchProjects />

      <ArchProcess />

      <ArchContact />

    </main>

    <!-- FOOTER -->
    <ArchFooter />

    <!-- =====================================
         VOLVER AL INICIO
    ====================================== -->
    <Transition name="back-top">
      <button
        v-if="showBackToTop"
        class="back-to-top"
        type="button"
        aria-label="Volver al inicio"
        title="Volver al inicio"
        @click="backToTop"
      >
        <span class="back-arrow">↑</span>
        <span class="back-label">INICIO</span>
      </button>
    </Transition>

  </div>
</template>

<style scoped>

/* ==========================================
   PÁGINA
========================================== */

.architecture-page {
  width: 100%;
  min-height: 100vh;

  background: #f3f1eb;
  color: #151515;

  overflow-x: hidden;
}


/* ==========================================
   PLANO
========================================== */

.architecture-plan {
  position: relative;
  width: 100%;
}


/* ==========================================
   BOTÓN VOLVER AL INICIO
========================================== */

.back-to-top {
  position: fixed;

  right: 34px;
  bottom: 34px;

  z-index: 1000;

  width: 64px;
  height: 64px;

  display: flex;
  flex-direction: column;

  align-items: center;
  justify-content: center;

  gap: 3px;

  padding: 0;

  background: rgba(243, 241, 235, 0.94);
  color: #151515;

  border: 1px solid #151515;
  border-radius: 0;

  cursor: pointer;

  backdrop-filter: blur(6px);

  transition:
    background 0.25s ease,
    color 0.25s ease,
    transform 0.25s ease;
}


/* FLECHA */

.back-arrow {
  display: block;

  font-size: 25px;
  font-weight: 300;
  line-height: 1;

  transition: transform 0.25s ease;
}


/* TEXTO */

.back-label {
  display: block;

  margin-top: 3px;

  font-size: 6px;
  font-weight: 500;

  letter-spacing: 0.18em;
}


/* ==========================================
   HOVER
========================================== */

.back-to-top:hover {
  background: #151515;
  color: #f3f1eb;

  transform: translateY(-2px);
}

.back-to-top:hover .back-arrow {
  transform: translateY(-3px);
}


/* ==========================================
   ANIMACIÓN DE ENTRADA / SALIDA
========================================== */

.back-top-enter-active,
.back-top-leave-active {
  transition:
    opacity 0.3s ease,
    transform 0.3s ease;
}

.back-top-enter-from,
.back-top-leave-to {
  opacity: 0;
  transform: translateY(12px);
}


/* ==========================================
   TABLET
========================================== */

@media (max-width: 1024px) {

  .back-to-top {
    right: 24px;
    bottom: 24px;

    width: 58px;
    height: 58px;
  }

  .back-arrow {
    font-size: 23px;
  }

}


/* ==========================================
   CELULAR
========================================== */

@media (max-width: 768px) {

  .back-to-top {
    right: 16px;
    bottom: 16px;

    width: 52px;
    height: 52px;
  }

  .back-arrow {
    font-size: 21px;
  }

  .back-label {
    font-size: 5px;
  }

}

</style>