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
      <h2>Pasamanos de vidrio templado de 9mm de espesor, en tono claro, con pernos sujetados a muro y pasamanos de acero inoxidable con póstes y varilla.
       </h2>
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
        'public/images/projects/pasamanos/1.jpg',
        'public/images/projects/pasamanos/2.jpg',
        'public/images/projects/pasamanos/3.jpg',
        'public/images/projects/pasamanos/4.jpg',
        'public/images/projects/pasamanos/5.jpg',
        'public/images/projects/pasamanos/6.jpg',
        'public/images/projects/pasamanos/7.jpg',
        'public/images/projects/pasamanos/8.jpg',
        'public/images/projects/pasamanos/9.jpg',
        'public/images/projects/pasamanos/10.jpg',
        'public/images/projects/pasamanos/11.jpg',
        'public/images/projects/pasamanos/12.jpg',
        'public/images/projects/pasamanos/13.jpg',
        'public/images/projects/pasamanos/14.jpg',
        'public/images/projects/pasamanos/15.jpg',
        'public/images/projects/pasamanos/16.jpg',
        'public/images/projects/pasamanos/17.jpg',
        'public/images/projects/pasamanos/18.jpg',
      ],
      index: null,
    }
  },
}
</script>
