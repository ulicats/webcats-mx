<template>
  <section
    id="despacho"
    class="law-section law-section--paper law-about"
  >
    <div class="law-container">

      <div class="law-about__grid">

        <div class="law-about__content">

          <span class="law-eyebrow">
            El despacho
          </span>

          <h2 class="law-title">
            Experiencia jurídica
            con criterio y estrategia.
          </h2>

          <p class="law-subtitle">
            Somos un despacho comprometido con la defensa de los
            derechos e intereses de nuestros clientes. Nuestra forma
            de trabajar combina experiencia, conocimiento jurídico
            y una estrategia legal diseñada para cada caso.
          </p>

          <div class="law-about__text-columns">

            <p>
              Analizamos cada asunto con profundidad para identificar
              riesgos, oportunidades y posibles escenarios antes de
              definir una ruta de acción.
            </p>

            <p>
              Creemos en una comunicación clara y directa. Nuestros
              clientes conocen el estado de su asunto y las decisiones
              relevantes durante todo el proceso.
            </p>

          </div>

        </div>

        <aside class="law-about__quote">

          <span class="law-about__quote-mark">
            “
          </span>

          <blockquote>
            Cada caso es único.<br />
            Cada cliente es nuestra prioridad.<br />
            Cada resultado, nuestro compromiso.
          </blockquote>

          <div class="law-about__signature">
            <span></span>
            Lex & Justitia
          </div>

        </aside>

      </div>

      <div class="law-divider">
        <span></span>
      </div>

      <div class="law-about__principles">

        <article
          v-for="principle in principles"
          :key="principle.title"
          class="law-about__principle"
        >
          <span class="law-about__principle-number">
            {{ principle.number }}
          </span>

          <div>
            <h3>{{ principle.title }}</h3>
            <p>{{ principle.text }}</p>
          </div>
        </article>

      </div>

    </div>
  </section>
</template>

<script setup>
const principles = [
  {
    number: "I",
    title: "Análisis",
    text: "Estudiamos cada asunto antes de proponer una estrategia jurídica.",
  },
  {
    number: "II",
    title: "Claridad",
    text: "Explicamos opciones, riesgos y posibles escenarios sin tecnicismos innecesarios.",
  },
  {
    number: "III",
    title: "Estrategia",
    text: "Cada decisión responde a un objetivo jurídico concreto.",
  },
];
</script>

<style scoped>
.law-about__grid {
  display: grid;

  grid-template-columns:
    minmax(0, 1.2fr)
    minmax(320px, 0.8fr);

  gap: 90px;

  align-items: start;
}

.law-about__content {
  max-width: 760px;
}

.law-about__text-columns {
  display: grid;

  grid-template-columns: repeat(2, 1fr);

  gap: 35px;

  margin-top: 38px;
}

.law-about__text-columns p {
  margin-bottom: 0;

  color: var(--law-text-soft);

  font-size: 14px;
  line-height: 1.9;
}

/* =========================================================
   CITA
========================================================= */

.law-about__quote {
  position: relative;

  padding:
    70px
    40px
    40px;

  border-top: 1px solid var(--law-border);
  border-bottom: 1px solid var(--law-border);
}

.law-about__quote-mark {
  position: absolute;

  top: 0;
  left: 0;

  color: var(--law-gold-soft);

  font-family:
    "Cormorant Garamond",
    Georgia,
    serif;

  font-size: 110px;

  line-height: 1;
}

.law-about__quote blockquote {
  margin: 0;

  color: var(--law-primary);

  font-family:
    "Cormorant Garamond",
    Georgia,
    serif;

  font-size: 28px;
  font-style: italic;

  line-height: 1.4;
}

.law-about__signature {
  display: flex;
  align-items: center;

  gap: 14px;

  margin-top: 35px;

  color: var(--law-gold);

  font-family: "Inter", Arial, sans-serif;

  font-size: 9px;
  font-weight: 700;

  letter-spacing: 1.5px;
  text-transform: uppercase;
}

.law-about__signature span {
  width: 35px;
  height: 1px;

  background: var(--law-gold);
}

/* =========================================================
   PRINCIPIOS
========================================================= */

.law-about__principles {
  display: grid;

  grid-template-columns: repeat(3, 1fr);

  gap: 0;
}

.law-about__principle {
  display: grid;

  grid-template-columns: 55px 1fr;

  gap: 18px;

  padding: 25px 35px;

  border-right: 1px solid var(--law-border);
}

.law-about__principle:first-child {
  padding-left: 0;
}

.law-about__principle:last-child {
  border-right: 0;

  padding-right: 0;
}

.law-about__principle-number {
  color: var(--law-gold);

  font-family:
    "Cormorant Garamond",
    Georgia,
    serif;

  font-size: 34px;

  line-height: 1;
}

.law-about__principle h3 {
  margin-bottom: 10px;

  font-size: 22px;
}

.law-about__principle p {
  margin-bottom: 0;

  color: var(--law-text-soft);

  font-size: 13px;
  line-height: 1.7;
}

@media (max-width: 900px) {
  .law-about__grid {
    grid-template-columns: 1fr;

    gap: 60px;
  }

  .law-about__principles {
    grid-template-columns: 1fr;
  }

  .law-about__principle {
    padding: 25px 0;

    border-right: 0;
    border-bottom: 1px solid var(--law-border);
  }

  .law-about__principle:last-child {
    border-bottom: 0;
  }
}

@media (max-width: 600px) {
  .law-about__text-columns {
    grid-template-columns: 1fr;
  }

  .law-about__quote {
    padding:
      60px
      20px
      30px;
  }

  .law-about__quote blockquote {
    font-size: 24px;
  }
}
</style>