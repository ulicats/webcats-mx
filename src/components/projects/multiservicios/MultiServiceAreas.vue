<template>
  <section id="zonas" class="multi-service-areas">

    <div class="areas-container">

      <!-- IMAGEN -->
      <div class="areas-visual">

        <img
          src="https://images.unsplash.com/photo-1518005020951-eccb494ad742?auto=format&fit=crop&w=1200&q=85"
          alt="Zona de servicio"
        />

        <div class="visual-overlay"></div>

        <div class="visual-content">
          <span>COBERTURA LOCAL</span>

          <strong>
            Cerca de ti cuando
            más lo necesitas.
          </strong>
        </div>

        <div class="location-badge">
          <span class="pin">●</span>

          <div>
            <small>Zona principal</small>
            <strong>Tepic, Nayarit</strong>
          </div>
        </div>

      </div>

      <!-- CONTENIDO -->
      <div class="areas-content">

        <span class="eyebrow">
          ZONAS DE SERVICIO
        </span>

        <h2>
          Atención en Tepic
          <span>y alrededores.</span>
        </h2>

        <p class="description">
          Brindamos servicios para hogares, negocios y propiedades
          en distintos puntos de Tepic y municipios cercanos.
        </p>

        <div class="areas-grid">

          <div
            v-for="area in areas"
            :key="area.name"
            class="area"
          >
            <div class="area-pin">
              <span></span>
            </div>

            <div>
              <strong>{{ area.name }}</strong>
              <small>{{ area.description }}</small>
            </div>
          </div>

        </div>

        <div class="areas-note">
          <div class="note-icon">?</div>

          <div>
            <strong>¿No encuentras tu zona?</strong>

            <span>
              Escríbenos por WhatsApp y consulta disponibilidad.
            </span>
          </div>
        </div>

      </div>

    </div>

  </section>
</template>

<script setup>
const areas = [
  {
    name: 'Tepic',
    description: 'Cobertura principal'
  },
  {
    name: 'Xalisco',
    description: 'Servicio disponible'
  },
  {
    name: 'Bellavista',
    description: 'Servicio disponible'
  },
  {
    name: 'San Cayetano',
    description: 'Previa coordinación'
  },
  {
    name: 'Aguamilpa',
    description: 'Previa coordinación'
  },
  {
    name: 'Alrededores',
    description: 'Consultar cobertura'
  }
]
</script>

<style scoped>
.multi-service-areas {
  --navy: #062a50;
  --blue: #087ee5;
  --green: #19a957;
  --brick: #dc512e;

  padding: 90px 0;

  background: #ffffff;

  font-family: 'Manrope', sans-serif;
}

.areas-container {
  width: min(1180px, calc(100% - 40px));

  margin: auto;

  display: grid;
  grid-template-columns: 0.95fr 1.05fr;

  overflow: hidden;

  background: #f5f8fb;

  border: 1px solid #e3ebf1;
  border-radius: 18px;

  box-shadow: 0 18px 45px rgba(6, 42, 80, 0.07);
}

/* =========================
   IMAGEN
========================= */

.areas-visual {
  position: relative;

  min-height: 520px;

  overflow: hidden;
}

.areas-visual img {
  width: 100%;
  height: 100%;

  object-fit: cover;
}

.visual-overlay {
  position: absolute;
  inset: 0;

  background:
    linear-gradient(
      180deg,
      rgba(6, 42, 80, 0.1) 10%,
      rgba(6, 42, 80, 0.88) 100%
    );
}

.visual-content {
  position: absolute;

  left: 38px;
  bottom: 105px;

  max-width: 360px;

  display: flex;
  flex-direction: column;

  color: white;
}

.visual-content span {
  margin-bottom: 8px;

  color: #80c5ff;

  font-size: 9px;
  font-weight: 800;
  letter-spacing: 2px;
}

.visual-content strong {
  font-family: 'Sora', sans-serif;

  font-size: clamp(25px, 3vw, 37px);

  line-height: 1.15;
  letter-spacing: -1px;
}

/* =========================
   BADGE
========================= */

.location-badge {
  position: absolute;

  left: 38px;
  bottom: 30px;

  display: flex;
  align-items: center;

  gap: 12px;

  padding: 12px 16px;

  background: white;

  border-radius: 9px;

  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.18);
}

.pin {
  width: 32px;
  height: 32px;

  display: flex;
  align-items: center;
  justify-content: center;

  color: white;
  background: var(--blue);

  border-radius: 50%;

  font-size: 8px;
}

.location-badge div {
  display: flex;
  flex-direction: column;
}

.location-badge small {
  color: #83909c;

  font-size: 8px;
}

.location-badge strong {
  margin-top: 2px;

  color: var(--navy);

  font-size: 11px;
}

/* =========================
   CONTENT
========================= */

.areas-content {
  padding: 60px;
}

.eyebrow {
  display: block;

  margin-bottom: 8px;

  color: var(--blue);

  font-size: 10px;
  font-weight: 800;
  letter-spacing: 2px;
}

.areas-content h2 {
  margin: 0;

  color: var(--navy);

  font-family: 'Sora', sans-serif;

  font-size: clamp(31px, 4vw, 44px);

  line-height: 1.12;
  letter-spacing: -1.7px;
}

.areas-content h2 span {
  display: block;

  color: var(--blue);
}

.description {
  max-width: 530px;

  margin: 18px 0 30px;

  color: #708193;

  font-size: 12px;
  line-height: 1.75;
}

/* =========================
   ZONAS
========================= */

.areas-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);

  gap: 12px;
}

.area {
  display: flex;
  align-items: center;

  gap: 11px;

  padding: 14px;

  background: white;

  border: 1px solid #e1e8ee;
  border-radius: 9px;

  transition:
    transform 0.2s ease,
    border-color 0.2s ease;
}

.area:hover {
  transform: translateY(-2px);

  border-color: #b9d9f5;
}

.area-pin {
  position: relative;

  width: 29px;
  height: 29px;

  flex-shrink: 0;

  display: flex;
  align-items: center;
  justify-content: center;

  background: #eaf5ff;

  border-radius: 50%;
}

.area-pin::before {
  content: '';

  width: 9px;
  height: 9px;

  background: var(--blue);

  border: 3px solid white;
  border-radius: 50%;

  box-shadow: 0 0 0 2px var(--blue);
}

.area > div:last-child {
  display: flex;
  flex-direction: column;
}

.area strong {
  color: var(--navy);

  font-size: 11px;
}

.area small {
  margin-top: 2px;

  color: #8b99a6;

  font-size: 8px;
}

/* =========================
   NOTA
========================= */

.areas-note {
  margin-top: 22px;

  padding: 15px;

  display: flex;
  align-items: center;

  gap: 12px;

  background: #eaf5ff;

  border-radius: 9px;
}

.note-icon {
  width: 32px;
  height: 32px;

  flex-shrink: 0;

  display: flex;
  align-items: center;
  justify-content: center;

  color: white;
  background: var(--blue);

  border-radius: 50%;

  font-weight: 800;
}

.areas-note > div:last-child {
  display: flex;
  flex-direction: column;
}

.areas-note strong {
  color: var(--navy);

  font-size: 10px;
}

.areas-note span {
  margin-top: 3px;

  color: #718193;

  font-size: 9px;
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 900px) {
  .areas-container {
    grid-template-columns: 1fr;
  }

  .areas-visual {
    min-height: 400px;
  }
}

@media (max-width: 550px) {
  .multi-service-areas {
    padding: 65px 0;
  }

  .areas-container {
    width: calc(100% - 30px);
  }

  .areas-content {
    padding: 40px 25px;
  }

  .areas-grid {
    grid-template-columns: 1fr;
  }

  .areas-visual {
    min-height: 360px;
  }

  .visual-content,
  .location-badge {
    left: 25px;
  }
}
</style>