<template>
  <section class="portafolio-section">

    <div class="portafolio-grid">
        <div 
          v-for="(item, index) in items" 
          :key="item.id"
          class="portafolio-card"
          @click="openModal(index)"
        >
          <div class="cover-wrapper">
            <img :src="item.image" class="card-img" />
            <div class="play-overlay">
               <svg class="eye-icon" viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M12 5c-7 0-10 7-10 7s3 7 10 7 10-7 10-7-3-7-10-7zm0 11a4 4 0 1 1 0-8 4 4 0 0 1 0 8z"/>
                  <circle cx="12" cy="12" r="2"/>
                </svg>
              <span class="eye-text">Ver detalles</span>
            </div>
           
          </div>

          <div class="card-info">
            <h3 class="project-title">{{ item.title }}</h3>
            <p class="project-meta">{{ item.client }}</p>
          </div>
        </div>

    </div>

    <ModalProject 
      v-if="showModal"
      :project="items[currentIndex]"
      :index="currentIndex"
      :items="items"
      @close="showModal=false"
      @next="nextProject"
      @prev="prevProject"
    />

  </section>
</template>

<script setup>
import { ref } from 'vue'
import ModalProject from '@/components/ModalProject.vue'
import { portafolio as items } from '@/data/portafolio.js'

const showModal = ref(false)
const currentIndex = ref(0)

function openModal(i){
  currentIndex.value = i
  showModal.value = true
}

function nextProject(){
  currentIndex.value = (currentIndex.value + 1) % items.length
}

function prevProject(){
  currentIndex.value = 
    (currentIndex.value - 1 + items.length) % items.length
}
</script>

<style scoped>
/* ================================================= */
/*                PORTAFOLIO GRID                    */
/* ================================================= */

.portafolio-section {
  padding: 40px 60px;
}

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
  transition: background .25s ease;
}

.portafolio-card:hover {
  background: #080808;
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
  object-fit: cover;
  border-radius: 0;
  position: relative;
  z-index: 0;
}

/* Overlay oscuro (escena) */
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

  transition: opacity .3s ease, transform .3s ease;
  z-index: 2; /* SIEMPRE encima del overlay */
}

.portafolio-card:hover .play-overlay {
  opacity: 1;
  transform: translate(-50%, -50%) scale(1);
}

/* ================================================= */
/*                  EYE ICON (SVG)                   */
/* ================================================= */

.eye-icon {
  width: 44px;
  height: 44px;
  fill: var(--terminal-yellow);

  /* Glow encendido */
  filter:
    drop-shadow(0 0 6px rgba(250, 204, 21, 0.9))
    drop-shadow(0 0 14px rgba(250, 204, 21, 0.6))
    drop-shadow(0 0 28px rgba(250, 204, 21, 0.45));

  /* Mezcla luminosa */
  mix-blend-mode: screen;
}

/* Pulso sutil solo en hover */
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
/*                CARD INFO (TEXT)                   */
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

  .portafolio-grid {
    grid-template-columns: 1fr;
    gap: 18px;
  }

  .card-img {
    height: 180px;
  }
}

</style>
