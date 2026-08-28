<template>
  <section class="fin-process">
    <div class="fin-process__container">

      <div class="fin-process__intro">
        <span class="fin-process__eyebrow">
          NUESTRO ACOMPAÑAMIENTO
        </span>

        <h2>
          Cada decisión financiera
          forma parte de
          <em>un sistema.</em>
        </h2>

        <p>
          No analizamos patrimonio, liquidez, riesgo y crecimiento de manera
          aislada. Conectamos cada elemento para construir una estrategia
          coherente con sus objetivos.
        </p>
      </div>

      <div class="fin-process__map">

        <div class="fin-process__connector fin-process__connector--top"></div>
        <div class="fin-process__connector fin-process__connector--right"></div>
        <div class="fin-process__connector fin-process__connector--bottom"></div>
        <div class="fin-process__connector fin-process__connector--left"></div>

        <article
          class="fin-process__node fin-process__node--top"
          @mouseenter="activeNode = 'growth'"
          @mouseleave="activeNode = null"
        >
          <span class="fin-process__node-label">CRECIMIENTO</span>

          <h3>Desarrollar</h3>

          <p>
            Identificar oportunidades y construir una ruta sostenible de
            expansión patrimonial.
          </p>

          <span class="fin-process__node-dot"></span>
        </article>

        <article
          class="fin-process__node fin-process__node--right"
          @mouseenter="activeNode = 'risk'"
          @mouseleave="activeNode = null"
        >
          <span class="fin-process__node-label">RIESGO</span>

          <h3>Proteger</h3>

          <p>
            Anticipar escenarios, reducir exposición y fortalecer la
            capacidad de respuesta.
          </p>

          <span class="fin-process__node-dot"></span>
        </article>

        <article
          class="fin-process__node fin-process__node--bottom"
          @mouseenter="activeNode = 'assets'"
          @mouseleave="activeNode = null"
        >
          <span class="fin-process__node-label">PATRIMONIO</span>

          <h3>Construir</h3>

          <p>
            Organizar activos, objetivos y decisiones dentro de una visión
            financiera de largo plazo.
          </p>

          <span class="fin-process__node-dot"></span>
        </article>

        <article
          class="fin-process__node fin-process__node--left"
          @mouseenter="activeNode = 'liquidity'"
          @mouseleave="activeNode = null"
        >
          <span class="fin-process__node-label">LIQUIDEZ</span>

          <h3>Mantener flexibilidad</h3>

          <p>
            Equilibrar disponibilidad de recursos con estrategia,
            crecimiento y protección.
          </p>

          <span class="fin-process__node-dot"></span>
        </article>

        <div class="fin-process__center">
          <div class="fin-process__center-ring"></div>

          <span>VERTEX</span>

          <h3>
            Estrategia
            <em>financiera</em>
          </h3>

          <p>
            Una sola visión para conectar todas sus decisiones.
          </p>
        </div>

        <transition name="fin-process-fade">
          <div
            v-if="activeContent"
            class="fin-process__floating"
          >
            <span>
              {{ activeContent.label }}
            </span>

            <strong>
              {{ activeContent.title }}
            </strong>

            <p>
              {{ activeContent.description }}
            </p>
          </div>
        </transition>

      </div>

      <div class="fin-process__footer">
        <span>
          PATRIMONIO
        </span>

        <div></div>

        <span>
          RIESGO
        </span>

        <div></div>

        <span>
          LIQUIDEZ
        </span>

        <div></div>

        <span>
          CRECIMIENTO
        </span>
      </div>

    </div>
  </section>
</template>

<script setup>
import { computed, ref } from 'vue'

const activeNode = ref(null)

const nodeContent = {
  growth: {
    label: 'CRECIMIENTO',
    title: 'Pensar en lo que sigue',
    description:
      'Evaluamos oportunidades de crecimiento sin perder de vista liquidez, riesgo y estabilidad.'
  },

  risk: {
    label: 'RIESGO',
    title: 'Prepararse antes de reaccionar',
    description:
      'Analizamos distintos escenarios para fortalecer la estrategia antes de que exista presión financiera.'
  },

  assets: {
    label: 'PATRIMONIO',
    title: 'Construir con intención',
    description:
      'Cada activo debe formar parte de una estructura coherente con los objetivos de largo plazo.'
  },

  liquidity: {
    label: 'LIQUIDEZ',
    title: 'Mantener capacidad de decisión',
    description:
      'Una buena estrategia también debe conservar recursos disponibles cuando aparecen nuevas oportunidades.'
  }
}

const activeContent = computed(() => {
  if (!activeNode.value) {
    return null
  }

  return nodeContent[activeNode.value]
})
</script>

<style scoped>
.fin-process {
  position: relative;
  padding: 150px 0;
  overflow: hidden;
  background:
    radial-gradient(
      circle at center,
      rgba(183, 155, 100, 0.07),
      transparent 38%
    ),
    var(--fin-bg);
}

.fin-process__container {
  width: min(1280px, calc(100% - 80px));
  margin: 0 auto;
}

/* =========================
   INTRO
========================= */

.fin-process__intro {
  max-width: 820px;
  margin: 0 auto 90px;
  text-align: center;
}

.fin-process__eyebrow {
  display: block;
  margin-bottom: 24px;
  color: var(--fin-accent);
  font-size: 9px;
  font-weight: 600;
  letter-spacing: 3px;
}

.fin-process__intro h2 {
  margin-bottom: 28px;
  font-family:
    Georgia,
    'Times New Roman',
    serif;
  font-size: clamp(48px, 5vw, 76px);
  line-height: 1.05;
  font-weight: 400;
  letter-spacing: -2.5px;
  color: var(--fin-primary);
}

.fin-process__intro h2 em {
  display: block;
  color: var(--fin-accent);
  font-weight: 400;
}

.fin-process__intro p {
  max-width: 680px;
  margin: 0 auto;
  color: var(--fin-text-soft);
  font-size: 14px;
  line-height: 1.9;
}

/* =========================
   MAP
========================= */

.fin-process__map {
  position: relative;
  width: min(920px, 100%);
  height: 760px;
  margin: 0 auto;
}

/* =========================
   CENTER
========================= */

.fin-process__center {
  position: absolute;
  z-index: 4;
  top: 50%;
  left: 50%;

  width: 285px;
  height: 285px;

  padding: 55px 35px;

  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;

  border-radius: 50%;

  background: var(--fin-primary);
  color: var(--fin-white);

  text-align: center;

  transform: translate(-50%, -50%);

  box-shadow:
    0 30px 70px rgba(13, 27, 42, 0.2);
}

.fin-process__center-ring {
  position: absolute;
  inset: -17px;

  border: 1px solid rgba(183, 155, 100, 0.4);
  border-radius: 50%;

  pointer-events: none;
}

.fin-process__center::before {
  content: '';

  position: absolute;

  inset: 17px;

  border:
    1px solid rgba(255, 255, 255, 0.08);

  border-radius: 50%;
}

.fin-process__center > span {
  position: relative;
  z-index: 2;

  margin-bottom: 15px;

  color: var(--fin-accent-light);

  font-size: 7px;
  letter-spacing: 3px;
}

.fin-process__center h3 {
  position: relative;
  z-index: 2;

  margin-bottom: 16px;

  font-family: Georgia, serif;

  font-size: 34px;
  line-height: 1.05;

  font-weight: 400;
}

.fin-process__center h3 em {
  display: block;

  color: var(--fin-accent-light);

  font-weight: 400;
}

.fin-process__center p {
  position: relative;
  z-index: 2;

  max-width: 190px;

  margin: 0;

  color: rgba(255, 255, 255, 0.45);

  font-size: 10px;
  line-height: 1.7;
}

/* =========================
   NODES
========================= */

.fin-process__node {
  position: absolute;
  z-index: 3;

  width: 270px;

  padding: 25px;

  background: rgba(255, 255, 255, 0.55);

  border: 1px solid var(--fin-border);

  backdrop-filter: blur(8px);

  cursor: default;

  transition:
    transform 0.3s ease,
    border-color 0.3s ease,
    background 0.3s ease,
    box-shadow 0.3s ease;
}

.fin-process__node:hover {
  transform: translateY(-6px);

  border-color:
    rgba(183, 155, 100, 0.7);

  background: rgba(255, 255, 255, 0.92);

  box-shadow:
    0 20px 40px rgba(13, 27, 42, 0.08);
}

.fin-process__node-label {
  display: block;

  margin-bottom: 15px;

  color: var(--fin-accent);

  font-size: 7px;
  font-weight: 600;

  letter-spacing: 2.5px;
}

.fin-process__node h3 {
  margin-bottom: 12px;

  font-family: Georgia, serif;

  font-size: 26px;
  font-weight: 400;

  color: var(--fin-primary);
}

.fin-process__node p {
  margin: 0;

  color: var(--fin-text-soft);

  font-size: 11px;
  line-height: 1.8;
}

.fin-process__node-dot {
  position: absolute;

  width: 9px;
  height: 9px;

  border-radius: 50%;

  background: var(--fin-accent);

  box-shadow:
    0 0 0 6px rgba(183, 155, 100, 0.11);
}

/* top */

.fin-process__node--top {
  top: 0;
  left: 50%;

  transform: translateX(-50%);
}

.fin-process__node--top:hover {
  transform:
    translateX(-50%)
    translateY(-6px);
}

.fin-process__node--top .fin-process__node-dot {
  left: 50%;
  bottom: -42px;

  transform: translateX(-50%);
}

/* right */

.fin-process__node--right {
  top: 50%;
  right: 0;

  transform: translateY(-50%);
}

.fin-process__node--right:hover {
  transform:
    translateY(-50%)
    translateX(-6px);
}

.fin-process__node--right .fin-process__node-dot {
  top: 50%;
  left: -42px;

  transform: translateY(-50%);
}

/* bottom */

.fin-process__node--bottom {
  bottom: 0;
  left: 50%;

  transform: translateX(-50%);
}

.fin-process__node--bottom:hover {
  transform:
    translateX(-50%)
    translateY(6px);
}

.fin-process__node--bottom .fin-process__node-dot {
  top: -42px;
  left: 50%;

  transform: translateX(-50%);
}

/* left */

.fin-process__node--left {
  top: 50%;
  left: 0;

  transform: translateY(-50%);
}

.fin-process__node--left:hover {
  transform:
    translateY(-50%)
    translateX(6px);
}

.fin-process__node--left .fin-process__node-dot {
  top: 50%;
  right: -42px;

  transform: translateY(-50%);
}

/* =========================
   CONNECTORS
========================= */

.fin-process__connector {
  position: absolute;
  z-index: 1;

  background:
    linear-gradient(
      90deg,
      transparent,
      var(--fin-accent),
      transparent
    );

  opacity: 0.4;
}

.fin-process__connector--top {
  top: 205px;
  left: 50%;

  width: 1px;
  height: 115px;

  background:
    linear-gradient(
      180deg,
      transparent,
      var(--fin-accent)
    );
}

.fin-process__connector--bottom {
  bottom: 205px;
  left: 50%;

  width: 1px;
  height: 115px;

  background:
    linear-gradient(
      180deg,
      var(--fin-accent),
      transparent
    );
}

.fin-process__connector--left {
  top: 50%;
  left: 275px;

  width: 115px;
  height: 1px;
}

.fin-process__connector--right {
  top: 50%;
  right: 275px;

  width: 115px;
  height: 1px;
}

/* =========================
   FLOATING INFO
========================= */

.fin-process__floating {
  position: absolute;
  z-index: 8;

  left: 50%;
  bottom: 50%;

  width: 230px;

  padding: 20px 22px;

  background: var(--fin-white);

  border-left:
    2px solid var(--fin-accent);

  box-shadow:
    0 18px 45px rgba(13, 27, 42, 0.11);

  transform:
    translate(-50%, 190px);
}

.fin-process__floating span {
  display: block;

  margin-bottom: 8px;

  color: var(--fin-accent);

  font-size: 6px;
  font-weight: 600;

  letter-spacing: 2px;
}

.fin-process__floating strong {
  display: block;

  margin-bottom: 8px;

  font-family: Georgia, serif;

  font-size: 18px;
  font-weight: 400;

  color: var(--fin-primary);
}

.fin-process__floating p {
  margin: 0;

  color: var(--fin-text-soft);

  font-size: 9px;
  line-height: 1.6;
}

/* =========================
   FOOTER LABELS
========================= */

.fin-process__footer {
  max-width: 900px;

  margin: 65px auto 0;

  display: grid;

  grid-template-columns:
    auto 1fr
    auto 1fr
    auto 1fr
    auto;

  align-items: center;

  gap: 15px;

  color: #a3a098;

  font-size: 7px;

  letter-spacing: 2px;
}

.fin-process__footer div {
  height: 1px;
  background: var(--fin-border);
}

/* =========================
   TRANSITION
========================= */

.fin-process-fade-enter-active,
.fin-process-fade-leave-active {
  transition:
    opacity 0.2s ease,
    transform 0.2s ease;
}

.fin-process-fade-enter-from,
.fin-process-fade-leave-to {
  opacity: 0;

  transform:
    translate(-50%, 200px);
}

/* =========================
   TABLET
========================= */

@media (max-width: 950px) {

  .fin-process__map {
    height: 980px;
  }

  .fin-process__node {
    width: 240px;
  }

  .fin-process__node--left {
    left: 10px;
  }

  .fin-process__node--right {
    right: 10px;
  }

  .fin-process__connector--left {
    left: 250px;
  }

  .fin-process__connector--right {
    right: 250px;
  }
}

/* =========================
   MOBILE
========================= */

@media (max-width: 700px) {

  .fin-process {
    padding: 90px 0;
  }

  .fin-process__container {
    width: calc(100% - 36px);
  }

  .fin-process__intro {
    margin-bottom: 60px;
  }

  .fin-process__intro h2 {
    font-size: 45px;
  }

  .fin-process__map {
    height: auto;

    display: flex;
    flex-direction: column;

    gap: 18px;
  }

  .fin-process__center {
    position: relative;

    top: auto;
    left: auto;

    width: 240px;
    height: 240px;

    margin: 25px auto;

    transform: none;

    order: 0;
  }

  .fin-process__node {
    position: relative;

    top: auto;
    right: auto;
    bottom: auto;
    left: auto;

    width: 100%;

    transform: none;

    padding: 27px;
  }

  .fin-process__node:hover,
  .fin-process__node--top:hover,
  .fin-process__node--right:hover,
  .fin-process__node--bottom:hover,
  .fin-process__node--left:hover {
    transform: none;
  }

  .fin-process__node--top {
    order: 1;
  }

  .fin-process__node--right {
    order: 2;
  }

  .fin-process__node--bottom {
    order: 3;
  }

  .fin-process__node--left {
    order: 4;
  }

  .fin-process__node-dot,
  .fin-process__connector {
    display: none;
  }

  .fin-process__floating {
    display: none;
  }

  .fin-process__footer {
    display: none;
  }
}
</style>