<template>
  <section class="law-section law-section--soft law-process">
    <div class="law-container">

      <div class="law-process__heading">
        <span class="law-eyebrow">
          Nuestro proceso
        </span>

        <h2 class="law-title law-title--center">
          Una ruta clara desde la consulta
          hasta el seguimiento del asunto.
        </h2>

        <p class="law-subtitle law-subtitle--center">
          Cada caso inicia con una valoración del problema,
          continúa con el análisis jurídico y se desarrolla
          mediante una estrategia definida.
        </p>
      </div>

      <div class="law-process__timeline">

        <article
          v-for="(step, index) in steps"
          :key="step.number"
          class="law-process__step"
        >
          <div class="law-process__number">
            {{ step.number }}
          </div>

          <div class="law-process__content">
            <span class="law-process__label">
              Etapa {{ index + 1 }}
            </span>

            <h3>
              {{ step.title }}
            </h3>

            <p>
              {{ step.description }}
            </p>
          </div>

          <span
            v-if="index < steps.length - 1"
            class="law-process__arrow"
          >
            →
          </span>
        </article>

      </div>

      <div class="law-process__note law-contract-frame">
        <span class="law-process__note-label">
          Nota importante
        </span>

        <p>
          La estrategia y duración de cada asunto dependen de sus
          circunstancias particulares, documentación disponible y
          actuaciones de las partes involucradas.
        </p>
      </div>

    </div>
  </section>
</template>

<script setup>
const steps = [
  {
    number: "01",
    title: "Consulta",
    description:
      "Escuchamos tu caso, identificamos el problema y recopilamos la información inicial.",
  },
  {
    number: "02",
    title: "Análisis",
    description:
      "Revisamos antecedentes, documentación, riesgos y posibles escenarios jurídicos.",
  },
  {
    number: "03",
    title: "Estrategia",
    description:
      "Definimos la ruta legal más conveniente de acuerdo con los objetivos del asunto.",
  },
  {
    number: "04",
    title: "Seguimiento",
    description:
      "Damos continuidad al proceso y mantenemos comunicación sobre avances y decisiones.",
  },
];
</script>

<style scoped>
.law-process__heading {
  max-width: 900px;

  margin: 0 auto 75px;

  text-align: center;
}

/* =========================================================
   TIMELINE
========================================================= */

.law-process__timeline {
  display: grid;

  grid-template-columns: repeat(4, 1fr);

  border-top: 1px solid var(--law-border);
  border-bottom: 1px solid var(--law-border);
}

.law-process__step {
  position: relative;

  min-height: 300px;

  display: flex;
  flex-direction: column;

  padding: 38px 32px;

  border-right: 1px solid var(--law-border);
}

.law-process__step:last-child {
  border-right: 0;
}

.law-process__number {
  margin-bottom: 42px;

  color: var(--law-primary);

  font-family:
    "Cormorant Garamond",
    Georgia,
    serif;

  font-size: 48px;
  font-weight: 600;

  line-height: 1;
}

.law-process__label {
  color: var(--law-gold);

  font-family: "Inter", Arial, sans-serif;

  font-size: 8px;
  font-weight: 700;

  letter-spacing: 1.5px;
  text-transform: uppercase;
}

.law-process__content h3 {
  margin: 10px 0 14px;

  font-size: 27px;
}

.law-process__content p {
  margin-bottom: 0;

  color: var(--law-text-soft);

  font-size: 13px;
  line-height: 1.75;
}

.law-process__arrow {
  position: absolute;

  top: 52px;
  right: -10px;

  z-index: 2;

  width: 20px;
  height: 20px;

  display: flex;
  align-items: center;
  justify-content: center;

  background: var(--law-bg);

  color: var(--law-gold);

  font-size: 17px;
}

/* =========================================================
   NOTA
========================================================= */

.law-process__note {
  max-width: 850px;

  display: grid;

  grid-template-columns: 180px 1fr;

  gap: 30px;

  margin: 50px auto 0;
  padding: 25px 35px;
}

.law-process__note-label {
  color: var(--law-gold);

  font-family: "Inter", Arial, sans-serif;

  font-size: 9px;
  font-weight: 700;

  letter-spacing: 1.5px;
  text-transform: uppercase;
}

.law-process__note p {
  margin: 0;

  color: var(--law-text-soft);

  font-size: 13px;
  line-height: 1.8;
}

@media (max-width: 950px) {
  .law-process__timeline {
    grid-template-columns: repeat(2, 1fr);
  }

  .law-process__step:nth-child(2) {
    border-right: 0;
  }

  .law-process__step:nth-child(-n + 2) {
    border-bottom: 1px solid var(--law-border);
  }

  .law-process__arrow {
    display: none;
  }
}

@media (max-width: 600px) {
  .law-process__timeline {
    grid-template-columns: 1fr;
  }

  .law-process__step {
    min-height: auto;

    border-right: 0;
    border-bottom: 1px solid var(--law-border);
  }

  .law-process__step:last-child {
    border-bottom: 0;
  }

  .law-process__note {
    grid-template-columns: 1fr;

    gap: 10px;

    padding: 25px;
  }
}
</style>