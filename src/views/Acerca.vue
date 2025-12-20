<template>
  <section class="about-page">
    <div class="container-fluid">

      <div class="about-layout">

        <!-- FOTO + CARD -->
        <div class="left-photo">
          <div class="profile-card">

        <div class="terminal-bar">
          <span></span><span></span><span></span>
        </div>

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

          <div class="role-block animated-line">
            <h3 class="role-title html-tag">
              <span class="tag-bracket">&lt;</span>
              <span class="tag-name">Web Developer</span>
              <span class="tag-slash">/</span>
              <span class="tag-bracket">&gt;</span>
            </h3>
            <p class="role-text">
              Construyo aplicaciones funcionales y estables usando PHP, MySQL, Laravel y Vue.js.
              Desarrollo con mentalidad full-stack, enfocado en seguridad, rendimiento y producción real.
            </p>

            <ul class="skills-inline">
              <li> > PHP · MySQL · Laravel</li>
              <li> > Vue.js · Front-end moderno</li>
              <li> > Buenas prácticas · Seguridad web</li>
            </ul>
          </div>

          <div class="role-block animated-line">
            <h3 class="role-title html-tag">
              <span class="tag-bracket">&lt;</span>
              <span class="tag-name">SysAdmin</span>
              <span class="tag-slash">/</span>
              <span class="tag-bracket">&gt;</span>
            </h3>
            <p class="role-text">
              Más de 8 años administrando servidores Linux en WHM/cPanel: hosting, DNS, correo empresarial,
              certificados SSL, seguridad y respuesta a incidentes.
            </p>

            <ul class="skills-inline">
              <li> > Linux · WHM/cPanel</li>
              <li> > DNS · MX · SPF · DKIM · DMARC</li>
              <li> > Hardening · Malware Removal</li>
            </ul>
          </div>

          <div class="role-block animated-line">
            <h3 class="role-title html-tag">
              <span class="tag-bracket">&lt;</span>
              <span class="tag-name">DevOps Jr</span>
              <span class="tag-slash">/</span>
              <span class="tag-bracket">&gt;</span>
            </h3>
            <p class="role-text">
              Automatización, CI/CD y contenedores para conectar desarrollo e infraestructura
              y lograr despliegues rápidos, confiables y escalables.
            </p>

            <ul class="skills-inline">
              <li> > Docker</li>
              <li> > CI/CD · Pipelines</li>
              <li> > Git · Control de versiones</li>
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
  background: var(--bg-card);
  border: 1px solid var(--border-soft);
  color: var(--text-main);
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
  width: 100%;
  height: 480px;
  border-radius: 14px;
  object-fit: cover;
  object-position: center top;
  margin-bottom: 18px;
  background: #000;
}

.profile-name {
  font-size: 1.6rem;
  font-weight: 700;
  color: var(--text-white);
  margin: 10px 0 6px 0;
}

.profile-roles {
  font-size: 0.95rem;
  color: var(--terminal-green);
  margin-bottom: 15px;
  text-align:center;
}

/* ============================= */
/*   TEXTO DERECHA DESKTOP       */
/* ============================= */

.role-block {
  border: 1px solid rgba(255,255,255,0.14);
  background: rgba(0,0,0,0.28);
  border-radius: 3px;
  margin-bottom: 20px;
  padding: 10px 10px; 

  box-shadow:
    inset 0 0 0 1px rgba(255,255,255,0.03);
}

.role-block:hover {
  border-color: rgba(255,255,255,0.22);
}


.role-title {
  font-size: 1.6rem;
  font-weight: 700;
  margin-bottom: 8px;
  display: flex;
  align-items: center;
  gap: 10px;
  color: var(--terminal-white);
}

.animated-line::before {
  content: "";
  position: absolute;
  left: 0;
  top: 18px;
  width: 15px;
  height: calc(100% - 45px);
  background: linear-gradient(
    to bottom,
    rgba(255,255,255,0.9),
    rgba(255,255,255,0.25)
  );
  border-radius: 4px;
}


.role-text {
  font-size: 1.05rem;
  line-height: 1.55rem;
  color: var(--terminal-green);
}


/* ============================= */
/*   Titulos Html                */
/* ============================= */

.html-tag {
  display: inline-flex;
  align-items: center;
  gap: 2px;

  font-family: 'JetBrains Mono', monospace;
  font-size: 1.6rem;
  font-weight: 600;

  background: rgba(0,0,0,0.35);
  padding: 6px 12px;
  border-radius: 6px;

  margin-bottom: 18px;
}

/* < y > */
.tag-bracket {
  color: #d4d4d4; /* VS Code punctuation */
}

/* nombre del tag */
.tag-name {
  color: #4FC1FF; /* VS Code tag name */
}

/* / */
.tag-slash {
  color: #d4d4d4;
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
  color: var(--terminal-yellow);
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
    width: 250px;
    height: 380px;
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
    color: var(--terminal-yellow);
  }

  .animated-line::before {
    display: block !important;
  }

.terminal-bar {
  display: flex;
  gap: 6px;
  align-self: flex-start;
  margin-bottom: 14px;
}

.terminal-bar span {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background: #444;
}

}

/* ============================= */
/*   FIX RESPONSIVE DEL ÁRBOL    */
/* ============================= */

/* 🔥 1. OCULTAR EL ÁRBOL DESKTOP EN MÓVIL */
@media (max-width: 900px) {
  :deep(.tree-desktop-wrapper)  {
    display: none !important;
    height: 0 !important;
    min-height: 0 !important;
    padding: 0 !important;
    margin: 0 !important;
    overflow: hidden !important;
  }
}

/* 🔥 2. ACOMODAR NODOS DE VUE EN MÓVIL (VERTICAL Y CENTRADOS) */
@media (max-width: 768px) {

  .vue-node-wrapper {
    position: relative;
    width: 100%;
    height: auto;
    padding: 10px 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 18px;
  }

  .vue-node-wrapper .child-node {
    position: static !important;
    display: flex !important;
    margin: 0 auto;
  }

  /* Si había conectores mediante SVG, se ocultan en móvil */
  .vue-node-wrapper svg {
    display: none !important;
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
