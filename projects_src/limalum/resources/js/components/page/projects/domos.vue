<template lang="html">
  <div id="projects-page">

    <section class="main-section">
      <div class="container oversized-container">
        <div class="box-top">
          <h1 class="page-title">Proyectos</h1>

          <div class="d-block mt-4 text-center">
            <router-link class="btn my-2 my-md-2 btn-s1" to="/projects">Canceles corredizos</router-link>
            <router-link class="btn my-2 my-md-2 btn-s1" to="/bano">Baño con vidrio templado</router-link>
            <router-link class="btn my-2 my-md-2 btn-s1" to="/pasamanos">Pasamanos</router-link>
            <router-link class="btn my-2 my-md-2 btn-s1" to="/ventana">Ventana corredizas</router-link>
            <router-link class="btn my-2 my-md-2 btn-s1" to="/barandal">Barandales</router-link>
            <router-link class="btn my-2 my-md-2 btn-s1" to="/domos">Domos</router-link>
            <router-link class="btn my-2 my-md-2 btn-s1" to="/espejos">Espejos</router-link>
          </div>

    <div class="title-projects">
      <h2>Domos de vidrio templado filtrasol, protección contra rayos uv con fajilla de aluminio en color madera.</h2>
    </div>
          <div class="no-gutters box-gallery">
            <div class="col-6 col-md-6 col-lg-4 col-xl-3 col-image" v-for="(image, imageIndex) in items" :key="imageIndex">
              <div class="placed-backg image" v-bind:style="{ backgroundImage: 'url('+image+')' }" @click="index = imageIndex">

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <CoolLightBox
      :items="items"
      :index="index"
      :effect="'fade'"
      @close="index = null">
    </CoolLightBox>

  </div>
</template>


<script>
import CoolLightBox from 'vue-cool-lightbox';
import 'vue-cool-lightbox/dist/vue-cool-lightbox.min.css';
export default {
  components: {
    CoolLightBox,
  },

  data() {
    return {
      items: [
        'public/images/projects/domos/1.jpg',
        'public/images/projects/domos/2.jpg',
        'public/images/projects/domos/3.jpg',
        'public/images/projects/domos/4.jpg',
        'public/images/projects/domos/5.jpg',
        'public/images/projects/domos/6.jpg',
        'public/images/projects/domos/7.jpg',
        'public/images/projects/domos/8.jpg',
        'public/images/projects/domos/9.jpg',
        'public/images/projects/domos/10.jpg',
        'public/images/projects/domos/11.jpg',
        'public/images/projects/domos/12.jpg',
        'public/images/projects/domos/13.jpg',
        'public/images/projects/domos/14.jpg',
        'public/images/projects/domos/15.jpg',
        'public/images/projects/domos/16.jpeg',
        'public/images/projects/domos/17.jpeg',
        'public/images/projects/domos/18.jpeg',
        'public/images/projects/domos/19.jpeg',
        'public/images/projects/domos/20.jpeg',
        'public/images/projects/domos/21.jpeg',
        'public/images/projects/domos/22.jpeg',
        'public/images/projects/domos/23.jpeg',
        'public/images/projects/domos/24.jpeg',
        'public/images/projects/domos/25.jpeg',
        'public/images/projects/domos/26.jpeg',
        'public/images/projects/domos/27.jpeg',
        'public/images/projects/domos/28.jpeg',
        'public/images/projects/domos/29.jpeg',
        'public/images/projects/domos/30.jpeg',
      ],
      index: null,
    }
  },
}
</script>
