<script setup>
const results = [
  {
    title: "Mejor composición corporal",
    time: "12 semanas",
    result: "-7.4 kg",
    detail: "Mejora en hábitos, energía y medidas corporales.",
  },
  {
    title: "Mejor rendimiento",
    time: "10 semanas",
    result: "+ rendimiento",
    detail: "Estrategia alimenticia adaptada a entrenamiento y recuperación.",
  },
  {
    title: "Hábitos sostenibles",
    time: "16 semanas",
    result: "-8 cm",
    detail: "Cambios progresivos sin restricciones extremas.",
  },
];
</script>

<template>
  <section id="resultados" class="nutri-results">
    <div class="nutri-results__container">

      <div class="nutri-results__header">
        <div>
          <span class="nutri-results__eyebrow">
            Resultados
          </span>

          <h2>
            Progreso real,
            <span>sin soluciones mágicas.</span>
          </h2>
        </div>

        <p>
          Cada proceso es diferente. El objetivo es crear cambios
          sostenibles que puedan mantenerse con el tiempo.
        </p>
      </div>

      <div class="nutri-results__grid">

        <article
          v-for="(item, index) in results"
          :key="item.title"
          class="nutri-results__card"
        >
          <div class="nutri-results__card-top">
            <span>
              Caso {{ String(index + 1).padStart(2, "0") }}
            </span>

            <span class="nutri-results__time">
              {{ item.time }}
            </span>
          </div>

          <div class="nutri-results__metric">
            {{ item.result }}
          </div>

          <h3>
            {{ item.title }}
          </h3>

          <p>
            {{ item.detail }}
          </p>

          <div class="nutri-results__progress">
            <span></span>
          </div>
        </article>

      </div>

      <p class="nutri-results__note">
        * Los resultados pueden variar de una persona a otra.
      </p>

    </div>
  </section>
</template>

<style scoped>
.nutri-results {
  padding: 120px 0;
  background: var(--nutri-white);
}

.nutri-results__container {
  width: min(1180px, calc(100% - 40px));
  margin: 0 auto;
}

/* =========================
   HEADER
========================= */

.nutri-results__header {
  display: grid;
  grid-template-columns: 1.1fr 0.9fr;
  align-items: end;
  gap: 80px;

  margin-bottom: 65px;
}

.nutri-results__eyebrow {
  display: inline-block;

  margin-bottom: 16px;

  color: var(--nutri-primary);

  font-size: 12px;
  font-weight: 700;
  letter-spacing: 1.6px;
  text-transform: uppercase;
}

.nutri-results h2 {
  max-width: 700px;
  margin: 0;

  color: var(--nutri-text);

  font-size: clamp(40px, 5vw, 60px);
  line-height: 1.05;
  letter-spacing: -2px;
}

.nutri-results h2 span {
  display: block;
  color: var(--nutri-primary);
}

.nutri-results__header > p {
  max-width: 460px;
  margin: 0;

  color: var(--nutri-text-soft);

  font-size: 15px;
  line-height: 1.8;
}

/* =========================
   GRID
========================= */

.nutri-results__grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 22px;
}

/* =========================
   CARD
========================= */

.nutri-results__card {
  min-height: 360px;

  display: flex;
  flex-direction: column;

  padding: 34px;

  border: 1px solid var(--nutri-border);
  border-radius: 24px;

  background: var(--nutri-bg);

  transition:
    transform 0.3s ease,
    box-shadow 0.3s ease;
}

.nutri-results__card:hover {
  transform: translateY(-7px);

  box-shadow: 0 20px 50px rgba(36, 72, 58, 0.09);
}

.nutri-results__card-top {
  display: flex;
  align-items: center;
  justify-content: space-between;

  color: var(--nutri-text-soft);

  font-size: 11px;
  font-weight: 700;
  letter-spacing: 1px;
  text-transform: uppercase;
}

.nutri-results__time {
  padding: 7px 10px;

  border-radius: 999px;

  background: var(--nutri-soft);
  color: var(--nutri-primary);
}

.nutri-results__metric {
  margin-top: 50px;

  color: var(--nutri-primary);

  font-size: 48px;
  font-weight: 800;
  line-height: 1;
}

.nutri-results__card h3 {
  margin: 20px 0 12px;

  color: var(--nutri-text);

  font-size: 21px;
}

.nutri-results__card p {
  margin: 0;

  color: var(--nutri-text-soft);

  font-size: 13px;
  line-height: 1.7;
}

.nutri-results__progress {
  position: relative;

  height: 5px;

  margin-top: auto;

  border-radius: 999px;

  background: var(--nutri-border);

  overflow: hidden;
}

.nutri-results__progress span {
  display: block;

  width: 78%;
  height: 100%;

  border-radius: 999px;

  background: var(--nutri-primary);
}

.nutri-results__card:nth-child(2) .nutri-results__progress span {
  width: 88%;
}

.nutri-results__card:nth-child(3) .nutri-results__progress span {
  width: 83%;
}

.nutri-results__note {
  margin: 25px 0 0;

  color: var(--nutri-text-soft);

  font-size: 11px;
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 900px) {
  .nutri-results {
    padding: 90px 0;
  }

  .nutri-results__header {
    grid-template-columns: 1fr;
    gap: 25px;
  }

  .nutri-results__grid {
    grid-template-columns: 1fr;
  }

  .nutri-results__card {
    min-height: 320px;
  }
}

@media (max-width: 520px) {
  .nutri-results {
    padding: 70px 0;
  }

  .nutri-results__container {
    width: calc(100% - 28px);
  }

  .nutri-results__card {
    padding: 28px;
  }

  .nutri-results__metric {
    font-size: 42px;
  }
}
</style>