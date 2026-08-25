<template>
  <section id="coaches" class="gym-trainers">
    <div class="gym-trainers__container">

      <!-- Header -->
      <div class="gym-trainers__header">
        <div>
          <div class="gym-trainers__eyebrow">
            <span></span>
            NUESTRO EQUIPO
          </div>

          <h2 class="gym-trainers__title">
            ENTRENA CON<br />
            <span>LOS MEJORES.</span>
          </h2>
        </div>

        <div class="gym-trainers__intro">
          <p>
            Coaches con experiencia real en fuerza, rendimiento y
            acondicionamiento. No solo corrigen técnica: construyen
            progreso contigo.
          </p>
        </div>
      </div>

      <!-- Trainers -->
      <div class="gym-trainers__grid">

        <!-- Trainer 01 -->
        <article class="trainer-card">
          <div class="trainer-card__image-wrapper">
            <img
              :src="trainerOne"
              alt="Coach de fuerza de Iron Pulse"
              class="trainer-card__image"
            />

            <div class="trainer-card__overlay"></div>

            <span class="trainer-card__number">01</span>

            <div class="trainer-card__specialty">
              STRENGTH COACH
            </div>
          </div>

          <div class="trainer-card__content">
            <div>
              <span class="trainer-card__role">
                FUERZA · POWERLIFTING
              </span>

              <h3>MATEO RIVAS</h3>
            </div>

            <div class="trainer-card__meta">
              <span>8 AÑOS EXP.</span>
              <span>NSCA CPT</span>
            </div>
          </div>
        </article>

        <!-- Trainer 02 -->
        <article class="trainer-card">
          <div class="trainer-card__image-wrapper">
            <img
              :src="trainerTwo"
              alt="Coach de entrenamiento funcional de Iron Pulse"
              class="trainer-card__image"
            />

            <div class="trainer-card__overlay"></div>

            <span class="trainer-card__number">02</span>

            <div class="trainer-card__specialty">
              PERFORMANCE COACH
            </div>
          </div>

          <div class="trainer-card__content">
            <div>
              <span class="trainer-card__role">
                FUNCIONAL · CONDITIONING
              </span>

              <h3>VALERIA CRUZ</h3>
            </div>

            <div class="trainer-card__meta">
              <span>6 AÑOS EXP.</span>
              <span>CF-L2</span>
            </div>
          </div>
        </article>

        <!-- Trainer 03 -->
        <article class="trainer-card">
          <div class="trainer-card__image-wrapper">
            <img
              :src="trainerThree"
              alt="Coach de rendimiento deportivo de Iron Pulse"
              class="trainer-card__image"
            />

            <div class="trainer-card__overlay"></div>

            <span class="trainer-card__number">03</span>

            <div class="trainer-card__specialty">
              ATHLETIC PERFORMANCE
            </div>
          </div>

          <div class="trainer-card__content">
            <div>
              <span class="trainer-card__role">
                SPEED · POWER · AGILITY
              </span>

              <h3>DIEGO SANTOS</h3>
            </div>

            <div class="trainer-card__meta">
              <span>10 AÑOS EXP.</span>
              <span>CSCS</span>
            </div>
          </div>
        </article>

      </div>

      <!-- Bottom -->
      <div class="gym-trainers__bottom">
        <p>
          Cada coach tiene una especialidad distinta.
          <strong>Tu objetivo define el camino.</strong>
        </p>

        <a href="#planes" class="gym-trainers__cta">
          TRABAJA CON UN COACH
          <span>→</span>
        </a>
      </div>
    </div>
  </section>
</template>

<script setup>
import trainerOne from "../../../assets/projects/gym/trainers/trainer-01.png";
import trainerTwo from "../../../assets/projects/gym/trainers/trainer-02.png";
import trainerThree from "../../../assets/projects/gym/trainers/trainer-03.png";
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,700;1,800;1,900&family=Inter:wght@400;500;600&display=swap");

.gym-trainers {
  padding: 135px 0;
  background: #0b0b0b;
  color: #ffffff;
  font-family: "Inter", sans-serif;
}

.gym-trainers__container {
  width: min(1400px, calc(100% - 48px));
  margin: 0 auto;
}

/* =========================
   HEADER
========================= */

.gym-trainers__header {
  display: grid;
  grid-template-columns: 1.3fr 0.7fr;
  gap: 80px;
  align-items: end;

  margin-bottom: 70px;
}

.gym-trainers__eyebrow {
  display: flex;
  align-items: center;
  gap: 14px;

  margin-bottom: 22px;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 13px;
  font-weight: 700;
  letter-spacing: 3px;

  color: #d9ff43;
}

.gym-trainers__eyebrow span {
  width: 42px;
  height: 2px;
  background: #d9ff43;
}

.gym-trainers__title {
  margin: 0;

  font-family: "Barlow Condensed", sans-serif;
  font-size: clamp(70px, 8vw, 120px);
  font-weight: 900;
  font-style: italic;

  line-height: 0.82;
  letter-spacing: -3px;

  text-transform: uppercase;
}

.gym-trainers__title span {
  color: transparent;
  -webkit-text-stroke: 2px rgba(255, 255, 255, 0.88);
}

.gym-trainers__intro {
  max-width: 430px;
}

.gym-trainers__intro p {
  margin: 0;

  font-size: 16px;
  line-height: 1.75;

  color: rgba(255, 255, 255, 0.56);
}

/* =========================
   GRID
========================= */

.gym-trainers__grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 18px;
}

/* =========================
   CARD
========================= */

.trainer-card {
  min-width: 0;
}

.trainer-card__image-wrapper {
  position: relative;

  height: 590px;

  overflow: hidden;

  background: #141414;
}

.trainer-card__image {
  width: 100%;
  height: 100%;

  object-fit: cover;

  filter: grayscale(100%);
  transform: scale(1.01);

  transition:
    transform 0.6s ease,
    filter 0.5s ease;
}

.trainer-card__overlay {
  position: absolute;
  inset: 0;

  background:
    linear-gradient(
      to top,
      rgba(5, 5, 5, 0.88) 0%,
      rgba(5, 5, 5, 0.2) 40%,
      rgba(5, 5, 5, 0.08) 100%
    );
}

.trainer-card:hover .trainer-card__image {
  transform: scale(1.06);
  filter: grayscale(15%);
}

/* =========================
   NUMBER
========================= */

.trainer-card__number {
  position: absolute;

  top: 24px;
  left: 24px;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 13px;
  font-weight: 700;
  letter-spacing: 2px;

  color: rgba(255, 255, 255, 0.65);
}

/* =========================
   SPECIALTY
========================= */

.trainer-card__specialty {
  position: absolute;

  left: 24px;
  bottom: 24px;

  padding: 8px 12px;

  background: #d9ff43;
  color: #090909;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 11px;
  font-weight: 800;
  letter-spacing: 1.6px;
}

/* =========================
   CONTENT
========================= */

.trainer-card__content {
  display: flex;
  justify-content: space-between;
  align-items: flex-end;
  gap: 25px;

  padding: 26px 4px 0;
}

.trainer-card__role {
  display: block;

  margin-bottom: 7px;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 11px;
  font-weight: 600;
  letter-spacing: 2px;

  color: #d9ff43;
}

.trainer-card__content h3 {
  margin: 0;

  font-family: "Barlow Condensed", sans-serif;
  font-size: clamp(36px, 3vw, 48px);
  font-weight: 800;
  line-height: 0.95;

  text-transform: uppercase;
}

.trainer-card__meta {
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  gap: 5px;

  flex-shrink: 0;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 10px;
  font-weight: 600;
  letter-spacing: 1.4px;

  color: rgba(255, 255, 255, 0.4);
}

/* =========================
   BOTTOM
========================= */

.gym-trainers__bottom {
  margin-top: 90px;

  padding-top: 35px;

  border-top: 1px solid rgba(255, 255, 255, 0.13);

  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 40px;
}

.gym-trainers__bottom p {
  margin: 0;

  font-size: 15px;
  line-height: 1.7;

  color: rgba(255, 255, 255, 0.52);
}

.gym-trainers__bottom strong {
  color: #ffffff;
  font-weight: 600;
}

.gym-trainers__cta {
  display: inline-flex;
  align-items: center;
  gap: 20px;

  padding: 18px 24px;

  background: #d9ff43;
  color: #090909;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 15px;
  font-weight: 800;
  letter-spacing: 1.2px;

  text-decoration: none;

  transition:
    transform 0.3s ease,
    background 0.3s ease;
}

.gym-trainers__cta span {
  font-size: 20px;
}

.gym-trainers__cta:hover {
  background: #ffffff;
  transform: translateY(-3px);
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 1050px) {
  .gym-trainers__header {
    grid-template-columns: 1fr;
    gap: 35px;
  }

  .gym-trainers__grid {
    grid-template-columns: repeat(2, 1fr);
  }

  .trainer-card:last-child {
    grid-column: 1 / 3;
    max-width: calc(50% - 9px);
  }
}

@media (max-width: 700px) {
  .gym-trainers {
    padding: 90px 0;
  }

  .gym-trainers__container {
    width: calc(100% - 32px);
  }

  .gym-trainers__title {
    font-size: clamp(62px, 20vw, 90px);
    letter-spacing: -2px;
  }

  .gym-trainers__grid {
    grid-template-columns: 1fr;
  }

  .trainer-card:last-child {
    grid-column: auto;
    max-width: none;
  }

  .trainer-card__image-wrapper {
    height: 500px;
  }

  .gym-trainers__bottom {
    flex-direction: column;
    align-items: flex-start;
  }

  .gym-trainers__cta {
    width: 100%;
    justify-content: space-between;
  }
}

@media (max-width: 430px) {
  .trainer-card__image-wrapper {
    height: 440px;
  }

  .trainer-card__content {
    flex-direction: column;
    align-items: flex-start;
  }

  .trainer-card__meta {
    align-items: flex-start;
  }
}
</style>