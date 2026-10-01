<template>
  <section class="multi-reviews">

    <div class="reviews-container">

      <!-- HEADER -->
      <div class="section-header">

        <span class="eyebrow">
          LO QUE DICEN NUESTROS CLIENTES
        </span>

        <h2>
          La confianza se construye
          <span>con resultados.</span>
        </h2>

        <p>
          La calidad del servicio también se refleja
          en la experiencia de cada cliente.
        </p>

      </div>

      <!-- REVIEWS -->
      <div class="reviews-wrapper">

        <button
          class="slider-button previous"
          type="button"
          aria-label="Testimonio anterior"
          @click="previousReview"
        >
          ←
        </button>

        <div class="reviews-grid">

          <article
            v-for="review in visibleReviews"
            :key="review.id"
            class="review-card"
          >

            <div class="quote">
              “
            </div>

            <div class="stars">
              ★★★★★
            </div>

            <p>
              {{ review.comment }}
            </p>

            <div class="review-author">

              <div class="avatar">
                {{ review.initials }}
              </div>

              <div>
                <strong>{{ review.name }}</strong>
                <span>{{ review.location }}</span>
              </div>

            </div>

            <div class="verified">
              <span>✓</span>
              Servicio realizado
            </div>

          </article>

        </div>

        <button
          class="slider-button next"
          type="button"
          aria-label="Siguiente testimonio"
          @click="nextReview"
        >
          →
        </button>

      </div>

      <!-- DOTS -->
      <div class="review-dots">
        <button
          v-for="(_, index) in reviews"
          :key="index"
          type="button"
          :class="{ active: index === currentIndex }"
          @click="currentIndex = index"
        ></button>
      </div>

    </div>

  </section>
</template>

<script setup>
import { computed, ref } from 'vue'

const currentIndex = ref(0)

const reviews = [
  {
    id: 1,
    name: 'María González',
    initials: 'MG',
    location: 'Tepic, Nayarit',
    comment:
      'Excelente servicio, muy rápidos en atender la fuga de agua. Todo quedó limpio y funcionando perfectamente.'
  },
  {
    id: 2,
    name: 'Carlos Ramírez',
    initials: 'CR',
    location: 'Xalisco, Nayarit',
    comment:
      'Trabajo de calidad y precios claros. Me hicieron la instalación eléctrica de toda la casa.'
  },
  {
    id: 3,
    name: 'Ana López',
    initials: 'AL',
    location: 'Tepic, Nayarit',
    comment:
      'Muy profesionales. Pintaron la fachada y dejaron todo muy limpio. El resultado quedó excelente.'
  },
  {
    id: 4,
    name: 'José Martínez',
    initials: 'JM',
    location: 'Tepic, Nayarit',
    comment:
      'Los contacté para impermeabilizar la azotea y desde el inicio me explicaron claramente el trabajo.'
  },
  {
    id: 5,
    name: 'Laura Medina',
    initials: 'LM',
    location: 'Xalisco, Nayarit',
    comment:
      'Necesitaba varias reparaciones en casa y pude resolverlas con un mismo equipo. Muy práctico.'
  }
]

const visibleReviews = computed(() => {
  const result = []

  for (let i = 0; i < 3; i++) {
    result.push(
      reviews[(currentIndex.value + i) % reviews.length]
    )
  }

  return result
})

const nextReview = () => {
  currentIndex.value =
    (currentIndex.value + 1) % reviews.length
}

const previousReview = () => {
  currentIndex.value =
    (currentIndex.value - 1 + reviews.length) %
    reviews.length
}
</script>

<style scoped>
.multi-reviews {
  --navy: #062a50;
  --blue: #087ee5;
  --green: #19a957;
  --brick: #dc512e;
  --yellow: #f5ad18;

  padding: 90px 0;

  background: #f5f8fb;

  font-family: 'Manrope', sans-serif;
}

.reviews-container {
  width: min(1180px, calc(100% - 40px));
  margin: auto;
}

/* =========================
   HEADER
========================= */

.section-header {
  max-width: 650px;

  margin: 0 auto 50px;

  text-align: center;
}

.eyebrow {
  display: block;

  margin-bottom: 8px;

  color: var(--blue);

  font-size: 10px;
  font-weight: 800;
  letter-spacing: 2px;
}

.section-header h2 {
  margin: 0;

  color: var(--navy);

  font-family: 'Sora', sans-serif;

  font-size: clamp(30px, 4vw, 44px);

  line-height: 1.12;
  letter-spacing: -1.8px;
}

.section-header h2 span {
  color: var(--blue);
}

.section-header p {
  margin: 16px auto 0;

  color: #718193;

  font-size: 12px;
  line-height: 1.7;
}

/* =========================
   CARRUSEL
========================= */

.reviews-wrapper {
  position: relative;
}

.reviews-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);

  gap: 20px;
}

.review-card {
  position: relative;

  min-height: 245px;

  padding: 28px;

  background: white;

  border: 1px solid #e1e8ee;
  border-radius: 13px;

  box-shadow: 0 10px 30px rgba(6, 42, 80, 0.06);
}

.quote {
  position: absolute;

  top: 15px;
  right: 22px;

  color: #e4f1fc;

  font-family: Georgia, serif;
  font-size: 70px;
  line-height: 1;
}

.stars {
  position: relative;
  z-index: 2;

  margin-bottom: 16px;

  color: var(--yellow);

  font-size: 14px;
  letter-spacing: 2px;
}

.review-card > p {
  position: relative;
  z-index: 2;

  min-height: 75px;

  margin: 0 0 23px;

  color: #53677a;

  font-size: 11px;
  line-height: 1.75;
}

/* =========================
   AUTOR
========================= */

.review-author {
  display: flex;
  align-items: center;

  gap: 11px;
}

.avatar {
  width: 39px;
  height: 39px;

  display: flex;
  align-items: center;
  justify-content: center;

  color: white;
  background:
    linear-gradient(
      135deg,
      var(--navy),
      var(--blue)
    );

  border-radius: 50%;

  font-size: 10px;
  font-weight: 800;
}

.review-author > div:last-child {
  display: flex;
  flex-direction: column;
}

.review-author strong {
  color: var(--navy);

  font-size: 10px;
}

.review-author span {
  margin-top: 2px;

  color: #8997a5;

  font-size: 8px;
}

.verified {
  position: absolute;

  right: 20px;
  bottom: 25px;

  display: flex;
  align-items: center;

  gap: 4px;

  color: var(--green);

  font-size: 8px;
  font-weight: 700;
}

/* =========================
   BOTONES
========================= */

.slider-button {
  position: absolute;

  z-index: 10;

  top: 50%;

  width: 42px;
  height: 42px;

  display: flex;
  align-items: center;
  justify-content: center;

  color: var(--navy);
  background: white;

  border: 1px solid #dce5ec;
  border-radius: 50%;

  box-shadow: 0 7px 20px rgba(6, 42, 80, 0.12);

  cursor: pointer;

  transform: translateY(-50%);

  transition:
    background 0.2s ease,
    color 0.2s ease;
}

.slider-button:hover {
  color: white;
  background: var(--blue);
}

.previous {
  left: -21px;
}

.next {
  right: -21px;
}

/* =========================
   DOTS
========================= */

.review-dots {
  margin-top: 28px;

  display: flex;
  justify-content: center;

  gap: 7px;
}

.review-dots button {
  width: 7px;
  height: 7px;

  padding: 0;

  background: #c9d5df;

  border: 0;
  border-radius: 20px;

  cursor: pointer;

  transition: all 0.2s ease;
}

.review-dots button.active {
  width: 24px;

  background: var(--blue);
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 850px) {
  .reviews-grid {
    grid-template-columns: 1fr;
  }

  .review-card:nth-child(2),
  .review-card:nth-child(3) {
    display: none;
  }

  .previous {
    left: -10px;
  }

  .next {
    right: -10px;
  }
}

@media (max-width: 550px) {
  .multi-reviews {
    padding: 65px 0;
  }

  .reviews-container {
    width: calc(100% - 30px);
  }

  .review-card {
    padding: 25px;
  }

  .verified {
    position: static;

    margin-top: 18px;
  }
}
</style>