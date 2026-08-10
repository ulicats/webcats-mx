<template>
  <footer id="reservar" class="arce-footer">

    <div class="footer-cta">
      <p>
        Proyecto demostrativo desarrollado por Webcats.mx.
      </p>

      <h2>
        Este sitio forma parte del portafolio de Webcats.mx
        <span></span>
      </h2>

      <a
        href="#reservar"
        class="footer-button"
      >
        Consultar disponibilidad
        <span>→</span>
      </a>
    </div>

    <div class="footer-bottom">

      <div class="footer-brand">
        <img
            src="../../../assets/projects/arce/logo/arce-logo.png"
            alt="Arce Cabañas Mazamitla"
            class="footer-logo"
          />
      </div>

      <nav>
        <a href="#inicio">Inicio</a>
        <a href="#cabanas">Cabañas</a>
        <a href="#galeria">Galería</a>
        <a href="#opiniones">Opiniones</a>
        <a href="#ubicacion">Ubicación</a>
      </nav>

      <p class="footer-copy">
        © {{ year }} Arce Cabañas Mazamitla
      </p>

    </div>

  </footer>
</template>

<script setup>
const year = new Date().getFullYear();
</script>

<style scoped>
.arce-footer {
  padding: 110px 40px 35px;
  color: var(--arce-white);
  background: #0c1d2a;
}

.footer-cta {
  max-width: 950px;
  margin: 0 auto 100px;
  text-align: center;
}

.footer-cta > p {
  margin-bottom: 18px;
  color: var(--arce-gold-light);
  font-size: 10px;
  font-weight: 700;
  letter-spacing: 0.23em;
  text-transform: uppercase;
}

.footer-cta h2 {
  color: var(--arce-white);
  font-family: var(--arce-heading);
  font-size: clamp(50px, 7vw, 88px);
  font-weight: 500;
  line-height: 0.93;
}

.footer-cta h2 span {
  display: block;
  color: var(--arce-gold-light);
  font-style: italic;
}

.footer-button {
  margin-top: 35px;
  padding: 15px 24px;
  border-radius: 999px;
  display: inline-flex;
  align-items: center;
  gap: 14px;
  color: var(--arce-navy-950);
  background: var(--arce-gold);
  font-size: 11px;
  font-weight: 700;
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
  gap: 10px;
}

.footer-brand__mark {
  width: 40px;
  height: 40px;
  border: 1px solid var(--arce-gold-light);
  border-radius: 50%;
  display: grid;
  place-items: center;
  color: var(--arce-gold-light);
  font-family: var(--arce-heading);
  font-size: 25px;
}

.footer-brand > div:last-child {
  display: flex;
  flex-direction: column;
}

.footer-brand strong {
  font-family: var(--arce-heading);
  font-size: 20px;
}

.footer-brand span {
  color: rgba(255, 255, 255, 0.45);
  font-size: 8px;
  letter-spacing: 0.14em;
  text-transform: uppercase;
}

.footer-bottom nav {
  display: flex;
  justify-content: center;
  gap: 22px;
}

.footer-bottom nav a {
  color: rgba(255, 255, 255, 0.6);
  font-size: 10px;
}

.footer-bottom nav a:hover {
  color: var(--arce-gold-light);
}

.footer-copy {
  color: rgba(255, 255, 255, 0.4);
  font-size: 9px;
}

.footer-logo {
  
  width: 125px;
  height: auto;
  object-fit: contain;
}

@media (max-width: 768px) {
  .footer-logo {
    width: 105px;
  }
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
  .arce-footer {
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