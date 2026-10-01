<template>
  <footer id="contacto" class="multi-footer">

    <!-- DETALLE SUPERIOR -->
    <div class="footer-accent">
      <span class="accent-blue"></span>
      <span class="accent-green"></span>
      <span class="accent-brick"></span>
    </div>

    <div class="footer-container">

      <!-- MARCA -->
      <div class="footer-brand">

        <a href="#inicio" class="brand">
          <div class="brand-symbol">
            <span>⌂</span>
          </div>

          <div>
            <strong>Multiservicios</strong>
            <small>Soluciones para tu hogar y negocio</small>
          </div>
        </a>

        <p>
          Soluciones profesionales para mantenimiento,
          reparación y mejora de hogares y negocios.
        </p>

        <a
          href="https://wa.me/523111234567"
          target="_blank"
          rel="noopener noreferrer"
          class="footer-whatsapp"
        >
          <span>✆</span>
          Cotizar por WhatsApp
        </a>

      </div>

      <!-- SERVICIOS -->
      <div class="footer-column">
        <h3>Servicios</h3>

        <a href="#servicios">Fontanería</a>
        <a href="#servicios">Electricidad</a>
        <a href="#servicios">Albañilería</a>
        <a href="#servicios">Pintura</a>
        <a href="#servicios">Impermeabilización</a>
        <a href="#servicios">Mantenimiento</a>
      </div>

      <!-- ENLACES -->
      <div class="footer-column">
        <h3>Enlaces</h3>

        <a href="#inicio">Inicio</a>
        <a href="#servicios">Servicios</a>
        <a href="#trabajos">Trabajos</a>
        <a href="#zonas">Zonas de servicio</a>
        <a href="#faq">Preguntas frecuentes</a>
      </div>

      <!-- CONTACTO -->
      <div class="footer-column contact-column">
        <h3>Contacto</h3>

        <div class="contact-item">
          <span>☎</span>

          <div>
            <small>Teléfono</small>
            <strong>311 123 4567</strong>
          </div>
        </div>

        <div class="contact-item">
          <span>✉</span>

          <div>
            <small>Correo</small>
            <strong>contacto@multiservicios.com</strong>
          </div>
        </div>

        <div class="contact-item">
          <span>⌖</span>

          <div>
            <small>Zona de servicio</small>
            <strong>Tepic, Nayarit</strong>
          </div>
        </div>

      </div>

    </div>

    <!-- BOTTOM -->
    <div class="footer-bottom">

      <div class="footer-bottom-container">

        <span>
          © {{ currentYear }} Multiservicios. Todos los derechos reservados.
        </span>

        <span class="webcats">
          Desarrollado por
          <strong>webcats.mx</strong>
        </span>

      </div>

    </div>

  </footer>
</template>

<script setup>
const currentYear = new Date().getFullYear()
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Sora:wght@500;600;700;800&display=swap');

.multi-footer {
  --navy: #062a50;
  --navy-dark: #031d38;
  --blue: #087ee5;
  --green: #19a957;
  --brick: #dc512e;

  position: relative;

  color: white;
  background: var(--navy-dark);

  font-family: 'Manrope', sans-serif;
}

/* =========================
   ACENTO SUPERIOR
========================= */

.footer-accent {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;

  width: 100%;
  height: 5px;
}

.accent-blue {
  background: var(--blue);
}

.accent-green {
  background: var(--green);
}

.accent-brick {
  background: var(--brick);
}

/* =========================
   CONTENIDO
========================= */

.footer-container {
  width: min(1180px, calc(100% - 40px));

  margin: auto;
  padding: 65px 0 55px;

  display: grid;
  grid-template-columns: 1.5fr 0.8fr 0.8fr 1.2fr;

  gap: 60px;
}

/* =========================
   BRAND
========================= */

.brand {
  display: flex;
  align-items: center;

  gap: 12px;

  color: white;
  text-decoration: none;
}

.brand-symbol {
  display: flex;
  align-items: center;
  justify-content: center;

  width: 48px;
  height: 48px;

  color: white;

  background:
    linear-gradient(
      135deg,
      var(--blue),
      var(--green)
    );

  border-radius: 9px;

  font-size: 30px;
}

.brand > div:last-child {
  display: flex;
  flex-direction: column;
}

.brand strong {
  font-family: 'Sora', sans-serif;

  font-size: 19px;
}

.brand small {
  margin-top: 2px;

  color: #a9bbcc;

  font-size: 9px;
}

.footer-brand p {
  max-width: 300px;

  margin: 22px 0;

  color: #9fb1c3;

  font-size: 12px;
  line-height: 1.8;
}

.footer-whatsapp {
  display: inline-flex;
  align-items: center;

  gap: 8px;

  padding: 11px 16px;

  color: white;
  background: var(--green);

  border-radius: 7px;

  font-size: 11px;
  font-weight: 800;

  text-decoration: none;

  transition: transform 0.2s ease;
}

.footer-whatsapp:hover {
  transform: translateY(-2px);
}

/* =========================
   COLUMNAS
========================= */

.footer-column {
  display: flex;
  flex-direction: column;
}

.footer-column h3 {
  position: relative;

  margin: 0 0 23px;

  font-family: 'Sora', sans-serif;

  font-size: 13px;
}

.footer-column h3::after {
  content: '';

  position: absolute;

  left: 0;
  bottom: -9px;

  width: 25px;
  height: 3px;

  background: var(--blue);

  border-radius: 5px;
}

.footer-column > a {
  width: fit-content;

  margin-bottom: 10px;

  color: #9fb1c3;

  font-size: 11px;
  text-decoration: none;

  transition:
    color 0.2s ease,
    transform 0.2s ease;
}

.footer-column > a:hover {
  color: white;
  transform: translateX(4px);
}

/* =========================
   CONTACTO
========================= */

.contact-item {
  display: flex;
  align-items: center;

  gap: 12px;

  margin-bottom: 18px;
}

.contact-item > span {
  display: flex;
  align-items: center;
  justify-content: center;

  width: 34px;
  height: 34px;

  flex-shrink: 0;

  color: #75baff;

  background: rgba(8, 126, 229, 0.12);

  border-radius: 7px;
}

.contact-item div {
  display: flex;
  flex-direction: column;
}

.contact-item small {
  margin-bottom: 3px;

  color: #748ba0;

  font-size: 9px;
}

.contact-item strong {
  color: #dce6ef;

  font-size: 11px;
  font-weight: 600;
}

/* =========================
   FOOTER BOTTOM
========================= */

.footer-bottom {
  background: #02172c;

  border-top: 1px solid rgba(255, 255, 255, 0.07);
}

.footer-bottom-container {
  width: min(1180px, calc(100% - 40px));

  min-height: 60px;

  margin: auto;

  display: flex;
  align-items: center;
  justify-content: space-between;

  gap: 20px;

  color: #71879b;

  font-size: 9px;
}

.webcats strong {
  color: white;
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 900px) {
  .footer-container {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 550px) {
  .footer-container {
    width: calc(100% - 30px);

    grid-template-columns: 1fr;

    gap: 40px;

    padding-top: 50px;
  }

  .footer-bottom-container {
    width: calc(100% - 30px);

    padding: 20px 0;

    flex-direction: column;
    justify-content: center;

    text-align: center;
  }
}
</style>