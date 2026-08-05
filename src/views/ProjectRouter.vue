<template>
  <component :is="CurrentView" />
</template>

<script setup>
import { computed } from "vue";
import { useRoute } from "vue-router";

import ProjectMaintenance from "./ProjectMaintenance.vue";
import CasillasAbogados from "./projects/CasillasAbogados.vue";

const route = useRoute();

const map = {
  casillasabogados: CasillasAbogados,
  // luego agregas aquí: arce: Arce, bear: Bear, etc.
};

const CurrentView = computed(() => {
  const slug = String(route.params.slug || "");
  return map[slug] || ProjectMaintenance;
});
</script>
