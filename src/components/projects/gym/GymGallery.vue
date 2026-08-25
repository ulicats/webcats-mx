<template>
  <section id="galeria" class="gym-gallery">
    <div class="gym-gallery__container">

      <!-- =========================
           HEADER
      ========================== -->
      <div class="gym-gallery__header">
        <div class="gym-gallery__heading">
          <div class="gym-gallery__eyebrow">
            <span></span>
            CONOCE IRON PULSE
          </div>

          <h2 class="gym-gallery__title">
            ESTE ES TU<br />
            <span>NUEVO TERRENO.</span>
          </h2>
        </div>

        <div class="gym-gallery__intro">
          <p>
            Más que un gimnasio. Un espacio diseñado para entrenar
            sin distracciones, superar límites y construir resultados.
          </p>

          <div class="gym-gallery__counter">
            <strong>
                {{ String(gallery.length).padStart(2, "0") }}
            </strong>

            <span>
                ESPACIOS<br />
                PARA DESCUBRIR
            </span>
            </div>
        </div>
      </div>

      <!-- =========================
           GALLERY
      ========================== -->
      <div class="gym-gallery__grid">

        <button
          v-for="(image, index) in gallery"
          :key="image.id"
          type="button"
          class="gallery-item"
          :class="`gallery-item--${image.layout}`"
          :aria-label="`Ver ${image.title}`"
          @click="openGallery(index)"
        >
          <img
            :src="image.src"
            :alt="image.alt"
            class="gallery-item__image"
          />

          <div class="gallery-item__overlay"></div>

          <div class="gallery-item__number">
            {{ String(index + 1).padStart(2, "0") }}
          </div>

          <div class="gallery-item__expand">
            ↗
          </div>

          <div class="gallery-item__content">
            <span>{{ image.category }}</span>
            <h3>{{ image.title }}</h3>
          </div>
        </button>

      </div>

      <!-- =========================
           BOTTOM
      ========================== -->
      <div class="gym-gallery__bottom">
        <div class="gym-gallery__bottom-line">
          <span></span>
        </div>

        <p>
          1,200 M² DISEÑADOS PARA
          <strong>ENTRENAR SIN LÍMITES.</strong>
        </p>

        <a href="#ubicacion">
          VISITA EL CLUB
          <span>→</span>
        </a>
      </div>

    </div>

    <!-- =========================
         LIGHTBOX
    ========================== -->
    <Teleport to="body">
      <Transition name="lightbox">
        <div
          v-if="lightboxOpen"
          class="gym-lightbox"
          @click.self="closeGallery"
        >
          <!-- Top -->
          <div class="gym-lightbox__top">
            <div class="gym-lightbox__brand">
              <strong>IRON PULSE</strong>
              <span>PERFORMANCE CLUB</span>
            </div>

            <div class="gym-lightbox__count">
              {{ String(activeIndex + 1).padStart(2, "0") }}
              <span>/</span>
              {{ String(gallery.length).padStart(2, "0") }}
            </div>

            <button
              type="button"
              class="gym-lightbox__close"
              aria-label="Cerrar galería"
              @click="closeGallery"
            >
              ×
            </button>
          </div>

          <!-- Image -->
          <div class="gym-lightbox__stage">
            <button
              type="button"
              class="gym-lightbox__arrow gym-lightbox__arrow--prev"
              aria-label="Imagen anterior"
              @click="previousImage"
            >
              ←
            </button>

            <div class="gym-lightbox__image-wrapper">
              <img
                :src="currentImage.src"
                :alt="currentImage.alt"
                class="gym-lightbox__image"
              />
            </div>

            <button
              type="button"
              class="gym-lightbox__arrow gym-lightbox__arrow--next"
              aria-label="Siguiente imagen"
              @click="nextImage"
            >
              →
            </button>
          </div>

          <!-- Caption -->
          <div class="gym-lightbox__caption">
            <div>
              <span>{{ currentImage.category }}</span>
              <h3>{{ currentImage.title }}</h3>
            </div>

            <p>
              {{ currentImage.description }}
            </p>
          </div>
        </div>
      </Transition>
    </Teleport>

  </section>
</template>

<script setup>
import { computed, onBeforeUnmount, ref } from "vue";

import gallery01 from "../../../assets/projects/gym/gallery/gallery-01.png";
import gallery02 from "../../../assets/projects/gym/gallery/gallery-02.png";
import gallery03 from "../../../assets/projects/gym/gallery/gallery-03.png";
import gallery04 from "../../../assets/projects/gym/gallery/gallery-04.png";
import gallery05 from "../../../assets/projects/gym/gallery/gallery-05.png";


const lightboxOpen = ref(false);
const activeIndex = ref(0);

const gallery = [
  {
    id: 1,
    src: gallery01,
    category: "ENTRENAMIENTO FUNCIONAL",
    title: "ZONA FUNCIONAL",
    alt: "Zona de entrenamiento funcional de Iron Pulse",
    description:
      "Un espacio amplio equipado con trineos, cuerdas, kettlebells y estaciones para desarrollar fuerza, potencia y resistencia.",
    layout: "hero",
  },
  {
    id: 2,
    src: gallery02,
    category: "EQUIPAMIENTO",
    title: "ZONA DE MÁQUINAS",
    alt: "Área de máquinas de entrenamiento de Iron Pulse",
    description:
      "Equipamiento profesional distribuido en un espacio amplio para trabajar cada grupo muscular con comodidad y precisión.",
    layout: "vertical",
  },
  {
    id: 3,
    src: gallery03,
    category: "PESO LIBRE",
    title: "ZONA DE FUERZA",
    alt: "Zona de peso libre y mancuernas de Iron Pulse",
    description:
      "Mancuernas, bancos y estaciones de fuerza para entrenamientos enfocados en potencia, hipertrofia y rendimiento.",
    layout: "standard",
  },
  {
    id: 4,
    src: gallery04,
    category: "ENTRENAMIENTO",
    title: "ÁREA DE PESAS",
    alt: "Área general de entrenamiento con pesas de Iron Pulse",
    description:
      "Una zona completa de entrenamiento con bancos, racks y equipamiento para construir fuerza sin distracciones.",
    layout: "standard",
  },
  {
    id: 5,
    src: gallery05,
    category: "CARDIO",
    title: "ZONA CARDIO",
    alt: "Zona cardiovascular con caminadoras y bicicletas de Iron Pulse",
    description:
      "Caminadoras, bicicletas y equipos cardiovasculares en un espacio diseñado para mejorar resistencia y condición física.",
    layout: "wide",
  },
];

const currentImage = computed(() => gallery[activeIndex.value]);

const openGallery = (index) => {
  activeIndex.value = index;
  lightboxOpen.value = true;

  document.body.style.overflow = "hidden";
};

const closeGallery = () => {
  lightboxOpen.value = false;

  document.body.style.overflow = "";
};

const nextImage = () => {
  activeIndex.value =
    activeIndex.value === gallery.length - 1
      ? 0
      : activeIndex.value + 1;
};

const previousImage = () => {
  activeIndex.value =
    activeIndex.value === 0
      ? gallery.length - 1
      : activeIndex.value - 1;
};

const handleKeyboard = (event) => {
  if (!lightboxOpen.value) return;

  if (event.key === "Escape") {
    closeGallery();
  }

  if (event.key === "ArrowRight") {
    nextImage();
  }

  if (event.key === "ArrowLeft") {
    previousImage();
  }
};

window.addEventListener("keydown", handleKeyboard);

onBeforeUnmount(() => {
  window.removeEventListener("keydown", handleKeyboard);
  document.body.style.overflow = "";
});
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,700;1,800;1,900&family=Inter:wght@400;500;600&display=swap");

.gym-gallery {
  padding: 135px 0;

  background: #eeeeea;
  color: #090909;

  font-family: "Inter", sans-serif;
}

.gym-gallery__container {
  width: min(1400px, calc(100% - 48px));
  margin: 0 auto;
}

/* =========================
   HEADER
========================= */

.gym-gallery__header {
  display: grid;
  grid-template-columns: 1.3fr 0.7fr;
  gap: 80px;

  align-items: end;

  margin-bottom: 70px;
}

.gym-gallery__eyebrow {
  display: flex;
  align-items: center;
  gap: 14px;

  margin-bottom: 22px;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 13px;
  font-weight: 700;
  letter-spacing: 3px;

  color: #667a00;
}

.gym-gallery__eyebrow span {
  width: 42px;
  height: 2px;

  background: #9fbd00;
}

.gym-gallery__title {
  margin: 0;

  font-family: "Barlow Condensed", sans-serif;
  font-size: clamp(70px, 8vw, 120px);
  font-weight: 900;
  font-style: italic;

  line-height: 0.82;
  letter-spacing: -3px;

  text-transform: uppercase;
}

.gym-gallery__title > span {
  color: transparent;

  -webkit-text-stroke: 2px #090909;
}

.gym-gallery__intro {
  max-width: 430px;
}

.gym-gallery__intro > p {
  margin: 0;

  font-size: 16px;
  line-height: 1.75;

  color: #5f5f5f;
}

/* =========================
   COUNTER
========================= */

.gym-gallery__counter {
  display: flex;
  align-items: center;
  gap: 15px;

  margin-top: 28px;
}

.gym-gallery__counter strong {
  font-family: "Barlow Condensed", sans-serif;
  font-size: 48px;
  font-weight: 800;
  line-height: 0.8;
}

.gym-gallery__counter span {
  padding-left: 15px;

  border-left: 1px solid rgba(9, 9, 9, 0.25);

  font-family: "Barlow Condensed", sans-serif;
  font-size: 10px;
  font-weight: 700;
  line-height: 1.25;
  letter-spacing: 1.4px;

  color: #777777;
}

/* =========================
   GALLERY GRID
========================= */

.gym-gallery__grid {
  display: grid;

  grid-template-columns: repeat(4, 1fr);
  grid-auto-rows: 270px;

  gap: 10px;
}

.gallery-item {
  position: relative;

  min-width: 0;
  padding: 0;

  overflow: hidden;

  border: 0;
  background: #111111;

  color: #ffffff;

  cursor: pointer;

  text-align: left;
}

.gallery-item--hero {
  grid-column: span 2;
  grid-row: span 2;
}

.gallery-item--vertical {
  grid-row: span 2;
}

.gallery-item--wide {
  grid-column: span 2;
}

/* =========================
   IMAGE
========================= */

.gallery-item__image {
  position: absolute;
  inset: 0;

  width: 100%;
  height: 100%;

  object-fit: cover;

  filter: grayscale(75%);

  transform: scale(1.01);

  transition:
    transform 0.65s ease,
    filter 0.5s ease;
}

.gallery-item:hover .gallery-item__image {
  transform: scale(1.065);

  filter: grayscale(5%);
}

/* =========================
   OVERLAY
========================= */

.gallery-item__overlay {
  position: absolute;
  inset: 0;

  background:
    linear-gradient(
      to top,
      rgba(5, 5, 5, 0.88) 0%,
      rgba(5, 5, 5, 0.16) 55%,
      rgba(5, 5, 5, 0.06) 100%
    );

  transition: background 0.4s ease;
}

.gallery-item:hover .gallery-item__overlay {
  background:
    linear-gradient(
      to top,
      rgba(5, 5, 5, 0.92) 0%,
      rgba(5, 5, 5, 0.1) 55%,
      rgba(5, 5, 5, 0.02) 100%
    );
}

/* =========================
   NUMBER
========================= */

.gallery-item__number {
  position: absolute;

  top: 20px;
  left: 20px;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 1.8px;

  color: rgba(255, 255, 255, 0.65);
}

/* =========================
   EXPAND
========================= */

.gallery-item__expand {
  position: absolute;

  top: 17px;
  right: 17px;

  width: 42px;
  height: 42px;

  display: flex;
  align-items: center;
  justify-content: center;

  border: 1px solid rgba(255, 255, 255, 0.4);
  border-radius: 50%;

  font-size: 20px;

  opacity: 0;

  transform: translateY(8px);

  transition:
    opacity 0.3s ease,
    transform 0.3s ease,
    background 0.3s ease,
    color 0.3s ease;
}

.gallery-item:hover .gallery-item__expand {
  opacity: 1;

  transform: translateY(0);

  background: #d9ff43;
  color: #090909;

  border-color: #d9ff43;
}

/* =========================
   CONTENT
========================= */

.gallery-item__content {
  position: absolute;

  left: 22px;
  right: 22px;
  bottom: 22px;

  z-index: 2;
}

.gallery-item__content > span {
  display: block;

  margin-bottom: 5px;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 10px;
  font-weight: 700;
  letter-spacing: 2px;

  color: #d9ff43;
}

.gallery-item__content h3 {
  margin: 0;

  font-family: "Barlow Condensed", sans-serif;
  font-size: clamp(28px, 3vw, 48px);
  font-weight: 800;

  line-height: 0.9;

  text-transform: uppercase;
}

.gallery-item--hero .gallery-item__content h3 {
  font-size: clamp(48px, 5vw, 75px);
}

/* =========================
   GREEN LINE
========================= */

.gallery-item::after {
  content: "";

  position: absolute;

  left: 0;
  right: 0;
  bottom: 0;

  height: 4px;

  background: #d9ff43;

  transform: scaleX(0);
  transform-origin: left;

  transition: transform 0.35s ease;
}

.gallery-item:hover::after {
  transform: scaleX(1);
}

/* =========================
   BOTTOM
========================= */

.gym-gallery__bottom {
  display: grid;
  grid-template-columns: 1fr auto auto;
  gap: 40px;

  align-items: center;

  margin-top: 45px;
}

.gym-gallery__bottom-line {
  height: 1px;

  background: rgba(9, 9, 9, 0.18);
}

.gym-gallery__bottom p {
  margin: 0;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 13px;
  font-weight: 600;
  letter-spacing: 1.2px;

  color: #696969;
}

.gym-gallery__bottom p strong {
  color: #090909;
}

.gym-gallery__bottom > a {
  display: flex;
  align-items: center;
  gap: 15px;

  color: #090909;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 14px;
  font-weight: 800;
  letter-spacing: 1.2px;

  text-decoration: none;
}

.gym-gallery__bottom > a span {
  font-size: 20px;

  transition: transform 0.25s ease;
}

.gym-gallery__bottom > a:hover span {
  transform: translateX(5px);
}

/* =========================
   LIGHTBOX
========================= */

.gym-lightbox {
  position: fixed;
  z-index: 99999;

  inset: 0;

  display: grid;
  grid-template-rows: auto 1fr auto;

  padding: 28px 40px;

  background: rgba(5, 5, 5, 0.98);

  color: #ffffff;

  font-family: "Inter", sans-serif;
}

/* =========================
   LIGHTBOX TOP
========================= */

.gym-lightbox__top {
  display: grid;
  grid-template-columns: 1fr auto 1fr;

  align-items: center;

  min-height: 60px;
}

.gym-lightbox__brand {
  display: flex;
  flex-direction: column;

  font-family: "Barlow Condensed", sans-serif;
}

.gym-lightbox__brand strong {
  font-size: 20px;
  font-weight: 900;
  font-style: italic;

  line-height: 1;
}

.gym-lightbox__brand span {
  margin-top: 4px;

  font-size: 8px;
  font-weight: 600;
  letter-spacing: 2px;

  color: #d9ff43;
}

.gym-lightbox__count {
  font-family: "Barlow Condensed", sans-serif;
  font-size: 15px;
  font-weight: 700;
  letter-spacing: 2px;
}

.gym-lightbox__count span {
  margin: 0 7px;

  color: #d9ff43;
}

.gym-lightbox__close {
  justify-self: end;

  width: 48px;
  height: 48px;

  display: flex;
  align-items: center;
  justify-content: center;

  border: 1px solid rgba(255, 255, 255, 0.25);
  border-radius: 50%;

  background: transparent;
  color: #ffffff;

  font-size: 30px;
  font-weight: 300;

  cursor: pointer;

  transition:
    background 0.25s ease,
    color 0.25s ease;
}

.gym-lightbox__close:hover {
  background: #d9ff43;
  color: #090909;

  border-color: #d9ff43;
}

/* =========================
   LIGHTBOX STAGE
========================= */

.gym-lightbox__stage {
  min-height: 0;

  display: grid;
  grid-template-columns: 70px 1fr 70px;
  gap: 25px;

  align-items: center;

  padding: 25px 0;
}

.gym-lightbox__image-wrapper {
  height: 100%;
  min-height: 0;

  display: flex;
  align-items: center;
  justify-content: center;
}

.gym-lightbox__image {
  display: block;

  max-width: 100%;
  max-height: 70vh;

  object-fit: contain;
}

/* =========================
   LIGHTBOX ARROWS
========================= */

.gym-lightbox__arrow {
  width: 56px;
  height: 56px;

  display: flex;
  align-items: center;
  justify-content: center;

  border: 1px solid rgba(255, 255, 255, 0.22);
  border-radius: 50%;

  background: transparent;
  color: #ffffff;

  font-size: 23px;

  cursor: pointer;

  transition:
    background 0.25s ease,
    color 0.25s ease,
    transform 0.25s ease;
}

.gym-lightbox__arrow:hover {
  background: #d9ff43;
  color: #090909;

  transform: scale(1.08);
}

/* =========================
   LIGHTBOX CAPTION
========================= */

.gym-lightbox__caption {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 50px;

  align-items: end;

  padding-top: 22px;

  border-top: 1px solid rgba(255, 255, 255, 0.14);
}

.gym-lightbox__caption > div > span {
  display: block;

  margin-bottom: 5px;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 10px;
  font-weight: 700;
  letter-spacing: 2px;

  color: #d9ff43;
}

.gym-lightbox__caption h3 {
  margin: 0;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 38px;
  font-weight: 800;

  line-height: 1;

  text-transform: uppercase;
}

.gym-lightbox__caption p {
  justify-self: end;

  max-width: 480px;

  margin: 0;

  font-size: 13px;
  line-height: 1.65;

  color: rgba(255, 255, 255, 0.5);
}

/* =========================
   LIGHTBOX TRANSITION
========================= */

.lightbox-enter-active,
.lightbox-leave-active {
  transition: opacity 0.25s ease;
}

.lightbox-enter-from,
.lightbox-leave-to {
  opacity: 0;
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 1050px) {
  .gym-gallery__header {
    grid-template-columns: 1fr;
    gap: 35px;
  }

  .gym-gallery__grid {
    grid-template-columns: repeat(2, 1fr);
  }

  .gallery-item--hero {
    grid-column: span 2;
  }

  .gallery-item--wide {
    grid-column: span 2;
  }
}

@media (max-width: 700px) {
  .gym-gallery {
    padding: 90px 0;
  }

  .gym-gallery__container {
    width: calc(100% - 32px);
  }

  .gym-gallery__title {
    font-size: clamp(62px, 20vw, 90px);
    letter-spacing: -2px;
  }

  .gym-gallery__grid {
    display: flex;
    flex-direction: column;
  }

  .gallery-item,
  .gallery-item--hero,
  .gallery-item--vertical,
  .gallery-item--wide {
    min-height: 360px;
  }

  .gallery-item--hero {
    min-height: 500px;
  }

  .gym-gallery__bottom {
    grid-template-columns: 1fr;
  }

  .gym-gallery__bottom-line {
    display: none;
  }

  .gym-lightbox {
    padding: 18px;
  }

  .gym-lightbox__brand {
    display: none;
  }

  .gym-lightbox__top {
    grid-template-columns: 1fr auto;
  }

  .gym-lightbox__count {
    justify-self: start;
  }

  .gym-lightbox__stage {
    grid-template-columns: 1fr 1fr;
    gap: 12px;
  }

  .gym-lightbox__image-wrapper {
    grid-column: 1 / 3;
    grid-row: 1;
  }

  .gym-lightbox__arrow {
    grid-row: 2;

    width: 48px;
    height: 48px;
  }

  .gym-lightbox__arrow--prev {
    justify-self: start;
  }

  .gym-lightbox__arrow--next {
    justify-self: end;
  }

  .gym-lightbox__caption {
    grid-template-columns: 1fr;
    gap: 12px;
  }

  .gym-lightbox__caption p {
    justify-self: start;
  }
}
</style>