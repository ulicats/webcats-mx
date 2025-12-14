<template>
  <section class="contact-section" :class="{ visible: isVisible }" ref="sectionRef">

    <div class="contact-grid">

      <!-- INFO -->
      <div class="contact-info">
        <h1>Contacto</h1>
        <p class="subtitle">
          Si te gustó mi trabajo y crees que puedo ayudarte,
          escríbeme y con gusto revisamos tu proyecto.
        </p>

        <ul class="benefits">
          <li>✔️ Atención directa</li>
          <li>✔️ Comunicación clara</li>
          <li>✔️ Sin spam ni automatismos</li>
        </ul>

        <div class="contact-extra">
            <p class="contact-extra-title">
              ¿Prefieres una comunicación directa?
            </p>

            <a
              href="https://wa.me/52TU_NUMERO?text=Hola%20vi%20tu%20sitio%20Webcats%20y%20me%20gustaría%20hablar%20sobre%20un%20proyecto"
              target="_blank"
              rel="noopener"
              class="btn-whatsapp"
            >
              💬 Escribirme por WhatsApp
            </a>

            <p class="schedule">
              🕘 Horario de atención<br />
              Lunes a viernes · 9:00 am – 5:00 pm
            </p>
        </div>       
      </div>

       <SectionDivider />

      <!-- FORM -->
      <form class="contact-form" :class="{ disabled: success }" @submit.prevent="enviarFormulario">

        <div class="field">
          <label>Nombre</label>
          <input
            v-model="form.nombre"
            type="text"
            placeholder="Tu nombre completo"
            required
          />
        </div>

        <div class="field">
          <label>Correo</label>
          <input
            v-model="form.correo"
            type="email"
            placeholder="tucorreo@ejemplo.com"
            required
          />
        </div>

        <div class="field">
          <label>Mensaje</label>
          <textarea
            v-model="form.mensaje"
            rows="5"
            placeholder="Cuéntame brevemente sobre tu proyecto"
            required
          ></textarea>
        </div>

        <!-- Honeypot -->
        <input
          v-model="form.empresa"
          type="text"
          tabindex="-1"
          autocomplete="off"
          class="honeypot"
        />

        <button type="submit" class="btn-submit" :disabled="loading">
          {{ loading ? "Enviando..." : "Enviar mensaje" }}
        </button>
      </form>
    </div>
  </section>

   <!-- Success Modal -->
      <Transition name="modal">
        <div v-if="success" class="modal-overlay">
          <div class="modal-box">
            
            <div class="modal-icon">✓</div>

            <h3>¡Mensaje enviado con éxito!</h3>

            <p>
              ¡Gracias por escribirme! ☺️<br />
              Nos pondremos en contacto contigo a la brevedad posible. 😉
            </p>

          </div>
        </div>
      </Transition>
</template>

<script setup>
import SectionDivider from "@/components/SectionDivider.vue";
import { onMounted, ref, watch } from "vue";

const loading = ref(false);
const success = ref(false);
const error = ref(false);
const sectionRef = ref(null);
const isVisible = ref(false);

onMounted(() => {
  const observer = new IntersectionObserver(
    ([entry]) => {
      if (entry.isIntersecting) {
        isVisible.value = true;
        observer.disconnect();
      }
    },
    { threshold: 0.15 }
  );

  if (sectionRef.value) {
    observer.observe(sectionRef.value);
  }
});

const form = ref({
  nombre: "",
  correo: "",
  mensaje: "",
  empresa: "" // honeypot
});

watch(success, (value) => {
  if (value) {
    document.body.style.overflow = "hidden";
  } else {
    document.body.style.overflow = "";
  }
});


async function enviarFormulario() {
  loading.value = true;
  success.value = false;
  error.value = false;

  try {
    const res = await fetch("https://formspree.io/f/xdkqywab", {
      method: "POST",
      headers: {
        "Content-Type": "application/json"
      },
      body: JSON.stringify({
        nombre: form.value.nombre,
        correo: form.value.correo,
        mensaje: form.value.mensaje,
        _replyto: form.value.correo,
        _subject: "Nuevo mensaje desde Webcats.mx",
        empresa: form.value.empresa
      })
    });

    if (!res.ok) throw new Error("Error");

    // Mostrar modal
      success.value = true;

      // Cerrar modal automáticamente en 5 segundos
      setTimeout(() => {
        success.value = false;
      }, 5000);



    form.value = {
      nombre: "",
      correo: "",
      mensaje: "",
      empresa: ""
    };
  } catch (e) {
    error.value = true;
  } finally {
    loading.value = false;
  }
}

</script>

<style scoped>

.contact-section {
  max-width: 1100px;
  margin: 60px auto;
  padding: 20px;
}

.contact-grid {
  display: grid;
  grid-template-columns: 1fr auto 1fr;
  gap: 50px;
  align-items: stretch;
}

.contact-info h1 {
  font-size: 2.4rem;
  font-weight: 700;
}

.contact-form.disabled {
  pointer-events: none;
  opacity: 0.4;
  filter: grayscale(0.2);
}


.subtitle {
  margin: 15px 0 25px;
  opacity: 0.75;
}

.benefits {
  list-style: none;
  padding: 0;
}

.benefits li {
  margin-bottom: 10px;
}

.contact-form {
  display: flex;
  flex-direction: column;
  gap: 22px;
}

.field label {
  font-weight: 600;
  margin-bottom: 6px;
  display: block;
}

.field input,
.field textarea {
  width: 100%;
  padding: 14px;
  border-radius: 10px;
  border: 1px solid #ccc;
  font-size: 1rem;
}

.field input,
.field textarea {
  transition: border-color 0.25s ease, box-shadow 0.25s ease;
}

.field input:focus,
.field textarea:focus {
  outline: none;
  border-color: #2563eb;
  box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.15);
}


.btn-submit {
  background: #2563eb;
  color: white;
  padding: 14px;
  border-radius: 10px;
  border: none;
  cursor: pointer;
  font-size: 1.1rem;
  font-weight: 600;
  transition: background 0.25s ease, transform 0.15s ease, opacity 0.2s ease;
}

.btn-submit:hover:not(:disabled) {
  background: #1e40af;
  transform: translateY(-1px);
}

.btn-submit:disabled {
  opacity: 0.6;
  cursor: not-allowed;
}


.respuesta {
  text-align: center;
  font-weight: 600;
}

.success {
  color: #16a34a;
}

.error {
  color: #dc2626;
}

.whatsapp-box {
  margin-top: 30px;
  padding-top: 20px;
  border-top: 1px solid #e5e7eb;
  text-align: center;
}

.whatsapp-text {
  margin-bottom: 12px;
  font-weight: 500;
}

.btn-whatsapp {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  padding: 14px 18px;
  border-radius: 10px;
  background: #25d366;
  color: #fff;
  font-weight: 600;
  text-decoration: none;
  transition: 0.3s;
}

.btn-whatsapp:hover {
  background: #1ebe5d;
}

.schedule {
  margin-top: 12px;
  font-size: 0.95rem;
  opacity: 0.8;
}

.honeypot {
  display: none;
}
.contact-extra {
  margin-top: 35px;
  padding-top: 25px;
  border-top: 1px solid #e5e7eb;
  max-width: 420px;
}

.contact-extra-title {
  font-weight: 600;
  margin-bottom: 14px;
}

.btn-whatsapp {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 14px 18px;
  border-radius: 10px;
  background: #25d366;
  color: #fff;
  font-weight: 600;
  text-decoration: none;
  transition: 0.3s;
}

.btn-whatsapp:hover {
  background: #1ebe5d;
}

.schedule {
  margin-top: 12px;
  font-size: 0.95rem;
  opacity: 0.75;
}

/* Success animation */
.success-enter-active {
  transition: all 0.4s ease;
}
.success-leave-active {
  transition: all 0.3s ease;
}

.success-enter-from {
  opacity: 0;
  transform: translateY(10px) scale(0.95);
}

.success-enter-to {
  opacity: 1;
  transform: translateY(0) scale(1);
}

.success-leave-from {
  opacity: 1;
}

.success-leave-to {
  opacity: 0;
  transform: translateY(-5px);
}

/* Viewport entrance animation */
.contact-section {
  opacity: 0;
  transform: translateY(30px);
  transition: opacity 0.8s ease, transform 0.8s ease;
}

.contact-section.visible {
  opacity: 1;
  transform: translateY(0);
}

/* === SUCCESS MODAL === */

.modal-overlay {
  position: fixed;
  inset: 0;
  background: rgba(0, 0, 0, 0.45);
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 9999;
}

.modal-card {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  
  background: white;
  border-radius: 16px;
  padding: 32px 36px;
  max-width: 420px;
  width: calc(100% - 40px);

  box-shadow: 0 25px 60px rgba(0, 0, 0, 0.25);
  text-align: center;
}

.modal-card {
  animation: modal-pop 0.45s cubic-bezier(0.22, 1, 0.36, 1);
}

.modal-box {
  background: #fff;
  padding: 32px 28px;
  border-radius: 16px;
  max-width: 420px;
  width: 90%;
  text-align: center;
  box-shadow: 0 25px 50px rgba(0, 0, 0, 0.25);
}

.modal-icon {
  width: 60px;
  height: 60px;
  margin: 0 auto 16px;
  border-radius: 50%;
  background: #16a34a;
  color: #fff;
  font-size: 2rem;
  font-weight: 700;
  display: flex;
  align-items: center;
  justify-content: center;
}

.modal-box h3 {
  font-size: 1.4rem;
  margin-bottom: 10px;
}

.modal-box p {
  opacity: 0.85;
  line-height: 1.5;
}

/* Modal animation */
.modal-enter-active,
.modal-leave-active {
  transition: opacity 0.35s ease;
}

.modal-enter-from,
.modal-leave-to {
  opacity: 0;
}

.modal-enter-active .modal-box {
  animation: modalIn 0.35s ease forwards;
}

.modal-leave-active .modal-box {
  animation: modalOut 0.25s ease forwards;
}

@keyframes modalIn {
  from {
    transform: scale(0.95) translateY(10px);
    opacity: 0;
  }
  to {
    transform: scale(1) translateY(0);
    opacity: 1;
  }
}

@keyframes modalOut {
  from {
    transform: scale(1);
    opacity: 1;
  }
  to {
    transform: scale(0.95);
    opacity: 0;
  }
}

@keyframes modal-pop {
  from {
    opacity: 0;
    transform: translate(-50%, -48%) scale(0.95);
  }
  to {
    opacity: 1;
    transform: translate(-50%, -50%) scale(1);
  }
}



@media (max-width: 900px) {
  .contact-grid {
    grid-template-columns: 1fr;
  }
}
</style>
