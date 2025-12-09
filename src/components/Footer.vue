<template>
<footer class="footer">
  <div class="footer-container">

    <!-- Logo + descripción -->
    <div class="footer-section footer-brand">
      <img src="/src/assets/logo.png" alt="Webcats.mx" class="footer-logo" />
      <p class="footer-text">
        Desarrollo Web · Administración de Servidores · SysAdmin & DevOps Jr
      </p>
    </div>

    <!-- Navegación -->
    <div class="footer-section">
      <h3 class="footer-title">Navegación</h3>
      <ul class="footer-links">
        <li><router-link to="/">Inicio</router-link></li>
        <li><router-link to="/empresa">Empresa</router-link></li>
        <li><router-link to="/servicios">Servicios</router-link></li>
        <li><router-link to="/proyectos">Proyectos</router-link></li>
        <li><router-link to="/contacto">Contacto</router-link></li>
      </ul>
    </div>

    <!-- Servicios -->
    <div class="footer-section">
      <h3 class="footer-title">Servicios</h3>
      <ul class="footer-links">
        <li>Desarrollo Web a Medida</li>
        <li>Administración de Servidores</li>
        <li>Seguridad Web</li>
        <li>Correos Corporativos</li>
        <li>DevOps Jr</li>
      </ul>
    </div>

    <!-- Contacto -->
    <div class="footer-section">
      <h3 class="footer-title">Contacto</h3>
      <ul class="footer-links">
        <li>📧 contacto@webcats.mx</li>
        <li>🌐 www.webcats.mx</li>
      </ul>
      <div class="footer-socials"> 
        <a href="https://www.facebook.com/share/17qv8Fxw5f/" target="_blank">🌐</a> 
        <a href="https://www.linkedin.com/in/ulises-webcatsmx" target="_blank">💼</a> 
        <a href="https://www.instagram.com/webcats.mx" target="_blank">📸</a> 
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    © {{ new Date().getFullYear() }} Webcats.mx — Todos los derechos reservados.
  </div>
</footer>
</template>

<style scoped>
.footer {
  background: #0e0e0e;
  padding: 60px 20px 25px;
  color: #ddd;
  border-top: 1px solid #222;
}

.footer-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 40px;
  max-width: 1200px;
  margin: auto;
}

/* Logo */
.footer-logo {
  width: 140px;
  margin-bottom: 15px;
}

.footer-text {
  font-size: 14px;
  color: #aaa;
  line-height: 1.5;
}

/* Secciones */
.footer-section .footer-title {
  font-size: 16px;
  margin-bottom: 15px;
  color: #bfbfff; /* tono morado/azul elegante */
  font-weight: bold;
}

.footer-links {
  list-style: none;
  padding: 0;
}

.footer-links li {
  margin-bottom: 8px;
  font-size: 14px;
  transition: color 0.2s ease;
}

.footer-links li a,
.footer-links li {
  color: #ccc;
  text-decoration: none;
}

.footer-links li:hover a,
.footer-links li:hover {
  color: #a788ff; /* hover morado */
}

/* Redes */
.footer-socials {
  margin-top: 10px;
}

.footer-socials a {
  font-size: 22px;
  margin-right: 12px;
  color: #ccc;
  transition: color 0.2s ease;
}

.footer-socials a:hover {
  color: #a788ff;
}

/* Parte inferior */
.footer-bottom {
  text-align: center;
  margin-top: 40px;
  padding-top: 20px;
  font-size: 13px;
  color: #777;
  border-top: 1px solid #222;
}
</style>