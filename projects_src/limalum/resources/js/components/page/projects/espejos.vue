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
      <h2>Espejo flotado de 6mm con bastidor de aluminio.</h2>
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
        'public/images/projects/espejos/1.jpg',
        'public/images/projects/espejos/2.jpg',
        'public/images/projects/espejos/3.jpg',
        'public/images/projects/espejos/4.jpg',
        'public/images/projects/espejos/5.jpg',
      ],
      index: null,
    }
  },
}
</script>
