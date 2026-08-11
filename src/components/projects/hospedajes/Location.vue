<template>
  <section id="ubicacion" class="location-section">
    <div class="location-container">

      <div class="location-info">

        <p class="location-eyebrow">
          Integración con Google Maps
        </p>

        <h2>
          Aquí estaría
          <span>tu negocio</span>
        </h2>

        <p class="location-description">
          Podemos integrar la ubicación de tu hospedaje directamente en la página
          para que tus huéspedes sepan exactamente dónde encontrarte.
          Pa' que no se vayan a perder xD.
        </p>

        <div class="location-data">
          <div>
            <span>Ubicación</span>
            <strong>La de tu hospedaje | local | casa</strong>
          </div>

          <div>
            <span>Integración</span>
            <strong>Google Maps</strong>
          </div>
        </div>

        <a
          class="location-button"
          href="https://www.google.com/maps/search/?api=1&query=hospedajes"
          target="_blank"
          rel="noopener noreferrer"
        >
          Probar Google Maps
          <span>↗</span>
        </a>

      </div>


      <div class="location-map">

        <iframe
          src="https://www.google.com/maps?q=hospedajes&output=embed"
          title="Ejemplo de integración de Google Maps para hospedajes"
          allowfullscreen
          loading="lazy"
          referrerpolicy="strict-origin-when-cross-origin"
        ></iframe>

      </div>

    </div>
  </section>
</template>


<style scoped>
.location-section {
  scroll-margin-top: 90px;
  padding: 120px 0;
  background: var(--hospedaje-navy-950);
}

.location-container {
  width: min(1180px, calc(100% - 40px));
  margin: 0 auto;
  display: grid;
  grid-template-columns: 0.85fr 1.15fr;
  gap: 70px;
  align-items: center;
}


/* =========================================
   INFORMACIÓN
========================================= */

.location-eyebrow {
  margin-bottom: 15px;
  color: var(--hospedaje-gold-light);
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.25em;
  text-transform: uppercase;
}

.location-info h2 {
  color: var(--hospedaje-white);
  font-family: var(--hospedaje-heading);
  font-size: clamp(52px, 6vw, 82px);
  font-weight: 500;
  line-height: 0.92;
}

.location-info h2 span {
  display: block;
  color: var(--hospedaje-gold-light);
  font-style: italic;
}

.location-description {
  max-width: 520px;
  margin-top: 25px;
  color: rgba(255, 255, 255, 0.65);
  font-size: 14px;
  line-height: 1.8;
}


/* =========================================
   DATOS
========================================= */

.location-data {
  margin-top: 35px;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 18px;
}

.location-data div {
  padding: 16px 0;
  border-top: 1px solid rgba(255, 255, 255, 0.13);
  display: flex;
  flex-direction: column;
}

.location-data span {
  color: rgba(255, 255, 255, 0.45);
  font-size: 9px;
  letter-spacing: 0.16em;
  text-transform: uppercase;
}

.location-data strong {
  margin-top: 7px;
  color: var(--hospedaje-white);
  font-size: 12px;
}


/* =========================================
   BOTÓN
========================================= */

.location-button {
  width: fit-content;
  margin-top: 30px;
  padding: 14px 21px;
  border: 1px solid var(--hospedaje-gold-light);
  border-radius: 999px;
  display: inline-flex;
  align-items: center;
  gap: 12px;
  color: var(--hospedaje-white);
  font-size: 11px;
  font-weight: 700;
  text-decoration: none;
}

.location-button span {
  color: var(--hospedaje-gold-light);
}


/* =========================================
   MAPA
========================================= */

.location-map {
  width: 100%;
  height: 500px;

  overflow: hidden;

  border: 1px solid rgba(255, 255, 255, 0.13);
  border-radius: 22px;

  background: var(--hospedaje-navy-900);

  box-shadow:
    0 24px 60px rgba(0, 0, 0, 0.18);
}

.location-map iframe {
  display: block;

  width: 100%;
  height: 100%;

  border: 0;
}


/* =========================================
   RESPONSIVE
========================================= */

@media (max-width: 850px) {

  .location-container {
    grid-template-columns: 1fr;
  }

  .location-map {
    height: 420px;
  }

}


@media (max-width: 600px) {

  .location-section {
    padding: 85px 0;
  }

  .location-container {
    width: min(100% - 28px, 1180px);
    gap: 45px;
  }

  .location-data {
    grid-template-columns: 1fr;
  }

  .location-map {
    height: 330px;
    border-radius: 16px;
  }

}
</style>