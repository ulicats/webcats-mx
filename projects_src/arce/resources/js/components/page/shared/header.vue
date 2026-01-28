<template lang="html">
  <header id="header" v-bind:class="{ 'special-page' : isSpecialPage }">
    <div  id="header-content" class="header-content">

      <div class="trans-400 header-menu" v-bind:class="{ 'scrolling' : isScrolling }">
        <div class="container oversized-container">
          <div class="row align-items-center">
            <div class="col col-side">
              <a class="trans-400 btn-toggle" @click="isMenuActive = !isMenuActive"><i class="fas fa-bars"></i></a>
            </div>

            <div class="col col-center">

            </div>

            <div class="col col-side">
              <router-link class="trans-400 btn-logo text-logo" to="/">
                <img class="trans-400" src="public/images/assets/logo_arce.png" alt="Arce cabañas mazamitla">
                <!--h1>Esmeralda bau</h1-->
              </router-link>
            </div>
          </div>
        </div>
      </div>

      <div class="trans-400 bg-menu" v-bind:class="{ 'active-bg-menu' : isMenuActive }" @click="isMenuActive = false">
        <div class="container oversized-container bg-menu-content">
          <div class="box">
            <div>
              <router-link class="menu-link" to="/">inicio</router-link>
            </div>
            <!-- <div>
              <router-link class="menu-link" to="/busqueda">Reservar</router-link>
            </div> -->
            <div>
              <router-link class="menu-link" to="/cabana">cabaña 1</router-link>
            </div>
            <div>
              <router-link class="menu-link" to="/cabana2">cabaña 2</router-link>
            </div>
            <div>
              <router-link class="menu-link" to="/cabana3">cabaña 3</router-link>
            </div>
            <div>
              <router-link class="menu-link" to="/mapa">mapa</router-link>
            </div>
            <div>
              <router-link class="menu-link" to="/faq">faq</router-link>
            </div>
            <div>
              <router-link target="_blank" href="https://www.facebook.com/profile.php?id=61553849490372&mibextid=ZbWKwL" class="menu-link" to="/faq">
                <i class="fab fa-facebook-f"></i>
              </router-link>
            </div>
            <div>
              <router-link target="_blank" href="https://www.instagram.com/arce.cabanas.mazamitla?igsh=dzczMjNibHA1MWdy" class="menu-link" to="/faq">
                <i class="fab fa-instagram"></i>
              </router-link>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!--div class="header-translate" id="header-box-langs" v-bind:class="{ 'scrolling' : isScrolling }">
      <div class="row box-langs">
        <div class="col-12 col-lang" v-bind:class="{ 'active' : $i18n.locale == 'es' }" @click="btnLang('es')">
          <div class="col flag es"></div><div class="col text">{{ $t("shared.header.langs.spanish") }}</div>
        </div>

        <div class="col-12 col-lang" v-bind:class="{ 'active' : $i18n.locale == 'en' }" @click="btnLang('en')">
          <div class="col flag en"></div><div class="col text">{{ $t("shared.header.langs.english") }}</div>
        </div>
      </div>
    </div-->
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
