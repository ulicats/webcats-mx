<template>
  <div v-if="visible" class="loader">
    <div class="logo-wrapper">
      <img
        src="@/assets/logos/LOGOPRINCIPAL_WEBCATS.svg"
        alt="Webcats Loader"
        class="logo"
      />
      <div class="ring"></div>
    </div>

    <p class="text">&gt; Bienvenido a Webcats.mx</p>
  </div>
</template>


<script setup>
import { ref, onMounted } from "vue";

const visible = ref(true);

onMounted(() => {
  setTimeout(() => {
    visible.value = false;
  }, 2500); // duración del telón
});
</script>

<style scoped>
.loader {
  position: fixed;
  inset: 0;
  background: #000;
  z-index: 9999;

  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;

  animation: fadeOut 0.8s ease forwards;
  animation-delay: 3.6s;
}

.logo-wrapper {
  position: relative;
  width: 220px;
  height: 220px;
  margin-bottom: 24px;

  display: flex;
  align-items: center;
  justify-content: center;
}

.logo {
  width: 150px;
  z-index: 2;
}

.ring {
  position: absolute;
  inset: 0;

  border: 3px solid rgba(0, 220, 130, 0.25); /* anillo base */
  border-top-color: #00DC82;               /* highlight Vite */

  border-radius: 50%;
  filter: drop-shadow(0 0 8px rgba(0,220,130,.6));

  animation: spin 1.6s linear infinite;
}


.text {
  font-family: monospace;
  color: #9ca3af;
  font-size: 0.85rem;
  letter-spacing: 0.08em;
}

/* Animaciones */
@keyframes spin {
  to { transform: rotate(360deg); }
}

@keyframes fadeOut {
  to {
    opacity: 0;
    visibility: hidden;
  }
}
</style>
