require('./bootstrap');

import Vue from 'vue';
//Rutas del website
import Router from './router.js';
import AOS from 'aos';
import 'aos/dist/aos.css';

//Librerias globales
import Library from './libs.js';
Vue.use(Library);

//Componentes del website
import components from './components/components.js';
Vue.use(components);

window.Vue=Vue;

//Instancia principal
const app = new Vue({
    el: '#app',
    router:Router,

    mounted:function(){
      AOS.init();
    },

});
