<template>
  <section id="inicio" class="gym-hero">
    <!-- Background -->
    <div class="gym-hero__background">
      <img
        :src="heroImage"
        alt="Entrenamiento de alto rendimiento en Iron Pulse"
        class="gym-hero__image"
      />

      <div class="gym-hero__overlay"></div>
      <div class="gym-hero__gradient"></div>
    </div>

    <!-- Decorative lines -->
    <div class="gym-hero__line gym-hero__line--one"></div>
    <div class="gym-hero__line gym-hero__line--two"></div>

    <div class="gym-hero__container">
      <div class="gym-hero__content">

        <!-- Eyebrow -->
        <div class="gym-hero__eyebrow">
          <span class="gym-hero__eyebrow-line"></span>
          <span>PERFORMANCE CLUB · EST. 2026</span>
        </div>

        <!-- Title -->
        <h1 class="gym-hero__title">
          BUILT
          <span>FOR MORE.</span>
        </h1>

        <div class="gym-hero__bottom">
          <div class="gym-hero__description">
            <p>
              No vienes solo a entrenar.
              Vienes a superar lo que creías que era tu límite.
            </p>

            <div class="gym-hero__actions">
              <a href="#planes" class="gym-hero__primary">
                EMPIEZA HOY
                <span>→</span>
              </a>

              <a href="#instalaciones" class="gym-hero__secondary">
                <span class="gym-hero__play">▶</span>
                CONOCE EL CLUB
              </a>
            </div>
          </div>

          <!-- Mini stats -->
          <div class="gym-hero__stats">
            <div class="gym-hero__stat">
              <strong>06</strong>
              <span>ÁREAS DE<br />ENTRENAMIENTO</span>
            </div>

            <div class="gym-hero__stat">
              <strong>15+</strong>
              <span>COACHES<br />ESPECIALIZADOS</span>
            </div>

            <div class="gym-hero__stat">
              <strong>05:00</strong>
              <span>ABRIMOS<br />TODOS LOS DÍAS</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bottom -->
    <div class="gym-hero__footer">
      <span>FUERZA</span>
      <span class="gym-hero__dot"></span>
      <span>RESISTENCIA</span>
      <span class="gym-hero__dot"></span>
      <span>DISCIPLINA</span>
      <span class="gym-hero__dot"></span>
      <span>RENDIMIENTO</span>
    </div>

    <!-- Scroll indicator -->
    <a href="#beneficios" class="gym-hero__scroll">
      <span>SCROLL</span>
      <div class="gym-hero__scroll-line"></div>
    </a>
  </section>
</template>

<script setup>
import heroImage from "../../../assets/projects/gym/hero/hero.png";
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,700;1,800;1,900&family=Inter:wght@400;500;600&display=swap");

.gym-hero {
  position: relative;
  min-height: 100vh;
  background: #080808;
  color: #ffffff;
  overflow: hidden;

  display: flex;
  align-items: center;

  font-family: "Inter", sans-serif;
}

/* =========================
   BACKGROUND
========================= */

.gym-hero__background {
  position: absolute;
  inset: 0;
}

.gym-hero__image {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
  filter: grayscale(100%) contrast(1.08);
}

.gym-hero__overlay {
  position: absolute;
  inset: 0;

  background:
    linear-gradient(
      90deg,
      rgba(5, 5, 5, 0.96) 0%,
      rgba(5, 5, 5, 0.82) 35%,
      rgba(5, 5, 5, 0.3) 72%,
      rgba(5, 5, 5, 0.22) 100%
    );
}

.gym-hero__gradient {
  position: absolute;
  inset: 0;

  background:
    linear-gradient(
      to top,
      #080808 0%,
      transparent 30%
    );
}

/* =========================
   DECORATION
========================= */

.gym-hero__line {
  position: absolute;
  top: 0;
  bottom: 0;
  width: 1px;
  background: rgba(255, 255, 255, 0.06);
  z-index: 2;
}

.gym-hero__line--one {
  left: 33%;
}

.gym-hero__line--two {
  left: 66%;
}

/* =========================
   CONTAINER
========================= */

.gym-hero__container {
  position: relative;
  z-index: 5;

  width: min(1400px, calc(100% - 48px));
  margin: 0 auto;

  padding-top: 130px;
  padding-bottom: 130px;
}

.gym-hero__content {
  width: 100%;
}

/* =========================
   EYEBROW
========================= */

.gym-hero__eyebrow {
  display: flex;
  align-items: center;
  gap: 14px;

  margin-bottom: 26px;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 13px;
  font-weight: 600;
  letter-spacing: 3px;

  color: #d9ff43;
}

.gym-hero__eyebrow-line {
  width: 42px;
  height: 2px;
  background: #d9ff43;
}

/* =========================
   TITLE
========================= */

.gym-hero__title {
  margin: 0;

  max-width: 950px;

  font-family: "Barlow Condensed", sans-serif;
  font-size: clamp(100px, 12vw, 190px);
  font-weight: 900;
  font-style: italic;

  line-height: 0.74;
  letter-spacing: -5px;

  text-transform: uppercase;
}

.gym-hero__title span {
  display: block;

  margin-left: 70px;

  color: transparent;
  -webkit-text-stroke: 2px rgba(255, 255, 255, 0.85);
}

/* =========================
   BOTTOM CONTENT
========================= */

.gym-hero__bottom {
  display: flex;
  justify-content: space-between;
  align-items: flex-end;
  gap: 60px;

  margin-top: 70px;
}

.gym-hero__description {
  max-width: 470px;
}

.gym-hero__description p {
  margin: 0;

  max-width: 430px;

  font-size: 17px;
  line-height: 1.7;

  color: rgba(255, 255, 255, 0.68);
}

/* =========================
   BUTTONS
========================= */

.gym-hero__actions {
  display: flex;
  align-items: center;
  gap: 30px;

  margin-top: 34px;
}

.gym-hero__primary {
  min-height: 56px;

  padding: 0 28px;

  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 22px;

  background: #d9ff43;
  color: #090909;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 17px;
  font-weight: 800;
  letter-spacing: 1px;

  text-decoration: none;

  transition:
    background 0.25s ease,
    transform 0.25s ease;
}

.gym-hero__primary span {
  font-size: 22px;
}

.gym-hero__primary:hover {
  background: #ffffff;
  transform: translateY(-3px);
}

.gym-hero__secondary {
  display: inline-flex;
  align-items: center;
  gap: 12px;

  color: #ffffff;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 16px;
  font-weight: 600;
  letter-spacing: 1px;

  text-decoration: none;
}

.gym-hero__play {
  width: 42px;
  height: 42px;

  display: flex;
  align-items: center;
  justify-content: center;

  border: 1px solid rgba(255, 255, 255, 0.35);
  border-radius: 50%;

  font-size: 10px;

  transition:
    border-color 0.25s ease,
    background 0.25s ease;
}

.gym-hero__secondary:hover .gym-hero__play {
  background: #d9ff43;
  border-color: #d9ff43;
  color: #080808;
}

/* =========================
   STATS
========================= */

.gym-hero__stats {
  display: flex;
  align-items: stretch;
}

.gym-hero__stat {
  min-width: 145px;

  padding: 0 28px;

  border-left: 1px solid rgba(255, 255, 255, 0.16);
}

.gym-hero__stat:last-child {
  border-right: 1px solid rgba(255, 255, 255, 0.16);
}

.gym-hero__stat strong {
  display: block;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 38px;
  font-weight: 700;
  line-height: 1;

  color: #ffffff;
}

.gym-hero__stat span {
  display: block;

  margin-top: 9px;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 10px;
  font-weight: 500;
  line-height: 1.4;
  letter-spacing: 1.4px;

  color: rgba(255, 255, 255, 0.42);
}

/* =========================
   FOOTER STRIP
========================= */

.gym-hero__footer {
  position: absolute;
  z-index: 6;

  left: 50%;
  bottom: 28px;
  transform: translateX(-50%);

  display: flex;
  align-items: center;
  gap: 20px;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 11px;
  font-weight: 600;
  letter-spacing: 2px;

  color: rgba(255, 255, 255, 0.35);
}

.gym-hero__dot {
  width: 4px;
  height: 4px;
  background: #d9ff43;
}

/* =========================
   SCROLL
========================= */

.gym-hero__scroll {
  position: absolute;
  z-index: 7;

  right: 28px;
  bottom: 36px;

  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 10px;

  text-decoration: none;
}

.gym-hero__scroll span {
  font-family: "Barlow Condensed", sans-serif;
  font-size: 9px;
  letter-spacing: 3px;

  color: rgba(255, 255, 255, 0.35);

  writing-mode: vertical-rl;
}

.gym-hero__scroll-line {
  width: 1px;
  height: 36px;
  background: #d9ff43;
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 1050px) {
  .gym-hero__title {
    font-size: clamp(90px, 14vw, 150px);
  }

  .gym-hero__bottom {
    flex-direction: column;
    align-items: flex-start;
  }

  .gym-hero__stats {
    margin-top: 20px;
  }

  .gym-hero__stat:first-child {
    padding-left: 0;
    border-left: 0;
  }
}

@media (max-width: 700px) {
  .gym-hero {
    min-height: 900px;
  }

  .gym-hero__container {
    width: calc(100% - 32px);
    padding-top: 130px;
    padding-bottom: 100px;
  }

  .gym-hero__image {
    object-position: 65% center;
  }

  .gym-hero__overlay {
    background:
      linear-gradient(
        to right,
        rgba(5, 5, 5, 0.94),
        rgba(5, 5, 5, 0.58)
      );
  }

  .gym-hero__title {
    font-size: clamp(72px, 24vw, 110px);
    letter-spacing: -3px;
    line-height: 0.8;
  }

  .gym-hero__title span {
    margin-left: 0;
    margin-top: 12px;
  }

  .gym-hero__bottom {
    margin-top: 50px;
  }

  .gym-hero__actions {
    flex-direction: column;
    align-items: flex-start;
  }

  .gym-hero__stats {
    width: 100%;
    overflow-x: auto;
  }

  .gym-hero__stat {
    min-width: 125px;
    padding: 0 18px;
  }

  .gym-hero__stat strong {
    font-size: 30px;
  }

  .gym-hero__footer,
  .gym-hero__scroll {
    display: none;
  }
}

@media (max-width: 420px) {
  .gym-hero__eyebrow {
    font-size: 10px;
    letter-spacing: 2px;
  }

  .gym-hero__title {
    font-size: 76px;
  }

  .gym-hero__description p {
    font-size: 15px;
  }
}
</style>