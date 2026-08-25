<template>
  <section id="instalaciones" class="gym-facilities">
    <div class="gym-facilities__container">

      <!-- Header -->
      <div class="gym-facilities__header">
        <div>
          <div class="gym-facilities__eyebrow">
            <span></span>
            INSTALACIONES
          </div>

          <h2 class="gym-facilities__title">
            TODO LO QUE<br />
            <span>NECESITAS.</span>
          </h2>
        </div>

        <div class="gym-facilities__intro">
          <p>
            Espacios diseñados para entrenar con intensidad, seguridad
            y libertad. Cada zona tiene un propósito: ayudarte a rendir
            mejor.
          </p>

          <a href="#planes" class="gym-facilities__link">
            CONOCE LOS PLANES
            <span>→</span>
          </a>
        </div>
      </div>

      <!-- Grid -->
      <div class="gym-facilities__grid">

        <!-- Main -->
        <article class="facility facility--large">
          <img
            :src="facilityMain"
            alt="Zona principal de entrenamiento de Iron Pulse"
          />

          <div class="facility__overlay"></div>

          <div class="facility__number">
            01
          </div>

          <div class="facility__content">
            <span>STRENGTH ZONE</span>

            <h3>
              FUERZA SIN<br />
              LIMITACIONES
            </h3>

            <p>
              Racks, barras olímpicas, discos, mancuernas y equipo
              profesional para construir fuerza de verdad.
            </p>
          </div>
        </article>

        <!-- Secondary 1 -->
        <article class="facility facility--small">
          <img
            :src="facilityFunctional"
            alt="Zona de entrenamiento funcional"
          />

          <div class="facility__overlay"></div>

          <div class="facility__number">
            02
          </div>

          <div class="facility__content">
            <span>FUNCTIONAL AREA</span>

            <h3>
              MUÉVETE<br />
              MEJOR
            </h3>

            <p>
              Entrenamiento funcional, movilidad, potencia y
              acondicionamiento.
            </p>
          </div>
        </article>

        <!-- Secondary 2 -->
        <article class="facility facility--small">
          <img
            :src="facilityCardio"
            alt="Zona de cardio de Iron Pulse"
          />

          <div class="facility__overlay"></div>

          <div class="facility__number">
            03
          </div>

          <div class="facility__content">
            <span>ENGINE ROOM</span>

            <h3>
              ELEVA TU<br />
              RESISTENCIA
            </h3>

            <p>
              Equipamiento cardiovascular para mejorar condición,
              resistencia y rendimiento.
            </p>
          </div>
        </article>

      </div>
    </div>
  </section>
</template>

<script setup>
import facilityMain from "../../../assets/projects/gym/facilities/facility-main.png";
import facilityFunctional from "../../../assets/projects/gym/facilities/facility-functional.png";
import facilityCardio from "../../../assets/projects/gym/facilities/facility-cardio.png";
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,700;1,800;1,900&family=Inter:wght@400;500;600&display=swap");

.gym-facilities {
  padding: 135px 0;

  background: #080808;
  color: #ffffff;

  font-family: "Inter", sans-serif;
}

.gym-facilities__container {
  width: min(1400px, calc(100% - 48px));
  margin: 0 auto;
}

/* =========================
   HEADER
========================= */

.gym-facilities__header {
  display: grid;
  grid-template-columns: 1.3fr 0.7fr;
  gap: 80px;

  align-items: end;

  margin-bottom: 70px;
}

.gym-facilities__eyebrow {
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

.gym-facilities__eyebrow span {
  width: 42px;
  height: 2px;
  background: #d9ff43;
}

.gym-facilities__title {
  margin: 0;

  font-family: "Barlow Condensed", sans-serif;
  font-size: clamp(70px, 8vw, 120px);
  font-weight: 900;
  font-style: italic;

  line-height: 0.82;
  letter-spacing: -3px;

  text-transform: uppercase;
}

.gym-facilities__title span {
  color: transparent;
  -webkit-text-stroke: 2px rgba(255, 255, 255, 0.9);
}

.gym-facilities__intro {
  max-width: 440px;
  padding-bottom: 5px;
}

.gym-facilities__intro p {
  margin: 0;

  font-size: 16px;
  line-height: 1.75;

  color: rgba(255, 255, 255, 0.56);
}

.gym-facilities__link {
  display: inline-flex;
  align-items: center;
  gap: 18px;

  margin-top: 26px;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 15px;
  font-weight: 700;
  letter-spacing: 1.5px;

  color: #ffffff;
  text-decoration: none;

  transition: color 0.25s ease;
}

.gym-facilities__link span {
  color: #d9ff43;
  font-size: 21px;

  transition: transform 0.25s ease;
}

.gym-facilities__link:hover {
  color: #d9ff43;
}

.gym-facilities__link:hover span {
  transform: translateX(5px);
}

/* =========================
   GRID
========================= */

.gym-facilities__grid {
  display: grid;
  grid-template-columns: 1.45fr 0.75fr;
  grid-template-rows: repeat(2, 360px);
  gap: 18px;
}

/* =========================
   FACILITY CARD
========================= */

.facility {
  position: relative;

  overflow: hidden;

  background: #111111;
}

.facility--large {
  grid-row: 1 / 3;
}

.facility img {
  position: absolute;
  inset: 0;

  width: 100%;
  height: 100%;

  object-fit: cover;

  filter: grayscale(100%);

  transition:
    transform 0.6s ease,
    filter 0.5s ease;
}

.facility__overlay {
  position: absolute;
  inset: 0;

  background:
    linear-gradient(
      to top,
      rgba(5, 5, 5, 0.95) 0%,
      rgba(5, 5, 5, 0.35) 52%,
      rgba(5, 5, 5, 0.12) 100%
    );
}

.facility::after {
  content: "";

  position: absolute;
  left: 0;
  bottom: 0;

  width: 100%;
  height: 4px;

  background: #d9ff43;

  transform: scaleX(0);
  transform-origin: left;

  transition: transform 0.35s ease;
}

.facility:hover::after {
  transform: scaleX(1);
}

.facility:hover img {
  transform: scale(1.045);
  filter: grayscale(20%);
}

/* =========================
   NUMBER
========================= */

.facility__number {
  position: absolute;
  z-index: 3;

  top: 25px;
  right: 27px;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 13px;
  font-weight: 600;
  letter-spacing: 2px;

  color: rgba(255, 255, 255, 0.58);
}

/* =========================
   CONTENT
========================= */

.facility__content {
  position: absolute;
  z-index: 3;

  left: 35px;
  right: 35px;
  bottom: 35px;
}

.facility__content > span {
  display: block;

  margin-bottom: 13px;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 2.5px;

  color: #d9ff43;
}

.facility__content h3 {
  margin: 0;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 45px;
  font-weight: 800;
  line-height: 0.9;

  text-transform: uppercase;
}

.facility--large .facility__content h3 {
  font-size: clamp(55px, 5vw, 78px);
}

.facility__content p {
  margin: 18px 0 0;

  max-width: 460px;

  font-size: 14px;
  line-height: 1.65;

  color: rgba(255, 255, 255, 0.62);
}

.facility--small .facility__content p {
  max-width: 340px;
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 1050px) {
  .gym-facilities__header {
    grid-template-columns: 1fr;
    gap: 35px;
  }

  .gym-facilities__grid {
    grid-template-columns: 1fr 1fr;
    grid-template-rows: 600px 360px;
  }

  .facility--large {
    grid-column: 1 / 3;
    grid-row: auto;
  }
}

@media (max-width: 700px) {
  .gym-facilities {
    padding: 90px 0;
  }

  .gym-facilities__container {
    width: calc(100% - 32px);
  }

  .gym-facilities__title {
    font-size: clamp(62px, 20vw, 90px);
    letter-spacing: -2px;
  }

  .gym-facilities__grid {
    display: flex;
    flex-direction: column;
  }

  .facility {
    min-height: 470px;
  }

  .facility--small {
    min-height: 390px;
  }

  .facility__content {
    left: 24px;
    right: 24px;
    bottom: 28px;
  }

  .facility__content h3,
  .facility--large .facility__content h3 {
    font-size: 48px;
  }
}

@media (max-width: 430px) {
  .facility {
    min-height: 420px;
  }

  .facility--small {
    min-height: 350px;
  }

  .facility__content h3,
  .facility--large .facility__content h3 {
    font-size: 40px;
  }
}
</style>