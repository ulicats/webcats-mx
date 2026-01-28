<template>
  <header id="header">
  <div class="header-content" v-bind:id="idName">
    <b-navbar toggleable="xl">
      <div class="container oversized-container text-center font-weight-bold">
        <b-navbar-brand to="/">
          <img class="img-page" src="public/images/assets/logo.png" alt="webcats">
        </b-navbar-brand>

        <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

        <b-collapse id="nav-collapse" is-nav>
          <b-navbar-nav class="mx-auto">
            <b-nav-item to="/">Inicio</b-nav-item>
            <b-nav-item to="/instalaciones">instalaciones</b-nav-item>
            <b-nav-item to="/mapa">Ubicación</b-nav-item>
            <b-nav-item to="/contacto">Contacto</b-nav-item>
            <b-nav-item target="_blank" href="https://www.facebook.com/aleromeroderma?mibextid=ZbWKwL" tarjet="_blank" style="align-self: center;" >
                  <i class="fab fa-facebook-f red facebook"></i>
            </b-nav-item>
            <b-nav-item target="_blank" href="https://www.instagram.com/aleromeroderma?igsh=MWNrdDJ1Y2tzbGl2OA==" tarjet="_blank" style="align-self: center;" >
                  <i class="fab fa-instagram"></i>
            </b-nav-item>
          </b-navbar-nav>
        </b-collapse>
      </div>
    </b-navbar>
  </div>
</header>
</template>

<script type="text/javascript">
	export default {
        mounted() {
            console.log('Header mounted.');
        }
    }
</script>
