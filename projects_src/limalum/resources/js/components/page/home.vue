<template lang="html">
  <div id="home-page">

<section>
  <div class="banner-section">
    <div class="border-section">
      <div class="row">
        <div class="col-md-8">
          <div class="box" data-aos="fade-right">
            <h1><strong>SOLUCIÓN, INSTALACIÓN E INNOVACIÓN EN VIDRIO Y ALUMINIO</strong></h1>
            <div class="boton pt-4">
              <a type="button" class="btn-s1" href="https://wa.me/523222750919/">Cotiza aquí</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="work-section text-center pt-4">
  <i class="anchor" id="hs-1"></i>
  <h2>Nuestro proceso de trabajo</h2>
  <div class="container-fluid pt-5 pb-5">
    <div class="row">
      <div class="offset-md-1 col-md-2">
        <div class="bg-work">
          <i class="fa fa-search pb-3"></i>
          <p>Análisis de requerimientos del cliente</p>
        </div>
      </div>
      <div class="col-md-2">
        <div class="bg-work">
          <i class="fa fa-pen pb-3"></i>
          <p>Evaluación y estructura del material</p>
        </div>
      </div>
      <div class="col-md-2">
        <div class="bg-work">
          <i class="fa fa-lightbulb pb-3"></i>
          <p>Diseño de solución</p>
        </div>
      </div>
      <div class="col-md-2">
        <div class="bg-work">
          <i class="fa fa-object-group pb-3"></i>
          <p>Instalación y desarrollo de pruebas</p>
        </div>
      </div>
      <div class="col-md-2">
        <div class="bg-work">
          <i class="fa fa-check pb-3"></i>
          <p>Garantía</p>
        </div>
      </div>
    </div>
  </div>
</section>

    <section class="main-section">
      <div class="container oversized-container">
        <div class="row">
          <div class="col-lg-5 col-info">
            <h2 class="title">Empresa</h2>
            <p class="p-lg">
              Somos una empresa ubicada en Puerto Vallarta, Jalisco, con 10 años de experiencia. Ofrecemos servicios de instalación como espejos, puertas de baño, canceles, vitrinas, domos, pasamanos y vidrios templados para diferentes usos.
             </p>
            <br />
            <p class="p-lg">
              Trabajamos principalmente en todo el estado de Nayarit. Ixtlán del Río, Bahía de Banderas, Tepic, también en Puerto Vallarta Jalisco, nosotros vamos directamente hasta tu establecimiento para iniciar con los procesos de instalación.
            </p>
            <br />
            <p class="p-lg">
              En Limalum, entendemos que la infraestructura es importante para una mejor presentación en diseño con instalaciones de calidad y garantía. Limalum es tu mejor opción, contactanos y
              platicanos tu proyecto.
            </p>
            <br />
          </div>

          <div class="col-lg-6 col-image">
            <div class="box-image">
              <img src="public/images/lima.jpeg">
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="projects-section">
      <div class="container oversized-container content">
        <h2 class="common-title">PROYECTOS</h2>

        <div class="box-carousel">
          <swiper :options="projectsOption" class="projectSlider">
            <swiper-slide class="col-project-sample" v-for="(project, pjInx) in projects" :key="pjInx" >
                <router-link class="pj-link" :to="project.url">
                <div class="placed-backg box-img" v-bind:style="{ backgroundImage: 'url('+project.image+')' }" >

                </div>
                <div class="box-info">
                    <h5>{{ project.name }}</h5>
                </div>
                </router-link>
            </swiper-slide>

            <div class="swiper-button-prev" slot="button-prev"></div>
            <div class="swiper-button-next" slot="button-next"></div>
            <div class="swiper-pagination" slot="pagination"></div>
          </swiper>
        </div>
      </div>
    </section>


    <section class="vision-section">
      <div class="container oversized-container">
        <div class="box-plans">
          <div class="row row-plans">
            <div class="col-lg-6 col-plan">
              <h6 class="title">Visión</h6>
              <p>
            Ser reconocidos como empresa que brinda los servicios y experiencias de la mejor calidad utilizando las mejores tecnologías y diseños inmobiliarios satisfaciendo las necesidades de la sociedad.
              </p>
            </div>

            <div class="col-lg-6 col-plan">
              <h6 class="title">Misión</h6>
              <p>
              Servir a nuestros clientes con productos y servicio de calidad, que brinden experiencias agradables en espacios confortables y apropiados a cada necesidad superando las expectativas de nuestros clientes.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="container info-section">
      <i class="anchor" id="hs-2"></i>
      <h2 class="text-center title-2">Realizamos cotizaciones sin compromiso</h2>

      <div class="box-text">
        <div class="row align-items-center pt-4 pb-4">
          <div class="col-md-6">
            <div class="title">
              <span>Llama al: <a href="tel:+523222750919">(32) 2275 0919</a></span>
              <p>Puedes llamar o enviarnos un mensaje de WhatsApp a este mismo número, será un gusto atenderte.</p>
              <p>Trabajamos en todo el estado de Nayarit, Bahía de banderas, Tepic, Ixtlán del Río, también laboramos en Puerto Vallarta, Jalisco. ¡Llamanos! Nosotros vamos hasta tu domicilio. </p>
            </div>
          </div>
          <div class="col-md-6 col-com">
              <h2><strong>Comunícate con nosotros</strong></h2>
            <div class="redes">
              <a href="mailto:contacto@limalum.online"><i class="far fa-envelope"></i></a>
              <a href="tel:+523222750919"><i class="fas fa-phone-alt"></i></a>
              <a href="https://wa.me/523222750919"><i class="fab fa-whatsapp"></i></a>
            </div>
          </div>
        </div>




      </div>
    </section>

    <section class="why-limalum-section" >
      <i class="anchor" id="hs-3"></i>
      <div class="container">
        <div class="row">
          <div class="col-lg-9 mx-auto">
            <h2 class="title">¿Por qué contratar a Limalum?</h2>
          </div>
        </div>

        <b-collapse id="collapse-1" class="box-info" v-model="visibleWhy">
          <b-card>
            <h3>Distinción y Acabado</h3>
            <p>
            Puertas elegantes y seguras se logran cuando el material de construcción es el correcto. La combinación de aluminio y vidrio es la decisión
            inteligente para la fabricación de puertas de aluminio y vidrio; no solo se trata de la gran confiabilidad de la materia prima, también es la distinción del acabado que puede obtenerse.
            </p>
            <br />
            <h3>Durabilidad y Elegancia</h3>
            <p>
              Una ventana con aluminio y vidrio tiene muchas ventajas. El vidrio permite el paso de la luz, pero evita que agentes indeseables como el polvo, el ruido o la lluvia entren a nuestro hogar u oficina.
              Si a estas virtudes sumamos la durabilidad y elegancia del aluminio, ¡tenemos la mejor elección ante nosotros!.
            </p>
            <br />
            <h3>Experiencia y profesionalismo</h3>
            <p>
              Contamos con personal capacitado para realizar cualquier tipo de instalación basandonos en los protocolos y procesos requerido
              para hacer trabajos con calidad.
            </p>
            <br />
          </b-card>
        </b-collapse>

        <div class="box-btn-toggle">
          <a class="btn-toggle" @click="visibleWhy = !visibleWhy">
            <i class="fal fa-chevron-circle-down" v-if="!visibleWhy"></i>
            <i class="fal fa-chevron-circle-up" v-else></i>
          </a>
        </div>
      </div>
    </section>
  </div>
</template>

<script>

import { Swiper, SwiperSlide } from 'vue-awesome-swiper'
 import 'swiper/css/swiper.css'

export default {
  components: {
    Swiper,
    SwiperSlide
  },

  data() {
    return {

      projects: [
      { image: 'public/images/projects/baño/1.jpg', name:'Baños', url:'/bano'},
      { image: 'public/images/projects/canceles/1.jpg', name:'Canceles', url:'/projects'},
      { image: 'public/images/projects/pasamanos/1.jpg', name:'Pasamanos', url:'/pasamanos'},
      { image: 'public/images/projects/ventana/1.jpg', name:'Ventanas', url:'/ventana'},
      { image: 'public/images/projects/barandal/1.jpg', name:'Barandales', url:'/barandal'},
      { image: 'public/images/projects/domos/1.jpg', name:'Domos', url:'/domos'},
      { image: 'public/images/projects/espejos/1.jpg', name:'Espejos', url:'/espejos'},
    ],

      // == Carousels options ==

      projectsOption: {
       slidesPerView: 3,
       spaceBetween: 30,
       pagination: {
         el: '.swiper-pagination',
         clickable: true
       },

        navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
      },
      breakpoints: {
       992: {
         slidesPerView: 3
       },
       576: {
         slidesPerView: 2
       },
       1: {
         slidesPerView: 1
       },
     }
    },

      visibleWhy: false,

      // == ==
    }
  },

  mounted() {
  }
}
</script>
