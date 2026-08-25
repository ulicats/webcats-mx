<template>
  <header class="gym-header">
    <div class="gym-header__container">

      <!-- Logo -->
      <a href="#inicio" class="gym-header__brand">
        <span class="gym-header__brand-mark">IP</span>

        <div class="gym-header__brand-text">
          <span class="gym-header__brand-name">IRON PULSE</span>
          <span class="gym-header__brand-subtitle">
            PERFORMANCE CLUB
          </span>
        </div>
      </a>

      <!-- Navegación -->
      <nav class="gym-header__nav">
        <a href="#inicio">Inicio</a>
        <a href="#instalaciones">Instalaciones</a>
        <a href="#entrenamiento">Entrenamiento</a>
        <a href="#coaches">Coaches</a>
        <a href="#planes">Planes</a>
        <a href="#horarios">Horarios</a>
      </nav>

      <!-- CTA -->
      <div class="gym-header__actions">
        <a href="#planes" class="gym-header__cta">
          ÚNETE AHORA

          <span class="gym-header__cta-arrow">
            →
          </span>
        </a>

        <!-- Mobile -->
        <button
          class="gym-header__menu"
          type="button"
          @click="menuOpen = !menuOpen"
          :class="{ 'gym-header__menu--active': menuOpen }"
          aria-label="Abrir menú"
        >
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </div>

    <!-- Menú mobile -->
    <transition name="gym-menu">
      <div
        v-if="menuOpen"
        class="gym-header__mobile"
      >
        <a href="#inicio" @click="closeMenu">Inicio</a>
        <a href="#instalaciones" @click="closeMenu">Instalaciones</a>
        <a href="#entrenamiento" @click="closeMenu">Entrenamiento</a>
        <a href="#coaches" @click="closeMenu">Coaches</a>
        <a href="#planes" @click="closeMenu">Planes</a>
        <a href="#horarios" @click="closeMenu">Horarios</a>

        <a
          href="#planes"
          class="gym-header__mobile-cta"
          @click="closeMenu"
        >
          ÚNETE AHORA →
        </a>
      </div>
    </transition>
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
@import url("https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap");

.gym-header {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 50;
  font-family: "Inter", sans-serif;
  border-bottom: 1px solid rgba(255, 255, 255, 0.09);
  background: linear-gradient(
    to bottom,
    rgba(5, 5, 5, 0.9),
    rgba(5, 5, 5, 0.45),
    transparent
  );
}

.gym-header__container {
  width: min(1400px, calc(100% - 48px));
  min-height: 96px;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 32px;
}

/* =========================
   BRAND
========================= */

.gym-header__brand {
  display: flex;
  align-items: center;
  gap: 13px;
  text-decoration: none;
  flex-shrink: 0;
}

.gym-header__brand-mark {
  width: 48px;
  height: 48px;
  display: flex;
  align-items: center;
  justify-content: center;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 22px;
  font-weight: 800;
  font-style: italic;
  letter-spacing: -1px;

  color: #090909;
  background: #d9ff43;

  transform: skew(-6deg);
}

.gym-header__brand-text {
  display: flex;
  flex-direction: column;
  line-height: 1;
}

.gym-header__brand-name {
  font-family: "Barlow Condensed", sans-serif;
  font-size: 25px;
  font-weight: 800;
  letter-spacing: 1.3px;
  color: #ffffff;
}

.gym-header__brand-subtitle {
  margin-top: 4px;
  font-family: "Barlow Condensed", sans-serif;
  font-size: 10px;
  font-weight: 500;
  letter-spacing: 3px;
  color: rgba(255, 255, 255, 0.45);
}

/* =========================
   NAV
========================= */

.gym-header__nav {
  display: flex;
  align-items: center;
  gap: 32px;
}

.gym-header__nav a {
  position: relative;
  padding: 38px 0;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 15px;
  font-weight: 600;
  letter-spacing: 1px;
  text-transform: uppercase;
  text-decoration: none;

  color: rgba(255, 255, 255, 0.68);

  transition:
    color 0.25s ease,
    transform 0.25s ease;
}

.gym-header__nav a::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: 26px;

  width: 0;
  height: 2px;

  background: #d9ff43;

  transition: width 0.25s ease;
}

.gym-header__nav a:hover {
  color: #ffffff;
}

.gym-header__nav a:hover::after {
  width: 100%;
}

/* =========================
   ACTIONS
========================= */

.gym-header__actions {
  display: flex;
  align-items: center;
  gap: 20px;
}

.gym-header__cta {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 16px;

  min-height: 48px;
  padding: 0 22px;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 15px;
  font-weight: 700;
  letter-spacing: 1px;
  text-decoration: none;

  color: #090909;
  background: #d9ff43;

  transition:
    background 0.25s ease,
    transform 0.25s ease;
}

.gym-header__cta:hover {
  background: #ffffff;
  transform: translateY(-2px);
}

.gym-header__cta-arrow {
  font-size: 20px;
}

/* =========================
   MOBILE BUTTON
========================= */

.gym-header__menu {
  display: none;

  width: 46px;
  height: 46px;

  border: 1px solid rgba(255, 255, 255, 0.18);
  background: rgba(255, 255, 255, 0.03);

  cursor: pointer;

  align-items: center;
  justify-content: center;
  flex-direction: column;
  gap: 5px;
}

.gym-header__menu span {
  width: 20px;
  height: 2px;
  background: #ffffff;

  transition:
    transform 0.3s ease,
    opacity 0.3s ease;
}

.gym-header__menu--active span:nth-child(1) {
  transform: translateY(7px) rotate(45deg);
}

.gym-header__menu--active span:nth-child(2) {
  opacity: 0;
}

.gym-header__menu--active span:nth-child(3) {
  transform: translateY(-7px) rotate(-45deg);
}

/* =========================
   MOBILE NAV
========================= */

.gym-header__mobile {
  display: none;
}

/* =========================
   TRANSITION
========================= */

.gym-menu-enter-active,
.gym-menu-leave-active {
  transition:
    opacity 0.25s ease,
    transform 0.25s ease;
}

.gym-menu-enter-from,
.gym-menu-leave-to {
  opacity: 0;
  transform: translateY(-10px);
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 1120px) {
  .gym-header__nav {
    gap: 20px;
  }

  .gym-header__nav a {
    font-size: 14px;
  }

  .gym-header__cta {
    padding: 0 17px;
  }
}

@media (max-width: 960px) {
  .gym-header {
    background: rgba(7, 7, 7, 0.95);
  }

  .gym-header__container {
    width: min(100% - 32px, 1400px);
    min-height: 78px;
  }

  .gym-header__nav,
  .gym-header__cta {
    display: none;
  }

  .gym-header__menu {
    display: flex;
  }

  .gym-header__mobile {
    display: flex;
    flex-direction: column;

    padding: 12px 24px 28px;

    background: #090909;
    border-top: 1px solid rgba(255, 255, 255, 0.08);
  }

  .gym-header__mobile > a:not(.gym-header__mobile-cta) {
    padding: 17px 4px;

    font-family: "Barlow Condensed", sans-serif;
    font-size: 20px;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    text-decoration: none;

    color: rgba(255, 255, 255, 0.78);

    border-bottom: 1px solid rgba(255, 255, 255, 0.07);
  }

  .gym-header__mobile-cta {
    margin-top: 24px;
    padding: 17px 20px;

    font-family: "Barlow Condensed", sans-serif;
    font-size: 18px;
    font-weight: 700;
    letter-spacing: 1px;
    text-align: center;
    text-decoration: none;

    color: #090909;
    background: #d9ff43;
  }
}

@media (max-width: 520px) {
  .gym-header__container {
    width: calc(100% - 24px);
  }

  .gym-header__brand-mark {
    width: 42px;
    height: 42px;
    font-size: 19px;
  }

  .gym-header__brand-name {
    font-size: 21px;
  }

  .gym-header__brand-subtitle {
    font-size: 8px;
    letter-spacing: 2.4px;
  }
}
</style>