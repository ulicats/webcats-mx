<script setup>
const looks = [
  {
    title: 'Everyday',
    query: { collection: 'everyday' },
    image: 'https://images.unsplash.com/photo-1496747611176-843222e1e57c?auto=format&fit=crop&w=1000&q=85'
  },
  {
    title: 'Details',
    query: { category: 'accesorios' },
    image: 'https://images.unsplash.com/photo-1523779917675-b6ed3a42a561?auto=format&fit=crop&w=1000&q=85'
  },
  {
    title: 'Weekend',
    query: { collection: 'after-hours' },
    image: 'https://images.unsplash.com/photo-1529139574466-a303027c1d8b?auto=format&fit=crop&w=1000&q=85'
  },
  {
    title: 'Essential',
    query: { collection: 'soft-essentials' },
    image: 'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?auto=format&fit=crop&w=1000&q=85'
  }
]
</script>

<template>
  <section class="lookbook">
    <div class="lookbook-heading">
      <span>Inspírate</span>

      <div class="heading-row">
        <h2>Auralyn looks.</h2>

        <RouterLink :to="{ name: 'catalogo-productos' }">
          Ver colección
          <span>→</span>
        </RouterLink>
      </div>
    </div>

    <div class="lookbook-grid">
      <RouterLink
        v-for="look in looks"
        :key="look.title"
        :to="{ name: 'catalogo-productos', query: look.query }"
        class="look"
      >
        <img
          :src="look.image"
          :alt="look.title"
        />

        <div class="look-overlay"></div>

        <span class="look-title">
          {{ look.title }}
        </span>
      </RouterLink>
    </div>
  </section>
</template>

<style scoped>
.lookbook {
  padding: 100px max(40px, calc((100vw - 1500px) / 2));
  background: #f7e4e8;
}

.lookbook-heading {
  margin-bottom: 35px;
}

.lookbook-heading > span {
  display: block;
  margin-bottom: 8px;

  color: #8c706f;

  font-size: 10px;
  font-weight: 600;
  letter-spacing: .25em;
  text-transform: uppercase;
}

.heading-row {
  display: flex;
  align-items: flex-end;
  justify-content: space-between;
  gap: 30px;
}

.heading-row h2 {
  margin: 0;

  color: #24211f;

  font-family: Georgia, "Times New Roman", serif;
  font-size: clamp(45px, 5vw, 70px);
  font-weight: 400;
  font-style: italic;
  line-height: 1;
}

.heading-row a {
  display: inline-flex;
  align-items: center;
  gap: 20px;

  padding-bottom: 6px;

  border-bottom: 1px solid #24211f;

  color: #24211f;
  text-decoration: none;

  font-size: 10px;
  font-weight: 600;
  letter-spacing: .1em;
  text-transform: uppercase;
}

.heading-row a span {
  font-size: 18px;
}

/* GRID */

.lookbook-grid {
  display: grid;
  grid-template-columns: 1.3fr .8fr 1fr .8fr;
  gap: 10px;
}

.look {
  position: relative;

  height: 500px;

  display: block;
  overflow: hidden;

  background: #f3ede4;
}

.look:nth-child(2),
.look:nth-child(4) {
  height: 430px;
  margin-top: 35px;
}

.look img {
  width: 100%;
  height: 100%;

  display: block;
  object-fit: cover;

  transition: transform .6s ease;
}

.look:hover img {
  transform: scale(1.045);
}

.look-overlay {
  position: absolute;
  inset: 0;

  background:
    linear-gradient(
      to top,
      rgba(25, 22, 21, .45),
      transparent 50%
    );
}

.look-title {
  position: absolute;

  left: 22px;
  bottom: 20px;

  color: #fff;

  font-family: Georgia, "Times New Roman", serif;
  font-size: 25px;
  font-style: italic;
}

/* RESPONSIVE */

@media (max-width: 900px) {
  .lookbook-grid {
    grid-template-columns: repeat(2, 1fr);
  }

  .look,
  .look:nth-child(2),
  .look:nth-child(4) {
    height: 430px;
    margin-top: 0;
  }
}

@media (max-width: 600px) {
  .lookbook {
    padding: 70px 20px;
  }

  .heading-row {
    align-items: flex-start;
    flex-direction: column;
  }

  .lookbook-grid {
    gap: 7px;
  }

  .look,
  .look:nth-child(2),
  .look:nth-child(4) {
    height: 300px;
  }

  .look-title {
    left: 15px;
    bottom: 15px;
    font-size: 20px;
  }
}
</style>