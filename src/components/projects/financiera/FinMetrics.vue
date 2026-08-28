<template>
  <section class="fin-metrics">

    <div class="fin-metrics__container">

      <div class="fin-metrics__header">
        <span>VISIÓN EN NÚMEROS</span>

        <h2>
          Medir es parte
          <em>de decidir.</em>
        </h2>
      </div>

      <div class="fin-metrics__grid">

        <article
          v-for="metric in metrics"
          :key="metric.label"
          class="fin-metrics__item"
        >
          <span class="fin-metrics__label">
            {{ metric.label }}
          </span>

          <div class="fin-metrics__value">
            <span>{{ metric.prefix }}</span>
            <strong>{{ metric.value }}</strong>
            <span>{{ metric.suffix }}</span>
          </div>

          <p>
            {{ metric.description }}
          </p>
        </article>

      </div>

      <div class="fin-metrics__bottom">

        <div class="fin-metrics__line">
          <span
            v-for="point in 10"
            :key="point"
          ></span>
        </div>

        <div class="fin-metrics__bottom-text">
          <span>DISCIPLINA FINANCIERA</span>
          <span>VISIÓN DE LARGO PLAZO</span>
        </div>

      </div>

    </div>

  </section>
</template>

<script setup>
const metrics = [
  {
    label: 'HORIZONTE',
    prefix: '+',
    value: '10',
    suffix: ' años',
    description:
      'Las decisiones más importantes se construyen con perspectiva y paciencia.'
  },
  {
    label: 'ESTRATEGIA',
    prefix: '',
    value: '100',
    suffix: '%',
    description:
      'Cada estrategia parte de objetivos, condiciones y prioridades particulares.'
  },
  {
    label: 'SEGUIMIENTO',
    prefix: '',
    value: '360',
    suffix: '°',
    description:
      'Analizamos patrimonio, flujo, riesgo y objetivos como parte de una sola estrategia.'
  },
  {
    label: 'ENFOQUE',
    prefix: '',
    value: '01',
    suffix: '',
    description:
      'Una visión integral: proteger, ordenar y desarrollar patrimonio con disciplina.'
  }
]
</script>

<style scoped>
.fin-metrics {
  position: relative;
  padding: 140px 0;
  background:
    radial-gradient(circle at 80% 20%, rgba(183, 155, 100, 0.12), transparent 30%),
    var(--fin-secondary);
  color: var(--fin-white);
}

.fin-metrics__container {
  width: min(1280px, calc(100% - 80px));
  margin: 0 auto;
}

.fin-metrics__header {
  max-width: 850px;
  margin-bottom: 90px;
}

.fin-metrics__header > span {
  display: block;
  margin-bottom: 24px;
  color: var(--fin-accent-light);
  font-size: 9px;
  font-weight: 600;
  letter-spacing: 3px;
}

.fin-metrics__header h2 {
  margin: 0;
  font-family: Georgia, 'Times New Roman', serif;
  font-size: clamp(48px, 5vw, 75px);
  line-height: 1.05;
  font-weight: 400;
  letter-spacing: -2.5px;
}

.fin-metrics__header h2 em {
  display: block;
  color: var(--fin-accent-light);
  font-weight: 400;
}

.fin-metrics__grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  border-top: 1px solid rgba(255, 255, 255, 0.13);
  border-bottom: 1px solid rgba(255, 255, 255, 0.13);
}

.fin-metrics__item {
  min-height: 300px;
  padding: 38px 32px;
}

.fin-metrics__item + .fin-metrics__item {
  border-left: 1px solid rgba(255, 255, 255, 0.13);
}

.fin-metrics__label {
  display: block;
  margin-bottom: 70px;
  color: rgba(255, 255, 255, 0.35);
  font-size: 8px;
  letter-spacing: 2.5px;
}

.fin-metrics__value {
  display: flex;
  align-items: baseline;
  margin-bottom: 24px;
  color: var(--fin-accent-light);
}

.fin-metrics__value strong {
  font-family: Georgia, serif;
  font-size: clamp(45px, 4vw, 64px);
  font-weight: 400;
  line-height: 1;
}

.fin-metrics__value span {
  font-family: Georgia, serif;
  font-size: 18px;
}

.fin-metrics__item p {
  max-width: 260px;
  margin: 0;
  color: rgba(255, 255, 255, 0.48);
  font-size: 12px;
  line-height: 1.8;
}

.fin-metrics__bottom {
  padding-top: 60px;
}

.fin-metrics__line {
  display: grid;
  grid-template-columns: repeat(10, 1fr);
  align-items: end;
  gap: 12px;
  height: 90px;
}

.fin-metrics__line span {
  width: 100%;
  background: rgba(183, 155, 100, 0.35);
}

.fin-metrics__line span:nth-child(1) {
  height: 18%;
}

.fin-metrics__line span:nth-child(2) {
  height: 26%;
}

.fin-metrics__line span:nth-child(3) {
  height: 22%;
}

.fin-metrics__line span:nth-child(4) {
  height: 38%;
}

.fin-metrics__line span:nth-child(5) {
  height: 48%;
}

.fin-metrics__line span:nth-child(6) {
  height: 45%;
}

.fin-metrics__line span:nth-child(7) {
  height: 61%;
}

.fin-metrics__line span:nth-child(8) {
  height: 69%;
}

.fin-metrics__line span:nth-child(9) {
  height: 82%;
}

.fin-metrics__line span:nth-child(10) {
  height: 100%;
  background: var(--fin-accent);
}

.fin-metrics__bottom-text {
  display: flex;
  justify-content: space-between;
  margin-top: 18px;
  color: rgba(255, 255, 255, 0.25);
  font-size: 7px;
  letter-spacing: 2px;
}

@media (max-width: 1000px) {
  .fin-metrics__grid {
    grid-template-columns: repeat(2, 1fr);
  }

  .fin-metrics__item:nth-child(3) {
    border-left: 0;
    border-top: 1px solid rgba(255, 255, 255, 0.13);
  }

  .fin-metrics__item:nth-child(4) {
    border-top: 1px solid rgba(255, 255, 255, 0.13);
  }
}

@media (max-width: 600px) {
  .fin-metrics {
    padding: 90px 0;
  }

  .fin-metrics__container {
    width: calc(100% - 36px);
  }

  .fin-metrics__grid {
    grid-template-columns: 1fr;
  }

  .fin-metrics__item,
  .fin-metrics__item:nth-child(3),
  .fin-metrics__item:nth-child(4) {
    min-height: auto;
    border-left: 0;
    border-top: 1px solid rgba(255, 255, 255, 0.13);
  }

  .fin-metrics__item:first-child {
    border-top: 0;
  }

  .fin-metrics__label {
    margin-bottom: 35px;
  }

  .fin-metrics__bottom-text {
    gap: 20px;
  }
}
</style>