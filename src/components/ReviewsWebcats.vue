<template>
  <section class="reviews-webcats">
    <div class="reviews-container">

      <!-- ENCABEZADO -->
      <div class="reviews-heading">

        <div class="reviews-heading__content">
          <p class="reviews-kicker">
            &gt; google_reviews --live
          </p>

          <h2>
            Lo que dicen <span>nuestros clientes</span>
          </h2>

          <p class="reviews-description">
            Opiniones reales publicadas en Google sobre Webcats.mx.
          </p>
        </div>

        <!-- PUNTUACIÓN GENERAL -->
        <a
          v-if="googleMapsUri"
          :href="googleMapsUri"
          target="_blank"
          rel="noopener noreferrer"
          class="google-summary"
        >
          <div class="google-summary__score">
            {{ rating.toFixed(1) }}
          </div>

          <div>
            <div class="google-summary__stars">
              ★★★★★
            </div>

            <p>
              {{ totalReviews }}
              {{ totalReviews === 1 ? "opinión" : "opiniones" }}
              en Google
            </p>
          </div>
        </a>

      </div>

      <!-- CARGANDO -->
      <div
        v-if="loading"
        class="reviews-status"
      >
        <span class="terminal-cursor">&gt;</span>
        cargando reseñas de Google...
      </div>

      <!-- ERROR -->
      <div
        v-else-if="errorMessage"
        class="reviews-status reviews-status--error"
      >
        <span class="terminal-cursor">&gt;</span>
        {{ errorMessage }}
      </div>

      <!-- RESEÑAS -->
      <div
        v-else-if="reviews.length"
        class="reviews-grid"
      >
        <article
          v-for="review in reviews"
          :key="review.name"
          class="review-card"
        >

          <!-- AUTOR -->
          <div class="review-card__top">

            <div class="review-author">

              <div class="review-avatar-wrapper">

                <img
                  v-if="
                    review.authorAttribution?.photoUri &&
                    !failedImages[review.name]
                  "
                  :src="review.authorAttribution.photoUri"
                  :alt="review.authorAttribution.displayName"
                  class="review-avatar"
                  referrerpolicy="no-referrer"
                  @error="handleImageError(review.name)"
                />

                <div
                  v-else
                  class="review-avatar review-avatar--fallback"
                >
                  {{
                    review.authorAttribution?.displayName
                      ?.charAt(0)
                      ?.toUpperCase() || "W"
                  }}
                </div>

              </div>

              <div class="review-author__data">

                <strong>
                  {{ review.authorAttribution?.displayName || "Cliente" }}
                </strong>

                <span>
                  Opinión en Google
                </span>

              </div>

            </div>

            <div class="google-badge">
              G
            </div>

          </div>

          <!-- ESTRELLAS -->
          <div class="review-card__stars">
            <span
              v-for="star in 5"
              :key="star"
              :class="{ inactive: star > review.rating }"
            >
              ★
            </span>
          </div>

          <!-- TEXTO -->
          <p class="review-card__text">
            “{{ getReviewText(review) }}”
          </p>

          <!-- FOOTER CARD -->
          <div class="review-card__footer">

            <span>
              {{ review.relativePublishTimeDescription || "Google" }}
            </span>

            <a
              v-if="review.googleMapsUri"
              :href="review.googleMapsUri"
              target="_blank"
              rel="noopener noreferrer"
            >
              ver reseña ↗
            </a>

          </div>

        </article>
      </div>

      <!-- BOTÓN GOOGLE -->
      <div
        v-if="!loading && !errorMessage"
        class="reviews-bottom"
      >
        <a
          v-if="googleMapsUri"
          :href="googleMapsUri"
          target="_blank"
          rel="noopener noreferrer"
          class="reviews-google-link"
        >
          &gt; ver --reseñas-google
        </a>
      </div>

    </div>
  </section>
</template>

<script setup>
import { reactive, ref, onMounted } from "vue"
import { getWebcatsPlace } from "../services/webcatsPlaces.js"

const reviews = ref([])
const rating = ref(0)
const totalReviews = ref(0)
const googleMapsUri = ref("")

const loading = ref(true)
const errorMessage = ref("")

const failedImages = reactive({})

function handleImageError(reviewName) {
  failedImages[reviewName] = true
}

function getReviewText(review) {
  return (
    review.originalText?.text ||
    review.text?.text ||
    "Sin comentario."
  )
}

onMounted(async () => {
  try {

    const place = await getWebcatsPlace()

    rating.value = Number(place.rating || 0)
    totalReviews.value = Number(place.userRatingCount || 0)
    googleMapsUri.value = place.googleMapsUri || ""

    /*
      Mostramos únicamente reseñas positivas
      y un máximo de 4 testimonios.

      Esto NO elimina ni modifica reseñas de Google.
      Solamente controla cuáles aparecen en Webcats.
    */

    reviews.value = (place.reviews || [])
      .filter(review => review.rating >= 4)
      .slice(0, 4)

  } catch (error) {

    console.error(
      "Error cargando reseñas de Webcats:",
      error
    )

    errorMessage.value =
      "No fue posible cargar las opiniones de Google."

  } finally {

    loading.value = false

  }
})
</script>

<style scoped>
/* =========================================================
   SECCIÓN
========================================================= */

.reviews-webcats {
  position: relative;
  width: 100%;

  padding: 75px 24px;

  overflow: hidden;

  background:
    radial-gradient(
      circle at 50% 0%,
      rgba(250, 204, 21, 0.055),
      transparent 38%
    ),
    #0d0d0f;

  border-top:
    1px solid rgba(255, 255, 255, 0.08);

  border-bottom:
    1px solid rgba(255, 255, 255, 0.08);
}

.reviews-container {
  width: 100%;
  max-width: 1180px;
  margin: 0 auto;
}


/* =========================================================
   HEADER
========================================================= */

.reviews-heading {
  display: flex;

  align-items: flex-end;
  justify-content: space-between;

  gap: 40px;

  margin-bottom: 42px;
}

.reviews-heading__content {
  max-width: 720px;
}

.reviews-kicker {
  margin: 0 0 12px;

  color: #22c55e;

  font-family:
    "JetBrains Mono",
    monospace;

  font-size: 0.78rem;
  font-weight: 700;

  letter-spacing: 0.08em;
}


/* =========================================================
   TÍTULO
========================================================= */

.reviews-heading h2 {
  margin: 0;

  color: #ffffff;

  font-size: clamp(
    2rem,
    3vw,
    2.5rem
  );

  font-weight: 800;

  line-height: 1.15;
}

.reviews-heading h2 span {
  color: #facc15;
}

.reviews-description {
  max-width: 600px;

  margin: 15px 0 0;

  color: #9ca3af;

  font-family:
    "JetBrains Mono",
    monospace;

  font-size: 0.9rem;

  line-height: 1.7;
}


/* =========================================================
   GOOGLE SCORE
========================================================= */

.google-summary {
  flex-shrink: 0;

  min-width: 270px;

  display: flex;

  align-items: center;

  gap: 20px;

  padding: 18px 22px;

  border:
    1px solid rgba(250, 204, 21, 0.35);

  border-radius: 16px;

  background:
    rgba(24, 24, 27, 0.82);

  transition:
    transform 0.25s ease,
    border-color 0.25s ease,
    box-shadow 0.25s ease;
}

.google-summary:hover {
  transform: translateY(-3px);

  border-color: #facc15;

  box-shadow:
    0 10px 35px
    rgba(0, 0, 0, 0.35);
}

.google-summary__score {
  color: #ffffff;

  font-family:
    "JetBrains Mono",
    monospace;

  font-size: 2rem;

  font-weight: 800;

  line-height: 1;
}

.google-summary__stars {
  color: #facc15;

  font-size: 0.95rem;

  letter-spacing: 2px;
}

.google-summary p {
  margin: 5px 0 0;

  color: #9ca3af;

  font-family:
    "JetBrains Mono",
    monospace;

  font-size: 0.7rem;
}


/* =========================================================
   GRID
========================================================= */

.reviews-grid {
  display: grid;

  grid-template-columns:
    repeat(2, minmax(0, 1fr));

  gap: 22px;
}


/* =========================================================
   CARD
========================================================= */

.review-card {
  position: relative;

  display: flex;
  flex-direction: column;

  min-height: 300px;

  padding: 26px;

  overflow: hidden;

  border:
    1px solid
    rgba(255, 255, 255, 0.12);

  border-radius: 18px;

  background:
    linear-gradient(
      145deg,
      rgba(28, 28, 32, 0.96),
      rgba(13, 13, 15, 0.96)
    );

  box-shadow:
    0 18px 45px
    rgba(0, 0, 0, 0.3);

  transition:
    transform 0.3s ease,
    border-color 0.3s ease,
    box-shadow 0.3s ease;
}

.review-card::before {
  content: "";

  position: absolute;

  top: 0;
  left: 0;

  width: 85px;
  height: 2px;

  background: #facc15;
}

.review-card:hover {
  transform: translateY(-5px);

  border-color:
    rgba(250, 204, 21, 0.4);

  box-shadow:
    0 0 20px
      rgba(250, 204, 21, 0.07),
    0 25px 55px
      rgba(0, 0, 0, 0.45);
}


/* =========================================================
   AUTOR
========================================================= */

.review-card__top {
  display: flex;

  align-items: center;
  justify-content: space-between;

  gap: 15px;
}

.review-author {
  display: flex;

  align-items: center;

  gap: 13px;

  min-width: 0;
}

.review-avatar-wrapper {
  width: 48px;
  height: 48px;

  flex-shrink: 0;
}

.review-avatar {
  width: 48px;
  height: 48px;

  border-radius: 50%;

  object-fit: cover;

  border:
    2px solid
    rgba(250, 204, 21, 0.75);

  background: #18181b;
}

.review-avatar--fallback {
  display: flex;

  align-items: center;
  justify-content: center;

  color: #facc15;

  font-family:
    "JetBrains Mono",
    monospace;

  font-size: 1rem;

  font-weight: 800;
}

.review-author__data {
  min-width: 0;
}

.review-author strong {
  display: block;

  overflow: hidden;

  color: #ffffff;

  font-family:
    "JetBrains Mono",
    monospace;

  font-size: 0.88rem;

  text-overflow: ellipsis;

  white-space: nowrap;
}

.review-author span {
  display: block;

  margin-top: 4px;

  color: #6b7280;

  font-family:
    "JetBrains Mono",
    monospace;

  font-size: 0.67rem;
}


/* =========================================================
   GOOGLE BADGE
========================================================= */

.google-badge {
  width: 31px;
  height: 31px;

  flex-shrink: 0;

  display: flex;

  align-items: center;
  justify-content: center;

  border-radius: 50%;

  background: #ffffff;

  color: #4285f4;

  font-family:
    Arial,
    sans-serif;

  font-size: 1rem;

  font-weight: 900;
}


/* =========================================================
   STARS
========================================================= */

.review-card__stars {
  margin-top: 22px;

  color: #facc15;

  font-size: 1rem;

  letter-spacing: 3px;
}

.review-card__stars .inactive {
  color: #3f3f46;
}


/* =========================================================
   TEXTO
========================================================= */

.review-card__text {
  flex: 1;

  margin:
    18px 0
    26px;

  color: #d1d5db;

  font-family:
    "JetBrains Mono",
    monospace;

  font-size: 0.9rem;

  line-height: 1.75;
}


/* =========================================================
   CARD FOOTER
========================================================= */

.review-card__footer {
  display: flex;

  align-items: center;
  justify-content: space-between;

  gap: 15px;

  padding-top: 16px;

  border-top:
    1px solid
    rgba(255, 255, 255, 0.07);

  font-family:
    "JetBrains Mono",
    monospace;

  font-size: 0.65rem;
}

.review-card__footer span {
  color: #71717a;
}

.review-card__footer a {
  color: #22c55e;

  transition:
    color 0.2s ease;
}

.review-card__footer a:hover {
  color: #4ade80;
}


/* =========================================================
   ESTADOS
========================================================= */

.reviews-status {
  padding: 40px 0;

  color: #9ca3af;

  font-family:
    "JetBrains Mono",
    monospace;

  text-align: center;
}

.reviews-status--error {
  color: #f87171;
}

.terminal-cursor {
  margin-right: 7px;

  color: #22c55e;
}


/* =========================================================
   BOTÓN GOOGLE
========================================================= */

.reviews-bottom {
  margin-top: 35px;

  text-align: center;
}

.reviews-google-link {
  display: inline-flex;

  align-items: center;

  padding:
    13px 22px;

  border:
    1px solid
    rgba(250, 204, 21, 0.35);

  border-radius: 12px;

  color: #facc15;

  font-family:
    "JetBrains Mono",
    monospace;

  font-size: 0.8rem;

  font-weight: 700;

  transition:
    background 0.25s ease,
    border-color 0.25s ease,
    transform 0.25s ease;
}

.reviews-google-link:hover {
  transform:
    translateY(-2px);

  border-color:
    #facc15;

  background:
    rgba(250, 204, 21, 0.08);
}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 950px) {

  .reviews-heading {
    align-items:
      flex-start;

    flex-direction:
      column;
  }

  .google-summary {
    min-width: 0;
  }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 720px) {

  .reviews-grid {
    grid-template-columns: 1fr;
  }

}


@media (max-width: 600px) {

  .reviews-webcats {
    padding:
      60px 18px;
  }

  .reviews-heading {
    margin-bottom:
      30px;
  }

  .reviews-heading h2 {
    font-size:
      2rem;
  }

  .google-summary {
    width: 100%;
  }

  .review-card {
    padding:
      22px;

    min-height:
      auto;
  }

  .review-card__footer {
    align-items:
      flex-start;

    flex-direction:
      column;
  }

}
</style>