<template>
  <a
    :href="whatsappUrl"
    target="_blank"
    rel="noopener noreferrer"
    class="gym-whatsapp"
    aria-label="Contactar por WhatsApp"
  >
    <span class="gym-whatsapp__pulse"></span>

    <div class="gym-whatsapp__icon">
      <svg
        viewBox="0 0 32 32"
        xmlns="http://www.w3.org/2000/svg"
        aria-hidden="true"
      >
        <path
          fill="currentColor"
          d="M16.02 3C8.84 3 3 8.77 3 15.87c0 2.5.73 4.94 2.12 7.02L3 29l6.32-2.06a13.14 13.14 0 0 0 6.7 1.82h.01C23.2 28.76 29 23 29 15.9S23.2 3 16.02 3Zm0 23.58h-.01a10.9 10.9 0 0 1-5.56-1.51l-.4-.24-3.75 1.22 1.23-3.63-.26-.41a10.62 10.62 0 0 1-1.68-5.74c0-5.88 4.82-10.66 10.75-10.66 5.93 0 10.75 4.78 10.75 10.66s-4.82 10.31-11.07 10.31Zm5.9-8.04c-.32-.16-1.89-.93-2.18-1.04-.29-.1-.5-.16-.71.16-.21.32-.82 1.04-1 1.25-.18.21-.37.24-.69.08-.32-.16-1.35-.49-2.57-1.56-.95-.84-1.59-1.87-1.78-2.19-.18-.32-.02-.49.14-.65.14-.14.32-.37.48-.55.16-.18.21-.32.32-.53.11-.21.05-.4-.03-.56-.08-.16-.71-1.7-.97-2.33-.26-.61-.52-.53-.71-.54h-.61c-.21 0-.55.08-.84.4-.29.32-1.1 1.06-1.1 2.59 0 1.52 1.13 3 1.29 3.2.16.21 2.23 3.36 5.4 4.71.75.32 1.34.51 1.8.65.76.24 1.45.21 2 .13.61-.09 1.89-.76 2.16-1.5.27-.74.27-1.37.19-1.5-.08-.13-.29-.21-.61-.37Z"
        />
      </svg>
    </div>

    <div class="gym-whatsapp__text">
      <span>¿LISTO PARA EMPEZAR?</span>
      <strong>ESCRÍBENOS</strong>
    </div>
  </a>
</template>

<script setup>
const phone = "523110000000";

const message =
  "Hola, quiero conocer más sobre Iron Pulse Performance Club.";

const whatsappUrl =
  `https://wa.me/${phone}?text=${encodeURIComponent(message)}`;
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@600;700;800&display=swap");

.gym-whatsapp {
  position: fixed;

  right: 24px;
  bottom: 24px;

  z-index: 999;

  min-height: 58px;

  padding: 7px 18px 7px 7px;

  display: flex;
  align-items: center;
  gap: 12px;

  background: #d9ff43;
  color: #090909;

  text-decoration: none;

  box-shadow: 0 14px 35px rgba(0, 0, 0, 0.28);

  transition:
    transform 0.3s ease,
    background 0.3s ease;
}

.gym-whatsapp:hover {
  transform: translateY(-4px);
  background: #ffffff;
}

.gym-whatsapp__icon {
  position: relative;
  z-index: 2;

  width: 44px;
  height: 44px;

  display: flex;
  align-items: center;
  justify-content: center;

  background: #090909;
  color: #d9ff43;
}

.gym-whatsapp__icon svg {
  width: 24px;
  height: 24px;
}

.gym-whatsapp__text {
  display: flex;
  flex-direction: column;

  font-family: "Barlow Condensed", sans-serif;
}

.gym-whatsapp__text span {
  font-size: 8px;
  font-weight: 700;
  letter-spacing: 1.4px;

  opacity: 0.55;
}

.gym-whatsapp__text strong {
  margin-top: 1px;

  font-size: 16px;
  font-weight: 800;
  letter-spacing: 1px;
}

.gym-whatsapp__pulse {
  position: absolute;

  left: 7px;
  top: 7px;

  width: 44px;
  height: 44px;

  border: 1px solid rgba(217, 255, 67, 0.7);

  animation: gymWhatsappPulse 2s infinite;

  pointer-events: none;
}

@keyframes gymWhatsappPulse {
  0% {
    transform: scale(1);
    opacity: 0.8;
  }

  70% {
    transform: scale(1.5);
    opacity: 0;
  }

  100% {
    transform: scale(1.5);
    opacity: 0;
  }
}

@media (max-width: 600px) {
  .gym-whatsapp {
    right: 16px;
    bottom: 16px;

    width: 56px;
    height: 56px;

    min-height: 0;

    padding: 6px;

    border-radius: 50%;
  }

  .gym-whatsapp__icon {
    width: 44px;
    height: 44px;

    border-radius: 50%;
  }

  .gym-whatsapp__text {
    display: none;
  }

  .gym-whatsapp__pulse {
    left: 6px;
    top: 6px;

    border-radius: 50%;
  }
}
</style>