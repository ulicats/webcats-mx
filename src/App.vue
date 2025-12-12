<template>
  <div id="app">
    <Navbar />

    <main class="main-content">
      <router-view />
    </main>

    <Footer />
  </div>
</template>

<script>
import Navbar from "./components/Navbar.vue";
import Footer from "./components/Footer.vue";

export default {
  components: {
    Navbar,
    Footer   
  }
};
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

</style>
