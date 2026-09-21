<template>
  <div class="project-detail">

    <!-- =====================================
         HEADER
    ====================================== -->
    <header class="detail-header">

      <RouterLink
        to="/projects/arquitectura/proyectos"
        class="back-link"
      >
        ← VOLVER A PROYECTOS
      </RouterLink>

      <div class="header-reference">
        <span>ARCHIVO / {{ project?.code || "—" }}</span>
        <span>ARQ — DETALLE</span>
      </div>

    </header>


    <!-- =====================================
         PROYECTO ENCONTRADO
    ====================================== -->
    <main
      v-if="project"
      class="detail-container"
    >

      <!-- HERO DEL PROYECTO -->
      <section class="project-hero">

        <div class="hero-heading">

          <span class="project-category">
            {{ project.category }} / {{ project.code }}
          </span>

          <h1>
            {{ project.title }}
          </h1>

        </div>


        <!-- DATOS TÉCNICOS -->
        <div class="hero-data">

          <div>
            <span>UBICACIÓN</span>
            <strong>{{ project.location }}</strong>
          </div>

          <div>
            <span>SUPERFICIE</span>
            <strong>{{ project.area }}</strong>
          </div>

          <div>
            <span>AÑO</span>
            <strong>{{ project.year }}</strong>
          </div>

          <div>
            <span>ESTATUS</span>
            <strong>{{ project.status }}</strong>
          </div>

        </div>


        <!-- IMAGEN PRINCIPAL -->
        <div class="hero-image">

          <img
            :src="project.cover"
            :alt="project.title"
          />

          <div class="image-reference">
            <span>
              PROYECTO / {{ project.code }}
            </span>

            <span>
              {{ project.category }}
            </span>
          </div>

        </div>

      </section>


      <!-- =====================================
           DESCRIPCIÓN
      ====================================== -->

      <section class="description-section">

        <div class="section-number">
          <span>01</span>
          <small>MEMORIA</small>
        </div>

        <div class="description-title">
          <span>DESCRIPCIÓN / PROYECTO</span>

          <h2>
            Arquitectura concebida
            <em>desde el contexto.</em>
          </h2>
        </div>

        <div class="description-copy">

          <p>
            {{ project.description }}
          </p>

          <div class="concept-list">

            <div
              v-for="(concept, index) in project.concepts"
              :key="concept"
            >
              <span>
                {{ String(index + 1).padStart(2, "0") }}
              </span>

              <strong>
                {{ concept }}
              </strong>
            </div>

          </div>

        </div>

      </section>


      <!-- =====================================
           GALERÍA / SLIDER BÁSICO
      ====================================== -->

      <section class="gallery-section">

        <div class="section-heading">

          <div>
            <span>02 / GALERÍA</span>

            <h2>
              Recorrido
              <em>visual.</em>
            </h2>
          </div>

          <span class="gallery-counter">
            {{ currentImage + 1 }}
            /
            {{ project.gallery.length }}
          </span>

        </div>


        <div class="slider">

          <button
            class="slider-button slider-prev"
            @click="previousImage"
            aria-label="Imagen anterior"
          >
            ←
          </button>


          <div class="slider-image">

            <img
              :src="project.gallery[currentImage]"
              :alt="`${project.title} - imagen ${currentImage + 1}`"
            />

          </div>


          <button
            class="slider-button slider-next"
            @click="nextImage"
            aria-label="Siguiente imagen"
          >
            →
          </button>

        </div>


        <!-- INDICADORES -->

        <div class="slider-indicators">

          <button
            v-for="(image, index) in project.gallery"
            :key="index"
            :class="{
              active: currentImage === index
            }"
            @click="currentImage = index"
          >
            {{ String(index + 1).padStart(2, "0") }}
          </button>

        </div>

      </section>


      <!-- =====================================
           PLANO
      ====================================== -->

      <section
        v-if="project.plans?.length"
        class="plan-section"
      >

        <div class="plan-heading">

          <span>
            03 / DOCUMENTACIÓN
          </span>

          <h2>
            El proyecto
            <em>en planta.</em>
          </h2>

          <p>
            La organización espacial responde a las
            condiciones del sitio, orientación,
            programa y relación entre los espacios.
          </p>

        </div>


        <div class="plan-content">

          <div class="plan-image">

            <img
              :src="project.plans[0].image"
              :alt="project.plans[0].title"
            />

          </div>


          <div class="plan-info">

            <div class="plan-reference">
              <span>PLANO / 01</span>
              <span>ESC. 1:100</span>
            </div>

            <h3>
              {{ project.plans[0].title }}
            </h3>


            <div class="plan-concepts">

              <div
                v-for="(concept, index) in project.concepts"
                :key="concept"
              >
                <span>
                  {{ String(index + 1).padStart(2, "0") }}
                </span>

                <strong>
                  {{ concept }}
                </strong>
              </div>

            </div>

          </div>

        </div>

      </section>


      <!-- =====================================
           OTROS PROYECTOS
      ====================================== -->

      <section class="related-section">

        <div class="related-heading">

          <span>
            ARCHIVO / CONTINUAR RECORRIDO
          </span>

          <h2>
            Otros
            <em>proyectos.</em>
          </h2>

        </div>


        <div class="related-grid">

          <RouterLink
            v-for="related in relatedProjects"
            :key="related.id"
            :to="{
              name: 'arch-project-detail',
              params: {
                slug: related.slug
              }
            }"
            class="related-project"
          >

            <div class="related-image">

              <img
                :src="related.cover"
                :alt="related.title"
              />

            </div>

            <div class="related-data">

              <span>
                {{ related.code }}
                /
                {{ related.category }}
              </span>

              <h3>
                {{ related.title }}
              </h3>

              <span class="related-arrow">
                VER PROYECTO →
              </span>

            </div>

          </RouterLink>

        </div>

      </section>


      <!-- =====================================
           REGRESAR AL ARCHIVO
      ====================================== -->

<section class="catalog-return">

  <div class="catalog-return-reference">
    <span>ARCHIVO COMPLETO</span>
    <small>PROYECTOS / TODOS</small>
  </div>

  <RouterLink
    to="/projects/arquitectura/proyectos"
    class="catalog-return-button"
  >
    <span>VER TODOS LOS PROYECTOS</span>

    <span class="catalog-return-line"></span>

    <strong>→</strong>
  </RouterLink>

</section>

    </main>


    <!-- =====================================
         404 DEL PROYECTO
    ====================================== -->

    <main
      v-else
      class="not-found"
    >

      <span>ERROR / PR-404</span>

      <h1>
        Proyecto
        <em>no encontrado.</em>
      </h1>

      <RouterLink
        to="/projects/arquitectura/proyectos"
      >
        ← VOLVER AL ARCHIVO
      </RouterLink>

    </main>
    <ArchFooter />
  </div>
</template>


<script setup>
import ArchFooter from "../../../components/projects/arquitectura/ArchFooter.vue";

import {
  computed,
  ref,
  watch
} from "vue";

import {
  useRoute
} from "vue-router";

import {
  archProjects
} from "../../../data/archProjects";


const route = useRoute();

const currentImage = ref(0);


/* ========================================
   PROYECTO ACTUAL
======================================== */

const project = computed(() => {

  return archProjects.find(
    item => item.slug === route.params.slug
  );

});


/* ========================================
   OTROS PROYECTOS
======================================== */

const relatedProjects = computed(() => {

  if (!project.value) {
    return [];
  }

  return archProjects
    .filter(
      item => item.id !== project.value.id
    )
    .slice(0, 3);

});


/* ========================================
   SLIDER
======================================== */

const nextImage = () => {

  if (!project.value?.gallery?.length) {
    return;
  }

  currentImage.value =
    (currentImage.value + 1)
    % project.value.gallery.length;

};


const previousImage = () => {

  if (!project.value?.gallery?.length) {
    return;
  }

  currentImage.value =
    (
      currentImage.value -
      1 +
      project.value.gallery.length
    )
    % project.value.gallery.length;

};


/*
  Cuando cambiamos de proyecto desde
  "Otros proyectos", reiniciamos slider.
*/

watch(
  () => route.params.slug,
  () => {
    currentImage.value = 0;

    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  }
);
</script>


<style scoped>
.project-detail {
  min-height: 100vh;

  background: #f3f1eb;
  color: #151515;
}


/* ========================================
   HEADER
======================================== */

.detail-header {
  width: calc(100% - 110px);
  max-width: 1760px;

  margin: 0 auto;

  padding: 35px 0 25px;

  display: flex;
  align-items: center;
  justify-content: space-between;

  border-bottom: 5px solid #151515;
}

.back-link {
  min-height: 42px;
  padding: 0 18px;

  display: inline-flex;
  align-items: center;
  gap: 12px;

  background: #d8d6d0;
  border: 1px solid #b9b7b0;

  color: #151515;
  text-decoration: none;

  font-size: 8px;
  font-weight: 500;
  letter-spacing: 0.18em;

  transition:
    background 0.25s ease,
    color 0.25s ease,
    transform 0.25s ease;
}

.back-arrow {
  font-size: 15px;
}

.back-link:hover {
  background: #151515;
  color: #f3f1eb;
  transform: translateX(-3px);
}

.header-reference {
  display: flex;

  gap: 30px;

  color: #74736f;

  font-size: 7px;

  letter-spacing: 0.17em;
}


/* ========================================
   CONTENEDOR
======================================== */

.detail-container {
  width: calc(100% - 110px);
  max-width: 1760px;

  margin: 0 auto;
}


/* ========================================
   HERO
======================================== */

.project-hero {
  padding: 90px 0 100px;
}

.hero-heading {
  margin-bottom: 50px;
}

.project-category {
  display: block;

  margin-bottom: 22px;

  color: #74736f;

  font-size: 8px;

  letter-spacing: 0.22em;

  text-transform: uppercase;
}

.hero-heading h1 {
  margin: 0;

  font-size:
    clamp(75px, 9vw, 165px);

  line-height: 0.8;

  font-weight: 400;

  letter-spacing: -0.065em;
}


/* ========================================
   DATOS HERO
======================================== */

.hero-data {
  margin-bottom: 35px;

  padding: 22px 0;

  display: grid;

  grid-template-columns:
    repeat(4, 1fr);

  border-top: 1px solid #b9b7b0;
  border-bottom: 1px solid #b9b7b0;
}

.hero-data div {
  display: flex;

  flex-direction: column;

  gap: 7px;
}

.hero-data span {
  color: #74736f;

  font-size: 6px;

  letter-spacing: 0.17em;
}

.hero-data strong {
  font-size: 9px;

  font-weight: 500;

  letter-spacing: 0.13em;

  text-transform: uppercase;
}


/* ========================================
   IMAGEN PRINCIPAL
======================================== */

.hero-image {
  position: relative;

  height: min(68vw, 780px);

  overflow: hidden;
}

.hero-image img {
  width: 100%;
  height: 100%;

  display: block;

  object-fit: cover;
}

.image-reference {
  position: absolute;

  left: 0;
  right: 0;
  bottom: 0;

  padding: 14px 18px;

  display: flex;
  justify-content: space-between;

  background: rgba(21, 21, 21, 0.88);

  color: #f3f1eb;

  font-size: 6px;

  letter-spacing: 0.17em;
}


/* ========================================
   DESCRIPCIÓN
======================================== */

.description-section {
  padding: 110px 0;

  display: grid;

  grid-template-columns:
    100px
    minmax(400px, 0.9fr)
    minmax(400px, 0.8fr);

  gap: clamp(50px, 6vw, 120px);

  border-bottom: 5px solid #151515;
}

.section-number {
  display: flex;
  flex-direction: column;

  align-items: center;

  gap: 10px;
}

.section-number > span {
  width: 38px;
  height: 38px;

  display: grid;
  place-items: center;

  border: 1px solid #151515;

  border-radius: 50%;

  font-size: 8px;
}

.section-number small {
  color: #74736f;

  font-size: 6px;

  letter-spacing: 0.17em;
}

.description-title > span {
  display: block;

  margin-bottom: 25px;

  color: #74736f;

  font-size: 7px;

  letter-spacing: 0.18em;
}

.description-title h2,
.section-heading h2,
.plan-heading h2,
.related-heading h2 {
  margin: 0;

  font-size:
    clamp(48px, 4.5vw, 80px);

  line-height: 0.93;

  font-weight: 400;

  letter-spacing: -0.05em;
}

.description-title h2 em,
.section-heading h2 em,
.plan-heading h2 em,
.related-heading h2 em {
  display: block;

  color: #74736f;

  font-weight: 400;
}

.description-copy > p {
  margin: 0;

  font-size: 13px;

  line-height: 1.9;

  color: #74736f;
}


/* ========================================
   CONCEPTOS
======================================== */

.concept-list {
  margin-top: 40px;

  border-top: 1px solid #b9b7b0;
}

.concept-list div {
  padding: 15px 0;

  display: grid;

  grid-template-columns:
    50px
    1fr;

  border-bottom: 1px solid #b9b7b0;
}

.concept-list span {
  color: #74736f;

  font-size: 7px;
}

.concept-list strong {
  font-size: 9px;

  font-weight: 500;

  letter-spacing: 0.1em;
}


/* ========================================
   GALERÍA
======================================== */

.gallery-section {
  padding: 110px 0;

  border-bottom: 5px solid #151515;
}

.section-heading {
  margin-bottom: 55px;

  display: flex;

  justify-content: space-between;

  align-items: end;
}

.section-heading > div > span,
.plan-heading > span,
.related-heading > span {
  display: block;

  margin-bottom: 22px;

  color: #74736f;

  font-size: 7px;

  letter-spacing: 0.2em;
}

.gallery-counter {
  color: #74736f;

  font-size: 10px;

  letter-spacing: 0.17em;
}


/* ========================================
   SLIDER
======================================== */

.slider {
  position: relative;
}

.slider-image {
  width: 100%;

  height: min(65vw, 760px);

  overflow: hidden;
}

.slider-image img {
  width: 100%;
  height: 100%;

  display: block;

  object-fit: cover;
}

.slider-button {
  position: absolute;

  top: 50%;

  transform: translateY(-50%);

  z-index: 4;

  width: 55px;
  height: 55px;

  border: 1px solid #151515;

  border-radius: 50%;

  background: #f3f1eb;

  color: #151515;

  cursor: pointer;

  font-size: 18px;
}

.slider-prev {
  left: 25px;
}

.slider-next {
  right: 25px;
}

.slider-indicators {
  padding-top: 20px;

  display: flex;

  gap: 18px;

  border-bottom: 1px solid #b9b7b0;
}

.slider-indicators button {
  padding: 0 0 15px;

  border: 0;

  background: transparent;

  color: #74736f;

  cursor: pointer;

  font-size: 7px;

  letter-spacing: 0.15em;
}

.slider-indicators button.active {
  color: #151515;

  border-bottom: 2px solid #151515;
}


/* ========================================
   PLANO
======================================== */

.plan-section {
  padding: 110px 0;

  display: grid;

  grid-template-columns:
    0.55fr
    1.45fr;

  gap: 90px;

  border-bottom: 5px solid #151515;
}

.plan-heading p {
  max-width: 450px;

  margin-top: 30px;

  color: #74736f;

  font-size: 11px;

  line-height: 1.8;
}

.plan-content {
  display: grid;

  grid-template-columns:
    1fr
    300px;

  border: 4px solid #151515;
}

.plan-image {
  min-height: 550px;

  overflow: hidden;

  background: #e8e6df;
}

.plan-image img {
  width: 100%;
  height: 100%;

  display: block;

  object-fit: cover;

  filter: grayscale(1);
}

.plan-info {
  padding: 30px;

  border-left: 4px solid #151515;
}

.plan-reference {
  display: flex;
  justify-content: space-between;

  color: #74736f;

  font-size: 6px;

  letter-spacing: 0.16em;
}

.plan-info h3 {
  margin: 65px 0 30px;

  font-size: 30px;

  font-weight: 400;
}

.plan-concepts {
  border-top: 1px solid #b9b7b0;
}

.plan-concepts div {
  padding: 15px 0;

  display: grid;

  grid-template-columns:
    40px
    1fr;

  border-bottom: 1px solid #b9b7b0;
}

.plan-concepts span {
  color: #74736f;

  font-size: 7px;
}

.plan-concepts strong {
  font-size: 8px;

  font-weight: 500;

  letter-spacing: 0.08em;
}


/* ========================================
   RELACIONADOS
======================================== */

.related-section {
  padding: 110px 0;
}

.related-heading {
  margin-bottom: 55px;
}

.related-grid {
  display: grid;

  grid-template-columns:
    repeat(3, 1fr);

  border-top: 4px solid #151515;
  border-left: 4px solid #151515;
}

.related-project {
  padding: 22px;

  border-right: 4px solid #151515;
  border-bottom: 4px solid #151515;

  color: #151515;

  text-decoration: none;
}

.related-image {
  height: 270px;

  overflow: hidden;
}

.related-image img {
  width: 100%;
  height: 100%;

  display: block;

  object-fit: cover;

  transition: transform 0.4s ease;
}

.related-project:hover img {
  transform: scale(1.03);
}

.related-data {
  padding-top: 20px;
}

.related-data > span:first-child {
  color: #74736f;

  font-size: 6px;

  letter-spacing: 0.16em;
}

.related-data h3 {
  margin: 9px 0 25px;

  font-size: 28px;

  font-weight: 400;
}

.related-arrow {
  font-size: 7px;

  letter-spacing: 0.17em;
}


/* ========================================
   REGRESAR
======================================== */
.catalog-return {
  padding: 45px 0 80px;

  display: flex;
  align-items: center;
  justify-content: space-between;

  border-top: 1px solid #b9b7b0;
}

.catalog-return-reference {
  display: flex;
  flex-direction: column;
  gap: 6px;
}

.catalog-return-reference span {
  color: #151515;

  font-size: 7px;
  letter-spacing: 0.18em;
}

.catalog-return-reference small {
  color: #74736f;

  font-size: 6px;
  letter-spacing: 0.16em;
}


/* BOTÓN */

.catalog-return-button {
  min-height: 46px;
  padding: 0 18px;

  display: inline-flex;
  align-items: center;
  gap: 18px;

  background: #d8d6d0;
  border: 1px solid #b9b7b0;

  color: #151515;
  text-decoration: none;

  font-size: 8px;
  font-weight: 500;
  letter-spacing: 0.18em;

  transition:
    background 0.3s ease,
    color 0.3s ease;
}

.catalog-return-line {
  width: 70px;
  height: 1px;

  background: currentColor;

  transition: width 0.3s ease;
}

.catalog-return-button strong {
  font-size: 15px;
  font-weight: 400;

  transition: transform 0.3s ease;
}

.catalog-return-button:hover {
  background: #151515;
  color: #f3f1eb;
}

.catalog-return-button:hover .catalog-return-line {
  width: 100px;
}

.catalog-return-button:hover strong {
  transform: translateX(5px);
}

/* ========================================
   NOT FOUND
======================================== */

.not-found {
  width: calc(100% - 110px);

  min-height: 80vh;

  margin: 0 auto;

  display: flex;
  flex-direction: column;

  justify-content: center;
}

.not-found > span {
  color: #74736f;

  font-size: 8px;

  letter-spacing: 0.2em;
}

.not-found h1 {
  margin: 25px 0 45px;

  font-size:
    clamp(60px, 7vw, 120px);

  line-height: 0.9;

  font-weight: 400;
}

.not-found h1 em {
  display: block;

  color: #74736f;

  font-weight: 400;
}

.not-found a {
  color: #151515;

  text-decoration: none;

  font-size: 8px;

  letter-spacing: 0.18em;
}


/* ========================================
   RESPONSIVE
======================================== */

@media (max-width: 1000px) {

  .detail-header,
  .detail-container,
  .not-found {
    width: calc(100% - 60px);
  }

  .description-section {
    grid-template-columns:
      70px
      1fr;
  }

  .description-copy {
    grid-column: 2;
  }

  .plan-section {
    grid-template-columns: 1fr;
  }

  .related-grid {
    grid-template-columns:
      repeat(2, 1fr);
  }

}


@media (max-width: 700px) {

  .detail-header,
  .detail-container,
  .not-found {
    width: calc(100% - 30px);
  }

  .header-reference {
    display: none;
  }

  .project-hero {
    padding-top: 65px;
  }

  .hero-heading h1 {
    font-size:
      clamp(60px, 18vw, 95px);
  }

  .hero-data {
    grid-template-columns:
      repeat(2, 1fr);

    gap: 25px;
  }

  .description-section {
    grid-template-columns: 1fr;

    gap: 40px;
  }

  .description-copy {
    grid-column: auto;
  }

  .section-number {
    align-items: flex-start;
  }

  .section-heading {
    align-items: flex-start;
  }

  .plan-content {
    grid-template-columns: 1fr;
  }

  .plan-info {
    border-left: 0;

    border-top: 4px solid #151515;
  }

  .related-grid {
    grid-template-columns: 1fr;
  }

  .catalog-return {
    align-items: flex-start;
    flex-direction: column;

    gap: 25px;
  }

  .catalog-return-line {
    width: 40px;
  }

}
</style>