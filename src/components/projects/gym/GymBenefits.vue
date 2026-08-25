<template>
  <section id="beneficios" class="gym-benefits">
    <div class="gym-benefits__container">

      <!-- Header -->
      <div class="gym-benefits__header">
        <div class="gym-benefits__intro">
          <div class="gym-benefits__eyebrow">
            <span></span>
            POR QUÉ IRON PULSE
          </div>

          <h2 class="gym-benefits__title">
            NO ES SOLO<br />
            <span>ENTRENAR.</span>
          </h2>
        </div>

        <div class="gym-benefits__header-copy">
          <p>
            Creamos un entorno donde cada detalle está pensado para
            ayudarte a entrenar mejor, progresar más rápido y mantenerte
            enfocado en tus objetivos.
          </p>

          <span class="gym-benefits__signature">
            PERFORMANCE WITHOUT EXCUSES.
          </span>
        </div>
      </div>

      <!-- Benefits -->
      <div class="gym-benefits__grid">

        <!-- Benefit 01 -->
        <article class="gym-benefit">
          <div class="gym-benefit__top">
            <span class="gym-benefit__number">01</span>

            <div class="gym-benefit__icon">
              <svg
                viewBox="0 0 48 48"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M8 24H40M13 17V31M7 19V29M35 17V31M41 19V29"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="square"
                />
              </svg>
            </div>
          </div>

          <div class="gym-benefit__content">
            <h3>EQUIPO DE ALTO NIVEL</h3>

            <p>
              Máquinas, racks, peso libre y zonas especializadas para
              entrenar fuerza, potencia y rendimiento sin limitaciones.
            </p>
          </div>

          <span class="gym-benefit__line"></span>
        </article>

        <!-- Benefit 02 -->
        <article class="gym-benefit">
          <div class="gym-benefit__top">
            <span class="gym-benefit__number">02</span>

            <div class="gym-benefit__icon">
              <svg
                viewBox="0 0 48 48"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <circle
                  cx="24"
                  cy="16"
                  r="6"
                  stroke="currentColor"
                  stroke-width="2"
                />
                <path
                  d="M12 38C13.5 29.5 17.5 26 24 26C30.5 26 34.5 29.5 36 38"
                  stroke="currentColor"
                  stroke-width="2"
                />
                <path
                  d="M36 10L38 13L42 14L39 17L40 21L36 19L32 21L33 17L30 14L34 13L36 10Z"
                  stroke="currentColor"
                  stroke-width="1.5"
                />
              </svg>
            </div>
          </div>

          <div class="gym-benefit__content">
            <h3>COACHES ESPECIALIZADOS</h3>

            <p>
              Profesionales que entienden tus objetivos y te ayudan a
              construir un entrenamiento eficiente, seguro y progresivo.
            </p>
          </div>

          <span class="gym-benefit__line"></span>
        </article>

        <!-- Benefit 03 -->
        <article class="gym-benefit">
          <div class="gym-benefit__top">
            <span class="gym-benefit__number">03</span>

            <div class="gym-benefit__icon">
              <svg
                viewBox="0 0 48 48"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <circle
                  cx="24"
                  cy="24"
                  r="16"
                  stroke="currentColor"
                  stroke-width="2"
                />
                <path
                  d="M24 14V24L31 29"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="square"
                />
              </svg>
            </div>
          </div>

          <div class="gym-benefit__content">
            <h3>HORARIOS SIN EXCUSAS</h3>

            <p>
              Entrena desde temprano hasta la noche. Diseñamos nuestros
              horarios para adaptarnos a tu rutina, no al revés.
            </p>
          </div>

          <span class="gym-benefit__line"></span>
        </article>

        <!-- Benefit 04 -->
        <article class="gym-benefit gym-benefit--accent">
          <div class="gym-benefit__top">
            <span class="gym-benefit__number">04</span>

            <div class="gym-benefit__icon">
              <svg
                viewBox="0 0 48 48"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M9 34L18 25L24 30L38 14"
                  stroke="currentColor"
                  stroke-width="2"
                />
                <path
                  d="M29 14H38V23"
                  stroke="currentColor"
                  stroke-width="2"
                />
                <path
                  d="M9 40H40"
                  stroke="currentColor"
                  stroke-width="2"
                />
              </svg>
            </div>
          </div>

          <div class="gym-benefit__content">
            <h3>PROGRESO MEDIBLE</h3>

            <p>
              Entrena con intención. Define objetivos, mide tu evolución
              y construye resultados que puedas ver dentro y fuera del gym.
            </p>
          </div>

          <span class="gym-benefit__line"></span>
        </article>

      </div>
    </div>
  </section>
</template>

<script setup>
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,700;1,800&family=Inter:wght@400;500;600&display=swap");

.gym-benefits {
  position: relative;
  padding: 130px 0 145px;

  background: #eeeeea;
  color: #0a0a0a;

  font-family: "Inter", sans-serif;

  overflow: hidden;
}

.gym-benefits__container {
  width: min(1400px, calc(100% - 48px));
  margin: 0 auto;
}

/* =========================
   HEADER
========================= */

.gym-benefits__header {
  display: grid;
  grid-template-columns: 1.4fr 0.6fr;
  gap: 80px;

  align-items: end;

  padding-bottom: 70px;

  border-bottom: 1px solid rgba(10, 10, 10, 0.18);
}

.gym-benefits__eyebrow {
  display: flex;
  align-items: center;
  gap: 14px;

  margin-bottom: 22px;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 13px;
  font-weight: 700;
  letter-spacing: 2.8px;

  color: #667a00;
}

.gym-benefits__eyebrow span {
  width: 40px;
  height: 2px;

  background: #9fbd00;
}

.gym-benefits__title {
  margin: 0;

  font-family: "Barlow Condensed", sans-serif;
  font-size: clamp(70px, 8vw, 120px);
  font-weight: 900;
  font-style: italic;

  line-height: 0.82;
  letter-spacing: -3px;

  text-transform: uppercase;
}

.gym-benefits__title span {
  color: transparent;

  -webkit-text-stroke: 2px #0a0a0a;
}

.gym-benefits__header-copy {
  max-width: 430px;

  padding-bottom: 5px;
}

.gym-benefits__header-copy p {
  margin: 0;

  font-size: 16px;
  line-height: 1.75;

  color: #595959;
}

.gym-benefits__signature {
  display: block;

  margin-top: 25px;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 12px;
  font-weight: 700;
  letter-spacing: 2.2px;

  color: #0a0a0a;
}

/* =========================
   GRID
========================= */

.gym-benefits__grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);

  margin-top: 0;
}

.gym-benefit {
  position: relative;

  min-height: 390px;

  padding: 40px 32px 36px;

  display: flex;
  flex-direction: column;
  justify-content: space-between;

  border-right: 1px solid rgba(10, 10, 10, 0.16);

  transition:
    background 0.35s ease,
    color 0.35s ease;
}

.gym-benefit:first-child {
  border-left: 1px solid rgba(10, 10, 10, 0.16);
}

/* =========================
   TOP
========================= */

.gym-benefit__top {
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
}

.gym-benefit__number {
  font-family: "Barlow Condensed", sans-serif;
  font-size: 14px;
  font-weight: 600;
  letter-spacing: 2px;

  color: #888888;
}

.gym-benefit__icon {
  width: 52px;
  height: 52px;

  display: flex;
  align-items: center;
  justify-content: center;

  color: #111111;
}

.gym-benefit__icon svg {
  width: 42px;
  height: 42px;
}

/* =========================
   CONTENT
========================= */

.gym-benefit__content {
  margin-top: auto;
}

.gym-benefit__content h3 {
  margin: 0 0 18px;

  max-width: 230px;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 30px;
  font-weight: 800;
  line-height: 1;

  text-transform: uppercase;
}

.gym-benefit__content p {
  margin: 0;

  max-width: 260px;

  font-size: 14px;
  line-height: 1.7;

  color: #666666;

  transition: color 0.35s ease;
}

/* =========================
   BOTTOM LINE
========================= */

.gym-benefit__line {
  position: absolute;

  left: 32px;
  right: 32px;
  bottom: 0;

  height: 3px;

  background: #0a0a0a;

  transform: scaleX(0.15);
  transform-origin: left;

  transition:
    transform 0.35s ease,
    background 0.35s ease;
}

/* =========================
   HOVER
========================= */

.gym-benefit:hover {
  background: #0a0a0a;
  color: #ffffff;
}

.gym-benefit:hover .gym-benefit__number {
  color: #d9ff43;
}

.gym-benefit:hover .gym-benefit__icon {
  color: #d9ff43;
}

.gym-benefit:hover .gym-benefit__content p {
  color: rgba(255, 255, 255, 0.58);
}

.gym-benefit:hover .gym-benefit__line {
  transform: scaleX(1);
  background: #d9ff43;
}

/* =========================
   ACCENT CARD
========================= */

.gym-benefit--accent {
  background: #d9ff43;
}

.gym-benefit--accent .gym-benefit__number,
.gym-benefit--accent .gym-benefit__content p {
  color: rgba(0, 0, 0, 0.58);
}

.gym-benefit--accent:hover {
  background: #0a0a0a;
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 1050px) {
  .gym-benefits__header {
    grid-template-columns: 1fr;
    gap: 35px;
  }

  .gym-benefits__grid {
    grid-template-columns: repeat(2, 1fr);
  }

  .gym-benefit:nth-child(3) {
    border-left: 1px solid rgba(10, 10, 10, 0.16);
  }
}

@media (max-width: 650px) {
  .gym-benefits {
    padding: 90px 0;
  }

  .gym-benefits__container {
    width: calc(100% - 32px);
  }

  .gym-benefits__header {
    padding-bottom: 50px;
  }

  .gym-benefits__title {
    font-size: clamp(62px, 20vw, 90px);
    letter-spacing: -2px;
  }

  .gym-benefits__grid {
    grid-template-columns: 1fr;
  }

  .gym-benefit {
    min-height: 320px;

    border-left: 1px solid rgba(10, 10, 10, 0.16);
  }

  .gym-benefit__content h3 {
    font-size: 28px;
  }
}
</style>