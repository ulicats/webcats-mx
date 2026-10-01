<template>
  <header class="multi-header">
    <div class="header-container">

      <!-- LOGO -->
      <a href="#inicio" class="brand">
        <div class="brand-icon">
          <span class="roof"></span>

          <div class="brand-grid">
            <span class="brand-box plumbing">●</span>
            <span class="brand-box electric">⚡</span>
            <span class="brand-box masonry">▦</span>
            <span class="brand-box paint">▰</span>
          </div>
        </div>

        <div class="brand-text">
          <strong>Multiservicios</strong>
          <span>Soluciones para tu hogar y negocio</span>
        </div>
      </a>

      <!-- NAVEGACIÓN -->
      <nav class="desktop-nav">
        <a href="#inicio">Inicio</a>
        <a href="#servicios">Servicios</a>
        <a href="#trabajos">Trabajos</a>
        <a href="#zonas">Zonas</a>
        <a href="#faq">FAQ</a>
        <a href="#contacto">Contacto</a>
      </nav>

      <!-- WHATSAPP -->
      <a
        href="https://wa.me/523111234567"
        target="_blank"
        rel="noopener noreferrer"
        class="header-whatsapp"
      >
        <span class="whatsapp-icon">✆</span>
        Cotizar por WhatsApp
      </a>

      <!-- MENÚ MÓVIL -->
      <button
        class="menu-button"
        type="button"
        aria-label="Abrir menú"
        @click="menuOpen = !menuOpen"
      >
        <span></span>
        <span></span>
        <span></span>
      </button>

    </div>

    <!-- NAV MÓVIL -->
    <Transition name="menu">
      <div v-if="menuOpen" class="mobile-nav">
        <a href="#inicio" @click="closeMenu">Inicio</a>
        <a href="#servicios" @click="closeMenu">Servicios</a>
        <a href="#trabajos" @click="closeMenu">Trabajos</a>
        <a href="#zonas" @click="closeMenu">Zonas</a>
        <a href="#faq" @click="closeMenu">FAQ</a>
        <a href="#contacto" @click="closeMenu">Contacto</a>

        <a
          href="https://wa.me/523111234567"
          target="_blank"
          rel="noopener noreferrer"
          class="mobile-whatsapp"
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

const closeMenu = () => {
  menuOpen.value = false
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Sora:wght@500;600;700;800&display=swap');

.multi-header {
  --navy: #062a50;
  --blue: #087ee5;
  --green: #19a957;
  --brick: #dc512e;
  --yellow: #ffb51b;

  width: 100%;
  position: sticky;
  top: 0;
  z-index: 1000;
  background: rgba(255, 255, 255, 0.97);
  border-bottom: 1px solid #e7edf3;
  font-family: 'Manrope', sans-serif;
  backdrop-filter: blur(12px);
}

.header-container {
  width: min(1180px, calc(100% - 40px));
  height: 78px;
  margin: auto;

  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 30px;
}

/* =========================
   BRAND
========================= */

.brand {
  display: flex;
  align-items: center;
  gap: 12px;

  color: var(--navy);
  text-decoration: none;
}

.brand-icon {
  position: relative;
  width: 54px;
  padding-top: 9px;
}

.roof {
  position: absolute;
  top: 1px;
  left: 7px;

  width: 39px;
  height: 39px;

  border-left: 6px solid var(--navy);
  border-top: 6px solid var(--navy);

  transform: rotate(45deg);
  border-radius: 3px;
}

.brand-grid {
  position: relative;
  z-index: 2;

  display: grid;
  grid-template-columns: repeat(2, 20px);
  grid-template-rows: repeat(2, 17px);
  gap: 2px;

  justify-content: center;
}

.brand-box {
  display: flex;
  align-items: center;
  justify-content: center;

  color: white;
  font-size: 9px;
  font-weight: 800;
  border-radius: 2px;
}

.plumbing {
  background: var(--blue);
}

.electric {
  background: var(--yellow);
}

.masonry {
  background: var(--brick);
}

.paint {
  background: var(--green);
}

.brand-text {
  display: flex;
  flex-direction: column;
}

.brand-text strong {
  font-family: 'Sora', sans-serif;
  font-size: 19px;
  line-height: 1;
  letter-spacing: -0.7px;
}

.brand-text span {
  margin-top: 5px;
  font-size: 9px;
  font-weight: 600;
  color: #66788b;
}

/* =========================
   NAV
========================= */

.desktop-nav {
  display: flex;
  align-items: center;
  gap: 28px;
}

.desktop-nav a {
  position: relative;
  padding: 29px 0;

  color: #26384b;
  text-decoration: none;

  font-size: 13px;
  font-weight: 700;

  transition: color 0.25s ease;
}

.desktop-nav a::after {
  content: '';
  position: absolute;

  left: 0;
  bottom: 19px;

  width: 0;
  height: 3px;

  background: var(--blue);
  border-radius: 10px;

  transition: width 0.25s ease;
}

.desktop-nav a:hover {
  color: var(--blue);
}

.desktop-nav a:hover::after {
  width: 100%;
}

/* =========================
   WHATSAPP
========================= */

.header-whatsapp {
  display: inline-flex;
  align-items: center;
  gap: 8px;

  padding: 11px 17px;

  color: white;
  background: var(--green);

  border-radius: 9px;

  font-size: 12px;
  font-weight: 800;
  text-decoration: none;

  box-shadow: 0 8px 20px rgba(25, 169, 87, 0.18);

  transition:
    transform 0.2s ease,
    box-shadow 0.2s ease;
}

.header-whatsapp:hover {
  transform: translateY(-2px);
  box-shadow: 0 12px 25px rgba(25, 169, 87, 0.28);
}

.whatsapp-icon {
  display: flex;
  align-items: center;
  justify-content: center;

  width: 20px;
  height: 20px;

  border: 2px solid white;
  border-radius: 50%;

  font-size: 11px;
}

/* =========================
   MOBILE
========================= */

.menu-button {
  display: none;
  width: 42px;
  height: 42px;

  padding: 9px;

  background: #f2f6fa;
  border: 0;
  border-radius: 8px;

  cursor: pointer;
}

.menu-button span {
  display: block;

  width: 100%;
  height: 2px;

  margin: 5px 0;

  background: var(--navy);
}

.mobile-nav {
  display: none;
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 1000px) {
  .desktop-nav,
  .header-whatsapp {
    display: none;
  }

  .menu-button {
    display: block;
  }

  .mobile-nav {
    display: flex;
    flex-direction: column;

    padding: 15px 25px 25px;

    background: white;
    border-top: 1px solid #edf1f5;
  }

  .mobile-nav > a {
    padding: 14px 5px;

    color: var(--navy);
    text-decoration: none;

    font-size: 14px;
    font-weight: 700;

    border-bottom: 1px solid #edf1f5;
  }

  .mobile-nav .mobile-whatsapp {
    margin-top: 15px;
    padding: 14px;

    color: white;
    background: var(--green);

    border: 0;
    border-radius: 8px;

    text-align: center;
  }
}

@media (max-width: 500px) {
  .header-container {
    width: calc(100% - 28px);
    height: 70px;
  }

  .brand-text strong {
    font-size: 16px;
  }

  .brand-text span {
    font-size: 8px;
  }
}

.menu-enter-active,
.menu-leave-active {
  transition: all 0.25s ease;
}

.menu-enter-from,
.menu-leave-to {
  opacity: 0;
  transform: translateY(-10px);
}
</style>