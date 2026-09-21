<template>
  <section id="proceso" class="process-section">

    <!-- MURO SUPERIOR -->
    <div class="top-wall">

      <span></span>

      <div class="entrance">
        <span>ENTRADA A PROCESOS</span>
        <strong>↓</strong>
      </div>

      <span></span>

    </div>

    <!-- MUROS -->
    <div class="outer-wall wall-left"></div>
    <div class="outer-wall wall-right"></div>

    <!-- ETIQUETA -->
    <div class="room-label">
      <span class="room-number">05</span>
      <strong>PROCESO</strong>
    </div>

    <!-- TITULAR -->
    <div class="process-heading">

      <span></span>

      <h2>
        De una idea
        <em>a un espacio construido.</em>
      </h2>

      <p>
        Cada etapa del proyecto tiene una función específica.
        Avanzamos de forma ordenada desde el concepto hasta la ejecución.
      </p>

    </div>

    <!-- PASILLO -->
    <div class="corridor">

      <div class="corridor-axis"></div>

      <!-- PASO 01 -->
      <article class="process-step step-left">

        <span class="step-node">01</span>

        <div class="step-content">
          <span>ETAPA / 01</span>

          <h3>Levantamiento</h3>

          <p>
            Analizamos el sitio, las necesidades,
            restricciones y objetivos del proyecto.
          </p>
        </div>

      </article>

      <!-- PASO 02 -->
      <article class="process-step step-right">

        <span class="step-node">02</span>

        <div class="step-content">
          <span>ETAPA / 02</span>

          <h3>Concepto</h3>

          <p>
            Definimos la idea rectora, organización,
            volumetría y carácter del espacio.
          </p>
        </div>

      </article>

      <!-- PASO 03 -->
      <article class="process-step step-left">

        <span class="step-node">03</span>

        <div class="step-content">
          <span>ETAPA / 03</span>

          <h3>Anteproyecto</h3>

          <p>
            Traducimos el concepto en plantas,
            fachadas, materiales y primeras visualizaciones.
          </p>
        </div>

      </article>

      <!-- PASO 04 -->
      <article class="process-step step-right">

        <span class="step-node">04</span>

        <div class="step-content">
          <span>ETAPA / 04</span>

          <h3>Proyecto Ejecutivo</h3>

          <p>
            Desarrollamos la documentación necesaria
            para llevar correctamente el diseño a obra.
          </p>
        </div>

      </article>

      <!-- PASO 05 -->
      <article class="process-step step-left">

        <span class="step-node">05</span>

        <div class="step-content">
          <span>ETAPA / 05</span>

          <h3>Construcción</h3>

          <p>
            Supervisamos la ejecución y verificamos
            que cada decisión conserve la intención del proyecto.
          </p>
        </div>

      </article>

    </div>

    <!-- MURO INFERIOR -->
    <div class="bottom-wall">

      <span></span>

      <div class="exit-door">
        <span class="door-leaf"></span>
        <span class="door-label">PATIO ↓</span>
      </div>

      <span></span>

    </div>

  </section>
</template>

<script setup>
</script>

<style scoped>
.process-section {
  position: relative;

  width: calc(100% - 110px);
  max-width: 1760px;

  min-height: 1150px;

  margin: 0 auto;

  padding: 110px 110px 135px;

  box-sizing: border-box;

  background: #f3f1eb;
  color: #151515;
}

/* MUROS */

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

  color: #74736f;
}

.entrance span {
  font-size: 7px;
  letter-spacing: 0.2em;
}

.entrance strong {
  color: #151515;

  font-size: 16px;
  font-weight: 400;
}

/* LABEL */

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

/* HEADING */

.process-heading {
  max-width: 900px;

  margin-bottom: 80px;
}

.process-heading > span {
  display: block;

  margin-bottom: 23px;

  color: #74736f;

  font-size: 8px;
  letter-spacing: 0.22em;
}

.process-heading h2 {
  margin: 0;

  font-size: clamp(50px, 4.7vw, 57px);

  line-height: 0.94;

  font-weight: 400;

  letter-spacing: -0.05em;
}

.process-heading h2 em {
  display: block;

  color: #74736f;

  font-weight: 400;
}

.process-heading p {
  max-width: 620px;

  margin-top: 28px;

  color: #74736f;

  font-size: 12px;
  line-height: 1.8;
}

/* PASILLO */

.corridor {
  position: relative;

  width: min(1000px, 90%);

  margin: 0 auto;

  padding: 20px 0 50px;
}

.corridor-axis {
  position: absolute;

  top: 0;
  bottom: 0;

  left: 50%;

  width: 4px;

  transform: translateX(-50%);

  background: #151515;
}

.process-step {
  position: relative;

  width: 50%;

  min-height: 160px;

  margin-bottom: 20px;
}

.step-left {
  padding-right: 80px;

  text-align: right;
}

.step-right {
  margin-left: 50%;

  padding-left: 80px;

  text-align: left;
}

.step-node {
  position: absolute;

  top: 13px;

  width: 40px;
  height: 40px;

  display: grid;
  place-items: center;

  border: 1px solid #151515;

  border-radius: 50%;

  background: #f3f1eb;

  font-size: 9px;

  z-index: 3;
}

.step-left .step-node {
  right: -20px;
}

.step-right .step-node {
  left: -20px;
}

.step-content {
  padding: 25px 30px;

  border-top: 1px solid #b9b7b0;
}

.step-content > span {
  color: #74736f;

  font-size: 6px;

  letter-spacing: 0.17em;
}

.step-content h3 {
  margin: 13px 0;

  font-size: 32px;

  font-weight: 400;

  letter-spacing: -0.03em;
}

.step-content p {
  max-width: 420px;

  margin: 0;

  color: #74736f;

  font-size: 10px;
  line-height: 1.8;
}

.step-left p {
  margin-left: auto;
}

/* PUERTA */

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

  left: 50%;
  bottom: -27px;

  transform: translateX(-50%);

  white-space: nowrap;

  color: #74736f;

  font-size: 7px;

  letter-spacing: 0.18em;
}

@media (max-width: 900px) {

  .process-section {
    width: calc(100% - 60px);

    padding:
      100px
      60px
      130px;
  }

}

@media (max-width: 700px) {

  .process-section {
    width: calc(100% - 30px);

    padding:
      100px
      28px
      125px;
  }

  .corridor {
    width: 100%;
  }

  .corridor-axis {
    left: 19px;
  }

  .process-step,
  .step-right {
    width: 100%;

    margin-left: 0;

    padding-left: 65px;
    padding-right: 0;

    text-align: left;
  }

  .step-left .step-node,
  .step-right .step-node {
    left: 0;
    right: auto;
  }

  .step-left p {
    margin-left: 0;
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