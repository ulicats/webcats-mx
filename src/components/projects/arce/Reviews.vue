<template>
  <section id="opiniones" class="reviews-section">
    <div class="reviews-container">

      <div class="reviews-header">
        <div>

          <h2>
            Lo que dicen
            <span>nuestros huéspedes</span>
          </h2>
        </div>

        <div class="google-score">
          <strong>5.0</strong>

          <div>
            <div class="google-score__stars">
              ★★★★★
            </div>

            <p>
              53 opiniones en Google
            </p>
          </div>
        </div>
      </div>

      <div class="reviews-grid">
        <article
          v-for="review in reviews"
          :key="review.name"
          class="review-card"
        >
          <div class="review-card__stars">
            ★★★★★
          </div>

          <p class="review-card__text">
            “{{ review.text }}”
          </p>

          <footer>
            <div class="review-avatar">
              {{ review.name.charAt(0) }}
            </div>

            <div>
              <strong>{{ review.name }}</strong>
              <span>Opinión en Google</span>
            </div>
          </footer>
        </article>
      </div>

      <div class="reviews-note">
        Próximamente estas opiniones se cargarán directamente desde Google.
      </div>

    </div>
  </section>
</template>

<script setup>
const reviews = [
  {
    name: "Huésped",
    text:
      "Excelente lugar para descansar y disfrutar de la tranquilidad de Mazamitla.",
  },
  {
    name: "Visitante",
    text:
      "Un espacio muy agradable, rodeado de naturaleza y perfecto para desconectarse.",
  },
  {
    name: "Viajero",
    text:
      "La experiencia fue excelente. Las instalaciones y el entorno hacen que quieras regresar.",
  },
];
</script>

<style scoped>
.reviews-section {
  padding: 120px 0;
  background: var(--arce-cream);
}

.reviews-container {
  width: min(1180px, calc(100% - 40px));
  margin: 0 auto;
}

.reviews-header {
  margin-bottom: 55px;
  display: flex;
  align-items: flex-end;
  justify-content: space-between;
  gap: 40px;
}

.reviews-eyebrow {
  margin-bottom: 14px;
  color: var(--arce-gold);
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.25em;
  text-transform: uppercase;
}

.reviews-header h2 {
  color: var(--arce-navy-950);
  font-family: var(--arce-heading);
  font-size: clamp(48px, 6vw, 76px);
  font-weight: 500;
  line-height: 0.95;
}

.reviews-header h2 span {
  display: block;
  color: var(--arce-gold);
  font-style: italic;
}

.google-score {
  min-width: 245px;
  padding: 20px 24px;
  border: 1px solid rgba(19, 40, 58, 0.09);
  border-radius: 17px;
  display: flex;
  align-items: center;
  gap: 18px;
  background: var(--arce-white);
}

.google-score strong {
  color: var(--arce-navy-950);
  font-family: var(--arce-heading);
  font-size: 46px;
}

.google-score__stars {
  color: var(--arce-gold);
  letter-spacing: 2px;
}

.google-score p {
  margin-top: 4px;
  color: var(--arce-muted);
  font-size: 11px;
}

.reviews-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}

.review-card {
  min-height: 300px;
  padding: 30px;
  border: 1px solid rgba(19, 40, 58, 0.08);
  border-radius: 20px;
  display: flex;
  flex-direction: column;
  background: var(--arce-white);
  box-shadow: 0 15px 35px rgba(19, 40, 58, 0.06);
}

.review-card__stars {
  color: var(--arce-gold);
  letter-spacing: 3px;
}

.review-card__text {
  margin-top: 24px;
  color: var(--arce-navy-900);
  font-family: var(--arce-heading);
  font-size: 24px;
  line-height: 1.4;
}

.review-card footer {
  margin-top: auto;
  padding-top: 30px;
  display: flex;
  align-items: center;
  gap: 12px;
}

.review-avatar {
  width: 42px;
  height: 42px;
  border-radius: 50%;
  display: grid;
  place-items: center;
  color: var(--arce-white);
  background: var(--arce-navy-900);
  font-weight: 700;
}

.review-card footer div:last-child {
  display: flex;
  flex-direction: column;
}

.review-card footer strong {
  color: var(--arce-navy-950);
  font-size: 12px;
}

.review-card footer span {
  margin-top: 3px;
  color: var(--arce-muted);
  font-size: 10px;
}

.reviews-note {
  margin-top: 25px;
  color: var(--arce-muted);
  font-size: 10px;
  text-align: center;
}

@media (max-width: 900px) {
  .reviews-header {
    align-items: flex-start;
    flex-direction: column;
  }

  .reviews-grid {
    grid-template-columns: 1fr;
  }

  .review-card {
    min-height: 250px;
  }
}

@media (max-width: 600px) {
  .reviews-section {
    padding: 85px 0;
  }

  .reviews-container {
    width: min(100% - 28px, 1180px);
  }

  .google-score {
    width: 100%;
  }

  .review-card {
    padding: 24px;
  }
}
</style>