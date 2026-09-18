<template>
  <footer class="arch-footer">

    <!-- LÍMITE DEL TERRENO -->
    <div class="property-limit">

      <span class="limit-left"></span>

      <div class="limit-reference">
        <span>LÍMITE POSTERIOR</span>
        <small>FIN / 06</small>
      </div>

      <span class="limit-right"></span>

    </div>

    <div class="footer-content">

      <div class="footer-brand">
        <div class="brand-symbol">
          A
        </div>

        <div>
          <strong>ARQUITECTURA</strong>
          <span>ESTUDIO / 2026</span>
        </div>
      </div>

      <div class="footer-nav">
        <a href="#inicio">INICIO</a>
        <a href="#estudio">ESTUDIO</a>
        <a href="#servicios">SERVICIOS</a>
        <a href="#proyectos">PROYECTOS</a>
        <a href="#contacto">CONTACTO</a>
      </div>

      <div class="footer-meta">
        <span>PROYECTO CONCEPTUAL</span>
        <span>INTERFAZ / ARQ — 001</span>
      </div>

    </div>

    <div class="footer-bottom">

      <span>
        © 2026 ARQUITECTURA
      </span>

      <span class="webcats">
        DESARROLLADO POR
        <strong>WEBCATS.MX</strong>
      </span>

    </div>

  </footer>
</template>

<script setup>
</script>

<style scoped>
.arch-footer {
  width: calc(100% - 110px);
  max-width: 1760px;

  margin: 0 auto;

  padding-bottom: 40px;

  background: #f3f1eb;
  color: #151515;
}


/* ========================================
   LÍMITE
======================================== */

.property-limit {
  display: grid;

  grid-template-columns:
    1fr
    180px
    1fr;

  align-items: center;

  margin-bottom: 60px;
}

.limit-left,
.limit-right {
  height: 5px;

  background: #151515;
}

.limit-reference {
  display: flex;
  flex-direction: column;

  align-items: center;

  gap: 5px;

  color: #74736f;
}

.limit-reference span {
  font-size: 7px;

  letter-spacing: 0.18em;
}

.limit-reference small {
  font-size: 6px;

  letter-spacing: 0.15em;
}


/* ========================================
   CONTENT
======================================== */

.footer-content {
  padding: 0 30px;

  display: grid;

  grid-template-columns:
    1fr
    auto
    1fr;

  align-items: center;

  gap: 50px;
}


/* ========================================
   BRAND
======================================== */

.footer-brand {
  display: flex;

  align-items: center;

  gap: 15px;
}

.brand-symbol {
  width: 38px;
  height: 38px;

  display: grid;
  place-items: center;

  border: 1px solid #151515;

  border-radius: 50%;

  font-size: 9px;
}

.footer-brand > div:last-child {
  display: flex;

  flex-direction: column;

  gap: 5px;
}

.footer-brand strong {
  font-size: 10px;

  font-weight: 500;

  letter-spacing: 0.19em;
}

.footer-brand span {
  color: #74736f;

  font-size: 6px;

  letter-spacing: 0.16em;
}


/* ========================================
   NAV
======================================== */

.footer-nav {
  display: flex;

  gap: 27px;
}

.footer-nav a {
  color: #151515;

  text-decoration: none;

  font-size: 7px;

  letter-spacing: 0.16em;
}


/* ========================================
   META
======================================== */

.footer-meta {
  justify-self: end;

  display: flex;
  flex-direction: column;

  align-items: flex-end;

  gap: 5px;

  color: #74736f;

  font-size: 6px;

  letter-spacing: 0.16em;
}


/* ========================================
   BOTTOM
======================================== */

.footer-bottom {
  margin-top: 55px;

  padding: 22px 30px 0;

  display: flex;
  justify-content: space-between;

  border-top: 1px solid #b9b7b0;

  color: #74736f;

  font-size: 7px;

  letter-spacing: 0.16em;
}

.webcats strong {
  color: #151515;

  font-weight: 600;
}


/* ========================================
   RESPONSIVE
======================================== */

@media (max-width: 900px) {

  .arch-footer {
    width: calc(100% - 60px);
  }

  .footer-content {
    grid-template-columns:
      1fr
      1fr;
  }

  .footer-nav {
    display: none;
  }

}

@media (max-width: 600px) {

  .arch-footer {
    width: calc(100% - 30px);
  }

  .property-limit {
    grid-template-columns:
      1fr
      120px
      1fr;
  }

  .footer-content {
    grid-template-columns: 1fr;

    gap: 30px;
  }

  .footer-meta {
    justify-self: start;

    align-items: flex-start;
  }

  .footer-bottom {
    flex-direction: column;

    gap: 12px;
  }
}
</style>