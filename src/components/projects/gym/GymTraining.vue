<template>
  <section id="entrenamiento" class="gym-training">
    <div class="gym-training__container">

      <!-- Header -->
      <div class="gym-training__header">
        <div class="gym-training__heading">
          <div class="gym-training__eyebrow">
            <span></span>
            ENTRENA A TU MANERA
          </div>

          <h2 class="gym-training__title">
            ENCUENTRA TU<br />
            <span>DISCIPLINA.</span>
          </h2>
        </div>

        <div class="gym-training__intro">
          <p>
            No todos entrenamos por lo mismo. Elige tu objetivo,
            encuentra tu método y construye una rutina diseñada
            para llevarte más lejos.
          </p>
        </div>
      </div>

      <!-- Programs -->
      <div class="gym-training__programs">

        <!-- Strength -->
        <article class="training-program">
          <div class="training-program__number">01</div>

          <div class="training-program__name">
            <span>BUILD STRENGTH</span>
            <h3>FUERZA</h3>
          </div>

          <div class="training-program__description">
            <p>
              Desarrolla fuerza, técnica y masa muscular con
              entrenamiento estructurado y equipamiento profesional.
            </p>

            <div class="training-program__tags">
              <span>PESO LIBRE</span>
              <span>POWERLIFTING</span>
              <span>HIPERTROFIA</span>
            </div>
          </div>

          <div class="training-program__arrow">
            ↗
          </div>
        </article>

        <!-- Functional -->
        <article class="training-program">
          <div class="training-program__number">02</div>

          <div class="training-program__name">
            <span>MOVE BETTER</span>
            <h3>FUNCIONAL</h3>
          </div>

          <div class="training-program__description">
            <p>
              Mejora movilidad, coordinación, potencia y capacidad
              física con sesiones dinámicas de cuerpo completo.
            </p>

            <div class="training-program__tags">
              <span>MOVILIDAD</span>
              <span>POTENCIA</span>
              <span>CONDITIONING</span>
            </div>
          </div>

          <div class="training-program__arrow">
            ↗
          </div>
        </article>

        <!-- Performance -->
        <article class="training-program">
          <div class="training-program__number">03</div>

          <div class="training-program__name">
            <span>PERFORM HARDER</span>
            <h3>PERFORMANCE</h3>
          </div>

          <div class="training-program__description">
            <p>
              Entrenamiento orientado al rendimiento para llevar
              velocidad, explosividad y resistencia al siguiente nivel.
            </p>

            <div class="training-program__tags">
              <span>VELOCIDAD</span>
              <span>AGILIDAD</span>
              <span>RESISTENCIA</span>
            </div>
          </div>

          <div class="training-program__arrow">
            ↗
          </div>
        </article>

        <!-- Personal -->
        <article class="training-program">
          <div class="training-program__number">04</div>

          <div class="training-program__name">
            <span>YOUR GOAL. YOUR PLAN.</span>
            <h3>PERSONAL</h3>
          </div>

          <div class="training-program__description">
            <p>
              Trabaja uno a uno con un coach y sigue un programa
              construido específicamente alrededor de tus objetivos.
            </p>

            <div class="training-program__tags">
              <span>1 ON 1</span>
              <span>PROGRAMACIÓN</span>
              <span>SEGUIMIENTO</span>
            </div>
          </div>

          <div class="training-program__arrow">
            ↗
          </div>
        </article>

      </div>

      <!-- Bottom -->
      <div class="gym-training__bottom">
        <div class="gym-training__statement">
          <span class="gym-training__statement-mark">“</span>

          <p>
            EL MEJOR PROGRAMA<br />
            ES EL QUE TE HACE<br />
            <strong>VOLVER MAÑANA.</strong>
          </p>
        </div>

        <a href="#planes" class="gym-training__cta">
          <span>ENCUENTRA TU PLAN</span>
          <div>→</div>
        </a>
      </div>

    </div>

    <!-- Decorative word -->
    <div class="gym-training__background-word">
      TRAIN
    </div>
  </section>
</template>

<script setup>
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,700;1,800;1,900&family=Inter:wght@400;500;600&display=swap");

.gym-training {
  position: relative;

  padding: 135px 0 120px;

  background: #d9ff43;
  color: #090909;

  font-family: "Inter", sans-serif;

  overflow: hidden;
}

.gym-training__container {
  position: relative;
  z-index: 2;

  width: min(1400px, calc(100% - 48px));
  margin: 0 auto;
}

/* =========================
   HEADER
========================= */

.gym-training__header {
  display: grid;
  grid-template-columns: 1.35fr 0.65fr;
  gap: 80px;

  align-items: end;

  margin-bottom: 80px;
}

.gym-training__eyebrow {
  display: flex;
  align-items: center;
  gap: 14px;

  margin-bottom: 22px;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 13px;
  font-weight: 700;
  letter-spacing: 3px;
}

.gym-training__eyebrow span {
  width: 42px;
  height: 2px;

  background: #090909;
}

.gym-training__title {
  margin: 0;

  font-family: "Barlow Condensed", sans-serif;
  font-size: clamp(70px, 8vw, 120px);
  font-weight: 900;
  font-style: italic;

  line-height: 0.82;
  letter-spacing: -3px;

  text-transform: uppercase;
}

.gym-training__title span {
  color: transparent;

  -webkit-text-stroke: 2px #090909;
}

.gym-training__intro {
  max-width: 430px;

  padding-bottom: 6px;
}

.gym-training__intro p {
  margin: 0;

  font-size: 16px;
  line-height: 1.75;

  color: rgba(9, 9, 9, 0.64);
}

/* =========================
   PROGRAMS
========================= */

.gym-training__programs {
  border-top: 2px solid #090909;
}

.training-program {
  position: relative;

  display: grid;
  grid-template-columns: 90px 1fr 1fr 70px;
  gap: 35px;

  align-items: center;

  min-height: 180px;

  padding: 30px 20px;

  border-bottom: 1px solid rgba(9, 9, 9, 0.28);

  transition:
    background 0.35s ease,
    color 0.35s ease,
    padding 0.35s ease;
}

.training-program:hover {
  padding-left: 35px;

  background: #090909;
  color: #ffffff;
}

/* =========================
   NUMBER
========================= */

.training-program__number {
  align-self: start;

  padding-top: 9px;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 13px;
  font-weight: 700;
  letter-spacing: 2px;

  opacity: 0.55;
}

/* =========================
   NAME
========================= */

.training-program__name > span {
  display: block;

  margin-bottom: 6px;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 2.4px;

  opacity: 0.55;
}

.training-program__name h3 {
  margin: 0;

  font-family: "Barlow Condensed", sans-serif;
  font-size: clamp(48px, 5vw, 72px);
  font-weight: 800;

  line-height: 0.9;
  letter-spacing: -1px;

  text-transform: uppercase;
}

/* =========================
   DESCRIPTION
========================= */

.training-program__description {
  max-width: 490px;
}

.training-program__description p {
  margin: 0;

  font-size: 14px;
  line-height: 1.65;

  color: rgba(9, 9, 9, 0.63);

  transition: color 0.35s ease;
}

.training-program:hover .training-program__description p {
  color: rgba(255, 255, 255, 0.6);
}

/* =========================
   TAGS
========================= */

.training-program__tags {
  display: flex;
  flex-wrap: wrap;
  gap: 7px;

  margin-top: 18px;
}

.training-program__tags span {
  padding: 5px 9px;

  border: 1px solid rgba(9, 9, 9, 0.28);

  font-family: "Barlow Condensed", sans-serif;
  font-size: 10px;
  font-weight: 600;
  letter-spacing: 1.2px;

  transition:
    border-color 0.35s ease,
    color 0.35s ease;
}

.training-program:hover .training-program__tags span {
  color: #d9ff43;
  border-color: rgba(217, 255, 67, 0.35);
}

/* =========================
   ARROW
========================= */

.training-program__arrow {
  justify-self: end;

  width: 52px;
  height: 52px;

  display: flex;
  align-items: center;
  justify-content: center;

  border: 1px solid rgba(9, 9, 9, 0.35);
  border-radius: 50%;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 25px;

  transition:
    background 0.35s ease,
    color 0.35s ease,
    border-color 0.35s ease,
    transform 0.35s ease;
}

.training-program:hover .training-program__arrow {
  background: #d9ff43;
  color: #090909;
  border-color: #d9ff43;

  transform: rotate(45deg);
}

/* =========================
   BOTTOM
========================= */

.gym-training__bottom {
  display: flex;
  justify-content: space-between;
  align-items: flex-end;
  gap: 60px;

  margin-top: 100px;
}

.gym-training__statement {
  position: relative;

  display: flex;
  gap: 18px;
}

.gym-training__statement-mark {
  font-family: Georgia, serif;
  font-size: 90px;
  line-height: 0.7;

  opacity: 0.2;
}

.gym-training__statement p {
  margin: 0;

  font-family: "Barlow Condensed", sans-serif;
  font-size: clamp(30px, 3.2vw, 48px);
  font-weight: 500;
  line-height: 1;

  text-transform: uppercase;
}

.gym-training__statement strong {
  font-weight: 800;
}

/* =========================
   CTA
========================= */

.gym-training__cta {
  min-width: 280px;
  min-height: 72px;

  padding: 0 25px;

  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 30px;

  background: #090909;
  color: #ffffff;

  text-decoration: none;

  transition:
    transform 0.3s ease,
    background 0.3s ease;
}

.gym-training__cta span {
  font-family: "Barlow Condensed", sans-serif;
  font-size: 16px;
  font-weight: 700;
  letter-spacing: 1.4px;
}

.gym-training__cta div {
  font-size: 25px;

  color: #d9ff43;

  transition: transform 0.3s ease;
}

.gym-training__cta:hover {
  transform: translateY(-4px);
}

.gym-training__cta:hover div {
  transform: translateX(5px);
}

/* =========================
   DECORATIVE TEXT
========================= */

.gym-training__background-word {
  position: absolute;

  right: -30px;
  bottom: -85px;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 300px;
  font-weight: 900;
  font-style: italic;

  line-height: 1;

  color: rgba(9, 9, 9, 0.035);

  pointer-events: none;
  user-select: none;
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 1000px) {
  .gym-training__header {
    grid-template-columns: 1fr;
    gap: 35px;
  }

  .training-program {
    grid-template-columns: 60px 1fr 60px;
  }

  .training-program__description {
    grid-column: 2;
  }

  .training-program__arrow {
    grid-column: 3;
    grid-row: 1 / 3;
  }
}

@media (max-width: 700px) {
  .gym-training {
    padding: 90px 0;
  }

  .gym-training__container {
    width: calc(100% - 32px);
  }

  .gym-training__header {
    margin-bottom: 55px;
  }

  .gym-training__title {
    font-size: clamp(62px, 20vw, 90px);
    letter-spacing: -2px;
  }

  .training-program {
    grid-template-columns: 40px 1fr 45px;
    gap: 15px;

    min-height: 220px;

    padding: 28px 5px;
  }

  .training-program:hover {
    padding-left: 12px;
  }

  .training-program__name h3 {
    font-size: 48px;
  }

  .training-program__description {
    grid-column: 2 / 4;

    padding-right: 10px;
  }

  .training-program__arrow {
    width: 42px;
    height: 42px;
  }

  .gym-training__bottom {
    flex-direction: column;
    align-items: flex-start;

    margin-top: 70px;
  }

  .gym-training__cta {
    width: 100%;
  }

  .gym-training__background-word {
    font-size: 180px;
  }
}
</style>