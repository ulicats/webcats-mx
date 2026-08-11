<template>
  <header class="hospedaje-header" :class="{ 'hospedaje-header--scrolled': isScrolled }">
    <div class="hospedaje-header__inner">
      <a href="#inicio" class="hospedaje-brand">
        <div class="header-brand">
          <img
            src="../../../assets/projects/hospedaje/logo/logo.png"
            alt=""
            class="header-logo"
          />
        </div>
      </a>

      <button
        class="hospedaje-menu-button"
        type="button"
        :aria-expanded="menuOpen"
        aria-label="Abrir menú"
        @click="menuOpen = !menuOpen"
      >
        <span></span>
        <span></span>
        <span></span>
      </button>

      <nav class="hospedaje-nav" :class="{ 'hospedaje-nav--open': menuOpen }">
        <a href="#inicio" @click="closeMenu">Inicio</a>
        <a href="#cabanas" @click="closeMenu">Hospedaje</a>
        <a href="#galeria" @click="closeMenu">Galería</a>
        <a href="#opiniones" @click="closeMenu">Opiniones</a>
        <a href="#faq" @click="closeMenu">Preguntas</a>
        <a href="#ubicacion" @click="closeMenu">Ubicación</a>

        <a class="hospedaje-nav__cta" href="#reservar" @click="closeMenu">
          Reservar
        </a>
      </nav>
    </div>
  </header>
</template>

<script setup>
import { onBeforeUnmount, onMounted, ref } from "vue";

const menuOpen = ref(false);
const isScrolled = ref(false);

const handleScroll = () => {
  isScrolled.value = window.scrollY > 30;
};

const closeMenu = () => {
  menuOpen.value = false;
};

onMounted(() => {
  window.addEventListener("scroll", handleScroll);
  handleScroll();
});

onBeforeUnmount(() => {
  window.removeEventListener("scroll", handleScroll);
});
</script>

<style scoped>
.hospedaje-header {
  position: fixed;
  inset: 0 0 auto;
  z-index: 1000;
  transition:
    background-color 0.3s ease,
    box-shadow 0.3s ease,
    backdrop-filter 0.3s ease;
}

.header-logo {
  
  width: 125px;
  height: auto;
  object-fit: contain;
}

@media (max-width: 768px) {
  .header-logo {
    width: 105px;
  }
}

.hospedaje-header--scrolled {
  background: var(--hospedaje-navy-950);
  box-shadow: 0 14px 35px rgba(0, 0, 0, 0.18);
  backdrop-filter: blur(14px);
}

.hospedaje-header__inner {
  width: min(1180px, calc(100% - 40px));
  min-height: 92px;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.hospedaje-brand {
  display: inline-flex;
  align-items: center;
  gap: 13px;
  color: var(--hospedaje-white);
}

.hospedaje-brand__mark {
  width: 50px;
  height: 50px;
  border: 1px solid rgba(221, 196, 135, 0.7);
  border-radius: 50%;
  display: grid;
  place-items: center;
  color: var(--hospedaje-gold-light);
  font-family: var(--hospedaje-heading);
  font-size: 31px;
  font-weight: 600;
}

.hospedaje-brand__copy {
  display: flex;
  flex-direction: column;
  line-height: 1;
}

.hospedaje-brand__copy strong {
  font-family: var(--hospedaje-heading);
  font-size: 27px;
  font-weight: 600;
}

.hospedaje-brand__copy span {
  margin-top: 6px;
  color: rgba(255, 255, 255, 0.7);
  font-size: 10px;
  letter-spacing: 0.18em;
  text-transform: uppercase;
}

.hospedaje-nav {
  display: flex;
  align-items: center;
  gap: 26px;
}

.hospedaje-nav a {
  color: rgba(255, 255, 255, 0.84);
  font-size: 13px;
  font-weight: 600;
  transition: color 0.2s ease;
}

.hospedaje-nav a:hover {
  color: var(--hospedaje-gold-light);
}

.hospedaje-nav__cta {
  padding: 13px 21px;
  border: 1px solid var(--hospedaje-gold-light);
  border-radius: 999px;
  color: var(--hospedaje-white) !important;
}

.hospedaje-nav__cta:hover {
  background: var(--hospedaje-gold);
  color: var(--hospedaje-green-950) !important;
}

.hospedaje-menu-button {
  display: none;
  width: 46px;
  height: 46px;
  padding: 10px;
  border: 0;
  background: transparent;
  cursor: pointer;
}

.hospedaje-menu-button span {
  display: block;
  width: 100%;
  height: 2px;
  margin: 5px 0;
  background: var(--hospedaje-white);
}

@media (max-width: 960px) {
  .hospedaje-header__inner {
    min-height: 78px;
  }

  .hospedaje-menu-button {
    display: block;
  }

  .hospedaje-nav {
    position: absolute;
    top: 78px;
    left: 20px;
    right: 20px;
    display: none;
    padding: 22px;
    border: 1px solid rgba(221, 196, 135, 0.18);
    border-radius: 18px;
    background: rgba(15, 36, 29, 0.98);
    box-shadow: 0 26px 65px rgba(0, 0, 0, 0.26);
    flex-direction: column;
    align-items: stretch;
    gap: 0;
  }

  .hospedaje-nav--open {
    display: flex;
  }

  .hospedaje-nav a {
    padding: 14px 4px;
  }

  .hospedaje-nav__cta {
    margin-top: 10px;
    text-align: center;
  }
}
</style>