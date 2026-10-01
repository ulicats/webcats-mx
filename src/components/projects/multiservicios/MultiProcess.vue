<template>
  <section class="multi-process">

    <div class="process-container">

      <!-- HEADER -->
      <div class="section-header">

        <span class="eyebrow">
          ¿CÓMO TRABAJAMOS?
        </span>

        <h2>
          Es muy fácil,
          <span>nosotros nos encargamos.</span>
        </h2>

        <p>
          Desde el primer mensaje hasta terminar el trabajo,
          buscamos que solicitar un servicio sea rápido y sencillo.
        </p>

      </div>

      <!-- PROCESO -->
      <div class="process-grid">

        <!-- PASO 1 -->
        <div class="process-step">

          <span class="step-number">
            01
          </span>

          <div class="step-icon blue">
            ✉
          </div>

          <div class="step-content">
            <h3>Solicita</h3>

            <p>
              Cuéntanos qué necesitas
              por WhatsApp.
            </p>
          </div>

          <div class="connector">
            <span>→</span>
          </div>

        </div>

        <!-- PASO 2 -->
        <div class="process-step">

          <span class="step-number">
            02
          </span>

          <div class="step-icon brick">
            $
          </div>

          <div class="step-content">
            <h3>Cotizamos</h3>

            <p>
              Preparamos una cotización
              clara para tu servicio.
            </p>
          </div>

          <div class="connector">
            <span>→</span>
          </div>

        </div>

        <!-- PASO 3 -->
        <div class="process-step">

          <span class="step-number">
            03
          </span>

          <div class="step-icon green">
            ✓
          </div>

          <div class="step-content">
            <h3>Agendamos</h3>

            <p>
              Coordinamos contigo
              fecha y horario.
            </p>
          </div>

          <div class="connector">
            <span>→</span>
          </div>

        </div>

        <!-- PASO 4 -->
        <div class="process-step">

          <span class="step-number">
            04
          </span>

          <div class="step-icon navy">
            ★
          </div>

          <div class="step-content">
            <h3>Resolvemos</h3>

            <p>
              Realizamos el trabajo
              con calidad y atención.
            </p>
          </div>

        </div>

      </div>

      <!-- CTA PEQUEÑO -->
      <div class="process-cta">

        <span>
          ¿Tienes algo que reparar?
        </span>

        <a
          href="https://wa.me/523111234567"
          target="_blank"
          rel="noopener noreferrer"
        >
          Comenzar ahora
          <strong>→</strong>
        </a>

      </div>

    </div>

  </section>
</template>

<script setup>
</script>

<style scoped>
.multi-process {
  --navy: #062a50;
  --blue: #087ee5;
  --green: #19a957;
  --brick: #dc512e;

  position: relative;

  padding: 90px 0;

  background: #f5f8fb;

  font-family: 'Manrope', sans-serif;
}

.process-container {
  width: min(1180px, calc(100% - 40px));
  margin: auto;
}

/* =========================
   HEADER
========================= */

.section-header {
  max-width: 620px;

  margin: 0 auto 55px;

  text-align: center;
}

.eyebrow {
  display: block;

  margin-bottom: 8px;

  color: var(--blue);

  font-size: 10px;
  font-weight: 800;
  letter-spacing: 2px;
}

.section-header h2 {
  margin: 0;

  color: var(--navy);

  font-family: 'Sora', sans-serif;

  font-size: clamp(30px, 4vw, 44px);

  line-height: 1.12;
  letter-spacing: -1.8px;
}

.section-header h2 span {
  color: var(--blue);
}

.section-header p {
  max-width: 550px;

  margin: 17px auto 0;

  color: #718193;

  font-size: 12px;
  line-height: 1.7;
}

/* =========================
   GRID
========================= */

.process-grid {
  position: relative;

  display: grid;
  grid-template-columns: repeat(4, 1fr);

  gap: 18px;
}

/* Línea del recorrido */

.process-grid::before {
  content: '';

  position: absolute;

  top: 54px;
  left: 12%;

  width: 76%;
  height: 2px;

  background:
    repeating-linear-gradient(
      90deg,
      #c9d6e1 0,
      #c9d6e1 7px,
      transparent 7px,
      transparent 13px
    );
}

/* =========================
   PASO
========================= */

.process-step {
  position: relative;
  z-index: 2;

  min-height: 230px;

  padding: 32px 25px 25px;

  text-align: center;

  background: white;

  border: 1px solid #e1e9ef;
  border-radius: 13px;

  box-shadow: 0 10px 25px rgba(6, 42, 80, 0.05);

  transition:
    transform 0.25s ease,
    box-shadow 0.25s ease;
}

.process-step:hover {
  transform: translateY(-6px);

  box-shadow: 0 18px 35px rgba(6, 42, 80, 0.11);
}

.step-number {
  position: absolute;

  top: 13px;
  right: 15px;

  color: #dfe8ef;

  font-family: 'Sora', sans-serif;

  font-size: 22px;
  font-weight: 800;
}

/* =========================
   ICONOS
========================= */

.step-icon {
  position: relative;
  z-index: 3;

  width: 58px;
  height: 58px;

  margin: 0 auto 20px;

  display: flex;
  align-items: center;
  justify-content: center;

  color: white;

  border: 5px solid white;
  border-radius: 50%;

  font-size: 17px;
  font-weight: 900;

  box-shadow: 0 7px 20px rgba(6, 42, 80, 0.15);
}

.step-icon.blue {
  background: var(--blue);
}

.step-icon.brick {
  background: var(--brick);
}

.step-icon.green {
  background: var(--green);
}

.step-icon.navy {
  background: var(--navy);
}

/* =========================
   CONTENT
========================= */

.step-content h3 {
  margin: 0 0 9px;

  color: var(--navy);

  font-family: 'Sora', sans-serif;
  font-size: 16px;
}

.step-content p {
  max-width: 180px;

  margin: auto;

  color: #748596;

  font-size: 10px;
  line-height: 1.65;
}

/* =========================
   FLECHAS
========================= */

.connector {
  position: absolute;

  z-index: 10;

  top: 43px;
  right: -27px;

  width: 35px;
  height: 24px;

  display: flex;
  align-items: center;
  justify-content: center;

  color: var(--blue);
  background: #f5f8fb;

  font-size: 18px;
  font-weight: 800;
}

/* =========================
   CTA
========================= */

.process-cta {
  margin-top: 35px;
  padding: 20px 25px;

  display: flex;
  align-items: center;
  justify-content: center;

  gap: 20px;

  color: #697b8c;

  font-size: 11px;
}

.process-cta a {
  display: inline-flex;
  align-items: center;

  gap: 8px;

  color: var(--blue);

  font-weight: 800;

  text-decoration: none;
}

.process-cta strong {
  transition: transform 0.2s ease;
}

.process-cta a:hover strong {
  transform: translateX(5px);
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 900px) {
  .process-grid {
    grid-template-columns: repeat(2, 1fr);
  }

  .process-grid::before,
  .connector {
    display: none;
  }
}

@media (max-width: 550px) {
  .multi-process {
    padding: 65px 0;
  }

  .process-container {
    width: calc(100% - 30px);
  }

  .process-grid {
    grid-template-columns: 1fr;
  }

  .process-step {
    min-height: auto;
  }

  .process-cta {
    flex-direction: column;

    text-align: center;
  }
}
</style>