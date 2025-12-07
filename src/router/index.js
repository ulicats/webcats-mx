import { createRouter, createWebHistory } from "vue-router";

import Home from "../views/Home.vue";
import Acerca from "../views/Acerca.vue";
import Servicios from "../views/Servicios.vue";
import Portafolio from "../views/Portafolio.vue";
import Contacto from "../views/Contacto.vue";

const routes = [
  { path: "/", name: "Home", component: Home },
  { path: "/acerca", name: "Acerca", component: Acerca },
  { path: "/servicios", name: "Servicios", component: Servicios },
  { path: "/portafolio", name: "Portafolio", component: Portafolio },
  { path: "/contacto", name: "Contacto", component: Contacto },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
