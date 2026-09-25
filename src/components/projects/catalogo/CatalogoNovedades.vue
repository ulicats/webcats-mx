<script setup>
const productos = [
  {
    name: 'Bolsa Siena',
    category: 'Accesorios',
    price: '$749 MXN',
    image: 'https://images.unsplash.com/photo-1584917865442-de89df76afd3?auto=format&fit=crop&w=800&q=85'
  },
  {
    name: 'Tenis Essential',
    category: 'Calzado',
    price: '$899 MXN',
    image: 'https://images.unsplash.com/photo-1549298916-b41d501d3772?auto=format&fit=crop&w=800&q=85'
  },
  {
    name: 'Lentes Aura',
    category: 'Accesorios',
    price: '$399 MXN',
    image: 'https://images.unsplash.com/photo-1511499767150-a48a237f0083?auto=format&fit=crop&w=800&q=85'
  },
  {
    name: 'Bolsa Rose',
    category: 'Accesorios',
    price: '$649 MXN',
    image: 'https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?auto=format&fit=crop&w=800&q=85'
  },
  {
    name: 'Classic Watch',
    category: 'Accesorios',
    price: '$1,099 MXN',
    image: 'https://images.unsplash.com/photo-1524805444758-089113d48a6d?auto=format&fit=crop&w=800&q=85'
  }
]
</script>

<template>
  <section id="novedades" class="novedades">
    <div class="novedades-heading">
      <div>
        <span>Recién llegados</span>
        <h2>Lo nuevo.</h2>
      </div>

      <p>
        Nuevos favoritos para combinar,
        descubrir y hacerlos tuyos.
      </p>
    </div>

    <div class="productos-grid">
      <article
        v-for="producto in productos"
        :key="producto.name"
        class="producto"
      >
        <RouterLink
          :to="{ name: 'catalogo-productos', query: { search: producto.name } }"
          class="producto-image"
        >
          <img
            :src="producto.image"
            :alt="producto.name"
          />

          <span class="new-tag">
            Nuevo
          </span>

          <button
            class="favorite"
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

    <div class="novedades-bottom">
      <RouterLink :to="{ name: 'catalogo-productos', query: { new: 'true' } }">
        Ver todas las novedades
        <span>→</span>
      </RouterLink>
    </div>
  </section>
</template>

<style scoped>
.novedades {
  padding: 95px max(40px, calc((100vw - 1500px) / 2));
  background: #ffffff;
}

.novedades-heading {
  margin-bottom: 38px;

  display: flex;
  align-items: flex-end;
  justify-content: space-between;
  gap: 40px;
}

.novedades-heading > div > span {
  display: block;
  margin-bottom: 9px;

  color: #a97d87;

  font-size: 10px;
  font-weight: 600;
  letter-spacing: 0.25em;
  text-transform: uppercase;
}

.novedades-heading h2 {
  margin: 0;

  color: #24211f;

  font-size: clamp(46px, 5vw, 72px);
  font-weight: 500;
  letter-spacing: -0.055em;
  line-height: 0.9;
}

.novedades-heading p {
  max-width: 270px;
  margin: 0;

  color: #77706c;

  font-size: 12px;
  line-height: 1.7;
}

.productos-grid {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 13px;
}

.producto {
  min-width: 0;
}

.producto-image {
  position: relative;

  aspect-ratio: 0.83;

  display: block;
  overflow: hidden;

  background: #f3ede4;
}

.producto-image img {
  width: 100%;
  height: 100%;

  display: block;

  object-fit: cover;

  transition: transform 0.5s ease;
}

.producto:hover .producto-image img {
  transform: scale(1.035);
}

.new-tag {
  position: absolute;
  top: 12px;
  left: 12px;

  padding: 7px 10px;

  background: #e9b8c4;
  color: #24211f;

  font-size: 8px;
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
}

.favorite {
  position: absolute;
  right: 12px;
  bottom: 12px;

  width: 37px;
  height: 37px;

  display: grid;
  place-items: center;

  border: 0;
  border-radius: 50%;

  background: rgba(255, 255, 255, 0.9);

  color: #24211f;
  font-size: 20px;

  cursor: pointer;
}

.producto-info {
  padding: 14px 2px 0;

  display: flex;
  align-items: flex-end;
  justify-content: space-between;
  gap: 12px;
}

.producto-info span {
  color: #9a918c;

  font-size: 8px;
  letter-spacing: 0.12em;
  text-transform: uppercase;
}

.producto-info h3 {
  margin: 4px 0 0;

  color: #24211f;

  font-size: 13px;
  font-weight: 500;
}

.producto-info strong {
  flex-shrink: 0;

  color: #24211f;

  font-size: 12px;
  font-weight: 600;
}

.novedades-bottom {
  margin-top: 45px;

  display: flex;
  justify-content: center;
}

.novedades-bottom a {
  display: inline-flex;
  align-items: center;
  gap: 22px;

  padding-bottom: 7px;

  border-bottom: 1px solid #24211f;

  color: #24211f;
  text-decoration: none;

  font-size: 10px;
  font-weight: 600;
  letter-spacing: 0.1em;
  text-transform: uppercase;
}

.novedades-bottom a span {
  font-size: 18px;
}

@media (max-width: 1100px) {
  .productos-grid {
    grid-template-columns: repeat(3, 1fr);
  }
}

@media (max-width: 700px) {
  .novedades {
    padding: 70px 20px;
  }

  .novedades-heading {
    align-items: flex-start;
    flex-direction: column;
  }

  .productos-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 9px;
  }

  .producto-info {
    align-items: flex-start;
    flex-direction: column;
    gap: 7px;
  }
}

@media (max-width: 400px) {
  .productos-grid {
    grid-template-columns: 1fr;
  }
}
</style>