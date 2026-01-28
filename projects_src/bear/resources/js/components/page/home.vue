<template>
  <div id="home">

  <section id="sec1" class="d-flex align-items-center">
    <div class="container text-center">
        <div class="img-bg mx-auto"></div>
          <p>
            Sitio web Bear Bars en construcción
          </p>
    </div>
  </section>

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
