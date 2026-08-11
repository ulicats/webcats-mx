<template>
  <section id="galeria" class="gallery-section">
    <div class="gallery-container">

      <div class="gallery-header">
        <div>
          <p class="gallery-eyebrow">
            Conoce cada rincón
          </p>

          <h2>
            Galeria de fotos
            <span>para tu negocio</span>
          </h2>
        </div>

        <p class="gallery-description">
          Las personas va a ver las fotos de tu local, casa o cabaña.
          Aquí pueden ver todo con calma.
        </p>
      </div>


      <!-- GALERÍA PRINCIPAL -->
      <div class="gallery-grid">
        <button
          v-for="(image, index) in visibleImages"
          :key="image"
          type="button"
          class="gallery-item"
          :class="{ 'gallery-item--large': index === 0 }"
          @click="openGallery(index)"
        >
          <img
            :src="image"
            :alt="`hospedaje Cabañas Mazamitla - fotografía ${index + 1}`"
          />

          <div class="gallery-item__overlay">
            <span>Ver fotografía</span>
          </div>
        </button>
      </div>


      <!-- BOTÓN TODAS LAS FOTOS -->
      <div class="gallery-actions">
        <button
          type="button"
          class="gallery-button"
          @click="openGallery(0)"
        >
          Ver todas las fotos
          <span class="gallery-button__count">
            {{ images.length }}
          </span>
        </button>
      </div>


      <!-- LIGHTBOX -->
      <Teleport to="body">
        <div
          v-if="isOpen"
          class="gallery-lightbox"
          @click.self="closeGallery"
        >
          <button
            type="button"
            class="gallery-lightbox__close"
            aria-label="Cerrar galería"
            @click="closeGallery"
          >
            ×
          </button>


          <button
            type="button"
            class="gallery-lightbox__nav gallery-lightbox__nav--prev"
            aria-label="Fotografía anterior"
            @click="previousImage"
          >
            ‹
          </button>


          <div class="gallery-lightbox__content">
            <img
              :src="images[currentImage]"
              :alt="`hospedaje Cabañas Mazamitla - fotografía ${currentImage + 1}`"
            />

            <div class="gallery-lightbox__counter">
              {{ currentImage + 1 }} / {{ images.length }}
            </div>
          </div>


          <button
            type="button"
            class="gallery-lightbox__nav gallery-lightbox__nav--next"
            aria-label="Siguiente fotografía"
            @click="nextImage"
          >
            ›
          </button>
        </div>
      </Teleport>

    </div>
  </section>
</template>


<script setup>
import { computed, onBeforeUnmount, onMounted, ref } from "vue";


/*
|--------------------------------------------------------------------------
| Vite importa automáticamente TODAS las imágenes de esta carpeta.
|--------------------------------------------------------------------------
*/

const modules = import.meta.glob(
  "../../../assets/projects/hospedaje/gallery/*.{jpg,jpeg,png,webp}",
  {
    eager: true,
    import: "default",
  }
);


/*
|--------------------------------------------------------------------------
| Ordenamos gallery-1, gallery-2, gallery-3...
| para evitar que gallery-10 aparezca antes de gallery-2.
|--------------------------------------------------------------------------
*/

const images = Object.entries(modules)
  .sort(([pathA], [pathB]) => {
    const numberA =
      Number(pathA.match(/gallery-(\d+)/)?.[1]) || 0;

    const numberB =
      Number(pathB.match(/gallery-(\d+)/)?.[1]) || 0;

    return numberA - numberB;
  })
  .map(([, image]) => image);


/*
|--------------------------------------------------------------------------
| Solo enseñamos 6 fotografías en la página.
| Las 26 quedan disponibles dentro del lightbox.
|--------------------------------------------------------------------------
*/

const visibleImages = computed(() => {
  return images.slice(0, 6);
});


const isOpen = ref(false);
const currentImage = ref(0);


function openGallery(index = 0) {
  currentImage.value = index;
  isOpen.value = true;

  document.body.style.overflow = "hidden";
}


function closeGallery() {
  isOpen.value = false;

  document.body.style.overflow = "";
}


function nextImage() {
  currentImage.value =
    (currentImage.value + 1) % images.length;
}


function previousImage() {
  currentImage.value =
    (currentImage.value - 1 + images.length) %
    images.length;
}


function handleKeyboard(event) {
  if (!isOpen.value) return;

  if (event.key === "Escape") {
    closeGallery();
  }

  if (event.key === "ArrowRight") {
    nextImage();
  }

  if (event.key === "ArrowLeft") {
    previousImage();
  }
}


onMounted(() => {
  window.addEventListener("keydown", handleKeyboard);
});


onBeforeUnmount(() => {
  window.removeEventListener("keydown", handleKeyboard);

  document.body.style.overflow = "";
});
</script>


<style scoped>
.gallery-section {
  padding: 110px 0;
  background: var(--hospedaje-navy);
}

.gallery-container {
  width: min(1180px, calc(100% - 40px));
  margin: 0 auto;
}

#galeria {
  scroll-margin-top: 120px;
}


/* HEADER */

.gallery-header {
  display: grid;
  grid-template-columns: 1fr 0.7fr;
  align-items: end;
  gap: 70px;

  margin-bottom: 55px;
}

.gallery-eyebrow {
  margin-bottom: 12px;

  color: var(--hospedaje-gold-light);

  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.22em;
  text-transform: uppercase;
}

.gallery-header h2 {
  color: var(--hospedaje-white);

  font-family: var(--hospedaje-heading);
  font-size: clamp(48px, 5vw, 76px);
  font-weight: 500;
  line-height: 0.95;
}

.gallery-header h2 span {
  display: block;

  color: var(--hospedaje-gold-light);

  font-style: italic;
}

.gallery-description {
  color: rgba(255, 255, 255, 0.7);

  font-size: 15px;
  line-height: 1.8;
}


/* GRID */

.gallery-grid {
  display: grid;

  grid-template-columns:
    1.55fr
    1fr
    1fr;

  grid-auto-rows: 250px;

  gap: 14px;
}

.gallery-item {
  position: relative;

  padding: 0;

  overflow: hidden;

  border: 0;
  border-radius: 18px;

  background: transparent;

  cursor: pointer;
}

.gallery-item--large {
  grid-row: span 2;
}

.gallery-item img {
  width: 100%;
  height: 100%;

  object-fit: cover;

  transition: transform 0.5s ease;
}

.gallery-item:hover img {
  transform: scale(1.04);
}


/* OVERLAY */

.gallery-item__overlay {
  position: absolute;
  inset: 0;

  display: flex;
  align-items: flex-end;

  padding: 20px;

  opacity: 0;

  background:
    linear-gradient(
      transparent 50%,
      rgba(0, 0, 0, 0.55)
    );

  transition: opacity 0.3s ease;
}

.gallery-item:hover .gallery-item__overlay {
  opacity: 1;
}

.gallery-item__overlay span {
  color: white;

  font-size: 12px;
  font-weight: 600;
}


/* BOTÓN */

.gallery-actions {
  display: flex;
  justify-content: center;
  margin-top: 28px;
}

.gallery-button {
  display: inline-flex;
  align-items: center;

  gap: 12px;

  padding: 14px 22px;

  color: white;

  border:
    1px solid
    rgba(255, 255, 255, 0.28);

  border-radius: 999px;

  background:
    rgba(255, 255, 255, 0.04);

  font-family: var(--hospedaje-body);
  font-size: 13px;
  font-weight: 600;

  cursor: pointer;

  transition:
    background 0.25s ease,
    border-color 0.25s ease;
}

.gallery-button:hover {
  background:
    rgba(255, 255, 255, 0.1);

  border-color:
    var(--hospedaje-gold-light);
}

.gallery-button span {
  display: flex;
  align-items: center;
  justify-content: center;

  min-width: 28px;
  height: 28px;

  padding: 0 7px;

  color: #1a2f44;

  border-radius: 999px;

  background:
    var(--hospedaje-gold-light);

  font-size: 11px;
}

.gallery-button__count {
  display: inline-flex;
  align-items: center;
  justify-content: center;

  min-width: 30px;
  height: 30px;
  padding: 0 8px;

  border-radius: 999px;

  background: var(--hospedaje-gold-light);
  color: #1a2f44;

  font-size: 12px;
  font-weight: 700;
  line-height: 1;
}


/* =========================================
   LIGHTBOX
========================================= */

.gallery-lightbox {
  position: fixed;
  z-index: 99999;

  inset: 0;

  display: flex;
  align-items: center;
  justify-content: center;

  padding: 30px 80px;

  background:
    rgba(6, 17, 28, 0.96);

  backdrop-filter: blur(10px);
}

.gallery-lightbox__content {
  position: relative;

  display: flex;
  align-items: center;
  justify-content: center;

  max-width: 1200px;
  max-height: 88vh;
}

.gallery-lightbox__content img {
  display: block;

  max-width: 100%;
  max-height: 86vh;

  object-fit: contain;

  border-radius: 12px;
}


/* CONTADOR */

.gallery-lightbox__counter {
  position: absolute;

  left: 50%;
  bottom: -40px;

  transform: translateX(-50%);

  color:
    rgba(255, 255, 255, 0.75);

  font-size: 12px;
  letter-spacing: 0.08em;
}


/* CERRAR */

.gallery-lightbox__close {
  position: absolute;

  top: 24px;
  right: 30px;

  width: 45px;
  height: 45px;

  color: white;

  border:
    1px solid
    rgba(255, 255, 255, 0.2);

  border-radius: 50%;

  background:
    rgba(255, 255, 255, 0.07);

  font-size: 28px;
  line-height: 1;

  cursor: pointer;
}


/* FLECHAS */

.gallery-lightbox__nav {
  position: absolute;

  top: 50%;

  width: 52px;
  height: 52px;

  transform: translateY(-50%);

  color: white;

  border:
    1px solid
    rgba(255, 255, 255, 0.22);

  border-radius: 50%;

  background:
    rgba(255, 255, 255, 0.06);

  font-size: 36px;

  cursor: pointer;

  transition: background 0.25s ease;
}

.gallery-lightbox__nav:hover {
  background:
    rgba(255, 255, 255, 0.16);
}

.gallery-lightbox__nav--prev {
  left: 28px;
}

.gallery-lightbox__nav--next {
  right: 28px;
}


/* =========================================
   RESPONSIVE
========================================= */

@media (max-width: 900px) {

  .gallery-header {
    grid-template-columns: 1fr;
    gap: 25px;
  }

  .gallery-grid {
    grid-template-columns:
      repeat(2, 1fr);

    grid-auto-rows: 230px;
  }

  .gallery-item--large {
    grid-row: span 2;
  }

}


@media (max-width: 600px) {

  .gallery-section {
    padding: 80px 0;
  }

  .gallery-container {
    width:
      min(100% - 28px, 1180px);
  }

  .gallery-grid {
    grid-template-columns: 1fr;
    grid-auto-rows: 260px;
  }

  .gallery-item--large {
    grid-row: auto;
  }

  .gallery-item:nth-child(n + 5) {
    display: none;
  }

  .gallery-lightbox {
    padding: 70px 15px;
  }

  .gallery-lightbox__nav {
    width: 42px;
    height: 42px;

    font-size: 28px;
  }

  .gallery-lightbox__nav--prev {
    left: 10px;
  }

  .gallery-lightbox__nav--next {
    right: 10px;
  }

  .gallery-lightbox__close {
    top: 15px;
    right: 15px;
  }

}
</style>