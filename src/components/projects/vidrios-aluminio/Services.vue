<template>
  <section
    id="servicios"
    class="services-section"
  >
    <div class="services-header">
      <div>
        <span class="section-kicker">Servicios</span>

        <h2>
          Soluciones que forman
          <span>parte de tu espacio.</span>
        </h2>
      </div>

      <p>
        Diseñamos y fabricamos soluciones en vidrio y aluminio
        para proyectos residenciales, comerciales y arquitectónicos.
      </p>
    </div>

    <div class="services-facade">

      <article
        v-for="(service, index) in services"
        :key="service.title"
        class="service-panel"
      >
        <div class="service-panel__number">
          {{ String(index + 1).padStart(2, '0') }}
        </div>

        <div class="service-panel__content">
          <span>{{ service.category }}</span>

          <h3>{{ service.title }}</h3>

          <p>{{ service.description }}</p>
        </div>

        <div class="service-panel__footer">
          <span>Explorar</span>
          <strong>↗</strong>
        </div>

        <div class="service-panel__reflection"></div>
      </article>

    </div>
  </section>
</template>

<script setup>
const services = [
  {
    category: 'Cristal',
    title: 'Canceles de baño',
    description:
      'Diseños funcionales y elegantes con cristal templado y herrajes resistentes.',
  },
  {
    category: 'Aluminio',
    title: 'Ventanas',
    description:
      'Sistemas de aluminio adaptados a espacios residenciales y comerciales.',
  },
  {
    category: 'Arquitectura',
    title: 'Barandales',
    description:
      'Soluciones modernas en cristal y acero para interiores y exteriores.',
  },
  {
    category: 'Cristal',
    title: 'Canceles comerciales',
    description:
      'Divisiones y accesos diseñados para oficinas, locales y espacios corporativos.',
  },
  {
    category: 'Diseño',
    title: 'Espejos',
    description:
      'Fabricación e instalación a medida para baños, interiores y proyectos decorativos.',
  },
  {
    category: 'Exterior',
    title: 'Domos',
    description:
      'Soluciones para iluminación natural y protección en espacios arquitectónicos.',
  },
]
</script>

<style scoped>
.services-section {
  padding: 120px 5vw;
  background: #edf2f4;
}

.services-header {
  width: min(100%, 1500px);
  margin: 0 auto 70px;

  display: grid;
  grid-template-columns: 1.2fr 0.8fr;
  gap: 70px;
  align-items: end;
}

.section-kicker {
  display: block;
  margin-bottom: 18px;

  color: var(--glass-blue, #4ea7c4);

  font-size: 0.72rem;
  font-weight: 700;
  letter-spacing: 0.18em;
  text-transform: uppercase;
}

.services-header h2 {
  margin: 0;

  color: var(--aluminum-dark, #111416);

  font-size: clamp(2.8rem, 5vw, 5.6rem);
  font-weight: 500;

  line-height: 0.98;
  letter-spacing: -0.05em;
}

.services-header h2 span {
  display: block;
  color: #7d8a90;
}

.services-header p {
  margin: 0;

  max-width: 520px;

  color: #68757b;

  font-size: 1rem;
  line-height: 1.8;
}

.services-facade {
  width: min(100%, 1500px);
  margin: 0 auto;

  display: grid;
  grid-template-columns: repeat(3, 1fr);

  gap: 5px;

  padding: 5px;

  background: #111416;
}

.service-panel {
  position: relative;

  min-height: 370px;

  padding: 30px;

  display: flex;
  flex-direction: column;

  overflow: hidden;

  background:
    linear-gradient(
      150deg,
      rgba(255, 255, 255, 0.96),
      rgba(216, 228, 232, 0.96)
    );

  transition:
    background 0.35s ease,
    color 0.35s ease;
}

.service-panel:hover {
  background:
    linear-gradient(
      145deg,
      #1d2f36,
      #0f181c
    );
}

.service-panel__number {
  position: relative;
  z-index: 3;

  color: #9aa7ac;

  font-size: 0.68rem;
  letter-spacing: 0.2em;

  transition: color 0.35s ease;
}

.service-panel__content {
  position: relative;
  z-index: 3;

  margin: auto 0;
}

.service-panel__content > span {
  display: block;
  margin-bottom: 12px;

  color: var(--glass-blue, #4ea7c4);

  font-size: 0.65rem;
  font-weight: 700;

  letter-spacing: 0.16em;
  text-transform: uppercase;
}

.service-panel__content h3 {
  margin: 0 0 16px;

  color: #111416;

  font-size: 1.7rem;
  font-weight: 500;

  transition: color 0.35s ease;
}

.service-panel__content p {
  max-width: 340px;
  margin: 0;

  color: #69767b;

  font-size: 0.92rem;
  line-height: 1.65;

  transition: color 0.35s ease;
}

.service-panel__footer {
  position: relative;
  z-index: 3;

  display: flex;
  align-items: center;
  justify-content: space-between;

  padding-top: 20px;

  border-top: 1px solid rgba(17, 20, 22, 0.13);

  color: #111416;

  font-size: 0.7rem;
  text-transform: uppercase;
  letter-spacing: 0.12em;

  transition:
    color 0.35s ease,
    border-color 0.35s ease;
}

.service-panel__footer strong {
  font-size: 1rem;
  font-weight: 400;
}

.service-panel__reflection {
  position: absolute;

  width: 170%;
  height: 55%;

  top: -20%;
  left: -80%;

  transform: rotate(-28deg);

  background: rgba(255, 255, 255, 0.17);

  transition:
    left 0.8s ease;
}

.service-panel:hover .service-panel__reflection {
  left: 60%;
}

.service-panel:hover .service-panel__number,
.service-panel:hover .service-panel__content h3,
.service-panel:hover .service-panel__footer {
  color: #ffffff;
}

.service-panel:hover .service-panel__content p {
  color: rgba(255, 255, 255, 0.62);
}

.service-panel:hover .service-panel__footer {
  border-color: rgba(255, 255, 255, 0.2);
}

@media (max-width: 1000px) {
  .services-section {
    padding: 90px 5vw;
  }

  .services-header {
    grid-template-columns: 1fr;
    gap: 30px;
  }

  .services-facade {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 650px) {
  .services-section {
    padding: 75px 20px;
  }

  .services-header {
    margin-bottom: 45px;
  }

  .services-header h2 {
    font-size: clamp(2.6rem, 12vw, 4rem);
  }

  .services-facade {
    grid-template-columns: 1fr;

    gap: 3px;
    padding: 3px;
  }

  .service-panel {
    min-height: 300px;

    padding: 24px;
  }
}
</style>