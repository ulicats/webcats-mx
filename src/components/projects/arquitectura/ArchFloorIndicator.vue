<template>
  <aside class="floor-indicator">

    <!-- EJE SUPERIOR -->
    <div class="axis-top">
      <span>A</span>
    </div>

    <!-- REFERENCIA -->
    <div class="indicator-title">
      <span>RECORRIDO</span>
      <small>WEB / {{ activeNumber }}</small>
    </div>

    <!-- RECORRIDO -->
    <nav class="indicator-nav">

      <template
        v-for="(section, index) in sections"
        :key="section.id"
      >

        <a
          :href="`#${section.id}`"
          class="indicator-item"
          :class="{ active: activeSection === section.id }"
          @click.prevent="goToSection(section.id)"
        >
          <span class="point">
            {{ section.number }}
          </span>

          <span class="label">
            {{ section.label }}
          </span>
        </a>

        <span
          v-if="index < sections.length - 1"
          class="axis-line"
          :class="{ passed: index < activeIndex }"
        ></span>

      </template>

    </nav>

    <!-- EJE INFERIOR -->
    <div class="axis-bottom">
      <span>G</span>
    </div>

  </aside>
</template>


<script setup>
import {
  ref,
  computed,
  onMounted,
  onBeforeUnmount,
  nextTick
} from "vue";


/* ========================================
   SECCIONES
======================================== */

const sections = [
  {
    id: "inicio",
    number: "01",
    label: "INICIO"
  },
  {
    id: "estudio",
    number: "02",
    label: "ESTUDIO"
  },
  {
    id: "servicios",
    number: "03",
    label: "SERVICIOS"
  },
  {
    id: "proyectos",
    number: "04",
    label: "PROYECTOS"
  },
  {
    id: "proceso",
    number: "05",
    label: "PROCESO"
  },
  {
    id: "contacto",
    number: "06",
    label: "CONTACTO"
  }
];


/* ========================================
   ESTADO
======================================== */

const activeSection = ref("inicio");


const activeIndex = computed(() => {
  return sections.findIndex(
    section => section.id === activeSection.value
  );
});


const activeNumber = computed(() => {
  return sections[activeIndex.value]?.number || "01";
});


let scrollContainer = null;


/* ========================================
   DETECTAR SECCIÓN ACTUAL
======================================== */

const detectActiveSection = () => {

  const viewportCenter = window.innerHeight / 2;

  let closestSection = null;
  let closestDistance = Infinity;


  sections.forEach(section => {

    const element = document.getElementById(section.id);

    if (!element) return;


    const rect = element.getBoundingClientRect();

    const sectionCenter =
      rect.top + rect.height / 2;

    const distance =
      Math.abs(
        sectionCenter - viewportCenter
      );


    if (distance < closestDistance) {
      closestDistance = distance;
      closestSection = section.id;
    }

  });


  if (
    closestSection &&
    closestSection !== activeSection.value
  ) {
    activeSection.value = closestSection;
  }

};


/* ========================================
   NAVEGAR
======================================== */

const goToSection = id => {

  const element = document.getElementById(id);

  if (!element) return;


  element.scrollIntoView({
    behavior: "smooth",
    block: "start"
  });

};


/* ========================================
   MONTAR
======================================== */

onMounted(async () => {

  await nextTick();


  scrollContainer =
    document.querySelector(".architecture-scroll");


  if (scrollContainer) {

    scrollContainer.addEventListener(
      "scroll",
      detectActiveSection,
      { passive: true }
    );

  }


  window.addEventListener(
    "scroll",
    detectActiveSection,
    { passive: true }
  );


  window.addEventListener(
    "resize",
    detectActiveSection
  );


  detectActiveSection();

});


/* ========================================
   LIMPIAR
======================================== */

onBeforeUnmount(() => {

  if (scrollContainer) {

    scrollContainer.removeEventListener(
      "scroll",
      detectActiveSection
    );

  }


  window.removeEventListener(
    "scroll",
    detectActiveSection
  );


  window.removeEventListener(
    "resize",
    detectActiveSection
  );

});
</script>


<style scoped>

/* ========================================
   INDICADOR
======================================== */

.floor-indicator {
  position: fixed;

  top: 50%;

  left: 2%;

  transform:
    translate(-50%, -50%);

  z-index: 100;

  width: 70px;

  display: flex;
  flex-direction: column;
  align-items: center;

  pointer-events: none;
}


/* ========================================
   EJES SUPERIOR / INFERIOR
======================================== */

.axis-top,
.axis-bottom {
  width: 30px;
  height: 30px;

  display: grid;
  place-items: center;

  flex-shrink: 0;

  border: 1px solid #74736f;
  border-radius: 50%;

  background: #f3f1eb;

  color: #151515;

  font-size: 8px;
}


/* ========================================
   REFERENCIA
======================================== */

.indicator-title {
  margin: 12px 0 16px;

  display: flex;
  flex-direction: column;
  align-items: center;

  gap: 4px;
}


.indicator-title span {
  font-size: 6px;
  letter-spacing: 0.18em;
}


.indicator-title small {
  color: #74736f;

  font-size: 5px;
  letter-spacing: 0.16em;
}


/* ========================================
   NAVEGACIÓN
======================================== */

.indicator-nav {
  display: flex;
  flex-direction: column;
  align-items: center;

  pointer-events: auto;
}


.indicator-item {
  position: relative;

  display: flex;
  align-items: center;

  color: #74736f;

  text-decoration: none;
}


/* ========================================
   PUNTOS
======================================== */

.point {
  width: 27px;
  height: 27px;

  display: grid;
  place-items: center;

  flex-shrink: 0;

  border: 1px solid #74736f;
  border-radius: 50%;

  background: #f3f1eb;

  font-size: 6px;

  transition:
    background 0.3s ease,
    color 0.3s ease,
    border-color 0.3s ease,
    transform 0.3s ease;
}


/* ========================================
   LABEL
======================================== */

.label {
  position: absolute;

  left: 38px;

  opacity: 0;

  white-space: nowrap;

  color: #151515;

  font-size: 6px;
  letter-spacing: 0.15em;

  transform: translateX(-5px);

  transition:
    opacity 0.2s ease,
    transform 0.2s ease;
}


/* ========================================
   HOVER
======================================== */

.indicator-item:hover .label {
  opacity: 1;

  transform: translateX(0);
}


.indicator-item:hover .point {
  border-color: #151515;
}


/* ========================================
   SECCIÓN ACTIVA
======================================== */

.indicator-item.active .point {
  border-color: #151515;

  background: #151515;
  color: #f3f1eb;

  transform: scale(1.08);
}


.indicator-item.active .label {
  opacity: 1;

  transform: translateX(0);
}


/* ========================================
   LÍNEA DEL RECORRIDO
======================================== */

.axis-line {
  width: 1px;
  height: 25px;

  background: #b9b7b0;

  transition: background 0.3s ease;
}


.axis-line.passed {
  background: #151515;
}


/* ========================================
   FINAL DEL EJE
======================================== */

.axis-bottom {
  margin-top: 16px;
}


/* ========================================
   LAPTOP
   El indicador se mantiene fuera del plano
======================================== */

@media (max-width: 1450px) {

  .floor-indicator {
    /*
     * Seguimos centrados en el margen
     * exterior del plano.
     */
    left: 2.4%;

    width: 55px;
  }


  .axis-top,
  .axis-bottom {
    width: 26px;
    height: 26px;

    font-size: 7px;
  }


  .indicator-title {
    margin: 9px 0 12px;
  }


  .indicator-title span {
    font-size: 5px;
  }


  .indicator-title small {
    font-size: 4px;
  }


  .point {
    width: 23px;
    height: 23px;

    font-size: 5px;
  }


  .axis-line {
    height: 20px;
  }


  .label {
    left: 32px;

    font-size: 5px;
  }


  .axis-bottom {
    margin-top: 12px;
  }

}


/* ========================================
   TABLET / CELULAR
======================================== */

@media (max-width: 1100px) {

  .floor-indicator {
    display: none;
  }

}

</style>