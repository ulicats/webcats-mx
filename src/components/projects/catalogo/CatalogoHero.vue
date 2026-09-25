<template>
  <section class="auralyn-hero">

    <div class="hero-copy">
      <span class="hero-kicker">
        Nueva temporada
      </span>

      <h1>
        Tu estilo,
        <span>tu forma</span>
        de brillar.
      </h1>

      <p class="hero-categories">
        Ropa · Calzado · Accesorios · Belleza
      </p>

      <div class="hero-actions">
       <RouterLink
          :to="{ name: 'catalogo-productos' }"
          class="hero-primary"
        >
          Explorar catálogo
          <span>→</span>
       </RouterLink>
       

        <a href="#mayoreo" class="hero-secondary">
          Comprar por mayoreo
        </a>
      </div>
    </div>

    <div class="hero-image">
      <img
        :src="heroImage"
        alt="Colección Auralyn"
      />

    </div>

    <div class="hero-side">
      <span>ROPA</span>
      <span>CALZADO</span>
      <span>ACCESORIOS</span>
      <span>BELLEZA</span>
      <span>Y MÁS</span>
    </div>

  </section>
</template>

<script setup>
import heroImage from '../../../assets/projects/catalogo/hero/hero.png'
</script>

<style scoped>
.auralyn-hero {
  position: relative;

  width: 100%;
  min-height: 650px;

  display: grid;
  grid-template-columns:
    minmax(380px, 0.85fr)
    minmax(500px, 1.4fr)
    180px;

  overflow: hidden;

  background:
    linear-gradient(
      110deg,
      #f7e4e8 0%,
      #fffaf8 42%,
      #e5ece4 100%
    );
}

/* COPY */

.hero-copy {
  position: relative;
  z-index: 3;

  display: flex;
  flex-direction: column;
  justify-content: center;

  padding: 80px 40px 80px max(40px, calc((100vw - 1500px) / 2));
}

.hero-kicker {
  margin-bottom: 24px;

  color: #8c706f;

  font-size: 11px;
  font-weight: 600;
  letter-spacing: 0.32em;
  text-transform: uppercase;
}

.hero-copy h1 {
  margin: 0;

  color: #24211f;

  font-size: clamp(54px, 5vw, 88px);
  font-weight: 500;
  line-height: 0.91;
  letter-spacing: -0.055em;
}

.hero-copy h1 span {
  display: block;
  font-family: Georgia, "Times New Roman", serif;
  font-weight: 400;
  font-style: italic;
  color: #a97d87;
}

.hero-categories {
  margin: 30px 0 0;

  color: #655f5b;

  font-size: 11px;
  font-weight: 500;
  letter-spacing: 0.2em;
  text-transform: uppercase;
}

/* BUTTONS */

.hero-actions {
  margin-top: 35px;

  display: flex;
  align-items: center;
  gap: 26px;
}

.hero-primary {
  min-height: 48px;

  display: inline-flex;
  align-items: center;
  gap: 22px;

  padding: 0 23px;

  background: #24211f;
  color: #fff;

  text-decoration: none;

  font-size: 11px;
  font-weight: 600;
  letter-spacing: 0.1em;
  text-transform: uppercase;

  transition:
    background 0.25s ease,
    transform 0.25s ease;
}

.hero-primary:hover {
  background: #a97d87;
  transform: translateY(-2px);
}

.hero-primary span {
  font-size: 18px;
}

.hero-secondary {
  position: relative;

  color: #24211f;
  text-decoration: none;

  font-size: 11px;
  font-weight: 600;
  letter-spacing: 0.08em;
  text-transform: uppercase;
}

.hero-secondary::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: -6px;

  width: 100%;
  height: 1px;

  background: #24211f;

  transform-origin: right;
  transition: transform 0.25s ease;
}

.hero-secondary:hover::after {
  transform: scaleX(0.45);
}

/* IMAGE */

.hero-image {
  position: relative;
  min-width: 0;
  overflow: hidden;
}

.hero-image::after {
  content: "";

  position: absolute;
  inset: 0;

  background:
    linear-gradient(
      90deg,
      rgba(255, 250, 248, 0.3),
      transparent 25%
    );

  pointer-events: none;
}

.hero-image img {
  width: 100%;
  height: 100%;
  min-height: 650px;

  display: block;

  object-fit: cover;
  object-position: center;
}



/* SIDE */

.hero-side {
  display: flex;
  flex-direction: column;
  justify-content: center;
  gap: 12px;

  padding-left: 40px;

  border-left: 1px solid rgba(36, 33, 31, 0.15);
}

.hero-side span {
  color: #514c49;

  font-size: 10px;
  font-weight: 600;
  letter-spacing: 0.25em;
}

/* RESPONSIVE */

@media (max-width: 1100px) {
  .auralyn-hero {
    grid-template-columns: 0.9fr 1.1fr;
  }

  .hero-side {
    display: none;
  }

  .hero-copy {
    padding-left: 40px;
  }
}

@media (max-width: 760px) {
  .auralyn-hero {
    min-height: auto;
    display: flex;
    flex-direction: column;
  }

  .hero-copy {
    order: 2;
    padding: 45px 24px 55px;
  }

  .hero-image {
    order: 1;
    height: 58vh;
    min-height: 430px;
  }

  .hero-image img {
    min-height: 0;
    height: 100%;
    object-position: center center;
  }

  .hero-note {
    display: none;
  }

  .hero-copy h1 {
    font-size: clamp(50px, 15vw, 72px);
  }

  .hero-actions {
    align-items: flex-start;
    flex-direction: column;
    gap: 25px;
  }
}
</style>