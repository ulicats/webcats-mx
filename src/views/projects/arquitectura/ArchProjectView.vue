<template>
  <div class="arch-projects-page">

    <header class="projects-header">

   <RouterLink
    to="/projects/arquitectura"
    class="back-link"
  >
    <span class="back-arrow">←</span>
    <span>VOLVER AL ESTUDIO</span>
  </RouterLink>

      <div class="header-reference">
        <span>ARCHIVO / PROYECTOS</span>
        <span>ARQ — P01</span>
      </div>

    </header>

    <main class="projects-container">

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

      <!-- FILTROS -->

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

      <!-- GRID -->

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

    </main>

  </div>
</template>

<script setup>
import { computed, ref } from "vue";

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
.projects-view {
  min-height: 100vh;

  background: #f3f1eb;
  color: #151515;
}


/* HEADER */

.projects-header {
  width: calc(100% - 110px);
  max-width: 1760px;

  margin: 0 auto;

  padding: 35px 0 25px;

  display: flex;
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


/* CONTENEDOR */

.projects-container {
  width: calc(100% - 110px);
  max-width: 1760px;

  margin: 0 auto;

  padding: 85px 0 120px;
}


/* ENCABEZADO */

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


/* FILTROS */

.project-filters {
  padding: 20px 0;

  display: flex;
  flex-wrap: wrap;

  gap: 12px 28px;

  border-top: 1px solid #b9b7b0;
  border-bottom: 1px solid #b9b7b0;

  margin-bottom: 60px;
}

.project-filters button {
  padding: 7px 0;

  border: 0;

  background: transparent;

  color: #74736f;

  cursor: pointer;

  font-family: inherit;

  font-size: 8px;

  letter-spacing: 0.17em;

  text-transform: uppercase;
}

.project-filters button.active {
  color: #151515;

  border-bottom: 1px solid #151515;
}


/* GRID */

.projects-grid {
  display: grid;

  grid-template-columns:
    repeat(2, 1fr);

  border-top: 4px solid #151515;
  border-left: 4px solid #151515;
}

.project-card {
  display: block;

  padding: 30px;

  border-right: 4px solid #151515;
  border-bottom: 4px solid #151515;

  color: #151515;

  text-decoration: none;
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

  object-fit: cover;

  display: block;

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


/* DATA */

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

  border-top: 1px solid #b9b7b0;

  color: #74736f;

  font-size: 6px;

  letter-spacing: 0.15em;
}


/* RESPONSIVE */

@media (max-width: 900px) {

  .projects-header,
  .projects-container {
    width: calc(100% - 60px);
  }

  .catalog-heading {
    grid-template-columns: 1fr;
  }

}

@media (max-width: 700px) {

  .projects-header,
  .projects-container {
    width: calc(100% - 30px);
  }

  .projects-grid {
    grid-template-columns: 1fr;
  }

  .project-image {
    height: 360px;
  }

  .header-reference {
    display: none;
  }

}
</style>