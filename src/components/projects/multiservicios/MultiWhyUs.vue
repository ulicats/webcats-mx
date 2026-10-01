<template>
  <section class="multi-why-us">

    <div class="why-container">

      <!-- VISUAL -->
      <div class="why-visual">

        <img
          src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1000&q=85"
          alt="Casa moderna con mantenimiento profesional"
        />

        <div class="experience-card">
          <strong>+100</strong>
          <span>trabajos realizados</span>
        </div>

        <div class="brick-strip">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>

      </div>

      <!-- CONTENT -->
      <div class="why-content">

        <span class="eyebrow">
          ¿POR QUÉ ELEGIRNOS?
        </span>

        <h2>
          Calidad, confianza y
          <span>soluciones reales.</span>
        </h2>

        <p class="intro">
          Sabemos que cada reparación importa. Por eso trabajamos
          con atención, responsabilidad y soluciones pensadas
          para cada espacio.
        </p>

        <div class="benefits-grid">

          <div class="benefit">
            <div class="icon blue">✓</div>

            <div>
              <strong>Experiencia</strong>
              <span>Conocimiento para resolver distintos trabajos.</span>
            </div>
          </div>

          <div class="benefit">
            <div class="icon green">●</div>

            <div>
              <strong>Personal calificado</strong>
              <span>Atención profesional en cada servicio.</span>
            </div>
          </div>

          <div class="benefit">
            <div class="icon brick">◆</div>

            <div>
              <strong>Trabajo garantizado</strong>
              <span>Buscamos resultados seguros y duraderos.</span>
            </div>
          </div>

          <div class="benefit">
            <div class="icon blue">★</div>

            <div>
              <strong>Atención personalizada</strong>
              <span>Cada proyecto recibe una solución adecuada.</span>
            </div>
          </div>

          <div class="benefit">
            <div class="icon green">✓</div>

            <div>
              <strong>Materiales de calidad</strong>
              <span>Trabajamos pensando en resistencia y duración.</span>
            </div>
          </div>

          <div class="benefit">
            <div class="icon brick">$</div>

            <div>
              <strong>Precios transparentes</strong>
              <span>Cotizaciones claras antes de comenzar.</span>
            </div>
          </div>

        </div>

        <a href="#contacto" class="why-button">
          Solicitar una cotización
          <span>→</span>
        </a>

      </div>

    </div>

  </section>
</template>

<script setup>
</script>

<style scoped>
.multi-why-us {
  --navy: #062a50;
  --blue: #087ee5;
  --green: #19a957;
  --brick: #dc512e;

  padding: 90px 0;

  background: white;

  font-family: 'Manrope', sans-serif;
}

.why-container {
  width: min(1180px, calc(100% - 40px));
  margin: auto;

  display: grid;
  grid-template-columns: 0.9fr 1.1fr;
  align-items: center;

  gap: 70px;
}

/* =========================
   VISUAL
========================= */

.why-visual {
  position: relative;

  height: 570px;
}

.why-visual > img {
  width: 100%;
  height: 100%;

  object-fit: cover;

  border-radius: 0 80px 0 0;

  box-shadow: 0 20px 50px rgba(6, 42, 80, 0.14);
}

/* =========================
   TARJETA
========================= */

.experience-card {
  position: absolute;

  right: -35px;
  bottom: 55px;

  width: 150px;
  height: 120px;

  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;

  color: white;
  background: var(--navy);

  border: 7px solid white;
  border-radius: 13px;

  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.18);
}

.experience-card strong {
  font-family: 'Sora', sans-serif;
  font-size: 30px;
}

.experience-card span {
  margin-top: 3px;

  color: #bcd1e5;

  font-size: 9px;
}

/* =========================
   LADRILLOS
========================= */

.brick-strip {
  position: absolute;

  left: -30px;
  bottom: -25px;

  width: 230px;

  display: grid;
  grid-template-columns: repeat(3, 1fr);

  gap: 5px;

  transform: rotate(-2deg);
}

.brick-strip span {
  height: 27px;

  background: var(--brick);

  border-radius: 3px;

  box-shadow:
    inset 0 -4px 0 rgba(0, 0, 0, 0.08);
}

.brick-strip span:nth-child(2),
.brick-strip span:nth-child(5) {
  transform: translateX(10px);
}

/* =========================
   CONTENT
========================= */

.eyebrow {
  display: block;

  margin-bottom: 9px;

  color: var(--blue);

  font-size: 10px;
  font-weight: 800;
  letter-spacing: 2px;
}

.why-content h2 {
  margin: 0;

  color: var(--navy);

  font-family: 'Sora', sans-serif;

  font-size: clamp(32px, 4vw, 47px);
  line-height: 1.12;
  letter-spacing: -2px;
}

.why-content h2 span {
  display: block;

  color: var(--blue);
}

.intro {
  max-width: 580px;

  margin: 20px 0 32px;

  color: #68798a;

  font-size: 13px;
  line-height: 1.8;
}

/* =========================
   BENEFICIOS
========================= */

.benefits-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);

  gap: 24px 28px;
}

.benefit {
  display: flex;
  align-items: flex-start;

  gap: 12px;
}

.icon {
  width: 39px;
  height: 39px;

  flex-shrink: 0;

  display: flex;
  align-items: center;
  justify-content: center;

  color: white;

  border-radius: 9px;

  font-size: 13px;
  font-weight: 900;
}

.icon.blue {
  background: var(--blue);
}

.icon.green {
  background: var(--green);
}

.icon.brick {
  background: var(--brick);
}

.benefit > div:last-child {
  display: flex;
  flex-direction: column;
}

.benefit strong {
  margin-bottom: 4px;

  color: var(--navy);

  font-size: 11px;
  font-weight: 800;
}

.benefit span {
  color: #7a8998;

  font-size: 9px;
  line-height: 1.5;
}

/* =========================
   BUTTON
========================= */

.why-button {
  display: inline-flex;
  align-items: center;

  gap: 10px;

  margin-top: 35px;
  padding: 14px 20px;

  color: white;
  background: var(--navy);

  border-radius: 8px;

  font-size: 11px;
  font-weight: 800;

  text-decoration: none;

  transition:
    background 0.2s ease,
    transform 0.2s ease;
}

.why-button:hover {
  background: var(--blue);

  transform: translateY(-2px);
}

.why-button span {
  transition: transform 0.2s ease;
}

.why-button:hover span {
  transform: translateX(4px);
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 900px) {
  .why-container {
    grid-template-columns: 1fr;

    gap: 60px;
  }

  .why-visual {
    height: 450px;
  }

  .experience-card {
    right: 20px;
  }
}

@media (max-width: 600px) {
  .multi-why-us {
    padding: 65px 0;
  }

  .why-container {
    width: calc(100% - 30px);
  }

  .why-visual {
    height: 360px;
  }

  .why-visual > img {
    border-radius: 0 45px 0 0;
  }

  .benefits-grid {
    grid-template-columns: 1fr;
  }

  .experience-card {
    width: 130px;
    height: 100px;

    right: 10px;
    bottom: 25px;
  }

  .brick-strip {
    left: 10px;
    bottom: -20px;

    width: 170px;
  }
}
</style>