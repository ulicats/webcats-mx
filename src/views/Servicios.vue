<template>
  <section class="services-page">
    <div class="container">

      <!-- HEADER -->
      <h1 class="title">Servicios Webcats.mx</h1>
      <p class="subtitle">$ cat servicios.conf</p>

      <!-- GRID -->
      <div class="services-grid">

        <div class="service-card">
          <h3 class="service-title">
            <span class="prompt">&gt;</span> Hosting y Servidores
          </h3>
          <p class="service-desc">
            Configuración, migración y administración de servidores Linux con WHM/cPanel.
            Optimización de recursos, seguridad y rendimiento.
          </p>
        </div>

        <div class="service-card">
          <h3 class="service-title">
            <span class="prompt">&gt;</span> DNS & Correos Empresariales
          </h3>
          <p class="service-desc">
            Configuración de MX, SPF, DKIM, DMARC y resolución de problemas SMTP.
            Correos empresariales 100% funcionales.
          </p>
        </div>

        <div class="service-card">
          <h3 class="service-title">
            <span class="prompt">&gt;</span> Desarrollo Web
          </h3>
          <p class="service-desc">
            Creación de sitios web, landing pages, paneles administrativos y sistemas
            personalizados en PHP, MySQL y Laravel.
          </p>
        </div>

        <div class="service-card">
          <h3 class="service-title">
            <span class="prompt">&gt;</span> Mantenimiento y Seguridad
          </h3>
          <p class="service-desc">
            Eliminación de malware, limpieza de código infectado, hardening de servidores
            y protección contra intrusiones.
          </p>
        </div>

        <div class="service-card">
          <h3 class="service-title">
            <span class="prompt">&gt;</span> Compra y Gestión de Dominios Web
          </h3>
          <p class="service-desc">
            Asesoría completa para elegir, comprar, renovar y configurar dominios.
            Integración con DNS, hosting y certificados SSL.
          </p>
        </div>

        <div class="service-card">
          <h3 class="service-title">
            <span class="prompt">&gt;</span> Soporte Técnico Nivel Servidor
          </h3>
          <p class="service-desc">
            Diagnóstico y solución de problemas avanzados en servidores, logs,
            PHP, bases de datos, DNS, SMTP y rendimiento.
          </p>
        </div>

      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "Servicios",
};
</script>

<style scoped>
/* ================================
   PAGE
================================ */
.services-page {
  padding: 90px 20px;
  background: #0d0d0f;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
}

/* ================================
   HEADER
================================ */
.title {
  font-size: 2.6rem;
  font-weight: 800;
  text-align: center;
  color: #e5e7eb;
  margin-bottom: 8px;
}

.subtitle {
  text-align: center;
  color: #9ca3af;
  font-size: 1rem;
  margin-bottom: 60px;
  font-family: 'JetBrains Mono', monospace;
}

/* ================================
   GRID
================================ */
.services-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 34px;
}

/* ================================
   CARD
================================ */
.service-card {
  background: #0d0d0f;
  border: 1px solid rgba(255,255,255,0.14);
  border-radius: 14px;
  padding: 28px;
  box-shadow: inset 0 0 0 1px rgba(255,255,255,0.04);
  transition: border-color .25s ease, box-shadow .25s ease;
}

/* Hover estilo consola */
.service-card:hover {
  border-color: rgba(34,197,94,0.6);
  box-shadow: 0 0 0 1px rgba(34,197,94,0.25);
}

/* ================================
   TEXT
================================ */
.service-title {
  font-family: 'JetBrains Mono', monospace;
  font-weight: 700;
  margin-bottom: 14px;
  color: #ffffff;
}

.prompt {
  color: #22c55e;
  margin-right: 6px;
}

.service-desc {
  font-family: 'JetBrains Mono', monospace;
  color: #22c55e;
  font-size: 0.95rem;
  line-height: 1.55rem;
  opacity: 0.9;
}
</style>
