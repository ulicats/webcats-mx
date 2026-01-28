<template lang="html">
  <div id="empresarial">
    <div class="placed-backg b-image title-plans bg-empresarial" v-bind:style="{backgroundImage: 'url(public/images/home/empres-bann.jpg)' }">
      <h1><strong>CRÉDITOS EMPRESARIALES A TU ALCANCE PARA CUALQUIER SECTOR</strong></h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">

          <p>Logramos el financiamiento que tu empresa necesita para seguir creciendo mediante créditos diseñados en función del sector de tu empresa mediante nuestros enlaces con instituciones financieras nacionales e
            internacionales, trabajamos contigo codo a codo para lograr llevar a tu empresa varios escalones arriba.</p>


             <div class="pt-4 pb-4">
              <b-card>
                <b-card-header header-tag="nav">
                  <b-nav card-header tabs>
                    <b-nav-item :active="option == 1" @click="option = 1">Descripción</b-nav-item>
                    <b-nav-item :active="option == 2" @click="option = 2">Beneficios</b-nav-item>

                  </b-nav>
                </b-card-header>

                <b-card-body v-if="option == 1">
                 <p>Diagnostico para Financiamiento.</p>
                 <p>Diseño de estructuración financiera.</p>
                 <p>Costos Financieros competitivos.</p>
                 <p>Condiciones de financiamiento adecuadas al giro de tu empresa.</p>
                 <p>Negociación de garantías en su caso.</p>
                 <p>La mayor velocidad en la obtención de fondeo.</p>
                </b-card-body>

                <b-card-body v-if="option == 2">
                  <p>Monto mínimo 2´000,000.00.</p>
                  <p>Con y Sin garantía.</p>
                  <p>Diseñado a la medida de tu negocio.</p>
                  <p>Tasa Competitivas.</p>
                  <p>Plazos de acuerdo al proyecto.</p>
                </b-card-body>


              </b-card>
            </div>

            <div class="plans-button pt-5 pb-5">
              <a class="boton" target="_blank" href="https://api.whatsapp.com/send?phone=523338097402">¡Me interesa!</a>
              <p><router-link to="/sofomes" class="link-plans">ver financiamiento sofomes</router-link></p>
              <p><router-link to="/construction" class="link-plans">ver financiamiento para construcción</router-link></p>

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
