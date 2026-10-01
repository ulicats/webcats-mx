<template>
  <section class="multi-trust">
    <div class="trust-container">

      <div class="trust-intro">
        <span class="eyebrow">SERVICIO PROFESIONAL</span>

        <h2>
          Todo lo que necesitas,
          <span>en un solo lugar.</span>
        </h2>
      </div>

      <div class="trust-items">

        <div class="trust-item">
          <div class="trust-icon blue">
            ✓
          </div>

          <div>
            <strong>Atención rápida</strong>
            <span>Respondemos tu solicitud lo antes posible.</span>
          </div>
        </div>

        <div class="trust-item">
          <div class="trust-icon brick">
            ◆
          </div>

          <div>
            <strong>Personal calificado</strong>
            <span>Experiencia para cada tipo de trabajo.</span>
          </div>
        </div>

        <div class="trust-item">
          <div class="trust-icon green">
            ✓
          </div>

          <div>
            <strong>Trabajo garantizado</strong>
            <span>Soluciones hechas para durar.</span>
          </div>
        </div>

      </div>

    </div>
  </section>
</template>

<script setup>
</script>

<style scoped>
.multi-trust {
  --navy: #062a50;
  --blue: #087ee5;
  --green: #19a957;
  --brick: #dc512e;

  position: relative;
  background: #ffffff;
  font-family: 'Manrope', sans-serif;
}

.multi-trust::after {
  content: '';

  position: absolute;
  left: 0;
  bottom: 0;

  width: 100%;
  height: 1px;

  background: #e8eef4;
}

.trust-container {
  width: min(1180px, calc(100% - 40px));
  margin: auto;

  padding: 55px 0;

  display: grid;
  grid-template-columns: 0.8fr 1.5fr;
  align-items: center;
  gap: 70px;
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
  letter-spacing: 1.8px;
}

.trust-intro h2 {
  margin: 0;

  color: var(--navy);

  font-family: 'Sora', sans-serif;
  font-size: clamp(26px, 3vw, 38px);
  line-height: 1.15;
  letter-spacing: -1.5px;
}

.trust-intro h2 span {
  display: block;
  color: var(--blue);
}

/* =========================
   ITEMS
========================= */

.trust-items {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}

.trust-item {
  display: flex;
  align-items: flex-start;
  gap: 12px;

  padding: 20px;

  background: #f8fafc;

  border: 1px solid #e8eef4;
  border-radius: 12px;
}

.trust-icon {
  width: 38px;
  height: 38px;

  flex-shrink: 0;

  display: flex;
  align-items: center;
  justify-content: center;

  color: white;

  border-radius: 9px;

  font-size: 14px;
  font-weight: 900;
}

.trust-icon.blue {
  background: var(--blue);
}

.trust-icon.brick {
  background: var(--brick);
}

.trust-icon.green {
  background: var(--green);
}

.trust-item div:last-child {
  display: flex;
  flex-direction: column;
}

.trust-item strong {
  margin-bottom: 5px;

  color: var(--navy);

  font-size: 12px;
  font-weight: 800;
}

.trust-item span {
  color: #718193;

  font-size: 10px;
  line-height: 1.5;
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 900px) {
  .trust-container {
    grid-template-columns: 1fr;
    gap: 30px;
  }
}

@media (max-width: 650px) {
  .trust-items {
    grid-template-columns: 1fr;
  }

  .trust-container {
    width: calc(100% - 30px);
    padding: 45px 0;
  }
}
</style>