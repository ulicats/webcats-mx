<template>
  <section id="contacto" class="contact-section">

    <!-- MURO SUPERIOR -->
    <div class="top-wall">
      <span></span>

      <div class="entrance">
        <span>ACCESO AL FORMULARIO</span>
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
      <strong>CONTACTO</strong>
    </div>

    <!-- CONTENIDO -->
    <div class="contact-grid">

      <!-- MENSAJE -->
      <div class="contact-copy">

        <span class="section-reference"></span>

        <h2>
          Construyamos
          <em>tu próximo espacio.</em>
        </h2>

        <p>
          Cada proyecto comienza con una conversación.
          Cuéntanos qué quieres construir, transformar
          o imaginar.
        </p>

        <!-- WHATSAPP -->
        <a
          href="https://wa.me/"
          target="_blank"
          rel="noopener noreferrer"
          class="contact-button"
        >
          <span>INICIAR PROYECTO</span>
          <span class="button-line"></span>
          <span class="button-arrow">→</span>
        </a>

      </div>

      <!-- FORMULARIO -->
      <div class="contact-form-wrapper">

        <div class="form-header">
          <span>FICHA / CONTACTO</span>
          <span>FC — 01</span>
        </div>

        <form class="contact-form" @submit.prevent>

          <!-- NOMBRE -->
          <div class="field">
            <label for="name">
              01 / NOMBRE
            </label>

            <input
              id="name"
              type="text"
              autocomplete="name"
              placeholder="Tu nombre"
            />
          </div>

          <!-- CORREO -->
          <div class="field">
            <label for="email">
              02 / CORREO
            </label>

            <input
              id="email"
              type="email"
              autocomplete="email"
              placeholder="correo@ejemplo.com"
            />
          </div>

          <!-- TELÉFONO -->
          <div class="field">
            <label for="phone">
              03 / TELÉFONO
            </label>

            <input
              id="phone"
              type="tel"
              inputmode="tel"
              autocomplete="tel"
              placeholder="+52 000 000 0000"
            />
          </div>

          <!-- TIPO DE PROYECTO -->
          <div class="field">
            <label for="project">
              04 / TIPO DE PROYECTO
            </label>

            <select id="project">
              <option value="">
                Selecciona una opción
              </option>

              <option value="arquitectonico">
                Proyecto arquitectónico
              </option>

              <option value="interiores">
                Diseño de interiores
              </option>

              <option value="remodelacion">
                Remodelación
              </option>

              <option value="supervision">
                Supervisión de obra
              </option>
            </select>
          </div>

          <!-- DESCRIPCIÓN -->
          <div class="field field-full">
            <label for="message">
              05 / DESCRIPCIÓN
            </label>

            <textarea
              id="message"
              rows="5"
              placeholder="Háblanos de tu proyecto..."
            ></textarea>
          </div>

          <!-- BOTÓN -->
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
        <span>FOOTER</span>
        <strong>↓</strong>
      </div>

      <span></span>
    </div>

  </section>
</template>

<script setup>
</script>

<style scoped>

/* ========================================
   SECCIÓN
======================================== */

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
   GRID PRINCIPAL
======================================== */

.contact-grid {
  width: 100%;
  min-width: 0;

  min-height: 510px;

  display: grid;

  grid-template-columns:
    minmax(0, 0.9fr)
    minmax(0, 1.1fr);

  align-items: center;

  gap: clamp(70px, 7vw, 140px);

  box-sizing: border-box;
}

.contact-copy,
.contact-form-wrapper {
  min-width: 0;
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

  font-size: clamp(46px, 4vw, 57px);

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
   CTA WHATSAPP
======================================== */

.contact-button {
  width: fit-content;
  min-height: 48px;

  padding: 0 22px;

  display: inline-flex;
  align-items: center;

  gap: 18px;

  box-sizing: border-box;

  background: #d8d6d0;

  border: 1px solid #b9b7b0;

  color: #151515;

  text-decoration: none;

  font-size: 10px;
  font-weight: 500;

  letter-spacing: 0.18em;

  cursor: pointer;

  transition:
    background 0.25s ease,
    color 0.25s ease,
    transform 0.25s ease;
}

.button-line {
  width: 55px;
  height: 1px;

  flex-shrink: 0;

  background: currentColor;

  transition: width 0.25s ease;
}

.button-arrow {
  font-size: 13px;

  line-height: 1;
}

.contact-button:hover {
  background: #151515;

  color: #f3f1eb;

  transform: translateX(3px);
}

.contact-button:hover .button-line {
  width: 70px;
}


/* ========================================
   FORMULARIO
======================================== */

.contact-form-wrapper {
  width: 100%;
  min-width: 0;

  border: 4px solid #151515;

  padding: 35px;

  box-sizing: border-box;
}

.form-header {
  width: 100%;

  padding-bottom: 17px;

  display: flex;
  justify-content: space-between;

  border-bottom: 1px solid #b9b7b0;

  color: #74736f;

  font-size: 7px;

  letter-spacing: 0.16em;

  box-sizing: border-box;
}

.contact-form {
  width: 100%;
  min-width: 0;

  margin-top: 35px;

  display: grid;

  grid-template-columns:
    repeat(2, minmax(0, 1fr));

  gap: 30px;

  box-sizing: border-box;
}

.field {
  width: 100%;
  min-width: 0;

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
  max-width: 100%;
  min-width: 0;

  padding: 11px 0;

  border: 0;
  border-bottom: 1px solid #151515;

  outline: none;

  border-radius: 0;

  background: transparent;

  color: #151515;

  font-family: inherit;

  font-size: 12px;

  box-sizing: border-box;
}

.field textarea {
  resize: vertical;
}

.contact-form button {
  grid-column: 1 / -1;

  width: 100%;

  margin-top: 10px;

  padding: 18px 20px;

  display: flex;
  justify-content: space-between;
  align-items: center;

  border: 0;

  background: #151515;

  color: #f3f1eb;

  cursor: pointer;

  font-family: inherit;

  font-size: 8px;

  letter-spacing: 0.18em;

  box-sizing: border-box;
}


/* ========================================
   DATOS
======================================== */

.contact-data {
  margin-top: 65px;

  padding-top: 25px;

  display: grid;

  grid-template-columns:
    repeat(4, minmax(0, 1fr));

  gap: 30px;

  border-top: 1px solid #b9b7b0;
}

.contact-data div {
  min-width: 0;

  display: flex;

  flex-direction: column;

  gap: 8px;
}

.contact-data span {
  color: #74736f;

  font-size: 13px;

  letter-spacing: 0.17em;
}

.contact-data strong {
  font-size: 11px;

  font-weight: 500;

  letter-spacing: 0.13em;

  overflow-wrap: anywhere;
}


/* ========================================
   RESPONSIVE — LAPTOP / TABLET GRANDE
======================================== */

@media (max-width: 1200px) {

  .contact-section {
    width: calc(100% - 70px);

    padding:
      110px
      70px
      125px;
  }

  .contact-grid {
    gap: 60px;
  }

}


/* ========================================
   RESPONSIVE — TABLET
======================================== */

@media (max-width: 1000px) {

  .contact-section {
    width: calc(100% - 60px);

    padding:
      105px
      50px
      125px;
  }

  .contact-grid {
    grid-template-columns: 1fr;

    gap: 70px;
  }

  .contact-copy {
    max-width: 650px;
  }

  .contact-form-wrapper {
    max-width: 100%;
  }

}


/* ========================================
   RESPONSIVE — CELULAR
======================================== */

@media (max-width: 760px) {

  .contact-section {
    width: calc(100% - 30px);

    min-height: auto;

    padding:
      100px
      20px
      120px;

    box-sizing: border-box;

    overflow: hidden;
  }


  /* ---------- GRID ---------- */

  .contact-grid {
    width: 100%;
    min-width: 0;

    grid-template-columns: minmax(0, 1fr);

    gap: 60px;
  }


  /* ---------- COPY ---------- */

  .contact-copy {
    width: 100%;
    min-width: 0;
  }

  .section-reference {
    font-size: 7px;
  }

  .contact-copy h2 {
    width: 100%;
    max-width: 100%;

    font-size: clamp(36px, 11vw, 48px);

    line-height: 0.95;
  }

  .contact-copy p {
    width: 100%;
    max-width: 100%;

    margin: 25px 0;

    font-size: 12px;
  }

  .contact-button {
    max-width: 100%;

    padding: 0 18px;

    gap: 12px;

    font-size: 9px;
  }

  .button-line {
    width: 40px;
  }

  .contact-button:hover .button-line {
    width: 50px;
  }


  /* ---------- FORMULARIO ---------- */

  .contact-form-wrapper {
    width: 100%;
    max-width: 100%;
    min-width: 0;

    padding: 26px 20px;

    border-width: 3px;

    box-sizing: border-box;
  }

  .form-header {
    width: 100%;

    font-size: 6px;

    box-sizing: border-box;
  }

  .contact-form {
    width: 100%;
    max-width: 100%;
    min-width: 0;

    margin-top: 30px;

    grid-template-columns: minmax(0, 1fr);

    gap: 28px;

    box-sizing: border-box;
  }

  .field {
    width: 100%;
    max-width: 100%;
    min-width: 0;
  }

  .field-full {
    grid-column: auto;
  }

  .field input,
  .field select,
  .field textarea {
    width: 100%;
    max-width: 100%;
    min-width: 0;

    font-size: 12px;

    box-sizing: border-box;
  }

  .field textarea {
    resize: vertical;
  }

  .contact-form button {
    grid-column: auto;

    width: 100%;
    max-width: 100%;

    box-sizing: border-box;
  }


  /* ---------- DATOS ---------- */

  .contact-data {
    width: 100%;

    margin-top: 55px;

    grid-template-columns:
      repeat(2, minmax(0, 1fr));

    gap:
      30px
      20px;
  }


  /* ---------- IDENTIFICACIÓN ---------- */

  .room-label {
    top: 48px;
    left: 25px;

    gap: 8px;
  }

  .room-label small {
    display: none;
  }


  /* ---------- MUROS ---------- */

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


/* ========================================
   RESPONSIVE — CELULAR PEQUEÑO
======================================== */

@media (max-width: 480px) {

  .contact-section {
    width: calc(100% - 20px);

    padding:
      95px
      16px
      115px;
  }

  .room-label {
    left: 20px;
  }

  .room-number {
    width: 27px;
    height: 27px;

    font-size: 7px;
  }

  .room-label strong {
    font-size: 7px;
  }

  .contact-copy h2 {
    font-size: clamp(34px, 10.5vw, 43px);
  }

  .contact-button {
    min-height: 46px;

    padding: 0 14px;

    gap: 10px;

    font-size: 8px;
  }

  .button-line {
    width: 30px;
  }

  .contact-button:hover .button-line {
    width: 38px;
  }

  .contact-form-wrapper {
    padding:
      24px
      16px;
  }

  .form-header {
    font-size: 5.5px;
  }

  .field label {
    font-size: 6px;
  }

  .field input,
  .field select,
  .field textarea {
    font-size: 11px;
  }

  .contact-data {
    grid-template-columns: 1fr;

    gap: 24px;
  }

  .top-wall,
  .bottom-wall {
    grid-template-columns:
      1fr
      85px
      1fr;
  }

  .entrance span,
  .final-opening span {
    font-size: 6px;
  }

}
</style>