<template>
  <section
    id="diseno-web-tepic"
    class="tepic-seo"
  >
    <div class="tepic-seo__container">

      <!-- =========================================
           INTRO
      ========================================== -->
      <div class="tepic-seo__intro">

        <div class="tepic-seo__intro-content">
          <span class="tepic-seo__eyebrow">
            Diseño web en Tepic, Nayarit
          </span>

          <h2>
            Diseño de páginas web para
            <span>negocios que quieren crecer.</span>
          </h2>
        </div>

        <div class="tepic-seo__intro-text">
          <p>
            En Webcats desarrollamos páginas web profesionales para
            empresas, negocios y profesionistas en Tepic, Nayarit.
            Creamos sitios modernos, rápidos y adaptables que presentan
            claramente tus servicios y facilitan que nuevos clientes
            puedan encontrarte y contactarte.
          </p>

          <p>
            Cada proyecto se desarrolla de acuerdo con las necesidades
            reales del negocio: desde una página informativa hasta
            catálogos digitales, tiendas en línea o sistemas web
            personalizados.
          </p>
        </div>

      </div>

      <!-- =========================================
           PRINCIPAL
      ========================================== -->
      <div class="tepic-seo__main">

        <!-- VISUAL -->
        <div class="tepic-seo__visual">

          <div class="tepic-seo__browser">

            <div class="tepic-seo__browser-top">
              <div class="tepic-seo__dots">
                <span></span>
                <span></span>
                <span></span>
              </div>

              <div class="tepic-seo__address">
                tu-negocio.com
              </div>
            </div>

            <div class="tepic-seo__browser-content">

              <div class="tepic-seo__mock-nav">
                <div class="tepic-seo__mock-logo">
                  TU MARCA
                </div>

                <div class="tepic-seo__mock-menu">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>

              <div class="tepic-seo__mock-hero">

                <div class="tepic-seo__mock-copy">
                  <span class="tepic-seo__mock-small">
                    TU NEGOCIO EN INTERNET
                  </span>

                  <div class="tepic-seo__mock-title">
                    <span></span>
                    <span></span>
                    <span></span>
                  </div>

                  <div class="tepic-seo__mock-description">
                    <span></span>
                    <span></span>
                  </div>

                  <div class="tepic-seo__mock-button"></div>
                </div>

                <div class="tepic-seo__mock-image">
                  <div class="tepic-seo__mock-window">
                    <span></span>
                    <span></span>
                    <span></span>
                  </div>
                </div>

              </div>

            </div>

          </div>

          <!-- FLOATING CARDS -->

          <div class="tepic-seo__floating tepic-seo__floating--seo">
            <div class="tepic-seo__floating-icon">
              ↑
            </div>

            <div>
              <span>Preparado para</span>
              <strong>SEO</strong>
            </div>
          </div>

          <div class="tepic-seo__floating tepic-seo__floating--responsive">
            <div class="tepic-seo__floating-icon">
              ◇
            </div>

            <div>
              <span>Diseño</span>
              <strong>Responsive</strong>
            </div>
          </div>

        </div>

        <!-- CONTENT -->
        <div class="tepic-seo__content">

          <span class="tepic-seo__section-label">
            Más que una página bonita
          </span>

          <h3>
            Tu sitio web debe trabajar
            <span>para tu negocio.</span>
          </h3>

          <p class="tepic-seo__lead">
            Una página web profesional no solamente debe verse bien.
            También necesita comunicar qué haces, generar confianza,
            funcionar correctamente en celulares y facilitar que un
            visitante se convierta en una oportunidad de negocio.
          </p>

          <div class="tepic-seo__features">

            <article
              v-for="feature in features"
              :key="feature.title"
              class="tepic-seo__feature"
            >
              <div class="tepic-seo__feature-icon">
                {{ feature.icon }}
              </div>

              <div>
                <h4>{{ feature.title }}</h4>
                <p>{{ feature.description }}</p>
              </div>
            </article>

          </div>

        </div>

      </div>

      <!-- =========================================
           SOLUCIONES
      ========================================== -->
      <div class="tepic-seo__solutions">

        <div class="tepic-seo__solutions-header">

          <div>
            <span class="tepic-seo__section-label">
              Soluciones digitales
            </span>

            <h3>
              ¿Qué tipo de página web
              <span>podemos desarrollar?</span>
            </h3>
          </div>

          <p>
            La estructura de tu sitio depende de lo que necesitas
            conseguir. Diseñamos cada proyecto alrededor de los
            objetivos de tu empresa o negocio.
          </p>

        </div>

        <div class="tepic-seo__solutions-grid">

          <article
            v-for="(solution, index) in solutions"
            :key="solution.title"
            class="tepic-seo__solution"
          >
            <div class="tepic-seo__solution-top">
              <span class="tepic-seo__solution-number">
                0{{ index + 1 }}
              </span>

              <span class="tepic-seo__solution-icon">
                {{ solution.icon }}
              </span>
            </div>

            <h4>{{ solution.title }}</h4>

            <p>
              {{ solution.description }}
            </p>
          </article>

        </div>

      </div>

      <!-- =========================================
           LOCAL / TEPIC
      ========================================== -->
      <div class="tepic-seo__local">

        <div class="tepic-seo__local-marker">
          <span class="tepic-seo__marker-dot"></span>

          <div>
            <strong>Tepic</strong>
            <span>Nayarit, México</span>
          </div>
        </div>

        <div class="tepic-seo__local-content">

          <span class="tepic-seo__section-label">
            Presencia digital local
          </span>

          <h3>
            Desarrollo web para empresas
            y negocios de Tepic.
          </h3>

          <p>
            Si tienes un negocio en Tepic y necesitas mejorar tu
            presencia en internet, podemos desarrollar un sitio que
            represente profesionalmente tu marca y facilite que las
            personas conozcan tus productos o servicios.
          </p>

          <p>
            Trabajamos proyectos para distintos sectores, desde
            profesionistas y despachos hasta comercios, hospedaje,
            construcción, salud, fitness y comercio electrónico.
          </p>

        </div>

        <div class="tepic-seo__local-cta">

          <span>
            ¿Tienes un proyecto?
          </span>

          <strong>
            Cuéntanos qué necesitas.
          </strong>

          <a
            :href="whatsappUrl"
            target="_blank"
            rel="noopener noreferrer"
          >
            Cotizar página web
            <span>→</span>
          </a>

        </div>

      </div>

    </div>
  </section>
</template>

<script setup>
const features = [
  {
    icon: '◎',
    title: 'Diseño profesional',
    description:
      'Creamos una identidad visual coherente con tu negocio y enfocada en transmitir confianza.'
  },
  {
    icon: '◇',
    title: 'Adaptable a celulares',
    description:
      'Tu página se adapta correctamente a computadoras, tablets y dispositivos móviles.'
  },
  {
    icon: '⚡',
    title: 'Rendimiento',
    description:
      'Desarrollamos sitios pensando en una navegación rápida, clara y sencilla para tus visitantes.'
  },
  {
    icon: '↗',
    title: 'Preparado para SEO',
    description:
      'Construimos una base técnica y una estructura de contenido que pueda ser entendida por buscadores.'
  }
]

const solutions = [
  {
    icon: '▦',
    title: 'Páginas empresariales',
    description:
      'Sitios corporativos para presentar tu empresa, servicios, experiencia, proyectos y formas de contacto.'
  },
  {
    icon: '◎',
    title: 'Landing pages',
    description:
      'Páginas enfocadas en presentar un servicio o campaña y dirigir al visitante hacia una acción concreta.'
  },
  {
    icon: '▣',
    title: 'Catálogos digitales',
    description:
      'Presenta tus productos, categorías, características e información comercial desde cualquier dispositivo.'
  },
  {
    icon: '◇',
    title: 'Tiendas en línea',
    description:
      'Soluciones de comercio electrónico para mostrar productos y desarrollar experiencias de compra digitales.'
  },
  {
    icon: '</>',
    title: 'Sistemas web',
    description:
      'Desarrollamos herramientas y plataformas personalizadas cuando tu negocio necesita algo más que un sitio informativo.'
  },
  {
    icon: '↗',
    title: 'Rediseño web',
    description:
      'Modernizamos sitios existentes para mejorar su presentación, experiencia de usuario y funcionamiento.'
  }
]

const whatsappUrl =
  'https://wa.me/523332341375?text=Hola%2C%20tengo%20un%20negocio%20en%20Tepic%20y%20quiero%20cotizar%20una%20p%C3%A1gina%20web.'
</script>

<style scoped>
.tepic-seo {
  overflow: hidden;

  padding: 115px 0;

  background: #ffffff;
}

.tepic-seo__container {
  width: min(1180px, calc(100% - 40px));
  margin: 0 auto;
}

/* =========================================
   INTRO
========================================= */

.tepic-seo__intro {
  display: grid;
  grid-template-columns: 1.05fr 0.75fr;
  align-items: end;
  gap: 90px;

  margin-bottom: 75px;
}

.tepic-seo__eyebrow {
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

.tepic-seo__intro h2 {
  max-width: 700px;
  margin: 0;

  color: #101828;

  font-size: clamp(36px, 4vw, 52px);
  line-height: 1.04;
  letter-spacing: -0.05em;
}

.tepic-seo__intro h2 span {
  display: block;

  color: #1677ff;
}

.tepic-seo__intro-text p {
  margin: 0;

  color: #748195;

  font-size: 12px;
  line-height: 1.8;
}

.tepic-seo__intro-text p + p {
  margin-top: 14px;
}

/* =========================================
   MAIN
========================================= */

.tepic-seo__main {
  display: grid;
  grid-template-columns: 1.05fr 0.95fr;
  align-items: center;
  gap: 85px;

  padding: 70px;

  background: #f6f9fd;

  border: 1px solid #e8eef6;
  border-radius: 25px;
}

/* =========================================
   BROWSER MOCKUP
========================================= */

.tepic-seo__visual {
  position: relative;
}

.tepic-seo__browser {
  overflow: hidden;

  background: #ffffff;

  border: 7px solid #152033;
  border-radius: 16px;

  box-shadow:
    0 35px 70px rgba(15, 23, 42, 0.16);
}

.tepic-seo__browser-top {
  min-height: 37px;

  display: flex;
  align-items: center;

  padding: 0 12px;

  background: #edf1f6;
}

.tepic-seo__dots {
  display: flex;
  gap: 5px;
}

.tepic-seo__dots span {
  width: 7px;
  height: 7px;

  border-radius: 50%;
}

.tepic-seo__dots span:nth-child(1) {
  background: #ff6969;
}

.tepic-seo__dots span:nth-child(2) {
  background: #f5c451;
}

.tepic-seo__dots span:nth-child(3) {
  background: #55c98c;
}

.tepic-seo__address {
  min-width: 145px;

  margin: 0 auto;
  padding: 4px 14px;

  color: #8996a7;
  background: #ffffff;

  border: 1px solid #dfe5ed;
  border-radius: 5px;

  text-align: center;

  font-size: 7px;
}

.tepic-seo__browser-content {
  min-height: 310px;

  padding: 22px;

  background: #ffffff;
}

/* MOCK NAV */

.tepic-seo__mock-nav {
  display: flex;
  align-items: center;
  justify-content: space-between;

  margin-bottom: 45px;
}

.tepic-seo__mock-logo {
  color: #172033;

  font-size: 8px;
  font-weight: 900;
}

.tepic-seo__mock-menu {
  display: flex;
  gap: 7px;
}

.tepic-seo__mock-menu span {
  width: 27px;
  height: 4px;

  background: #e4eaf1;

  border-radius: 10px;
}

/* MOCK HERO */

.tepic-seo__mock-hero {
  display: grid;
  grid-template-columns: 1fr 0.9fr;
  align-items: center;
  gap: 25px;
}

.tepic-seo__mock-small {
  display: block;

  margin-bottom: 10px;

  color: #1677ff;

  font-size: 6px;
  font-weight: 900;
  letter-spacing: 0.08em;
}

.tepic-seo__mock-title {
  display: grid;
  gap: 7px;
}

.tepic-seo__mock-title span {
  display: block;

  height: 11px;

  background: #172033;

  border-radius: 4px;
}

.tepic-seo__mock-title span:nth-child(1) {
  width: 95%;
}

.tepic-seo__mock-title span:nth-child(2) {
  width: 78%;
}

.tepic-seo__mock-title span:nth-child(3) {
  width: 48%;

  background: #1677ff;
}

.tepic-seo__mock-description {
  display: grid;
  gap: 5px;

  margin-top: 15px;
}

.tepic-seo__mock-description span {
  height: 5px;

  background: #dce3eb;

  border-radius: 5px;
}

.tepic-seo__mock-description span:last-child {
  width: 72%;
}

.tepic-seo__mock-button {
  width: 70px;
  height: 22px;

  margin-top: 17px;

  background: #1677ff;

  border-radius: 5px;
}

.tepic-seo__mock-image {
  min-height: 180px;

  display: grid;
  place-items: center;

  background:
    linear-gradient(
      145deg,
      #edf5ff,
      #dcecff
    );

  border-radius: 12px;
}

.tepic-seo__mock-window {
  width: 75%;
  height: 100px;

  padding: 15px;

  background: #ffffff;

  border-radius: 9px;

  box-shadow:
    0 15px 30px rgba(22, 119, 255, 0.12);
}

.tepic-seo__mock-window span {
  display: block;

  height: 6px;

  margin-bottom: 8px;

  background: #dce6f2;

  border-radius: 5px;
}

.tepic-seo__mock-window span:nth-child(1) {
  width: 40%;

  background: #1677ff;
}

.tepic-seo__mock-window span:nth-child(2) {
  width: 85%;
}

.tepic-seo__mock-window span:nth-child(3) {
  width: 65%;
}

/* FLOATING */

.tepic-seo__floating {
  position: absolute;

  display: flex;
  align-items: center;
  gap: 9px;

  padding: 10px 13px;

  background: #ffffff;

  border: 1px solid #e4eaf2;
  border-radius: 10px;

  box-shadow:
    0 14px 30px rgba(15, 23, 42, 0.11);
}

.tepic-seo__floating--seo {
  top: 30px;
  right: -30px;
}

.tepic-seo__floating--responsive {
  bottom: 25px;
  left: -30px;
}

.tepic-seo__floating-icon {
  width: 29px;
  height: 29px;

  display: grid;
  place-items: center;

  color: #ffffff;
  background: #1677ff;

  border-radius: 7px;

  font-size: 10px;
  font-weight: 900;
}

.tepic-seo__floating span,
.tepic-seo__floating strong {
  display: block;
}

.tepic-seo__floating span {
  margin-bottom: 1px;

  color: #8a96a6;

  font-size: 7px;
}

.tepic-seo__floating strong {
  color: #1b2738;

  font-size: 9px;
}

/* =========================================
   CONTENT
========================================= */

.tepic-seo__section-label {
  display: inline-block;

  color: #1677ff;

  font-size: 9px;
  font-weight: 850;
  letter-spacing: 0.08em;
  text-transform: uppercase;
}

.tepic-seo__content h3,
.tepic-seo__solutions h3,
.tepic-seo__local h3 {
  margin: 12px 0 17px;

  color: #101828;

  font-size: clamp(28px, 3vw, 39px);
  line-height: 1.08;
  letter-spacing: -0.045em;
}

.tepic-seo__content h3 span,
.tepic-seo__solutions h3 span {
  color: #1677ff;
}

.tepic-seo__lead {
  margin: 0;

  color: #758296;

  font-size: 11px;
  line-height: 1.75;
}

/* FEATURES */

.tepic-seo__features {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px 18px;

  margin-top: 30px;
}

.tepic-seo__feature {
  display: flex;
  align-items: flex-start;
  gap: 11px;
}

.tepic-seo__feature-icon {
  flex: 0 0 auto;

  width: 35px;
  height: 35px;

  display: grid;
  place-items: center;

  color: #1677ff;
  background: #e9f3ff;

  border-radius: 9px;

  font-size: 10px;
  font-weight: 900;
}

.tepic-seo__feature h4 {
  margin: 2px 0 5px;

  color: #1b2738;

  font-size: 10px;
}

.tepic-seo__feature p {
  margin: 0;

  color: #8490a1;

  font-size: 8px;
  line-height: 1.55;
}

/* =========================================
   SOLUTIONS
========================================= */

.tepic-seo__solutions {
  padding-top: 105px;
}

.tepic-seo__solutions-header {
  display: grid;
  grid-template-columns: 1fr 0.6fr;
  align-items: end;
  gap: 90px;

  margin-bottom: 40px;
}

.tepic-seo__solutions-header h3 {
  max-width: 600px;

  margin-bottom: 0;
}

.tepic-seo__solutions-header > p {
  margin: 0;

  color: #7c899b;

  font-size: 11px;
  line-height: 1.7;
}

.tepic-seo__solutions-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 13px;
}

.tepic-seo__solution {
  min-height: 205px;

  padding: 25px;

  background: #ffffff;

  border: 1px solid #e5ebf3;
  border-radius: 15px;

  transition:
    transform 0.2s ease,
    border-color 0.2s ease,
    box-shadow 0.2s ease;
}

.tepic-seo__solution:hover {
  transform: translateY(-4px);

  border-color: #c9ddfb;

  box-shadow:
    0 18px 40px rgba(15, 23, 42, 0.07);
}

.tepic-seo__solution-top {
  display: flex;
  align-items: center;
  justify-content: space-between;

  margin-bottom: 28px;
}

.tepic-seo__solution-number {
  color: #a0acba;

  font-size: 8px;
  font-weight: 800;
}

.tepic-seo__solution-icon {
  width: 35px;
  height: 35px;

  display: grid;
  place-items: center;

  color: #1677ff;
  background: #edf5ff;

  border-radius: 9px;

  font-size: 10px;
  font-weight: 900;
}

.tepic-seo__solution h4 {
  margin: 0 0 8px;

  color: #172033;

  font-size: 13px;
}

.tepic-seo__solution p {
  margin: 0;

  color: #8390a2;

  font-size: 9px;
  line-height: 1.65;
}

/* =========================================
   LOCAL
========================================= */

.tepic-seo__local {
  display: grid;
  grid-template-columns: 0.55fr 1.2fr 0.65fr;
  align-items: center;
  gap: 45px;

  margin-top: 90px;
  padding: 45px;

  background:
    radial-gradient(
      circle at 5% 50%,
      rgba(22, 119, 255, 0.15),
      transparent 30%
    ),
    #07111f;

  border-radius: 22px;
}

.tepic-seo__local-marker {
  display: flex;
  align-items: center;
  gap: 12px;
}

.tepic-seo__marker-dot {
  position: relative;

  width: 45px;
  height: 45px;

  flex: 0 0 auto;

  background: #1677ff;

  border: 9px solid #16365e;
  border-radius: 50%;

  box-shadow:
    0 0 0 8px rgba(22, 119, 255, 0.08);
}

.tepic-seo__local-marker strong,
.tepic-seo__local-marker div > span {
  display: block;
}

.tepic-seo__local-marker strong {
  color: #ffffff;

  font-size: 14px;
}

.tepic-seo__local-marker div > span {
  margin-top: 2px;

  color: #77879c;

  font-size: 8px;
}

.tepic-seo__local-content h3 {
  margin: 9px 0 12px;

  color: #ffffff;

  font-size: 26px;
}

.tepic-seo__local-content p {
  margin: 0;

  color: #8391a5;

  font-size: 9px;
  line-height: 1.7;
}

.tepic-seo__local-content p + p {
  margin-top: 8px;
}

/* LOCAL CTA */

.tepic-seo__local-cta {
  padding-left: 30px;

  border-left: 1px solid rgba(255, 255, 255, 0.08);
}

.tepic-seo__local-cta > span,
.tepic-seo__local-cta > strong {
  display: block;
}

.tepic-seo__local-cta > span {
  color: #718197;

  font-size: 8px;
}

.tepic-seo__local-cta > strong {
  margin-top: 4px;

  color: #ffffff;

  font-size: 13px;
}

.tepic-seo__local-cta a {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px;

  margin-top: 17px;
  padding: 10px 13px;

  color: #ffffff;
  background: #1677ff;

  border-radius: 9px;

  text-decoration: none;

  font-size: 9px;
  font-weight: 800;

  transition:
    transform 0.2s ease,
    background 0.2s ease;
}

.tepic-seo__local-cta a:hover {
  transform: translateY(-2px);

  background: #0869ee;
}

/* =========================================
   RESPONSIVE
========================================= */

@media (max-width: 1000px) {
  .tepic-seo__main {
    gap: 55px;
    padding: 50px;
  }

  .tepic-seo__floating--seo {
    right: -15px;
  }

  .tepic-seo__floating--responsive {
    left: -15px;
  }

  .tepic-seo__local {
    grid-template-columns: 0.5fr 1.5fr;
  }

  .tepic-seo__local-cta {
    grid-column: 1 / -1;

    padding-top: 25px;
    padding-left: 0;

    border-top: 1px solid rgba(255, 255, 255, 0.08);
    border-left: 0;
  }
}

@media (max-width: 850px) {
  .tepic-seo__intro,
  .tepic-seo__main,
  .tepic-seo__solutions-header {
    grid-template-columns: 1fr;
  }

  .tepic-seo__intro {
    gap: 25px;
  }

  .tepic-seo__main {
    gap: 60px;
  }

  .tepic-seo__solutions-header {
    gap: 15px;
  }

  .tepic-seo__solutions-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 600px) {
  .tepic-seo {
    padding: 80px 0;
  }

  .tepic-seo__intro {
    margin-bottom: 50px;
  }

  .tepic-seo__main {
    padding: 25px 18px;

    border-radius: 18px;
  }

  .tepic-seo__browser-content {
    min-height: 250px;

    padding: 17px;
  }

  .tepic-seo__mock-hero {
    grid-template-columns: 1fr;
  }

  .tepic-seo__mock-image {
    display: none;
  }

  .tepic-seo__floating {
    display: none;
  }

  .tepic-seo__features {
    grid-template-columns: 1fr;
  }

  .tepic-seo__solutions {
    padding-top: 75px;
  }

  .tepic-seo__solutions-grid {
    grid-template-columns: 1fr;
  }

  .tepic-seo__solution {
    min-height: 0;
  }

  .tepic-seo__local {
    grid-template-columns: 1fr;
    gap: 30px;

    margin-top: 65px;
    padding: 30px 23px;
  }

  .tepic-seo__local-cta {
    grid-column: auto;
  }
}
</style>