<script setup>
const services = [
  {
    number: "01",
    icon: "scale",
    title: "Control de peso",
    text: "Estrategias personalizadas para mejorar composición corporal sin dietas extremas ni restricciones innecesarias.",
  },
  {
    number: "02",
    icon: "sport",
    title: "Nutrición deportiva",
    text: "Planes enfocados en rendimiento, recuperación y alimentación adecuada según tu entrenamiento y objetivos.",
  },
  {
    number: "03",
    icon: "heart",
    title: "Nutrición clínica",
    text: "Acompañamiento nutricional adaptado a necesidades específicas y hábitos individuales.",
  },
  {
    number: "04",
    icon: "online",
    title: "Consulta en línea",
    text: "Recibe orientación y seguimiento profesional desde cualquier lugar con consultas completamente remotas.",
  },
];
</script>

<template>
  <section id="servicios" class="nutri-services">
    <div class="nutri-services__container">

      <div class="nutri-services__header">
        <div>
          <span class="nutri-services__eyebrow">
            Servicios
          </span>

          <h2>
            Un plan para cada
            <span>objetivo.</span>
          </h2>
        </div>

        <p>
          No existen dos personas iguales. Cada estrategia comienza
          entendiendo tus hábitos, necesidades y metas personales.
        </p>
      </div>

      <div class="nutri-services__grid">

        <article
          v-for="service in services"
          :key="service.number"
          class="nutri-services__card"
        >
          <div class="nutri-services__number">
            {{ service.number }}
          </div>

          <div class="nutri-services__icon">

            <!-- CONTROL DE PESO -->
            <svg
              v-if="service.icon === 'scale'"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
            >
              <rect x="4" y="3" width="16" height="18" rx="3" />
              <path d="M8 8h8" />
              <path d="M12 8l2-2" />
            </svg>

            <!-- NUTRICIÓN DEPORTIVA -->
            <svg
              v-else-if="service.icon === 'sport'"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
            >
              <path d="M6 8v8" />
              <path d="M18 8v8" />
              <path d="M3 10v4" />
              <path d="M21 10v4" />
              <path d="M6 12h12" />
            </svg>

            <!-- NUTRICIÓN CLÍNICA -->
            <svg
              v-else-if="service.icon === 'heart'"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
            >
              <path
                d="M20.8 4.6c-2-2-5.2-2-7.2 0L12 6.2l-1.6-1.6c-2-2-5.2-2-7.2 0s-2 5.2 0 7.2L12 20.6l8.8-8.8c2-2 2-5.2 0-7.2Z"
              />
              <path d="M8 12h2l1-2 2 4 1-2h2" />
            </svg>

            <!-- CONSULTA ONLINE -->
            <svg
              v-else
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
            >
              <rect x="3" y="4" width="18" height="13" rx="2" />
              <path d="M8 21h8" />
              <path d="M12 17v4" />
              <circle cx="12" cy="10" r="2.5" />
            </svg>

          </div>

          <h3>
            {{ service.title }}
          </h3>

          <p>
            {{ service.text }}
          </p>

          <a href="#agenda">
            Agendar consulta
            <span>→</span>
          </a>
        </article>

      </div>

    </div>
  </section>
</template>

<style scoped>
.nutri-services {
  padding: 120px 0;
  background: var(--nutri-bg);
}

.nutri-services__container {
  width: min(1180px, calc(100% - 40px));
  margin: 0 auto;
}

/* =========================
   HEADER
========================= */

.nutri-services__header {
  display: grid;
  grid-template-columns: 1.1fr 0.9fr;
  align-items: end;
  gap: 80px;

  margin-bottom: 65px;
}

.nutri-services__eyebrow {
  display: inline-block;

  margin-bottom: 15px;

  color: var(--nutri-primary);

  font-size: 12px;
  font-weight: 700;
  letter-spacing: 1.6px;
  text-transform: uppercase;
}

.nutri-services h2 {
  margin: 0;

  color: var(--nutri-text);

  font-size: clamp(40px, 5vw, 60px);
  line-height: 1;
  letter-spacing: -2px;
}

.nutri-services h2 span {
  color: var(--nutri-primary);
}

.nutri-services__header > p {
  max-width: 500px;
  margin: 0;

  color: var(--nutri-text-soft);

  font-size: 15px;
  line-height: 1.8;
}

.nutri-services__icon svg {
  width: 40px;
  height: 40px;
}

/* =========================
   GRID
========================= */

.nutri-services__grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 20px;
}

/* =========================
   CARD
========================= */

.nutri-services__card {
  position: relative;
  overflow: hidden;

  min-height: 340px;

  display: flex;
  flex-direction: column;

  padding: 38px;

  border: 1px solid var(--nutri-border);
  border-radius: 24px;

  background: var(--nutri-white);

  transition:
    transform 0.3s ease,
    box-shadow 0.3s ease,
    border-color 0.3s ease;
}

.nutri-services__card:hover {
  transform: translateY(-7px);

  border-color: var(--nutri-secondary);

  box-shadow: 0 22px 50px rgba(36, 72, 58, 0.1);
}

.nutri-services__number {
  position: absolute;
  top: 32px;
  right: 32px;

  color: var(--nutri-border);

  font-size: 35px;
  font-weight: 800;
}

.nutri-services__icon {
  width: 50px;
  height: 50px;

  display: grid;
  place-items: center;

  margin-bottom: 50px;

  border-radius: 15px;

  
  color: var(--nutri-primary);

  font-size: 20px;
}

.nutri-services__card h3 {
  margin: 0 0 15px;

  color: var(--nutri-text);

  font-size: 25px;
  font-weight: 700;
}

.nutri-services__card p {
  margin: 0;

  color: var(--nutri-text-soft);

  font-size: 14px;
  line-height: 1.7;
}

.nutri-services__card a {
  display: inline-flex;
  align-items: center;
  gap: 8px;

  width: fit-content;

  margin-top: auto;
  padding-top: 25px;

  color: var(--nutri-primary);

  font-size: 13px;
  font-weight: 700;
  text-decoration: none;
}

.nutri-services__card a span {
  transition: transform 0.25s ease;
}

.nutri-services__card a:hover span {
  transform: translateX(5px);
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 800px) {
  .nutri-services {
    padding: 90px 0;
  }

  .nutri-services__header {
    grid-template-columns: 1fr;
    gap: 25px;
  }

  .nutri-services__grid {
    grid-template-columns: 1fr;
  }
}

@media (max-width: 520px) {
  .nutri-services {
    padding: 70px 0;
  }

  .nutri-services__container {
    width: calc(100% - 28px);
  }

  .nutri-services__card {
    min-height: 320px;
    padding: 28px;
  }

  .nutri-services__number {
    top: 25px;
    right: 25px;
  }
}
</style>