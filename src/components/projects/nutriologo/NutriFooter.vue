<script setup>
import nutriLogo from "../../../assets/projects/nutriologo/logo/logo.png";

const currentYear = new Date().getFullYear();

const scrollToSection = (id) => {
  const section = document.getElementById(id);

  if (section) {
    section.scrollIntoView({
      behavior: "smooth",
      block: "start",
    });
  }
};
</script>



<template>
  <footer class="nutri-footer">

    <div class="nutri-footer__container">

      <!-- TOP -->
      <div class="nutri-footer__top">

        <!-- MARCA -->
        <div class="nutri-footer__brand">

          <div class="nutri-footer__logo">
            <img
              :src="nutriLogo"
              alt="Dra. Camila Ríos - Nutrióloga"
              class="nutri-header__logo"
            />
          </div>

          <p>
            Nutrición personalizada para construir hábitos
            saludables que puedan acompañarte toda la vida.
          </p>

        </div>

        <!-- NAVEGACIÓN -->
        <div class="nutri-footer__column">
          <strong>Navegación</strong>

          <button @click="scrollToSection('inicio')">
            Inicio
          </button>

          <button @click="scrollToSection('sobre-mi')">
            Sobre mí
          </button>

          <button @click="scrollToSection('servicios')">
            Servicios
          </button>

          <button @click="scrollToSection('resultados')">
            Resultados
          </button>

          <button @click="scrollToSection('preguntas')">
            Preguntas frecuentes
          </button>
        </div>

        <!-- SERVICIOS -->
        <div class="nutri-footer__column">
          <strong>Servicios</strong>

          <span>Control de peso</span>
          <span>Nutrición deportiva</span>
          <span>Nutrición clínica</span>
          <span>Consulta en línea</span>
        </div>

        <!-- CONTACTO -->
        <div class="nutri-footer__column">
          <strong>Contacto</strong>

          <span>Lunes a viernes</span>
          <span>9:00 AM — 7:00 PM</span>
          <span>Consulta presencial y online</span>

          <button
            class="nutri-footer__agenda"
            @click="scrollToSection('agenda')"
          >
            Agendar consulta →
          </button>
        </div>

      </div>

      <!-- BOTTOM -->
      <div class="nutri-footer__bottom">

        <p>
          © {{ currentYear }} Dra. Camila Ríos.
          Todos los derechos reservados.
        </p>

        <p>
          Sitio demostrativo
        </p>

      </div>

    </div>

  </footer>
</template>

<style scoped>
.nutri-footer {
  padding: 80px 0 25px;

  background: #182a23;
  color: var(--nutri-white);
}

.nutri-footer__container {
  width: min(1180px, calc(100% - 40px));
  margin: 0 auto;
}

/* =========================
   TOP
========================= */

.nutri-footer__top {
  display: grid;
  grid-template-columns: 1.4fr 0.7fr 0.8fr 1fr;
  gap: 65px;

  padding-bottom: 65px;
}

/* =========================
   MARCA
========================= */

.nutri-footer__brand {
  display: grid;
  grid-template-columns: auto 1fr;
  align-items: center;
  column-gap: 12px;
}

.nutri-footer__logo {
  width: 100px;
  height: 100px;

  display: grid;
  place-items: center;

  border-radius: 50%;

  background: #FFF;
  color: var(--nutri-primary);

  font-size: 13px;
  font-weight: 800;
}

.nutri-footer__brand > div:nth-child(2) {
  display: flex;
  flex-direction: column;
  gap: 3px;
}

.nutri-footer__brand strong {
  font-size: 15px;
}

.nutri-footer__brand span {
  color: rgba(255, 255, 255, 0.5);

  font-size: 9px;
  letter-spacing: 1px;
  text-transform: uppercase;
}

.nutri-footer__brand p {
  grid-column: 1 / -1;

  max-width: 320px;

  margin: 22px 0 0;

  color: rgba(255, 255, 255, 0.5);

  font-size: 12px;
  line-height: 1.7;
}

/* =========================
   COLUMNAS
========================= */

.nutri-footer__column {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 13px;
}

.nutri-footer__column > strong {
  margin-bottom: 7px;

  color: var(--nutri-white);

  font-size: 12px;
  letter-spacing: 0.5px;
}

.nutri-footer__column button,
.nutri-footer__column span {
  padding: 0;
  border: 0;
  background: transparent;

  color: rgba(255, 255, 255, 0.5);

  font-family: inherit;
  font-size: 11px;
  text-align: left;
}

.nutri-footer__column button {
  cursor: pointer;

  transition: color 0.25s ease;
}

.nutri-footer__column button:hover {
  color: var(--nutri-secondary);
}

.nutri-footer__column .nutri-footer__agenda {
  margin-top: 10px;

  color: var(--nutri-secondary);

  font-size: 12px;
  font-weight: 700;
}

/* =========================
   BOTTOM
========================= */

.nutri-footer__bottom {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 30px;

  padding-top: 25px;

  border-top: 1px solid rgba(255, 255, 255, 0.1);
}

.nutri-footer__bottom p {
  margin: 0;

  color: rgba(255, 255, 255, 0.35);

  font-size: 10px;
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 900px) {
  .nutri-footer__top {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 550px) {
  .nutri-footer {
    padding-top: 60px;
  }

  .nutri-footer__container {
    width: calc(100% - 28px);
  }

  .nutri-footer__top {
    grid-template-columns: 1fr;
    gap: 45px;
  }

  .nutri-footer__bottom {
    flex-direction: column;
    align-items: flex-start;
    gap: 8px;
  }
}
</style>