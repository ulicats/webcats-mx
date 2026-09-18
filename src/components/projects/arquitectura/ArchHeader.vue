<template>
  <header class="arch-header">
    <div class="header-grid">
      <a href="#inicio" class="brand">
        <span class="brand-mark">A</span>

        <span class="brand-text">
          <strong>ARQUITECTURA</strong>
          <small>ESTUDIO / 2026</small>
        </span>
      </a>

      <nav class="navigation">
        <a href="#estudio">ESTUDIO</a>
        <a href="#servicios">SERVICIOS</a>
        <RouterLink to="/projects/arquitectura/proyectos">
            PROYECTOS
        </RouterLink>
        <a href="#contacto">CONTACTO</a>
      </nav>

      <div class="plan-reference">
        <span>PLANTA / 01</span>
        <span>ARQ — 001</span>
      </div>
    </div>

    <!-- CALLE / LÍMITE DEL TERRENO -->
    <div class="street">
      <span class="street-label"> ACCESO PÁGINA WEB</span>

      <div class="street-line">
        <span class="line left"></span>

        <span class="access">
      
          <span class="arrow">↓</span>
        </span>

        <span class="line right"></span>
      </div>
    </div>
  </header>
</template>

<script setup>
</script>

<style scoped>
.arch-header {
  position: relative;
  z-index: 20;
  padding: 28px 5% 0;
  background: #f3f1eb;
  color: #151515;
}

.header-grid {
  min-height: 85px;
  display: grid;
  grid-template-columns: 1fr auto 1fr;
  align-items: center;
  gap: 40px;
}

.brand {
  display: flex;
  align-items: center;
  gap: 16px;
  color: inherit;
  text-decoration: none;
  width: fit-content;
}

.brand-mark {
  width: 42px;
  height: 42px;
  border: 1px solid #151515;
  border-radius: 50%;
  display: grid;
  place-items: center;
  font-size: 14px;
}

.brand-text {
  display: flex;
  flex-direction: column;
  gap: 4px;
}

.brand-text strong {
  font-size: 13px;
  font-weight: 500;
  letter-spacing: 0.22em;
}

.brand-text small {
  font-size: 8px;
  letter-spacing: 0.18em;
  color: #74736f;
}

.navigation {
  display: flex;
  align-items: center;
  gap: 32px;
}

.navigation a {
  position: relative;
  color: #151515;
  text-decoration: none;
  font-size: 10px;
  letter-spacing: 0.16em;
}

.navigation a::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: -7px;
  width: 0;
  height: 1px;
  background: #151515;
  transition: width 0.3s ease;
}

.navigation a:hover::after {
  width: 100%;
}

.plan-reference {
  justify-self: end;
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  gap: 5px;
  font-size: 8px;
  letter-spacing: 0.18em;
  color: #74736f;
}

.street {
  position: relative;
  margin-top: 18px;
}

.street-label {
  display: block;
  margin-bottom: 9px;
  text-align: center;
  font-size: 8px;
  letter-spacing: 0.22em;
  color: #74736f;
}

.street-line {
  display: grid;
  grid-template-columns: 1fr 120px 1fr;
  align-items: center;
}

.line {
  height: 3px;
  background: #151515;
}

.access {
  height: 32px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start;
  gap: 2px;
  font-size: 7px;
  letter-spacing: 0.18em;
}

.arrow {
  font-size: 14px;
}

@media (max-width: 900px) {
  .header-grid {
    grid-template-columns: 1fr auto;
  }

  .navigation {
    display: none;
  }

  .plan-reference {
    display: none;
  }
}

@media (max-width: 600px) {
  .arch-header {
    padding: 20px 20px 0;
  }

  .brand-mark {
    width: 36px;
    height: 36px;
  }

  .brand-text strong {
    font-size: 11px;
  }

  .street-line {
    grid-template-columns: 1fr 85px 1fr;
  }
}
</style>