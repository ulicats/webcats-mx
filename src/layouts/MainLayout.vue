<template>
  <div class="min-h-screen bg-neutral-950 text-white">
    <Navbar />
    <main class="main-content">
      <RouterView />
    </main>
    <Footer />
  </div>
</template>

<script setup>
import Navbar from "../components/Navbar.vue"
import Footer from "../components/Footer.vue"
</script>
