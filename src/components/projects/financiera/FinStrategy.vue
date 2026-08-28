<template>
  <section id="estrategia" class="fin-strategy">
    <div class="fin-strategy__container">

      <!-- LEFT -->
      <div class="fin-strategy__intro">
        <span class="fin-strategy__eyebrow">
          MÉTODO VERTEX
        </span>

        <h2>
          Una estrategia
          clara comienza
          con una
          <em>buena lectura.</em>
        </h2>

        <div class="fin-strategy__line"></div>

        <p>
          Nuestro método es un ciclo continuo de análisis,
          decisiones, ejecución y ajustes que se adapta
          a su realidad y al entorno.
        </p>

        <a href="#contacto" class="fin-strategy__cta">
          Conoce cómo trabajamos
          <span>→</span>
        </a>
      </div>

      <!-- RIGHT GRID -->
      <div class="fin-strategy__grid">

        <!-- DIAGNÓSTICO -->
        <article class="fin-strategy__card">

          <div class="fin-strategy__icon">
            <svg
              viewBox="0 0 64 64"
              aria-hidden="true"
            >
              <circle
                cx="27"
                cy="27"
                r="16"
              />

              <line
                x1="39"
                y1="39"
                x2="53"
                y2="53"
              />

              <line
                x1="45"
                y1="45"
                x2="51"
                y2="39"
              />
            </svg>
          </div>

          <span class="fin-strategy__mini-line"></span>

          <h3>
            Entender<br>
            el punto de partida
          </h3>

          <p>
            Revisamos estructura financiera, activos, pasivos,
            liquidez, objetivos y contexto.
          </p>

        </article>

        <!-- DISEÑO -->
        <article class="fin-strategy__card">

          <div class="fin-strategy__icon">
            <svg
              viewBox="0 0 64 64"
              aria-hidden="true"
            >
              <circle
                cx="32"
                cy="32"
                r="20"
              />

              <path
                d="M24 40L30 26L44 20L38 34Z"
              />

              <circle
                cx="34"
                cy="30"
                r="2"
              />
            </svg>
          </div>

          <span class="fin-strategy__mini-line"></span>

          <h3>
            Diseñar<br>
            el camino
          </h3>

          <p>
            Construimos una estrategia priorizada con horizontes,
            acciones y criterios de decisión.
          </p>

        </article>

        <!-- EJECUCIÓN -->
        <article class="fin-strategy__card">

          <div class="fin-strategy__icon">
            <svg
              viewBox="0 0 64 64"
              aria-hidden="true"
            >
              <rect
                x="18"
                y="16"
                width="30"
                height="38"
                rx="2"
              />

              <rect
                x="26"
                y="11"
                width="14"
                height="8"
                rx="2"
              />

              <path d="M24 29L27 32L32 26" />
              <path d="M24 41L27 44L32 38" />

              <line
                x1="35"
                y1="30"
                x2="43"
                y2="30"
              />

              <line
                x1="35"
                y1="42"
                x2="43"
                y2="42"
              />
            </svg>
          </div>

          <span class="fin-strategy__mini-line"></span>

          <h3>
            Convertir<br>
            el plan en acción
          </h3>

          <p>
            Acompañamos la ejecución y organizamos cada etapa
            de acuerdo con el plan definido.
          </p>

        </article>

        <!-- SEGUIMIENTO -->
        <article class="fin-strategy__card">

          <div class="fin-strategy__icon">
            <svg
              viewBox="0 0 64 64"
              aria-hidden="true"
            >
              <rect
                x="14"
                y="38"
                width="9"
                height="14"
              />

              <rect
                x="28"
                y="30"
                width="9"
                height="22"
              />

              <rect
                x="42"
                y="19"
                width="9"
                height="33"
              />

              <polyline
                points="18,31 32,23 45,26 52,13"
              />

              <circle
                cx="18"
                cy="31"
                r="2"
              />

              <circle
                cx="32"
                cy="23"
                r="2"
              />

              <circle
                cx="45"
                cy="26"
                r="2"
              />

              <circle
                cx="52"
                cy="13"
                r="2"
              />
            </svg>
          </div>

          <span class="fin-strategy__mini-line"></span>

          <h3>
            Medir, ajustar<br>
            y evolucionar
          </h3>

          <p>
            Revisamos resultados, cambios de contexto y nuevas
            prioridades para mantener el rumbo.
          </p>

        </article>

      </div>

    </div>
  </section>
</template>

<style scoped>
.fin-strategy {
  padding: 145px 0;
  background: var(--fin-bg);
}

.fin-strategy__container {
  width: min(1280px, calc(100% - 80px));
  margin: 0 auto;

  display: grid;
  grid-template-columns: 0.72fr 1.28fr;

  gap: 100px;

  align-items: start;
}

/* =========================
   INTRO
========================= */

.fin-strategy__intro {
  position: sticky;
  top: 130px;

  padding-top: 10px;
}

.fin-strategy__eyebrow {
  display: block;

  margin-bottom: 60px;

  color: var(--fin-accent);

  font-size: 9px;
  font-weight: 600;

  letter-spacing: 3px;
}

.fin-strategy__intro h2 {
  max-width: 520px;

  margin-bottom: 35px;

  font-family:
    Georgia,
    'Times New Roman',
    serif;

  font-size: clamp(48px, 4.5vw, 68px);

  line-height: 1.08;

  font-weight: 400;

  letter-spacing: -2.3px;

  color: var(--fin-primary);
}

.fin-strategy__intro h2 em {
  display: block;

  color: var(--fin-accent);

  font-weight: 400;
}

.fin-strategy__line {
  width: 48px;
  height: 1px;

  margin: 38px 0;

  background: var(--fin-accent);
}

.fin-strategy__intro p {
  max-width: 500px;

  margin-bottom: 48px;

  color: var(--fin-text-soft);

  font-size: 13px;
  line-height: 1.95;
}

.fin-strategy__cta {
  width: fit-content;

  padding-bottom: 9px;

  display: flex;
  align-items: center;

  gap: 35px;

  border-bottom:
    1px solid var(--fin-accent);

  color: var(--fin-primary);

  font-size: 9px;
  font-weight: 600;

  text-transform: uppercase;
  letter-spacing: 1.7px;
}

.fin-strategy__cta span {
  color: var(--fin-accent);

  font-size: 18px;

  transition:
    transform 0.25s ease;
}

.fin-strategy__cta:hover span {
  transform: translateX(5px);
}

/* =========================
   GRID
========================= */

.fin-strategy__grid {
  display: grid;

  grid-template-columns:
    repeat(2, 1fr);

  border-top:
    1px solid var(--fin-border);

  border-left:
    1px solid var(--fin-border);
}

/* =========================
   CARD
========================= */

.fin-strategy__card {
  min-height: 390px;

  padding: 52px 48px;

  border-right:
    1px solid var(--fin-border);

  border-bottom:
    1px solid var(--fin-border);

  background:
    rgba(255, 255, 255, 0.18);

  transition:
    background 0.3s ease,
    transform 0.3s ease;
}

.fin-strategy__card:hover {
  background:
    rgba(255, 255, 255, 0.6);
}

/* =========================
   ICON
========================= */

.fin-strategy__icon {
  width: 82px;
  height: 82px;

  margin-bottom: 26px;

  display: grid;
  place-items: center;

  border-radius: 50%;

  background:
    rgba(183, 155, 100, 0.08);
}

.fin-strategy__icon svg {
  width: 48px;
  height: 48px;

  fill: none;

  stroke: var(--fin-primary);

  stroke-width: 1.7;

  stroke-linecap: round;
  stroke-linejoin: round;
}

.fin-strategy__icon svg circle,
.fin-strategy__icon svg rect,
.fin-strategy__icon svg path,
.fin-strategy__icon svg line,
.fin-strategy__icon svg polyline {
  vector-effect:
    non-scaling-stroke;
}

.fin-strategy__mini-line {
  display: block;

  width: 42px;
  height: 1px;

  margin-bottom: 26px;

  background: var(--fin-accent);
}

/* =========================
   CONTENT
========================= */

.fin-strategy__card h3 {
  margin-bottom: 23px;

  font-family:
    Georgia,
    'Times New Roman',
    serif;

  font-size: 30px;

  line-height: 1.12;

  font-weight: 400;

  color: var(--fin-primary);
}

.fin-strategy__card p {
  max-width: 330px;

  margin: 0;

  color: var(--fin-text-soft);

  font-size: 12px;
  line-height: 1.9;
}

/* =========================
   HOVER DETAIL
========================= */

.fin-strategy__card:hover
.fin-strategy__icon {
  background:
    rgba(183, 155, 100, 0.13);
}

.fin-strategy__card:hover
.fin-strategy__mini-line {
  width: 62px;
}

.fin-strategy__mini-line {
  transition:
    width 0.3s ease;
}

/* =========================
   TABLET
========================= */

@media (max-width: 1050px) {

  .fin-strategy__container {
    grid-template-columns: 1fr;

    gap: 70px;
  }

  .fin-strategy__intro {
    position: static;
  }

  .fin-strategy__intro h2 {
    max-width: 700px;
  }

  .fin-strategy__intro p {
    max-width: 650px;
  }
}

/* =========================
   MOBILE
========================= */

@media (max-width: 680px) {

  .fin-strategy {
    padding: 90px 0;
  }

  .fin-strategy__container {
    width:
      calc(100% - 36px);
  }

  .fin-strategy__eyebrow {
    margin-bottom: 35px;
  }

  .fin-strategy__intro h2 {
    font-size: 46px;

    letter-spacing: -1.8px;
  }

  .fin-strategy__grid {
    grid-template-columns: 1fr;
  }

  .fin-strategy__card {
    min-height: auto;

    padding:
      38px 28px;
  }

  .fin-strategy__icon {
    width: 70px;
    height: 70px;
  }

  .fin-strategy__icon svg {
    width: 42px;
    height: 42px;
  }

  .fin-strategy__card h3 {
    font-size: 27px;
  }
}
</style>