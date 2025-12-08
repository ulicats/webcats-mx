<template>
  <nav class="navbar" :class="{ scrolled: scrolled }">
    <div class="container nav-content">

      <!-- Logo -->
      <router-link to="/" class="logo">
        <img src="/src/assets/logo.png" alt="Logo Webcats" class="logo-img" />
        Webcats<span class="dot-mx" :class="{ scrolled: scrolled }">.mx</span>
      </router-link>

      <!-- HAMBURGER BUTTON (mobile) -->
      <button class="hamburger" @click="toggleMenu" :class="{ open: menuOpen }">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <!-- NAV LINKS -->
      <ul class="nav-links" :class="{ open: menuOpen }">
        <li><router-link to="/" @click="closeMenu">Inicio</router-link></li>
        <li><router-link to="/acerca" @click="closeMenu">Acerca</router-link></li>
        <li><router-link to="/servicios" @click="closeMenu">Servicios</router-link></li>
        <li><router-link to="/portafolio" @click="closeMenu">Portafolio</router-link></li>
        <li><router-link to="/contacto" @click="closeMenu">Contacto</router-link></li>
      </ul>

    </div>
  </nav>
</template>

<script>
import { ref, onMounted, onBeforeUnmount } from "vue";

export default {
  name: "Navbar",

  setup() {
    const scrolled = ref(false);
    const menuOpen = ref(false);

    const toggleMenu = () => {
      menuOpen.value = !menuOpen.value;
      document.body.style.overflow = menuOpen.value ? "hidden" : "auto";
    };

    const closeMenu = () => {
      menuOpen.value = false;
      document.body.style.overflow = "auto";
    };

    const handleScroll = () => {
      scrolled.value = window.scrollY > 10;
    };

    onMounted(() => {
      window.addEventListener("scroll", handleScroll);
    });

    onBeforeUnmount(() => {
      window.removeEventListener("scroll", handleScroll);
    });

    return { scrolled, menuOpen, toggleMenu, closeMenu };
  }
};
</script>

<style scoped>
/* NAVBAR GENERAL */
.navbar {
  width: 100%;
  padding: 18px 0;
  background: white;
  box-shadow: 0px 2px 10px rgba(0,0,0,0.05);
  position: sticky;
  top: 0;
  z-index: 1000;
  transition: background 0.3s ease, box-shadow 0.3s ease;
}

/* Navbar cuando hay scroll */
.navbar.scrolled {
  background: rgba(255,255,255,0.92);
  backdrop-filter: blur(8px);
  box-shadow: 0px 4px 14px rgba(0,0,0,0.08);
}

/* CONTENIDO */
.nav-content {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 22px;
}

/* LOGO */
.logo {
  display: flex;
  align-items: center;
  gap: 6px; /* espacio entre icono y texto */
  font-size: 1.6rem;
  font-weight: 700;
  color: black;
  text-decoration: none;
}

.logo-img {
  width: 40px;
  height: auto;
}

/* ".mx" pegado */
.dot-mx {
  margin-left: -2px;
  color: #ff3e00;
  transition: color 0.35s ease, transform 0.35s ease;
}

.dot-mx.scrolled {
  color: #007ACC;
  transform: translateY(-2px);
}

/* LINKS */
.nav-links {
  display: flex;
  gap: 25px;
  list-style: none;
  transition: right 0.35s ease;
}

.nav-links a {
  color: #444;
  text-decoration: none;
  font-weight: 500;
  transition: 0.2s ease;
}

.nav-links a:hover {
  color: #000;
}

/* ================================
   HAMBURGER BUTTON
================================ */
.hamburger {
  display: none;
  flex-direction: column;
  gap: 5px;
  background: none;
  border: none;
  cursor: pointer;
  padding: 6px;
  z-index: 2000;
}

.hamburger span {
  width: 28px;
  height: 3px;
  background: #222;
  border-radius: 4px;
  transition: 0.3s ease;
}

/* Morph animation */
.hamburger.open span:nth-child(1) {
  transform: translateY(8px) rotate(45deg);
}
.hamburger.open span:nth-child(2) {
  opacity: 0;
}
.hamburger.open span:nth-child(3) {
  transform: translateY(-8px) rotate(-45deg);
}

/* ================================
   MOBILE MENU SLIDE PANEL
================================ */
@media (max-width: 800px) {

.hamburger {
  display: flex;
}

.nav-links {
  position: fixed;
  top: 0;
  right: 0;
  height: 100vh;
  width: 68%;
  padding: 80px 30px;
  background: white;
  flex-direction: column;
  gap: 22px;
  box-shadow: -4px 0 18px rgba(0,0,0,0.15);
  transition: transform 0.35s ease;
  transform: translateX(100%); /* menú oculto sin romper layout */
  z-index: 1500;
}

.nav-links.open {
  transform: translateX(0); /* menú visible */
}

.logo-img {
  width: 32px;
}

.logo {
  font-size: 1.3rem;
  gap: 4px;
}
}

</style>
