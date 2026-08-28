<template>
  <section id="inicio" class="law-hero">
    <div class="law-hero__visual">
      <img
        :src="heroImage"
        alt="Escritorio de despacho jurídico"
      />
    </div>

    <div class="law-hero__overlay"></div>

    <div class="law-container law-hero__container">
      <div class="law-hero__content">

        <span class="law-eyebrow">
          Experiencia · Estrategia · Resultados
        </span>

        <h1 class="law-hero__title">
          Soluciones jurídicas<br />
          con fundamento<br />
          y compromiso.
        </h1>

        <div class="law-hero__rule"></div>

        <p class="law-hero__description">
          Brindamos asesoría y representación legal con ética,
          estrategia y atención personalizada. Tu tranquilidad legal
          es nuestra prioridad.
        </p>

        <div class="law-hero__actions">
          <a href="#consulta" class="law-button">
            § Solicitar consulta
          </a>

          <a
            href="#despacho"
            class="law-button law-button--outline"
          >
            Conocer más
          </a>
        </div>

      </div>
    </div>
  </section>
</template>

<script setup>
import heroImage from "../../../assets/projects/abogados/Hero/hero.png";
</script>

<style scoped>
.law-hero {
  position: relative;

  min-height: 610px;

  display: flex;
  align-items: center;

  overflow: hidden;

  background: var(--law-paper);

  border-bottom: 1px solid var(--law-border);
}

/* =========================================================
   IMAGEN
========================================================= */

.law-hero__visual {
  position: absolute;

  top: 0;
  right: 0;

  width: 68%;
  height: 100%;

  z-index: 1;
}

.law-hero__visual img {
  width: 100%;
  height: 100%;

  object-fit: cover;
  object-position: center;

  filter:
    saturate(0.6)
    sepia(0.1)
    contrast(0.95);
}

/* =========================================================
   FUSIÓN PAPEL + IMAGEN
========================================================= */

.law-hero__overlay {
  position: absolute;

  inset: 0;

  z-index: 2;

  background:
    linear-gradient(
      90deg,
      var(--law-paper) 0%,
      var(--law-paper) 33%,
      rgba(255, 253, 248, 0.98) 40%,
      rgba(255, 253, 248, 0.78) 48%,
      rgba(255, 253, 248, 0.25) 60%,
      transparent 72%
    );

  pointer-events: none;
}

/* =========================================================
   CONTENEDOR
========================================================= */

.law-hero__container {
  position: relative;

  z-index: 3;

  width: min(
    var(--law-container),
    calc(100% - 40px)
  );

  min-height: 610px;

  display: flex;
  align-items: center;
}

/* =========================================================
   CONTENIDO
========================================================= */

.law-hero__content {
  width: 47%;
  max-width: 590px;

  padding: 70px 0;
}

.law-hero__title {
  margin: 0;

  color: var(--law-primary);

  font-family:
    "Cormorant Garamond",
    Georgia,
    serif;

  font-size: clamp(46px, 4.3vw, 72px);
  font-weight: 600;

  line-height: 0.96;

  letter-spacing: -1.8px;

  text-transform: uppercase;
}

.law-hero__rule {
  width: 75px;
  height: 2px;

  margin: 26px 0;

  background: var(--law-gold);
}

.law-hero__description {
  max-width: 500px;

  margin-bottom: 30px;

  color: var(--law-text);

  font-size: 15px;
  line-height: 1.8;
}

/* =========================================================
   BOTONES
========================================================= */

.law-hero__actions {
  display: flex;
  gap: 14px;

  flex-wrap: wrap;
}

/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 900px) {
  .law-hero {
    min-height: 720px;

    align-items: flex-start;
  }

  .law-hero__visual {
    top: auto;
    bottom: 0;

    width: 100%;
    height: 390px;
  }

  .law-hero__overlay {
    background:
      linear-gradient(
        180deg,
        var(--law-paper) 0%,
        var(--law-paper) 44%,
        rgba(255, 253, 248, 0.92) 55%,
        rgba(255, 253, 248, 0.25) 70%,
        transparent 100%
      );
  }

  .law-hero__container {
    min-height: 720px;

    align-items: flex-start;
  }

  .law-hero__content {
    width: 100%;
    max-width: 620px;

    padding: 80px 0 380px;
  }
}

@media (max-width: 600px) {
  .law-hero {
    min-height: 690px;
  }

  .law-hero__container {
    min-height: 690px;
  }

  .law-hero__content {
    padding-top: 65px;
  }

  .law-hero__title {
    font-size: clamp(40px, 12vw, 54px);

    letter-spacing: -1px;
  }

  .law-hero__visual {
    height: 330px;
  }

  .law-hero__description {
    font-size: 14px;
  }
}
</style>