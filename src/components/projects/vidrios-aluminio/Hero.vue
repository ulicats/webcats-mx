<template>
  <section
    id="inicio"
    class="architectural-hero"
  >
    <div class="architectural-hero__facade">

      <!-- =====================================
           VENTANAL IZQUIERDO
      ====================================== -->
      <article class="window-panel window-panel--left">

        <!-- CRISTAL GENERADO CON CSS -->
        <div class="glass-background glass-background--left">
          <div class="glass-building">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>

        <div class="window-panel__reflection"></div>

        <div class="window-panel__label">
          <span>01</span>
          <p>Precisión</p>
        </div>

      </article>


      <!-- =====================================
           VENTANAL CENTRAL
      ====================================== -->
      <article class="window-panel window-panel--center">

        <div class="window-panel__reflection"></div>

        <div class="hero-content">

          <div class="hero-content__eyebrow">
            <span></span>

            Arquitectura · Vidrio · Aluminio
          </div>

          <h1>
            Creamos espacios

            <span>
              hechos para destacar.
            </span>
          </h1>

          <p class="hero-content__description">
            Soluciones en vidrio y aluminio diseñadas a medida
            para transformar espacios residenciales y comerciales.
          </p>

          <div class="hero-content__actions">

            <a
              href="#proyectos"
              class="hero-button hero-button--primary"
            >
              Explorar proyectos

              <span>↗</span>
            </a>

            <a
              href="#cotizar"
              class="hero-button hero-button--secondary"
            >
              Solicitar cotización
            </a>

          </div>

        </div>


        <!-- MÉTRICAS -->
        <div class="hero-content__metrics">

          <div>
            <strong>10+</strong>

            <span>
              Años de experiencia
            </span>
          </div>

          <div>
            <strong>100%</strong>

            <span>
              Trabajo a medida
            </span>
          </div>

          <div>
            <strong>R + C</strong>

            <span>
              Residencial y comercial
            </span>
          </div>

        </div>

      </article>


      <!-- =====================================
           VENTANAL DERECHO
      ====================================== -->
      <article class="window-panel window-panel--right">

        <!-- FACHADA GENERADA CON CSS -->
        <div class="glass-background glass-background--right">

          <div class="building-grid">

            <span></span>
            <span></span>
            <span></span>

            <span></span>
            <span></span>
            <span></span>

            <span></span>
            <span></span>
            <span></span>

          </div>

        </div>

        <div class="window-panel__reflection"></div>


        <div class="window-panel__project">

          <span>
            Proyecto destacado
          </span>

          <strong>
            Arquitectura en cristal
          </strong>

          <a href="#proyectos">

            Ver proyectos

            <span>↗</span>

          </a>

        </div>

      </article>

    </div>


    <!-- =====================================
         VIGA INFERIOR
    ====================================== -->
    <div class="architectural-hero__base">

      <span>VIDRIO TEMPLADO</span>

      <span>ALUMINIO</span>

      <span>DISEÑO A MEDIDA</span>

      <span>INSTALACIÓN</span>

    </div>

  </section>
</template>


<style scoped>

/* =========================================================
   HERO
========================================================= */

.architectural-hero {
  position: relative;

  width: 100%;

  min-height: calc(100vh - 88px);

  overflow: hidden;

  background: var(--aluminum-dark, #111416);
}


/* =========================================================
   FACHADA PRINCIPAL
========================================================= */

.architectural-hero__facade {
  min-height: calc(100vh - 132px);

  display: grid;

  grid-template-columns:
    minmax(230px, 0.8fr)
    minmax(500px, 1.35fr)
    minmax(320px, 1.1fr);

  gap: 5px;

  padding: 5px;

  background: #111416;
}


/* =========================================================
   VENTANA GENERAL
========================================================= */

.window-panel {
  position: relative;

  min-height: 620px;

  overflow: hidden;

  background: #dce4e7;
}


/* =========================================================
   CRISTAL - FONDO GENERAL
========================================================= */

.glass-background {
  position: absolute;

  inset: 0;

  overflow: hidden;
}


/* =========================================================
   VENTANAL IZQUIERDO
========================================================= */

.glass-background--left {
  background:
    linear-gradient(
      135deg,
      rgba(255, 255, 255, 0.1),
      transparent 35%
    ),

    linear-gradient(
      160deg,
      #18252b 0%,
      #314750 48%,
      #142127 100%
    );
}


/* EDIFICIO ABSTRACTO IZQUIERDO */

.glass-building {
  position: absolute;

  inset: 0;

  display: grid;

  grid-template-columns:
    repeat(4, 1fr);

  gap: 5px;

  padding: 0 8%;
}


.glass-building span {
  position: relative;

  background:
    linear-gradient(
      130deg,
      rgba(255, 255, 255, 0.12),
      rgba(92, 165, 190, 0.07) 35%,
      rgba(8, 15, 18, 0.32)
    );

  border-left:
    1px solid rgba(255, 255, 255, 0.08);

  border-right:
    1px solid rgba(0, 0, 0, 0.22);
}


.glass-building span:nth-child(2) {
  margin-top: 12%;
}


.glass-building span:nth-child(3) {
  margin-top: 22%;
}


.glass-building span:nth-child(4) {
  margin-top: 7%;
}


/* OSCURECIDO */

.window-panel--left::after {
  content: '';

  position: absolute;

  inset: 0;

  z-index: 1;

  background:
    linear-gradient(
      to top,
      rgba(8, 12, 14, 0.85),
      rgba(8, 12, 14, 0.08) 60%
    );
}


/* TEXTO INFERIOR */

.window-panel__label {
  position: absolute;

  left: 30px;
  bottom: 30px;

  z-index: 4;

  color: #ffffff;
}


.window-panel__label span {
  display: block;

  margin-bottom: 8px;

  font-size: 0.7rem;

  letter-spacing: 0.2em;

  opacity: 0.55;
}


.window-panel__label p {
  margin: 0;

  font-size: 1.15rem;

  font-weight: 500;
}


/* =========================================================
   REFLEJO DEL CRISTAL
========================================================= */

.window-panel__reflection {
  position: absolute;

  inset: -40%;

  z-index: 3;

  pointer-events: none;

  background:
    linear-gradient(
      118deg,
      transparent 28%,
      rgba(255, 255, 255, 0.025) 38%,
      rgba(255, 255, 255, 0.15) 47%,
      rgba(255, 255, 255, 0.025) 55%,
      transparent 68%
    );

  transform: translateX(-65%);

  transition:
    transform 1.2s ease;
}


.window-panel:hover
.window-panel__reflection {
  transform: translateX(65%);
}


/* =========================================================
   VENTANAL CENTRAL
========================================================= */

.window-panel--center {
  display: flex;

  flex-direction: column;

  padding:
    clamp(45px, 5vw, 90px);

  background:
    linear-gradient(
      145deg,
      rgba(247, 250, 251, 0.99),
      rgba(215, 226, 230, 0.96)
    );
}


/* PALABRA DECORATIVA */

.window-panel--center::before {
  content: 'GLASS';

  position: absolute;

  right: -30px;
  top: 40px;

  font-size:
    clamp(5rem, 10vw, 11rem);

  font-weight: 800;

  line-height: 1;

  letter-spacing: -0.05em;

  color: transparent;

  -webkit-text-stroke:
    1px rgba(17, 20, 22, 0.07);

  pointer-events: none;
}


/* =========================================================
   CONTENIDO
========================================================= */

.hero-content {
  position: relative;

  z-index: 5;

  margin: auto 0;
}


/* EYEBROW */

.hero-content__eyebrow {
  display: flex;

  align-items: center;

  gap: 12px;

  margin-bottom: 32px;

  color: #536169;

  font-size: 0.72rem;

  font-weight: 700;

  letter-spacing: 0.17em;

  text-transform: uppercase;
}


.hero-content__eyebrow > span {
  width: 38px;

  height: 1px;

  background:
    var(--glass-blue, #4ea7c4);
}


/* TÍTULO */

.hero-content h1 {
  max-width: 780px;

  margin: 0;

  color:
    var(--aluminum-dark, #111416);

  font-size:
    clamp(3.6rem, 6.2vw, 7.4rem);

  font-weight: 500;

  line-height: 0.92;

  letter-spacing: -0.065em;
}


.hero-content h1 span {
  display: block;

  margin-top: 12px;

  color:
    var(--glass-blue, #4ea7c4);
}


/* DESCRIPCIÓN */

.hero-content__description {
  max-width: 590px;

  margin:
    36px 0 0;

  color: #546168;

  font-size:
    clamp(1rem, 1.15vw, 1.15rem);

  line-height: 1.8;
}


/* =========================================================
   BOTONES
========================================================= */

.hero-content__actions {
  margin-top: 42px;

  display: flex;

  flex-wrap: wrap;

  gap: 12px;
}


.hero-button {
  min-height: 56px;

  padding:
    0 24px;

  display:
    inline-flex;

  align-items: center;

  justify-content: center;

  gap: 28px;

  text-decoration: none;

  font-size: 0.76rem;

  font-weight: 700;

  letter-spacing: 0.08em;

  text-transform: uppercase;

  transition:
    background 0.25s ease,
    color 0.25s ease,
    border-color 0.25s ease,
    transform 0.25s ease;
}


.hero-button--primary {
  background:
    var(--aluminum-dark, #111416);

  border:
    1px solid
    var(--aluminum-dark, #111416);

  color: #ffffff;
}


.hero-button--primary:hover {
  background:
    var(--glass-blue, #4ea7c4);

  border-color:
    var(--glass-blue, #4ea7c4);

  transform:
    translateY(-3px);
}


.hero-button--secondary {
  border:
    1px solid
    rgba(17, 20, 22, 0.22);

  color:
    var(--aluminum-dark, #111416);
}


.hero-button--secondary:hover {
  border-color:
    var(--aluminum-dark, #111416);
}


/* =========================================================
   MÉTRICAS
========================================================= */

.hero-content__metrics {
  position: relative;

  z-index: 5;

  margin-top: 65px;

  display: grid;

  grid-template-columns:
    repeat(3, 1fr);

  border-top:
    1px solid rgba(17, 20, 22, 0.14);
}


.hero-content__metrics > div {
  min-height: 90px;

  padding:
    22px 18px 0;

  display: flex;

  flex-direction: column;

  gap: 7px;

  border-right:
    1px solid rgba(17, 20, 22, 0.14);
}


.hero-content__metrics > div:first-child {
  padding-left: 0;
}


.hero-content__metrics > div:last-child {
  border-right: 0;
}


.hero-content__metrics strong {
  color:
    var(--aluminum-dark, #111416);

  font-size: 1.45rem;

  font-weight: 500;
}


.hero-content__metrics span {
  color: #68757b;

  font-size: 0.7rem;

  line-height: 1.35;

  text-transform: uppercase;

  letter-spacing: 0.08em;
}


/* =========================================================
   VENTANAL DERECHO
========================================================= */

.glass-background--right {
  background:
    linear-gradient(
      145deg,
      #283c44 0%,
      #18282e 45%,
      #0c1418 100%
    );
}


/* RETÍCULA DE FACHADA */

.building-grid {
  position: absolute;

  inset: 0;

  display: grid;

  grid-template-columns:
    repeat(3, 1fr);

  grid-template-rows:
    repeat(3, 1fr);

  gap: 6px;

  padding: 6px;

  background: #101719;
}


.building-grid span {
  position: relative;

  overflow: hidden;

  background:
    linear-gradient(
      135deg,
      rgba(108, 177, 198, 0.25),
      rgba(33, 58, 66, 0.72)
    );

  border:
    1px solid rgba(255, 255, 255, 0.08);
}


.building-grid span::before {
  content: '';

  position: absolute;

  width: 180%;

  height: 35%;

  top: 5%;

  left: -65%;

  transform:
    rotate(-32deg);

  background:
    rgba(255, 255, 255, 0.07);
}


/* PROFUNDIDAD */

.building-grid span:nth-child(2),
.building-grid span:nth-child(5),
.building-grid span:nth-child(8) {
  background:
    linear-gradient(
      145deg,
      rgba(129, 195, 214, 0.3),
      rgba(20, 42, 49, 0.75)
    );
}


.window-panel--right::after {
  content: '';

  position: absolute;

  inset: 0;

  z-index: 1;

  background:
    linear-gradient(
      to top,
      rgba(6, 10, 11, 0.9),
      transparent 65%
    );
}


/* PROYECTO */

.window-panel__project {
  position: absolute;

  left: 34px;
  right: 34px;
  bottom: 34px;

  z-index: 4;

  padding-top: 20px;

  border-top:
    1px solid
    rgba(255, 255, 255, 0.38);

  color: #ffffff;
}


.window-panel__project > span {
  display: block;

  margin-bottom: 10px;

  color:
    rgba(255, 255, 255, 0.6);

  font-size: 0.68rem;

  letter-spacing: 0.16em;

  text-transform: uppercase;
}


.window-panel__project strong {
  display: block;

  margin-bottom: 22px;

  font-size: 1.3rem;

  font-weight: 500;
}


.window-panel__project a {
  display: flex;

  align-items: center;

  justify-content: space-between;

  color: #ffffff;

  text-decoration: none;

  font-size: 0.76rem;

  font-weight: 600;

  letter-spacing: 0.08em;

  text-transform: uppercase;
}


.window-panel__project a span {
  font-size: 1.1rem;
}


/* =========================================================
   VIGA INFERIOR
========================================================= */

.architectural-hero__base {
  height: 44px;

  padding:
    0 4vw;

  display: flex;

  align-items: center;

  justify-content: space-between;

  background:
    var(--aluminum-dark, #111416);

  color:
    rgba(255, 255, 255, 0.48);

  font-size: 0.62rem;

  letter-spacing: 0.17em;

  text-transform: uppercase;
}


/* =========================================================
   RESPONSIVE - LAPTOP / TABLET GRANDE
========================================================= */

@media (max-width: 1200px) {

  .architectural-hero__facade {
    grid-template-columns:
      minmax(0, 1fr)
      minmax(0, 1.8fr);
  }


  .window-panel--left {
    display: none;
  }


  .window-panel--center {
    padding: 55px;
  }


  .hero-content h1 {
    font-size:
      clamp(3.4rem, 7vw, 5.8rem);
  }

}


/* =========================================================
   RESPONSIVE - TABLET
========================================================= */

@media (max-width: 900px) {

  .architectural-hero {
    min-height: auto;
  }


  .architectural-hero__facade {
    min-height: auto;

    display: grid;

    grid-template-columns: 1fr;

    grid-template-rows:
      auto
      480px;

    gap: 5px;
  }


  .window-panel {
    min-height: auto;
  }


  .window-panel--center {
    min-height: 620px;

    padding:
      70px 7vw 45px;
  }


  .window-panel--right {
    min-height: 480px;
  }


  .hero-content {
    margin: 0;
  }


  .hero-content__metrics {
    margin-top: auto;

    padding-top: 55px;
  }


  .architectural-hero__base {
    gap: 28px;

    justify-content: flex-start;

    overflow: hidden;

    white-space: nowrap;
  }

}


/* =========================================================
   RESPONSIVE - MÓVIL
========================================================= */

@media (max-width: 600px) {

  .architectural-hero__facade {
    padding: 3px;

    gap: 3px;

    grid-template-rows:
      auto
      390px;
  }


  .window-panel--center {
    min-height: auto;

    padding:
      54px 24px 30px;
  }


  .window-panel--center::before {
    right: -10px;

    top: 30px;

    font-size: 5.2rem;
  }


  .hero-content__eyebrow {
    margin-bottom: 24px;

    font-size: 0.6rem;
  }


  .hero-content__eyebrow > span {
    width: 26px;
  }


  .hero-content h1 {
    font-size:
      clamp(3rem, 14vw, 4.25rem);

    line-height: 0.94;
  }


  .hero-content h1 span {
    margin-top: 8px;
  }


  .hero-content__description {
    margin-top: 26px;

    font-size: 0.94rem;

    line-height: 1.7;
  }


  .hero-content__actions {
    margin-top: 32px;

    flex-direction: column;
  }


  .hero-button {
    width: 100%;

    justify-content: space-between;
  }


  .hero-content__metrics {
    margin-top: 48px;

    padding-top: 0;

    grid-template-columns: 1fr;
  }


  .hero-content__metrics > div {
    min-height: 70px;

    padding:
      16px 0;

    display: grid;

    grid-template-columns:
      90px 1fr;

    align-items: center;

    border-right: 0;

    border-bottom:
      1px solid
      rgba(17, 20, 22, 0.14);
  }


  .hero-content__metrics > div:last-child {
    border-bottom: 0;
  }


  .hero-content__metrics strong {
    font-size: 1.25rem;
  }


  .window-panel--right {
    min-height: 390px;
  }


  .window-panel__project {
    left: 24px;

    right: 24px;

    bottom: 24px;
  }


  .architectural-hero__base {
    height: 39px;

    padding:
      0 20px;

    font-size: 0.55rem;
  }


  .architectural-hero__base
  span:nth-child(3),

  .architectural-hero__base
  span:nth-child(4) {
    display: none;
  }

}

</style>