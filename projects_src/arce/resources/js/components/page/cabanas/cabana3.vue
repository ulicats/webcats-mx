<template>
	<div class="placed-backg-galeria" id="cabana">
		<div class="bg-global"></div>
		<div class="container">
			<h2 class="title text-center pt-5">Galería Cabaña 3</h2>

			<section class="container oversized-container gallery-section">
	      <div class="">
	        <div class="card-columns" v-lazy-container="{ selector: 'img', loading: 'public/images/pages/gallery/loading.gif' }">
						<div class="card" v-for="(image, iInx) in gallery" :key="iInx">
            <img class="card-img" v-bind:src="image.imgUrl">
            	<a class="_btn trans-250" @click="showModal(iInx)"></a>
          </div>
	        </div>
	      </div>
	    </section>

			<b-modal id="modal-gallery" ref="modal-gallery" size="lg" centered hide-footer>
				<img class="img-modal" :src="modal.imgUrl">
			</b-modal>

			<div class="contenido-section container pt-5 pb-5">
				<div class="row">
					<div class="col-md-6 bg-precio">
						<div class="titulo-gal">
							<h2><strong>Nuestras cabañas cuentan con:</strong></h2>
							<ul>
								<li>Cama matrimonial.</li>
								<li>Cocina bien equipada.</li>
								<li>Sofacama.</li>
								<li>Smart tv.</li>
								<li>Juegos de mesa.</li>
								<li>Terraza.</li>
								<li>Baño completo.</li>
							</ul>
							<h2><strong>Tiene cocina equipada con:</strong></h2>
							<ul>
								<li>Frigobar.</li>
								<li>Estufa.</li>
								<li>Licuadora.</li>
								<li>Cafetera.</li>
								<li>Microondas.</li>
								<li>Televisión.</li>
								<li>Utensilios necesarios (sal, azucar, servilletas, jabón para lavar trastes).</li>
								<li>Asador de carbón en la terraza.</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="precio text-center">
							<h2><strong>Precios:</strong></h2>
							<strong><p class="pb-3">1 noche de fin de semana o día festivo $2,000.00.</p></strong>
							<strong><p class="pb-3">2 noches de fin de semana o día festivo $1,900.00 c/u.</p></strong>
							<strong><p class="pb-3">1 noche entre semana $1,800.00.</p></strong>
							<strong><p class="pb-3">2 noches entre semana $1,700.00 c/u.</p></strong>
							<strong><p class="pb-3">Costo entre semana: $1800.00 mxn.</p></strong>
							<p>La idea es que sea para pareja pero por tener un sofá cama pueden caber otras 2 personas más (con costo extra).</p>
							<a href="https://api.whatsapp.com/send?phone=523332341375" class="btn btn-warning">Reservar</a>
							<hr>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</template>
<script type="text/javascript">
export default {
 data() {
   return {
	gallery: [
		{ imgUrl: 'public/images/cabanas/cabana3/13.jpg'},
		{ imgUrl: 'public/images/cabanas/cabana3/14.jpg'},
		{ imgUrl: 'public/images/cabanas/cabana3/15.jpg'},
		{ imgUrl: 'public/images/cabanas/cabana3/16.jpg'},
		{ imgUrl: 'public/images/cabanas/cabana3/17.jpg'},
		{ imgUrl: 'public/images/cabanas/cabana3/18.jpg'},
		{ imgUrl: 'public/images/cabanas/cabana3/19.jpg'},
		{ imgUrl: 'public/images/cabanas/cabana3/20.jpg'},
		{ imgUrl: 'public/images/cabanas/cabana3/21.jpg'},
		{ imgUrl: 'public/images/cabanas/cabana3/22.jpg'},
		{ imgUrl: 'public/images/cabanas/cabana3/22.jpg'},
	],

	modal: {
			imgUrl: null
		}


			///
   }
 },

 methods: {
 showModal(inx){
	 this.modal = this.gallery[inx];
	 this.$refs['modal-gallery'].show();
 }
},

  mounted(){},

}
</script>
