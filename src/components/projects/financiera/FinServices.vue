<template>
  <section id="servicios" class="fin-services">
    <div class="fin-services__container">

      <div class="fin-services__header">
        <div class="fin-services__section-label">
          <span></span>
          Servicios
        </div>

        <div class="fin-services__headline">
          <span>ÁREAS DE ESPECIALIDAD</span>

          <h2>
            Estrategias para cada etapa
            <em>de su patrimonio.</em>
          </h2>

          <p>
            Integramos planeación, inversión, riesgo y finanzas empresariales
            dentro de una visión completa para tomar mejores decisiones.
          </p>
        </div>
      </div>

      <div class="fin-services__grid">

        <article
          v-for="service in services"
          :key="service.title"
          class="fin-services__card"
        >
          <div class="fin-services__top">
            <span class="fin-services__category">
              {{ service.category }}
            </span>

            <span class="fin-services__arrow">
              ↗
            </span>
          </div>

          <div
            class="fin-services__symbol"
            :class="`fin-services__symbol--${service.symbol}`"
          >
            <template v-if="service.symbol === 'bars'">
              <span></span>
              <span></span>
              <span></span>
            </template>

            <template v-else-if="service.symbol === 'orbit'">
              <span class="orbit-ring"></span>
              <span class="orbit-core"></span>
              <span class="orbit-point"></span>
            </template>

            <template v-else-if="service.symbol === 'trend'">
              <span class="trend-line"></span>
              <span class="trend-point trend-point--one"></span>
              <span class="trend-point trend-point--two"></span>
              <span class="trend-point trend-point--three"></span>
            </template>

            <template v-else-if="service.symbol === 'matrix'">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </template>

            <template v-else-if="service.symbol === 'shield'">
              <span class="shield-shape"></span>
              <span class="shield-line"></span>
            </template>

            <template v-else-if="service.symbol === 'compass'">
              <span class="compass-ring"></span>
              <span class="compass-line"></span>
              <span class="compass-point"></span>
            </template>
          </div>

          <h3>{{ service.title }}</h3>

          <p class="fin-services__description">
            {{ service.description }}
          </p>

          <ul class="fin-services__list">
            <li
              v-for="item in service.items"
              :key="item"
            >
              {{ item }}
            </li>
          </ul>

        </article>

      </div>

    </div>
  </section>
</template>

<script setup>
const services = [
  {
    category: 'PATRIMONIO',
    symbol: 'bars',
    title: 'Planeación financiera',
    description:
      'Diseñamos un mapa financiero integral que conecta objetivos personales, familiares y empresariales.',
    items: [
      'Diagnóstico financiero',
      'Definición de objetivos',
      'Planeación de flujo'
    ]
  },

  {
    category: 'ESTRUCTURA',
    symbol: 'orbit',
    title: 'Estrategia patrimonial',
    description:
      'Estructuramos decisiones enfocadas en proteger, ordenar y desarrollar su patrimonio en el tiempo.',
    items: [
      'Protección patrimonial',
      'Estructura de activos',
      'Planeación sucesoria'
    ]
  },

  {
    category: 'CAPITAL',
    symbol: 'trend',
    title: 'Inversiones',
    description:
      'Construimos estrategias de inversión alineadas con horizonte, tolerancia al riesgo y objetivos.',
    items: [
      'Perfil de riesgo',
      'Diversificación',
      'Seguimiento de portafolio'
    ]
  },

  {
    category: 'EMPRESA',
    symbol: 'matrix',
    title: 'Finanzas empresariales',
    description:
      'Acompañamos a empresas en decisiones clave para fortalecer liquidez, rentabilidad y crecimiento.',
    items: [
      'Análisis financiero',
      'Flujo de efectivo',
      'Planeación de capital'
    ]
  },

  {
    category: 'PROTECCIÓN',
    symbol: 'shield',
    title: 'Gestión de riesgos',
    description:
      'Identificamos escenarios de exposición financiera y diseñamos acciones para reducir vulnerabilidades.',
    items: [
      'Análisis de riesgos',
      'Escenarios financieros',
      'Planes de contingencia'
    ]
  },

  {
    category: 'DIRECCIÓN',
    symbol: 'compass',
    title: 'Consultoría financiera',
    description:
      'Asesoría estratégica para decisiones que requieren una lectura profunda del entorno y sus números.',
    items: [
      'Evaluación de decisiones',
      'Modelación financiera',
      'Acompañamiento ejecutivo'
    ]
  }
]
</script>

<style scoped>
.fin-services {
  padding: 140px 0;
  background: var(--fin-primary);
  color: var(--fin-white);
}

.fin-services__container {
  width: min(1280px, calc(100% - 80px));
  margin: 0 auto;
}

/* =========================
   HEADER
========================= */

.fin-services__header {
  display: grid;
  grid-template-columns: 0.3fr 1fr;
  gap: 80px;
  margin-bottom: 85px;
}

.fin-services__section-label {
  display: flex;
  align-items: center;
  align-self: start;
  gap: 14px;
  padding-top: 12px;

  color: rgba(255, 255, 255, 0.4);

  font-size: 9px;
  text-transform: uppercase;
  letter-spacing: 2.5px;
}

.fin-services__section-label span {
  width: 44px;
  height: 1px;

  background: var(--fin-accent);
}

.fin-services__headline > span {
  display: block;

  margin-bottom: 22px;

  color: var(--fin-accent);

  font-size: 9px;
  font-weight: 600;
  letter-spacing: 3px;
}

.fin-services__headline h2 {
  max-width: 850px;

  margin-bottom: 26px;

  font-family:
    Georgia,
    'Times New Roman',
    serif;

  font-size: clamp(46px, 5vw, 72px);
  line-height: 1.08;

  font-weight: 400;

  letter-spacing: -2.5px;
}

.fin-services__headline h2 em {
  display: block;

  color: var(--fin-accent-light);

  font-weight: 400;
}

.fin-services__headline p {
  max-width: 680px;

  margin: 0;

  color: rgba(255, 255, 255, 0.48);

  font-size: 13px;
  line-height: 1.9;
}

/* =========================
   GRID
========================= */

.fin-services__grid {
  display: grid;

  grid-template-columns:
    repeat(3, 1fr);

  border-top:
    1px solid rgba(255, 255, 255, 0.12);

  border-left:
    1px solid rgba(255, 255, 255, 0.12);
}

/* =========================
   CARD
========================= */

.fin-services__card {
  position: relative;

  min-height: 450px;

  padding: 36px;

  border-right:
    1px solid rgba(255, 255, 255, 0.12);

  border-bottom:
    1px solid rgba(255, 255, 255, 0.12);

  overflow: hidden;

  transition:
    background 0.3s ease,
    transform 0.3s ease;
}

.fin-services__card::before {
  content: '';

  position: absolute;

  inset: 0;

  background:
    linear-gradient(
      145deg,
      rgba(183, 155, 100, 0.08),
      transparent 45%
    );

  opacity: 0;

  transition:
    opacity 0.3s ease;

  pointer-events: none;
}

.fin-services__card:hover {
  background:
    rgba(255, 255, 255, 0.025);
}

.fin-services__card:hover::before {
  opacity: 1;
}

/* =========================
   TOP
========================= */

.fin-services__top {
  position: relative;
  z-index: 2;

  display: flex;
  align-items: center;
  justify-content: space-between;
}

.fin-services__category {
  color:
    rgba(255, 255, 255, 0.28);

  font-size: 7px;

  text-transform: uppercase;
  letter-spacing: 2.7px;
}

.fin-services__arrow {
  color: var(--fin-accent);

  font-size: 18px;

  transition:
    transform 0.25s ease;
}

.fin-services__card:hover
.fin-services__arrow {
  transform:
    translate(4px, -4px);
}

/* =========================
   SYMBOL BASE
========================= */

.fin-services__symbol {
  position: relative;

  width: 64px;
  height: 64px;

  margin:
    60px 0 42px;

  color: var(--fin-accent);
}

/* =========================
   BARS
========================= */

.fin-services__symbol--bars {
  display: flex;

  align-items: flex-end;

  gap: 7px;

  padding-left: 4px;
}

.fin-services__symbol--bars span {
  width: 8px;

  background: var(--fin-accent);
}

.fin-services__symbol--bars span:nth-child(1) {
  height: 21px;
}

.fin-services__symbol--bars span:nth-child(2) {
  height: 37px;
}

.fin-services__symbol--bars span:nth-child(3) {
  height: 55px;
}

/* =========================
   ORBIT
========================= */

.fin-services__symbol--orbit
.orbit-ring {
  position: absolute;

  inset: 5px;

  border:
    1px solid var(--fin-accent);

  border-radius: 50%;
}

.fin-services__symbol--orbit
.orbit-core {
  position: absolute;

  top: 50%;
  left: 50%;

  width: 8px;
  height: 8px;

  border-radius: 50%;

  background: var(--fin-accent);

  transform:
    translate(-50%, -50%);
}

.fin-services__symbol--orbit
.orbit-point {
  position: absolute;

  top: 3px;
  left: 50%;

  width: 9px;
  height: 9px;

  border-radius: 50%;

  background:
    var(--fin-accent-light);

  transform:
    translateX(-50%);
}

/* =========================
   TREND
========================= */

.fin-services__symbol--trend
.trend-line {
  position: absolute;

  left: 4px;
  bottom: 15px;

  width: 54px;
  height: 1px;

  background: var(--fin-accent);

  transform:
    rotate(-32deg);

  transform-origin:
    left center;
}

.fin-services__symbol--trend
.trend-point {
  position: absolute;

  width: 7px;
  height: 7px;

  border-radius: 50%;

  background: var(--fin-accent);
}

.trend-point--one {
  left: 4px;
  bottom: 10px;
}

.trend-point--two {
  left: 27px;
  bottom: 25px;
}

.trend-point--three {
  right: 2px;
  top: 5px;
}

/* =========================
   MATRIX
========================= */

.fin-services__symbol--matrix {
  display: grid;

  grid-template-columns:
    repeat(2, 22px);

  grid-template-rows:
    repeat(2, 22px);

  gap: 6px;
}

.fin-services__symbol--matrix span {
  border:
    1px solid rgba(183, 155, 100, 0.75);
}

.fin-services__symbol--matrix span:nth-child(1),
.fin-services__symbol--matrix span:nth-child(4) {
  background:
    rgba(183, 155, 100, 0.18);
}

/* =========================
   SHIELD
========================= */

.fin-services__symbol--shield
.shield-shape {
  position: absolute;

  top: 3px;
  left: 12px;

  width: 40px;
  height: 50px;

  border:
    1px solid var(--fin-accent);

  clip-path:
    polygon(
      50% 0,
      100% 15%,
      90% 72%,
      50% 100%,
      10% 72%,
      0 15%
    );
}

.fin-services__symbol--shield
.shield-line {
  position: absolute;

  top: 27px;
  left: 24px;

  width: 16px;
  height: 1px;

  background:
    var(--fin-accent);
}

/* =========================
   COMPASS
========================= */

.fin-services__symbol--compass
.compass-ring {
  position: absolute;

  inset: 6px;

  border:
    1px solid var(--fin-accent);

  border-radius: 50%;
}

.fin-services__symbol--compass
.compass-line {
  position: absolute;

  top: 13px;
  left: 31px;

  width: 1px;
  height: 39px;

  background:
    var(--fin-accent);

  transform:
    rotate(32deg);
}

.fin-services__symbol--compass
.compass-point {
  position: absolute;

  top: 7px;
  left: 37px;

  width: 8px;
  height: 8px;

  background:
    var(--fin-accent-light);

  transform:
    rotate(45deg);
}

/* =========================
   CONTENT
========================= */

.fin-services__card h3 {
  position: relative;
  z-index: 2;

  margin-bottom: 18px;

  font-family:
    Georgia,
    'Times New Roman',
    serif;

  font-size: 28px;

  font-weight: 400;

  color: var(--fin-white);
}

.fin-services__description {
  position: relative;
  z-index: 2;

  margin-bottom: 28px;

  color:
    rgba(255, 255, 255, 0.5);

  font-size: 13px;
  line-height: 1.85;
}

.fin-services__list {
  position: relative;
  z-index: 2;

  margin: 0;
  padding: 0;

  list-style: none;
}

.fin-services__list li {
  position: relative;

  padding:
    8px 0 8px 16px;

  color:
    rgba(255, 255, 255, 0.65);

  font-size: 11px;

  letter-spacing: 0.4px;
}

.fin-services__list li::before {
  content: '';

  position: absolute;

  left: 0;
  top: 50%;

  width: 5px;
  height: 1px;

  background:
    var(--fin-accent);
}

/* =========================
   TABLET
========================= */

@media (max-width: 1000px) {

  .fin-services__grid {
    grid-template-columns:
      repeat(2, 1fr);
  }

  .fin-services__header {
    grid-template-columns:
      1fr;

    gap: 35px;
  }
}

/* =========================
   MOBILE
========================= */

@media (max-width: 650px) {

  .fin-services {
    padding: 90px 0;
  }

  .fin-services__container {
    width:
      calc(100% - 36px);
  }

  .fin-services__grid {
    grid-template-columns:
      1fr;
  }

  .fin-services__card {
    min-height: auto;

    padding:
      32px 26px 38px;
  }

  .fin-services__headline h2 {
    font-size: 44px;
  }

  .fin-services__symbol {
    margin:
      45px 0 34px;
  }
}
</style>