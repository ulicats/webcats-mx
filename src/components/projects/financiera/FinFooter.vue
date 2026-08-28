<template>
  <footer class="fin-footer">
    <div class="fin-footer__container">

      <div class="fin-footer__top">

        <div class="fin-footer__brand">
          <div class="fin-footer__mark">
            <span>V</span>
          </div>

          <div class="fin-footer__brand-text">
            <strong>VERTEX</strong>
            <span>FINANCIAL ADVISORS</span>
          </div>

          <p>
            Estrategias financieras y patrimoniales diseñadas para crecer
            con claridad, disciplina y visión de largo plazo.
          </p>
        </div>

        <div class="fin-footer__nav-group">
          <span>NAVEGACIÓN</span>

          <a href="#inicio">Inicio</a>
          <a href="#nosotros">Nosotros</a>
          <a href="#servicios">Servicios</a>
          <a href="#estrategia">Estrategia</a>
          <a href="#asesores">Asesores</a>
          <a href="#contacto">Contacto</a>
        </div>

        <div class="fin-footer__nav-group">
          <span>SERVICIOS</span>

          <a href="#servicios">Planeación financiera</a>
          <a href="#servicios">Estrategia patrimonial</a>
          <a href="#servicios">Inversiones</a>
          <a href="#servicios">Finanzas empresariales</a>
          <a href="#servicios">Gestión de riesgos</a>
        </div>

        <div class="fin-footer__contact">
          <span>CONTACTO</span>

          <a href="mailto:contacto@vertexfinancial.mx">
            contacto@vertexfinancial.mx
          </a>

          <a href="tel:+523112345678">
            +52 311 234 5678
          </a>

          <p>
            Lunes a viernes<br>
            9:00 a 18:00
          </p>
        </div>

      </div>

      <div class="fin-footer__line"></div>

      <div class="fin-footer__bottom">
        <span>
          © {{ currentYear }} Vertex Financial Advisors.
        </span>

        <div class="fin-footer__legal">
          <a href="#">Aviso de privacidad</a>
          <a href="#">Términos</a>
        </div>

        <a
          href="https://www.webcats.mx"
          target="_blank"
          rel="noopener noreferrer"
          class="fin-footer__webcats"
        >
          Desarrollado por webcats.mx
        </a>
      </div>

    </div>
  </footer>
</template>

<script setup>
const currentYear = new Date().getFullYear()
</script>

<style scoped>
.fin-footer {
  padding: 95px 0 35px;
  background: #08131e;
  color: var(--fin-white);
}

.fin-footer__container {
  width: min(1280px, calc(100% - 80px));
  margin: 0 auto;
}

.fin-footer__top {
  display: grid;
  grid-template-columns: 1.5fr 0.75fr 1fr 0.85fr;
  gap: 70px;
}

.fin-footer__brand {
  max-width: 350px;
}

.fin-footer__mark {
  width: 42px;
  height: 42px;
  margin-bottom: 25px;
  display: grid;
  place-items: center;
  border: 1px solid var(--fin-accent);
  transform: rotate(45deg);
}

.fin-footer__mark span {
  color: var(--fin-accent-light);
  font-family: Georgia, serif;
  font-size: 21px;
  transform: rotate(-45deg);
}

.fin-footer__brand-text {
  display: flex;
  flex-direction: column;
  margin-bottom: 24px;
}

.fin-footer__brand-text strong {
  font-family: Georgia, serif;
  font-size: 20px;
  font-weight: 400;
  letter-spacing: 4px;
}

.fin-footer__brand-text span {
  margin-top: 4px;
  color: rgba(255, 255, 255, 0.35);
  font-size: 7px;
  letter-spacing: 3px;
}

.fin-footer__brand p {
  color: rgba(255, 255, 255, 0.42);
  font-size: 12px;
  line-height: 1.85;
}

.fin-footer__nav-group,
.fin-footer__contact {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}

.fin-footer__nav-group > span,
.fin-footer__contact > span {
  margin-bottom: 25px;
  color: var(--fin-accent-light);
  font-size: 8px;
  letter-spacing: 2.6px;
}

.fin-footer__nav-group a,
.fin-footer__contact a {
  margin-bottom: 13px;
  color: rgba(255, 255, 255, 0.55);
  font-size: 11px;
  line-height: 1.5;
  transition: color 0.25s ease;
}

.fin-footer__nav-group a:hover,
.fin-footer__contact a:hover {
  color: var(--fin-accent-light);
}

.fin-footer__contact p {
  margin-top: 10px;
  color: rgba(255, 255, 255, 0.35);
  font-size: 11px;
  line-height: 1.8;
}

.fin-footer__line {
  width: 100%;
  height: 1px;
  margin: 70px 0 30px;
  background: rgba(255, 255, 255, 0.1);
}

.fin-footer__bottom {
  display: grid;
  grid-template-columns: 1fr auto 1fr;
  gap: 30px;
  align-items: center;
  color: rgba(255, 255, 255, 0.25);
  font-size: 8px;
  letter-spacing: 1px;
}

.fin-footer__legal {
  display: flex;
  gap: 25px;
}

.fin-footer__legal a {
  color: rgba(255, 255, 255, 0.25);
}

.fin-footer__webcats {
  justify-self: end;
  color: rgba(255, 255, 255, 0.32);
  transition: color 0.25s ease;
}

.fin-footer__webcats:hover {
  color: var(--fin-accent-light);
}

@media (max-width: 1000px) {
  .fin-footer__top {
    grid-template-columns: 1fr 1fr;
  }

  .fin-footer__bottom {
    grid-template-columns: 1fr;
  }

  .fin-footer__legal,
  .fin-footer__webcats {
    justify-self: start;
  }
}

@media (max-width: 600px) {
  .fin-footer {
    padding-top: 75px;
  }

  .fin-footer__container {
    width: calc(100% - 36px);
  }

  .fin-footer__top {
    grid-template-columns: 1fr;
    gap: 45px;
  }

  .fin-footer__line {
    margin-top: 55px;
  }

  .fin-footer__legal {
    flex-direction: column;
    gap: 10px;
  }
}
</style>