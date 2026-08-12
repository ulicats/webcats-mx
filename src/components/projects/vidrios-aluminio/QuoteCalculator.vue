<template>
  <section
    id="cotizar"
    class="quote-section"
  >
    <div class="quote-heading">
      <div>
        <span class="section-kicker">Cotización</span>

        <h2>
          Cuéntanos qué
          <span>quieres construir.</span>
        </h2>
      </div>

      <p>
        Configura una solicitud rápida con las medidas y características
        principales de tu proyecto.
      </p>
    </div>

    <div class="quote-shell">

      <!-- FORMULARIO -->
      <div class="quote-form">

        <div class="quote-form__grid">

          <label class="quote-field">
            <span>Tipo de proyecto</span>

            <select v-model="form.projectType">
              <option value="Cancel de baño">Cancel de baño</option>
              <option value="Ventana">Ventana</option>
              <option value="Puerta de cristal">Puerta de cristal</option>
              <option value="Barandal">Barandal</option>
              <option value="Cancel comercial">Cancel comercial</option>
              <option value="Domo">Domo</option>
              <option value="Otro proyecto">Otro proyecto</option>
            </select>
          </label>


          <label class="quote-field">
            <span>Tipo de material</span>

            <select v-model="form.material">
              <option value="Cristal templado">Cristal templado</option>
              <option value="Cristal claro">Cristal claro</option>
              <option value="Cristal esmerilado">Cristal esmerilado</option>
              <option value="Aluminio negro">Aluminio negro</option>
              <option value="Aluminio natural">Aluminio natural</option>
              <option value="Por definir">Por definir</option>
            </select>
          </label>


          <label class="quote-field">
            <span>Ancho aproximado</span>

            <div class="quote-field__unit">
              <input
                v-model.number="form.width"
                type="number"
                min="0"
                placeholder="180"
              />

              <strong>cm</strong>
            </div>
          </label>


          <label class="quote-field">
            <span>Alto aproximado</span>

            <div class="quote-field__unit">
              <input
                v-model.number="form.height"
                type="number"
                min="0"
                placeholder="210"
              />

              <strong>cm</strong>
            </div>
          </label>


          <label class="quote-field quote-field--full">
            <span>Ubicación del proyecto</span>

            <input
              v-model="form.location"
              type="text"
              placeholder="Ej. Tepic, Nayarit"
            />
          </label>


          <label class="quote-field quote-field--full">
            <span>Detalles adicionales</span>

            <textarea
              v-model="form.notes"
              rows="4"
              placeholder="Cuéntanos brevemente qué necesitas..."
            ></textarea>
          </label>

        </div>

      </div>


      <!-- PANEL TÉCNICO -->
      <aside class="quote-summary">

        <div class="quote-summary__top">
          <span>Solicitud técnica</span>
          <strong>Q-01</strong>
        </div>


        <div class="quote-summary__preview">

          <div class="quote-window">

            <div
              class="quote-window__panel"
              :style="windowStyle"
            >
              <span></span>
              <span></span>
            </div>

          </div>

        </div>


        <div class="quote-summary__data">

          <div>
            <span>Proyecto</span>
            <strong>{{ form.projectType }}</strong>
          </div>

          <div>
            <span>Material</span>
            <strong>{{ form.material }}</strong>
          </div>

          <div>
            <span>Medidas</span>
            <strong>
              {{ form.width || 0 }} × {{ form.height || 0 }} cm
            </strong>
          </div>

          <div>
            <span>Área aprox.</span>
            <strong>{{ area }} m²</strong>
          </div>

        </div>


        <a
          class="quote-summary__button"
          :href="whatsappLink"
          target="_blank"
          rel="noopener"
        >
          Enviar solicitud
          <span>↗</span>
        </a>

        <small class="quote-summary__note">
          La cotización final puede requerir visita y toma de medidas.
        </small>

      </aside>

    </div>
  </section>
</template>


<script setup>
import { computed, reactive } from 'vue'

const form = reactive({
  projectType: 'Cancel de baño',
  material: 'Cristal templado',
  width: 180,
  height: 210,
  location: '',
  notes: '',
})

const area = computed(() => {
  if (!form.width || !form.height) {
    return '0.00'
  }

  return (
    (Number(form.width) * Number(form.height)) /
    10000
  ).toFixed(2)
})

const windowStyle = computed(() => {
  const width = Math.max(Number(form.width) || 1, 1)
  const height = Math.max(Number(form.height) || 1, 1)

  const ratio = width / height

  let previewWidth = 70
  let previewHeight = 82

  if (ratio > 1) {
    previewWidth = 82
    previewHeight = Math.max(42, 82 / ratio)
  } else {
    previewHeight = 82
    previewWidth = Math.max(42, 82 * ratio)
  }

  return {
    width: `${previewWidth}%`,
    height: `${previewHeight}%`,
  }
})

const whatsappNumber = '523111234567'

const whatsappLink = computed(() => {
  const message = [
    'Hola, me interesa solicitar una cotización.',
    '',
    `Proyecto: ${form.projectType}`,
    `Material: ${form.material}`,
    `Medidas aproximadas: ${form.width || 0} x ${form.height || 0} cm`,
    `Área aproximada: ${area.value} m²`,
    `Ubicación: ${form.location || 'Por definir'}`,
    `Detalles: ${form.notes || 'Sin comentarios adicionales'}`,
  ].join('\n')

  // Número demo.
  // Después lo cambiamos por el número real del cliente.
 
  return `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(message)}`
})
</script>


<style scoped>
.quote-section {
  padding: 120px 5vw;

  background: #e8eef0;
}

.quote-heading {
  width: min(100%, 1500px);

  margin: 0 auto 60px;

  display: grid;

  grid-template-columns:
    1.2fr
    0.8fr;

  gap: 70px;

  align-items: end;
}

.section-kicker {
  display: block;

  margin-bottom: 18px;

  color: var(--glass-blue, #4ea7c4);

  font-size: 0.7rem;
  font-weight: 700;

  letter-spacing: 0.18em;
  text-transform: uppercase;
}

.quote-heading h2 {
  margin: 0;

  color: #111416;

  font-size:
    clamp(2.8rem, 5vw, 5.4rem);

  font-weight: 500;

  line-height: 0.98;

  letter-spacing: -0.05em;
}

.quote-heading h2 span {
  display: block;

  color: #87949a;
}

.quote-heading p {
  max-width: 520px;

  margin: 0;

  color: #66747a;

  font-size: 1rem;

  line-height: 1.8;
}


/* =========================================================
   CONTENEDOR
========================================================= */

.quote-shell {
  width: min(100%, 1500px);

  margin: 0 auto;

  display: grid;

  grid-template-columns:
    minmax(500px, 1.2fr)
    minmax(320px, 0.8fr);

  gap: 5px;

  padding: 5px;

  background: #111416;
}


/* =========================================================
   FORMULARIO
========================================================= */

.quote-form {
  padding:
    clamp(35px, 5vw, 70px);

  background: #f5f8f9;
}

.quote-form__grid {
  display: grid;

  grid-template-columns:
    repeat(2, 1fr);

  gap: 28px;
}

.quote-field {
  display: flex;

  flex-direction: column;

  gap: 10px;
}

.quote-field--full {
  grid-column: 1 / -1;
}

.quote-field > span {
  color: #6d7a80;

  font-size: 0.64rem;

  font-weight: 700;

  letter-spacing: 0.13em;

  text-transform: uppercase;
}

.quote-field input,
.quote-field select,
.quote-field textarea {
  width: 100%;

  border: 0;

  border-bottom:
    1px solid rgba(17, 20, 22, 0.22);

  border-radius: 0;

  outline: none;

  background: transparent;

  color: #111416;

  font-family: inherit;

  font-size: 1rem;

  transition:
    border-color 0.25s ease;
}

.quote-field input,
.quote-field select {
  height: 54px;
}

.quote-field textarea {
  padding:
    16px 0;

  resize: vertical;
}

.quote-field input:focus,
.quote-field select:focus,
.quote-field textarea:focus {
  border-color:
    var(--glass-blue, #4ea7c4);
}

.quote-field__unit {
  display: grid;

  grid-template-columns:
    1fr
    55px;

  align-items: center;

  border-bottom:
    1px solid rgba(17, 20, 22, 0.22);
}

.quote-field__unit input {
  border: 0;
}

.quote-field__unit strong {
  color: #7b888d;

  font-size: 0.7rem;

  font-weight: 700;

  text-align: right;

  letter-spacing: 0.1em;
}


/* =========================================================
   RESUMEN
========================================================= */

.quote-summary {
  display: flex;

  flex-direction: column;

  padding:
    clamp(32px, 4vw, 55px);

  background:
    linear-gradient(
      145deg,
      #253a42,
      #0d161a
    );

  color: #ffffff;
}

.quote-summary__top {
  display: flex;

  align-items: center;

  justify-content: space-between;

  padding-bottom: 20px;

  border-bottom:
    1px solid rgba(255, 255, 255, 0.16);
}

.quote-summary__top span {
  color:
    rgba(255, 255, 255, 0.52);

  font-size: 0.64rem;

  font-weight: 700;

  letter-spacing: 0.14em;

  text-transform: uppercase;
}

.quote-summary__top strong {
  font-size: 0.7rem;

  font-weight: 700;

  letter-spacing: 0.12em;
}


/* =========================================================
   PREVIEW
========================================================= */

.quote-summary__preview {
  min-height: 300px;

  display: flex;

  align-items: center;

  justify-content: center;

  padding:
    35px 0;
}

.quote-window {
  width: 100%;

  height: 260px;

  display: flex;

  align-items: center;

  justify-content: center;

  border:
    1px solid rgba(255, 255, 255, 0.12);
}

.quote-window__panel {
  position: relative;

  min-width: 42%;
  min-height: 42%;

  display: grid;

  grid-template-columns:
    repeat(2, 1fr);

  gap: 8px;

  padding: 8px;

  background: #111416;

  transition:
    width 0.35s ease,
    height 0.35s ease;
}

.quote-window__panel span {
  position: relative;

  overflow: hidden;

  background:
    linear-gradient(
      145deg,
      rgba(149, 206, 224, 0.42),
      rgba(35, 65, 75, 0.58)
    );
}

.quote-window__panel span::before {
  content: '';

  position: absolute;

  width: 170%;

  height: 28%;

  top: 8%;

  left: -90%;

  transform:
    rotate(-28deg);

  background:
    rgba(255, 255, 255, 0.13);
}


/* =========================================================
   DATOS
========================================================= */

.quote-summary__data {
  border-top:
    1px solid rgba(255, 255, 255, 0.15);
}

.quote-summary__data > div {
  min-height: 63px;

  display: flex;

  align-items: center;

  justify-content: space-between;

  gap: 20px;

  border-bottom:
    1px solid rgba(255, 255, 255, 0.15);
}

.quote-summary__data span {
  color:
    rgba(255, 255, 255, 0.43);

  font-size: 0.62rem;

  letter-spacing: 0.11em;

  text-transform: uppercase;
}

.quote-summary__data strong {
  max-width: 60%;

  text-align: right;

  font-size: 0.78rem;

  font-weight: 500;
}


/* =========================================================
   BOTÓN
========================================================= */

.quote-summary__button {
  min-height: 58px;

  margin-top: 30px;

  padding: 0 20px;

  display: flex;

  align-items: center;

  justify-content: space-between;

  background: #ffffff;

  color: #111416;

  text-decoration: none;

  font-size: 0.72rem;

  font-weight: 700;

  letter-spacing: 0.1em;

  text-transform: uppercase;

  transition:
    background 0.25s ease,
    color 0.25s ease;
}

.quote-summary__button:hover {
  background:
    var(--glass-blue, #4ea7c4);

  color: #ffffff;
}

.quote-summary__note {
  margin-top: 18px;

  color:
    rgba(255, 255, 255, 0.36);

  font-size: 0.7rem;

  line-height: 1.5;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 950px) {
  .quote-section {
    padding: 90px 5vw;
  }

  .quote-heading {
    grid-template-columns: 1fr;

    gap: 30px;
  }

  .quote-shell {
    grid-template-columns: 1fr;
  }

  .quote-summary__preview {
    min-height: 260px;
  }
}


@media (max-width: 650px) {
  .quote-section {
    padding: 75px 20px;
  }

  .quote-heading h2 {
    font-size:
      clamp(2.6rem, 12vw, 4rem);
  }

  .quote-shell {
    gap: 3px;

    padding: 3px;
  }

  .quote-form {
    padding:
      40px 24px;
  }

  .quote-form__grid {
    grid-template-columns: 1fr;

    gap: 24px;
  }

  .quote-field--full {
    grid-column: auto;
  }

  .quote-summary {
    padding:
      35px 24px;
  }

  .quote-window {
    height: 220px;
  }
}
</style>