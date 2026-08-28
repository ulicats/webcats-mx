<template>
  <section
    id="contacto"
    class="law-section law-section--paper law-contact"
  >
    <div class="law-container">

      <header class="law-contact__header">
        <div>
          <span class="law-eyebrow">
            Contacto
          </span>

          <h2 class="law-title">
            Estamos disponibles
            para atender tu consulta.
          </h2>
        </div>

        <p class="law-subtitle">
          Puedes comunicarte con nuestro despacho para solicitar
          información, agendar una consulta o conocer la viabilidad
          inicial de tu asunto.
        </p>
      </header>

      <div class="law-contact__grid">

        <!-- DATOS -->
        <div class="law-contact__info law-contract-frame">

          <div class="law-contact__info-header">
            <span>
              Datos del despacho
            </span>

            <span>
              LEX & JUSTITIA
            </span>
          </div>

          <div class="law-contact__data">

            <article
              v-for="item in contactData"
              :key="item.label"
              class="law-contact__item"
            >
              <span class="law-contact__icon">
                {{ item.icon }}
              </span>

              <div>
                <span class="law-contact__label">
                  {{ item.label }}
                </span>

                <strong>
                  {{ item.value }}
                </strong>

                <small v-if="item.extra">
                  {{ item.extra }}
                </small>
              </div>
            </article>

          </div>

          <div class="law-contact__document">
            <span>
              Atención previa cita
            </span>

            <span>
              EXP. CONTACTO / 001
            </span>
          </div>

        </div>

        <!-- MAPA -->
        <div class="law-contact__map">

          <iframe
            src="https://www.google.com/maps?q=Tepic,Nayarit,Mexico&output=embed"
            width="100%"
            height="100%"
            style="border: 0"
            allowfullscreen
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="Ubicación del despacho"
          ></iframe>

          <div class="law-contact__map-label">
            <span>
              Ubicación
            </span>

            <strong>
              Tepic, Nayarit
            </strong>
          </div>

        </div>

      </div>

    </div>
  </section>
</template>

<script setup>
const contactData = [
  {
    icon: "§",
    label: "Teléfono",
    value: "+52 311 123 4567",
    extra: "Lunes a viernes",
  },
  {
    icon: "✉",
    label: "Correo electrónico",
    value: "contacto@lexjustitia.mx",
    extra: "Respuesta en horario laboral",
  },
  {
    icon: "⌖",
    label: "Dirección",
    value: "Tepic, Nayarit",
    extra: "Consulta presencial previa cita",
  },
  {
    icon: "◷",
    label: "Horario",
    value: "09:00 – 18:00",
    extra: "Lunes a viernes",
  },
];
</script>

<style scoped>
.law-contact__header {
  display: grid;

  grid-template-columns:
    minmax(0, 1.2fr)
    minmax(280px, 0.8fr);

  gap: 80px;

  align-items: end;

  margin-bottom: 65px;
}

.law-contact__header .law-title {
  margin-bottom: 0;
}

/* =========================================================
   GRID
========================================================= */

.law-contact__grid {
  display: grid;

  grid-template-columns:
    minmax(0, 0.85fr)
    minmax(0, 1.15fr);

  gap: 30px;

  align-items: stretch;
}

/* =========================================================
   INFO
========================================================= */

.law-contact__info {
  display: flex;
  flex-direction: column;

  padding: 30px;

  background: var(--law-paper);
}

.law-contact__info-header {
  display: flex;
  align-items: center;
  justify-content: space-between;

  gap: 20px;

  padding-bottom: 18px;

  border-bottom: 1px solid var(--law-border);

  color: var(--law-gold);

  font-family: "Inter", Arial, sans-serif;

  font-size: 8px;
  font-weight: 700;

  letter-spacing: 1.5px;
  text-transform: uppercase;
}

/* =========================================================
   DATOS
========================================================= */

.law-contact__data {
  flex: 1;

  display: flex;
  flex-direction: column;
}

.law-contact__item {
  display: grid;

  grid-template-columns: 45px 1fr;

  gap: 18px;

  padding: 26px 0;

  border-bottom: 1px solid var(--law-border);
}

.law-contact__icon {
  color: var(--law-gold);

  font-family:
    "Cormorant Garamond",
    Georgia,
    serif;

  font-size: 25px;
}

.law-contact__item > div {
  display: flex;
  flex-direction: column;

  gap: 5px;
}

.law-contact__label {
  color: var(--law-text-soft);

  font-family: "Inter", Arial, sans-serif;

  font-size: 8px;
  font-weight: 700;

  letter-spacing: 1px;
  text-transform: uppercase;
}

.law-contact__item strong {
  color: var(--law-primary);

  font-family:
    "Cormorant Garamond",
    Georgia,
    serif;

  font-size: 21px;
  font-weight: 600;
}

.law-contact__item small {
  color: var(--law-text-soft);

  font-family: "Inter", Arial, sans-serif;

  font-size: 10px;
}

/* =========================================================
   DOCUMENTO
========================================================= */

.law-contact__document {
  display: flex;
  align-items: center;
  justify-content: space-between;

  gap: 20px;

  margin-top: 25px;

  color: var(--law-text-soft);

  font-family: "Inter", Arial, sans-serif;

  font-size: 7px;
  font-weight: 700;

  letter-spacing: 1.2px;
  text-transform: uppercase;
}

/* =========================================================
   MAPA
========================================================= */

.law-contact__map {
  position: relative;

  min-height: 520px;

  overflow: hidden;

  border: 1px solid var(--law-border);

  background: var(--law-bg);
}

.law-contact__map iframe {
  display: block;

  min-height: 520px;

  filter:
    grayscale(0.85)
    sepia(0.15)
    contrast(0.9);
}

.law-contact__map-label {
  position: absolute;

  left: 25px;
  bottom: 25px;

  min-width: 220px;

  display: flex;
  flex-direction: column;

  gap: 4px;

  padding: 17px 20px;

  background: rgba(255, 253, 248, 0.95);

  border: 1px solid var(--law-border);

  box-shadow: var(--law-shadow-sm);
}

.law-contact__map-label span {
  color: var(--law-gold);

  font-family: "Inter", Arial, sans-serif;

  font-size: 7px;
  font-weight: 700;

  letter-spacing: 1.4px;
  text-transform: uppercase;
}

.law-contact__map-label strong {
  color: var(--law-primary);

  font-family:
    "Cormorant Garamond",
    Georgia,
    serif;

  font-size: 21px;
}

/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 900px) {
  .law-contact__header {
    grid-template-columns: 1fr;

    gap: 25px;
  }

  .law-contact__grid {
    grid-template-columns: 1fr;
  }

  .law-contact__map {
    min-height: 420px;
  }

  .law-contact__map iframe {
    min-height: 420px;
  }
}

@media (max-width: 550px) {
  .law-contact__info {
    padding: 22px;
  }

  .law-contact__document {
    align-items: flex-start;
    flex-direction: column;
  }

  .law-contact__map {
    min-height: 360px;
  }

  .law-contact__map iframe {
    min-height: 360px;
  }

  .law-contact__map-label {
    right: 15px;
    left: 15px;
    bottom: 15px;

    min-width: auto;
  }
}
</style>