<template>
  <div class="arch-projects-page">

    <!-- =========================
         HEADER
    ========================== -->

    <header class="projects-header">

      <RouterLink
        to="/projects/arquitectura"
        class="back-link"
      >
        <span class="back-arrow">←</span>
        <span>VOLVER AL INICIO</span>
      </RouterLink>

      <div class="header-reference">
        <span>ARCHIVO / PROYECTOS</span>
        <span>ARQ — P01</span>
      </div>

    </header>


    <!-- =========================
         CONTENIDO
    ========================== -->

    <main class="projects-container">

      <!-- ENCABEZADO -->

      <section class="catalog-heading">

        <div>
          <span class="eyebrow">
            CATÁLOGO / 01
          </span>

          <h1>
            Archivo de
            <em>proyectos.</em>
          </h1>
        </div>

        <p>
          Una selección de proyectos residenciales,
          comerciales, institucionales y urbanos
          desarrollados por el estudio.
        </p>

      </section>


      <!-- =========================
           FILTROS
      ========================== -->

      <nav class="project-filters">

        <button
          v-for="category in archCategories"
          :key="category"
          :class="{
            active: selectedCategory === category
          }"
          @click="selectedCategory = category"
        >
          {{ category }}
        </button>

      </nav>


      <!-- =========================
           GRID DE PROYECTOS
      ========================== -->

      <section class="projects-grid">

        <RouterLink
          v-for="project in filteredProjects"
          :key="project.id"
          :to="{
            name: 'arch-project-detail',
            params: {
              slug: project.slug
            }
          }"
          class="project-card"
        >

          <div class="project-image">

            <img
              :src="project.cover"
              :alt="project.title"
            />

            <span class="project-code">
              {{ project.code }}
            </span>

          </div>


          <div class="project-data">

            <div class="project-main-data">

              <span>
                {{ project.category }}
              </span>

              <h2>
                {{ project.title }}
              </h2>

            </div>


            <div class="project-meta">

              <span>
                {{ project.location }}
              </span>

              <span>
                {{ project.area }}
              </span>

              <span>
                {{ project.year }}
              </span>

            </div>

          </div>

        </RouterLink>

      </section>


      <!-- =========================
           REGRESAR AL INICIO
      ========================== -->

      <section class="catalog-return">

        <div class="return-reference">
          <span>FIN DEL ARCHIVO</span>
          <span>ARQ — P01 / END</span>
        </div>

        <RouterLink
          to="/projects/arquitectura"
          class="return-home"
        >
          <span class="return-arrow">←</span>

          <span class="return-text">
            REGRESAR AL INICIO
          </span>

          <span class="return-line"></span>
        </RouterLink>

      </section>

    </main>


    <!-- =========================
         FOOTER
    ========================== -->

    <ArchFooter />

  </div>
</template>


<script setup>
import { computed, ref } from "vue";

import ArchFooter from "../../../components/projects/arquitectura/ArchFooter.vue";

import {
  archProjects,
  archCategories
} from "../../../data/archProjects";


const selectedCategory = ref("Todos");


const filteredProjects = computed(() => {

  if (selectedCategory.value === "Todos") {
    return archProjects;
  }

  return archProjects.filter(
    project =>
      project.category === selectedCategory.value
  );

});
</script>


<style scoped>

/* ========================================
   PÁGINA
======================================== */

.arch-projects-page {
  min-height: 100vh;

  background: #f3f1eb;
  color: #151515;
}


/* ========================================
   HEADER
======================================== */

.projects-header {
  width: calc(100% - 110px);
  max-width: 1760px;

  margin: 0 auto;

  padding: 35px 0 25px;

  display: flex;
  justify-content: space-between;
  align-items: center;

  border-bottom: 5px solid #151515;

  box-sizing: border-box;
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

.projects-container {
  width: calc(100% - 110px);
  max-width: 1760px;

  margin: 0 auto;

  padding: 85px 0 0;

  box-sizing: border-box;
}


/* ========================================
   ENCABEZADO
======================================== */

.catalog-heading {
  display: grid;

  grid-template-columns:
    1fr
    420px;

  gap: 90px;

  align-items: end;

  margin-bottom: 70px;
}


.eyebrow {
  display: block;

  margin-bottom: 25px;

  color: #74736f;

  font-size: 8px;

  letter-spacing: 0.22em;
}


.catalog-heading h1 {
  margin: 0;

  font-size:
    clamp(70px, 7vw, 130px);

  line-height: 0.85;

  font-weight: 400;

  letter-spacing: -0.06em;
}


.catalog-heading h1 em {
  display: block;

  color: #74736f;

  font-weight: 400;
}


.catalog-heading p {
  margin: 0;

  max-width: 420px;

  color: #74736f;

  font-size: 12px;

  line-height: 1.8;
}


/* ========================================
   FILTROS
======================================== */
.project-filters {
  padding: 24px 0;

  display: flex;
  flex-wrap: wrap;

  gap: 14px 36px;

  border-top: 1px solid #b9b7b0;
  border-bottom: 1px solid #b9b7b0;

  margin-bottom: 60px;
}


.project-filters button {
  position: relative;

  padding: 9px 0;

  border: 0;

  background: transparent;

  color: #74736f;

  cursor: pointer;

  font-family: inherit;

  font-size: 11px;
  font-weight: 500;

  letter-spacing: 0.14em;

  text-transform: uppercase;

  transition:
    color 0.2s ease;
}


.project-filters button:hover {
  color: #151515;
}


.project-filters button.active {
  color: #151515;

  border-bottom: 2px solid #151515;
}

/* ========================================
   GRID
======================================== */

.projects-grid {
  display: grid;

  grid-template-columns:
    repeat(2, minmax(0, 1fr));

  border-top: 4px solid #151515;
  border-left: 4px solid #151515;
}


.project-card {
  display: block;

  min-width: 0;

  padding: 30px;

  border-right: 4px solid #151515;
  border-bottom: 4px solid #151515;

  color: #151515;

  text-decoration: none;

  box-sizing: border-box;
}


.project-image {
  position: relative;

  height: 450px;

  overflow: hidden;

  background: #ddd;
}


.project-image img {
  width: 100%;
  height: 100%;

  display: block;

  object-fit: cover;

  transition:
    transform 0.5s ease;
}


.project-card:hover img {
  transform: scale(1.025);
}


.project-code {
  position: absolute;

  top: 18px;
  left: 18px;

  padding: 9px 12px;

  background: #f3f1eb;

  font-size: 7px;

  letter-spacing: 0.17em;
}


/* ========================================
   DATA
======================================== */

.project-data {
  padding-top: 22px;
}


.project-main-data span {
  color: #74736f;

  font-size: 7px;

  letter-spacing: 0.18em;
}


.project-main-data h2 {
  margin: 8px 0 22px;

  font-size:
    clamp(28px, 2.5vw, 45px);

  font-weight: 400;

  letter-spacing: -0.04em;
}


.project-meta {
  padding-top: 15px;

  display: flex;
  justify-content: space-between;

  gap: 20px;

  border-top: 1px solid #b9b7b0;

  color: #74736f;

  font-size: 6px;

  letter-spacing: 0.15em;
}


/* ========================================
   REGRESAR AL INICIO
======================================== */

.catalog-return {
  position: relative;

  min-height: 220px;

  padding: 55px 0 65px;

  display: flex;
  flex-direction: column;

  align-items: center;
  justify-content: center;

  border-bottom: 1px solid #b9b7b0;

  box-sizing: border-box;
}


.return-reference {
  width: 100%;

  margin-bottom: 38px;

  display: flex;
  justify-content: space-between;

  color: #74736f;

  font-size: 6px;

  letter-spacing: 0.18em;
}


.return-home {
  min-width: 320px;
  min-height: 58px;

  padding: 0 22px;

  display: flex;
  align-items: center;

  gap: 18px;

  /* IGUAL QUE EL BOTÓN DE ARRIBA */
  background: #d8d6d0;
  border: 1px solid #b9b7b0;

  color: #151515;

  text-decoration: none;

  box-sizing: border-box;

  transition:
    background 0.25s ease,
    color 0.25s ease,
    border-color 0.25s ease,
    transform 0.25s ease;
}


.return-arrow {
  font-size: 18px;

  transition: transform 0.25s ease;
}


.return-text {
  white-space: nowrap;

  font-size: 11px;
  font-weight: 500;

  letter-spacing: 0.18em;
}


.return-line {
  width: 55px;
  height: 1px;

  margin-left: auto;

  background: #151515;

  transition:
    width 0.3s ease,
    background 0.25s ease;
}


.return-home:hover {
  background: #151515;
  border-color: #151515;

  color: #f3f1eb;

  transform: translateX(-3px);
}


.return-home:hover .return-arrow {
  transform: translateX(-4px);
}


.return-home:hover .return-line {
  width: 70px;

  background: #f3f1eb;
}

/* ========================================
   RESPONSIVE — TABLET
======================================== */

@media (max-width: 900px) {

  .projects-header,
  .projects-container {
    width: calc(100% - 60px);
  }


  .catalog-heading {
    grid-template-columns: 1fr;

    gap: 35px;
  }


  .catalog-heading p {
    max-width: 600px;
  }


  .project-image {
    height: 400px;
  }

}


/* ========================================
   RESPONSIVE — MÓVIL
======================================== */

@media (max-width: 700px) {

  .projects-header,
  .projects-container {
    width: calc(100% - 30px);
  }


  .projects-header {
    padding:
      22px
      0
      18px;
  }


  .header-reference {
    display: none;
  }


  .back-link {
    min-height: 40px;

    padding: 0 14px;

    font-size: 7px;
  }


  .projects-container {
    padding-top: 55px;
  }


  .catalog-heading {
    margin-bottom: 45px;
  }


  .catalog-heading h1 {
    font-size:
      clamp(48px, 15vw, 72px);
  }


  .project-filters {
    gap: 10px 22px;
    padding: 18px 0;
  }

  .project-filters button {
    font-size: 9px;
    letter-spacing: 0.12em;
  }

  .return-home {
    width: 100%;
    min-width: 0;
    min-height: 56px;
  }

  .return-text {
    font-size: 10px;
  }


  .projects-grid {
    grid-template-columns: 1fr;
  }


  .project-card {
    padding: 18px;
  }


  .project-image {
    height: 360px;
  }


  .project-main-data h2 {
    font-size: 30px;
  }


  /* REGRESAR */

  .catalog-return {
    min-height: 190px;

    padding:
      45px
      0
      55px;
  }


  .return-reference {
    margin-bottom: 30px;
  }


  .return-home {
    width: 100%;
    min-width: 0;

    padding:
      17px
      18px;
  }


  .return-text {
    font-size: 7px;
  }


  .return-line {
    width: 35px;
  }

}


/* ========================================
   MÓVIL PEQUEÑO
======================================== */

@media (max-width: 480px) {

  .project-image {
    height: 280px;
  }


  .project-meta {
    gap: 10px;

    font-size: 5.5px;
  }


  .return-reference {
    font-size: 5.5px;
  }


  .return-line {
    width: 25px;
  }

}
</style>