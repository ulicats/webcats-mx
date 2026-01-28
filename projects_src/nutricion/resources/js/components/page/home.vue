<template>
  <div id="home">
  <section id="sec-principal" class="container">
  <section id="sec1" class="d-flex align-items-center container bg-white">
    <div class="container texto-banner salida">
          <h1>Nutrióloga Clínica</h1>
          <h1>Y educadora en diabetes</h1>
          <div class="boton">
            <a type="button" target="_blank" name="button" href="https://api.whatsapp.com/send?phone=3332341375">Contactame</a>
          </div>
    </div>
  </section>

  <section id="sec2" class="bg-white">
    <div class="bg-success container">
        <h1 class="mb-auto text-white ">Alimentación y Nutrición</h1>
    </div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 bg-img ">

        </div>
        <div class="col-md-6 pt-5 pb-5">
          <div class="">
            <h2>ALIMENTACIÓN:</h2>
            <p>Conjunto de actividades y procesos por los cuales tomamos alimentos del exterior que nos aportan
               energía y sustancias nutritivas, necesarias para el mantenimiento de la vida. Abarca la selección
               de alimentos, su cocinado y su ingestión. Es un acto voluntario y consciente y, por lo tanto,
               susceptible de educación.</p>
          </div>
          <div class="">
            <h2>NUTRICIÓN:</h2>
            <p>Proceso fisiológico mediante el cual el organismo recibe, transforma y utiliza las sustancias
             químicas contenidas en los alimentos. Es un acto involuntario e inconsciente que depende de
             determinadas funciones orgánicas como la digestión, la absorción y el transporte de los
             nutrientes de los alimentos hasta los tejidos.</p>
           </div>
        </div>
      </div>

    </div>

  </section>

  <section id="sec3" class="bg-white">
    <div class="bg-success container ">
        <h1 class="mb-auto text-white ">Acerca de mí ...</h1>
    </div>
    <div class="bg-sec3">
      <div class="container">
        <div class="row align-items-center d-flex flex-wrap-reverse">
          <div class="col-md-6 reveal pt-5 pb-5">
            <p>MNC. Susana Romero Valenzuela<p/>
            <p>Especialista con 12 años de experiencia clínica.</p>
            <p>Licenciada en Nutrición y Maestra en Nutrición Clínica, egresada de la
              Universidad del Valle de Atemajac (UNIVA). Educadora en Diabetes por la Asociación
              Mexicana de Diabetes Jalisco (AMDJ) y la UNIVA.
              Especialista en trastornos de la conducta alimentaria (TCA) y adolescencia.
           </p>
          </div>
          <div class="col-md-6 bg-img reveal">

          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="sec4" class="bg-white">
    <div class="bg">
      <div class="container align-items-center text-center h-100">
        <div class="row h-100 pb-5">,
          <div class="container">
              <h1 class="mb-auto text-white text-center pt-5 pb-5">Gracias por visitar mi página</h1>
          </div>
          <div class="col-md-3">
            <h3>Trato humano y personalizado</h3>
            <p>Conocemos tu situación para proponer un tratamiento.</p>
          </div>
          <div class="col-md-3">
            <h3>Profesional Especializado</h3>
            <p>Nuestro equipo cuenta con maestrías, diplomados y actualizaciones constantes.</p>
          </div>
          <div class="col-md-3">
            <h3>Colaboración Continua</h3>
            <p>Conjuntamos enfoques de nuestros especialistas.</p>
          </div>
          <div class="col-md-3">
            <h3>Conjuntamos enfoques de nuestros especialistas.</h3>
            <p>No internamiento. Cuenta con nuestro apoyo durante tus actividades diarias.</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="sec5" class="banner-section container bg-white pt-5 pb-5">
    <h1 class="text-center">Nuestros Productos</h1>
    <swiper class="swiper-desktop" :options="bannersOption">
       <swiper-slide v-for="(banner, index) in banners.pc" :key="index" class="swiper-content">
         <!--img :src="slide" alt=""/-->
         <a class="d-block placed-backg" v-bind:style="{ backgroundImage: 'url('+banner.imagen+')' }" :href="banner.url">
            <!--img src="public/images/page/home/banner.png"-->
          </a>
       </swiper-slide>
       <div class="swiper-pagination" slot="pagination"></div>

     </swiper>

     <swiper class="swiper-mobile" :options="bannersOption">
        <swiper-slide v-for="(banner, index) in banners.movil" :key="index" class="swiper-content">
          <!--img :src="slide" alt=""/-->
          <a class="d-block placed-backg" v-bind:style="{ backgroundImage: 'url('+banner.imagen+')' }" :href="banner.url">
             <!--img src="public/images/page/home/banner.png"-->
           </a>
        </swiper-slide>

        <div class="swiper-pagination" slot="pagination"></div>
      </swiper>
   </section>

   <section class="container-fluid main-section bg-white pb-5 pt-5">
       <div class="row align-items-center">
         <div class="col-md-5 col-lg-6 col-image">
           <div class="placed-backg img-bg" v-bind:style="{ backgroundImage: 'url(public/images/page/home/nutricion.jpg)' }"></div>
         </div>

         <div class="col-md-7 col-lg-6 col-info">
           <div class="box-middle pb-5 pt-5">

             <div>
               <p class="text-center">
                 Somos una plataforma 100% mexicana desarrollada por y para los amantes del la nutrición.
               </p>
               <p class="mt-3 mb-3 text-center">
                 Pretendemos que nuestras consultas ayuden a:
               </p>

               <ol class="text-orange">
                 <li>Mantener tu cuerpo sano.</li>
                 <li class="mt-1">Buscar mejores habitos de alimentación.</li>
                 <li class="mt-1">Compra de productos de alimantación.</li>
                 <li class="mt-1">Registro de resultados y autoevaluación corporal.</li>
                 <li class="mt-1">Creación de comunidad y fomento de nutrión.</li>
               </ol>

               <p class="mt-4 text-center">
                 Continua creciendo cada día, contáctanos ayudarte a cambiar tus habitos alimenticios, te esperamos.
               </p>
           </div>
           </div>
         </div>
       </div>
     </section>

  <section id="sec6" class="bg-white pb-5 pt-5">
    <div class="container">
      <h2 class="text-center text-white pb-2 pt-2">Contacto</h2>
        <div class="formulario mt-4 mb-4 p-4">
          <b-form class="mt-4" @submit="onSubmit">

               <b-form-group class="custom-group-1"
                 label="Nombre:">
                 <b-form-input
                   size="sm"
                   v-model="form.name"
                   type="text"
                   placeholder=""
                   required
                 ></b-form-input>
               </b-form-group>

               <b-form-group class="custom-group-1"
                 label="Correo electrónico:">
                 <b-form-input
                   size="sm"
                   v-model="form.email"
                   type="email"
                   placeholder=""
                   required
                 ></b-form-input>
               </b-form-group>

               <b-form-group class="custom-group-1"
                 label="Teléfono:">
                 <b-form-input
                   size="sm"
                   v-model="form.phone"
                   type="text"
                   placeholder=""
                   minlength="10"
                   maxlength="10"
                   required
                 ></b-form-input>
               </b-form-group>

               <b-form-group class="custom-group-1"
                 label="Descripción:">
                 <b-form-textarea
                   size="sm"
                   v-model="form.msg"
                   placeholder=""
                   rows="3"
                   max-rows="3"
                 ></b-form-textarea>
               </b-form-group>

               <p class="text-center">
                 <b-button type="submit" class="btn-st-1 btn-color-1">Enviar</b-button>
               </p>

             </b-form>
        </div>
    </div>
  </section>

  <section id="sec7" class="pb-5 pt-5">
    <div class="container text-center">
      <h3>¡Visitanos! Estamos ubicados en:</h3>
      <p>Av. Hidalgo #55, Ixtlán Del Río, Nayarit</p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.9463566799004!2d-104.36776239999999!3d21.034832299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8426f74f884661ab%3A0xd85bb3e7971d49c8!2sC.%20Hidalgo%2055%2C%207%20Esquinas%2C%2063940%20Ixtl%C3%A1n%20del%20R%C3%ADo%2C%20Nay.!5e0!3m2!1ses-419!2smx!4v1687568969729!5m2!1ses-419!2smx"
      width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </section>






</section>
</div>
</template>

<script type="text/javascript">
import { Swiper, SwiperSlide } from 'vue-awesome-swiper'
 import 'swiper/css/swiper.css'

 export default {
   name: 'swiper-example-free-mode',
  title: 'Free mode / No fixed positions',
  components: {
    Swiper,
    SwiperSlide
  },
   data() {
     return {
       form: {
        name: null,
        email: null,
        phone: null,
        msg: null,
      },

       banners: {
       pc: [
         { imagen: 'public/images/page/home/producto3.webp' },
         { imagen: 'public/images/page/home/producto4.webp' },
         { imagen: 'public/images/page/home/producto5.webp' },
         { imagen: 'public/images/page/home/producto6.webp' },
       ],
       movil: [
         { imagen: 'public/images/page/home/producto3.webp' },
         { imagen: 'public/images/page/home/producto4.webp' },
         { imagen: 'public/images/page/home/producto5.webp' },
         { imagen: 'public/images/page/home/producto6.webp' },
       ]
     },

      bannersOption: {
         effect:'slide',
         loop: true,
         slidesPerView: 3,
         spaceBetween: 20,
        speed:3500,
         pagination: {
           el: '.swiper-pagination',
           clickable: true
         },

         autoplay: {
                 delay: 4000,
                 disableOnInteraction: false
               },

         breakpoints: {
           320: {
              slidesPerView: 1,
              spaceBetween: 10
           },
           770: {
              slidesPerView: 3,
              spaceBetween: 50
           }
        }

      },




        // == ==


     }
   },

   methods: {
    makeToast(variant = null, msg, title) {
      this.$bvToast.toast(msg, {
        title: title,
        variant: variant,
        solid: true,
        toaster: 'b-toaster-top-right',
        appendToast: true
      })
    },

    onSubmit(event) {
      event.preventDefault();

      axios.post(tools.url("/api/contact"), this.form).then((response)=>{
          this.makeToast('success', response.data.response, 'Mensaje enviado');

          for (let prop in this.form) {
            this.form[prop] = '';
          }
        }).catch( (error)=> {
          // console.log(error.response);
          let errors = error.response.data;

          for (let prop in errors) {
            // console.log(errors[prop]);
            this.makeToast('danger', errors[prop], '¡Error!');
          }
      });
    },
  }


 }



  function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
       reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal);

</script>
