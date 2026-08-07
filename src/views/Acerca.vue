<template>
  <section class="about-page">
    <div class="container-fluid">
      <div class="about-layout">

        <!-- FOTO + PERFIL -->
        <div class="left-photo">
          <div class="profile-card">

            <div class="terminal-bar" aria-hidden="true">
              <span class="terminal-dot terminal-dot--red"></span>
              <span class="terminal-dot terminal-dot--yellow"></span>
              <span class="terminal-dot terminal-dot--green"></span>
            </div>

            <img
              src="/src/assets/acerca/ulicats.jpeg"
              alt="Ulises Guzmán"
              class="profile-photo"
            />

            <h2 class="profile-name">
              Ulises Guzmán
            </h2>

            <p class="profile-roles">
              Web Developer · SysAdmin · Propietario de Webcats
            </p>

            <p class="profile-description">
              Desarrollo proyectos web personalizados y administro
              infraestructura para sitios, dominios y correo empresarial.
            </p>

          </div>
        </div>

        <!-- EXPERIENCIA -->
        <div class="right-content">

          <!-- DESARROLLO WEB -->
          <article class="role-block animated-line">
            <h3 class="role-title html-tag">
              <span class="tag-bracket">&lt;</span>
              <span class="tag-name">Web Developer</span>
              <span class="tag-slash">/</span>
              <span class="tag-bracket">&gt;</span>
            </h3>

            <p class="role-text">
              Diseño y desarrollo sitios web y aplicaciones personalizadas
              utilizando Vue 3, Vite, Laravel, PHP y MySQL. Trabajo cada
              proyecto desde la estructura y la interfaz hasta su adaptación
              responsive y publicación.
            </p>

            <ul class="skills-inline">
              <li>&gt; Vue 3 · Vite · JavaScript</li>
              <li>&gt; PHP · Laravel · MySQL</li>
              <li>&gt; Interfaces responsive y componentes</li>
              <li>&gt; APIs REST y paneles administrativos</li>
              <li>&gt; Git · GitHub · Vercel</li>
            </ul>
          </article>

          <!-- ADMINISTRACIÓN DE SERVIDORES -->
          <article class="role-block animated-line">
            <h3 class="role-title html-tag">
              <span class="tag-bracket">&lt;</span>
              <span class="tag-name">SysAdmin</span>
              <span class="tag-slash">/</span>
              <span class="tag-bracket">&gt;</span>
            </h3>

            <p class="role-text">
              Cuento con experiencia administrando servidores Linux mediante
              WHM y cPanel, atendiendo sitios web, dominios, certificados,
              cuentas de correo, migraciones, seguridad y problemas en
              entornos de producción.
            </p>

            <ul class="skills-inline">
              <li>&gt; Linux · WHM · cPanel</li>
              <li>&gt; Dominios · DNS · Nameservers</li>
              <li>&gt; MX · SPF · DKIM · DMARC</li>
              <li>&gt; SSL · AutoSSL · Migraciones</li>
              <li>&gt; Revisión de malware y permisos</li>
              <li>&gt; Soporte de correo empresarial</li>
            </ul>
          </article>

          <!-- WEBCATS -->
          <article class="role-block animated-line">
            <h3 class="role-title html-tag">
              <span class="tag-bracket">&lt;</span>
              <span class="tag-name">Webcats Owner</span>
              <span class="tag-slash">/</span>
              <span class="tag-bracket">&gt;</span>
            </h3>

            <p class="role-text">
              Soy propietario de Webcats, un proyecto independiente enfocado
              en crear sitios web para negocios, profesionales y
              proyectos personales. Me encargo de planear, diseñar, desarrollar
              y publicarlo en internet.
            </p>

            <ul class="skills-inline">
              <li>&gt; Sitios web personalizados</li>
              <li>&gt; Landing pages y páginas corporativas</li>
              <li>&gt; Catálogos y comercio electrónico</li>
              <li>&gt; Proyectos editoriales e interactivos</li>
              <li>&gt; Integración con WhatsApp y Google Maps</li>
              <li>&gt; SEO básico · Open Graph · Despliegue</li>
            </ul>
          </article>

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
/* CONTENEDOR GENERAL             */
/* ============================= */

.about-page {
  padding: 50px 20px;
}

.container-fluid {
  width: 100%;
  max-width: 100%;
  margin: 0 auto;
  padding-right: 20px;
  padding-left: 20px;
  box-sizing: border-box;
  overflow-x: hidden;
}

.about-layout {
  display: grid;
  grid-template-columns: 450px minmax(0, 1fr);
  align-items: start;
  gap: 50px;
  width: 100%;
  max-width: 1350px;
  margin: 0 auto;
}

/* ============================= */
/* COLUMNA DE PERFIL              */
/* ============================= */

.left-photo {
  display: flex;
  justify-content: center;
}

.profile-card {
  width: 100%;
  max-width: 480px;
  min-height: 740px;
  padding: 40px;
  border: 1px solid var(--border-soft);
  border-radius: 26px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;

  color: var(--text-main);
  background: var(--bg-card);

  box-shadow: 0 18px 45px rgba(0, 0, 0, 0.1);

  animation:
    fadeUp 1.2s ease-out,
    shadowPulse 6s ease-in-out infinite alternate;
}

.terminal-bar {
  display: flex;
  align-self: flex-start;
  gap: 7px;
  margin-bottom: 16px;
}

.terminal-dot {
  width: 11px;
  height: 11px;
  border-radius: 50%;
}

.terminal-dot--red {
  background: #ff5f57;
}

.terminal-dot--yellow {
  background: #febc2e;
}

.terminal-dot--green {
  background: #28c840;
}

.profile-photo {
  display: block;
  width: 100%;
  height: 480px;
  margin-bottom: 18px;
  border-radius: 14px;
  object-fit: cover;
  object-position: center top;
  background: #000;
}

.profile-name {
  margin: 10px 0 6px;
  color: var(--text-white);
  font-size: 1.6rem;
  font-weight: 700;
  text-align: center;
}

.profile-roles {
  margin: 0 0 14px;
  color: var(--terminal-green);
  font-size: 0.95rem;
  line-height: 1.5;
  text-align: center;
}

.profile-description {
  max-width: 350px;
  margin: 0;
  color: rgba(255, 255, 255, 0.68);
  font-size: 0.9rem;
  line-height: 1.55;
  text-align: center;
}

.profile-status {
  margin-top: 20px;
  padding: 9px 13px;
  border: 1px solid rgba(255, 255, 255, 0.12);
  border-radius: 999px;
  display: inline-flex;
  align-items: center;
  gap: 8px;

  color: var(--terminal-green);
  background: rgba(0, 0, 0, 0.22);

  font-size: 0.78rem;
  font-weight: 600;
}

.profile-status__dot {
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: var(--terminal-green);
  box-shadow: 0 0 12px var(--terminal-green);
  animation: statusPulse 1.8s ease-in-out infinite;
}

/* ============================= */
/* CONTENIDO DERECHO              */
/* ============================= */

.right-content {
  min-width: 0;
}

.role-block {
  position: relative;
  margin-bottom: 20px;
  padding: 22px 22px 22px 30px;
  border: 1px solid rgba(255, 255, 255, 0.14);
  border-radius: 7px;

  background: rgba(0, 0, 0, 0.28);

  box-shadow:
    inset 0 0 0 1px rgba(255, 255, 255, 0.03),
    0 12px 30px rgba(0, 0, 0, 0.08);

  transition:
    border-color 0.25s ease,
    transform 0.25s ease,
    background-color 0.25s ease;
}

.role-block:hover {
  border-color: rgba(255, 255, 255, 0.25);
  background: rgba(0, 0, 0, 0.34);
  transform: translateY(-3px);
}

/* ============================= */
/* TÍTULOS TIPO HTML              */
/* ============================= */

.role-title {
  margin: 0 0 18px;
  color: var(--terminal-white);
  font-size: 1.6rem;
  font-weight: 700;
}

.html-tag {
  width: fit-content;
  max-width: 100%;
  padding: 7px 12px;
  border-radius: 6px;
  display: inline-flex;
  align-items: center;
  flex-wrap: wrap;
  gap: 2px;

  font-family: "JetBrains Mono", monospace;
  font-size: 1.55rem;
  font-weight: 600;

  background: rgba(0, 0, 0, 0.35);
}

.tag-bracket,
.tag-slash {
  color: #d4d4d4;
}

.tag-name {
  color: #4fc1ff;
}

/* ============================= */
/* TEXTO Y HABILIDADES            */
/* ============================= */

.role-text {
  margin: 0;
  color: var(--terminal-green);
  font-size: 1.03rem;
  line-height: 1.65;
}

.skills-inline {
  margin: 14px 0 0;
  padding-left: 5px;
  list-style: none;
}

.skills-inline li {
  margin-bottom: 7px;
  color: var(--terminal-yellow);
  font-size: 0.98rem;
  line-height: 1.45;
  transition:
    transform 0.2s ease,
    opacity 0.2s ease;
}

.skills-inline li:last-child {
  margin-bottom: 0;
}

.skills-inline li:hover {
  opacity: 0.82;
  transform: translateX(5px);
}

/* ============================= */
/* LÍNEA LATERAL                  */
/* ============================= */

.animated-line::before {
  content: "";
  position: absolute;
  top: 50%;
  left: 0;
  width: 3px;
  height: calc(100% - 30px);
  border-radius: 10px;

  background: linear-gradient(
    to bottom,
    rgba(255, 255, 255, 0.9),
    rgba(255, 255, 255, 0.22)
  );

  opacity: 0.8;
  transform: translateY(-50%);
}

/* ============================= */
/* PANTALLAS MEDIANAS             */
/* ============================= */

@media (max-width: 1200px) and (min-width: 901px) {
  .about-layout {
    grid-template-columns: 380px minmax(0, 1fr);
    gap: 35px;
  }

  .profile-card {
    max-width: 380px;
    padding: 30px;
  }

  .profile-photo {
    height: 440px;
  }
}

/* ============================= */
/* TABLET Y TELÉFONOS             */
/* ============================= */

@media (max-width: 900px) {
  .about-page {
    padding: 20px 0 40px;
  }

  .container-fluid {
    padding-right: 16px;
    padding-left: 16px;
  }

  .about-layout {
    grid-template-columns: 1fr;
    gap: 24px;
    margin-top: 0;
  }

  .profile-card {
    max-width: 600px;
    min-height: auto;
    padding: 25px;
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

  .profile-description {
    max-width: 420px;
  }

  .role-title,
  .html-tag {
    font-size: 1.3rem;
  }

  .role-text {
    font-size: 0.95rem;
    line-height: 1.55;
  }

  .skills-inline li {
    color: var(--terminal-yellow);
    font-size: 0.9rem;
  }

  .animated-line::before {
    display: block;
  }

  :deep(.tree-desktop-wrapper) {
    display: none !important;
    height: 0 !important;
    min-height: 0 !important;
    padding: 0 !important;
    margin: 0 !important;
    overflow: hidden !important;
  }
}

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

  .vue-node-wrapper svg {
    display: none !important;
  }
}

/* ============================= */
/* TELÉFONOS PEQUEÑOS             */
/* ============================= */

@media (max-width: 540px) {
  .container-fluid {
    padding-right: 12px;
    padding-left: 12px;
  }

  .profile-card {
    padding: 20px 16px;
    border-radius: 20px;
  }

  .profile-photo {
    width: 100%;
    max-width: 270px;
    height: 360px;
  }

  .profile-roles {
    font-size: 0.86rem;
  }

  .profile-description {
    font-size: 0.84rem;
  }

  .profile-status {
    font-size: 0.72rem;
    text-align: center;
  }

  .role-block {
    padding: 20px 16px 20px 23px;
  }

  .html-tag {
    font-size: 1.05rem;
    line-height: 1.5;
  }

  .role-text {
    font-size: 0.9rem;
  }

  .skills-inline {
    padding-left: 0;
  }

  .skills-inline li {
    font-size: 0.84rem;
  }
}

/* ============================= */
/* ANIMACIONES                    */
/* ============================= */

@keyframes fadeUp {
  0% {
    opacity: 0.01;
    transform: translateY(25px);
  }

  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes shadowPulse {
  0% {
    box-shadow: 0 18px 45px rgba(0, 0, 0, 0.08);
  }

  100% {
    box-shadow: 0 24px 65px rgba(0, 0, 0, 0.15);
  }
}

@keyframes statusPulse {
  0%,
  100% {
    opacity: 0.55;
    transform: scale(0.85);
  }

  50% {
    opacity: 1;
    transform: scale(1);
  }
}

@media (prefers-reduced-motion: reduce) {
  .profile-card,
  .profile-status__dot {
    animation: none;
  }

  .role-block,
  .skills-inline li {
    transition: none;
  }
}
</style>