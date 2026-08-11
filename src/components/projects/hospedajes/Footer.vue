<template>
  <footer id="reservar" class="hospedaje-footer">

    <div class="footer-cta">
      <p>
        Proyecto demostrativo desarrollado por Webcats.mx.
      </p>

      <h2>
        Este sitio forma parte del portafolio de Webcats.mx
      </h2>

      <a
        href="https://wa.me/523332341375?text=Hola%2C%20vi%20el%20demo%20de%20hospedajes%20en%20Webcats.mx%20y%20me%20interesa%20una%20p%C3%A1gina%20similar."
        target="_blank"
        rel="noopener noreferrer"
        class="footer-button"
      >
        Quiero una página así
        <span>→</span>
      </a>
    </div>

    <div class="footer-bottom">

      <div class="footer-brand">
        <strong>Webcats.mx</strong>
      </div>

      <nav>
        <a href="#inicio">Inicio</a>
        <a href="#cabanas">Hospedajes</a>
        <a href="#galeria">Galería</a>
        <a href="#opiniones">Opiniones</a>
        <a href="#ubicacion">Ubicación</a>
      </nav>

      <p class="footer-copy">
        © {{ year }} Webcats.mx
      </p>

    </div>

  </footer>
</template>

<script setup>
const year = new Date().getFullYear();
</script>

<style scoped>
.hospedaje-footer {
  padding: 110px 40px 35px;
  color: var(--hospedaje-white);
  background: #000000;
}

.footer-cta {
  max-width: 950px;
  margin: 0 auto 100px;
  text-align: center;
}

.footer-cta > p {
  margin-bottom: 18px;
  color: var(--hospedaje-gold-light);
  font-size: 10px;
  font-weight: 700;
  letter-spacing: 0.23em;
  text-transform: uppercase;
}

.footer-cta h2 {
  color: var(--hospedaje-white);
  font-family: var(--hospedaje-heading);
  font-size: clamp(50px, 7vw, 88px);
  font-weight: 500;
  line-height: 0.93;
}

.footer-button {
  margin-top: 35px;
  padding: 15px 24px;
  border-radius: 999px;

  display: inline-flex;
  align-items: center;
  gap: 14px;

  color: var(--hospedaje-navy-950);
  background: var(--hospedaje-gold);

  font-size: 11px;
  font-weight: 700;
  text-decoration: none;
}

.footer-bottom {
  width: min(1180px, 100%);
  margin: 0 auto;
  padding-top: 28px;

  border-top: 1px solid rgba(255, 255, 255, 0.12);

  display: grid;
  grid-template-columns: auto 1fr auto;
  align-items: center;
  gap: 35px;
}

.footer-brand {
  display: flex;
  align-items: center;
}

.footer-brand strong {
  color: var(--hospedaje-white);
  font-family: var(--hospedaje-heading);
  font-size: 20px;
}

.footer-bottom nav {
  display: flex;
  justify-content: center;
  gap: 22px;
}

.footer-bottom nav a {
  color: rgba(255, 255, 255, 0.6);
  font-size: 10px;
  text-decoration: none;
}

.footer-bottom nav a:hover {
  color: var(--hospedaje-gold-light);
}

.footer-copy {
  color: rgba(255, 255, 255, 0.4);
  font-size: 9px;
}

@media (max-width: 850px) {
  .footer-bottom {
    grid-template-columns: 1fr;
    justify-items: center;
    text-align: center;
  }

  .footer-bottom nav {
    flex-wrap: wrap;
  }
}

@media (max-width: 600px) {
  .hospedaje-footer {
    padding: 85px 20px 30px;
  }

  .footer-cta {
    margin-bottom: 70px;
  }

  .footer-button {
    width: 100%;
    justify-content: center;
  }

  .footer-bottom nav {
    gap: 16px;
  }
}
</style>