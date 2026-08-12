<template>
  <section class="reviews-section">

    <div class="reviews-heading">

      <div>
        <span class="section-kicker">
          Opiniones
        </span>

        <h2>
          La calidad también
          <span>se refleja.</span>
        </h2>
      </div>

      <div class="reviews-score">
        <strong>5.0</strong>

        <div>
          <span>★★★★★</span>
          <small>Reseñas demostrativas</small>
        </div>
      </div>

    </div>


    <div class="reviews-grid">

      <article
        v-for="(review, index) in reviews"
        :key="review.name"
        class="review-panel"
      >
        <div class="review-panel__top">
          <span>
            {{ String(index + 1).padStart(2, '0') }}
          </span>

          <strong>★★★★★</strong>
        </div>

        <blockquote>
          “{{ review.text }}”
        </blockquote>

        <div class="review-panel__author">
          <div class="review-panel__avatar">
            {{ review.initials }}
          </div>

          <div>
            <strong>{{ review.name }}</strong>
            <span>{{ review.project }}</span>
          </div>
        </div>

      </article>

    </div>

    <p class="reviews-disclaimer">
      Contenido ilustrativo utilizado únicamente para esta demostración.
    </p>

  </section>
</template>


<script setup>
const reviews = [
  {
    name: 'Cliente residencial',
    initials: 'CR',
    project: 'Cancel de baño',
    text:
      'El proyecto quedó limpio, moderno y se adaptó perfectamente al espacio.',
  },
  {
    name: 'Proyecto comercial',
    initials: 'PC',
    project: 'Cancelería',
    text:
      'La propuesta permitió aprovechar mejor la iluminación y dividir el espacio sin perder amplitud.',
  },
  {
    name: 'Proyecto arquitectónico',
    initials: 'PA',
    project: 'Barandal de cristal',
    text:
      'El acabado se integró muy bien con el diseño general y logró una apariencia mucho más ligera.',
  },
]
</script>


<style scoped>
.reviews-section {
  padding: 120px 5vw;

  background: #111416;
}

.reviews-heading {
  width: min(100%, 1500px);

  margin: 0 auto 60px;

  display: flex;

  align-items: flex-end;

  justify-content: space-between;

  gap: 50px;
}

.section-kicker {
  display: block;

  margin-bottom: 18px;

  color: var(--glass-blue, #4ea7c4);

  font-size: 0.7rem;

  font-weight: 700;

  letter-spacing: 0.18em;

  text-transform: uppercase;
}

.reviews-heading h2 {
  margin: 0;

  color: #ffffff;

  font-size:
    clamp(2.8rem, 5vw, 5.4rem);

  font-weight: 500;

  line-height: 0.98;

  letter-spacing: -0.05em;
}

.reviews-heading h2 span {
  display: block;

  color:
    rgba(255, 255, 255, 0.38);
}

.reviews-score {
  display: flex;

  align-items: center;

  gap: 20px;
}

.reviews-score > strong {
  color: #ffffff;

  font-size: 3rem;

  font-weight: 400;
}

.reviews-score div {
  display: flex;

  flex-direction: column;

  gap: 7px;
}

.reviews-score div span {
  color: #ffffff;

  letter-spacing: 0.12em;
}

.reviews-score small {
  color:
    rgba(255, 255, 255, 0.4);

  font-size: 0.67rem;

  letter-spacing: 0.1em;

  text-transform: uppercase;
}

.reviews-grid {
  width: min(100%, 1500px);

  margin: 0 auto;

  display: grid;

  grid-template-columns:
    repeat(3, 1fr);

  gap: 5px;

  padding: 5px;

  background: #282e31;
}

.review-panel {
  min-height: 380px;

  padding: 34px;

  display: flex;

  flex-direction: column;

  background:
    linear-gradient(
      145deg,
      #f1f5f6,
      #dce6e9
    );
}

.review-panel__top {
  display: flex;

  align-items: center;

  justify-content: space-between;
}

.review-panel__top > span {
  color: #89969b;

  font-size: 0.64rem;

  font-weight: 700;

  letter-spacing: 0.15em;
}

.review-panel__top strong {
  color:
    var(--glass-blue, #4ea7c4);

  font-size: 0.72rem;

  letter-spacing: 0.1em;
}

.review-panel blockquote {
  margin: auto 0;

  color: #253136;

  font-size: 1.2rem;

  line-height: 1.65;
}

.review-panel__author {
  display: flex;

  align-items: center;

  gap: 14px;

  padding-top: 22px;

  border-top:
    1px solid rgba(17, 20, 22, 0.13);
}

.review-panel__avatar {
  width: 42px;

  height: 42px;

  display: flex;

  align-items: center;

  justify-content: center;

  background: #111416;

  color: #ffffff;

  font-size: 0.7rem;

  font-weight: 700;
}

.review-panel__author > div:last-child {
  display: flex;

  flex-direction: column;

  gap: 4px;
}

.review-panel__author strong {
  color: #111416;

  font-size: 0.82rem;

  font-weight: 600;
}

.review-panel__author span {
  color: #7c898e;

  font-size: 0.68rem;

  text-transform: uppercase;

  letter-spacing: 0.08em;
}

.reviews-disclaimer {
  width: min(100%, 1500px);

  margin: 20px auto 0;

  color:
    rgba(255, 255, 255, 0.28);

  font-size: 0.66rem;

  text-align: right;
}

@media (max-width: 900px) {
  .reviews-section {
    padding: 90px 5vw;
  }

  .reviews-heading {
    flex-direction: column;

    align-items: flex-start;
  }

  .reviews-grid {
    grid-template-columns: 1fr;
  }

  .review-panel {
    min-height: 300px;
  }
}

@media (max-width: 600px) {
  .reviews-section {
    padding: 75px 20px;
  }

  .reviews-heading h2 {
    font-size:
      clamp(2.6rem, 12vw, 4rem);
  }

  .reviews-score > strong {
    font-size: 2.4rem;
  }

  .reviews-grid {
    gap: 3px;

    padding: 3px;
  }

  .review-panel {
    padding: 26px;

    min-height: 290px;
  }

  .review-panel blockquote {
    font-size: 1.05rem;
  }
}
</style>