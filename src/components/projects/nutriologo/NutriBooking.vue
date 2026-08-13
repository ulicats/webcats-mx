<script setup>
import { reactive } from "vue";

const form = reactive({
  name: "",
  objective: "",
  modality: "",
  firstConsultation: "",
  message: "",
});

const sendWhatsApp = () => {
  if (
    !form.name ||
    !form.objective ||
    !form.modality ||
    !form.firstConsultation
  ) {
    alert("Por favor completa los campos requeridos.");
    return;
  }

  const message = `
Hola, me gustaría solicitar una consulta de nutrición.

Nombre: ${form.name}
Objetivo: ${form.objective}
Modalidad: ${form.modality}
Primera consulta: ${form.firstConsultation}

${form.message ? `Mensaje: ${form.message}` : ""}

¿Podrían indicarme disponibilidad?
  `.trim();

  /*
    DEMO:
    Agrega el número real cuando el sitio se entregue a un cliente.
    Ejemplo:
    https://wa.me/5213111234567?text=...
  */

  const whatsappUrl = `https://wa.me/?text=${encodeURIComponent(message)}`;

  window.open(whatsappUrl, "_blank");
};
</script>

<template>
  <section id="agenda" class="nutri-booking">
    <div class="nutri-booking__container">

      <!-- INFORMACIÓN -->
      <div class="nutri-booking__info">
        <span class="nutri-booking__eyebrow">
          Agenda tu consulta
        </span>

        <h2>
          El primer paso puede
          <strong>comenzar hoy.</strong>
        </h2>

        <p class="nutri-booking__description">
          Cuéntame un poco sobre ti y tus objetivos. Al enviar el
          formulario se abrirá WhatsApp con tu solicitud lista para enviar.
        </p>

        <div class="nutri-booking__features">

          <div class="nutri-booking__feature">
            <span>01</span>

            <div>
              <strong>Consulta personalizada</strong>
              <p>
                Evaluación de hábitos, objetivos y estilo de vida.
              </p>
            </div>
          </div>

          <div class="nutri-booking__feature">
            <span>02</span>

            <div>
              <strong>Presencial u online</strong>
              <p>
                Elige la modalidad que mejor se adapte a ti.
              </p>
            </div>
          </div>

          <div class="nutri-booking__feature">
            <span>03</span>

            <div>
              <strong>Seguimiento continuo</strong>
              <p>
                Ajustes y acompañamiento durante todo el proceso.
              </p>
            </div>
          </div>

        </div>
      </div>

      <!-- FORMULARIO -->
      <div class="nutri-booking__form-wrapper">

        <div class="nutri-booking__form-header">
          <span>Solicitud de consulta</span>
          <h3>Cuéntame sobre ti</h3>
        </div>

        <form
          class="nutri-booking__form"
          @submit.prevent="sendWhatsApp"
        >
          <!-- NOMBRE -->
          <div class="nutri-booking__field nutri-booking__field--full">
            <label for="nutri-name">
              Nombre completo *
            </label>

            <input
              id="nutri-name"
              v-model="form.name"
              type="text"
              placeholder="Tu nombre"
            />
          </div>

          <!-- OBJETIVO -->
          <div class="nutri-booking__field">
            <label for="nutri-objective">
              ¿Cuál es tu objetivo? *
            </label>

            <select
              id="nutri-objective"
              v-model="form.objective"
            >
              <option value="" disabled>
                Selecciona una opción
              </option>

              <option value="Control de peso">
                Control de peso
              </option>

              <option value="Nutrición deportiva">
                Nutrición deportiva
              </option>

              <option value="Mejorar mis hábitos">
                Mejorar mis hábitos
              </option>

              <option value="Nutrición clínica">
                Nutrición clínica
              </option>

              <option value="Otro objetivo">
                Otro objetivo
              </option>
            </select>
          </div>

          <!-- MODALIDAD -->
          <div class="nutri-booking__field">
            <label for="nutri-modality">
              Modalidad *
            </label>

            <select
              id="nutri-modality"
              v-model="form.modality"
            >
              <option value="" disabled>
                Selecciona modalidad
              </option>

              <option value="Presencial">
                Presencial
              </option>

              <option value="En línea">
                En línea
              </option>
            </select>
          </div>

          <!-- PRIMERA CONSULTA -->
          <div class="nutri-booking__field nutri-booking__field--full">
            <label>
              ¿Es tu primera consulta? *
            </label>

            <div class="nutri-booking__options">

              <label
                class="nutri-booking__option"
                :class="{
                  'is-selected':
                    form.firstConsultation === 'Sí'
                }"
              >
                <input
                  v-model="form.firstConsultation"
                  type="radio"
                  value="Sí"
                />

                <span>Sí, es mi primera consulta</span>
              </label>

              <label
                class="nutri-booking__option"
                :class="{
                  'is-selected':
                    form.firstConsultation === 'No'
                }"
              >
                <input
                  v-model="form.firstConsultation"
                  type="radio"
                  value="No"
                />

                <span>Ya soy paciente</span>
              </label>

            </div>
          </div>

          <!-- MENSAJE -->
          <div class="nutri-booking__field nutri-booking__field--full">
            <label for="nutri-message">
              ¿Hay algo más que quieras contarme?
            </label>

            <textarea
              id="nutri-message"
              v-model="form.message"
              rows="4"
              placeholder="Cuéntame brevemente sobre tu objetivo..."
            ></textarea>
          </div>

          <button
            type="submit"
            class="nutri-booking__submit"
          >
            <span>Enviar solicitud por WhatsApp</span>
            <span class="nutri-booking__arrow">→</span>
          </button>

          <p class="nutri-booking__privacy">
            Al enviar tu solicitud se abrirá WhatsApp.
            No se almacenará información desde este formulario.
          </p>
        </form>

      </div>

    </div>
  </section>
</template>

<style scoped>
.nutri-booking {
  padding: 120px 0;
  background: var(--nutri-primary);
}

.nutri-booking__container {
  width: min(1180px, calc(100% - 40px));
  margin: 0 auto;

  display: grid;
  grid-template-columns: 0.85fr 1.15fr;
  align-items: start;
  gap: 90px;
}

/* =========================
   INFORMACIÓN
========================= */

.nutri-booking__info {
  padding-top: 30px;
}

.nutri-booking__eyebrow {
  display: inline-block;
  margin-bottom: 18px;

  color: var(--nutri-secondary);

  font-size: 12px;
  font-weight: 700;
  letter-spacing: 1.7px;
  text-transform: uppercase;
}

.nutri-booking h2 {
  margin: 0;

  color: var(--nutri-white);

  font-size: clamp(42px, 5vw, 60px);
  line-height: 1.03;
  letter-spacing: -2px;
}

.nutri-booking h2 strong {
  display: block;
  color: var(--nutri-secondary);
}

.nutri-booking__description {
  max-width: 500px;

  margin: 27px 0 0;

  color: rgba(255, 255, 255, 0.65);

  font-size: 15px;
  line-height: 1.8;
}

/* FEATURES */

.nutri-booking__features {
  display: flex;
  flex-direction: column;
  gap: 0;

  margin-top: 50px;
}

.nutri-booking__feature {
  display: flex;
  gap: 18px;

  padding: 22px 0;

  border-bottom: 1px solid rgba(255, 255, 255, 0.12);
}

.nutri-booking__feature > span {
  width: 40px;
  height: 40px;
  flex-shrink: 0;

  display: grid;
  place-items: center;

  border: 1px solid rgba(255, 255, 255, 0.2);
  border-radius: 50%;

  color: var(--nutri-secondary);

  font-size: 11px;
  font-weight: 700;
}

.nutri-booking__feature div {
  display: flex;
  flex-direction: column;
  gap: 5px;
}

.nutri-booking__feature strong {
  color: var(--nutri-white);

  font-size: 14px;
}

.nutri-booking__feature p {
  margin: 0;

  color: rgba(255, 255, 255, 0.55);

  font-size: 12px;
  line-height: 1.5;
}

/* =========================
   FORMULARIO
========================= */

.nutri-booking__form-wrapper {
  padding: 45px;

  border-radius: 30px;

  background: var(--nutri-white);

  box-shadow: 0 30px 70px rgba(0, 0, 0, 0.16);
}

.nutri-booking__form-header {
  margin-bottom: 35px;
}

.nutri-booking__form-header span {
  color: var(--nutri-primary);

  font-size: 11px;
  font-weight: 700;
  letter-spacing: 1.4px;
  text-transform: uppercase;
}

.nutri-booking__form-header h3 {
  margin: 8px 0 0;

  color: var(--nutri-text);

  font-size: 30px;
  letter-spacing: -1px;
}

.nutri-booking__form {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 22px;
}

.nutri-booking__field {
  display: flex;
  flex-direction: column;
  gap: 9px;
}

.nutri-booking__field--full {
  grid-column: 1 / -1;
}

.nutri-booking__field > label {
  color: var(--nutri-text);

  font-size: 12px;
  font-weight: 700;
}

.nutri-booking input,
.nutri-booking select,
.nutri-booking textarea {
  width: 100%;

  padding: 15px 16px;

  border: 1px solid var(--nutri-border);
  border-radius: 12px;
  outline: none;

  background: var(--nutri-bg);
  color: var(--nutri-text);

  font-family: inherit;
  font-size: 14px;

  transition:
    border-color 0.25s ease,
    box-shadow 0.25s ease;
}

.nutri-booking textarea {
  resize: vertical;
  min-height: 120px;
}

.nutri-booking input:focus,
.nutri-booking select:focus,
.nutri-booking textarea:focus {
  border-color: var(--nutri-secondary);

  box-shadow: 0 0 0 3px rgba(134, 167, 137, 0.15);
}

.nutri-booking input::placeholder,
.nutri-booking textarea::placeholder {
  color: #9aa39f;
}

/* OPCIONES */

.nutri-booking__options {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 12px;
}

.nutri-booking__option {
  display: flex;
  align-items: center;
  gap: 10px;

  padding: 15px;

  border: 1px solid var(--nutri-border);
  border-radius: 12px;

  background: var(--nutri-bg);

  color: var(--nutri-text-soft);

  font-size: 12px;

  cursor: pointer;

  transition:
    border-color 0.25s ease,
    background 0.25s ease;
}

.nutri-booking__option input {
  width: auto;
  padding: 0;
}

.nutri-booking__option.is-selected {
  border-color: var(--nutri-secondary);
  background: var(--nutri-soft);
  color: var(--nutri-primary);
}

/* BOTÓN */

.nutri-booking__submit {
  grid-column: 1 / -1;

  width: 100%;

  display: flex;
  align-items: center;
  justify-content: space-between;

  margin-top: 5px;
  padding: 17px 22px;

  border: 1px solid var(--nutri-primary);
  border-radius: 999px;

  background: var(--nutri-primary);
  color: var(--nutri-white);

  font-family: inherit;
  font-size: 13px;
  font-weight: 700;

  cursor: pointer;

  transition:
    transform 0.25s ease,
    background 0.25s ease,
    color 0.25s ease;
}

.nutri-booking__submit:hover {
  transform: translateY(-2px);

  background: transparent;
  color: var(--nutri-primary);
}

.nutri-booking__arrow {
  font-size: 20px;
}

.nutri-booking__privacy {
  grid-column: 1 / -1;

  margin: -5px 0 0;

  color: var(--nutri-text-soft);

  font-size: 10px;
  line-height: 1.5;
  text-align: center;
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 950px) {
  .nutri-booking {
    padding: 90px 0;
  }

  .nutri-booking__container {
    grid-template-columns: 1fr;
    gap: 60px;
  }

  .nutri-booking__info {
    max-width: 700px;
    padding-top: 0;
  }
}

@media (max-width: 600px) {
  .nutri-booking {
    padding: 70px 0;
  }

  .nutri-booking__container {
    width: calc(100% - 28px);
  }

  .nutri-booking__form-wrapper {
    padding: 28px 20px;
    border-radius: 22px;
  }

  .nutri-booking__form {
    grid-template-columns: 1fr;
  }

  .nutri-booking__field,
  .nutri-booking__field--full {
    grid-column: 1;
  }

  .nutri-booking__options {
    grid-template-columns: 1fr;
  }

  .nutri-booking__submit,
  .nutri-booking__privacy {
    grid-column: 1;
  }
}
</style>