<template>
  <section id="reservar" class="booking-section">
    <div class="booking-container">

      <!-- INFORMACIÓN -->
      <div class="booking-intro">
        <p class="booking-eyebrow">
          Prueba el formulario
        </p>

        <h2>
          Demostración
          <span>de funcionalidad</span>
        </h2>

        <p class="booking-description">
          El formulario se adapta al tipo de espacio que elijas.
          Una cabaña no se renta igual que un salón de eventos,
          así que cada opción muestra solamente los datos que realmente necesita.
        </p>

        <div class="booking-benefits">
          <div>
            <span>01</span>
            <p>
              Elige el tipo de espacio y el formulario cambia automáticamente.
            </p>
          </div>

          <div>
            <span>02</span>
            <p>
              Selecciona fechas, personas y todos los servicios extra que quieras.
            </p>
          </div>

          <div>
            <span>03</span>
            <p>
              Envía la solicitud de prueba directamente por WhatsApp.
            </p>
          </div>
        </div>

        <div class="booking-note">
          <span>✓</span>
          Esta demostración no genera una reservación real, nomás es pa' calar cómo funciona :)
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
            Primero elige un espacio. Lo demás se acomoda solito.
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
            placeholder="Nombre completo"
            autocomplete="name"
            required
          />
        </div>


        <!-- TIPO DE ESPACIO -->
        <div class="form-group form-group--full">
          <label for="booking-space">
            ¿Qué tipo de espacio te interesa?
          </label>

          <select
            id="booking-space"
            v-model="form.space"
            required
          >
            <option value="" disabled>
              Selecciona un tipo de espacio
            </option>

            <option value="Local con Alberca">
              Local con Alberca
            </option>

            <option value="Departamento Vacacional">
              Departamento Vacacional
            </option>

            <option value="Salón de Eventos">
              Salón de Eventos
            </option>

            <option value="Cabaña en el Bosque">
              Cabaña en el Bosque
            </option>
          </select>
        </div>


        <!-- SIN SELECCIÓN -->
        <div
          v-if="!form.space"
          class="booking-empty-state"
        >
          Elige una de las cuatro opciones y verás cómo el formulario
          cambia según el tipo de renta.
        </div>


        <!-- FORMULARIO DINÁMICO -->
        <div
          v-else
          class="booking-dynamic"
        >
          <p class="booking-dynamic-note">
            {{ currentConfig.helper }}
          </p>


          <!-- =====================================
               HOSPEDAJE: DEPARTAMENTO / CABAÑA
          ====================================== -->
          <template v-if="isAccommodation">

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


            <div class="form-group form-group--full">
              <label for="booking-guests">
                ¿Cuántos huéspedes?
              </label>

              <select
                id="booking-guests"
                v-model="form.guests"
                required
              >
                <option value="" disabled>
                  Selecciona
                </option>

                <option
                  v-for="option in currentConfig.guests"
                  :key="option.value"
                  :value="option.value"
                >
                  {{ option.label }}
                </option>
              </select>
            </div>

          </template>


          <!-- =====================================
               EVENTOS: LOCAL / SALÓN
          ====================================== -->
          <template v-else>

            <div class="form-group form-group--full">
              <label for="booking-event-date">
                Fecha de la renta
              </label>

              <input
                id="booking-event-date"
                v-model="form.eventDate"
                :min="today"
                type="date"
                required
              />
            </div>


            <div class="form-row">
              <div class="form-group">
                <label for="booking-start-time">
                  Hora de inicio
                </label>

                <input
                  id="booking-start-time"
                  v-model="form.startTime"
                  type="time"
                  required
                />
              </div>

              <div class="form-group">
                <label for="booking-end-time">
                  Hora de término
                </label>

                <input
                  id="booking-end-time"
                  v-model="form.endTime"
                  type="time"
                  required
                />
              </div>
            </div>


            <div class="form-group form-group--full">
              <label for="booking-guests">
                ¿Cuántas personas?
              </label>

              <select
                id="booking-guests"
                v-model="form.guests"
                required
              >
                <option value="" disabled>
                  Selecciona
                </option>

                <option
                  v-for="option in currentConfig.guests"
                  :key="option.value"
                  :value="option.value"
                >
                  {{ option.label }}
                </option>
              </select>
            </div>

          </template>


          <!-- SERVICIOS ADICIONALES -->
          <div class="extras-block">
            <div class="extras-heading">
              <strong>Servicios adicionales</strong>

              <span>
                Puedes seleccionar varios
              </span>
            </div>

            <div class="extras-grid">
              <label
                v-for="service in currentConfig.services"
                :key="service"
                class="extra-option"
                :class="{
                  'extra-option--active':
                    form.services.includes(service)
                }"
              >
                <input
                  v-model="form.services"
                  type="checkbox"
                  :value="service"
                />

                <span class="extra-option__check">
                  ✓
                </span>

                <span class="extra-option__label">
                  {{ service }}
                </span>
              </label>
            </div>
          </div>


          <!-- COMENTARIOS -->
          <div class="form-group form-group--full">
            <label for="booking-comments">
              ¿Quieres contarme algo más?
              <span>Opcional</span>
            </label>

            <textarea
              id="booking-comments"
              v-model.trim="form.comments"
              rows="4"
              :placeholder="currentConfig.placeholder"
            ></textarea>
          </div>


          <!-- RESUMEN -->
          <div
            v-if="showSummary"
            class="booking-summary"
          >
            <p class="booking-summary__title">
              Resumen de tu prueba
            </p>


            <!-- RESUMEN HOSPEDAJE -->
            <div
              v-if="isAccommodation"
              class="booking-summary__dates"
            >
              <div>
                <span>Entrada</span>

                <strong>
                  {{ formattedCheckIn || "—" }}
                </strong>
              </div>

              <span class="booking-summary__arrow">
                →
              </span>

              <div>
                <span>Salida</span>

                <strong>
                  {{ formattedCheckOut || "—" }}
                </strong>
              </div>
            </div>


            <!-- RESUMEN EVENTO -->
            <div
              v-else
              class="booking-summary__dates"
            >
              <div>
                <span>Fecha</span>

                <strong>
                  {{ formattedEventDate || "—" }}
                </strong>
              </div>

              <span class="booking-summary__arrow">
                ·
              </span>

              <div>
                <span>Horario</span>

                <strong>
                  {{ eventSchedule || "—" }}
                </strong>
              </div>
            </div>


            <div class="booking-summary__details">

              <span v-if="form.space">
                {{ form.space }}
              </span>

              <span v-if="form.guests">
                {{ form.guests }}
              </span>

              <span
                v-if="isAccommodation && nights > 0"
              >
                {{ nights }}
                {{ nights === 1 ? "noche" : "noches" }}
              </span>

            </div>


            <div
              v-if="form.services.length"
              class="booking-summary__extras"
            >
              <p>Extras seleccionados</p>

              <div class="booking-summary__extras-list">
                <span
                  v-for="service in form.services"
                  :key="service"
                >
                  {{ service }}
                </span>
              </div>
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

            Enviar prueba por WhatsApp

            <span aria-hidden="true">
              →
            </span>
          </button>

          <p class="booking-privacy">
            Tus datos solamente se utilizan para generar el mensaje.
            No almacenamos esta información.
          </p>

        </div>
      </form>

    </div>
  </section>
</template>


<script setup>
import {
  computed,
  reactive,
  ref,
  watch
} from "vue";


/*
|--------------------------------------------------------------------------
| WHATSAPP
|--------------------------------------------------------------------------
*/

const whatsappNumber =
  "523332341375";


/*
|--------------------------------------------------------------------------
| CONFIGURACIÓN POR TIPO DE ESPACIO
|--------------------------------------------------------------------------
*/

const spaceConfig = {

  "Local con Alberca": {
    mode: "event",

    helper:
      "Para un local con alberca importa la fecha, el horario, cuánta gente irá y qué extras quieres agregar.",

    guests: [
      {
        value: "1–10 personas",
        label: "1–10 personas"
      },
      {
        value: "11–20 personas",
        label: "11–20 personas"
      },
      {
        value: "21–30 personas",
        label: "21–30 personas"
      },
      {
        value: "31–50 personas",
        label: "31–50 personas"
      }
    ],

    services: [
      "Mesas y sillas",
      "Decoración",
      "Sonido / bocina",
      "Asador",
      "Hieleras",
      "¡Cerveza bien fría! 🍺"
    ],

    placeholder:
      "Ej. Necesitamos espacio para 25 personas y queremos llevar nuestra propia música."
  },


  "Departamento Vacacional": {
    mode: "stay",

    helper:
      "Para una estancia sí necesitamos entrada y salida. La fecha de salida siempre debe ser por lo menos un día después.",

    guests: [
      {
        value: "1 huésped",
        label: "1 huésped"
      },
      {
        value: "2 huéspedes",
        label: "2 huéspedes"
      },
      {
        value: "3 huéspedes",
        label: "3 huéspedes"
      },
      {
        value: "4 huéspedes",
        label: "4 huéspedes"
      }
    ],

    services: [
      "Desayuno",
      "Limpieza adicional",
      "Estacionamiento",
      "Traslado",
      "Check-in anticipado",
      "Check-out tardío"
    ],

    placeholder:
      "Ej. Llegaremos por la tarde y necesitamos estacionamiento para un vehículo."
  },


  "Salón de Eventos": {
    mode: "event",

    helper:
      "En un salón de eventos necesitamos la fecha, horario, número aproximado de invitados y los servicios que quieras incluir.",

    guests: [
      {
        value: "1–30 personas",
        label: "1–30 personas"
      },
      {
        value: "31–60 personas",
        label: "31–60 personas"
      },
      {
        value: "61–100 personas",
        label: "61–100 personas"
      },
      {
        value: "101–150 personas",
        label: "101–150 personas"
      },
      {
        value: "Más de 150 personas",
        label: "Más de 150 personas"
      }
    ],

    services: [
      "Mesas y sillas",
      "Decoración",
      "Sonido",
      "DJ",
      "Iluminación",
      "Barra de bebidas",
      "Banquete",
      "Fotografía"
    ],

    placeholder:
      "Ej. Necesitamos montaje para aproximadamente 80 personas y espacio para DJ."
  },


  "Cabaña en el Bosque": {
    mode: "stay",

    helper:
      "La cabaña se renta por noche: eliges entrada, salida y hasta 4 huéspedes. No se puede entrar y salir el mismo día.",

    guests: [
      {
        value: "2 huéspedes",
        label: "2 huéspedes"
      },
      {
        value: "3 huéspedes",
        label: "3 huéspedes"
      },
      {
        value: "4 huéspedes",
        label: "4 huéspedes"
      }
    ],

    services: [
      "Desayuno",
      "Masaje",
      "Renta de moto",
      "Leña extra",
      "Decoración romántica",
      "Tabla de quesos"
    ],

    placeholder:
      "Ej. Vamos por aniversario y nos interesa masaje y desayuno."
  }

};


/*
|--------------------------------------------------------------------------
| FORMULARIO
|--------------------------------------------------------------------------
*/

const errorMessage =
  ref("");

const form =
  reactive({
    name: "",
    space: "",

    checkIn: "",
    checkOut: "",

    eventDate: "",
    startTime: "",
    endTime: "",

    guests: "",
    services: [],

    comments: ""
  });


const currentConfig =
  computed(() => {
    return (
      spaceConfig[form.space] ||
      {
        mode: "",
        helper: "",
        guests: [],
        services: [],
        placeholder: ""
      }
    );
  });


const isAccommodation =
  computed(() => {
    return (
      currentConfig.value.mode ===
      "stay"
    );
  });


/*
|--------------------------------------------------------------------------
| FECHAS
|--------------------------------------------------------------------------
*/

const toLocalDateInput =
  (date) => {

    const year =
      date.getFullYear();

    const month =
      String(
        date.getMonth() + 1
      ).padStart(2, "0");

    const day =
      String(
        date.getDate()
      ).padStart(2, "0");

    return `${year}-${month}-${day}`;
  };


const today =
  computed(() => {
    return toLocalDateInput(
      new Date()
    );
  });


const minimumCheckout =
  computed(() => {

    if (!form.checkIn) {
      return today.value;
    }

    const date =
      new Date(
        `${form.checkIn}T00:00:00`
      );

    date.setDate(
      date.getDate() + 1
    );

    return toLocalDateInput(
      date
    );
  });


const nights =
  computed(() => {

    if (
      !form.checkIn ||
      !form.checkOut
    ) {
      return 0;
    }

    const checkIn =
      new Date(
        `${form.checkIn}T00:00:00`
      );

    const checkOut =
      new Date(
        `${form.checkOut}T00:00:00`
      );

    const difference =
      checkOut.getTime() -
      checkIn.getTime();

    if (difference <= 0) {
      return 0;
    }

    return Math.round(
      difference /
      (1000 * 60 * 60 * 24)
    );
  });


const formatDate =
  (dateString) => {

    if (!dateString) {
      return "";
    }

    const date =
      new Date(
        `${dateString}T00:00:00`
      );

    return new Intl.DateTimeFormat(
      "es-MX",
      {
        day: "2-digit",
        month: "short",
        year: "numeric"
      }
    ).format(date);
  };


const formattedCheckIn =
  computed(() => {
    return formatDate(
      form.checkIn
    );
  });


const formattedCheckOut =
  computed(() => {
    return formatDate(
      form.checkOut
    );
  });


const formattedEventDate =
  computed(() => {
    return formatDate(
      form.eventDate
    );
  });


const eventSchedule =
  computed(() => {

    if (
      !form.startTime ||
      !form.endTime
    ) {
      return "";
    }

    return (
      `${form.startTime} – ` +
      `${form.endTime}`
    );
  });


/*
|--------------------------------------------------------------------------
| RESUMEN
|--------------------------------------------------------------------------
*/

const showSummary =
  computed(() => {

    if (!form.space) {
      return false;
    }

    return Boolean(
      form.checkIn ||
      form.checkOut ||
      form.eventDate ||
      form.startTime ||
      form.endTime ||
      form.guests ||
      form.services.length
    );
  });


/*
|--------------------------------------------------------------------------
| CAMBIO DE ESPACIO
|--------------------------------------------------------------------------
*/

watch(
  () => form.space,
  () => {

    form.checkIn = "";
    form.checkOut = "";

    form.eventDate = "";
    form.startTime = "";
    form.endTime = "";

    form.guests = "";
    form.services = [];

    form.comments = "";

    errorMessage.value = "";
  }
);


watch(
  () => form.checkIn,
  () => {

    if (
      form.checkOut &&
      form.checkOut <
      minimumCheckout.value
    ) {
      form.checkOut = "";
    }
  }
);


/*
|--------------------------------------------------------------------------
| RESET
|--------------------------------------------------------------------------
*/

function resetForm() {

  form.name = "";
  form.space = "";

  form.checkIn = "";
  form.checkOut = "";

  form.eventDate = "";
  form.startTime = "";
  form.endTime = "";

  form.guests = "";
  form.services = [];

  form.comments = "";

  errorMessage.value = "";
}


/*
|--------------------------------------------------------------------------
| VALIDACIÓN
|--------------------------------------------------------------------------
*/

function validateForm() {

  errorMessage.value = "";

  if (
    !form.name ||
    !form.space ||
    !form.guests
  ) {
    errorMessage.value =
      "Completa los campos obligatorios antes de continuar.";

    return false;
  }


  if (isAccommodation.value) {

    if (
      !form.checkIn ||
      !form.checkOut
    ) {
      errorMessage.value =
        "Selecciona la fecha de entrada y la fecha de salida.";

      return false;
    }

    if (nights.value < 1) {
      errorMessage.value =
        "La estancia debe ser de al menos una noche.";

      return false;
    }

  } else {

    if (
      !form.eventDate ||
      !form.startTime ||
      !form.endTime
    ) {
      errorMessage.value =
        "Selecciona la fecha y el horario de la renta.";

      return false;
    }

    if (
      form.endTime <=
      form.startTime
    ) {
      errorMessage.value =
        "La hora de término debe ser posterior a la hora de inicio.";

      return false;
    }

  }

  return true;
}


/*
|--------------------------------------------------------------------------
| WHATSAPP
|--------------------------------------------------------------------------
*/

function sendToWhatsApp() {

  if (!validateForm()) {
    return;
  }

  const comments =
    form.comments ||
    "Sin comentarios adicionales";

  const services =
    form.services.length
      ? form.services.join(", ")
      : "Sin servicios adicionales";


  const message = [
    "Hola, estoy probando el *Demo de Rentas y Espacios de Webcats.mx* 😸",
    "",
    `*Nombre:* ${form.name}`,
    `*Espacio:* ${form.space}`,
    ""
  ];


  if (isAccommodation.value) {

    message.push(
      `*Entrada:* ${formattedCheckIn.value}`,
      `*Salida:* ${formattedCheckOut.value}`,
      `*Estancia:* ${nights.value} ${
        nights.value === 1
          ? "noche"
          : "noches"
      }`,
      `*Huéspedes:* ${form.guests}`
    );

  } else {

    message.push(
      `*Fecha:* ${formattedEventDate.value}`,
      `*Horario:* ${eventSchedule.value}`,
      `*Personas:* ${form.guests}`
    );

  }


  message.push(
    `*Servicios adicionales:* ${services}`,
    `*Comentarios:* ${comments}`,
    "",
    "Vi este demo en el portafolio de Webcats.mx y quise probar cómo funciona. :)"
  );


  const url =
    `https://wa.me/${whatsappNumber}` +
    `?text=${
      encodeURIComponent(
        message.join("\n")
      )
    }`;


  window.open(
    url,
    "_blank",
    "noopener,noreferrer"
  );


  resetForm();
}
</script>

<style scoped>
.booking-section {
  position: relative;
  padding: 120px 0;
  overflow: hidden;
  background: var(--hospedaje-cream);
}

#reservar {
  scroll-margin-top: 120px;
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

  color: var(--hospedaje-gold);

  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.25em;
  text-transform: uppercase;
}

.booking-intro h2 {
  color: var(--hospedaje-navy-950);

  font-family: var(--hospedaje-heading);
  font-size: clamp(52px, 6vw, 80px);
  font-weight: 500;
  line-height: 0.92;
  letter-spacing: -0.035em;
}

.booking-intro h2 span {
  display: block;

  margin-top: 6px;

  color: var(--hospedaje-gold);

  font-style: italic;
}

.booking-description {
  max-width: 500px;

  margin-top: 27px;

  color: var(--hospedaje-muted);

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
  color: var(--hospedaje-gold);

  font-family: var(--hospedaje-heading);
  font-size: 21px;
}

.booking-benefits p {
  color: var(--hospedaje-navy-900);

  font-size: 12px;
  line-height: 1.6;
}

.booking-note {
  margin-top: 25px;

  display: flex;
  align-items: center;
  gap: 9px;

  color: var(--hospedaje-muted);

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

  color: var(--hospedaje-white);
  background: var(--hospedaje-gold);

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

  background: var(--hospedaje-white);

  box-shadow:
    0 24px 70px
    rgba(19, 40, 58, 0.08);
}

.booking-form__heading {
  margin-bottom: 31px;
}

.booking-form__heading > span {
  color: var(--hospedaje-navy-950);

  font-family: var(--hospedaje-heading);
  font-size: 33px;
  font-weight: 600;
}

.booking-form__heading p {
  margin-top: 6px;

  color: var(--hospedaje-muted);

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

  color: var(--hospedaje-navy-900);

  font-size: 10px;
  font-weight: 700;
  letter-spacing: 0.025em;
}

.form-group label span {
  margin-left: 4px;

  color: var(--hospedaje-muted);

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

  color: var(--hospedaje-navy-950);
  background: #fbfaf7;

  font-family: var(--hospedaje-body);
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
  border-color: var(--hospedaje-gold);

  background: var(--hospedaje-white);

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

  color: var(--hospedaje-gold);

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
  color: var(--hospedaje-muted);

  font-size: 9px;
  text-transform: uppercase;
}

.booking-summary__dates strong {
  margin-top: 4px;

  color: var(--hospedaje-navy-950);

  font-family: var(--hospedaje-heading);
  font-size: 21px;
  font-weight: 600;
  text-transform: capitalize;
}

.booking-summary__arrow {
  color: var(--hospedaje-gold);

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

  color: var(--hospedaje-navy-900);
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

  color: var(--hospedaje-white);
  background: #25d366;

  font-family: var(--hospedaje-body);
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

  color: var(--hospedaje-muted);

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


/* ============================ */
/* FORMULARIO DINÁMICO          */
/* ============================ */

.booking-dynamic {
  margin-top: 4px;
}

.booking-dynamic-note {
  margin: 2px 0 20px;

  padding: 13px 15px;

  border:
    1px solid
    rgba(181, 154, 59, 0.16);

  border-radius: 11px;

  color: var(--hospedaje-muted);
  background:
    rgba(181, 154, 59, 0.055);

  font-size: 10px;
  line-height: 1.6;
}

.booking-empty-state {
  margin-top: 4px;
  padding: 24px;

  border:
    1px dashed
    rgba(19, 40, 58, 0.16);

  border-radius: 15px;

  color: var(--hospedaje-muted);
  background: #fbfaf7;

  font-size: 11px;
  line-height: 1.7;
  text-align: center;
}


/* ============================ */
/* EXTRAS MODERNOS              */
/* ============================ */

.extras-block {
  margin-bottom: 21px;
}

.extras-heading {
  margin-bottom: 10px;

  display: flex;
  align-items: baseline;
  justify-content: space-between;
  gap: 15px;
}

.extras-heading strong {
  color: var(--hospedaje-navy-900);

  font-size: 10px;
  font-weight: 700;
  letter-spacing: 0.025em;
}

.extras-heading span {
  color: var(--hospedaje-muted);

  font-size: 9px;
}

.extras-grid {
  display: grid;
  grid-template-columns:
    repeat(2, minmax(0, 1fr));

  gap: 10px;
}

.extra-option {
  position: relative;

  min-height: 54px;

  display: flex;
  align-items: center;

  gap: 11px;

  padding: 12px 14px;

  border:
    1px solid
    rgba(19, 40, 58, 0.12);

  border-radius: 14px;

  color: var(--hospedaje-navy-900);
  background: #fbfaf7;

  cursor: pointer;

  user-select: none;

  transition:
    transform 0.2s ease,
    border-color 0.2s ease,
    background-color 0.2s ease,
    box-shadow 0.2s ease;
}

.extra-option:hover {
  transform: translateY(-1px);

  border-color:
    rgba(181, 154, 59, 0.42);
}

.extra-option input {
  position: absolute;

  width: 1px !important;
  height: 1px !important;
  min-height: 0 !important;

  margin: 0 !important;
  padding: 0 !important;

  opacity: 0;

  pointer-events: none;
}

.extra-option__check {
  width: 25px;
  height: 25px;

  flex: 0 0 auto;

  display: grid;
  place-items: center;

  border:
    1px solid
    rgba(19, 40, 58, 0.18);

  border-radius: 50%;

  color: transparent;
  background: #ffffff;

  font-size: 11px;
  font-weight: 700;

  transition:
    color 0.2s ease,
    background-color 0.2s ease,
    border-color 0.2s ease,
    transform 0.2s ease;
}

.extra-option__label {
  color: var(--hospedaje-navy-900);

  font-size: 10px;
  font-weight: 600;
  line-height: 1.4;
}

.extra-option--active {
  border-color:
    var(--hospedaje-gold);

  background:
    rgba(181, 154, 59, 0.08);

  box-shadow:
    0 0 0 2px
    rgba(181, 154, 59, 0.05);
}

.extra-option--active
.extra-option__check {
  color: #ffffff;
  background: var(--hospedaje-gold);
  border-color: var(--hospedaje-gold);

  transform: scale(1.03);
}


/* ============================ */
/* RESUMEN EXTRAS               */
/* ============================ */

.booking-summary__extras {
  margin-top: 14px;
}

.booking-summary__extras > p {
  margin-bottom: 7px;

  color: var(--hospedaje-muted);

  font-size: 8px;
  font-weight: 700;
  letter-spacing: 0.13em;
  text-transform: uppercase;
}

.booking-summary__extras-list {
  display: flex;
  flex-wrap: wrap;
  gap: 7px;
}

.booking-summary__extras-list span {
  padding: 7px 10px;

  border-radius: 999px;

  color: var(--hospedaje-navy-900);
  background:
    rgba(181, 154, 59, 0.11);

  font-size: 9px;
  font-weight: 600;
}


@media (max-width: 650px) {

  .extras-grid {
    grid-template-columns: 1fr;
  }

  .extras-heading {
    align-items: flex-start;
    flex-direction: column;
    gap: 3px;
  }

}

</style>