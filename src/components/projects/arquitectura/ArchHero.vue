<template>
  <section id="inicio" class="hero-section">

    <!-- EJES SUPERIORES -->
    <div class="axis axis-left">
      <span>A</span>
    </div>

    <div class="axis axis-right">
      <span>G</span>
    </div>

    <!-- COTA SUPERIOR -->
    <div class="dimension-top">
      <span class="dimension-line"></span>
      <span class="dimension-value">10.00</span>
      <span class="dimension-line"></span>
    </div>

    <!-- COTAS LATERALES -->
    <div class="side-dimension side-dimension-left">
      <span class="measure-line"></span>
      <span class="measure-value">5.60</span>
      <span class="measure-line"></span>
    </div>

    <div class="side-dimension side-dimension-right">
      <span class="measure-line"></span>
      <span class="measure-value">5.60</span>
      <span class="measure-line"></span>
    </div>

    <!-- MURO SUPERIOR / ACCESO -->
    <div class="top-wall">
      <span></span>

      <div class="entrance">
        
      </div>

      <span></span>
    </div>

    <!-- MUROS LATERALES -->
    <div class="wall wall-left"></div>
    <div class="wall wall-right"></div>

    <!-- CONTENIDO -->
    <div class="hero-content">

      <div class="hero-copy">
        <span class="eyebrow">
          ESTUDIO DE ARQUITECTURA / MÉXICO
        </span>

        <h1>
          Diseñamos
          <em>espacios para</em>
          ser habitados.
        </h1>

        <p>
          Arquitectura contemporánea concebida desde el contexto,
          la función y las personas que transformarán cada espacio
          en parte de su historia.
        </p>

        <RouterLink
            to="/projects/arquitectura/proyectos"
            class="hero-link"
            >
            VER PROYECTOS
            <span>→</span>
        </RouterLink>
      </div>

      <div class="hero-visual">
        <div class="image-reference">
          <span>FACHADA / 01</span>
          <span>ESC. 1:100</span>
        </div>

        <div class="image-frame">
          <img
            :src="heroImg"
            alt="Proyecto de arquitectura contemporánea"
          />

          <div class="image-data">
            <span>PROYECTO / CASA 01</span>
            <span>RESIDENCIAL</span>
          </div>
        </div>
      </div>

    </div>

    <!-- MURO INFERIOR / PUERTA -->
    <div class="bottom-wall">
      <span></span>

      <div class="door">
        <span class="door-leaf"></span>
        <span class="door-label">VESTÍBULO ↓</span>
      </div>

      <span></span>
    </div>

  </section>
</template>

<script setup>
import heroImg from "../../../assets/projects/arquitectura/hero.png";
</script>

<style scoped>
.hero-section {
  position: relative;

  /*
    AHORA APROVECHAMOS CASI TODO EL TERRENO.
    Solo dejamos margen exterior para cotas y ejes.
  */
  width: calc(100% - 110px);
  max-width: 1760px;

  min-height: 690px;
  margin: 0 auto;

  padding: 95px 105px 105px;

  background: #f3f1eb;
  color: #151515;

  box-sizing: border-box;
}

/* ========================================
   MUROS
======================================== */

.wall {
  position: absolute;
  top: 0;
  bottom: 0;
  width: 5px;
  background: #151515;
}

.wall-left {
  left: 0;
}

.wall-right {
  right: 0;
}

.top-wall,
.bottom-wall {
  position: absolute;
  left: 0;
  width: 100%;

  display: grid;
  grid-template-columns: 1fr 150px 1fr;
  align-items: center;
}

.top-wall {
  top: 0;
}

.bottom-wall {
  bottom: 0;
}

.top-wall > span,
.bottom-wall > span {
  height: 5px;
  background: #151515;
}

/* ========================================
   ACCESO SUPERIOR
======================================== */

.entrance {
  height: 44px;

  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;

  gap: 2px;

  color: #74736f;
}

.entrance small {
  font-size: 7px;
  letter-spacing: 0.2em;
}

.entrance strong {
  font-size: 16px;
  font-weight: 400;
  color: #151515;
}

/* ========================================
   EJES A / G
======================================== */

.axis {
  position: absolute;
  top: -48px;
  z-index: 5;
}

.axis-left {
  left: -18px;
}

.axis-right {
  right: -18px;
}

.axis span {
  width: 34px;
  height: 34px;

  border: 1px solid #74736f;
  border-radius: 50%;

  display: grid;
  place-items: center;

  background: #f3f1eb;

  font-size: 10px;
  font-weight: 500;
}

/* ========================================
   COTA SUPERIOR
======================================== */

.dimension-top {
  position: absolute;

  top: 18px;
  left: 50%;

  width: 34%;
  transform: translateX(-50%);

  display: flex;
  align-items: center;
  gap: 12px;

  color: #74736f;
}

.dimension-line {
  flex: 1;
  height: 1px;
  background: #b9b7b0;
}

.dimension-value {
  font-size: 8px;
  letter-spacing: 0.14em;
}

.hero-link {
  width: fit-content;
  min-height: 46px;

  margin-top: 30px;
  padding: 0 18px;

  display: inline-flex;
  align-items: center;
  gap: 15px;

  background: #d8d6d0;
  border: 1px solid #b9b7b0;

  color: #151515;
  text-decoration: none;

  font-size: 8px;
  font-weight: 500;
  letter-spacing: 0.18em;

  transition:
    background 0.3s ease,
    color 0.3s ease;
}

.hero-link-line {
  width: 55px;
  height: 1px;

  background: currentColor;

  transition: width 0.3s ease;
}

.hero-link-arrow {
  font-size: 15px;

  transition: transform 0.3s ease;
}

.hero-link:hover {
  background: #151515;
  color: #f3f1eb;
}

.hero-link:hover .hero-link-line {
  width: 80px;
}

.hero-link:hover .hero-link-arrow {
  transform: translateX(5px);
}

/* ========================================
   COTAS LATERALES
======================================== */

.side-dimension {
  position: absolute;

  top: 50%;
  transform: translateY(-50%);

  height: 65%;

  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;

  color: #74736f;
}

.side-dimension-left {
  left: -48px;
}

.side-dimension-right {
  right: -48px;
}

.measure-line {
  width: 1px;
  flex: 1;
  background: #b9b7b0;
}

.measure-value {
  margin: 12px 0;

  font-size: 8px;
  letter-spacing: 0.15em;

  writing-mode: horizontal-tb;
}

/* ========================================
   ETIQUETA ESPACIO
======================================== */

.room-label {
  position: absolute;

  top: 42px;
  left: 58px;

  display: flex;
  align-items: center;
  gap: 12px;

  color: #151515;
}

.room-number {
  width: 29px;
  height: 29px;

  border: 1px solid #151515;
  border-radius: 50%;

  display: grid;
  place-items: center;

  font-size: 8px;
}

.room-label div {
  display: flex;
  align-items: center;
  gap: 10px;
}

.room-label strong {
  font-size: 8px;
  font-weight: 500;
  letter-spacing: 0.16em;
}

.room-label small {
  font-size: 6px;
  letter-spacing: 0.16em;
  color: #74736f;
}

/* ========================================
   CONTENIDO PRINCIPAL
======================================== */

.hero-content {
  min-height: 500px;

  display: grid;

  /*
    MÁS TERRENO PARA LA FOTO.
  */
  grid-template-columns: minmax(420px, 0.9fr) minmax(600px, 1.25fr);

  align-items: center;

  gap: clamp(70px, 7vw, 140px);
}

/* ========================================
   TEXTO
======================================== */

.hero-copy {
  max-width: 650px;
}

.eyebrow {
  display: block;

  margin-bottom: 28px;

  font-size: 9px;
  letter-spacing: 0.25em;

  color: #74736f;
}

.hero-copy h1 {
  margin: 0;

  font-size: clamp(64px, 5.3vw, 82px);

  line-height: 0.9;
  font-weight: 400;

  letter-spacing: -0.06em;
}

.hero-copy h1 em {
  display: block;

  font-style: italic;
  font-weight: 400;

  color: #74736f;
}

.hero-copy p {
  max-width: 580px;

  margin: 34px 0;

  font-size: 14px;
  line-height: 1.8;

  color: #5f5e5a;
}

.project-link {
  display: flex;
  align-items: center;
  gap: 15px;

  width: fit-content;

  color: #151515;
  text-decoration: none;

  font-size: 9px;
  letter-spacing: 0.2em;
}

.link-line {
  width: 75px;
  height: 1px;
  background: #151515;

  transition: width 0.3s ease;
}

.project-link:hover .link-line {
  width: 110px;
}

/* ========================================
   IMAGEN
======================================== */

.hero-visual {
  position: relative;
  width: 100%;
}

.image-reference {
  display: flex;
  justify-content: space-between;

  margin-bottom: 9px;

  font-size: 7px;
  letter-spacing: 0.18em;

  color: #74736f;
}

.image-frame {
  position: relative;

  width: 100%;
  height: 440px;

  overflow: hidden;
}

.image-frame img {
  width: 100%;
  height: 100%;

  display: block;

  object-fit: cover;

  filter: saturate(0.85);
}

.image-data {
  position: absolute;

  left: 0;
  right: 0;
  bottom: 0;

  padding: 13px 15px;

  display: flex;
  justify-content: space-between;

  background: rgba(21, 21, 21, 0.9);

  color: #f3f1eb;

  font-size: 7px;
  letter-spacing: 0.16em;
}

/* ========================================
   PUERTA
======================================== */

.door {
  position: relative;
  height: 72px;
}

.door-leaf {
  position: absolute;

  left: 0;
  bottom: 0;

  width: 76px;
  height: 1px;

  background: #74736f;

  transform-origin: left bottom;
  transform: rotate(-45deg);
}

.door::after {
  content: "";

  position: absolute;

  left: 0;
  bottom: 0;

  width: 76px;
  height: 76px;

  border: 1px dashed #b9b7b0;
  border-left: 0;
  border-bottom: 0;

  border-radius: 0 76px 0 0;
}

.door-label {
  position: absolute;

  bottom: -27px;
  left: 50%;

  transform: translateX(-50%);

  white-space: nowrap;

  font-size: 7px;
  letter-spacing: 0.18em;

  color: #74736f;
}

/* ========================================
   RESPONSIVE
======================================== */

@media (max-width: 1300px) {
  .hero-section {
    width: calc(100% - 80px);
    padding: 95px 70px 105px;
  }

  .hero-content {
    grid-template-columns: 0.9fr 1.1fr;
    gap: 65px;
  }

  .hero-copy h1 {
    font-size: clamp(58px, 6vw, 82px);
  }
}

@media (max-width: 1000px) {
  .hero-section {
    width: calc(100% - 60px);
    padding: 100px 50px 110px;
  }

  .hero-content {
    grid-template-columns: 1fr 1fr;
    gap: 45px;
  }

  .image-frame {
    height: 400px;
  }

  .side-dimension {
    display: none;
  }
}

@media (max-width: 760px) {
  .hero-section {
    width: calc(100% - 30px);

    min-height: auto;

    padding: 100px 28px 115px;
  }

  .hero-content {
    grid-template-columns: 1fr;
  }

  .hero-copy h1 {
    font-size: clamp(48px, 14vw, 46px);
  }

  .hero-copy p {
    font-size: 13px;
  }

  .image-frame {
    height: 360px;
  }

  .room-label {
    left: 25px;
  }

  .room-label small {
    display: none;
  }

  .top-wall,
  .bottom-wall {
    grid-template-columns: 1fr 100px 1fr;
  }

  .axis {
    display: none;
  }

  .dimension-top {
    width: 45%;
  }
}
</style>