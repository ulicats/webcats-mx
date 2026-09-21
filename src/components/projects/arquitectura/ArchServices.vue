<template>
  <section id="servicios" class="services-section">

    <!-- MURO SUPERIOR -->
    <div class="top-wall">
      <span></span>

      <div class="entrance">
        <span>ACCESO A SERVICIOS</span>
        <strong>↓</strong>
      </div>

      <span></span>
    </div>

    <!-- MUROS EXTERIORES -->
    <div class="outer-wall wall-left"></div>
    <div class="outer-wall wall-right"></div>

    <!-- COTAS -->
    <div class="side-dimension dimension-left">
      <span class="dimension-line"></span>
      <span class="dimension-value">8.40</span>
      <span class="dimension-line"></span>
    </div>

    <div class="side-dimension dimension-right">
      <span class="dimension-line"></span>
      <span class="dimension-value">8.40</span>
      <span class="dimension-line"></span>
    </div>

    <!-- IDENTIFICACIÓN -->
    <div class="room-label">
      <span class="room-number">03</span>
      <strong>SERVICIOS</strong>
     
    </div>

    <!-- INTRO -->
    <div class="services-heading">

      <h2>
        Cada proyecto requiere
        <em>su propio espacio.</em>
      </h2>

      <p>
        Desde la primera idea hasta la ejecución, desarrollamos
        soluciones arquitectónicas pensadas para cada etapa del proyecto.
      </p>
    </div>

    <!-- PLANTA DE HABITACIONES -->
    <div class="rooms-grid">

      <!-- 01 -->
      <article class="service-room">
        <div class="room-top-data">
          <span>H-01</span>
          <span>ARQ / 01</span>
        </div>

        <div class="service-number">01</div>

        <div class="service-content">
          <span class="room-name">RECÁMARA / 01</span>

          <h3>Proyecto<br />Arquitectónico</h3>

          <p>
            Diseño integral de espacios residenciales,
            comerciales y corporativos.
          </p>

          <a href="#contacto">
            CONSULTAR
            <span>→</span>
          </a>
        </div>

        <div class="internal-door door-right"></div>
      </article>

      <!-- 02 -->
      <article class="service-room">
        <div class="room-top-data">
          <span>H-02</span>
          <span>INT / 02</span>
        </div>

        <div class="service-number">02</div>

        <div class="service-content">
          <span class="room-name">RECÁMARA / 02</span>

          <h3>Diseño de<br />Interiores</h3>

          <p>
            Materiales, iluminación, mobiliario y atmósferas
            concebidas como parte de un mismo proyecto.
          </p>

          <a href="#contacto">
            CONSULTAR
            <span>→</span>
          </a>
        </div>

        <div class="internal-door door-bottom"></div>
      </article>

      <!-- 03 -->
      <article class="service-room">
        <div class="room-top-data">
          <span>H-03</span>
          <span>REM / 03</span>
        </div>

        <div class="service-number">03</div>

        <div class="service-content">
          <span class="room-name">RECÁMARA / 03</span>

          <h3>Remodelación<br />de Espacios</h3>

          <p>
            Transformamos construcciones existentes
            para adaptarlas a nuevas necesidades.
          </p>

          <a href="#contacto">
            CONSULTAR
            <span>→</span>
          </a>
        </div>

        <div class="internal-door door-top"></div>
      </article>

      <!-- 04 -->
      <article class="service-room">
        <div class="room-top-data">
          <span>H-04</span>
          <span>OBR / 04</span>
        </div>

        <div class="service-number">04</div>

        <div class="service-content">
          <span class="room-name">RECÁMARA / 04</span>

          <h3>Supervisión<br />de Obra</h3>

          <p>
            Seguimiento técnico y coordinación para conservar
            la intención original del diseño.
          </p>

          <a href="#contacto">
            CONSULTAR
            <span>→</span>
          </a>
        </div>

        <div class="internal-door door-left"></div>
      </article>

    </div>

    <!-- MURO INFERIOR -->
    <div class="bottom-wall">
      <span></span>

      <div class="exit-door">
        <span class="door-leaf"></span>
        <span class="door-label">ESTANCIA ↓</span>
      </div>

      <span></span>
    </div>

  </section>
</template>

<script setup>
</script>

<style scoped>
.services-section {
  position: relative;

  width: calc(100% - 110px);
  max-width: 1760px;

  min-height: 920px;

  margin: 0 auto;

  padding: 105px 95px 120px;

  box-sizing: border-box;

  background: #f3f1eb;
  color: #151515;
}

/* MUROS EXTERIORES */

.outer-wall {
  position: absolute;

  top: 0;
  bottom: 0;

  width: 5px;

  background: #151515;
}

.wall-left {
  left: 0;
}

.wall-right {
  right: 0;
}

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

/* ENTRADA */

.entrance {
  height: 48px;

  display: flex;
  flex-direction: column;

  align-items: center;

  gap: 3px;

  color: #74736f;
}

.entrance span {
  font-size: 7px;
  letter-spacing: 0.18em;
}

.entrance strong {
  color: #151515;
  font-size: 16px;
  font-weight: 400;
}

/* ETIQUETA */

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

  border: 1px solid #151515;

  border-radius: 50%;

  display: grid;
  place-items: center;

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

/* INTRO */

.services-heading {
  max-width: 850px;

  margin-bottom: 60px;
}

.services-heading > span {
  display: block;

  margin-bottom: 22px;

  color: #74736f;

  font-size: 8px;
  letter-spacing: 0.22em;
}

.services-heading h2 {
  margin: 0;

  font-size: clamp(48px, 4.5vw, 57px);

  line-height: 0.95;

  font-weight: 400;

  letter-spacing: -0.05em;
}

.services-heading h2 em {
  display: block;

  color: #74736f;

  font-weight: 400;
}

.services-heading p {
  max-width: 620px;

  margin: 27px 0 0;

  color: #74736f;

  font-size: 12px;
  line-height: 1.8;
}

/* HABITACIONES */

.rooms-grid {
  position: relative;

  display: grid;

  grid-template-columns:
    repeat(2, 1fr);

  border: 4px solid #151515;
}

.service-room {
  position: relative;

  min-height: 300px;

  padding: 36px;

  box-sizing: border-box;
}

.service-room:nth-child(1),
.service-room:nth-child(2) {
  border-bottom: 4px solid #151515;
}

.service-room:nth-child(1),
.service-room:nth-child(3) {
  border-right: 4px solid #151515;
}

.room-top-data {
  display: flex;
  justify-content: space-between;

  color: #74736f;

  font-size: 6px;
  letter-spacing: 0.16em;
}

.service-number {
  position: absolute;

  top: 36px;
  right: 36px;

  font-size: 40px;
  font-weight: 300;

  color: #d0cec7;
}

.service-content {
  margin-top: 45px;

  max-width: 440px;
}

.room-name {
  display: block;

  margin-bottom: 15px;

  color: #74736f;

  font-size: 7px;
  letter-spacing: 0.19em;
}

.service-content h3 {
  margin: 0;

  font-size: clamp(27px, 2.3vw, 42px);

  line-height: 1;

  font-weight: 400;

  letter-spacing: -0.035em;
}

.service-content p {
  max-width: 390px;

  margin: 20px 0;

  color: #74736f;

  font-size: 11px;
  line-height: 1.7;
}

.service-content a {
  display: flex;
  align-items: center;

  gap: 15px;

  width: fit-content;

  color: #151515;

  text-decoration: none;

  font-size: 7px;
  letter-spacing: 0.18em;
}

/* PUERTAS INTERIORES */

.internal-door {
  position: absolute;

  width: 58px;
  height: 58px;

  background: #f3f1eb;
}

.door-right {
  right: -5px;
  bottom: 35px;
}

.door-left {
  left: -5px;
  top: 35px;
}

.door-top {
  top: -5px;
  right: 55px;
}

.door-bottom {
  bottom: -5px;
  left: 55px;
}

/* COTAS */

.side-dimension {
  position: absolute;

  top: 22%;

  height: 58%;

  display: flex;
  flex-direction: column;

  align-items: center;
}

.dimension-left {
  left: -48px;
}

.dimension-right {
  right: -48px;
}

.dimension-line {
  width: 1px;

  flex: 1;

  background: #b9b7b0;
}

.dimension-value {
  margin: 12px 0;

  color: #74736f;

  font-size: 8px;
  letter-spacing: 0.15em;
}

/* SALIDA */

.exit-door {
  position: relative;

  height: 72px;
}

.door-leaf {
  position: absolute;

  left: 0;
  bottom: 0;

  width: 76px;
  height: 1px;

  background: #74736f;

  transform-origin: left bottom;
  transform: rotate(-45deg);
}

.exit-door::after {
  content: "";

  position: absolute;

  left: 0;
  bottom: 0;

  width: 76px;
  height: 76px;

  border: 1px dashed #b9b7b0;

  border-left: 0;
  border-bottom: 0;

  border-radius: 0 76px 0 0;
}

.door-label {
  position: absolute;

  bottom: -27px;
  left: 50%;

  transform: translateX(-50%);

  white-space: nowrap;

  color: #74736f;

  font-size: 7px;
  letter-spacing: 0.18em;
}

@media (max-width: 900px) {

  .services-section {
    width: calc(100% - 60px);

    padding:
      100px
      50px
      120px;
  }

  .side-dimension {
    display: none;
  }

}

@media (max-width: 760px) {
  .services-title {
    font-size: clamp(32px, 8vw, 44px);
  }
}

@media (max-width: 700px) {

  .services-section {
    width: calc(100% - 30px);

    padding:
      100px
      28px
      120px;
  }

  .rooms-grid {
    grid-template-columns: 1fr;
  }

  .service-room {
    border-right: 0 !important;
    border-bottom: 4px solid #151515;
  }

  .service-room:last-child {
    border-bottom: 0;
  }

  .room-label {
    left: 25px;
  }

  .room-label small {
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