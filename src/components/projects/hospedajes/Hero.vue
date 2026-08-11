<template>
  <section id="inicio" class="hospedaje-hero">
    <div class="hospedaje-hero__overlay"></div>

<div class="hospedaje-hero__content">
  <p class="hospedaje-hero__eyebrow">
    TU ESPACIO MERECE UNA BUENA PRESENTACIÓN
  </p>

  <h1>
    Muestra tu espacio,
    <span>consigue más clientes</span>
  </h1>

  <p class="hospedaje-hero__description">
     Una página diseñada para mostrar tu propiedad, recibir solicitudes
    y facilitar que tus clientes reserven y encuentren toda la información que necesitan.
  </p>

  <div class="hospedaje-hero__actions">
    <a href="#cabanas" class="hospedaje-button hospedaje-button--primary">
     Ver demostración
    </a>

    <a href="#reservar" class="hospedaje-button hospedaje-button--secondary">
      Probar formulario de reservación
    </a>
  </div>

  <a href="#opiniones" class="hospedaje-rating">
    <div class="hospedaje-rating__score">5.0</div>

    <div>
      <div class="hospedaje-rating__stars">★★★★★</div>
      <p>Reseñas de tus clientes</p>
    </div>
  </a>
</div>

<div class="hospedaje-hero__scroll">
  <span></span>
  Descubre lo que podemos crear
</div>
  </section>
</template>

<style scoped>
.hospedaje-hero {
  position: relative;
  min-height: 100svh;
  display: flex;
  align-items: center;
  overflow: hidden;
  background:
    linear-gradient(
      rgba(48, 56, 47, 0.12),
      rgba(48, 56, 47, 0.12)
    ),
    url("../../../assets/projects/hospedaje/hero/hero.png") center/cover no-repeat;
}

.hospedaje-hero__overlay {
  position: absolute;
  inset: 0;

  background:
    linear-gradient(
      90deg,
      rgba(48, 56, 47, 0.97) 0%,
      rgba(48, 56, 47, 0.84) 38%,
      rgba(48, 56, 47, 0.48) 63%,
      rgba(48, 56, 47, 0.16) 100%
    ),
    linear-gradient(
      0deg,
      rgba(48, 56, 47, 0.5) 0%,
      rgba(48, 56, 47, 0.12) 42%,
      transparent 70%
    );
}

.hospedaje-hero__content {
  position: relative;
  z-index: 2;
  width: min(1180px, calc(100% - 40px));
  margin: 0 auto;
  padding-top: 110px;
}

.hospedaje-hero__eyebrow {
  margin-bottom: 20px;
  color: var(--hospedaje-gold-light);
  font-size: 12px;
  font-weight: 700;
  letter-spacing: 0.25em;
  text-transform: uppercase;
}

.hospedaje-hero h1 {
  max-width: 760px;
  color: var(--hospedaje-white);
  font-family: var(--hospedaje-heading);
  font-size: clamp(58px, 7.4vw, 105px);
  font-weight: 500;
  line-height: 0.9;
  letter-spacing: -0.035em;
}

.hospedaje-hero h1 span {
  display: block;
  color: #d2bb67;
  font-style: italic;
}

.hospedaje-hero__description {
  max-width: 610px;
  margin-top: 30px;
  color: rgba(255, 255, 255, 0.82);
  font-size: clamp(16px, 1.4vw, 19px);
  line-height: 1.8;
}

.hospedaje-hero__actions {
  display: flex;
  flex-wrap: wrap;
  gap: 14px;
  margin-top: 38px;
}

.hospedaje-button {
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

.hospedaje-button:hover {
  transform: translateY(-2px);
}

.hospedaje-button--primary {
  background: var(--hospedaje-gold);
  color: var(--hospedaje-navy-950);
}

.hospedaje-button--primary:hover {
  background: var(--hospedaje-gold-light);
}

.hospedaje-button--secondary {
  border: 1px solid rgba(255, 255, 255, 0.58);
  color: var(--hospedaje-white);
  background: rgba(19, 40, 58, 0.16);
  backdrop-filter: blur(8px);
}

.hospedaje-button--secondary:hover {
  border-color: var(--hospedaje-gold-light);
  background: rgba(19, 40, 58, 0.38);
}

.hospedaje-rating {
  width: fit-content;
  margin-top: 44px;
  padding: 14px 19px;
  border: 1px solid rgba(210, 187, 103, 0.25);
  border-radius: 16px;
  display: flex;
  align-items: center;
  gap: 15px;
  color: var(--hospedaje-white);
  background: rgba(19, 40, 58, 0.54);
  box-shadow: 0 16px 40px rgba(8, 20, 31, 0.15);
  backdrop-filter: blur(12px);
}

.hospedaje-rating__score {
  padding-right: 15px;
  border-right: 1px solid rgba(255, 255, 255, 0.18);
  font-family: var(--hospedaje-heading);
  font-size: 36px;
  line-height: 1;
}

.hospedaje-rating__stars {
  color: var(--hospedaje-gold-light);
  font-size: 14px;
  letter-spacing: 0.08em;
}

.hospedaje-rating p {
  margin-top: 4px;
  color: rgba(255, 255, 255, 0.7);
  font-size: 11px;
}

.hospedaje-hero__scroll {
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

.hospedaje-hero__scroll span {
  width: 44px;
  height: 1px;
  background: var(--hospedaje-gold-light);
}

@media (max-width: 720px) {
  .hospedaje-hero {
    min-height: 820px;
    background-position: 58% center;
  }

 .hospedaje-hero__overlay {
    position: absolute;
    inset: 0;

    background:
      linear-gradient(
        90deg,
        rgba(48, 56, 47, 0.82) 0%,
        rgba(48, 56, 47, 0.58) 40%,
        rgba(48, 56, 47, 0.18) 72%,
        rgba(48, 56, 47, 0.04) 100%
      ),
      linear-gradient(
        0deg,
        rgba(48, 56, 47, 0.32) 0%,
        transparent 42%
      );
  }

  .hospedaje-hero__content {
    padding-top: 100px;
  }

  .hospedaje-hero h1 {
    font-size: clamp(50px, 15vw, 72px);
  }

  .hospedaje-hero__description {
    line-height: 1.65;
  }

  .hospedaje-hero__actions {
    flex-direction: column;
  }

  .hospedaje-button {
    width: 100%;
  }

  .hospedaje-hero__scroll {
    display: none;
  }
}
</style>