<template>
  <section id="faq" class="gym-faq">
    <div class="gym-faq__container">

      <!-- Header -->
      <div class="gym-faq__header">
        <div>
          <div class="gym-faq__eyebrow">
            <span></span>
            PREGUNTAS FRECUENTES
          </div>

          <h2 class="gym-faq__title">
            ANTES DE<br />
            <span>EMPEZAR.</span>
          </h2>
        </div>

        <div class="gym-faq__intro">
          <p>
            Aquí resolvemos las dudas más comunes antes de tu primera
            visita. Si necesitas algo más específico, puedes contactarnos
            directamente.
          </p>
        </div>
      </div>

      <!-- FAQ -->
      <div class="gym-faq__list">
        <article
          v-for="(item, index) in faqs"
          :key="item.id"
          class="gym-faq__item"
          :class="{ 'gym-faq__item--open': openIndex === index }"
        >
          <button
            type="button"
            class="gym-faq__question"
            @click="toggleFaq(index)"
          >
            <div class="gym-faq__question-left">
              <span class="gym-faq__number">
                {{ String(index + 1).padStart(2, "0") }}
              </span>

              <h3>{{ item.question }}</h3>
            </div>

            <span class="gym-faq__icon">
              {{ openIndex === index ? "−" : "+" }}
            </span>
          </button>

          <transition name="faq">
            <div
              v-if="openIndex === index"
              class="gym-faq__answer"
            >
              <div class="gym-faq__answer-inner">
                <p>{{ item.answer }}</p>
              </div>
            </div>
          </transition>
        </article>
      </div>

      <!-- Bottom -->
      <div class="gym-faq__bottom">
        <p>
          ¿Todavía tienes dudas?
          <strong>Estamos para ayudarte.</strong>
        </p>

        <a href="#contacto" class="gym-faq__cta">
          HABLAR CON NOSOTROS
          <span>→</span>
        </a>
      </div>

    </div>
  </section>
</template>

<script setup>
import { ref } from "vue";

const openIndex = ref(0);

const faqs = [
  {
    id: 1,
    question: "¿Necesito experiencia previa para entrenar?",
    answer:
      "No. En Iron Pulse puedes comenzar desde cero. Nuestro equipo puede ayudarte a conocer las áreas, elegir ejercicios adecuados y construir una rutina de acuerdo con tu nivel y objetivos.",
  },
  {
    id: 2,
    question: "¿Puedo probar el gimnasio antes de inscribirme?",
    answer:
      "Sí. Puedes solicitar una visita al club para conocer las instalaciones, el ambiente de entrenamiento y resolver dudas antes de elegir una membresía.",
  },
  {
    id: 3,
    question: "¿Las clases están incluidas en todos los planes?",
    answer:
      "Las clases grupales están incluidas en los planes Performance y Elite. El plan Base incluye acceso general a las zonas de entrenamiento, pero no a las clases programadas.",
  },
  {
    id: 4,
    question: "¿Necesito reservar las clases?",
    answer:
      "Sí. Algunas clases tienen cupo limitado para mantener una buena experiencia de entrenamiento, por lo que recomendamos reservar tu lugar con anticipación.",
  },
  {
    id: 5,
    question: "¿Cuentan con entrenadores personales?",
    answer:
      "Sí. Tenemos coaches especializados en fuerza, entrenamiento funcional y rendimiento. El plan Elite incluye sesiones personalizadas, y también puedes contratar entrenamiento individual por separado.",
  },
  {
    id: 6,
    question: "¿Hay estacionamiento y vestidores?",
    answer:
      "Sí. El club cuenta con vestidores, lockers y áreas destinadas para que puedas prepararte antes y después de tu entrenamiento. La disponibilidad de estacionamiento puede variar según la sede.",
  },
  {
    id: 7,
    question: "¿Cuál es el horario del gimnasio?",
    answer:
      "Iron Pulse opera de lunes a domingo de 05:00 a 23:00. Los horarios específicos de clases pueden variar según el día.",
  },
];

const toggleFaq = (index) => {
  openIndex.value = openIndex.value === index ? null : index;
};
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,700;1,800;1,900&family=Inter:wght@400;500;600&display=swap");

.gym-faq {
  padding: 135px 0;
  background: #0a0a0a;
  color: #ffffff;
  font-family: "Inter", sans-serif;
}

.gym-faq__container {
  width: min(1400px, calc(100% - 48px));
  margin: 0 auto;
}

/* =========================
   HEADER
========================= */

.gym-faq__header {
  display: grid;
  grid-template-columns: 1.3fr 0.7fr;
  gap: 80px;

  align-items: end;

  margin-bottom: 70px;
}

.gym-faq__eyebrow {
  display: flex;
  align-items: center;
  gap: 14px;

  margin-bottom: 22px;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 13px;
  font-weight: 700;
  letter-spacing: 3px;

  color: #d9ff43;
}

.gym-faq__eyebrow span {
  width: 42px;
  height: 2px;

  background: #d9ff43;
}

.gym-faq__title {
  margin: 0;

  font-family: "Barlow Condensed", sans-serif;
  font-size: clamp(70px, 8vw, 120px);
  font-weight: 900;
  font-style: italic;

  line-height: 0.82;
  letter-spacing: -3px;

  text-transform: uppercase;
}

.gym-faq__title > span {
  color: transparent;

  -webkit-text-stroke: 2px rgba(255, 255, 255, 0.88);
}

.gym-faq__intro {
  max-width: 430px;
}

.gym-faq__intro p {
  margin: 0;

  font-size: 16px;
  line-height: 1.75;

  color: rgba(255, 255, 255, 0.55);
}

/* =========================
   LIST
========================= */

.gym-faq__list {
  border-top: 2px solid #ffffff;
}

.gym-faq__item {
  border-bottom: 1px solid rgba(255, 255, 255, 0.13);
}

/* =========================
   QUESTION
========================= */

.gym-faq__question {
  width: 100%;
  min-height: 110px;

  padding: 24px 10px;

  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 40px;

  border: 0;

  background: transparent;
  color: #ffffff;

  cursor: pointer;

  text-align: left;

  transition:
    background 0.3s ease,
    padding 0.3s ease;
}

.gym-faq__question:hover {
  background: rgba(255, 255, 255, 0.03);
  padding-left: 20px;
}

.gym-faq__question-left {
  display: grid;
  grid-template-columns: 80px 1fr;
  gap: 30px;

  align-items: center;
}

.gym-faq__number {
  font-family: "Barlow Condensed", sans-serif;
  font-size: 12px;
  font-weight: 700;
  letter-spacing: 2px;

  color: rgba(255, 255, 255, 0.35);
}

.gym-faq__question h3 {
  margin: 0;

  font-family: "Barlow Condensed", sans-serif;
  font-size: clamp(28px, 3vw, 42px);
  font-weight: 700;
  line-height: 1;

  text-transform: uppercase;
}

/* =========================
   ICON
========================= */

.gym-faq__icon {
  width: 52px;
  height: 52px;

  flex-shrink: 0;

  display: flex;
  align-items: center;
  justify-content: center;

  border: 1px solid rgba(255, 255, 255, 0.25);
  border-radius: 50%;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 28px;
  font-weight: 400;

  transition:
    background 0.3s ease,
    color 0.3s ease,
    border-color 0.3s ease,
    transform 0.3s ease;
}

.gym-faq__item--open .gym-faq__icon {
  background: #d9ff43;
  color: #090909;
  border-color: #d9ff43;

  transform: rotate(180deg);
}

/* =========================
   ANSWER
========================= */

.gym-faq__answer {
  overflow: hidden;
}

.gym-faq__answer-inner {
  padding:
    0
    100px
    35px
    120px;
}

.gym-faq__answer p {
  margin: 0;

  max-width: 760px;

  font-size: 15px;
  line-height: 1.8;

  color: rgba(255, 255, 255, 0.55);
}

/* =========================
   TRANSITION
========================= */

.faq-enter-active,
.faq-leave-active {
  transition:
    opacity 0.25s ease,
    transform 0.25s ease;
}

.faq-enter-from,
.faq-leave-to {
  opacity: 0;
  transform: translateY(-8px);
}

/* =========================
   BOTTOM
========================= */

.gym-faq__bottom {
  margin-top: 65px;

  padding-top: 30px;

  border-top: 1px solid rgba(255, 255, 255, 0.13);

  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 40px;
}

.gym-faq__bottom p {
  margin: 0;

  font-size: 14px;
  line-height: 1.6;

  color: rgba(255, 255, 255, 0.5);
}

.gym-faq__bottom strong {
  color: #ffffff;
}

.gym-faq__cta {
  display: inline-flex;
  align-items: center;
  gap: 18px;

  padding: 18px 24px;

  background: #d9ff43;
  color: #090909;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 15px;
  font-weight: 800;
  letter-spacing: 1.3px;

  text-decoration: none;

  transition:
    transform 0.3s ease,
    background 0.3s ease;
}

.gym-faq__cta span {
  font-size: 20px;

  transition: transform 0.3s ease;
}

.gym-faq__cta:hover {
  background: #ffffff;
  transform: translateY(-3px);
}

.gym-faq__cta:hover span {
  transform: translateX(5px);
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 1050px) {
  .gym-faq__header {
    grid-template-columns: 1fr;
    gap: 35px;
  }
}

@media (max-width: 700px) {
  .gym-faq {
    padding: 90px 0;
  }

  .gym-faq__container {
    width: calc(100% - 32px);
  }

  .gym-faq__title {
    font-size: clamp(62px, 20vw, 90px);
    letter-spacing: -2px;
  }

  .gym-faq__question {
    min-height: 95px;
    gap: 20px;
  }

  .gym-faq__question-left {
    grid-template-columns: 35px 1fr;
    gap: 15px;
  }

  .gym-faq__icon {
    width: 42px;
    height: 42px;

    font-size: 24px;
  }

  .gym-faq__answer-inner {
    padding:
      0
      20px
      30px
      50px;
  }

  .gym-faq__bottom {
    flex-direction: column;
    align-items: flex-start;
  }

  .gym-faq__cta {
    width: 100%;
    justify-content: space-between;
  }
}

@media (max-width: 430px) {
  .gym-faq__question h3 {
    font-size: 25px;
  }

  .gym-faq__question-left {
    grid-template-columns: 28px 1fr;
    gap: 10px;
  }

  .gym-faq__number {
    font-size: 10px;
  }
}
</style>