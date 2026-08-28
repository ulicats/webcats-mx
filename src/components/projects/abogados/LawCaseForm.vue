<template>
  <section
    id="consulta"
    class="law-section law-section--paper law-case"
  >
    <div class="law-container">

      <!-- ENCABEZADO -->
      <header class="law-case__header">

        <div>
          <span class="law-eyebrow">
            Solicitud de valoración
          </span>

          <h2 class="law-title">
            Cuéntanos tu caso.
          </h2>
        </div>

        <div class="law-case__folio">
          <span>FORMULARIO</span>
          <strong>EXP. CONSULTA / 001</strong>
        </div>

      </header>

      <!-- FORMULARIO -->
      <form
        class="law-case__document law-contract-frame"
        @submit.prevent="sendWhatsApp"
      >

        <!-- =====================================================
             01 TIPO DE ASUNTO
        ====================================================== -->

        <div class="law-case__section">

          <div class="law-case__section-number">
            01
          </div>

          <div class="law-case__section-content">

            <span class="law-case__section-label">
              Área jurídica
            </span>

            <h3>
              ¿Qué tipo de asunto necesitas atender?
            </h3>

            <p>
              Selecciona la opción que más se aproxime a tu situación.
              Si no estás seguro, puedes elegir “Otro”.
            </p>

            <div class="law-case__options">

              <button
                v-for="area in areas"
                :key="area"
                type="button"
                class="law-case__option"
                :class="{
                  'law-case__option--active': selectedArea === area
                }"
                @click="selectedArea = area"
              >
                <span>
                  {{ area }}
                </span>

                <span class="law-case__check">
                  {{ selectedArea === area ? "✓" : "" }}
                </span>
              </button>

            </div>

          </div>

        </div>

        <!-- =====================================================
             02 MODALIDAD
        ====================================================== -->

        <div class="law-case__section">

          <div class="law-case__section-number">
            02
          </div>

          <div class="law-case__section-content">

            <span class="law-case__section-label">
              Modalidad
            </span>

            <h3>
              ¿Cómo prefieres recibir la consulta?
            </h3>

            <div class="law-case__options law-case__options--small">

              <button
                v-for="option in modalities"
                :key="option"
                type="button"
                class="law-case__option"
                :class="{
                  'law-case__option--active': modality === option
                }"
                @click="modality = option"
              >
                <span>
                  {{ option }}
                </span>

                <span class="law-case__check">
                  {{ modality === option ? "✓" : "" }}
                </span>
              </button>

            </div>

          </div>

        </div>

        <!-- =====================================================
             03 DATOS
        ====================================================== -->

        <div class="law-case__section">

          <div class="law-case__section-number">
            03
          </div>

          <div class="law-case__section-content">

            <span class="law-case__section-label">
              Datos de contacto
            </span>

            <h3>
              ¿Cómo podemos contactarte?
            </h3>

            <div class="law-case__fields">

              <div class="law-field">
                <label for="law-name">
                  Nombre
                </label>

                <input
                  id="law-name"
                  v-model="name"
                  type="text"
                  placeholder="Nombre completo"
                  autocomplete="name"
                />
              </div>

              <div class="law-field">
                <label for="law-phone">
                  Teléfono
                </label>

                <input
                  id="law-phone"
                  v-model="phone"
                  type="tel"
                  placeholder="Número de contacto"
                  autocomplete="tel"
                />
              </div>

            </div>

          </div>

        </div>

        <!-- =====================================================
             04 DESCRIPCIÓN
        ====================================================== -->

        <div class="law-case__section">

          <div class="law-case__section-number">
            04
          </div>

          <div class="law-case__section-content">

            <span class="law-case__section-label">
              Descripción del asunto
            </span>

            <h3>
              Describe brevemente tu situación.
            </h3>

            <p>
              No necesitas utilizar términos jurídicos. Explícanos
              qué ocurrió y qué necesitas resolver.
            </p>

            <div class="law-field law-case__description">
              <label for="law-description">
                Relación de hechos
              </label>

              <textarea
                id="law-description"
                v-model="description"
                maxlength="700"
                placeholder="Escribe aquí una breve descripción de tu situación..."
              ></textarea>

              <span class="law-case__counter">
                {{ description.length }} / 700
              </span>
            </div>

          </div>

        </div>

        <!-- =====================================================
             RESUMEN
        ====================================================== -->

        <div class="law-case__summary">

          <div class="law-case__summary-header">

            <span>
              Resumen de solicitud
            </span>

            <span>
              LEX & JUSTITIA
            </span>

          </div>

          <div class="law-case__summary-grid">

            <div>
              <span>Área</span>
              <strong>
                {{ selectedArea || "Sin seleccionar" }}
              </strong>
            </div>

            <div>
              <span>Modalidad</span>
              <strong>
                {{ modality || "Sin seleccionar" }}
              </strong>
            </div>

            <div>
              <span>Solicitante</span>
              <strong>
                {{ name || "Sin especificar" }}
              </strong>
            </div>

          </div>

        </div>

        <!-- =====================================================
             ERROR
        ====================================================== -->

        <Transition name="law-error">
          <div
            v-if="errorMessage"
            class="law-case__error"
          >
            {{ errorMessage }}
          </div>
        </Transition>

        <!-- =====================================================
             FIRMA / ENVÍO
        ====================================================== -->

        <footer class="law-case__footer">

          <div class="law-case__legal">

            <span class="law-case__signature-line"></span>

            <strong>
              Solicitud de consulta
            </strong>

            <p>
              La información enviada mediante este formulario
              no constituye por sí misma una relación abogado-cliente.
            </p>

          </div>

          <button
            type="submit"
            class="law-button law-case__submit"
          >
            Solicitar valoración

            <span>
              →
            </span>
          </button>

        </footer>

      </form>

    </div>
  </section>
</template>

<script setup>
import { computed, ref } from "vue";

/* =========================================================
   OPCIONES
========================================================= */

const areas = [
  "Familiar",
  "Laboral",
  "Civil",
  "Mercantil",
  "Empresarial",
  "Amparo",
  "Otro",
];

const modalities = [
  "Presencial",
  "Videollamada",
  "Telefónica",
];

/* =========================================================
   ESTADO
========================================================= */

const selectedArea = ref("");
const modality = ref("");

const name = ref("");
const phone = ref("");
const description = ref("");

const errorMessage = ref("");

/* =========================================================
   WHATSAPP
========================================================= */

/*
  Después cambiamos este número por el número real
  del despacho.

  Formato:
  código de país + número
  sin espacios, +, guiones ni paréntesis.
*/

const whatsappNumber = "523332341375";

/* =========================================================
   MENSAJE
========================================================= */

const whatsappMessage = computed(() => {
  return `Hola, quisiera solicitar una consulta jurídica.

Área: ${selectedArea.value}
Modalidad: ${modality.value}

Nombre: ${name.value}
Teléfono: ${phone.value}

Descripción del asunto:
${description.value}

Mensaje enviado desde el sitio web de Lex & Justitia.`;
});

/* =========================================================
   ENVÍO
========================================================= */

const sendWhatsApp = () => {
  errorMessage.value = "";

  if (!selectedArea.value) {
    errorMessage.value =
      "Selecciona el área jurídica relacionada con tu asunto.";

    return;
  }

  if (!modality.value) {
    errorMessage.value =
      "Selecciona la modalidad en la que deseas recibir la consulta.";

    return;
  }

  if (!name.value.trim()) {
    errorMessage.value =
      "Escribe tu nombre para continuar.";

    return;
  }

  if (!description.value.trim()) {
    errorMessage.value =
      "Describe brevemente tu situación para continuar.";

    return;
  }

  const message = encodeURIComponent(
    whatsappMessage.value
  );

  const url =
    `https://wa.me/${whatsappNumber}?text=${message}`;

  window.open(
    url,
    "_blank",
    "noopener,noreferrer"
  );
};
</script>

<style scoped>
/* =========================================================
   HEADER
========================================================= */

.law-case__header {
  display: flex;
  align-items: flex-end;
  justify-content: space-between;

  gap: 50px;

  margin-bottom: 55px;
}

.law-case__header .law-title {
  margin-bottom: 0;
}

.law-case__folio {
  min-width: 220px;

  display: flex;
  flex-direction: column;

  gap: 6px;

  padding-left: 25px;

  border-left: 1px solid var(--law-border);
}

.law-case__folio span {
  color: var(--law-gold);

  font-family: "Inter", Arial, sans-serif;

  font-size: 8px;
  font-weight: 700;

  letter-spacing: 1.5px;
}

.law-case__folio strong {
  color: var(--law-primary);

  font-family: "Inter", Arial, sans-serif;

  font-size: 10px;

  letter-spacing: 1px;
}

/* =========================================================
   DOCUMENTO
========================================================= */

.law-case__document {
  padding: 25px 55px 50px;

  background:
    linear-gradient(
      rgba(255, 253, 248, 0.97),
      rgba(255, 253, 248, 0.97)
    ),
    repeating-linear-gradient(
      0deg,
      rgba(23, 35, 53, 0.02) 0,
      rgba(23, 35, 53, 0.02) 1px,
      transparent 1px,
      transparent 4px
    );

  box-shadow: var(--law-shadow-sm);
}

/* =========================================================
   SECCIONES
========================================================= */

.law-case__section {
  display: grid;

  grid-template-columns: 80px 1fr;

  gap: 35px;

  padding: 50px 0;

  border-bottom: 1px solid var(--law-border);
}

.law-case__section-number {
  color: var(--law-gold-soft);

  font-family:
    "Cormorant Garamond",
    Georgia,
    serif;

  font-size: 38px;

  line-height: 1;
}

.law-case__section-label {
  color: var(--law-gold);

  font-family: "Inter", Arial, sans-serif;

  font-size: 8px;
  font-weight: 700;

  letter-spacing: 1.5px;
  text-transform: uppercase;
}

.law-case__section-content h3 {
  margin: 8px 0 10px;

  color: var(--law-primary);

  font-size: 29px;
  font-weight: 500;
}

.law-case__section-content > p {
  max-width: 700px;

  margin-bottom: 28px;

  color: var(--law-text-soft);

  font-size: 13px;
  line-height: 1.75;
}

/* =========================================================
   OPCIONES
========================================================= */

.law-case__options {
  display: grid;

  grid-template-columns: repeat(4, 1fr);

  gap: 10px;
}

.law-case__options--small {
  grid-template-columns: repeat(3, 1fr);

  max-width: 750px;
}

.law-case__option {
  min-height: 55px;

  display: flex;
  align-items: center;
  justify-content: space-between;

  gap: 15px;

  padding: 0 18px;

  border: 1px solid var(--law-border);

  background: transparent;

  color: var(--law-primary);

  font-family: "Inter", Arial, sans-serif;

  font-size: 10px;
  font-weight: 700;

  letter-spacing: 0.7px;
  text-transform: uppercase;

  cursor: pointer;

  transition:
    border-color var(--law-transition),
    background var(--law-transition),
    color var(--law-transition);
}

.law-case__option:hover {
  border-color: var(--law-gold);
}

.law-case__option--active {
  background: var(--law-primary);

  border-color: var(--law-primary);

  color: var(--law-white);
}

.law-case__check {
  width: 18px;
  height: 18px;

  display: flex;
  align-items: center;
  justify-content: center;

  border: 1px solid currentColor;

  font-size: 10px;
}

/* =========================================================
   DATOS
========================================================= */

.law-case__fields {
  display: grid;

  grid-template-columns: repeat(2, 1fr);

  gap: 45px;
}

/* =========================================================
   DESCRIPCIÓN
========================================================= */

.law-case__description {
  position: relative;

  max-width: 850px;
}

.law-case__counter {
  position: absolute;

  right: 0;
  bottom: -22px;

  color: var(--law-text-soft);

  font-family: "Inter", Arial, sans-serif;

  font-size: 9px;
}

/* =========================================================
   RESUMEN
========================================================= */

.law-case__summary {
  margin-top: 45px;

  border: 1px solid var(--law-border);
}

.law-case__summary-header {
  display: flex;
  justify-content: space-between;

  padding: 13px 20px;

  border-bottom: 1px solid var(--law-border);

  color: var(--law-gold);

  font-family: "Inter", Arial, sans-serif;

  font-size: 8px;
  font-weight: 700;

  letter-spacing: 1.5px;
  text-transform: uppercase;
}

.law-case__summary-grid {
  display: grid;

  grid-template-columns: repeat(3, 1fr);
}

.law-case__summary-grid > div {
  min-height: 85px;

  display: flex;
  flex-direction: column;

  justify-content: center;

  gap: 7px;

  padding: 15px 20px;

  border-right: 1px solid var(--law-border);
}

.law-case__summary-grid > div:last-child {
  border-right: 0;
}

.law-case__summary-grid span {
  color: var(--law-text-soft);

  font-family: "Inter", Arial, sans-serif;

  font-size: 8px;

  letter-spacing: 1px;
  text-transform: uppercase;
}

.law-case__summary-grid strong {
  color: var(--law-primary);

  font-family:
    "Cormorant Garamond",
    Georgia,
    serif;

  font-size: 20px;
  font-weight: 600;
}

/* =========================================================
   ERROR
========================================================= */

.law-case__error {
  margin-top: 25px;
  padding: 15px 18px;

  border-left: 2px solid var(--law-gold);

  background: var(--law-bg);

  color: var(--law-primary);

  font-size: 13px;
}

.law-error-enter-active,
.law-error-leave-active {
  transition:
    opacity 0.2s ease,
    transform 0.2s ease;
}

.law-error-enter-from,
.law-error-leave-to {
  opacity: 0;

  transform: translateY(-5px);
}

/* =========================================================
   FOOTER
========================================================= */

.law-case__footer {
  display: flex;
  align-items: flex-end;
  justify-content: space-between;

  gap: 50px;

  margin-top: 50px;
}

.law-case__legal {
  max-width: 520px;
}

.law-case__signature-line {
  width: 180px;
  height: 1px;

  display: block;

  margin-bottom: 10px;

  background: var(--law-border-dark);
}

.law-case__legal strong {
  color: var(--law-primary);

  font-family:
    "Cormorant Garamond",
    Georgia,
    serif;

  font-size: 17px;
  font-weight: 600;
}

.law-case__legal p {
  margin: 8px 0 0;

  color: var(--law-text-soft);

  font-size: 10px;
  line-height: 1.6;
}

.law-case__submit {
  flex-shrink: 0;
}

.law-case__submit span {
  font-size: 16px;
}

/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 900px) {
  .law-case__options {
    grid-template-columns: repeat(2, 1fr);
  }

  .law-case__options--small {
    grid-template-columns: repeat(3, 1fr);
  }
}

@media (max-width: 700px) {
  .law-case__header {
    align-items: flex-start;
    flex-direction: column;
  }

  .law-case__folio {
    padding-left: 0;

    border-left: 0;
  }

  .law-case__document {
    padding: 20px 25px 35px;
  }

  .law-case__section {
    grid-template-columns: 1fr;

    gap: 15px;

    padding: 40px 0;
  }

  .law-case__fields {
    grid-template-columns: 1fr;

    gap: 30px;
  }

  .law-case__summary-grid {
    grid-template-columns: 1fr;
  }

  .law-case__summary-grid > div {
    border-right: 0;
    border-bottom: 1px solid var(--law-border);
  }

  .law-case__summary-grid > div:last-child {
    border-bottom: 0;
  }

  .law-case__footer {
    align-items: stretch;
    flex-direction: column;
  }

  .law-case__submit {
    width: 100%;
  }
}

@media (max-width: 500px) {
  .law-case__options,
  .law-case__options--small {
    grid-template-columns: 1fr;
  }

  .law-case__document {
    padding:
      15px
      20px
      30px;
  }
}
</style>