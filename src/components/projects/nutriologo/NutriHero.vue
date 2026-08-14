<template>
  <section id="inicio" class="nutri-hero">
    <div class="nutri-hero__container">

      <!-- CONTENIDO -->
      <div class="nutri-hero__content">
        <span class="nutri-hero__eyebrow">
          Nutrición personalizada
        </span>

        <h1>
          Alimentación que se adapta
          <span>a tu vida.</span>
        </h1>

        <p class="nutri-hero__description">
          Mejora tu relación con la comida, alcanza tus objetivos
          y construye hábitos sostenibles con un plan pensado
          completamente para ti.
        </p>

        <div class="nutri-hero__actions">
          <a href="#agenda" class="nutri-hero__btn nutri-hero__btn--primary">
            Agendar consulta
          </a>

          <a href="#servicios" class="nutri-hero__btn nutri-hero__btn--secondary">
            Ver servicios
          </a>
        </div>

        <div class="nutri-hero__benefits">
          <div class="nutri-hero__benefit">
            <span class="nutri-hero__check">✓</span>

            <div>
              <strong>Plan personalizado</strong>
              <small>Adaptado a tus objetivos</small>
            </div>
          </div>

          <div class="nutri-hero__benefit">
            <span class="nutri-hero__check">✓</span>

            <div>
              <strong>Consulta online</strong>
              <small>Desde cualquier lugar</small>
            </div>
          </div>

          <div class="nutri-hero__benefit">
            <span class="nutri-hero__check">✓</span>

            <div>
              <strong>Seguimiento</strong>
              <small>Acompañamiento continuo</small>
            </div>
          </div>
        </div>
      </div>

      <!-- VISUAL -->
      <div class="nutri-hero__visual">

        <div class="nutri-hero__shape nutri-hero__shape--one"></div>
        <div class="nutri-hero__shape nutri-hero__shape--two"></div>

        <div class="nutri-hero__image-wrapper">
         <img
            :src="nutriologaHero"
            alt="Nutrióloga Camila Ríos"
            class="nutri-hero__image"
          />
        </div>

        <!-- CARD FLOTANTE -->
        <div class="nutri-hero__floating-card nutri-hero__floating-card--top">
          <span class="nutri-hero__floating-icon">
            <svg
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.8"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path d="M20 4c-7 0-12 3-14 8-1.5 3.5.5 7 4 8 4.5 1.2 8-2.5 10-16Z" />
              <path d="M6 18c3-4 6-7 11-10" />
            </svg>
          </span>

          <div>
            <strong>Enfoque realista</strong>
            <small>Sin dietas extremas</small>
          </div>
        </div>

        <!-- CARD FLOTANTE -->
        <div class="nutri-hero__floating-card nutri-hero__floating-card--bottom">
          <span class="nutri-hero__floating-number">+150</span>

          <div>
            <strong>Pacientes</strong>
            <small>acompañados</small>
          </div>
        </div>

      </div>

    </div>
  </section>
</template>

<script setup>
import nutriologaHero from "../../../assets/projects/nutriologo/hero/nutriologa.png";
</script>

<style scoped>
.nutri-hero {
  position: relative;
  overflow: hidden;

  min-height: calc(100vh - 82px);

  display: flex;
  align-items: center;

  padding: 80px 0 90px;

  background:
    linear-gradient(
      110deg,
      var(--nutri-bg) 0%,
      var(--nutri-bg) 58%,
      var(--nutri-soft) 100%
    );
}

.nutri-hero__container {
  position: relative;
  z-index: 2;

  width: min(1180px, calc(100% - 40px));
  margin: 0 auto;

  display: grid;
  grid-template-columns: 1.05fr 0.95fr;
  align-items: center;
  gap: 80px;
}

/* =========================
   CONTENIDO
========================= */

.nutri-hero__content {
  max-width: 650px;
}

.nutri-hero__eyebrow {
  display: inline-flex;
  align-items: center;

  margin-bottom: 22px;
  padding: 8px 14px;

  border: 1px solid var(--nutri-border);
  border-radius: 999px;

  background: rgba(255, 255, 255, 0.65);

  color: var(--nutri-primary);

  font-size: 12px;
  font-weight: 700;
  letter-spacing: 1.4px;
  text-transform: uppercase;
}

.nutri-hero__floating-icon svg {
  width: 22px;
  height: 22px;
}

.nutri-hero h1 {
  margin: 0;

  color: var(--nutri-text);

  font-size: clamp(48px, 6vw, 78px);
  font-weight: 700;
  line-height: 0.98;
  letter-spacing: -3px;
}

.nutri-hero h1 span {
  display: block;
  color: var(--nutri-primary);
}

.nutri-hero__description {
  max-width: 580px;

  margin: 28px 0 0;

  color: var(--nutri-text-soft);

  font-size: 18px;
  line-height: 1.75;
}

.nutri-hero__image {
  width: 100%;
  height: 100%;
  display: block;

  object-fit: cover;
  object-position: center;

  border-radius: 210px 210px 24px 24px;
}

.nutri-hero__image-wrapper {
  width: min(100%, 450px);
  height: 540px;
  padding: 12px;
  border-radius: 220px 220px 32px 32px;
  overflow: hidden;
}

/* =========================
   BOTONES
========================= */

.nutri-hero__actions {
  display: flex;
  flex-wrap: wrap;
  gap: 14px;

  margin-top: 34px;
}

.nutri-hero__btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;

  min-height: 52px;
  padding: 0 26px;

  border-radius: 999px;

  text-decoration: none;

  font-size: 14px;
  font-weight: 700;

  transition:
    transform 0.25s ease,
    background 0.25s ease,
    color 0.25s ease,
    border-color 0.25s ease;
}

.nutri-hero__btn:hover {
  transform: translateY(-3px);
}

.nutri-hero__btn--primary {
  border: 1px solid var(--nutri-primary);

  background: var(--nutri-primary);
  color: var(--nutri-white);
}

.nutri-hero__btn--primary:hover {
  background: transparent;
  color: var(--nutri-primary);
}

.nutri-hero__btn--secondary {
  border: 1px solid var(--nutri-border);

  background: rgba(255, 255, 255, 0.7);
  color: var(--nutri-text);
}

.nutri-hero__btn--secondary:hover {
  border-color: var(--nutri-primary);
  color: var(--nutri-primary);
}

/* =========================
   BENEFICIOS
========================= */

.nutri-hero__benefits {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 18px;

  margin-top: 46px;
  padding-top: 28px;

  border-top: 1px solid var(--nutri-border);
}

.nutri-hero__benefit {
  display: flex;
  align-items: flex-start;
  gap: 10px;
}

.nutri-hero__benefit div {
  display: flex;
  flex-direction: column;
  gap: 3px;
}

.nutri-hero__benefit strong {
  color: var(--nutri-text);
  font-size: 13px;
  font-weight: 700;
}

.nutri-hero__benefit small {
  color: var(--nutri-text-soft);
  font-size: 11px;
  line-height: 1.4;
}

.nutri-hero__check {
  width: 24px;
  height: 24px;
  flex-shrink: 0;

  display: grid;
  place-items: center;

  border-radius: 50%;

  background: var(--nutri-soft);
  color: var(--nutri-primary);

  font-size: 12px;
  font-weight: 800;
}

/* =========================
   VISUAL
========================= */

.nutri-hero__visual {
  position: relative;

  min-height: 590px;

  display: flex;
  align-items: center;
  justify-content: center;
}

.nutri-hero__image-wrapper {
  position: relative;
  z-index: 2;

  width: min(100%, 450px);
  height: 540px;

  padding: 12px;

  border-radius: 220px 220px 32px 32px;

  background: rgba(255, 255, 255, 0.7);

  box-shadow:
    0 28px 70px rgba(36, 72, 58, 0.12),
    inset 0 0 0 1px rgba(255, 255, 255, 0.7);
}

.nutri-hero__image-placeholder {
  width: 100%;
  height: 100%;

  display: grid;
  place-items: center;

  border-radius: 210px 210px 24px 24px;

  background:
    linear-gradient(
      135deg,
      var(--nutri-secondary),
      var(--nutri-primary)
    );

  color: rgba(255, 255, 255, 0.75);

  font-size: 14px;
  font-weight: 600;
  letter-spacing: 1px;
  text-transform: uppercase;
}

/* =========================
   FORMAS
========================= */

.nutri-hero__shape {
  position: absolute;

  border-radius: 50%;

  pointer-events: none;
}

.nutri-hero__shape--one {
  top: 40px;
  right: 0;

  width: 250px;
  height: 250px;

  background: rgba(134, 167, 137, 0.22);
}

.nutri-hero__shape--two {
  bottom: 30px;
  left: 10px;

  width: 170px;
  height: 170px;

  border: 32px solid rgba(36, 72, 58, 0.08);
}

/* =========================
   CARDS FLOTANTES
========================= */

.nutri-hero__floating-card {
  position: absolute;
  z-index: 3;

  display: flex;
  align-items: center;
  gap: 12px;

  padding: 14px 18px;

  border: 1px solid rgba(255, 255, 255, 0.8);
  border-radius: 16px;

  background: rgba(255, 255, 255, 0.88);

  box-shadow: 0 14px 40px rgba(36, 72, 58, 0.12);
  backdrop-filter: blur(10px);
}

.nutri-hero__floating-card div {
  display: flex;
  flex-direction: column;
  gap: 2px;
}

.nutri-hero__floating-card strong {
  color: var(--nutri-primary);
  font-size: 13px;
}

.nutri-hero__floating-card small {
  color: var(--nutri-text-soft);
  font-size: 11px;
}

.nutri-hero__floating-card--top {
  top: 85px;
  left: -10px;
}

.nutri-hero__floating-card--bottom {
  right: -10px;
  bottom: 85px;
}

.nutri-hero__floating-icon {
  width: 34px;
  height: 34px;

  display: grid;
  place-items: center;

  border-radius: 50%;

  background: var(--nutri-soft);
  color: var(--nutri-primary);

  font-size: 17px;
}

.nutri-hero__floating-number {
  color: var(--nutri-primary);

  font-size: 25px;
  font-weight: 800;
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 1000px) {
  .nutri-hero {
    min-height: auto;
    padding: 70px 0;
  }

  .nutri-hero__container {
    grid-template-columns: 1fr;
    gap: 60px;
  }

  .nutri-hero__content {
    max-width: 720px;
  }

  .nutri-hero__visual {
    width: min(100%, 600px);
    margin: 0 auto;
  }
}

@media (max-width: 650px) {
  .nutri-hero {
    padding: 55px 0 65px;
  }

  .nutri-hero__container {
    width: calc(100% - 28px);
    gap: 45px;
  }

  .nutri-hero h1 {
    font-size: clamp(43px, 14vw, 62px);
    letter-spacing: -2px;
  }

  .nutri-hero__description {
    font-size: 16px;
  }

  .nutri-hero__actions {
    flex-direction: column;
  }

  .nutri-hero__btn {
    width: 100%;
  }

  .nutri-hero__benefits {
    grid-template-columns: 1fr;
  }

  .nutri-hero__visual {
    min-height: 470px;
  }

  .nutri-hero__image-wrapper {
    width: 85%;
    height: 430px;
  }

  .nutri-hero__floating-card--top {
    top: 35px;
    left: 0;
  }

  .nutri-hero__floating-card--bottom {
    right: 0;
    bottom: 30px;
  }
}

@media (max-width: 430px) {
  .nutri-hero__floating-card {
    padding: 11px 13px;
  }

  .nutri-hero__floating-card strong {
    font-size: 11px;
  }

  .nutri-hero__floating-card small {
    font-size: 9px;
  }

  .nutri-hero__floating-number {
    font-size: 20px;
  }
}
</style>