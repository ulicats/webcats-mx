<template>
  <section id="trabajos" class="multi-projects">

    <div class="projects-container">

      <!-- =========================
           HEADER
      ========================== -->
      <div class="section-header">

        <span class="eyebrow">
          TRABAJOS REALIZADOS
        </span>

        <h2>
          Resultados que
          <span>hablan por nosotros.</span>
        </h2>

        <p>
          Conoce algunos ejemplos de los trabajos que podemos
          realizar para mejorar, reparar y mantener tus espacios.
        </p>

      </div>

      <!-- =========================
           PROYECTOS
      ========================== -->
      <div class="projects-grid">

        <article
          v-for="project in projects"
          :key="project.id"
          class="project-card"
        >

          <!-- ANTES / DESPUÉS -->
          <div
            class="comparison"
            @click="openProject(project)"
          >

            <!-- ANTES -->
            <div class="comparison-image">

              <img
                :src="project.before"
                :alt="`${project.title} antes`"
              />

              <span class="before-label">
                Antes
              </span>

            </div>

            <!-- DESPUÉS -->
            <div class="comparison-image">

              <img
                :src="project.after"
                :alt="`${project.title} después`"
              />

              <span class="after-label">
                Después
              </span>

            </div>

            <!-- INDICADOR HOVER -->
            <div class="comparison-hover">
              <span>↗</span>
              Ver imágenes
            </div>

          </div>

          <!-- INFORMACIÓN -->
          <div class="project-content">

            <span
              class="project-category"
              :class="project.categoryClass"
            >
              {{ project.category }}
            </span>

            <h3>
              {{ project.title }}
            </h3>

            <p>
              {{ project.description }}
            </p>

          </div>

          <!-- BOTÓN -->
          <button
            type="button"
            class="view-project"
            @click="openProject(project)"
          >
            <span class="view-icon">↗</span>

            Ver antes y después

            <span class="view-arrow">→</span>
          </button>

        </article>

      </div>

    </div>


    <!-- =========================
         MODAL
    ========================== -->
    <Teleport to="body">

      <Transition name="modal">

       <div
          v-if="selectedProject"
          class="project-modal"
          @click.self="closeProject"
          @touchstart="handleTouchStart"
          @touchend="handleTouchEnd"
        >

          <div class="modal-container">

            <!-- CERRAR -->
            <button
              type="button"
              class="modal-close"
              aria-label="Cerrar proyecto"
              @click="closeProject"
            >
              ×
            </button>


            <!-- =========================
                 HEADER MODAL
            ========================== -->
            <div class="modal-header">

              <div>

                <span
                  class="modal-category"
                  :class="selectedProject.categoryClass"
                >
                  {{ selectedProject.category }}
                </span>

                <h3>
                  {{ selectedProject.title }}
                </h3>

                <p>
                  {{ selectedProject.description }}
                </p>

              </div>

              <span class="modal-counter">
                {{ selectedIndex + 1 }}
                /
                {{ projects.length }}
              </span>

            </div>


            <!-- =========================
                 IMÁGENES
            ========================== -->
            <div class="modal-comparison">

              <!-- ANTES -->
              <div class="modal-image">

                <div class="modal-image-header before">
                  ANTES
                </div>

                <img
                  :src="selectedProject.before"
                  :alt="`${selectedProject.title} antes`"
                />

              </div>


              <!-- DESPUÉS -->
              <div class="modal-image">

                <div class="modal-image-header after">
                  <span>✓</span>
                  DESPUÉS
                </div>

                <img
                  :src="selectedProject.after"
                  :alt="`${selectedProject.title} después`"
                />

              </div>

            </div>


            <!-- =========================
                 FOOTER MODAL
            ========================== -->
            <div class="modal-footer">

              <button
                type="button"
                class="modal-navigation previous"
                @click="previousProject"
              >
                <span>←</span>

                Proyecto anterior
              </button>

              <div class="modal-project-indicator">

                <span
                  v-for="(_, index) in projects"
                  :key="index"
                  :class="{ active: selectedIndex === index }"
                  @click="selectedIndex = index"
                ></span>

              </div>

              <button
                type="button"
                class="modal-navigation next"
                @click="nextProject"
              >
                Siguiente proyecto

                <span>→</span>
              </button>

            </div>

          </div>

        </div>

      </Transition>

    </Teleport>

  </section>
</template>


<script setup>
import {
  computed,
  onBeforeUnmount,
  onMounted,
  ref
} from 'vue'


/* =========================
   IMÁGENES
========================= */

import banoAntes from '../../../assets/projects/multiservicios/proyectos/baño-a.png'
import banoDespues from '../../../assets/projects/multiservicios/proyectos/baño-d.png'

import electricidadAntes from '../../../assets/projects/multiservicios/proyectos/electricidad-a.png'
import electricidadDespues from '../../../assets/projects/multiservicios/proyectos/electricidad-d.png'

import azoteaAntes from '../../../assets/projects/multiservicios/proyectos/azotea-a.png'
import azoteaDespues from '../../../assets/projects/multiservicios/proyectos/azotea-d.png'

import fachadaAntes from '../../../assets/projects/multiservicios/proyectos/fachada-a.png'
import fachadaDespues from '../../../assets/projects/multiservicios/proyectos/fachada-d.png'


/* =========================
   PROYECTOS
========================= */

const projects = [

  {
    id: 1,

    category: 'ALBAÑILERÍA',
    categoryClass: 'masonry',

    title: 'Remodelación de baño',

    description:
      'Renovación de acabados, instalaciones y detalles.',

    before: banoAntes,
    after: banoDespues
  },

  {
    id: 2,

    category: 'ELECTRICIDAD',
    categoryClass: 'electricity',

    title: 'Instalación eléctrica',

    description:
      'Revisión y mejora de instalaciones eléctricas.',

    before: electricidadAntes,
    after: electricidadDespues
  },

  {
    id: 3,

    category: 'IMPERMEABILIZACIÓN',
    categoryClass: 'waterproof',

    title: 'Protección de azotea',

    description:
      'Tratamiento para prevenir humedad y filtraciones.',

    before: azoteaAntes,
    after: azoteaDespues
  },

  {
    id: 4,

    category: 'PINTURA',
    categoryClass: 'painting',

    title: 'Renovación de fachada',

    description:
      'Aplicación de pintura y renovación exterior.',

    before: fachadaAntes,
    after: fachadaDespues
  }

]


/* =========================
   MODAL
========================= */

const selectedIndex = ref(null)

/* =========================
   SWIPE MÓVIL
========================= */

const touchStartX = ref(0)
const touchStartY = ref(0)

const handleTouchStart = (event) => {
  touchStartX.value = event.changedTouches[0].clientX
  touchStartY.value = event.changedTouches[0].clientY
}

const handleTouchEnd = (event) => {
  const touchEndX = event.changedTouches[0].clientX
  const touchEndY = event.changedTouches[0].clientY

  const distanceX =
    touchEndX - touchStartX.value

  const distanceY =
    touchEndY - touchStartY.value

  /*
    Si el movimiento vertical fue mayor
    que el horizontal, dejamos que haga
    scroll normalmente.
  */
  if (Math.abs(distanceY) > Math.abs(distanceX)) {
    return
  }

  /*
    Evita cambiar de proyecto por
    movimientos accidentales pequeños.
  */
  const minimumSwipe = 60

  if (distanceX < -minimumSwipe) {
    nextProject()
  }

  if (distanceX > minimumSwipe) {
    previousProject()
  }
}


const selectedProject = computed(() => {

  if (selectedIndex.value === null) {
    return null
  }

  return projects[selectedIndex.value]

})


/* =========================
   ABRIR
========================= */

const openProject = (project) => {

  selectedIndex.value = projects.findIndex(
    item => item.id === project.id
  )

  document.body.style.overflow = 'hidden'

}


/* =========================
   CERRAR
========================= */

const closeProject = () => {

  selectedIndex.value = null

  document.body.style.overflow = ''

}


/* =========================
   SIGUIENTE
========================= */

const nextProject = () => {

  if (selectedIndex.value === null) {
    return
  }

  selectedIndex.value =
    (selectedIndex.value + 1) %
    projects.length

}


/* =========================
   ANTERIOR
========================= */

const previousProject = () => {

  if (selectedIndex.value === null) {
    return
  }

  selectedIndex.value =
    (
      selectedIndex.value -
      1 +
      projects.length
    ) %
    projects.length

}


/* =========================
   TECLADO
========================= */

const handleKeydown = (event) => {

  if (selectedIndex.value === null) {
    return
  }

  if (event.key === 'Escape') {
    closeProject()
  }

  if (event.key === 'ArrowRight') {
    nextProject()
  }

  if (event.key === 'ArrowLeft') {
    previousProject()
  }

}


/* =========================
   EVENTOS
========================= */

onMounted(() => {

  window.addEventListener(
    'keydown',
    handleKeydown
  )

})


onBeforeUnmount(() => {

  window.removeEventListener(
    'keydown',
    handleKeydown
  )

  document.body.style.overflow = ''

})
</script>


<style scoped>
.multi-projects {
  --navy: #062a50;
  --blue: #087ee5;
  --green: #19a957;
  --brick: #dc512e;

  padding: 100px 0 90px;

  background: #ffffff;

  font-family: 'Manrope', sans-serif;
}

.projects-container {
  width: min(1180px, calc(100% - 40px));
  margin: auto;
}


/* =========================
   HEADER
========================= */

.section-header {
  max-width: 650px;

  margin: 0 auto 50px;

  text-align: center;
}

.eyebrow {
  display: block;

  margin-bottom: 8px;

  color: var(--blue);

  font-size: 10px;
  font-weight: 800;
  letter-spacing: 2px;
}

.section-header h2 {
  margin: 0;

  color: var(--navy);

  font-family: 'Sora', sans-serif;

  font-size: clamp(31px, 4vw, 45px);

  line-height: 1.12;
  letter-spacing: -1.8px;
}

.section-header h2 span {
  color: var(--blue);
}

.section-header p {
  max-width: 560px;

  margin: 16px auto 0;

  color: #718193;

  font-size: 12px;
  line-height: 1.7;
}


/* =========================
   GRID
========================= */

.projects-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);

  gap: 24px;
}


/* =========================
   CARD
========================= */

.project-card {
  overflow: hidden;

  background: #ffffff;

  border: 1px solid #e2e9ef;
  border-radius: 14px;

  box-shadow:
    0 10px 30px rgba(6, 42, 80, 0.06);

  transition:
    transform 0.3s ease,
    box-shadow 0.3s ease;
}

.project-card:hover {
  transform: translateY(-6px);

  box-shadow:
    0 20px 45px rgba(6, 42, 80, 0.13);
}


/* =========================
   COMPARACIÓN
========================= */

.comparison {
  position: relative;

  display: grid;
  grid-template-columns: repeat(2, 1fr);

  height: 270px;

  overflow: hidden;

  cursor: zoom-in;
}

.comparison-image {
  position: relative;

  overflow: hidden;

  background: #edf2f6;
}

.comparison-image:first-child {
  border-right: 3px solid white;
}

.comparison-image img {
  display: block;

  width: 100%;
  height: 100%;

  object-fit: cover;

  transition:
    transform 0.5s ease,
    filter 0.4s ease;
}


/* ANTES */

.comparison-image:first-child img {
  filter:
    saturate(0.82)
    brightness(0.92);
}


/* DESPUÉS */

.comparison-image:last-child img {
  filter:
    saturate(1.04)
    brightness(1.02);
}


.project-card:hover .comparison-image img {
  transform: scale(1.04);
}


/* =========================
   LABELS
========================= */

.before-label,
.after-label {
  position: absolute;

  z-index: 3;

  left: 13px;
  bottom: 13px;

  padding: 7px 11px;

  color: white;

  border-radius: 6px;

  font-size: 9px;
  font-weight: 800;

  box-shadow:
    0 5px 12px rgba(0, 0, 0, 0.15);
}

.before-label {
  background: rgba(6, 42, 80, 0.94);
}

.after-label {
  background: var(--green);
}


/* =========================
   HOVER IMAGEN
========================= */

.comparison-hover {
  position: absolute;

  z-index: 10;

  left: 50%;
  top: 50%;

  padding: 10px 14px;

  display: flex;
  align-items: center;

  gap: 7px;

  color: var(--navy);
  background: white;

  border-radius: 7px;

  box-shadow:
    0 10px 30px rgba(0, 0, 0, 0.2);

  font-size: 9px;
  font-weight: 800;

  opacity: 0;

  pointer-events: none;

  transform:
    translate(-50%, -40%)
    scale(0.95);

  transition:
    opacity 0.25s ease,
    transform 0.25s ease;
}

.comparison:hover .comparison-hover {
  opacity: 1;

  transform:
    translate(-50%, -50%)
    scale(1);
}


/* =========================
   CONTENT
========================= */

.project-content {
  padding: 23px 24px 17px;
}

.project-category {
  display: inline-flex;

  margin-bottom: 9px;

  font-size: 8px;
  font-weight: 800;
  letter-spacing: 1px;
}

.project-category.masonry {
  color: var(--brick);
}

.project-category.electricity {
  color: var(--green);
}

.project-category.waterproof {
  color: var(--blue);
}

.project-category.painting {
  color: var(--blue);
}

.project-content h3 {
  margin: 0 0 7px;

  color: var(--navy);

  font-family: 'Sora', sans-serif;

  font-size: 17px;
}

.project-content p {
  margin: 0;

  color: #7a8998;

  font-size: 10px;
  line-height: 1.6;
}


/* =========================
   BOTÓN VER PROYECTO
========================= */

.view-project {
  width: calc(100% - 48px);

  margin:
    0
    24px
    22px;

  padding: 11px 14px;

  display: flex;
  align-items: center;

  gap: 8px;

  color: var(--navy);
  background: #f4f8fb;

  border: 1px solid #e0e8ee;
  border-radius: 7px;

  font-family: 'Manrope', sans-serif;
  font-size: 9px;
  font-weight: 800;

  cursor: pointer;

  transition:
    color 0.2s ease,
    background 0.2s ease,
    border-color 0.2s ease;
}

.view-arrow {
  margin-left: auto;

  transition: transform 0.2s ease;
}

.view-project:hover {
  color: white;
  background: var(--navy);

  border-color: var(--navy);
}

.view-project:hover .view-arrow {
  transform: translateX(4px);
}

.view-icon {
  font-size: 12px;
}


/* =========================
   MODAL
========================= */

.project-modal {
  position: fixed;

  z-index: 99999;

  inset: 0;

  padding: 35px;

  display: flex;
  align-items: center;
  justify-content: center;

  background:
    rgba(2, 18, 34, 0.9);

  backdrop-filter: blur(7px);
}

.modal-container {
  position: relative;

  width: min(1250px, 100%);

  max-height: calc(100vh - 70px);

  overflow-y: auto;

  background: white;

  border-radius: 16px;

  box-shadow:
    0 30px 80px
    rgba(0, 0, 0, 0.4);
}


/* =========================
   CERRAR MODAL
========================= */

.modal-close {
  position: absolute;

  z-index: 30;

  top: 18px;
  right: 18px;

  width: 38px;
  height: 38px;

  display: flex;
  align-items: center;
  justify-content: center;

  color: var(--navy);
  background: #f1f5f8;

  border: 0;
  border-radius: 50%;

  font-size: 22px;
  line-height: 1;

  cursor: pointer;

  transition:
    color 0.2s ease,
    background 0.2s ease,
    transform 0.2s ease;
}

.modal-close:hover {
  color: white;
  background: var(--brick);

  transform: rotate(90deg);
}


/* =========================
   HEADER MODAL
========================= */

.modal-header {
  padding:
    28px
    75px
    24px
    30px;

  display: flex;
  align-items: center;
  justify-content: space-between;

  gap: 30px;

  border-bottom:
    1px solid #e5ebf0;
}

.modal-category {
  display: block;

  margin-bottom: 6px;

  font-size: 8px;
  font-weight: 800;

  letter-spacing: 1.3px;
}

.modal-category.masonry {
  color: var(--brick);
}

.modal-category.electricity {
  color: var(--green);
}

.modal-category.waterproof {
  color: var(--blue);
}

.modal-category.painting {
  color: var(--blue);
}

.modal-header h3 {
  margin: 0;

  color: var(--navy);

  font-family: 'Sora', sans-serif;

  font-size: 21px;
}

.modal-header p {
  margin: 6px 0 0;

  color: #718193;

  font-size: 10px;
}

.modal-counter {
  flex-shrink: 0;

  color: #9ba9b5;

  font-family: 'Sora', sans-serif;

  font-size: 11px;
  font-weight: 700;
}


/* =========================
   IMÁGENES MODAL
========================= */

.modal-comparison {
  display: grid;
  grid-template-columns: repeat(2, 1fr);

  gap: 2px;

  background: #dfe7ed;
}

.modal-image {
  position: relative;

  overflow: hidden;

  background: #edf1f4;
}

.modal-image img {
  display: block;

  width: 100%;
  height: min(62vh, 650px);

  object-fit: cover;
}


/* ANTES MODAL */

.modal-image:first-child img {
  filter:
    saturate(0.88)
    brightness(0.95);
}


/* =========================
   LABEL MODAL
========================= */

.modal-image-header {
  position: absolute;

  z-index: 5;

  top: 18px;
  left: 18px;

  padding: 8px 12px;

  display: flex;
  align-items: center;

  gap: 6px;

  color: white;

  border-radius: 6px;

  font-size: 9px;
  font-weight: 800;

  letter-spacing: 0.7px;

  box-shadow:
    0 6px 20px
    rgba(0, 0, 0, 0.18);
}

.modal-image-header.before {
  background: var(--navy);
}

.modal-image-header.after {
  background: var(--green);
}


/* =========================
   FOOTER MODAL
========================= */

.modal-footer {
  min-height: 68px;

  padding: 10px 25px;

  display: grid;
  grid-template-columns: 1fr auto 1fr;
  align-items: center;

  gap: 20px;
}

/* =========================
   NAVEGACIÓN MODAL
========================= */

.modal-navigation {
  min-height: 42px;

  padding: 7px 12px;

  display: flex;
  align-items: center;

  gap: 10px;

  color: coral;
  background: transparent;

  border: 0;
  border-radius: 8px;

  font-family: 'Manrope', sans-serif;
  font-size: 10px;
  font-weight: 800;

  cursor: pointer;

  transition:
    color 0.2s ease,
    background 0.2s ease,
    transform 0.2s ease;
}


/* CÍRCULO DE LA FLECHA */

.modal-navigation > span {
  width: 32px;
  height: 32px;

  flex-shrink: 0;

  display: flex;
  align-items: center;
  justify-content: center;

  color: white;
  background: var(--navy);

  border-radius: 50%;

  font-size: 16px;
  font-weight: 700;

  box-shadow:
    0 5px 14px
    rgba(6, 42, 80, 0.18);

  transition:
    background 0.2s ease,
    transform 0.2s ease;
}


.modal-navigation:hover {
  color: #0f5ba1;

  background: #f1f7fc;
}


.modal-navigation:hover > span {
  background: var(--blue);
}


/* ANTERIOR */

.modal-navigation.previous {
  justify-self: start;
}

.modal-navigation.previous:hover > span {
  transform: translateX(-3px);
}


/* SIGUIENTE */

.modal-navigation.next {
  justify-self: end;
}

.modal-navigation.next:hover > span {
  transform: translateX(3px);
}

/* =========================
   INDICADORES
========================= */

.modal-project-indicator {
  display: flex;
  align-items: center;

  gap: 6px;
}

.modal-project-indicator span {
  width: 7px;
  height: 7px;

  display: block;

  background: #c7d3dc;

  border-radius: 20px;

  cursor: pointer;

  transition:
    width 0.2s ease,
    background 0.2s ease;
}

.modal-project-indicator span.active {
  width: 22px;

  background: var(--blue);
}


/* =========================
   ANIMACIÓN MODAL
========================= */

.modal-enter-active,
.modal-leave-active {
  transition:
    opacity 0.25s ease;
}

.modal-enter-active .modal-container,
.modal-leave-active .modal-container {
  transition:
    transform 0.25s ease,
    opacity 0.25s ease;
}

.modal-enter-from,
.modal-leave-to {
  opacity: 0;
}

.modal-enter-from .modal-container,
.modal-leave-to .modal-container {
  opacity: 0;

  transform:
    translateY(20px)
    scale(0.98);
}


/* =========================
   RESPONSIVE
========================= */

@media (max-width: 800px) {

  .projects-grid {
    grid-template-columns: 1fr;
  }

}


@media (max-width: 700px) {

  .project-modal {
    padding: 15px;
  }

  .modal-container {
    max-height:
      calc(100vh - 30px);
  }

  .modal-header {
    padding:
      25px
      60px
      20px
      20px;
  }

  .modal-counter {
    display: none;
  }

  .modal-comparison {
    grid-template-columns: 1fr;
  }

  .modal-image img {
    height: 330px;
  }

  .modal-footer {
    grid-template-columns:
      1fr
      1fr;
  }

  .modal-project-indicator {
    display: none;
  }

}


@media (max-width: 550px) {

  .multi-projects {
    padding: 70px 0;
  }

  .projects-container {
    width:
      calc(100% - 30px);
  }

  .comparison {
    height: 200px;
  }

  .project-content {
    padding:
      20px
      20px
      15px;
  }

  .view-project {
    width:
      calc(100% - 40px);

    margin:
      0
      20px
      20px;
  }

  .comparison-hover {
    display: none;
  }

  .modal-image img {
    height: 280px;
  }

  .modal-footer {
    padding: 10px 15px;
  }

  .modal-navigation {
    font-size: 8px;
  }

}
</style>