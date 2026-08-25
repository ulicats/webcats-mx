<template>
  <section id="planes" class="gym-plans">
    <div class="gym-plans__container">

      <!-- Header -->
      <div class="gym-plans__header">
        <div>
          <div class="gym-plans__eyebrow">
            <span></span>
            MEMBRESÍAS
          </div>

          <h2 class="gym-plans__title">
            ELIGE TU<br />
            <span>NIVEL.</span>
          </h2>
        </div>

        <div class="gym-plans__intro">
          <p>
            Sin contratos complicados ni costos escondidos.
            Elige el plan que se adapte a tu forma de entrenar
            y empieza cuando estés listo.
          </p>

          <div class="gym-plans__billing">
            <span>PRECIOS MENSUALES</span>
            <strong>MXN</strong>
          </div>
        </div>
      </div>

      <!-- Plans -->
      <div class="gym-plans__grid">

        <!-- BASIC -->
        <article class="gym-plan">
          <div class="gym-plan__top">
            <span class="gym-plan__number">01</span>
            <span class="gym-plan__label">START</span>
          </div>

          <div class="gym-plan__heading">
            <h3>BASE</h3>

            <p>
              Todo lo necesario para comenzar a construir
              constancia y resultados.
            </p>
          </div>

          <div class="gym-plan__price">
            <span class="gym-plan__currency">$</span>
            <strong>699</strong>

            <div>
              <span>MXN</span>
              <span>/ MES</span>
            </div>
          </div>

          <div class="gym-plan__divider"></div>

          <ul class="gym-plan__features">
            <li>
              <span>✓</span>
              Acceso general al gimnasio
            </li>

            <li>
              <span>✓</span>
              Zona de fuerza
            </li>

            <li>
              <span>✓</span>
              Zona cardiovascular
            </li>

            <li>
              <span>✓</span>
              Vestidores y lockers
            </li>

            <li class="disabled">
              <span>—</span>
              Clases grupales
            </li>

            <li class="disabled">
              <span>—</span>
              Evaluación personalizada
            </li>
          </ul>

          <a href="#contacto" class="gym-plan__button">
            ELEGIR BASE
            <span>→</span>
          </a>
        </article>

        <!-- PERFORMANCE -->
        <article class="gym-plan gym-plan--featured">
          <div class="gym-plan__recommended">
            MÁS ELEGIDO
          </div>

          <div class="gym-plan__top">
            <span class="gym-plan__number">02</span>
            <span class="gym-plan__label">LEVEL UP</span>
          </div>

          <div class="gym-plan__heading">
            <h3>PERFORMANCE</h3>

            <p>
              Entrena sin límites y aprovecha toda la
              experiencia Iron Pulse.
            </p>
          </div>

          <div class="gym-plan__price">
            <span class="gym-plan__currency">$</span>
            <strong>999</strong>

            <div>
              <span>MXN</span>
              <span>/ MES</span>
            </div>
          </div>

          <div class="gym-plan__divider"></div>

          <ul class="gym-plan__features">
            <li>
              <span>✓</span>
              Acceso general ilimitado
            </li>

            <li>
              <span>✓</span>
              Todas las áreas de entrenamiento
            </li>

            <li>
              <span>✓</span>
              Clases grupales
            </li>

            <li>
              <span>✓</span>
              Evaluación física inicial
            </li>

            <li>
              <span>✓</span>
              Seguimiento de progreso
            </li>

            <li>
              <span>✓</span>
              1 invitado mensual
            </li>
          </ul>

          <a href="#contacto" class="gym-plan__button">
            ELEGIR PERFORMANCE
            <span>→</span>
          </a>
        </article>

        <!-- ELITE -->
        <article class="gym-plan">
          <div class="gym-plan__top">
            <span class="gym-plan__number">03</span>
            <span class="gym-plan__label">ALL IN</span>
          </div>

          <div class="gym-plan__heading">
            <h3>ELITE</h3>

            <p>
              Entrenamiento personalizado para quienes buscan
              llevar su rendimiento al máximo.
            </p>
          </div>

          <div class="gym-plan__price">
            <span class="gym-plan__currency">$</span>
            <strong>1,699</strong>

            <div>
              <span>MXN</span>
              <span>/ MES</span>
            </div>
          </div>

          <div class="gym-plan__divider"></div>

          <ul class="gym-plan__features">
            <li>
              <span>✓</span>
              Todo lo incluido en Performance
            </li>

            <li>
              <span>✓</span>
              Programa personalizado
            </li>

            <li>
              <span>✓</span>
              4 sesiones con coach al mes
            </li>

            <li>
              <span>✓</span>
              Evaluaciones periódicas
            </li>

            <li>
              <span>✓</span>
              Seguimiento de objetivos
            </li>

            <li>
              <span>✓</span>
              Prioridad en clases
            </li>
          </ul>

          <a href="#contacto" class="gym-plan__button">
            ELEGIR ELITE
            <span>→</span>
          </a>
        </article>

      </div>

      <!-- Footer -->
      <div class="gym-plans__footer">
        <p>
          ¿No sabes cuál elegir?
          <strong>Te ayudamos a encontrar el plan ideal.</strong>
        </p>

        <a href="#contacto">
          HABLAR CON NOSOTROS
          <span>↗</span>
        </a>
      </div>

    </div>
  </section>
</template>

<script setup>
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,700;1,800;1,900&family=Inter:wght@400;500;600&display=swap");

.gym-plans {
  padding: 135px 0;

  background: #eeeeea;
  color: #090909;

  font-family: "Inter", sans-serif;
}

.gym-plans__container {
  width: min(1400px, calc(100% - 48px));
  margin: 0 auto;
}

/* =========================
   HEADER
========================= */

.gym-plans__header {
  display: grid;
  grid-template-columns: 1.3fr 0.7fr;
  gap: 80px;

  align-items: end;

  margin-bottom: 75px;
}

.gym-plans__eyebrow {
  display: flex;
  align-items: center;
  gap: 14px;

  margin-bottom: 22px;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 13px;
  font-weight: 700;
  letter-spacing: 3px;

  color: #667a00;
}

.gym-plans__eyebrow > span {
  width: 42px;
  height: 2px;

  background: #9fbd00;
}

.gym-plans__title {
  margin: 0;

  font-family: "Barlow Condensed", sans-serif;
  font-size: clamp(70px, 8vw, 120px);
  font-weight: 900;
  font-style: italic;

  line-height: 0.82;
  letter-spacing: -3px;

  text-transform: uppercase;
}

.gym-plans__title > span {
  color: transparent;

  -webkit-text-stroke: 2px #090909;
}

.gym-plans__intro {
  max-width: 430px;
}

.gym-plans__intro p {
  margin: 0;

  font-size: 16px;
  line-height: 1.75;

  color: #5e5e5e;
}

.gym-plans__billing {
  display: flex;
  align-items: center;
  gap: 12px;

  margin-top: 25px;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 1.8px;
}

.gym-plans__billing strong {
  padding: 5px 8px;

  background: #090909;
  color: #d9ff43;

  font-size: 10px;
}

/* =========================
   GRID
========================= */

.gym-plans__grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);

  align-items: stretch;

  border-top: 1px solid rgba(9, 9, 9, 0.18);
  border-bottom: 1px solid rgba(9, 9, 9, 0.18);
}

/* =========================
   PLAN
========================= */

.gym-plan {
  position: relative;

  padding: 40px;

  display: flex;
  flex-direction: column;

  min-height: 680px;

  background: #eeeeea;

  border-left: 1px solid rgba(9, 9, 9, 0.18);
}

.gym-plan:last-child {
  border-right: 1px solid rgba(9, 9, 9, 0.18);
}

/* =========================
   FEATURED
========================= */

.gym-plan--featured {
  background: #090909;
  color: #ffffff;

  transform: translateY(-18px);

  min-height: 716px;

  border: none;
}

.gym-plan__recommended {
  position: absolute;

  top: 0;
  right: 0;

  padding: 9px 16px;

  background: #d9ff43;
  color: #090909;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 10px;
  font-weight: 800;
  letter-spacing: 1.6px;
}

/* =========================
   TOP
========================= */

.gym-plan__top {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.gym-plan__number,
.gym-plan__label {
  font-family: "Barlow Condensed", sans-serif;
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 2px;

  opacity: 0.48;
}

.gym-plan--featured .gym-plan__number,
.gym-plan--featured .gym-plan__label {
  color: #d9ff43;
  opacity: 1;
}

/* =========================
   HEADING
========================= */

.gym-plan__heading {
  margin-top: 55px;
}

.gym-plan__heading h3 {
  margin: 0;

  font-family: "Barlow Condensed", sans-serif;
  font-size: clamp(48px, 4.5vw, 68px);
  font-weight: 800;

  line-height: 0.9;
  letter-spacing: -1px;

  text-transform: uppercase;
}

.gym-plan__heading p {
  margin: 18px 0 0;

  max-width: 320px;

  font-size: 13px;
  line-height: 1.65;

  color: #6a6a6a;
}

.gym-plan--featured .gym-plan__heading p {
  color: rgba(255, 255, 255, 0.52);
}

/* =========================
   PRICE
========================= */

.gym-plan__price {
  display: flex;
  align-items: flex-end;

  margin-top: 40px;

  font-family: "Barlow Condensed", sans-serif;
}

.gym-plan__currency {
  align-self: flex-start;

  margin-top: 10px;
  margin-right: 4px;

  font-size: 24px;
  font-weight: 600;
}

.gym-plan__price strong {
  font-size: clamp(68px, 6vw, 92px);
  font-weight: 800;
  line-height: 0.8;

  letter-spacing: -3px;
}

.gym-plan__price > div {
  display: flex;
  flex-direction: column;

  margin-left: 10px;

  font-size: 10px;
  font-weight: 700;
  line-height: 1.4;
  letter-spacing: 1px;

  opacity: 0.5;
}

/* =========================
   DIVIDER
========================= */

.gym-plan__divider {
  height: 1px;

  margin: 40px 0 30px;

  background: rgba(9, 9, 9, 0.15);
}

.gym-plan--featured .gym-plan__divider {
  background: rgba(255, 255, 255, 0.13);
}

/* =========================
   FEATURES
========================= */

.gym-plan__features {
  margin: 0 0 45px;
  padding: 0;

  list-style: none;

  display: flex;
  flex-direction: column;
  gap: 15px;
}

.gym-plan__features li {
  display: flex;
  align-items: center;
  gap: 12px;

  font-size: 13px;
  line-height: 1.4;

  color: #444444;
}

.gym-plan__features li > span {
  width: 18px;

  font-family: "Barlow Condensed", sans-serif;
  font-weight: 800;

  color: #738b00;
}

.gym-plan__features .disabled {
  opacity: 0.35;
}

.gym-plan--featured .gym-plan__features li {
  color: rgba(255, 255, 255, 0.7);
}

.gym-plan--featured .gym-plan__features li > span {
  color: #d9ff43;
}

/* =========================
   BUTTON
========================= */

.gym-plan__button {
  margin-top: auto;

  min-height: 58px;

  padding: 0 20px;

  display: flex;
  align-items: center;
  justify-content: space-between;

  border: 1px solid #090909;

  color: #090909;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 15px;
  font-weight: 800;
  letter-spacing: 1.3px;

  text-decoration: none;

  transition:
    background 0.3s ease,
    color 0.3s ease,
    transform 0.3s ease;
}

.gym-plan__button > span {
  font-size: 21px;

  transition: transform 0.3s ease;
}

.gym-plan__button:hover {
  background: #090909;
  color: #ffffff;

  transform: translateY(-3px);
}

.gym-plan__button:hover > span {
  transform: translateX(5px);
}

.gym-plan--featured .gym-plan__button {
  background: #d9ff43;
  color: #090909;
  border-color: #d9ff43;
}

.gym-plan--featured .gym-plan__button:hover {
  background: #ffffff;
  border-color: #ffffff;
}

/* =========================
   FOOTER
========================= */

.gym-plans__footer {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 40px;

  margin-top: 55px;
}

.gym-plans__footer p {
  margin: 0;

  font-size: 14px;
  color: #656565;
}

.gym-plans__footer strong {
  color: #090909;
}

.gym-plans__footer a {
  display: flex;
  align-items: center;
  gap: 15px;

  color: #090909;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 14px;
  font-weight: 800;
  letter-spacing: 1.3px;

  text-decoration: none;
}

.gym-plans__footer a > span {
  font-size: 19px;
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 1050px) {
  .gym-plans__header {
    grid-template-columns: 1fr;
    gap: 35px;
  }

  .gym-plans__grid {
    grid-template-columns: 1fr 1fr;
    gap: 18px;

    border: 0;
  }

  .gym-plan {
    border: 1px solid rgba(9, 9, 9, 0.18);
  }

  .gym-plan--featured {
    transform: none;
  }

  .gym-plan:last-child {
    grid-column: 1 / 3;

    width: calc(50% - 9px);
    justify-self: center;
  }
}

@media (max-width: 700px) {
  .gym-plans {
    padding: 90px 0;
  }

  .gym-plans__container {
    width: calc(100% - 32px);
  }

  .gym-plans__title {
    font-size: clamp(62px, 20vw, 90px);
    letter-spacing: -2px;
  }

  .gym-plans__grid {
    grid-template-columns: 1fr;
  }

  .gym-plan,
  .gym-plan--featured {
    min-height: auto;
    padding: 32px 25px;
  }

  .gym-plan:last-child {
    grid-column: auto;

    width: auto;
  }

  .gym-plan__button {
    margin-top: 10px;
  }

  .gym-plans__footer {
    flex-direction: column;
    align-items: flex-start;
  }
}
</style>