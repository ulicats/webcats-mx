<template>
  <section class="contact-container">
    <h1>Contacto</h1>
    <p class="subtitle">Envíame un mensaje y te responderé lo antes posible.</p>

    <form @submit.prevent="enviarFormulario" class="contact-form">
      <div class="field">
        <label>Nombre</label>
        <input v-model="form.nombre" type="text" required placeholder="Tu nombre completo" />
      </div>

      <div class="field">
        <label>Correo</label>
        <input v-model="form.correo" type="email" required placeholder="tucorreo@ejemplo.com" />
      </div>

      <div class="field">
        <label>Mensaje</label>
        <textarea v-model="form.mensaje" rows="5" required placeholder="Escribe tu mensaje..."></textarea>
      </div>

      <!-- reCAPTCHA -->
      <div class="recaptcha-wrapper">
        <div ref="recaptcha"></div>
      </div>

      <button type="submit" class="btn-submit" :disabled="loading">
        {{ loading ? "Enviando..." : "Enviar mensaje" }}
      </button>

      <p v-if="respuesta" class="respuesta">{{ respuesta }}</p>
    </form>
  </section>
</template>


<script setup>
  import { ref, onMounted } from "vue";
  
  const form = ref({
    nombre: "",
    correo: "",
    mensaje: ""
  });
  
  const respuesta = ref("");
  const loading = ref(false);
  const recaptchaWidget = ref(null);
  const recaptcha = ref(null);
  
  onMounted(() => {
    // Render del reCAPTCHA V2 checkbox
    recaptchaWidget.value = grecaptcha.render(recaptcha.value, {
      sitekey: "6LeM1iMsAAAAABlFu7q2YHFsZTqGI4FdkjQZl8f4", // ✔ tu site key
    });
  });
  
  async function enviarFormulario() {
    loading.value = true;
  
    const token = grecaptcha.getResponse(recaptchaWidget.value);
  
    if (!token) {
      respuesta.value = "Por favor verifica el reCAPTCHA.";
      loading.value = false;
      return;
    }
  
    const data = { ...form.value, token };
  
    // 👉 Aquí mandas al backend
    const formData = new FormData();
      formData.append("nombre", form.nombre);
      formData.append("correo", form.correo);
      formData.append("mensaje", form.mensaje);
      formData.append("token", token);

      const res = await fetch("/api/enviar-correo.php", {
        method: "POST",
        body: formData
      });

  
    const json = await res.json();
  
    respuesta.value = json.message;
    loading.value = false;
  
    // limpiar reCAPTCHA
    grecaptcha.reset(recaptchaWidget.value);
  }
  </script>
  
  <style scoped>
    .contact-container {
      max-width: 680px;
      margin: 60px auto;
      padding: 25px;
    }
    
    h1 {
      font-size: 2.4rem;
      font-weight: 700;
    }
    
    .subtitle {
      margin-bottom: 30px;
      opacity: 0.7;
    }
    
    .contact-form {
      display: flex;
      flex-direction: column;
      gap: 22px;
    }
    
    .field label {
      font-weight: 600;
      margin-bottom: 5px;
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
    
    .btn-submit {
      background: #2563eb;
      color: white;
      padding: 14px;
      border-radius: 10px;
      border: none;
      cursor: pointer;
      font-size: 1.1rem;
      transition: 0.3s;
    }
    
    .btn-submit:hover {
      background: #1e40af;
    }
    
    .recaptcha-wrapper {
      display: flex;
      justify-content: center;
    }
    
    .respuesta {
      margin-top: 10px;
      font-weight: 600;
      text-align: center;
    }
    </style>
    