<template>
  <div ref="dividerRef" class="divider-wrapper">
    <div class="dot"></div>
    <div class="line line-top"></div>
    <div class="line line-bottom"></div>
  </div>
</template>

<script setup>
import { ref, onMounted } from "vue";

const dividerRef = ref(null);

onMounted(() => {
  const observer = new IntersectionObserver(
    ([entry]) => {
      if (entry.isIntersecting) {
        dividerRef.value.classList.add("animate");
        observer.disconnect();
      }
    },
    { threshold: 0.6 }
  );

  if (dividerRef.value) {
    observer.observe(dividerRef.value);
  }
});
</script>

<style scoped>
.divider-wrapper {
  position: relative;
  height: 220px;
  display: flex;
  align-items: center;
  justify-content: center;
}

/* Punto central */
.dot {
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background: #2563eb;
  z-index: 2;
  opacity: 0;
  transform: scale(0.6);
  transition: opacity 0.4s ease, transform 0.4s ease;
}

/* Línea base */
.line {
  position: absolute;
  width: 2px;
  background: #c7d2fe;
  height: 0;
  transition: height 0.9s ease;
}

/* Dirección */
.line-top {
  bottom: 50%;
}

.line-bottom {
  top: 50%;
}

/* Animación activada */
.animate .dot {
  opacity: 1;
  transform: scale(1);
}

.animate .line-top,
.animate .line-bottom {
  height: 110px;
}
</style>
