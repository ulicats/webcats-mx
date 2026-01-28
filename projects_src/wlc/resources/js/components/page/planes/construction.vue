<template lang="html">
  <div id="empresarial">
    <div class="placed-backg b-image title-plans bg-construction" v-bind:style="{backgroundImage: 'url(public/images/home/banner-construccion.avif)' }">
      <h1><strong>CRÉDITOS PARA LA CONSTRUCCIÓN</strong></h1>

    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">

          <p>¿Tienes un desarrollo inmobiliario y no quieres depender de la preventa para terminarlo?</p>
          <p>¿No has tenido éxito gestionando créditos puente?</p>
          <p>Ven de la mano de los expertos, podemos apoyarte a conseguir financiamiento para tu proyecto, lo cual garantiza la terminación del desarrollo horizontal o vertical.</p>

             <div class="pt-4 pb-4">
              <b-card>
                <b-card-header header-tag="nav">
                  <b-nav card-header tabs>
                    <b-nav-item :active="option == 1" @click="option = 1">Descripción</b-nav-item>
                    <b-nav-item :active="option == 2" @click="option = 2">Beneficios</b-nav-item>
                  </b-nav>
                </b-card-header>

                <b-card-body v-if="option == 1">
                 <p>Financiamiento desde 20´000,000.00.</p>
                 <p>El Financiamiento está diseñado según las características de tu desarrollo.</p>
                 <p>Disposiciones con avance de obra.</p>
                 <p>Tasa Competitivas.</p>
                 <p>Plazos según el requerimiento de tu desarrollo.</p>
                </b-card-body>

                <b-card-body v-if="option == 2">
                  <p>Seguridad de terminación de la obra.</p>
                  <p>Costo Financiero Competitivo.</p>
                  <p>Acompañamiento en todo momento.</p>
                  <p>Financiamiento diseñado a la medida de tus requerimientos de capital.</p>
                </b-card-body>

              </b-card>
            </div>

            <div class="plans-button pt-5 pb-5">
              <a class="boton" target="_blank" href="https://api.whatsapp.com/send?phone=523338097402">¡Me interesa!</a>
              <p><router-link to="/sofomes" class="link-plans">ver financiamiento sofomes</router-link></p>
              <p><router-link to="/empresarial" class="link-plans">ver financiamiento empresariales</router-link></p>
            </div>




        </div>
      </div>
    </div>

  </div>
</template>

<script>
export default {
  data(){
    return{
        option: 1,
      }
  },
}
</script>
