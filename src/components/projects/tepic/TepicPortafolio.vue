<template>
  <section
    id="proyectos"
    class="tepic-portfolio"
  >
    <div class="tepic-portfolio__container">

      <!-- HEADER -->
      <div class="tepic-portfolio__header">
        <div>
          <span class="tepic-portfolio__eyebrow">
            Nuestro trabajo
          </span>

          <h2>
            Podemos crear la web que
            <span>tu negocio necesita.</span>
          </h2>
        </div>

        <p>
          Explora algunos de nuestros proyectos y conceptos.
          Desarrollamos sitios para empresas, profesionistas,
          comercios y diferentes tipos de negocio.
        </p>
      </div>

      <!-- FILTROS -->
      <div class="tepic-portfolio__filters">
        <button
          v-for="filter in filters"
          :key="filter.value"
          type="button"
          :class="[
            'tepic-portfolio__filter',
            { 'is-active': activeFilter === filter.value }
          ]"
          @click="activeFilter = filter.value"
        >
          {{ filter.label }}
        </button>
      </div>

      <!-- GRID -->
      <TransitionGroup
        name="portfolio"
        tag="div"
        class="tepic-portfolio__grid"
      >
        <article
          v-for="project in filteredProjects"
          :key="project.id"
          class="tepic-portfolio__card"
        >
          <!-- IMAGEN -->
          <div class="tepic-portfolio__image-wrapper">

            <img
              :src="project.image"
              :alt="project.alt"
              class="tepic-portfolio__image"
            >

            <!-- categoría flotante -->
            <span class="tepic-portfolio__category">
              {{ project.categoryLabel }}
            </span>

            <!-- overlay -->
            <div class="tepic-portfolio__overlay">
              <div>
                <span>Proyecto Webcats</span>

                <strong>
                  {{ project.title }}
                </strong>
              </div>
            </div>

          </div>

          <!-- INFO -->
          <div class="tepic-portfolio__content">

            <div class="tepic-portfolio__meta">
              {{ project.business }}
            </div>

            <h3>
              {{ project.title }}
            </h3>

            <p>
              {{ project.description }}
            </p>

            <div class="tepic-portfolio__bottom">

                <div class="tepic-portfolio__tags">
                    <span
                    v-for="tag in project.tags"
                    :key="tag"            
                    >
                    {{ tag }}
                </span>
            </div>

            <a
                :href="project.link"
                target="_blank"
                rel="noopener noreferrer"
                class="tepic-portfolio__project-button"
                :aria-label="`Ver proyecto ${project.title}`"
            >
                Ver proyecto
                <span>↗</span>
            </a>
          </div>

          </div>
        </article>
      </TransitionGroup>

      <!-- CTA -->
      <div class="tepic-portfolio__cta">

        <div>
          <span>
            ¿No ves tu giro aquí?
          </span>

          <h3>
            Podemos diseñar una solución para tu negocio.
          </h3>
        </div>

        <a
          :href="whatsappUrl"
          target="_blank"
          rel="noopener noreferrer"
        >
          Cuéntanos tu idea
          <span>→</span>
        </a>

      </div>

    </div>
  </section>
</template>

<script setup>
import { computed, ref } from 'vue'

import aluminiosImage from '../../../assets/projects/tepic/aluminios.png'
import arquitecturaImage from '../../../assets/projects/tepic/arquitectura.png'
import auralisImage from '../../../assets/projects/tepic/auralis.png'
import despachoImage from '../../../assets/projects/tepic/despacho-juridico.png'
import ecommerceImage from '../../../assets/projects/tepic/e-commerce.png'
import finanzasImage from '../../../assets/projects/tepic/finanzas.png'
import gymImage from '../../../assets/projects/tepic/gym.png'
import hospedajeImage from '../../../assets/projects/tepic/hospedaje.png'
import nutriologaImage from '../../../assets/projects/tepic/nutriologa.png'

const activeFilter = ref('todos')

const filters = [
  {
    label: 'Todos',
    value: 'todos'
  },
  {
    label: 'Empresas',
    value: 'empresas'
  },
  {
    label: 'Profesionistas',
    value: 'profesionistas'
  },
  {
    label: 'E-commerce',
    value: 'ecommerce'
  },
  {
    label: 'Creativos',
    value: 'creativos'
  }
]

const projects = [
  {
    id: 1,
    title: 'Despacho de arquitectura',
    business: 'Arquitectura',
    category: 'profesionistas',
    categoryLabel: 'Arquitectura',
    image: arquitecturaImage,
    alt: 'Diseño de página web para despacho de arquitectura',
    description:
      'Una presencia digital elegante para presentar proyectos, servicios y experiencia profesional.',
    tags: ['Portafolio', 'Servicios', 'Responsive'],
    link: 'https://www.webcats.mx/projects/arquitectura/'
  },

  {
    id: 2,
    title: 'Despacho jurídico',
    business: 'Servicios profesionales',
    category: 'profesionistas',
    categoryLabel: 'Jurídico',
    image: despachoImage,
    alt: 'Diseño de página web para despacho jurídico',
    description:
      'Sitio profesional para presentar áreas de práctica, experiencia y facilitar el contacto con clientes.',
    tags: ['Corporativo', 'Servicios', 'Contacto'],
    link: 'https://www.webcats.mx/projects/abogados/'
  },

  {
    id: 3,
    title: 'Agencia financiera',
    business: 'Finanzas',
    category: 'empresas',
    categoryLabel: 'Finanzas',
    image: finanzasImage,
    alt: 'Diseño de página web para agencia financiera',
    description:
      'Experiencia corporativa enfocada en comunicar confianza, servicios financieros y atención profesional.',
    tags: ['Corporativo', 'Finanzas', 'UI/UX'],
    link: 'https://www.webcats.mx/projects/financiera/'
  },

  {
    id: 4,
    title: 'Hospedaje y turismo',
    business: 'Turismo',
    category: 'empresas',
    categoryLabel: 'Hospedaje',
    image: hospedajeImage,
    alt: 'Diseño de página web para hospedaje y turismo',
    description:
      'Sitio visual para presentar instalaciones, habitaciones, servicios y opciones de contacto o reservación.',
    tags: ['Turismo', 'Galería', 'Responsive'],
    link: 'https://www.webcats.mx/projects/hospedajes/'
  },

  {
    id: 5,
    title: 'Nutrióloga',
    business: 'Salud y bienestar',
    category: 'profesionistas',
    categoryLabel: 'Nutrición',
    image: nutriologaImage,
    alt: 'Diseño de página web para nutrióloga',
    description:
      'Página profesional para presentar servicios, metodología, resultados y facilitar la solicitud de consultas.',
    tags: ['Salud', 'Personal', 'Servicios'],
    link: 'https://www.webcats.mx/projects/nutriologa/'
  },

  {
    id: 6,
    title: 'Gimnasio',
    business: 'Fitness',
    category: 'empresas',
    categoryLabel: 'Fitness',
    image: gymImage,
    alt: 'Diseño de página web para gimnasio',
    description:
      'Una experiencia visual dinámica para mostrar instalaciones, entrenamientos, membresías y servicios.',
    tags: ['Fitness', 'Landing', 'Conversión'],
    link: 'https://www.webcats.mx/projects/gym/'
  },

  {
    id: 7,
    title: 'Tienda en línea',
    business: 'Comercio electrónico',
    category: 'ecommerce',
    categoryLabel: 'E-commerce',
    image: ecommerceImage,
    alt: 'Diseño y desarrollo de tienda en línea',
    description:
      'Catálogo digital diseñado para presentar productos y construir una experiencia de compra moderna.',
    tags: ['E-commerce', 'Productos', 'Catálogo'],
    link: 'https://www.webcats.mx/projects/catalogo/'
  },

  {
    id: 8,
    title: 'Empresa de aluminios',
    business: 'Industria y construcción',
    category: 'empresas',
    categoryLabel: 'Industrial',
    image: aluminiosImage,
    alt: 'Diseño de página web para empresa de aluminios',
    description:
      'Sitio empresarial para presentar productos, trabajos realizados y soluciones para construcción.',
    tags: ['Industrial', 'Empresa', 'Servicios'],
    link: 'https://www.webcats.mx/projects/vidriosaluminio/'
  },

  {
    id: 9,
    title: 'Auralis',
    business: 'Proyecto creativo',
    category: 'creativos',
    categoryLabel: 'Creativo',
    image: auralisImage,
    alt: 'Diseño web para proyecto creativo Universo Auralis',
    description:
      'Experiencia digital conceptual enfocada en identidad visual, narrativa y presentación de un universo creativo.',
    tags: ['Creativo', 'Experiencia', 'UI/UX'],
    link: 'https://www.universoauralis.com/'
  }
]

const filteredProjects = computed(() => {
  if (activeFilter.value === 'todos') {
    return projects
  }

  return projects.filter(
    project => project.category === activeFilter.value
  )
})

const whatsappUrl =
  'https://wa.me/521XXXXXXXXXX?text=Hola%2C%20vi%20sus%20proyectos%20de%20dise%C3%B1o%20web%20y%20quiero%20cotizar%20una%20p%C3%A1gina%20para%20mi%20negocio.'
</script>

<style scoped>
.tepic-portfolio {
  overflow: hidden;

  padding: 115px 0;

  color: #ffffff;

  background:
    radial-gradient(
      circle at 90% 10%,
      rgba(22, 119, 255, 0.15),
      transparent 25%
    ),
    #07111f;
}

.tepic-portfolio__container {
  width: min(1180px, calc(100% - 40px));
  margin: 0 auto;
}

/* =============================
   HEADER
============================= */

.tepic-portfolio__header {
  display: grid;
  grid-template-columns: 1.2fr 0.7fr;
  align-items: end;
  gap: 80px;

  margin-bottom: 35px;
}

.tepic-portfolio__eyebrow {
  display: inline-flex;

  margin-bottom: 15px;
  padding: 7px 11px;

  color: #65a7ff;
  background: rgba(22, 119, 255, 0.12);

  border: 1px solid rgba(79, 151, 255, 0.2);
  border-radius: 999px;

  font-size: 10px;
  font-weight: 850;
  letter-spacing: 0.08em;
  text-transform: uppercase;
}

.tepic-portfolio__header h2 {
  max-width: 670px;
  margin: 0;

  color: #ffffff;

  font-size: clamp(36px, 4vw, 52px);
  line-height: 1.03;
  letter-spacing: -0.05em;
}

.tepic-portfolio__header h2 span {
  color: #4e9cff;
}

.tepic-portfolio__header > p {
  margin: 0;

  color: #8492a6;

  font-size: 13px;
  line-height: 1.75;
}

/* =============================
   FILTERS
============================= */

.tepic-portfolio__filters {
  display: flex;
  flex-wrap: wrap;
  gap: 8px;

  margin-bottom: 35px;
}

.tepic-portfolio__filter {
  padding: 9px 15px;

  color: #8290a4;
  background: rgba(255, 255, 255, 0.04);

  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 999px;

  font-size: 10px;
  font-weight: 750;

  cursor: pointer;

  transition:
    color 0.2s ease,
    background 0.2s ease,
    border-color 0.2s ease;
}

.tepic-portfolio__filter:hover {
  color: #ffffff;

  border-color: rgba(78, 156, 255, 0.45);
}

.tepic-portfolio__filter.is-active {
  color: #ffffff;
  background: #1677ff;

  border-color: #1677ff;

  box-shadow: 0 8px 25px rgba(22, 119, 255, 0.22);
}

/* =============================
   GRID
============================= */

.tepic-portfolio__grid {
  display: grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: 18px;
}

.tepic-portfolio__card {
  overflow: hidden;

  background: rgba(255, 255, 255, 0.035);

  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 18px;

  transition:
    transform 0.25s ease,
    border-color 0.25s ease,
    box-shadow 0.25s ease;
}

.tepic-portfolio__card:hover {
  transform: translateY(-6px);

  border-color: rgba(78, 156, 255, 0.3);

  box-shadow: 0 25px 55px rgba(0, 0, 0, 0.2);
}

/* IMAGE */

.tepic-portfolio__image-wrapper {
  position: relative;
  overflow: hidden;

  height: 220px;

  background: #101a29;
}

.tepic-portfolio__image {
  width: 100%;
  height: 100%;

  display: block;

  object-fit: cover;
  object-position: top center;

  transition:
    transform 0.45s ease,
    filter 0.45s ease;
}

.tepic-portfolio__card:hover .tepic-portfolio__image {
  transform: scale(1.035);
}

.tepic-portfolio__category {
  position: absolute;
  z-index: 4;

  top: 17px;
  left: 17px;

  padding: 7px 10px;

  color: #ffffff;
  background: rgba(7, 17, 31, 0.8);

  border: 1px solid rgba(255, 255, 255, 0.15);
  border-radius: 999px;

  backdrop-filter: blur(10px);

  font-size: 8px;
  font-weight: 800;
  letter-spacing: 0.05em;
  text-transform: uppercase;
}

/* OVERLAY */

.tepic-portfolio__overlay {
  position: absolute;
  inset: 0;

  display: flex;
  align-items: flex-end;

  padding: 25px;

  opacity: 0;

  background:
    linear-gradient(
      to top,
      rgba(7, 17, 31, 0.9),
      transparent 60%
    );

  transition: opacity 0.3s ease;
}

.tepic-portfolio__card:hover .tepic-portfolio__overlay {
  opacity: 1;
}

.tepic-portfolio__overlay span,
.tepic-portfolio__overlay strong {
  display: block;
}

.tepic-portfolio__overlay span {
  margin-bottom: 4px;

  color: #73afff;

  font-size: 8px;
  font-weight: 800;
  text-transform: uppercase;
}

.tepic-portfolio__overlay strong {
  color: #ffffff;

  font-size: 18px;
}

/* =============================
   CONTENT
============================= */

.tepic-portfolio__content {
  padding: 25px;
}

.tepic-portfolio__meta {
  margin-bottom: 7px;

  color: #4e9cff;

  font-size: 8px;
  font-weight: 850;
  letter-spacing: 0.08em;
  text-transform: uppercase;
}

.tepic-portfolio__content h3 {
  margin: 0 0 9px;

  color: #ffffff;

  font-size: 20px;
  letter-spacing: -0.025em;
}

.tepic-portfolio__content > p {
  min-height: 53px;
  margin: 0;

  color: #8391a5;

  font-size: 10px;
  line-height: 1.65;
}

/* BOTTOM */

.tepic-portfolio__project-button {
  flex: 0 0 auto;

  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 7px;

  padding: 9px 12px;

  color: #ffffff;
  background: rgba(22, 119, 255, 0.1);

  border: 1px solid rgba(78, 156, 255, 0.2);
  border-radius: 8px;

  text-decoration: none;

  font-size: 8px;
  font-weight: 800;

  white-space: nowrap;

  transition:
    background 0.2s ease,
    border-color 0.2s ease,
    transform 0.2s ease;
}

.tepic-portfolio__project-button span {
  font-size: 10px;

  transition: transform 0.2s ease;
}

.tepic-portfolio__project-button:hover {
  background: #1677ff;
  border-color: #1677ff;

  transform: translateY(-1px);
}

.tepic-portfolio__project-button:hover span {
  transform: translate(2px, -2px);
}

.tepic-portfolio__tags {
  display: flex;
  flex-wrap: wrap;
  gap: 5px;
}

.tepic-portfolio__tags span {
  padding: 5px 8px;

  color: #77869b;
  background: rgba(255, 255, 255, 0.04);

  border-radius: 6px;

  font-size: 7px;
}


/* =============================
   CTA
============================= */

.tepic-portfolio__cta {
  margin-top: 30px;
  padding: 27px 30px;

  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 30px;

  background:
    linear-gradient(
      110deg,
      rgba(22, 119, 255, 0.13),
      rgba(22, 119, 255, 0.04)
    );

  border: 1px solid rgba(78, 156, 255, 0.18);
  border-radius: 17px;
}

.tepic-portfolio__cta > div > span {
  color: #7f8da1;

  font-size: 9px;
}

.tepic-portfolio__cta h3 {
  margin: 4px 0 0;

  color: #ffffff;

  font-size: 15px;
}

.tepic-portfolio__cta > a {
  display: inline-flex;
  align-items: center;
  gap: 9px;

  padding: 12px 17px;

  color: #ffffff;
  background: #1677ff;

  border-radius: 10px;

  text-decoration: none;
  font-size: 10px;
  font-weight: 800;

  white-space: nowrap;
}

/* TRANSITION */

.portfolio-enter-active,
.portfolio-leave-active {
  transition: all 0.25s ease;
}

.portfolio-enter-from,
.portfolio-leave-to {
  opacity: 0;
  transform: translateY(15px);
}

/* =============================
   RESPONSIVE
============================= */

@media (max-width: 950px) {
  .tepic-portfolio__header {
    grid-template-columns: 1fr;
    gap: 20px;
  }

  .tepic-portfolio__grid {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .tepic-portfolio__image-wrapper {
    height: 230px;
  }
}

@media (max-width: 650px) {
  .tepic-portfolio {
    padding: 80px 0;
  }

  .tepic-portfolio__grid {
    grid-template-columns: 1fr;
  }

  .tepic-portfolio__image-wrapper {
    height: 230px;
  }

  .tepic-portfolio__content > p {
    min-height: 0;
  }

  .tepic-portfolio__bottom {
    align-items: flex-start;
    flex-direction: column;
  }

  .tepic-portfolio__project-button {
    width: 100%;
  }

  .tepic-portfolio__cta {
    align-items: stretch;
    flex-direction: column;
  }

  .tepic-portfolio__cta > a {
    justify-content: center;
  }
}

</style>