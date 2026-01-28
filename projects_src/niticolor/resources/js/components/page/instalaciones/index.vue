<template>
	<div class="placed-backg-galeria" id="instalaciones">
		<div class="bg-global"></div>
		<div class="container">
			<h2 class="title text-center pt-5">Galería</h2>

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

		</div>
	</div>
</template>
<script type="text/javascript">
export default {
 data() {
   return {
	gallery: [
	{ imgUrl: 'public/images/home/galeria/1.jpg'},
	{ imgUrl: 'public/images/home/galeria/2.jpg'},
	{ imgUrl: 'public/images/home/galeria/3.jpg'},
	{ imgUrl: 'public/images/home/galeria/4.avif'},
	{ imgUrl: 'public/images/home/galeria/5.jpg'},
	{ imgUrl: 'public/images/home/galeria/6.jpg'},
	{ imgUrl: 'public/images/home/galeria/7.jpg'},
	{ imgUrl: 'public/images/home/galeria/8.jpg'},
	{ imgUrl: 'public/images/home/galeria/9.jpg'},
	{ imgUrl: 'public/images/home/galeria/10.jpg'},
	{ imgUrl: 'public/images/home/galeria/11.jpg'},
	{ imgUrl: 'public/images/home/galeria/12.jpg'},
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
