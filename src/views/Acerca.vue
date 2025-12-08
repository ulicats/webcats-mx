<template>
  <section class="about-page">
    <div class="container-fluid">

      <div class="about-layout">

        <!-- FOTO + CARD -->
        <div class="left-photo">
          <div class="profile-card">

            <img
              src="/src/assets/acerca/ulicats.jpeg"
              alt="Ulises Guzmán"
              class="profile-photo"
            />

            <h2 class="profile-name">Ulises Guzmán</h2>

            <p class="profile-roles">
              Web Developer · SysAdmin · DevOps Jr
            </p>

          </div>
        </div>

        <!-- ESPECIALIDADES -->
        <div class="right-content">

          <h2 class="specialization-title">Me especializo en:</h2>

          <div class="role-block animated-line">
            <h3 class="role-title">🖥️ Desarrollador Web</h3>
            <p class="role-text">
              Construyo aplicaciones funcionales y estables usando PHP, MySQL, Laravel y Vue.js.
              Desarrollo con mentalidad full-stack, enfocado en seguridad, rendimiento y producción real.
            </p>

            <ul class="skills-inline">
              <li>🛠️ PHP · MySQL · Laravel</li>
              <li>🖥️ Vue.js · Front-end moderno</li>
              <li>🔐 Buenas prácticas · Seguridad web</li>
            </ul>
          </div>

          <div class="role-block animated-line">
            <h3 class="role-title">⚙️ SysAdmin</h3>
            <p class="role-text">
              Más de 7 años administrando servidores Linux en WHM/cPanel: hosting, DNS, correo empresarial,
              certificados SSL, seguridad y respuesta a incidentes.
            </p>

            <ul class="skills-inline">
              <li>🐧 Linux · WHM/cPanel</li>
              <li>📡 DNS · MX · SPF · DKIM · DMARC</li>
              <li>🔐 Hardening · Malware Removal</li>
            </ul>
          </div>

          <div class="role-block animated-line">
            <h3 class="role-title">🐳 DevOps Jr</h3>
            <p class="role-text">
              Automatización, CI/CD y contenedores para conectar desarrollo e infraestructura
              y lograr despliegues rápidos, confiables y escalables.
            </p>

            <ul class="skills-inline">
              <li>🐳 Docker</li>
              <li>⚡ CI/CD · Pipelines</li>
              <li>🔧 Git · Control de versiones</li>
            </ul>
          </div>

        </div>

      </div>

    </div>
  </section>
</template>

<script>
export default {
  name: "Acerca",
};
</script>

<style scoped>

/* ============================= */
/*   CONTAINER DESKTOP           */
/* ============================= */

.container-fluid {
  max-width: 100%;
  margin: 0 auto;
  padding-left: 20px;
  padding-right: 20px;
  box-sizing: border-box;
  overflow-x: hidden;
}


.about-page {
  padding: 50px 20px;
}

.about-layout {
  display: grid;
  grid-template-columns: 450px 1fr;
  gap: 50px;
  align-items: start;
  max-width: 1350px;
  margin: 0 auto;
  width: 100%;
  overflow-x: hidden;
}

/* ============================= */
/*   CARD IZQUIERDA DESKTOP      */
/* ============================= */

.left-photo {
  display: flex;
  justify-content: center;
}

.profile-card {
  margin-top: 40px;
  background: #fff;
  padding: 40px 40px;
  border-radius: 26px;
  box-shadow: 0px 18px 45px rgba(0,0,0,0.10);
  width: 100%;
  max-width: 480px;
  min-height: 740px;

  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;

  animation: fadeUp 1.2s ease-out, shadowPulse 6s ease-in-out infinite alternate;
}

.profile-photo {
  width: 240px;
  height: 240px;
  border-radius: 50%;
  object-fit: cover;
  object-position: center 10%; /* cabeza completa */
  margin-bottom: 25px;
  box-shadow: 0px 8px 30px rgba(0,0,0,0.22);
}

.profile-name {
  font-size: 2rem;
  font-weight: 800;
  margin: 10px 0 6px 0;
}

.profile-roles {
  color: #555;
  font-size: 1rem;
  margin-bottom: 15px;
}

/* ============================= */
/*   TEXTO DERECHA DESKTOP       */
/* ============================= */

.specialization-title {
  font-size: 2rem;
  font-weight: 800;
  margin-bottom: 25px;
  color: #111;
}

.role-block {
  margin-bottom: 40px;
  animation: fadeUp 1s ease-out;
}


.role-title {
  font-size: 1.6rem;
  font-weight: 700;
  margin-bottom: 8px;
  display: flex;
  align-items: center;
  gap: 10px;
}

.role-text {
  font-size: 1.05rem;
  line-height: 1.55rem;
  color: #444;
}

/* ============================= */
/*   LISTAS DE SKILLS            */
/* ============================= */

.skills-inline {
  margin-top: 10px;
  padding-left: 5px;
  list-style: none;
}

.skills-inline li {
  font-size: 1rem;
  margin-bottom: 6px;
  color: #333;
  transition: 0.2s ease;
}

.skills-inline li:hover {
  transform: translateX(5px);
  opacity: 0.8;
}

/* ============================= */
/*   LÍNEA ANIMADA LATERAL       */
/* ============================= */

.animated-line {
  position: relative;
  padding-left: 22px;
}

.animated-line::before {
  content: "";
  position: absolute;
  left: 0;
  top: 50%;
  width: 3px;
  height: 100%;
  background: #b5b5b5;
  border-radius: 10px;
  transform: translateY(-50%);
  opacity: 0.8;
}

/* ============================= */
/*   FIX: PANTALLAS MEDIANAS     */
/* ============================= */

@media (max-width: 1200px) and (min-width: 901px) {
  .about-layout {
    grid-template-columns: 380px 1fr !important;
    gap: 35px !important;
  }

  .profile-card {
    max-width: 380px !important;
  }
}

/* ============================= */
/*   RESPONSIVE (TELÉFONOS)      */
/* ============================= */

@media (max-width: 900px) {

  .about-page {
    padding-top: 20px;
  }

  .container-fluid {
    padding-left: 16px;
    padding-right: 16px;
    max-width: 100%;
    overflow-x: hidden;
  }

  .about-layout {
    grid-template-columns: 1fr;
    gap: 20px;
    margin-top: -20px;
    width: 100%;
    overflow-x: hidden;
  }

  .profile-card {
    min-height: auto;
    padding: 25px 25px;
    margin-top: 0;
  }

  .profile-photo {
    width: 180px;
    height: 180px;
    object-position: center 15%;
  }

  .profile-name {
    font-size: 1.6rem;
  }

  .specialization-title {
    text-align: center;
    font-size: 1.7rem;
    margin-top: 10px;
  }

  .role-title {
    font-size: 1.3rem;
  }

  .role-text {
    font-size: 0.95rem;
    line-height: 1.4rem;
  }

  .skills-inline li {
    font-size: 0.9rem;
  }

  /* Restauramos bordes también en móvil */
  .animated-line::before {
    display: block !important;
  }
}

/* ============================= */
/*   ANIMACIONES                 */
/* ============================= */

@keyframes fadeUp {
  0% { transform: translateY(25px); opacity: 0.01; }
  100% { transform: translateY(0); opacity: 1; }
}

@keyframes shadowPulse {
  0% { box-shadow: 0px 18px 45px rgba(0,0,0,0.08); }
  100% { box-shadow: 0px 24px 65px rgba(0,0,0,0.15); }
}

</style>
