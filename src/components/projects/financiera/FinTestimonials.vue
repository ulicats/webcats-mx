<template>
  <section class="fin-testimonials">
    <div class="fin-testimonials__container">

      <div class="fin-testimonials__top">
        <span>CONFIANZA</span>

        <div class="fin-testimonials__counter">
          <strong>04</strong>
          <span>/ Relaciones de largo plazo</span>
        </div>
      </div>

      <div class="fin-testimonials__quote">
        <span class="fin-testimonials__quote-mark">“</span>

        <transition name="fade" mode="out-in">
          <div :key="activeTestimonial" class="fin-testimonials__content">
            <p>
              {{ currentTestimonial.quote }}
            </p>

            <div class="fin-testimonials__author">
              <span>{{ currentTestimonial.name }}</span>
              <small>{{ currentTestimonial.role }}</small>
            </div>
          </div>
        </transition>
      </div>

      <div class="fin-testimonials__footer">

        <div class="fin-testimonials__progress">
          <button
            v-for="(_, index) in testimonials"
            :key="index"
            type="button"
            :class="{ active: index === activeTestimonial }"
            @click="activeTestimonial = index"
          ></button>
        </div>

        <div class="fin-testimonials__controls">
          <button type="button" @click="previous">
            ←
          </button>

          <button type="button" @click="next">
            →
          </button>
        </div>

      </div>

    </div>
  </section>
</template>

<script setup>
import { computed, ref } from 'vue'

const activeTestimonial = ref(0)

const testimonials = [
  {
    quote:
      'Vertex nos ayudó a dejar de tomar decisiones aisladas y comenzar a ver nuestras finanzas como una estrategia completa.',
    name: 'Cliente patrimonial',
    role: 'EMPRESARIO'
  },
  {
    quote:
      'La diferencia fue tener claridad. Entendimos qué queríamos lograr, qué riesgos existían y qué decisiones debíamos priorizar.',
    name: 'Cliente privado',
    role: 'DIRECTIVO'
  },
  {
    quote:
      'El acompañamiento convirtió números y objetivos que parecían dispersos en un plan ordenado y fácil de seguir.',
    name: 'Cliente empresarial',
    role: 'SOCIO FUNDADOR'
  }
]

const currentTestimonial = computed(
  () => testimonials[activeTestimonial.value]
)

const next = () => {
  activeTestimonial.value =
    (activeTestimonial.value + 1) % testimonials.length
}

const previous = () => {
  activeTestimonial.value =
    activeTestimonial.value === 0
      ? testimonials.length - 1
      : activeTestimonial.value - 1
}
</script>

<style scoped>
.fin-testimonials {
  padding: 140px 0;
  background: var(--fin-primary);
  color: var(--fin-white);
}

.fin-testimonials__container {
  width: min(1100px, calc(100% - 80px));
  margin: 0 auto;
}

.fin-testimonials__top {
  padding-bottom: 35px;
  display: flex;
  justify-content: space-between;
  align-items: flex-end;
  border-bottom: 1px solid rgba(255, 255, 255, 0.13);
}

.fin-testimonials__top > span {
  color: var(--fin-accent-light);
  font-size: 9px;
  letter-spacing: 3px;
}

.fin-testimonials__counter {
  display: flex;
  align-items: baseline;
  gap: 10px;
}

.fin-testimonials__counter strong {
  color: var(--fin-accent-light);
  font-family: Georgia, serif;
  font-size: 32px;
  font-weight: 400;
}

.fin-testimonials__counter span {
  color: rgba(255, 255, 255, 0.35);
  font-size: 8px;
  letter-spacing: 1.5px;
}

.fin-testimonials__quote {
  position: relative;
  min-height: 430px;
  padding: 80px 0 70px;
}

.fin-testimonials__quote-mark {
  position: absolute;
  top: 45px;
  left: -10px;
  color: rgba(183, 155, 100, 0.17);
  font-family: Georgia, serif;
  font-size: 180px;
  line-height: 1;
}

.fin-testimonials__content {
  position: relative;
  z-index: 2;
}

.fin-testimonials__content p {
  max-width: 980px;
  margin-bottom: 45px;
  font-family: Georgia, serif;
  font-size: clamp(34px, 4vw, 54px);
  line-height: 1.35;
  font-weight: 400;
  letter-spacing: -1.2px;
}

.fin-testimonials__author {
  display: flex;
  flex-direction: column;
  gap: 6px;
}

.fin-testimonials__author span {
  color: var(--fin-accent-light);
  font-size: 11px;
  letter-spacing: 1px;
}

.fin-testimonials__author small {
  color: rgba(255, 255, 255, 0.35);
  font-size: 8px;
  letter-spacing: 2px;
}

.fin-testimonials__footer {
  padding-top: 30px;
  display: flex;
  justify-content: space-between;
  border-top: 1px solid rgba(255, 255, 255, 0.13);
}

.fin-testimonials__progress {
  display: flex;
  align-items: center;
  gap: 8px;
}

.fin-testimonials__progress button {
  width: 38px;
  height: 2px;
  padding: 0;
  border: 0;
  background: rgba(255, 255, 255, 0.18);
  cursor: pointer;
  transition: background 0.25s ease;
}

.fin-testimonials__progress button.active {
  background: var(--fin-accent);
}

.fin-testimonials__controls {
  display: flex;
  gap: 10px;
}

.fin-testimonials__controls button {
  width: 46px;
  height: 46px;
  border: 1px solid rgba(255, 255, 255, 0.17);
  background: transparent;
  color: var(--fin-white);
  cursor: pointer;
  transition:
    background 0.25s ease,
    border-color 0.25s ease;
}

.fin-testimonials__controls button:hover {
  background: var(--fin-accent);
  border-color: var(--fin-accent);
  color: var(--fin-primary);
}

.fade-enter-active,
.fade-leave-active {
  transition:
    opacity 0.25s ease,
    transform 0.25s ease;
}

.fade-enter-from {
  opacity: 0;
  transform: translateY(12px);
}

.fade-leave-to {
  opacity: 0;
  transform: translateY(-12px);
}

@media (max-width: 600px) {
  .fin-testimonials {
    padding: 90px 0;
  }

  .fin-testimonials__container {
    width: calc(100% - 36px);
  }

  .fin-testimonials__top {
    align-items: flex-start;
    gap: 20px;
    flex-direction: column;
  }

  .fin-testimonials__quote {
    min-height: 420px;
    padding-top: 70px;
  }

  .fin-testimonials__content p {
    font-size: 31px;
  }

  .fin-testimonials__quote-mark {
    font-size: 130px;
  }
}
</style>