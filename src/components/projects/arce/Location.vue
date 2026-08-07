<template>
  <section id="ubicacion" class="location-section">
    <div class="location-container">

      <div class="location-info">
        
        <h2>
          Escápate a
          <span>Mazamitla</span>
        </h2>

        <p class="location-description">
          Rodeado de bosque, clima de montaña y la tranquilidad característica
          de Mazamitla, Arce Cabañas es un espacio para desconectarte de la
          rutina.
        </p>

        <div class="location-data">
          <div>
            <span>Destino</span>
            <strong>Mazamitla, Jalisco</strong>
          </div>

          <div>
            <span>Entorno</span>
            <strong>Bosque y montaña</strong>
          </div>
        </div>

        <a
          class="location-button"
          href="#"
          target="_blank"
          rel="noopener noreferrer"
        >
          Abrir en Google Maps
          <span>↗</span>
        </a>
      </div>

      <div class="location-map">
        <div class="map-placeholder">
          <span>⌖</span>

          <strong>Google Maps</strong>

          <p>
            Aquí colocaremos la ubicación real de Arce Cabañas.
          </p>
        </div>
      </div>

    </div>
  </section>
</template>

<style scoped>
.location-section {
  padding: 120px 0;
  background: var(--arce-navy-950);
}

.location-container {
  width: min(1180px, calc(100% - 40px));
  margin: 0 auto;
  display: grid;
  grid-template-columns: 0.85fr 1.15fr;
  gap: 70px;
  align-items: center;
}

.location-eyebrow {
  margin-bottom: 15px;
  color: var(--arce-gold-light);
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.25em;
  text-transform: uppercase;
}

.location-info h2 {
  color: var(--arce-white);
  font-family: var(--arce-heading);
  font-size: clamp(52px, 6vw, 82px);
  font-weight: 500;
  line-height: 0.92;
}

.location-info h2 span {
  display: block;
  color: var(--arce-gold-light);
  font-style: italic;
}

.location-description {
  max-width: 520px;
  margin-top: 25px;
  color: rgba(255, 255, 255, 0.65);
  font-size: 14px;
  line-height: 1.8;
}

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
  color: var(--arce-white);
  font-size: 12px;
}

.location-button {
  width: fit-content;
  margin-top: 30px;
  padding: 14px 21px;
  border: 1px solid var(--arce-gold-light);
  border-radius: 999px;
  display: inline-flex;
  align-items: center;
  gap: 12px;
  color: var(--arce-white);
  font-size: 11px;
  font-weight: 700;
}

.location-button span {
  color: var(--arce-gold-light);
}

.location-map {
  min-height: 500px;
  overflow: hidden;
  border: 1px solid rgba(255, 255, 255, 0.13);
  border-radius: 22px;
  background:
    linear-gradient(
      rgba(19, 40, 58, 0.45),
      rgba(19, 40, 58, 0.45)
    ),
    #29475c;
}

.map-placeholder {
  min-height: 500px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  color: rgba(255, 255, 255, 0.75);
  text-align: center;
}

.map-placeholder > span {
  color: var(--arce-gold-light);
  font-size: 54px;
}

.map-placeholder strong {
  margin-top: 10px;
  font-family: var(--arce-heading);
  font-size: 28px;
}

.map-placeholder p {
  max-width: 300px;
  margin-top: 8px;
  color: rgba(255, 255, 255, 0.45);
  font-size: 11px;
}

@media (max-width: 850px) {
  .location-container {
    grid-template-columns: 1fr;
  }

  .location-map,
  .map-placeholder {
    min-height: 390px;
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

  .location-map,
  .map-placeholder {
    min-height: 320px;
  }
}
</style>