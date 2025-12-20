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
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 320px; /* desktop */
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

/* Línea base (DESKTOP = vertical) */
.line {
  position: absolute;
  width: 2px;
  height: 0;
  background: #c7d2fe;
  transition: height 0.9s ease, width 0.9s ease;
}

/* Dirección vertical */
.line-top {
  bottom: 50%;
}

.line-bottom {
  top: 50%;
}

/* Animación */
.animate .dot {
  opacity: 1;
  transform: scale(1);
}

.animate .line-top,
.animate .line-bottom {
  height: 300px;
}

/* ===================================== */
/*           RESPONSIVE (MOBILE)          */
/* ===================================== */

@media (max-width: 768px) {

  .divider-wrapper {
    min-height: unset;
    width: 100%;
    height: 40px;
  }

  /* Línea horizontal */
  .line {
    height: 2px;
    width: 0;
  }

  .line-top {
    left: 50%;
    top: 50%;
    bottom: auto;
    transform: translateY(-50%);
  }

  .line-bottom {
    right: 50%;
    top: 50%;
    left: auto;
    transform: translateY(-50%);
  }

  /* Animación horizontal */
  .animate .line-top,
  .animate .line-bottom {
    width: 45%;
    height: 2px;
  }
}

</style>
