<script setup>
import CatalogoHeader from '../../../components/projects/catalogo/CatalogoHeader.vue'
import CatalogoHero from '../../../components/projects/catalogo/CatalogoHero.vue'
import CatalogoCategorias from '../../../components/projects/catalogo/CatalogoCategorias.vue'
import CatalogoNovedades from '../../../components/projects/catalogo/CatalogoNovedades.vue'
import CatalogoTemporada from '../../../components/projects/catalogo/CatalogoTemporada.vue'
import CatalogoMasVendidos from '../../../components/projects/catalogo/CatalogoMasVendidos.vue'
import CatalogoMayoreo from '../../../components/projects/catalogo/CatalogoMayoreo.vue'
import CatalogoColecciones from '../../../components/projects/catalogo/CatalogoColecciones.vue'
import CatalogoLookbook from '../../../components/projects/catalogo/CatalogoLookbook.vue'
import CatalogoBeneficios from '../../../components/projects/catalogo/CatalogoBeneficios.vue'
import CatalogoFooter from '../../../components/projects/catalogo/CatalogoFooter.vue'
import CartDrawer from '../../../components/projects/catalogo/CartDrawer.vue'
</script>

<template>
  <div class="catalogo-demo">
    <CatalogoHeader />

    <main class="catalogo-main">
      <CatalogoHero />

      <CatalogoCategorias />

      <CatalogoNovedades />

      <CatalogoTemporada />

      <CatalogoMasVendidos />

      <CatalogoMayoreo />

      <CatalogoColecciones />

      <CatalogoLookbook />

      <CatalogoBeneficios />
    </main>

    <CatalogoFooter />

    <CartDrawer />
  </div>
</template>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Manrope:wght@300;400;500;600;700&display=swap');

.catalogo-demo {
  width: 100%;
  min-height: 100vh;

  background: #ffffff;

  /* Tipografía principal */
  font-family: 'Manrope', sans-serif;

  /* Variables para utilizar en todos los componentes */
  --font-main: 'Manrope', sans-serif;
  --font-editorial: 'Cormorant Garamond', serif;
}

.catalogo-main {
  width: 100%;
}

/*
  Textos generales
*/
.catalogo-demo :deep(
  p,
  span,
  a,
  button,
  input,
  select,
  textarea,
  label
) {
  font-family: var(--font-main);
}

/*
  Títulos editoriales
*/
.catalogo-demo :deep(h1),
.catalogo-demo :deep(h2),
.catalogo-demo :deep(h3) {
  font-family: var(--font-editorial);
}
</style>