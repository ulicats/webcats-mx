<template>
  <header class="tepic-header">
    <div class="tepic-header__inner">
      <!-- Marca -->
      <a href="#inicio" class="tepic-header__brand">
        <span>Webcats</span><strong>.mx</strong>
      </a>

      <!-- Navegación desktop -->
      <nav class="tepic-header__nav" aria-label="Navegación principal">
        <a href="#inicio">Inicio</a>
        <a href="#servicios">Servicios</a>
        <a href="#proyectos">Proyectos</a>
        <a href="#proceso">Proceso</a>
        <a href="#faq">FAQ</a>
        <a href="#contacto">Contacto</a>
      </nav>

      <!-- CTA -->
      <a
        :href="whatsappUrl"
        target="_blank"
        rel="noopener noreferrer"
        class="tepic-header__cta"
      >
        Cotizar por WhatsApp
        <span class="tepic-header__cta-icon">↗</span>
      </a>

      <!-- Mobile -->
      <button
        class="tepic-header__toggle"
        type="button"
        :aria-expanded="menuOpen"
        aria-label="Abrir menú"
        @click="menuOpen = !menuOpen"
      >
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>

    <!-- Menú mobile -->
    <Transition name="mobile-menu">
      <div
        v-if="menuOpen"
        class="tepic-header__mobile-menu"
      >
        <a href="#inicio" @click="closeMenu">Inicio</a>
        <a href="#servicios" @click="closeMenu">Servicios</a>
        <a href="#proyectos" @click="closeMenu">Proyectos</a>
        <a href="#proceso" @click="closeMenu">Proceso</a>
        <a href="#faq" @click="closeMenu">FAQ</a>
        <a href="#contacto" @click="closeMenu">Contacto</a>

        <a
          :href="whatsappUrl"
          target="_blank"
          rel="noopener noreferrer"
          class="tepic-header__mobile-cta"
        >
          Cotizar por WhatsApp
        </a>
      </div>
    </Transition>
  </header>
</template>

<script setup>
import { ref } from 'vue'

const menuOpen = ref(false)

/*
 * Sustituye 521XXXXXXXXXX por el número real.
 */
const whatsappUrl =
  'https://wa.me/523332341375?text=Hola%2C%20vi%20su%20servicio%20de%20dise%C3%B1o%20web%20en%20Tepic%20y%20me%20gustar%C3%ADa%20cotizar%20una%20p%C3%A1gina%20web.'

const closeMenu = () => {
  menuOpen.value = false
}
</script>

<style scoped>
.tepic-header {
  position: sticky;
  top: 0;
  z-index: 1000;
  width: 100%;
  background: rgba(255, 255, 255, 0.94);
  border-bottom: 1px solid #e8edf5;
  backdrop-filter: blur(16px);
  -webkit-backdrop-filter: blur(16px);
}

.tepic-header__inner {
  width: min(1180px, calc(100% - 40px));
  min-height: 74px;
  margin: 0 auto;

  display: flex;
  align-items: center;
  gap: 38px;
}

.tepic-header__brand {
  display: inline-flex;
  align-items: baseline;

  color: #0f172a;
  text-decoration: none;
  font-size: 26px;
  font-weight: 900;
  letter-spacing: -1.4px;
  white-space: nowrap;
}

.tepic-header__brand strong {
  color: #1677ff;
}

.tepic-header__nav {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 30px;
  margin-left: auto;
}

.tepic-header__nav a {
  position: relative;
  color: #475569;
  text-decoration: none;
  font-size: 14px;
  font-weight: 600;
  transition: color 0.2s ease;
}

.tepic-header__nav a::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: -8px;

  width: 0;
  height: 2px;

  background: #1677ff;
  border-radius: 999px;

  transition: width 0.2s ease;
}

.tepic-header__nav a:hover {
  color: #1677ff;
}

.tepic-header__nav a:hover::after {
  width: 100%;
}

.tepic-header__cta {
  display: inline-flex;
  align-items: center;
  gap: 8px;

  padding: 12px 18px;

  color: #ffffff;
  background: #1677ff;

  border-radius: 999px;

  text-decoration: none;
  font-size: 13px;
  font-weight: 700;

  box-shadow: 0 8px 24px rgba(22, 119, 255, 0.22);

  transition:
    transform 0.2s ease,
    box-shadow 0.2s ease,
    background 0.2s ease;
}

.tepic-header__cta:hover {
  transform: translateY(-2px);
  background: #0867e8;
  box-shadow: 0 12px 30px rgba(22, 119, 255, 0.3);
}

.tepic-header__cta-icon {
  font-size: 15px;
}

.tepic-header__toggle {
  display: none;
  width: 42px;
  height: 42px;

  border: 1px solid #e2e8f0;
  border-radius: 12px;

  background: #ffffff;
  cursor: pointer;
}

.tepic-header__toggle span {
  display: block;

  width: 18px;
  height: 2px;
  margin: 4px auto;

  background: #0f172a;
  border-radius: 10px;
}

.tepic-header__mobile-menu {
  display: none;
}

.mobile-menu-enter-active,
.mobile-menu-leave-active {
  transition: all 0.2s ease;
}

.mobile-menu-enter-from,
.mobile-menu-leave-to {
  opacity: 0;
  transform: translateY(-8px);
}

@media (max-width: 900px) {
  .tepic-header__inner {
    min-height: 68px;
  }

  .tepic-header__nav,
  .tepic-header__cta {
    display: none;
  }

  .tepic-header__toggle {
    display: block;
    margin-left: auto;
  }

  .tepic-header__mobile-menu {
    display: flex;
    flex-direction: column;
    gap: 4px;

    padding: 12px 20px 20px;

    background: #ffffff;
    border-top: 1px solid #eef2f7;
  }

  .tepic-header__mobile-menu > a {
    padding: 12px 10px;

    color: #334155;
    text-decoration: none;
    font-size: 15px;
    font-weight: 600;

    border-radius: 10px;
  }

  .tepic-header__mobile-menu > a:hover {
    background: #f6f9fd;
  }

  .tepic-header__mobile-menu .tepic-header__mobile-cta {
    margin-top: 8px;
    text-align: center;
    color: #ffffff;
    background: #1677ff;
  }
}
</style>