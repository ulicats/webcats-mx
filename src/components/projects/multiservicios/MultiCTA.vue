<template>
  <section class="multi-cta">

    <!-- DECORACIÓN -->
    <div class="cta-house"></div>

    <div class="brick-pattern"></div>

    <div class="cta-container">

      <!-- TEXTO -->
      <div class="cta-content">

        <span class="eyebrow">
          ESTAMOS LISTOS PARA AYUDARTE
        </span>

        <h2>
          ¿Tienes algo que
          <span>reparar o mejorar?</span>
        </h2>

        <p>
          Cuéntanos qué necesitas y solicita una cotización.
          Atendemos proyectos de reparación, mantenimiento
          y mejora para hogares y negocios.
        </p>

        <div class="cta-actions">

          <a
            href="https://wa.me/523111234567"
            target="_blank"
            rel="noopener noreferrer"
            class="whatsapp-button"
          >
            <span class="wa-icon">✆</span>

            <div>
              <small>Escríbenos por</small>
              <strong>WhatsApp</strong>
            </div>

            <span class="arrow">→</span>
          </a>

          <a
            href="tel:+523111234567"
            class="phone-button"
          >
            <span class="phone-icon">☎</span>

            <div>
              <small>Llámanos</small>
              <strong>311 123 4567</strong>
            </div>
          </a>

        </div>

      </div>

      <!-- CASA / SERVICIOS -->
      <div class="cta-visual">

        <div class="house">

          <div class="roof"></div>

          <div class="house-body">

            <div class="window window-one">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </div>

            <div class="door"></div>

            <div class="window window-two">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </div>

          </div>

        </div>

        <!-- SERVICIOS FLOTANTES -->

        <div class="service-bubble plumbing">
          <span>●</span>
          <div>
            <small>Servicio</small>
            <strong>Fontanería</strong>
          </div>
        </div>

        <div class="service-bubble electricity">
          <span>⚡</span>
          <div>
            <small>Servicio</small>
            <strong>Electricidad</strong>
          </div>
        </div>

        <div class="service-bubble masonry">
          <span>▦</span>
          <div>
            <small>Servicio</small>
            <strong>Albañilería</strong>
          </div>
        </div>

      </div>

    </div>

    <!-- BARRA INFERIOR -->
    <div class="cta-bottom">

      <div class="cta-bottom-container">

        <div>
          <span class="check blue">✓</span>
          <strong>Atención rápida</strong>
        </div>

        <div>
          <span class="check green">✓</span>
          <strong>Trabajo profesional</strong>
        </div>

        <div>
          <span class="check brick">✓</span>
          <strong>Cotización clara</strong>
        </div>

        <div>
          <span class="check blue">✓</span>
          <strong>Tepic y alrededores</strong>
        </div>

      </div>

    </div>

  </section>
</template>

<script setup>
</script>

<style scoped>
.multi-cta {
  --navy: #062a50;
  --navy-dark: #031d38;
  --blue: #087ee5;
  --green: #19a957;
  --brick: #dc512e;

  position: relative;

  overflow: hidden;

  color: white;

  background:
    radial-gradient(
      circle at 80% 30%,
      #0a4a82 0%,
      #062f58 30%,
      #031d38 70%
    );

  font-family: 'Manrope', sans-serif;
}

/* =========================
   CONTAINER
========================= */

.cta-container {
  position: relative;
  z-index: 5;

  width: min(1180px, calc(100% - 40px));
  min-height: 480px;

  margin: auto;

  display: grid;
  grid-template-columns: 1fr 0.85fr;
  align-items: center;

  gap: 70px;

  padding: 70px 0;
}

/* =========================
   CONTENT
========================= */

.eyebrow {
  display: block;

  margin-bottom: 10px;

  color: #69baff;

  font-size: 10px;
  font-weight: 800;

  letter-spacing: 2px;
}

.cta-content h2 {
  max-width: 600px;

  margin: 0;

  font-family: 'Sora', sans-serif;

  font-size: clamp(35px, 5vw, 53px);
  line-height: 1.08;

  letter-spacing: -2px;
}

.cta-content h2 span {
  display: block;

  color: #56b2ff;
}

.cta-content > p {
  max-width: 550px;

  margin: 22px 0 30px;

  color: #aac0d3;

  font-size: 13px;
  line-height: 1.8;
}

/* =========================
   BOTONES
========================= */

.cta-actions {
  display: flex;
  flex-wrap: wrap;

  gap: 12px;
}

.whatsapp-button,
.phone-button {
  min-height: 58px;

  display: flex;
  align-items: center;

  gap: 12px;

  padding: 10px 17px;

  border-radius: 9px;

  text-decoration: none;

  transition:
    transform 0.2s ease,
    box-shadow 0.2s ease;
}

.whatsapp-button {
  color: white;
  background: var(--green);

  box-shadow: 0 12px 30px rgba(25, 169, 87, 0.2);
}

.phone-button {
  color: white;

  background: rgba(255, 255, 255, 0.08);

  border: 1px solid rgba(255, 255, 255, 0.16);
}

.whatsapp-button:hover,
.phone-button:hover {
  transform: translateY(-3px);
}

.wa-icon,
.phone-icon {
  width: 34px;
  height: 34px;

  display: flex;
  align-items: center;
  justify-content: center;

  border-radius: 50%;

  font-size: 15px;
}

.wa-icon {
  background: rgba(255, 255, 255, 0.15);
}

.phone-icon {
  background: var(--blue);
}

.whatsapp-button div,
.phone-button div {
  display: flex;
  flex-direction: column;
}

.whatsapp-button small,
.phone-button small {
  margin-bottom: 2px;

  color: rgba(255, 255, 255, 0.7);

  font-size: 8px;
}

.whatsapp-button strong,
.phone-button strong {
  font-size: 11px;
}

.arrow {
  margin-left: 10px;

  font-size: 18px;
}

/* =========================
   CASA
========================= */

.cta-visual {
  position: relative;

  height: 330px;

  display: flex;
  align-items: flex-end;
  justify-content: center;
}

.house {
  position: relative;

  width: 280px;
  height: 220px;
}

.roof {
  position: absolute;

  z-index: 2;

  top: -85px;
  left: 35px;

  width: 210px;
  height: 210px;

  background: #f1f5f8;

  border-radius: 7px 0 0 0;

  transform: rotate(45deg);
}

.house-body {
  position: absolute;

  z-index: 3;

  left: 20px;
  bottom: 0;

  width: 240px;
  height: 180px;

  display: flex;
  align-items: flex-end;
  justify-content: space-around;

  padding: 25px;

  background: white;

  border-radius: 4px;
}

/* =========================
   PUERTA
========================= */

.door {
  width: 55px;
  height: 105px;

  background: var(--navy);

  border-radius: 4px 4px 0 0;
}

/* =========================
   VENTANAS
========================= */

.window {
  width: 50px;
  height: 55px;

  margin-bottom: 35px;

  display: grid;
  grid-template-columns: 1fr 1fr;

  gap: 3px;

  padding: 4px;

  background: var(--navy);
}

.window span {
  background: #8ed0ff;
}

/* =========================
   SERVICE BUBBLES
========================= */

.service-bubble {
  position: absolute;
  z-index: 10;

  min-width: 135px;

  display: flex;
  align-items: center;

  gap: 9px;

  padding: 10px 13px;

  color: var(--navy);
  background: white;

  border-radius: 9px;

  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.22);
}

.service-bubble > span {
  width: 30px;
  height: 30px;

  display: flex;
  align-items: center;
  justify-content: center;

  color: white;

  border-radius: 7px;

  font-size: 12px;
  font-weight: 800;
}

.service-bubble div {
  display: flex;
  flex-direction: column;
}

.service-bubble small {
  color: #8996a2;

  font-size: 7px;
}

.service-bubble strong {
  margin-top: 2px;

  font-size: 9px;
}

.plumbing {
  left: 0;
  top: 75px;
}

.plumbing > span {
  background: var(--blue);
}

.electricity {
  right: -10px;
  top: 30px;
}

.electricity > span {
  background: var(--green);
}

.masonry {
  right: 0;
  bottom: 15px;
}

.masonry > span {
  background: var(--brick);
}

/* =========================
   LADRILLOS DE FONDO
========================= */

.brick-pattern {
  position: absolute;

  left: -80px;
  top: 40px;

  width: 300px;
  height: 200px;

  opacity: 0.035;

  background-image:
    linear-gradient(335deg, white 23px, transparent 23px),
    linear-gradient(155deg, white 23px, transparent 23px),
    linear-gradient(335deg, white 23px, transparent 23px),
    linear-gradient(155deg, white 23px, transparent 23px);

  background-size: 58px 58px;
}

/* =========================
   BOTTOM
========================= */

.cta-bottom {
  position: relative;
  z-index: 10;

  background: rgba(0, 0, 0, 0.16);

  border-top: 1px solid rgba(255, 255, 255, 0.08);
}

.cta-bottom-container {
  width: min(1180px, calc(100% - 40px));

  margin: auto;

  display: grid;
  grid-template-columns: repeat(4, 1fr);
}

.cta-bottom-container > div {
  min-height: 70px;

  display: flex;
  align-items: center;
  justify-content: center;

  gap: 9px;

  border-right: 1px solid rgba(255, 255, 255, 0.08);
}

.cta-bottom-container > div:first-child {
  border-left: 1px solid rgba(255, 255, 255, 0.08);
}

.check {
  width: 23px;
  height: 23px;

  display: flex;
  align-items: center;
  justify-content: center;

  color: white;

  border-radius: 50%;

  font-size: 9px;
  font-weight: 900;
}

.check.blue {
  background: var(--blue);
}

.check.green {
  background: var(--green);
}

.check.brick {
  background: var(--brick);
}

.cta-bottom strong {
  color: #c4d3df;

  font-size: 9px;
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 900px) {
  .cta-container {
    grid-template-columns: 1fr;

    padding-bottom: 90px;
  }

  .cta-visual {
    max-width: 520px;

    width: 100%;

    margin: auto;
  }

  .cta-bottom-container {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 550px) {
  .cta-container {
    width: calc(100% - 30px);

    gap: 50px;

    padding: 60px 0 80px;
  }

  .cta-actions {
    flex-direction: column;
  }

  .whatsapp-button,
  .phone-button {
    width: 100%;

    box-sizing: border-box;
  }

  .cta-visual {
    transform: scale(0.82);

    margin-top: -20px;
    margin-bottom: -30px;
  }

  .cta-bottom-container {
    width: 100%;

    grid-template-columns: 1fr 1fr;
  }

  .cta-bottom-container > div {
    padding: 10px;

    text-align: center;
  }
}
</style>