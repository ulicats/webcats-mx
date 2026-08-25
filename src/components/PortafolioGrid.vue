<template>
  <section class="portafolio-section">

    <!-- ================================================= -->
    <!--                FILTROS PORTAFOLIO                 -->
    <!-- ================================================= -->

    <div class="portfolio-filters">
      <button
        v-for="filter in filters"
        :key="filter.value"
        class="filter-button"
        :class="{ active: activeFilter === filter.value }"
        @click="changeFilter(filter.value)"
      >
        {{ filter.label }}
      </button>
    </div>

    <!-- ================================================= -->
    <!--                  GRID PORTAFOLIO                  -->
    <!-- ================================================= -->

    <div class="portafolio-grid">

      <div
        v-for="(item, index) in filteredItems"
        :key="item.id"
        class="portafolio-card"
        @click="openModal(index)"
      >
        <div class="cover-wrapper">

          <img
            :src="item.image"
            :alt="item.title"
            class="card-img"
          />

          <!-- Badge -->
          <span
            v-if="item.status"
            class="project-status"
            :class="item.status"
          >
              {{
                item.status === 'production'
                  ? 'Producción'
                  : item.status === 'local'
                  ? 'Local'
                  : 'Demo'
              }}
          </span>

          <div class="play-overlay">

            <svg
              class="eye-icon"
              viewBox="0 0 24 24"
              aria-hidden="true"
            >
              <path
                d="M12 5c-7 0-10 7-10 7s3 7 10 7 10-7 10-7-3-7-10-7zm0 11a4 4 0 1 1 0-8 4 4 0 0 1 0 8z"
              />

              <circle
                cx="12"
                cy="12"
                r="2"
              />
            </svg>

            <span class="eye-text">
              Ver detalles
            </span>

          </div>

        </div>

        <div class="card-info">

          <h3 class="project-title">
            {{ item.title }}
          </h3>

          <p class="project-meta">
            {{ item.client }}
          </p>

        </div>

      </div>

    </div>

    <!-- ================================================= -->
    <!--                       MODAL                       -->
    <!-- ================================================= -->

    <ModalProject
      v-if="showModal"
      :project="filteredItems[currentIndex]"
      :index="currentIndex"
      :items="filteredItems"
      @close="showModal = false"
      @next="nextProject"
      @prev="prevProject"
    />

  </section>
</template>

<script setup>
import { ref, computed } from 'vue'
import ModalProject from '@/components/ModalProject.vue'
import { portafolio as items } from '@/data/portafolio.js'


/* ================================================= */
/*                    FILTROS                        */
/* ================================================= */

const filters = [
  {
    label: 'Todos',
    value: 'all'
  },
  {
    label: 'Locales',
    value: 'local'
  },
  {
    label: 'Demos',
    value: 'demo'
  },
  {
    label: 'Producción',
    value: 'production'
  }
]

const activeFilter = ref('all')


const filteredItems = computed(() => {

  if (activeFilter.value === 'all') {
    return items
  }

  return items.filter(
    item => item.status === activeFilter.value
  )

})


function changeFilter(filter) {

  activeFilter.value = filter

  // Cerramos modal por seguridad si estaba abierto
  showModal.value = false

}


/* ================================================= */
/*                     MODAL                         */
/* ================================================= */

const showModal = ref(false)

const currentIndex = ref(0)


function openModal(i) {

  currentIndex.value = i

  showModal.value = true

}


function nextProject() {

  currentIndex.value =
    (currentIndex.value + 1) % filteredItems.value.length

}


function prevProject() {

  currentIndex.value =
    (currentIndex.value - 1 + filteredItems.value.length)
    % filteredItems.value.length

}
</script>

<style scoped>

/* ================================================= */
/*                PORTAFOLIO GRID                    */
/* ================================================= */

.portafolio-section {
  padding: 40px 60px;
}


/* ================================================= */
/*                    FILTROS                        */
/* ================================================= */

.portfolio-filters {

  display: flex;

  justify-content: center;

  align-items: center;

  gap: 38px;

  margin-bottom: 40px;

}


.filter-button {

  position: relative;

  background: transparent;

  border: none;

  color: #777;

  font-size: 0.85rem;

  font-weight: 600;

  letter-spacing: 1px;

  text-transform: uppercase;

  padding: 10px 4px;

  cursor: pointer;

  transition:
    color .25s ease,
    text-shadow .25s ease;

}


.filter-button:hover {

  color: #fff;

}


.filter-button::after {

  content: '';

  position: absolute;

  left: 50%;

  bottom: 0;

  width: 0;

  height: 2px;

  background: var(--terminal-yellow);

  transform: translateX(-50%);

  transition: width .3s ease;

}


.filter-button:hover::after {

  width: 40%;

}


.filter-button.active {

  color: var(--terminal-yellow);

  text-shadow:
    0 0 10px rgba(250, 204, 21, 0.35);

}


.filter-button.active::after {

  width: 100%;

}


/* ================================================= */
/*                     GRID                          */
/* ================================================= */

.portafolio-grid {

  display: grid;

  grid-template-columns: repeat(4, 1fr);

  gap: 28px;

}


/* ================================================= */
/*                     CARD                          */
/* ================================================= */

.portafolio-card {

  background: #181818;

  overflow: hidden;

  cursor: pointer;

  transition:
    background .25s ease,
    transform .25s ease;

}


.portafolio-card:hover {

  background: #080808;

  transform: translateY(-3px);

}


/* ================================================= */
/*                  COVER / IMAGE                    */
/* ================================================= */

.cover-wrapper {

  position: relative;

  width: 100%;

  cursor: pointer;

}


.card-img {

  width: 100%;

  aspect-ratio: 1 / 1;

  object-fit: contain;

  border-radius: 0;

  position: relative;

  z-index: 0;

}


/* Overlay oscuro */

.cover-wrapper::after {

  content: '';

  position: absolute;

  inset: 0;

  background: rgba(0, 0, 0, 0.65);

  opacity: 0;

  transition: opacity .25s ease;

  z-index: 1;

}


.portafolio-card:hover .cover-wrapper::after {

  opacity: 1;

}


/* ================================================= */
/*                BADGE PROYECTO                     */
/* ================================================= */

.project-status {

  position: absolute;

  top: 12px;

  right: 12px;

  z-index: 3;

  padding: 6px 10px;

  font-size: 0.62rem;

  font-weight: 700;

  letter-spacing: 1px;

  text-transform: uppercase;

  border-radius: 2px;

  backdrop-filter: blur(8px);

}


.project-status.demo {

  color: var(--terminal-yellow);

  background: rgba(0, 0, 0, 0.72);

  border: 1px solid rgba(250, 204, 21, 0.45);

}


.project-status.production {

  color: #fff;

  background: rgba(20, 20, 20, 0.82);

  border: 1px solid rgba(255, 255, 255, 0.25);

}


/* ================================================= */
/*              PLAY OVERLAY (OJO)                   */
/* ================================================= */

.play-overlay {

  position: absolute;

  top: 50%;

  left: 50%;

  transform: translate(-50%, -55%) scale(0.95);

  opacity: 0;

  display: flex;

  flex-direction: column;

  align-items: center;

  gap: 8px;

  transition:
    opacity .3s ease,
    transform .3s ease;

  z-index: 2;

}


.portafolio-card:hover .play-overlay {

  opacity: 1;

  transform: translate(-50%, -50%) scale(1);

}


/* ================================================= */
/*                  EYE ICON                         */
/* ================================================= */

.eye-icon {

  width: 44px;

  height: 44px;

  fill: var(--terminal-yellow);

  filter:
    drop-shadow(0 0 6px rgba(250, 204, 21, 0.9))
    drop-shadow(0 0 14px rgba(250, 204, 21, 0.6))
    drop-shadow(0 0 28px rgba(250, 204, 21, 0.45));

  mix-blend-mode: screen;

}


@keyframes eyeGlow {

  0% {

    filter:
      drop-shadow(0 0 6px rgba(250, 204, 21, 0.9))
      drop-shadow(0 0 14px rgba(250, 204, 21, 0.6))
      drop-shadow(0 0 28px rgba(250, 204, 21, 0.45));

  }

  50% {

    filter:
      drop-shadow(0 0 10px rgba(250, 204, 21, 1))
      drop-shadow(0 0 22px rgba(250, 204, 21, 0.8))
      drop-shadow(0 0 36px rgba(250, 204, 21, 0.6));

  }

  100% {

    filter:
      drop-shadow(0 0 6px rgba(250, 204, 21, 0.9))
      drop-shadow(0 0 14px rgba(250, 204, 21, 0.6))
      drop-shadow(0 0 28px rgba(250, 204, 21, 0.45));

  }

}


.portafolio-card:hover .eye-icon {

  animation: eyeGlow 2.5s ease-in-out infinite;

}


/* ================================================= */
/*                  EYE TEXT                         */
/* ================================================= */

.eye-text {

  font-size: 0.8rem;

  font-weight: 600;

  color: var(--terminal-yellow);

  letter-spacing: 0.6px;

  text-shadow:
    0 0 6px rgba(250, 204, 21, 0.8),
    0 0 14px rgba(250, 204, 21, 0.5);

  mix-blend-mode: screen;

}


/* ================================================= */
/*                CARD INFO                          */
/* ================================================= */

.card-info {

  padding: 16px 14px 14px;

}


.project-title {

  font-size: 0.95rem;

  font-weight: 600;

  color: #fff;

  margin: 0;

}


.project-meta {

  font-size: 0.8rem;

  color: #a7a7a7;

  margin-top: 4px;

}


/* ================================================= */
/*                  RESPONSIVE                       */
/* ================================================= */


/* Tablet */

@media (max-width: 992px) {

  .portafolio-section {

    padding: 30px;

  }


  .portafolio-grid {

    grid-template-columns: repeat(2, 1fr);

    gap: 22px;

  }

}


/* Mobile */

@media (max-width: 600px) {

  .portafolio-section {

    padding: 20px;

  }


  .portfolio-filters {

    gap: 20px;

    margin-bottom: 28px;

  }


  .filter-button {

    font-size: 0.72rem;

  }


  .portafolio-grid {

    grid-template-columns: 1fr;

    gap: 18px;

  }


  .card-img {

    height: auto;

    aspect-ratio: 1 / 1;

  }

}

</style>