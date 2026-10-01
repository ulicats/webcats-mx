<template>
  <section
    id="inicio"
    class="multi-hero"
    :style="{ backgroundImage: `url(${heroImage})` }"
  >

    <!-- CAPA PARA LEGIBILIDAD -->
    <div class="hero-overlay"></div>

    <!-- DECORACIÓN -->
    <div class="brick-pattern"></div>

    <div class="hero-container">

      <!-- CONTENIDO -->
      <div class="hero-content">

        <span class="hero-eyebrow">
          TU HOGAR EN BUENAS MANOS
        </span>

        <h1>
          ¿Algo se rompió?
          <span>Nosotros lo solucionamos.</span>
        </h1>

        <p class="hero-description">
          Fontanería, electricidad, albañilería, pintura y mantenimiento
          profesional para tu hogar o negocio.
        </p>

        <p class="hero-location">
          Atención en Tepic y alrededores.
        </p>

        <!-- BOTONES -->
        <div class="hero-actions">

          <a
            href="https://wa.me/523111234567"
            target="_blank"
            rel="noopener noreferrer"
            class="primary-button"
          >
            <span>✆</span>
            Cotizar por WhatsApp
          </a>

          <a
            href="#servicios"
            class="secondary-button"
          >
            Ver servicios
            <span>→</span>
          </a>

        </div>

        <!-- BENEFICIOS -->
        <div class="hero-benefits">

          <div class="benefit">

            <div class="benefit-icon blue">
              ✓
            </div>

            <div>
              <strong>Atención rápida</strong>
              <span>Respuesta ágil</span>
            </div>

          </div>

          <div class="benefit">

            <div class="benefit-icon brick">
              ★
            </div>

            <div>
              <strong>Personal calificado</strong>
              <span>Trabajo profesional</span>
            </div>

          </div>

          <div class="benefit">

            <div class="benefit-icon green">
              ✓
            </div>

            <div>
              <strong>Trabajo garantizado</strong>
              <span>Calidad y confianza</span>
            </div>

          </div>

        </div>

      </div>

    </div>

    <!-- FRANJA INFERIOR -->
    <div class="hero-stats">

      <div class="stats-container">

        <div class="stat">
          <strong>+100</strong>
          <span>Trabajos realizados</span>
        </div>

        <div class="stat">
          <strong>6</strong>
          <span>Áreas de servicio</span>
        </div>

        <div class="stat">
          <strong>Tepic</strong>
          <span>y alrededores</span>
        </div>

        <div class="stat">
          <strong>100%</strong>
          <span>Atención personalizada</span>
        </div>

      </div>

    </div>

  </section>
</template>

<script setup>
import heroImage from '../../../assets/projects/multiservicios/hero/hero.png'
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Sora:wght@500;600;700;800&display=swap');

.multi-hero {
  --navy: #062a50;
  --blue: #087ee5;
  --green: #19a957;
  --brick: #dc512e;

  position: relative;

  overflow: hidden;

  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;

  font-family: 'Manrope', sans-serif;
}


/* =========================
   OVERLAY
========================= */

.hero-overlay {
  position: absolute;

  z-index: 1;

  inset: 0;

  background:
    linear-gradient(
      90deg,

      rgba(255, 255, 255, 0.98) 0%,
      rgba(255, 255, 255, 0.96) 22%,
      rgba(255, 255, 255, 0.87) 36%,
      rgba(255, 255, 255, 0.48) 51%,
      rgba(255, 255, 255, 0.08) 68%,
      rgba(255, 255, 255, 0) 100%
    );
}


/* =========================
   PATRÓN LADRILLO
========================= */

.brick-pattern {
  position: absolute;

  z-index: 2;

  left: -70px;
  bottom: 75px;

  width: 320px;
  height: 180px;

  opacity: 0.055;

  background-image:
    linear-gradient(
      335deg,
      #dc512e 23px,
      transparent 23px
    ),
    linear-gradient(
      155deg,
      #dc512e 23px,
      transparent 23px
    ),
    linear-gradient(
      335deg,
      #dc512e 23px,
      transparent 23px
    ),
    linear-gradient(
      155deg,
      #dc512e 23px,
      transparent 23px
    );

  background-size: 58px 58px;
}


/* =========================
   HERO
========================= */

.hero-container {
  position: relative;

  z-index: 5;

  width: min(
    1180px,
    calc(100% - 40px)
  );

  min-height: 650px;

  margin: auto;

  display: flex;
  align-items: center;
}


/* =========================
   CONTENIDO
========================= */

.hero-content {
  width: 53%;
  max-width: 650px;

  padding: 80px 0 95px;
}


/* =========================
   EYEBROW
========================= */

.hero-eyebrow {
  display: inline-flex;

  margin-bottom: 18px;

  color: var(--blue);

  font-size: 12px;
  font-weight: 800;

  letter-spacing: 2px;
}


/* =========================
   TITULO
========================= */

.hero-content h1 {
  max-width: 630px;

  margin: 0;

  color: var(--navy);

  font-family: 'Sora', sans-serif;

  font-size:
    clamp(
      42px,
      5vw,
      68px
    );

  font-weight: 800;

  line-height: 1.02;

  letter-spacing: -3px;
}

.hero-content h1 span {
  display: block;

  color: var(--blue);
}


/* =========================
   DESCRIPCIÓN
========================= */

.hero-description {
  max-width: 570px;

  margin: 25px 0 7px;

  color: #485a6d;

  font-size: 17px;

  line-height: 1.7;
}

.hero-location {
  margin: 0;

  color: var(--navy);

  font-size: 14px;
  font-weight: 800;
}


/* =========================
   BOTONES
========================= */

.hero-actions {
  display: flex;
  flex-wrap: wrap;

  gap: 13px;

  margin-top: 30px;
}

.primary-button,
.secondary-button {
  display: inline-flex;

  align-items: center;
  justify-content: center;

  gap: 9px;

  padding: 15px 22px;

  border-radius: 9px;

  font-size: 13px;
  font-weight: 800;

  text-decoration: none;

  transition:
    transform 0.2s ease,
    box-shadow 0.2s ease,
    background 0.2s ease;
}


/* WHATSAPP */

.primary-button {
  color: white;

  background: var(--green);

  box-shadow:
    0 10px 25px
    rgba(25, 169, 87, 0.25);
}


/* SERVICIOS */

.secondary-button {
  color: var(--navy);

  background:
    rgba(255, 255, 255, 0.9);

  border:
    1px solid
    rgba(203, 214, 224, 0.95);

  backdrop-filter: blur(5px);
}

.primary-button:hover,
.secondary-button:hover {
  transform: translateY(-3px);
}

.primary-button:hover {
  box-shadow:
    0 15px 30px
    rgba(25, 169, 87, 0.3);
}

.secondary-button:hover {
  background: white;
}


/* =========================
   BENEFICIOS
========================= */

.hero-benefits {
  display: flex;
  flex-wrap: wrap;

  gap: 25px;

  margin-top: 42px;
}

.benefit {
  display: flex;

  align-items: center;

  gap: 10px;
}

.benefit-icon {
  width: 35px;
  height: 35px;

  flex-shrink: 0;

  display: flex;

  align-items: center;
  justify-content: center;

  color: white;

  border-radius: 8px;

  font-size: 13px;
  font-weight: 900;

  box-shadow:
    0 5px 15px
    rgba(6, 42, 80, 0.12);
}

.benefit-icon.blue {
  background: var(--blue);
}

.benefit-icon.brick {
  background: var(--brick);
}

.benefit-icon.green {
  background: var(--green);
}

.benefit div:last-child {
  display: flex;

  flex-direction: column;
}

.benefit strong {
  color: var(--navy);

  font-size: 11px;
}

.benefit span {
  margin-top: 2px;

  color: #657587;

  font-size: 9px;
}


/* =========================
   ESTADÍSTICAS
========================= */

.hero-stats {
  position: relative;

  z-index: 10;

  background:
    rgba(255, 255, 255, 0.96);

  border-top:
    1px solid #e6edf3;

  border-bottom:
    1px solid #e6edf3;

  backdrop-filter: blur(8px);
}

.stats-container {
  width: min(
    1180px,
    calc(100% - 40px)
  );

  margin: auto;

  display: grid;

  grid-template-columns:
    repeat(4, 1fr);
}

.stat {
  padding: 21px;

  text-align: center;

  border-right:
    1px solid #e5ebf0;
}

.stat:first-child {
  border-left:
    1px solid #e5ebf0;
}

.stat strong {
  display: block;

  color: var(--blue);

  font-family: 'Sora', sans-serif;

  font-size: 20px;
}

.stat span {
  display: block;

  margin-top: 3px;

  color: #657587;

  font-size: 10px;
  font-weight: 700;
}


/* =========================
   TABLET
========================= */

@media (max-width: 900px) {

  .multi-hero {
    background-position: 62% center;
  }

  .hero-overlay {
    background:
      linear-gradient(
        90deg,

        rgba(255, 255, 255, 0.98) 0%,
        rgba(255, 255, 255, 0.94) 48%,
        rgba(255, 255, 255, 0.55) 75%,
        rgba(255, 255, 255, 0.2) 100%
      );
  }

  .hero-container {
    min-height: 620px;
  }

  .hero-content {
    width: 70%;
  }

  .stats-container {
    grid-template-columns:
      repeat(2, 1fr);
  }

}


/* =========================
   MÓVIL
========================= */

@media (max-width: 550px) {

  .multi-hero {
    /*
      En celular damos prioridad a los
      trabajadores de la parte derecha.
    */

    background-position:
      67% center;
  }

  /*
    En móvil necesitamos una capa
    más fuerte para que el texto
    siempre sea legible.
  */

  .hero-overlay {
    background:
      linear-gradient(
        180deg,

        rgba(255, 255, 255, 0.98) 0%,
        rgba(255, 255, 255, 0.95) 42%,
        rgba(255, 255, 255, 0.76) 68%,
        rgba(255, 255, 255, 0.35) 100%
      );
  }

  .hero-container {
    width:
      calc(100% - 30px);

    min-height: 720px;

    align-items: flex-start;
  }

  .hero-content {
    width: 100%;

    padding:
      55px
      0
      190px;
  }

  .hero-content h1 {
    max-width: 450px;

    font-size: 39px;

    letter-spacing: -2px;
  }

  .hero-description {
    max-width: 420px;

    font-size: 15px;
  }


  /* BOTONES */

  .hero-actions {
    flex-direction: column;
  }

  .primary-button,
  .secondary-button {
    width: 100%;

    box-sizing: border-box;
  }


  /* BENEFICIOS */

  .hero-benefits {
    flex-direction: column;

    gap: 14px;

    margin-top: 30px;
  }


  /* STATS */

  .stats-container {
    width: 100%;

    grid-template-columns:
      repeat(2, 1fr);
  }

  .stat {
    padding:
      17px
      10px;
  }

}


/* =========================
   MÓVILES PEQUEÑOS
========================= */

@media (max-width: 380px) {

  .hero-content h1 {
    font-size: 35px;
  }

  .hero-content {
    padding-bottom: 160px;
  }

}
</style>