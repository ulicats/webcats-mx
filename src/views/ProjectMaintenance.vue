<template>
  <UniverseBackground />

  <section class="min-h-screen flex items-center justify-center text-white relative z-10">
    <div class="text-center px-6">
      <h1 class="text-4xl md:text-6xl font-bold tracking-widest">
        {{ title }}
      </h1>

      <p class="mt-4 opacity-70 text-lg">
        Proyecto en mantenimiento · Muy pronto
      </p>

      <p class="mt-6 text-xs opacity-50 tracking-[0.35em]">
        {{ slug }}
      </p>
    </div>
  </section>
</template>


<script setup>
import { computed } from "vue";
import { useRoute } from "vue-router";
import UniverseBackground from "../components/UniverseBackground.vue";

const route = useRoute();
const slug = computed(() => String(route.params.slug || ""));

const title = computed(() =>
  slug.value
    .replace(/-/g, " ")
    .replace(/\b\w/g, (m) => m.toUpperCase()) // 
);
</script>
