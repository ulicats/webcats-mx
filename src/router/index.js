import { createRouter, createWebHistory } from "vue-router";

import MainLayout from "../layouts/MainLayout.vue";
import ProjectLayout from "../layouts/ProjectLayout.vue";

import Home from "../views/Home.vue";
import Acerca from "../views/Acerca.vue";
import Servicios from "../views/Servicios.vue";
import Portafolio from "../views/Portafolio.vue";
import Contacto from "../views/Contacto.vue";

import ProjectRouter from "../views/ProjectRouter.vue";

const routes = [
  {
    path: "/",
    component: MainLayout,
    children: [
      { path: "", name: "Home", component: Home },
      { path: "acerca", name: "Acerca", component: Acerca },
      { path: "servicios", name: "Servicios", component: Servicios },
      { path: "portafolio", name: "Portafolio", component: Portafolio },
      { path: "contacto", name: "Contacto", component: Contacto },
    ],
  },

  {
    path: "/projects",
    component: ProjectLayout,
    children: [
      { path: ":slug", name: "Project", component: ProjectRouter },
    ],
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
