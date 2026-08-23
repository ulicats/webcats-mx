<template>
  <section class="whyus-section">

    <div class="whyus-heading">
      <div>
        <span class="section-kicker">
          ¿Por qué elegirnos?
        </span>

        <h2>
          Más que instalar,
          <span>construimos confianza.</span>
        </h2>
      </div>

      <p>
        Cada proyecto combina diseño, precisión y materiales adecuados
        para lograr instalaciones funcionales y visualmente limpias.
      </p>
    </div>


    <div class="whyus-grid">

      <article
        v-for="(item, index) in items"
        :key="item.title"
        class="whyus-panel"
      >
        <div class="whyus-panel__number">
          {{ String(index + 1).padStart(2, '0') }}
        </div>

        <div class="whyus-panel__icon">
          <span v-html="item.icon"></span>
        </div>

        <div class="whyus-panel__content">
          <h3>
            {{ item.title }}
          </h3>

          <p>
            {{ item.description }}
          </p>
        </div>

        <div class="whyus-panel__line"></div>

        <div class="whyus-panel__reflection"></div>
      </article>

    </div>

  </section>
</template>


<script setup>
const items = [
  {
    title: 'Diseño a medida',
    description:
      'Cada solución se adapta a las medidas, estilo y necesidades reales del espacio.',
    icon: '⌖',
  },
  {
    title: 'Materiales adecuados',
    description:
      'Seleccionamos cristal, aluminio y herrajes según el tipo de proyecto y uso final.',
    icon: '◇',
  },
  {
    title: 'Instalación especializada',
    description:
      'Cuidamos alineación, nivelación, funcionamiento y detalles durante el montaje.',
    icon: '╬',
  },
  {
    title: 'Acabados limpios',
    description:
      'Buscamos que cada elemento se integre visualmente con la arquitectura del espacio.',
    icon: '└─',
  },
  {
    title: 'Atención personalizada',
    description:
      'Cada proyecto requiere una solución distinta, por eso analizamos cada caso individualmente.',
    icon: '◎',
  },
  {
    title: 'Garantía de trabajo',
    description:
      'Revisamos funcionamiento y acabados antes de considerar terminado cada proyecto.',
    icon: '✓',
  },
]
</script>


<style scoped>
.whyus-section {
  padding: 120px 5vw;

  background: #e8eef0;
}

.whyus-heading {
  width: min(100%, 1500px);
  margin: 0 auto 60px;

  display: grid;

  grid-template-columns:
    1.2fr
    0.8fr;

  gap: 70px;

  align-items: end;
}

.section-kicker {
  display: block;

  margin-bottom: 18px;

  color: var(--glass-blue, #4ea7c4);

  font-size: 0.7rem;
  font-weight: 700;

  letter-spacing: 0.18em;
  text-transform: uppercase;
}

.whyus-heading h2 {
  margin: 0;

  color: #111416;

  font-size:
    clamp(2.8rem, 5vw, 5.4rem);

  font-weight: 500;

  line-height: 0.98;

  letter-spacing: -0.05em;
}

.whyus-heading h2 span {
  display: block;

  color: #87949a;
}

.whyus-heading p {
  max-width: 520px;

  margin: 0;

  color: #67757a;

  font-size: 1rem;

  line-height: 1.8;
}


/* =========================================================
   GRID
========================================================= */

.whyus-grid {
  width: min(100%, 1500px);
  margin: 0 auto;

  display: grid;

  grid-template-columns:
    repeat(3, 1fr);

  gap: 5px;

  padding: 5px;

  background: #111416;
}


/* =========================================================
   PANEL
========================================================= */

.whyus-panel {
  position: relative;

  min-height: 350px;

  padding: 30px;

  display: flex;

  flex-direction: column;

  overflow: hidden;

  background:
    linear-gradient(
      145deg,
      #f7f9fa,
      #dce6e9
    );

  transition:
    background 0.35s ease;
}

.whyus-panel:hover {
  background:
    linear-gradient(
      145deg,
      #263b43,
      #10191d
    );
}

.whyus-panel__number {
  position: relative;

  z-index: 3;

  color: #8b989d;

  font-size: 0.65rem;

  font-weight: 700;

  letter-spacing: 0.15em;

  transition:
    color 0.35s ease;
}

.whyus-panel__icon {
  position: relative;

  z-index: 3;

  margin-top: 45px;

  color:
    var(--glass-blue, #4ea7c4);

  font-size: 2.1rem;

  line-height: 1;
}

.whyus-panel__content {
  position: relative;

  z-index: 3;

  margin-top: auto;
}

.whyus-panel__content h3 {
  margin:
    0 0 14px;

  color: #111416;

  font-size: 1.35rem;

  font-weight: 500;

  transition:
    color 0.35s ease;
}

.whyus-panel__content p {
  max-width: 340px;

  margin: 0;

  color: #68757b;

  font-size: 0.88rem;

  line-height: 1.65;

  transition:
    color 0.35s ease;
}

.whyus-panel__line {
  position: absolute;

  left: 30px;

  bottom: 0;

  width: 0;

  height: 3px;

  background:
    var(--glass-blue, #4ea7c4);

  transition:
    width 0.4s ease;
}

.whyus-panel:hover
.whyus-panel__line {
  width:
    calc(100% - 60px);
}

.whyus-panel__reflection {
  position: absolute;

  width: 170%;

  height: 45%;

  top: -12%;

  left: -90%;

  transform:
    rotate(-28deg);

  background:
    rgba(255, 255, 255, 0.17);

  transition:
    left 0.9s ease;
}

.whyus-panel:hover
.whyus-panel__reflection {
  left: 60%;
}

.whyus-panel:hover
.whyus-panel__number,

.whyus-panel:hover
.whyus-panel__content h3 {
  color: #ffffff;
}

.whyus-panel:hover
.whyus-panel__content p {
  color:
    rgba(255, 255, 255, 0.58);
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 1000px) {
  .whyus-section {
    padding:
      90px 5vw;
  }

  .whyus-heading {
    grid-template-columns: 1fr;

    gap: 30px;
  }

  .whyus-grid {
    grid-template-columns:
      repeat(2, 1fr);
  }
}


@media (max-width: 650px) {
  .whyus-section {
    padding:
      75px 20px;
  }

  .whyus-heading h2 {
    font-size:
      clamp(2.6rem, 12vw, 4rem);
  }

  .whyus-grid {
    grid-template-columns: 1fr;

    gap: 3px;

    padding: 3px;
  }

  .whyus-panel {
    min-height: 300px;

    padding: 24px;
  }

  .whyus-panel__icon {
    margin-top: 32px;
  }

  .whyus-panel__line {
    left: 24px;
  }

  .whyus-panel:hover
  .whyus-panel__line {
    width:
      calc(100% - 48px);
  }
}
</style>