<template>
  <component :is="CurrentView" />
</template>

<script setup>
import { computed } from "vue";
import { useRoute } from "vue-router";

import ProjectMaintenance from "./ProjectMaintenance.vue";
import CasillasAbogados from "./projects/casillas-abogados/CasillasAbogados.vue";
import ArceCabanas from "./projects/arce/ArceCabanas.vue";

const route = useRoute();

const map = {
  casillasabogados: CasillasAbogados,
  arce: ArceCabanas,
};

const CurrentView = computed(() => {
  const slug = String(route.params.slug || "");
  return map[slug] || ProjectMaintenance;
});
</script>