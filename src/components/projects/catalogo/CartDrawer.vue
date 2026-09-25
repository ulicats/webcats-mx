<script setup>
import { computed } from 'vue'

import { catalogConfig } from '../../../data/catalogo/catalogConfig.js'

const props = defineProps({
  open: {
    type: Boolean,
    default: false
  },

  items: {
    type: Array,
    default: () => []
  }
})

const emit = defineEmits([
  'close',
  'increase',
  'decrease',
  'remove',
  'checkout'
])

const formatPrice = (price) => {
  return new Intl.NumberFormat(
    catalogConfig.currency.locale,
    {
      style: 'currency',
      currency: catalogConfig.currency.code,
      maximumFractionDigits: 0
    }
  ).format(price || 0)
}

const total = computed(() => {
  return props.items.reduce(
    (sum, item) => sum + item.subtotal,
    0
  )
})

const totalPieces = computed(() => {
  return props.items.reduce(
    (sum, item) => sum + item.quantity,
    0
  )
})
</script>

<template>
  <Teleport to="body">

    <Transition name="cart-fade">

      <div
        v-if="open"
        class="cart-overlay"
        @click.self="emit('close')"
      >

        <aside class="cart-drawer">

          <!-- HEADER -->

          <header class="cart-header">

            <div>
              <span class="cart-eyebrow">
                Tu selección
              </span>

              <h2>
                Carrito
              </h2>
            </div>

            <button
              type="button"
              class="cart-close"
              aria-label="Cerrar carrito"
              @click="emit('close')"
            >
              ×
            </button>

          </header>


          <!-- VACÍO -->

          <div
            v-if="!items.length"
            class="cart-empty"
          >
            <span>
              AURALYN
            </span>

            <h3>
              Tu carrito está vacío.
            </h3>

            <p>
              Explora el catálogo y agrega tus favoritos.
            </p>

            <button
              type="button"
              @click="emit('close')"
            >
              Seguir comprando
            </button>
          </div>


          <!-- PRODUCTOS -->

          <template v-else>

            <div class="cart-summary">
              {{ totalPieces }}
              {{ totalPieces === 1 ? 'pieza' : 'piezas' }}
            </div>

            <div class="cart-items">

              <article
                v-for="item in items"
                :key="item.key"
                class="cart-item"
              >

                <div class="item-image">

                  <img
                    :src="item.image"
                    :alt="item.name"
                  >

                </div>


                <div class="item-content">

                  <div class="item-top">

                    <div>
                      <span class="item-category">
                        {{ item.category }}
                      </span>

                      <h3>
                        {{ item.name }}
                      </h3>
                    </div>

                    <button
                      type="button"
                      class="remove-button"
                      aria-label="Eliminar producto"
                      @click="emit('remove', item.key)"
                    >
                      ×
                    </button>

                  </div>


                  <!-- VARIANTES -->

                  <div
                    v-if="item.color || item.size"
                    class="item-variants"
                  >

                    <span v-if="item.color">
                      Color: {{ item.color }}
                    </span>

                    <span v-if="item.size">
                      Talla: {{ item.size }}
                    </span>

                  </div>


                  <!-- MAYOREO -->

                  <div
                    v-if="item.unitPrice < item.originalPrice"
                    class="wholesale-applied"
                  >
                    Precio por volumen aplicado
                  </div>


                  <!-- CANTIDAD / PRECIO -->

                  <div class="item-bottom">

                    <div class="item-quantity">

                      <button
                        type="button"
                        @click="emit('decrease', item.key)"
                      >
                        −
                      </button>

                      <span>
                        {{ item.quantity }}
                      </span>

                      <button
                        type="button"
                        @click="emit('increase', item.key)"
                      >
                        +
                      </button>

                    </div>


                    <div class="item-price">

                      <span>
                        {{ formatPrice(item.unitPrice) }} c/u
                      </span>

                      <strong>
                        {{ formatPrice(item.subtotal) }}
                      </strong>

                    </div>

                  </div>

                </div>

              </article>

            </div>


            <!-- FOOTER -->

            <footer class="cart-footer">

              <div class="cart-total">

                <div>
                  <span>Total</span>

                  <small>
                    {{ totalPieces }}
                    {{ totalPieces === 1 ? 'pieza' : 'piezas' }}
                  </small>
                </div>

                <strong>
                  {{ formatPrice(total) }}
                </strong>

              </div>

              <button
                type="button"
                class="continue-shopping-button"
                @click="emit('close')"
              >
                ← Seguir comprando
              </button>

              <button
                type="button"
                class="checkout-button"
                @click="emit('checkout')"
              >
                <span>
                  Enviar pedido por Whatsapp
                </span>

                <span>
                  →
                </span>
              </button>

              <p class="checkout-note">
                Tu pedido se confirmará directamente por WhatsApp.
              </p>

            </footer>

          </template>

        </aside>

      </div>

    </Transition>

  </Teleport>
</template>

<style scoped>
.cart-overlay {
  position: fixed;
  inset: 0;

  z-index: 10000;

  background: rgba(31, 27, 25, .42);
  backdrop-filter: blur(3px);
}

.cart-drawer {
  position: absolute;
  top: 0;
  right: 0;

  width: min(500px, 100%);
  height: 100%;

  display: flex;
  flex-direction: column;

  background: #fffaf8;

  box-shadow:
    -30px 0 80px rgba(35, 28, 25, .14);
}


/* HEADER */

.cart-header {
  min-height: 125px;

  display: flex;
  align-items: center;
  justify-content: space-between;

  padding: 28px 35px;

  border-bottom: 1px solid #e8dfda;
}

.cart-eyebrow {
  display: block;

  margin-bottom: 5px;

  color: #879986;

  font-size: 8px;
  font-weight: 700;
  letter-spacing: .18em;
  text-transform: uppercase;
}

.cart-header h2 {
  margin: 0;

  color: #24211f;

  font-family: Georgia, "Times New Roman", serif;
  font-size: 38px;
  font-style: italic;
  font-weight: 400;
}

.cart-close {
  width: 42px;
  height: 42px;

  display: grid;
  place-items: center;

  border: 0;
  border-radius: 50%;

  background: #fff;
  color: #24211f;

  font-size: 24px;

  cursor: pointer;

  transition: transform .2s ease;
}

.cart-close:hover {
  transform: rotate(90deg);
}


/* RESUMEN */

.cart-summary {
  padding: 17px 35px;

  border-bottom: 1px solid #eee5e0;

  color: #8c827d;

  font-size: 8px;
  font-weight: 600;
  letter-spacing: .13em;
  text-transform: uppercase;
}


/* PRODUCTOS */

.cart-items {
  flex: 1;

  overflow-y: auto;

  padding: 0 35px;
}

.cart-item {
  display: grid;
  grid-template-columns: 110px 1fr;
  gap: 20px;

  padding: 27px 0;

  border-bottom: 1px solid #e8dfda;
}

.item-image {
  width: 110px;
  height: 140px;

  overflow: hidden;

  background: #f1ebe7;
}

.item-image img {
  width: 100%;
  height: 100%;

  object-fit: cover;
}

.item-content {
  min-width: 0;
}

.item-top {
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
  gap: 15px;
}

.item-category {
  display: block;

  margin-bottom: 6px;

  color: #8b9b89;

  font-size: 7px;
  font-weight: 700;
  letter-spacing: .15em;
  text-transform: uppercase;
}

.item-top h3 {
  margin: 0;

  color: #24211f;

  font-family: Georgia, "Times New Roman", serif;
  font-size: 20px;
  font-weight: 400;
}

.remove-button {
  border: 0;

  background: transparent;
  color: #918783;

  font-size: 18px;

  cursor: pointer;
}

.item-variants {
  display: flex;
  flex-wrap: wrap;
  gap: 6px 14px;

  margin-top: 10px;

  color: #817873;

  font-size: 9px;
}

.wholesale-applied {
  display: inline-block;

  margin-top: 12px;
  padding: 5px 7px;

  background: #e5ece4;
  color: #657765;

  font-size: 7px;
  font-weight: 700;
  letter-spacing: .08em;
  text-transform: uppercase;
}

.item-bottom {
  display: flex;
  align-items: flex-end;
  justify-content: space-between;
  gap: 15px;

  margin-top: 20px;
}

.item-quantity {
  width: 105px;
  height: 36px;

  display: grid;
  grid-template-columns: 34px 1fr 34px;

  border: 1px solid #ded4cf;
}

.item-quantity button {
  border: 0;

  background: transparent;
  color: #24211f;

  cursor: pointer;
}

.item-quantity span {
  display: grid;
  place-items: center;

  color: #24211f;

  font-size: 10px;
  font-weight: 600;
}

.item-price {
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  gap: 4px;
}

.item-price span {
  color: #958c87;

  font-size: 8px;
}

.item-price strong {
  color: #24211f;

  font-size: 11px;
  font-weight: 600;
}


/* FOOTER */

.cart-footer {
  padding: 25px 35px 30px;

  border-top: 1px solid #e8dfda;

  background: #fffaf8;
}

.cart-total {
  display: flex;
  align-items: flex-end;
  justify-content: space-between;

  margin-bottom: 20px;
}

.cart-total > div {
  display: flex;
  flex-direction: column;
  gap: 4px;
}

.cart-total span {
  color: #24211f;

  font-size: 9px;
  font-weight: 700;
  letter-spacing: .13em;
  text-transform: uppercase;
}

.cart-total small {
  color: #968d88;

  font-size: 8px;
}

.cart-total strong {
  color: #24211f;

  font-family: Georgia, "Times New Roman", serif;
  font-size: 27px;
  font-weight: 400;
}

.continue-shopping-button {
  width: 100%;
  min-height: 48px;

  margin-bottom: 10px;

  border: 1px solid #d8cec9;

  background: transparent;
  color: #24211f;

  font-family: inherit;
  font-size: 8px;
  font-weight: 700;

  letter-spacing: .12em;
  text-transform: uppercase;

  cursor: pointer;

  transition:
    background .2s ease,
    border-color .2s ease;
}

.continue-shopping-button:hover {
  background: #f3ede9;
  border-color: #cbbeb8;
}

.checkout-button {
  width: 100%;
  min-height: 55px;

  display: flex;
  align-items: center;
  justify-content: space-between;

  padding: 0 20px;

  border: 0;

  background: #24211f;
  color: #fff;

  font-family: inherit;
  font-size: 8px;
  font-weight: 700;
  letter-spacing: .12em;
  text-transform: uppercase;

  cursor: pointer;

  transition: background .2s ease;
}

.checkout-button:hover {
  background: #a97d87;
}

.checkout-note {
  margin: 12px 0 0;

  color: #9b928d;

  font-size: 8px;
  text-align: center;
}


/* CARRITO VACÍO */

.cart-empty {
  flex: 1;

  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;

  padding: 50px;

  text-align: center;
}

.cart-empty > span {
  margin-bottom: 15px;

  color: #8b9b89;

  font-size: 8px;
  font-weight: 700;
  letter-spacing: .2em;
}

.cart-empty h3 {
  margin: 0;

  color: #24211f;

  font-family: Georgia, "Times New Roman", serif;
  font-size: 31px;
  font-style: italic;
  font-weight: 400;
}

.cart-empty p {
  max-width: 260px;

  margin: 12px 0 25px;

  color: #8c837e;

  font-size: 10px;
  line-height: 1.7;
}

.cart-empty button {
  padding: 13px 20px;

  border: 1px solid #24211f;

  background: transparent;
  color: #24211f;

  font-family: inherit;
  font-size: 8px;
  font-weight: 700;
  letter-spacing: .12em;
  text-transform: uppercase;

  cursor: pointer;
}


/* TRANSICIÓN */

.cart-fade-enter-active,
.cart-fade-leave-active {
  transition: opacity .25s ease;
}

.cart-fade-enter-active .cart-drawer,
.cart-fade-leave-active .cart-drawer {
  transition: transform .35s ease;
}

.cart-fade-enter-from,
.cart-fade-leave-to {
  opacity: 0;
}

.cart-fade-enter-from .cart-drawer,
.cart-fade-leave-to .cart-drawer {
  transform: translateX(100%);
}


/* RESPONSIVE */

@media (max-width: 550px) {
  .cart-header {
    padding: 25px 20px;
  }

  .cart-summary {
    padding-left: 20px;
    padding-right: 20px;
  }

  .cart-items {
    padding: 0 20px;
  }

  .cart-item {
    grid-template-columns: 90px 1fr;
    gap: 15px;
  }

  .item-image {
    width: 90px;
    height: 120px;
  }

  .cart-footer {
    padding: 22px 20px;
  }
}
</style>