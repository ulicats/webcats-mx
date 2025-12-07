<template>
  <section class="services-page">
    <div class="container">
      <h1 class="title">Servicios Webcats.mx</h1>
      <p class="subtitle">
        Soluciones profesionales en hosting, servidores, desarrollo y gestión web.
      </p>

      <div class="services-grid">

        <!-- Hosting y Servidores -->
        <div class="service-card">
          <h3>Hosting y Servidores</h3>
          <p>
            Configuración, migración y administración de servidores Linux WHM/cPanel.
            Optimización de recursos, seguridad y rendimiento.
          </p>
        </div>

        <!-- DNS y Correos -->
        <div class="service-card">
          <h3>DNS & Correos Empresariales</h3>
          <p>
            Configuración de MX, SPF, DKIM, DMARC, y resolución de problemas SMTP.
            Correos empresariales 100% funcionales.
          </p>
        </div>

        <!-- Desarrollo Web -->
        <div class="service-card">
          <h3>Desarrollo Web</h3>
          <p>
            Creación de sitios web, landing pages, paneles administrativos y sistemas
            personalizados en PHP, MySQL y Laravel.
          </p>
        </div>

        <!-- Mantenimiento y Seguridad -->
        <div class="service-card">
          <h3>Mantenimiento y Seguridad</h3>
          <p>
            Eliminación de malware, limpieza de código infectado, hardening de servidores
            y protección contra intrusiones.
          </p>
        </div>

        <!-- Compra de Dominios Web (nuevo) -->
        <div class="service-card">
          <h3>Compra y Gestión de Dominios Web</h3>
          <p>
            Asesoría completa para elegir, comprar, renovar y configurar dominios.  
            Integración con DNS, hosting y certificación SSL.
          </p>
        </div>

        <!-- Soporte Técnico Nivel Servidor -->
        <div class="service-card">
          <h3>Soporte Técnico Nivel Servidor</h3>
          <p>
            Diagnóstico y solución de problemas avanzados en servidores, logs, PHP,
            bases de datos, DNS, SMTP y rendimiento.
          </p>
        </div>

      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "Services",
};
</script>

<style scoped>
.services-page {
  padding: 80px 20px;
}

.title {
  font-size: 2.5rem;
  font-weight: 700;
  text-align: center;
  margin-bottom: 10px;
}

.subtitle {
  text-align: center;
  color: #666;
  font-size: 1rem;
  margin-bottom: 50px;
}

.services-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 30px;
}

.service-card {
  background: white;
  padding: 25px;
  border-radius: 12px;
  box-shadow: 0px 4px 15px rgba(0,0,0,0.05);
  transition: transform .2s, box-shadow .2s;
}

.service-card:hover {
  transform: translateY(-4px);
  box-shadow: 0px 6px 20px rgba(0,0,0,0.08);
}

.service-card h3 {
  font-weight: 600;
  margin-bottom: 10px;
}

.service-card p {
  color: #555;
  font-size: 0.95rem;
  line-height: 1.4rem;
}
</style>
