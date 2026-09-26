<template>
  <section
    id="preguntas"
    class="tepic-faq"
  >
    <div class="tepic-faq__container">

      <!-- LADO IZQUIERDO -->
      <div class="tepic-faq__intro">

        <span class="tepic-faq__eyebrow">
          Preguntas frecuentes
        </span>

        <h2>
          Antes de comenzar
          <span>tu proyecto web.</span>
        </h2>

        <p>
          Estas son algunas de las preguntas más comunes al momento
          de desarrollar una página web para un negocio, empresa
          o profesionista.
        </p>

        <div class="tepic-faq__help">
          <div class="tepic-faq__help-icon">
            ?
          </div>

          <div>
            <span>
              ¿Tienes otra pregunta?
            </span>

            <strong>
              Podemos platicar sobre tu proyecto.
            </strong>
          </div>

          <a
            :href="whatsappUrl"
            target="_blank"
            rel="noopener noreferrer"
          >
            →
          </a>
        </div>

      </div>

      <!-- ACORDEÓN -->
      <div class="tepic-faq__list">

        <article
          v-for="(faq, index) in faqs"
          :key="faq.question"
          :class="[
            'tepic-faq__item',
            { 'is-open': openFaq === index }
          ]"
        >
          <button
            type="button"
            class="tepic-faq__question"
            :aria-expanded="openFaq === index"
            @click="toggleFaq(index)"
          >
            <span class="tepic-faq__number">
              {{ String(index + 1).padStart(2, '0') }}
            </span>

            <span class="tepic-faq__question-text">
              {{ faq.question }}
            </span>

            <span class="tepic-faq__toggle">
              {{ openFaq === index ? '−' : '+' }}
            </span>
          </button>

          <div
            v-show="openFaq === index"
            class="tepic-faq__answer"
          >
            <div class="tepic-faq__answer-inner">
              <p>
                {{ faq.answer }}
              </p>
            </div>
          </div>
        </article>

      </div>

    </div>
  </section>
</template>

<script setup>
import { ref } from 'vue'

const openFaq = ref(0)

const faqs = [
  {
    question: '¿Cuánto cuesta una página web?',
    answer:
      'El precio depende del tipo de proyecto, la cantidad de secciones y las funciones que necesites. Una página informativa, una tienda en línea y un sistema web tienen alcances diferentes. Primero conocemos tu proyecto y después preparamos una propuesta de acuerdo con tus necesidades.'
  },
  {
    question: '¿Cuánto tiempo tarda el desarrollo?',
    answer:
      'El tiempo depende del alcance y de la información disponible para comenzar. Antes de iniciar definimos las secciones, funciones y requerimientos del proyecto para establecer un proceso de desarrollo claro.'
  },
  {
    question: '¿La página funcionará en celulares?',
    answer:
      'Sí. Desarrollamos sitios responsive para que el contenido pueda adaptarse correctamente a computadoras, tablets y teléfonos móviles.'
  },
  {
    question: '¿Pueden ayudarme con dominio y hosting?',
    answer:
      'Sí. Podemos orientarte con el dominio, hosting y la configuración necesaria para publicar tu proyecto en internet.'
  },
  {
    question: '¿La página estará preparada para aparecer en Google?',
    answer:
      'Desarrollamos una estructura técnica y de contenido preparada para buscadores. El posicionamiento orgánico depende también de factores como competencia, contenido, autoridad, intención de búsqueda y trabajo SEO posterior.'
  },
  {
    question: '¿Pueden desarrollar una tienda en línea?',
    answer:
      'Sí. Podemos desarrollar catálogos digitales y soluciones de comercio electrónico dependiendo de los productos, proceso de venta y funciones que necesite tu negocio.'
  },
  {
    question: '¿También desarrollan sistemas web personalizados?',
    answer:
      'Sí. Cuando un negocio necesita funciones específicas podemos desarrollar soluciones web personalizadas, paneles administrativos, gestión de información y otras herramientas de acuerdo con los requerimientos del proyecto.'
  },
  {
    question: '¿Trabajan únicamente con negocios de Tepic?',
    answer:
      'No. Webcats desarrolla proyectos para clientes de diferentes ubicaciones. Esta página está enfocada especialmente en nuestros servicios de diseño y desarrollo web para negocios y profesionistas de Tepic, Nayarit.'
  }
]

const toggleFaq = (index) => {
  openFaq.value = openFaq.value === index ? null : index
}

const whatsappUrl =
  'https://wa.me/521XXXXXXXXXX?text=Hola%2C%20tengo%20una%20pregunta%20sobre%20el%20desarrollo%20de%20una%20p%C3%A1gina%20web.'
</script>

<style scoped>
.tepic-faq {
  padding: 115px 0;

  background: #f7faff;
}

.tepic-faq__container {
  width: min(1180px, calc(100% - 40px));
  margin: 0 auto;

  display: grid;
  grid-template-columns: 0.72fr 1.28fr;
  align-items: start;
  gap: 90px;
}

/* INTRO */

.tepic-faq__intro {
  position: sticky;
  top: 110px;
}

.tepic-faq__eyebrow {
  display: inline-flex;

  margin-bottom: 15px;
  padding: 7px 11px;

  color: #1677ff;
  background: #eaf4ff;

  border-radius: 999px;

  font-size: 10px;
  font-weight: 850;
  letter-spacing: 0.08em;
  text-transform: uppercase;
}

.tepic-faq__intro h2 {
  max-width: 470px;

  margin: 0;

  color: #101828;

  font-size: clamp(35px, 4vw, 49px);
  line-height: 1.04;
  letter-spacing: -0.05em;
}

.tepic-faq__intro h2 span {
  display: block;

  color: #1677ff;
}

.tepic-faq__intro > p {
  max-width: 440px;

  margin: 21px 0 0;

  color: #758397;

  font-size: 12px;
  line-height: 1.75;
}

/* HELP */

.tepic-faq__help {
  margin-top: 35px;
  padding: 17px;

  display: grid;
  grid-template-columns: auto 1fr auto;
  align-items: center;
  gap: 12px;

  background: #ffffff;

  border: 1px solid #e2eaf3;
  border-radius: 13px;

  box-shadow:
    0 12px 30px rgba(15, 23, 42, 0.04);
}

.tepic-faq__help-icon {
  width: 37px;
  height: 37px;

  display: grid;
  place-items: center;

  color: #1677ff;
  background: #edf5ff;

  border-radius: 9px;

  font-size: 13px;
  font-weight: 900;
}

.tepic-faq__help span,
.tepic-faq__help strong {
  display: block;
}

.tepic-faq__help span {
  margin-bottom: 3px;

  color: #8b97a7;

  font-size: 8px;
}

.tepic-faq__help strong {
  color: #1b2738;

  font-size: 10px;
}

.tepic-faq__help a {
  width: 31px;
  height: 31px;

  display: grid;
  place-items: center;

  color: #ffffff;
  background: #1677ff;

  border-radius: 8px;

  text-decoration: none;
}

/* FAQ */

.tepic-faq__list {
  overflow: hidden;

  background: #ffffff;

  border: 1px solid #e4eaf2;
  border-radius: 18px;
}

.tepic-faq__item + .tepic-faq__item {
  border-top: 1px solid #e9eef4;
}

.tepic-faq__question {
  width: 100%;

  display: grid;
  grid-template-columns: auto 1fr auto;
  align-items: center;
  gap: 17px;

  padding: 22px 24px;

  color: inherit;
  background: transparent;

  border: 0;

  text-align: left;

  cursor: pointer;
}

.tepic-faq__number {
  color: #9ba7b6;

  font-size: 8px;
  font-weight: 800;
}

.tepic-faq__question-text {
  color: #263245;

  font-size: 12px;
  font-weight: 800;

  transition: color 0.2s ease;
}

.tepic-faq__item.is-open .tepic-faq__question-text {
  color: #1677ff;
}

.tepic-faq__toggle {
  width: 29px;
  height: 29px;

  display: grid;
  place-items: center;

  color: #1677ff;
  background: #edf5ff;

  border-radius: 8px;

  font-size: 16px;
  font-weight: 400;

  transition:
    color 0.2s ease,
    background 0.2s ease;
}

.tepic-faq__item.is-open .tepic-faq__toggle {
  color: #ffffff;
  background: #1677ff;
}

.tepic-faq__answer {
  padding: 0 24px 22px 59px;
}

.tepic-faq__answer-inner {
  padding: 0 20px 0 17px;

  border-left: 2px solid #d9eaff;
}

.tepic-faq__answer p {
  max-width: 650px;

  margin: 0;

  color: #788698;

  font-size: 10px;
  line-height: 1.75;
}

/* RESPONSIVE */

@media (max-width: 850px) {
  .tepic-faq__container {
    grid-template-columns: 1fr;
    gap: 50px;
  }

  .tepic-faq__intro {
    position: static;

    max-width: 650px;
  }
}

@media (max-width: 600px) {
  .tepic-faq {
    padding: 80px 0;
  }

  .tepic-faq__question {
    gap: 10px;

    padding: 19px 16px;
  }

  .tepic-faq__question-text {
    font-size: 11px;
  }

  .tepic-faq__answer {
    padding:
      0
      16px
      20px
      42px;
  }
}
</style>