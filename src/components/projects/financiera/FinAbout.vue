<template>
  <section id="nosotros" class="fin-about">

    <div class="fin-about__container">

      <div class="fin-about__intro">

        <div class="fin-about__section-number">
          <span>01</span>
          <div></div>
          Nosotros
        </div>

        <div class="fin-about__headline">
          <span class="fin-about__eyebrow">NUESTRA FIRMA</span>

          <h2>
            El patrimonio no crece
            por casualidad.
            <em>Se construye.</em>
          </h2>
        </div>

      </div>

      <div class="fin-about__body">

        <div class="fin-about__statement">
          <p>
            Creemos que una buena estrategia financiera comienza mucho antes
            de elegir una inversión.
          </p>
        </div>

        <div class="fin-about__copy">
          <p>
            En Vertex Financial Advisors acompañamos a nuestros clientes
            en la toma de decisiones que definen su futuro financiero.
            Analizamos su situación, objetivos y horizonte para construir
            estrategias claras, medibles y sostenibles.
          </p>

          <p>
            Nuestro enfoque combina análisis, disciplina y una visión integral
            del patrimonio para convertir objetivos financieros en planes
            concretos de acción.
          </p>

          <a href="#estrategia" class="fin-about__link">
            Conocer nuestra filosofía
            <span>↗</span>
          </a>
        </div>

      </div>

      <div class="fin-about__principles">

        <article class="fin-about__principle">
          <span class="fin-about__principle-number">01</span>

          <div class="fin-about__principle-icon">
            <span></span>
            <span></span>
          </div>

          <h3>Claridad</h3>

          <p>
            Estrategias comprensibles, objetivos definidos y decisiones
            respaldadas por información.
          </p>
        </article>

        <article class="fin-about__principle">
          <span class="fin-about__principle-number">02</span>

          <div class="fin-about__principle-icon fin-about__principle-icon--circle">
            <span></span>
          </div>

          <h3>Disciplina</h3>

          <p>
            Construimos planes diseñados para mantenerse firmes más allá
            del ruido y las decisiones impulsivas.
          </p>
        </article>

        <article class="fin-about__principle">
          <span class="fin-about__principle-number">03</span>

          <div class="fin-about__principle-icon fin-about__principle-icon--growth">
            <span></span>
            <span></span>
            <span></span>
          </div>

          <h3>Perspectiva</h3>

          <p>
            Miramos más allá del presente para construir patrimonio con
            una visión verdaderamente sostenible.
          </p>
        </article>

      </div>

    </div>

  </section>
</template>

<style scoped>
.fin-about {
  position: relative;
  padding: 140px 0;
  background: var(--fin-bg);
  color: var(--fin-text);
}

.fin-about__container {
  width: min(1280px, calc(100% - 80px));
  margin: 0 auto;
}

.fin-about__intro {
  display: grid;
  grid-template-columns: 0.35fr 1fr;
  gap: 80px;
  padding-bottom: 80px;
  border-bottom: 1px solid var(--fin-border);
}

.fin-about__section-number {
  display: flex;
  align-items: center;
  align-self: start;
  gap: 15px;
  padding-top: 12px;
  color: var(--fin-text-soft);
  font-size: 9px;
  text-transform: uppercase;
  letter-spacing: 2.5px;
}

.fin-about__section-number span {
  color: var(--fin-accent);
}

.fin-about__section-number div {
  width: 45px;
  height: 1px;
  background: var(--fin-border);
}

.fin-about__headline {
  max-width: 850px;
}

.fin-about__eyebrow {
  display: block;
  margin-bottom: 24px;
  color: var(--fin-accent);
  font-size: 9px;
  font-weight: 600;
  letter-spacing: 3px;
}

.fin-about__headline h2 {
  margin-bottom: 0;
  font-family: Georgia, 'Times New Roman', serif;
  font-size: clamp(48px, 5vw, 75px);
  line-height: 1.08;
  letter-spacing: -2.5px;
  font-weight: 400;
  color: var(--fin-primary);
}

.fin-about__headline h2 em {
  display: block;
  color: var(--fin-accent);
  font-weight: 400;
}

.fin-about__body {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 110px;
  padding: 80px 0 100px;
}

.fin-about__statement p {
  max-width: 500px;
  font-family: Georgia, 'Times New Roman', serif;
  font-size: clamp(27px, 2.5vw, 38px);
  line-height: 1.45;
  color: var(--fin-primary);
}

.fin-about__statement p::first-letter {
  color: var(--fin-accent);
}

.fin-about__copy {
  max-width: 580px;
}

.fin-about__copy p {
  margin-bottom: 22px;
  color: var(--fin-text-soft);
  font-size: 14px;
  line-height: 1.95;
}

.fin-about__link {
  width: fit-content;
  margin-top: 35px;
  padding-bottom: 10px;
  display: flex;
  align-items: center;
  gap: 25px;
  border-bottom: 1px solid var(--fin-accent);
  color: var(--fin-primary);
  font-size: 10px;
  text-transform: uppercase;
  letter-spacing: 1.5px;
}

.fin-about__link span {
  color: var(--fin-accent);
  font-size: 16px;
  transition: transform 0.25s ease;
}

.fin-about__link:hover span {
  transform: translate(3px, -3px);
}

.fin-about__principles {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  border-top: 1px solid var(--fin-border);
  border-bottom: 1px solid var(--fin-border);
}

.fin-about__principle {
  position: relative;
  min-height: 330px;
  padding: 45px;
}

.fin-about__principle + .fin-about__principle {
  border-left: 1px solid var(--fin-border);
}

.fin-about__principle-number {
  position: absolute;
  top: 25px;
  right: 25px;
  color: #b3b0a8;
  font-family: Georgia, serif;
  font-size: 11px;
}

.fin-about__principle-icon {
  position: relative;
  width: 55px;
  height: 55px;
  margin-bottom: 55px;
}

.fin-about__principle-icon span:first-child {
  position: absolute;
  left: 5px;
  bottom: 8px;
  width: 42px;
  height: 1px;
  background: var(--fin-accent);
  transform: rotate(-45deg);
}

.fin-about__principle-icon span:last-child {
  position: absolute;
  right: 4px;
  top: 3px;
  width: 11px;
  height: 11px;
  border-top: 1px solid var(--fin-accent);
  border-right: 1px solid var(--fin-accent);
}

.fin-about__principle-icon--circle {
  border: 1px solid var(--fin-accent);
  border-radius: 50%;
}

.fin-about__principle-icon--circle span:first-child {
  top: 50%;
  left: 50%;
  width: 7px;
  height: 7px;
  border-radius: 50%;
  background: var(--fin-accent);
  transform: translate(-50%, -50%);
}

.fin-about__principle-icon--growth {
  display: flex;
  align-items: flex-end;
  gap: 6px;
}

.fin-about__principle-icon--growth span {
  position: static !important;
  width: 8px !important;
  border: 0 !important;
  background: var(--fin-accent) !important;
  transform: none !important;
}

.fin-about__principle-icon--growth span:nth-child(1) {
  height: 18px;
}

.fin-about__principle-icon--growth span:nth-child(2) {
  height: 34px;
}

.fin-about__principle-icon--growth span:nth-child(3) {
  height: 52px;
}

.fin-about__principle h3 {
  margin-bottom: 15px;
  font-family: Georgia, serif;
  font-size: 25px;
  font-weight: 400;
  color: var(--fin-primary);
}

.fin-about__principle p {
  max-width: 300px;
  margin-bottom: 0;
  color: var(--fin-text-soft);
  font-size: 13px;
  line-height: 1.8;
}

@media (max-width: 900px) {
  .fin-about__intro {
    grid-template-columns: 1fr;
    gap: 40px;
  }

  .fin-about__body {
    grid-template-columns: 1fr;
    gap: 35px;
  }

  .fin-about__principles {
    grid-template-columns: 1fr;
  }

  .fin-about__principle + .fin-about__principle {
    border-left: 0;
    border-top: 1px solid var(--fin-border);
  }

  .fin-about__principle {
    min-height: auto;
  }
}

@media (max-width: 600px) {
  .fin-about {
    padding: 90px 0;
  }

  .fin-about__container {
    width: calc(100% - 36px);
  }

  .fin-about__intro {
    padding-bottom: 55px;
  }

  .fin-about__headline h2 {
    font-size: 46px;
    letter-spacing: -1.5px;
  }

  .fin-about__body {
    padding: 55px 0 70px;
  }

  .fin-about__statement p {
    font-size: 27px;
  }

  .fin-about__principle {
    padding: 35px 25px;
  }

  .fin-about__principle-icon {
    margin-bottom: 35px;
  }
}
</style>