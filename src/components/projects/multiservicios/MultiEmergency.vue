<template>
  <section class="multi-emergency">
    <div class="emergency-container">

      <!-- LADO LADRILLO -->
      <div class="emergency-message">

        <div class="emergency-icon">
          <span>!</span>
        </div>

        <div class="emergency-copy">
          <span class="eyebrow">ATENCIÓN RÁPIDA</span>

          <h2>¿Tienes una emergencia?</h2>

          <p>
            Atendemos fugas de agua, fallas eléctricas
            y reparaciones urgentes.
          </p>
        </div>

      </div>

      <!-- LADO AZUL -->
      <div class="emergency-contact">

        <div class="whatsapp-circle">
          <span>✆</span>
        </div>

        <div class="contact-copy">
          <span>Contáctanos ahora por WhatsApp</span>

          <strong>311 123 4567</strong>

          <small>
            Atención en Tepic y alrededores
          </small>
        </div>

        <a
          href="https://wa.me/523111234567"
          target="_blank"
          rel="noopener noreferrer"
          class="emergency-button"
        >
          Solicitar ayuda
          <span>→</span>
        </a>

      </div>

    </div>
  </section>
</template>

<script setup>
</script>

<style scoped>
.multi-emergency {
  --navy: #062a50;
  --navy-dark: #031d38;
  --blue: #087ee5;
  --green: #19a957;
  --brick: #d94d2b;
  --brick-dark: #a9321b;

  padding: 0;

  font-family: 'Manrope', sans-serif;
}

.emergency-container {
  width: min(1180px, calc(100% - 40px));
  min-height: 180px;

  margin: auto;

  display: grid;
  grid-template-columns: 1fr 1fr;

  overflow: hidden;

  border-radius: 15px;

  box-shadow: 0 18px 45px rgba(6, 42, 80, 0.15);
}

/* =========================
   LADO LADRILLO
========================= */

.emergency-message {
  position: relative;
  overflow: hidden;

  display: flex;
  align-items: center;

  gap: 24px;

  padding: 38px 45px;

  color: white;

  background:
    linear-gradient(
      rgba(190, 54, 27, 0.88),
      rgba(190, 54, 27, 0.88)
    ),
    repeating-linear-gradient(
      0deg,
      transparent 0,
      transparent 37px,
      rgba(255, 255, 255, 0.18) 38px,
      rgba(255, 255, 255, 0.18) 40px
    ),
    repeating-linear-gradient(
      90deg,
      #d94d2b 0,
      #d94d2b 78px,
      #b83b21 79px,
      #b83b21 82px
    );
}

.emergency-message::after {
  content: '';

  position: absolute;

  top: -40px;
  right: -50px;

  width: 110px;
  height: 260px;

  background: var(--navy);

  transform: rotate(14deg);
}

.emergency-icon {
  position: relative;
  z-index: 2;

  width: 70px;
  height: 70px;

  flex-shrink: 0;

  display: flex;
  align-items: center;
  justify-content: center;

  color: var(--brick);

  background: white;

  border-radius: 50%;

  font-family: 'Sora', sans-serif;
  font-size: 38px;
  font-weight: 800;

  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.16);
}

.emergency-copy {
  position: relative;
  z-index: 2;
}

.eyebrow {
  display: block;

  margin-bottom: 5px;

  color: #ffd6cc;

  font-size: 9px;
  font-weight: 800;
  letter-spacing: 1.5px;
}

.emergency-copy h2 {
  margin: 0 0 8px;

  font-family: 'Sora', sans-serif;
  font-size: clamp(24px, 3vw, 32px);
  letter-spacing: -1px;
}

.emergency-copy p {
  max-width: 400px;

  margin: 0;

  color: #ffe8e1;

  font-size: 12px;
  line-height: 1.6;
}

/* =========================
   LADO AZUL
========================= */

.emergency-contact {
  position: relative;

  display: flex;
  align-items: center;

  gap: 20px;

  padding: 35px 40px;

  color: white;

  background:
    linear-gradient(
      135deg,
      var(--navy) 0%,
      #07467c 100%
    );
}

.emergency-contact::after {
  content: '';

  position: absolute;

  width: 250px;
  height: 250px;

  right: -100px;
  top: -140px;

  border: 40px solid rgba(255, 255, 255, 0.035);
  border-radius: 50%;
}

.whatsapp-circle {
  width: 68px;
  height: 68px;

  flex-shrink: 0;

  display: flex;
  align-items: center;
  justify-content: center;

  color: white;
  background: var(--green);

  border: 5px solid rgba(255, 255, 255, 0.15);
  border-radius: 50%;

  font-size: 27px;

  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
}

.contact-copy {
  position: relative;
  z-index: 2;

  display: flex;
  flex-direction: column;

  flex: 1;
}

.contact-copy > span {
  margin-bottom: 3px;

  color: #b9d3e9;

  font-size: 10px;
}

.contact-copy strong {
  font-family: 'Sora', sans-serif;

  font-size: clamp(21px, 2.5vw, 29px);
}

.contact-copy small {
  margin-top: 4px;

  color: #8eacc6;

  font-size: 9px;
}

.emergency-button {
  position: relative;
  z-index: 3;

  display: inline-flex;
  align-items: center;

  gap: 8px;

  padding: 13px 17px;

  flex-shrink: 0;

  color: white;
  background: var(--green);

  border-radius: 8px;

  font-size: 10px;
  font-weight: 800;

  text-decoration: none;

  transition:
    transform 0.2s ease,
    box-shadow 0.2s ease;
}

.emergency-button:hover {
  transform: translateY(-3px);

  box-shadow: 0 10px 25px rgba(25, 169, 87, 0.3);
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 950px) {
  .emergency-container {
    grid-template-columns: 1fr;
  }
}

@media (max-width: 600px) {
  .emergency-container {
    width: calc(100% - 30px);
  }

  .emergency-message,
  .emergency-contact {
    padding: 30px 25px;
  }

  .emergency-message {
    align-items: flex-start;
  }

  .emergency-contact {
    flex-wrap: wrap;
  }

  .emergency-button {
    width: 100%;

    justify-content: center;
  }

  .emergency-icon,
  .whatsapp-circle {
    width: 55px;
    height: 55px;
  }
}
</style>