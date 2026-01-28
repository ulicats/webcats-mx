import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

//Componentes
//import Login from './components/admin/Login.vue';

const page="./components/page/";

const MyRouter = new VueRouter({
	mode: 'hash', 
  	base: '/projects/arce/',
  	routes:[
	    { path: '/', name:'homePage', component: require(page+'home.vue').default, meta:{title:"Home"}},
	    { path: '/galeria', component: require(page+'galeria/index.vue').default, meta:{title:"Galeria"}},

      { path: '/cabana', component: require(page+'cabanas/index.vue').default, meta:{title:"Cabaña1"}},
      { path: '/cabana2', component: require(page+'cabanas/cabana2.vue').default, meta:{title:"Cabaña2"}},
      { path: '/cabana3', component: require(page+'cabanas/cabana3.vue').default, meta:{title:"Cabaña3"}},

      { path: '/mapa', component: require(page+'mapa/index.vue').default, meta:{title:"Mapa"}},
      { path: '/faq', component: require(page+'faq/index.vue').default, meta:{title:"Faq"}},
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
	{ defTitle: "Arce Cabañas Mazamitla", filter: (title)=>{ return title+"- Arce Cabañas Mazamitla"; } }
);

// export {routes};
export default MyRouter;
