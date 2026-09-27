<template>
  <a
    :href="whatsappUrl"
    class="tepic-whatsapp"
    target="_blank"
    rel="noopener noreferrer"
    aria-label="Cotizar página web por WhatsApp"
    title="Cotiza tu página web por WhatsApp"
  >
    <span class="tepic-whatsapp__pulse"></span>

    <svg
      class="tepic-whatsapp__icon"
      viewBox="0 0 32 32"
      aria-hidden="true"
    >
      <path
        fill="currentColor"
        d="M19.11 17.21c-.26-.13-1.52-.75-1.76-.84-.24-.09-.41-.13-.59.13-.17.26-.67.84-.82 1.01-.15.17-.3.2-.56.07-.26-.13-1.09-.4-2.08-1.28-.77-.69-1.29-1.54-1.44-1.8-.15-.26-.02-.4.11-.53.12-.12.26-.3.39-.45.13-.15.17-.26.26-.43.09-.17.04-.32-.02-.45-.07-.13-.59-1.42-.8-1.95-.21-.51-.43-.44-.59-.45h-.5c-.17 0-.45.07-.69.32-.24.26-.91.89-.91 2.17s.93 2.52 1.06 2.69c.13.17 1.83 2.8 4.44 3.93.62.27 1.1.43 1.48.55.62.2 1.19.17 1.64.1.5-.07 1.52-.62 1.74-1.22.22-.6.22-1.12.15-1.22-.06-.11-.24-.17-.5-.3Z"
      />
      <path
        fill="currentColor"
        d="M16.03 3C8.85 3 3.02 8.82 3.02 16c0 2.29.6 4.53 1.73 6.5L3 29l6.67-1.75A12.95 12.95 0 0 0 16.02 29h.01C23.2 29 29 23.18 29 16S23.2 3 16.03 3Zm0 23.81h-.01a10.78 10.78 0 0 1-5.5-1.51l-.39-.23-3.96 1.04 1.06-3.86-.25-.4A10.8 10.8 0 1 1 16.03 26.8Z"
      />
    </svg>

    <span class="tepic-whatsapp__text">
      <small>¿Tienes un proyecto?</small>
      <strong>Cotiza por WhatsApp</strong>
    </span>
  </a>
</template>

<script setup>
const phone = '523332341375'

const message =
  'Hola Webcats, vi su página de diseño web en Tepic y me gustaría cotizar una página web.'

const whatsappUrl =
  `https://wa.me/${phone}?text=${encodeURIComponent(message)}`
</script>

<style scoped>
.tepic-whatsapp {
  position: fixed;
  right: 24px;
  bottom: 24px;
  z-index: 9999;

  display: flex;
  align-items: center;
  gap: 12px;

  min-height: 58px;
  padding: 9px 18px 9px 11px;

  color: #fff;
  background: #25d366;
  border: 1px solid rgba(255, 255, 255, 0.18);
  border-radius: 100px;

  text-decoration: none;

  box-shadow:
    0 15px 35px rgba(0, 0, 0, 0.25),
    0 5px 15px rgba(37, 211, 102, 0.25);

  transition:
    transform 0.25s ease,
    box-shadow 0.25s ease;
}

.tepic-whatsapp:hover {
  transform: translateY(-4px);

  box-shadow:
    0 20px 40px rgba(0, 0, 0, 0.3),
    0 8px 25px rgba(37, 211, 102, 0.35);
}

.tepic-whatsapp__icon {
  position: relative;
  z-index: 2;

  width: 38px;
  height: 38px;

  flex-shrink: 0;
}

.tepic-whatsapp__text {
  position: relative;
  z-index: 2;

  display: flex;
  flex-direction: column;
  line-height: 1.15;
}

.tepic-whatsapp__text small {
  margin-bottom: 3px;

  font-size: 10px;
  font-weight: 500;
  letter-spacing: 0.04em;

  opacity: 0.85;
}

.tepic-whatsapp__text strong {
  font-size: 13px;
  font-weight: 700;
  white-space: nowrap;
}

/* PULSO */

.tepic-whatsapp__pulse {
  position: absolute;
  left: 17px;
  top: 17px;

  width: 28px;
  height: 28px;

  border-radius: 50%;
  background: #25d366;

  animation: whatsapp-pulse 2s infinite;
}

@keyframes whatsapp-pulse {
  0% {
    transform: scale(1);
    opacity: 0.7;
  }

  70% {
    transform: scale(2);
    opacity: 0;
  }

  100% {
    transform: scale(2);
    opacity: 0;
  }
}

/* RESPONSIVE */

@media (max-width: 768px) {
  .tepic-whatsapp {
    right: 16px;
    bottom: 16px;

    width: 58px;
    height: 58px;
    min-height: 58px;

    justify-content: center;

    padding: 0;

    border-radius: 50%;
  }

  .tepic-whatsapp__icon {
    width: 36px;
    height: 36px;
  }

  .tepic-whatsapp__text {
    display: none;
  }

  .tepic-whatsapp__pulse {
    left: 15px;
    top: 15px;
  }
}

@media (prefers-reduced-motion: reduce) {
  .tepic-whatsapp,
  .tepic-whatsapp__pulse {
    transition: none;
    animation: none;
  }
}
</style>