<template>
  <section class="cta-section">

    <div class="cta-facade">

      <div class="cta-glass">

        <span></span>
        <span></span>
        <span></span>

      </div>


      <div class="cta-content">

        <span class="cta-kicker">
          Tu próximo proyecto
        </span>

        <h2>
          Hagamos que el espacio
          <span>se vea diferente.</span>
        </h2>

        <p>
          Cuéntanos qué necesitas y comienza a desarrollar
          una solución en vidrio y aluminio para tu espacio.
        </p>

        <a href="#cotizar">
          Solicitar cotización
          <span>↗</span>
        </a>

      </div>

    </div>

  </section>
</template>


<style scoped>
.cta-section {
  padding: 5px;

  background: #111416;
}

.cta-facade {
  position: relative;

  min-height: 620px;

  overflow: hidden;

  display: flex;

  align-items: center;

  background:
    linear-gradient(
      145deg,
      #29414a,
      #0b1316
    );
}

.cta-glass {
  position: absolute;

  inset: 0;

  display: grid;

  grid-template-columns:
    repeat(3, 1fr);

  gap: 6px;
}

.cta-glass span {
  position: relative;

  overflow: hidden;

  border-left:
    1px solid rgba(255, 255, 255, 0.08);

  border-right:
    1px solid rgba(0, 0, 0, 0.3);
}

.cta-glass span::before {
  content: '';

  position: absolute;

  width: 180%;

  height: 24%;

  top: 10%;

  left: -95%;

  transform: rotate(-28deg);

  background:
    rgba(255, 255, 255, 0.08);
}

.cta-facade::after {
  content: '';

  position: absolute;

  inset: 0;

  background:
    linear-gradient(
      90deg,
      rgba(5, 9, 10, 0.93),
      rgba(5, 9, 10, 0.67) 55%,
      rgba(5, 9, 10, 0.3)
    );
}

.cta-content {
  position: relative;

  z-index: 3;

  width: min(100%, 1500px);

  margin: 0 auto;

  padding:
    90px 5vw;

  color: #ffffff;
}

.cta-kicker {
  display: block;

  margin-bottom: 20px;

  color:
    var(--glass-blue, #4ea7c4);

  font-size: 0.7rem;

  font-weight: 700;

  letter-spacing: 0.18em;

  text-transform: uppercase;
}

.cta-content h2 {
  max-width: 1000px;

  margin: 0;

  font-size:
    clamp(3.2rem, 7vw, 7rem);

  font-weight: 500;

  line-height: 0.94;

  letter-spacing: -0.055em;
}

.cta-content h2 span {
  display: block;

  color:
    rgba(255, 255, 255, 0.4);
}

.cta-content p {
  max-width: 550px;

  margin:
    35px 0;

  color:
    rgba(255, 255, 255, 0.58);

  font-size: 1rem;

  line-height: 1.8;
}

.cta-content a {
  min-height: 58px;

  width: fit-content;

  padding:
    0 22px;

  display: flex;

  align-items: center;

  gap: 45px;

  background: #ffffff;

  color: #111416;

  text-decoration: none;

  font-size: 0.72rem;

  font-weight: 700;

  letter-spacing: 0.1em;

  text-transform: uppercase;

  transition:
    background 0.25s ease,
    color 0.25s ease;
}

.cta-content a:hover {
  background:
    var(--glass-blue, #4ea7c4);

  color: #ffffff;
}

@media (max-width: 600px) {
  .cta-section {
    padding: 3px;
  }

  .cta-facade {
    min-height: 560px;
  }

  .cta-content {
    padding:
      75px 24px;
  }

  .cta-content h2 {
    font-size:
      clamp(3rem, 14vw, 4.6rem);
  }

  .cta-content a {
    width: 100%;

    justify-content: space-between;
  }
}
</style>