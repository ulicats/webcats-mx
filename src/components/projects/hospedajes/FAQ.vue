<template>
  <section id="faq" class="faq-section">
    <div class="faq-container">

      <header class="faq-heading">
        <p>
          Menos preguntas repetidas, más reservaciones
        </p>

        <h2>
          Preguntas
          <span>frecuentes</span>
        </h2>

        <p class="faq-description">
          Aquí podemos poner todas esas preguntas que te hacen una y otra vez
          por WhatsApp, pa' que tus clientes encuentren la respuesta sin
          preguntarte lo mismo veinte veces.
        </p>
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

            <strong>
              {{ activeIndex === index ? "−" : "+" }}
            </strong>
          </button>

          <div
            v-if="activeIndex === index"
            class="faq-answer"
          >
            {{ item.answer }}
          </div>
        </article>
      </div>

      <div class="faq-demo-note">

        <p>
          Obviamente estas son preguntas de ejemplo.
          Aquí pondríamos las que realmente hacen tus clientes.
        </p>
      </div>

    </div>
  </section>
</template>

<script setup>
import { ref } from "vue";

const activeIndex = ref(0);

const questions = [
  {
    question:
      "¿Cómo puedo reservar?",

    answer:
      "Puedes consultar disponibilidad desde el formulario de la página. Ahí eliges tus fechas, número de huéspedes y el hospedaje que te interesa para enviar la solicitud directamente por WhatsApp."
  },

  {
    question:
      "¿Dónde está ubicado el hospedaje?",

    answer:
      "Aquí podemos explicar dónde se encuentra tu negocio, qué lugares importantes hay cerca y hasta mostrar la ubicación directamente con Google Maps."
  },

  {
    question:
      "¿Tienen internet?",

    answer:
      "Aquí pondríamos el tipo de conexión disponible, cobertura y cualquier información que tus huéspedes necesiten saber antes de llegar."
  },

  {
    question:
      "¿Cuántas personas pueden hospedarse?",

    answer:
      "Podemos indicar la capacidad de cada habitación, casa o cabaña, así como costos adicionales por huéspedes extra."
  },

  {
    question:
      "¿Aceptan mascotas?",

    answer:
      "Si tu hospedaje acepta mascotas, aquí podemos explicar las condiciones. Y si no... mejor avisar desde aquí antes de que lleguen con Firulais."
  },

  {
    question:
      "¿Hay tiendas o restaurantes cerca?",

    answer:
      "Podemos recomendar tiendas, restaurantes, cafeterías, atracciones y cualquier lugar cercano que pueda ser útil durante la estancia."
  },

  {
    question:
      "¿Cuál es el horario de entrada y salida?",

    answer:
      "Aquí mostraríamos claramente tus horarios de check-in y check-out, además de cualquier condición especial para llegadas anticipadas o salidas tardías."
  },

  {
    question:
      "¿Puedo cambiar estas preguntas por las de mi negocio?",

    answer:
      "Claro que sí. De eso se trata jaja, todo se va a moldear a tu negocio. Estas son solamente de demostración; podemos colocar las preguntas que tus clientes realmente te hacen todos los días."
  }
];

const toggle = (index) => {
  activeIndex.value =
    activeIndex.value === index
      ? null
      : index;
};
</script>

<style scoped>
.faq-section {
  scroll-margin-top: 90px;
  padding: 120px 0;
  background: var(--hospedaje-white);
}

.faq-container {
  width: min(1000px, calc(100% - 40px));
  margin: 0 auto;
}


/* =========================================
   ENCABEZADO
========================================= */

.faq-heading {
  margin-bottom: 50px;
  text-align: center;
}

.faq-heading > p:first-child {
  margin-bottom: 14px;

  color: var(--hospedaje-gold);

  font-size: 11px;
  font-weight: 700;

  letter-spacing: 0.25em;
  text-transform: uppercase;
}

.faq-heading h2 {
  color: var(--hospedaje-navy-950);

  font-family: var(--hospedaje-heading);
  font-size: clamp(50px, 6vw, 76px);
  font-weight: 500;

  line-height: 0.95;
}

.faq-heading h2 span {
  color: var(--hospedaje-gold);
  font-style: italic;
}

.faq-description {
  max-width: 680px;

  margin:
    24px auto 0 !important;

  color: var(--hospedaje-muted) !important;

  font-size: 14px !important;
  font-weight: 400 !important;

  line-height: 1.8;
  letter-spacing: normal !important;
  text-transform: none !important;
}


/* =========================================
   PREGUNTAS
========================================= */

.faq-item {
  border-bottom:
    1px solid
    rgba(19, 40, 58, 0.12);
}

.faq-item button {
  width: 100%;

  padding: 25px 0;

  border: 0;

  display: flex;
  align-items: center;
  justify-content: space-between;

  gap: 25px;

  color: var(--hospedaje-navy-950);
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

  border:
    1px solid
    rgba(19, 40, 58, 0.15);

  border-radius: 50%;

  display: grid;
  place-items: center;

  color: var(--hospedaje-gold);

  font-size: 20px;
  font-weight: 400;
}

.faq-answer {
  max-width: 850px;

  padding:
    0 55px 25px 0;

  color: var(--hospedaje-muted);

  font-size: 14px;
  line-height: 1.8;
}


/* =========================================
   AVISO DEMO
========================================= */

.faq-demo-note {
  max-width: 650px;

  display: flex;
  align-items: center;
  justify-content: center;

  gap: 10px;

  margin: 45px auto 0;

  padding: 15px 20px;

  color: var(--hospedaje-muted);

  background:
    rgba(181, 154, 59, 0.08);

  border:
    1px solid
    rgba(181, 154, 59, 0.18);

  border-radius: 12px;

  text-align: center;
}

.faq-demo-note span {
  flex-shrink: 0;

  color: var(--hospedaje-gold);
}

.faq-demo-note p {
  margin: 0;

  font-size: 12px;
  line-height: 1.6;
}


/* =========================================
   RESPONSIVE
========================================= */

@media (max-width: 600px) {

  .faq-section {
    padding: 85px 0;
  }

  .faq-container {
    width:
      min(100% - 28px, 1000px);
  }

  .faq-heading {
    margin-bottom: 35px;
  }

  .faq-item button {
    font-size: 14px;
  }

  .faq-answer {
    padding-right: 0;
  }

  .faq-demo-note {
    align-items: flex-start;

    text-align: left;
  }

}
</style>