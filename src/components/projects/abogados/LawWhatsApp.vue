<template>
  <a
    :href="whatsappUrl"
    target="_blank"
    rel="noopener noreferrer"
    class="law-whatsapp"
    aria-label="Contactar por WhatsApp"
  >
    <span class="law-whatsapp__icon">
      <svg
        viewBox="0 0 32 32"
        aria-hidden="true"
      >
        <path
          fill="currentColor"
          d="M16.02 3C8.83 3 3 8.69 3 15.71c0 2.48.74 4.79 2 6.75L3.69 29l6.75-1.77a13.2 13.2 0 0 0 5.58 1.24C23.2 28.47 29 22.77 29 15.71S23.2 3 16.02 3Zm0 23.28c-1.83 0-3.63-.48-5.2-1.39l-.37-.22-4 .99 1.06-3.85-.24-.39a10.4 10.4 0 0 1-1.61-5.71c0-5.83 4.65-10.53 10.36-10.53 5.69 0 10.32 4.7 10.32 10.53 0 5.82-4.63 10.57-10.32 10.57Zm5.68-7.9c-.31-.15-1.84-.88-2.13-.98-.28-.1-.49-.15-.69.15-.21.3-.8.98-.98 1.18-.18.2-.36.23-.67.08-.31-.15-1.31-.47-2.5-1.5a9.36 9.36 0 0 1-1.73-2.09c-.18-.3-.02-.46.14-.61.14-.14.31-.36.46-.54.15-.18.2-.31.31-.51.1-.2.05-.38-.03-.53-.08-.15-.69-1.62-.95-2.22-.25-.59-.51-.51-.69-.52h-.59c-.21 0-.54.08-.82.38-.28.31-1.08 1.03-1.08 2.51s1.11 2.92 1.26 3.12c.15.2 2.18 3.24 5.28 4.54.74.31 1.31.5 1.76.64.74.23 1.41.2 1.94.12.59-.09 1.84-.73 2.1-1.44.26-.71.26-1.32.18-1.45-.08-.13-.28-.2-.59-.35Z"
        />
      </svg>
    </span>

    <span class="law-whatsapp__text">
      <small>
        Consulta
      </small>

      <strong>
        WhatsApp
      </strong>
    </span>
  </a>
</template>

<script setup>
import { computed } from "vue";

const whatsappNumber = "523111234567";

const message = `
Hola, quisiera solicitar información sobre una consulta jurídica.

¿Podrían orientarme sobre los siguientes pasos?
`;

const whatsappUrl = computed(() => {
  return `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(
    message.trim()
  )}`;
});
</script>

<style scoped>
.law-whatsapp {
  position: fixed;

  right: 25px;
  bottom: 25px;

  z-index: 999;

  min-height: 54px;

  display: flex;
  align-items: center;

  gap: 10px;

  padding: 7px 17px 7px 8px;

  border: 1px solid var(--law-gold);

  background: var(--law-primary);

  color: var(--law-white);

  box-shadow: var(--law-shadow-md);

  text-decoration: none;

  transition:
    transform var(--law-transition),
    background var(--law-transition),
    box-shadow var(--law-transition);
}

.law-whatsapp:hover {
  transform: translateY(-4px);

  background: var(--law-primary-soft);

  box-shadow: var(--law-shadow-lg);
}

/* =========================================================
   ICONO
========================================================= */

.law-whatsapp__icon {
  width: 40px;
  height: 40px;

  display: flex;
  align-items: center;
  justify-content: center;

  background: var(--law-gold);

  color: var(--law-primary);
}

.law-whatsapp__icon svg {
  width: 23px;
  height: 23px;
}

/* =========================================================
   TEXTO
========================================================= */

.law-whatsapp__text {
  display: flex;
  flex-direction: column;

  line-height: 1.1;
}

.law-whatsapp__text small {
  color: rgba(255, 255, 255, 0.6);

  font-family: "Inter", Arial, sans-serif;

  font-size: 7px;
  font-weight: 700;

  letter-spacing: 1px;
  text-transform: uppercase;
}

.law-whatsapp__text strong {
  margin-top: 3px;

  color: var(--law-white);

  font-family:
    "Cormorant Garamond",
    Georgia,
    serif;

  font-size: 17px;
  font-weight: 600;
}

/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 600px) {
  .law-whatsapp {
    right: 15px;
    bottom: 15px;

    width: 52px;
    height: 52px;
    min-height: 52px;

    justify-content: center;

    padding: 5px;
  }

  .law-whatsapp__icon {
    width: 40px;
    height: 40px;
  }

  .law-whatsapp__text {
    display: none;
  }
}
</style>