<template>
  <footer class="law-footer">

    <div class="law-footer__top">
      <div class="law-container law-footer__grid">

        <!-- MARCA -->
        <div class="law-footer__brand">

          <div class="law-footer__logo">
            <span>⚖</span>

            <div>
              <strong>
                LEX & JUSTICIA
              </strong>

              <small>
                DESPACHO JURÍDICO
              </small>
            </div>
          </div>

          <p>
            Asesoría y representación jurídica con estrategia,
            claridad, confidencialidad y compromiso profesional.
          </p>

          <div class="law-footer__folio">
            FIRMA JURÍDICA · MÉXICO
          </div>

        </div>

        <!-- NAVEGACIÓN -->
        <div class="law-footer__column">

          <span class="law-footer__title">
            Navegación
          </span>

          <nav>
            <a href="#inicio">
              Inicio
            </a>

            <a href="#despacho">
              El despacho
            </a>

            <a href="#areas">
              Áreas de práctica
            </a>

            <a href="#abogados">
              Abogados
            </a>

            <a href="#faq">
              Preguntas frecuentes
            </a>
          </nav>

        </div>

        <!-- ÁREAS -->
        <div class="law-footer__column">

          <span class="law-footer__title">
            Áreas jurídicas
          </span>

          <nav>
            <a href="#areas">
              Derecho Civil
            </a>

            <a href="#areas">
              Derecho Familiar
            </a>

            <a href="#areas">
              Derecho Laboral
            </a>

            <a href="#areas">
              Derecho Mercantil
            </a>

            <a href="#areas">
              Derecho Corporativo
            </a>
          </nav>

        </div>

        <!-- CONTACTO -->
        <div class="law-footer__column">

          <span class="law-footer__title">
            Contacto
          </span>

          <div class="law-footer__contact">
            <span>
              +52 311 123 4567
            </span>

            <span>
              contacto@lexjustitia.mx
            </span>

            <span>
              Tepic, Nayarit
            </span>

            <span>
              Lunes a viernes
              <br />
              09:00 – 18:00
            </span>
          </div>

          <a
            href="#consulta"
            class="law-footer__consultation"
          >
            Solicitar consulta →
          </a>

        </div>

      </div>
    </div>

    <!-- LEGAL -->
    <div class="law-footer__legal">
      <div class="law-container law-footer__legal-content">

        <p>
          La información contenida en este sitio es de carácter
          informativo y no constituye asesoría jurídica ni genera
          por sí misma una relación abogado-cliente.
        </p>

        <div class="law-footer__legal-bottom">

          <span>
            © {{ currentYear }} Lex & Justitia
          </span>

          <div>
            <a href="#">
              Aviso de privacidad
            </a>

            <span>
              /
            </span>

            <a href="#">
              Términos de uso
            </a>
          </div>

        </div>

      </div>
    </div>

  </footer>
</template>

<script setup>
const currentYear = new Date().getFullYear();
</script>

<style scoped>
.law-footer {
  background: #101923;

  color: var(--law-white);
}

/* =========================================================
   PARTE SUPERIOR
========================================================= */

.law-footer__top {
  padding: 80px 0 60px;
}

.law-footer__grid {
  display: grid;

  grid-template-columns:
    minmax(260px, 1.4fr)
    repeat(3, minmax(150px, 0.7fr));

  gap: 65px;
}

/* =========================================================
   MARCA
========================================================= */

.law-footer__logo {
  display: flex;
  align-items: center;

  gap: 15px;

  margin-bottom: 25px;
}

.law-footer__logo > span {
  width: 48px;
  height: 48px;

  display: flex;
  align-items: center;
  justify-content: center;

  border: 1px solid var(--law-gold);

  border-radius: 50%;

  color: var(--law-gold);

  font-size: 21px;
}

.law-footer__logo div {
  display: flex;
  flex-direction: column;
}

.law-footer__logo strong {
  color: var(--law-white);

  font-family:
    "Cormorant Garamond",
    Georgia,
    serif;

  font-size: 20px;
  font-weight: 600;

  letter-spacing: 1px;
}

.law-footer__logo small {
  margin-top: 4px;

  color: var(--law-gold-soft);

  font-family: "Inter", Arial, sans-serif;

  font-size: 7px;
  font-weight: 700;

  letter-spacing: 1.7px;
}

.law-footer__brand p {
  max-width: 340px;

  margin-bottom: 25px;

  color: rgba(255, 255, 255, 0.55);

  font-size: 12px;
  line-height: 1.8;
}

.law-footer__folio {
  color: rgba(255, 255, 255, 0.32);

  font-family: "Inter", Arial, sans-serif;

  font-size: 7px;
  font-weight: 700;

  letter-spacing: 1.4px;
}

/* =========================================================
   COLUMNAS
========================================================= */

.law-footer__title {
  display: block;

  margin-bottom: 23px;

  color: var(--law-gold-soft);

  font-family: "Inter", Arial, sans-serif;

  font-size: 8px;
  font-weight: 700;

  letter-spacing: 1.5px;
  text-transform: uppercase;
}

.law-footer__column nav,
.law-footer__contact {
  display: flex;
  flex-direction: column;

  gap: 13px;
}

.law-footer__column nav a,
.law-footer__contact span {
  color: rgba(255, 255, 255, 0.55);

  font-family: "Inter", Arial, sans-serif;

  font-size: 11px;
  line-height: 1.6;

  text-decoration: none;
}

.law-footer__column nav a {
  transition: color var(--law-transition);
}

.law-footer__column nav a:hover {
  color: var(--law-gold-soft);
}

.law-footer__consultation {
  display: inline-block;

  margin-top: 23px;

  padding-bottom: 5px;

  border-bottom: 1px solid var(--law-gold);

  color: var(--law-gold-soft);

  font-family: "Inter", Arial, sans-serif;

  font-size: 8px;
  font-weight: 700;

  letter-spacing: 1px;
  text-transform: uppercase;

  text-decoration: none;
}

/* =========================================================
   LEGAL
========================================================= */

.law-footer__legal {
  border-top: 1px solid rgba(255, 255, 255, 0.09);

  background: #0c141c;
}

.law-footer__legal-content {
  padding-top: 28px;
  padding-bottom: 28px;
}

.law-footer__legal p {
  max-width: 950px;

  margin-bottom: 25px;

  color: rgba(255, 255, 255, 0.34);

  font-size: 9px;
  line-height: 1.7;
}

.law-footer__legal-bottom {
  display: flex;
  align-items: center;
  justify-content: space-between;

  gap: 30px;

  color: rgba(255, 255, 255, 0.3);

  font-family: "Inter", Arial, sans-serif;

  font-size: 8px;

  letter-spacing: 0.5px;
}

.law-footer__legal-bottom div {
  display: flex;
  align-items: center;

  gap: 10px;
}

.law-footer__legal-bottom a {
  color: inherit;

  text-decoration: none;

  transition: color var(--law-transition);
}

.law-footer__legal-bottom a:hover {
  color: var(--law-gold-soft);
}

/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 950px) {
  .law-footer__grid {
    grid-template-columns: repeat(2, 1fr);

    gap: 55px;
  }
}

@media (max-width: 600px) {
  .law-footer__grid {
    grid-template-columns: 1fr;

    gap: 45px;
  }

  .law-footer__top {
    padding: 65px 0 45px;
  }

  .law-footer__legal-bottom {
    align-items: flex-start;
    flex-direction: column;

    gap: 15px;
  }
}
</style>