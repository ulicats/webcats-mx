import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

//Componentes
//import Login from './components/admin/Login.vue';

const page="./components/page/";

const MyRouter = new VueRouter({
  	routes:[
	    { path: '/', component: require(page+'home.vue').default, meta:{title:"Home"}},
	    { path: '/garantias', component: require(page+'garantias/index.vue').default, meta:{title:"Garantias"}},
	    { path: '/projects', component: require(page+'projects/index.vue').default, meta:{title:"Proyectos"}},
      { path: '/bano', component: require(page+'projects/bano.vue').default, meta:{title:"Baños"}},
      { path: '/pasamanos', component: require(page+'projects/pasamanos.vue').default, meta:{title:"Pasamanos"}},
      { path: '/ventana', component: require(page+'projects/ventana.vue').default, meta:{title:"Ventanas"}},
      { path: '/barandal', component: require(page+'projects/barandal.vue').default, meta:{title:"Barandal"}},
      { path: '/domos', component: require(page+'projects/domos.vue').default, meta:{title:"Domos"}},
      { path: '/espejos', component: require(page+'projects/espejos.vue').default, meta:{title:"Espejos"}},
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
	{ defTitle: "Limalum | Solución e innovación en vidrio y aluminio", filter: (title)=>{ return title+" - Limalum | Solución e innovación en vidrio y aluminio"; } }
);

// export {routes};
export default MyRouter;
