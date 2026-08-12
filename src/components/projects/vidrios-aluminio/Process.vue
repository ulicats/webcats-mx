<template>
  <section
    id="proceso"
    class="process-section"
  >
    <div class="process-shell">

      <div class="process-intro">
        <span class="section-kicker">
          Proceso
        </span>

        <h2>
          Construimos cada
          <span>proyecto por niveles.</span>
        </h2>

        <p>
          De la primera medición hasta la entrega final,
          cada etapa tiene una función específica dentro
          del resultado.
        </p>

        <div class="process-building-mark">
        <span
            v-for="step in steps"
            :key="`mark-${step.number}`"
        >
            {{ step.number }}
        </span>
        </div>
      </div>


      <div class="process-floors">

        <article
          v-for="step in steps"
          :key="step.number"
          class="process-floor"
        >
          <div class="process-floor__number">
            {{ step.number }}
          </div>

          <div class="process-floor__title">
            <span>
              {{ step.tag }}
            </span>

            <h3>
              {{ step.title }}
            </h3>
          </div>

          <p>
            {{ step.description }}
          </p>

          <div class="process-floor__line"></div>
        </article>

      </div>

    </div>
  </section>
</template>

<script setup>
const steps = [
  {
    number: '01',
    tag: 'Medición',
    title: 'Conocemos tu espacio',
    description:
      'Revisamos medidas, ubicación y necesidades para definir correctamente el proyecto.',
  },
  {
    number: '02',
    tag: 'Propuesta',
    title: 'Diseñamos la solución',
    description:
      'Seleccionamos materiales, sistema de apertura y acabados según el uso del espacio.',
  },
  {
    number: '03',
    tag: 'Fabricación',
    title: 'Preparamos cada pieza',
    description:
      'Fabricamos los elementos necesarios respetando medidas y especificaciones.',
  },
  {
    number: '04',
    tag: 'Instalación',
    title: 'Montamos la estructura',
    description:
      'Realizamos la instalación y ajustes necesarios para lograr un acabado limpio.',
  },
  {
    number: '05',
    tag: 'Entrega',
    title: 'Revisión y garantía',
    description:
      'Verificamos funcionamiento, acabados y detalles antes de entregar el proyecto.',
  },
]
</script>

<style scoped>
.process-section {
  padding: 130px 5vw;

  background: #e8eef0;
}

.process-shell {
  width: min(100%, 1500px);
  margin: 0 auto;

  display: grid;

  grid-template-columns:
    minmax(300px, 0.75fr)
    minmax(500px, 1.25fr);

  gap: 80px;
}

.process-intro {
  position: sticky;

  top: 120px;

  align-self: start;
}

.section-kicker {
  display: block;

  margin-bottom: 18px;

  color: var(--glass-blue, #4ea7c4);

  font-size: 0.7rem;
  font-weight: 700;

  letter-spacing: 0.18em;
  text-transform: uppercase;
}

.process-intro h2 {
  margin: 0;

  color: #111416;

  font-size: clamp(2.8rem, 5vw, 5.3rem);
  font-weight: 500;

  line-height: 0.98;
  letter-spacing: -0.05em;
}

.process-intro h2 span {
  display: block;

  color: #87949a;
}

.process-intro > p {
  max-width: 510px;

  margin: 35px 0 50px;

  color: #66747a;

  font-size: 1rem;
  line-height: 1.8;
}

.process-building-mark {
  width: 90px;

  display: flex;
  flex-direction: column;
}

.process-building-mark span {
  height: 45px;

  display: flex;
  align-items: center;

  border-top: 5px solid #111416;

  color: #6e7b81;

  font-size: 0.6rem;
  font-weight: 700;

  letter-spacing: 0.14em;
}

.process-building-mark span:last-child {
  border-bottom: 5px solid #111416;
}

.process-floors {
  border: 5px solid #111416;

  background: #111416;
}

.process-floor {
  position: relative;

  min-height: 205px;

  padding: 35px 40px;

  display: grid;

  grid-template-columns:
    80px
    minmax(180px, 0.75fr)
    minmax(220px, 1fr);

  gap: 28px;

  align-items: center;

  overflow: hidden;

  background: #f5f8f9;

  border-bottom: 5px solid #111416;

  transition:
    background 0.35s ease;
}

.process-floor:last-child {
  border-bottom: 0;
}

.process-floor:hover {
  background: #d7e4e9;
}

.process-floor::before {
  content: '';

  position: absolute;

  width: 40%;
  height: 180%;

  top: -60%;
  right: -45%;

  transform: rotate(25deg);

  background: rgba(255, 255, 255, 0.55);

  transition:
    right 0.8s ease;
}

.process-floor:hover::before {
  right: 110%;
}

.process-floor__number {
  position: relative;
  z-index: 2;

  color: var(--glass-blue, #4ea7c4);

  font-size: 0.7rem;
  font-weight: 700;

  letter-spacing: 0.18em;
}

.process-floor__title {
  position: relative;
  z-index: 2;
}

.process-floor__title span {
  display: block;

  margin-bottom: 8px;

  color: #8b979c;

  font-size: 0.6rem;
  font-weight: 700;

  letter-spacing: 0.14em;
  text-transform: uppercase;
}

.process-floor__title h3 {
  margin: 0;

  color: #111416;

  font-size: 1.35rem;
  font-weight: 500;
}

.process-floor > p {
  position: relative;
  z-index: 2;

  max-width: 440px;

  margin: 0;

  color: #657177;

  font-size: 0.88rem;
  line-height: 1.65;
}

.process-floor__line {
  position: absolute;

  left: 80px;
  bottom: 0;

  width: 0;
  height: 2px;

  background: var(--glass-blue, #4ea7c4);

  transition:
    width 0.45s ease;
}

.process-floor:hover
.process-floor__line {
  width: calc(100% - 80px);
}

@media (max-width: 1050px) {
  .process-section {
    padding: 100px 5vw;
  }

  .process-shell {
    grid-template-columns: 1fr;

    gap: 55px;
  }

  .process-intro {
    position: static;
  }

  .process-building-mark {
    flex-direction: row;

    width: 100%;
  }

  .process-building-mark span {
    width: 20%;
    height: 50px;

    border-top: 5px solid #111416;
    border-right: 5px solid #111416;

    justify-content: center;
  }

  .process-building-mark span:last-child {
    border-bottom: 0;
    border-right: 0;
  }
}

@media (max-width: 700px) {
  .process-section {
    padding: 75px 20px;
  }

  .process-intro h2 {
    font-size: clamp(2.6rem, 12vw, 4rem);
  }

  .process-floors {
    border-width: 3px;
  }

  .process-floor {
    min-height: auto;

    padding: 28px 24px;

    grid-template-columns: 45px 1fr;

    gap: 12px 18px;

    border-bottom-width: 3px;
  }

  .process-floor > p {
    grid-column: 2;

    margin-top: 5px;
  }

  .process-floor__line {
    left: 45px;
  }

  .process-floor:hover
  .process-floor__line {
    width: calc(100% - 45px);
  }
}
</style>