<template>
  <header
    class="fin-header"
    :class="{
      'fin-header--scrolled': scrolled,
      'fin-header--open': menuOpen
    }"
  >
    <div class="fin-header__container">

      <a
        href="#inicio"
        class="fin-header__brand"
        @click="closeMenu"
      >
        <div class="fin-header__mark">
          <span>V</span>
        </div>

        <div class="fin-header__brand-text">
          <strong>VERTEX</strong>
          <span>FINANCIAL ADVISORS</span>
        </div>
      </a>

      <!-- DESKTOP NAV -->
      <nav class="fin-header__nav">
        <a href="#nosotros">Nosotros</a>
        <a href="#servicios">Servicios</a>
        <a href="#estrategia">Estrategia</a>
        <a href="#contacto">Contacto</a>
      </nav>

      <a
        href="#contacto"
        class="fin-header__cta"
      >
        Agendar asesoría
        <span>↗</span>
      </a>

      <!-- MOBILE BUTTON -->
      <button
        class="fin-header__menu"
        type="button"
        :aria-expanded="menuOpen"
        aria-label="Abrir menú"
        @click="menuOpen = !menuOpen"
      >
        <span></span>
        <span></span>
      </button>

    </div>

    <!-- MOBILE MENU -->
    <div class="fin-header__mobile">

      <div class="fin-header__mobile-inner">

        <nav>
          <a href="#nosotros" @click="closeMenu">
            Nosotros
          </a>

          <a href="#servicios" @click="closeMenu">
            Servicios
          </a>

          <a href="#estrategia" @click="closeMenu">
            Estrategia
          </a>

          <a href="#contacto" @click="closeMenu">
            Contacto
          </a>
        </nav>

        <a
          href="#contacto"
          class="fin-header__mobile-cta"
          @click="closeMenu"
        >
          Agendar asesoría
          <span>↗</span>
        </a>

      </div>

    </div>

  </header>
</template>

<script setup>
import {
  ref,
  onMounted,
  onUnmounted,
  watch
} from 'vue'

const scrolled = ref(false)
const menuOpen = ref(false)

const handleScroll = () => {
  scrolled.value = window.scrollY > 40
}

const closeMenu = () => {
  menuOpen.value = false
}

const handleResize = () => {
  if (window.innerWidth > 1050) {
    menuOpen.value = false
  }
}

watch(menuOpen, (isOpen) => {
  if (isOpen && window.innerWidth <= 1050) {
    document.body.style.overflow = 'hidden'
  } else {
    document.body.style.overflow = ''
  }
})

onMounted(() => {
  handleScroll()

  window.addEventListener(
    'scroll',
    handleScroll
  )

  window.addEventListener(
    'resize',
    handleResize
  )
})

onUnmounted(() => {
  window.removeEventListener(
    'scroll',
    handleScroll
  )

  window.removeEventListener(
    'resize',
    handleResize
  )

  document.body.style.overflow = ''
})
</script>

<style scoped>

/* =========================
   HEADER
========================= */

.fin-header {
  position: fixed;

  top: 0;
  left: 0;

  width: 100%;

  z-index: 1000;

  color: var(--fin-white);

  transition:
    background 0.35s ease,
    box-shadow 0.35s ease,
    backdrop-filter 0.35s ease;
}

.fin-header--scrolled,
.fin-header--open {
  background:
    rgba(13, 27, 42, 0.97);

  box-shadow:
    0 10px 35px
    rgba(0, 0, 0, 0.12);

  backdrop-filter:
    blur(12px);
}

/* =========================
   CONTAINER
========================= */

.fin-header__container {
  position: relative;

  z-index: 2;

  width:
    min(
      1380px,
      calc(100% - 80px)
    );

  height: 94px;

  margin: 0 auto;

  display: flex;

  align-items: center;

  justify-content:
    space-between;

  border-bottom:
    1px solid
    rgba(255, 255, 255, 0.16);
}

/* =========================
   BRAND
========================= */

.fin-header__brand {
  display: flex;

  align-items: center;

  gap: 14px;
}

.fin-header__mark {
  width: 42px;
  height: 42px;

  border:
    1px solid
    var(--fin-accent);

  display: grid;

  place-items: center;

  transform:
    rotate(45deg);
}

.fin-header__mark span {
  color:
    var(--fin-accent-light);

  font-family:
    Georgia,
    'Times New Roman',
    serif;

  font-size: 22px;

  transform:
    rotate(-45deg);
}

.fin-header__brand-text {
  display: flex;

  flex-direction: column;
}

.fin-header__brand-text strong {
  font-family:
    Georgia,
    'Times New Roman',
    serif;

  font-size: 20px;

  letter-spacing: 4px;

  font-weight: 500;
}

.fin-header__brand-text span {
  margin-top: 3px;

  color:
    rgba(255, 255, 255, 0.55);

  font-size: 8px;

  letter-spacing: 3px;
}

/* =========================
   DESKTOP NAV
========================= */

.fin-header__nav {
  display: flex;

  align-items: center;

  gap: 38px;
}

.fin-header__nav a {
  position: relative;

  color:
    rgba(255, 255, 255, 0.75);

  font-size: 12px;

  letter-spacing: 1.4px;

  transition:
    color 0.25s ease;
}

.fin-header__nav a::after {
  content: '';

  position: absolute;

  left: 0;
  bottom: -8px;

  width: 0;
  height: 1px;

  background:
    var(--fin-accent);

  transition:
    width 0.25s ease;
}

.fin-header__nav a:hover {
  color:
    var(--fin-white);
}

.fin-header__nav a:hover::after {
  width: 100%;
}

/* =========================
   CTA DESKTOP
========================= */

.fin-header__cta {
  display: flex;

  align-items: center;

  gap: 20px;

  padding:
    15px 20px;

  border:
    1px solid
    rgba(183, 155, 100, 0.7);

  color:
    var(--fin-white);

  font-size: 11px;

  text-transform:
    uppercase;

  letter-spacing:
    1.5px;

  transition:
    background 0.25s ease,
    color 0.25s ease;
}

.fin-header__cta span {
  color:
    var(--fin-accent-light);

  font-size: 16px;
}

.fin-header__cta:hover {
  background:
    var(--fin-accent);

  color:
    var(--fin-primary);
}

.fin-header__cta:hover span {
  color:
    var(--fin-primary);
}

/* =========================
   HAMBURGER
========================= */

.fin-header__menu {
  display: none;

  width: 42px;
  height: 42px;

  padding: 0;

  border: 0;

  background:
    transparent;

  cursor: pointer;
}

.fin-header__menu span {
  display: block;

  width: 26px;
  height: 1px;

  margin:
    7px auto;

  background:
    var(--fin-white);

  transition:
    transform 0.3s ease;
}

.fin-header--open
.fin-header__menu
span:first-child {
  transform:
    translateY(4px)
    rotate(45deg);
}

.fin-header--open
.fin-header__menu
span:last-child {
  transform:
    translateY(-4px)
    rotate(-45deg);
}

/* =========================
   MOBILE MENU
========================= */

.fin-header__mobile {
  display: none;
}

/* =========================
   TABLET / MOBILE
========================= */

@media (max-width: 1050px) {

  .fin-header {
    background:
      rgba(13, 27, 42, 0.98);

    backdrop-filter:
      blur(12px);
  }

  .fin-header__nav,
  .fin-header__cta {
    display: none;
  }

  .fin-header__menu {
    display: block;
  }

  /*
    IMPORTANTE:
    El menú está debajo del header,
    completamente cerrado cuando
    menuOpen === false.
  */

  .fin-header__mobile {
    position: absolute;

    top: 100%;
    left: 0;

    display: block;

    width: 100%;

    max-height: 0;

    overflow: hidden;

    opacity: 0;

    visibility: hidden;

    pointer-events: none;

    background:
      var(--fin-primary);

    box-shadow:
      0 20px 35px
      rgba(0, 0, 0, 0);

    transition:
      max-height 0.4s ease,
      opacity 0.25s ease,
      visibility 0.25s ease,
      box-shadow 0.35s ease;
  }

  .fin-header--open
  .fin-header__mobile {
    max-height: 430px;

    opacity: 1;

    visibility: visible;

    pointer-events: auto;

    box-shadow:
      0 20px 35px
      rgba(0, 0, 0, 0.2);
  }

  .fin-header__mobile-inner {
    width:
      min(
        calc(100% - 48px),
        600px
      );

    margin: 0 auto;

    padding:
      15px 0 28px;
  }

  .fin-header__mobile nav {
    display: flex;

    flex-direction: column;
  }

  .fin-header__mobile nav a {
    position: relative;

    padding:
      17px 0;

    border-bottom:
      1px solid
      rgba(255, 255, 255, 0.1);

    color:
      rgba(255, 255, 255, 0.75);

    font-family:
      Georgia,
      'Times New Roman',
      serif;

    font-size: 18px;

    letter-spacing:
      0.5px;

    transition:
      color 0.25s ease,
      padding-left 0.25s ease;
  }

  .fin-header__mobile nav a:hover {
    padding-left: 8px;

    color:
      var(--fin-accent-light);
  }

  .fin-header__mobile-cta {
    width: 100%;

    margin-top: 22px;

    padding: 16px 18px;

    border:
      1px solid
      var(--fin-accent);

    display: flex;

    align-items: center;

    justify-content:
      space-between;

    color:
      var(--fin-white);

    font-size: 11px;

    text-transform:
      uppercase;

    letter-spacing:
      1.7px;

    transition:
      background 0.25s ease,
      color 0.25s ease;
  }

  .fin-header__mobile-cta:hover {
    background:
      var(--fin-accent);

    color:
      var(--fin-primary);
  }
}

/* =========================
   MOBILE
========================= */

@media (max-width: 600px) {

  .fin-header__container {
    width:
      calc(100% - 36px);

    height: 82px;
  }

  .fin-header__mark {
    width: 35px;
    height: 35px;
  }

  .fin-header__mark span {
    font-size: 19px;
  }

  .fin-header__brand {
    gap: 12px;
  }

  .fin-header__brand-text strong {
    font-size: 16px;

    letter-spacing: 3px;
  }

  .fin-header__brand-text span {
    font-size: 6px;

    letter-spacing: 2px;
  }

  .fin-header__mobile-inner {
    width:
      calc(100% - 36px);

    padding-top: 8px;
  }

  .fin-header__mobile nav a {
    font-size: 17px;

    padding:
      15px 0;
  }
}
</style>