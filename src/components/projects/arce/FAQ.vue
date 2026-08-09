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
      "Puedes llenar nuestro formulario de reservas con la información. Te confirmaremos fechas, tarifas y condiciones de reservación.",
  },
  {
    question: "¿Dónde están ubicadas las cabañas?",
    answer:
      "Arce Cabañas se encuentra en Mazamitla, Jalisco, Rodeado de naturaleza y a corta distancia de los principales atractivos de la zona. Estamos a 4 km del centro, 20 minutos en coche aproximadamente.",
  },
  {
    question: "¿Las cabañas cuentan con internet?",
    answer:
      "Sí. Las instalaciones cuentan con conexión a internet satelital Starlink.",
  },
  {
    question: "¿Aceptan más de 2 personas?",
    answer:
      "Sí, con costo extra pueden ingresar dos personas más, ya que cada cábala cuenta con sofá cama.",
  },
  {
    question: "¿Hay tiendas y/o  restaurantes cerca?",
    answer:
      "Hay una tienda de abarrotes dentro del fraccionamiento y una que tiene servicio a domicilio para tu mayor comodidad. Restaurantes, hay uno dentro del fraccionamiento que tiene servicio de desayunos y comidas, a 3 minutos de la cabaña hay un café. Y a 12 minutos de tu cabaña hay un restaurante con servicio todo el día.",
  },
  {
    question: "¿Cuál es el horario de entrada y salida?",
    answer:
      " La entrada es a partir de las 3:00 pm y la salida es máximo a las 12:00 pm.",
  },
];

const toggle = (index) => {
  activeIndex.value =
    activeIndex.value === index ? null : index;
};
</script>

<style scoped>
.faq-section {
  scroll-margin-top: 90px;
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