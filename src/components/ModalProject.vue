<template>
  <div class="modal-overlay" @click.self="close">

    <div class="modal-content">

      <!-- FLECHAS AFUERA DE LA MODAL Y CENTRADAS -->
      <button class="arrow left" @click.stop="$emit('prev')">‹</button>
      <button class="arrow right" @click.stop="$emit('next')">›</button>

      <!-- IMAGEN -->
      <div class="image-wrapper">
        <transition name="netflix" mode="out-in">
          <img :src="project.image" :key="project.image" class="modal-img" />
        </transition>
      </div>

      <!-- TEXTO -->
      <div class="info-wrapper">

          <h2 class="modal-title">{{ project.title }}</h2>
          <p class="modal-category">{{ project.category }}</p>

          <blockquote class="modal-description">
            {{ project.description }}
          </blockquote>

          <div class="buttons">
            <button @click="openURL(project.url)">Ver Proyecto</button>
            <button @click="close">Cerrar</button>
          </div>

        </div>


    </div>

  </div>
</template>

<script setup>
const props = defineProps({
  project: Object
})

const emit = defineEmits(["close", "next", "prev"])

function close() {
  emit("close")
}

function openURL(url) {
  window.open(url, "_blank")
}
</script>

<style scoped>
/* ------------------- */
/* OVERLAY */
/* ------------------- */
.modal-overlay {
  position: fixed;
  inset: 0;
  background: rgba(0,0,0,0.55);
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 9999;
}

/* ------------------- */
/* CONTENEDOR MODAL */
/* ------------------- */
.modal-content {
  width: 900px;
  max-width: 95%;
  background: white;
  border-radius: 18px;
  overflow: visible; /* 🔥🔥 PARA QUE LAS FLECHAS NO SE RECORTEN */
  position: relative;
  animation: modalPop .35s ease;
}

/* ------------------------------ */
/*      TITULOS PREMIUM           */
/* ------------------------------ */
.modal-title {
  font-size: 1.6rem;
  font-weight: 700;
  margin: 0 0 8px 0;
  color: #111827; /* gris oscuro elegante */
}

.modal-category {
  font-size: 1.1rem;
  font-weight: 600;
  color: #374151;
  margin-bottom: 18px;
}

/* ------------------------------ */
/*      DESCRIPCIÓN TIPO CITA     */
/* ------------------------------ */
.modal-description {
  border-left: 4px solid #d1d5db; /* Gris clarito elegante */
  padding-left: 14px;
  margin-left: 4px;
  color: #4b5563;
  font-size: 1rem;
  line-height: 1.55;
  margin-bottom: 24px;
}


/* ------------------- */
/* IMAGEN */
/* ------------------- */
.image-wrapper {
  height: 360px;
  overflow: hidden;
}

.modal-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
/* ------------------- */
/* FLECHAS — PERFECT 😎 */
/* ------------------- */
.arrow {
  position: absolute;
  top: 50%; /* Centro exacto de la modal */
  transform: translateY(-50%);

  width: 60px;
  height: 60px;
  border-radius: 50%;
  border: none;

  background: #1d4ed8;
  color: white;
  font-size: 32px;
  cursor: pointer;

  display: flex;
  justify-content: center;
  align-items: center;

  box-shadow: 0 6px 22px rgba(0,0,0,0.25);

  transition: transform .25s ease, background .25s ease;
  z-index: 99999;
}

/* HOVER: crece suave sin moverse */
.arrow:hover {
  transform: translateY(-50%) scale(1.18); /* 🔥 Crece pero NO se desplaza */
  background: #0f2fa8;
}

/* POSICIÓN EXACTA DONDE MARCASTE */
.arrow.left {
  left: -35px;
}

.arrow.right {
  right: -35px;
}

/* ------------------- */
/* TEXTO */
/* ------------------- */
.info-wrapper {
  padding: 25px;
}

.category {
  font-weight: bold;
  opacity: .7;
}

.buttons {
  margin-top: 20px;
  display: flex;
  gap: 15px;
}

.buttons button {
  padding: 10px 22px;
  border-radius: 10px;
  background: #2563eb;
  border: none;
  color: white;
  cursor: pointer;
  transition: .2s;
}

.buttons button:hover {
  background: #1e3a8a;
}

/* ------------------- */
/* TRANSICIÓN NETFLIX */
/* ------------------- */
.netflix-enter-active,
.netflix-leave-active {
  transition: opacity .35s ease;
}

.netflix-enter-from,
.netflix-leave-to {
  opacity: 0;
}

/* ------------------- */
/* ANIMACIÓN DE APERTURA */
/* ------------------- */
@keyframes modalPop {
  from { transform: scale(.85); opacity: 0; }
  to   { transform: scale(1); opacity: 1; }
}
</style>
