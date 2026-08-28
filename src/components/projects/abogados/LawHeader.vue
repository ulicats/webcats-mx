<template>
  <header class="law-header">
    <div class="law-container law-header__container">

      <!-- LOGO -->
      <a href="#inicio" class="law-header__brand">
        <div class="law-header__seal">
          ⚖
        </div>

        <div class="law-header__brand-text">
          <strong>LEX & JUSTICIA</strong>
          <span>DESPACHO JURÍDICO</span>
        </div>
      </a>

      <!-- NAVEGACIÓN DESKTOP -->
      <nav class="law-header__nav">
        <a href="#inicio">Inicio</a>
        <a href="#despacho">El despacho</a>
        <a href="#areas">Áreas de práctica</a>
        <a href="#abogados">Abogados</a>
        <a href="#faq">Preguntas frecuentes</a>
        <a href="#contacto">Contacto</a>
      </nav>

      <!-- CTA -->
      <a href="#consulta" class="law-header__cta">
        Solicitar consulta
      </a>

      <!-- BOTÓN MOBILE -->
      <button
        class="law-header__menu-button"
        type="button"
        aria-label="Abrir menú"
        @click="menuOpen = !menuOpen"
      >
        <span></span>
        <span></span>
        <span></span>
      </button>

    </div>

    <!-- MENÚ MOBILE -->
    <Transition name="law-menu">
      <nav
        v-if="menuOpen"
        class="law-header__mobile-nav"
      >
        <a href="#inicio" @click="closeMenu">Inicio</a>
        <a href="#despacho" @click="closeMenu">El despacho</a>
        <a href="#areas" @click="closeMenu">Áreas de práctica</a>
        <a href="#abogados" @click="closeMenu">Abogados</a>
        <a href="#faq" @click="closeMenu">Preguntas frecuentes</a>
        <a href="#contacto" @click="closeMenu">Contacto</a>

        <a
          href="#consulta"
          class="law-header__mobile-cta"
          @click="closeMenu"
        >
          Solicitar consulta
        </a>
      </nav>
    </Transition>

    <div class="law-header__line">
      <span></span>
    </div>
  </header>
</template>

<script setup>
import { ref } from "vue";

const menuOpen = ref(false);

const closeMenu = () => {
  menuOpen.value = false;
};
</script>

<style scoped>
.law-header {
  position: relative;
  z-index: 100;

  background: rgba(255, 253, 248, 0.97);

  border-bottom: 1px solid var(--law-border);
}

.law-header__container {
  min-height: 88px;

  display: flex;
  align-items: center;

  gap: 35px;
}

/* =========================================================
   MARCA
========================================================= */

.law-header__brand {
  flex-shrink: 0;

  display: flex;
  align-items: center;

  gap: 13px;

  color: var(--law-primary);

  text-decoration: none;
}

.law-header__seal {
  width: 46px;
  height: 46px;

  display: flex;
  align-items: center;
  justify-content: center;

  border: 1px solid var(--law-gold);

  border-radius: 50%;

  color: var(--law-gold);

  font-family: Georgia, serif;

  font-size: 21px;
}

.law-header__brand-text {
  display: flex;
  flex-direction: column;
}

.law-header__brand-text strong {
  font-family:
    "Cormorant Garamond",
    Georgia,
    serif;

  font-size: 20px;
  font-weight: 600;

  letter-spacing: 1px;

  line-height: 1;
}

.law-header__brand-text span {
  margin-top: 5px;

  color: var(--law-text-soft);

  font-family: "Inter", Arial, sans-serif;

  font-size: 8px;
  font-weight: 600;

  letter-spacing: 2px;
}

/* =========================================================
   NAVEGACIÓN
========================================================= */

.law-header__nav {
  flex: 1;

  display: flex;
  align-items: center;
  justify-content: center;

  gap: clamp(18px, 2vw, 34px);
}

.law-header__nav a {
  position: relative;

  padding: 34px 0;

  color: var(--law-primary);

  font-family: "Inter", Arial, sans-serif;

  font-size: 10px;
  font-weight: 700;

  letter-spacing: 0.7px;
  text-transform: uppercase;

  text-decoration: none;
}

.law-header__nav a::after {
  content: "";

  position: absolute;

  left: 0;
  bottom: 26px;

  width: 0;
  height: 1px;

  background: var(--law-gold);

  transition: width var(--law-transition);
}

.law-header__nav a:hover::after {
  width: 100%;
}

/* =========================================================
   CTA
========================================================= */

.law-header__cta {
  flex-shrink: 0;

  min-height: 40px;

  display: inline-flex;
  align-items: center;
  justify-content: center;

  padding: 0 18px;

  border: 1px solid var(--law-gold);

  color: var(--law-primary);

  font-family: "Inter", Arial, sans-serif;

  font-size: 9px;
  font-weight: 700;

  letter-spacing: 0.8px;
  text-transform: uppercase;

  text-decoration: none;

  transition:
    background var(--law-transition),
    color var(--law-transition);
}

.law-header__cta:hover {
  background: var(--law-primary);
  color: var(--law-white);
}

/* =========================================================
   LÍNEA DECORATIVA
========================================================= */

.law-header__line {
  position: absolute;

  left: 0;
  bottom: -5px;

  width: 100%;

  display: flex;
  align-items: center;
  justify-content: center;

  pointer-events: none;
}

.law-header__line span {
  width: 8px;
  height: 8px;

  background: var(--law-paper);

  border: 1px solid var(--law-gold);

  transform: rotate(45deg);
}

/* =========================================================
   MOBILE
========================================================= */

.law-header__menu-button {
  display: none;

  width: 42px;
  height: 42px;

  margin-left: auto;

  border: 1px solid var(--law-border);

  background: transparent;

  cursor: pointer;
}

.law-header__menu-button span {
  width: 18px;
  height: 1px;

  display: block;

  margin: 5px auto;

  background: var(--law-primary);
}

.law-header__mobile-nav {
  display: none;
}

/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 1050px) {
  .law-header__nav {
    display: none;
  }

  .law-header__cta {
    margin-left: auto;
  }

  .law-header__menu-button {
    display: block;

    margin-left: 0;
  }

  .law-header__mobile-nav {
    position: absolute;

    top: 100%;
    left: 0;

    width: 100%;

    display: flex;
    flex-direction: column;

    padding: 20px 30px 30px;

    background: var(--law-paper);

    border-bottom: 1px solid var(--law-border);

    box-shadow: var(--law-shadow-md);
  }

  .law-header__mobile-nav a {
    padding: 15px 0;

    border-bottom: 1px solid var(--law-border);

    color: var(--law-primary);

    font-family: "Inter", Arial, sans-serif;

    font-size: 11px;
    font-weight: 700;

    letter-spacing: 1px;
    text-transform: uppercase;

    text-decoration: none;
  }

  .law-header__mobile-cta {
    margin-top: 20px;

    text-align: center;

    border: 1px solid var(--law-gold) !important;
  }
}

@media (max-width: 600px) {
  .law-header__container {
    min-height: 74px;
  }

  .law-header__seal {
    width: 40px;
    height: 40px;
  }

  .law-header__brand-text strong {
    font-size: 17px;
  }

  .law-header__brand-text span {
    font-size: 7px;
  }

  .law-header__cta {
    display: none;
  }
}

/* TRANSICIÓN */

.law-menu-enter-active,
.law-menu-leave-active {
  transition:
    opacity 0.25s ease,
    transform 0.25s ease;
}

.law-menu-enter-from,
.law-menu-leave-to {
  opacity: 0;

  transform: translateY(-10px);
}
</style>