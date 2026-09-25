<script setup>
import { ref, watch } from 'vue'
import { useRoute, useRouter } from 'vue-router'

const props = defineProps({
  cartCount: {
    type: Number,
    default: 0
  },

  searchValue: {
    type: String,
    default: ''
  }
})

const emit = defineEmits([
  'open-cart',
  'search'
])

const router = useRouter()
const route = useRoute()

const menuOpen = ref(false)
const search = ref(props.searchValue)


/* =========================
   MENU
========================= */

const toggleMenu = () => {
  menuOpen.value = !menuOpen.value
}


/* =========================
   CARRITO
========================= */

const openCart = () => {
  emit('open-cart')
}


/* =========================
   BUSCADOR
========================= */

watch(
  () => props.searchValue,
  (value) => {
    search.value = value || ''
  }
)


const handleSearchInput = () => {

  // Si ya estamos en catálogo,
  // filtramos productos en tiempo real.

  if (route.name === 'catalogo-productos') {
    emit('search', search.value)
  }
}


const submitSearch = () => {
  const termino = search.value.trim()

  // Si estamos en catálogo,
  // simplemente actualizamos la búsqueda.

  if (route.name === 'catalogo-productos') {

    emit('search', termino)

    router.replace({
      name: 'catalogo-productos',
      query: termino
        ? { search: termino }
        : {}
    })

    return
  }


  // Si estamos en HOME u otra vista,
  // nos vamos al catálogo.

  router.push({
    name: 'catalogo-productos',
    query: termino
      ? { search: termino }
      : {}
  })
}
</script>


<template>
  <header class="auralyn-header">

    <div class="header-inner">

      <!-- LOGO -->

      <RouterLink
        :to="{ name: 'Project', params: { slug: 'catalogo' } }"
        class="brand"
      >
        <span class="brand-name">
          AURALYN
        </span>

        <span class="brand-subtitle">
          BOUTIQUE & LIFESTYLE
        </span>
      </RouterLink>


      <!-- DESKTOP NAV -->

      <nav class="desktop-nav">

        <RouterLink
          :to="{ name: 'Project', params: { slug: 'catalogo' } }"
        >
          Inicio
        </RouterLink>

        <RouterLink
          :to="{ name: 'catalogo-productos' }"
        >
          Catálogo
        </RouterLink>

        <a href="#novedades">
          Novedades
        </a>

        <a href="#mayoreo">
          Mayoreo
        </a>

        <a href="#contacto">
          Contacto
        </a>

      </nav>


      <!-- SEARCH -->

      <form
        class="header-search"
        @submit.prevent="submitSearch"
      >

        <button
          type="submit"
          class="search-button"
          aria-label="Buscar productos"
        >
          <svg
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="1.7"
          >
            <circle cx="11" cy="11" r="7" />
            <path d="m20 20-4-4" />
          </svg>
        </button>

        <input
          v-model="search"
          type="search"
          placeholder="Buscar productos..."
          autocomplete="off"
          @input="handleSearchInput"
        />

      </form>


      <!-- ACTIONS -->

      <div class="header-actions">

        <!-- CARRITO -->

        <button
          type="button"
          class="header-action cart-action"
          aria-label="Abrir carrito"
          @click="openCart"
        >

          <svg
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="1.7"
          >
            <path
              d="M3 4h2l2.2 10.2a2 2 0 0 0 2 1.6h7.9a2 2 0 0 0 2-1.6L21 7H6"
            />

            <circle
              cx="10"
              cy="20"
              r="1"
            />

            <circle
              cx="18"
              cy="20"
              r="1"
            />
          </svg>

          <span
            v-if="cartCount > 0"
            class="cart-count"
          >
            {{ cartCount }}
          </span>

        </button>


        <!-- MOBILE MENU -->

        <button
          type="button"
          class="mobile-toggle"
          :class="{ 'is-open': menuOpen }"
          :aria-label="menuOpen ? 'Cerrar menú' : 'Abrir menú'"
          @click="toggleMenu"
        >
          <span></span>
          <span></span>
        </button>
      </div>

    </div>


    <!-- MOBILE NAV -->

    <Transition name="menu">

      <nav
        v-if="menuOpen"
        class="mobile-nav"
      >

        <RouterLink
          :to="{ name: 'Project', params: { slug: 'catalogo' } }"
          @click="menuOpen = false"
        >
          Inicio
        </RouterLink>

        <RouterLink
          :to="{ name: 'catalogo-productos' }"
          @click="menuOpen = false"
        >
          Catálogo
        </RouterLink>

        <a
          href="#novedades"
          @click="menuOpen = false"
        >
          Novedades
        </a>

        <a
          href="#mayoreo"
          @click="menuOpen = false"
        >
          Mayoreo
        </a>

        <a
          href="#contacto"
          @click="menuOpen = false"
        >
          Contacto
        </a>


        <!-- MOBILE SEARCH -->

        <form
          class="mobile-search"
          @submit.prevent="submitSearch"
        >

          <input
            v-model="search"
            type="search"
            placeholder="Buscar productos..."
            autocomplete="off"
            @input="handleSearchInput"
          />

        </form>

      </nav>

    </Transition>

  </header>
</template>


<style scoped>
.auralyn-header {
  position: relative;
  z-index: 50;

  width: 100%;

  background: #fffaf8;
  border-bottom: 1px solid #e7ded9;
}

.header-inner {
  width: min(100% - 64px, 1500px);
  height: 82px;

  margin: 0 auto;

  display: flex;
  align-items: center;
  gap: 42px;
}


/* BRAND */

.brand {
  flex-shrink: 0;

  display: flex;
  flex-direction: column;

  color: #24211f;
  text-decoration: none;

  line-height: 1;
}

.brand-name {
  font-size: 24px;
  font-weight: 600;

  letter-spacing: 0.28em;
}

.brand-subtitle {
  margin-top: 7px;

  font-size: 8px;

  letter-spacing: 0.25em;

  color: #77706c;
}


/* NAV */

.desktop-nav {
  display: flex;
  align-items: center;

  gap: 30px;
}

.desktop-nav a {
  position: relative;

  padding: 31px 0 27px;

  color: #514c49;

  text-decoration: none;

  font-size: 13px;
  font-weight: 500;

  transition: color 0.25s ease;
}

.desktop-nav a:hover,
.desktop-nav a.active,
.desktop-nav a.router-link-active {
  color: #24211f;
}

.desktop-nav a.active::after,
.desktop-nav a.router-link-active::after {
  content: "";

  position: absolute;

  left: 0;
  right: 0;
  bottom: 20px;

  height: 2px;

  background: #e9b8c4;
}


/* SEARCH */

.header-search {
  margin-left: auto;

  width: 260px;
  height: 42px;

  display: flex;
  align-items: center;

  gap: 10px;

  padding: 0 16px;

  background: #f3ede9;

  border-radius: 999px;
}

.search-button {
  width: 20px;
  height: 20px;

  display: grid;
  place-items: center;

  flex-shrink: 0;

  padding: 0;

  border: 0;

  background: transparent;

  color: #77706c;

  cursor: pointer;
}

.search-button svg {
  width: 18px;
  height: 18px;
}

.header-search input {
  width: 100%;

  border: 0;
  outline: none;

  background: transparent;

  color: #24211f;

  font-family: inherit;
  font-size: 12px;
}

.header-search input::placeholder {
  color: #9b9490;
}


/* QUITAR X NATIVA DEL SEARCH */

.header-search input::-webkit-search-cancel-button,
.mobile-search input::-webkit-search-cancel-button {
  cursor: pointer;
}


/* ACTIONS */

.header-actions {
  display: flex;
  align-items: center;

  gap: 7px;
}

.header-action,
.mobile-toggle {
  position: relative;

  width: 42px;
  height: 42px;

  display: grid;
  place-items: center;

  border: 0;

  background: transparent;

  cursor: pointer;

  color: #24211f;
}

.header-action svg {
  width: 21px;
  height: 21px;
}


/* CART */

.cart-action {
  transition:
    transform .2s ease,
    background .2s ease;
}

.cart-action:hover {
  transform: translateY(-1px);

  background: #f7efec;

  border-radius: 50%;
}

.cart-count {
  position: absolute;

  top: 1px;
  right: 0;

  min-width: 17px;
  height: 17px;

  display: grid;
  place-items: center;

  padding: 0 4px;

  border-radius: 999px;

  background: #e9b8c4;

  color: #24211f;

  font-size: 9px;
  font-weight: 700;
}


/* MOBILE BUTTON */

.mobile-toggle {
  display: none;

  position: relative;

  width: 42px;
  height: 42px;

  border: 0;
  background: transparent;

  cursor: pointer;
}

.mobile-toggle span {
  position: absolute;
  left: 50%;

  width: 24px;
  height: 1.5px;

  background: #24211f;

  transform: translateX(-50%);

  transition:
    top 0.25s ease,
    transform 0.25s ease;
}

.mobile-toggle span:first-child {
  top: 16px;
}

.mobile-toggle span:last-child {
  top: 24px;
}

/* CUANDO ABRE EL MENÚ */

.mobile-toggle.is-open span:first-child {
  top: 20px;

  transform:
    translateX(-50%)
    rotate(45deg);
}

.mobile-toggle.is-open span:last-child {
  top: 20px;

  transform:
    translateX(-50%)
    rotate(-45deg);
}


/* MOBILE NAV */

.mobile-nav {
  display: none;
}


/* RESPONSIVE */

@media (max-width: 1100px) {

  .header-inner {
    width: min(100% - 40px, 1500px);

    gap: 25px;
  }

  .desktop-nav {
    gap: 20px;
  }

  .header-search {
    width: 210px;
  }
}


@media (max-width: 900px) {

  .header-inner {
    width: calc(100% - 32px);
    height: 72px;
  }

  .desktop-nav,
  .header-search {
    display: none;
  }

  .header-actions {
    margin-left: auto;
  }

  .mobile-toggle {
    display: flex;
  }

  .mobile-nav {
    position: absolute;

    top: 72px;
    left: 0;

    width: 100%;

    padding: 28px 24px 32px;

    display: flex;
    flex-direction: column;

    gap: 22px;

    background: #fffaf8;

    border-top: 1px solid #e7ded9;
    border-bottom: 1px solid #e7ded9;
  }

  .mobile-nav a {
    color: #24211f;

    text-decoration: none;

    font-size: 18px;
  }

  .mobile-search {
    margin-top: 8px;

    padding: 13px 16px;

    background: #f3ede9;

    border-radius: 999px;
  }

  .mobile-search input {
    width: 100%;

    border: 0;
    outline: 0;

    background: transparent;

    color: #24211f;

    font-family: inherit;
  }
}


@media (max-width: 520px) {

  .brand-name {
    font-size: 19px;
  }

  .brand-subtitle {
    font-size: 6px;
  }

  .header-action {
    width: 36px;
  }
}


/* MENU TRANSITION */

.menu-enter-active,
.menu-leave-active {
  transition: all 0.25s ease;
}

.menu-enter-from,
.menu-leave-to {
  opacity: 0;

  transform: translateY(-8px);
}
</style>