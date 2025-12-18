<template>
  <nav class="navbar">
    <div class="container nav-content">

     <router-link to="/" class="logo terminal-logo">
        <img src="/src/assets/logos/LOGOPRINCIPAL_WEBCATS.svg" class="logo-img" />
        webcats<span class="dot-mx">.mx</span>
      </router-link>



      <!-- Hamburger -->
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
@import url('https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;600&display=swap');

/* ===============================
   NAVBAR BASE – VS CODE STYLE
================================ */
.navbar {
  width: 100%;
  background: #0d0d0f;
  border-bottom: 1px solid rgba(255,255,255,0.06);
  position: sticky;
  top: 0;
  z-index: 1000;
  font-family: 'JetBrains Mono', monospace;
}

/* ===============================
   CONTENIDO
================================ */
.nav-content {
  display: flex;
  align-items: center;
  gap: 28px;
  height: 44px;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

/* ===============================
   LOGO (PROMPT STYLE)
================================ */
.logo {
  color: #22c55e;
  font-weight: 600;
  font-size: 14px;
  text-decoration: none;
  margin-right: 18px;
}

.logo {
  display: flex;
  align-items: center;
  gap: 8px;
  color: #22c55e;
  font-weight: 600;
  font-size: 14px;
  text-decoration: none;
}

/* Logo pequeño, tipo badge */
.logo-img {
  width: 22px;
  height: 22px;
  object-fit: contain;
  filter: brightness(1.1);
}

.terminal-logo {
  position: relative;
  padding-left: 12px;
}


.dot-mx {
  color: #22d3ee;
}

/* ===============================
   LINKS (TABS)
================================ */
.nav-links {
  display: flex;
  gap: 24px;
  list-style: none;
}

.nav-links a {
  color: #9ca3af;
  text-decoration: none;
  font-size: 13px;
  padding-bottom: 6px;
  border-bottom: 2px solid transparent;
  transition: color .2s ease, border-color .2s ease;
}

.nav-links a:hover {
  color: #e5e7eb;
}

/* Active (router-link) */
.router-link-active {
  color: #22d3ee;
  border-bottom: 2px solid #22d3ee;
}

/* ===============================
   HAMBURGER (CONSOLE STYLE)
================================ */
.hamburger {
  display: none;
  flex-direction: column;
  gap: 4px;
  background: none;
  border: none;
  cursor: pointer;
  margin-left: auto;
}

.hamburger span {
  width: 22px;
  height: 2px;
  background: #9ca3af;
  transition: .3s ease;
}

/* ===============================
   MOBILE MENU
================================ */
@media (max-width: 800px) {

  .hamburger {
    display: flex;
  }

  .nav-links {
    position: fixed;
    top: 44px;
    right: 0;
    height: calc(100vh - 44px);
    width: 70%;
    background: #020617;
    flex-direction: column;
    padding: 24px;
    gap: 20px;
    transform: translateX(100%);
    transition: transform .3s ease;
  }

  .nav-links.open {
    transform: translateX(0);
  }

}

</style>
