<template>
  <section
    id="proceso"
    class="tepic-process"
  >
    <div class="tepic-process__container">

      <div class="tepic-process__header">
        <span class="tepic-process__eyebrow">
          Nuestro proceso
        </span>

        <h2>
          De una idea a una
          <span>página web funcionando.</span>
        </h2>

        <p>
          Te acompañamos durante todo el desarrollo para convertir
          las necesidades de tu negocio en una solución digital.
        </p>
      </div>

      <div class="tepic-process__steps">

        <article
          v-for="(step, index) in steps"
          :key="step.number"
          class="tepic-process__step"
        >
          <div class="tepic-process__top">

            <div class="tepic-process__number">
              {{ step.number }}
            </div>

            <div
              v-if="index !== steps.length - 1"
              class="tepic-process__line"
            ></div>

          </div>

          <div class="tepic-process__icon">
            {{ step.icon }}
          </div>

          <h3>{{ step.title }}</h3>

          <p>{{ step.description }}</p>

          <span class="tepic-process__label">
            {{ step.label }}
          </span>
        </article>

      </div>

    </div>
  </section>
</template>

<script setup>
const steps = [
  {
    number: '01',
    icon: '◎',
    title: 'Conocemos tu proyecto',
    description:
      'Platicamos sobre tu negocio, tus servicios, tus clientes y lo que necesitas lograr con tu página.',
    label: 'Descubrimiento'
  },
  {
    number: '02',
    icon: '◇',
    title: 'Diseñamos la experiencia',
    description:
      'Definimos estructura, contenido e interfaz para presentar tu negocio de manera clara y profesional.',
    label: 'Diseño UI/UX'
  },
  {
    number: '03',
    icon: '</>',
    title: 'Desarrollamos',
    description:
      'Convertimos el diseño en un sitio funcional, adaptable a dispositivos y preparado para producción.',
    label: 'Desarrollo'
  },
  {
    number: '04',
    icon: '↗',
    title: 'Publicamos',
    description:
      'Realizamos los ajustes finales y ponemos tu proyecto en línea para comenzar a recibir visitantes.',
    label: 'Lanzamiento'
  }
]
</script>

<style scoped>
.tepic-process {
  padding: 115px 0;

  background: #ffffff;
}

.tepic-process__container {
  width: min(1180px, calc(100% - 40px));
  margin: 0 auto;
}

.tepic-process__header {
  max-width: 690px;
  margin: 0 auto 65px;

  text-align: center;
}

.tepic-process__eyebrow {
  display: inline-flex;

  margin-bottom: 15px;
  padding: 7px 11px;

  color: #1677ff;
  background: #edf5ff;

  border-radius: 999px;

  font-size: 10px;
  font-weight: 850;
  letter-spacing: 0.08em;
  text-transform: uppercase;
}

.tepic-process__header h2 {
  margin: 0;

  color: #101828;

  font-size: clamp(35px, 4vw, 50px);
  line-height: 1.04;
  letter-spacing: -0.05em;
}

.tepic-process__header h2 span {
  color: #1677ff;
}

.tepic-process__header p {
  max-width: 570px;
  margin: 20px auto 0;

  color: #758397;

  font-size: 13px;
  line-height: 1.75;
}

/* STEPS */

.tepic-process__steps {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 0;
}

.tepic-process__step {
  position: relative;

  padding-right: 30px;
}

.tepic-process__top {
  position: relative;

  display: flex;
  align-items: center;

  margin-bottom: 28px;
}

.tepic-process__number {
  position: relative;
  z-index: 3;

  width: 43px;
  height: 43px;

  display: grid;
  place-items: center;

  color: #1677ff;
  background: #ffffff;

  border: 2px solid #1677ff;
  border-radius: 50%;

  font-size: 10px;
  font-weight: 900;
}

.tepic-process__line {
  position: absolute;
  z-index: 1;

  left: 43px;
  right: -1px;

  height: 1px;

  background:
    repeating-linear-gradient(
      to right,
      #cbdcf3 0,
      #cbdcf3 5px,
      transparent 5px,
      transparent 10px
    );
}

.tepic-process__icon {
  width: 48px;
  height: 48px;

  display: grid;
  place-items: center;

  color: #1677ff;
  background: #edf5ff;

  border-radius: 13px;

  font-size: 15px;
  font-weight: 900;
}

.tepic-process__step h3 {
  margin: 19px 0 10px;

  color: #1b2738;

  font-size: 15px;
  font-weight: 800;
}

.tepic-process__step p {
  min-height: 82px;
  margin: 0;

  color: #7b899c;

  font-size: 10px;
  line-height: 1.65;
}

.tepic-process__label {
  display: inline-flex;

  margin-top: 17px;
  padding: 5px 8px;

  color: #1677ff;
  background: #f0f6ff;

  border-radius: 6px;

  font-size: 8px;
  font-weight: 800;
}

@media (max-width: 850px) {
  .tepic-process__steps {
    grid-template-columns: repeat(2, 1fr);
    gap: 50px 25px;
  }

  .tepic-process__step:nth-child(2) .tepic-process__line {
    display: none;
  }
}

@media (max-width: 520px) {
  .tepic-process {
    padding: 80px 0;
  }

  .tepic-process__steps {
    grid-template-columns: 1fr;
    gap: 35px;
  }

  .tepic-process__step {
    padding: 0;
  }

  .tepic-process__line {
    display: none;
  }

  .tepic-process__step p {
    min-height: 0;
  }
}
</style>