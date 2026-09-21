<template>
  <section id="estudio" class="studio-section">

    <!-- =====================================
         MURO SUPERIOR / ENTRADA
    ====================================== -->
    <div class="top-wall">
      <span></span>

      <div class="entrance">
        <span>SECCIÓN ESTUDIO</span>
        <strong>↓</strong>
      </div>

      <span></span>
    </div>

    <!-- =====================================
         MURO IZQUIERDO + VENTANA
    ====================================== -->
    <div class="side-wall side-wall-left">
      <span class="wall-piece wall-top"></span>

      <div class="window window-left">
        <div class="window-glass"></div>

        <div class="window-info">
          <strong>VENTANA / JARDÍN</strong>
          <span>V-01</span>
        </div>
      </div>

      <span class="wall-piece wall-bottom"></span>
    </div>

    <!-- =====================================
         MURO DERECHO + VENTANA
    ====================================== -->
    <div class="side-wall side-wall-right">
      <span class="wall-piece wall-top"></span>

      <div class="window window-right">
        <div class="window-glass"></div>

        <div class="window-info">
          <strong>VENTANA / PATIO</strong>
          <span>V-02</span>
        </div>
      </div>

      <span class="wall-piece wall-bottom"></span>
    </div>

    <!-- =====================================
         COTAS LATERALES
    ====================================== -->

    <div class="side-dimension dimension-left">
      <span class="dimension-line"></span>
      <span class="dimension-value">5.60</span>
      <span class="dimension-line"></span>
    </div>

    <div class="side-dimension dimension-right">
      <span class="dimension-line"></span>
      <span class="dimension-value">5.60</span>
      <span class="dimension-line"></span>
    </div>

    <!-- =====================================
         IDENTIFICACIÓN
    ====================================== -->

    <div class="room-label">
      <span class="room-number">02</span>

      <strong>ESTUDIO</strong>

     
    </div>

    <!-- =====================================
         CONTENIDO
    ====================================== -->

    <div class="studio-content">

      <!-- COLUMNA TÉCNICA -->
      <aside class="technical-column">

        <div class="technical-item">
          <span>ESPACIO</span>
          <strong>VESTÍBULO</strong>
        </div>

        <div class="technical-item">
          <span>NIVEL</span>
          <strong>+0.15</strong>
        </div>

        <div class="technical-item">
          <span>USO</span>
          <strong>ESTUDIO</strong>
        </div>

      </aside>

      <!-- TEXTO -->
      <div class="studio-copy">

        <span class="section-reference">
        </span>

        <h2>
          Primero
          <span>entendemos</span>
          <em>cómo quieres vivir.</em>
        </h2>

        <p class="lead">
          Creemos en una arquitectura que nace de escuchar,
          observar y comprender el entorno antes de dibujar
          la primera línea.
        </p>

        <p class="description">
          Diseñamos espacios funcionales, honestos y atemporales,
          buscando un equilibrio entre materia, luz, proporción y
          las necesidades de quienes los habitan.
        </p>

        <!-- DATOS -->
        <div class="stats">

          <div>
            <strong>12+</strong>
            <span>AÑOS DE EXPERIENCIA</span>
          </div>

          <div>
            <strong>48</strong>
            <span>PROYECTOS</span>
          </div>

          <div>
            <strong>06</strong>
            <span>CIUDADES</span>
          </div>

        </div>

      </div>

      <!-- IMAGEN -->
      <div class="studio-visual">

        <div class="image-reference">
          <span>ESTUDIO / ARCHIVO</span>
          <span>02 — A</span>
        </div>

        <div class="image-frame">
          <img
            :src="studioImg"
            alt="Estudio de arquitectura"
          />
        </div>

        <div class="image-caption">
          <span>PROCESO / MATERIALIDAD / CONTEXTO</span>
          <span>ESC. 1:50</span>
        </div>

      </div>

    </div>

    <!-- =====================================
         MURO INFERIOR / PUERTA
    ====================================== -->

    <div class="bottom-wall">

      <span></span>

      <div class="door">
        <span class="door-leaf"></span>
        <span class="door-label">
          HABITACIONES ↓
        </span>
      </div>

      <span></span>

    </div>

  </section>
</template>

<script setup>
import studioImg from "../../../assets/projects/arquitectura/studio.png";
</script>

<style scoped>

/* ========================================
   SECCIÓN / TERRENO
======================================== */

.studio-section {
  position: relative;

  width: calc(100% - 110px);
  max-width: 1760px;

  min-height: 720px;

  margin: 0 auto;

  padding:
    105px
    115px
    115px;

  box-sizing: border-box;

  background: #f3f1eb;
  color: #151515;
}


/* ========================================
   MURO SUPERIOR
======================================== */

.top-wall,
.bottom-wall {
  position: absolute;

  left: 0;

  width: 100%;

  display: grid;

  grid-template-columns:
    1fr
    150px
    1fr;

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
   ENTRADA
======================================== */

.entrance {
  height: 48px;

  display: flex;
  flex-direction: column;

  align-items: center;
  justify-content: flex-start;

  gap: 3px;

  color: #74736f;
}

.entrance span {
  font-size: 7px;

  letter-spacing: 0.22em;
}

.entrance strong {
  font-size: 17px;

  font-weight: 400;

  color: #151515;
}


/* ========================================
   MUROS LATERALES
======================================== */

.side-wall {
  position: absolute;

  top: 0;
  bottom: 0;

  width: 5px;

  display: grid;

  /*
    MURO
    VENTANA
    MURO
  */
  grid-template-rows:
    25%
    46%
    29%;
}

.side-wall-left {
  left: 0;
}

.side-wall-right {
  right: 0;
}

.wall-piece {
  width: 5px;

  background: #151515;
}


/* ========================================
   VENTANAS
======================================== */

.window {
  position: relative;

  width: 108px;

  height: 100%;
}

.window-left {
  left: 0;
}

.window-right {
  right: 103px;
}


/*
  DOBLE LÍNEA DE VENTANA
*/

.window::before,
.window::after {
  content: "";

  position: absolute;

  top: 0;
  bottom: 0;

  width: 2px;

  background: #151515;
}

.window::before {
  left: 0;
}

.window::after {
  right: 0;
}


/*
  CRISTAL
*/

.window-glass {
  position: absolute;

  top: 4px;
  bottom: 4px;

  left: 8px;
  right: 8px;

  border-left: 1px solid #b9b7b0;
  border-right: 1px solid #b9b7b0;

  background:
    repeating-linear-gradient(
      135deg,
      transparent,
      transparent 11px,
      rgba(116, 115, 111, 0.08) 12px,
      rgba(116, 115, 111, 0.08) 13px
    );
}


/* ========================================
   DATOS DE VENTANA
======================================== */

.window-info {
  position: absolute;

  bottom: -54px;

  width: 140px;

  display: flex;
  flex-direction: column;

  gap: 5px;

  font-size: 6px;

  letter-spacing: 0.17em;

  color: #74736f;
}

.window-left .window-info {
  left: 10px;
}

.window-right .window-info {
  right: 0;

  text-align: right;
}

.window-info strong {
  font-size: 7px;

  font-weight: 500;

  color: #151515;
}


/* ========================================
   COTAS LATERALES
======================================== */

.side-dimension {
  position: absolute;

  top: 18%;

  height: 64%;

  display: flex;
  flex-direction: column;

  justify-content: center;
  align-items: center;

  color: #74736f;
}

.dimension-left {
  left: -48px;
}

.dimension-right {
  right: -48px;
}

.dimension-line {
  width: 1px;

  flex: 1;

  background: #b9b7b0;
}

.dimension-value {
  margin: 12px 0;

  font-size: 8px;

  letter-spacing: 0.15em;
}


/* ========================================
   ETIQUETA DE HABITACIÓN
======================================== */

.room-label {
  position: absolute;

  top: 48px;
  left: 95px;

  display: flex;

  align-items: center;

  gap: 12px;
}

.room-number {
  width: 30px;
  height: 30px;

  border: 1px solid #151515;

  border-radius: 50%;

  display: grid;
  place-items: center;

  font-size: 8px;
}

.room-label strong {
  font-size: 8px;

  font-weight: 500;

  letter-spacing: 0.17em;
}

.room-label small {
  font-size: 6px;

  letter-spacing: 0.17em;

  color: #74736f;
}


/* ========================================
   CONTENIDO PRINCIPAL
======================================== */

.studio-content {
  min-height: 500px;

  display: grid;

  grid-template-columns:
    110px
    minmax(430px, 0.9fr)
    minmax(560px, 1.2fr);

  align-items: center;

  gap: clamp(50px, 5vw, 57px);
}


/* ========================================
   COLUMNA TÉCNICA
======================================== */

.technical-column {
  align-self: stretch;

  display: flex;
  flex-direction: column;

  justify-content: center;

  gap: 42px;

  padding-right: 25px;

  border-right: 1px solid #b9b7b0;
}

.technical-item {
  display: flex;

  flex-direction: column;

  gap: 6px;
}

.technical-item span {
  font-size: 6px;

  letter-spacing: 0.18em;

  color: #74736f;
}

.technical-item strong {
  font-size: 8px;

  font-weight: 500;

  letter-spacing: 0.13em;
}


/* ========================================
   TEXTO
======================================== */

.section-reference {
  display: block;

  margin-bottom: 26px;

  font-size: 8px;

  letter-spacing: 0.23em;

  color: #74736f;
}

.studio-copy h2 {
  margin: 0;

  max-width: 620px;

  font-size: clamp(55px, 4.7vw, 57px);

  line-height: 0.92;

  font-weight: 400;

  letter-spacing: -0.055em;
}

.studio-copy h2 span,
.studio-copy h2 em {
  display: block;
}

.studio-copy h2 em {
  color: #74736f;

  font-weight: 400;

  font-style: italic;
}

.lead {
  max-width: 560px;

  margin: 32px 0 17px;

  font-size: 14px;

  line-height: 1.7;
}

.description {
  max-width: 540px;

  margin: 0;

  font-size: 11px;

  line-height: 1.8;

  color: #74736f;
}


/* ========================================
   ESTADÍSTICAS
======================================== */

.stats {
  margin-top: 38px;

  padding-top: 22px;

  border-top: 1px solid #b9b7b0;

  display: grid;

  grid-template-columns:
    repeat(3, 1fr);

  gap: 28px;
}

.stats div {
  display: flex;

  flex-direction: column;

  gap: 6px;
}

.stats strong {
  font-size: 28px;

  font-weight: 400;
}

.stats span {
  font-size: 6px;

  letter-spacing: 0.16em;

  color: #74736f;
}


/* ========================================
   IMAGEN
======================================== */

.studio-visual {
  width: 100%;
}

.image-reference,
.image-caption {
  display: flex;

  justify-content: space-between;

  color: #74736f;

  font-size: 7px;

  letter-spacing: 0.17em;
}

.image-reference {
  margin-bottom: 9px;
}

.image-caption {
  margin-top: 9px;
}

.image-frame {
  width: 100%;

  height: 430px;

  overflow: hidden;
}

.image-frame img {
  width: 100%;
  height: 100%;

  display: block;

  object-fit: cover;

  filter: saturate(0.85);
}


/* ========================================
   PUERTA INFERIOR
======================================== */

.door {
  position: relative;

  height: 72px;
}

.door-leaf {
  position: absolute;

  right: 0;
  bottom: 0;

  width: 76px;
  height: 1px;

  background: #74736f;

  transform-origin:
    right bottom;

  transform:
    rotate(45deg);
}

.door::after {
  content: "";

  position: absolute;

  right: 0;
  bottom: 0;

  width: 76px;
  height: 76px;

  border: 1px dashed #b9b7b0;

  border-right: 0;
  border-bottom: 0;

  border-radius:
    76px 0 0 0;
}

.door-label {
  position: absolute;

  left: 50%;
  bottom: -27px;

  transform:
    translateX(-50%);

  white-space: nowrap;

  color: #74736f;

  font-size: 7px;

  letter-spacing: 0.18em;
}


/* ========================================
   RESPONSIVE
======================================== */

@media (max-width: 1300px) {

  .studio-section {
    width: calc(100% - 80px);

    padding:
      105px
      75px
      115px;
  }

  .studio-content {
    grid-template-columns:
      90px
      0.9fr
      1.1fr;

    gap: 50px;
  }

  .studio-copy h2 {
    font-size:
      clamp(50px, 5vw, 72px);
  }

}


@media (max-width: 1000px) {

  .studio-section {
    width: calc(100% - 60px);

    padding:
      100px
      50px
      115px;
  }

  .studio-content {
    grid-template-columns:
      1fr
      1fr;
  }

  .technical-column {
    display: none;
  }

  .side-dimension {
    display: none;
  }

  .window {
    width: 70px;
  }

  .window-right {
    right: 65px;
  }

}


@media (max-width: 760px) {

  .studio-section {
    width: calc(100% - 30px);

    min-height: auto;

    padding:
      100px
      28px
      120px;
  }

  .studio-content {
    grid-template-columns: 1fr;

    gap: 50px;
  }

  .studio-copy h2 {
    font-size:
      clamp(47px, 13vw, 44px);
  }

  .image-frame {
    height: 360px;
  }

  .top-wall,
  .bottom-wall {
    grid-template-columns:
      1fr
      100px
      1fr;
  }

  .room-label {
    left: 25px;
  }

  .room-label small {
    display: none;
  }

  /*
    En móvil quitamos ventanas exteriores
    para no saturar.
  */

  .side-wall {
    display: block;

    width: 5px;

    background: #151515;
  }

  .window {
    display: none;
  }

}
</style>