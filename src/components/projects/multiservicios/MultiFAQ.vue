<template>
  <section id="faq" class="multi-faq">

    <div class="faq-container">

      <!-- IZQUIERDA -->
      <div class="faq-intro">

        <span class="eyebrow">
          PREGUNTAS FRECUENTES
        </span>

        <h2>
          Resolvemos
          <span>tus dudas.</span>
        </h2>

        <p>
          Antes de solicitar un servicio puedes consultar algunas
          de las preguntas más comunes de nuestros clientes.
        </p>

        <div class="faq-help">

          <div class="help-icon">
            ?
          </div>

          <div>
            <strong>¿Tienes otra pregunta?</strong>

            <span>
              Escríbenos directamente por WhatsApp.
            </span>
          </div>

        </div>

        <a
          href="https://wa.me/523111234567"
          target="_blank"
          rel="noopener noreferrer"
          class="faq-whatsapp"
        >
          Preguntar por WhatsApp
          <span>→</span>
        </a>

      </div>

      <!-- FAQ -->
      <div class="faq-list">

        <article
          v-for="(faq, index) in faqs"
          :key="index"
          class="faq-item"
          :class="{ active: activeFaq === index }"
        >

          <button
            type="button"
            class="faq-question"
            @click="toggleFaq(index)"
          >
            <span class="question-number">
              {{ String(index + 1).padStart(2, '0') }}
            </span>

            <strong>
              {{ faq.question }}
            </strong>

            <span class="faq-plus">
              {{ activeFaq === index ? '−' : '+' }}
            </span>
          </button>

          <Transition name="faq">
            <div
              v-if="activeFaq === index"
              class="faq-answer"
            >
              <p>
                {{ faq.answer }}
              </p>
            </div>
          </Transition>

        </article>

      </div>

    </div>

  </section>
</template>

<script setup>
import { ref } from 'vue'

const activeFaq = ref(0)

const faqs = [
  {
    question: '¿Hacen cotizaciones sin costo?',
    answer:
      'Puedes contactarnos para explicarnos el servicio que necesitas. Dependiendo del trabajo podremos darte información inicial o coordinar una revisión para preparar una cotización.'
  },
  {
    question: '¿Cuánto tiempo tardan en realizar el trabajo?',
    answer:
      'El tiempo depende del tipo de servicio y su complejidad. Una reparación sencilla puede realizarse el mismo día, mientras que trabajos de remodelación pueden requerir varios días.'
  },
  {
    question: '¿En qué zonas dan servicio?',
    answer:
      'Atendemos principalmente Tepic, Xalisco y zonas cercanas. Para otras ubicaciones puedes consultarnos directamente por WhatsApp.'
  },
  {
    question: '¿Qué tipos de pago aceptan?',
    answer:
      'Las formas de pago disponibles se confirman al momento de realizar la cotización y antes de comenzar el servicio.'
  },
  {
    question: '¿Dan garantía en los trabajos?',
    answer:
      'Las condiciones de garantía dependen del tipo de servicio realizado y se especifican antes de comenzar cada trabajo.'
  },
  {
    question: '¿Pueden atender emergencias?',
    answer:
      'Sí. Puedes comunicarte por WhatsApp para consultar disponibilidad en reparaciones urgentes como fugas de agua o problemas eléctricos.'
  }
]

const toggleFaq = (index) => {
  activeFaq.value =
    activeFaq.value === index
      ? null
      : index
}
</script>

<style scoped>
.multi-faq {
  --navy: #062a50;
  --blue: #087ee5;
  --green: #19a957;
  --brick: #dc512e;

  position: relative;

  padding: 95px 0;

  overflow: hidden;

  background: white;

  font-family: 'Manrope', sans-serif;
}

/* LADRILLOS DECORATIVOS */

.multi-faq::before {
  content: '';

  position: absolute;

  left: -100px;
  bottom: -30px;

  width: 350px;
  height: 210px;

  opacity: 0.045;

  background-image:
    linear-gradient(335deg, var(--brick) 23px, transparent 23px),
    linear-gradient(155deg, var(--brick) 23px, transparent 23px),
    linear-gradient(335deg, var(--brick) 23px, transparent 23px),
    linear-gradient(155deg, var(--brick) 23px, transparent 23px);

  background-size: 58px 58px;
}

.faq-container {
  position: relative;
  z-index: 2;

  width: min(1180px, calc(100% - 40px));

  margin: auto;

  display: grid;
  grid-template-columns: 0.7fr 1.3fr;

  gap: 80px;
}

/* =========================
   INTRO
========================= */

.eyebrow {
  display: block;

  margin-bottom: 8px;

  color: var(--blue);

  font-size: 10px;
  font-weight: 800;
  letter-spacing: 2px;
}

.faq-intro h2 {
  margin: 0;

  color: var(--navy);

  font-family: 'Sora', sans-serif;

  font-size: clamp(33px, 4vw, 48px);

  line-height: 1.08;
  letter-spacing: -2px;
}

.faq-intro h2 span {
  display: block;

  color: var(--blue);
}

.faq-intro > p {
  max-width: 390px;

  margin: 20px 0 30px;

  color: #718193;

  font-size: 12px;
  line-height: 1.75;
}

/* =========================
   HELP
========================= */

.faq-help {
  display: flex;
  align-items: center;

  gap: 12px;

  margin-bottom: 18px;
}

.help-icon {
  width: 42px;
  height: 42px;

  flex-shrink: 0;

  display: flex;
  align-items: center;
  justify-content: center;

  color: white;
  background: var(--brick);

  border-radius: 10px;

  font-family: 'Sora', sans-serif;
  font-weight: 800;
}

.faq-help > div:last-child {
  display: flex;
  flex-direction: column;
}

.faq-help strong {
  color: var(--navy);

  font-size: 11px;
}

.faq-help span {
  margin-top: 3px;

  color: #8593a0;

  font-size: 9px;
}

.faq-whatsapp {
  display: inline-flex;
  align-items: center;

  gap: 8px;

  padding: 13px 17px;

  color: white;
  background: var(--green);

  border-radius: 8px;

  font-size: 10px;
  font-weight: 800;

  text-decoration: none;

  transition:
    transform 0.2s ease,
    box-shadow 0.2s ease;
}

.faq-whatsapp:hover {
  transform: translateY(-2px);

  box-shadow: 0 10px 25px rgba(25, 169, 87, 0.2);
}

/* =========================
   FAQ
========================= */

.faq-list {
  display: flex;
  flex-direction: column;

  gap: 10px;
}

.faq-item {
  overflow: hidden;

  background: #f8fafc;

  border: 1px solid #e1e8ee;
  border-radius: 10px;

  transition:
    border-color 0.2s ease,
    box-shadow 0.2s ease;
}

.faq-item.active {
  background: white;

  border-color: #b8dafa;

  box-shadow: 0 8px 25px rgba(6, 42, 80, 0.07);
}

/* =========================
   QUESTION
========================= */

.faq-question {
  width: 100%;

  padding: 19px 20px;

  display: grid;
  grid-template-columns: 40px 1fr 30px;
  align-items: center;

  gap: 10px;

  color: var(--navy);
  background: transparent;

  border: 0;

  text-align: left;

  cursor: pointer;
}

.question-number {
  color: #a3b2bf;

  font-family: 'Sora', sans-serif;

  font-size: 10px;
  font-weight: 700;
}

.faq-question strong {
  font-size: 11px;
  font-weight: 800;
}

.faq-plus {
  width: 27px;
  height: 27px;

  display: flex;
  align-items: center;
  justify-content: center;

  color: var(--blue);
  background: #e9f4fe;

  border-radius: 50%;

  font-size: 17px;
  font-weight: 500;
}

/* =========================
   ANSWER
========================= */

.faq-answer {
  padding:
    0
    60px
    20px
    70px;
}

.faq-answer p {
  margin: 0;

  color: #6f8090;

  font-size: 10px;
  line-height: 1.8;
}

/* =========================
   TRANSICIÓN
========================= */

.faq-enter-active,
.faq-leave-active {
  transition: all 0.2s ease;
}

.faq-enter-from,
.faq-leave-to {
  opacity: 0;
  transform: translateY(-5px);
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 850px) {
  .faq-container {
    grid-template-columns: 1fr;

    gap: 45px;
  }
}

@media (max-width: 550px) {
  .multi-faq {
    padding: 65px 0;
  }

  .faq-container {
    width: calc(100% - 30px);
  }

  .faq-question {
    grid-template-columns: 28px 1fr 30px;

    padding: 17px 15px;
  }

  .faq-answer {
    padding:
      0
      50px
      18px
      53px;
  }
}
</style>