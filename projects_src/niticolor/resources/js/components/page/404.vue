<template lang="html">
  <div id="page-404">
    <section class="container">
      <div class="row align-items-center">
        <div class="col-12">
          <p class="mb-3">
            <img class="logo img-fluid" src="public/images/assets/logo.png">
          </p>
          <h1>Error 404</h1>
          <h2 class="mb-4">Página no encontrada</h2>

          <p>
            <i class="fas fa-spinner fa-pulse fa-lg"></i>
          </p>
          <p class="lg">Serás redirigido a la página principal.</p>
          <p class="mt-2 lg">
            <router-link to="/"><i class="fas fa-home-alt"></i> <strong class="f-w-700">¡Ir al inicio ahora!</strong></router-link>
          </p>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  data(){
    return{
      redirect: null,
    }
  },

  methods: {},

  mounted(){
    this.redirect = setTimeout( () => { this.$router.push('/'); }, 4000);
  },

  beforeDestroy() {
    if (this.redirect) {
      clearTimeout(this.redirect);
    }
  }
}
</script>
