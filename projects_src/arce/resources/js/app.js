require('./bootstrap');

import Vue from 'vue';

import AOS from 'aos';
import 'aos/dist/aos.css';
import CoolLightBox from 'vue-cool-lightbox'
import 'vue-cool-lightbox/dist/vue-cool-lightbox.min.css'

//Rutas del website
import Router from './router.js';

//Librerias globales
import Library from './libs.js';
Vue.use(Library);


//Componentes del website
import components from './components/components.js';
Vue.use(components);
Vue.use(CoolLightBox);

window.Vue=Vue;

//Instancia principal
const app = new Vue({
    el: '#app',
    router:Router,

    mounted:function(){
      AOS.init();
    },

});
