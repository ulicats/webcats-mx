<template>
  <section class="law-section law-section--dark law-why">
    <div class="law-container">

      <div class="law-why__grid">

        <div class="law-why__intro">

          <span class="law-why__eyebrow">
            Por qué elegirnos
          </span>

          <h2>
            La confianza también
            forma parte de la estrategia.
          </h2>

          <p>
            Un asunto jurídico no solamente requiere conocimiento
            técnico. También exige comunicación, criterio, seguimiento
            y absoluta discreción.
          </p>

          <a
            href="#consulta"
            class="law-why__button"
          >
            Solicitar consulta
            <span>→</span>
          </a>

        </div>

        <div class="law-why__list">

          <article
            v-for="(reason, index) in reasons"
            :key="reason.title"
            class="law-why__item"
          >
            <span class="law-why__number">
              {{ String(index + 1).padStart(2, "0") }}
            </span>

            <div>
              <h3>
                {{ reason.title }}
              </h3>

              <p>
                {{ reason.description }}
              </p>
            </div>
          </article>

        </div>

      </div>

    </div>
  </section>
</template>

<script setup>
const reasons = [
  {
    title: "Confidencialidad",
    description:
      "La información proporcionada por nuestros clientes es tratada con absoluta discreción profesional.",
  },
  {
    title: "Comunicación clara",
    description:
      "Explicamos el estado del asunto, las alternativas y los riesgos de una forma comprensible.",
  },
  {
    title: "Estrategia personalizada",
    description:
      "No aplicamos soluciones genéricas. Cada caso requiere objetivos y decisiones específicas.",
  },
  {
    title: "Seguimiento",
    description:
      "Mantenemos comunicación durante las distintas etapas para informar avances y próximos pasos.",
  },
];
</script>

<style scoped>
.law-why {
  position: relative;

  overflow: hidden;
}

.law-why::before {
  content: "§";

  position: absolute;

  right: -40px;
  bottom: -160px;

  color: rgba(255, 255, 255, 0.025);

  font-family:
    "Cormorant Garamond",
    Georgia,
    serif;

  font-size: 500px;

  line-height: 1;

  pointer-events: none;
}

.law-why__grid {
  position: relative;

  z-index: 2;

  display: grid;

  grid-template-columns:
    minmax(0, 0.85fr)
    minmax(0, 1.15fr);

  gap: 100px;
}

/* =========================================================
   INTRO
========================================================= */

.law-why__eyebrow {
  display: inline-flex;
  align-items: center;

  gap: 12px;

  margin-bottom: 20px;

  color: var(--law-gold-soft);

  font-family: "Inter", Arial, sans-serif;

  font-size: 10px;
  font-weight: 700;

  letter-spacing: 2px;
  text-transform: uppercase;
}

.law-why__eyebrow::before {
  content: "";

  width: 30px;
  height: 1px;

  background: var(--law-gold);
}

.law-why__intro h2 {
  max-width: 600px;

  margin-bottom: 28px;

  color: var(--law-white);

  font-family:
    "Cormorant Garamond",
    Georgia,
    serif;

  font-size: clamp(45px, 5vw, 68px);
  font-weight: 500;

  line-height: 1;

  letter-spacing: -1.5px;
}

.law-why__intro p {
  max-width: 500px;

  margin-bottom: 35px;

  color: rgba(255, 255, 255, 0.68);

  font-size: 14px;
  line-height: 1.9;
}

.law-why__button {
  display: inline-flex;
  align-items: center;

  gap: 35px;

  padding: 15px 20px;

  border: 1px solid rgba(199, 178, 143, 0.65);

  color: var(--law-white);

  font-family: "Inter", Arial, sans-serif;

  font-size: 9px;
  font-weight: 700;

  letter-spacing: 1px;
  text-transform: uppercase;

  text-decoration: none;

  transition:
    background var(--law-transition),
    color var(--law-transition);
}

.law-why__button:hover {
  background: var(--law-gold);
  color: var(--law-primary);
}

/* =========================================================
   LISTA
========================================================= */

.law-why__list {
  border-top: 1px solid rgba(255, 255, 255, 0.18);
}

.law-why__item {
  display: grid;

  grid-template-columns: 70px 1fr;

  gap: 25px;

  padding: 28px 0;

  border-bottom: 1px solid rgba(255, 255, 255, 0.18);
}

.law-why__number {
  color: var(--law-gold-soft);

  font-family:
    "Cormorant Garamond",
    Georgia,
    serif;

  font-size: 27px;
}

.law-why__item h3 {
  margin-bottom: 8px;

  color: var(--law-white);

  font-size: 25px;
  font-weight: 500;
}

.law-why__item p {
  max-width: 600px;

  margin: 0;

  color: rgba(255, 255, 255, 0.6);

  font-size: 13px;
  line-height: 1.75;
}

@media (max-width: 900px) {
  .law-why__grid {
    grid-template-columns: 1fr;

    gap: 70px;
  }
}

@media (max-width: 550px) {
  .law-why__item {
    grid-template-columns: 45px 1fr;

    gap: 15px;
  }

  .law-why::before {
    display: none;
  }
}
</style>