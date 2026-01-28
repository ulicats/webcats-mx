<template>
  <div id="home">
    <div class="section-banner" id="home-banner-section">
      <div class="bg-section pt-5 pb-5">
        <div class="row align-items-center">
          <div class="col-md-7 pb-5">
            <div class="container">
              <div class="title">
                <h1><strong>Ahorra en costos de impresión y Mantenimiento.</strong></h1>
                <div class="subtitle">
                    <h2>Rentar es mejor</h2>
                </div>
                <p>
                  Evita tecnología obsoleta, costos de mantenimiento y reparación, nuestro servicio de renta es
                  <span>todo incluido</span>. Contamos con planes desde <span>$1,499 pesos mensuales</span>
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

      <!-- =======================FIN DE BANNER======================= -->

<div class="form-section pb-5" id="contacto">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="title">
          <h2>Impresiones que dan confianza</h2>
          <p>Contamos con 19 años brindando soluciones de servicios de Impresión para empresas, gobiernos y particulares.</p>
        </div>
        <div class="row pt-4">
          <div class="col-md-3">
            <div class="icons-acom">
              <div class="icon">
                <i class="fa fa-print"></i>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="descripcion ">
              <h3>Servicio</h3>
              <p>Nuestro principal servicio de arrendamiento de copiadoras te permite tener un aliado estratégico para nunca parar de imprimir.</p>
            </div>
          </div>
        </div>
        <div class="row pt-5">
          <div class="col-md-3">
            <div class="icons-acom">
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="descripcion">
              <h3>Atención</h3>
              <p>Contamos con sistema de atención al cliente integral. Nuestro soporte incluye canales como WhatsApp, Teléfono, correo electrónico y visitas personalizadas.</p>
            </div>
          </div>
        </div>
        <div class="row pt-5">
          <div class="col-md-3">
            <div class="icons-acom">
              <div class="icon">
                <i class="fa fa-microchip"></i>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="descripcion">
              <h3>Tecnología</h3>
              <p>Todos nuestros equipos son nuevos y en constante mantenimiento. Cambiaremos el equipo cuando ya no cumpla tus expectativas.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 bg-form">
        <div class="title">
         <h2>Solicita una llamada para de un experto en copiadoras multifuncionales.</h2>
        </div>
        <div class="formulario">
          <b-form class="mt-4" @submit="onSubmit">

            <b-form-group class="custom-group-1"
               label="Servicio/Producto:">
               <b-form-select size="sm" required v-model="form.contactType">
                 <b-form-select-option :value="null">Seleccionar</b-form-select-option>
                 <b-form-select-option value="Renta de copiadoras">Renta de copiadoras</b-form-select-option>
                 <b-form-select-option value="Compra de copiadoras">Compra de copiadoras</b-form-select-option>
                 <b-form-select-option value="Compra de combustibles">Compra de combustibles</b-form-select-option>
               </b-form-select>
             </b-form-group>

             <div class="row">
               <div class="col-md-6">
                 <b-form-group class="custom-group-1"
                    label="Hora de llamada:">
                    <b-form-select size="sm" required v-model="form.contactTypel">
                      <b-form-select-option :value="null">Seleccionar</b-form-select-option>
                      <b-form-select-option value="Entre 9am a 2pm">Entre 9am a 2pm</b-form-select-option>
                      <b-form-select-option value="Entre 4pm a 6pm">Entre 4pm a 6pm</b-form-select-option>
                      <b-form-select-option value="Cualquier hora">Cualquier hora</b-form-select-option>
                    </b-form-select>
                  </b-form-group>
               </div>

               <div class="col-md-6">
                 <b-form-group class="custom-group-1"
                   label="Fecha de llamada:">
                  <b-form-datepicker
                  id="example-datepicker"
                  placeholder="dd/mm/aaaa"
                  value=""
                  size="sm"
                  v-model="form.date"
                  class="mb-2">
                  </b-form-datepicker>
                 </b-form-group>
               </div>
             </div>

             <b-form-group class="custom-group-1"
               label="Información de contacto">
               <b-form-input
                 size="sm"
                 v-model="form.name"
                 type="text"
                 placeholder="Nombre/apellido"
                 required
               ></b-form-input>
             </b-form-group>

              <b-form-group class="custom-group-1"
                label="">
                <b-form-input
                  size="sm"
                  v-model="form.phone"
                  type="text"
                  placeholder="Teléfono"
                  minlength="10"
                  maxlength="10"
                  required
                ></b-form-input>
              </b-form-group>

              <b-form-group class="custom-group-1"
                label="">
                <b-form-input
                  size="sm"
                  v-model="form.email"
                  type="email"
                  placeholder="Escriba su correo electrónico"
                  required
                ></b-form-input>
              </b-form-group>

              <p class="text-center">
                <b-button type="submit" class="btn-st-1 btn-color">Solicitar Llamada</b-button>
              </p>

            </b-form>
        </div>
      </div>
    </div>
  </div>
</div>

<hr>

<div class="clientes-section pt-5 pb-5">
  <div class="container">

    <div class="title text-center">
      <h2>Más de 500 clientes satisfechos.</h2>
      <h3>Realmente apreciamos todas su respaldo ¡muchas gracias!</h3>
    </div>

      <div class="testimonios">
        <div class="">

        </div>
      </div>

  </div>

</div>

  <div class="servicios-section bg-gris pt-5 pb-5" id="servicios">
    <div class="container">

        <div class="title pb-5">
          <h2>Nuestros Servicios</h2>
          <h3>Conoce nuestra oferta de servicios.</h3>
        </div>
            <div class="row">
              <div class="col-md-4">
                <div class="row">
                  <div class="col-md-3 col-3">
                    <div class="icon">
                        <i class="fa fa-print"></i>
                    </div>
                  </div>
                  <div class="col-md-9 col-9">
                    <div class="title-serv">
                      <h3><strong>Arrendamiento de Copiadoras</strong></h3>
                      <p>Contamos con el sistemas que puede utilizar una empresa para no tener que abonar el pago total de una o varias en el momento de comprarlas. Además, es una alternativa al renting o alquiler de fotocopiadoras.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="row">
                  <div class="col-md-3 col-3">
                    <div class="icon">
                      <i class="fas fa-store-alt"></i>
                    </div>
                  </div>
                  <div class="col-md-9 col-9">
                    <div class="title-serv">
                      <h3><strong>Venta de Equipos</strong></h3>
                      <p>Ofrecemos una extensa gama de impresoras, copiadoras y multifuncionales de alta velocidad y rendimiento de la linea Ricoh y Sharp, desde equipos monocromáticos (blanco y negro) hasta equipos a color con excelentes funciones en A4, carta y más.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="row">
                  <div class="col-md-3 col-3">
                    <div class="icon">
                      <i class="fas fa-dolly-flatbed"></i>
                    </div>
                  </div>
                  <div class="col-md-9 col-9">
                    <div class="title-serv">
                      <h3><strong>Importación / Logística</strong></h3>
                      <p>Abarcamos un cuidadoso proceso logístico, todas las actividades para trasladar una mercancía desde el país de origen hasta un lugar en el país de destino, donde intervienen una serie de operadores logísticos que garantizarán un traslado seguro de la mercancía, reduciendo tiempo y costos.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <div class="row">
                  <div class="col-md-3 col-3">
                    <div class="icon">
                      <i class="fas fa-file-invoice-dollar"></i>
                    </div>
                  </div>
                  <div class="col-md-9 col-9">
                    <div class="title-serv">
                      <h3><strong>Licitaciones</strong></h3>
                      <p>Damos a conocer públicamente una necesidad, satisfaciendo las ofertas solicitadas, evalúa estas ofertas y selecciona una de ellas. Esta palabra también puede referirse a un proceso de subasta.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="row">
                  <div class="col-md-3 col-3">
                    <div class="icon">
                      <i class="fas fa-swatchbook"></i>
                    </div>
                  </div>
                  <div class="col-md-9 col-9">
                    <div class="title-serv">
                      <h3><strong>Cartuchos Compatibles</strong></h3>
                      <p>Los cartuchos compatibles son cartuchos que no son fabricados por la misma marca que ha manufacturado la impresora. Son por lo tanto cartuchos que funcionan perfectamente a tu máquina pero de otra marca.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="row">
                  <div class="col-md-3 col-3">
                    <div class="icon">
                      <i class="fas fa-truck"></i>
                    </div>
                  </div>
                  <div class="col-md-9 col-9">
                    <div class="title-serv">
                      <h3><strong>Distribución</strong></h3>
                      <p>Ponemos el producto y servicio a disposición de los consumidores que quieren comprarlo. Niticolor es tu mejor opción.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>


    </div>
  </div>

  <div class="section-preguntas pt-5 pb-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="title">
            <h2>¿Alguna pregunta?</h2>
            <span>Llame al: <a href="tel:+523111694994">(311) 169 4994</a></span>
            <p>Puedes llamar un enviar un mensaje de WhatsApp a este mismo número. Nuestro equipo comercial y de atención a cliente esta listo para ayudarte a resolver tus dudas.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="redes">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-whatsapp"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="mapa bg-gris pt-5 pb-5" id="ubicacion">
    <div class="container">
      <div class="row align-itmes-center">
        <div class="col-md-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2207.2265699414997!2d-104.88946736171677!3d21.503888062479227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x84273703e5c50a95%3A0xca54f65b190fbe88!2sNiticolor%20-%20Renta%20de%20Copiadoras%20en%20Tepic%20y%20Vallarta.!5e0!3m2!1ses-419!2smx!4v1715459853467!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-md-6 pt-5">
          <div class="text-ubicacion">
            <h3>Ubicación</h3>
            <p>Teléfono: <a href="tel:+523111694994">(311) 169 4994</a></p>
            <p>Domicilio: Av Prisciliano Sanchez 134-a, Centro, 63000 Tepic, Nay.</p>
            <p>Email: contacto@niticolor.com</p>
          </div>
          <div class="niti-desc">
            <h4>Niticolor</h4>
            <p>Nuestra misión es trabajar diariamente para mejorar los lugares de trabajo utilizando tecnologías y servicios innovadores que permiten a nuestros clientes trabajar de manera más inteligente.</p>
            <div class="imagen pt-5">
              <img src="public/images/home/niticolor.png" alt="">
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>



  <!-- =======================FIN DE DIV DEL HOME======================= -->

  </div>
</template>

<script>
export default {
  data(){
    return{
      form: {
        contactType: null,
        contactTypel:null,
        date:null,
        name: null,
        phone: null,
        email: null,
      }
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
