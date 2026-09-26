<template>
  <section
    id="contacto"
    class="tepic-cta"
  >
    <!-- DECORACIÓN -->
    <div class="tepic-cta__glow tepic-cta__glow--one"></div>
    <div class="tepic-cta__glow tepic-cta__glow--two"></div>

    <div class="tepic-cta__grid"></div>

    <div class="tepic-cta__container">

      <!-- LABEL -->
      <div class="tepic-cta__location">
        <span class="tepic-cta__location-dot"></span>

        Diseño y desarrollo web en Tepic, Nayarit
      </div>

      <!-- TITLE -->
      <h2>
        Tu próximo cliente puede
        <span>estar buscándote en internet.</span>
      </h2>

      <p class="tepic-cta__description">
        Cuéntanos sobre tu negocio y lo que necesitas.
        Podemos ayudarte a convertir tu idea en una página web
        profesional.
      </p>

      <!-- ACTIONS -->
      <div class="tepic-cta__actions">

        <a
          :href="whatsappUrl"
          target="_blank"
          rel="noopener noreferrer"
          class="tepic-cta__primary"
        >
          <span class="tepic-cta__whatsapp">
            ◉
          </span>

          Cotizar mi página web

          <span class="tepic-cta__arrow">
            →
          </span>
        </a>

        <a
          href="#proyectos"
          class="tepic-cta__secondary"
        >
          Ver proyectos
        </a>

      </div>

      <!-- BENEFICIOS -->
      <div class="tepic-cta__benefits">

        <div
          v-for="benefit in benefits"
          :key="benefit"
          class="tepic-cta__benefit"
        >
          <span>✓</span>

          {{ benefit }}
        </div>

      </div>

      <!-- MINI BOTTOM -->
      <div class="tepic-cta__bottom">

        <div>
          <span>WEBCATS</span>
          <strong>Desarrollo Web</strong>
        </div>

        <div class="tepic-cta__line"></div>

        <p>
          Diseño · Desarrollo · E-commerce · Sistemas web
        </p>

      </div>

    </div>
  </section>
</template>

<script setup>
const benefits = [
  'Diseño profesional',
  'Adaptable a celulares',
  'Desarrollo personalizado',
  'Preparado para SEO'
]

const whatsappUrl =
  'https://wa.me/523332341375?text=Hola%2C%20vi%20su%20p%C3%A1gina%20de%20desarrollo%20web%20en%20Tepic%20y%20quiero%20cotizar%20un%20proyecto.'
</script>

<style scoped>
.tepic-cta {
  position: relative;
  overflow: hidden;

  padding: 125px 0 80px;

  color: #ffffff;
  background: #07111f;
}

.tepic-cta__container {
  position: relative;
  z-index: 3;

  width: min(1000px, calc(100% - 40px));
  margin: 0 auto;

  text-align: center;
}

/* BACKGROUND */

.tepic-cta__grid {
  position: absolute;
  inset: 0;

  opacity: 0.16;

  background-image:
    linear-gradient(
      rgba(81, 145, 230, 0.16) 1px,
      transparent 1px
    ),
    linear-gradient(
      90deg,
      rgba(81, 145, 230, 0.16) 1px,
      transparent 1px
    );

  background-size: 50px 50px;

  mask-image:
    linear-gradient(
      to bottom,
      transparent,
      #000 30%,
      #000 65%,
      transparent
    );
}

.tepic-cta__glow {
  position: absolute;

  border-radius: 50%;

  filter: blur(20px);
}

.tepic-cta__glow--one {
  top: -250px;
  left: 50%;

  width: 650px;
  height: 650px;

  background: rgba(22, 119, 255, 0.16);

  transform: translateX(-50%);
}

.tepic-cta__glow--two {
  right: -200px;
  bottom: -250px;

  width: 450px;
  height: 450px;

  background: rgba(22, 119, 255, 0.07);
}

/* LOCATION */

.tepic-cta__location {
  display: inline-flex;
  align-items: center;
  gap: 8px;

  margin-bottom: 25px;
  padding: 8px 12px;

  color: #76afff;
  background: rgba(22, 119, 255, 0.1);

  border: 1px solid rgba(78, 156, 255, 0.18);
  border-radius: 999px;

  font-size: 9px;
  font-weight: 800;
  letter-spacing: 0.05em;
  text-transform: uppercase;
}

.tepic-cta__location-dot {
  width: 6px;
  height: 6px;

  background: #4293ff;

  border-radius: 50%;

  box-shadow:
    0 0 0 4px rgba(66, 147, 255, 0.12);
}

/* TITLE */

.tepic-cta h2 {
  max-width: 880px;

  margin: 0 auto;

  color: #ffffff;

  font-size: clamp(42px, 5.7vw, 68px);
  line-height: 0.98;
  letter-spacing: -0.06em;
}

.tepic-cta h2 span {
  display: block;

  color: #4e9cff;
}

.tepic-cta__description {
  max-width: 590px;

  margin: 25px auto 0;

  color: #8492a6;

  font-size: 13px;
  line-height: 1.75;
}

/* ACTIONS */

.tepic-cta__actions {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  gap: 11px;

  margin-top: 34px;
}

.tepic-cta__primary,
.tepic-cta__secondary {
  min-height: 50px;

  display: inline-flex;
  align-items: center;
  justify-content: center;

  border-radius: 11px;

  text-decoration: none;
  font-size: 11px;
  font-weight: 800;

  transition:
    transform 0.2s ease,
    background 0.2s ease,
    border-color 0.2s ease;
}

.tepic-cta__primary {
  gap: 9px;

  padding: 0 18px;

  color: #ffffff;
  background: #1677ff;

  box-shadow:
    0 14px 35px rgba(22, 119, 255, 0.25);
}

.tepic-cta__primary:hover {
  transform: translateY(-2px);

  background: #0869ee;
}

.tepic-cta__whatsapp {
  width: 22px;
  height: 22px;

  display: grid;
  place-items: center;

  background: rgba(255, 255, 255, 0.13);

  border-radius: 6px;

  font-size: 9px;
}

.tepic-cta__arrow {
  margin-left: 5px;

  font-size: 14px;

  transition: transform 0.2s ease;
}

.tepic-cta__primary:hover .tepic-cta__arrow {
  transform: translateX(3px);
}

.tepic-cta__secondary {
  padding: 0 19px;

  color: #b1bed0;
  background: rgba(255, 255, 255, 0.035);

  border: 1px solid rgba(255, 255, 255, 0.1);
}

.tepic-cta__secondary:hover {
  color: #ffffff;

  background: rgba(255, 255, 255, 0.06);

  border-color: rgba(255, 255, 255, 0.17);
}

/* BENEFITS */

.tepic-cta__benefits {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  gap: 24px;

  margin-top: 38px;
}

.tepic-cta__benefit {
  display: flex;
  align-items: center;
  gap: 7px;

  color: #78879b;

  font-size: 9px;
}

.tepic-cta__benefit span {
  width: 18px;
  height: 18px;

  display: grid;
  place-items: center;

  color: #5fa4ff;
  background: rgba(22, 119, 255, 0.09);

  border-radius: 50%;

  font-size: 8px;
  font-weight: 900;
}

/* BOTTOM */

.tepic-cta__bottom {
  display: grid;
  grid-template-columns: auto 1fr auto;
  align-items: center;
  gap: 20px;

  margin-top: 85px;
  padding-top: 25px;

  border-top: 1px solid rgba(255, 255, 255, 0.07);

  text-align: left;
}

.tepic-cta__bottom span,
.tepic-cta__bottom strong {
  display: block;
}

.tepic-cta__bottom span {
  color: #4e9cff;

  font-size: 8px;
  font-weight: 900;
  letter-spacing: 0.12em;
}

.tepic-cta__bottom strong {
  margin-top: 2px;

  color: #ffffff;

  font-size: 10px;
}

.tepic-cta__line {
  height: 1px;

  background:
    linear-gradient(
      to right,
      rgba(255, 255, 255, 0.1),
      transparent
    );
}

.tepic-cta__bottom p {
  margin: 0;

  color: #617086;

  font-size: 8px;
}

/* RESPONSIVE */

@media (max-width: 650px) {
  .tepic-cta {
    padding: 90px 0 55px;
  }

  .tepic-cta h2 {
    font-size: clamp(38px, 11vw, 52px);
  }

  .tepic-cta__actions {
    align-items: stretch;
    flex-direction: column;

    width: 100%;
  }

  .tepic-cta__primary,
  .tepic-cta__secondary {
    width: 100%;
  }

  .tepic-cta__benefits {
    align-items: flex-start;
    flex-direction: column;

    width: max-content;
    max-width: 100%;

    margin-right: auto;
    margin-left: auto;
  }

  .tepic-cta__bottom {
    grid-template-columns: 1fr;

    margin-top: 60px;

    text-align: center;
  }

  .tepic-cta__line {
    display: none;
  }
}
</style>