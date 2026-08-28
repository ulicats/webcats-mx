<template>
  <section id="asesores" class="fin-advisors">
    <div class="fin-advisors__container">

      <div class="fin-advisors__header">
        <div>
          <span class="fin-advisors__eyebrow">EQUIPO</span>

          <h2>
            Experiencia para
            decisiones que
            <em>sí importan.</em>
          </h2>
        </div>

        <p>
          Nuestro equipo combina análisis financiero, pensamiento estratégico
          y acompañamiento cercano para construir relaciones de largo plazo.
        </p>
      </div>

      <div class="fin-advisors__grid">

        <article
          v-for="advisor in advisors"
          :key="advisor.name"
          class="fin-advisors__card"
        >
          <div class="fin-advisors__photo">
            <div class="fin-advisors__initials">
              {{ advisor.initials }}
            </div>

            <span class="fin-advisors__corner"></span>
          </div>

          <div class="fin-advisors__info">
            <span>{{ advisor.role }}</span>

            <h3>{{ advisor.name }}</h3>

            <p>{{ advisor.description }}</p>

            <a href="#contacto">
              Perfil
              <span>↗</span>
            </a>
          </div>
        </article>

      </div>

    </div>
  </section>
</template>

<script setup>
const advisors = [
  {
    initials: 'AM',
    name: 'Alejandro Méndez',
    role: 'SOCIO DIRECTOR',
    description:
      'Especialista en planeación patrimonial y estrategia financiera de largo plazo.'
  },
  {
    initials: 'LC',
    name: 'Laura Cárdenas',
    role: 'DIRECTORA DE INVERSIONES',
    description:
      'Enfocada en construcción de portafolios, análisis de riesgo y asignación de activos.'
  },
  {
    initials: 'RF',
    name: 'Ricardo Fuentes',
    role: 'CONSULTOR FINANCIERO',
    description:
      'Acompaña a empresas y familias en decisiones de capital, liquidez y crecimiento.'
  }
]
</script>

<style scoped>
.fin-advisors {
  padding: 140px 0;
  background: #ece9e1;
}

.fin-advisors__container {
  width: min(1280px, calc(100% - 80px));
  margin: 0 auto;
}

.fin-advisors__header {
  display: grid;
  grid-template-columns: 1fr 0.6fr;
  gap: 100px;
  align-items: end;
  margin-bottom: 80px;
}

.fin-advisors__eyebrow {
  display: block;
  margin-bottom: 22px;
  color: var(--fin-accent);
  font-size: 9px;
  font-weight: 600;
  letter-spacing: 3px;
}

.fin-advisors__header h2 {
  max-width: 760px;
  margin: 0;
  font-family: Georgia, serif;
  font-size: clamp(48px, 5vw, 72px);
  line-height: 1.08;
  font-weight: 400;
  letter-spacing: -2px;
  color: var(--fin-primary);
}

.fin-advisors__header h2 em {
  display: block;
  color: var(--fin-accent);
  font-weight: 400;
}

.fin-advisors__header > p {
  max-width: 460px;
  margin: 0;
  color: var(--fin-text-soft);
  font-size: 14px;
  line-height: 1.9;
}

.fin-advisors__grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 28px;
}

.fin-advisors__card {
  background: var(--fin-white);
}

.fin-advisors__photo {
  position: relative;
  height: 380px;
  display: grid;
  place-items: center;
  background:
    linear-gradient(145deg, #182b3c, #0d1b2a);
  overflow: hidden;
}

.fin-advisors__photo::before {
  content: '';
  position: absolute;
  inset: 25px;
  border: 1px solid rgba(183, 155, 100, 0.18);
}

.fin-advisors__initials {
  position: relative;
  z-index: 2;
  color: var(--fin-accent-light);
  font-family: Georgia, serif;
  font-size: 68px;
  font-weight: 400;
  letter-spacing: 4px;
}

.fin-advisors__corner {
  position: absolute;
  right: 25px;
  bottom: 25px;
  width: 45px;
  height: 45px;
  border-right: 1px solid var(--fin-accent);
  border-bottom: 1px solid var(--fin-accent);
}

.fin-advisors__info {
  padding: 32px;
}

.fin-advisors__info > span {
  display: block;
  margin-bottom: 12px;
  color: var(--fin-accent);
  font-size: 8px;
  letter-spacing: 2.3px;
}

.fin-advisors__info h3 {
  margin-bottom: 15px;
  font-family: Georgia, serif;
  font-size: 27px;
  font-weight: 400;
  color: var(--fin-primary);
}

.fin-advisors__info p {
  min-height: 72px;
  margin-bottom: 26px;
  color: var(--fin-text-soft);
  font-size: 13px;
  line-height: 1.8;
}

.fin-advisors__info a {
  width: fit-content;
  padding-bottom: 8px;
  display: flex;
  align-items: center;
  gap: 18px;
  border-bottom: 1px solid var(--fin-accent);
  color: var(--fin-primary);
  font-size: 9px;
  text-transform: uppercase;
  letter-spacing: 1.4px;
}

.fin-advisors__info a span {
  color: var(--fin-accent);
}

@media (max-width: 950px) {
  .fin-advisors__header {
    grid-template-columns: 1fr;
    gap: 35px;
  }

  .fin-advisors__grid {
    grid-template-columns: 1fr 1fr;
  }
}

@media (max-width: 650px) {
  .fin-advisors {
    padding: 90px 0;
  }

  .fin-advisors__container {
    width: calc(100% - 36px);
  }

  .fin-advisors__grid {
    grid-template-columns: 1fr;
  }

  .fin-advisors__photo {
    height: 320px;
  }
}
</style>