<template>
  <section id="faq" class="faq-section">
    <div class="faq-container">

      <header class="faq-heading">

        <h2>
          Preguntas
          <span>frecuentes</span>
        </h2>
      </header>

      <div class="faq-list">
        <article
          v-for="(item, index) in questions"
          :key="item.question"
          class="faq-item"
          :class="{ 'faq-item--open': activeIndex === index }"
        >
          <button
            type="button"
            @click="toggle(index)"
          >
            <span>{{ item.question }}</span>
            <strong>{{ activeIndex === index ? "−" : "+" }}</strong>
          </button>

          <div
            v-if="activeIndex === index"
            class="faq-answer"
          >
            {{ item.answer }}
          </div>
        </article>
      </div>

    </div>
  </section>
</template>

<script setup>
import { ref } from "vue";

const activeIndex = ref(0);

const questions = [
  {
    question: "¿Cómo puedo reservar?",
    answer:
      "Puedes consultar disponibilidad directamente por WhatsApp. Te confirmaremos fechas, tarifas y condiciones de reservación.",
  },
  {
    question: "¿Dónde están ubicadas las cabañas?",
    answer:
      "Arce Cabañas se encuentra en Mazamitla, Jalisco, rodeado de naturaleza y a corta distancia de los principales atractivos de la zona.",
  },
  {
    question: "¿Las cabañas cuentan con internet?",
    answer:
      "Sí. Algunas instalaciones cuentan con conexión a internet. Confirmaremos los servicios específicos de cada cabaña antes de publicar la información definitiva.",
  },
  {
    question: "¿Cuál es la capacidad de las cabañas?",
    answer:
      "La capacidad depende de la cabaña seleccionada. Dentro del sitio encontrarás la información correspondiente a cada opción.",
  },
  {
    question: "¿Se permiten mascotas?",
    answer:
      "La política de mascotas será confirmada directamente al momento de consultar disponibilidad.",
  },
];

const toggle = (index) => {
  activeIndex.value =
    activeIndex.value === index ? null : index;
};
</script>

<style scoped>
.faq-section {
  padding: 120px 0;
  background: var(--arce-white);
}

.faq-container {
  width: min(1000px, calc(100% - 40px));
  margin: 0 auto;
}

.faq-heading {
  margin-bottom: 50px;
  text-align: center;
}

.faq-heading > p {
  margin-bottom: 14px;
  color: var(--arce-gold);
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.25em;
  text-transform: uppercase;
}

.faq-heading h2 {
  color: var(--arce-navy-950);
  font-family: var(--arce-heading);
  font-size: clamp(50px, 6vw, 76px);
  font-weight: 500;
  line-height: 0.95;
}

.faq-heading h2 span {
  color: var(--arce-gold);
  font-style: italic;
}

.faq-item {
  border-bottom: 1px solid rgba(19, 40, 58, 0.12);
}

.faq-item button {
  width: 100%;
  padding: 25px 0;
  border: 0;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 25px;
  color: var(--arce-navy-950);
  background: transparent;
  font-size: 16px;
  font-weight: 600;
  text-align: left;
  cursor: pointer;
}

.faq-item button strong {
  width: 35px;
  height: 35px;
  flex: 0 0 auto;
  border: 1px solid rgba(19, 40, 58, 0.15);
  border-radius: 50%;
  display: grid;
  place-items: center;
  color: var(--arce-gold);
  font-size: 20px;
  font-weight: 400;
}

.faq-answer {
  max-width: 850px;
  padding: 0 55px 25px 0;
  color: var(--arce-muted);
  font-size: 14px;
  line-height: 1.8;
}

@media (max-width: 600px) {
  .faq-section {
    padding: 85px 0;
  }

  .faq-container {
    width: min(100% - 28px, 1000px);
  }

  .faq-item button {
    font-size: 14px;
  }

  .faq-answer {
    padding-right: 0;
  }
}
</style>