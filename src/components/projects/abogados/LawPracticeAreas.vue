<template>
  <section
    id="areas"
    class="law-section law-section--soft law-practice"
  >
    <div class="law-container">

      <header class="law-practice__header">

        <div>
          <span class="law-eyebrow">
            Áreas de práctica
          </span>

          <h2 class="law-title">
            Asesoría especializada
            para distintos asuntos jurídicos.
          </h2>
        </div>

        <p class="law-subtitle">
          Atendemos asuntos de carácter personal, familiar,
          patrimonial y empresarial con estrategias adaptadas
          a cada situación.
        </p>

      </header>

      <div class="law-practice__grid">

        <article
          v-for="(area, index) in areas"
          :key="area.title"
          class="law-practice__item"
        >

          <div class="law-practice__item-top">

            <span class="law-practice__index">
              {{ String(index + 1).padStart(2, "0") }}
            </span>

            <span class="law-practice__icon">
              {{ area.icon }}
            </span>

          </div>

          <h3>
            {{ area.title }}
          </h3>

          <p>
            {{ area.description }}
          </p>

          <a href="#consulta">
            Consultar asunto
            <span>→</span>
          </a>

        </article>

      </div>

    </div>
  </section>
</template>

<script setup>
const areas = [
  {
    icon: "§",
    title: "Derecho Civil",
    description:
      "Contratos, obligaciones, incumplimientos, daños y controversias patrimoniales.",
  },
  {
    icon: "◈",
    title: "Derecho Mercantil",
    description:
      "Cobranza, contratos comerciales, sociedades y conflictos entre empresas.",
  },
  {
    icon: "◇",
    title: "Derecho Familiar",
    description:
      "Divorcios, pensiones, custodia, convivencia y asuntos relacionados con la familia.",
  },
  {
    icon: "⚖",
    title: "Derecho Laboral",
    description:
      "Despidos, finiquitos, conflictos laborales y representación para trabajadores y empresas.",
  },
  {
    icon: "▦",
    title: "Derecho Corporativo",
    description:
      "Constitución de sociedades, contratos, cumplimiento y asesoría jurídica empresarial.",
  },
  {
    icon: "¶",
    title: "Amparo",
    description:
      "Defensa constitucional frente a actos de autoridad que afecten derechos fundamentales.",
  },
];
</script>

<style scoped>
.law-practice__header {
  display: grid;

  grid-template-columns:
    minmax(0, 1.3fr)
    minmax(280px, 0.7fr);

  gap: 80px;

  align-items: end;

  margin-bottom: 70px;
}

.law-practice__header .law-title {
  margin-bottom: 0;
}

.law-practice__header .law-subtitle {
  margin-bottom: 5px;
}

/* =========================================================
   GRID
========================================================= */

.law-practice__grid {
  display: grid;

  grid-template-columns: repeat(3, 1fr);

  border-top: 1px solid var(--law-border);
  border-left: 1px solid var(--law-border);
}

.law-practice__item {
  min-height: 330px;

  display: flex;
  flex-direction: column;

  padding: 38px;

  background: rgba(255, 253, 248, 0.45);

  border-right: 1px solid var(--law-border);
  border-bottom: 1px solid var(--law-border);

  transition:
    background var(--law-transition),
    transform var(--law-transition);
}

.law-practice__item:hover {
  background: var(--law-paper);

  transform: translateY(-4px);
}

/* =========================================================
   TOP
========================================================= */

.law-practice__item-top {
  display: flex;
  align-items: center;
  justify-content: space-between;

  margin-bottom: 38px;
}

.law-practice__index {
  color: var(--law-gold);

  font-family: "Inter", Arial, sans-serif;

  font-size: 9px;
  font-weight: 700;

  letter-spacing: 1px;
}

.law-practice__icon {
  color: var(--law-primary);

  font-family:
    "Cormorant Garamond",
    Georgia,
    serif;

  font-size: 30px;
}

.law-practice__item h3 {
  margin-bottom: 16px;

  font-size: 28px;
}

.law-practice__item p {
  margin-bottom: 28px;

  color: var(--law-text-soft);

  font-size: 13px;
  line-height: 1.8;
}

/* =========================================================
   LINK
========================================================= */

.law-practice__item a {
  display: flex;
  align-items: center;
  justify-content: space-between;

  margin-top: auto;
  padding-top: 18px;

  border-top: 1px solid var(--law-border);

  color: var(--law-primary);

  font-family: "Inter", Arial, sans-serif;

  font-size: 9px;
  font-weight: 700;

  letter-spacing: 1px;
  text-transform: uppercase;

  text-decoration: none;
}

.law-practice__item a span {
  color: var(--law-gold);

  font-size: 16px;

  transition: transform var(--law-transition);
}

.law-practice__item:hover a span {
  transform: translateX(5px);
}

@media (max-width: 950px) {
  .law-practice__header {
    grid-template-columns: 1fr;

    gap: 25px;
  }

  .law-practice__grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 600px) {
  .law-practice__grid {
    grid-template-columns: 1fr;
  }

  .law-practice__item {
    min-height: auto;
  }
}
</style>