<template>
  <section
    id="proyectos"
    class="projects-section"
  >

    <!-- MUROS -->
    <div class="wall wall-left"></div>
    <div class="wall wall-right"></div>

    <!-- VENTANAS LATERALES -->
    <div class="window window-left">
      <span>VENTANAL / 01</span>
    </div>

    <div class="window window-right">
      <span>VENTANAL / 02</span>
    </div>

        <!-- =====================================
         IDENTIFICACIÓN
    ====================================== -->

    <div class="room-label">
      <span class="room-number">04</span>

      <strong>PROYECTOS</strong>

     
    </div>



    <!-- =====================================
         ENCABEZADO
    ====================================== -->

    <div class="projects-heading">

      <div>
        <span class="section-tag">
       
        </span>

        <h2>
          Espacios que pasan
          <em>del trazo a la realidad.</em>
        </h2>
      </div>


      <div class="heading-description">

        <span>
          ARCHIVO / OBRA REALIZADA
        </span>

        <p>
          Cada proyecto responde a su contexto,
          programa y forma particular de habitar.
        </p>

      </div>

    </div>


    <!-- =====================================
         VISOR DE PROYECTOS
    ====================================== -->

    <div class="project-viewer">

      <!-- FLECHA IZQUIERDA -->

      <button
        class="viewer-arrow viewer-arrow-left"
        @click="previousProject"
        aria-label="Proyecto anterior"
      >
        ←
      </button>


      <!-- PROYECTO -->

      <div
        :key="currentProject.id"
        class="project-slide"
      >

        <RouterLink
          :to="{
            name: 'arch-project-detail',
            params: {
              slug: currentProject.slug
            }
          }"
          class="project-image"
        >

          <img
            :src="currentProject.cover"
            :alt="currentProject.title"
          />


          <span class="project-code">
            {{ currentProject.code }}
          </span>


          <div class="image-reference">

            <span>
              PROYECTO /
              {{ String(currentIndex + 1).padStart(2, "0") }}
            </span>

            <span>
              {{ currentProject.category }}
            </span>

          </div>

        </RouterLink>


        <!-- INFORMACIÓN -->

        <div class="project-information">

          <div class="project-reference">

            <span>
              {{ currentProject.code }}
            </span>

            <span>
              {{ currentProject.category }}
            </span>

          </div>


          <div class="project-main-info">

            <div>

              <h3>
                {{ currentProject.title }}
              </h3>


              <div class="project-meta">

                <span>
                  {{ currentProject.location }}
                </span>

                <span>
                  {{ currentProject.area }}
                </span>

                <span>
                  {{ currentProject.year }}
                </span>

              </div>

            </div>


            <RouterLink
              :to="{
                name: 'arch-project-detail',
                params: {
                  slug: currentProject.slug
                }
              }"
              class="project-detail-button"
            >
              <span>VER PROYECTO</span>
              <span>→</span>
            </RouterLink>

          </div>

        </div>

      </div>


      <!-- FLECHA DERECHA -->

      <button
        class="viewer-arrow viewer-arrow-right"
        @click="nextProject"
        aria-label="Siguiente proyecto"
      >
        →
      </button>

    </div>


    <!-- =====================================
         CONTROL DEL SLIDER
    ====================================== -->

    <div class="project-navigation">

      <div class="project-counter">

        <strong>
          {{ String(currentIndex + 1).padStart(2, "0") }}
        </strong>

        <span>/</span>

        <span>
          {{ String(archProjects.length).padStart(2, "0") }}
        </span>

      </div>


      <div class="project-progress">

        <button
          v-for="(project, index) in archProjects"
          :key="project.id"
          :class="{
            active: currentIndex === index
          }"
          @click="currentIndex = index"
          :aria-label="`Ver ${project.title}`"
        >
          <span>
            {{ String(index + 1).padStart(2, "0") }}
          </span>
        </button>

      </div>

    </div>


    <!-- =====================================
         CATÁLOGO COMPLETO
    ====================================== -->

    <div class="catalog-access">

      <div class="catalog-reference">
        <span>ARCHIVO COMPLETO</span>
        <small>
          {{ archProjects.length }}
          PROYECTOS REGISTRADOS
        </small>
      </div>


      <RouterLink
        to="/projects/arquitectura/proyectos"
        class="catalog-button"
      >

        <span>
          VER TODOS LOS PROYECTOS
        </span>

        <span class="catalog-line"></span>

        <span class="catalog-arrow">
          →
        </span>

      </RouterLink>

    </div>


    <!-- MURO / SALIDA -->

    <div class="bottom-wall">

      <span></span>

      <div class="door">

        <span class="door-leaf"></span>

        <span class="door-label">
          PASILLO
          <strong>↓</strong>
        </span>

      </div>

      <span></span>

    </div>

  </section>
</template>


<script setup>
import {
  computed,
  ref
} from "vue";

import {
  archProjects
} from "../../../data/archProjects";


const currentIndex = ref(0);


const currentProject = computed(() => {
  return archProjects[currentIndex.value];
});


const nextProject = () => {

  currentIndex.value =
    (currentIndex.value + 1)
    % archProjects.length;

};


const previousProject = () => {

  currentIndex.value =
    (
      currentIndex.value -
      1 +
      archProjects.length
    )
    % archProjects.length;

};
</script>


<style scoped>
.projects-section {
  position: relative;

  width: calc(100% - 110px);
  max-width: 1760px;

  min-height: 1000px;

  margin: 0 auto;

  padding: 110px 105px 130px;

  box-sizing: border-box;

  background: #f3f1eb;
  color: #151515;
}


/* ========================================
   MUROS
======================================== */

.wall {
  position: absolute;

  width: 5px;

  background: #151515;
}

.wall-left {
  left: 0;

  top: 0;
  height: 34%;
}

.wall-right {
  right: 0;

  top: 0;
  height: 34%;
}


/* ========================================
   VENTANAS
======================================== */

.window {
  position: absolute;

  width: 5px;
  height: 150px;

  background: #151515;
}

.window::before,
.window::after {
  content: "";

  position: absolute;

  left: -3px;

  width: 11px;
  height: 1px;

  background: #151515;
}

.window::before {
  top: 0;
}

.window::after {
  bottom: 0;
}

.window span {
  position: absolute;

  top: 50%;

  color: #74736f;

  font-size: 6px;

  letter-spacing: 0.17em;

  white-space: nowrap;
}

.window-left {
  left: 0;
  top: 45%;
}

.window-left span {
  right: 20px;
}

.window-right {
  right: 0;
  top: 45%;
}

.window-right span {
  left: 20px;
}

/* LABEL */

.room-label {
  position: absolute;

  top: 48px;
  left: 65px;

  display: flex;
  align-items: center;

  gap: 12px;
}

.room-number {
  width: 30px;
  height: 30px;

  display: grid;
  place-items: center;

  border: 1px solid #151515;

  border-radius: 50%;

  font-size: 8px;
}

.room-label strong {
  font-size: 8px;
  font-weight: 500;

  letter-spacing: 0.17em;
}

.room-label small {
  color: #74736f;

  font-size: 6px;

  letter-spacing: 0.17em;
}


/* ========================================
   ENCABEZADO
======================================== */

.projects-heading {
  margin-bottom: 75px;

  display: grid;

  grid-template-columns:
    1.2fr
    0.6fr;

  gap: 120px;

  align-items: end;
}

.section-tag,
.heading-description > span {
  display: block;

  margin-bottom: 22px;

  color: #74736f;

  font-size: 7px;

  letter-spacing: 0.2em;
}

.projects-heading h2 {
  max-width: 850px;

  margin: 0;

  font-size:
    clamp(62px, 5.5vw, 57px);

  line-height: 0.9;

  font-weight: 400;

  letter-spacing: -0.055em;
}

.projects-heading h2 em {
  display: block;

  color: #74736f;

  font-weight: 400;
}

.heading-description p {
  max-width: 370px;

  margin: 0;

  color: #74736f;

  font-size: 10px;

  line-height: 1.8;
}


/* ========================================
   VISOR
======================================== */

.project-viewer {
  position: relative;
}

.project-slide {
  display: grid;

  grid-template-columns:
    minmax(600px, 1.65fr)
    minmax(330px, 0.65fr);

  border-top: 1px solid #b9b7b0;
  border-bottom: 1px solid #b9b7b0;

  animation: projectFade 0.45s ease;
}

@keyframes projectFade {

  from {
    opacity: 0;
    transform: translateY(8px);
  }

  to {
    opacity: 1;
    transform: translateY(0);
  }

}


/* ========================================
   IMAGEN
======================================== */

.project-image {
  position: relative;

  height: 560px;

  display: block;

  overflow: hidden;

  color: inherit;
}

.project-image img {
  width: 100%;
  height: 100%;

  display: block;

  object-fit: cover;

  transition: transform 0.5s ease;
}

.project-image:hover img {
  transform: scale(1.02);
}

.project-code {
  position: absolute;

  top: 20px;
  left: 20px;

  padding: 11px 13px;

  background: #f3f1eb;

  font-size: 7px;

  letter-spacing: 0.17em;
}

.image-reference {
  position: absolute;

  left: 0;
  right: 0;
  bottom: 0;

  padding: 12px 16px;

  display: flex;
  justify-content: space-between;

  background: rgba(21, 21, 21, 0.85);

  color: #f3f1eb;

  font-size: 6px;

  letter-spacing: 0.16em;
}


/* ========================================
   INFORMACIÓN
======================================== */

.project-information {
  padding: 35px 35px 30px;

  display: flex;
  flex-direction: column;
  justify-content: space-between;

  border-left: 1px solid #b9b7b0;
}

.project-reference {
  display: flex;
  justify-content: space-between;

  color: #74736f;

  font-size: 7px;

  letter-spacing: 0.17em;
}

.project-main-info h3 {
  margin: 0 0 30px;

  font-size:
    clamp(45px, 4vw, 75px);

  line-height: 0.9;

  font-weight: 400;

  letter-spacing: -0.05em;
}

.project-meta {
  padding: 15px 0;

  display: flex;
  justify-content: space-between;

  gap: 15px;

  border-top: 1px solid #b9b7b0;

  color: #74736f;

  font-size: 6px;

  letter-spacing: 0.13em;
}


/* ========================================
   BOTÓN DETALLE
======================================== */

.project-detail-button {
  width: fit-content;

  margin-top: 30px;
  padding: 14px 17px;

  display: inline-flex;
  align-items: center;

  gap: 35px;

  background: #d8d6d0;

  border: 1px solid #b9b7b0;

  color: #151515;

  text-decoration: none;

  font-size: 7px;

  letter-spacing: 0.18em;

  transition:
    background 0.3s ease,
    color 0.3s ease;
}

.project-detail-button:hover {
  background: #151515;

  color: #f3f1eb;
}


/* ========================================
   FLECHAS
======================================== */

.viewer-arrow {
  position: absolute;

  top: 280px;

  z-index: 10;

  width: 58px;
  height: 58px;

  display: grid;
  place-items: center;

  border: 1px solid #b9b7b0;

  background: #d8d6d0;

  color: #151515;

  cursor: pointer;

  font-size: 20px;

  transition:
    background 0.25s ease,
    color 0.25s ease,
    transform 0.25s ease;
}

.viewer-arrow:hover {
  background: #151515;

  color: #f3f1eb;
}

.viewer-arrow-left {
  left: -82px;
}

.viewer-arrow-left:hover {
  transform: translateX(-4px);
}

.viewer-arrow-right {
  right: -82px;
}

.viewer-arrow-right:hover {
  transform: translateX(4px);
}


/* ========================================
   NAVEGACIÓN
======================================== */

.project-navigation {
  padding: 25px 0;

  display: flex;

  align-items: center;
  justify-content: space-between;

  border-bottom: 1px solid #b9b7b0;
}

.project-counter {
  display: flex;

  align-items: baseline;

  gap: 8px;

  color: #74736f;

  font-size: 8px;

  letter-spacing: 0.15em;
}

.project-counter strong {
  color: #151515;

  font-size: 16px;

  font-weight: 400;
}

.project-progress {
  display: flex;

  gap: 6px;
}

.project-progress button {
  width: 52px;

  padding: 8px 0;

  border: 0;
  border-top: 1px solid #b9b7b0;

  background: transparent;

  color: #74736f;

  cursor: pointer;

  text-align: left;

  transition:
    border-color 0.3s ease,
    color 0.3s ease;
}

.project-progress button span {
  font-size: 6px;

  letter-spacing: 0.14em;
}

.project-progress button.active {
  border-top: 3px solid #151515;

  color: #151515;
}


/* ========================================
   CATÁLOGO
======================================== */

.catalog-access {
  margin-top: 55px;

  padding: 28px 0;

  display: flex;

  align-items: center;
  justify-content: space-between;

  border-top: 1px solid #b9b7b0;
  border-bottom: 1px solid #b9b7b0;
}

.catalog-reference {
  display: flex;
  flex-direction: column;

  gap: 6px;
}

.catalog-reference span {
  font-size: 7px;

  letter-spacing: 0.18em;
}

.catalog-reference small {
  color: #74736f;

  font-size: 6px;

  letter-spacing: 0.16em;
}


/* BOTÓN CATÁLOGO MÁS VISIBLE */

.catalog-button {
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

.catalog-line {
  width: 70px;
  height: 1px;

  background: currentColor;

  transition: width 0.3s ease;
}

.catalog-arrow {
  font-size: 15px;

  transition: transform 0.3s ease;
}

.catalog-button:hover {
  background: #151515;

  color: #f3f1eb;
}

.catalog-button:hover .catalog-line {
  width: 100px;
}

.catalog-button:hover .catalog-arrow {
  transform: translateX(5px);
}


/* ========================================
   MURO INFERIOR
======================================== */

.bottom-wall {
  position: absolute;

  left: 0;
  bottom: 0;

  width: 100%;

  display: grid;

  grid-template-columns:
    1fr
    160px
    1fr;
}

.bottom-wall > span {
  height: 5px;

  background: #151515;
}

.door {
  position: relative;

  height: 70px;
}

.door-leaf {
  position: absolute;

  left: 0;
  bottom: 0;

  width: 78px;
  height: 1px;

  background: #74736f;

  transform-origin: left bottom;

  transform: rotate(-45deg);
}

.door::after {
  content: "";

  position: absolute;

  left: 0;
  bottom: 0;

  width: 78px;
  height: 78px;

  border: 1px dashed #b9b7b0;

  border-left: 0;
  border-bottom: 0;

  border-radius: 0 78px 0 0;
}

.door-label {
  position: absolute;

  left: 50%;
  bottom: -34px;

  transform: translateX(-50%);

  display: flex;
  flex-direction: column;
  align-items: center;

  gap: 5px;

  color: #74736f;

  font-size: 6px;

  letter-spacing: 0.18em;
}

.door-label strong {
  color: #151515;

  font-size: 13px;

  font-weight: 400;
}


/* ========================================
   RESPONSIVE
======================================== */

@media (max-width: 1200px) {

  .projects-section {
    padding-left: 75px;
    padding-right: 75px;
  }

  .viewer-arrow-left {
    left: -65px;
  }

  .viewer-arrow-right {
    right: -65px;
  }

  .project-slide {
    grid-template-columns:
      1.4fr
      0.7fr;
  }

}


@media (max-width: 900px) {

  .projects-section {
    width: calc(100% - 60px);

    padding-left: 55px;
    padding-right: 55px;
  }

  .projects-heading {
    grid-template-columns: 1fr;

    gap: 35px;
  }

  .project-slide {
    grid-template-columns: 1fr;
  }

  .project-information {
    min-height: 300px;

    border-left: 0;
    border-top: 1px solid #b9b7b0;
  }

  .viewer-arrow {
    top: 250px;
  }

}


@media (max-width: 700px) {

  .projects-section {
    width: calc(100% - 30px);

    padding: 90px 25px 130px;
  }

  .window {
    display: none;
  }

  .project-image {
    height: 360px;
  }

  .viewer-arrow {
    top: 180px;

    width: 45px;
    height: 45px;
  }

  .viewer-arrow-left {
    left: 10px;
  }

  .viewer-arrow-right {
    right: 10px;
  }

  .project-navigation {
    align-items: flex-start;

    flex-direction: column;

    gap: 25px;
  }

  .project-progress {
    width: 100%;
  }

  .project-progress button {
    flex: 1;
  }

  .catalog-access {
    align-items: flex-start;

    flex-direction: column;

    gap: 25px;
  }

  .catalog-line {
    width: 40px;
  }

}
</style>