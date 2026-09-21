<template>
  <nav class="navbar">

    <div class="terminal-bar-wrapper">

      <div class="terminal-bar">

        <!-- =========================================
             LOGO WEBCATS
        ========================================== -->
        <router-link
          to="/"
          class="logo"
          @click="closeMenu"
        >
          <img
            src="/src/assets/logos/LOGOPRINCIPAL_WEBCATS.svg"
            class="logo-img"
            alt="Webcats"
          />

          <span>
            webcats<span class="dot-mx">.mx</span>
          </span>
        </router-link>


        <!-- =========================================
             NAVEGACIÓN DESKTOP / MOBILE
        ========================================== -->
        <ul
          class="nav-links"
          :class="{ open: menuOpen }"
        >

          <li>
            <router-link
              to="/"
              @click="closeMenu"
            >
              <span class="terminal-icon">&gt;_</span>

              Inicio

              <span class="tab-close">×</span>
            </router-link>
          </li>

          <li>
            <router-link
              to="/acerca"
              @click="closeMenu"
            >
              <span class="terminal-icon">&gt;_</span>

              Acerca

              <span class="tab-close">×</span>
            </router-link>
          </li>

          <li>
            <router-link
              to="/servicios"
              @click="closeMenu"
            >
              <span class="terminal-icon">&gt;_</span>

              Servicios

              <span class="tab-close">×</span>
            </router-link>
          </li>

          <li>
            <router-link
              to="/portafolio"
              @click="closeMenu"
            >
              <span class="terminal-icon">&gt;_</span>

              Portafolio

              <span class="tab-close">×</span>
            </router-link>
          </li>

          <li>
            <router-link
              to="/contacto"
              @click="closeMenu"
            >
              <span class="terminal-icon">&gt;_</span>

              Contacto

              <span class="tab-close">×</span>
            </router-link>
          </li>

        </ul>


        <!-- =========================================
             ACCIONES DESKTOP
        ========================================== -->
        <div class="terminal-actions">

          <button
            class="new-tab"
            type="button"
          >
            +
          </button>

          <button
            class="tab-menu"
            type="button"
          >
            ⌄
          </button>

        </div>


        <!-- =========================================
             HAMBURGUESA MOBILE
        ========================================== -->
        <button
          class="hamburger"
          type="button"
          aria-label="Abrir menú"
          :aria-expanded="menuOpen"
          :class="{ open: menuOpen }"
          @click="toggleMenu"
        >
          <span></span>
          <span></span>
          <span></span>
        </button>

      </div>

    </div>

  </nav>
</template>


<script>
import { ref } from "vue";

export default {
  name: "Navbar",

  setup() {

    const menuOpen = ref(false);

    const toggleMenu = () => {

      menuOpen.value = !menuOpen.value;

      document.body.style.overflow =
        menuOpen.value ? "hidden" : "auto";

    };


    const closeMenu = () => {

      menuOpen.value = false;

      document.body.style.overflow = "auto";

    };


    return {
      menuOpen,
      toggleMenu,
      closeMenu
    };

  }
};
</script>


<style scoped>
@import url(
  "https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600;700&display=swap"
);


/* =========================================================
   NAVBAR
========================================================= */

.navbar {
  width: 100%;

  position: sticky;
  top: 0;

  z-index: 1000;

  background: #2f2f2f;

  border-top: 1px solid #444;
  border-bottom: 1px solid #454545;

  font-family: "JetBrains Mono", monospace;
}


/* =========================================================
   WRAPPER
========================================================= */

.terminal-bar-wrapper {
  width: 100%;

  display: flex;
  justify-content: center;
}


/* =========================================================
   BARRA TERMINAL
========================================================= */

.terminal-bar {
  width: min(94%, 1650px);

  height: 64px;

  display: flex;

  /*
   * IMPORTANTE:
   * Desktop conserva la alineación inferior
   * para simular las pestañas de terminal.
   */
  align-items: flex-end;

  padding-top: 8px;

  box-sizing: border-box;
}


/* =========================================================
   LOGO
========================================================= */

.logo {
  height: 56px;

  min-width: 210px;

  padding: 0 22px;

  display: flex;
  align-items: center;

  gap: 12px;

  box-sizing: border-box;

  color: #22c55e;

  text-decoration: none;

  font-size: 17px;
  font-weight: 700;

  border-right: 1px solid #484848;
}


.logo-img {
  width: 34px;
  height: 34px;

  object-fit: contain;

  filter: brightness(1.15);
}


.dot-mx {
  color: #22d3ee;
}


/* =========================================================
   PESTAÑAS
========================================================= */

.nav-links {
  height: 56px;

  display: flex;
  align-items: flex-end;

  margin: 0;
  padding: 0;

  list-style: none;
}


.nav-links li {
  height: 52px;

  display: flex;
  align-items: flex-end;

  position: relative;
}


/* =========================================================
   PESTAÑA NORMAL
========================================================= */

.nav-links a {
  position: relative;

  min-width: 145px;
  height: 48px;

  padding: 0 17px;

  display: flex;
  align-items: center;
  justify-content: flex-start;

  gap: 9px;

  box-sizing: border-box;

  color: #d0d0d0;

  background: transparent;

  text-decoration: none;

  font-size: 14px;
  font-weight: 500;

  border-radius: 9px 9px 0 0;

  transition:
    height 0.18s ease,
    background 0.18s ease,
    color 0.18s ease,
    transform 0.18s ease;
}


/* =========================================================
   HOVER
========================================================= */

.nav-links a:hover {
  height: 54px;

  background: #0b0b0d;

  color: #ffffff;

  transform: translateY(0);

  border-radius: 10px 10px 0 0;

  z-index: 4;
}


.nav-links:has(a:hover)
a.router-link-exact-active:not(:hover) {
  background: transparent;

  color: #d0d0d0;

  height: 48px;

  transform: none;

  z-index: 1;
}


/* =========================================================
   PESTAÑA ACTIVA
========================================================= */

.nav-links a.router-link-exact-active {
  height: 54px;

  background: #0b0b0d;

  color: #ffffff;

  transform: translateY(0);

  border-radius: 10px 10px 0 0;

  z-index: 3;
}


.nav-links a.router-link-exact-active::after {
  display: none;
}


/* =========================================================
   ICONO TERMINAL
========================================================= */

.terminal-icon {
  color: #22d3ee;

  font-size: 12px;

  opacity: 0;

  width: 0;

  overflow: hidden;

  transition:
    opacity 0.2s ease,
    width 0.2s ease;
}


.nav-links a.router-link-exact-active .terminal-icon {
  width: 22px;

  opacity: 1;
}


.nav-links a:hover .terminal-icon {
  width: 22px;

  opacity: 1;
}


/* =========================================================
   X DE PESTAÑAS
========================================================= */

.tab-close {
  margin-left: auto;

  width: 24px;
  height: 24px;

  display: grid;
  place-items: center;

  border-radius: 4px;

  color: #bdbdbd;

  font-size: 17px;

  opacity: 0;

  transition:
    opacity 0.2s ease,
    background 0.2s ease;
}


.router-link-exact-active .tab-close {
  opacity: 1;
}


.nav-links a:hover .tab-close {
  opacity: 1;
}


.tab-close:hover {
  background: #505050;

  color: white;
}


/* =========================================================
   BOTONES + / FLECHA
========================================================= */

.terminal-actions {
  height: 54px;

  display: flex;
  align-items: center;

  margin-left: 8px;

  gap: 3px;
}


.new-tab,
.tab-menu {
  border: none;

  background: transparent;

  color: #dddddd;

  font-family: inherit;

  cursor: pointer;

  border-radius: 5px;

  transition: background 0.2s ease;
}


.new-tab {
  width: 40px;
  height: 38px;

  font-size: 23px;
}


.tab-menu {
  width: 34px;
  height: 38px;

  font-size: 16px;
}


.new-tab:hover,
.tab-menu:hover {
  background: #414141;
}


/* =========================================================
   HAMBURGUESA
========================================================= */

.hamburger {
  display: none;

  border: 0;

  background: transparent;

  cursor: pointer;
}


.hamburger span {
  display: block;

  width: 28px;
  height: 2px;

  background: #dddddd;

  transition:
    transform 0.3s ease,
    opacity 0.3s ease;
}


.hamburger.open span:nth-child(1) {
  transform: translateY(7px) rotate(45deg);
}


.hamburger.open span:nth-child(2) {
  opacity: 0;
}


.hamburger.open span:nth-child(3) {
  transform: translateY(-7px) rotate(-45deg);
}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 1100px) {

  .terminal-bar {
    width: 100%;

    padding-left: 15px;
    padding-right: 15px;
  }


  .logo {
    min-width: 185px;
  }


  .nav-links a {
    min-width: 120px;

    padding: 0 13px;

    font-size: 13px;
  }

}


/* =========================================================
   MOBILE / TABLET PEQUEÑA
========================================================= */

@media (max-width: 850px) {

  /*
   * AQUÍ está la corrección importante.
   *
   * Eliminamos por completo la lógica de
   * align-items:flex-end del desktop.
   */

  .terminal-bar {
    width: 100%;

    height: 76px;

    padding: 0 20px;

    display: grid;

    grid-template-columns:
      minmax(0, 1fr)
      56px;

    align-items: center;

    box-sizing: border-box;
  }


  /* =====================================
     LOGO MOBILE
  ===================================== */

  .logo {
    width: fit-content;

    height: auto;
    min-width: 0;

    padding: 0;

    display: flex;
    align-items: center;

    gap: 12px;

    border-right: 0;

    font-size: 16px;

    align-self: center;
  }


  .logo-img {
    width: 31px;
    height: 31px;
  }


  /* =====================================
     OCULTAR ACCIONES DESKTOP
  ===================================== */

  .terminal-actions {
    display: none;
  }


  /* =====================================
     HAMBURGUESA
  ===================================== */

  .hamburger {
    /*
     * Ya NO depende del flex del padre.
     * Tiene su propia celda del grid.
     */

    display: flex;

    width: 56px;
    height: 56px;

    margin: 0;
    padding: 0;

    justify-self: end;
    align-self: center;

    flex-direction: column;

    align-items: center;
    justify-content: center;

    gap: 5px;

    box-sizing: border-box;
  }


  .hamburger span {
    width: 28px;
    height: 2px;

    flex: 0 0 2px;

    background: #dddddd;
  }


  /* =====================================
     MENÚ MOBILE
  ===================================== */

  .nav-links {
    position: fixed;

    top: 76px;
    right: 0;

    width: min(360px, 88%);

    height: calc(100vh - 76px);
    height: calc(100dvh - 76px);

    margin: 0;

    padding: 15px;

    display: flex;

    flex-direction: column;
    align-items: stretch;

    background: #2f2f2f;

    border-left: 1px solid #484848;

    box-sizing: border-box;

    transform: translateX(100%);

    transition: transform 0.3s ease;

    overflow-y: auto;

    z-index: 999;
  }


  .nav-links.open {
    transform: translateX(0);
  }


  .nav-links li {
    width: 100%;
    height: auto;

    display: block;
  }


  .nav-links a,
  .nav-links a:hover,
  .nav-links a.router-link-exact-active {
    width: 100%;
    min-width: 0;

    height: 54px;

    padding: 0 16px;

    display: flex;
    align-items: center;

    transform: none;

    border-radius: 6px;
  }


  .nav-links a.router-link-exact-active {
    background: #111113;
  }


  .terminal-icon {
    width: 22px;

    opacity: 1;
  }

}


/* =========================================================
   CELULAR PEQUEÑO
========================================================= */

@media (max-width: 480px) {

  .terminal-bar {
    height: 72px;

    padding: 0 16px;

    grid-template-columns:
      minmax(0, 1fr)
      52px;
  }


  .logo {
    font-size: 15px;

    gap: 10px;
  }


  .logo-img {
    width: 29px;
    height: 29px;
  }


  .hamburger {
    width: 52px;
    height: 52px;
  }


  .hamburger span {
    width: 27px;
  }


  .nav-links {
    top: 72px;

    width: 88%;

    height: calc(100vh - 72px);
    height: calc(100dvh - 72px);
  }

}
</style>