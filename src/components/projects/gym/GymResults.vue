<template>
  <section id="resultados" class="gym-results">
    <div class="gym-results__container">

      <!-- Header -->
      <div class="gym-results__header">
        <div>
          <div class="gym-results__eyebrow">
            <span></span>
            RESULTADOS REALES
          </div>

          <h2 class="gym-results__title">
            ENTRENA.<br />
            <span>MIDE. AVANZA.</span>
          </h2>
        </div>

        <div class="gym-results__intro">
          <p>
            El progreso no se adivina. Se mide.
            En Iron Pulse trabajamos con objetivos claros,
            seguimiento constante y resultados visibles.
          </p>
        </div>
      </div>

      <!-- Metrics -->
      <div class="gym-results__metrics">

        <div class="result-metric">
          <span class="result-metric__number">01</span>

          <strong>+32%</strong>

          <p>
            incremento promedio de fuerza en miembros activos
            durante sus primeros 6 meses.
          </p>
        </div>

        <div class="result-metric">
          <span class="result-metric__number">02</span>

          <strong>87%</strong>

          <p>
            de nuestros miembros mantiene una rutina constante
            después de los primeros 90 días.
          </p>
        </div>

        <div class="result-metric">
          <span class="result-metric__number">03</span>

          <strong>4.9</strong>

          <p>
            valoración promedio de experiencia entre nuestros
            miembros y atletas.
          </p>
        </div>

        <div class="result-metric result-metric--accent">
          <span class="result-metric__number">04</span>

          <strong>1%</strong>

          <p>
            mejor cada día. La consistencia siempre gana
            a la motivación.
          </p>
        </div>

      </div>

      <!-- Stories -->
      <div class="gym-results__stories">

        <article class="result-story">
          <div class="result-story__top">
            <span>MEMBER 01</span>
            <span>12 MESES</span>
          </div>

          <blockquote>
            “Llegué queriendo bajar de peso.
            Terminé descubriendo que podía ser mucho más fuerte
            de lo que imaginaba.”
          </blockquote>

          <div class="result-story__footer">
            <div>
              <strong>ANDREA M.</strong>
              <span>PERFORMANCE MEMBER</span>
            </div>

            <span class="result-story__mark">IP</span>
          </div>
        </article>

        <article class="result-story">
          <div class="result-story__top">
            <span>MEMBER 02</span>
            <span>8 MESES</span>
          </div>

          <blockquote>
            “Pasé de entrenar sin dirección a tener objetivos,
            seguimiento y una razón clara para volver cada semana.”
          </blockquote>

          <div class="result-story__footer">
            <div>
              <strong>CARLOS R.</strong>
              <span>ELITE MEMBER</span>
            </div>

            <span class="result-story__mark">IP</span>
          </div>
        </article>

        <article class="result-story">
          <div class="result-story__top">
            <span>MEMBER 03</span>
            <span>16 MESES</span>
          </div>

          <blockquote>
            “Lo que más cambió no fue mi físico.
            Fue mi disciplina. Ahora entrenar ya forma parte
            de quién soy.”
          </blockquote>

          <div class="result-story__footer">
            <div>
              <strong>FERNANDO L.</strong>
              <span>PERFORMANCE MEMBER</span>
            </div>

            <span class="result-story__mark">IP</span>
          </div>
        </article>

      </div>

      <!-- Statement -->
      <div class="gym-results__statement">
        <span class="gym-results__statement-small">
          NO BUSCAMOS PERFECCIÓN
        </span>

        <p>
          BUSCAMOS QUE HOY<br />
          SEAS <span>MEJOR QUE AYER.</span>
        </p>

        <a href="#planes">
          EMPIEZA TU PROGRESO
          <span>→</span>
        </a>
      </div>

    </div>
  </section>
</template>

<script setup>
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,700;1,800;1,900&family=Inter:wght@400;500;600&display=swap");

.gym-results {
  padding: 135px 0;
  background: #090909;
  color: #ffffff;
  font-family: "Inter", sans-serif;
}

.gym-results__container {
  width: min(1400px, calc(100% - 48px));
  margin: 0 auto;
}

/* =========================
   HEADER
========================= */

.gym-results__header {
  display: grid;
  grid-template-columns: 1.3fr 0.7fr;
  gap: 80px;
  align-items: end;
  margin-bottom: 75px;
}

.gym-results__eyebrow {
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

.gym-results__eyebrow span {
  width: 42px;
  height: 2px;
  background: #d9ff43;
}

.gym-results__title {
  margin: 0;

  font-family: "Barlow Condensed", sans-serif;
  font-size: clamp(70px, 8vw, 120px);
  font-weight: 900;
  font-style: italic;

  line-height: 0.82;
  letter-spacing: -3px;
  text-transform: uppercase;
}

.gym-results__title span {
  color: transparent;
  -webkit-text-stroke: 2px rgba(255, 255, 255, 0.88);
}

.gym-results__intro {
  max-width: 430px;
}

.gym-results__intro p {
  margin: 0;

  font-size: 16px;
  line-height: 1.75;

  color: rgba(255, 255, 255, 0.56);
}

/* =========================
   METRICS
========================= */

.gym-results__metrics {
  display: grid;
  grid-template-columns: repeat(4, 1fr);

  border-top: 1px solid rgba(255, 255, 255, 0.13);
  border-bottom: 1px solid rgba(255, 255, 255, 0.13);
}

.result-metric {
  min-height: 310px;
  padding: 34px 30px;

  border-right: 1px solid rgba(255, 255, 255, 0.13);

  display: flex;
  flex-direction: column;
}

.result-metric:first-child {
  border-left: 1px solid rgba(255, 255, 255, 0.13);
}

.result-metric__number {
  font-family: "Barlow Condensed", sans-serif;
  font-size: 12px;
  font-weight: 700;
  letter-spacing: 2px;

  color: rgba(255, 255, 255, 0.35);
}

.result-metric strong {
  margin-top: auto;

  font-family: "Barlow Condensed", sans-serif;
  font-size: clamp(72px, 7vw, 105px);
  font-weight: 800;
  line-height: 0.8;
  letter-spacing: -3px;
}

.result-metric p {
  margin: 24px 0 0;

  max-width: 260px;

  font-size: 13px;
  line-height: 1.65;

  color: rgba(255, 255, 255, 0.48);
}

.result-metric--accent {
  background: #d9ff43;
  color: #090909;
}

.result-metric--accent .result-metric__number,
.result-metric--accent p {
  color: rgba(9, 9, 9, 0.55);
}

/* =========================
   STORIES
========================= */

.gym-results__stories {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 18px;

  margin-top: 90px;
}

.result-story {
  min-height: 420px;
  padding: 32px;

  display: flex;
  flex-direction: column;

  background: #111111;
  border: 1px solid rgba(255, 255, 255, 0.08);

  transition:
    transform 0.3s ease,
    border-color 0.3s ease;
}

.result-story:hover {
  transform: translateY(-5px);
  border-color: rgba(217, 255, 67, 0.35);
}

.result-story__top {
  display: flex;
  justify-content: space-between;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 10px;
  font-weight: 700;
  letter-spacing: 1.8px;

  color: rgba(255, 255, 255, 0.35);
}

.result-story blockquote {
  margin: auto 0;

  font-family: "Barlow Condensed", sans-serif;
  font-size: clamp(28px, 2.8vw, 42px);
  font-weight: 500;
  line-height: 1.05;

  color: #ffffff;
}

.result-story__footer {
  display: flex;
  align-items: flex-end;
  justify-content: space-between;
  gap: 20px;
}

.result-story__footer > div {
  display: flex;
  flex-direction: column;
  gap: 5px;
}

.result-story__footer strong {
  font-family: "Barlow Condensed", sans-serif;
  font-size: 17px;
  letter-spacing: 1px;
}

.result-story__footer div > span {
  font-family: "Barlow Condensed", sans-serif;
  font-size: 10px;
  font-weight: 600;
  letter-spacing: 1.5px;

  color: #d9ff43;
}

.result-story__mark {
  width: 42px;
  height: 42px;

  display: flex;
  align-items: center;
  justify-content: center;

  background: #d9ff43;
  color: #090909;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 18px;
  font-weight: 900;
  font-style: italic;
}

/* =========================
   STATEMENT
========================= */

.gym-results__statement {
  margin-top: 120px;

  padding-top: 45px;

  border-top: 1px solid rgba(255, 255, 255, 0.13);

  display: grid;
  grid-template-columns: 180px 1fr auto;
  gap: 45px;

  align-items: end;
}

.gym-results__statement-small {
  align-self: start;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 2px;

  color: #d9ff43;
}

.gym-results__statement p {
  margin: 0;

  font-family: "Barlow Condensed", sans-serif;
  font-size: clamp(48px, 5.5vw, 82px);
  font-weight: 800;
  line-height: 0.9;

  text-transform: uppercase;
}

.gym-results__statement p span {
  color: #d9ff43;
}

.gym-results__statement a {
  display: flex;
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

.gym-results__statement a > span {
  font-size: 20px;
}

.gym-results__statement a:hover {
  background: #ffffff;
  transform: translateY(-3px);
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 1050px) {
  .gym-results__header {
    grid-template-columns: 1fr;
    gap: 35px;
  }

  .gym-results__metrics {
    grid-template-columns: repeat(2, 1fr);
  }

  .result-metric:nth-child(3) {
    border-left: 1px solid rgba(255, 255, 255, 0.13);
  }

  .gym-results__stories {
    grid-template-columns: 1fr 1fr;
  }

  .result-story:last-child {
    grid-column: 1 / 3;
    width: calc(50% - 9px);
    justify-self: center;
  }

  .gym-results__statement {
    grid-template-columns: 1fr;
  }

  .gym-results__statement a {
    width: fit-content;
  }
}

@media (max-width: 700px) {
  .gym-results {
    padding: 90px 0;
  }

  .gym-results__container {
    width: calc(100% - 32px);
  }

  .gym-results__title {
    font-size: clamp(62px, 20vw, 90px);
    letter-spacing: -2px;
  }

  .gym-results__metrics {
    grid-template-columns: 1fr;
  }

  .result-metric,
  .result-metric:first-child,
  .result-metric:nth-child(3) {
    border-left: 1px solid rgba(255, 255, 255, 0.13);
  }

  .gym-results__stories {
    grid-template-columns: 1fr;
  }

  .result-story:last-child {
    grid-column: auto;
    width: auto;
  }

  .gym-results__statement {
    margin-top: 80px;
  }

  .gym-results__statement a {
    width: 100%;
    justify-content: space-between;
  }
}
</style>