<template>
  <section id="cabanas" class="cabins">
    <div class="cabins-container">

      <!-- ENCABEZADO -->
      <div class="cabins-header">
        <p class="cabins-eyebrow">
          Tu refugio en Mazamitla
        </p>

        <h2>
          Elige tu espacio
          <span>entre los pinos</span>
        </h2>

        <p class="cabins-intro">
          Cabañas privadas rodeadas de naturaleza, equipadas para disfrutar
          una estancia cómoda, tranquila y especial en Mazamitla.
        </p>
      </div>


      <!-- CARDS -->
      <div class="cabins-grid">
        <article
          v-for="(cabin, index) in cabins"
          :key="cabin.id"
          class="cabin-card"
        >
          <div class="cabin-card__image">
            <img
              :src="cabin.image"
              :alt="cabin.name"
            />

            <span class="cabin-card__number">
              {{ String(index + 1).padStart(2, "0") }}
            </span>
          </div>


          <div class="cabin-card__content">

            <p class="cabin-card__eyebrow">
              Cabaña privada
            </p>

            <h3>
              {{ cabin.name }}
            </h3>

            <p class="cabin-card__description">
              {{ cabin.description }}
            </p>


            <!-- ETIQUETAS -->
            <div class="cabin-card__features">
              <span>
                2–4 huéspedes
              </span>

              <span>
                Cama matrimonial
              </span>

              <span>
                Sofá cama
              </span>
            </div>


            <!-- DETALLES -->
            <button
              type="button"
              class="cabin-card__details"
              @click="openDetails(cabin)"
            >
              Ver detalles

              <span>
                →
              </span>
            </button>

          </div>
        </article>
      </div>

    </div>


    <!-- =========================================
         MODAL DETALLES
    ========================================== -->

    <Teleport to="body">
      <div
        v-if="selectedCabin"
        class="cabin-modal"
        @click.self="closeDetails"
      >
        <div class="cabin-modal__panel">

          <!-- CERRAR -->
          <button
            type="button"
            class="cabin-modal__close"
            aria-label="Cerrar detalles"
            @click="closeDetails"
          >
            ×
          </button>


          <!-- ENCABEZADO MODAL -->
          <div class="cabin-modal__header">

            <p class="cabin-modal__eyebrow">
              Cabaña privada · Mazamitla
            </p>

            <h3>
              {{ selectedCabin.name }}
            </h3>

            <p class="cabin-modal__description">
              {{ selectedCabin.description }}
            </p>


            <div class="cabin-modal__capacity">
              Hasta 4 huéspedes
            </div>

          </div>


          <!-- INFORMACIÓN GENERAL -->
          <div class="cabin-modal__section">

            <h4>
              La cabaña incluye
            </h4>

            <ul class="cabin-modal__amenities">

              <li
                v-for="amenity in generalAmenities"
                :key="amenity"
              >
                <span>✓</span>

                {{ amenity }}
              </li>

            </ul>

          </div>


          <!-- COCINA -->
          <div class="cabin-modal__section">

            <h4>
              Cocina equipada
            </h4>

            <ul class="cabin-modal__amenities">

              <li
                v-for="amenity in kitchenAmenities"
                :key="amenity"
              >
                <span>✓</span>

                {{ amenity }}
              </li>

            </ul>

          </div>


          <!-- PRECIOS -->
          <div class="cabin-modal__section">

            <div class="cabin-modal__price-header">
              <div>
                <p class="cabin-modal__eyebrow">
                  Tarifas
                </p>

                <h4>
                  Precios por noche
                </h4>
              </div>
            </div>


            <div class="cabin-prices">

              <div
                v-for="price in prices"
                :key="price.label"
                class="cabin-price"
              >

                <div>
                  <strong>
                    {{ price.label }}
                  </strong>

                  <span v-if="price.note">
                    {{ price.note }}
                  </span>
                </div>

                <div class="cabin-price__amount">
                  {{ price.amount }}
                </div>

              </div>

            </div>


            <p class="cabin-modal__extra">
              La estancia está pensada principalmente para pareja. Gracias al
              sofá cama pueden hospedarse hasta 2 personas adicionales con
              costo extra.
            </p>

          </div>


          <!-- CTA -->
          <div class="cabin-modal__actions">

            <a
              href="#reservar"
              class="cabin-modal__reserve"
              @click="goToBooking"
            >
              Consultar disponibilidad
            </a>

            <button
              type="button"
              class="cabin-modal__secondary"
              @click="closeDetails"
            >
              Seguir explorando
            </button>

          </div>

        </div>
      </div>
    </Teleport>

  </section>
</template>


<script setup>
import {
  onBeforeUnmount,
  onMounted,
  ref
} from "vue";


/*
|--------------------------------------------------------------------------
| FOTOGRAFÍAS
|--------------------------------------------------------------------------
|
| Puedes cambiar estas tres imágenes después si quieres elegir
| específicamente cuál representa cada cabaña.
|
*/

import cabin1 from "../../../assets/projects/arce/gallery/gallery-1.jpg";
import cabin2 from "../../../assets/projects/arce/gallery/gallery-2.jpg";
import cabin3 from "../../../assets/projects/arce/gallery/gallery-3.jpg";


/*
|--------------------------------------------------------------------------
| CABAÑAS
|--------------------------------------------------------------------------
*/

const cabins = [
  {
    id: 1,

    name:
      "Cabaña Arce",

    image:
      cabin1,

    description:
      "Un espacio cálido rodeado de bosque, ideal para descansar en pareja y disfrutar la tranquilidad de Mazamitla."
  },

  {
    id: 2,

    name:
      "Cabaña Bosque",

    image:
      cabin2,

    description:
      "Un refugio acogedor entre pinos, equipado para disfrutar noches tranquilas y una experiencia especial en la naturaleza."
  },

  {
    id: 3,

    name:
      "Cabaña Mirador",

    image:
      cabin3,

    description:
      "Una estancia rodeada de naturaleza, perfecta para desconectarse de la rutina y disfrutar del paisaje de Mazamitla."
  }
];


/*
|--------------------------------------------------------------------------
| AMENIDADES GENERALES
|--------------------------------------------------------------------------
*/

const generalAmenities = [
  "Cama matrimonial",
  "Sofá cama",
  "Smart TV",
  "Juegos de mesa",
  "Terraza",
  "Baño completo",
  "Asador de carbón en la terraza"
];


/*
|--------------------------------------------------------------------------
| COCINA
|--------------------------------------------------------------------------
*/

const kitchenAmenities = [
  "Frigobar",
  "Estufa",
  "Licuadora",
  "Cafetera",
  "Microondas",
  "Utensilios de cocina",
  "Sal y azúcar",
  "Servilletas",
  "Jabón para lavar trastes"
];


/*
|--------------------------------------------------------------------------
| PRECIOS
|--------------------------------------------------------------------------
*/

const prices = [
  {
    label:
      "1 noche · Fin de semana o día festivo",

    amount:
      "$2,000 MXN"
  },

  {
    label:
      "2 noches · Fin de semana o día festivo",

    amount:
      "$1,900 MXN",

    note:
      "por noche"
  },

  {
    label:
      "1 noche · Entre semana",

    amount:
      "$1,800 MXN"
  },

  {
    label:
      "2 noches · Entre semana",

    amount:
      "$1,700 MXN",

    note:
      "por noche"
  }
];


/*
|--------------------------------------------------------------------------
| MODAL
|--------------------------------------------------------------------------
*/

const selectedCabin = ref(null);


function openDetails(cabin) {

  selectedCabin.value =
    cabin;

  document.body.style.overflow =
    "hidden";

}


function closeDetails() {

  selectedCabin.value =
    null;

  document.body.style.overflow =
    "";

}


/*
|--------------------------------------------------------------------------
| IR A FORMULARIO
|--------------------------------------------------------------------------
*/

function goToBooking() {

  closeDetails();

  /*
   * Esperamos a que Vue elimine el modal
   * antes de hacer el scroll.
   */

  setTimeout(() => {

    const booking =
      document.querySelector(
        "#reservar"
      );

    if (booking) {

      booking.scrollIntoView({
        behavior:
          "smooth",

        block:
          "start"
      });

    }

  }, 100);

}


/*
|--------------------------------------------------------------------------
| TECLADO
|--------------------------------------------------------------------------
*/

function handleKeyboard(event) {

  if (
    event.key === "Escape" &&
    selectedCabin.value
  ) {

    closeDetails();

  }

}


onMounted(() => {

  window.addEventListener(
    "keydown",
    handleKeyboard
  );

});


onBeforeUnmount(() => {

  window.removeEventListener(
    "keydown",
    handleKeyboard
  );

  document.body.style.overflow =
    "";

});
</script>


<style scoped>
/* =========================================
   SECCIÓN
========================================= */

.cabins {
  padding: 110px 0;

  scroll-margin-top: 90px;

  background:
    var(--arce-cream);
}

.cabins-container {
  width:
    min(
      1240px,
      calc(100% - 40px)
    );

  margin:
    0 auto;
}


/* =========================================
   HEADER
========================================= */

.cabins-header {
  max-width:
    760px;

  margin-bottom:
    55px;
}

.cabins-eyebrow {
  margin-bottom:
    14px;

  color:
    var(--arce-gold);

  font-size:
    11px;

  font-weight:
    700;

  letter-spacing:
    0.22em;

  text-transform:
    uppercase;
}

.cabins-header h2 {
  color:
    var(--arce-navy-900);

  font-family:
    var(--arce-heading);

  font-size:
    clamp(
      52px,
      6vw,
      82px
    );

  font-weight:
    500;

  line-height:
    0.92;
}

.cabins-header h2 span {
  display:
    block;

  color:
    var(--arce-gold);

  font-style:
    italic;
}

.cabins-intro {
  max-width:
    650px;

  margin-top:
    24px;

  color:
    var(--arce-muted);

  font-size:
    15px;

  line-height:
    1.8;
}


/* =========================================
   GRID
========================================= */

.cabins-grid {
  display:
    grid;

  grid-template-columns:
    repeat(
      3,
      minmax(0, 1fr)
    );

  gap:
    26px;
}


/* =========================================
   CARD
========================================= */

.cabin-card {
  overflow:
    hidden;

  background:
    #ffffff;

  border-radius:
    20px;

  border:
    1px solid
    rgba(
      26,
      47,
      68,
      0.08
    );

  box-shadow:
    0 20px 55px
    rgba(
      26,
      47,
      68,
      0.06
    );

  transition:
    transform 0.3s ease,
    box-shadow 0.3s ease;
}

.cabin-card:hover {
  transform:
    translateY(-5px);

  box-shadow:
    0 28px 65px
    rgba(
      26,
      47,
      68,
      0.11
    );
}


/* =========================================
   FOTO
========================================= */

.cabin-card__image {
  position:
    relative;

  height:
    410px;

  overflow:
    hidden;
}

.cabin-card__image img {
  width:
    100%;

  height:
    100%;

  object-fit:
    cover;

  transition:
    transform 0.55s ease;
}

.cabin-card:hover
.cabin-card__image img {
  transform:
    scale(1.035);
}


/* NÚMERO */

.cabin-card__number {
  position:
    absolute;

  top:
    22px;

  left:
    22px;

  width:
    58px;

  height:
    58px;

  display:
    flex;

  align-items:
    center;

  justify-content:
    center;

  border:
    1px solid
    rgba(
      255,
      255,
      255,
      0.7
    );

  border-radius:
    50%;

  color:
    #ffffff;

  background:
    rgba(
      26,
      47,
      68,
      0.6
    );

  backdrop-filter:
    blur(8px);

  font-family:
    var(--arce-heading);

  font-size:
    18px;
}


/* =========================================
   CONTENIDO
========================================= */

.cabin-card__content {
  padding:
    30px;
}

.cabin-card__eyebrow {
  color:
    var(--arce-gold);

  font-size:
    11px;

  font-weight:
    700;

  letter-spacing:
    0.17em;

  text-transform:
    uppercase;
}

.cabin-card h3 {
  margin-top:
    8px;

  color:
    var(--arce-navy-900);

  font-family:
    var(--arce-heading);

  font-size:
    42px;

  font-weight:
    500;

  line-height:
    1;
}

.cabin-card__description {
  min-height:
    100px;

  margin-top:
    20px;

  color:
    var(--arce-muted);

  font-size:
    14px;

  line-height:
    1.75;
}


/* =========================================
   TAGS
========================================= */

.cabin-card__features {
  display:
    flex;

  flex-wrap:
    wrap;

  gap:
    8px;

  margin-top:
    20px;
}

.cabin-card__features span {
  padding:
    8px 12px;

  border-radius:
    999px;

  color:
    var(--arce-navy-900);

  background:
    #f3eee2;

  font-size:
    11px;

  font-weight:
    600;
}


/* =========================================
   BOTÓN DETALLES
========================================= */

.cabin-card__details {
  display:
    inline-flex;

  align-items:
    center;

  gap:
    14px;

  margin-top:
    28px;

  padding:
    0;

  border:
    0;

  background:
    none;

  color:
    var(--arce-navy-900);

  font-family:
    var(--arce-body);

  font-size:
    13px;

  font-weight:
    700;

  cursor:
    pointer;
}

.cabin-card__details span {
  color:
    var(--arce-gold);

  font-size:
    19px;

  transition:
    transform 0.25s ease;
}

.cabin-card__details:hover span {
  transform:
    translateX(5px);
}


/* =========================================
   RESPONSIVE CARDS
========================================= */

@media (
  max-width: 1000px
) {

  .cabins-grid {
    grid-template-columns:
      repeat(
        2,
        1fr
      );
  }

}


@media (
  max-width: 680px
) {

  .cabins {
    padding:
      80px 0;
  }

  .cabins-container {
    width:
      calc(
        100% - 28px
      );
  }

  .cabins-grid {
    grid-template-columns:
      1fr;
  }

  .cabin-card__image {
    height:
      360px;
  }

  .cabin-card__description {
    min-height:
      auto;
  }

}
</style>


<!--
  IMPORTANTE:
  Estos estilos NO pueden ser scoped,
  porque el modal se teletransporta al body.
-->
<style>
/* =========================================
   MODAL
========================================= */

.cabin-modal {
  position:
    fixed;

  z-index:
    100000;

  inset:
    0;

  display:
    flex;

  align-items:
    center;

  justify-content:
    center;

  padding:
    30px;

  background:
    rgba(
      7,
      17,
      28,
      0.9
    );

  backdrop-filter:
    blur(10px);
}


/* PANEL */

.cabin-modal__panel {
  position:
    relative;

  width:
    min(
      760px,
      100%
    );

  max-height:
    90vh;

  overflow-y:
    auto;

  padding:
    48px;

  border-radius:
    22px;

  background:
    #f6f2e8;

  box-shadow:
    0 30px 100px
    rgba(
      0,
      0,
      0,
      0.35
    );
}


/* CERRAR */

.cabin-modal__close {
  position:
    absolute;

  top:
    20px;

  right:
    20px;

  width:
    42px;

  height:
    42px;

  display:
    flex;

  align-items:
    center;

  justify-content:
    center;

  border:
    0;

  border-radius:
    50%;

  color:
    #ffffff;

  background:
    #1a2f44;

  font-size:
    25px;

  cursor:
    pointer;
}


/* =========================================
   ENCABEZADO MODAL
========================================= */

.cabin-modal__eyebrow {
  color:
    #b59a3b;

  font-family:
    "Montserrat",
    sans-serif;

  font-size:
    10px;

  font-weight:
    700;

  letter-spacing:
    0.2em;

  text-transform:
    uppercase;
}

.cabin-modal__header h3 {
  margin:
    10px 0 0;

  color:
    #1a2f44;

  font-family:
    "Cormorant Garamond",
    serif;

  font-size:
    clamp(
      44px,
      6vw,
      64px
    );

  font-weight:
    500;

  line-height:
    1;
}

.cabin-modal__description {
  margin-top:
    17px;

  color:
    #66727c;

  font-family:
    "Montserrat",
    sans-serif;

  font-size:
    14px;

  line-height:
    1.75;
}

.cabin-modal__capacity {
  display:
    inline-flex;

  margin-top:
    22px;

  padding:
    9px 14px;

  border-radius:
    999px;

  color:
    #1a2f44;

  background:
    #e7deca;

  font-family:
    "Montserrat",
    sans-serif;

  font-size:
    11px;

  font-weight:
    700;
}


/* =========================================
   SECCIONES
========================================= */

.cabin-modal__section {
  padding-top:
    30px;

  margin-top:
    30px;

  border-top:
    1px solid
    rgba(
      26,
      47,
      68,
      0.12
    );
}

.cabin-modal__section h4 {
  margin:
    5px 0 18px;

  color:
    #1a2f44;

  font-family:
    "Cormorant Garamond",
    serif;

  font-size:
    30px;

  font-weight:
    600;
}


/* =========================================
   AMENIDADES
========================================= */

.cabin-modal__amenities {
  display:
    grid;

  grid-template-columns:
    repeat(
      2,
      minmax(
        0,
        1fr
      )
    );

  gap:
    13px 25px;

  margin:
    0;

  padding:
    0;

  list-style:
    none;
}

.cabin-modal__amenities li {
  display:
    flex;

  align-items:
    flex-start;

  gap:
    9px;

  color:
    #445461;

  font-family:
    "Montserrat",
    sans-serif;

  font-size:
    13px;

  line-height:
    1.5;
}

.cabin-modal__amenities li span {
  color:
    #b59a3b;

  font-weight:
    700;
}


/* =========================================
   PRECIOS
========================================= */

.cabin-prices {
  display:
    flex;

  flex-direction:
    column;

  gap:
    10px;
}

.cabin-price {
  display:
    flex;

  align-items:
    center;

  justify-content:
    space-between;

  gap:
    25px;

  padding:
    15px 17px;

  border-radius:
    12px;

  background:
    rgba(
      255,
      255,
      255,
      0.65
    );
}

.cabin-price > div:first-child {
  display:
    flex;

  flex-direction:
    column;

  gap:
    4px;
}

.cabin-price strong {
  color:
    #1a2f44;

  font-family:
    "Montserrat",
    sans-serif;

  font-size:
    12px;
}

.cabin-price span {
  color:
    #7b858c;

  font-family:
    "Montserrat",
    sans-serif;

  font-size:
    10px;
}

.cabin-price__amount {
  flex-shrink:
    0;

  color:
    #b08d30;

  font-family:
    "Cormorant Garamond",
    serif;

  font-size:
    24px;

  font-weight:
    600;
}


/* NOTA */

.cabin-modal__extra {
  margin-top:
    18px;

  padding:
    16px;

  border-radius:
    12px;

  color:
    #596771;

  background:
    #ece5d6;

  font-family:
    "Montserrat",
    sans-serif;

  font-size:
    12px;

  line-height:
    1.7;
}


/* =========================================
   ACCIONES
========================================= */

.cabin-modal__actions {
  display:
    flex;

  flex-wrap:
    wrap;

  gap:
    12px;

  margin-top:
    32px;
}

.cabin-modal__reserve,
.cabin-modal__secondary {
  min-height:
    48px;

  display:
    inline-flex;

  align-items:
    center;

  justify-content:
    center;

  padding:
    0 22px;

  border-radius:
    999px;

  font-family:
    "Montserrat",
    sans-serif;

  font-size:
    12px;

  font-weight:
    700;

  cursor:
    pointer;
}

.cabin-modal__reserve {
  border:
    1px solid
    #b59a3b;

  background:
    #b59a3b;

  color:
    #1a2f44;

  text-decoration:
    none;
}

.cabin-modal__secondary {
  border:
    1px solid
    rgba(
      26,
      47,
      68,
      0.25
    );

  background:
    transparent;

  color:
    #1a2f44;
}


/* =========================================
   RESPONSIVE MODAL
========================================= */

@media (
  max-width: 650px
) {

  .cabin-modal {
    padding:
      14px;
  }

  .cabin-modal__panel {
    max-height:
      94vh;

    padding:
      38px 22px;
  }

  .cabin-modal__amenities {
    grid-template-columns:
      1fr;
  }

  .cabin-price {
    align-items:
      flex-start;

    flex-direction:
      column;

    gap:
      8px;
  }

  .cabin-modal__actions {
    flex-direction:
      column;
  }

  .cabin-modal__reserve,
  .cabin-modal__secondary {
    width:
      100%;
  }

}
</style>