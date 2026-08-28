<template>
  <section
    id="faq"
    class="law-section law-section--soft law-faq"
  >
    <div class="law-container">

      <header class="law-faq__header">
        <div>
          <span class="law-eyebrow">
            Preguntas frecuentes
          </span>

          <h2 class="law-title">
            Información antes
            de iniciar tu consulta.
          </h2>
        </div>

        <p class="law-subtitle">
          Estas respuestas son de carácter general y pueden variar
          dependiendo de las circunstancias particulares de cada asunto.
        </p>
      </header>

      <div class="law-faq__layout">

        <!-- ÍNDICE -->
        <aside class="law-faq__index law-contract-frame">
          <span class="law-faq__index-label">
            Índice
          </span>

          <strong>
            Consultas generales
          </strong>

          <div class="law-faq__index-list">
            <span
              v-for="(item, index) in faqs"
              :key="item.question"
            >
              {{ String(index + 1).padStart(2, "0") }}
            </span>
          </div>

          <div class="law-faq__folio">
            LEX & JUSTITIA
            <br />
            FAQ / 2026
          </div>
        </aside>

        <!-- ACORDEÓN -->
        <div class="law-faq__list">

          <article
            v-for="(item, index) in faqs"
            :key="item.question"
            class="law-faq__item"
            :class="{
              'law-faq__item--open': openIndex === index
            }"
          >
            <button
              type="button"
              class="law-faq__question"
              @click="toggleFaq(index)"
            >
              <span class="law-faq__number">
                {{ String(index + 1).padStart(2, "0") }}
              </span>

              <span class="law-faq__question-text">
                {{ item.question }}
              </span>

              <span class="law-faq__symbol">
                {{ openIndex === index ? "−" : "+" }}
              </span>
            </button>

            <Transition name="law-faq-answer">
              <div
                v-if="openIndex === index"
                class="law-faq__answer"
              >
                <p>
                  {{ item.answer }}
                </p>
              </div>
            </Transition>
          </article>

        </div>

      </div>

    </div>
  </section>
</template>

<script setup>
import { ref } from "vue";

const openIndex = ref(0);

const faqs = [
  {
    question: "¿La primera consulta tiene costo?",
    answer:
      "El costo de la consulta puede depender del tipo de asunto y de la modalidad seleccionada. Antes de agendar, se informa al cliente el costo correspondiente y las condiciones de la valoración inicial.",
  },
  {
    question: "¿Qué documentos debo llevar a la consulta?",
    answer:
      "Dependerá del asunto. En términos generales, es recomendable llevar identificaciones, contratos, convenios, notificaciones, recibos, mensajes, correos o cualquier documento relacionado con los hechos que deseas consultar.",
  },
  {
    question: "¿Puedo recibir asesoría por videollamada?",
    answer:
      "Sí. Algunos asuntos pueden ser analizados inicialmente mediante videollamada o consulta telefónica. Si posteriormente es necesaria una revisión documental física o comparecencia, se te indicará oportunamente.",
  },
  {
    question: "¿Cuánto tiempo puede durar un proceso legal?",
    answer:
      "No existe una duración única. El tiempo depende del tipo de procedimiento, la carga de trabajo de las autoridades, las actuaciones de las partes y la complejidad del asunto.",
  },
  {
    question: "¿Pueden garantizarme que voy a ganar?",
    answer:
      "No. Ningún profesional responsable puede garantizar el resultado de un procedimiento. Lo que sí puede hacerse es analizar riesgos, fortalezas, escenarios posibles y diseñar una estrategia jurídica adecuada.",
  },
  {
    question: "¿La información de mi caso es confidencial?",
    answer:
      "La información proporcionada durante la consulta y el desarrollo del asunto se maneja con discreción profesional y conforme a las obligaciones aplicables de confidencialidad.",
  },
  {
    question: "¿Atienden asuntos fuera de la ciudad?",
    answer:
      "Dependiendo de la naturaleza del asunto, puede ser posible brindar asesoría remota o coordinar la atención correspondiente. La viabilidad se revisa durante la consulta inicial.",
  },
];

const toggleFaq = (index) => {
  openIndex.value =
    openIndex.value === index
      ? null
      : index;
};
</script>

<style scoped>
/* =========================================================
   HEADER
========================================================= */

.law-faq__header {
  display: grid;

  grid-template-columns:
    minmax(0, 1.25fr)
    minmax(280px, 0.75fr);

  gap: 80px;

  align-items: end;

  margin-bottom: 65px;
}

.law-faq__header .law-title {
  margin-bottom: 0;
}

/* =========================================================
   LAYOUT
========================================================= */

.law-faq__layout {
  display: grid;

  grid-template-columns: 260px 1fr;

  gap: 65px;

  align-items: start;
}

/* =========================================================
   ÍNDICE
========================================================= */

.law-faq__index {
  position: sticky;

  top: 120px;

  padding: 35px 30px;

  background: var(--law-paper);
}

.law-faq__index-label {
  display: block;

  margin-bottom: 8px;

  color: var(--law-gold);

  font-family: "Inter", Arial, sans-serif;

  font-size: 8px;
  font-weight: 700;

  letter-spacing: 1.5px;
  text-transform: uppercase;
}

.law-faq__index strong {
  display: block;

  margin-bottom: 30px;

  color: var(--law-primary);

  font-family:
    "Cormorant Garamond",
    Georgia,
    serif;

  font-size: 25px;
  font-weight: 600;
}

.law-faq__index-list {
  display: grid;

  grid-template-columns: repeat(4, 1fr);

  gap: 10px;

  padding: 20px 0;

  border-top: 1px solid var(--law-border);
  border-bottom: 1px solid var(--law-border);
}

.law-faq__index-list span {
  color: var(--law-text-soft);

  font-family:
    "Cormorant Garamond",
    Georgia,
    serif;

  font-size: 17px;
}

.law-faq__folio {
  margin-top: 28px;

  color: var(--law-text-soft);

  font-family: "Inter", Arial, sans-serif;

  font-size: 7px;
  font-weight: 700;

  line-height: 1.8;

  letter-spacing: 1.4px;
}

/* =========================================================
   LISTA
========================================================= */

.law-faq__list {
  border-top: 1px solid var(--law-border);
}

.law-faq__item {
  border-bottom: 1px solid var(--law-border);
}

.law-faq__question {
  width: 100%;

  display: grid;

  grid-template-columns:
    70px
    1fr
    40px;

  align-items: center;

  gap: 20px;

  min-height: 105px;

  padding: 20px 10px;

  border: 0;

  background: transparent;

  text-align: left;

  cursor: pointer;

  transition:
    background var(--law-transition),
    padding var(--law-transition);
}

.law-faq__question:hover {
  padding-left: 20px;

  background: var(--law-paper);
}

.law-faq__number {
  color: var(--law-gold);

  font-family:
    "Cormorant Garamond",
    Georgia,
    serif;

  font-size: 24px;
}

.law-faq__question-text {
  color: var(--law-primary);

  font-family:
    "Cormorant Garamond",
    Georgia,
    serif;

  font-size: clamp(21px, 2vw, 27px);
  font-weight: 500;

  line-height: 1.25;
}

.law-faq__symbol {
  color: var(--law-gold);

  font-family:
    "Cormorant Garamond",
    Georgia,
    serif;

  font-size: 28px;

  text-align: center;
}

/* =========================================================
   RESPUESTA
========================================================= */

.law-faq__answer {
  padding:
    0
    65px
    30px
    100px;
}

.law-faq__answer p {
  max-width: 750px;

  margin: 0;

  color: var(--law-text-soft);

  font-size: 13px;
  line-height: 1.9;
}

/* =========================================================
   ESTADO ABIERTO
========================================================= */

.law-faq__item--open {
  background: rgba(255, 253, 248, 0.65);
}

.law-faq__item--open .law-faq__question-text {
  color: var(--law-primary);
}

/* =========================================================
   TRANSICIÓN
========================================================= */

.law-faq-answer-enter-active,
.law-faq-answer-leave-active {
  transition:
    opacity 0.25s ease,
    transform 0.25s ease;
}

.law-faq-answer-enter-from,
.law-faq-answer-leave-to {
  opacity: 0;

  transform: translateY(-6px);
}

/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 950px) {
  .law-faq__header {
    grid-template-columns: 1fr;

    gap: 25px;
  }

  .law-faq__layout {
    grid-template-columns: 1fr;

    gap: 40px;
  }

  .law-faq__index {
    position: static;

    display: none;
  }
}

@media (max-width: 600px) {
  .law-faq__question {
    grid-template-columns:
      40px
      1fr
      30px;

    gap: 10px;

    min-height: 90px;

    padding:
      20px
      0;
  }

  .law-faq__question:hover {
    padding-left: 0;
  }

  .law-faq__number {
    font-size: 19px;
  }

  .law-faq__question-text {
    font-size: 21px;
  }

  .law-faq__answer {
    padding:
      0
      30px
      25px
      50px;
  }
}
</style>