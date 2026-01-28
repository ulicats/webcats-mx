<template>
  <header id="header" v-bind:class="{ 'special-page' : isSpecialPage }">
  <div id="header-content" class="header-content">
    <div class="trans-400 header-menu" v-bind:class="{ 'scrolling' : isScrolling }">
      <b-navbar toggleable="xl">
        <div class="container oversized-container">
          <b-navbar-brand to="/">
            <img class="img-page" src="public/images/assets/web_logo.png" alt="webcats">
          </b-navbar-brand>

          <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

          <b-collapse id="nav-collapse" is-nav>

            <b-navbar-nav class="mr-auto">
              <b-nav-item href="#inicio">Inicio</b-nav-item>
              <b-nav-item href="#ventajas">Ventajas</b-nav-item>
              <b-nav-item href="#doctores">Doctores</b-nav-item>
              <b-nav-item href="#faq">FAQ</b-nav-item>

            </b-navbar-nav>
          </b-collapse>
        </div>
      </b-navbar>
    </div>
  </div>
</header>
</template>

<script>
export default {
  data(){
    return{
      isSpecialPage: false,
      isScrolling: false,
      isMenuActive: false,
    }
  },

  methods: {
    specialPage(){ // Si es pagina especial (vista 'home'), no poner fondo negro en el header al inicio
      this.isSpecialPage = (this.$route.name == 'homePage') ? true : false;
    },

    // Agregar el estilo "active" a las opciones del menú segun se mueva el scroll en posición Y
    handleScroll (event) {
      var scrollY = window.scrollY;
      // console.log(scrollY);

      if(scrollY > 100 && this.$route.name != 'homePage'){
        this.isScrolling = true;
      }else{
        this.isScrolling = false;
      }

      if(this.$route.name == 'homePage'){
        var bannerHomeHeight = document.getElementById('home-banner-section').clientHeight;
        var headerHeight = document.getElementById('header-content').clientHeight;
        bannerHomeHeight = bannerHomeHeight-headerHeight;

        if(scrollY > bannerHomeHeight){
          this.isScrolling = true;
        }else{
          this.isScrolling = false;
        }
      }
    },

  },



  mounted(){
    this.specialPage();
  },

  created () {
    window.addEventListener('scroll', this.handleScroll);
  },

  destroyed () {
    window.removeEventListener('scroll', this.handleScroll);
  },
}
</script>
