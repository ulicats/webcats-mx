<template>
  <section id="inicio" class="fin-hero">

    <div class="fin-hero__grid"></div>

    <div class="fin-hero__glow fin-hero__glow--one"></div>
    <div class="fin-hero__glow fin-hero__glow--two"></div>

    <div class="fin-hero__container">

      <div class="fin-hero__content">

        <div class="fin-hero__eyebrow">
          <span></span>
          Estrategia · Patrimonio · Crecimiento
        </div>

        <h1>
          Decisiones financieras
          <em>con visión.</em>
        </h1>

        <p class="fin-hero__description">
          Diseñamos estrategias financieras y patrimoniales para personas,
          familias y empresas que buscan crecer con claridad, disciplina
          y perspectiva de largo plazo.
        </p>

        <div class="fin-hero__actions">
          <a href="#contacto" class="fin-hero__primary">
            Solicitar asesoría
            <span>↗</span>
          </a>

          <a href="#servicios" class="fin-hero__secondary">
            Conocer servicios
            <span>↓</span>
          </a>
        </div>

      </div>

      <div class="fin-hero__visual">

        <div class="fin-hero__visual-label">
          <span>01</span>
          Perspectiva financiera
        </div>

        <div class="fin-hero__chart">

          <svg
            viewBox="0 0 600 390"
            preserveAspectRatio="none"
            aria-hidden="true"
          >
            <defs>
              <linearGradient id="chartArea" x1="0" y1="0" x2="0" y2="1">
                <stop offset="0%" stop-color="#b79b64" stop-opacity="0.25" />
                <stop offset="100%" stop-color="#b79b64" stop-opacity="0" />
              </linearGradient>
            </defs>

            <path
              class="fin-hero__area"
              d="M0 340
                 C55 330 80 305 125 315
                 C175 325 190 260 240 270
                 C290 280 305 205 355 220
                 C400 233 430 160 470 170
                 C520 180 535 90 600 65
                 L600 390
                 L0 390 Z"
            />

            <path
              class="fin-hero__line"
              d="M0 340
                 C55 330 80 305 125 315
                 C175 325 190 260 240 270
                 C290 280 305 205 355 220
                 C400 233 430 160 470 170
                 C520 180 535 90 600 65"
            />
          </svg>

          <div class="fin-hero__chart-lines">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>

          <div class="fin-hero__chart-point">
            <span></span>
            <div>
              <small>VISIÓN</small>
              <strong>2035</strong>
            </div>
          </div>

        </div>

        <div class="fin-hero__metrics">

          <div>
            <span>ENFOQUE</span>
            <strong>Largo plazo</strong>
          </div>

          <div>
            <span>ESTRATEGIA</span>
            <strong>Personalizada</strong>
          </div>

          <div>
            <span>OBJETIVO</span>
            <strong>Crecimiento</strong>
          </div>

        </div>

      </div>

    </div>

    <div class="fin-hero__bottom">
      <span>VERTEX / FINANCIAL ADVISORS</span>

      <div class="fin-hero__scroll">
        Explorar
        <span>↓</span>
      </div>
    </div>

  </section>
</template>

<style scoped>
.fin-hero {
  position: relative;
  min-height: 100vh;
  background:
    radial-gradient(circle at 75% 35%, #1b3449 0%, transparent 32%),
    linear-gradient(135deg, #0d1b2a 0%, #0b1723 60%, #08131e 100%);
  color: var(--fin-white);
  display: flex;
  align-items: center;
  overflow: hidden;
}

.fin-hero__grid {
  position: absolute;
  inset: 0;
  opacity: 0.055;
  background-image:
    linear-gradient(rgba(255, 255, 255, 1) 1px, transparent 1px),
    linear-gradient(90deg, rgba(255, 255, 255, 1) 1px, transparent 1px);
  background-size: 90px 90px;
  pointer-events: none;
}

.fin-hero__glow {
  position: absolute;
  border-radius: 50%;
  filter: blur(80px);
  pointer-events: none;
}

.fin-hero__glow--one {
  width: 420px;
  height: 420px;
  top: 10%;
  right: -150px;
  background: rgba(183, 155, 100, 0.08);
}

.fin-hero__glow--two {
  width: 300px;
  height: 300px;
  bottom: -170px;
  left: 30%;
  background: rgba(57, 101, 136, 0.12);
}

.fin-hero__container {
  position: relative;
  z-index: 2;
  width: min(1380px, calc(100% - 80px));
  margin: 0 auto;
  padding: 160px 0 120px;
  display: grid;
  grid-template-columns: 0.95fr 1.05fr;
  gap: 100px;
  align-items: center;
}

.fin-hero__content {
  max-width: 670px;
}

.fin-hero__eyebrow {
  display: flex;
  align-items: center;
  gap: 15px;
  margin-bottom: 32px;
  color: var(--fin-accent-light);
  font-size: 10px;
  text-transform: uppercase;
  letter-spacing: 3px;
}

.fin-hero__eyebrow span {
  width: 45px;
  height: 1px;
  background: var(--fin-accent);
}

.fin-hero h1 {
  margin-bottom: 32px;
  font-family: Georgia, 'Times New Roman', serif;
  font-size: clamp(58px, 6vw, 96px);
  line-height: 0.97;
  font-weight: 400;
  letter-spacing: -4px;
}

.fin-hero h1 em {
  display: block;
  color: var(--fin-accent-light);
  font-weight: 400;
}

.fin-hero__description {
  max-width: 590px;
  margin-bottom: 42px;
  color: rgba(255, 255, 255, 0.6);
  font-size: 16px;
  line-height: 1.9;
}

.fin-hero__actions {
  display: flex;
  align-items: center;
  gap: 30px;
}

.fin-hero__primary {
  min-width: 215px;
  padding: 19px 22px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  background: var(--fin-accent);
  color: var(--fin-primary);
  font-size: 11px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  transition:
    transform 0.25s ease,
    background 0.25s ease;
}

.fin-hero__primary:hover {
  transform: translateY(-3px);
  background: var(--fin-accent-light);
}

.fin-hero__primary span {
  font-size: 17px;
}

.fin-hero__secondary {
  display: flex;
  gap: 18px;
  align-items: center;
  color: rgba(255, 255, 255, 0.7);
  font-size: 11px;
  text-transform: uppercase;
  letter-spacing: 1.5px;
}

.fin-hero__secondary span {
  color: var(--fin-accent);
}

.fin-hero__visual {
  position: relative;
  min-height: 520px;
  padding: 40px;
  border: 1px solid rgba(255, 255, 255, 0.12);
  background: rgba(255, 255, 255, 0.025);
  backdrop-filter: blur(5px);
}

.fin-hero__visual::before,
.fin-hero__visual::after {
  content: '';
  position: absolute;
  width: 50px;
  height: 50px;
}

.fin-hero__visual::before {
  top: -1px;
  left: -1px;
  border-top: 1px solid var(--fin-accent);
  border-left: 1px solid var(--fin-accent);
}

.fin-hero__visual::after {
  right: -1px;
  bottom: -1px;
  border-right: 1px solid var(--fin-accent);
  border-bottom: 1px solid var(--fin-accent);
}

.fin-hero__visual-label {
  display: flex;
  gap: 18px;
  align-items: center;
  color: rgba(255, 255, 255, 0.45);
  font-size: 9px;
  text-transform: uppercase;
  letter-spacing: 2px;
}

.fin-hero__visual-label span {
  color: var(--fin-accent);
}

.fin-hero__chart {
  position: relative;
  height: 340px;
  margin-top: 25px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.12);
}

.fin-hero__chart svg {
  position: absolute;
  inset: 0;
  z-index: 2;
  width: 100%;
  height: 100%;
}

.fin-hero__area {
  fill: url(#chartArea);
}

.fin-hero__line {
  fill: none;
  stroke: var(--fin-accent-light);
  stroke-width: 2;
  vector-effect: non-scaling-stroke;
  stroke-dasharray: 1000;
  stroke-dashoffset: 1000;
  animation: drawChart 2.5s ease forwards 0.5s;
}

@keyframes drawChart {
  to {
    stroke-dashoffset: 0;
  }
}

.fin-hero__chart-lines {
  position: absolute;
  inset: 0;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
}

.fin-hero__chart-lines span {
  width: 100%;
  height: 1px;
  background: rgba(255, 255, 255, 0.055);
}

.fin-hero__chart-point {
  position: absolute;
  z-index: 3;
  top: 15%;
  right: 3%;
  display: flex;
  align-items: center;
  gap: 12px;
}

.fin-hero__chart-point > span {
  width: 10px;
  height: 10px;
  border: 2px solid var(--fin-primary);
  border-radius: 50%;
  background: var(--fin-accent-light);
  box-shadow: 0 0 0 6px rgba(183, 155, 100, 0.15);
}

.fin-hero__chart-point div {
  display: flex;
  flex-direction: column;
}

.fin-hero__chart-point small {
  color: rgba(255, 255, 255, 0.4);
  font-size: 7px;
  letter-spacing: 2px;
}

.fin-hero__chart-point strong {
  margin-top: 3px;
  font-family: Georgia, serif;
  font-size: 17px;
  font-weight: 400;
  color: var(--fin-accent-light);
}

.fin-hero__metrics {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  padding-top: 28px;
}

.fin-hero__metrics div {
  padding-left: 20px;
  border-left: 1px solid rgba(255, 255, 255, 0.1);
}

.fin-hero__metrics span,
.fin-hero__metrics strong {
  display: block;
}

.fin-hero__metrics span {
  margin-bottom: 8px;
  color: rgba(255, 255, 255, 0.3);
  font-size: 7px;
  letter-spacing: 2px;
}

.fin-hero__metrics strong {
  font-family: Georgia, serif;
  font-size: 14px;
  font-weight: 400;
  color: rgba(255, 255, 255, 0.8);
}

.fin-hero__bottom {
  position: absolute;
  z-index: 2;
  left: 50%;
  bottom: 25px;
  width: min(1380px, calc(100% - 80px));
  transform: translateX(-50%);
  display: flex;
  justify-content: space-between;
  color: rgba(255, 255, 255, 0.25);
  font-size: 7px;
  letter-spacing: 2.5px;
}

.fin-hero__scroll {
  display: flex;
  gap: 14px;
  align-items: center;
}

.fin-hero__scroll span {
  color: var(--fin-accent);
}

@media (max-width: 1050px) {
  .fin-hero__container {
    grid-template-columns: 1fr;
    gap: 70px;
    padding-top: 150px;
  }

  .fin-hero__content {
    max-width: 800px;
  }

  .fin-hero__visual {
    min-height: 470px;
  }

  .fin-hero {
    min-height: auto;
  }
}

@media (max-width: 600px) {
  .fin-hero {
   padding-top: 82px;
  }

  .fin-hero__container {
    width: calc(100% - 36px);
    padding: 130px 0 90px;
    gap: 55px;
  }

  .fin-hero h1 {
    font-size: clamp(48px, 15vw, 68px);
    letter-spacing: -2.5px;
  }

  .fin-hero__description {
    font-size: 14px;
  }

  .fin-hero__actions {
    flex-direction: column;
    align-items: stretch;
  }

  .fin-hero__primary {
    width: 100%;
  }

  .fin-hero__secondary {
    justify-content: center;
  }

  .fin-hero__visual {
    min-height: 390px;
    padding: 25px 18px;
  }

  .fin-hero__chart {
    height: 240px;
  }

  .fin-hero__metrics {
    gap: 10px;
  }

  .fin-hero__metrics div {
    padding-left: 8px;
  }

  .fin-hero__metrics strong {
    font-size: 11px;
  }

  .fin-hero__bottom {
    display: none;
  }
}
</style>