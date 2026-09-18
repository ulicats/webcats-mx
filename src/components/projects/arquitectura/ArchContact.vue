<template>
  <section id="contacto" class="contact-section">

    <!-- MURO SUPERIOR -->
    <div class="top-wall">
      <span></span>

      <div class="entrance">
        <span>ACCESO AL PATIO</span>
        <strong>↓</strong>
      </div>

      <span></span>
    </div>

    <!-- MUROS LATERALES -->
    <div class="side-wall side-wall-left">
      <span class="wall-piece wall-top"></span>

      <div class="garden-opening">
        <span>PATIO / JARDÍN</span>
      </div>

      <span class="wall-piece wall-bottom"></span>
    </div>

    <div class="side-wall side-wall-right">
      <span class="wall-piece wall-top"></span>

      <div class="garden-opening">
        <span>ESPACIO ABIERTO</span>
      </div>

      <span class="wall-piece wall-bottom"></span>
    </div>

    <!-- IDENTIFICACIÓN -->
    <div class="room-label">
      <span class="room-number">06</span>
      <strong>PATIO / CONTACTO</strong>
      <small>ÁREA ABIERTA</small>
    </div>

    <!-- CONTENIDO -->
    <div class="contact-grid">

      <!-- MENSAJE -->
      <div class="contact-copy">

        <span class="section-reference">
          CONTACTO / 06
        </span>

        <h2>
          Construyamos
          <em>tu próximo espacio.</em>
        </h2>

        <p>
          Cada proyecto comienza con una conversación.
          Cuéntanos qué quieres construir, transformar
          o imaginar.
        </p>

        <a
          href="https://wa.me/"
          target="_blank"
          rel="noopener noreferrer"
          class="contact-button"
        >
          <span>INICIAR PROYECTO</span>
          <span class="button-line"></span>
          <span>→</span>
        </a>

      </div>

      <!-- FORMULARIO -->
      <div class="contact-form-wrapper">

        <div class="form-header">
          <span>FICHA / CONTACTO</span>
          <span>FC — 01</span>
        </div>

        <form class="contact-form" @submit.prevent>

          <div class="field">
            <label for="name">01 / NOMBRE</label>

            <input
              id="name"
              type="text"
              placeholder="Tu nombre"
            />
          </div>

          <div class="field">
            <label for="email">02 / CORREO</label>

            <input
              id="email"
              type="email"
              placeholder="correo@ejemplo.com"
            />
          </div>

          <div class="field">
            <label for="project">03 / TIPO DE PROYECTO</label>

            <select id="project">
              <option value="">
                Selecciona una opción
              </option>

              <option>
                Proyecto arquitectónico
              </option>

              <option>
                Diseño de interiores
              </option>

              <option>
                Remodelación
              </option>

              <option>
                Supervisión de obra
              </option>
            </select>
          </div>

          <div class="field field-full">
            <label for="message">
              04 / DESCRIPCIÓN
            </label>

            <textarea
              id="message"
              rows="5"
              placeholder="Háblanos de tu proyecto..."
            ></textarea>
          </div>

          <button type="submit">
            <span>ENVIAR SOLICITUD</span>
            <span>→</span>
          </button>

        </form>

      </div>

    </div>

    <!-- DATOS -->
    <div class="contact-data">

      <div>
        <span>UBICACIÓN</span>
        <strong>MÉXICO</strong>
      </div>

      <div>
        <span>CORREO</span>
        <strong>HOLA@ESTUDIO.MX</strong>
      </div>

      <div>
        <span>TELÉFONO</span>
        <strong>+52 000 000 0000</strong>
      </div>

      <div>
        <span>HORARIO</span>
        <strong>LUN — VIE / 09:00 — 18:00</strong>
      </div>

    </div>

    <!-- MURO FINAL -->
    <div class="bottom-wall">
      <span></span>

      <div class="final-opening">
        <span>FIN DEL RECORRIDO</span>
        <strong>↓</strong>
      </div>

      <span></span>
    </div>

  </section>
</template>

<script setup>
</script>

<style scoped>
.contact-section {
  position: relative;

  width: calc(100% - 110px);
  max-width: 1760px;

  min-height: 850px;

  margin: 0 auto;

  padding: 115px 110px 125px;

  box-sizing: border-box;

  background: #f3f1eb;
  color: #151515;
}


/* ========================================
   MURO SUPERIOR / INFERIOR
======================================== */

.top-wall,
.bottom-wall {
  position: absolute;

  left: 0;

  width: 100%;

  display: grid;

  grid-template-columns:
    1fr
    150px
    1fr;

  align-items: center;
}

.top-wall {
  top: 0;
}

.bottom-wall {
  bottom: 0;
}

.top-wall > span,
.bottom-wall > span {
  height: 5px;

  background: #151515;
}


/* ========================================
   ACCESO
======================================== */

.entrance,
.final-opening {
  height: 50px;

  display: flex;
  flex-direction: column;

  align-items: center;

  color: #74736f;
}

.entrance span,
.final-opening span {
  font-size: 7px;

  letter-spacing: 0.18em;
}

.entrance strong,
.final-opening strong {
  color: #151515;

  font-size: 16px;

  font-weight: 400;
}


/* ========================================
   MUROS LATERALES CON VANOS
======================================== */

.side-wall {
  position: absolute;

  top: 0;
  bottom: 0;

  width: 5px;

  display: grid;

  grid-template-rows:
    20%
    55%
    25%;
}

.side-wall-left {
  left: 0;
}

.side-wall-right {
  right: 0;
}

.wall-piece {
  width: 5px;

  background: #151515;
}

.garden-opening {
  position: relative;

  width: 5px;

  background: #f3f1eb;
}

.garden-opening::before,
.garden-opening::after {
  content: "";

  position: absolute;

  left: -4px;

  width: 13px;
  height: 2px;

  background: #151515;
}

.garden-opening::before {
  top: 0;
}

.garden-opening::after {
  bottom: 0;
}

.garden-opening span {
  position: absolute;

  top: 50%;

  white-space: nowrap;

  transform: translateY(-50%);

  font-size: 6px;

  letter-spacing: 0.15em;

  color: #74736f;
}

.side-wall-left .garden-opening span {
  left: 18px;
}

.side-wall-right .garden-opening span {
  right: 18px;
}


/* ========================================
   IDENTIFICACIÓN
======================================== */

.room-label {
  position: absolute;

  top: 48px;
  left: 65px;

  display: flex;
  align-items: center;

  gap: 12px;
}

.room-number {
  width: 30px;
  height: 30px;

  display: grid;
  place-items: center;

  border: 1px solid #151515;

  border-radius: 50%;

  font-size: 8px;
}

.room-label strong {
  font-size: 8px;

  font-weight: 500;

  letter-spacing: 0.17em;
}

.room-label small {
  color: #74736f;

  font-size: 6px;

  letter-spacing: 0.17em;
}


/* ========================================
   GRID
======================================== */

.contact-grid {
  min-height: 510px;

  display: grid;

  grid-template-columns:
    0.9fr
    1.1fr;

  align-items: center;

  gap: clamp(70px, 7vw, 140px);
}


/* ========================================
   COPY
======================================== */

.section-reference {
  display: block;

  margin-bottom: 27px;

  color: #74736f;

  font-size: 8px;

  letter-spacing: 0.22em;
}

.contact-copy h2 {
  margin: 0;

  max-width: 700px;

  font-size:
    clamp(58px, 5vw, 94px);

  line-height: 0.91;

  font-weight: 400;

  letter-spacing: -0.055em;
}

.contact-copy h2 em {
  display: block;

  color: #74736f;

  font-weight: 400;
}

.contact-copy p {
  max-width: 500px;

  margin: 32px 0;

  color: #74736f;

  font-size: 13px;

  line-height: 1.8;
}


/* ========================================
   CTA
======================================== */

.contact-button {
  display: flex;
  align-items: center;

  gap: 15px;

  width: fit-content;

  color: #151515;

  text-decoration: none;

  font-size: 8px;

  letter-spacing: 0.19em;
}

.button-line {
  width: 80px;
  height: 1px;

  background: #151515;

  transition: width 0.3s ease;
}

.contact-button:hover .button-line {
  width: 120px;
}


/* ========================================
   FORMULARIO
======================================== */

.contact-form-wrapper {
  border: 4px solid #151515;

  padding: 35px;
}

.form-header {
  padding-bottom: 17px;

  display: flex;
  justify-content: space-between;

  border-bottom: 1px solid #b9b7b0;

  color: #74736f;

  font-size: 7px;

  letter-spacing: 0.16em;
}

.contact-form {
  margin-top: 35px;

  display: grid;

  grid-template-columns:
    repeat(2, 1fr);

  gap: 30px;
}

.field {
  display: flex;

  flex-direction: column;

  gap: 10px;
}

.field-full {
  grid-column: 1 / -1;
}

.field label {
  color: #74736f;

  font-size: 7px;

  letter-spacing: 0.16em;
}

.field input,
.field select,
.field textarea {
  width: 100%;

  padding: 11px 0;

  border: 0;
  border-bottom: 1px solid #151515;

  outline: none;

  border-radius: 0;

  background: transparent;

  color: #151515;

  font-family: inherit;

  font-size: 12px;
}

.field textarea {
  resize: vertical;
}

.contact-form button {
  grid-column: 1 / -1;

  margin-top: 10px;

  padding: 18px 20px;

  display: flex;
  justify-content: space-between;

  border: 0;

  background: #151515;

  color: #f3f1eb;

  cursor: pointer;

  font-size: 8px;

  letter-spacing: 0.18em;
}


/* ========================================
   DATOS
======================================== */

.contact-data {
  margin-top: 65px;

  padding-top: 25px;

  display: grid;

  grid-template-columns:
    repeat(4, 1fr);

  gap: 30px;

  border-top: 1px solid #b9b7b0;
}

.contact-data div {
  display: flex;

  flex-direction: column;

  gap: 8px;
}

.contact-data span {
  color: #74736f;

  font-size: 6px;

  letter-spacing: 0.17em;
}

.contact-data strong {
  font-size: 8px;

  font-weight: 500;

  letter-spacing: 0.13em;
}


/* ========================================
   RESPONSIVE
======================================== */

@media (max-width: 1000px) {

  .contact-section {
    width: calc(100% - 60px);

    padding:
      105px
      60px
      125px;
  }

  .contact-grid {
    gap: 60px;
  }

}

@media (max-width: 760px) {

  .contact-section {
    width: calc(100% - 30px);

    padding:
      100px
      28px
      120px;
  }

  .contact-grid {
    grid-template-columns: 1fr;
  }

  .contact-form {
    grid-template-columns: 1fr;
  }

  .field-full,
  .contact-form button {
    grid-column: auto;
  }

  .contact-data {
    grid-template-columns:
      repeat(2, 1fr);
  }

  .room-label {
    left: 25px;
  }

  .room-label small {
    display: none;
  }

  .side-wall {
    display: block;

    background: #151515;
  }

  .garden-opening {
    display: none;
  }

  .top-wall,
  .bottom-wall {
    grid-template-columns:
      1fr
      100px
      1fr;
  }
}
</style>