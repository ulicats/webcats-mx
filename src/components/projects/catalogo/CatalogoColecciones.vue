<script setup>
const colecciones = [
  {
    name: 'Soft Essentials',
    slug: 'soft-essentials',
    subtitle: 'Tonos que combinan con todo',
    image: 'https://images.unsplash.com/photo-1529139574466-a303027c1d8b?auto=format&fit=crop&w=1000&q=85'
  },
  {
    name: 'Everyday',
    slug: 'everyday',
    subtitle: 'Para todos los días',
    image: 'https://images.unsplash.com/photo-1496747611176-843222e1e57c?auto=format&fit=crop&w=1000&q=85'
  },
  {
    name: 'After Hours',
    slug: 'after-hours',
    subtitle: 'Para salir',
    image: 'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?auto=format&fit=crop&w=1000&q=85'
  }
]
</script>

<template>
  <section class="colecciones">
    <div class="colecciones-heading">
      <span>Elige tu mood</span>
      <h2>Colecciones.</h2>
    </div>

    <div class="colecciones-grid">
      <RouterLink
        v-for="coleccion in colecciones"
        :key="coleccion.name"
        :to="{ name: 'catalogo-productos', query: { collection: coleccion.slug } }"
        class="coleccion"
      >
        <img
          :src="coleccion.image"
          :alt="coleccion.name"
        />

        <div class="overlay"></div>

        <div class="coleccion-content">
          <span>{{ coleccion.subtitle }}</span>

          <div>
            <h3>{{ coleccion.name }}</h3>
            <span class="arrow">→</span>
          </div>
        </div>
      </RouterLink>
    </div>
  </section>
</template>

<style scoped>
.colecciones {
  padding: 100px max(40px, calc((100vw - 1500px) / 2));
  background: #fff;
}

.colecciones-heading {
  margin-bottom: 35px;
}

.colecciones-heading > span {
  display: block;
  margin-bottom: 8px;

  color: #a97d87;

  font-size: 10px;
  font-weight: 600;
  letter-spacing: .25em;
  text-transform: uppercase;
}

.colecciones-heading h2 {
  margin: 0;

  color: #24211f;

  font-family: Georgia, "Times New Roman", serif;
  font-size: clamp(45px, 5vw, 70px);
  font-weight: 400;
  font-style: italic;
  line-height: 1;
}

.colecciones-grid {
  display: grid;
  grid-template-columns: 1fr 1.25fr 1fr;
  gap: 12px;
}

.coleccion {
  position: relative;

  height: 570px;

  display: block;
  overflow: hidden;

  color: #fff;
  text-decoration: none;

  background: #f3ede4;
}

.coleccion:nth-child(1),
.coleccion:nth-child(3) {
  height: 500px;
  margin-top: 35px;
}

.coleccion img {
  width: 100%;
  height: 100%;

  display: block;

  object-fit: cover;

  transition: transform .6s ease;
}

.coleccion:hover img {
  transform: scale(1.04);
}

.overlay {
  position: absolute;
  inset: 0;

  background:
    linear-gradient(
      to top,
      rgba(30,25,23,.62),
      transparent 60%
    );
}

.coleccion-content {
  position: absolute;
  z-index: 2;

  left: 28px;
  right: 28px;
  bottom: 28px;
}

.coleccion-content > span {
  font-size: 9px;
  letter-spacing: .15em;
  text-transform: uppercase;
}

.coleccion-content > div {
  margin-top: 7px;

  display: flex;
  align-items: flex-end;
  justify-content: space-between;
}

.coleccion h3 {
  margin: 0;

  font-family: Georgia, "Times New Roman", serif;
  font-size: clamp(27px, 3vw, 43px);
  font-weight: 400;
  font-style: italic;
}

.arrow {
  font-size: 26px;
  transition: transform .25s ease;
}

.coleccion:hover .arrow {
  transform: translateX(6px);
}

@media (max-width: 800px) {
  .colecciones-grid {
    grid-template-columns: 1fr;
  }

  .coleccion,
  .coleccion:nth-child(1),
  .coleccion:nth-child(3) {
    height: 500px;
    margin-top: 0;
  }
}

@media (max-width: 600px) {
  .colecciones {
    padding: 70px 20px;
  }

  .coleccion,
  .coleccion:nth-child(1),
  .coleccion:nth-child(3) {
    height: 400px;
  }
}
</style>