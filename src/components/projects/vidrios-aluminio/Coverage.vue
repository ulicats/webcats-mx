<template>
  <section class="coverage-section">

    <div class="coverage-shell">

      <!-- =====================================
           MAPA ABSTRACTO
      ====================================== -->
      <div class="coverage-map">

        <div class="coverage-map__grid"></div>

        <div
          v-for="point in points"
          :key="point.name"
          class="coverage-point"
          :class="point.className"
        >
          <span class="coverage-point__marker"></span>

          <div class="coverage-point__label">
            <strong>
              {{ point.name }}
            </strong>

            <small>
              {{ point.type }}
            </small>
          </div>
        </div>


        <div class="coverage-map__legend">
          <span></span>

          Zona de servicio
        </div>

      </div>


      <!-- =====================================
           INFORMACIÓN
      ====================================== -->
      <div class="coverage-content">

        <span class="section-kicker">
          Cobertura
        </span>

        <h2>
          Llegamos hasta
          <span>tu proyecto.</span>
        </h2>

        <p>
          Atendemos proyectos residenciales y comerciales
          en distintas localidades de la región.
        </p>


        <div class="coverage-locations">

          <div
            v-for="(point, index) in points"
            :key="`list-${point.name}`"
            class="coverage-location"
          >
            <span>
              {{ String(index + 1).padStart(2, '0') }}
            </span>

            <div>
              <strong>
                {{ point.name }}
              </strong>

              <small>
                {{ point.description }}
              </small>
            </div>
          </div>

        </div>


        <a
          href="#cotizar"
          class="coverage-cta"
        >
          Consultar cobertura
          <span>↗</span>
        </a>

      </div>

    </div>

  </section>
</template>


<script setup>
const points = [
  {
    name: 'Guadalajara',
    type: 'Zona principal',
    description:
      'Atención a proyectos residenciales y comerciales.',
    className: 'coverage-point--guadalajara',
  },
  {
    name: 'Zapopan',
    type: 'Cobertura',
    description:
      'Instalaciones y proyectos arquitectónicos.',
    className: 'coverage-point--zapopan',
  },
  {
    name: 'Tonalá',
    type: 'Cobertura',
    description:
      'Atención a proyectos residenciales y comerciales.',
    className: 'coverage-point--tonala',
  },
  {
    name: 'Tlaquepaque',
    type: 'Cobertura',
    description:
      'Instalaciones y proyectos arquitectónicos.',
    className: 'coverage-point--tlaquepaque',
  },
]
</script>


<style scoped>
.coverage-section {
  padding: 120px 5vw;

  background: #111416;
}

.coverage-shell {
  width: min(100%, 1500px);

  margin: 0 auto;

  display: grid;

  grid-template-columns:
    minmax(500px, 1.15fr)
    minmax(360px, 0.85fr);

  gap: 5px;

  padding: 5px;

  background: #252b2e;
}


/* =========================================================
   MAPA
========================================================= */

.coverage-map {
  position: relative;

  min-height: 650px;

  overflow: hidden;

  background:
    linear-gradient(
      145deg,
      #29414a,
      #10191d
    );
}

.coverage-map::before {
  content: '';

  position: absolute;

  inset: 0;

  background:
    radial-gradient(
      circle at 45% 45%,
      rgba(78, 167, 196, 0.14),
      transparent 35%
    );
}


/* RETÍCULA */

.coverage-map__grid {
  position: absolute;

  inset: 0;

  opacity: 0.42;

  background-image:
    linear-gradient(
      rgba(255, 255, 255, 0.07) 1px,
      transparent 1px
    ),

    linear-gradient(
      90deg,
      rgba(255, 255, 255, 0.07) 1px,
      transparent 1px
    );

  background-size:
    70px 70px;
}


/* LÍNEAS ARQUITECTÓNICAS */

.coverage-map::after {
  content: '';

  position: absolute;

  width: 75%;

  height: 85%;

  left: 12%;

  top: 7%;

  border:
    1px solid rgba(255, 255, 255, 0.12);

  transform:
    skew(-8deg);
}


/* =========================================================
   PUNTOS
========================================================= */

.coverage-point {
  position: absolute;

  z-index: 5;

  display: flex;

  align-items: center;

  gap: 12px;
}
   .coverage-point--guadalajara {
    left: 50%;
    top: 50%;
  }

  .coverage-point--zapopan {
    left: 40%;
    top: 35%;
  }

  .coverage-point--tonala {
    left: 10%;
    top: 72%;
  }

  .coverage-point--tlaquepaque {
    left: 58%;
    top: 65%;
  }
.coverage-point__marker {
  position: relative;

  width: 15px;

  height: 15px;

  flex-shrink: 0;

  border:
    3px solid #ffffff;

  background:
    var(--glass-blue, #4ea7c4);
}

.coverage-point__marker::before {
  content: '';

  position: absolute;

  inset: -10px;

  border:
    1px solid rgba(255, 255, 255, 0.22);

  animation:
    coveragePulse 2.6s ease-in-out infinite;
}

@keyframes coveragePulse {
  0%,
  100% {
    transform:
      scale(0.75);

    opacity: 0.2;
  }

  50% {
    transform:
      scale(1.3);

    opacity: 0.8;
  }
}

.coverage-point__label {
  display: flex;

  flex-direction: column;

  gap: 4px;
}

.coverage-point__label strong {
  color: #ffffff;

  font-size: 0.78rem;

  font-weight: 600;
}

.coverage-point__label small {
  color:
    rgba(255, 255, 255, 0.42);

  font-size: 0.58rem;

  letter-spacing: 0.09em;

  text-transform: uppercase;
}


/* =========================================================
   LEYENDA
========================================================= */

.coverage-map__legend {
  position: absolute;

  left: 30px;

  bottom: 30px;

  z-index: 5;

  display: flex;

  align-items: center;

  gap: 10px;

  color:
    rgba(255, 255, 255, 0.5);

  font-size: 0.62rem;

  letter-spacing: 0.12em;

  text-transform: uppercase;
}

.coverage-map__legend span {
  width: 22px;

  height: 2px;

  background:
    var(--glass-blue, #4ea7c4);
}


/* =========================================================
   CONTENIDO
========================================================= */

.coverage-content {
  padding:
    clamp(50px, 6vw, 90px);

  background: #edf2f4;
}

.section-kicker {
  display: block;

  margin-bottom: 18px;

  color:
    var(--glass-blue, #4ea7c4);

  font-size: 0.7rem;

  font-weight: 700;

  letter-spacing: 0.18em;

  text-transform: uppercase;
}

.coverage-content h2 {
  margin: 0;

  color: #111416;

  font-size:
    clamp(2.8rem, 5vw, 5.1rem);

  font-weight: 500;

  line-height: 0.98;

  letter-spacing: -0.05em;
}

.coverage-content h2 span {
  display: block;

  color: #87949a;
}

.coverage-content > p {
  max-width: 540px;

  margin:
    32px 0 45px;

  color: #657378;

  font-size: 1rem;

  line-height: 1.8;
}


/* =========================================================
   LOCALIDADES
========================================================= */

.coverage-locations {
  border-top:
    1px solid rgba(17, 20, 22, 0.14);
}

.coverage-location {
  min-height: 88px;

  display: grid;

  grid-template-columns:
    55px
    1fr;

  align-items: center;

  gap: 10px;

  border-bottom:
    1px solid rgba(17, 20, 22, 0.14);
}

.coverage-location > span {
  color:
    var(--glass-blue, #4ea7c4);

  font-size: 0.63rem;

  font-weight: 700;

  letter-spacing: 0.14em;
}

.coverage-location div {
  display: flex;

  flex-direction: column;

  gap: 5px;
}

.coverage-location strong {
  color: #111416;

  font-size: 0.9rem;

  font-weight: 600;
}

.coverage-location small {
  color: #79868b;

  font-size: 0.69rem;

  line-height: 1.45;
}


/* =========================================================
   CTA
========================================================= */

.coverage-cta {
  min-height: 56px;

  margin-top: 35px;

  padding:
    0 20px;

  display: flex;

  align-items: center;

  justify-content: space-between;

  width: 100%;

  background: #111416;

  color: #ffffff;

  text-decoration: none;

  font-size: 0.7rem;

  font-weight: 700;

  letter-spacing: 0.1em;

  text-transform: uppercase;

  transition:
    background 0.25s ease;
}

.coverage-cta:hover {
  background:
    var(--glass-blue, #4ea7c4);
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 1000px) {
  .coverage-section {
    padding:
      90px 5vw;
  }

  .coverage-shell {
    grid-template-columns: 1fr;
  }

  .coverage-map {
    min-height: 540px;
  }
}


@media (max-width: 600px) {
  .coverage-section {
    padding:
      75px 20px;
  }

  .coverage-shell {
    gap: 3px;

    padding: 3px;
  }

  .coverage-map {
    min-height: 460px;
  }

  .coverage-map__grid {
    background-size:
      45px 45px;
  }

   .coverage-point--guadalajara {
    left: 50%;
    top: 50%;
  }

  .coverage-point--zapopan {
    left: 40%;
    top: 35%;
  }

  .coverage-point--tonala {
    left: 10%;
    top: 72%;
  }

  .coverage-point--tlaquepaque {
    left: 58%;
    top: 65%;
  }

  .coverage-point__label strong {
    font-size: 0.7rem;
  }

  .coverage-point__label small {
    display: none;
  }

  .coverage-content {
    padding:
      55px 25px;
  }

  .coverage-content h2 {
    font-size:
      clamp(2.6rem, 12vw, 4rem);
  }

  .coverage-location {
    grid-template-columns:
      45px 1fr;
  }
}
</style>