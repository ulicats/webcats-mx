import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

const page="./components/admin/";

const MyRouter = new VueRouter({
  	routes:[
	    { path: '/', redirect:"/login"},
	    { path: '/login', component: require(page+'login.vue').default, meta:{title:"Login"}, name: 'Login'},
	    { path: '/home', component: require(page+'home.vue').default, meta:{title:"Home"}},
	    { path: '/profile', component: require(page+'me.vue').default, meta:{title:"Mi perfil"}},
	    //Usuarios
	    { path: '/users', component: require(page+'users/index.vue').default, meta:{title:"Administradores",name:'Administradores',path:'users',icon:'fa fa-users-cog' }},
		{ path: '/users/edit', component: require(page+'users/edit.vue').default, meta:{title:"Edit",name:'Administradores',path:'users',icon:'fa fa-users-cog'}},//Cuando no envian parametro
		{ path: '/users/edit/:id', component: require(page+'users/edit.vue').default, meta:{title:"Edit",name:'Administradores',path:'users',icon:'fa fa-users-cog'}},//Con parametro
		
		//Roles
	    { path: '/roles', component: require(page+'configuration/roles.vue').default, meta:{title:"Roles"}},
	    { path: '/roles/edit/:id', component: require(page+'configuration/permissions.vue').default, meta:{title:"Editar"}},

		//configuration
	    { path: '/informacion', component: require(page+'extras/redes.vue').default, meta:{title:"editar Información"}},//Con parametro
		{ path: '/terminos-condiciones', component: require(page+'extras/terminos.vue').default, meta:{title:"Terminos y condiciones"}},//Con parametro
		{ path: '/aviso-privacidad', component: require(page+'extras/privacidad.vue').default, meta:{title:"Aviso de Privacidad"}},//Con parametro
		{ path: '/preguntas-frecuentes', component: require(page+'extras/faq.vue').default, meta:{title:"Preguntas frecuentes"}},//Con parametro

		//categorias
		{ path: '/categories', component: require(page+'categories/index.vue').default, meta:{title:"Categorias",name:'Categorias',path:'categories',icon:'fa fa-bars' }},
		{ path: '/categories/edit', component: require(page+'categories/edit.vue').default, meta:{title:"Edit",name:'Categorias',path:'categories',icon:'fa fa-bars'}},//Cuando no envian parametro
		{ path: '/categories/edit/:id', component: require(page+'categories/edit.vue').default, meta:{title:"Edit",name:'Categorias',path:'categories',icon:'fa fa-bars'}},//Con parametro
		
		//categorias
		{ path: '/subcategories', component: require(page+'subcategories/index.vue').default, meta:{title:"Subcategorias",name:'Subcategorias',path:'subcategories',icon:'fa fa-stream' }},
		{ path: '/subcategories/edit', component: require(page+'subcategories/edit.vue').default, meta:{title:"Edit",name:'Subcategorias',path:'subcategories',icon:'fa fa-stream'}},//Cuando no envian parametro
		{ path: '/subcategories/edit/:id', component: require(page+'subcategories/edit.vue').default, meta:{title:"Edit",name:'Subcategorias',path:'subcategories',icon:'fa fa-stream'}},//Con parametro
	    
		//Banners
	    { path: '/banners', component: require(page+'banners/index.vue').default, meta:{title:"Banners",name:'Banners',path:'banners',icon:'fa fa-images' }},
		{ path: '/banners/edit', component: require(page+'banners/edit.vue').default, meta:{title:"Edit",name:'Banners',path:'banners',icon:'fa fa-images'}},//Cuando no envian parametro
		{ path: '/banners/edit/:id', component: require(page+'banners/edit.vue').default, meta:{title:"Edit",name:'Banners',path:'banners',icon:'fa fa-images'}},//Con parametro
		
		
		//Clientes
		{ path: '/customers', component: require(page+'customers/index.vue').default, meta:{title:"Clientes",name:'Clientes',path:'customers',icon:'fa fa-users' }},
		{ path: '/customers/edit', component: require(page+'customers/edit.vue').default, meta:{title:"Edit",name:'Clientes',path:'customers',icon:'fa fa-users'}},//Cuando no envian parametro
		{ path: '/customers/edit/:id', component: require(page+'customers/edit.vue').default, meta:{title:"Edit",name:'Clientes',path:'customers',icon:'fa fa-users'}},//Con parametro
		
		
		//Productos
	    { path: '/products', component: require(page+'products/index.vue').default, meta:{title:"Productos",name:'Productos',path:'products',icon:'fa fa-tags' }},
		{ path: '/products/edit', component: require(page+'products/edit.vue').default, meta:{title:"Edit",name:'Productos',path:'products',icon:'fa fa-tags'}},//Cuando no envian parametro
		{ path: '/products/edit/:id', component: require(page+'products/edit.vue').default, meta:{title:"Edit",name:'Productos',path:'products',icon:'fa fa-tags'}},//Con parametro
		
		
	  ]
});

MyRouter.beforeEach((to, from, next) => {
	if (to.path != '/login'){
		window.scrollTo(0,0);
		if(window.app.__vue__ && window.app.__vue__.$refs.loadingBar){
		window.app.__vue__.$refs.loadingBar.start();
		}
	}
	next();
});

MyRouter.afterEach((to, from) => {
	if (to.path != '/login'){
		if(window.app.__vue__ && window.app.__vue__.$refs.loadingBar){
			setTimeout(()=>{
				window.app.__vue__.$refs.loadingBar.done();
			},40);
		}
	}
});

//Titulos del website
import VueDocumentTitlePlugin from "vue-document-title-plugin";
Vue.use(VueDocumentTitlePlugin, MyRouter,
	{ defTitle: "Lovely Nails", filter: (title)=>{ return title+" - Lovely Nails"; } }
);

// export {routes};
export default MyRouter;
