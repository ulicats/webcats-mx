<template>
  <div id="home">

    <section class="banner-section" id="home-banner-section">

    <!--swiper class="swiper swiper-desktop content" :options="swiperOption"-->
     <!--swiper-slide v-for="(banner, index) in banners.pc" :key="index"-->
     <div class="swiper swiper-desktop content" v-for="(banner, index) in banners.pc" :key="index">
       <div class="d-block placed-backg " v-bind:style="{ backgroundImage: 'url('+banner.imagen+')' }" :href="banner.url">
         <div class="row align-items-center bg-section h-100 p-5">
           <div class="col-md-7">
             <h1><strong>{{ banner.titulo }}</strong></h1>
               <p><strong>{{ banner.name }}</strong></p>
               <a type="button" class="btn btn-warning" name="button" href="https://api.whatsapp.com/send?phone=523332341375">Reservar</a>
           </div>
          </div>
        </div>
     </div>


        <!--div class="swiper-button-prev" slot="button-prev"></div-->
        <!--div class="swiper-button-next" slot="button-next"></div-->
     <!--/swiper-slide-->

   <!--/swiper-->

   <div class="swiper swiper-mobile content" :options="swiperOption">
    <div v-for="(banner, index) in banners.movil" :key="index">
        <div class="d-block placed-backg " v-bind:style="{ backgroundImage: 'url('+banner.imagen+')' }" :href="banner.url">
          <div class="row align-items-center bg-section text-center h-100 ml-0 mr-0">
            <div class="col-md-12">
              <h1 class="respons-title">{{ banner.titulo }}</h1>
                <p>{{ banner.name }}</p>
                <a type="button" name="button" class="btn btn-warning" href="https://api.whatsapp.com/send?phone=523332341375">reservar</a>
            </div>
           </div>
         </div>

       <!--div class="swiper-button-prev" slot="button-prev"></div-->
       <!--div class="swiper-button-next" slot="button-next"></div-->
    </div>

  </div>
</section>

<!-- Gallery  -->
    <section class="gallery-section pt-5 pb-5">
      <div class="container oversized-container">
        <div class="box-title">
          <h2 class="s-title text-center">Galería de imágenes</h2>
        </div>

        <div class="box-gallery">
          <swiper class="swiper" :options="galleryOptions">
            <swiper-slide v-for="(img, igInx) in gallery" :key="'igInx-'+igInx">
              <div class="placed-backg-gallery img" v-bind:style="{ backgroundImage: 'url('+img+')' }">

              </div>
            </swiper-slide>


            <!--div class="swiper-button-prev" slot="button-prev"></div-->
            <!--div class="swiper-button-next" slot="button-next"></div-->
          </swiper>

          <div class="container box-info pt-4">
            <div class="title-galeria">
              <h2>Vive una nueva experiencia con nosotros</h2>
              <a href="#/galeria" class="btn btn-warning">Ver más</a>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!--  -->

    <section class="section-gallery text-white">
      <div class="bg-gallery pb-4 pt-4">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-12">
              <div class="precio text-center pt-5">
                <h2><strong>Precios:</strong></h2>
                <strong><p>1 noche de fin de semana o día festivo $2,000.00.</p></strong>
                <strong><p>2 noches de fin de semana o día festivo $1,900.00 c/u.</p></strong>
                <strong><p>1 noche entre semana $1,800.00.</p></strong>
                <strong><p>2 noches entre semana $1,700.00 c/u.</p></strong>
                <strong><p>Costo entre semana: $1800.00 mxn.</p></strong>
                <p>La idea es que sea para pareja, pero por tener un sofá cama pueden caber otras 2 personas más (con costo extra).</p>
                <a href="https://api.whatsapp.com/send?phone=523332341375" class="btn btn-warning">Reservar</a>
                <hr>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="section-cabañas" class="pt-5">
      <div class="container title-sec2 text-center pb-5" data-aos="fade-down-right">
        <h2><strong>Contamos con 3 cabañas de descanso</strong></h2>
      </div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-lg-4 col-md-4 pb-5"  v-for="(portafolio, index) in portafolios" :key="index">
						<div class="caja bg-caja" target="_blank" v-bind:style="{ backgroundImage: 'url('+portafolio.imageUrl+')' }" :href="portafolio.url">
							<div class="overlay text-center bg-caja">
						     <a :href="portafolio.url"><p> {{ portafolio.name }}</p></a>
							</div>
						</div>
            <div class="text-center title">
              <a :href="portafolio.url"><p> {{ portafolio.name }}</p></a>
            </div>  
					</div>
				</div>
			</div>
		</section>



    <section id="sec2" class="pb-5">
      <div class="container title-sec2 text-center" data-aos="fade-down-right">
        <h2><strong>ACTIVIDADES EN MAZAMITLA</strong></h2>
        <h4>Podrás encontrar actividades para realizar con tu familia y amigos</h4>
      </div>

      <div class="container text-center">
            <div class="row justify-content-center mb-2 pt-5">
              <div class="col-md-4 col-sm-6">
                <div class="caja mazamitla-bg mb-2">
                  <p>Iglesia Mazamitla</p>
                  <div class="overlay">
                    <p>Qué tal pasar un rato de descanso en el centro donde apreciarás la hermosa iglesia de Mazamitla.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="caja motos-bg mb-2">
                  <p>Cuatrimotos</p>
                  <div class="overlay">
                    <p>Date un paseo en cuatrimoto en las rutas que mazamitla ofrece para ti.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="caja cabaña-bg">
                  <p>Cabaña</p>
                  <div class="overlay">
                    <p>Hospedaje de lujo en nuestra cabaña donde tenemos todo el servicio y comodidad para ti.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row justify-content-center h-100">
              <div class="col-md-4 col-sm-6">
                <div class="caja tirolesa-bg mb-2">
                  <p>Tirolesa</p>
                  <div class="overlay">
                    <p>Vive la experiencia de pasear en la tirolesa sobre el verde bosque de Mazamitla.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="caja cascada-bg mb-2">
                  <p>Cascada el salto</p>
                  <div class="overlay">
                    <p>No te pierdas la experiencia de visitar la frescura de una rica brisa de la cascada del salto después de un buen recorrido en cuatrimoto.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="caja bar-bg">
                  <p>Bares</p>
                  <div class="overlay">
                    <p>Pasa un buen rato con los amigos o con tu pareja mientras toman unas deliciosas bebidas en los bares del centro.</p>
                  </div>
                </div>
              </div>
            </div>
      </div>
    </section>

    <section id="servicios-extras" class="pb-5">
      <div class="container title-sec2 pt-5" data-aos="fade-down-right">
        <h2><strong>Porque mereces lo mejor</strong></h2>
      </div>

      <div class="container text-center">
            <div class="row justify-content-center mb-2 pt-5">
              <div class="col-md-6 pb-5">
                <div class="caja">
                  <img src="public/images/banners/5.jpg" alt="">
                </div>
              </div>
              <div class="col-md-6 pb-5">
                <div class="caja">
                  <img src="public/images/banners/7.jpg" alt="">
                </div>
              </div>
              <div class="col-md-6 pb-5">
                <div class="caja">
                  <img src="public/images/banners/8.jpg" alt="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="caja">
                  <img src="public/images/banners/6.jpg" alt="">
                </div>
              </div>
            </div>

      </div>
    </section>


    <!--section id="sec3">
      <div class="container d-flex align-items-center text-center bg p-md-5">
        <div class="pt-5 pb-5" data-aos="zoom-in">
          <h1 class="pb-3"><strong>Conecta con la Naturaleza</strong></h1>
          <p class="pb-5">Este es un texto de ejemplo para los usuarios, un lugar donde podras disfrutar de la tranquilidad del paisaje con vista al bosque y sonido del agua, sitio perfecto
          para el descanso de un fin de semana, contamos con todos los servicios para que tu estancia con nosotros sea inolvidable, vive
          una de las mejores experiencias, te esperamos en Mazamitla.
        </p>
        <iframe width="700" height="415" src="https://www.youtube-nocookie.com/embed/kJH_wxNPGHc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
      </div>

    </section-->


    <section class="container-fluid contact-section">
      <div class="row align-items-center text-white bg-formulario">
        <div class="col-md-12 pl-0 pr-0">
          <div class="bg-form">

          </div>
        </div>
      <!--div class="col-md-6 col-lg-6 col-info p-5" style="border-left-style: double;">
          <div class="box-middle">
            <h2 class="mb-3 title-st-1 text-center">¿Tienes alguna duda?</h2>

            <div>
              <p class="text-center">
                Mandanos mensaje para responder tus preguntas, sera un gusto atenderte.
              </p>

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
        </div-->

      </div>
    </section>



   <section id="mapa" class="d-flex align-items-center pt-5">
       <div class="container-fluid">
           <div class="row align-items-center">
                 <div class="col-md-6" data-aos="fade-right">
                   <div class="text-center justify-content-center">
                       <h2>Mapa</h2>
                       <p>Arce Cabañas Mazamitla</p>
                       <p>49533 Mazamitla, Jal.</p>
                       <p>Ubicadas en fraccionamiento las azaleas.</p>
                   </div>
                 <hr>
                   <hr>
                   </div>
                   <div class="col-md-6 pl-0 pr-0" data-aos="fade-left">
                     <div class="text-center">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15007.547751702228!2d-103.0270312!3d19.8869955!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842f09f7405893bd%3A0xcdcc7868529d9790!2sARCE%20CABA%C3%91AS%20MAZAMITLA!5e0!3m2!1ses-419!2smx!4v1708545206738!5m2!1ses-419!2smx"
                         width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                     </div>
                   </div>
             </div>
         </div>
   </section>

  </div>
</template>

<script>
import { Swiper, SwiperSlide } from 'vue-awesome-swiper'
import 'swiper/css/swiper.css'

  export default {
    name: 'swiper-example-navigation',
    title: 'Navigation',
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
        { imagen: 'public/images/banners/3.jpg', titulo:'Arce Cabañas Mazamitla', name:'Un lugar único, pensado para desconectarse de todo y relajarse en medio de la naturaleza. Visitanos y disfruta de la experiencia y maravíllate con la increible vista que ofrece nuestras hermosas cabañas.'},

      ],
      movil: [
        { imagen: 'public/images/galeria/1.jpg', titulo:'Arce Cabañas Mazamitla', name:'Un lugar único, pensado para desconectarse de todo y relajarse en medio de la naturaleza. Visitanos y disfruta de la experiencia y maravíllate con la increible vista que ofrece nuestras hermosas cabañas.'},
      ]
    },

    gallery: [
        'public/images/galeria/1.jpg',
        'public/images/galeria/2.jpg',
        'public/images/galeria/3.jpg',
        'public/images/galeria/4.jpg',
        'public/images/galeria/5.jpg',
        'public/images/galeria/6.jpg',
        'public/images/galeria/7.jpg',
      ],

      portafolios: [
        { name: 'Ver Cabaña 1',  imageUrl: 'public/images/cabanas/1.jpg',  url:'https://arcecabanasmazamitla.com/#/cabana'},
        { name: 'Ver Cabaña 2',   imageUrl: 'public/images/cabanas/2.jpg',  url:'https://arcecabanasmazamitla.com/#/cabana2'},
        { name: 'Ver Cabaña 3',   imageUrl: 'public/images/cabanas/3.jpg', url:'https://arcecabanasmazamitla.com/#/cabana3'},
      ],


    swiperOption: {
      /*  loop: true,
        speed:3500, */

         navigation: {
           nextEl: '.swiper-button-next',
           prevEl: '.swiper-button-prev'
         },
         pagination: {
          el: '.swiper-pagination',
          dynamicBullets: true,
          clickable: true
        },
    /*    autoplay: {
          delay: 5000,
          disableOnInteraction: false
        },*/

      },

      galleryOptions: {
          loop: true,
          slidesPerView: 4,
          spaceBetween: 30,
          speed: 700,

          autoplay: {
            delay: 4500,
            disableOnInteraction: false
          },

          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
          },

          pagination: {
           el: '.swiper-pagination',
           clickable: true
         },

          breakpoints: {
            1199: {
              slidesPerView: 3,
            },
            991: {
              slidesPerView: 2,
            },
            575: {
              slidesPerView: 1,
            },
            320: {
              slidesPerView: 1,
            },
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


///

}


</script>
