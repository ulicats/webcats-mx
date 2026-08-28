<template>
  <div
    class="fin-whatsapp"
    :class="{ 'fin-whatsapp--open': open }"
  >
    <div class="fin-whatsapp__panel">
      <button
        type="button"
        class="fin-whatsapp__close"
        aria-label="Cerrar"
        @click="open = false"
      >
        ×
      </button>

      <span class="fin-whatsapp__eyebrow">
        CONTACTO DIRECTO
      </span>

      <h3>
        Hablemos de su
        <em>estrategia.</em>
      </h3>

      <p>
        Escríbanos por WhatsApp y cuéntenos brevemente
        qué desea resolver.
      </p>

      <a
        :href="whatsappUrl"
        target="_blank"
        rel="noopener noreferrer"
        class="fin-whatsapp__action"
      >
        <span>Iniciar conversación</span>
        <strong>↗</strong>
      </a>

      <small>
        RESPUESTA EN HORARIO DE ATENCIÓN
      </small>
    </div>

    <button
      type="button"
      class="fin-whatsapp__trigger"
      aria-label="Abrir contacto por WhatsApp"
      @click="open = !open"
    >
      <svg viewBox="0 0 32 32" aria-hidden="true">
        <path
          fill="currentColor"
          d="M16.04 3C9.42 3 4.03 8.24 4.03 14.69c0 2.28.69 4.51 1.99 6.41L4 29l8.15-2.1a12.2 12.2 0 0 0 3.89.63h.01c6.62 0 12.01-5.25 12.01-11.7C28.06 9.39 22.67 3 16.04 3Zm0 22.56h-.01a10.1 10.1 0 0 1-3.36-.56l-.59-.2-4.84 1.25 1.29-4.59-.38-.61a9.58 9.58 0 0 1-1.55-5.16c0-5.29 4.46-9.6 9.95-9.6 5.48 0 9.94 4.31 9.94 9.6 0 5.29-4.46 9.87-9.95 9.87Zm5.46-7.22c-.3-.14-1.76-.84-2.03-.94-.27-.1-.47-.14-.67.14-.2.29-.77.94-.94 1.13-.17.19-.35.21-.65.07-.3-.14-1.26-.45-2.4-1.43-.89-.77-1.49-1.72-1.66-2.01-.17-.29-.02-.44.13-.58.13-.13.3-.34.45-.51.15-.17.2-.29.3-.48.1-.19.05-.36-.02-.5-.08-.14-.67-1.56-.91-2.14-.24-.58-.49-.5-.67-.51h-.57c-.2 0-.52.07-.79.36-.27.29-1.04 1-1.04 2.43s1.07 2.82 1.22 3.01c.15.19 2.1 3.1 5.09 4.35.71.3 1.27.48 1.7.61.71.22 1.36.19 1.88.12.57-.08 1.76-.7 2.01-1.37.25-.67.25-1.25.17-1.37-.07-.12-.27-.19-.57-.33Z"
        />
      </svg>

      <span>WhatsApp</span>

      <strong>↗</strong>
    </button>
  </div>
</template>

<script setup>
import { ref } from 'vue'

const open = ref(false)

const whatsappNumber = '523112345678'

const message =
  'Hola, me gustaría recibir información sobre sus servicios financieros.'

const whatsappUrl =
  `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(message)}`
</script>

<style scoped>
.fin-whatsapp {
  position: fixed;
  z-index: 999;
  top: 50%;
  right: 0;
  transform: translateY(-50%);
}

/* =========================
   TRIGGER LATERAL
========================= */

.fin-whatsapp__trigger {
  width: 58px;
  min-height: 205px;
  padding: 18px 0;
  border: 1px solid rgba(183, 155, 100, 0.5);
  border-right: 0;
  background: var(--fin-primary);
  color: var(--fin-white);

  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-between;

  cursor: pointer;

  box-shadow:
    -10px 15px 35px rgba(0, 0, 0, 0.14);

  transition:
    width 0.3s ease,
    background 0.3s ease;
}

.fin-whatsapp__trigger svg {
  width: 21px;
  height: 21px;
  color: var(--fin-accent-light);
}

.fin-whatsapp__trigger > span {
  writing-mode: vertical-rl;
  transform: rotate(180deg);

  font-size: 8px;
  text-transform: uppercase;
  letter-spacing: 3px;

  color: rgba(255, 255, 255, 0.65);
}

.fin-whatsapp__trigger strong {
  color: var(--fin-accent);
  font-size: 15px;
  font-weight: 400;
}

.fin-whatsapp__trigger:hover {
  width: 65px;
  background: #16283a;
}

/* =========================
   PANEL
========================= */

.fin-whatsapp__panel {
  position: absolute;

  top: 50%;
  right: 58px;

  width: 340px;

  padding: 40px 35px;

  background: #0d1b2a;
  color: var(--fin-white);

  border:
    1px solid rgba(183, 155, 100, 0.35);

  transform:
    translateY(-50%)
    translateX(30px);

  opacity: 0;
  visibility: hidden;

  box-shadow:
    -20px 25px 60px rgba(0, 0, 0, 0.22);

  transition:
    opacity 0.3s ease,
    transform 0.3s ease,
    visibility 0.3s ease;
}

.fin-whatsapp--open
.fin-whatsapp__panel {
  opacity: 1;
  visibility: visible;

  transform:
    translateY(-50%)
    translateX(0);
}

/* línea decorativa */

.fin-whatsapp__panel::before {
  content: '';

  position: absolute;

  top: 0;
  left: 35px;

  width: 55px;
  height: 1px;

  background: var(--fin-accent);
}

/* =========================
   CLOSE
========================= */

.fin-whatsapp__close {
  position: absolute;

  top: 18px;
  right: 20px;

  padding: 0;

  border: 0;
  background: transparent;

  color: rgba(255, 255, 255, 0.45);

  font-family: Georgia, serif;
  font-size: 25px;

  cursor: pointer;

  transition: color 0.2s ease;
}

.fin-whatsapp__close:hover {
  color: var(--fin-white);
}

/* =========================
   CONTENT
========================= */

.fin-whatsapp__eyebrow {
  display: block;

  margin-bottom: 20px;

  color: var(--fin-accent);

  font-size: 7px;
  font-weight: 600;

  letter-spacing: 2.6px;
}

.fin-whatsapp__panel h3 {
  margin-bottom: 18px;

  font-family:
    Georgia,
    'Times New Roman',
    serif;

  font-size: 31px;
  line-height: 1.12;

  font-weight: 400;

  color: var(--fin-white);
}

.fin-whatsapp__panel h3 em {
  display: block;

  color: var(--fin-accent-light);

  font-weight: 400;
}

.fin-whatsapp__panel p {
  margin-bottom: 28px;

  color: rgba(255, 255, 255, 0.48);

  font-size: 12px;
  line-height: 1.8;
}

/* =========================
   CTA
========================= */

.fin-whatsapp__action {
  width: 100%;

  padding: 16px 17px;

  display: flex;
  justify-content: space-between;
  align-items: center;

  background: var(--fin-accent);

  color: var(--fin-primary);

  font-size: 9px;
  font-weight: 600;

  text-transform: uppercase;
  letter-spacing: 1.3px;

  transition:
    background 0.25s ease,
    transform 0.25s ease;
}

.fin-whatsapp__action:hover {
  background: var(--fin-accent-light);
  transform: translateY(-2px);
}

.fin-whatsapp__action strong {
  font-size: 16px;
  font-weight: 400;
}

.fin-whatsapp__panel > small {
  display: block;

  margin-top: 17px;

  color: rgba(255, 255, 255, 0.25);

  font-size: 6px;

  letter-spacing: 1.8px;
}

/* =========================
   MOBILE
========================= */

@media (max-width: 600px) {

  .fin-whatsapp {
    top: auto;
    right: 16px;
    bottom: 16px;

    transform: none;
  }

  .fin-whatsapp__trigger {
    width: 58px;
    min-height: 58px;
    height: 58px;

    padding: 0;

    border: 1px solid var(--fin-accent);
  }

  .fin-whatsapp__trigger:hover {
    width: 58px;
  }

  .fin-whatsapp__trigger svg {
    width: 25px;
    height: 25px;
  }

  .fin-whatsapp__trigger > span,
  .fin-whatsapp__trigger > strong {
    display: none;
  }

  .fin-whatsapp__panel {
    position: fixed;

    top: auto;
    right: 16px;
    bottom: 88px;

    width: calc(100vw - 32px);

    padding: 35px 28px;

    transform: translateY(20px);
  }

  .fin-whatsapp--open
  .fin-whatsapp__panel {
    transform: translateY(0);
  }
}
</style>