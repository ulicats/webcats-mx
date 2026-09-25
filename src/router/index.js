import { createRouter, createWebHistory } from "vue-router";

import MainLayout from "../layouts/MainLayout.vue";
import ProjectLayout from "../layouts/ProjectLayout.vue";

import Home from "../views/Home.vue";
import Acerca from "../views/Acerca.vue";
import Servicios from "../views/Servicios.vue";
import Portafolio from "../views/Portafolio.vue";
import Contacto from "../views/Contacto.vue";

import ProjectRouter from "../views/ProjectRouter.vue";

// VISTAS INTERNAS DE ARQUITECTURA
import ArchProjectView from "../views/projects/arquitectura/ArchProjectView.vue";
import ArchProjectDetail from "../views/projects/arquitectura/ArchProjectDetail.vue";

// VISTAS INTERNAS DE CATALOGO
import CatalogoProductos from "../views/projects/catalogo/CatalogoProductos.vue";


const routes = [

  {
    path: "/",

    component: MainLayout,

    children: [
      {
        path: "",
        name: "Home",
        component: Home
      },

      {
        path: "acerca",
        name: "Acerca",
        component: Acerca
      },

      {
        path: "servicios",
        name: "Servicios",
        component: Servicios
      },

      {
        path: "portafolio",
        name: "Portafolio",
        component: Portafolio
      },

      {
        path: "contacto",
        name: "Contacto",
        component: Contacto
      },
    ],
  },


{
  path: "/projects",

  component: ProjectLayout,

  children: [

    // ARQUITECTURA

    {
      path: "arquitectura/proyectos",
      name: "arch-projects",
      component: ArchProjectView,
    },

    {
      path: "arquitectura/proyectos/:slug",
      name: "arch-project-detail",
      component: ArchProjectDetail,
    },


    // AURALYN / CATÁLOGO

    {
      path: "catalogo/productos",
      name: "catalogo-productos",
      component: CatalogoProductos,
    },


    // PROYECTOS GENERALES
    // Mantener al final porque :slug es dinámico

    {
      path: ":slug",
      name: "Project",
      component: ProjectRouter,
    },

  ],
},

];


const router = createRouter({
  history: createWebHistory(),
  routes,

  scrollBehavior(to, from, savedPosition) {

    // ATRÁS / ADELANTE DEL NAVEGADOR
    if (savedPosition) {
      return savedPosition;
    }

    // NAVEGACIÓN INTERNA CON HASH
    // Ejemplo: /projects/arquitectura#servicios
    if (to.hash) {
      return {
        el: to.hash,
        behavior: "smooth",
      };
    }

    // NUEVA VISTA = COMENZAR ARRIBA
    return {
      top: 0,
      left: 0,
    };
  },
});


export default router;