<template>
  <section
    id="servicios"
    class="tepic-services"
  >
    <div class="tepic-services__container">

      <!-- Header -->
      <div class="tepic-services__header">
        <div class="tepic-services__heading">
          <span class="tepic-services__eyebrow">
            Nuestros servicios
          </span>

          <h2>
            Soluciones web para hacer crecer
            <span>tu negocio en Tepic</span>
          </h2>
        </div>

        <p>
          Diseñamos y desarrollamos soluciones digitales enfocadas
          en la presencia, crecimiento y necesidades reales de tu negocio.
        </p>
      </div>

      <!-- Grid -->
      <div class="tepic-services__grid">

        <article
          v-for="service in services"
          :key="service.title"
          class="tepic-services__card"
        >
          <div class="tepic-services__icon">
            {{ service.icon }}
          </div>

          <h3>
            {{ service.title }}
          </h3>

          <p>
            {{ service.description }}
          </p>

          <a
            :href="service.link"
            class="tepic-services__link"
          >
            Saber más
            <span>→</span>
          </a>

          <div class="tepic-services__card-glow"></div>
        </article>

      </div>

      <!-- Bottom -->
      <div class="tepic-services__bottom">
        <div>
          <span>¿Necesitas algo más específico?</span>

          <strong>
            También desarrollamos soluciones web personalizadas.
          </strong>
        </div>

        <a
          :href="whatsappUrl"
          target="_blank"
          rel="noopener noreferrer"
        >
          Cuéntanos tu proyecto
          <span>→</span>
        </a>
      </div>

    </div>
  </section>
</template>

<script setup>
const services = [
  {
    icon: '▣',
    title: 'Páginas web',
    description:
      'Sitios profesionales para empresas, negocios y profesionistas que buscan una presencia digital moderna.',
    link: '#contacto'
  },
  {
    icon: '▤',
    title: 'Landing pages',
    description:
      'Páginas enfocadas en presentar un servicio, captar prospectos y convertir visitantes en clientes.',
    link: '#contacto'
  },
  {
    icon: '🛒',
    title: 'Tiendas en línea',
    description:
      'Catálogos y comercios electrónicos para mostrar productos y comenzar a vender por internet.',
    link: '#contacto'
  },
  {
    icon: '⚙',
    title: 'Sistemas web',
    description:
      'Desarrollo de plataformas y herramientas personalizadas para procesos específicos de tu empresa.',
    link: '#contacto'
  },
  {
    icon: '↗',
    title: 'SEO',
    description:
      'Estructura y optimización técnica para ayudar a que tu sitio pueda ser encontrado en buscadores.',
    link: '#contacto'
  },
  {
    icon: '☁',
    title: 'Hosting y dominios',
    description:
      'Te ayudamos con la infraestructura necesaria para mantener tu proyecto disponible en internet.',
    link: '#contacto'
  }
]

const whatsappUrl =
  'https://wa.me/523332341375?text=Hola%2C%20vi%20sus%20servicios%20web%20en%20Tepic%20y%20me%20gustar%C3%ADa%20cotizar%20un%20proyecto.'
</script>

<style scoped>
.tepic-services {
  padding: 105px 0 110px;

  background: #f8fbff;
}

.tepic-services__container {
  width: min(1180px, calc(100% - 40px));
  margin: 0 auto;
}

/* HEADER */

.tepic-services__header {
  display: grid;
  grid-template-columns: 1.35fr 0.65fr;
  align-items: end;
  gap: 70px;

  margin-bottom: 48px;
}

.tepic-services__eyebrow {
  display: inline-flex;

  margin-bottom: 14px;
  padding: 7px 11px;

  color: #1677ff;
  background: #eaf4ff;

  border: 1px solid #d7e9ff;
  border-radius: 999px;

  font-size: 10px;
  font-weight: 850;
  letter-spacing: 0.08em;
  text-transform: uppercase;
}

.tepic-services__heading h2 {
  max-width: 690px;

  margin: 0;

  color: #101828;

  font-size: clamp(33px, 4vw, 49px);
  line-height: 1.06;
  letter-spacing: -0.045em;
}

.tepic-services__heading h2 span {
  color: #1677ff;
}

.tepic-services__header > p {
  margin: 0 0 5px;

  color: #6d7b8f;

  font-size: 14px;
  line-height: 1.7;
}

/* GRID */

.tepic-services__grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 16px;
}

.tepic-services__card {
  position: relative;
  overflow: hidden;

  min-height: 300px;
  padding: 30px;

  background: #ffffff;

  border: 1px solid #e2eaf3;
  border-radius: 18px;

  box-shadow: 0 10px 35px rgba(15, 23, 42, 0.035);

  transition:
    transform 0.25s ease,
    box-shadow 0.25s ease,
    border-color 0.25s ease;
}

.tepic-services__card:hover {
  transform: translateY(-7px);

  border-color: #c5ddff;

  box-shadow: 0 22px 50px rgba(15, 23, 42, 0.09);
}

.tepic-services__icon {
  position: relative;
  z-index: 2;

  width: 52px;
  height: 52px;

  display: grid;
  place-items: center;

  color: #1677ff;
  background: #edf5ff;

  border: 1px solid #dbeaff;
  border-radius: 14px;

  font-size: 21px;
  font-weight: 900;

  transition:
    color 0.25s ease,
    background 0.25s ease;
}

.tepic-services__card:hover .tepic-services__icon {
  color: #ffffff;
  background: #1677ff;
}

.tepic-services__card h3 {
  position: relative;
  z-index: 2;

  margin: 25px 0 11px;

  color: #172033;

  font-size: 18px;
  font-weight: 800;
  letter-spacing: -0.02em;
}

.tepic-services__card p {
  position: relative;
  z-index: 2;

  min-height: 72px;
  margin: 0;

  color: #778598;

  font-size: 12px;
  line-height: 1.7;
}

.tepic-services__link {
  position: absolute;
  z-index: 3;
  left: 30px;
  bottom: 27px;

  display: inline-flex;
  align-items: center;
  gap: 7px;

  color: #1677ff;

  text-decoration: none;
  font-size: 11px;
  font-weight: 800;
}

.tepic-services__link span {
  transition: transform 0.2s ease;
}

.tepic-services__link:hover span {
  transform: translateX(4px);
}

.tepic-services__card-glow {
  position: absolute;
  right: -80px;
  bottom: -100px;

  width: 180px;
  height: 180px;

  background: rgba(22, 119, 255, 0.08);

  border-radius: 50%;
  filter: blur(10px);

  transition: transform 0.3s ease;
}

.tepic-services__card:hover .tepic-services__card-glow {
  transform: scale(1.5);
}

/* BOTTOM */

.tepic-services__bottom {
  margin-top: 24px;
  padding: 22px 26px;

  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 30px;

  background: #ffffff;

  border: 1px solid #e2eaf3;
  border-radius: 16px;
}

.tepic-services__bottom span,
.tepic-services__bottom strong {
  display: block;
}

.tepic-services__bottom > div > span {
  margin-bottom: 3px;

  color: #8996a8;

  font-size: 10px;
}

.tepic-services__bottom strong {
  color: #1e293b;

  font-size: 13px;
}

.tepic-services__bottom > a {
  display: inline-flex;
  align-items: center;
  gap: 9px;

  padding: 11px 16px;

  color: #1677ff;
  background: #edf5ff;

  border-radius: 10px;

  text-decoration: none;
  font-size: 11px;
  font-weight: 800;

  white-space: nowrap;
}

@media (max-width: 900px) {
  .tepic-services__header {
    grid-template-columns: 1fr;
    gap: 20px;
  }

  .tepic-services__header > p {
    max-width: 650px;
  }

  .tepic-services__grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 600px) {
  .tepic-services {
    padding: 75px 0;
  }

  .tepic-services__grid {
    grid-template-columns: 1fr;
  }

  .tepic-services__card {
    min-height: 280px;
  }

  .tepic-services__bottom {
    align-items: stretch;
    flex-direction: column;
  }

  .tepic-services__bottom > a {
    justify-content: center;
  }
}
</style>