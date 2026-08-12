<template>
  <section
    id="nosotros"
    class="about-section"
  >
    <div class="about-shell">

      <div class="about-structure">

        <div class="about-structure__frame">
          <div class="about-structure__vertical"></div>
          <div class="about-structure__horizontal"></div>

          <span class="about-structure__label">
            Arquitectura funcional
          </span>

          <strong>10+</strong>

          <p>
            años creando soluciones
            en vidrio y aluminio
          </p>
        </div>

      </div>


      <div class="about-content">

        <span class="section-kicker">
          Nosotros
        </span>

        <h2>
          Experiencia técnica,
          <span>acabados que se notan.</span>
        </h2>

        <p>
          Cada proyecto comienza entendiendo el espacio,
          las medidas y el uso que tendrá cada instalación.
          Nuestro objetivo es crear soluciones funcionales,
          resistentes y visualmente limpias.
        </p>

        <p>
          Trabajamos con materiales seleccionados y procesos
          de instalación pensados para proyectos residenciales
          y comerciales.
        </p>


        <div class="about-data">

          <div>
            <strong>01</strong>
            <span>Diseño a medida</span>
          </div>

          <div>
            <strong>02</strong>
            <span>Instalación especializada</span>
          </div>

          <div>
            <strong>03</strong>
            <span>Garantía de trabajo</span>
          </div>

        </div>

      </div>

    </div>
  </section>
</template>


<style scoped>
.about-section {
  padding: 120px 5vw;

  background: #111416;
}

.about-shell {
  width: min(100%, 1500px);
  margin: 0 auto;

  display: grid;
  grid-template-columns: 0.85fr 1.15fr;

  gap: 5px;

  background: #111416;
}

.about-structure {
  position: relative;

  min-height: 620px;

  padding: 6px;

  background: #1c2225;
}

.about-structure__frame {
  position: relative;

  width: 100%;
  height: 100%;

  min-height: 608px;

  overflow: hidden;

  display: flex;
  flex-direction: column;
  justify-content: flex-end;

  padding: 45px;

  background:
    linear-gradient(
      145deg,
      #30464f,
      #162328 60%,
      #0d1518
    );

  border: 1px solid rgba(255, 255, 255, 0.12);
}

.about-structure__vertical {
  position: absolute;

  top: 0;
  bottom: 0;
  left: 34%;

  width: 6px;

  background: #111416;
}

.about-structure__horizontal {
  position: absolute;

  left: 0;
  right: 0;
  top: 38%;

  height: 6px;

  background: #111416;
}

.about-structure__frame::before {
  content: '';

  position: absolute;

  width: 140%;
  height: 28%;

  top: 5%;
  left: -75%;

  transform: rotate(-35deg);

  background: rgba(255, 255, 255, 0.12);
}

.about-structure__label {
  position: relative;
  z-index: 2;

  margin-bottom: auto;

  color: rgba(255, 255, 255, 0.55);

  font-size: 0.68rem;
  letter-spacing: 0.16em;
  text-transform: uppercase;
}

.about-structure strong {
  position: relative;
  z-index: 2;

  color: #ffffff;

  font-size: clamp(5rem, 9vw, 9rem);
  font-weight: 400;

  line-height: 0.8;
}

.about-structure p {
  position: relative;
  z-index: 2;

  max-width: 300px;

  margin: 28px 0 0;

  color: rgba(255, 255, 255, 0.6);

  font-size: 0.9rem;
  line-height: 1.6;
}

.about-content {
  padding: clamp(60px, 7vw, 110px);

  background: #edf2f4;
}

.section-kicker {
  display: block;

  margin-bottom: 20px;

  color: var(--glass-blue, #4ea7c4);

  font-size: 0.7rem;
  font-weight: 700;

  letter-spacing: 0.18em;
  text-transform: uppercase;
}

.about-content h2 {
  margin: 0 0 40px;

  color: #111416;

  font-size: clamp(2.8rem, 5vw, 5.4rem);
  font-weight: 500;

  line-height: 0.98;
  letter-spacing: -0.05em;
}

.about-content h2 span {
  display: block;

  color: #87949a;
}

.about-content > p {
  max-width: 690px;

  margin: 0 0 20px;

  color: #626f75;

  font-size: 1rem;
  line-height: 1.85;
}

.about-data {
  margin-top: 55px;

  border-top: 1px solid rgba(17, 20, 22, 0.13);
}

.about-data > div {
  min-height: 74px;

  display: grid;
  grid-template-columns: 80px 1fr;
  align-items: center;

  border-bottom: 1px solid rgba(17, 20, 22, 0.13);
}

.about-data strong {
  color: var(--glass-blue, #4ea7c4);

  font-size: 0.72rem;
  font-weight: 600;
  letter-spacing: 0.12em;
}

.about-data span {
  color: #111416;

  font-size: 0.93rem;
  font-weight: 500;
}

@media (max-width: 900px) {
  .about-section {
    padding: 90px 5vw;
  }

  .about-shell {
    grid-template-columns: 1fr;
  }

  .about-structure {
    min-height: 470px;
  }

  .about-structure__frame {
    min-height: 458px;
  }
}

@media (max-width: 600px) {
  .about-section {
    padding: 70px 20px;
  }

  .about-structure {
    min-height: 390px;
  }

  .about-structure__frame {
    min-height: 378px;

    padding: 28px;
  }

  .about-content {
    padding: 55px 26px;
  }

  .about-content h2 {
    font-size: clamp(2.6rem, 12vw, 4rem);
  }
}
</style>