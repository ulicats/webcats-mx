<template>
  <section class="tepic-why">
    <div class="tepic-why__container">

      <!-- Visual -->
      <div class="tepic-why__visual">
        <div class="tepic-why__screen">

          <div class="tepic-why__screen-bar">
            <span></span>
            <span></span>
            <span></span>

            <div>
              webcats.mx
            </div>
          </div>

          <div class="tepic-why__screen-content">
            <div class="tepic-why__code">
              <span>&lt;section&gt;</span>
              <span>&nbsp;&nbsp;&lt;h1&gt;Tu negocio&lt;/h1&gt;</span>
              <span>&nbsp;&nbsp;&lt;p&gt;Diseñado para crecer&lt;/p&gt;</span>
              <span>&nbsp;&nbsp;&lt;button&gt;Cotizar&lt;/button&gt;</span>
              <span>&lt;/section&gt;</span>
            </div>

            <div class="tepic-why__preview">
              <span class="tepic-why__preview-label">
                WEB
              </span>

              <div class="tepic-why__preview-title"></div>
              <div class="tepic-why__preview-title short"></div>

              <div class="tepic-why__preview-text"></div>
              <div class="tepic-why__preview-text"></div>
              <div class="tepic-why__preview-text short"></div>

              <div class="tepic-why__preview-button"></div>
            </div>
          </div>
        </div>

        <div class="tepic-why__floating tepic-why__floating--top">
          <div>⚡</div>

          <span>
            <strong>Rendimiento</strong>
            Sitios optimizados
          </span>
        </div>

        <div class="tepic-why__floating tepic-why__floating--bottom">
          <div>↗</div>

          <span>
            <strong>SEO técnico</strong>
            Preparado para buscadores
          </span>
        </div>
      </div>

      <!-- Content -->
      <div class="tepic-why__content">
        <span class="tepic-why__eyebrow">
          ¿Por qué Webcats?
        </span>

        <h2>
          No hacemos solamente
          <span>una página bonita.</span>
        </h2>

        <p class="tepic-why__lead">
          Creamos sitios pensando en la imagen de tu negocio,
          la experiencia de tus clientes y el crecimiento de
          tu presencia digital.
        </p>

        <div class="tepic-why__features">

          <article
            v-for="feature in features"
            :key="feature.title"
            class="tepic-why__feature"
          >
            <div class="tepic-why__feature-icon">
              {{ feature.icon }}
            </div>

            <div>
              <h3>{{ feature.title }}</h3>
              <p>{{ feature.description }}</p>
            </div>
          </article>

        </div>

        <div class="tepic-why__actions">
          <a
            :href="whatsappUrl"
            target="_blank"
            rel="noopener noreferrer"
            class="tepic-why__primary"
          >
            Quiero cotizar mi proyecto
            <span>→</span>
          </a>

          <a
            href="#proyectos"
            class="tepic-why__secondary"
          >
            Ver nuestro trabajo
          </a>
        </div>
      </div>

    </div>
  </section>
</template>

<script setup>
const features = [
  {
    icon: '◇',
    title: 'Diseño pensado para tu negocio',
    description:
      'La identidad y estructura del sitio se adaptan al proyecto y a sus objetivos.'
  },
  {
    icon: '⚡',
    title: 'Velocidad y rendimiento',
    description:
      'Construimos experiencias ligeras y cuidamos el desempeño del sitio.'
  },
  {
    icon: '↗',
    title: 'SEO desde la estructura',
    description:
      'Organizamos títulos, contenido y elementos técnicos pensando también en buscadores.'
  },
  {
    icon: '◉',
    title: 'Acompañamiento',
    description:
      'Trabajamos contigo desde la idea inicial hasta la publicación de tu proyecto.'
  }
]

const whatsappUrl =
  'https://wa.me/521XXXXXXXXXX?text=Hola%2C%20vi%20su%20servicio%20de%20dise%C3%B1o%20web%20en%20Tepic%20y%20quiero%20cotizar%20un%20proyecto.'
</script>

<style scoped>
.tepic-why {
  overflow: hidden;

  padding: 115px 0;

  background: #ffffff;
}

.tepic-why__container {
  width: min(1180px, calc(100% - 40px));
  margin: 0 auto;

  display: grid;
  grid-template-columns: 1fr 0.9fr;
  align-items: center;
  gap: 85px;
}

/* VISUAL */

.tepic-why__visual {
  position: relative;

  min-height: 500px;

  display: flex;
  align-items: center;
}

.tepic-why__visual::before {
  content: "";

  position: absolute;
  top: 50%;
  left: 45%;

  width: 430px;
  height: 430px;

  background: #eef6ff;

  border-radius: 50%;

  transform: translate(-50%, -50%);
}

.tepic-why__screen {
  position: relative;
  z-index: 2;

  overflow: hidden;

  width: 92%;

  background: #101827;

  border: 8px solid #101827;
  border-radius: 18px;

  box-shadow:
    0 40px 80px rgba(15, 23, 42, 0.18),
    0 12px 30px rgba(15, 23, 42, 0.1);

  transform: rotate(-2deg);
}

.tepic-why__screen-bar {
  min-height: 38px;

  display: flex;
  align-items: center;
  gap: 6px;

  padding: 0 12px;

  background: #f2f5f9;
}

.tepic-why__screen-bar > span {
  width: 7px;
  height: 7px;

  background: #cbd5e1;

  border-radius: 50%;
}

.tepic-why__screen-bar > span:first-child {
  background: #ff6868;
}

.tepic-why__screen-bar > span:nth-child(2) {
  background: #f5c451;
}

.tepic-why__screen-bar > span:nth-child(3) {
  background: #55c98b;
}

.tepic-why__screen-bar div {
  margin: 0 auto;

  color: #94a3b8;

  font-size: 8px;
}

.tepic-why__screen-content {
  min-height: 335px;

  display: grid;
  grid-template-columns: 1fr 1fr;
}

.tepic-why__code {
  padding: 55px 25px;

  display: flex;
  flex-direction: column;
  gap: 14px;

  background: #0b1320;
}

.tepic-why__code span {
  color: #74aaff;

  font-family: monospace;
  font-size: 10px;
}

.tepic-why__code span:nth-child(2),
.tepic-why__code span:nth-child(3) {
  color: #a9c7ef;
}

.tepic-why__preview {
  padding: 50px 27px;

  background:
    radial-gradient(
      circle at 80% 20%,
      rgba(22, 119, 255, 0.15),
      transparent 30%
    ),
    #ffffff;
}

.tepic-why__preview-label {
  color: #1677ff;

  font-size: 7px;
  font-weight: 900;
}

.tepic-why__preview-title {
  width: 90%;
  height: 15px;
  margin-top: 14px;

  background: #182235;

  border-radius: 5px;
}

.tepic-why__preview-title.short {
  width: 63%;
  margin-top: 7px;
}

.tepic-why__preview-text {
  width: 100%;
  height: 6px;
  margin-top: 22px;

  background: #dbe3ed;

  border-radius: 5px;
}

.tepic-why__preview-text + .tepic-why__preview-text {
  margin-top: 7px;
}

.tepic-why__preview-text.short {
  width: 67%;
}

.tepic-why__preview-button {
  width: 75px;
  height: 25px;
  margin-top: 25px;

  background: #1677ff;

  border-radius: 7px;
}

/* FLOATING */

.tepic-why__floating {
  position: absolute;
  z-index: 5;

  display: flex;
  align-items: center;
  gap: 10px;

  padding: 12px 14px;

  background: #ffffff;

  border: 1px solid #e3eaf3;
  border-radius: 12px;

  box-shadow: 0 15px 35px rgba(15, 23, 42, 0.12);
}

.tepic-why__floating > div {
  width: 33px;
  height: 33px;

  display: grid;
  place-items: center;

  color: #1677ff;
  background: #edf5ff;

  border-radius: 9px;
}

.tepic-why__floating strong,
.tepic-why__floating span {
  display: block;
}

.tepic-why__floating span {
  color: #8995a5;

  font-size: 8px;
}

.tepic-why__floating strong {
  margin-bottom: 2px;

  color: #172033;

  font-size: 10px;
}

.tepic-why__floating--top {
  top: 20px;
  right: 5px;
}

.tepic-why__floating--bottom {
  right: 0;
  bottom: 20px;
}

/* CONTENT */

.tepic-why__eyebrow {
  display: inline-flex;

  margin-bottom: 15px;
  padding: 7px 11px;

  color: #1677ff;
  background: #edf5ff;

  border-radius: 999px;

  font-size: 10px;
  font-weight: 850;
  letter-spacing: 0.08em;
  text-transform: uppercase;
}

.tepic-why__content h2 {
  max-width: 530px;

  margin: 0;

  color: #101828;

  font-size: clamp(35px, 4vw, 50px);
  line-height: 1.04;
  letter-spacing: -0.05em;
}

.tepic-why__content h2 span {
  color: #1677ff;
}

.tepic-why__lead {
  max-width: 530px;

  margin: 22px 0 0;

  color: #718096;

  font-size: 14px;
  line-height: 1.75;
}

/* FEATURES */

.tepic-why__features {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 14px;

  margin-top: 35px;
}

.tepic-why__feature {
  display: flex;
  align-items: flex-start;
  gap: 11px;

  padding: 15px;

  background: #f9fbfd;

  border: 1px solid #e8edf4;
  border-radius: 13px;
}

.tepic-why__feature-icon {
  flex: 0 0 auto;

  width: 34px;
  height: 34px;

  display: grid;
  place-items: center;

  color: #1677ff;
  background: #eaf4ff;

  border-radius: 9px;

  font-size: 12px;
  font-weight: 900;
}

.tepic-why__feature h3 {
  margin: 1px 0 5px;

  color: #1d2939;

  font-size: 11px;
}

.tepic-why__feature p {
  margin: 0;

  color: #8491a3;

  font-size: 9px;
  line-height: 1.5;
}

/* ACTIONS */

.tepic-why__actions {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  gap: 12px;

  margin-top: 32px;
}

.tepic-why__primary,
.tepic-why__secondary {
  min-height: 47px;

  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 10px;

  padding: 0 18px;

  border-radius: 11px;

  text-decoration: none;
  font-size: 11px;
  font-weight: 800;
}

.tepic-why__primary {
  color: #ffffff;
  background: #1677ff;

  box-shadow: 0 12px 28px rgba(22, 119, 255, 0.22);
}

.tepic-why__secondary {
  color: #42526a;
  background: #ffffff;

  border: 1px solid #dfe6ef;
}

@media (max-width: 950px) {
  .tepic-why__container {
    grid-template-columns: 1fr;
    gap: 60px;
  }

  .tepic-why__visual {
    width: min(650px, 100%);
    margin: 0 auto;
  }

  .tepic-why__content {
    max-width: 700px;
  }
}

@media (max-width: 600px) {
  .tepic-why {
    padding: 80px 0;
  }

  .tepic-why__visual {
    min-height: 390px;
  }

  .tepic-why__screen {
    width: 100%;
  }

  .tepic-why__screen-content {
    min-height: 270px;
  }

  .tepic-why__code {
    padding: 40px 12px;
  }

  .tepic-why__code span {
    font-size: 7px;
  }

  .tepic-why__preview {
    padding: 40px 15px;
  }

  .tepic-why__floating {
    display: none;
  }

  .tepic-why__features {
    grid-template-columns: 1fr;
  }

  .tepic-why__actions {
    align-items: stretch;
    flex-direction: column;
  }

  .tepic-why__primary,
  .tepic-why__secondary {
    width: 100%;
  }
}
</style>