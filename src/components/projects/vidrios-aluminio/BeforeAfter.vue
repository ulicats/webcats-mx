<template>
  <section class="before-after-section">
    <div class="before-after-heading">
      <div>
        <span class="section-kicker">
          Transformación
        </span>

        <h2>
          El cambio se
          <span>puede deslizar.</span>
        </h2>
      </div>

      <p>
        Compara cómo una solución en vidrio y aluminio puede
        transformar completamente la percepción de un espacio.
      </p>
    </div>

    <div class="before-after-shell">

      <div class="before-after-stage">
        <!-- DESPUÉS -->
        <div class="compare-layer compare-layer--after">
          <div class="after-building">
            <div
              v-for="n in 12"
              :key="`after-${n}`"
              class="after-building__glass"
            ></div>
          </div>

          <span class="compare-label compare-label--after">
            DESPUÉS
          </span>
        </div>

        <!-- ANTES -->
        <div
          class="compare-layer compare-layer--before"
          :style="{ width: `${position}%` }"
        >
          <div class="before-building">
            <span></span>
            <span></span>
            <span></span>
          </div>

          <span class="compare-label compare-label--before">
            ANTES
          </span>
        </div>

        <!-- DIVISOR -->
        <div
          class="compare-divider"
          :style="{ left: `${position}%` }"
        >
          <div class="compare-divider__handle">
            <span>‹</span>
            <span>›</span>
          </div>
        </div>

        <!-- INPUT -->
        <input
          v-model="position"
          class="compare-range"
          type="range"
          min="8"
          max="92"
          aria-label="Comparar antes y después"
        />
      </div>

      <div class="before-after-data">
        <div>
          <span>01</span>

          <div>
            <strong>Entrada de luz</strong>
            <p>
              Aprovecha mejor la iluminación natural.
            </p>
          </div>
        </div>

        <div>
          <span>02</span>

          <div>
            <strong>Amplitud visual</strong>
            <p>
              El cristal genera espacios más abiertos y limpios.
            </p>
          </div>
        </div>

        <div>
          <span>03</span>

          <div>
            <strong>Diseño contemporáneo</strong>
            <p>
              Líneas simples y estructuras ligeras.
            </p>
          </div>
        </div>
      </div>

    </div>
  </section>
</template>

<script setup>
import { ref } from 'vue'

const position = ref(52)
</script>

<style scoped>
.before-after-section {
  padding: 120px 5vw;
  background: #111416;
}

.before-after-heading {
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

.before-after-heading h2 {
  margin: 0;

  color: #ffffff;

  font-size: clamp(2.8rem, 5vw, 5.5rem);
  font-weight: 500;

  line-height: 0.98;
  letter-spacing: -0.05em;
}

.before-after-heading h2 span {
  display: block;

  color: rgba(255, 255, 255, 0.38);
}

.before-after-heading p {
  max-width: 530px;

  margin: 0;

  color: rgba(255, 255, 255, 0.52);

  font-size: 1rem;
  line-height: 1.8;
}

.before-after-shell {
  width: min(100%, 1500px);
  margin: 0 auto;
}

.before-after-stage {
  position: relative;

  width: 100%;
  min-height: 650px;

  overflow: hidden;

  border: 5px solid #252b2e;

  background: #25373e;
}

.compare-layer {
  position: absolute;

  inset: 0;

  overflow: hidden;
}

.compare-layer--after {
  background:
    linear-gradient(
      145deg,
      #324a54,
      #0e181c
    );
}

.after-building {
  position: absolute;

  inset: 6%;

  display: grid;

  grid-template-columns: repeat(4, 1fr);
  grid-template-rows: repeat(3, 1fr);

  gap: 7px;

  padding: 7px;

  background: #101719;

  transform: perspective(1300px) rotateY(-5deg);
}

.after-building__glass {
  position: relative;

  overflow: hidden;

  background:
    linear-gradient(
      140deg,
      rgba(127, 190, 211, 0.38),
      rgba(24, 48, 57, 0.82)
    );

  border:
    1px solid rgba(255, 255, 255, 0.08);
}

.after-building__glass::before {
  content: '';

  position: absolute;

  width: 180%;
  height: 30%;

  left: -80%;
  top: 12%;

  transform: rotate(-30deg);

  background: rgba(255, 255, 255, 0.12);
}

.compare-layer--before {
  z-index: 2;

  right: auto;

  background:
    linear-gradient(
      145deg,
      #d7d0c5,
      #99948c
    );
}

.before-building {
  position: absolute;

  inset: 9%;

  display: grid;

  grid-template-columns: repeat(3, 1fr);

  gap: 3%;

  padding: 10%;

  background:
    linear-gradient(
      145deg,
      #d7d2c9,
      #a39c92
    );
}

.before-building span {
  border:
    12px solid rgba(76, 72, 66, 0.45);

  background:
    linear-gradient(
      160deg,
      #86959a,
      #c5d0d2
    );
}

.compare-label {
  position: absolute;

  bottom: 28px;

  z-index: 6;

  padding: 10px 15px;

  font-size: 0.65rem;
  font-weight: 700;

  letter-spacing: 0.14em;
}

.compare-label--before {
  left: 28px;

  background: rgba(17, 20, 22, 0.78);

  color: #ffffff;
}

.compare-label--after {
  right: 28px;

  background: #ffffff;

  color: #111416;
}

.compare-divider {
  position: absolute;

  top: 0;
  bottom: 0;

  z-index: 8;

  width: 5px;

  transform: translateX(-50%);

  background: #111416;

  pointer-events: none;
}

.compare-divider::before,
.compare-divider::after {
  content: '';

  position: absolute;

  left: 50%;

  width: 1px;

  height: calc(50% - 35px);

  transform: translateX(-50%);

  background: rgba(255, 255, 255, 0.7);
}

.compare-divider::before {
  top: 0;
}

.compare-divider::after {
  bottom: 0;
}

.compare-divider__handle {
  position: absolute;

  top: 50%;
  left: 50%;

  width: 68px;
  height: 68px;

  transform: translate(-50%, -50%);

  display: flex;
  align-items: center;
  justify-content: center;

  gap: 13px;

  border: 5px solid #111416;

  background: #edf2f4;

  color: #111416;

  font-size: 1.3rem;
}

.compare-range {
  position: absolute;

  inset: 0;

  z-index: 12;

  width: 100%;
  height: 100%;

  opacity: 0;

  cursor: ew-resize;
}

.before-after-data {
  display: grid;

  grid-template-columns: repeat(3, 1fr);

  border-left: 1px solid rgba(255, 255, 255, 0.11);
}

.before-after-data > div {
  min-height: 155px;

  padding: 30px;

  display: grid;

  grid-template-columns: 50px 1fr;

  gap: 12px;

  border-right: 1px solid rgba(255, 255, 255, 0.11);
  border-bottom: 1px solid rgba(255, 255, 255, 0.11);
}

.before-after-data > div > span {
  color: var(--glass-blue, #4ea7c4);

  font-size: 0.68rem;
  font-weight: 700;

  letter-spacing: 0.15em;
}

.before-after-data strong {
  display: block;

  margin-bottom: 10px;

  color: #ffffff;

  font-size: 1rem;
  font-weight: 500;
}

.before-after-data p {
  margin: 0;

  color: rgba(255, 255, 255, 0.48);

  font-size: 0.85rem;
  line-height: 1.6;
}

@media (max-width: 900px) {
  .before-after-section {
    padding: 90px 5vw;
  }

  .before-after-heading {
    grid-template-columns: 1fr;

    gap: 30px;
  }

  .before-after-stage {
    min-height: 520px;
  }

  .before-after-data {
    grid-template-columns: 1fr;
  }

  .before-after-data > div {
    min-height: 120px;
  }
}

@media (max-width: 600px) {
  .before-after-section {
    padding: 75px 20px;
  }

  .before-after-heading h2 {
    font-size: clamp(2.6rem, 12vw, 4rem);
  }

  .before-after-stage {
    min-height: 420px;

    border-width: 3px;
  }

  .after-building {
    inset: 4%;

    grid-template-columns: repeat(3, 1fr);
    grid-template-rows: repeat(4, 1fr);

    gap: 4px;
  }

  .before-building {
    inset: 5%;

    padding: 9%;
  }

  .before-building span {
    border-width: 7px;
  }

  .compare-divider {
    width: 3px;
  }

  .compare-divider__handle {
    width: 56px;
    height: 56px;

    border-width: 3px;
  }

  .compare-label {
    bottom: 18px;

    font-size: 0.56rem;
  }

  .compare-label--before {
    left: 18px;
  }

  .compare-label--after {
    right: 18px;
  }

  .before-after-data > div {
    padding: 24px 20px;

    grid-template-columns: 40px 1fr;
  }
}
</style>