<template>
  <div
    class="modal-overlay"
    role="dialog"
    aria-modal="true"
    :aria-label="`Detalles del proyecto ${project.title}`"
    @click.self="closeModal"
  >
    <article
      class="modal-card"
      @touchstart="onTouchStart"
      @touchend="onTouchEnd"
    >
      <!-- Barra superior de la modal -->
      <div class="modal-toolbar">
        <span class="toolbar-label">
          PORTAFOLIO · WEBCATS.MX
        </span>

        <button
          type="button"
          class="close-btn"
          aria-label="Cerrar modal"
          @click="closeModal"
        >
          ×
        </button>
      </div>

      <!-- Navegación general del proyecto -->
      <button
        type="button"
        class="nav-btn nav-prev"
        aria-label="Proyecto anterior"
        @click.stop="prevProject"
      >
        ‹
      </button>

      <button
        type="button"
        class="nav-btn nav-next"
        aria-label="Proyecto siguiente"
        @click.stop="nextProject"
      >
        ›
      </button>

      <!-- Contenido desplazable -->
      <div class="modal-scroll">
        <!-- Imagen principal -->
        <div class="project-media">
          <img
            :src="project.image"
            :alt="project.title"
            class="project-image"
          />

          <div class="media-overlay"></div>

          <span
            v-if="project.featured"
            class="featured-badge"
          >
            Proyecto destacado
          </span>

          <span class="project-counter">
            {{ index + 1 }} / {{ items.length }}
          </span>
        </div>

        <!-- Encabezado -->
        <header class="project-header">
          <p class="project-eyebrow">
            Proyecto desarrollado por Webcats.mx
          </p>

          <h2 class="project-title">
            {{ project.title }}
          </h2>

          <p
            v-if="project.category"
            class="project-category"
          >
            {{ project.category }}
          </p>

          <p class="project-description">
            {{ project.description }}
          </p>
        </header>

        <!-- Separador -->
        <div
          v-if="hasProjectDetails"
          class="project-divider"
        ></div>

        <!-- Información del proyecto -->
        <div
          v-if="hasProjectDetails"
          class="project-details"
        >
          <!-- Funcionalidades -->
          <section
            v-if="project.features?.length"
            class="details-column"
          >
            <h3 class="details-title">
              <span class="terminal-symbol">
                &gt;_
              </span>

              Funcionalidades
            </h3>

            <ul class="features-list">
              <li
                v-for="(feature, featureIndex) in project.features"
                :key="featureIndex"
              >
                <span class="feature-arrow">
                  &gt;
                </span>

                <span>
                  {{ feature }}
                </span>
              </li>
            </ul>
          </section>

          <!-- Tecnologías -->
          <section
            v-if="project.technologies?.length"
            class="details-column"
          >
            <h3 class="details-title">
              <span class="technology-icon"></span>

              Tecnologías utilizadas
            </h3>

            <div class="technologies-list">
              <span
                v-for="technology in project.technologies"
                :key="technology"
                class="technology-tag"
              >
                {{ technology }}
              </span>
            </div>
          </section>
        </div>

        <!-- Acciones -->
        <div class="modal-actions">
          <a
            :href="projectLink"
            target="_blank"
            rel="noopener noreferrer"
            class="btn primary"
          >
            <span class="button-icon">
              ↗
            </span>

            <span>
              {{
                isExternalProject
                  ? 'Visitar sitio web'
                  : 'Ver proyecto'
              }}
            </span>
          </a>

          <button
            type="button"
            class="btn secondary"
            @click="closeModal"
          >
            Cerrar
          </button>
        </div>
      </div>
    </article>
  </div>
</template>

<script setup>
import {
  ref,
  computed,
  onMounted,
  onBeforeUnmount,
} from 'vue'

const props = defineProps({
  project: {
    type: Object,
    required: true,
  },

  index: {
    type: Number,
    required: true,
  },

  items: {
    type: Array,
    required: true,
  },
})

const emit = defineEmits([
  'close',
  'next',
  'prev',
])

const closeModal = () => emit('close')
const nextProject = () => emit('next')
const prevProject = () => emit('prev')

/* ================================= */
/*           ENLACE PROYECTO         */
/* ================================= */

const projectUrl = computed(() => {
  return props.project?.url?.trim?.() || ''
})

const isExternalProject = computed(() => {
  return /^https?:\/\//i.test(projectUrl.value)
})

const projectLink = computed(() => {
  if (isExternalProject.value) {
    return projectUrl.value
  }

  return `/projects/${props.project.slug}/`
})

const hasProjectDetails = computed(() => {
  return Boolean(
    props.project?.features?.length ||
    props.project?.technologies?.length
  )
})

/* ================================= */
/*             TOUCH SWIPE           */
/* ================================= */

const touchStartX = ref(0)
const touchEndX = ref(0)
const touchStartY = ref(0)
const touchEndY = ref(0)

function onTouchStart(event) {
  const touch = event.changedTouches[0]

  touchStartX.value = touch.screenX
  touchStartY.value = touch.screenY
}

function onTouchEnd(event) {
  const touch = event.changedTouches[0]

  touchEndX.value = touch.screenX
  touchEndY.value = touch.screenY

  handleSwipe()
}

function handleSwipe() {
  const horizontalDistance =
    touchStartX.value - touchEndX.value

  const verticalDistance =
    touchStartY.value - touchEndY.value

  if (
    Math.abs(horizontalDistance) < 60 ||
    Math.abs(horizontalDistance) <
      Math.abs(verticalDistance)
  ) {
    return
  }

  if (horizontalDistance > 0) {
    nextProject()
  } else {
    prevProject()
  }
}

/* ================================= */
/*         NAVEGACIÓN TECLADO        */
/* ================================= */

function handleKeydown(event) {
  if (event.key === 'Escape') {
    closeModal()
  }

  if (event.key === 'ArrowRight') {
    nextProject()
  }

  if (event.key === 'ArrowLeft') {
    prevProject()
  }
}

/* ================================= */
/*          BLOQUEO DEL BODY         */
/* ================================= */

let previousOverflow = ''

onMounted(() => {
  previousOverflow =
    document.body.style.overflow || ''

  document.body.style.overflow = 'hidden'

  window.addEventListener(
    'keydown',
    handleKeydown
  )
})

onBeforeUnmount(() => {
  document.body.style.overflow =
    previousOverflow

  window.removeEventListener(
    'keydown',
    handleKeydown
  )
})
</script>

<style scoped>
/* ================================= */
/*              OVERLAY              */
/* ================================= */

.modal-overlay {
  position: fixed;
  inset: 0;
  z-index: 9999;

  display: flex;
  align-items: center;
  justify-content: center;

  padding: 24px;

  background:
    rgba(2, 6, 12, 0.86);

  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);

  animation:
    overlayFade 0.25s ease;
}

@keyframes overlayFade {
  from {
    opacity: 0;
  }

  to {
    opacity: 1;
  }
}

/* ================================= */
/*             MODAL CARD            */
/* ================================= */

.modal-card {
  position: relative;

  width: min(1180px, 100%);
  max-height: calc(100vh - 48px);

  display: flex;
  flex-direction: column;

  overflow: hidden;

  border:
    1px solid rgba(250, 204, 21, 0.38);

  border-radius: 24px;

  background:
    radial-gradient(
      circle at top,
      rgba(22, 30, 42, 0.85),
      transparent 38%
    ),
    linear-gradient(
      145deg,
      rgba(10, 13, 18, 0.99),
      rgba(5, 7, 10, 0.99)
    );

  box-shadow:
    0 0 0 1px rgba(255, 255, 255, 0.06),
    0 35px 110px rgba(0, 0, 0, 0.82),
    0 0 45px rgba(250, 204, 21, 0.08);

  animation:
    modalEntrance 0.3s ease;
}

@keyframes modalEntrance {
  from {
    opacity: 0;

    transform:
      translateY(18px)
      scale(0.985);
  }

  to {
    opacity: 1;

    transform:
      translateY(0)
      scale(1);
  }
}

/* ================================= */
/*          BARRA SUPERIOR           */
/* ================================= */

.modal-toolbar {
  position: relative;
  z-index: 40;

  flex-shrink: 0;

  width: 100%;
  min-height: 62px;

  display: flex;
  align-items: center;
  justify-content: space-between;

  padding:
    0 18px 0 28px;

  border-bottom:
    1px solid rgba(250, 204, 21, 0.16);

  background:
    linear-gradient(
      90deg,
      rgba(8, 11, 16, 0.99),
      rgba(13, 17, 23, 0.99)
    );
}

.toolbar-label {
  color:
    rgba(250, 204, 21, 0.76);

  font-size: 0.68rem;
  font-weight: 800;

  letter-spacing: 0.16em;
  text-transform: uppercase;
}

/* ================================= */
/*          BOTÓN DE CERRAR          */
/* ================================= */

.close-btn {
  position: relative;
  z-index: 45;

  width: 42px;
  height: 42px;

  flex-shrink: 0;

  display: flex;
  align-items: center;
  justify-content: center;

  border:
    1px solid rgba(250, 204, 21, 0.65);

  border-radius: 50%;

  background:
    rgba(5, 8, 14, 0.95);

  color: #ffffff;

  font-family: inherit;
  font-size: 1.55rem;
  line-height: 1;

  cursor: pointer;

  box-shadow:
    0 0 16px rgba(250, 204, 21, 0.18);

  transition:
    transform 0.25s ease,
    color 0.25s ease,
    background 0.25s ease,
    box-shadow 0.25s ease;
}

.close-btn:hover {
  transform:
    rotate(90deg);

  background:
    var(--terminal-yellow);

  color: #090909;

  box-shadow:
    0 0 24px rgba(250, 204, 21, 0.62);
}

/* ================================= */
/*          SCROLL DEL MODAL         */
/* ================================= */

.modal-scroll {
  width: 100%;

  flex: 1;
  min-height: 0;

  overflow-y: auto;
  overscroll-behavior: contain;
  touch-action: pan-y;

  padding:
    28px 82px 34px;

  scrollbar-width: thin;

  scrollbar-color:
    var(--terminal-yellow)
    rgba(255, 255, 255, 0.05);
}

.modal-scroll::-webkit-scrollbar {
  width: 8px;
}

.modal-scroll::-webkit-scrollbar-track {
  background:
    rgba(255, 255, 255, 0.04);
}

.modal-scroll::-webkit-scrollbar-thumb {
  border-radius: 999px;

  background:
    var(--terminal-yellow);
}

/* ================================= */
/*            IMAGEN HERO            */
/* ================================= */

.project-media {
  position: relative;

  width: 100%;
  height: 340px;

  overflow: hidden;

  border-radius: 18px;

  background: #05070a;
}

.project-image {
  width: 100%;
  height: 100%;

  display: block;

  object-fit: cover;
  object-position: center;

  transition:
    transform 0.65s ease;
}

.modal-card:hover .project-image {
  transform:
    scale(1.015);
}

.media-overlay {
  position: absolute;
  inset: 0;

  pointer-events: none;

  background:
    linear-gradient(
      to top,
      rgba(5, 7, 10, 0.5),
      transparent 48%
    );
}

/* ================================= */
/*   NAVEGACIÓN GENERAL DEL MODAL    */
/* ================================= */

.nav-btn {
  position: absolute;
  top: calc(50% + 31px);
  z-index: 30;

  width: 52px;
  height: 52px;

  display: flex;
  align-items: center;
  justify-content: center;

  transform:
    translateY(-50%);

  border:
    1px solid var(--terminal-yellow);

  border-radius: 50%;

  background:
    rgba(5, 8, 14, 0.96);

  color: #ffffff;

  font-family: inherit;
  font-size: 2rem;
  line-height: 1;

  cursor: pointer;

  box-shadow:
    0 0 14px rgba(250, 204, 21, 0.38),
    0 10px 30px rgba(0, 0, 0, 0.65);

  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);

  transition:
    transform 0.2s ease,
    color 0.2s ease,
    background 0.2s ease,
    border-color 0.2s ease,
    box-shadow 0.2s ease;
}

.nav-prev {
  left: 20px;
}

.nav-next {
  right: 20px;
}

.nav-btn:hover {
  background:
    var(--terminal-yellow);

  color: #090909;

  box-shadow:
    0 0 24px rgba(250, 204, 21, 0.72),
    0 12px 34px rgba(0, 0, 0, 0.68);
}

.nav-prev:hover {
  transform:
    translateY(-50%)
    translateX(-3px);
}

.nav-next:hover {
  transform:
    translateY(-50%)
    translateX(3px);
}

.nav-btn:active {
  transform:
    translateY(-50%)
    scale(0.94);
}

/* ================================= */
/*      BADGE Y CONTADOR HERO        */
/* ================================= */

.featured-badge,
.project-counter {
  position: absolute;
  bottom: 18px;
  z-index: 3;

  padding:
    8px 13px;

  border:
    1px solid rgba(250, 204, 21, 0.45);

  border-radius: 999px;

  background:
    rgba(5, 8, 14, 0.82);

  font-size: 0.72rem;
  font-weight: 700;

  letter-spacing: 0.08em;

  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
}

.featured-badge {
  left: 18px;

  color:
    var(--terminal-yellow);

  text-transform: uppercase;
}

.project-counter {
  right: 18px;

  color: #d4d4d4;
}

/* ================================= */
/*           ENCABEZADO              */
/* ================================= */

.project-header {
  max-width: 900px;

  margin:
    30px auto 0;

  text-align: center;
}

.project-eyebrow {
  margin:
    0 0 10px;

  color:
    var(--terminal-yellow);

  font-size: 0.72rem;
  font-weight: 700;

  letter-spacing: 0.15em;
  text-transform: uppercase;
}

.project-title {
  margin: 0;

  color: #ffffff;

  font-size:
    clamp(2rem, 4vw, 3.1rem);

  font-weight: 800;
  line-height: 1.05;

  text-shadow:
    0 0 20px rgba(255, 255, 255, 0.08);
}

.project-category {
  margin:
    12px 0 0;

  color:
    var(--terminal-yellow);

  font-size: 0.9rem;
  font-weight: 700;

  letter-spacing: 0.1em;
  text-transform: uppercase;
}

.project-description {
  max-width: 860px;

  margin:
    22px auto 0;

  color: #d1d5db;

  font-size: 0.97rem;
  line-height: 1.8;
}

/* ================================= */
/*             DIVISOR               */
/* ================================= */

.project-divider {
  width:
    min(860px, calc(100% - 80px));

  height: 1px;

  margin:
    28px auto 0;

  background:
    linear-gradient(
      to right,
      transparent,
      rgba(250, 204, 21, 0.75),
      transparent
    );

  box-shadow:
    0 0 10px rgba(250, 204, 21, 0.14);
}

/* ================================= */
/*       INFORMACIÓN EN COLUMNAS     */
/* ================================= */

.project-details {
  display: grid;

  grid-template-columns:
    minmax(0, 1.15fr)
    minmax(0, 0.85fr);

  gap: 52px;

  max-width: 900px;

  margin:
    30px auto 0;
}

.details-column {
  min-width: 0;
}

.details-title {
  display: flex;
  align-items: center;

  gap: 10px;

  margin:
    0 0 18px;

  color:
    var(--terminal-yellow);

  font-size: 0.9rem;
  font-weight: 800;

  letter-spacing: 0.06em;
  text-transform: uppercase;
}

.terminal-symbol {
  font-size: 1.05rem;

  text-shadow:
    0 0 10px rgba(250, 204, 21, 0.7);
}

.technology-icon {
  position: relative;

  width: 22px;
  height: 22px;

  flex-shrink: 0;

  border:
    1px solid var(--terminal-yellow);

  transform:
    rotate(45deg);

  box-shadow:
    0 0 10px rgba(250, 204, 21, 0.25);
}

.technology-icon::before {
  content: '';

  position: absolute;
  inset: 6px;

  border:
    1px solid var(--terminal-yellow);
}

/* ================================= */
/*          FUNCIONALIDADES          */
/* ================================= */

.features-list {
  display: flex;
  flex-direction: column;

  gap: 10px;

  margin: 0;
  padding: 0;

  list-style: none;
}

.features-list li {
  display: flex;
  align-items: flex-start;

  gap: 10px;

  color: #d4d4d4;

  font-size: 0.9rem;
  line-height: 1.5;
}

.feature-arrow {
  flex-shrink: 0;

  color:
    var(--terminal-yellow);

  font-weight: 800;

  text-shadow:
    0 0 8px rgba(250, 204, 21, 0.72);
}

/* ================================= */
/*            TECNOLOGÍAS            */
/* ================================= */

.technologies-list {
  display: flex;
  flex-wrap: wrap;

  gap: 12px;
}

.technology-tag {
  min-height: 44px;

  display: inline-flex;
  align-items: center;
  justify-content: center;

  padding:
    0 18px;

  border:
    1px solid rgba(250, 204, 21, 0.45);

  border-radius: 7px;

  background:
    rgba(250, 204, 21, 0.025);

  color:
    var(--terminal-yellow);

  font-size: 0.8rem;
  font-weight: 700;

  box-shadow:
    inset 0 0 12px rgba(250, 204, 21, 0.02);

  transition:
    transform 0.2s ease,
    border-color 0.2s ease,
    background 0.2s ease,
    box-shadow 0.2s ease;
}

.technology-tag:hover {
  transform:
    translateY(-2px);

  border-color:
    var(--terminal-yellow);

  background:
    rgba(250, 204, 21, 0.09);

  box-shadow:
    0 0 16px rgba(250, 204, 21, 0.12);
}

/* ================================= */
/*             BOTONES               */
/* ================================= */

.modal-actions {
  display: flex;
  flex-wrap: wrap;

  gap: 14px;

  max-width: 900px;

  margin:
    34px auto 0;
}

.btn {
  min-height: 54px;

  display: inline-flex;
  align-items: center;
  justify-content: center;

  gap: 10px;

  padding:
    0 24px;

  border-radius: 7px;

  font-family: inherit;
  font-size: 0.91rem;
  font-weight: 800;

  text-decoration: none;

  cursor: pointer;

  transition:
    transform 0.2s ease,
    color 0.2s ease,
    background 0.2s ease,
    border-color 0.2s ease,
    box-shadow 0.2s ease;
}

.btn.primary {
  border:
    1px solid var(--terminal-yellow);

  background:
    var(--terminal-yellow);

  color: #090909;

  box-shadow:
    0 0 18px rgba(250, 204, 21, 0.48),
    0 12px 32px rgba(250, 204, 21, 0.18);
}

.btn.primary:hover {
  transform:
    translateY(-2px);

  box-shadow:
    0 0 28px rgba(250, 204, 21, 0.68),
    0 18px 42px rgba(250, 204, 21, 0.25);
}

.btn.secondary {
  border:
    1px solid rgba(250, 204, 21, 0.6);

  background:
    transparent;

  color:
    var(--terminal-yellow);
}

.btn.secondary:hover {
  transform:
    translateY(-2px);

  border-color:
    var(--terminal-yellow);

  background:
    rgba(250, 204, 21, 0.1);

  box-shadow:
    0 0 18px rgba(250, 204, 21, 0.12);
}

.button-icon {
  font-size: 1.1rem;

  transition:
    transform 0.2s ease;
}

.btn.primary:hover .button-icon {
  transform:
    translate(2px, -2px);
}

/* ================================= */
/*              TABLET               */
/* ================================= */

@media (max-width: 850px) {
  .modal-overlay {
    padding: 14px;
  }

  .modal-card {
    max-height:
      calc(100vh - 28px);
  }

  .modal-toolbar {
    min-height: 58px;

    padding:
      0 14px 0 20px;
  }

  .toolbar-label {
    font-size: 0.62rem;
  }

  .modal-scroll {
    padding:
      20px 62px 28px;
  }

  .project-media {
    height: 280px;
  }

  .nav-btn {
    top: calc(50% + 29px);

    width: 44px;
    height: 44px;

    font-size: 1.6rem;
  }

  .nav-prev {
    left: 10px;
  }

  .nav-next {
    right: 10px;
  }

  .project-details {
    grid-template-columns: 1fr;

    gap: 30px;
  }

  .project-divider {
    width:
      calc(100% - 40px);
  }
}

/* ================================= */
/*              MOBILE               */
/* ================================= */

@media (max-width: 600px) {
  .modal-overlay {
    padding: 0;

    align-items: flex-end;
  }

  .modal-card {
    max-height: 96vh;

    border-right: none;
    border-bottom: none;
    border-left: none;

    border-radius:
      20px 20px 0 0;
  }

  .modal-toolbar {
    min-height: 56px;

    padding:
      0 12px 0 16px;
  }

  .toolbar-label {
    max-width: 220px;

    overflow: hidden;

    font-size: 0.58rem;

    text-overflow: ellipsis;
    white-space: nowrap;
  }

  .close-btn {
    width: 38px;
    height: 38px;

    font-size: 1.35rem;
  }

  .modal-scroll {
    padding:
      14px 14px 28px;
  }

  .project-media {
    height: 230px;

    border-radius: 14px;
  }

  /*
    En celular las flechas continúan cambiando
    toda la modal, pero se colocan abajo para
    evitar cubrir el contenido.
  */
  .nav-btn {
    position: fixed;

    top: auto;
    bottom: 18px;

    width: 46px;
    height: 46px;

    transform: none;

    background:
      rgba(5, 8, 14, 0.97);
  }

  .nav-prev {
    left: 18px;
  }

  .nav-next {
    right: 18px;
  }

  .nav-prev:hover,
  .nav-next:hover,
  .nav-btn:active {
    transform: none;
  }

  .featured-badge {
    display: none;
  }

  .project-counter {
    right: 12px;
    bottom: 12px;
  }

  .project-header {
    margin-top: 24px;
  }

  .project-eyebrow {
    font-size: 0.62rem;
  }

  .project-title {
    font-size: 1.75rem;
  }

  .project-category {
    font-size: 0.74rem;
  }

  .project-description {
    margin-top: 18px;

    font-size: 0.9rem;
    line-height: 1.65;
  }

  .project-divider {
    width: 100%;

    margin-top: 24px;
  }

  .project-details {
    margin-top: 24px;
  }

  .details-title {
    font-size: 0.8rem;
  }

  .features-list li {
    font-size: 0.85rem;
  }

  .technology-tag {
    min-height: 40px;

    padding:
      0 14px;

    font-size: 0.74rem;
  }

  .modal-actions {
    flex-direction: column;

    margin-top: 28px;
    padding-bottom: 64px;
  }

  .btn {
    width: 100%;
  }
}
</style>