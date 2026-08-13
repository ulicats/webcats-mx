<script setup>
import nutriLogo from "../../../assets/projects/nutriologo/logo/logo.png";
import { ref } from "vue";

const menuOpen = ref(false);

const closeMenu = () => {
  menuOpen.value = false;
};

const scrollToSection = (id) => {
  const section = document.getElementById(id);

  if (section) {
    section.scrollIntoView({
      behavior: "smooth",
      block: "start",
    });
  }

  closeMenu();
};
</script>

<template>
  <header class="nutri-header">
    <div class="nutri-header__container">

      <!-- LOGO / MARCA -->
      <button
        class="nutri-header__brand"
        @click="scrollToSection('inicio')"
      >
        <div class="nutri-header__logo">
          <img
            :src="nutriLogo"
            alt="Dra. Camila Ríos - Nutrióloga"
            class="nutri-header__logo"
          />
        </div>
      </button>

      <!-- NAVEGACIÓN DESKTOP -->
      <nav class="nutri-header__nav">
        <button @click="scrollToSection('inicio')">
          Inicio
        </button>

        <button @click="scrollToSection('sobre-mi')">
          Sobre mí
        </button>

        <button @click="scrollToSection('servicios')">
          Servicios
        </button>

        <button @click="scrollToSection('resultados')">
          Resultados
        </button>

        <button @click="scrollToSection('preguntas')">
          Preguntas
        </button>
      </nav>

      <!-- CTA -->
      <button
        class="nutri-header__cta"
        @click="scrollToSection('agenda')"
      >
        Agendar consulta
      </button>

      <!-- HAMBURGUESA -->
      <button
        class="nutri-header__toggle"
        :class="{ 'is-active': menuOpen }"
        aria-label="Abrir menú"
        @click="menuOpen = !menuOpen"
      >
        <span></span>
        <span></span>
        <span></span>
      </button>

    </div>

    <!-- MENÚ MOBILE -->
    <div
      class="nutri-header__mobile"
      :class="{ 'is-open': menuOpen }"
    >
      <nav>
        <button @click="scrollToSection('inicio')">
          Inicio
        </button>

        <button @click="scrollToSection('sobre-mi')">
          Sobre mí
        </button>

        <button @click="scrollToSection('servicios')">
          Servicios
        </button>

        <button @click="scrollToSection('resultados')">
          Resultados
        </button>

        <button @click="scrollToSection('preguntas')">
          Preguntas
        </button>

        <button
          class="nutri-header__mobile-cta"
          @click="scrollToSection('agenda')"
        >
          Agendar consulta
        </button>
      </nav>
    </div>
  </header>
</template>

<style scoped>
.nutri-header {
  position: sticky;
  top: 0;
  z-index: 100;
  width: 100%;
  background: rgba(247, 247, 242, 0.94);
  border-bottom: 1px solid var(--nutri-border);
  backdrop-filter: blur(14px);
}

.nutri-header__container {
  width: min(1180px, calc(100% - 40px));
  height: 82px;
  margin: 0 auto;

  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 30px;
}

/* =========================
   MARCA
========================= */

.nutri-header__brand {
  display: flex;
  align-items: center;
  gap: 12px;

  padding: 0;
  border: 0;
  background: transparent;
  color: var(--nutri-text);

  text-align: left;
  cursor: pointer;
}

.nutri-header__logo {
  width: 100px;
  height: 100px;
  flex-shrink: 0;

  display: grid;
  place-items: center;

  border-radius: 50%;
  
  color: var(--nutri-white);

  font-size: 14px;
  font-weight: 700;
  letter-spacing: 1px;
}

.nutri-header__brand-text {
  display: flex;
  flex-direction: column;
  gap: 2px;
}

.nutri-header__brand-text strong {
  color: var(--nutri-primary);
  font-size: 16px;
  font-weight: 700;
  line-height: 1.2;
}

.nutri-header__brand-text span {
  color: var(--nutri-text-soft);
  font-size: 11px;
  font-weight: 500;
  letter-spacing: 0.7px;
  text-transform: uppercase;
}

/* =========================
   NAVEGACIÓN
========================= */

.nutri-header__nav {
  display: flex;
  align-items: center;
  gap: 27px;
  margin-left: auto;
}

.nutri-header__nav button {
  position: relative;

  padding: 8px 0;
  border: 0;
  background: transparent;

  color: var(--nutri-text);
  font-family: inherit;
  font-size: 14px;
  font-weight: 500;

  cursor: pointer;
  transition: color 0.25s ease;
}

.nutri-header__nav button::after {
  content: "";

  position: absolute;
  bottom: 2px;
  left: 0;

  width: 0;
  height: 1px;

  background: var(--nutri-primary);

  transition: width 0.25s ease;
}

.nutri-header__nav button:hover {
  color: var(--nutri-primary);
}

.nutri-header__nav button:hover::after {
  width: 100%;
}

/* =========================
   CTA
========================= */

.nutri-header__cta {
  padding: 13px 21px;

  border: 1px solid var(--nutri-primary);
  border-radius: 999px;

  background: var(--nutri-primary);
  color: var(--nutri-white);

  font-family: inherit;
  font-size: 13px;
  font-weight: 600;

  cursor: pointer;

  transition:
    background 0.25s ease,
    color 0.25s ease,
    transform 0.25s ease;
}

.nutri-header__cta:hover {
  background: transparent;
  color: var(--nutri-primary);
  transform: translateY(-2px);
}

/* =========================
   HAMBURGUESA
========================= */

.nutri-header__toggle {
  display: none;

  width: 42px;
  height: 42px;

  padding: 9px;
  border: 0;
  background: transparent;

  cursor: pointer;
}

.nutri-header__toggle span {
  display: block;

  width: 100%;
  height: 2px;
  margin: 5px 0;

  border-radius: 10px;
  background: var(--nutri-primary);

  transition:
    transform 0.25s ease,
    opacity 0.25s ease;
}

.nutri-header__toggle.is-active span:nth-child(1) {
  transform: translateY(7px) rotate(45deg);
}

.nutri-header__toggle.is-active span:nth-child(2) {
  opacity: 0;
}

.nutri-header__toggle.is-active span:nth-child(3) {
  transform: translateY(-7px) rotate(-45deg);
}

/* =========================
   MOBILE
========================= */

.nutri-header__mobile {
  display: none;
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 950px) {
  .nutri-header__nav,
  .nutri-header__cta {
    display: none;
  }

  .nutri-header__toggle {
    display: block;
  }

  .nutri-header__mobile {
    display: grid;
    grid-template-rows: 0fr;

    overflow: hidden;

    background: var(--nutri-bg);

    transition: grid-template-rows 0.35s ease;
  }

  .nutri-header__mobile.is-open {
    grid-template-rows: 1fr;
  }

  .nutri-header__mobile nav {
    min-height: 0;

    display: flex;
    flex-direction: column;

    width: min(100% - 40px, 1180px);
    margin: 0 auto;
  }

  .nutri-header__mobile nav > button {
    padding: 15px 0;

    border: 0;
    border-bottom: 1px solid var(--nutri-border);

    background: transparent;
    color: var(--nutri-text);

    font-family: inherit;
    font-size: 15px;
    text-align: left;

    cursor: pointer;
  }

  .nutri-header__mobile .nutri-header__mobile-cta {
    margin: 15px 0 22px;
    padding: 14px 20px;

    border: 0;
    border-radius: 999px;

    background: var(--nutri-primary);
    color: var(--nutri-white);

    font-weight: 600;
    text-align: center;
  }
}

@media (max-width: 520px) {
  .nutri-header__container {
    width: calc(100% - 28px);
    height: 72px;
  }

  .nutri-header__logo {
    width: 40px;
    height: 40px;
    font-size: 12px;
  }

  .nutri-header__brand-text strong {
    font-size: 14px;
  }

  .nutri-header__brand-text span {
    font-size: 9px;
  }

  .nutri-header__mobile nav {
    width: calc(100% - 28px);
  }
}
</style>