<template>
  <section class="law-section law-section--paper law-problems">
    <div class="law-container">

      <div class="law-problems__heading">

        <span class="law-eyebrow">
          ¿Cómo podemos ayudarte?
        </span>

        <h2 class="law-title law-title--center">
          No necesitas conocer el nombre jurídico
          de tu problema para pedir ayuda.
        </h2>

        <p class="law-subtitle law-subtitle--center">
          Cuéntanos qué está ocurriendo. Nosotros identificaremos
          el área legal correspondiente y las opciones disponibles.
        </p>

      </div>

      <div class="law-problems__list">

        <a
          v-for="(problem, index) in problems"
          :key="problem.title"
          href="#consulta"
          class="law-problems__item"
        >

          <span class="law-problems__number">
            {{ String(index + 1).padStart(2, "0") }}
          </span>

          <div class="law-problems__content">

            <span class="law-problems__category">
              {{ problem.category }}
            </span>

            <h3>
              {{ problem.title }}
            </h3>

          </div>

          <span class="law-problems__arrow">
            →
          </span>

        </a>

      </div>

      <div class="law-problems__footer">

        <p>
          ¿Tu situación no aparece en esta lista?
        </p>

        <a href="#consulta">
          Cuéntanos tu caso →
        </a>

      </div>

    </div>
  </section>
</template>

<script setup>
const problems = [
  {
    category: "Derecho Civil",
    title: "Tengo un problema con un contrato o un incumplimiento.",
  },
  {
    category: "Derecho Familiar",
    title: "Necesito iniciar un divorcio o resolver un asunto familiar.",
  },
  {
    category: "Derecho Laboral",
    title: "Me despidieron o tengo un conflicto relacionado con mi trabajo.",
  },
  {
    category: "Derecho Mercantil",
    title: "Me deben dinero o existe un conflicto comercial.",
  },
  {
    category: "Derecho Corporativo",
    title: "Quiero constituir una empresa o revisar contratos empresariales.",
  },
  {
    category: "Amparo",
    title: "Una autoridad está afectando alguno de mis derechos.",
  },
];
</script>

<style scoped>
.law-problems__heading {
  max-width: 900px;

  margin: 0 auto 70px;

  text-align: center;
}

/* =========================================================
   LISTA
========================================================= */

.law-problems__list {
  border-top: 1px solid var(--law-border);
}

.law-problems__item {
  display: grid;

  grid-template-columns:
    80px
    1fr
    50px;

  align-items: center;

  gap: 20px;

  min-height: 120px;

  padding: 20px 25px;

  border-bottom: 1px solid var(--law-border);

  color: inherit;

  text-decoration: none;

  transition:
    background var(--law-transition),
    padding var(--law-transition);
}

.law-problems__item:hover {
  padding-left: 35px;

  background: var(--law-bg);
}

/* =========================================================
   NÚMERO
========================================================= */

.law-problems__number {
  color: var(--law-gold);

  font-family:
    "Cormorant Garamond",
    Georgia,
    serif;

  font-size: 30px;

  line-height: 1;
}

/* =========================================================
   CONTENIDO
========================================================= */

.law-problems__content {
  display: flex;
  flex-direction: column;

  gap: 7px;
}

.law-problems__category {
  color: var(--law-text-soft);

  font-family: "Inter", Arial, sans-serif;

  font-size: 8px;
  font-weight: 700;

  letter-spacing: 1.5px;
  text-transform: uppercase;
}

.law-problems__content h3 {
  margin: 0;

  max-width: 850px;

  color: var(--law-primary);

  font-size: clamp(22px, 2.2vw, 30px);
  font-weight: 500;

  line-height: 1.25;
}

/* =========================================================
   FLECHA
========================================================= */

.law-problems__arrow {
  color: var(--law-gold);

  font-size: 22px;

  text-align: right;

  transition: transform var(--law-transition);
}

.law-problems__item:hover .law-problems__arrow {
  transform: translateX(6px);
}

/* =========================================================
   FOOTER
========================================================= */

.law-problems__footer {
  display: flex;
  align-items: center;
  justify-content: center;

  gap: 10px;

  margin-top: 35px;
}

.law-problems__footer p {
  margin: 0;

  color: var(--law-text-soft);

  font-size: 13px;
}

.law-problems__footer a {
  color: var(--law-primary);

  font-family: "Inter", Arial, sans-serif;

  font-size: 10px;
  font-weight: 700;

  letter-spacing: 0.8px;
  text-transform: uppercase;

  text-decoration: none;
}

@media (max-width: 600px) {
  .law-problems__item {
    grid-template-columns:
      45px
      1fr
      25px;

    gap: 10px;

    padding:
      22px
      5px;
  }

  .law-problems__item:hover {
    padding-left: 5px;
  }

  .law-problems__number {
    font-size: 24px;
  }

  .law-problems__footer {
    flex-direction: column;

    text-align: center;
  }
}
</style>