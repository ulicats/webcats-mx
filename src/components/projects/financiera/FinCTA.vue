<template>
  <section class="fin-cta">
    <div class="fin-cta__grid"></div>

    <div class="fin-cta__container">

      <span class="fin-cta__eyebrow">
        SIGUIENTE DECISIÓN
      </span>

      <h2>
        Construya una estrategia
        pensada para
        <em>lo que sigue.</em>
      </h2>

      <p>
        Una conversación puede ser el primer paso para ordenar sus finanzas,
        proteger su patrimonio y tomar decisiones con mayor claridad.
      </p>

      <div class="fin-cta__actions">
        <a href="#contacto" class="fin-cta__primary">
          Agendar asesoría
          <span>↗</span>
        </a>

        <a href="#servicios" class="fin-cta__secondary">
          Explorar servicios
        </a>
      </div>

    </div>
  </section>
</template>

<style scoped>
.fin-cta {
  position: relative;
  padding: 160px 0;
  overflow: hidden;
  background:
    radial-gradient(circle at 80% 30%, rgba(183, 155, 100, 0.15), transparent 30%),
    linear-gradient(135deg, #0d1b2a, #08131e);
  color: var(--fin-white);
}

.fin-cta__grid {
  position: absolute;
  inset: 0;
  opacity: 0.05;
  background-image:
    linear-gradient(rgba(255, 255, 255, 1) 1px, transparent 1px),
    linear-gradient(90deg, rgba(255, 255, 255, 1) 1px, transparent 1px);
  background-size: 90px 90px;
}

.fin-cta__container {
  position: relative;
  z-index: 2;
  width: min(1000px, calc(100% - 80px));
  margin: 0 auto;
  text-align: center;
}

.fin-cta__eyebrow {
  display: block;
  margin-bottom: 30px;
  color: var(--fin-accent-light);
  font-size: 9px;
  font-weight: 600;
  letter-spacing: 3px;
}

.fin-cta h2 {
  margin-bottom: 32px;
  font-family: Georgia, 'Times New Roman', serif;
  font-size: clamp(52px, 6vw, 88px);
  line-height: 1.03;
  font-weight: 400;
  letter-spacing: -3px;
}

.fin-cta h2 em {
  display: block;
  color: var(--fin-accent-light);
  font-weight: 400;
}

.fin-cta p {
  max-width: 690px;
  margin: 0 auto 42px;
  color: rgba(255, 255, 255, 0.55);
  font-size: 15px;
  line-height: 1.9;
}

.fin-cta__actions {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 28px;
}

.fin-cta__primary {
  min-width: 210px;
  padding: 19px 22px;
  display: flex;
  justify-content: space-between;
  background: var(--fin-accent);
  color: var(--fin-primary);
  font-size: 10px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  transition: transform 0.25s ease;
}

.fin-cta__primary:hover {
  transform: translateY(-3px);
}

.fin-cta__primary span {
  font-size: 17px;
}

.fin-cta__secondary {
  padding-bottom: 8px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.25);
  color: rgba(255, 255, 255, 0.65);
  font-size: 10px;
  text-transform: uppercase;
  letter-spacing: 1.5px;
}

@media (max-width: 600px) {
  .fin-cta {
    padding: 110px 0;
  }

  .fin-cta__container {
    width: calc(100% - 36px);
  }

  .fin-cta h2 {
    font-size: 50px;
    letter-spacing: -2px;
  }

  .fin-cta__actions {
    flex-direction: column;
  }

  .fin-cta__primary {
    width: 100%;
  }
}
</style>