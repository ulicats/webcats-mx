<template>
  <footer class="gym-footer">
    <div class="gym-footer__container">

      <div class="gym-footer__top">

        <div class="gym-footer__brand">
          <a href="#inicio" class="gym-footer__logo">
            <span class="gym-footer__logo-mark">IP</span>

            <div>
              <strong>IRON PULSE</strong>
              <span>PERFORMANCE CLUB</span>
            </div>
          </a>

          <p>
            Fuerza, disciplina y rendimiento en un espacio diseñado
            para ayudarte a superar tu siguiente nivel.
          </p>
        </div>

        <div class="gym-footer__column">
          <span class="gym-footer__label">NAVEGACIÓN</span>

          <a href="#inicio">Inicio</a>
          <a href="#instalaciones">Instalaciones</a>
          <a href="#galeria">Galería</a>
          <a href="#entrenamiento">Entrenamiento</a>
          <a href="#planes">Planes</a>
        </div>

        <div class="gym-footer__column">
          <span class="gym-footer__label">CLUB</span>

          <a href="#coaches">Coaches</a>
          <a href="#resultados">Resultados</a>
          <a href="#horarios">Horarios</a>
          <a href="#faq">Preguntas frecuentes</a>
          <a href="#ubicacion">Ubicación</a>
        </div>

        <div class="gym-footer__column gym-footer__contact">
          <span class="gym-footer__label">CONTACTO</span>

          <strong>+52 311 000 0000</strong>
          <a href="mailto:hola@ironpulse.mx">
            hola@ironpulse.mx
          </a>

          <p>
            LUN — DOM<br />
            05:00 — 23:00
          </p>
        </div>

      </div>

      <div class="gym-footer__bottom">
        <span>
          © {{ currentYear }} IRON PULSE PERFORMANCE CLUB
        </span>

        <div class="gym-footer__socials">
          <a href="#" aria-label="Instagram">IG</a>
          <a href="#" aria-label="Facebook">FB</a>
          <a href="#" aria-label="TikTok">TK</a>
        </div>

        <span>
          DISEÑO WEB · WEBCATS
        </span>
      </div>

    </div>
  </footer>
</template>

<script setup>
const currentYear = new Date().getFullYear();
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,700;1,800;1,900&family=Inter:wght@400;500;600&display=swap");

.gym-footer {
  position: relative;
  overflow: hidden;

  padding: 90px 0 30px;

  background: #090909;
  color: #ffffff;

  font-family: "Inter", sans-serif;
}

.gym-footer__container {
  width: min(1400px, calc(100% - 48px));
  margin: 0 auto;
}

.gym-footer__top {
  display: grid;
  grid-template-columns: 1.5fr repeat(3, 0.65fr);
  gap: 70px;

  padding-bottom: 70px;

  border-bottom: 1px solid rgba(255, 255, 255, 0.12);
}

/* BRAND */

.gym-footer__brand {
  max-width: 390px;
}

.gym-footer__logo {
  display: flex;
  align-items: center;
  gap: 14px;

  color: #ffffff;
  text-decoration: none;
}

.gym-footer__logo-mark {
  width: 50px;
  height: 50px;

  display: flex;
  align-items: center;
  justify-content: center;

  background: #d9ff43;
  color: #090909;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 23px;
  font-weight: 900;
  font-style: italic;

  transform: skew(-6deg);
}

.gym-footer__logo > div {
  display: flex;
  flex-direction: column;
}

.gym-footer__logo strong {
  font-family: "Barlow Condensed", sans-serif;
  font-size: 26px;
  font-weight: 900;
  line-height: 1;
  letter-spacing: 1px;
}

.gym-footer__logo div > span {
  margin-top: 5px;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 9px;
  font-weight: 600;
  letter-spacing: 2.5px;

  color: #d9ff43;
}

.gym-footer__brand p {
  margin: 28px 0 0;

  font-size: 14px;
  line-height: 1.75;

  color: rgba(255, 255, 255, 0.45);
}

/* COLUMNS */

.gym-footer__column {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 13px;
}

.gym-footer__label {
  margin-bottom: 10px;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 10px;
  font-weight: 700;
  letter-spacing: 2px;

  color: #d9ff43;
}

.gym-footer__column a {
  color: rgba(255, 255, 255, 0.65);

  font-family: "Barlow Condensed", sans-serif;
  font-size: 15px;
  font-weight: 600;
  letter-spacing: 0.5px;

  text-decoration: none;

  transition:
    color 0.25s ease,
    transform 0.25s ease;
}

.gym-footer__column a:hover {
  color: #ffffff;
  transform: translateX(4px);
}

.gym-footer__contact strong {
  font-family: "Barlow Condensed", sans-serif;
  font-size: 23px;
  font-weight: 700;
}

.gym-footer__contact p {
  margin: 10px 0 0;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 11px;
  font-weight: 600;
  line-height: 1.6;
  letter-spacing: 1.2px;

  color: rgba(255, 255, 255, 0.38);
}

/* BIG WORD */

.gym-footer__middle {
  overflow: hidden;

  padding: 40px 0 25px;

  border-bottom: 1px solid rgba(255, 255, 255, 0.12);
}

.gym-footer__middle span {
  display: block;

  font-family: "Barlow Condensed", sans-serif;
  font-size: clamp(110px, 16vw, 250px);
  font-weight: 900;
  font-style: italic;

  line-height: 0.72;
  letter-spacing: -8px;

  color: transparent;

  -webkit-text-stroke: 2px rgba(255, 255, 255, 0.09);

  white-space: nowrap;
}

/* BOTTOM */

.gym-footer__bottom {
  min-height: 70px;

  display: grid;
  grid-template-columns: 1fr auto 1fr;
  gap: 30px;

  align-items: center;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 9px;
  font-weight: 600;
  letter-spacing: 1.7px;

  color: rgba(255, 255, 255, 0.32);
}

.gym-footer__bottom > span:last-child {
  justify-self: end;
}

.gym-footer__socials {
  display: flex;
  align-items: center;
  gap: 8px;
}

.gym-footer__socials a {
  width: 36px;
  height: 36px;

  display: flex;
  align-items: center;
  justify-content: center;

  border: 1px solid rgba(255, 255, 255, 0.16);
  border-radius: 50%;

  color: #ffffff;

  font-family: "Barlow Condensed", sans-serif;
  font-size: 10px;
  font-weight: 700;

  text-decoration: none;

  transition:
    background 0.25s ease,
    color 0.25s ease;
}

.gym-footer__socials a:hover {
  background: #d9ff43;
  color: #090909;
}

@media (max-width: 1000px) {
  .gym-footer__top {
    grid-template-columns: 1fr 1fr;
  }
}

@media (max-width: 700px) {
  .gym-footer {
    padding-top: 70px;
  }

  .gym-footer__container {
    width: calc(100% - 32px);
  }

  .gym-footer__top {
    grid-template-columns: 1fr;
    gap: 45px;
  }

  .gym-footer__middle span {
    font-size: 100px;
    letter-spacing: -4px;
  }

  .gym-footer__bottom {
    grid-template-columns: 1fr;
    gap: 20px;

    padding-top: 25px;
  }

  .gym-footer__bottom > span:last-child {
    justify-self: start;
  }

  .gym-footer__socials {
    grid-row: 2;
  }
}
</style>