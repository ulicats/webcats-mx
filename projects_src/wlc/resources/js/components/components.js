/*
 *
 * Estos componentes estan presentes solo en el website
 *
 */

const page="./page/";
// import slick from 'vue-slick';
import BootstrapVue from 'bootstrap-vue';
import VueAwesomeSwiper from 'vue-awesome-swiper';
// import VueSweetalert2 from 'vue-sweetalert2';
var VueScrollTo = require('vue-scrollto');

function plugin (Vue) {
	//Componentes llamados
  Vue.component('my-header', require(page+'shared/header.vue').default);
	Vue.component('my-footer', require(page+'shared/footer.vue').default);
	// Vue.component('slick',slick);
  Vue.use(BootstrapVue);
  Vue.use(VueAwesomeSwiper, /* { default options with global component } */);
  // Vue.use(VueSweetalert2);

  Vue.use(VueScrollTo, {
container: "body",
duration: 500,
easing: "ease",
offset: 0,
force: true,
cancelable: true,
onStart: false,
onDone: false,
onCancel: false,
x: false,
y: true
});

}

// Install by default if using the script tag
if (typeof window !== 'undefined' && window.Vue) {
  window.Vue.use(plugin)
}

export default plugin
