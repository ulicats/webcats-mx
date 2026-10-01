<template>
  <section id="servicios" class="multi-services">

    <!-- DECORACIÓN LADRILLOS -->
    <div class="brick-decoration"></div>

    <div class="services-container">

      <!-- HEADER -->
      <div class="section-header">

        <span class="eyebrow">
          NUESTROS SERVICIOS
        </span>

        <h2>
          Soluciones para tu
          <span>hogar y negocio.</span>
        </h2>

        <p>
          Desde una reparación sencilla hasta trabajos de mantenimiento
          y remodelación, tenemos una solución para cada espacio.
        </p>

      </div>

      <!-- GRID -->
      <div class="services-grid">

        <!-- FONTANERÍA -->
        <article class="service-card plumbing">

          <div class="service-image">
            <img
              src="https://images.unsplash.com/photo-1585704032915-c3400ca199e7?auto=format&fit=crop&w=800&q=85"
              alt="Servicio de fontanería"
            />

            <div class="service-icon">
              ◉
            </div>
          </div>

          <div class="service-content">
            <span class="service-number">01</span>

            <h3>Fontanería</h3>

            <p>
              Fugas, tuberías, tinacos, bombas de agua,
              instalaciones y destapes.
            </p>

            <a href="#contacto">
              Solicitar servicio
              <span>→</span>
            </a>
          </div>

        </article>

        <!-- ELECTRICIDAD -->
        <article class="service-card electricity">

          <div class="service-image">
            <img
              src="https://images.unsplash.com/photo-1621905251918-48416bd8575a?auto=format&fit=crop&w=800&q=85"
              alt="Servicio de electricidad"
            />

            <div class="service-icon">
              ⚡
            </div>
          </div>

          <div class="service-content">
            <span class="service-number">02</span>

            <h3>Electricidad</h3>

            <p>
              Instalaciones eléctricas, contactos, iluminación,
              cortos y centros de carga.
            </p>

            <a href="#contacto">
              Solicitar servicio
              <span>→</span>
            </a>
          </div>

        </article>

        <!-- ALBAÑILERÍA -->
        <article class="service-card masonry">

          <div class="service-image">
            <img
              src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=800&q=85"
              alt="Servicio de albañilería"
            />

            <div class="service-icon">
              ▦
            </div>
          </div>

          <div class="service-content">
            <span class="service-number">03</span>

            <h3>Albañilería</h3>

            <p>
              Muros, pisos, reparaciones, remodelaciones
              y trabajos de construcción.
            </p>

            <a href="#contacto">
              Solicitar servicio
              <span>→</span>
            </a>
          </div>

        </article>

        <!-- PINTURA -->
        <article class="service-card painting">

          <div class="service-image">
            <img
              src="https://images.unsplash.com/photo-1562259949-e8e7689d7828?auto=format&fit=crop&w=800&q=85"
              alt="Servicio de pintura"
            />

            <div class="service-icon">
              ◧
            </div>
          </div>

          <div class="service-content">
            <span class="service-number">04</span>

            <h3>Pintura</h3>

            <p>
              Pintura de interiores, exteriores,
              fachadas y renovación de espacios.
            </p>

            <a href="#contacto">
              Solicitar servicio
              <span>→</span>
            </a>
          </div>

        </article>

        <!-- IMPERMEABILIZACIÓN -->
        <article class="service-card waterproofing">

          <div class="service-image">
            <img
              src="https://images.unsplash.com/photo-1632759145351-1d592919f522?auto=format&fit=crop&w=800&q=85"
              alt="Servicio de impermeabilización"
            />

            <div class="service-icon">
              ◆
            </div>
          </div>

          <div class="service-content">
            <span class="service-number">05</span>

            <h3>Impermeabilización</h3>

            <p>
              Protección de azoteas, techos y muros
              contra humedad y filtraciones.
            </p>

            <a href="#contacto">
              Solicitar servicio
              <span>→</span>
            </a>
          </div>

        </article>

        <!-- MANTENIMIENTO -->
        <article class="service-card maintenance">

          <div class="service-image">
            <img
              src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?auto=format&fit=crop&w=800&q=85"
              alt="Servicio de mantenimiento"
            />

            <div class="service-icon">
              ✦
            </div>
          </div>

          <div class="service-content">
            <span class="service-number">06</span>

            <h3>Mantenimiento</h3>

            <p>
              Reparaciones, instalaciones y mantenimiento
              general para hogares y negocios.
            </p>

            <a href="#contacto">
              Solicitar servicio
              <span>→</span>
            </a>
          </div>

        </article>

      </div>

    </div>
  </section>
</template>

<script setup>
</script>

<style scoped>
.multi-services {
  --navy: #062a50;
  --blue: #087ee5;
  --green: #19a957;
  --brick: #dc512e;

  position: relative;
  overflow: hidden;

  padding: 90px 0;

  background: #f5f8fb;

  font-family: 'Manrope', sans-serif;
}

.services-container {
  position: relative;
  z-index: 2;

  width: min(1180px, calc(100% - 40px));
  margin: auto;
}

/* =========================
   LADRILLOS DECORATIVOS
========================= */

.brick-decoration {
  position: absolute;

  top: 45px;
  right: -30px;

  width: 300px;
  height: 160px;

  opacity: 0.055;

  background-image:
    linear-gradient(335deg, var(--brick) 23px, transparent 23px),
    linear-gradient(155deg, var(--brick) 23px, transparent 23px),
    linear-gradient(335deg, var(--brick) 23px, transparent 23px),
    linear-gradient(155deg, var(--brick) 23px, transparent 23px);

  background-size: 58px 58px;
}

/* =========================
   HEADER
========================= */

.section-header {
  max-width: 650px;
  margin: 0 auto 50px;

  text-align: center;
}

.eyebrow {
  display: block;

  margin-bottom: 9px;

  color: var(--blue);

  font-size: 10px;
  font-weight: 800;
  letter-spacing: 2px;
}

.section-header h2 {
  margin: 0;

  color: var(--navy);

  font-family: 'Sora', sans-serif;

  font-size: clamp(30px, 4vw, 45px);
  line-height: 1.12;
  letter-spacing: -1.8px;
}

.section-header h2 span {
  color: var(--blue);
}

.section-header p {
  max-width: 580px;

  margin: 18px auto 0;

  color: #697a8b;

  font-size: 13px;
  line-height: 1.7;
}

/* =========================
   GRID
========================= */

.services-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);

  gap: 22px;
}

/* =========================
   CARD
========================= */

.service-card {
  --service-color: var(--blue);

  overflow: hidden;

  background: white;

  border: 1px solid #e2e9ef;
  border-radius: 13px;

  box-shadow: 0 10px 30px rgba(6, 42, 80, 0.055);

  transition:
    transform 0.3s ease,
    box-shadow 0.3s ease;
}

.service-card:hover {
  transform: translateY(-7px);

  box-shadow: 0 20px 45px rgba(6, 42, 80, 0.13);
}

.service-card.plumbing {
  --service-color: #087ee5;
}

.service-card.electricity {
  --service-color: #19a957;
}

.service-card.masonry {
  --service-color: #dc512e;
}

.service-card.painting {
  --service-color: #087ee5;
}

.service-card.waterproofing {
  --service-color: #062a50;
}

.service-card.maintenance {
  --service-color: #dc512e;
}

/* =========================
   IMAGEN
========================= */

.service-image {
  position: relative;

  height: 205px;

  overflow: hidden;
}

.service-image::after {
  content: '';

  position: absolute;
  inset: 0;

  background:
    linear-gradient(
      180deg,
      transparent 45%,
      rgba(6, 42, 80, 0.3)
    );
}

.service-image img {
  width: 100%;
  height: 100%;

  object-fit: cover;

  transition: transform 0.5s ease;
}

.service-card:hover .service-image img {
  transform: scale(1.06);
}

.service-icon {
  position: absolute;

  z-index: 3;

  left: 20px;
  bottom: 18px;

  width: 42px;
  height: 42px;

  display: flex;
  align-items: center;
  justify-content: center;

  color: white;
  background: var(--service-color);

  border: 3px solid white;
  border-radius: 10px;

  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.18);

  font-size: 18px;
  font-weight: 900;
}

/* =========================
   CONTENT
========================= */

.service-content {
  position: relative;

  padding: 25px;
}

.service-number {
  position: absolute;

  top: 20px;
  right: 22px;

  color: #e7edf3;

  font-family: 'Sora', sans-serif;
  font-size: 28px;
  font-weight: 800;
}

.service-content h3 {
  position: relative;
  z-index: 2;

  margin: 0 0 10px;

  color: var(--navy);

  font-family: 'Sora', sans-serif;
  font-size: 18px;
}

.service-content p {
  min-height: 58px;

  margin: 0 0 18px;

  color: #718193;

  font-size: 11px;
  line-height: 1.65;
}

.service-content a {
  display: inline-flex;
  align-items: center;

  gap: 8px;

  color: var(--service-color);

  font-size: 11px;
  font-weight: 800;

  text-decoration: none;
}

.service-content a span {
  transition: transform 0.2s ease;
}

.service-content a:hover span {
  transform: translateX(5px);
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 950px) {
  .services-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 620px) {
  .multi-services {
    padding: 65px 0;
  }

  .services-container {
    width: calc(100% - 30px);
  }

  .services-grid {
    grid-template-columns: 1fr;
  }

  .service-image {
    height: 230px;
  }
}
</style>