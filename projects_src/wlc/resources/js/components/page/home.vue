<template>
  <div id="home">


<!-- =======================SECCION PRINCIPAL CON SLIDER======================= -->

<section class="banners-section">
  <swiper class="swiper desktop" :options="bannersOptions">
    <swiper-slide v-for="(b, bpcInx) in banners.pc" :key="'bpcInx-'+bpcInx">
      <div class="d-block placed-backg swiper-element" v-bind:style="{ backgroundImage: 'url('+b.imagen+')' }" :href="b.url">
          <div class="box">
            <div class="box-contents">
              <h1 class="title"><strong>{{ b.titulo }}</strong></h1>
                <h2 class="subtitle"><strong>{{ b.name }}</strong></h2>
                <div class="pt-4 boton-banner">
                    <a type="button" name="button" class="click" Target="_blank" href="https://api.whatsapp.com/send?phone=523338097402">¡Contactanos!</a>
                </div>
            </div>
          </div>
        </div>
      <!--router-link class="swiper-element" to="">
        <img :src="b.imageUrl">

      </router-link-->
    </swiper-slide>

    <div class="swiper-pagination" slot="pagination"></div>
  </swiper>

  <swiper class="swiper mobile" :options="bannersOptions">
    <swiper-slide v-for="(b, bmbInx) in banners.mobile" :key="'bmbInx-'+bmbInx">
      <div class="d-block placed-backg swiper-element" v-bind:style="{ backgroundImage: 'url('+b.imagen+')' }" :href="b.url">
        <div class="box">
          <div class="box-contents">
            <h1 class="title"><strong>{{ b.titulo }}</strong></h1>
              <h2 class="subtitle"><strong>{{ b.name }}</strong></h2>
              <div class="pt-3 boton-banner">
                  <a type="button" name="button" class="click" Target="_blank" href="https://api.whatsapp.com/send?phone=523338097402">¡Contactanos!</a>
              </div>
          </div>
        </div>
        </div>
    </swiper-slide>

    <div class="swiper-pagination" slot="pagination"></div>
  </swiper>
</section>

      <!-- =======================FINAL SECCION PRINCIPAL CON SLIDER======================= -->

      <!-- ======================= SECCION SERVICIOS CON SLIDER======================= -->


      <section class="plans-sections" id="plans-h-sections">
        <i class="anchor" id="hs-1"></i>
        <div class="container">
          <h2 class="title">Ofrecemos los mejores financiamientos para ti</h2>

          <div class="row box-plans">
            <div class="col-md-4 col-xl-4 col-plan" data-aos="fade-right">
              <div class="box-plan">
                <div class="placed-backg b-image" v-bind:style="{ backgroundImage: 'url(public/images/home/sofome.jpg)' }"></div>

                <div class="b-text">
                  <h4 class="plan-name">Fondeo para SOFOMES</h4>
                  <!--h4 class="plan-title">Inversión a 15 meses</h4-->
                  <p class="descr">
                      ¿Eres una institución Financiera y buscas Fondeo para seguir creciendo?
                  </p>
                  <hr />

                  <h5 class="mb-3 subtitle-1">¡Acercate a nosotros!</h5>
                  <!--h4 class="time">15 Meses</h4-->
                  <p class="mt-3 boton-desc">
                    <router-link class="boton" to="/sofomes">Leer más..</router-link>
                  </p>

                  <hr />

                  <!--p class="text-right">
                    <router-link class="link-contract" to="/#contacto">Contrata con nosotros <i class="far fa-chevron-right icon"></i></router-link>
                  </p-->
                </div>
              </div>
            </div>

            <div class="col-md-4 col-xl-4 col-plan" data-aos="fade-up">
              <div class="box-plan">
                <div class="placed-backg b-image" v-bind:style="{ backgroundImage: 'url(public/images/home/empresariales.jpg)' }"></div>

                <div class="b-text">
                  <h4 class="plan-name">Créditos Empresariales</h4>
                  <!--h4 class="plan-title">Inversión de pago mensual</h4-->
                  <p class="descr">
                  Créditos Empresariales a tu Alcance para cualquier sector.
                  </p>

                  <hr />

                  <h5 class="mb-3 subtitle-1">Logramos el financiamiento que tu empresa necesita..</h5>
                  <!--h4 class="time">24, 36, 48 y 60 meses</h4-->
                  <p class="mt-3 boton-desc">
                    <router-link class="boton" to="/empresarial">Leer más..</router-link>
                  </p>

                  <hr />

                  <!--p class="text-right">
                    <router-link class="link-contract" to="/#contacto">Contrata con nosotros <i class="far fa-chevron-right icon"></i></router-link>
                  </p-->
                </div>
              </div>
            </div>

            <div class="col-md-4 col-xl-4 col-plan" data-aos="fade-left">
              <div class="box-plan">
                <div class="placed-backg b-image" v-bind:style="{ backgroundImage: 'url(public/images/home/construccion.jpg)' }"></div>

                <div class="b-text">
                  <h4 class="plan-name">Para Construcción</h4>
                  <!--h4 class="plan-title">Inversión de pago mensual</h4-->
                  <p class="descr">
                  ¿Tienes un desarrollo inmobiliario y no quieres depender de la preventa para teminarlo?
                  </p>

                  <hr />

                  <h5 class="mb-3 subtitle-1">¿No has tenido éxito gestionando créditos puente?</h5>
                  <!--h4 class="time">24, 36, 48 y 60 meses</h4-->
                  <p class="mt-3 boton-desc">
                    <router-link class="boton" to="/empresarial">Leer más..</router-link>
                  </p>

                  <hr />

                  <!--p class="text-right">
                    <router-link class="link-contract" to="/#contacto">Contrata con nosotros <i class="far fa-chevron-right icon"></i></router-link>
                  </p-->
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>

    <!-- ======================= Div final del servicios section ======================= -->

    <div class="who-section pt-5 pb-5">
      <i class="anchor" id="hs-2"></i>
      <div class="container">
        <div class="row align-items-center">
        <div class="col-md-6 col-image" data-aos="zoom-in">
          <div class="placed-backg img" v-bind:style="{ backgroundImage: 'url(public/images/home/empresa.jpg)' }"></div>

          </div>
        <div class="col-md-6">
          <div class="text-info">
            <h2 class="title">¿Quiénes somos?</h2>
            <p>En WL Capital apoyamos tus proyectos con préstamos de acuerdo con tus necesidades, con tramites sencillos en un tiempo record, con los mejores costos del mercado y hablando tu mismo idioma.</p>
            <p>Somos un grupo de agentes financieros especializados en financiamiento, y trabajamos juntos con el objetivo de ofrecer soluciones financieras innovadoras y personalizadas a personas y empresas.</p>
            <p>Trabajamos con las mejores instituciones Financieras del País, Bancarias, No Bancarias y Fondos de inversión extranjeros.</p>
          </div>
        </div>
        </div>
        </div>
      </div>




    <section class="faqs-section-component">
      <i class="anchor" id="hs-3"></i>
      <div class="container oversized-container">
        <div class="row">

          <div class="col-lg-7 col-text">
            <h2 class="title">Preguntas Frecuentes</h2>

            <div class="box-faqs" role="tablist">
              <b-card no-body v-for="(qa, qaInx) in faqs" :key="'qaInx-'+qaInx">
                <b-card-header header-tag="header" role="tab">
                  <a class="btn-toggle" v-b-toggle="'accordion-'+qaInx">
                    <p v-html="qa.q"></p>
                  </a>
                </b-card-header>

                <b-collapse :visible="(qaInx === 0) ? true :false" :id="'accordion-'+qaInx" accordion="my-accordion" role="tabpanel">
                  <b-card-body>
                    <p v-html="qa.a"></p>
                  </b-card-body>
                </b-collapse>
              </b-card>
            </div>
          </div>

          <div class="col-lg-4 col-image">
            <div class="placed-backg box-image" v-bind:style="{ backgroundImage: 'url(public/images/home/ejecutiva.avif)' }"></div>
          </div>


        </div>
      </div>
    </section>

    <div class="contacto">
      <i class="anchor" id="hs-5"></i>
      <section class="main-section pt-5 pb-5">
        <div class="container oversized-container">
          <div class="box-title">
            <h1 class="title text-center">¡CONTACTANOS!</h1>
          </div>

          <div class="row">
            <div class="offset-lg-2 col-lg-8 col-form">
              <b-form class="form" @submit="onSubmit">
                <div class="row">
                  <div class="col-lg-6">
                    <b-form-group class="custom-f-group-s2" label="Nombre(s)">
                      <b-form-input
                        v-model="form.name"
                        type="text"
                        placeholder=""
                        required
                      ></b-form-input>
                    </b-form-group>
                  </div>

                  <div class="col-lg-6">
                    <b-form-group class="custom-f-group-s2" label="Apellido(s)">
                      <b-form-input
                        v-model="form.lastName"
                        type="text"
                        placeholder=""
                        required
                      ></b-form-input>
                    </b-form-group>
                  </div>

                  <div class="col-lg-6">
                    <b-form-group class="custom-f-group-s2" label="Correo electrónico">
                      <b-form-input
                        v-model="form.email"
                        type="email"
                        placeholder=""
                        required
                      ></b-form-input>
                    </b-form-group>
                  </div>

                  <div class="col-lg-6">
                    <b-form-group class="custom-f-group-s2" label="Número telefónico">
                      <b-form-input
                        v-model="form.phone"
                        type="text"
                        placeholder=""
                        minlength="10"
                        maxlength="10"
                        required
                      ></b-form-input>
                    </b-form-group>
                  </div>

                  <div class="col-lg-12">
                    <b-form-group class="custom-f-group-s2" label="Mensaje">
                      <b-form-textarea
                        v-model="form.msg"
                        placeholder=""
                        rows="3"
                        max-rows="3"
                      ></b-form-textarea>
                    </b-form-group>
                  </div>

                  <div class="col-12 mt-4 text-center boton-form">
                    <b-button type="submit" class="boton">Enviar mensaje</b-button>
                  </div>
                </div>

              </b-form>
            </div>

            <!--div class="col-lg-6 col-xl-5 col-image">
              <div class="placed-backg img" v-bind:style="{ backgroundImage: 'url(public/images/home/contacto.jpg)' }"></div>
            </div-->
          </div>
        </div>
      </section>
    </div>

    <!--div class="mapa pt-5 pb-5">
      <i class="anchor" id="hs-4"></i>
      <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119452.63937119555!2d-103.41779967571529!3d20.67385117751159!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b18cb52fd39b%3A0xd63d9302bf865750!2sGuadalajara%2C%20Jal.!5e0!3m2!1ses-419!2smx!4v1730496706321!5m2!1ses-419!2smx" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

    </div-->






      <!-- ======================= Div final del home ======================= -->
  </div>
</template>

<script type="text/javascript">
import { Swiper, SwiperSlide } from 'vue-awesome-swiper'
import 'swiper/css/swiper.css'
	export default {
    components: {
  Swiper,
  SwiperSlide
},
    data(){
      return{
        form: {
          name: null,
          lastName: null,
          email: null,
          phone: null,
          msg: null,
        },

        banners: {
    pc: [
      { imagen: 'public/images/banner/image1.jpg', titulo:'WHITE LOTUS CAPITAL', name:'El financiamiento que buscas con las mejores instituciones financieras' },
      { imagen: 'public/images/banner/image2.jpg', titulo:'WHITE LOTUS CAPITAL', name:'El financiamiento que buscas con las mejores instituciones financieras'},


    ],
    mobile: [
      { imagen: 'public/images/banner/image1-m.jpg', titulo:'WHITE LOTUS CAPITAL', name:'El financiamiento que buscas con las mejores instituciones financieras'  },



    ],
  },

  faqs: [
    { q: '¿Cuanto tiempo tarda el trámite de crédito?',
      a: 'El tramite de crédito puede ser muy rápido pero depende totalmente de la velocidad  que tengamos en la integración del expediente, una vez que el expediente este integrado podemos tener fechas mas exactas para una resolución.'
    },
    { q: '¿Cuales son los documentos indispensables para obtener un financiamiento?',
      a: '<p>Los documentos indispensables son;</p><ul><li>Estados Financieros.</li><li>Estados de Cuenta.</li><li>Generales del Acreditado.</li><li>Información que nos indique a donde irán dirigidos los recursos (información del proyecto).</li>'
    },
    { q: '¿Por qué solicitar el Financiamiento por medio de WL Capital?',
      a: 'Tenemos una amplia red de aliados financieros que seleccionamos según las características de tu negocio y del crédito que solicitas así mismo somos expertos en el análisis de financiamiento por lo que podemos ayudarte a presentar la información financiera de manera mas clara para que el trámite sea mas rápido y sencillo.'
    },
    { q: '¿Cuál es nuestra experiencia en esté tipo de trámites?',
      a: 'Con casi 15 años de experiencia en la estructuración de financiamiento empresarial hemos tramitado líneas de fondeo con instituciones tanto nacionales como extranjeras para empresas de diversas industrias así como el propio financiamiento a SOFOMES.'
    },
    { q: '¿Qué ventajas tiene el solicitar un crédito?',
      a: 'La principal ventaja que otorga el financiamiento es que te brinda la oportunidad de crecer tu negocio de manera acelerada esto significa que puedes lograr crecer tus inventarios o incluso líneas de negocio o de producción completas de una forma mucho mas sencilla y ordenada sin tener que esperar tal vez año al despegue de tu empresa. En el caso del fondeo para SOFOMES te permite seguir creciendo sin depender de Friends and Family que apoyen tu crecimiento, de igual manera puedes acceder a mejores tasas de interés que te permitan llegar a un nuevo sector de clientes.'
    },
    { q: '¿A que otros productos financieros puedo acceder?',
      a: '<p>Podemos apoyarte con:</p><ul><li>Financiamiento para compra de vehículos por medio de arrendamiento.</li><li>Líneas de crédito revolvente.</li>  <li>Factoraje Financiero tanto a Clientes como a proveedores.</li><li>Todo Tipo de créditos simples.</li>'
    },
  ],

    // == Carousels options ==
        bannersOptions: {
          loop: true,
          speed: 750,
          effect: 'fade',

          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },

         autoplay: {
            delay: 4000,
            disableOnInteraction: false
          },
        },


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
</script>
