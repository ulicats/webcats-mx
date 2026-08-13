<script setup>
const openWhatsApp = () => {
  const message =
    "Hola, me gustaría recibir información sobre las consultas de nutrición.";

  const url = `https://wa.me/?text=${encodeURIComponent(message)}`;

  window.open(url, "_blank");
};
</script>

<template>
  <button
    class="nutri-whatsapp"
    aria-label="Contactar por WhatsApp"
    title="Contactar por WhatsApp"
    @click="openWhatsApp"
  >
    <svg
      viewBox="0 0 32 32"
      aria-hidden="true"
    >
      <path
        fill="currentColor"
        d="M16.04 3C8.84 3 3 8.73 3 15.8c0 2.26.6 4.47 1.74 6.4L3 29l7.02-1.8a13.2 13.2 0 0 0 6.01 1.45h.01C23.24 28.65 29 22.92 29 15.84 29 8.76 23.24 3 16.04 3Zm0 23.5a11.04 11.04 0 0 1-5.62-1.53l-.4-.24-4.17 1.07 1.11-4.03-.26-.41a10.57 10.57 0 0 1-1.65-5.56c0-5.88 4.93-10.66 10.99-10.66 2.93 0 5.69 1.12 7.76 3.16a10.4 10.4 0 0 1 3.22 7.54c0 5.88-4.92 10.66-10.98 10.66Zm6.03-7.98c-.33-.16-1.96-.95-2.26-1.06-.3-.1-.52-.16-.74.16-.22.32-.85 1.06-1.04 1.28-.19.21-.38.24-.71.08-.33-.16-1.39-.5-2.65-1.6a9.84 9.84 0 0 1-1.84-2.25c-.19-.32-.02-.5.14-.66.15-.14.33-.37.49-.56.16-.19.22-.32.33-.53.11-.21.05-.4-.03-.56-.08-.16-.74-1.75-1.01-2.39-.27-.64-.54-.55-.74-.56h-.63c-.22 0-.58.08-.88.4-.3.32-1.15 1.1-1.15 2.68s1.18 3.11 1.34 3.32c.16.21 2.32 3.48 5.62 4.88.79.33 1.4.53 1.88.68.79.24 1.5.21 2.07.13.63-.09 1.96-.79 2.23-1.55.28-.77.28-1.43.19-1.56-.08-.13-.3-.21-.63-.37Z"
      />
    </svg>

    <span class="nutri-whatsapp__tooltip">
      ¿Tienes dudas? Escríbeme
    </span>
  </button>
</template>

<style scoped>
.nutri-whatsapp {
  position: fixed;
  right: 26px;
  bottom: 26px;
  z-index: 150;

  width: 58px;
  height: 58px;

  display: grid;
  place-items: center;

  padding: 0;

  border: 0;
  border-radius: 50%;

  background: #25d366;
  color: #ffffff;

  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);

  cursor: pointer;

  transition:
    transform 0.25s ease,
    box-shadow 0.25s ease;
}

.nutri-whatsapp:hover {
  transform: translateY(-4px) scale(1.04);

  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.25);
}

.nutri-whatsapp svg {
  width: 29px;
  height: 29px;
}

/* TOOLTIP */

.nutri-whatsapp__tooltip {
  position: absolute;
  right: 70px;

  width: max-content;

  padding: 9px 13px;

  border-radius: 8px;

  background: var(--nutri-white);
  color: var(--nutri-text);

  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);

  font-size: 11px;
  font-weight: 600;

  opacity: 0;
  visibility: hidden;
  transform: translateX(5px);

  pointer-events: none;

  transition:
    opacity 0.25s ease,
    visibility 0.25s ease,
    transform 0.25s ease;
}

.nutri-whatsapp:hover .nutri-whatsapp__tooltip {
  opacity: 1;
  visibility: visible;
  transform: translateX(0);
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 600px) {
  .nutri-whatsapp {
    right: 18px;
    bottom: 18px;

    width: 54px;
    height: 54px;
  }

  .nutri-whatsapp svg {
    width: 27px;
    height: 27px;
  }

  .nutri-whatsapp__tooltip {
    display: none;
  }
}
</style>