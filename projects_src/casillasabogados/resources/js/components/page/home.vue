<template>
  <div id="home">
    <section id="sec1">
      <div class="container-fluid" id="titulo-banner">
         <div class="row">
           <div class="col-md-5" id="container-bg">
             <div class="salida">
                <h1> Casillas Abogados Penalistas </h1>
               <p>
                 Somos una firma de abogados con presencia en el estado de Nayarit, dedicada
                  al litigio y asesoría en materia penal, con especialidad
                  en el en el Sistema de Justicia Penal Oral, así como en la materia civil,
                  familiar, agrario, mercantil y juicio de amparo.
               </p>
             </div>
           </div>
           <div class="col-md-7">

         </div>
       </div>

     </div>
    </section>

    <!--TERMINA SECCION 1-->
    <!--SECCION 2-->
<section id="sec2">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-5 " id="container-bg">
        <div class="row">
          <div class="col-12 col-md-12">
            <div class="titulo-practicas">
              <h1>Servicios</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-7" style="padding:25px;">
        <div class="row">
          <div class="col-md-6">
            <h3>Materia Penal</h3>
            <p>
              Si eres señalado por haber participado en un delito o eres víctima, acércate a nosotros,
              brindamos asesoría especializada en materia penal en sistema acusatorio e inquisitivo.
              Ponemos a tu servicio el estudio de carpeta de investigación, representación legal desde
              la investigación inicial, etapa intermedia, juicio oral, ejecución de sanciones, juicio
              de amparo penal, en el Sistema Integral para Adolescentes.
            </p>
          </div>
          <div class="col-md-6">
            <h3>Materia familiar</h3>
            <p>
              Te representamos y asesoramos ante los Juzgados en materia familiar en el estado de Nayarit, en asuntos
              relacionados con pensión alimenticia, divorcios, juicios sucesorios, y todos los temas relacionados en materia familiar.
            </p>
          </div>

        </div>
        <div class="row">
          <div class="col-md-6">
            <h3>Materia Civil</h3>
            <p>
              Te realizamos tus contratos comerciales, contrato de compra-venta, contratos para renta
              de propiedades, además prestamos asesoría en litigios civiles, usucapión de propiedades y juicios o amparos.
            </p>
          </div>
          <div class="col-md-6">
            <h3>Colaboración</h3>
            <p>
              ¿Resides fuera de Nayarit y necesitas realizar algún trámite legal dentro del estado? Nosotros te ayudamos.
              Realizamos colaboración de tus asuntos legales dentro del Estado de Nayarit.

            </p>
          </div>

        </div>
        <div class="row">
          <div class="col-md-6">
            <h3>Materia Agraria</h3>
            <p>
              Asesoría legal y solución de controversias en materia agraria, representación a poblados ejidales y
              comunidades indígenas en defensa de sus derechos colectivos; así como a ejidatarios, posesionarios y avecindados.

            </p>
          </div>
          <div class="col-md-6">
            <h3>Materia Mercantil</h3>
            <p>
            Te brindamos certidumbre y seguridad jurídica el que hacer comercial, te representamos en litigio mercantil.
            </p>
          </div>

        </div>

      </div>

    </div>

  </div>

</section>
<!-- TERMINA SECCION 2-->


<!--SECCION 3-->
<section id="sec3">
  <div class="container text-center">


        <h2><strong>Nosotros</strong></h2>
        <p>
          <strong>
            Casillas y Asociados abogados, es una firma de abogados en el Estado de Nayarit,
            fundada en el año 2012, dedicado primordialmente en el litigio y asesoría penal
            en sus diversas instancias. Actualmente nuestra firma es encabezada por licenciado
            Miguel Ángel Casillas, como socio fundador.
          </strong>
        </p>
        <p><strong>Nuestro compromiso es brindar un servicio con calidad, excelencia y profesionalismo</strong></p>






  </div>
</section>
<!--TERMINA SECCION 3-->

<!--SECCION 4-->
<section id="sec4">

</section>
<!--TERMINA SECCION 4-->

<!-- SECCION 5-->
<section id="sec5">
  <div class="container-fluid" id="container-bg">
      <form id="form-contacto-home" accept-charset="utf-8" class="titulo-bg" action="<?php echo $this -> url(array('controller' => 'home','action' => 'contactomail'))?>" role="form" method="POST">
        <h2>Contáctanos</h2>
          <input type="text" size="15" maxlength="30" placeholder="Nombre" name="contacto[nombre]" required>
          <input type="email" size="15" maxlength="30" placeholder="Correo" name="contacto[correo]" required>
          <input type="text" size="15" maxlength="30" placeholder="Telefono" name="contacto[telefono]" required>
          <textarea placeholder="Mensaje" rows="8" cols="40" name="contacto[mensaje]" required></textarea>
          <button type="submit" id="boton">Enviar</button>
      </form>

  </div>
</section>
<!--SECCION 5-->

  </div>
</template>

<script type="text/javascript">
	export default {
    data(){
      return{
        swiperOption: {
          effect: 'fade',
          spaceBetween: 30,

          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
          },

          pagination: {
            el: '.swiper-pagination',
            clickable: true
          },
        }
      }
    },

    methods: {
    showAlert() {
      // Use sweetalert2
      this.$swal('Hello Vue world!!!');
    },
  },
        mounted() {
            console.log('Home mounted.');
        }
    }
</script>
