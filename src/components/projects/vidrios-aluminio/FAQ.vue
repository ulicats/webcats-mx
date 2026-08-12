<template>
  <section class="faq-section">

    <div class="faq-shell">

      <div class="faq-heading">
        <span class="section-kicker">
          Preguntas frecuentes
        </span>

        <h2>
          Antes de comenzar
          <span>tu proyecto.</span>
        </h2>

        <p>
          Algunas respuestas rápidas sobre fabricación,
          instalación y cotización.
        </p>
      </div>


      <div class="faq-list">

        <article
          v-for="(item, index) in faq"
          :key="item.question"
          class="faq-item"
          :class="{ active: openIndex === index }"
        >
          <button
            class="faq-item__button"
            @click="toggleFaq(index)"
          >
            <span class="faq-item__number">
              {{ String(index + 1).padStart(2, '0') }}
            </span>

            <strong>
              {{ item.question }}
            </strong>

            <span class="faq-item__icon">
              {{ openIndex === index ? '−' : '+' }}
            </span>
          </button>


          <div
            v-if="openIndex === index"
            class="faq-item__answer"
          >
            <p>
              {{ item.answer }}
            </p>
          </div>

        </article>

      </div>

    </div>
  </section>
</template>


<script setup>
import { ref } from 'vue'

const openIndex = ref(0)

const faq = [
  {
    question: '¿Realizan proyectos residenciales y comerciales?',
    answer:
      'Sí. Las soluciones pueden adaptarse a viviendas, oficinas, comercios y otros espacios arquitectónicos.',
  },
  {
    question: '¿Es necesario tomar medidas antes de cotizar?',
    answer:
      'Es posible realizar una estimación inicial con medidas aproximadas, pero la fabricación final requiere medidas precisas del espacio.',
  },
  {
    question: '¿Qué tipo de cristal se puede utilizar?',
    answer:
      'Depende del proyecto. Algunas opciones comunes son cristal templado, claro o esmerilado, además de distintos espesores.',
  },
  {
    question: '¿Se puede elegir el acabado del aluminio?',
    answer:
      'Sí. El acabado puede seleccionarse de acuerdo con el diseño, disponibilidad y necesidades del proyecto.',
  },
  {
    question: '¿Cuánto tiempo tarda una instalación?',
    answer:
      'El tiempo depende del tamaño y complejidad del proyecto. Una vez evaluado, se puede definir un plazo estimado.',
  },
  {
    question: '¿Los trabajos incluyen garantía?',
    answer:
      'Las condiciones de garantía dependen del tipo de instalación, materiales y alcance acordado para cada proyecto.',
  },
]

const toggleFaq = index => {
  openIndex.value =
    openIndex.value === index
      ? null
      : index
}
</script>


<style scoped>
.faq-section {
  padding: 130px 5vw;

  background: #e8eef0;
}

.faq-shell {
  width: min(100%, 1500px);

  margin: 0 auto;

  display: grid;

  grid-template-columns:
    minmax(300px, 0.75fr)
    minmax(500px, 1.25fr);

  gap: 80px;
}

.faq-heading {
  align-self: start;
}

.section-kicker {
  display: block;

  margin-bottom: 18px;

  color: var(--glass-blue, #4ea7c4);

  font-size: 0.7rem;

  font-weight: 700;

  letter-spacing: 0.18em;

  text-transform: uppercase;
}

.faq-heading h2 {
  margin: 0;

  color: #111416;

  font-size:
    clamp(2.8rem, 5vw, 5.2rem);

  font-weight: 500;

  line-height: 0.98;

  letter-spacing: -0.05em;
}

.faq-heading h2 span {
  display: block;

  color: #87949a;
}

.faq-heading p {
  max-width: 460px;

  margin: 35px 0 0;

  color: #67757a;

  font-size: 1rem;

  line-height: 1.8;
}

.faq-list {
  border-top:
    5px solid #111416;
}

.faq-item {
  border-bottom:
    5px solid #111416;

  background: #f5f8f9;
}

.faq-item__button {
  width: 100%;

  min-height: 105px;

  padding: 26px 30px;

  display: grid;

  grid-template-columns:
    55px
    1fr
    45px;

  align-items: center;

  gap: 15px;

  border: 0;

  background: transparent;

  text-align: left;

  cursor: pointer;
}

.faq-item__number {
  color:
    var(--glass-blue, #4ea7c4);

  font-size: 0.64rem;

  font-weight: 700;

  letter-spacing: 0.14em;
}

.faq-item__button strong {
  color: #111416;

  font-size: 1.05rem;

  font-weight: 500;
}

.faq-item__icon {
  color: #111416;

  font-size: 1.4rem;

  text-align: right;
}

.faq-item__answer {
  padding:
    0 30px
    30px 100px;
}

.faq-item__answer p {
  max-width: 650px;

  margin: 0;

  color: #69767b;

  font-size: 0.9rem;

  line-height: 1.7;
}

.faq-item.active {
  background: #dce7ea;
}

@media (max-width: 950px) {
  .faq-section {
    padding: 95px 5vw;
  }

  .faq-shell {
    grid-template-columns: 1fr;

    gap: 50px;
  }
}

@media (max-width: 600px) {
  .faq-section {
    padding: 75px 20px;
  }

  .faq-heading h2 {
    font-size:
      clamp(2.6rem, 12vw, 4rem);
  }

  .faq-list {
    border-top-width: 3px;
  }

  .faq-item {
    border-bottom-width: 3px;
  }

  .faq-item__button {
    min-height: 90px;

    padding: 22px 18px;

    grid-template-columns:
      35px
      1fr
      30px;
  }

  .faq-item__answer {
    padding:
      0 18px
      24px 53px;
  }
}
</style>