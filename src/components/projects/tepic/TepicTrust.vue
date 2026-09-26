<template>
  <section class="tepic-trust" aria-label="Beneficios de Webcats">
    <div class="tepic-trust__container">

      <article
        v-for="item in trustItems"
        :key="item.title"
        class="tepic-trust__item"
      >
        <div class="tepic-trust__icon">
          {{ item.icon }}
        </div>

        <div class="tepic-trust__content">
          <strong>{{ item.title }}</strong>
          <span>{{ item.description }}</span>
        </div>
      </article>

    </div>
  </section>
</template>

<script setup>
const trustItems = [
  {
    icon: '◇',
    title: 'Diseño profesional',
    description: 'Sitios hechos a la medida'
  },
  {
    icon: '↗',
    title: 'Optimización SEO',
    description: 'Preparados para Google'
  },
  {
    icon: '⚡',
    title: 'Buen rendimiento',
    description: 'Sitios rápidos y optimizados'
  },
  {
    icon: '◉',
    title: 'Atención personalizada',
    description: 'Acompañamiento en tu proyecto'
  }
]
</script>

<style scoped>
.tepic-trust {
  position: relative;
  z-index: 10;

  width: 100%;

  background: #ffffff;

  border-top: 1px solid #edf1f6;
  border-bottom: 1px solid #edf1f6;
}

.tepic-trust__container {
  width: min(1180px, calc(100% - 40px));
  margin: 0 auto;

  display: grid;
  grid-template-columns: repeat(4, 1fr);
}

.tepic-trust__item {
  position: relative;

  min-height: 112px;
  padding: 25px 28px;

  display: flex;
  align-items: center;
  gap: 14px;
}

.tepic-trust__item:not(:last-child)::after {
  content: "";

  position: absolute;
  top: 27px;
  right: 0;
  bottom: 27px;

  width: 1px;

  background: #e9eef5;
}

.tepic-trust__icon {
  flex: 0 0 auto;

  width: 43px;
  height: 43px;

  display: grid;
  place-items: center;

  color: #1677ff;
  background: #edf5ff;

  border-radius: 12px;

  font-size: 18px;
  font-weight: 900;
}

.tepic-trust__content strong,
.tepic-trust__content span {
  display: block;
}

.tepic-trust__content strong {
  color: #172033;

  font-size: 13px;
  font-weight: 800;
}

.tepic-trust__content span {
  margin-top: 4px;

  color: #8a97a8;

  font-size: 10px;
  line-height: 1.4;
}

@media (max-width: 900px) {
  .tepic-trust__container {
    grid-template-columns: repeat(2, 1fr);
  }

  .tepic-trust__item:nth-child(2)::after {
    display: none;
  }

  .tepic-trust__item:nth-child(-n + 2) {
    border-bottom: 1px solid #edf1f6;
  }
}

@media (max-width: 520px) {
  .tepic-trust__container {
    grid-template-columns: 1fr;
  }

  .tepic-trust__item {
    min-height: 90px;
    padding: 18px 5px;
  }

  .tepic-trust__item:not(:last-child) {
    border-bottom: 1px solid #edf1f6;
  }

  .tepic-trust__item::after {
    display: none;
  }
}
</style>