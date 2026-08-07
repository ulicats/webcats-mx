<template>
  <section id="inicio" class="arce-hero">
    <div class="arce-hero__overlay"></div>

    <div class="arce-hero__content">
      <p class="arce-hero__eyebrow">
        Hospedaje entre la naturaleza
      </p>

      <h1>
        Descansa en el corazón
        <span>del bosque</span>
      </h1>

      <p class="arce-hero__description">
        Cabañas privadas rodeadas de pinos, diseñadas para desconectarte de la
        rutina y vivir una experiencia especial en Mazamitla.
      </p>

      <div class="arce-hero__actions">
        <a href="#cabanas" class="arce-button arce-button--primary">
          Explorar cabañas
        </a>

        <a href="#reservar" class="arce-button arce-button--secondary">
          Consultar disponibilidad
        </a>
      </div>

      <a href="#opiniones" class="arce-rating">
        <div class="arce-rating__score">5.0</div>

        <div>
          <div class="arce-rating__stars">★★★★★</div>
          <p>53 opiniones en Google</p>
        </div>
      </a>
    </div>

    <div class="arce-hero__scroll">
      <span></span>
      Descubre Mazamitla
    </div>
  </section>
</template>

<style scoped>
.arce-hero {
  position: relative;
  min-height: 100svh;
  display: flex;
  align-items: center;
  overflow: hidden;
  background:
    linear-gradient(
      rgba(19, 40, 58, 0.12),
      rgba(19, 40, 58, 0.12)
    ),
    url("../../../assets/projects/arce/hero/hero.jpg") center/cover no-repeat;
}

.arce-hero__overlay {
  position: absolute;
  inset: 0;
  background:
    linear-gradient(
      90deg,
      rgba(19, 40, 58, 0.97) 0%,
      rgba(19, 40, 58, 0.84) 38%,
      rgba(19, 40, 58, 0.48) 63%,
      rgba(19, 40, 58, 0.16) 100%
    ),
    linear-gradient(
      0deg,
      rgba(19, 40, 58, 0.5) 0%,
      rgba(19, 40, 58, 0.12) 42%,
      transparent 70%
    );
}

.arce-hero__content {
  position: relative;
  z-index: 2;
  width: min(1180px, calc(100% - 40px));
  margin: 0 auto;
  padding-top: 110px;
}

.arce-hero__eyebrow {
  margin-bottom: 20px;
  color: var(--arce-gold-light);
  font-size: 12px;
  font-weight: 700;
  letter-spacing: 0.25em;
  text-transform: uppercase;
}

.arce-hero h1 {
  max-width: 760px;
  color: var(--arce-white);
  font-family: var(--arce-heading);
  font-size: clamp(58px, 7.4vw, 105px);
  font-weight: 500;
  line-height: 0.9;
  letter-spacing: -0.035em;
}

.arce-hero h1 span {
  display: block;
  color: var(--arce-gold-light);
  font-style: italic;
}

.arce-hero__description {
  max-width: 610px;
  margin-top: 30px;
  color: rgba(255, 255, 255, 0.82);
  font-size: clamp(16px, 1.4vw, 19px);
  line-height: 1.8;
}

.arce-hero__actions {
  display: flex;
  flex-wrap: wrap;
  gap: 14px;
  margin-top: 38px;
}

.arce-button {
  min-height: 54px;
  padding: 0 27px;
  border-radius: 999px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-size: 13px;
  font-weight: 700;
  transition:
    transform 0.2s ease,
    background-color 0.2s ease,
    border-color 0.2s ease;
}

.arce-button:hover {
  transform: translateY(-2px);
}

.arce-button--primary {
  background: var(--arce-gold);
  color: var(--arce-navy-950);
}

.arce-button--primary:hover {
  background: var(--arce-gold-light);
}

.arce-button--secondary {
  border: 1px solid rgba(255, 255, 255, 0.58);
  color: var(--arce-white);
  background: rgba(19, 40, 58, 0.16);
  backdrop-filter: blur(8px);
}

.arce-button--secondary:hover {
  border-color: var(--arce-gold-light);
  background: rgba(19, 40, 58, 0.38);
}

.arce-rating {
  width: fit-content;
  margin-top: 44px;
  padding: 14px 19px;
  border: 1px solid rgba(210, 187, 103, 0.25);
  border-radius: 16px;
  display: flex;
  align-items: center;
  gap: 15px;
  color: var(--arce-white);
  background: rgba(19, 40, 58, 0.54);
  box-shadow: 0 16px 40px rgba(8, 20, 31, 0.15);
  backdrop-filter: blur(12px);
}

.arce-rating__score {
  padding-right: 15px;
  border-right: 1px solid rgba(255, 255, 255, 0.18);
  font-family: var(--arce-heading);
  font-size: 36px;
  line-height: 1;
}

.arce-rating__stars {
  color: var(--arce-gold-light);
  font-size: 14px;
  letter-spacing: 0.08em;
}

.arce-rating p {
  margin-top: 4px;
  color: rgba(255, 255, 255, 0.7);
  font-size: 11px;
}

.arce-hero__scroll {
  position: absolute;
  z-index: 2;
  right: 4%;
  bottom: 38px;
  display: flex;
  align-items: center;
  gap: 14px;
  color: rgba(255, 255, 255, 0.66);
  font-size: 10px;
  font-weight: 700;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  transform: rotate(-90deg) translateX(100%);
  transform-origin: right bottom;
}

.arce-hero__scroll span {
  width: 44px;
  height: 1px;
  background: var(--arce-gold-light);
}

@media (max-width: 720px) {
  .arce-hero {
    min-height: 820px;
    background-position: 58% center;
  }

  .arce-hero__overlay {
    background:
      linear-gradient(
        rgba(19, 40, 58, 0.86),
        rgba(19, 40, 58, 0.8)
      );
  }

  .arce-hero__content {
    padding-top: 100px;
  }

  .arce-hero h1 {
    font-size: clamp(50px, 15vw, 72px);
  }

  .arce-hero__description {
    line-height: 1.65;
  }

  .arce-hero__actions {
    flex-direction: column;
  }

  .arce-button {
    width: 100%;
  }

  .arce-hero__scroll {
    display: none;
  }
}
</style>