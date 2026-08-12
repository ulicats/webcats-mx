<template>
  <component :is="CurrentView" />
</template>

<script setup>
import { computed } from "vue";
import { useRoute } from "vue-router";

import ProjectMaintenance from "./ProjectMaintenance.vue";
import CasillasAbogados from "./projects/casillas-abogados/CasillasAbogados.vue";
import HospedajeDemo from "./projects/hospedajes/HospedajeDemo.vue";
import VidriosAluminioDemo from "./projects/vidrios-aluminio/VidriosAluminioDemo.vue";

const route = useRoute();

const map = {
  casillasabogados: CasillasAbogados,
  hospedajes: HospedajeDemo,
  vidriosaluminio: VidriosAluminioDemo,
};

const CurrentView = computed(() => {
  const slug = String(route.params.slug || "");
  return map[slug] || ProjectMaintenance;
});
</script>