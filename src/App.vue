<template>
  <PageLoader v-if="loading" />
  <router-view v-else />
</template>

<script setup>
import { ref, onMounted } from "vue"
import PageLoader from "./components/PageLoader.vue"

const loading = ref(true)

onMounted(() => {
  setTimeout(() => {
    loading.value = false
  }, 5200)
})
</script>
