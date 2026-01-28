<template>
  <header id="header" v-bind:class="{ 'special-page' : isSpecialPage }">
    <div id="header-up" >
      <div class="trans-400 header-menu" v-bind:class="{ 'scrolling' : isScrolling }">
        <div class="header-up">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-3">
                <div class="redes">
                  <a href="https://www.facebook.com/niticolor.tepic?mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
                  <a href="https://www.instagram.com/niticolor?igsh=MTJsMDY3aXJrN3dwNA=="><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
              </div>
              <div class="col-md-9">
                <div class="info">
                  <a href="https://www.google.com/maps/dir/Av+Prisciliano+Sanchez+134/Centro,+Tepic,+Nay/@21.509506,-104.8978394,17z/data=!4m13!4m12!1m5!1m1!1s0x84273703e601bb79:0x369f2eb2ea99f0f!2m2!1d-104.8872973!2d21.5084299!1m5!1m1!1s0x84273702c0e631ab:0xf8dd9a85cd205254!2m2!1d-104.8950863!2d21.5113041?entry=ttu"><i class="fa fa-map-marker"></i> Av Priciliano Sanchez 134-a, Centro, Tepic, Nay </a>
                  <a href="tel:+523111694994"><i class="fa fa-comments"></i> 311 169 4994</a>
                  <a href="mailto:contacto@niticolor.com"><i class="fa fa-envelope"></i> contacto@niticolor.com</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <div class="header-content">
    <b-navbar toggleable="xl">
      <div class="container oversized-container text-center font-weight-bold">
        <b-navbar-brand to="/">
          <img class="img-page" src="public/images/assets/logo.png" alt="niticolor">
        </b-navbar-brand>

        <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

        <b-collapse id="nav-collapse" is-nav>
          <b-navbar-nav class="ml-auto">
            <b-nav-item href="#inicio">Inicio</b-nav-item>
            <b-nav-item href="#servicios">Servicios</b-nav-item>
            <b-nav-item href="#contacto">Contacto</b-nav-item>
            <b-nav-item href="#ubicacion">Ubicación</b-nav-item>
            <!--b-nav-item target="_blank" href="https://www.facebook.com/aleromeroderma?mibextid=ZbWKwL" tarjet="_blank" style="align-self: center;" >
                  <i class="fab fa-facebook-f red facebook"></i>
            </b-nav-item>
            <b-nav-item target="_blank" href="https://www.instagram.com/aleromeroderma?igsh=MWNrdDJ1Y2tzbGl2OA==" tarjet="_blank" style="align-self: center;" >
                  <i class="fab fa-instagram"></i>
            </b-nav-item-->
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
        var headerHeight = document.getElementById('header-up').clientHeight;
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
