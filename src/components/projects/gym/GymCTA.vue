<template>
  <section id="contacto" class="gym-cta">
    <div class="gym-cta__background">
      <img
        :src="ctaImage"
        alt="Atleta entrenando en Iron Pulse"
        class="gym-cta__image"
      />

      <div class="gym-cta__overlay"></div>
    </div>

    <div class="gym-cta__container">
      <div class="gym-cta__content">

        <div class="gym-cta__eyebrow">
          <span></span>
          TU SIGUIENTE NIVEL EMPIEZA AQUÍ
        </div>

        <h2 class="gym-cta__title">
          DEJA DE<br />
          <span>POSPONERLO.</span>
        </h2>

        <p class="gym-cta__text">
          Ven a conocer el club, entrena con nosotros y descubre
          hasta dónde puedes llegar cuando tienes el espacio,
          el equipo y la disciplina correcta.
        </p>

        <div class="gym-cta__actions">
          <a href="#ubicacion" class="gym-cta__primary">
            AGENDAR VISITA
            <span>→</span>
          </a>

          <a href="#planes" class="gym-cta__secondary">
            VER MEMBRESÍAS
            <span>↗</span>
          </a>
        </div>

      </div>

      <div class="gym-cta__aside">
        <div class="gym-cta__aside-block">
          <span>HORARIO</span>
          <strong>05:00 — 23:00</strong>
          <p>LUNES A DOMINGO</p>
        </div>

        <div class="gym-cta__aside-block">
          <span>CONTACTO</span>
          <strong>+52 311 000 0000</strong>
          <p>WHATSAPP · LLAMADAS</p>
        </div>
      </div>
    </div>

    <div class="gym-cta__bottom-line">
      <span>IRON PULSE</span>
      <span>PERFORMANCE CLUB</span>
    </div>
  </section>
</template>

<script setup>
import ctaImage from "../../../assets/projects/gym/cta/cta-gym.png";
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,700;1,800;1,900&family=Inter:wght@400;500;600&display=swap");

.gym-cta {
  position: relative;
  min-height: 760px;

  display: flex;
  align-items: center;

  overflow: hidden;

  background: #090909;
  color: #ffffff;

  font-family: "Inter", sans-serif;
}

.gym-cta__background {
  position: absolute;
  inset: 0;
}

.gym-cta__image {
  width: 100%;
  height: 100%;

  object-fit: cover;
  object-position: center;

  filter: grayscale(100%) contrast(1.08);
}

.gym-cta__overlay {
  position: absolute;
  inset: 0;

  background:
    linear-gradient(
      90deg,
      rgba(5, 5, 5, 0.96) 0%,
      rgba(5, 5, 5, 0.86) 38%,
      rgba(5, 5, 5, 0.45) 68%,
      rgba(5, 5, 5, 0.3) 100%
    );
}

/* =========================
   CONTAINER
========================= */

.gym-cta__container {
  position: relative;
  z-index: 2;

  width: min(1400px, calc(100% - 48px));
  margin: 0 auto;

  display: grid;
  grid-template-columns: 1.2fr 0.8fr;
  gap: 90px;

  align-items: end;

  padding: 120px 0;
}

/* =========================
   CONTENT
========================= */

.gym-cta__content {
  max-width: 880px;
}

.gym-cta__eyebrow {
  display: flex;
  align-items: center;
  gap: 14px;

  margin-bottom: 24px;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 13px;
  font-weight: 700;
  letter-spacing: 3px;

  color: #d9ff43;
}

.gym-cta__eyebrow span {
  width: 42px;
  height: 2px;
  background: #d9ff43;
}

.gym-cta__title {
  margin: 0;

  font-family: "Barlow Condensed", sans-serif;
  font-size: clamp(78px, 9vw, 140px);
  font-weight: 900;
  font-style: italic;

  line-height: 0.8;
  letter-spacing: -4px;

  text-transform: uppercase;
}

.gym-cta__title span {
  color: transparent;

  -webkit-text-stroke: 2px rgba(255, 255, 255, 0.9);
}

.gym-cta__text {
  max-width: 540px;

  margin: 35px 0 0;

  font-size: 16px;
  line-height: 1.75;

  color: rgba(255, 255, 255, 0.62);
}

/* =========================
   ACTIONS
========================= */

.gym-cta__actions {
  display: flex;
  align-items: center;
  gap: 28px;

  margin-top: 38px;
}

.gym-cta__primary {
  min-height: 58px;

  padding: 0 28px;

  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 22px;

  background: #d9ff43;
  color: #090909;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 16px;
  font-weight: 800;
  letter-spacing: 1.3px;

  text-decoration: none;

  transition:
    background 0.3s ease,
    transform 0.3s ease;
}

.gym-cta__primary span {
  font-size: 21px;
}

.gym-cta__primary:hover {
  background: #ffffff;
  transform: translateY(-3px);
}

.gym-cta__secondary {
  display: inline-flex;
  align-items: center;
  gap: 12px;

  color: #ffffff;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 15px;
  font-weight: 700;
  letter-spacing: 1.2px;

  text-decoration: none;
}

.gym-cta__secondary span {
  color: #d9ff43;
  font-size: 20px;
}

/* =========================
   ASIDE
========================= */

.gym-cta__aside {
  justify-self: end;

  width: min(100%, 360px);

  border-top: 1px solid rgba(255, 255, 255, 0.18);
}

.gym-cta__aside-block {
  padding: 28px 0;

  border-bottom: 1px solid rgba(255, 255, 255, 0.18);
}

.gym-cta__aside-block > span {
  display: block;

  margin-bottom: 8px;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 10px;
  font-weight: 700;
  letter-spacing: 2px;

  color: #d9ff43;
}

.gym-cta__aside-block strong {
  display: block;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 29px;
  font-weight: 700;
  line-height: 1;
}

.gym-cta__aside-block p {
  margin: 8px 0 0;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 10px;
  font-weight: 600;
  letter-spacing: 1.7px;

  color: rgba(255, 255, 255, 0.42);
}

/* =========================
   BOTTOM
========================= */

.gym-cta__bottom-line {
  position: absolute;

  left: 0;
  right: 0;
  bottom: 0;

  min-height: 50px;

  padding: 0 28px;

  display: flex;
  align-items: center;
  justify-content: space-between;

  border-top: 1px solid rgba(255, 255, 255, 0.12);

  font-family: "Barlow Condensed", sans-serif;
  font-size: 10px;
  font-weight: 700;
  letter-spacing: 2.5px;

  color: rgba(255, 255, 255, 0.35);
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 950px) {
  .gym-cta__container {
    grid-template-columns: 1fr;
    gap: 65px;
  }

  .gym-cta__aside {
    justify-self: start;
    width: 100%;
    max-width: 600px;
  }
}

@media (max-width: 700px) {
  .gym-cta {
    min-height: 820px;
  }

  .gym-cta__container {
    width: calc(100% - 32px);

    padding: 100px 0 110px;
  }

  .gym-cta__image {
    object-position: 65% center;
  }

  .gym-cta__overlay {
    background:
      linear-gradient(
        90deg,
        rgba(5, 5, 5, 0.95),
        rgba(5, 5, 5, 0.68)
      );
  }

  .gym-cta__title {
    font-size: clamp(68px, 22vw, 100px);
    letter-spacing: -3px;
  }

  .gym-cta__actions {
    flex-direction: column;
    align-items: flex-start;
  }

  .gym-cta__primary {
    width: 100%;
    justify-content: space-between;
  }
}

@media (max-width: 430px) {
  .gym-cta__eyebrow {
    font-size: 10px;
    letter-spacing: 2px;
  }

  .gym-cta__title {
    font-size: 68px;
  }

  .gym-cta__text {
    font-size: 15px;
  }

  .gym-cta__bottom-line {
    padding: 0 16px;

    font-size: 8px;
    letter-spacing: 1.5px;
  }
}
</style>