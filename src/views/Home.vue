<template>
<!-- ========================================= -->
<!-- HERO WEBCATS / TERMINAL WORKSPACE         -->
<!-- ========================================= -->

<Transition name="hero" appear>
  <section
    :class="[
      'webcats-hero',
      { 'hero-animate': heroAnimate }
    ]"
  >

    <!-- GRID MUY SUTIL DE FONDO -->
    <div class="hero-grid-bg"></div>

    <div class="hero-workspace">

      <!-- ===================================== -->
      <!-- IZQUIERDA / IDENTIDAD                -->
      <!-- ===================================== -->

      <div class="hero-main">

        <div class="hero-path">
          <span class="path-user">webcats@mx</span>
          <span class="path-separator">:</span>
          <span class="path-location">~/home</span>
          <span class="path-symbol">$</span>
        </div>

        <div class="hero-brand-row">
          <span class="tree-symbol">┌─</span>
          <span class="hero-brand-new">Webcats.mx/</span>
        </div>

        <div class="hero-title-row">
          <span class="tree-symbol tree-middle">├─</span>

          <h1 class="hero-main-title">
            Desarrollo Web
            <span>
              Profesional<span class="terminal-cursor">_</span>
            </span>
          </h1>
        </div>

        <!-- ÁRBOL DE SERVICIOS -->
        <div class="hero-services-tree">

          <div class="service-tree-line">
            <span>├──</span>
            <span class="folder">desarrollo-web/</span>
          </div>

          <div class="service-tree-line">
            <span>├──</span>
            <span class="folder">sistemas/</span>
          </div>

          <div class="service-tree-line">
            <span>├──</span>
            <span class="folder">e-commerce/</span>
          </div>

          <div class="service-tree-line">
            <span>├──</span>
            <span class="folder">hosting/</span>
          </div>

          <div class="service-tree-line">
            <span>├──</span>
            <span class="folder">servidores/</span>
          </div>

          <div class="service-tree-line">
            <span>└──</span>
            <span class="folder">seguridad/</span>
          </div>

        </div>

        <!-- DESCRIPCIÓN -->
        <div class="hero-description-row">

          <span class="tree-symbol">└─</span>

          <p>
            Creamos sitios, sistemas y soluciones web
            <strong>modernas, rápidas y seguras</strong>,
            desde el desarrollo hasta su puesta en producción.
          </p>

        </div>

        <!-- BOTONES -->
        <div class="hero-actions-new">

          <router-link
            to="/contacto"
            class="terminal-button terminal-button-primary"
          >
            <span>$</span>
            cotizar --proyecto
          </router-link>

          <router-link
            to="/portafolio"
            class="terminal-button"
          >
            <span>$</span>
            explorar --portafolio
          </router-link>

        </div>

      </div>


      <!-- ===================================== -->
      <!-- DERECHA / TERMINAL                   -->
      <!-- ===================================== -->

      <div class="hero-terminal">

        <!-- CABECERA -->
        <div class="terminal-window-header">

          <div class="terminal-window-tab">
            <span class="terminal-mini-icon">&gt;_</span>
            webcats@server
          </div>

          <div class="terminal-window-actions">
            <span>−</span>
            <span>□</span>
            <span>×</span>
          </div>

        </div>


        <!-- CUERPO -->
        <div class="terminal-window-body">

          <div class="terminal-command">
            <div>
              <span class="terminal-user">webcats@mx</span>
              <span class="terminal-path">:~$</span>
              whoami
            </div>

            <p class="terminal-result">
              Agencia de desarrollo web y soluciones digitales.
            </p>
          </div>


          <div class="terminal-command">
            <div>
              <span class="terminal-user">webcats@mx</span>
              <span class="terminal-path">:~$</span>
              stack --list
            </div>

            <div class="stack-list">
              <span>
                <b>01</b>
                Vue.js
              </span>

              <span>
                <b>02</b>
                Laravel
              </span>

              <span>
                <b>03</b>
                PHP
              </span>

              <span>
                <b>04</b>
                MySQL
              </span>

              <span>
                <b>05</b>
                WHM / cPanel
              </span>

              <span>
                <b>06</b>
                Linux
              </span>
            </div>
          </div>


          <div class="terminal-command">
            <div>
              <span class="terminal-user">webcats@mx</span>
              <span class="terminal-path">:~$</span>
              status --production
            </div>

            <p class="terminal-status">
              <span class="status-dot"></span>
              SYSTEM ONLINE
            </p>
          </div>


          <div class="terminal-current-line">
            <span class="terminal-user">webcats@mx</span>
            <span class="terminal-path">:~$</span>
            <span class="terminal-cursor-block"></span>
          </div>

        </div>

      </div>

    </div>


    <!-- ===================================== -->
    <!-- STATUS BAR                            -->
    <!-- ===================================== -->

    <div class="hero-status-bar">

      <div class="status-left">
        <span>⌘ main*</span>
        <span>Webcats.mx</span>
      </div>

      <div class="status-right">
        <span>Vue 3</span>
        <span>Laravel</span>
        <span>PHP</span>
        <span>MySQL</span>

        <span class="online">
          <i></i>
          ONLINE
        </span>
      </div>

    </div>

  </section>
</Transition>

  <!-- ====================================================== -->
  <!-- SERVICIOS / TERMINAL MODULES                           -->
  <!-- ====================================================== -->
  <section class="webcats-services">

    <div class="services-shell">

      <!-- CABECERA -->
      <div class="services-heading">

        <div class="section-command">
          <span class="command-user">webcats@mx</span>
          <span class="command-path">:~/services$</span>
          <span>ls -la</span>
        </div>

        <div class="services-heading-row">

          <div>
            <span class="section-eyebrow">
              // SERVICIOS DISPONIBLES
            </span>

            <h2>
              Soluciones para llevar tu proyecto
              <span>de la idea a producción.</span>
            </h2>
          </div>

          <p>
            Desarrollo, infraestructura y soporte trabajando como
            un mismo sistema. No solo construimos tu proyecto:
            lo preparamos para funcionar en un entorno real.
          </p>

        </div>

      </div>


      <!-- ================================================== -->
      <!-- CARDS                                              -->
      <!-- ================================================== -->
      <div class="services-terminal-grid">

        <!-- 01 DESARROLLO -->
        <article class="service-terminal-card">

          <div class="service-window-bar">
            <div class="service-window-info">
              <span class="service-number">01</span>
              <span>desarrollo-web.exe</span>
            </div>

            <div class="window-controls">
              <span>−</span>
              <span>□</span>
              <span>×</span>
            </div>
          </div>

          <div class="service-visual">

            <img
              :src="desarrollo"
              alt="Desarrollo Web Profesional"
            />

            <div class="service-visual-overlay"></div>

            <span class="service-status">
              <i></i>
              ACTIVE
            </span>

          </div>

          <div class="service-terminal-body">

            <span class="service-path">
              ~/services/desarrollo-web
            </span>

            <h3>
              Desarrollo Web
              <span>Profesional</span>
            </h3>

            <p>
              Sitios y sistemas modernos, rápidos y preparados
              para crecer junto con tu proyecto.
            </p>

            <div class="service-command-list">
              <span><i>├─</i> Sitios corporativos</span>
              <span><i>├─</i> Landing pages</span>
              <span><i>├─</i> Sistemas web</span>
              <span><i>└─</i> E-commerce</span>
            </div>

            <div class="service-techs">
              <span>Vue.js</span>
              <span>Laravel</span>
              <span>PHP</span>
            </div>

            <router-link
              to="/servicios"
              class="service-terminal-link"
            >
              <span>$</span>
              explorar --servicio
              <b>→</b>
            </router-link>

          </div>

        </article>


        <!-- 02 SERVIDORES -->
        <article class="service-terminal-card">

          <div class="service-window-bar">
            <div class="service-window-info">
              <span class="service-number">02</span>
              <span>server-admin.sh</span>
            </div>

            <div class="window-controls">
              <span>−</span>
              <span>□</span>
              <span>×</span>
            </div>
          </div>

          <div class="service-visual">

            <img
              :src="servidores"
              alt="Administración de Servidores"
            />

            <div class="service-visual-overlay"></div>

            <span class="service-status">
              <i></i>
              ONLINE
            </span>

          </div>

          <div class="service-terminal-body">

            <span class="service-path">
              ~/services/server-admin
            </span>

            <h3>
              Administración de
              <span>Servidores</span>
            </h3>

            <p>
              Administración de infraestructura para mantener
              servicios estables, seguros y disponibles.
            </p>

            <div class="service-command-list">
              <span><i>├─</i> WHM / cPanel</span>
              <span><i>├─</i> DNS / SSL</span>
              <span><i>├─</i> Correo empresarial</span>
              <span><i>└─</i> Mantenimiento</span>
            </div>

            <div class="service-techs">
              <span>Linux</span>
              <span>WHM</span>
              <span>cPanel</span>
            </div>

            <router-link
              to="/servicios"
              class="service-terminal-link"
            >
              <span>$</span>
              explorar --servicio
              <b>→</b>
            </router-link>

          </div>

        </article>


        <!-- 03 SOPORTE -->
        <article class="service-terminal-card">

          <div class="service-window-bar">
            <div class="service-window-info">
              <span class="service-number">03</span>
              <span>support-web.log</span>
            </div>

            <div class="window-controls">
              <span>−</span>
              <span>□</span>
              <span>×</span>
            </div>
          </div>

          <div class="service-visual">

            <img
              :src="devops"
              alt="Soporte y Mantenimiento Web"
            />

            <div class="service-visual-overlay"></div>

            <span class="service-status">
              <i></i>
              RUNNING
            </span>

          </div>

          <div class="service-terminal-body">

            <span class="service-path">
              ~/services/support
            </span>

            <h3>
              Soporte y Mantenimiento
              <span>Web</span>
            </h3>

            <p>
              Diagnóstico, mantenimiento y solución de problemas
              en proyectos que ya se encuentran en producción.
            </p>

            <div class="service-command-list">
              <span><i>├─</i> WordPress</span>
              <span><i>├─</i> Laravel</span>
              <span><i>├─</i> Actualizaciones</span>
              <span><i>└─</i> Seguridad</span>
            </div>

            <div class="service-techs">
              <span>Support</span>
              <span>Security</span>
              <span>Deploy</span>
            </div>

            <router-link
              to="/servicios"
              class="service-terminal-link"
            >
              <span>$</span>
              explorar --servicio
              <b>→</b>
            </router-link>

          </div>

        </article>

      </div>

    </div>

  </section>


  <!-- ====================================================== -->
  <!-- CLIENTES / PROJECT RUNWAY                              -->
  <!-- ====================================================== -->
  <section class="clients-section">

    <div class="clients-shell">

      <!-- SEPARADOR -->
      <div class="clients-command-line">

        <span class="command-symbol">&gt;</span>

        <span>
          trusted_by
        </span>

        <span class="command-option">
          --clients
        </span>

        <span class="command-result">
          [{{ clientLogos.length }} resultados]
        </span>

      </div>


      <!-- CABECERA -->
      <div class="clients-heading">

        <div>

          <span class="section-eyebrow">
            // PROYECTOS EN PRODUCCIÓN
          </span>

          <h2>
            Proyectos desarrollados
            <span>en Webcats.mx_</span>
          </h2>

        </div>

        <div class="clients-heading-right">

          <p>
            Proyectos desarrollados para empresas y profesionales
            de distintos sectores, desde el diseño hasta su
            publicación en producción.
          </p>

          <router-link
            to="/portafolio"
            class="clients-portfolio-link"
          >
            <span>$</span>
            ver --proyectos
            <b>→</b>
          </router-link>

        </div>

      </div>


      <!-- VENTANA DE LOGOS -->
      <div class="clients-terminal-window">

        <div class="clients-window-header">

          <div class="clients-window-title">
            <span class="folder-icon">▣</span>
            /webcats/clientes
          </div>

          <div class="clients-window-meta">
            <span>{{ clientLogos.length }} clientes</span>
            <span>production</span>
            <span class="clients-online">
              <i></i>
              ONLINE
            </span>
          </div>

        </div>


        <div class="logo-runway-new">

          <div class="runway-fade runway-fade-left"></div>
          <div class="runway-fade runway-fade-right"></div>

          <div class="logo-track-new">

            <!-- PRIMER GRUPO -->
            <div
              v-for="(logo, i) in clientLogos"
              :key="`client-a-${i}`"
              class="client-logo-cell"
            >
              <span class="client-index">
                {{ String(i + 1).padStart(2, '0') }}
              </span>

              <img
                :src="logo"
                alt="Cliente Webcats"
              />
            </div>

            <!-- DUPLICADO PARA LOOP -->
            <div
              v-for="(logo, i) in clientLogos"
              :key="`client-b-${i}`"
              class="client-logo-cell"
            >
              <span class="client-index">
                {{ String(i + 1).padStart(2, '0') }}
              </span>

              <img
                :src="logo"
                alt="Cliente Webcats"
              />
            </div>

          </div>

        </div>


        <!-- STATUS INFERIOR -->
        <div class="clients-window-footer">

          <span>
            webcats.mx / clientes
          </span>

          <span>
            {{ clientLogos.length }} proyectos cargados
          </span>

        </div>

      </div>

    </div>

  </section>


  <!-- ====================================================== -->
  <!-- TECH STACK / TERMINAL ARCHITECTURE                     -->
  <!-- ====================================================== -->
  <section class="tech-stack-section" ref="techStackRef">
    <div class="tech-shell">

      <div class="tech-topbar">
        <span><b>&gt;</b> ./tech-stack</span>
        <span>[ Tecnologías principales ]</span>
      </div>

      <div class="tech-layout">

        <!-- IZQUIERDA -->
        <div class="tech-intro">
          <span class="tech-eyebrow">MI TECH STACK</span>

          <h2>
            Tecnologías
            <span>utilizadas</span>
          </h2>

          <p>
            Un stack moderno y flexible para desarrollar sitios,
            sistemas y soluciones escalables.
          </p>

          <div class="tech-principles">
            <div>
              <span class="principle-icon">ϟ</span>
              <p><strong>Rendimiento</strong><small>Sitios rápidos<br>y optimizados</small></p>
            </div>

            <div>
              <span class="principle-icon">◉</span>
              <p><strong>Seguridad</strong><small>Buenas prácticas<br>desde producción</small></p>
            </div>

            <div>
              <span class="principle-icon">⬡</span>
              <p><strong>Escalabilidad</strong><small>Listo para crecer<br>con tu proyecto</small></p>
            </div>
          </div>

          <div class="tech-command">
            <span>&gt;</span>
            <span>code better. build bigger.</span>
            <small>// Webcats.mx</small>
          </div>
        </div>

        <!-- DERECHA -->
        <div class="tech-categories">

          <article class="tech-category tech-category--frontend">
            <div class="tech-category-info">
              <span class="category-icon">▣</span>
              <div>
                <strong>Frontend</strong>
                <small>Interfaces modernas<br>y responsivas</small>
              </div>
            </div>

            <div class="tech-grid">
              <div class="tech-item" :class="{ visible: show.vue }">
                <img src="/src/assets/icons/frameworks/vue.png" alt="Vue.js">
                <span>Vue.js</span>
              </div>
              <div class="tech-item" :class="{ visible: show.html }">
                <img src="/src/assets/icons/frameworks/html.png" alt="HTML5">
                <span>HTML5</span>
              </div>
              <div class="tech-item tech-css" :class="{ visible: show.html }">
                <span class="tech-text-icon">CSS</span>
                <span>CSS3</span>
              </div>
              <div class="tech-item" :class="{ visible: show.js }">
                <img src="/src/assets/icons/frameworks/js.png" alt="JavaScript">
                <span>JavaScript</span>
              </div>
              <div class="tech-item" :class="{ visible: show.vite }">
                <img src="/src/assets/icons/frameworks/vite.png" alt="Vite">
                <span>Vite</span>
              </div>
              <div class="tech-item" :class="{ visible: show.tailwind }">
                <img src="/src/assets/icons/frameworks/tailwind.png" alt="Tailwind">
                <span>Tailwind</span>
              </div>
            </div>
          </article>

          <article class="tech-category tech-category--backend">
            <div class="tech-category-info">
              <span class="category-icon">▣</span>
              <div>
                <strong>Backend</strong>
                <small>Lógica, APIs<br>y sistemas robustos</small>
              </div>
            </div>

            <div class="tech-grid">
              <div class="tech-item" :class="{ visible: show.laravel }">
                <img src="/src/assets/icons/frameworks/laravel.png" alt="Laravel">
                <span>Laravel</span>
              </div>
              <div class="tech-item tech-php" :class="{ visible: show.laravel }">
                <span class="tech-text-icon">php</span>
                <span>PHP</span>
              </div>
              <div class="tech-item tech-mysql" :class="{ visible: show.laravel }">
                <span class="tech-text-icon">SQL</span>
                <span>MySQL</span>
              </div>
              <div class="tech-item tech-node" :class="{ visible: show.laravel }">
                <span class="tech-text-icon">JS</span>
                <span>Node.js</span>
              </div>
            </div>
          </article>

          <article class="tech-category tech-category--infra">
            <div class="tech-category-info">
              <span class="category-icon">▣</span>
              <div>
                <strong>Infraestructura</strong>
                <small>Servidores, dominios<br>y seguridad</small>
              </div>
            </div>

            <div class="tech-grid">
              <div class="tech-item" :class="{ visible: show.github }">
                <img src="/src/assets/icons/git/github.png" class="github-icon" alt="GitHub">
                <span>GitHub</span>
              </div>
              <div class="tech-item tech-linux" :class="{ visible: show.whm }">
                <span class="tech-text-icon">Linux</span>
                <span>Linux</span>
              </div>
              <div class="tech-item tech-nginx" :class="{ visible: show.whm }">
                <span class="tech-text-icon">NG</span>
                <span>Nginx</span>
              </div>
              <div class="tech-item" :class="{ visible: show.cpanel }">
                <img src="/src/assets/icons/servers/cpanel.png" alt="cPanel">
                <span>cPanel</span>
              </div>
              <div class="tech-item" :class="{ visible: show.whm }">
                <img src="/src/assets/icons/servers/whm.png" alt="WHM">
                <span>WHM</span>
              </div>
            </div>
          </article>

        </div>
      </div>

      <div class="tech-statusbar">
        <span>webcats.mx / stack</span>
        <span><i></i> production ready</span>
      </div>

    </div>
  </section>

  <!-- SECCIÓN QUIÉN SOY -->
<!-- =========================================
     ACERCA DE MÍ
========================================== -->
<section class="about-terminal">

  <div class="about-terminal__top">
    <span class="terminal-path">
      <span class="prompt">></span> ./about-me
    </span>

    <span class="terminal-comment">
      [ código con propósito ]
    </span>
  </div>

  <div class="about-terminal__container">

    <!-- ==============================
         COLUMNA IZQUIERDA
    =============================== -->
    <div class="about-terminal__intro">

      <span class="about-label">ACERCA DE MÍ</span>

      <h2>
        Más que código,
        <span>soluciones reales._</span>
      </h2>

      <p>
        Soy <strong>Ulises Guzmán</strong>, SysAdmin y Desarrollador Web
        con más de <strong>8 años de experiencia</strong> trabajando con
        sitios web, servidores y entornos reales en producción.
      </p>

      <p>
        Fundé <strong class="webcats">Webcats.mx</strong> para desarrollar
        soluciones web modernas, rápidas y seguras, combinando desarrollo,
        infraestructura y soporte en un mismo lugar.
      </p>

      <router-link to="/acerca" class="about-button">
        <span>></span>
        Conoce más sobre mí
        <span class="button-arrow">→</span>
      </router-link>

    </div>


    <!-- ==============================
         COLUMNA DERECHA
    =============================== -->
    <div class="about-terminal__profile">

      <div class="profile-title">
        <span>// EXPERIENCIA EN NÚMEROS</span>
      </div>

      <!-- STATS -->
      <div class="about-stats">

        <div class="stat-card">
          <span class="stat-icon">&lt;/&gt;</span>

          <strong>+8 años</strong>

          <small>
            de experiencia
          </small>
        </div>


        <div class="stat-card">
          <span class="stat-icon">▣</span>

          <strong>Web</strong>

          <small>
            desarrollo profesional
          </small>
        </div>


        <div class="stat-card">
          <span class="stat-icon">⌘</span>

          <strong>SysAdmin</strong>

          <small>
            servidores y producción
          </small>
        </div>


        <div class="stat-card">
          <span class="stat-icon">↗</span>

          <strong>Siempre</strong>

          <small>
            aprendiendo
          </small>
        </div>

      </div>


      <!-- TERMINAL / FILOSOFÍA -->
      <div class="about-console">

        <div class="console-header">
          <span></span>
          <span></span>
          <span></span>

          <small>webcats@mx: ~/about</small>
        </div>

        <div class="console-content">

          <div class="console-command">
            <span class="console-user">webcats@mx</span>
            <span>:</span>
            <span class="console-path">~/about</span>
            <span>$</span>
            cat enfoque.txt
          </div>

          <p>
            “Mi enfoque es entender una necesidad, convertirla en una
            solución sólida y acompañarla desde el desarrollo hasta su
            funcionamiento en producción.”
          </p>

          <span class="console-signature">
            — Ulises Guzmán
          </span>

        </div>

      </div>


      <!-- ÁREAS -->
      <div class="about-skills">

        <span>Desarrollo Web</span>
        <span>Administración de Servidores</span>
        <span>Hosting</span>
        <span>Seguridad</span>
        <span>Soporte</span>

      </div>

    </div>

  </div>

</section>

  <ReviewsWebcats />

</template>

<script setup>
import { ref, onMounted } from "vue"
import ReviewsWebcats from "../components/ReviewsWebcats.vue"
import desarrollo from "@/assets/webcats/desarrollo-web.webp"
import servidores from "@/assets/webcats/servidores.webp"
import devops from "@/assets/webcats/devops.webp"
import logoLimalum from "@/assets/logos/logo-limalum.png"
import logoErik from "@/assets/logos/logo_erik.png"
import logoBear from "@/assets/logos/bear_mono.png"
import logoCasillas from "@/assets/logos/logo_casillas.png"
import logoDerma from "@/assets/logos/logo_derma.png"
import logoGeo from "@/assets/logos/logo_geo.png"
import logoNiticolor from "@/assets/logos/niticolor_mono.png"
import logoWlc from "@/assets/logos/wlc_mono.png"
import logohospedaje from "@/assets/logos/logo_arce.png"

const clientLogos = [
  logoLimalum,
  logoErik,
  logoBear,
  logoCasillas,
  logoDerma,
  logoGeo,
  logoNiticolor,
  logoWlc,
  logohospedaje
  
]


const heroAnimate = ref(false)

onMounted(() => {
  setTimeout(() => {
    heroAnimate.value = true
  }, 100)
})


const techStackRef = ref(null)

const show = ref({
  github: false,
  vite: false,
  vue: false,
  laravel: false,
  whm: false,
  cpanel: false,
  html: false,
  js: false,
  tailwind: false,
})

onMounted(() => {
  const observer = new IntersectionObserver(
    entries => {
      if (entries[0].isIntersecting) {
        startTechAnimation()
        observer.disconnect()
      }
    },
    { threshold: 0.22 }
  )

  if (techStackRef.value) observer.observe(techStackRef.value)
})

function startTechAnimation() {
  setTimeout(() => (show.value.github = true), 150)
  setTimeout(() => (show.value.vite = true), 300)
  setTimeout(() => (show.value.vue = true), 450)
  setTimeout(() => {
    show.value.html = true
    show.value.js = true
    show.value.tailwind = true
  }, 650)
  setTimeout(() => (show.value.laravel = true), 850)
  setTimeout(() => (show.value.whm = true), 1050)
  setTimeout(() => (show.value.cpanel = true), 1250)
}


</script>

<style>

/* =========================================================
   WEBCATS / HOME — SISTEMA GENERAL
   Un solo ancho para todas las secciones principales.
========================================================= */
:root {
  --home-shell: 1550px;
  --home-width: 92%;
  --home-pad-y: 96px;
  --home-pad-x: 4%;
  --home-bg: #0b0b0d;
  --home-panel: #0d0d0f;
  --home-border: #2b2b2f;
  --home-green: #22c55e;
  --home-cyan: #22d3ee;
  --home-blue: #7bc6ff;
  --home-text: #f5f5f5;
  --home-muted: #9b9ba0;
}

.webcats-hero,
.webcats-services,
.clients-section,
.tech-stack-section,
.about-terminal {
  width: 100%;
  box-sizing: border-box;
}

.hero-workspace,
.services-shell,
.clients-shell,
.tech-shell,
.about-terminal__top,
.about-terminal__container {
  width: min(var(--home-width), var(--home-shell));
  max-width: var(--home-shell);
  margin-left: auto;
  margin-right: auto;
  box-sizing: border-box;
}

.tech-stack-section {
  background: #0b0b0d;
  color: #fff;
  font-family: "JetBrains Mono", monospace;
}

.tech-shell {
  position: relative;
  padding-top: 70px;
  padding-bottom: 55px;
}

/* ========================= HERO ========================= */
/* =========================================================
   WEBCATS HERO / TERMINAL WORKSPACE
========================================================= */

.webcats-hero {
  position: relative;

  width: 100%;
  min-height: calc(100vh - 64px);

  display: flex;
  flex-direction: column;
  justify-content: center;

  padding: 80px 5% 60px;

  box-sizing: border-box;

  overflow: hidden;

  background: #0b0b0d;
  color: #ffffff;

  font-family: "JetBrains Mono", monospace;
}


/* =========================================================
   GRID DE FONDO
========================================================= */

.hero-grid-bg {
  position: absolute;
  inset: 0;

  pointer-events: none;

  opacity: 0.11;

  background-image:
    linear-gradient(
      rgba(255, 255, 255, 0.035) 1px,
      transparent 1px
    ),
    linear-gradient(
      90deg,
      rgba(255, 255, 255, 0.035) 1px,
      transparent 1px
    );

  background-size: 45px 45px;

  mask-image:
    linear-gradient(
      to bottom,
      transparent,
      black 20%,
      black 80%,
      transparent
    );
}


/* =========================================================
   WORKSPACE
========================================================= */

.hero-workspace {
  position: relative;
  z-index: 2;

  display: grid;

  grid-template-columns:
    minmax(500px, 1.1fr)
    minmax(470px, 0.9fr);

  gap: clamp(70px, 7vw, 140px);

  align-items: center;
}


/* =========================================================
   HERO IZQUIERDA
========================================================= */

.hero-main {
  position: relative;
}


/* usuario/path */

.hero-path {
  margin-bottom: 25px;

  display: flex;
  gap: 6px;

  font-size: 13px;

  color: #8b8b8b;
}


.path-user {
  color: #22c55e;
}


.path-location {
  color: #7bc6ff;
}


.path-symbol {
  color: #ffffff;
}


/* =========================================================
   MARCA
========================================================= */

.hero-brand-row {
  display: flex;
  align-items: center;

  gap: 16px;

  margin-bottom: 18px;
}


.tree-symbol {
  flex: 0 0 auto;

  color: #727272;

  font-size: 22px;
}


.hero-brand-new {
  color: #7bc6ff;

  font-size: clamp(28px, 2.5vw, 42px);

  line-height: 1;

  font-weight: 700;

  letter-spacing: -0.04em;
}


/* =========================================================
   TÍTULO
========================================================= */

.hero-title-row {
  display: flex;

  align-items: flex-start;

  gap: 16px;
}


.tree-middle {
  margin-top: 18px;
}


.hero-main-title {
  margin: 0;

  font-size: clamp(48px, 5vw, 82px);

  line-height: 0.98;

  letter-spacing: -0.065em;

  font-weight: 700;

  color: #22c55e;
}


.hero-main-title > span {
  display: block;

  color: #ffffff;
}


/* cursor */

.terminal-cursor {
  display: inline-block;

  margin-left: 4px;

  color: #22c55e;

  animation: cursorBlink 1s steps(1) infinite;
}


@keyframes cursorBlink {

  0%,
  48% {
    opacity: 1;
  }

  49%,
  100% {
    opacity: 0;
  }

}


/* =========================================================
   ÁRBOL SERVICIOS
========================================================= */

.hero-services-tree {
  margin:
    35px
    0
    32px
    42px;

  display: grid;

  grid-template-columns:
    repeat(2, minmax(190px, 1fr));

  gap: 10px 30px;

  max-width: 600px;
}


.service-tree-line {
  display: flex;

  gap: 11px;

  color: #656565;

  font-size: 13px;
}


.folder {
  color: #c4c4c4;

  transition:
    color 0.2s ease,
    transform 0.2s ease;
}


.service-tree-line:hover .folder {
  color: #22d3ee;

  transform: translateX(4px);
}


/* =========================================================
   DESCRIPCIÓN
========================================================= */

.hero-description-row {
  display: flex;

  align-items: flex-start;

  gap: 16px;
}


.hero-description-row p {
  max-width: 650px;

  margin: 0;

  color: #a9a9ad;

  font-size: clamp(14px, 1vw, 17px);

  line-height: 1.8;
}


.hero-description-row strong {
  color: #e8e8e8;

  font-weight: 500;
}


/* =========================================================
   BOTONES
========================================================= */

.hero-actions-new {
  margin:
    35px
    0
    0
    42px;

  display: flex;

  flex-wrap: wrap;

  gap: 14px;
}


.terminal-button {
  min-height: 48px;

  padding: 0 22px;

  display: inline-flex;
  align-items: center;

  gap: 10px;

  border: 1px solid #4a4a4a;

  border-radius: 7px;

  background: #272729;

  color: #ffffff;

  text-decoration: none;

  font-size: 13px;

  font-weight: 600;

  transition:
    transform 0.2s ease,
    background 0.2s ease,
    border-color 0.2s ease;
}


.terminal-button span {
  color: #22d3ee;
}


.terminal-button:hover {
  transform: translateY(-2px);

  background: #323234;

  border-color: #686868;
}


.terminal-button-primary {
  background: #008d35;

  border-color: #00a33e;
}


.terminal-button-primary span {
  color: #ffffff;
}


.terminal-button-primary:hover {
  background: #00a33e;

  border-color: #00bd48;
}


/* =========================================================
   TERMINAL DERECHA
========================================================= */

.hero-terminal {
  position: relative;

  min-height: 500px;

  overflow: hidden;

  border: 1px solid #424242;

  border-radius: 10px;

  background: #0e0e10;

  box-shadow:
    0 30px 80px rgba(0, 0, 0, 0.5),
    0 0 0 1px rgba(255, 255, 255, 0.02);
}


/* pequeño glow detrás */

.hero-terminal::before {
  content: "";

  position: absolute;

  width: 280px;
  height: 280px;

  right: -100px;
  top: -100px;

  border-radius: 50%;

  background: rgba(34, 211, 238, 0.06);

  filter: blur(60px);

  pointer-events: none;
}


/* =========================================================
   CABECERA TERMINAL
========================================================= */

.terminal-window-header {
  height: 52px;

  padding: 0 15px 0 8px;

  display: flex;
  align-items: flex-end;
  justify-content: space-between;

  background: #303030;

  border-bottom: 1px solid #444;
}


.terminal-window-tab {
  height: 44px;

  min-width: 220px;

  padding: 0 17px;

  display: flex;
  align-items: center;

  gap: 10px;

  border-radius: 8px 8px 0 0;

  background: #0e0e10;

  color: #f0f0f0;

  font-size: 12px;
}


.terminal-mini-icon {
  color: #22d3ee;
}


.terminal-window-actions {
  height: 100%;

  display: flex;
  align-items: center;

  gap: 22px;

  color: #a5a5a5;

  font-size: 13px;
}


/* =========================================================
   TERMINAL BODY
========================================================= */

.terminal-window-body {
  position: relative;

  padding: 32px;

  font-size: 13px;

  line-height: 1.7;
}


.terminal-command {
  margin-bottom: 30px;

  color: #e3e3e3;
}


.terminal-user {
  color: #22c55e;

  font-weight: 600;
}


.terminal-path {
  margin-right: 9px;

  color: #7bc6ff;
}


.terminal-result {
  margin:
    9px
    0
    0
    0;

  padding-left: 18px;

  color: #8f8f93;
}


/* =========================================================
   STACK
========================================================= */

.stack-list {
  margin-top: 13px;

  padding-left: 18px;

  display: grid;

  grid-template-columns: repeat(2, 1fr);

  gap: 7px 20px;
}


.stack-list span {
  color: #b9b9bd;
}


.stack-list b {
  display: inline-block;

  width: 28px;

  color: #555;

  font-weight: 400;
}


/* =========================================================
   STATUS
========================================================= */

.terminal-status {
  margin:
    10px
    0
    0
    18px;

  display: flex;
  align-items: center;

  gap: 9px;

  color: #22c55e;

  font-weight: 600;
}


.status-dot {
  width: 8px;
  height: 8px;

  border-radius: 50%;

  background: #22c55e;

  box-shadow:
    0 0 10px rgba(34, 197, 94, 0.7);
}


/* cursor terminal */

.terminal-current-line {
  display: flex;
  align-items: center;
}


.terminal-cursor-block {
  width: 8px;
  height: 16px;

  margin-left: 3px;

  background: #cfcfcf;

  animation: terminalBlockBlink 1s steps(1) infinite;
}


@keyframes terminalBlockBlink {

  50% {
    opacity: 0;
  }

}


/* =========================================================
   STATUS BAR INFERIOR
========================================================= */

.hero-status-bar {
  position: absolute;

  z-index: 5;

  left: 0;
  right: 0;
  bottom: 0;

  min-height: 34px;

  padding: 0 4%;

  display: flex;
  align-items: center;
  justify-content: space-between;

  box-sizing: border-box;

  border-top: 1px solid #303033;

  background: #151517;

  color: #77777c;

  font-size: 10px;

  letter-spacing: 0.03em;
}


.status-left,
.status-right {
  display: flex;

  align-items: center;

  gap: 22px;
}


.online {
  display: flex;

  align-items: center;

  gap: 7px;

  color: #22c55e;
}


.online i {
  width: 6px;
  height: 6px;

  border-radius: 50%;

  background: #22c55e;
}


/* =========================================================
   ENTRADA
========================================================= */

.hero-enter-active {
  transition:
    opacity 0.8s ease,
    transform 0.8s ease;
}


.hero-enter-from {
  opacity: 0;

  transform: translateY(20px);
}


.hero-enter-to {
  opacity: 1;

  transform: translateY(0);
}


/* =========================================================
   RESPONSIVE 1200
========================================================= */

@media (max-width: 1200px) {

  .webcats-hero {
    padding:
      80px
      4%
      70px;
  }
  .hero-workspace {

    grid-template-columns:
      minmax(420px, 1fr)
      minmax(400px, 0.9fr);

    gap: 50px;
  }


  .hero-main-title {
    font-size: clamp(46px, 5vw, 68px);
  }


  .hero-terminal {
    min-height: 460px;
  }

}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 950px) {

  .webcats-hero {
    min-height: auto;

    padding:
      90px
      30px
      80px;
  }


  .hero-workspace {
    width: min(100%, var(--home-shell));

    grid-template-columns: 1fr;

    gap: 65px;
  }


  .hero-main-title {
    font-size: clamp(48px, 8vw, 70px);
  }


  .hero-services-tree {
    max-width: 650px;
  }


  .hero-terminal {
    min-height: 440px;
  }


  .hero-status-bar {
    position: absolute;
  }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 600px) {

  .webcats-hero {
    padding:
      65px
      20px
      70px;
  }


  .hero-workspace {
    width: 100%;

    gap: 45px;
  }


  .hero-path {
    margin-bottom: 18px;

    font-size: 11px;
  }


  .hero-brand-row,
  .hero-title-row,
  .hero-description-row {
    gap: 9px;
  }


  .tree-symbol {
    font-size: 15px;
  }


  .tree-middle {
    margin-top: 8px;
  }


  .hero-brand-new {
    font-size: clamp(25px, 8vw, 34px);
  }


  .hero-main-title {
    font-size: clamp(38px, 11vw, 55px);

    line-height: 1.02;
  }


  .hero-services-tree {
    margin:
      28px
      0
      28px
      24px;

    grid-template-columns: 1fr;

    gap: 8px;
  }


  .hero-description-row p {
    font-size: 13px;

    line-height: 1.7;
  }


  .hero-actions-new {
    margin:
      28px
      0
      0
      24px;

    flex-direction: column;

    align-items: stretch;
  }


  .terminal-button {
    width: 100%;

    justify-content: center;

    box-sizing: border-box;
  }


  /* terminal */

  .hero-terminal {
    min-height: 410px;

    border-radius: 7px;
  }


  .terminal-window-header {
    height: 47px;
  }


  .terminal-window-tab {
    height: 40px;

    min-width: 175px;

    font-size: 10px;
  }


  .terminal-window-actions {
    gap: 11px;

    font-size: 11px;
  }


  .terminal-window-body {
    padding: 24px 20px;

    font-size: 11px;
  }


  .stack-list {
    grid-template-columns: 1fr;

    gap: 5px;
  }


  /* status bar */

  .hero-status-bar {
    padding: 0 15px;
  }


  .status-left span:nth-child(2) {
    display: none;
  }


  .status-right span:not(.online) {
    display: none;
  }

}
/* ====================== TECH STACK ====================== */
.tech-stack-section {
  position: relative;
  padding: 100px 0;
  overflow: hidden;
  background:
    radial-gradient(circle at 18% 35%, rgba(34, 211, 238, .055), transparent 28%),
    #09090b;
  color: #f5f5f5;
  font-family: "JetBrains Mono", monospace;
  border-top: 1px solid #1e1e22;
  border-bottom: 1px solid #1e1e22;
}

.tech-shell {
  position: relative;
  overflow: hidden;
  border: 1px solid #26262b;
  background: rgba(10, 10, 12, .82);
  box-shadow: 0 30px 90px rgba(0, 0, 0, .25);
}

.tech-shell::before {
  content: "";
  position: absolute;
  inset: 0;
  pointer-events: none;
  opacity: .08;
  background-image:
    linear-gradient(rgba(255,255,255,.035) 1px, transparent 1px),
    linear-gradient(90deg, rgba(255,255,255,.035) 1px, transparent 1px);
  background-size: 38px 38px;
}

.tech-topbar,
.tech-statusbar {
  position: relative;
  z-index: 2;
  min-height: 38px;
  padding: 0 22px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  color: #74747b;
  font-size: 13px;
  letter-spacing: .04em;
  background: #0e0e11;
}

.tech-topbar {
  border-bottom: 1px solid #25252a;
}

.tech-topbar b {
  color: #22d3ee;
  font-weight: 400;
}

.tech-layout {
  position: relative;
  z-index: 2;
  display: grid;
  grid-template-columns: minmax(360px, .72fr) minmax(650px, 1.28fr);
  gap: clamp(60px, 6vw, 115px);
  padding: clamp(60px, 5vw, 90px);
  align-items: center;
}

.tech-eyebrow {
  display: block;
  margin-bottom: 16px;
  color: #7b7b82;
  font-size: 13px;
  letter-spacing: .16em;
}

.tech-intro h2 {
  max-width: 600px;
  margin: 0;
  color: #fff;
  font-size: clamp(38px, 3.5vw, 62px);
  line-height: 1.02;
  letter-spacing: -.055em;
}

.tech-intro h2 span {
  display: block;
  color: #22c55e;
}

.tech-intro > p {
  max-width: 590px;
  margin: 25px 0 0;
  color: #98989f;
  font-size: 16px;
  line-height: 1.75;
}

.tech-principles {
  margin-top: 42px;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 15px;
}

.tech-principles > div {
  display: flex;
  align-items: flex-start;
  gap: 10px;
}

.principle-icon {
  width: 30px;
  height: 30px;
  flex: 0 0 30px;
  display: grid;
  place-items: center;
  border: 1px solid #24333a;
  border-radius: 50%;
  color: #22d3ee;
  background: #10161a;
  font-size: 12px;
}

.tech-principles p {
  margin: 0;
  display: flex;
  flex-direction: column;
  gap: 5px;
}

.tech-principles strong {
  color: #dedee2;
  font-size: 13px;
}

.tech-principles small {
  color: #66666d;
  font-size: 11px;
  line-height: 1.5;
}

.tech-command {
  margin-top: 46px;
  min-height: 42px;
  padding: 0 14px;
  display: flex;
  align-items: center;
  gap: 9px;
  border: 1px solid #242429;
  background: #0c0c0f;
  color: #d4d4d7;
  font-size: 13px;
}

.tech-command > span:first-child {
  color: #22c55e;
}

.tech-command small {
  margin-left: auto;
  color: #55555b;
  font-size: 10px;
}

.tech-categories {
  display: grid;
  gap: 14px;
}

.tech-category {
  display: grid;
  grid-template-columns: 165px 1fr;
  gap: 22px;
  min-height: 130px;
  padding: 18px;
  border: 1px solid #25252b;
  background: rgba(13, 13, 16, .9);
  transition: border-color .25s ease, transform .25s ease, background .25s ease;
}

.tech-category:hover {
  transform: translateX(4px);
  background: #0e1012;
}

.tech-category--frontend:hover {
  border-color: rgba(34, 197, 94, .48);
}

.tech-category--backend:hover {
  border-color: rgba(34, 211, 238, .4);
}

.tech-category--infra:hover {
  border-color: rgba(167, 139, 250, .42);
}

.tech-category-info {
  padding: 8px 18px 8px 5px;
  display: flex;
  gap: 10px;
  border-right: 1px solid #242429;
}

.category-icon {
  color: #22c55e;
  font-size: 12px;
}

.tech-category--backend .category-icon {
  color: #22d3ee;
}

.tech-category--infra .category-icon {
  color: #a78bfa;
}

.tech-category-info div {
  display: flex;
  flex-direction: column;
  gap: 7px;
}

.tech-category-info strong {
  color: #ededf0;
  font-size: 14px;
}

.tech-category-info small {
  color: #626269;
  font-size: 12px;
  line-height: 1.5;
}

.tech-grid {
  display: grid;
  grid-template-columns: repeat(6, minmax(65px, 1fr));
  gap: 9px;
  align-items: stretch;
}

.tech-item {
  min-height: 88px;
  padding: 11px 7px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 9px;
  border: 1px solid #232329;
  background: #0a0a0d;
  opacity: 0;
  transform: translateY(12px) scale(.96);
  transition:
    opacity .45s ease,
    transform .45s ease,
    border-color .2s ease,
    background .2s ease;
}

.github-icon {
  filter: brightness(0) invert(1);
}

.tech-item.visible {
  opacity: 1;
  transform: translateY(0) scale(1);
}

.tech-item:hover {
  border-color: #3b3b43;
  background: #111115;
  transform: translateY(-3px) scale(1);
}

.tech-item img {
  width: 34px;
  height: 34px;
  object-fit: contain;
}

.tech-item > span:last-child {
  color: #8e8e95;
  font-size: 10px;
  text-align: center;
}

.tech-text-icon {
  min-height: 34px;
  display: grid;
  place-items: center;
  color: #22d3ee;
  font-size: 13px;
  font-weight: 700;
}

.tech-css .tech-text-icon {
  color: #60a5fa;
}

.tech-php .tech-text-icon {
  color: #a5b4fc;
}

.tech-mysql .tech-text-icon {
  color: #38bdf8;
}

.tech-node .tech-text-icon {
  color: #22c55e;
}

.tech-python .tech-text-icon {
  color: #facc15;
}

.tech-linux .tech-text-icon,
.tech-nginx .tech-text-icon {
  color: #e5e7eb;
  font-size: 9px;
}

.tech-cloud .tech-text-icon {
  color: #60a5fa;
  font-size: 24px;
}

.tech-statusbar {
  border-top: 1px solid #25252a;
}

.tech-statusbar span:last-child {
  display: flex;
  align-items: center;
  gap: 7px;
  color: #22c55e;
}

.tech-statusbar i {
  width: 6px;
  height: 6px;
  border-radius: 50%;
  background: #22c55e;
  box-shadow: 0 0 8px rgba(34, 197, 94, .6);
}

/* Laptop */
@media (max-width: 1250px) {
  .tech-layout {
    grid-template-columns: minmax(300px, .65fr) minmax(580px, 1.35fr);
    gap: 45px;
    padding: 55px 45px;
  }

  .tech-category {
    grid-template-columns: 135px 1fr;
    gap: 15px;
  }

  .tech-grid {
    grid-template-columns: repeat(3, 1fr);
  }

  .tech-item {
    min-height: 76px;
  }
}

/* Tablet */
@media (max-width: 950px) {
  .tech-stack-section {
    padding: 70px 0;
  }

  .tech-layout {
    grid-template-columns: 1fr;
    gap: 55px;
    padding: 55px 40px;
  }

  .tech-intro h2 {
    max-width: 700px;
  }

  .tech-intro > p {
    max-width: 680px;
  }

  .tech-category {
    grid-template-columns: 150px 1fr;
  }

  .tech-grid {
    grid-template-columns: repeat(3, 1fr);
  }
}

/* Mobile */
@media (max-width: 600px) {
  .tech-stack-section {
    padding: 45px 0;
  }

  .tech-topbar,
  .tech-statusbar {
    padding: 0 14px;
    font-size: 8px;
  }

  .tech-topbar span:last-child {
    display: none;
  }

  .tech-layout {
    padding: 38px 20px;
    gap: 42px;
  }

  .tech-intro h2 {
    font-size: clamp(34px, 10vw, 46px);
  }

  .tech-intro > p {
    font-size: 12px;
  }

  .tech-principles {
    grid-template-columns: 1fr;
    gap: 18px;
  }

  .tech-principles small br {
    display: none;
  }

  .tech-command small {
    display: none;
  }

  .tech-category {
    grid-template-columns: 1fr;
    gap: 16px;
    padding: 15px;
  }

  .tech-category-info {
    border-right: 0;
    border-bottom: 1px solid #242429;
    padding: 4px 0 14px;
  }

  .tech-grid {
    grid-template-columns: repeat(3, 1fr);
  }

  .tech-item {
    min-height: 82px;
  }
}

@media (max-width: 390px) {
  .tech-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}


/* ================= SERVICIOS / CLIENTES ================= */
/* =========================================================
   SERVICES / WEBCATS TERMINAL
========================================================= */

.webcats-services {
  position: relative;
  width: 100%;
  padding: 100px 4% 75px;
  box-sizing: border-box;
  overflow: hidden;

  background:
    linear-gradient(
      rgba(255, 255, 255, 0.018) 1px,
      transparent 1px
    ),
    linear-gradient(
      90deg,
      rgba(255, 255, 255, 0.018) 1px,
      transparent 1px
    ),
    #0d0d0f;

  background-size: 42px 42px;

  color: #fff;
  font-family: "JetBrains Mono", monospace;
}


/* =========================================================
   COMMAND
========================================================= */

.section-command {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  gap: 7px;

  margin-bottom: 30px;

  color: #9b9ba0;
  font-size: 13px;
}

.command-user {
  color: #22c55e;
}

.command-path {
  color: #7bc6ff;
}


/* =========================================================
   SERVICES HEADING
========================================================= */

.services-heading {
  margin-bottom: 55px;
}

.services-heading-row {
  display: grid;
  grid-template-columns: minmax(500px, 1.2fr) minmax(330px, 0.55fr);
  align-items: end;
  gap: clamp(60px, 8vw, 150px);
}

.section-eyebrow {
  display: block;
  margin-bottom: 17px;

  color: #22c55e;

  font-size: 11px;
  letter-spacing: 0.16em;
}

.services-heading h2,
.clients-heading h2 {
  margin: 0;

  font-size: clamp(36px, 3.1vw, 58px);
  line-height: 1.08;
  letter-spacing: -0.045em;
  font-weight: 700;
}

.services-heading h2 span,
.clients-heading h2 span {
  display: block;
  color: #7bc6ff;
}

.services-heading-row > p,
.clients-heading-right > p {
  margin: 0;

  color: #929297;

  font-size: 14px;
  line-height: 1.8;
}


/* =========================================================
   SERVICE GRID
========================================================= */

.services-terminal-grid {
  display: grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));

  gap: clamp(20px, 2vw, 32px);
}


/* =========================================================
   SERVICE WINDOW
========================================================= */

.service-terminal-card {
  position: relative;

  min-width: 0;

  overflow: hidden;

  border: 1px solid #353538;
  border-radius: 10px;

  background: #101012;

  box-shadow:
    0 25px 60px rgba(0, 0, 0, 0.3);

  transition:
    transform 0.3s ease,
    border-color 0.3s ease,
    box-shadow 0.3s ease;
}

.service-terminal-card:hover {
  transform: translateY(-8px);

  border-color: #58585d;

  box-shadow:
    0 30px 80px rgba(0, 0, 0, 0.55),
    0 0 0 1px rgba(34, 197, 94, 0.06);
}


/* =========================================================
   WINDOW BAR
========================================================= */

.service-window-bar {
  height: 48px;

  padding: 0 16px;

  display: flex;
  align-items: center;
  justify-content: space-between;

  box-sizing: border-box;

  background: #29292b;

  border-bottom: 1px solid #3c3c3f;
}

.service-window-info {
  display: flex;
  align-items: center;
  gap: 12px;

  color: #c9c9cd;

  font-size: 11px;
}

.service-number {
  color: #22d3ee;
}

.window-controls {
  display: flex;
  align-items: center;
  gap: 13px;

  color: #838388;

  font-size: 11px;
}


/* =========================================================
   SERVICE IMAGE
========================================================= */

.service-visual {
  position: relative;

  height: clamp(230px, 17vw, 310px);

  overflow: hidden;

  background: #161619;
}

.service-visual img {
  width: 100%;
  height: 100%;

  display: block;

  object-fit: cover;

  transition: transform 0.45s ease;
}

.service-terminal-card:hover .service-visual img {
  transform: scale(1.025);
}

.service-visual-overlay {
  position: absolute;
  inset: 0;

  background:
    linear-gradient(
      to bottom,
      transparent 55%,
      rgba(16, 16, 18, 0.75)
    );

  pointer-events: none;
}

.service-status {
  position: absolute;

  left: 17px;
  bottom: 15px;

  padding: 7px 10px;

  display: flex;
  align-items: center;
  gap: 7px;

  border: 1px solid rgba(255, 255, 255, 0.18);
  border-radius: 5px;

  background: rgba(10, 10, 12, 0.82);

  backdrop-filter: blur(8px);

  color: #d6d6da;

  font-size: 9px;
  letter-spacing: 0.1em;
}

.service-status i {
  width: 6px;
  height: 6px;

  border-radius: 50%;

  background: #22c55e;

  box-shadow: 0 0 8px rgba(34, 197, 94, 0.8);
}


/* =========================================================
   SERVICE CONTENT
========================================================= */

.service-terminal-body {
  padding: clamp(25px, 2vw, 34px);
}

.service-path {
  display: block;

  margin-bottom: 17px;

  color: #5e5e64;

  font-size: 10px;
}

.service-terminal-body h3 {
  margin: 0 0 18px;

  color: #fff;

  font-size: clamp(22px, 1.55vw, 29px);
  line-height: 1.15;
  letter-spacing: -0.035em;
}

.service-terminal-body h3 span {
  display: block;

  color: #7bc6ff;
}

.service-terminal-body > p {
  min-height: 72px;

  margin: 0 0 24px;

  color: #99999e;

  font-size: 13px;
  line-height: 1.75;
}


/* =========================================================
   COMMAND LIST
========================================================= */

.service-command-list {
  margin-bottom: 25px;

  display: flex;
  flex-direction: column;
  gap: 9px;

  color: #d0d0d3;

  font-size: 12px;
}

.service-command-list span {
  display: flex;
  gap: 10px;
}

.service-command-list i {
  color: #5d5d61;
  font-style: normal;
}


/* =========================================================
   TECH TAGS
========================================================= */

.service-techs {
  display: flex;
  flex-wrap: wrap;
  gap: 7px;

  margin-bottom: 27px;
}

.service-techs span {
  padding: 6px 9px;

  border: 1px solid #343438;
  border-radius: 4px;

  background: #171719;

  color: #8d8d92;

  font-size: 9px;
}


/* =========================================================
   SERVICE LINK
========================================================= */

.service-terminal-link {
  min-height: 46px;

  padding: 0 15px;

  display: flex;
  align-items: center;

  border-top: 1px solid #2d2d31;

  color: #d9d9dc;

  text-decoration: none;

  font-size: 11px;

  transition:
    color 0.2s ease,
    background 0.2s ease;
}

.service-terminal-link span {
  margin-right: 9px;
  color: #22c55e;
}

.service-terminal-link b {
  margin-left: auto;

  color: #22d3ee;

  font-weight: 400;

  transition: transform 0.2s ease;
}

.service-terminal-link:hover {
  color: #fff;
  background: #161618;
}

.service-terminal-link:hover b {
  transform: translateX(5px);
}


/* =========================================================
   CLIENT SECTION
========================================================= */

.clients-section {
  position: relative;

  width: 100%;

  padding: 55px 4% 110px;

  box-sizing: border-box;

  background: #0d0d0f;

  color: #fff;

  font-family: "JetBrains Mono", monospace;
}


/* =========================================================
   CLIENT COMMAND
========================================================= */

.clients-command-line {
  min-height: 48px;

  padding: 0 17px;

  margin-bottom: 70px;

  display: flex;
  align-items: center;
  gap: 10px;

  box-sizing: border-box;

  border-top: 1px solid #333337;
  border-bottom: 1px solid #333337;

  color: #c7c7cb;

  font-size: 11px;
}

.command-symbol {
  color: #22c55e;
}

.command-option {
  color: #7bc6ff;
}

.command-result {
  margin-left: auto;

  color: #646469;
}


/* =========================================================
   CLIENT HEADING
========================================================= */

.clients-heading {
  display: grid;

  grid-template-columns:
    minmax(500px, 1.2fr)
    minmax(350px, 0.55fr);

  gap: clamp(60px, 8vw, 150px);

  align-items: end;

  margin-bottom: 50px;
}

.clients-heading-right {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 24px;
}

.clients-portfolio-link {
  min-height: 43px;

  padding: 0 17px;

  display: inline-flex;
  align-items: center;
  gap: 9px;

  border: 1px solid #3c3c40;
  border-radius: 5px;

  background: #171719;

  color: #dddde0;

  text-decoration: none;

  font-size: 11px;

  transition:
    background 0.2s ease,
    border-color 0.2s ease,
    transform 0.2s ease;
}

.clients-portfolio-link span {
  color: #22c55e;
}

.clients-portfolio-link b {
  margin-left: 10px;

  color: #22d3ee;

  font-weight: 400;
}

.clients-portfolio-link:hover {
  transform: translateY(-2px);

  background: #202023;

  border-color: #56565b;
}


/* =========================================================
   CLIENT TERMINAL WINDOW
========================================================= */

.clients-terminal-window {
  overflow: hidden;

  border: 1px solid #343438;
  border-radius: 9px;

  background: #101012;

  box-shadow:
    0 25px 70px rgba(0, 0, 0, 0.35);
}

.clients-window-header {
  min-height: 48px;

  padding: 0 18px;

  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 20px;

  box-sizing: border-box;

  border-bottom: 1px solid #343438;

  background: #29292b;

  color: #a9a9ae;

  font-size: 10px;
}

.clients-window-title,
.clients-window-meta {
  display: flex;
  align-items: center;
  gap: 18px;
}

.folder-icon {
  color: #7bc6ff;
}

.clients-online {
  display: flex;
  align-items: center;
  gap: 6px;

  color: #22c55e;
}

.clients-online i {
  width: 5px;
  height: 5px;

  border-radius: 50%;

  background: #22c55e;
}


/* =========================================================
   RUNWAY
========================================================= */

.logo-runway-new {
  position: relative;

  width: 100%;

  overflow: hidden;

  padding: 38px 0;

  background:
    linear-gradient(
      rgba(255, 255, 255, 0.018) 1px,
      transparent 1px
    ),
    #111113;

  background-size: 100% 70px;
}

.logo-track-new {
  width: max-content;

  display: flex;
  align-items: stretch;

  animation: clientRunway 48s linear infinite;
}

.logo-runway-new:hover .logo-track-new {
  animation-play-state: paused;
}

.client-logo-cell {
  position: relative;

  width: 250px;
  height: 135px;

  flex: 0 0 250px;

  padding: 25px;

  display: flex;
  align-items: center;
  justify-content: center;

  box-sizing: border-box;

  border-right: 1px solid #29292d;

  transition:
    background 0.25s ease;
}

.client-logo-cell:hover {
  background: rgba(255, 255, 255, 0.025);
}

.client-index {
  position: absolute;

  top: 10px;
  left: 12px;

  color: #444449;

  font-size: 8px;
}

.client-logo-cell img {
  width: 100%;
  max-width: 175px;
  height: 75px;

  object-fit: contain;

  opacity: 0.58;

  filter:
    grayscale(100%)
    brightness(1.25);

  transition:
    opacity 0.25s ease,
    filter 0.25s ease,
    transform 0.25s ease;
}

.client-logo-cell:hover img {
  opacity: 1;

  filter:
    grayscale(0%)
    brightness(1);

  transform: scale(1.05);
}


/* =========================================================
   FADES
========================================================= */

.runway-fade {
  position: absolute;

  z-index: 4;

  top: 0;
  bottom: 0;

  width: 100px;

  pointer-events: none;
}

.runway-fade-left {
  left: 0;

  background:
    linear-gradient(
      to right,
      #111113,
      transparent
    );
}

.runway-fade-right {
  right: 0;

  background:
    linear-gradient(
      to left,
      #111113,
      transparent
    );
}


/* =========================================================
   CLIENT FOOTER
========================================================= */

.clients-window-footer {
  min-height: 35px;

  padding: 0 18px;

  display: flex;
  align-items: center;
  justify-content: space-between;

  box-sizing: border-box;

  border-top: 1px solid #2e2e32;

  color: #5f5f64;

  font-size: 9px;
}


/* =========================================================
   ANIMATION
========================================================= */

@keyframes clientRunway {

  from {
    transform: translateX(0);
  }

  to {
    transform: translateX(-50%);
  }

}


/* =========================================================
   RESPONSIVE / LAPTOP
========================================================= */

@media (max-width: 1250px) {

  .services-shell,
  .clients-shell {
    width: 94vw;
  }

  .services-heading-row,
  .clients-heading {
    gap: 60px;
  }

  .service-terminal-body {
    padding: 25px;
  }

}


/* =========================================================
   RESPONSIVE / TABLET
========================================================= */

@media (max-width: 950px) {

  .webcats-services {
    padding:
      80px
      30px
      60px;
  }

  .clients-section {
    padding:
      45px
      30px
      85px;
  }

  .services-shell,
  .clients-shell {
    width: 100%;
  }

  .services-heading-row,
  .clients-heading {
    grid-template-columns: 1fr;

    gap: 25px;
  }

  .services-heading-row > p,
  .clients-heading-right > p {
    max-width: 650px;
  }

  .services-terminal-grid {
    grid-template-columns: 1fr;
  }

  .service-terminal-card {
    display: grid;

    grid-template-columns:
      minmax(300px, 0.8fr)
      minmax(350px, 1fr);

    grid-template-rows: 48px auto;
  }

  .service-window-bar {
    grid-column: 1 / -1;
  }

  .service-visual {
    height: 100%;
    min-height: 430px;
  }

  .service-terminal-body > p {
    min-height: auto;
  }

}


/* =========================================================
   RESPONSIVE / MOBILE
========================================================= */

@media (max-width: 650px) {

  .webcats-services {
    padding:
      65px
      18px
      45px;
  }

  .clients-section {
    padding:
      35px
      18px
      70px;
  }

  .section-command {
    font-size: 10px;
  }

  .services-heading {
    margin-bottom: 35px;
  }

  .services-heading h2,
  .clients-heading h2 {
    font-size: clamp(30px, 9vw, 42px);
  }

  .services-heading-row > p,
  .clients-heading-right > p {
    font-size: 12px;
  }

  .services-terminal-grid {
    gap: 22px;
  }

  .service-terminal-card {
    display: block;
  }

  .service-visual {
    height: 220px;
    min-height: 0;
  }

  .service-terminal-body {
    padding: 24px 20px;
  }

  .service-terminal-body h3 {
    font-size: 22px;
  }

  .service-terminal-body > p {
    font-size: 12px;
  }

  .clients-command-line {
    margin-bottom: 45px;
  }

  .command-result {
    display: none;
  }

  .clients-window-meta span:not(.clients-online) {
    display: none;
  }

  .client-logo-cell {
    width: 190px;
    height: 110px;

    flex-basis: 190px;
  }

  .client-logo-cell img {
    max-width: 135px;
    height: 60px;
  }

  .runway-fade {
    width: 40px;
  }

  .clients-window-footer {
    justify-content: center;
  }

  .clients-window-footer span:first-child {
    display: none;
  }

}

/* ====================== ACERCA DE MÍ ==================== */
/* =========================================================
   ACERCA DE MÍ — TERMINAL PROFILE
========================================================= */

.about-terminal {
  position: relative;
  width: 100%;
  padding: 34px clamp(28px, 5vw, 90px) 80px;
  background:
    linear-gradient(
      rgba(13, 17, 23, 0.96),
      rgba(8, 11, 15, 0.98)
    ),
    repeating-linear-gradient(
      0deg,
      transparent,
      transparent 39px,
      rgba(255, 255, 255, 0.025) 40px
    ),
    repeating-linear-gradient(
      90deg,
      transparent,
      transparent 39px,
      rgba(255, 255, 255, 0.025) 40px
    );

  color: #e5e7eb;
  font-family: "JetBrains Mono", monospace;
  overflow: hidden;

  border-top: 1px solid rgba(255, 255, 255, 0.08);
}


/* =========================================================
   HEADER TIPO TERMINAL
========================================================= */

.about-terminal__top {
  margin-top: 0;
  margin-bottom: 45px;

  display: flex;
  justify-content: space-between;
  align-items: center;

  font-size: 13px;
  color: #64748b;
}

.terminal-path {
  display: flex;
  gap: 10px;
}

.terminal-path .prompt {
  color: #00e676;
}

.terminal-comment {
  color: #94a3b8;
}


/* =========================================================
   CONTENEDOR
========================================================= */

.about-terminal__container {

  display: grid;
  grid-template-columns:
    minmax(420px, 0.8fr)
    minmax(650px, 1.2fr);

  gap: clamp(60px, 7vw, 130px);
  align-items: center;
}


/* =========================================================
   COLUMNA IZQUIERDA
========================================================= */

.about-terminal__intro {
  position: relative;
  padding-left: 32px;
}

.about-terminal__intro::before {
  content: "";
  position: absolute;

  left: 0;
  top: 0;

  width: 3px;
  height: 100%;

  background: linear-gradient(
    to bottom,
    #00e676,
    #38bdf8
  );

  box-shadow:
    0 0 15px rgba(0, 230, 118, 0.25);
}


.about-label {
  display: block;
  margin-bottom: 18px;

  font-size: 14px;
  letter-spacing: 0.12em;

  color: #94a3b8;
}


/* =========================================================
   TÍTULO
========================================================= */

.about-terminal__intro h2 {
  margin: 0 0 28px;

  max-width: 720px;

  font-size: clamp(38px, 3.3vw, 64px);
  line-height: 1.05;

  letter-spacing: -0.04em;

  color: #f8fafc;
}

.about-terminal__intro h2 span {
  display: block;
  color: #38bdf8;
}


/* =========================================================
   TEXTO
========================================================= */

.about-terminal__intro p {
  max-width: 720px;

  margin: 0 0 18px;

  font-size: clamp(14px, 1vw, 17px);
  line-height: 1.8;

  color: #aeb8c6;
}

.about-terminal__intro strong {
  color: #f1f5f9;
  font-weight: 600;
}

.about-terminal__intro .webcats {
  color: #22d3ee;
}


/* =========================================================
   BOTÓN
========================================================= */

.about-button {
  width: min(100%, 430px);

  margin-top: 32px;
  padding: 17px 20px;

  display: flex;
  align-items: center;
  gap: 12px;

  border: 1px solid rgba(0, 230, 118, 0.55);
  border-radius: 6px;

  color: #5eead4;
  text-decoration: none;

  font-size: 14px;

  background: rgba(0, 230, 118, 0.035);

  transition:
    background 0.25s ease,
    border-color 0.25s ease,
    transform 0.25s ease;
}

.about-button:hover {
  background: rgba(0, 230, 118, 0.1);
  border-color: #00e676;

  transform: translateY(-2px);
}

.button-arrow {
  margin-left: auto;
  font-size: 21px;
}


/* =========================================================
   COLUMNA DERECHA
========================================================= */

.about-terminal__profile {
  min-width: 0;
}

.profile-title {
  margin-bottom: 18px;

  font-size: 13px;
  letter-spacing: 0.08em;

  color: #94a3b8;
}


/* =========================================================
   STATS
========================================================= */

.about-stats {
  display: grid;
  grid-template-columns: repeat(4, 1fr);

  gap: 14px;

  margin-bottom: 18px;
}

.stat-card {
  min-height: 145px;

  padding: 20px;

  display: flex;
  flex-direction: column;
  justify-content: center;
  gap: 8px;

  border: 1px solid #263241;
  border-radius: 8px;

  background:
    linear-gradient(
      145deg,
      rgba(16, 22, 30, 0.9),
      rgba(8, 12, 17, 0.95)
    );

  transition:
    transform 0.25s ease,
    border-color 0.25s ease,
    background 0.25s ease;
}

.stat-card:hover {
  transform: translateY(-4px);

  border-color: rgba(56, 189, 248, 0.65);

  background:
    linear-gradient(
      145deg,
      rgba(17, 29, 39, 0.95),
      rgba(8, 12, 17, 0.95)
    );
}

.stat-icon {
  margin-bottom: 8px;

  font-size: 25px;

  color: #38bdf8;
}

.stat-card strong {
  font-size: 18px;
  color: #f8fafc;
}

.stat-card small {
  font-size: 11px;
  line-height: 1.5;

  color: #7f8da1;
}


/* =========================================================
   CONSOLA
========================================================= */

.about-console {
  overflow: hidden;

  border: 1px solid #263241;
  border-radius: 8px;

  background: #080c11;

  box-shadow:
    0 16px 40px rgba(0, 0, 0, 0.25);
}

.console-header {
  min-height: 40px;

  padding: 0 14px;

  display: flex;
  align-items: center;
  gap: 7px;

  background: #141a22;

  border-bottom: 1px solid #263241;
}

.console-header > span {
  width: 9px;
  height: 9px;

  border-radius: 50%;

  background: #64748b;
}

.console-header > span:first-child {
  background: #ef6a7a;
}

.console-header > span:nth-child(2) {
  background: #eab94c;
}

.console-header > span:nth-child(3) {
  background: #5cc98a;
}

.console-header small {
  margin-left: 10px;

  font-size: 10px;
  color: #64748b;
}


/* =========================================================
   CONTENIDO CONSOLA
========================================================= */

.console-content {
  padding: 22px 24px;
}

.console-command {
  margin-bottom: 18px;

  font-size: 12px;

  color: #aeb8c6;
}

.console-user {
  color: #00e676;
}

.console-path {
  color: #38bdf8;
}

.console-content p {
  margin: 0;

  font-size: clamp(13px, 0.9vw, 15px);
  line-height: 1.8;

  color: #cbd5e1;
}

.console-signature {
  display: block;

  margin-top: 14px;

  text-align: right;

  font-size: 12px;

  color: #38bdf8;
}


/* =========================================================
   SKILLS
========================================================= */

.about-skills {
  display: flex;
  flex-wrap: wrap;

  gap: 10px;

  margin-top: 18px;
}

.about-skills span {
  padding: 10px 14px;

  border: 1px solid #263241;
  border-radius: 5px;

  background: #0c1117;

  font-size: 11px;

  color: #aeb8c6;

  transition:
    color 0.2s ease,
    border-color 0.2s ease;
}

.about-skills span:hover {
  color: #f8fafc;
  border-color: #38bdf8;
}


/* =========================================================
   LAPTOP / PANTALLA MEDIANA
========================================================= */

@media (max-width: 1250px) {

  .about-terminal {
    padding-left: 45px;
    padding-right: 45px;
  }

  .about-terminal__container {
    grid-template-columns: 0.9fr 1.1fr;
    gap: 50px;
  }

  .about-stats {
    grid-template-columns: repeat(2, 1fr);
  }

}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 950px) {

  .about-terminal {
    padding: 55px 30px 70px;
  }

  .about-terminal__container {
    grid-template-columns: 1fr;
    gap: 55px;
  }

  .about-terminal__intro {
    max-width: 760px;
  }

  .about-terminal__intro h2 {
    font-size: clamp(38px, 7vw, 55px);
  }

  .about-stats {
    grid-template-columns: repeat(4, 1fr);
  }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 700px) {

  .about-terminal {
    padding:
      40px
      20px
      55px;
  }

  .about-terminal__top {
    margin-bottom: 30px;
  }

  .terminal-comment {
    display: none;
  }

  .about-terminal__intro {
    padding-left: 20px;
  }

  .about-terminal__intro h2 {
    font-size: clamp(34px, 10vw, 46px);
  }

  .about-terminal__intro p {
    font-size: 14px;
  }

  .about-stats {
    grid-template-columns: repeat(2, 1fr);
  }

  .stat-card {
    min-height: 125px;
    padding: 16px;
  }

  .console-content {
    padding: 18px;
  }

}


/* =========================================================
   MOBILE PEQUEÑO
========================================================= */

@media (max-width: 430px) {

  .about-stats {
    grid-template-columns: 1fr;
  }

  .stat-card {
    min-height: auto;
  }

  .about-button {
    width: 100%;
  }

}

/* =========================================================
   RESPONSIVE GLOBAL
   Desktop/laptop conservan el mismo ancho visual.
========================================================= */
@media (max-width: 950px) {
  :root {
    --home-width: calc(100% - 60px);
  }

  .tech-shell {
    padding-top: 55px;
    padding-bottom: 45px;
  }
}

@media (max-width: 700px) {
  :root {
    --home-width: calc(100% - 40px);
  }

  .tech-shell {
    padding-top: 42px;
    padding-bottom: 35px;
  }
}

@media (max-width: 430px) {
  :root {
    --home-width: calc(100% - 32px);
  }
}

</style>
