<template lang="html">
  <header id="header" class="" v-bind:class="{ 'special-header' : $route.name == 'homePage' }">
    <div class="header-content">
      <b-navbar toggleable="lg">
        <div class="container oversized-container">
          <b-navbar-brand to="/">
            <img src="public/images/logo.png" alt="Limalum">
          </b-navbar-brand>

          <b-navbar-toggle target="nav-collapse"><i class="fas fa-bars bar-icon"></i></b-navbar-toggle>

          <b-collapse id="nav-collapse" is-nav>
            <b-navbar-nav class="ml-auto">
              <li class="nav-item d-lg-none d-xl-inline-block">
                <router-link class="nav-link" to="/#hs-1" v-scroll-to="'#hs-1'">Nuestro trabajo</router-link>
              </li>
              <li class="nav-item">
                <router-link class="nav-link" to="/#hs-2" v-scroll-to="'#hs-2'">Cotizaciones</router-link>
              </li>
              <li class="nav-item">
                <router-link class="nav-link" to="/#hs-3" v-scroll-to="'#hs-3'">¿Por qué contratar a Limalum?</router-link>
              </li>
              <b-nav-item class="nav-focus" to="/projects">Proyectos</b-nav-item>

              <b-nav-item href="mailto:contacto@limalum.online"><i class="far fa-envelope"></i> <span class="d-lg-none">Contacto</span></b-nav-item>

            </b-navbar-nav>
          </b-collapse>
        </div>
      </b-navbar>
    </div>
  </header>
</template>

<script>
export default {
  data(){
    return{}
  }
}
</script>
