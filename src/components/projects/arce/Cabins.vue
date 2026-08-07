<template>
  <section id="cabanas" class="cabins-section">
    <div class="cabins-container">
      <div class="cabins-heading">
        <p class="cabins-eyebrow">Hospedaje en Mazamitla</p>

        <div class="cabins-heading__grid">
          <h2>
            Tres espacios para
            <span>descansar de verdad</span>
          </h2>

          <p>
            Cada cabaña está rodeada por el bosque y diseñada para disfrutar la
            tranquilidad, la vista y el clima de Mazamitla.
          </p>
        </div>
      </div>

      <div class="cabins-grid">
        <article
          v-for="cabin in cabins"
          :key="cabin.id"
          class="cabin-card"
        >
          <div class="cabin-card__image">
            <img
              :src="cabin.image"
              :alt="cabin.title"
            />

            <span class="cabin-card__number">
              0{{ cabin.id }}
            </span>

            <div class="cabin-card__overlay"></div>
          </div>

          <div class="cabin-card__content">
            <div>
              <p class="cabin-card__label">Cabaña privada</p>
              <h3>{{ cabin.title }}</h3>
            </div>

            <p class="cabin-card__description">
              {{ cabin.description }}
            </p>

            <div class="cabin-card__features">
              <span>{{ cabin.capacity }}</span>
              <span>{{ cabin.bed }}</span>
              <span>{{ cabin.view }}</span>
            </div>

            <a href="#reservar" class="cabin-card__link">
              Ver detalles
              <span aria-hidden="true">→</span>
            </a>
          </div>
        </article>
      </div>
    </div>
  </section>
</template>

<script setup>
import cabinOne from "../../../assets/projects/arce/cabins/cabin-1.jpg";
import cabinTwo from "../../../assets/projects/arce/cabins/cabin-2.jpg";
import cabinThree from "../../../assets/projects/arce/cabins/cabin-3.jpg";

const cabins = [
  {
    id: 1,
    title: "Cabaña Arce",
    image: cabinOne,
    description:
      "Un espacio cálido para descansar en pareja, con interiores de madera y una vista privilegiada hacia el bosque.",
    capacity: "2–4 huéspedes",
    bed: "Cama matrimonial",
    view: "Vista al bosque",
  },
  {
    id: 2,
    title: "Cabaña Bosque",
    image: cabinTwo,
    description:
      "Diseñada para disfrutar noches tranquilas, privacidad y la atmósfera natural de Mazamitla.",
    capacity: "2–4 huéspedes",
    bed: "Sofá cama",
    view: "Terraza privada",
  },
  {
    id: 3,
    title: "Cabaña Mirador",
    image: cabinThree,
    description:
      "Una experiencia rodeada de pinos, ideal para desconectarse y contemplar el paisaje desde la terraza.",
    capacity: "2–4 huéspedes",
    bed: "Espacio equipado",
    view: "Entorno natural",
  },
];
</script>

<style scoped>
.cabins-section {
  position: relative;
  padding: 120px 0;
  background: var(--arce-cream);
}

.cabins-container {
  width: min(1180px, calc(100% - 40px));
  margin: 0 auto;
}

.cabins-heading {
  margin-bottom: 58px;
}

.cabins-eyebrow {
  margin-bottom: 18px;
  color: var(--arce-gold);
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.25em;
  text-transform: uppercase;
}

.cabins-heading__grid {
  display: grid;
  grid-template-columns: minmax(0, 1.35fr) minmax(280px, 0.65fr);
  gap: 70px;
  align-items: end;
}

.cabins-heading h2 {
  max-width: 760px;
  color: var(--arce-navy-950);
  font-family: var(--arce-heading);
  font-size: clamp(48px, 6vw, 82px);
  font-weight: 500;
  line-height: 0.95;
  letter-spacing: -0.035em;
}

.cabins-heading h2 span {
  display: block;
  color: var(--arce-gold);
  font-style: italic;
}

.cabins-heading__grid > p {
  color: var(--arce-muted);
  font-size: 15px;
  line-height: 1.8;
}

.cabins-grid {
  display: grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: 24px;
}

.cabin-card {
  overflow: hidden;
  border: 1px solid rgba(19, 40, 58, 0.08);
  border-radius: 22px;
  background: var(--arce-white);
  box-shadow: 0 16px 42px rgba(19, 40, 58, 0.08);
  transition:
    transform 0.3s ease,
    box-shadow 0.3s ease;
}

.cabin-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 24px 54px rgba(19, 40, 58, 0.14);
}

.cabin-card__image {
  position: relative;
  height: 430px;
  overflow: hidden;
}

.cabin-card__image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.55s ease;
}

.cabin-card:hover .cabin-card__image img {
  transform: scale(1.05);
}

.cabin-card__overlay {
  position: absolute;
  inset: 0;
  background:
    linear-gradient(
      180deg,
      rgba(19, 40, 58, 0.04),
      rgba(19, 40, 58, 0.3)
    );
}

.cabin-card__number {
  position: absolute;
  top: 20px;
  left: 20px;
  z-index: 2;
  width: 48px;
  height: 48px;
  border: 1px solid rgba(255, 255, 255, 0.7);
  border-radius: 50%;
  display: grid;
  place-items: center;
  color: var(--arce-white);
  font-family: var(--arce-heading);
  font-size: 19px;
  background: rgba(19, 40, 58, 0.36);
  backdrop-filter: blur(10px);
}

.cabin-card__content {
  padding: 28px;
}

.cabin-card__label {
  margin-bottom: 6px;
  color: var(--arce-gold);
  font-size: 10px;
  font-weight: 700;
  letter-spacing: 0.18em;
  text-transform: uppercase;
}

.cabin-card h3 {
  color: var(--arce-navy-950);
  font-family: var(--arce-heading);
  font-size: 36px;
  font-weight: 600;
  line-height: 1;
}

.cabin-card__description {
  margin-top: 18px;
  color: var(--arce-muted);
  font-size: 14px;
  line-height: 1.75;
}

.cabin-card__features {
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
  margin-top: 22px;
}

.cabin-card__features span {
  padding: 8px 11px;
  border-radius: 999px;
  color: var(--arce-navy-900);
  font-size: 10px;
  font-weight: 600;
  background: rgba(181, 154, 59, 0.12);
}

.cabin-card__link {
  margin-top: 26px;
  display: inline-flex;
  align-items: center;
  gap: 10px;
  color: var(--arce-navy-950);
  font-size: 12px;
  font-weight: 700;
  letter-spacing: 0.04em;
}

.cabin-card__link span {
  color: var(--arce-gold);
  font-size: 18px;
  transition: transform 0.2s ease;
}

.cabin-card__link:hover span {
  transform: translateX(5px);
}

@media (max-width: 980px) {
  .cabins-heading__grid {
    grid-template-columns: 1fr;
    gap: 25px;
  }

  .cabins-heading__grid > p {
    max-width: 650px;
  }

  .cabins-grid {
    grid-template-columns: 1fr 1fr;
  }

  .cabin-card:last-child {
    grid-column: 1 / -1;
  }
}

@media (max-width: 680px) {
  .cabins-section {
    padding: 85px 0;
  }

  .cabins-container {
    width: min(100% - 28px, 1180px);
  }

  .cabins-heading {
    margin-bottom: 38px;
  }

  .cabins-heading h2 {
    font-size: clamp(43px, 13vw, 60px);
  }

  .cabins-grid {
    grid-template-columns: 1fr;
  }

  .cabin-card:last-child {
    grid-column: auto;
  }

  .cabin-card__image {
    height: 360px;
  }
}
</style>