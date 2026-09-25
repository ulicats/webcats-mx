<script setup>
import { catalogConfig } from '../../../data/catalogo/catalogConfig'

const abrirWhatsAppMayoreo = () => {
  const numero = catalogConfig.contact.whatsapp

  if (!numero) {
    console.warn('No hay un número de WhatsApp configurado.')
    return
  }

  const mensaje = encodeURIComponent(
    `Hola, me interesa realizar una compra por mayoreo.

¿Me pueden compartir información sobre precios, cantidades y condiciones para pedidos de mayoreo?`
  )

  window.open(
    `https://wa.me/${numero}?text=${mensaje}`,
    '_blank',
    'noopener,noreferrer'
  )
}
</script>

<template>
  <section id="mayoreo" class="mayoreo">

    <!-- COPY -->
    <div class="mayoreo-copy">
      <span class="kicker">
        Auralyn para negocios
      </span>

      <h2>
        Compra más.
        <em>Vende más.</em>
      </h2>

      <p>
        Precios especiales para boutiques,
        tiendas y distribuidores.
      </p>

      <!-- BOTÓN WHATSAPP -->
      <button
        type="button"
        class="mayoreo-button"
        @click="abrirWhatsAppMayoreo"
      >
        <span class="button-text">
          Comprar por mayoreo
        </span>

        <span class="whatsapp-icon">
          <svg
            viewBox="0 0 24 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true"
          >
            <path
              d="M20.52 3.48A11.82 11.82 0 0 0 12.09 0C5.52 0 .17 5.35.17 11.93c0 2.1.55 4.15 1.6 5.95L.07 24l6.27-1.64a11.9 11.9 0 0 0 5.74 1.46h.01c6.57 0 11.92-5.35 11.92-11.93 0-3.19-1.24-6.18-3.49-8.41ZM12.09 21.8h-.01a9.88 9.88 0 0 1-5.03-1.38l-.36-.21-3.72.98.99-3.63-.23-.37a9.88 9.88 0 0 1-1.52-5.26c0-5.45 4.43-9.88 9.89-9.88 2.64 0 5.12 1.03 6.99 2.9a9.81 9.81 0 0 1 2.89 6.99c-.01 5.44-4.44 9.86-9.89 9.86Z"
              fill="currentColor"
            />

            <path
              d="M17.52 14.4c-.3-.15-1.76-.87-2.03-.97-.27-.1-.47-.15-.67.15-.2.3-.77.97-.94 1.17-.17.2-.35.22-.64.07-.3-.15-1.25-.46-2.38-1.47-.88-.78-1.47-1.75-1.64-2.05-.17-.3-.02-.46.13-.61.13-.13.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.08-.15-.67-1.62-.92-2.22-.24-.58-.49-.5-.67-.51h-.57c-.2 0-.52.07-.79.37-.27.3-1.04 1.02-1.04 2.49 0 1.47 1.07 2.89 1.22 3.09.15.2 2.1 3.21 5.09 4.5.71.31 1.27.49 1.7.63.71.23 1.36.19 1.87.12.57-.08 1.76-.72 2.01-1.42.25-.7.25-1.3.17-1.42-.07-.13-.27-.2-.57-.35Z"
              fill="currentColor"
            />
          </svg>
        </span>
      </button>
    </div>

    <!-- OPCIONES -->
    <div class="mayoreo-options">

      <div class="option">
        <span>Desde 6 piezas</span>
        <strong>Precio especial</strong>
      </div>

      <div class="option">
        <span>Desde 12 piezas</span>
        <strong>Precio mayoreo</strong>
      </div>

      <div class="option">
        <span>Grandes pedidos</span>
        <strong>Distribuidores</strong>
      </div>

    </div>

    <!-- DECORACIÓN -->
    <div class="mayoreo-decoration">
      <span>AURALYN</span>
    </div>

  </section>
</template>

<style scoped>
.mayoreo {
  position: relative;

  min-height: 510px;

  display: grid;
  grid-template-columns: 1fr 1fr;

  overflow: hidden;

  background: #aebfae;
  color: #24211f;
}

/* =========================================
   COPY
========================================= */

.mayoreo-copy {
  position: relative;
  z-index: 2;

  display: flex;
  align-items: flex-start;
  flex-direction: column;
  justify-content: center;

  padding:
    80px
    60px
    80px
    max(40px, calc((100vw - 1500px) / 2));
}

.kicker {
  margin-bottom: 20px;

  font-size: 10px;
  font-weight: 700;
  letter-spacing: .25em;
  text-transform: uppercase;
}

.mayoreo h2 {
  margin: 0;

  font-size: clamp(55px, 6vw, 90px);
  font-weight: 500;
  letter-spacing: -.06em;
  line-height: .85;
}

.mayoreo h2 em {
  display: block;

  margin-top: 10px;

  font-family: Georgia, "Times New Roman", serif;
  font-weight: 400;
}

.mayoreo-copy p {
  max-width: 380px;

  margin: 28px 0 0;

  font-size: 13px;
  line-height: 1.7;
}

/* =========================================
   BOTÓN WHATSAPP
========================================= */

.mayoreo-button {
  margin-top: 32px;

  min-height: 56px;

  display: inline-flex;
  align-items: center;
  justify-content: space-between;

  gap: 25px;

  padding: 7px 8px 7px 26px;

  border: 1px solid rgba(169, 125, 135, 0.35);
  border-radius: 999px;

  background: #f7e4e8;
  color: #5f4b50;

  font-family: inherit;

  cursor: pointer;

  box-shadow:
    0 8px 25px rgba(86, 66, 70, 0.08);

  transition:
    background 0.3s ease,
    color 0.3s ease,
    transform 0.3s ease,
    box-shadow 0.3s ease;
}

.button-text {
  font-size: 10px;
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
}

/* CÍRCULO DEL ICONO */

.whatsapp-icon {
  width: 42px;
  height: 42px;

  display: grid;
  place-items: center;

  flex-shrink: 0;

  border-radius: 50%;

  background: #a97d87;
  color: #ffffff;

  transition:
    background 0.3s ease,
    transform 0.3s ease;
}

.whatsapp-icon svg {
  width: 20px;
  height: 20px;
}

/* HOVER */

.mayoreo-button:hover {
  background: #fffaf8;
  color: #24211f;

  transform: translateY(-2px);

  box-shadow:
    0 12px 30px rgba(86, 66, 70, 0.13);
}

.mayoreo-button:hover .whatsapp-icon {
  background: #8c6a73;
  transform: scale(1.06);
}

/* =========================================
   OPTIONS
========================================= */

.mayoreo-options {
  position: relative;
  z-index: 2;

  display: flex;
  justify-content: center;
  flex-direction: column;

  padding:
    70px
    max(40px, calc((100vw - 1500px) / 2))
    70px
    80px;
}

.option {
  padding: 27px 0;

  display: flex;
  align-items: center;
  justify-content: space-between;

  gap: 30px;

  border-bottom: 1px solid rgba(36, 33, 31, .25);
}

.option:first-child {
  border-top: 1px solid rgba(36, 33, 31, .25);
}

.option span {
  font-size: 11px;
  letter-spacing: .08em;
  text-transform: uppercase;
}

.option strong {
  font-family: Georgia, "Times New Roman", serif;
  font-size: clamp(25px, 2.5vw, 38px);
  font-weight: 400;
  font-style: italic;
  text-align: right;
}

/* =========================================
   BACKGROUND WORD
========================================= */

.mayoreo-decoration {
  position: absolute;

  right: -30px;
  bottom: -35px;

  pointer-events: none;
}

.mayoreo-decoration span {
  color: rgba(255, 255, 255, .12);

  font-size: clamp(110px, 17vw, 280px);
  font-weight: 700;
  letter-spacing: -.08em;
  line-height: 1;
}

/* =========================================
   RESPONSIVE
========================================= */

@media (max-width: 800px) {
  .mayoreo {
    grid-template-columns: 1fr;
  }

  .mayoreo-copy {
    padding: 70px 25px 45px;
  }

  .mayoreo-options {
    padding: 20px 25px 70px;
  }
}

@media (max-width: 500px) {
  .mayoreo-copy {
    padding: 55px 24px 40px;
  }

  .mayoreo h2 {
    font-size: 52px;
  }

  .mayoreo-button {
    width: 100%;
  }

  .mayoreo-options {
    padding: 10px 24px 60px;
  }

  .option {
    align-items: flex-start;
    flex-direction: column;

    gap: 7px;
  }

  .option strong {
    text-align: left;
  }

  .mayoreo-decoration {
    right: -15px;
    bottom: -10px;
  }
}
</style>