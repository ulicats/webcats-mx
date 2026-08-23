<template>
  <header
    class="building-header"
    :class="{ 'building-header--scrolled': scrolled }"
  >
    <div class="building-header__inner">

      <a
        href="#inicio"
        class="building-header__brand"
        aria-label="Inicio"
      >
      </a>

      <!-- LOGO -->
      <a
        href="#inicio"
        class="building-header__brand"
        aria-label="Inicio"
      >
        <span class="building-header__mark">
          <span></span>
          <span></span>
          <span></span>
        </span>

        <div class="building-header__brand-text">
          <strong>VIDRIO</strong>
          <small>+ ALUMINIO</small>
        </div>
      </a>

      <!-- NAVEGACIÓN ESCRITORIO -->
      <nav class="building-header__nav">
        <a href="#servicios">Servicios</a>
        <a href="#proyectos">Proyectos</a>
        <a href="#proceso">Proceso</a>
        <a href="#nosotros">Nosotros</a>
      </nav>

      <!-- CTA -->
      <a
        href="#cotizar"
        class="building-header__cta"
      >
        Cotizar proyecto
        <span>↗</span>
      </a>

      <!-- MENÚ MÓVIL -->
      <button
        class="building-header__menu"
        :class="{ 'building-header__menu--open': menuOpen }"
        aria-label="Abrir menú"
        @click="menuOpen = !menuOpen"
      >
        <span></span>
        <span></span>
      </button>
    </div>

    <!-- MENÚ RESPONSIVO -->
    <Transition name="mobile-menu">
      <nav
        v-if="menuOpen"
        class="mobile-nav"
      >
        <a
          href="#servicios"
          @click="closeMenu"
        >
          Servicios
          <span>01</span>
        </a>

        <a
          href="#proyectos"
          @click="closeMenu"
        >
          Proyectos
          <span>02</span>
        </a>

        <a
          href="#proceso"
          @click="closeMenu"
        >
          Proceso
          <span>03</span>
        </a>

        <a
          href="#nosotros"
          @click="closeMenu"
        >
          Nosotros
          <span>04</span>
        </a>

        <a
          href="#cotizar"
          class="mobile-nav__cta"
          @click="closeMenu"
        >
          Solicitar cotización
          <span>↗</span>
        </a>
      </nav>
    </Transition>
  </header>
</template>

<script setup>
import { onBeforeUnmount, onMounted, ref } from 'vue'
import logo from '../../../assets/projects/vidrios-aluminio/logo/logo.png'

const scrolled = ref(false)
const menuOpen = ref(false)

const handleScroll = () => {
  scrolled.value = window.scrollY > 30
}

const closeMenu = () => {
  menuOpen.value = false
}

onMounted(() => {
  window.addEventListener('scroll', handleScroll)
  handleScroll()
})

onBeforeUnmount(() => {
  window.removeEventListener('scroll', handleScroll)
})
</script>

<style scoped>
.building-header {
  position: relative;
  z-index: 100;
  width: 100%;
  background: var(--aluminum-dark, #111416);
  border-bottom: 1px solid rgba(255, 255, 255, 0.12);
  transition:
    background 0.3s ease,
    box-shadow 0.3s ease;
}

.building-header--scrolled {
  position: sticky;
  top: 0;
  box-shadow: 0 12px 35px rgba(0, 0, 0, 0.18);
}

.building-header__inner {
  width: min(100%, 1600px);
  min-height: 88px;
  margin: 0 auto;
  padding: 0 4vw;

  display: flex;
  align-items: center;
  gap: 48px;
}

/* ================================
   LOGO
================================ */

.building-header__brand {
  display: flex;
  align-items: center;
  gap: 14px;

  text-decoration: none;
  color: #fff;

  flex-shrink: 0;
}

.building-header__mark {
  width: 42px;
  height: 42px;

  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 4px;

  padding: 5px;

  border: 1px solid rgba(255, 255, 255, 0.35);
}

.building-header__mark span {
  display: block;
  background: rgba(255, 255, 255, 0.9);
}

.building-header__mark span:nth-child(2) {
  background: var(--glass-blue, #4ea7c4);
}

.building-header__brand-text {
  display: flex;
  flex-direction: column;
  line-height: 1;
}

.building-header__brand-text strong {
  font-size: 0.9rem;
  letter-spacing: 0.18em;
}

.building-header__brand-text small {
  margin-top: 5px;
  font-size: 0.58rem;
  letter-spacing: 0.23em;
  color: rgba(255, 255, 255, 0.55);
}

/* ================================
   NAV
================================ */

.building-header__nav {
  margin-left: auto;

  display: flex;
  align-items: center;
  gap: 36px;
}

.building-header__nav a {
  position: relative;

  color: rgba(255, 255, 255, 0.7);
  text-decoration: none;

  font-size: 0.78rem;
  font-weight: 600;
  letter-spacing: 0.08em;
  text-transform: uppercase;

  transition: color 0.25s ease;
}

.building-header__nav a::after {
  content: '';

  position: absolute;
  left: 0;
  bottom: -10px;

  width: 100%;
  height: 1px;

  background: var(--glass-blue, #4ea7c4);

  transform: scaleX(0);
  transform-origin: right;
  transition: transform 0.3s ease;
}

.building-header__nav a:hover {
  color: #fff;
}

.building-header__nav a:hover::after {
  transform: scaleX(1);
  transform-origin: left;
}

/* ================================
   CTA
================================ */

.building-header__logo {
  width: auto;
  height: 56px;
  display: block;
  object-fit: contain;
}

.building-header__cta {
  min-height: 48px;

  padding: 0 22px;

  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 18px;

  background: #fff;
  color: var(--aluminum-dark, #111416);

  text-decoration: none;

  font-size: 0.77rem;
  font-weight: 700;
  letter-spacing: 0.06em;
  text-transform: uppercase;

  transition:
    background 0.25s ease,
    color 0.25s ease,
    transform 0.25s ease;
}

.building-header__cta span {
  font-size: 1.1rem;
}

.building-header__cta:hover {
  background: var(--glass-blue, #4ea7c4);
  color: #fff;
  transform: translateY(-2px);
}

/* ================================
   MOBILE BUTTON
================================ */

.building-header__menu {
  width: 45px;
  height: 45px;

  display: none;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 7px;

  background: transparent;
  border: 1px solid rgba(255, 255, 255, 0.22);

  cursor: pointer;
}

.building-header__menu span {
  width: 19px;
  height: 1px;

  background: #fff;

  transition:
    transform 0.3s ease,
    width 0.3s ease;
}

.building-header__menu--open span:first-child {
  transform: translateY(4px) rotate(45deg);
}

.building-header__menu--open span:last-child {
  transform: translateY(-4px) rotate(-45deg);
}

/* ================================
   MOBILE NAV
================================ */

.mobile-nav {
  position: absolute;
  top: 100%;
  left: 0;

  width: 100%;

  padding: 18px 6vw 32px;

  display: flex;
  flex-direction: column;

  background: var(--aluminum-dark, #111416);

  border-top: 1px solid rgba(255, 255, 255, 0.1);
}

.mobile-nav a {
  min-height: 62px;

  display: flex;
  align-items: center;
  justify-content: space-between;

  border-bottom: 1px solid rgba(255, 255, 255, 0.1);

  color: #fff;
  text-decoration: none;

  font-size: 1rem;
  font-weight: 500;
}

.mobile-nav a span {
  color: rgba(255, 255, 255, 0.35);
  font-size: 0.72rem;
}

.mobile-nav__cta {
  margin-top: 22px;

  padding: 0 20px;

  background: #fff;
  color: #111416 !important;

  border-bottom: 0 !important;
}

/* ================================
   TRANSITION
================================ */

.mobile-menu-enter-active,
.mobile-menu-leave-active {
  transition:
    opacity 0.25s ease,
    transform 0.25s ease;
}

.mobile-menu-enter-from,
.mobile-menu-leave-to {
  opacity: 0;
  transform: translateY(-12px);
}

/* ================================
   RESPONSIVE
================================ */

@media (max-width: 1050px) {
  .building-header__nav {
    display: none;
  }

  .building-header__cta {
    margin-left: auto;
  }

  .building-header__menu {
    display: flex;
  }
}

@media (max-width: 650px) {

  .building-header__logo {
  height: 44px;
  }

  .building-header__inner {
    min-height: 74px;
    padding: 0 20px;
    gap: 12px;
  }

  .building-header__mark {
    width: 36px;
    height: 36px;
  }

  .building-header__brand-text strong {
    font-size: 0.72rem;
  }

  .building-header__brand-text small {
    font-size: 0.48rem;
  }

  .building-header__cta {
    display: none;
  }

  .building-header__menu {
    margin-left: auto;
  }
}
</style>