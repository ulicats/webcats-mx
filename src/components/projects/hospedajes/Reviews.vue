<template>
  <section id="opiniones" class="reviews">
    <div class="reviews-container">

      <!-- ENCABEZADO -->
      <div class="reviews-header">
        <div class="reviews-heading">
          <p class="reviews-eyebrow">
            Integración con Google
          </p>

          <h2>
            Tus clientes hablan,
            <span>nosotros lo mostramos</span>
          </h2>

          <p class="reviews-description">
            Podemos sincronizar las reseñas de tu negocio en Google
            y mostrarlas directamente en tu página.
            Se verían más o menos así:
          </p>
        </div>

        <!-- EJEMPLO DE PUNTUACIÓN -->
        <div class="google-score">
          <strong>5.0</strong>

          <div>
            <div class="google-score__stars">
              <span
                v-for="star in 5"
                :key="star"
              >
                ★
              </span>
            </div>

            <p>
              Reseñas sincronizadas con Google
            </p>
          </div>
        </div>
      </div>


      <!-- RESEÑAS DEMO -->
      <div class="reviews-grid">

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

            <div class="review-avatar">
              {{ review.name.charAt(0) }}
            </div>

            <div class="review-author">
              <strong>
                {{ review.name }}
              </strong>

              <span>
                {{ review.date }}
              </span>
            </div>

          </footer>
        </article>

      </div>


      <!-- AVISO DEMO -->
      <div class="reviews-demo">

        <p>
          Estas reseñas son de mentiritas,
          nomás para que veas cómo se verían las opiniones
          reales de tus clientes aquí.
        </p>
      </div>

    </div>
  </section>
</template>


<script setup>
const reviews = [
  {
    name: "Carlos M.",
    rating: 5,
    text:
      "Está bien a toda madre, me la pasé bien a gusto. Definitivamente voy a volver.",
    date:
      "Reseña de demostración"
  },

  {
    name: "Andrea R.",
    rating: 5,
    text:
      "Nos acomodamos rápido, pusimos música y empezó la fiesta bien a gusto. Muy bonito el lugar.",
    date:
      "Reseña de demostración"
  },

  {
    name: "Miguel A.",
    rating: 5,
    text:
      "Todo muy cómodo y tranquilo. Descansamos bastante, el lugar estaba muy bonito y sí volveríamos.",
    date:
      "Reseña de demostración"
  }
];
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

.reviews-heading {
  max-width: 720px;
}

.reviews-eyebrow {
  margin: 0 0 16px;

  color: #c39a32;

  font-size: 0.72rem;
  font-weight: 700;

  letter-spacing: 0.2em;
  text-transform: uppercase;
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

.reviews-description {
  max-width: 650px;

  margin: 28px 0 0;

  color: #6d7680;

  font-size: 0.9rem;
  line-height: 1.8;
}


/* =========================================
   GOOGLE SCORE DEMO
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
  max-width: 180px;

  margin: 5px 0 0;

  color: #6d7680;

  font-size: 0.8rem;
  line-height: 1.4;
}


/* =========================================
   GRID
========================================= */

.reviews-grid {
  display: grid;

  grid-template-columns:
    repeat(3, 1fr);

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

  border:
    1px solid
    rgba(13, 41, 64, 0.08);

  border-radius: 16px;

  transition:
    transform 0.3s ease,
    box-shadow 0.3s ease;
}

.review-card:hover {
  transform:
    translateY(-5px);

  box-shadow:
    0 20px 45px
    rgba(13, 41, 64, 0.08);
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

  font-family:
    "Cormorant Garamond",
    serif;

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

.review-avatar {
  width: 44px;
  height: 44px;

  flex-shrink: 0;

  display: flex;
  align-items: center;
  justify-content: center;

  border-radius: 50%;

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
   AVISO DEMO
========================================= */

.reviews-demo {
  max-width: 700px;

  display: flex;
  align-items: center;
  justify-content: center;

  gap: 10px;

  margin: 45px auto 0;

  padding: 15px 20px;

  color: #6d7680;

  background:
    rgba(195, 154, 50, 0.08);

  border:
    1px solid
    rgba(195, 154, 50, 0.18);

  border-radius: 12px;

  text-align: center;
}

.reviews-demo span {
  flex-shrink: 0;

  color: #c39a32;

  font-size: 1rem;
}

.reviews-demo p {
  margin: 0;

  font-size: 0.78rem;
  line-height: 1.6;
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
    grid-template-columns:
      repeat(2, 1fr);
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
    font-size:
      clamp(3rem, 14vw, 4.5rem);
  }

  .reviews-description {
    font-size: 0.85rem;
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

  .reviews-demo {
    align-items: flex-start;

    text-align: left;
  }

}
</style>