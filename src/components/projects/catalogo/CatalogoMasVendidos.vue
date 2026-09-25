<script setup>
const productos = [
  {
    name: 'Bolsa Amelia',
    category: 'Accesorios',
    price: '$899 MXN',
    featured: true,
    image:'https://images.unsplash.com/photo-1584917865442-de89df76afd3?auto=format&fit=crop&w=1200&q=85'
  },
  {
    name: 'Lentes Éclat',
    category: 'Accesorios',
    price: '$429 MXN',
    image: 'https://images.unsplash.com/photo-1511499767150-a48a237f0083?auto=format&fit=crop&w=800&q=85'
  },
  {
    name: 'Classic Watch',
    category: 'Accesorios',
    price: '$1,099 MXN',
    image: 'https://images.unsplash.com/photo-1524805444758-089113d48a6d?auto=format&fit=crop&w=800&q=85'
  },
  {
    name: 'Tenis Nude',
    category: 'Calzado',
    price: '$849 MXN',
    image: 'https://images.unsplash.com/photo-1549298916-b41d501d3772?auto=format&fit=crop&w=800&q=85'
  },
  {
    name: 'Bolsa Mini Rose',
    category: 'Accesorios',
    price: '$599 MXN',
    image: 'https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?auto=format&fit=crop&w=800&q=85'
  }
]
</script>

<template>
  <section class="mas-vendidos">
    <div class="section-heading">
      <div>
        <span>Los favoritos</span>
        <h2>Lo que todas quieren.</h2>
      </div>

      <RouterLink :to="{ name: 'catalogo-productos', query: { bestseller: 'true' } }">
        Ver más vendidos
        <span>→</span>
      </RouterLink>
    </div>

    <div class="editorial-grid">
      <article
        v-for="producto in productos"
        :key="producto.name"
        class="producto"
        :class="{ featured: producto.featured }"
      >
        <RouterLink
          :to="{ name: 'catalogo-productos', query: { search: producto.name } }"
          class="producto-image"
        >
          <img
            :src="producto.image"
            :alt="producto.name"
          />

          <span
            v-if="producto.featured"
            class="favorite-label"
          >
            Favorito
          </span>

          <button
            class="heart"
            aria-label="Agregar a favoritos"
            @click.prevent
          >
            ♡
          </button>
        </RouterLink>

        <div class="producto-info">
          <div>
            <span>{{ producto.category }}</span>
            <h3>{{ producto.name }}</h3>
          </div>

          <strong>{{ producto.price }}</strong>
        </div>
      </article>
    </div>
  </section>
</template>

<style scoped>
.mas-vendidos {
  padding: 100px max(40px, calc((100vw - 1500px) / 2));
  background: #fffaf8;
}

.section-heading {
  margin-bottom: 38px;

  display: flex;
  align-items: flex-end;
  justify-content: space-between;
  gap: 30px;
}

.section-heading > div > span {
  display: block;
  margin-bottom: 8px;

  color: #7c927c;

  font-size: 10px;
  font-weight: 600;
  letter-spacing: 0.25em;
  text-transform: uppercase;
}

.section-heading h2 {
  margin: 0;

  color: #24211f;

  font-family: Georgia, "Times New Roman", serif;
  font-size: clamp(40px, 4.5vw, 64px);
  font-weight: 400;
  font-style: italic;
  line-height: 1;
}

.section-heading > a {
  display: flex;
  align-items: center;
  gap: 20px;

  padding-bottom: 6px;

  border-bottom: 1px solid #24211f;

  color: #24211f;
  text-decoration: none;

  font-size: 10px;
  font-weight: 600;
  letter-spacing: 0.1em;
  text-transform: uppercase;
}

.section-heading > a span {
  font-size: 18px;
}

.editorial-grid {
  display: grid;
  grid-template-columns: 1.35fr 1fr 1fr;
  grid-template-rows: repeat(2, 330px);
  gap: 14px;
}

.producto {
  min-width: 0;
}

.producto.featured {
  grid-row: 1 / 3;
}

.producto-image {
  position: relative;

  width: 100%;
  height: calc(100% - 58px);

  display: block;
  overflow: hidden;

  background: #f3ede4;
}

.featured .producto-image {
  height: calc(100% - 58px);
}

.producto-image img {
  width: 100%;
  height: 100%;

  display: block;
  object-fit: cover;

  transition: transform 0.55s ease;
}

.producto:hover img {
  transform: scale(1.035);
}

.favorite-label {
  position: absolute;
  top: 15px;
  left: 15px;

  padding: 8px 12px;

  background: #aebfae;
  color: #24211f;

  font-size: 8px;
  font-weight: 700;
  letter-spacing: 0.15em;
  text-transform: uppercase;
}

.heart {
  position: absolute;
  right: 13px;
  bottom: 13px;

  width: 38px;
  height: 38px;

  display: grid;
  place-items: center;

  border: 0;
  border-radius: 50%;

  background: rgba(255,255,255,.9);
  color: #24211f;

  font-size: 20px;
  cursor: pointer;
}

.producto-info {
  min-height: 58px;
  padding: 12px 2px 0;

  display: flex;
  align-items: flex-start;
  justify-content: space-between;
  gap: 12px;
}

.producto-info span {
  color: #9a918c;
  font-size: 8px;
  letter-spacing: .13em;
  text-transform: uppercase;
}

.producto-info h3 {
  margin: 3px 0 0;

  color: #24211f;

  font-size: 13px;
  font-weight: 500;
}

.producto-info strong {
  padding-top: 12px;

  color: #24211f;

  font-size: 12px;
  white-space: nowrap;
}

@media (max-width: 900px) {
  .editorial-grid {
    grid-template-columns: repeat(2, 1fr);
    grid-template-rows: auto;
  }

  .producto,
  .producto.featured {
    grid-row: auto;
  }

  .producto-image,
  .featured .producto-image {
    height: auto;
    aspect-ratio: .85;
  }
}

@media (max-width: 600px) {
  .mas-vendidos {
    padding: 70px 20px;
  }

  .section-heading {
    align-items: flex-start;
    flex-direction: column;
  }

  .editorial-grid {
    gap: 9px;
  }

  .producto-info {
    flex-direction: column;
    gap: 3px;
  }

  .producto-info strong {
    padding-top: 0;
  }
}
</style>