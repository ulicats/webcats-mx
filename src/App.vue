<template>
  <div id="app">
    <Navbar />

    <div class="global-trunk" />

    <PageLoader v-if="loading" />

    <main class="main-content">
      <router-view v-if="!loading" />
    </main>

    <!-- ⛔ EL FOOTER NO EXISTE HASTA QUE TERMINE EL LOADER -->
    <Footer v-if="!loading" />
  </div>
</template>

<script setup>
import { ref, onMounted } from "vue"
import Navbar from "./components/Navbar.vue"
import Footer from "./components/Footer.vue"
import PageLoader from "./components/PageLoader.vue"

const loading = ref(true)

onMounted(() => {
  setTimeout(() => {
    loading.value = false
  }, 5200)
})
</script>


<style>
/* FIX RESPONSIVE PARA EL ÁRBOL */
@media (max-width: 900px) {
  .tree-desktop-wrapper {
    display: none !important;
    height: 0 !important;
    min-height: 0 !important;
    margin: 0 !important;
    padding: 0 !important;
    overflow: hidden !important;
  }
}

/* ===================== */
/* ESCENARIO PRINCIPAL  */
/* ===================== */

.stage {
  min-height: 100vh;
  position: relative;
  overflow: hidden;
}

.global-trunk {
  position: absolute;
  left: 105px;              /* alinea con logo */
  top: 40px;               /* debajo del Navbar */
  width: 4px;
  height: calc(100vh - 64px);
  background: linear-gradient(
    to bottom,
    rgba(255,255,255,0.85),
    rgba(255,255,255,0.15)
  );
  z-index: 5;
  pointer-events: none;
}

@media (max-width: 480px) {
  .global-trunk {
    left: 40px;          /* alineado al logo en mobile */
    top: 56px;           /* justo debajo del header */
    width: 4px;
    opacity: 0.25;
    height: calc(100vh - 56px);
  }
}



/* IMPORTANTÍSIMO */
html,
body {
  margin: 0;
  padding: 0;
  background:rgb(0, 0, 0);
}

</style>
