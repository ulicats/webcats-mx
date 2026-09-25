<script setup>
import { useRouter } from 'vue-router'

const router = useRouter()

const verColeccion = () => {
  router.push({
    name: 'catalogo-productos',
    query: {
      collection: 'primavera'
    }
  })
}
</script>

<template>
  <section class="temporada">
    <div class="temporada-copy">
      <span>Colección de temporada</span>

      <h2>
        Primavera
        <em>en tu estilo.</em>
      </h2>

      <p>
        Colores suaves. Nuevos favoritos.
      </p>

      <button
        type="button"
        class="temporada-button"
        @click="verColeccion"
      >
        Ver colección
        <span>→</span>
      </button>
    </div>

    <div class="temporada-visual">
      <div class="temporada-accent">
        <span>NEW SEASON</span>
      </div>

      <div class="temporada-message">
        <span>Soft</span>
        <strong>tones.</strong>
      </div>
    </div>
  </section>
</template>

<style scoped>
.temporada {
  width: 100%;
  min-height: 520px;

  display: grid;
  grid-template-columns: 0.8fr 1.2fr;

  overflow: hidden;

  background:
    linear-gradient(
      115deg,
      #f7e4e8 0%,
      #f5e9e3 48%,
      #e5ece4 100%
    );
}

.temporada-copy {
  position: relative;
  z-index: 2;

  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;

  padding:
    80px
    60px
    80px
    max(40px, calc((100vw - 1500px) / 2));
}

.temporada-copy > span {
  margin-bottom: 20px;

  color: #8c706f;

  font-size: 10px;
  font-weight: 600;
  letter-spacing: 0.27em;
  text-transform: uppercase;
}

.temporada-copy h2 {
  margin: 0;

  color: #24211f;

  font-size: clamp(50px, 5vw, 82px);
  font-weight: 500;
  letter-spacing: -0.06em;
  line-height: 0.9;
}

.temporada-copy h2 em {
  display: block;

  margin-top: 7px;

  color: #a97d87;

  font-family: Georgia, "Times New Roman", serif;
  font-weight: 400;
}

.temporada-copy p {
  margin: 25px 0 0;

  color: #655f5b;

  font-size: 12px;
  letter-spacing: 0.08em;
}

/* BOTÓN VER COLECCIÓN */

.temporada-button {
  margin-top: 35px;

  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 25px;

  min-height: 48px;
  padding: 0 22px;

  border: 0;

  background: #24211f;
  color: #fff;

  font-family: inherit;
  font-size: 10px;
  font-weight: 600;
  letter-spacing: 0.1em;
  text-transform: uppercase;

  cursor: pointer;

  transition:
    background 0.25s ease,
    color 0.25s ease,
    transform 0.25s ease;
}

.temporada-button:hover {
  background: #aebfae;
  color: #24211f;
  transform: translateY(-2px);
}

.temporada-button span {
  font-size: 18px;
}

/* =========================================
   VISUAL
========================================= */

.temporada-visual {
  position: relative;

  min-height: 520px;

  overflow: hidden;

  background:
    radial-gradient(
      circle at 65% 45%,
      rgba(255, 255, 255, 0.9),
      transparent 27%
    ),
    linear-gradient(
      135deg,
      #e5ece4,
      #c9d8c8
    );
}

.temporada-visual::before {
  content: "";

  position: absolute;

  width: 480px;
  height: 480px;

  right: 10%;
  top: 50%;

  border-radius: 50%;

  background: rgba(255, 250, 248, 0.65);

  transform: translateY(-50%);
}

.temporada-accent {
  position: absolute;

  top: 45px;
  right: 55px;

  color: #5e6e5d;

  font-size: 9px;
  letter-spacing: 0.3em;

  writing-mode: vertical-rl;
}

.temporada-message {
  position: absolute;
  z-index: 2;

  left: 50%;
  top: 50%;

  display: flex;
  flex-direction: column;

  transform: translate(-50%, -50%);
}

.temporada-message span,
.temporada-message strong {
  color: #5c6e5c;

  font-family: Georgia, "Times New Roman", serif;
  font-size: clamp(65px, 8vw, 125px);
  font-weight: 400;
  font-style: italic;
  line-height: 0.75;
}

.temporada-message strong {
  margin-left: 80px;
}

/* =========================================
   RESPONSIVE
========================================= */

@media (max-width: 800px) {
  .temporada {
    grid-template-columns: 1fr;
  }

  .temporada-copy {
    padding: 70px 25px;
  }

  .temporada-visual {
    min-height: 360px;
  }

  .temporada-message strong {
    margin-left: 45px;
  }

  .temporada-accent {
    top: 30px;
    right: 25px;
  }
}

@media (max-width: 520px) {
  .temporada-copy {
    padding: 55px 24px;
  }

  .temporada-copy h2 {
    font-size: 52px;
  }

  .temporada-button {
    width: 100%;
    justify-content: space-between;
  }

  .temporada-visual {
    min-height: 300px;
  }

  .temporada-message span,
  .temporada-message strong {
    font-size: 68px;
  }

  .temporada-message strong {
    margin-left: 35px;
  }
}
</style>