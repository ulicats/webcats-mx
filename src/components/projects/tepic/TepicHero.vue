<template>
<section
  id="inicio"
  class="tepic-hero"
>
    <div class="tepic-hero__background"></div>

    <div class="tepic-hero__container">
      <!-- CONTENIDO -->
      <div class="tepic-hero__content">
        <div class="tepic-hero__eyebrow">
          <span class="tepic-hero__eyebrow-dot"></span>

          Desarrollo web en Tepic, Nayarit
        </div>

        <h1 class="tepic-hero__title">
          Diseño de páginas web
          <span>en Tepic</span>
          que impulsan tu negocio
        </h1>

        <p class="tepic-hero__description">
            Diseñamos páginas web modernas, rápidas y preparadas para SEO
            para negocios, profesionistas y empresas de Tepic, Nayarit.
        </p>

        <div class="tepic-hero__actions">
          <a
            :href="whatsappUrl"
            target="_blank"
            rel="noopener noreferrer"
            class="tepic-hero__button tepic-hero__button--primary"
          >
            Cotizar mi página web

            <span>→</span>
          </a>

          <a
            href="#proyectos"
            class="tepic-hero__button tepic-hero__button--secondary"
          >
            Ver proyectos

            <span>↓</span>
          </a>
        </div>

        <!-- Beneficios -->
        <div class="tepic-hero__benefits">
          <div class="tepic-hero__benefit">
            <div class="tepic-hero__benefit-icon">
              ◇
            </div>

            <div>
              <strong>Diseño moderno</strong>
              <span>Hecho a tu medida</span>
            </div>
          </div>

          <div class="tepic-hero__benefit">
            <div class="tepic-hero__benefit-icon">
              ↗
            </div>

            <div>
              <strong>Preparado para SEO</strong>
              <span>Estructura para buscadores</span>
            </div>
          </div>

          <div class="tepic-hero__benefit">
            <div class="tepic-hero__benefit-icon">
              ⚡
            </div>

            <div>
              <strong>Rápido</strong>
              <span>Buen rendimiento</span>
            </div>
          </div>

          <div class="tepic-hero__benefit">
            <div class="tepic-hero__benefit-icon">
              ✓
            </div>

            <div>
              <strong>Responsive</strong>
              <span>Celular y computadora</span>
            </div>
          </div>
        </div>
      </div>

      <!-- VISUAL -->
      <div class="tepic-hero__visual">
        <div class="tepic-hero__glow"></div>

        <div class="tepic-hero__location">
          <span class="tepic-hero__location-icon">●</span>

          <div>
            <small>Servicio local</small>
            <strong>Tepic, Nayarit</strong>
          </div>
        </div>

        <div class="tepic-hero__desktop">
          <div class="tepic-hero__browser">
            <div class="tepic-hero__browser-bar">
              <div class="tepic-hero__browser-dots">
                <span></span>
                <span></span>
                <span></span>
              </div>

              <div class="tepic-hero__browser-url">
                webcats.mx
              </div>
            </div>

            <div class="tepic-hero__website">
              <div class="tepic-hero__website-header">
                <strong>
                  Webcats<span>.mx</span>
                </strong>

                <div>
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>

              <div class="tepic-hero__website-content">
                <div class="tepic-hero__website-copy">
                  <small>DISEÑO WEB PROFESIONAL</small>

                  <h2>
                    Tu negocio también
                    puede estar aquí
                  </h2>

                  <p>
                    Creamos experiencias digitales que generan resultados.
                  </p>

                  <div class="tepic-hero__fake-button">
                    Comenzar proyecto
                  </div>
                </div>

                <div class="tepic-hero__website-card">
                  <div class="tepic-hero__website-image"></div>

                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Celular -->
        <div class="tepic-hero__phone">
          <div class="tepic-hero__phone-speaker"></div>

          <div class="tepic-hero__phone-content">
            <strong>
              Webcats<span>.mx</span>
            </strong>

            <div class="tepic-hero__phone-image"></div>

            <h3>
              Diseño web para negocios
            </h3>

            <div class="tepic-hero__phone-button">
              Cotizar
            </div>
          </div>
        </div>

        <!-- Badge -->
        <div class="tepic-hero__floating-card">
          <div>↗</div>

          <span>
            <strong>+ Presencia</strong>
            para tu negocio
          </span>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
const whatsappUrl =
  'https://wa.me/523332341375?text=Hola%2C%20vi%20su%20servicio%20de%20dise%C3%B1o%20web%20en%20Tepic%20y%20me%20gustar%C3%ADa%20cotizar%20una%20p%C3%A1gina%20web.'
</script>

<style scoped>
.tepic-hero {
  position: relative;
  overflow: hidden;

  min-height: 680px;

  background:
    radial-gradient(
      circle at 82% 30%,
      rgba(22, 119, 255, 0.13),
      transparent 30%
    ),
    linear-gradient(
      135deg,
      #ffffff 0%,
      #f8fbff 48%,
      #eef6ff 100%
    );
}

.tepic-hero__background {
  position: absolute;
  inset: 0;

  pointer-events: none;

  background-image:
    linear-gradient(
      rgba(22, 119, 255, 0.035) 1px,
      transparent 1px
    ),
    linear-gradient(
      90deg,
      rgba(22, 119, 255, 0.035) 1px,
      transparent 1px
    );

  background-size: 55px 55px;

  mask-image: linear-gradient(
    to right,
    transparent,
    black 45%,
    black
  );
}

.tepic-hero__container {
  position: relative;
  z-index: 2;

  width: min(1180px, calc(100% - 40px));
  min-height: 680px;
  margin: 0 auto;

  display: grid;
  grid-template-columns: 0.95fr 1.05fr;
  align-items: center;
  gap: 60px;

  padding: 75px 0 70px;
}

/* =========================
   CONTENT
========================= */

.tepic-hero__content {
  position: relative;
  z-index: 5;
}

.tepic-hero__eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 8px;

  margin-bottom: 20px;
  padding: 8px 13px;

  color: #1677ff;
  background: #edf5ff;

  border: 1px solid #d7e9ff;
  border-radius: 999px;

  font-size: 11px;
  font-weight: 800;
  letter-spacing: 0.08em;
  text-transform: uppercase;
}

.tepic-hero__eyebrow-dot {
  width: 7px;
  height: 7px;

  background: #1677ff;
  border-radius: 50%;

  box-shadow: 0 0 0 5px rgba(22, 119, 255, 0.1);
}

.tepic-hero__title {
  max-width: 620px;
  margin: 0;

  color: #0f172a;

  font-size: clamp(43px, 5vw, 67px);
  line-height: 0.98;
  letter-spacing: -0.055em;
  font-weight: 900;
}

.tepic-hero__title span {
  display: inline;
  color: #1677ff;
}

.tepic-hero__description {
  max-width: 570px;

  margin: 26px 0 0;

  color: #5d6b80;

  font-size: 17px;
  line-height: 1.7;
}

.tepic-hero__actions {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  gap: 12px;

  margin-top: 32px;
}

.tepic-hero__button {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 11px;

  min-height: 52px;
  padding: 0 22px;

  border-radius: 13px;

  text-decoration: none;
  font-size: 14px;
  font-weight: 750;

  transition:
    transform 0.2s ease,
    box-shadow 0.2s ease;
}

.tepic-hero__button:hover {
  transform: translateY(-2px);
}

.tepic-hero__button--primary {
  color: #ffffff;
  background: #1677ff;

  box-shadow: 0 14px 30px rgba(22, 119, 255, 0.24);
}

.tepic-hero__button--primary:hover {
  box-shadow: 0 18px 36px rgba(22, 119, 255, 0.32);
}

.tepic-hero__button--secondary {
  color: #26364c;
  background: #ffffff;

  border: 1px solid #dce5ef;

  box-shadow: 0 8px 22px rgba(15, 23, 42, 0.05);
}

/* BENEFITS */

.tepic-hero__benefits {
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: 10px;

  max-width: 550px;
  margin-top: 38px;
}

.tepic-hero__benefit {
  display: flex;
  align-items: center;
  gap: 11px;

  min-height: 67px;
  padding: 10px 13px;

  background: rgba(255, 255, 255, 0.82);

  border: 1px solid #e4ebf4;
  border-radius: 13px;

  box-shadow: 0 6px 22px rgba(15, 23, 42, 0.035);
}

.tepic-hero__benefit-icon {
  flex: 0 0 auto;

  width: 36px;
  height: 36px;

  display: grid;
  place-items: center;

  color: #1677ff;
  background: #edf5ff;

  border-radius: 10px;

  font-weight: 900;
}

.tepic-hero__benefit strong,
.tepic-hero__benefit span {
  display: block;
}

.tepic-hero__benefit strong {
  color: #172033;
  font-size: 12px;
  line-height: 1.3;
}

.tepic-hero__benefit span {
  margin-top: 2px;

  color: #8290a3;

  font-size: 10px;
}

/* =========================
   VISUAL
========================= */

.tepic-hero__visual {
  position: relative;

  min-height: 500px;
}

.tepic-hero__glow {
  position: absolute;
  top: 10%;
  left: 12%;

  width: 440px;
  height: 440px;

  background: rgba(22, 119, 255, 0.12);

  border-radius: 50%;
  filter: blur(70px);
}

.tepic-hero__desktop {
  position: absolute;
  top: 70px;
  left: 0;

  width: 92%;

  transform:
    perspective(1200px)
    rotateY(-4deg)
    rotateX(1deg);

  transform-origin: center;
}

.tepic-hero__browser {
  overflow: hidden;

  background: #ffffff;

  border: 7px solid #162033;
  border-radius: 18px;

  box-shadow:
    0 40px 80px rgba(15, 23, 42, 0.18),
    0 10px 30px rgba(15, 23, 42, 0.12);
}

.tepic-hero__browser-bar {
  height: 40px;

  display: flex;
  align-items: center;

  padding: 0 14px;

  background: #f3f6fa;
  border-bottom: 1px solid #e3e9f1;
}

.tepic-hero__browser-dots {
  display: flex;
  gap: 5px;
}

.tepic-hero__browser-dots span {
  width: 7px;
  height: 7px;

  background: #cbd5e1;

  border-radius: 50%;
}

.tepic-hero__browser-dots span:first-child {
  background: #ff6b6b;
}

.tepic-hero__browser-dots span:nth-child(2) {
  background: #f5c451;
}

.tepic-hero__browser-dots span:nth-child(3) {
  background: #51c98b;
}

.tepic-hero__browser-url {
  width: 44%;
  margin: 0 auto;

  padding: 5px 12px;

  color: #94a3b8;
  background: #ffffff;

  border: 1px solid #e2e8f0;
  border-radius: 6px;

  text-align: center;
  font-size: 8px;
}

.tepic-hero__website {
  min-height: 315px;
  padding: 22px;

  background:
    radial-gradient(
      circle at 80% 30%,
      rgba(22, 119, 255, 0.12),
      transparent 28%
    ),
    #ffffff;
}

.tepic-hero__website-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.tepic-hero__website-header strong {
  color: #111827;
  font-size: 13px;
}

.tepic-hero__website-header strong span {
  color: #1677ff;
}

.tepic-hero__website-header > div {
  display: flex;
  gap: 13px;
}

.tepic-hero__website-header > div span {
  width: 31px;
  height: 4px;

  background: #e5ebf2;

  border-radius: 10px;
}

.tepic-hero__website-content {
  display: grid;
  grid-template-columns: 1fr 0.9fr;
  align-items: center;
  gap: 25px;

  padding-top: 45px;
}

.tepic-hero__website-copy small {
  color: #1677ff;

  font-size: 7px;
  font-weight: 800;
}

.tepic-hero__website-copy h2 {
  max-width: 210px;

  margin: 9px 0;

  color: #111827;

  font-size: 28px;
  line-height: 1.02;
  letter-spacing: -1.4px;
}

.tepic-hero__website-copy p {
  max-width: 200px;

  color: #7a8799;

  font-size: 8px;
  line-height: 1.5;
}

.tepic-hero__fake-button {
  display: inline-block;

  margin-top: 12px;
  padding: 8px 13px;

  color: #ffffff;
  background: #1677ff;

  border-radius: 7px;

  font-size: 7px;
  font-weight: 700;
}

.tepic-hero__website-card {
  padding: 11px;

  background: #ffffff;

  border: 1px solid #e5ebf2;
  border-radius: 12px;

  box-shadow: 0 16px 30px rgba(15, 23, 42, 0.08);
}

.tepic-hero__website-image {
  height: 95px;

  background:
    linear-gradient(
      145deg,
      #dcecff,
      #7ab5ff 45%,
      #1677ff
    );

  border-radius: 8px;
}

.tepic-hero__website-card > span {
  display: block;

  width: 80%;
  height: 5px;
  margin-top: 8px;

  background: #e7edf4;

  border-radius: 10px;
}

.tepic-hero__website-card > span:nth-of-type(2) {
  width: 55%;
}

.tepic-hero__website-card > span:nth-of-type(3) {
  width: 68%;
}

/* PHONE */

.tepic-hero__phone {
  position: absolute;
  right: -8px;
  bottom: 30px;

  width: 145px;
  height: 285px;

  padding: 7px;

  background: #101827;

  border-radius: 26px;

  box-shadow: 0 28px 55px rgba(15, 23, 42, 0.24);

  transform: rotate(2deg);
}

.tepic-hero__phone-speaker {
  position: absolute;
  top: 10px;
  left: 50%;

  width: 38px;
  height: 5px;

  background: #273449;

  border-radius: 20px;

  transform: translateX(-50%);
}

.tepic-hero__phone-content {
  height: 100%;

  padding: 25px 10px 10px;

  background: #ffffff;

  border-radius: 20px;

  text-align: center;
}

.tepic-hero__phone-content strong {
  color: #111827;
  font-size: 9px;
}

.tepic-hero__phone-content strong span {
  color: #1677ff;
}

.tepic-hero__phone-image {
  height: 85px;
  margin-top: 16px;

  background:
    linear-gradient(
      145deg,
      #dcecff,
      #7ab5ff 50%,
      #1677ff
    );

  border-radius: 9px;
}

.tepic-hero__phone-content h3 {
  margin: 18px 0 12px;

  color: #111827;

  font-size: 15px;
  line-height: 1.1;
}

.tepic-hero__phone-button {
  display: inline-block;

  padding: 8px 13px;

  color: #ffffff;
  background: #1677ff;

  border-radius: 7px;

  font-size: 7px;
  font-weight: 700;
}

/* FLOATING */

.tepic-hero__floating-card {
  position: absolute;
  top: 25px;
  right: 4px;

  display: flex;
  align-items: center;
  gap: 10px;

  padding: 12px 15px;

  background: rgba(255, 255, 255, 0.96);

  border: 1px solid #e3eaf3;
  border-radius: 13px;

  box-shadow: 0 16px 35px rgba(15, 23, 42, 0.12);
}

.tepic-hero__floating-card > div {
  width: 34px;
  height: 34px;

  display: grid;
  place-items: center;

  color: #ffffff;
  background: #1677ff;

  border-radius: 9px;
}

.tepic-hero__floating-card span {
  color: #7c899b;
  font-size: 9px;
}

.tepic-hero__floating-card strong {
  display: block;

  color: #172033;
  font-size: 11px;
}

.tepic-hero__location {
  position: absolute;
  z-index: 10;
  left: 10px;
  bottom: 0;

  display: flex;
  align-items: center;
  gap: 9px;

  padding: 10px 13px;

  background: #ffffff;

  border: 1px solid #e2e8f0;
  border-radius: 12px;

  box-shadow: 0 12px 30px rgba(15, 23, 42, 0.1);
}

.tepic-hero__location-icon {
  color: #1677ff;
}

.tepic-hero__location small,
.tepic-hero__location strong {
  display: block;
}

.tepic-hero__location small {
  color: #94a3b8;
  font-size: 8px;
}

.tepic-hero__location strong {
  margin-top: 1px;

  color: #172033;
  font-size: 10px;
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 1000px) {
  .tepic-hero__container {
    grid-template-columns: 1fr;
    gap: 30px;

    padding-top: 65px;
  }

  .tepic-hero__content {
    max-width: 720px;
  }

  .tepic-hero__visual {
    width: min(650px, 100%);
    min-height: 500px;
    margin: 0 auto;
  }
}

@media (max-width: 620px) {
  .tepic-hero__container {
    width: min(100% - 30px, 1180px);
    padding-top: 45px;
  }

  .tepic-hero__title {
    font-size: clamp(39px, 12vw, 55px);
  }

  .tepic-hero__description {
    font-size: 15px;
  }

  .tepic-hero__actions {
    align-items: stretch;
    flex-direction: column;
  }

  .tepic-hero__button {
    width: 100%;
  }

  .tepic-hero__benefits {
    grid-template-columns: 1fr;
  }

  .tepic-hero__visual {
    min-height: 390px;
  }

  .tepic-hero__desktop {
    top: 55px;
    width: 100%;
  }

  .tepic-hero__website {
    min-height: 245px;
    padding: 14px;
  }

  .tepic-hero__website-content {
    padding-top: 28px;
  }

  .tepic-hero__website-copy h2 {
    font-size: 19px;
  }

  .tepic-hero__phone {
    right: -8px;
    bottom: 15px;

    width: 105px;
    height: 215px;
  }

  .tepic-hero__phone-image {
    height: 55px;
  }

  .tepic-hero__phone-content h3 {
    font-size: 11px;
  }

  .tepic-hero__floating-card {
    display: none;
  }
}
</style>