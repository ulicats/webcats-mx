<script setup>
const steps = [
  {
    number: "01",
    title: "Conocemos tu historia",
    text: "Revisamos tus hábitos, rutina, objetivos, preferencias y estilo de vida.",
  },
  {
    number: "02",
    title: "Diseñamos tu estrategia",
    text: "Creamos un plan alimenticio personalizado que pueda integrarse realmente a tu día a día.",
  },
  {
    number: "03",
    title: "Damos seguimiento",
    text: "Evaluamos avances, resolvemos dudas y hacemos ajustes conforme evolucionas.",
  },
  {
    number: "04",
    title: "Construimos hábitos",
    text: "El objetivo final es que puedas mantener tus resultados sin depender siempre de una dieta.",
  },
];
</script>

<template>
  <section class="nutri-process">
    <div class="nutri-process__container">

      <div class="nutri-process__heading">
        <span>Cómo trabajamos</span>

        <h2>
          Tu proceso,
          <strong>paso a paso.</strong>
        </h2>

        <p>
          Una metodología sencilla que busca generar cambios sostenibles,
          no resultados temporales.
        </p>
      </div>

      <div class="nutri-process__steps">

        <article
          v-for="(step, index) in steps"
          :key="step.number"
          class="nutri-process__step"
        >
          <div class="nutri-process__top">

            <div class="nutri-process__circle">
              {{ step.number }}
            </div>

            <div
              v-if="index !== steps.length - 1"
              class="nutri-process__line"
            ></div>

          </div>

          <h3>
            {{ step.title }}
          </h3>

          <p>
            {{ step.text }}
          </p>
        </article>

      </div>

    </div>
  </section>
</template>

<style scoped>
.nutri-process {
  padding: 120px 0;

  background: var(--nutri-primary);
  color: var(--nutri-white);
}

.nutri-process__container {
  width: min(1180px, calc(100% - 40px));
  margin: 0 auto;
}

/* =========================
   HEADING
========================= */

.nutri-process__heading {
  max-width: 620px;
  margin-bottom: 75px;
}

.nutri-process__heading > span {
  display: block;

  margin-bottom: 16px;

  color: var(--nutri-secondary);

  font-size: 12px;
  font-weight: 700;
  letter-spacing: 1.7px;
  text-transform: uppercase;
}

.nutri-process h2 {
  margin: 0;

  color: var(--nutri-white);

  font-size: clamp(40px, 5vw, 60px);
  line-height: 1;
  letter-spacing: -2px;
}

.nutri-process h2 strong {
  color: var(--nutri-secondary);
  font-weight: 700;
}

.nutri-process__heading p {
  margin: 25px 0 0;

  color: rgba(255, 255, 255, 0.65);

  font-size: 15px;
  line-height: 1.8;
}

/* =========================
   STEPS
========================= */

.nutri-process__steps {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 0;
}

.nutri-process__step {
  position: relative;
  padding-right: 28px;
}

.nutri-process__top {
  display: flex;
  align-items: center;

  margin-bottom: 30px;
}

.nutri-process__circle {
  width: 58px;
  height: 58px;
  flex-shrink: 0;

  display: grid;
  place-items: center;

  border: 1px solid rgba(255, 255, 255, 0.3);
  border-radius: 50%;

  background: rgba(255, 255, 255, 0.05);

  color: var(--nutri-white);

  font-size: 14px;
  font-weight: 700;
}

.nutri-process__line {
  width: 100%;
  height: 1px;

  margin-left: 15px;

  background: rgba(255, 255, 255, 0.2);
}

.nutri-process__step h3 {
  max-width: 200px;

  margin: 0 0 15px;

  color: var(--nutri-white);

  font-size: 20px;
  line-height: 1.3;
}

.nutri-process__step p {
  max-width: 230px;

  margin: 0;

  color: rgba(255, 255, 255, 0.6);

  font-size: 13px;
  line-height: 1.7;
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 900px) {
  .nutri-process {
    padding: 90px 0;
  }

  .nutri-process__steps {
    grid-template-columns: repeat(2, 1fr);
    gap: 50px 30px;
  }

  .nutri-process__step:nth-child(2) .nutri-process__line {
    display: none;
  }
}

@media (max-width: 600px) {
  .nutri-process {
    padding: 70px 0;
  }

  .nutri-process__container {
    width: calc(100% - 28px);
  }

  .nutri-process__heading {
    margin-bottom: 50px;
  }

  .nutri-process__steps {
    grid-template-columns: 1fr;
    gap: 35px;
  }

  .nutri-process__step {
    padding-right: 0;
  }

  .nutri-process__line {
    display: none;
  }

  .nutri-process__top {
    margin-bottom: 18px;
  }

  .nutri-process__step h3,
  .nutri-process__step p {
    max-width: 100%;
  }
}
</style>