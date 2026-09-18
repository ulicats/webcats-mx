<template>
  <aside class="floor-indicator">

    <div class="axis-top">
      <span>A</span>
    </div>

    <div class="indicator-title">
      <span>RECORRIDO</span>
      <small>WEB / 01</small>
    </div>

    <nav class="indicator-nav">

      <a href="#inicio" class="indicator-item active">
        <span class="point">01</span>

        <span class="label">
          COCHERA
        </span>
      </a>

      <span class="axis-line"></span>

      <a href="#estudio" class="indicator-item">
        <span class="point">02</span>

        <span class="label">
          ESTUDIO
        </span>
      </a>

      <span class="axis-line"></span>

      <a href="#servicios" class="indicator-item">
        <span class="point">03</span>

        <span class="label">
          SERVICIOS
        </span>
      </a>

      <span class="axis-line"></span>

      <a href="#proyectos" class="indicator-item">
        <span class="point">04</span>

        <span class="label">
          PROYECTOS
        </span>
      </a>

      <span class="axis-line"></span>

      <a href="#proceso" class="indicator-item">
        <span class="point">05</span>

        <span class="label">
          PROCESO
        </span>
      </a>

      <span class="axis-line"></span>

      <a href="#contacto" class="indicator-item">
        <span class="point">06</span>

        <span class="label">
          PATIO
        </span>
      </a>

    </nav>

    <div class="axis-bottom">
      <span>G</span>
    </div>

  </aside>
</template>

<script setup>
</script>

<style scoped>
.floor-indicator {
  position: fixed;

  top: 50%;
  left: 14px;

  transform: translateY(-50%);

  z-index: 100;

  width: 95px;

  display: flex;
  flex-direction: column;

  align-items: center;

  pointer-events: none;
}


/* ========================================
   EJES
======================================== */

.axis-top,
.axis-bottom {
  width: 30px;
  height: 30px;

  display: grid;
  place-items: center;

  border: 1px solid #74736f;

  border-radius: 50%;

  background: #f3f1eb;

  font-size: 8px;
}


/* ========================================
   TITLE
======================================== */

.indicator-title {
  margin: 14px 0 20px;

  display: flex;
  flex-direction: column;

  align-items: center;

  gap: 4px;
}

.indicator-title span {
  font-size: 6px;

  letter-spacing: 0.18em;
}

.indicator-title small {
  color: #74736f;

  font-size: 5px;

  letter-spacing: 0.16em;
}


/* ========================================
   NAV
======================================== */

.indicator-nav {
  display: flex;
  flex-direction: column;

  align-items: center;

  pointer-events: auto;
}

.indicator-item {
  position: relative;

  display: flex;
  align-items: center;

  color: #74736f;

  text-decoration: none;
}

.point {
  width: 27px;
  height: 27px;

  display: grid;
  place-items: center;

  border: 1px solid #74736f;

  border-radius: 50%;

  background: #f3f1eb;

  font-size: 6px;

  transition:
    background 0.25s ease,
    color 0.25s ease,
    border-color 0.25s ease;
}

.label {
  position: absolute;

  left: 38px;

  opacity: 0;

  white-space: nowrap;

  color: #151515;

  font-size: 6px;

  letter-spacing: 0.15em;

  transform: translateX(-5px);

  transition:
    opacity 0.2s ease,
    transform 0.2s ease;
}

.indicator-item:hover .label {
  opacity: 1;

  transform: translateX(0);
}

.indicator-item:hover .point,
.indicator-item.active .point {
  border-color: #151515;

  background: #151515;

  color: #f3f1eb;
}


/* ========================================
   EJE VERTICAL
======================================== */

.axis-line {
  width: 1px;
  height: 25px;

  background: #b9b7b0;
}


/* ========================================
   BOTTOM
======================================== */

.axis-bottom {
  margin-top: 20px;
}


/* ========================================
   RESPONSIVE
======================================== */

@media (max-width: 1100px) {
  .floor-indicator {
    display: none;
  }
}
</style>