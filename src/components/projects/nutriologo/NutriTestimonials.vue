<script setup>
const testimonials = [
  {
    name: "Mariana G.",
    goal: "Control de peso",
    text: "Por primera vez sentí que estaba siguiendo un plan que realmente podía mantener. No tuve que dejar de comer todo lo que me gusta.",
  },
  {
    name: "Carlos R.",
    goal: "Nutrición deportiva",
    text: "Me ayudó mucho a ordenar mi alimentación alrededor de mis entrenamientos. Noté mejor recuperación y más energía.",
  },
  {
    name: "Andrea M.",
    goal: "Hábitos saludables",
    text: "Lo que más me gustó fue aprender a tomar mejores decisiones sin sentir que estaba viviendo a dieta.",
  },
];
</script>

<template>
  <section class="nutri-testimonials">
    <div class="nutri-testimonials__container">

      <div class="nutri-testimonials__heading">
        <span>
          Opiniones
        </span>

        <h2>
          Cambios que también
          <strong>se sienten.</strong>
        </h2>

        <p>
          La mejor estrategia es aquella que puedes integrar
          realmente a tu vida.
        </p>
      </div>

      <div class="nutri-testimonials__grid">

        <article
          v-for="testimonial in testimonials"
          :key="testimonial.name"
          class="nutri-testimonials__card"
        >
          <div class="nutri-testimonials__stars">
            ★★★★★
          </div>

          <blockquote>
            “{{ testimonial.text }}”
          </blockquote>

          <div class="nutri-testimonials__person">
            <div class="nutri-testimonials__avatar">
              {{ testimonial.name.charAt(0) }}
            </div>

            <div>
              <strong>
                {{ testimonial.name }}
              </strong>

              <span>
                {{ testimonial.goal }}
              </span>
            </div>
          </div>
        </article>

      </div>

    </div>
  </section>
</template>

<style scoped>
.nutri-testimonials {
  padding: 120px 0;

  background:
    linear-gradient(
      135deg,
      var(--nutri-bg),
      var(--nutri-soft)
    );
}

.nutri-testimonials__container {
  width: min(1180px, calc(100% - 40px));
  margin: 0 auto;
}

.nutri-testimonials__heading {
  max-width: 650px;
  margin-bottom: 60px;
}

.nutri-testimonials__heading > span {
  display: block;

  margin-bottom: 15px;

  color: var(--nutri-primary);

  font-size: 12px;
  font-weight: 700;
  letter-spacing: 1.6px;
  text-transform: uppercase;
}

.nutri-testimonials h2 {
  margin: 0;

  color: var(--nutri-text);

  font-size: clamp(40px, 5vw, 60px);
  line-height: 1.05;
  letter-spacing: -2px;
}

.nutri-testimonials h2 strong {
  color: var(--nutri-primary);
}

.nutri-testimonials__heading p {
  margin: 23px 0 0;

  color: var(--nutri-text-soft);

  font-size: 15px;
  line-height: 1.8;
}

/* =========================
   GRID
========================= */

.nutri-testimonials__grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}

.nutri-testimonials__card {
  min-height: 330px;

  display: flex;
  flex-direction: column;

  padding: 34px;

  border: 1px solid rgba(255, 255, 255, 0.7);
  border-radius: 24px;

  background: rgba(255, 255, 255, 0.78);

  box-shadow: 0 18px 45px rgba(36, 72, 58, 0.07);

  backdrop-filter: blur(10px);

  transition: transform 0.3s ease;
}

.nutri-testimonials__card:hover {
  transform: translateY(-6px);
}

.nutri-testimonials__stars {
  color: var(--nutri-primary);

  font-size: 15px;
  letter-spacing: 3px;
}

.nutri-testimonials blockquote {
  margin: 28px 0 35px;

  color: var(--nutri-text);

  font-size: 17px;
  line-height: 1.7;
}

.nutri-testimonials__person {
  display: flex;
  align-items: center;
  gap: 13px;

  margin-top: auto;
}

.nutri-testimonials__avatar {
  width: 44px;
  height: 44px;

  display: grid;
  place-items: center;

  border-radius: 50%;

  background: var(--nutri-primary);
  color: var(--nutri-white);

  font-size: 15px;
  font-weight: 700;
}

.nutri-testimonials__person > div:last-child {
  display: flex;
  flex-direction: column;
  gap: 3px;
}

.nutri-testimonials__person strong {
  color: var(--nutri-text);

  font-size: 13px;
}

.nutri-testimonials__person span {
  color: var(--nutri-text-soft);

  font-size: 11px;
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 900px) {
  .nutri-testimonials {
    padding: 90px 0;
  }

  .nutri-testimonials__grid {
    grid-template-columns: 1fr;
  }

  .nutri-testimonials__card {
    min-height: 280px;
  }
}

@media (max-width: 520px) {
  .nutri-testimonials {
    padding: 70px 0;
  }

  .nutri-testimonials__container {
    width: calc(100% - 28px);
  }

  .nutri-testimonials__card {
    padding: 28px;
  }

  .nutri-testimonials blockquote {
    font-size: 16px;
  }
}
</style>