<template>
  <section id="opiniones" class="reviews">
    <div class="reviews-container">

      <!-- ENCABEZADO -->
      <div class="reviews-header">
        <div>
          <h2>
            Lo que dicen
            <span>nuestros huéspedes</span>
          </h2>
        </div>

        <!-- PUNTUACIÓN GOOGLE -->
        <div
          v-if="!loading && place"
          class="google-score"
        >
          <strong>{{ rating.toFixed(1) }}</strong>

          <div>
            <div class="google-score__stars">
              <span
                v-for="star in Math.round(rating)"
                :key="star"
              >
                ★
              </span>
            </div>

            <p>
              {{ totalReviews }} opiniones en Google
            </p>
          </div>
        </div>
      </div>


      <!-- CARGANDO -->
      <div
        v-if="loading"
        class="reviews-status"
      >
        Cargando opiniones de Google...
      </div>


      <!-- ERROR -->
      <div
        v-else-if="error"
        class="reviews-status"
      >
        {{ error }}
      </div>


      <!-- RESEÑAS -->
      <div
        v-else-if="reviews.length"
        class="reviews-grid"
      >
        <article
          v-for="(review, index) in reviews"
          :key="`${review.name}-${index}`"
          class="review-card"
        >
          <!-- ESTRELLAS -->
          <div class="review-card__stars">
            <span
              v-for="star in review.rating"
              :key="star"
            >
              ★
            </span>
          </div>


          <!-- COMENTARIO -->
          <p class="review-card__text">
            “{{ review.text }}”
          </p>


          <!-- AUTOR -->
          <footer>

            <!-- FOTO GOOGLE -->
            <img
              v-if="review.photo"
              :src="review.photo"
              :alt="review.name"
              class="review-avatar-img"
              referrerpolicy="no-referrer"
            />

            <!-- FALLBACK SI NO HAY FOTO -->
            <div
              v-else
              class="review-avatar"
            >
              {{ review.name.charAt(0) }}
            </div>


            <div class="review-author">
              <strong>{{ review.name }}</strong>

              <span>
                {{ review.date }}
              </span>
            </div>

          </footer>
        </article>
      </div>


      <!-- SIN RESEÑAS -->
      <div
        v-else
        class="reviews-status"
      >
        No hay opiniones disponibles en este momento.
      </div>


      <!-- BOTÓN GOOGLE -->
      <div
        v-if="googleMapsUrl !== '#'"
        class="reviews-actions"
      >
        <a
          :href="googleMapsUrl"
          target="_blank"
          rel="noopener noreferrer"
          class="reviews-google-link"
        >
          Ver todas las opiniones en Google
          <span>↗</span>
        </a>
      </div>

    </div>
  </section>
</template>


<script setup>
import { computed, onMounted, ref } from "vue";
import { getArcePlace } from "../../../services/arcePlaces.js";


const place = ref(null);
const loading = ref(true);
const error = ref("");


const rating = computed(() => {
  return place.value?.rating ?? 0;
});


const totalReviews = computed(() => {
  return place.value?.userRatingCount ?? 0;
});


const googleMapsUrl = computed(() => {
  return place.value?.googleMapsUri ?? "#";
});


const reviews = computed(() => {
  return (place.value?.reviews ?? [])
    .map((review) => ({
      name:
        review.authorAttribution?.displayName ??
        "Usuario de Google",

      photo:
        review.authorAttribution?.photoUri ??
        "",

      profile:
        review.authorAttribution?.uri ??
        "",

      rating:
        review.rating ?? 5,

      text:
        review.text?.text ??
        "",

      date:
        review.relativePublishTimeDescription ??
        "Opinión en Google",
    }))
    .filter((review) => review.text);
});


onMounted(async () => {
  try {

    place.value = await getArcePlace(
      import.meta.env.VITE_GOOGLE_PLACES_API_KEY
    );

    console.log(
      "ARCE GOOGLE PLACE:",
      place.value
    );

  } catch (err) {

    console.error(
      "Error cargando reseñas de Google:",
      err
    );

    error.value =
      "No fue posible cargar las opiniones de Google.";

  } finally {

    loading.value = false;

  }
});
</script>


<style scoped>
.reviews {
  padding: 110px 0;
  background: #f5f0e5;
  scroll-margin-top: 90px;
}

.reviews-container {
  width: min(1180px, 90%);
  margin: 0 auto;
}


/* =========================================
   HEADER
========================================= */

.reviews-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 60px;
  margin-bottom: 70px;
}

.reviews-header h2 {
  margin: 0;
  color: #0d2940;
  font-family: "Cormorant Garamond", serif;
  font-size: clamp(3.4rem, 6vw, 5.7rem);
  font-weight: 500;
  line-height: 0.85;
}

.reviews-header h2 span {
  display: block;
  color: #c39a32;
  font-style: italic;
  font-weight: 500;
}


/* =========================================
   GOOGLE SCORE
========================================= */

.google-score {
  flex-shrink: 0;

  display: flex;
  align-items: center;
  gap: 18px;

  padding: 28px 32px;

  background: #ffffff;
  border: 1px solid rgba(13, 41, 64, 0.1);
  border-radius: 16px;
}

.google-score > strong {
  color: #0d2940;

  font-family: "Cormorant Garamond", serif;
  font-size: 3rem;
  font-weight: 500;
  line-height: 1;
}

.google-score__stars {
  color: #c39a32;
  font-size: 0.95rem;
  letter-spacing: 2px;
}

.google-score p {
  margin: 5px 0 0;

  color: #6d7680;

  font-size: 0.8rem;
}


/* =========================================
   GRID
========================================= */

.reviews-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
}


/* =========================================
   CARD
========================================= */

.review-card {
  display: flex;
  flex-direction: column;

  min-height: 300px;

  padding: 32px;

  background: #ffffff;

  border: 1px solid rgba(13, 41, 64, 0.08);
  border-radius: 16px;

  transition:
    transform 0.3s ease,
    box-shadow 0.3s ease;
}

.review-card:hover {
  transform: translateY(-5px);

  box-shadow:
    0 20px 45px rgba(13, 41, 64, 0.08);
}


/* =========================================
   ESTRELLAS
========================================= */

.review-card__stars {
  margin-bottom: 22px;

  color: #c39a32;

  font-size: 0.9rem;
  letter-spacing: 3px;
}


/* =========================================
   TEXTO
========================================= */

.review-card__text {
  flex: 1;

  margin: 0 0 30px;

  color: #344653;

  font-family: "Cormorant Garamond", serif;
  font-size: 1.35rem;
  line-height: 1.5;
}


/* =========================================
   AUTOR
========================================= */

.review-card footer {
  display: flex;
  align-items: center;
  gap: 14px;
}

.review-avatar,
.review-avatar-img {
  width: 44px;
  height: 44px;

  flex-shrink: 0;

  border-radius: 50%;
}

.review-avatar-img {
  object-fit: cover;
}

.review-avatar {
  display: flex;
  align-items: center;
  justify-content: center;

  background: #0d2940;

  color: #ffffff;

  font-size: 0.9rem;
  font-weight: 600;
  text-transform: uppercase;
}

.review-author {
  display: flex;
  flex-direction: column;
  gap: 3px;
}

.review-author strong {
  color: #0d2940;

  font-size: 0.9rem;
}

.review-author span {
  color: #899199;

  font-size: 0.75rem;
}


/* =========================================
   ESTADOS
========================================= */

.reviews-status {
  padding: 50px 20px;

  color: #7b8389;

  text-align: center;
  font-size: 0.9rem;
}


/* =========================================
   BOTÓN GOOGLE
========================================= */

.reviews-actions {
  display: flex;
  justify-content: center;

  margin-top: 45px;
}

.reviews-google-link {
  display: inline-flex;
  align-items: center;
  gap: 10px;

  padding: 14px 22px;

  color: #0d2940;

  border: 1px solid rgba(13, 41, 64, 0.25);
  border-radius: 999px;

  font-size: 0.85rem;
  font-weight: 600;

  text-decoration: none;

  transition:
    background 0.25s ease,
    color 0.25s ease,
    border-color 0.25s ease;
}

.reviews-google-link:hover {
  background: #0d2940;
  color: #ffffff;
  border-color: #0d2940;
}


/* =========================================
   RESPONSIVE
========================================= */

@media (max-width: 950px) {

  .reviews-header {
    align-items: flex-start;
    flex-direction: column;
    gap: 35px;
  }

  .reviews-grid {
    grid-template-columns: repeat(2, 1fr);
  }

}


@media (max-width: 650px) {

  .reviews {
    padding: 80px 0;
  }

  .reviews-header {
    margin-bottom: 45px;
  }

  .reviews-header h2 {
    font-size: clamp(3rem, 14vw, 4.5rem);
  }

  .google-score {
    width: 100%;
    box-sizing: border-box;
  }

  .reviews-grid {
    grid-template-columns: 1fr;
  }

  .review-card {
    min-height: auto;
  }

}
</style>