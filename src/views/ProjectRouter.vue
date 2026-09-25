<template>
  <component :is="CurrentView" />
</template>

<script setup>
import { computed } from "vue";
import { useRoute } from "vue-router";

import ProjectMaintenance from "./ProjectMaintenance.vue";
import HospedajeDemo from "./projects/hospedajes/HospedajeDemo.vue";
import VidriosAluminioDemo from "./projects/vidrios-aluminio/VidriosAluminioDemo.vue";
import NutriologoDemo from "./projects/nutriologo/NutriologoDemo.vue";
import GymDemo from "./projects/gym/GymDemo.vue";
import AbogadosDemo from "./projects/abogados/LawDemo.vue";
import FinDemo from "./projects/financiera/FinDemo.vue";
import ArchDemo from "./projects/arquitectura/ArchDemo.vue";
import CatalogoDemo from "./projects/catalogo/CatalogoDemo.vue";

const route = useRoute();

const map = {
  hospedajes: HospedajeDemo,
  vidriosaluminio: VidriosAluminioDemo,
  nutriologa: NutriologoDemo,
  gym: GymDemo,
  abogados: AbogadosDemo,
  financiera: FinDemo,
  arquitectura: ArchDemo,
  catalogo: CatalogoDemo,

};

const CurrentView = computed(() => {
  const slug = String(route.params.slug || "");
  return map[slug] || ProjectMaintenance;
});
</script>