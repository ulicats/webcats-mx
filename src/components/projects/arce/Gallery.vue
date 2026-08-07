<template>
  <section id="galeria" class="gallery-section">
    <div class="gallery-container">

      <header class="gallery-heading">
        <p class="gallery-eyebrow">
          Conoce el lugar
        </p>

        <h2>
          Un refugio entre
          <span>bosque y montaña</span>
        </h2>

        <p class="gallery-description">
          Descubre los espacios, interiores y paisajes que forman parte
          de la experiencia en Arce Cabañas Mazamitla.
        </p>
      </header>

      <div class="gallery-grid">

        <button
          v-for="(image, index) in images"
          :key="image.src"
          class="gallery-item"
          :class="{
            'gallery-item--main': index === 0,
            'gallery-item--last': index === images.length - 1
          }"
          type="button"
          @click="openGallery(index)"
        >
          <img
            :src="image.src"
            :alt="image.alt"
            loading="lazy"
          />

          <div class="gallery-item__overlay"></div>

          <div
            v-if="index === images.length - 1"
            class="gallery-item__more"
          >
            <span>+</span>
            Ver galería
          </div>
        </button>

      </div>
    </div>

    <!-- LIGHTBOX -->
    <Teleport to="body">
      <div
        v-if="lightboxOpen"
        class="lightbox"
        @click.self="closeGallery"
      >
        <button
          class="lightbox__close"
          type="button"
          aria-label="Cerrar galería"
          @click="closeGallery"
        >
          ×
        </button>

        <button
          class="lightbox__arrow lightbox__arrow--left"
          type="button"
          aria-label="Imagen anterior"
          @click="previousImage"
        >
          ‹
        </button>

        <div class="lightbox__content">
          <img
            :src="images[currentImage].src"
            :alt="images[currentImage].alt"
          />

          <p>
            {{ currentImage + 1 }} / {{ images.length }}
          </p>
        </div>

        <button
          class="lightbox__arrow lightbox__arrow--right"
          type="button"
          aria-label="Imagen siguiente"
          @click="nextImage"
        >
          ›
        </button>
      </div>
    </Teleport>
  </section>
</template>

<script setup>
import { onBeforeUnmount, onMounted, ref } from "vue";

import gallery1 from "../../../assets/projects/arce/gallery/gallery-1.jpg";
import gallery2 from "../../../assets/projects/arce/gallery/gallery-2.jpg";
import gallery3 from "../../../assets/projects/arce/gallery/gallery-3.jpg";
import gallery4 from "../../../assets/projects/arce/gallery/gallery-4.jpg";
import gallery5 from "../../../assets/projects/arce/gallery/gallery-5.jpg";
import gallery6 from "../../../assets/projects/arce/gallery/gallery-6.jpg";

const lightboxOpen = ref(false);
const currentImage = ref(0);

const images = [
  { src: gallery1, alt: "Arce Cabañas Mazamitla" },
  { src: gallery2, alt: "Interior de las cabañas" },
  { src: gallery3, alt: "Hospedaje rodeado de bosque" },
  { src: gallery4, alt: "Espacios de descanso" },
  { src: gallery5, alt: "Entorno natural de Mazamitla" },
  { src: gallery6, alt: "Experiencia en Arce Cabañas" },
];

const openGallery = (index) => {
  currentImage.value = index;
  lightboxOpen.value = true;
  document.body.style.overflow = "hidden";
};

const closeGallery = () => {
  lightboxOpen.value = false;
  document.body.style.overflow = "";
};

const nextImage = () => {
  currentImage.value =
    (currentImage.value + 1) % images.length;
};

const previousImage = () => {
  currentImage.value =
    (currentImage.value - 1 + images.length) % images.length;
};

const handleKeydown = (event) => {
  if (!lightboxOpen.value) return;

  if (event.key === "Escape") closeGallery();
  if (event.key === "ArrowRight") nextImage();
  if (event.key === "ArrowLeft") previousImage();
};

onMounted(() => {
  window.addEventListener("keydown", handleKeydown);
});

onBeforeUnmount(() => {
  window.removeEventListener("keydown", handleKeydown);
  document.body.style.overflow = "";
});
</script>

<style scoped>
.gallery-section {
  padding: 120px 0;
  background: var(--arce-navy-950);
}

.gallery-container {
  width: min(1180px, calc(100% - 40px));
  margin: 0 auto;
}

.gallery-heading {
  max-width: 760px;
  margin-bottom: 55px;
}

.gallery-eyebrow {
  margin-bottom: 16px;
  color: var(--arce-gold-light);
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.25em;
  text-transform: uppercase;
}

.gallery-heading h2 {
  color: var(--arce-white);
  font-family: var(--arce-heading);
  font-size: clamp(48px, 6vw, 80px);
  font-weight: 500;
  line-height: 0.95;
}

.gallery-heading h2 span {
  display: block;
  color: var(--arce-gold-light);
  font-style: italic;
}

.gallery-description {
  max-width: 620px;
  margin-top: 24px;
  color: rgba(255, 255, 255, 0.65);
  font-size: 15px;
  line-height: 1.8;
}

.gallery-grid {
  display: grid;
  grid-template-columns: 1.6fr 1fr 1fr;
  grid-template-rows: repeat(2, 260px);
  gap: 12px;
}

.gallery-item {
  position: relative;
  overflow: hidden;
  padding: 0;
  border: 0;
  border-radius: 15px;
  background: transparent;
  cursor: pointer;
}

.gallery-item--main {
  grid-row: 1 / 3;
}

.gallery-item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.5s ease;
}

.gallery-item:hover img {
  transform: scale(1.05);
}

.gallery-item__overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(
    rgba(19, 40, 58, 0.03),
    rgba(19, 40, 58, 0.25)
  );
}

.gallery-item__more {
  position: absolute;
  right: 18px;
  bottom: 18px;
  z-index: 2;
  padding: 10px 15px;
  border-radius: 999px;
  display: flex;
  align-items: center;
  gap: 7px;
  color: var(--arce-white);
  background: rgba(19, 40, 58, 0.78);
  font-size: 11px;
  font-weight: 700;
  backdrop-filter: blur(10px);
}

.gallery-item__more span {
  color: var(--arce-gold-light);
  font-size: 17px;
}

/* LIGHTBOX */

.lightbox {
  position: fixed;
  inset: 0;
  z-index: 99999;
  padding: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(3, 8, 13, 0.96);
}

.lightbox__content {
  width: min(1100px, 80vw);
  height: min(780px, 82vh);
  display: flex;
  flex-direction: column;
  align-items: center;
}

.lightbox__content img {
  width: 100%;
  height: calc(100% - 35px);
  object-fit: contain;
}

.lightbox__content p {
  margin-top: 12px;
  color: rgba(255, 255, 255, 0.7);
  font-family: var(--arce-body);
  font-size: 12px;
}

.lightbox__close {
  position: absolute;
  top: 20px;
  right: 30px;
  border: 0;
  color: white;
  background: transparent;
  font-size: 42px;
  cursor: pointer;
}

.lightbox__arrow {
  position: absolute;
  top: 50%;
  width: 55px;
  height: 55px;
  border: 1px solid rgba(255, 255, 255, 0.25);
  border-radius: 50%;
  color: white;
  background: rgba(255, 255, 255, 0.07);
  font-size: 38px;
  cursor: pointer;
  transform: translateY(-50%);
}

.lightbox__arrow--left {
  left: 25px;
}

.lightbox__arrow--right {
  right: 25px;
}

@media (max-width: 900px) {
  .gallery-grid {
    grid-template-columns: 1fr 1fr;
    grid-template-rows: 390px 230px 230px;
  }

  .gallery-item--main {
    grid-column: 1 / -1;
    grid-row: auto;
  }
}

@media (max-width: 600px) {
  .gallery-section {
    padding: 85px 0;
  }

  .gallery-container {
    width: min(100% - 28px, 1180px);
  }

  .gallery-grid {
    grid-template-columns: 1fr 1fr;
    grid-template-rows: 310px 160px 160px;
    gap: 7px;
  }

  .gallery-item {
    border-radius: 10px;
  }

  .lightbox {
    padding: 15px;
  }

  .lightbox__content {
    width: 100%;
    height: 75vh;
  }

  .lightbox__arrow {
    width: 42px;
    height: 42px;
    font-size: 29px;
  }

  .lightbox__arrow--left {
    left: 8px;
  }

  .lightbox__arrow--right {
    right: 8px;
  }

  .lightbox__close {
    top: 10px;
    right: 15px;
  }
}
</style>