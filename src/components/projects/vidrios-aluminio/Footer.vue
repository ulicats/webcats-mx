<template>
  <footer class="building-footer">

    <div class="building-footer__top">

      <div class="building-footer__brand">

        <div class="building-footer__brand">
        <img
            :src="logo"
            alt="Vidrio y aluminio"
            class="building-footer__logo"
        />
        </div>

        <!--div class="building-footer__mark">
          <span></span>
          <span></span>
          <span></span>
        </div-->

        <!--div>
          <strong>
            VIDRIO
          </strong>

          <span>
            + ALUMINIO
          </span>
        </div-->

      </div>


      <p>
        Diseño, fabricación e instalación de soluciones
        arquitectónicas en vidrio y aluminio.
      </p>

    </div>


    <div class="building-footer__grid">

      <div>
        <span>Explorar</span>

        <a href="#servicios">Servicios</a>
        <a href="#proyectos">Proyectos</a>
        <a href="#proceso">Proceso</a>
        <a href="#cotizar">Cotización</a>
      </div>


      <div>
        <span>Servicios</span>

        <a href="#servicios">Canceles</a>
        <a href="#servicios">Ventanas</a>
        <a href="#servicios">Barandales</a>
        <a href="#servicios">Cristal templado</a>
      </div>


      <div>
        <span>Contacto</span>

        <p>
          Teléfono por definir
        </p>

        <p>
          Correo por definir
        </p>

        <p>
          Ubicación por definir
        </p>
      </div>

    </div>


    <div class="building-footer__bottom">

      <span>
        © {{ year }} Demo Vidrio + Aluminio
      </span>

      <span>
        Diseño demostrativo · Webcats
      </span>

    </div>

  </footer>
</template>


<script setup>
import logo from '../../../assets/projects/vidrios-aluminio/logo/logo.png'
const year = new Date().getFullYear()
</script>


<style scoped>
.building-footer {
  padding:
    75px 5vw 30px;

  background: #0a0d0f;

  color: #ffffff;
}

.building-footer__logo {
  width: auto;
  height: 80px;
  display: block;
  object-fit: contain;
}

.building-footer__top,
.building-footer__grid,
.building-footer__bottom {
  width: min(100%, 1500px);

  margin-left: auto;

  margin-right: auto;
}

.building-footer__top {
  padding-bottom: 55px;

  display: flex;

  align-items: flex-end;

  justify-content: space-between;

  gap: 50px;

  border-bottom:
    1px solid rgba(255, 255, 255, 0.12);
}

.building-footer__brand {
  display: flex;

  align-items: center;

  gap: 15px;
}

.building-footer__mark {
  width: 48px;

  height: 48px;

  padding: 6px;

  display: grid;

  grid-template-columns:
    repeat(3, 1fr);

  gap: 4px;

  border:
    1px solid rgba(255, 255, 255, 0.3);
}

.building-footer__mark span {
  background: #ffffff;
}

.building-footer__mark span:nth-child(2) {
  background:
    var(--glass-blue, #4ea7c4);
}

.building-footer__brand > div:last-child {
  display: flex;

  flex-direction: column;

  gap: 5px;
}

.building-footer__brand strong {
  font-size: 0.9rem;

  letter-spacing: 0.17em;
}

.building-footer__brand
> div:last-child
> span {
  color:
    rgba(255, 255, 255, 0.46);

  font-size: 0.58rem;

  letter-spacing: 0.2em;
}

.building-footer__top > p {
  max-width: 460px;

  margin: 0;

  color:
    rgba(255, 255, 255, 0.45);

  font-size: 0.88rem;

  line-height: 1.65;
}

.building-footer__grid {
  padding:
    55px 0;

  display: grid;

  grid-template-columns:
    repeat(3, 1fr);

  gap: 60px;
}

.building-footer__grid > div {
  display: flex;

  flex-direction: column;

  align-items: flex-start;

  gap: 13px;
}

.building-footer__grid
> div
> span {
  margin-bottom: 8px;

  color:
    rgba(255, 255, 255, 0.33);

  font-size: 0.62rem;

  font-weight: 700;

  letter-spacing: 0.15em;

  text-transform: uppercase;
}

.building-footer__grid a,
.building-footer__grid p {
  margin: 0;

  color:
    rgba(255, 255, 255, 0.68);

  font-size: 0.84rem;

  text-decoration: none;

  transition:
    color 0.2s ease;
}

.building-footer__grid a:hover {
  color: #ffffff;
}

.building-footer__bottom {
  padding-top: 25px;

  display: flex;

  align-items: center;

  justify-content: space-between;

  gap: 30px;

  border-top:
    1px solid rgba(255, 255, 255, 0.12);

  color:
    rgba(255, 255, 255, 0.28);

  font-size: 0.62rem;

  letter-spacing: 0.08em;
}

@media (max-width: 800px) {
  .building-footer__top {
    flex-direction: column;

    align-items: flex-start;
  }

  .building-footer__grid {
    grid-template-columns:
      repeat(2, 1fr);
  }
}

@media (max-width: 550px) {
  .building-footer {
    padding:
      60px 20px 25px;
  }

    .building-footer__logo {
    height: 65px;
  }

  .building-footer__grid {
    grid-template-columns: 1fr;

    gap: 40px;
  }

  .building-footer__bottom {
    flex-direction: column;

    align-items: flex-start;
  }
}
</style>