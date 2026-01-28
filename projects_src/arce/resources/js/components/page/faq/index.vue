<template>
	<div id="faq">
		<div class="bg-global"></div>
		<div class="container">
			<h2 class="title text-center pt-5 pb-3">Preguntas Frecuentes</h2>
			<div class="my-4" role="tablist">
        <b-card no-body class="mb-1" v-for="(qa, qaInx) in faqs" :key="'qaInx-'+qaInx">
          <b-card-header header-tag="header" class="p-1" role="tab">
            <a v-b-toggle="'accordion-'+qaInx" class="question">{{ qa.q }}</a>
          </b-card-header>

          <b-collapse :id="'accordion-'+qaInx" :visible="qa.show" accordion="my-accordion" role="tabpanel">
            <b-card-body v-html="qa.a"></b-card-body>
          </b-collapse>
        </b-card>
      </div>
		</div>
	</div>
</template>
<script type="text/javascript">
	export default {
		data(){
	return{
		faqs : [
		 {
			 q: '¿Hay señal telefónica?',
			 a: `
			 <p class="mt-1">
				Hemos visto que esto depende de la compañía telefónica y del equipo celular.
			 </p>
		 `
		 },
		 {
			 q: '¿Hay Wifi?',
			 a: `
			 <p class="mt-1">
			 Si, contamos con Internet satelital STARLINK.
			 </p>
		 `
		 },
		 {
				q: '¿Hay tiendas y/o  restaurantes cerca?',
				a: `
					<p>
						Hay una tienda de abarrotes dentro del fraccionamiento y una que tiene servicio a domicilio para tu mayor comodidad. Restaurantes, hay uno dentro del fraccionamiento que tiene servicio de desayunos y comidas, a 3 minutos de la cabaña hay un café. Y a 12 minutos de tu cabaña hay un restaurante con servicio todo el día.
					</p>
				`
			},
		 {
		  q: '¿A qué distancia están del centro las cabañas?',
			 a: `
			 <p class="mt-1">
				 Estamos a 4 km del centro, 20 minutos en coche aproximadamente.
			 </p>
		 `
		 },
		 {
			 q: '¿Aceptan más de 2 personas?',
			 a: `
			 <p class="mt-1">
				 SÍ, con costo extra pueden ingresar dos personas más, ya que cada cábala cuenta con sofá cama.
			 </p>
		 `
		 },
		 {
			 q: '¿Cuál es el método de reservación?',
			 a: `
			 <p class="mt-1">
				 Para apartar es mediante un anticipo del 50% del total de la reservación y el resto se líquida al llegar a la cabaña.
			 </p>
		 `
		 },
		 {
			 q: '¿Cuál es el horario de entrada y salida?',
			 a: `
			 <p class="mt-1">
				 La entrada es a partir de las 3:00 pm y la salida es máximo a las 12:00 pm.
			 </p>
		 `
		 },
	 ],

			}
		},
	}
</script>
