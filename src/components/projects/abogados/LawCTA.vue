<template>
  <section class="law-cta">
    <div class="law-container">

      <div class="law-cta__content">

        <span class="law-cta__eyebrow">
          Consulta jurídica
        </span>

        <h2>
          Todo asunto jurídico comienza
          por entender correctamente el problema.
        </h2>

        <p>
          Podemos ayudarte a analizar tu situación, identificar
          posibles escenarios y definir los siguientes pasos
          con una estrategia clara.
        </p>

        <div class="law-cta__actions">
          <a
            href="#consulta"
            class="law-cta__button law-cta__button--primary"
          >
            Solicitar valoración
            <span>→</span>
          </a>

          <a
            href="#contacto"
            class="law-cta__button law-cta__button--outline"
          >
            Ver datos de contacto
          </a>
        </div>

        <div class="law-cta__divider">
          <span></span>
        </div>

        <div class="law-cta__footer">
          <span>
            LEX & JUSTITIA
          </span>

          <span>
            DESPACHO JURÍDICO
          </span>

          <span>
            CONSULTA / VALORACIÓN
          </span>
        </div>

      </div>

    </div>
  </section>
</template>

<style scoped>
.law-cta {
  position: relative;

  padding: 120px 0;

  overflow: hidden;

  background: var(--law-primary);

  color: var(--law-white);
}

/* =========================================================
   DETALLE DE FONDO
========================================================= */

.law-cta::before {
  content: "§";

  position: absolute;

  top: 50%;
  right: 6%;

  transform: translateY(-50%);

  color: rgba(255, 255, 255, 0.025);

  font-family:
    "Cormorant Garamond",
    Georgia,
    serif;

  font-size: 420px;

  line-height: 1;

  pointer-events: none;
}

.law-cta::after {
  content: "";

  position: absolute;

  top: 30px;
  left: 30px;
  right: 30px;
  bottom: 30px;

  border: 1px solid rgba(199, 178, 143, 0.22);

  pointer-events: none;
}

/* =========================================================
   CONTENIDO
========================================================= */

.law-cta__content {
  position: relative;
  z-index: 2;

  max-width: 900px;

  margin: 0 auto;

  text-align: center;
}

.law-cta__eyebrow {
  display: inline-flex;
  align-items: center;

  gap: 14px;

  margin-bottom: 24px;

  color: var(--law-gold-soft);

  font-family: "Inter", Arial, sans-serif;

  font-size: 9px;
  font-weight: 700;

  letter-spacing: 2px;
  text-transform: uppercase;
}

.law-cta__eyebrow::before,
.law-cta__eyebrow::after {
  content: "";

  width: 35px;
  height: 1px;

  background: var(--law-gold);
}

/* =========================================================
   TÍTULO
========================================================= */

.law-cta h2 {
  max-width: 900px;

  margin: 0 auto 28px;

  color: var(--law-white);

  font-family:
    "Cormorant Garamond",
    Georgia,
    serif;

  font-size: clamp(46px, 5vw, 72px);
  font-weight: 500;

  line-height: 1;

  letter-spacing: -1.5px;
}

.law-cta p {
  max-width: 650px;

  margin: 0 auto 38px;

  color: rgba(255, 255, 255, 0.68);

  font-size: 14px;
  line-height: 1.9;
}

/* =========================================================
   BOTONES
========================================================= */

.law-cta__actions {
  display: flex;
  align-items: center;
  justify-content: center;

  gap: 14px;

  flex-wrap: wrap;
}

.law-cta__button {
  min-height: 50px;

  display: inline-flex;
  align-items: center;
  justify-content: center;

  gap: 25px;

  padding: 0 24px;

  font-family: "Inter", Arial, sans-serif;

  font-size: 9px;
  font-weight: 700;

  letter-spacing: 1px;
  text-transform: uppercase;

  text-decoration: none;

  transition:
    background var(--law-transition),
    color var(--law-transition),
    border-color var(--law-transition),
    transform var(--law-transition);
}

.law-cta__button:hover {
  transform: translateY(-2px);
}

.law-cta__button--primary {
  background: var(--law-gold);

  border: 1px solid var(--law-gold);

  color: var(--law-primary);
}

.law-cta__button--primary:hover {
  background: var(--law-gold-soft);

  border-color: var(--law-gold-soft);
}

.law-cta__button--outline {
  background: transparent;

  border: 1px solid rgba(255, 255, 255, 0.35);

  color: var(--law-white);
}

.law-cta__button--outline:hover {
  border-color: var(--law-gold);

  color: var(--law-gold-soft);
}

/* =========================================================
   DIVISOR
========================================================= */

.law-cta__divider {
  display: flex;
  align-items: center;

  gap: 18px;

  margin: 55px 0 22px;
}

.law-cta__divider::before,
.law-cta__divider::after {
  content: "";

  flex: 1;

  height: 1px;

  background: rgba(255, 255, 255, 0.18);
}

.law-cta__divider span {
  width: 8px;
  height: 8px;

  border: 1px solid var(--law-gold);

  transform: rotate(45deg);
}

/* =========================================================
   FOOTER
========================================================= */

.law-cta__footer {
  display: flex;
  align-items: center;
  justify-content: space-between;

  gap: 20px;

  color: rgba(255, 255, 255, 0.45);

  font-family: "Inter", Arial, sans-serif;

  font-size: 7px;
  font-weight: 700;

  letter-spacing: 1.5px;
  text-transform: uppercase;
}

/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 700px) {
  .law-cta {
    padding: 95px 0;
  }

  .law-cta::after {
    top: 15px;
    left: 15px;
    right: 15px;
    bottom: 15px;
  }

  .law-cta__footer {
    flex-direction: column;

    justify-content: center;

    text-align: center;
  }

  .law-cta::before {
    right: -80px;

    font-size: 320px;
  }
}

@media (max-width: 500px) {
  .law-cta h2 {
    font-size: 42px;
  }

  .law-cta__actions {
    flex-direction: column;
  }

  .law-cta__button {
    width: 100%;
  }
}
</style>