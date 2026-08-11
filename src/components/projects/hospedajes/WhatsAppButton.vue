<template>
  <a
    class="hospedaje-whatsapp"
    :href="whatsappUrl"
    target="_blank"
    rel="noopener noreferrer"
    aria-label="Reservar por WhatsApp"
  >
    <svg viewBox="0 0 32 32" aria-hidden="true">
      <path
        fill="currentColor"
        d="M16.04 3C8.87 3 3.05 8.78 3.05 15.91c0 2.27.6 4.49 1.72 6.44L3 29l6.83-1.78a13.03 13.03 0 0 0 6.2 1.57h.01C23.21 28.79 29 23 29 15.91S23.21 3 16.04 3Zm0 23.61a10.9 10.9 0 0 1-5.55-1.52l-.4-.24-4.05 1.06 1.08-3.93-.26-.4a10.64 10.64 0 0 1-1.65-5.67c0-5.94 4.86-10.74 10.83-10.74 5.96 0 10.81 4.8 10.81 10.74 0 5.92-4.85 10.7-10.81 10.7Zm5.94-8.02c-.32-.16-1.92-.94-2.22-1.05-.3-.11-.51-.16-.73.16-.21.32-.83 1.05-1.02 1.27-.19.21-.38.24-.7.08-.32-.16-1.36-.5-2.59-1.58a9.6 9.6 0 0 1-1.79-2.22c-.19-.32-.02-.49.14-.65.15-.14.32-.38.49-.57.16-.19.21-.32.32-.54.11-.21.05-.4-.03-.57-.08-.16-.73-1.75-1-2.4-.26-.63-.53-.54-.73-.55h-.62c-.22 0-.57.08-.86.4-.3.32-1.13 1.1-1.13 2.69 0 1.59 1.16 3.13 1.32 3.34.16.21 2.28 3.47 5.52 4.87.77.33 1.37.53 1.84.68.77.24 1.48.21 2.03.13.62-.09 1.92-.78 2.19-1.54.27-.76.27-1.4.19-1.54-.08-.13-.3-.21-.62-.37Z"
      />
    </svg>
  </a>
</template>

<script setup>
const phone = "523332341375";

const message =
  "Hola, me interesa conocer la disponibilidad de hospedaje Cabañas Mazamitla.";

const whatsappUrl = `https://wa.me/${phone}?text=${encodeURIComponent(message)}`;
</script>

<style scoped>
.hospedaje-whatsapp {
  position: fixed;
  right: 25px;
  bottom: 25px;
  z-index: 1200;
  width: 61px;
  height: 61px;
  border: 4px solid rgba(255, 255, 255, 0.88);
  border-radius: 50%;
  display: grid;
  place-items: center;
  color: var(--hospedaje-white);
  background: #25d366;
  box-shadow: 0 14px 35px rgba(0, 0, 0, 0.24);
  transition:
    transform 0.2s ease,
    box-shadow 0.2s ease;
}

.hospedaje-whatsapp:hover {
  transform: translateY(-4px) scale(1.03);
  box-shadow: 0 19px 42px rgba(0, 0, 0, 0.3);
}

.hospedaje-whatsapp svg {
  width: 32px;
  height: 32px;
}
</style>