<script setup>
const categorias = [
  {
    name: 'Ropa',
    slug: 'ropa',
    subtitle: 'Descubre la colección',
    image: 'https://images.unsplash.com/photo-1483985988355-763728e1935b?auto=format&fit=crop&w=900&q=85'
  },
  {
    name: 'Calzado',
    slug: 'calzado',
    subtitle: 'Para cada paso',
    image: 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?auto=format&fit=crop&w=900&q=85'
  },
  {
    name: 'Accesorios',
    slug: 'accesorios',
    subtitle: 'El detalle perfecto',
    image: 'https://images.unsplash.com/photo-1523779917675-b6ed3a42a561?auto=format&fit=crop&w=900&q=85'
  },
  {
    name: 'Belleza',
    slug: 'belleza',
    subtitle: 'Tu momento',
    image: 'https://images.unsplash.com/photo-1596462502278-27bfdc403348?auto=format&fit=crop&w=900&q=85'
  }
]
</script>

<template>
  <section id="catalogo" class="categorias">
    <div class="categorias-heading">
      <div>
        <span class="eyebrow">Explora Auralyn</span>
        <h2>Encuentra lo tuyo.</h2>
      </div>

      <RouterLink :to="{ name: 'catalogo-productos' }" class="view-all">
        Ver todo el catálogo
        <span>→</span>
      </RouterLink>
    </div>

    <div class="categorias-grid">
      <RouterLink
        v-for="categoria in categorias"
        :key="categoria.name"
        :to="{ name: 'catalogo-productos', query: { category: categoria.slug } }"
        class="categoria-card"
      >
        <img
          :src="categoria.image"
          :alt="categoria.name"
        />

        <div class="categoria-overlay"></div>

        <div class="categoria-content">
          <span>{{ categoria.subtitle }}</span>

          <div>
            <h3>{{ categoria.name }}</h3>
            <span class="arrow">→</span>
          </div>
        </div>
      </RouterLink>
    </div>
  </section>
</template>

<style scoped>
.categorias {
  padding: 90px max(40px, calc((100vw - 1500px) / 2));
  background: #fffaf8;
}

.categorias-heading {
  margin-bottom: 35px;

  display: flex;
  align-items: flex-end;
  justify-content: space-between;
  gap: 30px;
}

.eyebrow {
  display: block;
  margin-bottom: 8px;

  color: #a97d87;

  font-size: 10px;
  font-weight: 600;
  letter-spacing: 0.25em;
  text-transform: uppercase;
}

.categorias-heading h2 {
  margin: 0;

  color: #24211f;

  font-family: Georgia, "Times New Roman", serif;
  font-size: clamp(38px, 4vw, 58px);
  font-weight: 400;
  font-style: italic;
  line-height: 1;
}

.view-all {
  display: flex;
  align-items: center;
  gap: 18px;

  padding-bottom: 5px;

  border-bottom: 1px solid #24211f;

  color: #24211f;
  text-decoration: none;

  font-size: 10px;
  font-weight: 600;
  letter-spacing: 0.1em;
  text-transform: uppercase;
}

.view-all span {
  font-size: 17px;
}

.categorias-grid {
  display: grid;
  grid-template-columns: 1.15fr 1fr 1fr 1.15fr;
  gap: 12px;
}

.categoria-card {
  position: relative;

  height: 430px;

  display: block;
  overflow: hidden;

  background: #f3ede4;
  color: #fff;
  text-decoration: none;
}

.categoria-card:nth-child(2),
.categoria-card:nth-child(3) {
  height: 390px;
  margin-top: 40px;
}

.categoria-card img {
  width: 100%;
  height: 100%;

  display: block;

  object-fit: cover;

  transition: transform 0.6s ease;
}

.categoria-card:hover img {
  transform: scale(1.045);
}

.categoria-overlay {
  position: absolute;
  inset: 0;

  background:
    linear-gradient(
      to top,
      rgba(28, 24, 22, 0.55),
      rgba(28, 24, 22, 0.03) 60%
    );
}

.categoria-content {
  position: absolute;
  z-index: 2;

  left: 25px;
  right: 25px;
  bottom: 24px;
}

.categoria-content > span {
  font-size: 9px;
  letter-spacing: 0.18em;
  text-transform: uppercase;
}

.categoria-content > div {
  margin-top: 5px;

  display: flex;
  align-items: flex-end;
  justify-content: space-between;
}

.categoria-content h3 {
  margin: 0;

  font-family: Georgia, "Times New Roman", serif;
  font-size: 35px;
  font-weight: 400;
}

.arrow {
  font-size: 24px;
  transition: transform 0.25s ease;
}

.categoria-card:hover .arrow {
  transform: translateX(5px);
}

@media (max-width: 1000px) {
  .categorias-grid {
    grid-template-columns: repeat(2, 1fr);
  }

  .categoria-card,
  .categoria-card:nth-child(2),
  .categoria-card:nth-child(3) {
    height: 400px;
    margin-top: 0;
  }
}

@media (max-width: 600px) {
  .categorias {
    padding: 65px 20px;
  }

  .categorias-heading {
    align-items: flex-start;
    flex-direction: column;
  }

  .categorias-grid {
    grid-template-columns: 1fr 1fr;
    gap: 8px;
  }

  .categoria-card,
  .categoria-card:nth-child(2),
  .categoria-card:nth-child(3) {
    height: 290px;
  }

  .categoria-content {
    left: 16px;
    right: 16px;
    bottom: 16px;
  }

  .categoria-content h3 {
    font-size: 25px;
  }
}
</style>