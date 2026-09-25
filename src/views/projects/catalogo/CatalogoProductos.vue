<script setup>
import { computed, ref, watch } from 'vue'
import { useRoute, useRouter } from 'vue-router'

import CatalogoHeader from '../../../components/projects/catalogo/CatalogoHeader.vue'
import CatalogoFooter from '../../../components/projects/catalogo/CatalogoFooter.vue'
import ProductModal from '../../../components/projects/catalogo/ProductModal.vue'
import CartDrawer from '../../../components/projects/catalogo/CartDrawer.vue'

import { products as productos } from '../../../data/catalogo/products.js'
import { categories } from '../../../data/catalogo/categories.js'
import { collections } from '../../../data/catalogo/collections.js'
import { catalogConfig } from '../../../data/catalogo/catalogConfig.js'

const route = useRoute()
const router = useRouter()

const categoriaActiva = ref('todo')
const orden = ref('featured')
const filtroAbierto = ref(false)
const soloMayoreo = ref(false)
const soloNuevos = ref(false)
const soloMasVendidos = ref(false)
const coleccionActiva = ref('')
const productoSeleccionado = ref(null)
const modalProductoAbierto = ref(false)
const carrito = ref([])
const carritoAbierto = ref(false)
const precioMaximo = ref(1500)
const busqueda = ref('')

/* =========================================
   SINCRONIZAR FILTROS DESDE LA URL
========================================= */

const sincronizarDesdeRuta = () => {
  busqueda.value =
    typeof route.query.search === 'string'
      ? route.query.search
      : ''

  categoriaActiva.value =
    typeof route.query.category === 'string' &&
    route.query.category
      ? route.query.category
      : 'todo'

  soloNuevos.value = route.query.new === 'true'
  soloMasVendidos.value = route.query.bestseller === 'true'

  coleccionActiva.value =
    typeof route.query.collection === 'string'
      ? route.query.collection
      : ''
}

watch(
  () => route.query,
  sincronizarDesdeRuta,
  {
    immediate: true,
    deep: true
  }
)

/* =========================================
   CARRITO
========================================= */

const cantidadCarrito = computed(() => {
  return carrito.value.reduce(
    (total, item) => total + item.quantity,
    0
  )
})

/* =========================================
   FORMATO DE PRECIO
========================================= */

const formatPrice = (price) => {
  return new Intl.NumberFormat(
    catalogConfig.currency.locale,
    {
      style: 'currency',
      currency: catalogConfig.currency.code,
      maximumFractionDigits: 0
    }
  ).format(price)
}

/* =========================================
   BÚSQUEDA
========================================= */

const actualizarBusqueda = (value) => {
  const termino = value.trim()

  busqueda.value = value

  router.replace({
    name: 'catalogo-productos',
    query: {
      ...route.query,
      search: termino || undefined
    }
  })
}

/* =========================================
   CAMBIAR CATEGORÍA

   IMPORTANTE:
   Ya NO usamos router.replace aquí.

   De esta manera cambiar entre:
   Todo / Ropa / Calzado / Bolsas / etc.

   solamente actualiza los productos y NO
   provoca navegación ni scroll hacia arriba.
========================================= */

const cambiarCategoria = (categoria) => {
  categoriaActiva.value = categoria
  coleccionActiva.value = ''
}

/* =========================================
   MODAL PRODUCTO
========================================= */

const abrirProducto = (producto) => {
  productoSeleccionado.value = producto
  modalProductoAbierto.value = true
}

const cerrarProducto = () => {
  modalProductoAbierto.value = false
}

/* =========================================
   PRECIOS POR CANTIDAD
========================================= */

const obtenerPrecioPorCantidad = (
  producto,
  cantidad
) => {
  let precio = producto.price

  const tiers = producto.wholesale?.tiers || []

  tiers.forEach((tier) => {
    if (cantidad >= tier.min) {
      precio = tier.price
    }
  })

  return precio
}

/* =========================================
   AGREGAR AL CARRITO
========================================= */

const agregarAlCarrito = (item) => {
  const producto = item.product

  const key = [
    producto.id,
    item.color || 'sin-color',
    item.size || 'sin-talla'
  ].join('-')

  const existente = carrito.value.find(
    (productoCarrito) =>
      productoCarrito.key === key
  )

  if (existente) {
    existente.quantity += item.quantity

    existente.unitPrice =
      obtenerPrecioPorCantidad(
        producto,
        existente.quantity
      )

    existente.subtotal =
      existente.unitPrice *
      existente.quantity
  } else {
    const unitPrice =
      obtenerPrecioPorCantidad(
        producto,
        item.quantity
      )

    carrito.value.push({
      key,
      productId: producto.id,
      product: producto,
      name: producto.name,
      category: producto.category,
      image: producto.image,
      color: item.color,
      size: item.size,
      quantity: item.quantity,
      originalPrice: producto.price,
      unitPrice,
      subtotal:
        unitPrice * item.quantity
    })
  }

  modalProductoAbierto.value = false
  carritoAbierto.value = true
}

/* =========================================
   MODIFICAR CANTIDADES
========================================= */

const aumentarCantidadCarrito = (key) => {
  const item = carrito.value.find(
    (item) => item.key === key
  )

  if (!item) return

  item.quantity++

  item.unitPrice =
    obtenerPrecioPorCantidad(
      item.product,
      item.quantity
    )

  item.subtotal =
    item.unitPrice * item.quantity
}

const disminuirCantidadCarrito = (key) => {
  const item = carrito.value.find(
    (item) => item.key === key
  )

  if (!item) return

  if (item.quantity <= 1) {
    eliminarDelCarrito(key)
    return
  }

  item.quantity--

  item.unitPrice =
    obtenerPrecioPorCantidad(
      item.product,
      item.quantity
    )

  item.subtotal =
    item.unitPrice * item.quantity
}

const eliminarDelCarrito = (key) => {
  carrito.value =
    carrito.value.filter(
      (item) => item.key !== key
    )
}

const cerrarCarrito = () => {
  carritoAbierto.value = false
}

/* =========================================
   PEDIDO WHATSAPP
========================================= */

const continuarPedido = () => {
  if (!carrito.value.length) return

  const total = carrito.value.reduce(
    (sum, item) =>
      sum + item.subtotal,
    0
  )

  const lineasProductos =
    carrito.value.map((item) => {
      const lineas = [
        `🛍️ *${item.name}*`
      ]

      if (item.color) {
        lineas.push(
          `Color: ${item.color}`
        )
      }

      if (item.size) {
        lineas.push(
          `Talla: ${item.size}`
        )
      }

      lineas.push(
        `Cantidad: ${item.quantity}`
      )

      if (
        item.unitPrice <
        item.originalPrice
      ) {
        lineas.push(
          `Precio mayoreo: ${formatPrice(
            item.unitPrice
          )} c/u`
        )
      } else {
        lineas.push(
          `Precio: ${formatPrice(
            item.unitPrice
          )} c/u`
        )
      }

      lineas.push(
        `Subtotal: ${formatPrice(
          item.subtotal
        )}`
      )

      return lineas.join('\n')
    })

  const mensaje = [
    catalogConfig.cart.whatsappMessage,
    '',
    ...lineasProductos.flatMap(
      (producto) => [
        producto,
        ''
      ]
    ),
    `*TOTAL: ${formatPrice(total)}*`,
    '',
    'Quedo pendiente para confirmar disponibilidad, envío y forma de pago.'
  ].join('\n')

  const numero =
    catalogConfig.contact.whatsapp

  const urlWhatsApp =
    `https://wa.me/${numero}?text=${encodeURIComponent(
      mensaje
    )}`

  window.open(
    urlWhatsApp,
    '_blank',
    'noopener,noreferrer'
  )
}

/* =========================================
   BÚSQUEDA INTELIGENTE
========================================= */

const normalizarTexto = (
  texto = ''
) => {
  return texto
    .toString()
    .toLowerCase()
    .normalize('NFD')
    .replace(
      /[\u0300-\u036f]/g,
      ''
    )
    .trim()
}

const obtenerTerminosBusqueda = (
  texto = ''
) => {
  const termino =
    normalizarTexto(texto)

  if (!termino) return []

  const alias = {
    bolsa: [
      'bolsa',
      'bolsas'
    ],

    bolsas: [
      'bolsa',
      'bolsas'
    ],

    accesorio: [
      'accesorio',
      'accesorios'
    ],

    accesorios: [
      'accesorio',
      'accesorios'
    ],

    tenis: [
      'tenis',
      'calzado'
    ],

    zapato: [
      'zapato',
      'zapatos',
      'calzado'
    ],

    zapatos: [
      'zapato',
      'zapatos',
      'calzado'
    ],

    calzado: [
      'calzado',
      'tenis',
      'zapato'
    ],

    ropa: [
      'ropa'
    ],

    belleza: [
      'belleza'
    ],

    gorra: [
      'gorra',
      'gorras'
    ],

    gorras: [
      'gorra',
      'gorras'
    ],

    reloj: [
      'reloj',
      'relojes'
    ],

    relojes: [
      'reloj',
      'relojes'
    ]
  }

  return (
    alias[termino] ||
    [termino]
  )
}

/* =========================================
   PRODUCTOS FILTRADOS
========================================= */

const productosFiltrados =
  computed(() => {
    let resultado = [
      ...productos
    ]

    /* COLECCIÓN */

    if (
      coleccionActiva.value
    ) {
      const coleccion =
        collections.find(
          (item) =>
            item.slug ===
            coleccionActiva.value
        )

      if (coleccion) {
        resultado =
          resultado.filter(
            (producto) =>
              coleccion.products.includes(
                producto.id
              )
          )
      }
    }

    /* CATEGORÍA */

    if (
      categoriaActiva.value !==
      'todo'
    ) {
      resultado =
        resultado.filter(
          (producto) =>
            producto.category ===
            categoriaActiva.value
        )
    }

    /* BÚSQUEDA */

    const terminos =
      obtenerTerminosBusqueda(
        busqueda.value
      )

    if (terminos.length) {
      resultado =
        resultado.filter(
          (producto) => {
            const textoProducto =
              normalizarTexto(
                [
                  producto.name,
                  producto.category,
                  producto.description,
                  ...(
                    producto.tags ||
                    []
                  )
                ]
                  .filter(Boolean)
                  .join(' ')
              )

            return terminos.some(
              (termino) =>
                textoProducto.includes(
                  termino
                )
            )
          }
        )
    }

    /* PRECIO */

    resultado =
      resultado.filter(
        (producto) =>
          producto.price <=
          precioMaximo.value
      )

    /* MAYOREO */

    if (
      soloMayoreo.value
    ) {
      resultado =
        resultado.filter(
          (producto) =>
            producto.wholesale
              ?.enabled
        )
    }

    /* NUEVOS */

    if (
      soloNuevos.value
    ) {
      resultado =
        resultado.filter(
          (producto) =>
            producto.isNew
        )
    }

    /* MÁS VENDIDOS */

    if (
      soloMasVendidos.value
    ) {
      resultado =
        resultado.filter(
          (producto) =>
            producto.bestseller
        )
    }

    /* ORDEN */

    if (
      orden.value ===
      'price-low'
    ) {
      resultado.sort(
        (a, b) =>
          a.price - b.price
      )
    }

    if (
      orden.value ===
      'price-high'
    ) {
      resultado.sort(
        (a, b) =>
          b.price - a.price
      )
    }

    if (
      orden.value ===
      'name'
    ) {
      resultado.sort(
        (a, b) =>
          a.name.localeCompare(
            b.name
          )
      )
    }

    return resultado
  })

/* =========================================
   LIMPIAR FILTROS
========================================= */

const limpiarFiltros = () => {
  orden.value = 'featured'
  soloMayoreo.value = false
  precioMaximo.value = 1500
  filtroAbierto.value = false

  router.replace({
    name: 'catalogo-productos',
    query: {}
  })
}

/* =========================================
   NOMBRE CATEGORÍA
========================================= */

const nombreCategoria = (
  category
) => {
  const categoria =
    categories.find(
      (item) =>
        item.slug === category
    )

  return (
    categoria?.name ||
    category
  )
}
</script>

<template>
  <div class="catalogo-page">

    <CatalogoHeader
      :cart-count="cantidadCarrito"
      :search-value="busqueda"
      @open-cart="carritoAbierto = true"
      @search="actualizarBusqueda"
    />

    <main>

      <!-- CABECERA -->

      <section class="catalog-header">
        <div class="catalog-header-inner">

          <div>
            <span class="eyebrow">
              Auralyn Boutique
            </span>

            <h1>
              Encuentra algo
              <em>para ti.</em>
            </h1>
          </div>

          <div class="catalog-header-side">
            <p>
              Explora nuestra selección de ropa,
              calzado, accesorios y belleza.
            </p>

            <span>
              {{ productos.length }} productos
            </span>
          </div>

        </div>
      </section>

      <!-- CATEGORÍAS -->

      <section class="category-navigation">

        <div class="category-inner">

          <button
            type="button"
            :class="{
              active:
                categoriaActiva === 'todo'
            }"
            @click="cambiarCategoria('todo')"
          >
            Todo
          </button>

          <button
            v-for="categoria in categories.filter(
              item => item.active
            )"
            :key="categoria.id"
            type="button"
            :class="{
              active:
                categoriaActiva ===
                categoria.slug
            }"
            @click="
              cambiarCategoria(
                categoria.slug
              )
            "
          >
            {{ categoria.name }}
          </button>

        </div>

      </section>

      <!-- TOOLBAR -->

      <section class="catalog-toolbar">

        <div class="toolbar-inner">

          <div class="search-box">

            <svg
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="1.5"
            >
              <circle
                cx="11"
                cy="11"
                r="7"
              />

              <path
                d="m20 20-4-4"
              />
            </svg>

            <input
              v-model="busqueda"
              type="text"
              placeholder="Buscar productos..."
            >

          </div>

          <div class="toolbar-actions">

            <button
              class="filter-button"
              type="button"
              @click="
                filtroAbierto =
                  !filtroAbierto
              "
            >

              <svg
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.5"
              >
                <path d="M4 7h16" />
                <path d="M7 12h10" />
                <path d="M10 17h4" />
              </svg>

              Filtrar

              <span
                v-if="
                  soloMayoreo ||
                  soloNuevos ||
                  precioMaximo < 1500
                "
                class="filter-dot"
              ></span>

            </button>

            <div class="sort-box">

              <span>
                Ordenar:
              </span>

              <select
                v-model="orden"
              >

                <option
                  value="featured"
                >
                  Destacados
                </option>

                <option
                  value="price-low"
                >
                  Precio: menor a mayor
                </option>

                <option
                  value="price-high"
                >
                  Precio: mayor a menor
                </option>

                <option
                  value="name"
                >
                  Nombre
                </option>

              </select>

            </div>

          </div>

        </div>

        <!-- FILTROS EXPANDIBLES -->

        <Transition name="filter">

          <div
            v-if="filtroAbierto"
            class="filters-panel"
          >

            <div class="filters-inner">

              <div class="filter-group">

                <span class="filter-title">
                  Disponibilidad
                </span>

                <label>
                  <input
                    v-model="soloNuevos"
                    type="checkbox"
                  >

                  <span>
                    Novedades
                  </span>
                </label>

                <label>
                  <input
                    v-model="soloMayoreo"
                    type="checkbox"
                  >

                  <span>
                    Mayoreo disponible
                  </span>
                </label>

              </div>

              <div
                class="
                  filter-group
                  price-filter
                "
              >

                <div class="price-heading">

                  <span class="filter-title">
                    Precio máximo
                  </span>

                  <strong>
                    {{
                      formatPrice(
                        precioMaximo
                      )
                    }}
                  </strong>

                </div>

                <input
                  v-model.number="
                    precioMaximo
                  "
                  type="range"
                  min="300"
                  max="1500"
                  step="50"
                >

                <div class="range-labels">
                  <span>$300</span>
                  <span>$1,500</span>
                </div>

              </div>

              <button
                class="clear-filters"
                type="button"
                @click="limpiarFiltros"
              >
                Limpiar filtros
              </button>

            </div>

          </div>

        </Transition>

      </section>

      <!-- RESULTADOS -->

      <section class="products-section">

        <div class="results-heading">

          <span>
            {{
              productosFiltrados.length
            }}

            {{
              productosFiltrados.length === 1
                ? 'producto'
                : 'productos'
            }}
          </span>

          <span
            v-if="
              categoriaActiva !== 'todo'
            "
            class="current-category"
          >
            {{
              nombreCategoria(
                categoriaActiva
              )
            }}
          </span>

        </div>

        <!-- GRID -->

        <div
          v-if="
            productosFiltrados.length
          "
          class="products-grid"
        >

          <article
            v-for="
              producto in
              productosFiltrados
            "
            :key="producto.id"
            class="product-card"
          >

            <div
              class="product-image"
              @click="
                abrirProducto(
                  producto
                )
              "
            >

              <img
                :src="producto.image"
                :alt="producto.name"
              >

              <span
                v-if="producto.isNew"
                class="product-badge"
              >
                Nuevo
              </span>

              <button
                type="button"
                class="quick-view"
                @click.stop="
                  abrirProducto(
                    producto
                  )
                "
              >
                Ver producto
                <span>→</span>
              </button>

            </div>

            <div class="product-info">

              <div>

                <span
                  class="
                    product-category
                  "
                >
                  {{
                    nombreCategoria(
                      producto.category
                    )
                  }}
                </span>

                <h3>
                  {{ producto.name }}
                </h3>

              </div>

              <strong>
                {{
                  formatPrice(
                    producto.price
                  )
                }}
              </strong>

            </div>

            <span
              v-if="
                producto.wholesale
                  ?.enabled
              "
              class="
                wholesale-label
              "
            >
              Mayoreo disponible
            </span>

          </article>

        </div>

        <!-- SIN RESULTADOS -->

        <div
          v-else
          class="empty-results"
        >

          <span>
            No encontramos productos.
          </span>

          <p>
            Intenta cambiar la búsqueda
            o los filtros.
          </p>

          <button
            type="button"
            @click="limpiarFiltros"
          >
            Ver todos los productos
          </button>

        </div>

      </section>

    </main>

    <CatalogoFooter />

    <ProductModal
      :product="
        productoSeleccionado
      "
      :open="
        modalProductoAbierto
      "
      @close="
        cerrarProducto
      "
      @add-to-cart="
        agregarAlCarrito
      "
    />

    <CartDrawer
      :open="
        carritoAbierto
      "
      :items="
        carrito
      "
      @close="
        cerrarCarrito
      "
      @increase="
        aumentarCantidadCarrito
      "
      @decrease="
        disminuirCantidadCarrito
      "
      @remove="
        eliminarDelCarrito
      "
      @checkout="
        continuarPedido
      "
    />

  </div>
</template>

<style scoped>
.catalogo-page {
  min-height: 100vh;
  background: #fff;
  color: #24211f;
}

/* ==============================
   HEADER DEL CATÁLOGO
================================ */

.catalog-header {
  padding:
    100px
    max(40px, calc((100vw - 1500px) / 2))
    75px;

  background:
    linear-gradient(
      110deg,
      #fffaf8 0%,
      #f7e4e8 53%,
      #e5ece4 100%
    );
}

.catalog-header-inner {
  display: flex;
  align-items: flex-end;
  justify-content: space-between;
  gap: 80px;
}

.eyebrow {
  display: block;
  margin-bottom: 18px;

  color: #98757e;

  font-size: 10px;
  font-weight: 600;
  letter-spacing: .27em;
  text-transform: uppercase;
}

.catalog-header h1 {
  margin: 0;

  color: #24211f;

  font-size: clamp(55px, 6vw, 95px);
  font-weight: 500;
  letter-spacing: -.065em;
  line-height: .88;
}

.catalog-header h1 em {
  display: block;

  color: #a97d87;

  font-family: Georgia, "Times New Roman", serif;
  font-weight: 400;
}

.catalog-header-side {
  width: 280px;
  padding-bottom: 5px;
}

.catalog-header-side p {
  margin: 0 0 20px;

  color: #6f6864;

  font-size: 12px;
  line-height: 1.7;
}

.catalog-header-side > span {
  font-size: 9px;
  font-weight: 600;
  letter-spacing: .15em;
  text-transform: uppercase;
}

/* ==============================
   CATEGORÍAS
================================ */

.category-navigation {
  border-bottom: 1px solid #e7ded9;
  background: #fff;
}

.category-inner {
  min-height: 75px;

  display: flex;
  align-items: center;
  gap: 40px;

  padding:
    0
    max(40px, calc((100vw - 1500px) / 2));

  overflow-x: auto;
}

.category-inner::-webkit-scrollbar {
  display: none;
}

.category-inner button {
  position: relative;

  flex-shrink: 0;

  height: 75px;

  border: 0;
  background: transparent;

  color: #8a817c;

  font-family: inherit;
  font-size: 10px;
  font-weight: 600;
  letter-spacing: .12em;
  text-transform: uppercase;

  cursor: pointer;
}

.category-inner button::after {
  content: "";

  position: absolute;

  left: 0;
  right: 0;
  bottom: 0;

  height: 2px;

  background: #e9b8c4;

  transform: scaleX(0);

  transition:
    transform .25s ease;
}

.category-inner button:hover,
.category-inner button.active {
  color: #24211f;
}

.category-inner button.active::after {
  transform: scaleX(1);
}

/* ==============================
   TOOLBAR
================================ */

.catalog-toolbar {
  border-bottom: 1px solid #e7ded9;
  background: #fffaf8;
}

.toolbar-inner {
  min-height: 82px;

  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 30px;

  padding:
    0
    max(40px, calc((100vw - 1500px) / 2));
}

.search-box {
  width: min(420px, 100%);
  height: 44px;

  display: flex;
  align-items: center;
  gap: 12px;

  padding: 0 16px;

  border: 1px solid #e7ded9;
  background: #fff;
}

.search-box svg {
  width: 17px;
  height: 17px;

  color: #8d8580;
}

.search-box input {
  width: 100%;

  border: 0;
  outline: 0;

  background: transparent;
  color: #24211f;

  font-family: inherit;
  font-size: 11px;
}

.search-box input::placeholder {
  color: #aaa19c;
}

.toolbar-actions {
  display: flex;
  align-items: center;
  gap: 30px;
}

.filter-button {
  position: relative;

  display: flex;
  align-items: center;
  gap: 9px;

  border: 0;
  background: transparent;

  color: #24211f;

  font-family: inherit;
  font-size: 9px;
  font-weight: 600;
  letter-spacing: .12em;
  text-transform: uppercase;

  cursor: pointer;
}

.filter-button svg {
  width: 18px;
  height: 18px;
}

.filter-dot {
  position: absolute;

  width: 6px;
  height: 6px;

  right: -9px;
  top: 0;

  border-radius: 50%;

  background: #e9b8c4;
}

.sort-box {
  display: flex;
  align-items: center;
  gap: 8px;
}

.sort-box > span {
  color: #99908b;

  font-size: 9px;
  text-transform: uppercase;
  letter-spacing: .1em;
}

.sort-box select {
  border: 0;
  outline: 0;

  background: transparent;
  color: #24211f;

  font-family: inherit;
  font-size: 10px;

  cursor: pointer;
}

/* ==============================
   PANEL FILTROS
================================ */

.filters-panel {
  border-top: 1px solid #e7ded9;
  background: #f7f2ee;
}

.filters-inner {
  display: grid;
  grid-template-columns:
    1fr
    1.5fr
    auto;

  align-items: center;
  gap: 70px;

  padding:
    35px
    max(40px, calc((100vw - 1500px) / 2));
}

.filter-group {
  display: flex;
  flex-direction: column;
  gap: 12px;
}

.filter-title {
  margin-bottom: 3px;

  color: #24211f;

  font-size: 9px;
  font-weight: 700;
  letter-spacing: .13em;
  text-transform: uppercase;
}

.filter-group label {
  display: flex;
  align-items: center;
  gap: 9px;

  color: #6f6864;

  font-size: 10px;

  cursor: pointer;
}

.filter-group input[type="checkbox"] {
  accent-color: #aebfae;
}

.price-heading {
  display: flex;
  justify-content: space-between;
}

.price-heading strong {
  font-size: 11px;
  font-weight: 500;
}

.price-filter input[type="range"] {
  width: 100%;
  accent-color: #aebfae;
}

.range-labels {
  display: flex;
  justify-content: space-between;

  color: #9a918c;

  font-size: 8px;
}

.clear-filters {
  padding-bottom: 5px;

  border: 0;
  border-bottom:
    1px solid #24211f;

  background: transparent;
  color: #24211f;

  font-family: inherit;
  font-size: 9px;
  font-weight: 600;
  letter-spacing: .1em;
  text-transform: uppercase;

  cursor: pointer;
}

/* TRANSICIÓN */

.filter-enter-active,
.filter-leave-active {
  transition:
    opacity .25s ease,
    transform .25s ease;
}

.filter-enter-from,
.filter-leave-to {
  opacity: 0;
  transform:
    translateY(-8px);
}

/* ==============================
   PRODUCTOS
================================ */

.products-section {
  padding:
    50px
    max(40px, calc((100vw - 1500px) / 2))
    110px;

  background: #fff;
}

.results-heading {
  min-height: 35px;

  display: flex;
  justify-content:
    space-between;

  margin-bottom: 18px;

  color: #918985;

  font-size: 9px;
  font-weight: 600;
  letter-spacing: .12em;
  text-transform: uppercase;
}

.current-category {
  color: #a97d87;
}

/* GRID */

.products-grid {
  display: grid;
  grid-template-columns:
    repeat(4, 1fr);

  gap: 45px 14px;
}

/* CARD */

.product-card {
  min-width: 0;
}

.product-image {
  position: relative;

  width: 100%;
  aspect-ratio: .82;

  overflow: hidden;

  background: #f3ede4;

  cursor: pointer;
}

.product-image > img {
  width: 100%;
  height: 100%;

  display: block;

  object-fit: cover;

  transition:
    transform .55s ease;
}

.product-card:hover
.product-image > img {
  transform: scale(1.035);
}

.product-badge {
  position: absolute;

  top: 13px;
  left: 13px;

  padding: 7px 10px;

  background: #e9b8c4;
  color: #24211f;

  font-size: 8px;
  font-weight: 700;
  letter-spacing: .12em;
  text-transform: uppercase;
}

.quick-view {
  position: absolute;

  left: 13px;
  right: 13px;
  bottom: 13px;

  min-height: 45px;

  display: flex;
  align-items: center;
  justify-content:
    space-between;

  padding: 0 17px;

  border: 0;

  background:
    rgba(36,33,31,.94);

  color: #fff;

  font-family: inherit;
  font-size: 9px;
  font-weight: 600;
  letter-spacing: .12em;
  text-transform: uppercase;

  cursor: pointer;

  opacity: 0;
  transform:
    translateY(8px);

  transition:
    opacity .25s ease,
    transform .25s ease,
    background .25s ease;
}

.quick-view span {
  font-size: 18px;
}

.quick-view:hover {
  background: #a97d87;
}

.product-card:hover
.quick-view {
  opacity: 1;
  transform: translateY(0);
}

.product-info {
  padding-top: 14px;

  display: flex;
  align-items: flex-start;
  justify-content:
    space-between;

  gap: 15px;
}

.product-category {
  display: block;

  margin-bottom: 4px;

  color: #99908b;

  font-size: 8px;
  letter-spacing: .12em;
  text-transform: uppercase;
}

.product-info h3 {
  margin: 0;

  color: #24211f;

  font-size: 13px;
  font-weight: 500;
}

.product-info strong {
  flex-shrink: 0;

  color: #24211f;

  font-size: 12px;
  font-weight: 600;
}

.wholesale-label {
  display: block;

  margin-top: 7px;

  color: #788c78;

  font-size: 8px;
  font-weight: 600;
  letter-spacing: .08em;
  text-transform: uppercase;
}

/* ==============================
   VACÍO
================================ */

.empty-results {
  min-height: 400px;

  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;

  text-align: center;
}

.empty-results > span {
  font-family:
    Georgia,
    "Times New Roman",
    serif;

  font-size: 35px;
  font-style: italic;
}

.empty-results p {
  margin: 12px 0 25px;

  color: #8c8580;

  font-size: 11px;
}

.empty-results button {
  min-height: 45px;

  padding: 0 20px;

  border: 0;

  background: #24211f;
  color: #fff;

  font-family: inherit;
  font-size: 9px;
  font-weight: 600;
  letter-spacing: .1em;
  text-transform: uppercase;

  cursor: pointer;
}

/* ==============================
   RESPONSIVE
================================ */

@media (max-width: 1100px) {

  .products-grid {
    grid-template-columns:
      repeat(3, 1fr);
  }

  .filters-inner {
    gap: 35px;
  }

}

@media (max-width: 800px) {

  .catalog-header-inner {
    align-items: flex-start;
    flex-direction: column;
    gap: 35px;
  }

  .catalog-header-side {
    width: 100%;
  }

  .toolbar-inner {
    align-items: stretch;
    flex-direction: column;

    padding-top: 20px;
    padding-bottom: 20px;
  }

  .search-box {
    width: 100%;
  }

  .toolbar-actions {
    justify-content:
      space-between;
  }

  .filters-inner {
    grid-template-columns:
      1fr;
  }

  .products-grid {
    grid-template-columns:
      repeat(2, 1fr);
  }

  .quick-view {
    opacity: 1;
    transform: none;
  }

}

@media (max-width: 600px) {

  .catalog-header {
    padding:
      70px
      20px
      55px;
  }

  .category-inner {
    padding: 0 20px;
    gap: 27px;
  }

  .toolbar-inner {
    padding-left: 20px;
    padding-right: 20px;
  }

  .sort-box > span {
    display: none;
  }

  .filters-inner {
    padding: 30px 20px;
  }

  .products-section {
    padding:
      40px
      20px
      80px;
  }

  .products-grid {
    gap: 35px 9px;
  }

  .product-info {
    flex-direction: column;
    gap: 5px;
  }

}

@media (max-width: 400px) {

  .toolbar-actions {
    align-items: flex-start;
    flex-direction: column;
  }

}
</style>