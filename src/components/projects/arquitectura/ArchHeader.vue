<template>
  <header class="arch-header">

    <!-- =====================================
         HEADER PRINCIPAL
    ====================================== -->

    <div class="header-grid">

      <!-- MARCA -->
      <a
        href="#inicio"
        class="brand"
        @click.prevent="goToSection('inicio')"
      >
        <span class="brand-mark">
          A
        </span>

        <span class="brand-text">
          <strong>ARQUITECTURA</strong>
          <small>ESTUDIO / 2026</small>
        </span>
      </a>


      <!-- =====================================
           NAVEGACIÓN DESKTOP
      ====================================== -->

      <nav class="navigation">

        <a
          href="#estudio"
          @click.prevent="goToSection('estudio')"
        >
          ESTUDIO
        </a>

        <a
          href="#servicios"
          @click.prevent="goToSection('servicios')"
        >
          SERVICIOS
        </a>

        <RouterLink
          to="/projects/arquitectura/proyectos"
        >
          PROYECTOS
        </RouterLink>

        <a
          href="#contacto"
          @click.prevent="goToSection('contacto')"
        >
          CONTACTO
        </a>

      </nav>


      <!-- REFERENCIA -->
      <div class="plan-reference">
        <span>PLANTA / 01</span>
        <span>ARQ — 001</span>
      </div>


      <!-- =====================================
           HAMBURGUESA TABLET / MÓVIL
      ====================================== -->

      <button
        class="menu-toggle"
        type="button"
        :class="{ open: menuOpen }"
        :aria-expanded="menuOpen"
        aria-label="Abrir menú"
        @click="toggleMenu"
      >
        <span></span>
        <span></span>
        <span></span>
      </button>

    </div>


    <!-- =====================================
         MENÚ MÓVIL
    ====================================== -->

    <Transition name="mobile-menu">

      <div
        v-if="menuOpen"
        class="mobile-navigation"
      >

        <!-- CABECERA DEL MENÚ -->

        <div class="mobile-menu-reference">

          <span>
            RECORRIDO / WEB
          </span>

          <span>
            ARQ — NAV
          </span>

        </div>


        <!-- 01 -->

        <a
          href="#inicio"
          class="mobile-nav-item"
          @click.prevent="goToSection('inicio')"
        >
          <span class="mobile-number">
            01
          </span>

          <span class="mobile-label">
            INICIO
          </span>

          <span class="mobile-arrow">
            ↓
          </span>
        </a>


        <!-- 02 -->

        <a
          href="#estudio"
          class="mobile-nav-item"
          @click.prevent="goToSection('estudio')"
        >
          <span class="mobile-number">
            02
          </span>

          <span class="mobile-label">
            ESTUDIO
          </span>

          <span class="mobile-arrow">
            ↓
          </span>
        </a>


        <!-- 03 -->

        <a
          href="#servicios"
          class="mobile-nav-item"
          @click.prevent="goToSection('servicios')"
        >
          <span class="mobile-number">
            03
          </span>

          <span class="mobile-label">
            SERVICIOS
          </span>

          <span class="mobile-arrow">
            ↓
          </span>
        </a>


        <!-- 04 -->

        <RouterLink
          to="/projects/arquitectura/proyectos"
          class="mobile-nav-item"
          @click="closeMenu"
        >
          <span class="mobile-number">
            04
          </span>

          <span class="mobile-label">
            PROYECTOS
          </span>

          <span class="mobile-arrow">
            →
          </span>
        </RouterLink>


        <!-- 05 -->

        <a
          href="#proceso"
          class="mobile-nav-item"
          @click.prevent="goToSection('proceso')"
        >
          <span class="mobile-number">
            05
          </span>

          <span class="mobile-label">
            PROCESO
          </span>

          <span class="mobile-arrow">
            ↓
          </span>
        </a>


        <!-- 06 -->

        <a
          href="#contacto"
          class="mobile-nav-item"
          @click.prevent="goToSection('contacto')"
        >
          <span class="mobile-number">
            06
          </span>

          <span class="mobile-label">
            CONTACTO
          </span>

          <span class="mobile-arrow">
            ↓
          </span>
        </a>


        <!-- PIE DEL MENÚ -->

        <div class="mobile-menu-footer">

          <span>
            ACCESO / SECCIONES
          </span>

          <span>
            01 — 06
          </span>

        </div>

      </div>

    </Transition>


    <!-- =====================================
         CALLE / LÍMITE DEL TERRENO
    ====================================== -->

    <div class="street">

      <span class="street-label">
        ACCESO PÁGINA WEB
      </span>

      <div class="street-line">

        <span class="line left"></span>

        <span class="access">
          <span class="arrow">
            ↓
          </span>
        </span>

        <span class="line right"></span>

      </div>

    </div>

  </header>
</template>


<script setup>
import {
  ref,
  onMounted,
  onBeforeUnmount
} from "vue";


/* ========================================
   MENÚ
======================================== */

const menuOpen = ref(false);


const toggleMenu = () => {
  menuOpen.value = !menuOpen.value;
};


const closeMenu = () => {
  menuOpen.value = false;
};


/* ========================================
   NAVEGAR A SECCIÓN
======================================== */

const goToSection = id => {

  closeMenu();

  /*
   * Esperamos a que Vue retire
   * el menú antes de calcular
   * la posición.
   */

  requestAnimationFrame(() => {

    const element =
      document.getElementById(id);

    if (!element) return;

    element.scrollIntoView({
      behavior: "smooth",
      block: "start"
    });

  });

};


/* ========================================
   CERRAR AL PASAR A DESKTOP
======================================== */

const handleResize = () => {

  if (window.innerWidth > 1100) {
    menuOpen.value = false;
  }

};


onMounted(() => {

  window.addEventListener(
    "resize",
    handleResize
  );

});


onBeforeUnmount(() => {

  window.removeEventListener(
    "resize",
    handleResize
  );

});
</script>


<style scoped>

/* ========================================
   HEADER
======================================== */

.arch-header {
  position: relative;

  z-index: 200;

  padding: 28px 5% 0;

  background: #f3f1eb;
  color: #151515;
}


/* ========================================
   GRID
======================================== */

.header-grid {
  position: relative;

  min-height: 85px;

  display: grid;

  grid-template-columns:
    1fr
    auto
    1fr;

  align-items: center;

  gap: 40px;
}


/* ========================================
   BRAND
======================================== */

.brand {
  display: flex;
  align-items: center;

  gap: 16px;

  width: fit-content;

  color: inherit;
  text-decoration: none;
}


.brand-mark {
  width: 42px;
  height: 42px;

  display: grid;
  place-items: center;

  flex-shrink: 0;

  border: 1px solid #151515;
  border-radius: 50%;

  font-size: 14px;
}


.brand-text {
  display: flex;
  flex-direction: column;

  gap: 4px;
}


.brand-text strong {
  font-size: 13px;
  font-weight: 500;

  letter-spacing: 0.22em;
}


.brand-text small {
  color: #74736f;

  font-size: 8px;

  letter-spacing: 0.18em;
}


/* ========================================
   NAVEGACIÓN DESKTOP
======================================== */

.navigation {
  display: flex;
  align-items: center;

  gap: 32px;
}


.navigation a {
  position: relative;

  color: #151515;

  text-decoration: none;

  font-size: 10px;

  letter-spacing: 0.16em;
}


.navigation a::after {
  content: "";

  position: absolute;

  left: 0;
  bottom: -7px;

  width: 0;
  height: 1px;

  background: #151515;

  transition: width 0.3s ease;
}


.navigation a:hover::after {
  width: 100%;
}


/* ========================================
   REFERENCIA
======================================== */

.plan-reference {
  justify-self: end;

  display: flex;
  flex-direction: column;

  align-items: flex-end;

  gap: 5px;

  color: #74736f;

  font-size: 8px;

  letter-spacing: 0.18em;
}


/* ========================================
   HAMBURGUESA
======================================== */

.menu-toggle {
  display: none;

  width: 52px;
  height: 52px;

  padding: 0;

  border: 1px solid #151515;

  background: #f3f1eb;

  cursor: pointer;

  align-items: center;
  justify-content: center;

  flex-direction: column;

  gap: 6px;
}


.menu-toggle span {
  width: 23px;
  height: 1px;

  display: block;

  background: #151515;

  transition:
    transform 0.3s ease,
    opacity 0.2s ease;
}


/* X */

.menu-toggle.open span:nth-child(1) {
  transform:
    translateY(7px)
    rotate(45deg);
}


.menu-toggle.open span:nth-child(2) {
  opacity: 0;
}


.menu-toggle.open span:nth-child(3) {
  transform:
    translateY(-7px)
    rotate(-45deg);
}


/* ========================================
   MENÚ MÓVIL
======================================== */

.mobile-navigation {
  display: none;
}


/* ========================================
   CALLE
======================================== */

.street {
  position: relative;

  margin-top: 18px;
}


.street-label {
  display: block;

  margin-bottom: 9px;

  text-align: center;

  color: #74736f;

  font-size: 8px;

  letter-spacing: 0.22em;
}


.street-line {
  display: grid;

  grid-template-columns:
    1fr
    120px
    1fr;

  align-items: center;
}


.line {
  height: 3px;

  background: #151515;
}


.access {
  height: 32px;

  display: flex;
  flex-direction: column;

  align-items: center;
  justify-content: flex-start;

  gap: 2px;

  font-size: 7px;

  letter-spacing: 0.18em;
}


.arrow {
  font-size: 14px;
}


/* ========================================
   TABLET + MÓVIL
======================================== */

@media (max-width: 1100px) {

  .arch-header {
    padding:
      24px
      5%
      0;
  }


  .header-grid {
    grid-template-columns:
      1fr
      auto;

    gap: 20px;
  }


  /* ocultamos desktop */

  .navigation,
  .plan-reference {
    display: none;
  }


  /* mostramos hamburguesa */

  .menu-toggle {
    display: flex;

    justify-self: end;
  }


  /* =====================================
     MENÚ
  ====================================== */

  .mobile-navigation {
    margin-top: 22px;

    display: block;

    border-top: 3px solid #151515;
    border-bottom: 3px solid #151515;

    background: #f3f1eb;
  }


  .mobile-menu-reference {
    min-height: 42px;

    padding: 0 16px;

    display: flex;
    align-items: center;
    justify-content: space-between;

    border-bottom: 1px solid #b9b7b0;

    color: #74736f;

    font-size: 7px;

    letter-spacing: 0.18em;
  }


  /* ITEM */

  .mobile-nav-item {
    min-height: 64px;

    padding: 0 16px;

    display: grid;

    grid-template-columns:
      45px
      1fr
      auto;

    align-items: center;

    border-bottom: 1px solid #b9b7b0;

    color: #151515;

    text-decoration: none;

    transition:
      background 0.25s ease,
      color 0.25s ease;
  }


  .mobile-nav-item:hover {
    background: #151515;
    color: #f3f1eb;
  }


  .mobile-number {
    color: #74736f;

    font-size: 8px;

    letter-spacing: 0.14em;
  }


  .mobile-nav-item:hover
  .mobile-number {
    color: #f3f1eb;
  }


  .mobile-label {
    font-size: 12px;

    letter-spacing: 0.2em;
  }


  .mobile-arrow {
    font-size: 15px;
  }


  /* FOOTER DEL MENÚ */

  .mobile-menu-footer {
    min-height: 40px;

    padding: 0 16px;

    display: flex;
    align-items: center;
    justify-content: space-between;

    color: #74736f;

    font-size: 6px;

    letter-spacing: 0.17em;
  }


  /* =====================================
     ANIMACIÓN
  ====================================== */

  .mobile-menu-enter-active,
  .mobile-menu-leave-active {
    transition:
      opacity 0.25s ease,
      transform 0.25s ease;
  }


  .mobile-menu-enter-from,
  .mobile-menu-leave-to {
    opacity: 0;

    transform:
      translateY(-10px);
  }

}


/* ========================================
   CELULAR
======================================== */

@media (max-width: 600px) {

  .arch-header {
    padding:
      20px
      20px
      0;
  }


  .header-grid {
    min-height: 75px;
  }


  .brand {
    gap: 12px;
  }


  .brand-mark {
    width: 36px;
    height: 36px;

    font-size: 11px;
  }


  .brand-text strong {
    font-size: 10px;
  }


  .brand-text small {
    font-size: 6px;
  }


  .menu-toggle {
    width: 46px;
    height: 46px;
  }


  .menu-toggle span {
    width: 21px;
  }


  .mobile-navigation {
    margin-top: 16px;
  }


  .mobile-nav-item {
    min-height: 58px;

    grid-template-columns:
      40px
      1fr
      auto;
  }


  .mobile-label {
    font-size: 11px;
  }


  .street {
    margin-top: 16px;
  }


  .street-line {
    grid-template-columns:
      1fr
      85px
      1fr;
  }

}
</style>