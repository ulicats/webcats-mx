<template>
  <section id="contacto" class="fin-contact">
    <div class="fin-contact__container">

      <div class="fin-contact__info">
        <span class="fin-contact__eyebrow">
          CONTACTO
        </span>

        <h2>
          Hablemos de su
          <em>siguiente decisión.</em>
        </h2>

        <p>
          Cuéntenos brevemente qué quiere resolver. Nuestro equipo revisará
          su solicitud para identificar la mejor forma de acompañarlo.
        </p>

        <div class="fin-contact__details">
          <div>
            <span>CORREO</span>
            <a href="mailto:contacto@vertexfinancial.mx">
              contacto@vertexfinancial.mx
            </a>
          </div>

          <div>
            <span>TELÉFONO</span>
            <a href="tel:+523112345678">
              +52 311 234 5678
            </a>
          </div>

          <div>
            <span>HORARIO</span>
            <p>
              Lunes a viernes · 9:00 a 18:00
            </p>
          </div>
        </div>
      </div>

      <form class="fin-contact__form" @submit.prevent="submitForm">

        <div class="fin-contact__row">
          <label>
            <span>Nombre</span>
            <input
              v-model="form.name"
              type="text"
              placeholder="Nombre completo"
              required
            />
          </label>

          <label>
            <span>Correo</span>
            <input
              v-model="form.email"
              type="email"
              placeholder="correo@ejemplo.com"
              required
            />
          </label>
        </div>

        <div class="fin-contact__row">
          <label>
            <span>Teléfono</span>
            <input
              v-model="form.phone"
              type="tel"
              placeholder="+52"
            />
          </label>

          <label>
            <span>Servicio</span>
            <select v-model="form.service">
              <option value="">
                Seleccione una opción
              </option>

              <option value="Planeación financiera">
                Planeación financiera
              </option>

              <option value="Estrategia patrimonial">
                Estrategia patrimonial
              </option>

              <option value="Inversiones">
                Inversiones
              </option>

              <option value="Finanzas empresariales">
                Finanzas empresariales
              </option>

              <option value="Consultoría financiera">
                Consultoría financiera
              </option>
            </select>
          </label>
        </div>

        <label class="fin-contact__message">
          <span>Mensaje</span>

          <textarea
            v-model="form.message"
            rows="6"
            placeholder="Cuéntenos brevemente qué desea resolver..."
            required
          ></textarea>
        </label>

        <div class="fin-contact__footer">
          <p>
            Al enviar este formulario acepta que podamos contactarlo para
            dar seguimiento a su solicitud.
          </p>

          <button type="submit">
            Enviar solicitud
            <span>↗</span>
          </button>
        </div>

      </form>

    </div>
  </section>
</template>

<script setup>
import { reactive } from 'vue'

const form = reactive({
  name: '',
  email: '',
  phone: '',
  service: '',
  message: ''
})

const submitForm = () => {
  console.log('Formulario enviado:', form)

  // Aquí después conectamos:
  // API
  // Email
  // Formspree
  // backend propio
}
</script>

<style scoped>
.fin-contact {
  padding: 140px 0;
  background: #ece9e1;
}

.fin-contact__container {
  width: min(1280px, calc(100% - 80px));
  margin: 0 auto;
  display: grid;
  grid-template-columns: 0.75fr 1.25fr;
  gap: 110px;
}

.fin-contact__eyebrow {
  display: block;
  margin-bottom: 25px;
  color: var(--fin-accent);
  font-size: 9px;
  font-weight: 600;
  letter-spacing: 3px;
}

.fin-contact__info h2 {
  margin-bottom: 28px;
  font-family: Georgia, serif;
  font-size: clamp(45px, 4.6vw, 68px);
  line-height: 1.08;
  font-weight: 400;
  letter-spacing: -2px;
  color: var(--fin-primary);
}

.fin-contact__info h2 em {
  display: block;
  color: var(--fin-accent);
  font-weight: 400;
}

.fin-contact__info > p {
  max-width: 500px;
  margin-bottom: 55px;
  color: var(--fin-text-soft);
  font-size: 14px;
  line-height: 1.9;
}

.fin-contact__details {
  display: grid;
  gap: 27px;
}

.fin-contact__details div {
  padding-bottom: 22px;
  border-bottom: 1px solid var(--fin-border);
}

.fin-contact__details span {
  display: block;
  margin-bottom: 8px;
  color: #969189;
  font-size: 8px;
  letter-spacing: 2.3px;
}

.fin-contact__details a,
.fin-contact__details p {
  margin: 0;
  color: var(--fin-primary);
  font-family: Georgia, serif;
  font-size: 17px;
}

.fin-contact__form {
  padding: 50px;
  background: var(--fin-white);
}

.fin-contact__row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 28px;
}

.fin-contact label {
  display: block;
  margin-bottom: 30px;
}

.fin-contact label > span {
  display: block;
  margin-bottom: 12px;
  color: var(--fin-primary);
  font-size: 9px;
  text-transform: uppercase;
  letter-spacing: 1.8px;
}

.fin-contact input,
.fin-contact select,
.fin-contact textarea {
  width: 100%;
  border: 0;
  border-bottom: 1px solid var(--fin-border);
  border-radius: 0;
  padding: 12px 0 15px;
  background: transparent;
  color: var(--fin-primary);
  outline: none;
  transition: border-color 0.25s ease;
}

.fin-contact input:focus,
.fin-contact select:focus,
.fin-contact textarea:focus {
  border-color: var(--fin-accent);
}

.fin-contact textarea {
  resize: vertical;
}

.fin-contact__footer {
  padding-top: 10px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 35px;
}

.fin-contact__footer p {
  max-width: 390px;
  margin: 0;
  color: var(--fin-text-soft);
  font-size: 10px;
  line-height: 1.7;
}

.fin-contact__footer button {
  min-width: 190px;
  padding: 18px 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  border: 0;
  background: var(--fin-primary);
  color: var(--fin-white);
  font-size: 10px;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  cursor: pointer;
  transition:
    background 0.25s ease,
    transform 0.25s ease;
}

.fin-contact__footer button:hover {
  background: var(--fin-accent);
  color: var(--fin-primary);
  transform: translateY(-2px);
}

.fin-contact__footer button span {
  font-size: 17px;
}

@media (max-width: 950px) {
  .fin-contact__container {
    grid-template-columns: 1fr;
    gap: 65px;
  }
}

@media (max-width: 650px) {
  .fin-contact {
    padding: 90px 0;
  }

  .fin-contact__container {
    width: calc(100% - 36px);
  }

  .fin-contact__form {
    padding: 30px 22px;
  }

  .fin-contact__row {
    grid-template-columns: 1fr;
    gap: 0;
  }

  .fin-contact__footer {
    flex-direction: column;
    align-items: stretch;
  }

  .fin-contact__footer button {
    width: 100%;
  }
}
</style>