<template>
  <section class="materials-section">

    <div class="materials-heading">

      <div>
        <span class="section-kicker">
          Materiales
        </span>

        <h2>
          El acabado también
          <span>forma parte del diseño.</span>
        </h2>
      </div>

      <p>
        Explora algunas combinaciones de cristal,
        aluminio y acabados utilizados en proyectos
        arquitectónicos.
      </p>

    </div>


    <div class="materials-shell">

      <!-- SELECTOR -->
      <div class="materials-list">

        <button
          v-for="material in materials"
          :key="material.id"
          class="material-option"
          :class="{
            active: selectedMaterial.id === material.id
          }"
          @click="selectedId = material.id"
        >
          <span class="material-option__number">
            {{ material.number }}
          </span>

          <div>
            <strong>
              {{ material.name }}
            </strong>

            <small>
              {{ material.type }}
            </small>
          </div>

          <span class="material-option__arrow">
            ↗
          </span>
        </button>

      </div>


      <!-- VISUALIZACIÓN -->
      <div
        class="material-preview"
        :class="selectedMaterial.visual"
      >
        <div class="material-preview__window">

          <div class="material-preview__frame"></div>

          <div class="material-preview__glass">

            <span></span>
            <span></span>
            <span></span>
            <span></span>

          </div>

        </div>


        <div class="material-preview__information">

          <span>
            Material seleccionado
          </span>

          <h3>
            {{ selectedMaterial.name }}
          </h3>

          <p>
            {{ selectedMaterial.description }}
          </p>

          <div class="material-preview__data">

            <div>
              <small>Uso</small>

              <strong>
                {{ selectedMaterial.use }}
              </strong>
            </div>

            <div>
              <small>Estilo</small>

              <strong>
                {{ selectedMaterial.style }}
              </strong>
            </div>

          </div>

        </div>

      </div>

    </div>

  </section>
</template>


<script setup>
import { computed, ref } from 'vue'

const selectedId = ref(1)

const materials = [
  {
    id: 1,
    number: '01',
    name: 'Aluminio negro',
    type: 'Perfilería',
    use: 'Ventanas · puertas',
    style: 'Contemporáneo',
    visual: 'material-black',
    description:
      'Un acabado sobrio que resalta líneas estructurales y genera contraste con el cristal.',
  },
  {
    id: 2,
    number: '02',
    name: 'Aluminio natural',
    type: 'Perfilería',
    use: 'Fachadas · ventanas',
    style: 'Industrial',
    visual: 'material-natural',
    description:
      'Acabado metálico neutro ideal para espacios comerciales y arquitectura funcional.',
  },
  {
    id: 3,
    number: '03',
    name: 'Cristal claro',
    type: 'Vidrio',
    use: 'Interiores · fachadas',
    style: 'Minimalista',
    visual: 'material-clear',
    description:
      'Permite mayor entrada de luz y mantiene conexión visual entre diferentes espacios.',
  },
  {
    id: 4,
    number: '04',
    name: 'Cristal esmerilado',
    type: 'Vidrio',
    use: 'Baños · divisiones',
    style: 'Privacidad',
    visual: 'material-frosted',
    description:
      'Combina iluminación natural con privacidad para espacios interiores.',
  },
]

const selectedMaterial = computed(() => {
  return materials.find(
    material => material.id === selectedId.value
  ) || materials[0]
})
</script>


<style scoped>
.materials-section {
  padding: 120px 5vw;

  background: #111416;
}

.materials-heading {
  width: min(100%, 1500px);
  margin: 0 auto 60px;

  display: grid;

  grid-template-columns: 1.2fr 0.8fr;

  gap: 70px;

  align-items: end;
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

.materials-heading h2 {
  margin: 0;

  color: #ffffff;

  font-size: clamp(2.8rem, 5vw, 5.4rem);
  font-weight: 500;

  line-height: 0.98;
  letter-spacing: -0.05em;
}

.materials-heading h2 span {
  display: block;

  color: rgba(255, 255, 255, 0.38);
}

.materials-heading p {
  max-width: 520px;

  margin: 0;

  color: rgba(255, 255, 255, 0.5);

  font-size: 1rem;
  line-height: 1.8;
}

.materials-shell {
  width: min(100%, 1500px);
  margin: 0 auto;

  display: grid;

  grid-template-columns:
    minmax(280px, 0.65fr)
    minmax(500px, 1.35fr);

  gap: 5px;

  background: #252b2e;

  border: 5px solid #252b2e;
}

.materials-list {
  background: #edf2f4;
}

.material-option {
  position: relative;

  width: 100%;
  min-height: 115px;

  padding: 24px;

  display: grid;

  grid-template-columns:
    50px
    1fr
    40px;

  align-items: center;

  gap: 12px;

  border: 0;
  border-bottom:
    1px solid rgba(17, 20, 22, 0.13);

  background: transparent;

  text-align: left;

  cursor: pointer;

  transition:
    background 0.3s ease;
}

.material-option:last-child {
  border-bottom: 0;
}

.material-option:hover,
.material-option.active {
  background: #d7e4e9;
}

.material-option__number {
  color: var(--glass-blue, #4ea7c4);

  font-size: 0.65rem;
  font-weight: 700;

  letter-spacing: 0.15em;
}

.material-option strong {
  display: block;

  margin-bottom: 7px;

  color: #111416;

  font-size: 1rem;
  font-weight: 500;
}

.material-option small {
  color: #7a878d;

  font-size: 0.68rem;

  letter-spacing: 0.1em;
  text-transform: uppercase;
}

.material-option__arrow {
  color: #111416;

  font-size: 1rem;

  transform: translateX(-5px);

  opacity: 0;

  transition:
    opacity 0.25s ease,
    transform 0.25s ease;
}

.material-option:hover
.material-option__arrow,
.material-option.active
.material-option__arrow {
  opacity: 1;

  transform: translateX(0);
}

/* PREVIEW */

.material-preview {
  position: relative;

  min-height: 610px;

  overflow: hidden;

  display: grid;

  grid-template-columns:
    1fr 0.75fr;

  background: #263a42;

  transition:
    background 0.45s ease;
}

/* VARIACIONES */

.material-black {
  --frame-color: #0d1012;

  background:
    linear-gradient(
      140deg,
      #36525d,
      #121d21
    );
}

.material-natural {
  --frame-color: #a9b1b4;

  background:
    linear-gradient(
      140deg,
      #5f737b,
      #202e33
    );
}

.material-clear {
  --frame-color: #333a3d;

  background:
    linear-gradient(
      140deg,
      #7ca1ad,
      #253d46
    );
}

.material-frosted {
  --frame-color: #373e41;

  background:
    linear-gradient(
      145deg,
      #aabdc3,
      #536b73
    );
}

.material-preview__window {
  position: relative;

  margin: 55px 0 55px 55px;

  border:
    16px solid
    var(--frame-color);

  background: #18272d;
}

.material-preview__frame {
  position: absolute;

  inset: 0;

  pointer-events: none;
}

.material-preview__frame::before {
  content: '';

  position: absolute;

  left: calc(50% - 6px);

  top: 0;
  bottom: 0;

  width: 12px;

  background: var(--frame-color);
}

.material-preview__glass {
  position: absolute;

  inset: 0;

  display: grid;

  grid-template-columns: repeat(2, 1fr);

  gap: 12px;

  padding: 12px;
}

.material-preview__glass span {
  position: relative;

  overflow: hidden;

  background:
    linear-gradient(
      145deg,
      rgba(185, 222, 234, 0.37),
      rgba(25, 57, 68, 0.42)
    );
}

.material-frosted
.material-preview__glass span {
  background:
    linear-gradient(
      145deg,
      rgba(232, 241, 243, 0.77),
      rgba(164, 187, 194, 0.66)
    );

  filter: blur(0.3px);
}

.material-preview__glass span::before {
  content: '';

  position: absolute;

  width: 180%;
  height: 25%;

  top: 5%;
  left: -90%;

  transform: rotate(-28deg);

  background:
    rgba(255, 255, 255, 0.13);
}

.material-preview__information {
  position: relative;

  z-index: 3;

  padding: 55px 45px;

  display: flex;

  flex-direction: column;

  justify-content: flex-end;

  background:
    rgba(10, 15, 17, 0.48);

  backdrop-filter: blur(8px);

  color: #ffffff;
}

.material-preview__information > span {
  margin-bottom: 12px;

  color: rgba(255, 255, 255, 0.5);

  font-size: 0.62rem;
  font-weight: 700;

  letter-spacing: 0.14em;
  text-transform: uppercase;
}

.material-preview__information h3 {
  margin: 0 0 20px;

  font-size: 2rem;
  font-weight: 500;
}

.material-preview__information > p {
  margin: 0;

  color: rgba(255, 255, 255, 0.6);

  font-size: 0.88rem;
  line-height: 1.7;
}

.material-preview__data {
  margin-top: 40px;

  border-top:
    1px solid rgba(255, 255, 255, 0.16);
}

.material-preview__data > div {
  min-height: 70px;

  display: flex;

  align-items: center;

  justify-content: space-between;

  gap: 20px;

  border-bottom:
    1px solid rgba(255, 255, 255, 0.16);
}

.material-preview__data small {
  color: rgba(255, 255, 255, 0.45);

  font-size: 0.62rem;
  text-transform: uppercase;
  letter-spacing: 0.12em;
}

.material-preview__data strong {
  text-align: right;

  font-size: 0.78rem;
  font-weight: 500;
}

@media (max-width: 1000px) {
  .materials-section {
    padding: 90px 5vw;
  }

  .materials-heading {
    grid-template-columns: 1fr;

    gap: 30px;
  }

  .materials-shell {
    grid-template-columns: 1fr;
  }

  .materials-list {
    display: grid;

    grid-template-columns: repeat(2, 1fr);
  }

  .material-option:nth-child(odd) {
    border-right:
      1px solid rgba(17, 20, 22, 0.13);
  }
}

@media (max-width: 700px) {
  .materials-section {
    padding: 75px 20px;
  }

  .materials-heading h2 {
    font-size: clamp(2.6rem, 12vw, 4rem);
  }

  .materials-shell {
    border-width: 3px;

    gap: 3px;
  }

  .materials-list {
    grid-template-columns: 1fr;
  }

  .material-option {
    min-height: 95px;

    padding: 20px;
  }

  .material-option:nth-child(odd) {
    border-right: 0;
  }

  .material-preview {
    min-height: auto;

    grid-template-columns: 1fr;
  }

  .material-preview__window {
    min-height: 390px;

    margin: 25px;

    border-width: 10px;
  }

  .material-preview__frame::before {
    left: calc(50% - 4px);

    width: 8px;
  }

  .material-preview__glass {
    gap: 8px;

    padding: 8px;
  }

  .material-preview__information {
    padding: 35px 26px;
  }
}
</style>