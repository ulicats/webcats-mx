<template>
  <div id="app">
    <Navbar />

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

/* IMPORTANTÍSIMO */
html,
body {
  margin: 0;
  padding: 0;
}

</style>
