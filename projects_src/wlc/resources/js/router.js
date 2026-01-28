import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

//Componentes
//import Login from './components/admin/Login.vue';

const page="./components/page/";

const MyRouter = new VueRouter({
  	routes:[
	    { path: '/', component: require(page+'home.vue').default, meta:{title:"Home"}},
	    { path: '/sofomes', component: require(page+'planes/sofomes.vue').default, meta:{title:"Sofomes"}},
	    { path: '/empresarial', component: require(page+'planes/empresariales.vue').default, meta:{title:"Emprsarial"}},
      { path: '/construction', component: require(page+'planes/construction.vue').default, meta:{title:"Construcción"}},

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
	{ defTitle: "White Lotus Capital", filter: (title)=>{ return title+" - White Lotus Capital"; } }
);

// export {routes};
export default MyRouter;
