<template>
  <footer
    id="contacto"
    class="tepic-footer"
  >
    <div class="tepic-footer__top">
      <div class="tepic-footer__container">
        <!-- Marca -->
        <div class="tepic-footer__brand">
          <a
            href="#inicio"
            class="tepic-footer__logo"
          >
            Webcats<span>.mx</span>
          </a>

          <p>
            Diseño y desarrollo de páginas web para negocios,
            profesionistas y empresas de Tepic, Nayarit y todo México.
          </p>

          <div class="tepic-footer__location">
            <span>●</span>

            Tepic, Nayarit, México
          </div>
        </div>

        <!-- Servicios -->
        <div class="tepic-footer__column">
          <h3>Servicios</h3>

          <a href="#servicios">
            Diseño de páginas web
          </a>

          <a href="#servicios">
            Tiendas en línea
          </a>

          <a href="#servicios">
            Sistemas web
          </a>

          <a href="#servicios">
            SEO
          </a>

          <a href="#servicios">
            Hosting y dominios
          </a>
        </div>

        <!-- Navegación -->
        <div class="tepic-footer__column">
          <h3>Webcats</h3>

          <a href="#inicio">Inicio</a>
          <a href="#proyectos">Proyectos</a>
          <a href="#proceso">Proceso</a>
          <a href="#faq">Preguntas frecuentes</a>
        </div>

        <!-- Contacto -->
        <div class="tepic-footer__column tepic-footer__contact">
          <h3>¿Tienes un proyecto?</h3>

          <p>
            Cuéntanos qué necesitas y te ayudamos a encontrar
            la mejor solución para tu negocio.
          </p>

          <a
            :href="whatsappUrl"
            target="_blank"
            rel="noopener noreferrer"
            class="tepic-footer__whatsapp"
          >
            <span>W</span>

            Cotizar por WhatsApp
          </a>
        </div>
      </div>
    </div>

    <div class="tepic-footer__bottom">
      <div class="tepic-footer__bottom-container">
        <p>
          © {{ currentYear }} Webcats.mx. Todos los derechos reservados.
        </p>

        <div class="tepic-footer__legal">
          <a href="#">
            Aviso de privacidad
          </a>

          <a href="#">
            Términos
          </a>
        </div>
      </div>
    </div>
  </footer>
</template>

<script setup>
const currentYear = new Date().getFullYear()

const whatsappUrl =
  'https://wa.me/523332341375?text=Hola%2C%20vi%20su%20servicio%20de%20dise%C3%B1o%20web%20en%20Tepic%20y%20me%20gustar%C3%ADa%20cotizar%20una%20p%C3%A1gina%20web.'
</script>

<style scoped>
.tepic-footer {
  width: 100%;
  color: #cbd5e1;
  background: #07111f;
}

.tepic-footer__top {
  padding: 70px 0 58px;

  border-bottom: 1px solid rgba(255, 255, 255, 0.08);
}

.tepic-footer__container {
  width: min(1180px, calc(100% - 40px));
  margin: 0 auto;

  display: grid;
  grid-template-columns: 1.45fr 0.8fr 0.7fr 1.25fr;
  gap: 55px;
}

.tepic-footer__logo {
  display: inline-block;

  color: #ffffff;

  text-decoration: none;
  font-size: 29px;
  font-weight: 900;
  letter-spacing: -1.5px;
}

.tepic-footer__logo span {
  color: #2382ff;
}

.tepic-footer__brand > p {
  max-width: 310px;

  margin: 20px 0;

  color: #8290a4;

  font-size: 13px;
  line-height: 1.7;
}

.tepic-footer__location {
  display: flex;
  align-items: center;
  gap: 8px;

  color: #a9b5c5;

  font-size: 12px;
  font-weight: 600;
}

.tepic-footer__location span {
  color: #2382ff;
}

.tepic-footer__column {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}

.tepic-footer__column h3 {
  margin: 5px 0 20px;

  color: #ffffff;

  font-size: 13px;
  font-weight: 750;
}

.tepic-footer__column > a:not(.tepic-footer__whatsapp) {
  margin-bottom: 12px;

  color: #8290a4;

  text-decoration: none;
  font-size: 12px;

  transition:
    color 0.2s ease,
    transform 0.2s ease;
}

.tepic-footer__column > a:not(.tepic-footer__whatsapp):hover {
  color: #ffffff;
  transform: translateX(3px);
}

.tepic-footer__contact p {
  max-width: 300px;

  margin: 0 0 20px;

  color: #8290a4;

  font-size: 12px;
  line-height: 1.65;
}

.tepic-footer__whatsapp {
  display: inline-flex;
  align-items: center;
  gap: 9px;

  padding: 11px 15px;

  color: #ffffff;
  background: #1677ff;

  border-radius: 10px;

  text-decoration: none;
  font-size: 11px;
  font-weight: 700;

  transition:
    transform 0.2s ease,
    background 0.2s ease;
}

.tepic-footer__whatsapp:hover {
  transform: translateY(-2px);
  background: #0867e8;
}

.tepic-footer__whatsapp span {
  width: 23px;
  height: 23px;

  display: grid;
  place-items: center;

  color: #1677ff;
  background: #ffffff;

  border-radius: 50%;

  font-size: 9px;
  font-weight: 900;
}

/* Bottom */

.tepic-footer__bottom {
  padding: 21px 0;
}

.tepic-footer__bottom-container {
  width: min(1180px, calc(100% - 40px));
  margin: 0 auto;

  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 25px;
}

.tepic-footer__bottom p {
  margin: 0;

  color: #5f6d81;

  font-size: 10px;
}

.tepic-footer__legal {
  display: flex;
  align-items: center;
  gap: 22px;
}

.tepic-footer__legal a {
  color: #5f6d81;

  text-decoration: none;
  font-size: 10px;

  transition: color 0.2s ease;
}

.tepic-footer__legal a:hover {
  color: #ffffff;
}

@media (max-width: 900px) {
  .tepic-footer__container {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 600px) {
  .tepic-footer__top {
    padding: 55px 0 45px;
  }

  .tepic-footer__container {
    grid-template-columns: 1fr;
    gap: 38px;
  }

  .tepic-footer__bottom-container {
    align-items: flex-start;
    flex-direction: column;
  }
}
</style>