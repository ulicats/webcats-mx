<template>
  <section id="reservar" class="booking-section">
    <div class="booking-container">

      <!-- INFORMACIÓN -->
      <div class="booking-intro">
        <p class="booking-eyebrow">
          Consulta tu estancia
        </p>

        <h2>
          Demostración 
          <span>de funcionalidad</span>
        </h2>

        <p class="booking-description">
          Este formulario forma parte del proyecto demostrativo de Webcats.mx y no realiza una reservación directamente con Arce Cabañas.
        </p>

        <div class="booking-benefits">
          <div>
            <span>01</span>

            <p>
              Selecciona tus fechas y la cabaña que te interesa.
            </p>
          </div>

          <div>
            <span>02</span>

            <p>
              Revisaremos la disponibilidad de tu estancia.
            </p>
          </div>

          <div>
            <span>03</span>

            <p>
              Recibirás atención directamente por WhatsApp.
            </p>
          </div>
        </div>

        <div class="booking-note">
          <span>✓</span>
          Enviar esta solicitud no confirma una reservación.
        </div>
      </div>

      <!-- FORMULARIO -->
      <form
        class="booking-form"
        @submit.prevent="sendToWhatsApp"
      >
        <div class="booking-form__heading">
          <span>Solicitud de disponibilidad</span>

          <p>
            Completa los datos de tu estancia.
          </p>
        </div>

        <!-- NOMBRE -->
        <div class="form-group form-group--full">
          <label for="booking-name">
            Tu nombre
          </label>

          <input
            id="booking-name"
            v-model.trim="form.name"
            type="text"
            placeholder="Ej. Ulises Guzmán"
            autocomplete="name"
            required
          />
        </div>

        <!-- CABAÑA -->
        <div class="form-group form-group--full">
          <label for="booking-cabin">
            ¿Qué cabaña te interesa?
          </label>

          <select
            id="booking-cabin"
            v-model="form.cabin"
            required
          >
            <option value="" disabled>
              Selecciona una opción
            </option>

            <option value="Cabaña Arce">
              Cabaña Arce
            </option>

            <option value="Cabaña Bosque">
              Cabaña Bosque
            </option>

            <option value="Cabaña Mirador">
              Cabaña Mirador
            </option>

            <option value="Aún no estoy seguro">
              Aún no estoy seguro
            </option>
          </select>
        </div>

        <!-- FECHAS -->
        <div class="form-row">
          <div class="form-group">
            <label for="booking-checkin">
              Fecha de entrada
            </label>

            <input
              id="booking-checkin"
              v-model="form.checkIn"
              :min="today"
              type="date"
              required
            />
          </div>

          <div class="form-group">
            <label for="booking-checkout">
              Fecha de salida
            </label>

            <input
              id="booking-checkout"
              v-model="form.checkOut"
              :min="minimumCheckout"
              type="date"
              required
            />
          </div>
        </div>

        <!-- HUÉSPEDES -->
        <div class="form-row">
          <div class="form-group">
            <label for="booking-guests">
              Huéspedes
            </label>

            <select
              id="booking-guests"
              v-model="form.guests"
              required
            >
              <option value="" disabled>
                Selecciona
              </option>

              <option value="1 persona">
                1 persona
              </option>

              <option value="2 personas">
                2 personas
              </option>

              <option value="3 personas">
                3 personas
              </option>

              <option value="4 personas">
                4 personas
              </option>

              <option value="Más de 4 personas">
                Más de 4 personas
              </option>
            </select>
          </div>

          <div class="form-group">
            <label for="booking-children">
              ¿Viajan niños?
            </label>

            <select
              id="booking-children"
              v-model="form.children"
            >
              <option value="No">
                No
              </option>

              <option value="Sí">
                Sí
              </option>
            </select>
          </div>
        </div>

        <!-- SERVICIO -->
        <div class="form-group form-group--full">
          <label for="booking-service">
            Servicio adicional
          </label>

          <select
            id="booking-service"
            v-model="form.service"
          >
            <option value="Ninguno">
              Ninguno
            </option>

            <option value="Tabla de quesos">
              Tabla de quesos
            </option>

            <option value="Masaje">
              Masaje
            </option>

            <option value="Quiero información sobre servicios adicionales">
              Quiero conocer las opciones
            </option>
          </select>
        </div>

        <!-- COMENTARIOS -->
        <div class="form-group form-group--full">
          <label for="booking-comments">
            ¿Quieres contarnos algo más?
            <span>Opcional</span>
          </label>

          <textarea
            id="booking-comments"
            v-model.trim="form.comments"
            rows="4"
            placeholder="Ej. Celebramos un aniversario, queremos información sobre actividades, etc."
          ></textarea>
        </div>

        <!-- RESUMEN -->
        <div
          v-if="showSummary"
          class="booking-summary"
        >
          <p class="booking-summary__title">
            Tu estancia
          </p>

          <div class="booking-summary__dates">
            <div>
              <span>Entrada</span>
              <strong>
                {{ formattedCheckIn }}
              </strong>
            </div>

            <span class="booking-summary__arrow">
              →
            </span>

            <div>
              <span>Salida</span>
              <strong>
                {{ formattedCheckOut }}
              </strong>
            </div>
          </div>

          <div class="booking-summary__details">
            <span v-if="nights > 0">
              {{ nights }}
              {{ nights === 1 ? "noche" : "noches" }}
            </span>

            <span v-if="form.guests">
              {{ form.guests }}
            </span>

            <span v-if="form.cabin">
              {{ form.cabin }}
            </span>
          </div>
        </div>

        <!-- ERROR -->
        <p
          v-if="errorMessage"
          class="booking-error"
        >
          {{ errorMessage }}
        </p>

        <!-- ENVIAR -->
        <button
          type="submit"
          class="booking-submit"
        >
          <span class="booking-submit__icon">
            <svg
              viewBox="0 0 32 32"
              aria-hidden="true"
            >
              <path
                fill="currentColor"
                d="M16.04 3C8.87 3 3.05 8.78 3.05 15.91c0 2.27.6 4.49 1.72 6.44L3 29l6.83-1.78a13.03 13.03 0 0 0 6.2 1.57h.01C23.21 28.79 29 23 29 15.91S23.21 3 16.04 3Zm0 23.61a10.9 10.9 0 0 1-5.55-1.52l-.4-.24-4.05 1.06 1.08-3.93-.26-.4a10.64 10.64 0 0 1-1.65-5.67c0-5.94 4.86-10.74 10.83-10.74 5.96 0 10.81 4.8 10.81 10.74 0 5.92-4.85 10.7-10.81 10.7Z"
              />
            </svg>
          </span>

          Consultar disponibilidad por WhatsApp

          <span aria-hidden="true">
            →
          </span>
        </button>

        <p class="booking-privacy">
          Tus datos solamente se utilizan para generar el mensaje.
          No almacenamos esta información.
        </p>
      </form>

    </div>
  </section>
</template>

<script setup>
import { computed, reactive, ref, watch } from "vue";

/*
 * CAMBIAR posteriormente por el número real
 * Formato:
 * 52 + lada + número
 *
 * Ejemplo:
 * 523111234567
 */
const whatsappNumber = "523332341375";

const errorMessage = ref("");

const form = reactive({
  name: "",
  cabin: "",
  checkIn: "",
  checkOut: "",
  guests: "",
  children: "No",
  service: "Ninguno",
  comments: "",
});

function resetForm() {
  form.name= "";
  form.cabin= "";
  form.checkIn= "";
  form.checkOut= "";
  form.guests= "";
  form.children= "No";
  form.service= "Ninguno";
  form.comments= "";
}

const toLocalDateInput = (date) => {
  const year = date.getFullYear();

  const month = String(
    date.getMonth() + 1
  ).padStart(2, "0");

  const day = String(
    date.getDate()
  ).padStart(2, "0");

  return `${year}-${month}-${day}`;
};

const today = computed(() => {
  return toLocalDateInput(new Date());
});

const minimumCheckout = computed(() => {
  if (!form.checkIn) {
    return today.value;
  }

  const date = new Date(
    `${form.checkIn}T00:00:00`
  );

  date.setDate(date.getDate() + 1);

  return toLocalDateInput(date);
});

const nights = computed(() => {
  if (!form.checkIn || !form.checkOut) {
    return 0;
  }

  const checkIn = new Date(
    `${form.checkIn}T00:00:00`
  );

  const checkOut = new Date(
    `${form.checkOut}T00:00:00`
  );

  const difference =
    checkOut.getTime() - checkIn.getTime();

  if (difference <= 0) {
    return 0;
  }

  return Math.round(
    difference / (1000 * 60 * 60 * 24)
  );
});

const formatDate = (dateString) => {
  if (!dateString) {
    return "";
  }

  const date = new Date(
    `${dateString}T00:00:00`
  );

  return new Intl.DateTimeFormat(
    "es-MX",
    {
      day: "2-digit",
      month: "short",
      year: "numeric",
    }
  ).format(date);
};

const formattedCheckIn = computed(() => {
  return formatDate(form.checkIn);
});

const formattedCheckOut = computed(() => {
  return formatDate(form.checkOut);
});

const showSummary = computed(() => {
  return Boolean(
    form.checkIn ||
    form.checkOut ||
    form.guests ||
    form.cabin
  );
});

/*
 * Si cambia entrada y la salida ya no es válida,
 * limpiamos automáticamente la fecha de salida.
 */
watch(
  () => form.checkIn,
  () => {
    if (
      form.checkOut &&
      form.checkOut < minimumCheckout.value
    ) {
      form.checkOut = "";
    }
  }
);

const sendToWhatsApp = () => {
  errorMessage.value = "";

  if (
    !form.name ||
    !form.cabin ||
    !form.checkIn ||
    !form.checkOut ||
    !form.guests
  ) {
    errorMessage.value =
      "Completa los campos obligatorios antes de continuar.";

    return;
  }

  if (nights.value <= 0) {
    errorMessage.value =
      "La fecha de salida debe ser posterior a la fecha de entrada.";

    return;
  }

  const nightsLabel =
    nights.value === 1
      ? "1 noche"
      : `${nights.value} noches`;

  const comments =
    form.comments ||
    "Sin comentarios adicionales";

  const message = [
    "Hola, quiero consultar disponibilidad en *Arce Cabañas Mazamitla*.",
    "",
    ` *Nombre:* ${form.name}`,
    ` *Cabaña:* ${form.cabin}`,
    ` *Entrada:* ${formattedCheckIn.value}`,
    ` *Salida:* ${formattedCheckOut.value}`,
    ` *Estancia:* ${nightsLabel}`,
    ` *Huéspedes:* ${form.guests}`,
    ` *Viajan niños:* ${form.children}`,
    ` *Servicio adicional:* ${form.service}`,
    ` *Comentarios:* ${comments}`,
    "",
    "¿Tienen disponibilidad para estas fechas?",
  ].join("\n");

  const url =
    `https://wa.me/${whatsappNumber}` +
    `?text=${encodeURIComponent(message)}`;

  window.open(
    url,
    "_blank",
    "noopener,noreferrer"
  );

  resetForm();
  
};
</script>

<style scoped>
.booking-section {
  position: relative;
  padding: 120px 0;
  overflow: hidden;
  background: var(--arce-cream);
}

.booking-section::before {
  content: "";
  position: absolute;
  top: -250px;
  left: -220px;
  width: 520px;
  height: 520px;
  border: 1px solid rgba(181, 154, 59, 0.12);
  border-radius: 50%;
}

.booking-container {
  position: relative;
  z-index: 2;

  width: min(1180px, calc(100% - 40px));
  margin: 0 auto;

  display: grid;
  grid-template-columns: 0.85fr 1.15fr;
  gap: 80px;
  align-items: start;
}

/* ============================ */
/* INTRO                        */
/* ============================ */

.booking-intro {
  position: sticky;
  top: 130px;
}

.booking-eyebrow {
  margin-bottom: 17px;

  color: var(--arce-gold);

  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.25em;
  text-transform: uppercase;
}

.booking-intro h2 {
  color: var(--arce-navy-950);

  font-family: var(--arce-heading);
  font-size: clamp(52px, 6vw, 80px);
  font-weight: 500;
  line-height: 0.92;
  letter-spacing: -0.035em;
}

.booking-intro h2 span {
  display: block;

  margin-top: 6px;

  color: var(--arce-gold);

  font-style: italic;
}

.booking-description {
  max-width: 500px;

  margin-top: 27px;

  color: var(--arce-muted);

  font-size: 14px;
  line-height: 1.8;
}

.booking-benefits {
  margin-top: 38px;
}

.booking-benefits > div {
  padding: 17px 0;

  border-top: 1px solid
    rgba(19, 40, 58, 0.1);

  display: grid;
  grid-template-columns: 45px 1fr;
  align-items: center;
  gap: 13px;
}

.booking-benefits > div:last-child {
  border-bottom: 1px solid
    rgba(19, 40, 58, 0.1);
}

.booking-benefits span {
  color: var(--arce-gold);

  font-family: var(--arce-heading);
  font-size: 21px;
}

.booking-benefits p {
  color: var(--arce-navy-900);

  font-size: 12px;
  line-height: 1.6;
}

.booking-note {
  margin-top: 25px;

  display: flex;
  align-items: center;
  gap: 9px;

  color: var(--arce-muted);

  font-size: 10px;
  line-height: 1.5;
}

.booking-note span {
  width: 23px;
  height: 23px;

  border-radius: 50%;

  display: grid;
  place-items: center;

  flex: 0 0 auto;

  color: var(--arce-white);
  background: var(--arce-gold);

  font-size: 10px;
}

/* ============================ */
/* FORM                         */
/* ============================ */

.booking-form {
  padding: 42px;

  border: 1px solid
    rgba(19, 40, 58, 0.08);

  border-radius: 25px;

  background: var(--arce-white);

  box-shadow:
    0 24px 70px
    rgba(19, 40, 58, 0.08);
}

.booking-form__heading {
  margin-bottom: 31px;
}

.booking-form__heading > span {
  color: var(--arce-navy-950);

  font-family: var(--arce-heading);
  font-size: 33px;
  font-weight: 600;
}

.booking-form__heading p {
  margin-top: 6px;

  color: var(--arce-muted);

  font-size: 11px;
}

.form-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 17px;
}

.form-group {
  margin-bottom: 19px;
}

.form-group label {
  margin-bottom: 8px;

  display: block;

  color: var(--arce-navy-900);

  font-size: 10px;
  font-weight: 700;
  letter-spacing: 0.025em;
}

.form-group label span {
  margin-left: 4px;

  color: var(--arce-muted);

  font-size: 9px;
  font-weight: 400;
}

.form-group input,
.form-group select,
.form-group textarea {
  width: 100%;

  border: 1px solid
    rgba(19, 40, 58, 0.12);

  border-radius: 11px;

  outline: none;

  color: var(--arce-navy-950);
  background: #fbfaf7;

  font-family: var(--arce-body);
  font-size: 12px;

  transition:
    border-color 0.2s ease,
    box-shadow 0.2s ease,
    background-color 0.2s ease;
}

.form-group input,
.form-group select {
  min-height: 50px;

  padding: 0 14px;
}

.form-group textarea {
  min-height: 115px;

  padding: 14px;

  resize: vertical;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
  border-color: var(--arce-gold);

  background: var(--arce-white);

  box-shadow:
    0 0 0 3px
    rgba(181, 154, 59, 0.1);
}

.form-group input::placeholder,
.form-group textarea::placeholder {
  color: #a1a7aa;
}

/* ============================ */
/* SUMMARY                      */
/* ============================ */

.booking-summary {
  margin-top: 7px;
  margin-bottom: 22px;

  padding: 21px;

  border: 1px solid
    rgba(181, 154, 59, 0.18);

  border-radius: 15px;

  background:
    rgba(181, 154, 59, 0.07);
}

.booking-summary__title {
  margin-bottom: 14px;

  color: var(--arce-gold);

  font-size: 9px;
  font-weight: 700;
  letter-spacing: 0.18em;
  text-transform: uppercase;
}

.booking-summary__dates {
  display: flex;
  align-items: center;
  gap: 18px;
}

.booking-summary__dates > div {
  display: flex;
  flex-direction: column;
}

.booking-summary__dates span:not(
  .booking-summary__arrow
) {
  color: var(--arce-muted);

  font-size: 9px;
  text-transform: uppercase;
}

.booking-summary__dates strong {
  margin-top: 4px;

  color: var(--arce-navy-950);

  font-family: var(--arce-heading);
  font-size: 21px;
  font-weight: 600;
  text-transform: capitalize;
}

.booking-summary__arrow {
  color: var(--arce-gold);

  font-size: 20px;
}

.booking-summary__details {
  margin-top: 16px;

  display: flex;
  flex-wrap: wrap;
  gap: 7px;
}

.booking-summary__details span {
  padding: 7px 10px;

  border-radius: 999px;

  color: var(--arce-navy-900);
  background: rgba(19, 40, 58, 0.06);

  font-size: 9px;
  font-weight: 600;
}

/* ============================ */
/* SUBMIT                       */
/* ============================ */

.booking-error {
  margin-bottom: 14px;

  padding: 11px 13px;

  border-radius: 9px;

  color: #9c3737;
  background: #fff0f0;

  font-size: 10px;
  line-height: 1.5;
}

.booking-submit {
  width: 100%;
  min-height: 57px;

  padding: 0 20px;

  border: 0;
  border-radius: 999px;

  display: flex;
  align-items: center;
  justify-content: center;
  gap: 11px;

  color: var(--arce-white);
  background: #25d366;

  font-family: var(--arce-body);
  font-size: 11px;
  font-weight: 700;

  cursor: pointer;

  box-shadow:
    0 13px 30px
    rgba(37, 211, 102, 0.18);

  transition:
    transform 0.2s ease,
    box-shadow 0.2s ease,
    background-color 0.2s ease;
}

.booking-submit:hover {
  transform: translateY(-2px);

  background: #20bd5a;

  box-shadow:
    0 17px 35px
    rgba(37, 211, 102, 0.24);
}

.booking-submit__icon {
  width: 21px;
  height: 21px;

  display: inline-flex;
}

.booking-submit__icon svg {
  width: 100%;
  height: 100%;
}

.booking-privacy {
  margin-top: 12px;

  color: var(--arce-muted);

  font-size: 8px;
  line-height: 1.5;
  text-align: center;
}

/* ============================ */
/* RESPONSIVE                   */
/* ============================ */

@media (max-width: 950px) {
  .booking-container {
    grid-template-columns: 1fr;

    gap: 50px;
  }

  .booking-intro {
    position: static;

    max-width: 720px;
  }

  .booking-description {
    max-width: 620px;
  }
}

@media (max-width: 650px) {
  .booking-section {
    padding: 85px 0;
  }

  .booking-container {
    width: min(
      100% - 28px,
      1180px
    );

    gap: 38px;
  }

  .booking-form {
    padding: 25px 18px;

    border-radius: 19px;
  }

  .booking-form__heading > span {
    font-size: 27px;
  }

  .form-row {
    grid-template-columns: 1fr;

    gap: 0;
  }

  .booking-summary__dates {
    align-items: flex-start;

    gap: 10px;
  }

  .booking-summary__dates strong {
    font-size: 17px;
  }

  .booking-submit {
    min-height: 61px;

    padding: 10px 17px;

    font-size: 10px;
    line-height: 1.35;
  }
}
</style>