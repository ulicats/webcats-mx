<template>
  <section class="portfolio-section">

    <h1 class="portfolio-title">Proyectos Realizados</h1>

    <div class="portfolio-grid">
      <div 
        v-for="(item, index) in items" 
        :key="item.id"
        class="portfolio-card"
        @click="openModal(index)"
      >
        <img :src="item.image" class="card-img" />
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
.portfolio-section {
  padding: 40px 60px;
}

.portfolio-title {
  font-size: 2.4rem;
  font-weight: 800;
  margin-bottom: 35px;
  text-align: left;
  color: #1e1e1e;
}

/* ========== DESKTOP (se queda EXACTO como tu diseño original) ========== */
.portfolio-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr); /* Conservado */
  gap: 28px;
}

/* Card */
.portfolio-card {
  cursor: pointer;
  overflow: hidden;
  border-radius: 14px;
  background: #fff;
  box-shadow: 0 4px 15px rgba(0,0,0,0.12);
  transition: transform .25s;
}

.portfolio-card:hover {
  transform: translateY(-6px);
}

/* Imágenes */
.card-img {
  width: 100%;
  height: 210px; /* Conservado */
  object-fit: cover;
  border-radius: 14px;
}

/* ========== RESPONSIVE ========== */

/* TABLET: 2 columnas */
@media (max-width: 992px) {
  .portfolio-section {
    padding: 30px 30px;
  }
  .portfolio-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 22px;
  }
  .card-img {
    height: 190px;
  }
}

/* MÓVIL: 1 columna bien centrada y proporcionada */
@media (max-width: 600px) {
  .portfolio-section {
    padding: 20px 20px;
  }
  .portfolio-grid {
    grid-template-columns: 1fr;
    gap: 18px;
  }
  .card-img {
    height: 180px; /* Bonita proporción en pantalla chica */
  }
}

</style>
