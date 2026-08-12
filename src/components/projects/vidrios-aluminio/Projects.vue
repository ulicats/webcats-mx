<template>
  <section
    id="proyectos"
    class="projects-section"
  >
    <!-- =====================================================
         ENCABEZADO
    ====================================================== -->
    <div class="projects-heading">
      <div>
        <span class="section-kicker">
          Proyectos
        </span>

        <h2>
          Trabajos que
          <span>hablan por sí solos.</span>
        </h2>
      </div>

      <p>
        Una selección de proyectos realizados en vidrio y aluminio.
        Explora la galería completa para ver todos los trabajos
        organizados por categoría.
      </p>
    </div>


    <!-- =====================================================
         FILTROS HOME
    ====================================================== -->
    <div class="projects-filter">
      <button
        v-for="filter in filters"
        :key="filter.value"
        :class="{ active: activeFilter === filter.value }"
        @click="activeFilter = filter.value"
      >
        {{ filter.label }}
      </button>
    </div>


    <!-- =====================================================
         PROYECTOS DESTACADOS
    ====================================================== -->
    <div class="projects-grid">
      <article
        v-for="(project, index) in visibleProjects"
        :key="project.path"
        class="project-panel"
        :class="getPanelClass(index)"
        @click="openGallery(project)"
      >
        <img
          :src="project.image"
          :alt="project.title"
          loading="lazy"
        />

        <div class="project-panel__reflection"></div>

        <div class="project-panel__overlay">
          <div>
            <span>
              {{ project.categoryLabel }}
            </span>

            <h3>
              {{ project.title }}
            </h3>
          </div>

          <button
            type="button"
            aria-label="Ver proyecto"
            @click.stop="openGallery(project)"
          >
            ↗
          </button>
        </div>
      </article>
    </div>


    <!-- =====================================================
         VER TODOS
    ====================================================== -->
    <div
      v-if="filteredProjects.length > previewLimit"
      class="projects-more"
    >
      <div>
        <span>
          {{ filteredProjects.length }}
        </span>

        <p>
          proyectos disponibles en esta categoría
        </p>
      </div>

      <button
        type="button"
        @click="openGallery()"
      >
        Ver todos los proyectos
        <span>↗</span>
      </button>
    </div>


    <!-- =====================================================
         VACÍO
    ====================================================== -->
    <div
      v-if="filteredProjects.length === 0"
      class="projects-empty"
    >
      No hay fotografías disponibles en esta categoría.
    </div>


    <!-- =====================================================
         GALERÍA COMPLETA
    ====================================================== -->
    <Transition name="gallery">
      <div
        v-if="galleryOpen"
        class="gallery-modal"
      >
        <!-- HEADER GALERÍA -->
        <div class="gallery-modal__header">
          <div>
            <span>
              Galería de proyectos
            </span>

            <h3>
              Explora todos los trabajos
            </h3>
          </div>

          <button
            class="gallery-modal__close"
            type="button"
            aria-label="Cerrar galería"
            @click="closeGallery"
          >
            ×
          </button>
        </div>


        <!-- CATEGORÍAS -->
        <div class="gallery-modal__filters">
          <button
            v-for="filter in filters"
            :key="`modal-${filter.value}`"
            :class="{
              active:
                galleryFilter ===
                filter.value
            }"
            @click="galleryFilter = filter.value"
          >
            {{ filter.label }}

            <span>
              {{ getCategoryCount(filter.value) }}
            </span>
          </button>
        </div>


        <!-- GALERÍA -->
        <div class="gallery-modal__body">
          <div class="gallery-modal__grid">
            <article
              v-for="project in galleryProjects"
              :key="`gallery-${project.path}`"
              class="gallery-card"
              @click="openImage(project)"
            >
              <img
                :src="project.image"
                :alt="project.title"
                loading="lazy"
              />

              <div class="gallery-card__overlay">
                <span>
                  {{ project.categoryLabel }}
                </span>

                <strong>
                  {{ project.title }}
                </strong>

                <button
                  type="button"
                  aria-label="Ampliar imagen"
                  @click.stop="openImage(project)"
                >
                  ↗
                </button>
              </div>
            </article>
          </div>
        </div>
      </div>
    </Transition>


    <!-- =====================================================
         VISOR INDIVIDUAL
    ====================================================== -->
    <Transition name="image-viewer">
      <div
        v-if="imageViewerOpen && currentProject"
        class="image-viewer"
        @click.self="closeImage"
      >
        <button
          class="image-viewer__close"
          type="button"
          aria-label="Cerrar imagen"
          @click="closeImage"
        >
          ×
        </button>


        <button
          v-if="viewerGallery.length > 1"
          class="
            image-viewer__navigation
            image-viewer__navigation--prev
          "
          type="button"
          aria-label="Imagen anterior"
          @click="previousImage"
        >
          ‹
        </button>


        <div class="image-viewer__content">

          <div class="image-viewer__image">
            <img
              :src="currentProject.image"
              :alt="currentProject.title"
            />
          </div>


          <div class="image-viewer__information">
            <div>
              <span>
                {{ currentProject.categoryLabel }}
              </span>

              <h4>
                {{ currentProject.title }}
              </h4>
            </div>

            <div class="image-viewer__counter">
              {{ currentIndex + 1 }}
              /
              {{ viewerGallery.length }}
            </div>
          </div>

        </div>


        <button
          v-if="viewerGallery.length > 1"
          class="
            image-viewer__navigation
            image-viewer__navigation--next
          "
          type="button"
          aria-label="Imagen siguiente"
          @click="nextImage"
        >
          ›
        </button>
      </div>
    </Transition>

  </section>
</template>


<script setup>
import {
  computed,
  onBeforeUnmount,
  onMounted,
  ref,
} from 'vue'


/* =========================================================
   TODAS LAS IMÁGENES
========================================================= */

const imageModules = import.meta.glob(
  '../../../assets/projects/vidrios-aluminio/proyectos/**/*.{jpg,jpeg,png,webp,JPG,JPEG,PNG,WEBP}',
  {
    eager: true,
    import: 'default',
  }
)


/* =========================================================
   CONFIGURACIÓN DE CATEGORÍAS
========================================================= */

const categoryConfig = {
  baño: {
    label: 'Baños',
    title: 'Cancel de baño',
  },

  barandal: {
    label: 'Barandales',
    title: 'Barandal',
  },

  canceles: {
    label: 'Canceles',
    title: 'Cancel',
  },

  domos: {
    label: 'Domos',
    title: 'Domo',
  },

  espejos: {
    label: 'Espejos',
    title: 'Espejo',
  },

  pasamanos: {
    label: 'Pasamanos',
    title: 'Pasamanos',
  },

  ventana: {
    label: 'Ventanas',
    title: 'Ventana',
  },
}


/* =========================================================
   GENERAR ARRAY
========================================================= */

const projects = Object.entries(imageModules)
  .map(([path, image]) => {
    const normalizedPath =
      path.replace(/\\/g, '/')

    const match =
      normalizedPath.match(
        /\/proyectos\/([^/]+)\/([^/]+)$/
      )

    if (!match) {
      return null
    }

    const folder =
      match[1].toLowerCase()

    const fileName =
      match[2]

    const config =
      categoryConfig[folder]

    if (!config) {
      return null
    }

    return {
      path,
      image,

      category: folder,

      categoryLabel:
        config.label,

      title:
        config.title,

      fileName:
        fileName
          .replace(/\.[^/.]+$/, '')
          .replace(/[-_]+/g, ' ')
          .trim(),
    }
  })
  .filter(Boolean)
  .sort((a, b) =>
    a.path.localeCompare(
      b.path,
      undefined,
      {
        numeric: true,
        sensitivity: 'base',
      }
    )
  )


/* =========================================================
   FILTROS GENERALES
========================================================= */

const filters = computed(() => {
  const categories = [
    ...new Set(
      projects.map(
        project => project.category
      )
    ),
  ]

  return [
    {
      value: 'todos',
      label: 'Todos',
    },

    ...categories.map(category => ({
      value: category,

      label:
        categoryConfig[category]?.label ||
        category,
    })),
  ]
})


/* =========================================================
   HOME
========================================================= */

const activeFilter =
  ref('todos')

const previewLimit = 8

const filteredProjects =
  computed(() => {
    if (
      activeFilter.value === 'todos'
    ) {
      return projects
    }

    return projects.filter(
      project =>
        project.category ===
        activeFilter.value
    )
  })


const visibleProjects =
  computed(() =>
    filteredProjects.value.slice(
      0,
      previewLimit
    )
  )


/* =========================================================
   MOSAICO HOME
========================================================= */

const getPanelClass = index => {
  const pattern = index % 8

  if (pattern === 0) {
    return 'project-panel--large'
  }

  if (pattern === 3) {
    return 'project-panel--wide'
  }

  if (pattern === 6) {
    return 'project-panel--tall'
  }

  return ''
}


/* =========================================================
   GALERÍA COMPLETA
========================================================= */

const galleryOpen =
  ref(false)

const galleryFilter =
  ref('todos')


const galleryProjects =
  computed(() => {
    if (
      galleryFilter.value === 'todos'
    ) {
      return projects
    }

    return projects.filter(
      project =>
        project.category ===
        galleryFilter.value
    )
  })


const getCategoryCount = category => {
  if (category === 'todos') {
    return projects.length
  }

  return projects.filter(
    project =>
      project.category === category
  ).length
}


const openGallery = project => {
  if (project) {
    galleryFilter.value =
      project.category
  } else {
    galleryFilter.value =
      activeFilter.value
  }

  galleryOpen.value = true

  document.body.style.overflow =
    'hidden'
}


const closeGallery = () => {
  galleryOpen.value = false

  imageViewerOpen.value = false

  currentProject.value = null

  document.body.style.overflow = ''
}


/* =========================================================
   VISOR DE IMAGEN
========================================================= */

const imageViewerOpen =
  ref(false)

const currentProject =
  ref(null)


const viewerGallery =
  computed(() => {
    return galleryProjects.value
  })


const currentIndex =
  computed(() => {
    if (!currentProject.value) {
      return -1
    }

    return viewerGallery.value.findIndex(
      project =>
        project.path ===
        currentProject.value.path
    )
  })


const openImage = project => {
  currentProject.value = project

  imageViewerOpen.value = true
}


const closeImage = () => {
  imageViewerOpen.value = false

  currentProject.value = null
}


const nextImage = () => {
  if (
    viewerGallery.value.length === 0
  ) {
    return
  }

  const nextIndex =
    (currentIndex.value + 1) %
    viewerGallery.value.length

  currentProject.value =
    viewerGallery.value[nextIndex]
}


const previousImage = () => {
  if (
    viewerGallery.value.length === 0
  ) {
    return
  }

  const previousIndex =
    (
      currentIndex.value -
      1 +
      viewerGallery.value.length
    ) %
    viewerGallery.value.length

  currentProject.value =
    viewerGallery.value[
      previousIndex
    ]
}


/* =========================================================
   TECLADO
========================================================= */

const handleKeyboard = event => {
  if (
    event.key === 'Escape' &&
    imageViewerOpen.value
  ) {
    closeImage()
    return
  }

  if (
    event.key === 'Escape' &&
    galleryOpen.value
  ) {
    closeGallery()
    return
  }

  if (!imageViewerOpen.value) {
    return
  }

  if (event.key === 'ArrowRight') {
    nextImage()
  }

  if (event.key === 'ArrowLeft') {
    previousImage()
  }
}


onMounted(() => {
  window.addEventListener(
    'keydown',
    handleKeyboard
  )
})


onBeforeUnmount(() => {
  window.removeEventListener(
    'keydown',
    handleKeyboard
  )

  document.body.style.overflow = ''
})
</script>


<style scoped>

/* =========================================================
   SECCIÓN
========================================================= */

.projects-section {
  padding:
    120px 5vw;

  background: #e5ecef;
}


/* =========================================================
   HEADER
========================================================= */

.projects-heading {
  width:
    min(100%, 1500px);

  margin:
    0 auto 45px;

  display: grid;

  grid-template-columns:
    1.2fr
    0.8fr;

  gap: 70px;

  align-items: end;
}


.section-kicker {
  display: block;

  margin-bottom: 18px;

  color:
    var(--glass-blue, #4ea7c4);

  font-size: 0.7rem;

  font-weight: 700;

  letter-spacing: 0.18em;

  text-transform: uppercase;
}


.projects-heading h2 {
  margin: 0;

  color: #111416;

  font-size:
    clamp(
      2.8rem,
      5vw,
      5.5rem
    );

  font-weight: 500;

  line-height: 0.98;

  letter-spacing: -0.05em;
}


.projects-heading h2 span {
  display: block;

  color: #829097;
}


.projects-heading p {
  max-width: 520px;

  margin: 0;

  color: #657378;

  font-size: 1rem;

  line-height: 1.8;
}


/* =========================================================
   FILTROS HOME
========================================================= */

.projects-filter {
  width:
    min(100%, 1500px);

  margin:
    0 auto 28px;

  display: flex;

  flex-wrap: wrap;

  gap: 7px;
}


.projects-filter button {
  min-height: 42px;

  padding:
    0 17px;

  border:
    1px solid
    rgba(17, 20, 22, 0.16);

  background: transparent;

  color: #657277;

  font-family: inherit;

  font-size: 0.66rem;

  font-weight: 700;

  letter-spacing: 0.09em;

  text-transform: uppercase;

  cursor: pointer;

  transition:
    background 0.25s ease,
    color 0.25s ease,
    border-color 0.25s ease;
}


.projects-filter button:hover,
.projects-filter button.active {
  background: #111416;

  color: #ffffff;

  border-color: #111416;
}


/* =========================================================
   PREVIEW
========================================================= */

.projects-grid {
  width:
    min(100%, 1500px);

  margin: 0 auto;

  display: grid;

  grid-template-columns:
    repeat(3, 1fr);

  grid-auto-flow: dense;

  grid-auto-rows: 310px;

  gap: 5px;

  padding: 5px;

  background: #111416;
}


.project-panel {
  position: relative;

  overflow: hidden;

  cursor: pointer;

  background: #1d292e;
}


.project-panel--large,
.project-panel--tall {
  grid-row: span 2;
}


.project-panel--wide {
  grid-column: span 2;
}


.project-panel img {
  width: 100%;

  height: 100%;

  display: block;

  object-fit: cover;

  transition:
    transform 0.8s
    cubic-bezier(
      0.2,
      0.7,
      0,
      1
    );
}


.project-panel:hover img {
  transform:
    scale(1.045);
}


.project-panel::after {
  content: '';

  position: absolute;

  inset: 0;

  z-index: 1;

  background:
    linear-gradient(
      to top,
      rgba(5, 9, 10, 0.82),
      rgba(5, 9, 10, 0.03)
      62%
    );
}


/* REFLEJO */

.project-panel__reflection {
  position: absolute;

  z-index: 2;

  width: 170%;

  height: 28%;

  top: 5%;

  left: -100%;

  transform:
    rotate(-28deg);

  background:
    rgba(255, 255, 255, 0.12);

  transition:
    left 1s ease;

  pointer-events: none;
}


.project-panel:hover
.project-panel__reflection {
  left: 60%;
}


/* OVERLAY */

.project-panel__overlay {
  position: absolute;

  left: 27px;

  right: 27px;

  bottom: 27px;

  z-index: 3;

  display: flex;

  align-items: flex-end;

  justify-content: space-between;

  gap: 25px;

  color: #ffffff;
}


.project-panel__overlay
div > span {
  display: block;

  margin-bottom: 9px;

  color:
    rgba(255, 255, 255, 0.55);

  font-size: 0.61rem;

  font-weight: 700;

  letter-spacing: 0.15em;

  text-transform: uppercase;
}


.project-panel__overlay h3 {
  margin: 0;

  font-size: 1.25rem;

  font-weight: 500;
}


.project-panel__overlay button {
  width: 45px;

  height: 45px;

  flex-shrink: 0;

  border:
    1px solid
    rgba(255, 255, 255, 0.36);

  background:
    rgba(5, 9, 10, 0.25);

  color: #ffffff;

  font-size: 1rem;

  cursor: pointer;
}


/* =========================================================
   VER TODOS
========================================================= */

.projects-more {
  width:
    min(100%, 1500px);

  margin:
    5px auto 0;

  min-height: 100px;

  padding:
    20px 25px;

  display: flex;

  align-items: center;

  justify-content: space-between;

  gap: 30px;

  background: #111416;

  color: #ffffff;
}


.projects-more > div {
  display: flex;

  align-items: center;

  gap: 14px;
}


.projects-more > div > span {
  color:
    var(--glass-blue, #4ea7c4);

  font-size: 1.5rem;
}


.projects-more p {
  margin: 0;

  color:
    rgba(255, 255, 255, 0.45);

  font-size: 0.75rem;

  letter-spacing: 0.06em;
}


.projects-more button {
  min-height: 52px;

  padding:
    0 20px;

  display: flex;

  align-items: center;

  gap: 35px;

  border: 0;

  background: #ffffff;

  color: #111416;

  font-family: inherit;

  font-size: 0.68rem;

  font-weight: 700;

  letter-spacing: 0.1em;

  text-transform: uppercase;

  cursor: pointer;

  transition:
    background 0.25s ease,
    color 0.25s ease;
}


.projects-more button:hover {
  background:
    var(--glass-blue, #4ea7c4);

  color: #ffffff;
}


/* =========================================================
   GALERÍA COMPLETA
========================================================= */

.gallery-modal {
  position: fixed;

  inset: 0;

  z-index: 9000;

  display: flex;

  flex-direction: column;

  background: #0d1113;

  color: #ffffff;
}


.gallery-modal__header {
  min-height: 100px;

  padding:
    20px 4vw;

  display: flex;

  align-items: center;

  justify-content: space-between;

  gap: 30px;

  border-bottom:
    1px solid
    rgba(255, 255, 255, 0.13);
}


.gallery-modal__header
div > span {
  display: block;

  margin-bottom: 6px;

  color:
    var(--glass-blue, #4ea7c4);

  font-size: 0.61rem;

  font-weight: 700;

  letter-spacing: 0.15em;

  text-transform: uppercase;
}


.gallery-modal__header h3 {
  margin: 0;

  font-size:
    clamp(
      1.4rem,
      2vw,
      2rem
    );

  font-weight: 500;
}


.gallery-modal__close {
  width: 52px;

  height: 52px;

  flex-shrink: 0;

  border:
    1px solid
    rgba(255, 255, 255, 0.24);

  background: transparent;

  color: #ffffff;

  font-size: 1.8rem;

  cursor: pointer;
}


/* =========================================================
   FILTROS MODAL
========================================================= */

.gallery-modal__filters {
  padding:
    15px 4vw;

  display: flex;

  flex-wrap: wrap;

  gap: 6px;

  border-bottom:
    1px solid
    rgba(255, 255, 255, 0.1);
}


.gallery-modal__filters button {
  min-height: 40px;

  padding:
    0 14px;

  display: flex;

  align-items: center;

  gap: 9px;

  border:
    1px solid
    rgba(255, 255, 255, 0.14);

  background: transparent;

  color:
    rgba(255, 255, 255, 0.58);

  font-family: inherit;

  font-size: 0.62rem;

  text-transform: uppercase;

  letter-spacing: 0.08em;

  cursor: pointer;
}


.gallery-modal__filters
button span {
  color:
    rgba(255, 255, 255, 0.3);

  font-size: 0.55rem;
}


.gallery-modal__filters
button.active {
  background: #ffffff;

  border-color: #ffffff;

  color: #111416;
}


.gallery-modal__filters
button.active span {
  color:
    rgba(17, 20, 22, 0.5);
}


/* =========================================================
   BODY MODAL
========================================================= */

.gallery-modal__body {
  flex: 1;

  min-height: 0;

  overflow-y: auto;

  padding:
    5px 4vw 50px;
}


.gallery-modal__grid {
  display: grid;

  grid-template-columns:
    repeat(4, 1fr);

  gap: 5px;
}


.gallery-card {
  position: relative;

  aspect-ratio: 4 / 3;

  overflow: hidden;

  cursor: pointer;

  background: #1b262b;
}


.gallery-card img {
  width: 100%;

  height: 100%;

  display: block;

  object-fit: cover;

  transition:
    transform 0.6s ease;
}


.gallery-card:hover img {
  transform:
    scale(1.045);
}


.gallery-card::after {
  content: '';

  position: absolute;

  inset: 0;

  background:
    linear-gradient(
      to top,
      rgba(4, 7, 8, 0.83),
      transparent 60%
    );
}


.gallery-card__overlay {
  position: absolute;

  left: 18px;

  right: 18px;

  bottom: 18px;

  z-index: 2;

  display: grid;

  grid-template-columns:
    1fr auto;

  gap: 4px 15px;

  align-items: end;
}


.gallery-card__overlay > span {
  grid-column: 1;

  color:
    rgba(255, 255, 255, 0.5);

  font-size: 0.55rem;

  letter-spacing: 0.12em;

  text-transform: uppercase;
}


.gallery-card__overlay strong {
  grid-column: 1;

  color: #ffffff;

  font-size: 0.85rem;

  font-weight: 500;
}


.gallery-card__overlay button {
  grid-column: 2;

  grid-row:
    1 / 3;

  width: 38px;

  height: 38px;

  border:
    1px solid
    rgba(255, 255, 255, 0.28);

  background:
    rgba(0, 0, 0, 0.2);

  color: #ffffff;

  cursor: pointer;
}


/* =========================================================
   IMAGE VIEWER
========================================================= */

.image-viewer {
  position: fixed;

  inset: 0;

  z-index: 10000;

  padding:
    45px 100px;

  display: flex;

  align-items: center;

  justify-content: center;

  background:
    rgba(5, 8, 9, 0.96);

  backdrop-filter:
    blur(12px);
}


.image-viewer__content {
  width:
    min(100%, 1350px);

  max-height: 90vh;

  display: flex;

  flex-direction: column;

  border:
    5px solid #252b2e;

  background: #111416;
}


.image-viewer__image {
  min-height: 0;

  display: flex;

  align-items: center;

  justify-content: center;

  background: #080b0c;
}


.image-viewer__image img {
  width: 100%;

  max-height: 76vh;

  display: block;

  object-fit: contain;
}


.image-viewer__information {
  min-height: 88px;

  padding:
    18px 24px;

  display: flex;

  align-items: center;

  justify-content: space-between;

  gap: 30px;
}


.image-viewer__information
span {
  display: block;

  margin-bottom: 6px;

  color:
    var(--glass-blue, #4ea7c4);

  font-size: 0.58rem;

  letter-spacing: 0.14em;

  text-transform: uppercase;
}


.image-viewer__information h4 {
  margin: 0;

  color: #ffffff;

  font-size: 1.05rem;

  font-weight: 500;
}


.image-viewer__counter {
  color:
    rgba(255, 255, 255, 0.4);

  font-size: 0.65rem;
}


/* CONTROLES */

.image-viewer__close {
  position: absolute;

  top: 22px;

  right: 25px;

  width: 48px;

  height: 48px;

  border:
    1px solid
    rgba(255, 255, 255, 0.25);

  background: transparent;

  color: #ffffff;

  font-size: 1.7rem;

  cursor: pointer;
}


.image-viewer__navigation {
  position: absolute;

  top: 50%;

  width: 52px;

  height: 78px;

  transform:
    translateY(-50%);

  border:
    1px solid
    rgba(255, 255, 255, 0.2);

  background:
    rgba(0, 0, 0, 0.15);

  color: #ffffff;

  font-size: 2rem;

  cursor: pointer;
}


.image-viewer__navigation--prev {
  left: 22px;
}


.image-viewer__navigation--next {
  right: 22px;
}


/* =========================================================
   TRANSICIONES
========================================================= */

.gallery-enter-active,
.gallery-leave-active,
.image-viewer-enter-active,
.image-viewer-leave-active {
  transition:
    opacity 0.25s ease;
}


.gallery-enter-from,
.gallery-leave-to,
.image-viewer-enter-from,
.image-viewer-leave-to {
  opacity: 0;
}


/* =========================================================
   VACÍO
========================================================= */

.projects-empty {
  width:
    min(100%, 1500px);

  margin: 0 auto;

  padding:
    60px 20px;

  text-align: center;

  color: #778388;
}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 1050px) {

  .projects-section {
    padding:
      90px 5vw;
  }

  .projects-heading {
    grid-template-columns: 1fr;

    gap: 30px;
  }

  .projects-grid {
    grid-template-columns:
      repeat(2, 1fr);
  }

  .project-panel--wide {
    grid-column: span 2;
  }

  .gallery-modal__grid {
    grid-template-columns:
      repeat(3, 1fr);
  }

  .image-viewer {
    padding:
      60px 65px;
  }

}


/* =========================================================
   TABLET PEQUEÑA
========================================================= */

@media (max-width: 800px) {

  .gallery-modal__grid {
    grid-template-columns:
      repeat(2, 1fr);
  }

}


/* =========================================================
   MÓVIL
========================================================= */

@media (max-width: 650px) {

  .projects-section {
    padding:
      75px 20px;
  }

  .projects-heading h2 {
    font-size:
      clamp(
        2.6rem,
        12vw,
        4rem
      );
  }

  .projects-grid {
    grid-template-columns: 1fr;

    grid-auto-rows: 300px;

    gap: 3px;

    padding: 3px;
  }

  .project-panel--large,
  .project-panel--wide,
  .project-panel--tall {
    grid-column: auto;

    grid-row: auto;
  }

  .projects-more {
    min-height: auto;

    padding: 20px;

    flex-direction: column;

    align-items: stretch;
  }

  .projects-more button {
    width: 100%;

    justify-content: space-between;
  }

  .gallery-modal__header {
    min-height: 80px;

    padding:
      15px 18px;
  }

  .gallery-modal__header h3 {
    font-size: 1.15rem;
  }

  .gallery-modal__close {
    width: 43px;

    height: 43px;
  }

  .gallery-modal__filters {
    padding:
      12px 18px;
  }

  .gallery-modal__body {
    padding:
      3px 18px 30px;
  }

  .gallery-modal__grid {
    grid-template-columns: 1fr;

    gap: 3px;
  }

  .gallery-card {
    aspect-ratio: 4 / 3;
  }

  .image-viewer {
    padding:
      65px 12px 15px;
  }

  .image-viewer__content {
    border-width: 3px;
  }

  .image-viewer__image img {
    max-height:
      calc(
        100vh - 190px
      );
  }

  .image-viewer__navigation {
    top: auto;

    bottom: 105px;

    width: 43px;

    height: 55px;
  }

  .image-viewer__navigation--prev {
    left: 20px;
  }

  .image-viewer__navigation--next {
    right: 20px;
  }

  .image-viewer__close {
    top: 12px;

    right: 12px;

    width: 42px;

    height: 42px;
  }

}
</style>