<template>
  <section id="sobre-mi" class="nutri-about">
    <div class="nutri-about__container">

      <!-- VISUAL -->
      <div class="nutri-about__visual">
        <div class="nutri-about__image">
          <img
            :src="nutriologaAbout"
            alt="Camila Ríos, especialista en nutrición"
            class="nutri-about__photo"
          />
        </div>

        <div class="nutri-about__experience">
          <strong>+6</strong>
          <span>Años de experiencia</span>
        </div>
      </div>

      <!-- CONTENIDO -->
      <div class="nutri-about__content">
        <span class="nutri-about__eyebrow">
          Sobre mí
        </span>

        <h2>
          Alimentarte mejor no debería sentirse
          <span>como un castigo.</span>
        </h2>

        <p>
          Soy <strong>Camila Ríos</strong>, especialista en nutrición enfocada
          en crear estrategias realistas, sostenibles y adaptadas al estilo
          de vida de cada persona.
        </p>

        <p>
          Mi objetivo es ayudarte a mejorar tu relación con la comida,
          comprender mejor tus hábitos y avanzar hacia tus metas sin
          recurrir a dietas extremas.
        </p>

        <div class="nutri-about__stats">

          <div class="nutri-about__stat">
            <strong>150+</strong>
            <span>Pacientes acompañados</span>
          </div>

          <div class="nutri-about__stat">
            <strong>100%</strong>
            <span>Planes personalizados</span>
          </div>

          <div class="nutri-about__stat">
            <strong>2</strong>
            <span>Modalidades de consulta</span>
          </div>

        </div>
      </div>

    </div>
  </section>
</template>

<script setup>
import nutriologaAbout from "../../../assets/projects/nutriologo/about/about-nutriologa.png";
</script>

<style scoped>
.nutri-about {
  padding: 120px 0;
  background: var(--nutri-white);
}

.nutri-about__container {
  width: min(1180px, calc(100% - 40px));
  margin: 0 auto;

  display: grid;
  grid-template-columns: 0.9fr 1.1fr;
  align-items: center;
  gap: 100px;
}

/* =========================
   VISUAL
========================= */

.nutri-about__visual {
  position: relative;
}

.nutri-about__photo {
  width: 100%;
  height: 100%;
  display: block;

  object-fit: cover;
  object-position: center;
}

.nutri-about__image {
  width: 100%;
  height: 560px;

  display: grid;
  place-items: center;

  border-radius: 32px;

  background:
    linear-gradient(
      145deg,
      var(--nutri-soft),
      var(--nutri-secondary)
    );

  color: rgba(255, 255, 255, 0.8);

  font-size: 14px;
  font-weight: 600;
  letter-spacing: 1px;
  text-transform: uppercase;

  overflow: hidden;
}

.nutri-about__experience {
  position: absolute;
  right: -30px;
  bottom: 45px;

  width: 150px;
  height: 150px;

  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;

  border: 8px solid var(--nutri-white);
  border-radius: 50%;

  background: var(--nutri-primary);
  color: var(--nutri-white);

  text-align: center;

  box-shadow: 0 20px 40px rgba(36, 72, 58, 0.18);
}

.nutri-about__experience strong {
  font-size: 38px;
  line-height: 1;
}

.nutri-about__experience span {
  width: 95px;
  margin-top: 7px;

  font-size: 11px;
  line-height: 1.3;
}

/* =========================
   CONTENIDO
========================= */

.nutri-about__content {
  max-width: 620px;
}

.nutri-about__eyebrow {
  display: inline-block;

  margin-bottom: 18px;

  color: var(--nutri-primary);

  font-size: 12px;
  font-weight: 700;
  letter-spacing: 1.6px;
  text-transform: uppercase;
}

.nutri-about h2 {
  margin: 0 0 28px;

  color: var(--nutri-text);

  font-size: clamp(38px, 5vw, 58px);
  font-weight: 700;
  line-height: 1.08;
  letter-spacing: -2px;
}

.nutri-about h2 span {
  color: var(--nutri-primary);
}

.nutri-about p {
  margin: 0 0 18px;

  color: var(--nutri-text-soft);

  font-size: 16px;
  line-height: 1.8;
}

.nutri-about p strong {
  color: var(--nutri-text);
}

/* =========================
   STATS
========================= */

.nutri-about__stats {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;

  margin-top: 42px;
  padding-top: 30px;

  border-top: 1px solid var(--nutri-border);
}

.nutri-about__stat {
  display: flex;
  flex-direction: column;
  gap: 6px;
}

.nutri-about__stat strong {
  color: var(--nutri-primary);

  font-size: 27px;
  font-weight: 800;
}

.nutri-about__stat span {
  color: var(--nutri-text-soft);

  font-size: 11px;
  line-height: 1.4;
}

/* =========================
   RESPONSIVE
========================= */
@media (max-width: 950px) {
  .nutri-about {
    padding: 90px 0;
  }

  .nutri-about__container {
    grid-template-columns: 1fr;
    gap: 70px;
  }

  .nutri-about__visual {
    width: min(100%, 600px);
    margin: 0 auto;
  }

  .nutri-about__content {
    max-width: 700px;
  }
}

@media (max-width: 600px) {
  .nutri-about {
    padding: 70px 0;
  }

  .nutri-about__container {
    width: calc(100% - 28px);
  }

  .nutri-about__visual {
    display: none;
  }

  .nutri-about__content {
    max-width: 100%;
  }

  .nutri-about__stats {
    grid-template-columns: 1fr;
  }
}


</style>