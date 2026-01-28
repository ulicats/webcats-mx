<template lang="html">
  <div id="sofome">
    <div class="placed-backg b-image title-plans" v-bind:style="{ backgroundImage: 'url(public/images/home/sofome-banner.avif)' }">
      <h1><strong>Fondeo para SOFOMES </strong></h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">

          <p>¿Eres una institución Financiera y buscas Fondeo para seguir creciendo?.</p>
          <p>Acércate con nosotros.</p>
          <p>Tenemos las mejores opciones de Fondeo de acuerdo con tu sector y tamaño, y si aun no cumples con los requisitos del checklist al 100% no te preocupes, nosotros te asesoramos
            para lograr la institucionalización que se requiere para acceder a las mejores fuentes de fondeo.</p>


  <div class="pt-4 pb-4">
   <b-card>
     <b-card-header header-tag="nav">
       <b-nav card-header tabs>
         <b-nav-item :active="option == 1" @click="option = 1">Descripción</b-nav-item>
         <b-nav-item :active="option == 2" @click="option = 2">Beneficios</b-nav-item>
       </b-nav>
     </b-card-header>

     <b-card-body v-if="option == 1">
      <p>Monto Mínimo 20´000,000.00.</p>
      <p>Financiamientos estructurados y a la medida de tus necesidades.</p>
      <p>Tasas Competitivas.</p>
      <p>Garantía de Cartera.</p>
      <p>Plazos de acuerdo al portafolio.</p>
      <p>Tenemos cobertura en el occidente del país.</p>
     </b-card-body>

     <b-card-body v-if="option == 2">
       <p>Diagnóstico para lograr el Fondeo que buscas.</p>
       <p>Costo y Comisiones Competitivas</p>
       <p>Fondeo diseñado a la medida tu Financiera.</p>
       <p>Estructuras Versátiles</p>
       <p>Aforos adecuados</p>
       <p>Estructura ESG</p>
       <p>Negociación de Garantías</p>
       <p>Acompañamiento de expertos en SOFOMES</p>
     </b-card-body>

   </b-card>
 </div>

 <div class="plans-button pt-5 pb-5">
   <a class="boton" target="_blank" href="https://api.whatsapp.com/send?phone=523338097402">¡Me interesa!</a>
   <p><router-link to="/construction" class="link-plans">ver financiamiento para construcción</router-link></p>
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
