<template>
  <div id="app">
    <Navbar />
    <main class="main-content">
      <router-view />
    </main>
  </div>
</template>


<script>
import Navbar from "./components/Navbar.vue";

export default {
  components: {
    Navbar
  }
};
</script>

<style scoped>

</style>