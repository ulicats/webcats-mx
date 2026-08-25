<template>
  <section id="ubicacion" class="gym-location">
    <div class="gym-location__container">

      <div class="gym-location__header">
        <div>
          <div class="gym-location__eyebrow">
            <span></span>
            ENCUÉNTRANOS
          </div>

          <h2 class="gym-location__title">
            TU PRÓXIMO<br />
            <span>RETO EMPIEZA AQUÍ.</span>
          </h2>
        </div>

        <div class="gym-location__intro">
          <p>
            Visita Iron Pulse, conoce las instalaciones y descubre un
            espacio diseñado para entrenar con intensidad, comodidad y enfoque.
          </p>
        </div>
      </div>

      <div class="gym-location__grid">

        <!-- INFO -->
        <div class="gym-location__info">
          <div class="gym-location__block">
            <span>UBICACIÓN</span>
            <strong>Av. Insurgentes 245</strong>
            <p>Tepic, Nayarit, México</p>
          </div>

          <div class="gym-location__block">
            <span>HORARIO</span>
            <strong>05:00 — 21:00</strong>
            <p>Lunes a domingo</p>
          </div>

          <div class="gym-location__block">
            <span>CONTACTO</span>
            <strong>+52 311 000 0000</strong>
            <p>WhatsApp · llamadas</p>
          </div>

          <div class="gym-location__block">
            <span>CORREO</span>
            <strong>hola@ironpulse.mx</strong>
            <p>Atención general</p>
          </div>

          <a
            href="https://maps.google.com"
            target="_blank"
            rel="noopener noreferrer"
            class="gym-location__button"
          >
            ABRIR EN MAPS
            <span>↗</span>
          </a>
        </div>

        <!-- MAP -->
        <div class="gym-location__map">
          <iframe
            title="Ubicación de Iron Pulse"
            src="https://www.google.com/maps?q=Tepic,Nayarit&output=embed"
            loading="lazy"
            allowfullscreen
          ></iframe>
         
        </div>

      </div>

    </div>
  </section>
</template>

<script setup>
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,700;1,800;1,900&family=Inter:wght@400;500;600&display=swap");

.gym-location {
  padding: 135px 0;
  background: #eeeeea;
  color: #090909;
  font-family: "Inter", sans-serif;
}

.gym-location__container {
  width: min(1400px, calc(100% - 48px));
  margin: 0 auto;
}

.gym-location__header {
  display: grid;
  grid-template-columns: 1.3fr 0.7fr;
  gap: 80px;
  align-items: end;
  margin-bottom: 70px;
}

.gym-location__eyebrow {
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

.gym-location__eyebrow span {
  width: 42px;
  height: 2px;
  background: #9fbd00;
}

.gym-location__title {
  margin: 0;

  font-family: "Barlow Condensed", sans-serif;
  font-size: clamp(70px, 8vw, 120px);
  font-weight: 900;
  font-style: italic;

  line-height: 0.82;
  letter-spacing: -3px;
  text-transform: uppercase;
}

.gym-location__title span {
  color: transparent;
  -webkit-text-stroke: 2px #090909;
}

.gym-location__intro {
  max-width: 430px;
}

.gym-location__intro p {
  margin: 0;
  font-size: 16px;
  line-height: 1.75;
  color: #5e5e5e;
}

.gym-location__grid {
  display: grid;
  grid-template-columns: 0.65fr 1.35fr;
  gap: 18px;
}

.gym-location__info {
  background: #090909;
  color: #ffffff;
  padding: 40px;

  display: flex;
  flex-direction: column;
}

.gym-location__block {
  padding: 0 0 28px;
  margin-bottom: 28px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.12);
}

.gym-location__block span {
  display: block;
  margin-bottom: 8px;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 10px;
  font-weight: 700;
  letter-spacing: 2px;

  color: #d9ff43;
}

.gym-location__block strong {
  display: block;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 29px;
  font-weight: 700;
  line-height: 1;
}

.gym-location__block p {
  margin: 8px 0 0;

  font-size: 13px;
  line-height: 1.5;

  color: rgba(255, 255, 255, 0.45);
}

.gym-location__button {
  margin-top: auto;

  min-height: 58px;
  padding: 0 20px;

  display: flex;
  align-items: center;
  justify-content: space-between;

  background: #d9ff43;
  color: #090909;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 15px;
  font-weight: 800;
  letter-spacing: 1.2px;

  text-decoration: none;
}

.gym-location__button span {
  font-size: 20px;
}

.gym-location__map {
  position: relative;
  min-height: 560px;
  overflow: hidden;
  background: #111111;
}

.gym-location__map iframe {
  width: 100%;
  height: 100%;
  min-height: 560px;
  border: 0;
  filter: grayscale(100%) contrast(1.05);
}

.gym-location__map-label {
  position: absolute;
  left: 24px;
  bottom: 24px;

  padding: 15px 18px;

  background: #090909;
  color: #ffffff;

  display: flex;
  flex-direction: column;

  font-family: "Barlow Condensed", sans-serif;
}

.gym-location__map-label span {
  font-size: 19px;
  font-weight: 900;
  font-style: italic;
}

.gym-location__map-label strong {
  margin-top: 3px;

  font-size: 9px;
  font-weight: 600;
  letter-spacing: 2px;

  color: #d9ff43;
}

@media (max-width: 950px) {
  .gym-location__header,
  .gym-location__grid {
    grid-template-columns: 1fr;
  }
}

@media (max-width: 700px) {
  .gym-location {
    padding: 90px 0;
  }

  .gym-location__container {
    width: calc(100% - 32px);
  }

  .gym-location__title {
    font-size: clamp(52px, 15vw, 72px);
    line-height: 0.88;
    letter-spacing: -1.5px;
    max-width: 100%;
    overflow-wrap: anywhere;
  }

  .gym-location__title span {
    display: block;
    max-width: 100%;
    -webkit-text-stroke: 1.5px #090909;
  }

  .gym-location__info {
    padding: 30px 24px;
  }

  .gym-location__map,
  .gym-location__map iframe {
    min-height: 430px;
  }
}
</style>