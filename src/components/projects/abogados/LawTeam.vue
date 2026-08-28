<template>
  <section
    id="abogados"
    class="law-section law-section--paper law-team"
  >
    <div class="law-container">

      <header class="law-team__header">
        <div>
          <span class="law-eyebrow">
            Nuestro equipo
          </span>

          <h2 class="law-title">
            Profesionales preparados
            para analizar cada asunto.
          </h2>
        </div>

        <p class="law-subtitle">
          Nuestro equipo combina experiencia jurídica, criterio
          profesional y atención personalizada en cada etapa
          del proceso.
        </p>
      </header>

      <div class="law-team__grid">

        <article
          v-for="lawyer in lawyers"
          :key="lawyer.name"
          class="law-team__card"
        >
          <div class="law-team__photo">

            <img
              v-if="lawyer.image"
              :src="lawyer.image"
              :alt="lawyer.name"
            />

            <div
              v-else
              class="law-team__placeholder"
            >
              <span>Retrato</span>
            </div>

            <div class="law-team__photo-number">
              {{ lawyer.number }}
            </div>

          </div>

          <div class="law-team__info">

            <span class="law-team__degree">
              Lic.
            </span>

            <h3>
              {{ lawyer.name }}
            </h3>

            <span class="law-team__specialty">
              {{ lawyer.specialty }}
            </span>

            <p>
              {{ lawyer.description }}
            </p>

            <div class="law-team__signature">
              Lex & Justitia
            </div>

          </div>
        </article>

      </div>

    </div>
  </section>
</template>

<script setup>
const lawyers = [
  {
    number: "01",
    name: "Alejandro Rivera",
    specialty: "Derecho Corporativo",
    image: null,
    description:
      "Asesoría estratégica para empresas, contratos, sociedades y operaciones corporativas.",
  },
  {
    number: "02",
    name: "Lucía Gómez",
    specialty: "Derecho Familiar",
    image: null,
    description:
      "Atención de asuntos familiares con enfoque profesional, cercano y confidencial.",
  },
  {
    number: "03",
    name: "Carlos Méndez",
    specialty: "Derecho Laboral",
    image: null,
    description:
      "Representación y asesoría en conflictos laborales para trabajadores y empresas.",
  },
  {
    number: "04",
    name: "Diana Ruiz",
    specialty: "Derecho Civil",
    image: null,
    description:
      "Análisis y defensa en controversias civiles, contratos y asuntos patrimoniales.",
  },
];
</script>

<style scoped>
.law-team__header {
  display: grid;

  grid-template-columns:
    minmax(0, 1.3fr)
    minmax(280px, 0.7fr);

  gap: 80px;

  align-items: end;

  margin-bottom: 65px;
}

.law-team__header .law-title {
  margin-bottom: 0;
}

/* =========================================================
   GRID
========================================================= */

.law-team__grid {
  display: grid;

  grid-template-columns: repeat(4, 1fr);

  gap: 22px;
}

/* =========================================================
   CARD
========================================================= */

.law-team__card {
  border-bottom: 1px solid var(--law-border);
}

.law-team__photo {
  position: relative;

  height: 355px;

  overflow: hidden;

  background: var(--law-bg);
}

.law-team__photo img {
  width: 100%;
  height: 100%;

  object-fit: cover;

  filter:
    grayscale(1)
    sepia(0.12)
    contrast(0.94);
}

.law-team__placeholder {
  width: 100%;
  height: 100%;

  display: flex;
  align-items: center;
  justify-content: center;

  background:
    linear-gradient(
      135deg,
      var(--law-bg),
      var(--law-paper)
    );

  color: var(--law-border-dark);

  font-family:
    "Cormorant Garamond",
    Georgia,
    serif;

  font-size: 24px;

  text-transform: uppercase;
}

.law-team__photo-number {
  position: absolute;

  left: 16px;
  bottom: 16px;

  min-width: 38px;
  height: 38px;

  display: flex;
  align-items: center;
  justify-content: center;

  background: var(--law-paper);

  border: 1px solid var(--law-border);

  color: var(--law-primary);

  font-family:
    "Cormorant Garamond",
    Georgia,
    serif;

  font-size: 18px;
}

/* =========================================================
   INFO
========================================================= */

.law-team__info {
  padding: 25px 5px 30px;
}

.law-team__degree {
  color: var(--law-gold);

  font-family: "Inter", Arial, sans-serif;

  font-size: 8px;
  font-weight: 700;

  letter-spacing: 1px;
  text-transform: uppercase;
}

.law-team__info h3 {
  margin: 6px 0 4px;

  font-size: 27px;
}

.law-team__specialty {
  color: var(--law-primary);

  font-family: "Inter", Arial, sans-serif;

  font-size: 9px;
  font-weight: 700;

  letter-spacing: 1px;
  text-transform: uppercase;
}

.law-team__info p {
  margin: 18px 0 22px;

  color: var(--law-text-soft);

  font-size: 13px;
  line-height: 1.75;
}

.law-team__signature {
  padding-top: 15px;

  border-top: 1px solid var(--law-border);

  color: var(--law-gold);

  font-family:
    "Cormorant Garamond",
    Georgia,
    serif;

  font-size: 16px;
  font-style: italic;
}

@media (max-width: 1050px) {
  .law-team__grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 900px) {
  .law-team__header {
    grid-template-columns: 1fr;

    gap: 25px;
  }
}

@media (max-width: 550px) {
  .law-team__grid {
    grid-template-columns: 1fr;
  }

  .law-team__photo {
    height: 420px;
  }
}
</style>