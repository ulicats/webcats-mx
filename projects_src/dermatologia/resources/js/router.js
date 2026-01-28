import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

//Componentes
//import Login from './components/admin/Login.vue';

const page="./components/page/";

const MyRouter = new VueRouter({
  	routes:[
      { path: '*', component: require(page+'404.vue').default, meta:{title:"Error 404"} },
	    { path: '/', component: require(page+'home.vue').default, meta:{title:"Home"}},
      { path: '/instalaciones', component: require(page+'instalaciones/index.vue').default, meta:{title:"Instalaciones"}},
	    { path: '/mapa', component: require(page+'mapa/index.vue').default, meta:{title:"Ubicación"}},
	    { path: '/contacto', component: require(page+'contacto/index.vue').default, meta:{title:"Contacto"}},
	    { path: '/checkout', component: require(page+'checkout.vue').default, meta:{title:"Checkout"}},
	  ]
});

MyRouter.beforeEach((to, from, next) => {
	window.scrollTo(0,0);
	if(window.app.__vue__ && window.app.__vue__.$refs.loadingBar){
		window.app.__vue__.$refs.loadingBar.start();
	}
	next();
});

MyRouter.afterEach((to, from) => {

	if(window.app.__vue__ && window.app.__vue__.$refs.loadingBar){
		setTimeout(()=>{
			window.app.__vue__.$refs.loadingBar.done();
		},500);
	}


});

//Titulos del website
import VueDocumentTitlePlugin from "vue-document-title-plugin";
Vue.use(VueDocumentTitlePlugin, MyRouter,
	{ defTitle: "Dermatóloga Ale Romero", filter: (title)=>{ return title+" - Dermatóloga Ale Romero"; } }
);

// export {routes};
export default MyRouter;
