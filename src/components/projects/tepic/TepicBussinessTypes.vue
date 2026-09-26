<template>
  <section class="tepic-business">
    <div class="tepic-business__container">

      <div class="tepic-business__header">

        <div>
          <span class="tepic-business__eyebrow">
            Para negocios de Tepic
          </span>

          <h2>
            Una página web para
            <span>cada tipo de negocio.</span>
          </h2>
        </div>

        <p>
          No todos los negocios necesitan el mismo sitio.
          Diseñamos la estructura de acuerdo con tus servicios,
          productos y la forma en que tus clientes te buscan.
        </p>

      </div>

      <div class="tepic-business__grid">

        <article
          v-for="business in businesses"
          :key="business.title"
          class="tepic-business__card"
        >
          <div class="tepic-business__icon">
            {{ business.icon }}
          </div>

          <div>
            <h3>{{ business.title }}</h3>
            <p>{{ business.description }}</p>
          </div>

          <a
            :href="whatsappUrl"
            target="_blank"
            rel="noopener noreferrer"
            :aria-label="`Cotizar página web para ${business.title}`"
          >
            →
          </a>
        </article>

      </div>

      <!-- LOCAL SEO -->
      <div class="tepic-business__local">

        <div class="tepic-business__map">
          <div class="tepic-business__map-grid"></div>

          <div class="tepic-business__map-road road-one"></div>
          <div class="tepic-business__map-road road-two"></div>

          <div class="tepic-business__pin">
            <div>●</div>

            <span>
              <strong>Tepic</strong>
              Nayarit
            </span>
          </div>
        </div>

        <div class="tepic-business__local-content">
          <span class="tepic-business__local-label">
            Desarrollo web en Tepic, Nayarit
          </span>

          <h3>
            Haz que tu negocio también
            tenga presencia en internet.
          </h3>

          <p>
            Trabajamos con negocios, empresas y profesionistas que
            necesitan una página web profesional para presentar sus
            servicios, mostrar sus productos y facilitar que nuevos
            clientes puedan encontrarlos y contactarlos.
          </p>

          <a
            :href="whatsappUrl"
            target="_blank"
            rel="noopener noreferrer"
          >
            Solicitar cotización
            <span>→</span>
          </a>
        </div>

      </div>

    </div>
  </section>
</template>

<script setup>
const businesses = [
  {
    icon: '▦',
    title: 'Empresas',
    description:
      'Sitios corporativos para presentar servicios, experiencia y medios de contacto.'
  },
  {
    icon: '●',
    title: 'Restaurantes',
    description:
      'Menús, ubicación, reservaciones, información y presencia digital para tu restaurante.'
  },
  {
    icon: '⚖',
    title: 'Despachos',
    description:
      'Páginas profesionales para abogados, contadores, consultores y firmas especializadas.'
  },
  {
    icon: '⌂',
    title: 'Inmobiliarias',
    description:
      'Sitios para presentar propiedades, desarrollos y facilitar solicitudes de información.'
  },
  {
    icon: '◇',
    title: 'Profesionistas',
    description:
      'Una presencia profesional para mostrar experiencia, servicios y formas de contacto.'
  },
  {
    icon: '▣',
    title: 'Comercios',
    description:
      'Catálogos, productos, promociones y herramientas para llevar tu negocio a internet.'
  }
]

const whatsappUrl =
  'https://wa.me/523332341375?text=Hola%2C%20tengo%20un%20negocio%20en%20Tepic%20y%20quiero%20cotizar%20una%20p%C3%A1gina%20web.'
</script>

<style scoped>
.tepic-business {
  padding: 110px 0;

  background: #f7faff;
}

.tepic-business__container {
  width: min(1180px, calc(100% - 40px));
  margin: 0 auto;
}

/* HEADER */

.tepic-business__header {
  display: grid;
  grid-template-columns: 1.2fr 0.7fr;
  align-items: end;
  gap: 75px;

  margin-bottom: 45px;
}

.tepic-business__eyebrow {
  display: inline-flex;

  margin-bottom: 15px;
  padding: 7px 11px;

  color: #1677ff;
  background: #eaf4ff;

  border-radius: 999px;

  font-size: 10px;
  font-weight: 850;
  letter-spacing: 0.08em;
  text-transform: uppercase;
}

.tepic-business__header h2 {
  max-width: 620px;
  margin: 0;

  color: #101828;

  font-size: clamp(35px, 4vw, 49px);
  line-height: 1.05;
  letter-spacing: -0.05em;
}

.tepic-business__header h2 span {
  color: #1677ff;
}

.tepic-business__header > p {
  margin: 0;

  color: #758397;

  font-size: 13px;
  line-height: 1.75;
}

/* GRID */

.tepic-business__grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 13px;
}

.tepic-business__card {
  min-height: 125px;

  display: grid;
  grid-template-columns: auto 1fr auto;
  align-items: center;
  gap: 15px;

  padding: 21px;

  background: #ffffff;

  border: 1px solid #e3eaf3;
  border-radius: 15px;

  transition:
    transform 0.2s ease,
    box-shadow 0.2s ease,
    border-color 0.2s ease;
}

.tepic-business__card:hover {
  transform: translateY(-4px);

  border-color: #c9dfff;

  box-shadow: 0 15px 35px rgba(15, 23, 42, 0.07);
}

.tepic-business__icon {
  width: 43px;
  height: 43px;

  display: grid;
  place-items: center;

  color: #1677ff;
  background: #edf5ff;

  border-radius: 11px;

  font-size: 15px;
  font-weight: 900;
}

.tepic-business__card h3 {
  margin: 0 0 5px;

  color: #1c2839;

  font-size: 13px;
}

.tepic-business__card p {
  margin: 0;

  color: #8793a4;

  font-size: 9px;
  line-height: 1.5;
}

.tepic-business__card > a {
  width: 30px;
  height: 30px;

  display: grid;
  place-items: center;

  color: #1677ff;
  background: #f0f6ff;

  border-radius: 8px;

  text-decoration: none;

  transition:
    color 0.2s ease,
    background 0.2s ease;
}

.tepic-business__card:hover > a {
  color: #ffffff;
  background: #1677ff;
}

/* LOCAL */

.tepic-business__local {
  overflow: hidden;

  display: grid;
  grid-template-columns: 0.85fr 1.15fr;

  margin-top: 65px;

  background: #07111f;

  border-radius: 22px;
}

.tepic-business__map {
  position: relative;
  overflow: hidden;

  min-height: 360px;

  background:
    radial-gradient(
      circle at center,
      #152b46,
      #0b192a 70%
    );
}

.tepic-business__map-grid {
  position: absolute;
  inset: 0;

  opacity: 0.3;

  background-image:
    linear-gradient(
      rgba(80, 150, 255, 0.16) 1px,
      transparent 1px
    ),
    linear-gradient(
      90deg,
      rgba(80, 150, 255, 0.16) 1px,
      transparent 1px
    );

  background-size: 35px 35px;

  transform: rotate(12deg) scale(1.4);
}

.tepic-business__map-road {
  position: absolute;

  height: 8px;

  background: #314a68;

  border: 2px solid #416386;
  border-radius: 50px;
}

.road-one {
  top: 45%;
  left: -10%;

  width: 130%;

  transform: rotate(-20deg);
}

.road-two {
  top: 55%;
  left: -10%;

  width: 130%;

  transform: rotate(32deg);
}

.tepic-business__pin {
  position: absolute;
  top: 50%;
  left: 50%;

  display: flex;
  align-items: center;
  gap: 10px;

  padding: 10px 13px;

  background: #ffffff;

  border-radius: 11px;

  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.25);

  transform: translate(-50%, -50%);
}

.tepic-business__pin > div {
  width: 33px;
  height: 33px;

  display: grid;
  place-items: center;

  color: #ffffff;
  background: #1677ff;

  border-radius: 50%;
}

.tepic-business__pin span,
.tepic-business__pin strong {
  display: block;
}

.tepic-business__pin span {
  color: #8390a2;

  font-size: 8px;
}

.tepic-business__pin strong {
  margin-bottom: 1px;

  color: #172033;

  font-size: 11px;
}

/* LOCAL CONTENT */

.tepic-business__local-content {
  padding: 60px;
}

.tepic-business__local-label {
  color: #62a7ff;

  font-size: 9px;
  font-weight: 850;
  letter-spacing: 0.08em;
  text-transform: uppercase;
}

.tepic-business__local-content h3 {
  max-width: 510px;

  margin: 14px 0;

  color: #ffffff;

  font-size: clamp(28px, 3vw, 39px);
  line-height: 1.07;
  letter-spacing: -0.04em;
}

.tepic-business__local-content p {
  max-width: 550px;

  margin: 0;

  color: #8290a5;

  font-size: 12px;
  line-height: 1.75;
}

.tepic-business__local-content a {
  display: inline-flex;
  align-items: center;
  gap: 9px;

  margin-top: 25px;
  padding: 11px 16px;

  color: #ffffff;
  background: #1677ff;

  border-radius: 10px;

  text-decoration: none;
  font-size: 10px;
  font-weight: 800;
}

@media (max-width: 900px) {
  .tepic-business__header {
    grid-template-columns: 1fr;
    gap: 20px;
  }

  .tepic-business__grid {
    grid-template-columns: repeat(2, 1fr);
  }

  .tepic-business__local {
    grid-template-columns: 1fr;
  }

  .tepic-business__map {
    min-height: 280px;
  }
}

@media (max-width: 580px) {
  .tepic-business {
    padding: 80px 0;
  }

  .tepic-business__grid {
    grid-template-columns: 1fr;
  }

  .tepic-business__local-content {
    padding: 35px 25px;
  }
}
</style>