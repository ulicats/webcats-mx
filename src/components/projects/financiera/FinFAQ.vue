<template>
  <section class="fin-faq">
    <div class="fin-faq__container">

      <div class="fin-faq__header">
        <span>FAQ</span>

        <h2>
          Preguntas antes de
          <em>tomar decisiones.</em>
        </h2>

        <p>
          Resolvemos algunas de las dudas más frecuentes antes de iniciar
          un proceso de asesoría financiera o patrimonial.
        </p>
      </div>

      <div class="fin-faq__list">

        <article
          v-for="(item, index) in faqs"
          :key="item.question"
          class="fin-faq__item"
          :class="{ 'fin-faq__item--open': activeIndex === index }"
        >
          <button
            type="button"
            class="fin-faq__question"
            @click="toggle(index)"
          >
            <span class="fin-faq__number">
              {{ String(index + 1).padStart(2, '0') }}
            </span>

            <span class="fin-faq__question-text">
              {{ item.question }}
            </span>

            <span class="fin-faq__icon">
              {{ activeIndex === index ? '−' : '+' }}
            </span>
          </button>

          <div
            v-if="activeIndex === index"
            class="fin-faq__answer"
          >
            <p>{{ item.answer }}</p>
          </div>
        </article>

      </div>

    </div>
  </section>
</template>

<script setup>
import { ref } from 'vue'

const activeIndex = ref(0)

const faqs = [
  {
    question: '¿Qué tipo de clientes atienden?',
    answer:
      'Trabajamos con personas, familias, empresarios y organizaciones que buscan ordenar sus finanzas, fortalecer su patrimonio o tomar decisiones estratégicas con mayor claridad.'
  },
  {
    question: '¿Necesito tener un patrimonio elevado para solicitar asesoría?',
    answer:
      'No necesariamente. Lo importante es contar con objetivos claros y disposición para construir una estrategia financiera de manera estructurada y sostenible.'
  },
  {
    question: '¿La asesoría incluye recomendaciones de inversión?',
    answer:
      'Puede incluir análisis y construcción de estrategias de inversión cuando forma parte de los objetivos del cliente, siempre considerando horizonte, liquidez y tolerancia al riesgo.'
  },
  {
    question: '¿Cómo comienza el proceso?',
    answer:
      'El primer paso es una reunión inicial para conocer la situación actual, identificar prioridades y determinar qué tipo de acompañamiento resulta más adecuado.'
  },
  {
    question: '¿Las estrategias son personalizadas?',
    answer:
      'Sí. Cada estrategia se construye con base en la situación financiera, objetivos, horizonte, estructura patrimonial y necesidades particulares de cada cliente.'
  },
  {
    question: '¿Ofrecen seguimiento después de implementar la estrategia?',
    answer:
      'Sí. El seguimiento es parte fundamental del proceso, ya que permite evaluar resultados, revisar cambios de contexto y ajustar decisiones cuando sea necesario.'
  }
]

const toggle = (index) => {
  activeIndex.value = activeIndex.value === index ? null : index
}
</script>

<style scoped>
.fin-faq {
  padding: 140px 0;
  background: var(--fin-bg);
}

.fin-faq__container {
  width: min(1180px, calc(100% - 80px));
  margin: 0 auto;
}

.fin-faq__header {
  max-width: 780px;
  margin-bottom: 75px;
}

.fin-faq__header > span {
  display: block;
  margin-bottom: 24px;
  color: var(--fin-accent);
  font-size: 9px;
  font-weight: 600;
  letter-spacing: 3px;
}

.fin-faq__header h2 {
  margin-bottom: 28px;
  font-family: Georgia, 'Times New Roman', serif;
  font-size: clamp(48px, 5vw, 72px);
  line-height: 1.08;
  font-weight: 400;
  letter-spacing: -2.5px;
  color: var(--fin-primary);
}

.fin-faq__header h2 em {
  display: block;
  color: var(--fin-accent);
  font-weight: 400;
}

.fin-faq__header p {
  max-width: 620px;
  color: var(--fin-text-soft);
  font-size: 14px;
  line-height: 1.9;
}

.fin-faq__list {
  border-top: 1px solid var(--fin-border);
}

.fin-faq__item {
  border-bottom: 1px solid var(--fin-border);
}

.fin-faq__question {
  width: 100%;
  padding: 32px 0;
  display: grid;
  grid-template-columns: 80px 1fr 50px;
  gap: 20px;
  align-items: center;
  border: 0;
  background: transparent;
  text-align: left;
  cursor: pointer;
}

.fin-faq__number {
  color: var(--fin-accent);
  font-family: Georgia, serif;
  font-size: 12px;
}

.fin-faq__question-text {
  font-family: Georgia, serif;
  font-size: 24px;
  color: var(--fin-primary);
}

.fin-faq__icon {
  width: 40px;
  height: 40px;
  display: grid;
  place-items: center;
  justify-self: end;
  border: 1px solid var(--fin-border);
  color: var(--fin-accent);
  font-size: 22px;
  transition:
    background 0.25s ease,
    color 0.25s ease;
}

.fin-faq__item--open .fin-faq__icon {
  background: var(--fin-primary);
  border-color: var(--fin-primary);
  color: var(--fin-white);
}

.fin-faq__answer {
  padding: 0 70px 35px 100px;
}

.fin-faq__answer p {
  max-width: 760px;
  margin: 0;
  color: var(--fin-text-soft);
  font-size: 13px;
  line-height: 1.9;
}

@media (max-width: 650px) {
  .fin-faq {
    padding: 90px 0;
  }

  .fin-faq__container {
    width: calc(100% - 36px);
  }

  .fin-faq__question {
    grid-template-columns: 42px 1fr 40px;
    gap: 12px;
    padding: 24px 0;
  }

  .fin-faq__question-text {
    font-size: 20px;
  }

  .fin-faq__answer {
    padding: 0 0 28px 54px;
  }
}
</style>