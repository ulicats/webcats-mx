<script setup>
import { ref } from "vue";

const activeQuestion = ref(null);

const questions = [
  {
    question: "¿Necesito realizarme estudios antes de la consulta?",
    answer:
      "No necesariamente. Durante la primera consulta se evalúa tu caso y, si es necesario, se pueden recomendar estudios complementarios.",
  },
  {
    question: "¿Las consultas pueden ser en línea?",
    answer:
      "Sí. Puedes realizar todo el proceso de manera online, incluyendo evaluación inicial, seguimiento y ajustes del plan.",
  },
  {
    question: "¿Cada cuánto tiempo son las consultas?",
    answer:
      "La frecuencia depende de cada persona, aunque normalmente los seguimientos pueden realizarse cada 2 a 4 semanas.",
  },
  {
    question: "¿Tengo que dejar de comer lo que me gusta?",
    answer:
      "No. La estrategia busca integrar tus alimentos y preferencias dentro de un plan equilibrado y sostenible.",
  },
  {
    question: "¿El plan incluye seguimiento?",
    answer:
      "Sí. El seguimiento permite evaluar avances, resolver dudas y realizar ajustes conforme evolucionan tus necesidades.",
  },
  {
    question: "¿Cómo puedo agendar una consulta?",
    answer:
      "Puedes llenar el formulario de esta página y enviar tu solicitud directamente por WhatsApp.",
  },
];

const toggleQuestion = (index) => {
  activeQuestion.value =
    activeQuestion.value === index ? null : index;
};
</script>

<template>
  <section id="preguntas" class="nutri-faq">
    <div class="nutri-faq__container">

      <div class="nutri-faq__intro">
        <span>
          Preguntas frecuentes
        </span>

        <h2>
          Antes de comenzar,
          <strong>resolvamos tus dudas.</strong>
        </h2>

        <p>
          Estas son algunas de las preguntas más comunes antes
          de iniciar un proceso de nutrición.
        </p>

        <a href="#agenda">
          Agendar consulta
          <span>→</span>
        </a>
      </div>

      <div class="nutri-faq__questions">

        <article
          v-for="(item, index) in questions"
          :key="item.question"
          class="nutri-faq__item"
          :class="{ 'is-open': activeQuestion === index }"
        >
          <button
            class="nutri-faq__question"
            @click="toggleQuestion(index)"
          >
            <span>
              {{ item.question }}
            </span>

            <span class="nutri-faq__plus">
              +
            </span>
          </button>

          <div class="nutri-faq__answer">
            <div>
              <p>
                {{ item.answer }}
              </p>
            </div>
          </div>
        </article>

      </div>

    </div>
  </section>
</template>

<style scoped>
.nutri-faq {
  padding: 120px 0;
  background: var(--nutri-white);
}

.nutri-faq__container {
  width: min(1180px, calc(100% - 40px));
  margin: 0 auto;

  display: grid;
  grid-template-columns: 0.85fr 1.15fr;
  gap: 100px;
}

/* =========================
   INTRO
========================= */

.nutri-faq__intro {
  position: sticky;
  top: 130px;

  align-self: start;
}

.nutri-faq__intro > span {
  display: block;

  margin-bottom: 15px;

  color: var(--nutri-primary);

  font-size: 12px;
  font-weight: 700;
  letter-spacing: 1.6px;
  text-transform: uppercase;
}

.nutri-faq h2 {
  margin: 0;

  color: var(--nutri-text);

  font-size: clamp(38px, 4.5vw, 55px);
  line-height: 1.06;
  letter-spacing: -2px;
}

.nutri-faq h2 strong {
  display: block;

  color: var(--nutri-primary);
}

.nutri-faq__intro p {
  margin: 25px 0;

  color: var(--nutri-text-soft);

  font-size: 15px;
  line-height: 1.8;
}

.nutri-faq__intro a {
  display: inline-flex;
  align-items: center;
  gap: 10px;

  color: var(--nutri-primary);

  font-size: 13px;
  font-weight: 700;
  text-decoration: none;
}

.nutri-faq__intro a span {
  transition: transform 0.25s ease;
}

.nutri-faq__intro a:hover span {
  transform: translateX(5px);
}

/* =========================
   FAQ
========================= */

.nutri-faq__item {
  border-bottom: 1px solid var(--nutri-border);
}

.nutri-faq__question {
  width: 100%;

  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 30px;

  padding: 25px 0;

  border: 0;
  background: transparent;

  color: var(--nutri-text);

  font-family: inherit;
  font-size: 17px;
  font-weight: 600;
  text-align: left;

  cursor: pointer;
}

.nutri-faq__plus {
  width: 36px;
  height: 36px;
  flex-shrink: 0;

  display: grid;
  place-items: center;

  border: 1px solid var(--nutri-border);
  border-radius: 50%;

  color: var(--nutri-primary);

  font-size: 20px;
  font-weight: 400;

  transition:
    transform 0.3s ease,
    background 0.3s ease,
    color 0.3s ease;
}

.nutri-faq__item.is-open .nutri-faq__plus {
  transform: rotate(45deg);

  background: var(--nutri-primary);
  color: var(--nutri-white);
}

.nutri-faq__answer {
  display: grid;
  grid-template-rows: 0fr;

  transition: grid-template-rows 0.35s ease;
}

.nutri-faq__answer > div {
  overflow: hidden;
}

.nutri-faq__item.is-open .nutri-faq__answer {
  grid-template-rows: 1fr;
}

.nutri-faq__answer p {
  max-width: 650px;

  margin: 0;
  padding: 0 60px 25px 0;

  color: var(--nutri-text-soft);

  font-size: 14px;
  line-height: 1.8;
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 900px) {
  .nutri-faq {
    padding: 90px 0;
  }

  .nutri-faq__container {
    grid-template-columns: 1fr;
    gap: 50px;
  }

  .nutri-faq__intro {
    position: static;
    max-width: 700px;
  }
}

@media (max-width: 520px) {
  .nutri-faq {
    padding: 70px 0;
  }

  .nutri-faq__container {
    width: calc(100% - 28px);
  }

  .nutri-faq__question {
    padding: 22px 0;

    font-size: 15px;
  }

  .nutri-faq__answer p {
    padding-right: 0;
  }
}
</style>