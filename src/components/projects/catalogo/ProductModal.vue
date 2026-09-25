<script setup>
import { computed, ref, watch } from 'vue'
import { catalogConfig } from '../../../data/catalogo/catalogConfig.js'

const props = defineProps({
  product: {
    type: Object,
    default: null
  },

  open: {
    type: Boolean,
    default: false
  }
})

const emit = defineEmits([
  'close',
  'add-to-cart'
])

const quantity = ref(1)
const selectedColor = ref('')
const selectedSize = ref('')

watch(
  () => props.product,
  (product) => {
    quantity.value = 1
    selectedColor.value = product?.colors?.[0] || ''
    selectedSize.value = product?.sizes?.[0] || ''
  },
  {
    immediate: true
  }
)

watch(
  () => props.open,
  (isOpen) => {
    if (isOpen) {
      document.body.style.overflow = 'hidden'
    } else {
      document.body.style.overflow = ''
    }
  }
)

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

const currentPrice = computed(() => {
  if (!props.product) {
    return 0
  }

  const tiers = props.product.wholesale?.tiers || []

  let price = props.product.price

  tiers.forEach((tier) => {
    if (quantity.value >= tier.min) {
      price = tier.price
    }
  })

  return price
})

const subtotal = computed(() => {
  return currentPrice.value * quantity.value
})

const activeTier = computed(() => {
  if (!props.product?.wholesale?.tiers?.length) {
    return null
  }

  return [...props.product.wholesale.tiers]
    .reverse()
    .find(tier => quantity.value >= tier.min) || null
})

const nextTier = computed(() => {
  if (!props.product?.wholesale?.tiers?.length) {
    return null
  }

  return props.product.wholesale.tiers.find(
    tier => quantity.value < tier.min
  ) || null
})

const decreaseQuantity = () => {
  if (quantity.value > 1) {
    quantity.value--
  }
}

const increaseQuantity = () => {
  quantity.value++
}

const closeModal = () => {
  emit('close')
}

const addToCart = () => {
  if (!props.product) {
    return
  }

  emit('add-to-cart', {
    product: props.product,
    quantity: quantity.value,
    color: selectedColor.value || null,
    size: selectedSize.value || null,
    unitPrice: currentPrice.value,
    subtotal: subtotal.value
  })
}
</script>

<template>
  <Teleport to="body">

    <Transition name="modal">

      <div
        v-if="open && product"
        class="modal-backdrop"
        @click.self="closeModal"
      >

        <div class="product-modal">

          <button
            type="button"
            class="close-button"
            aria-label="Cerrar"
            @click="closeModal"
          >
            ×
          </button>


          <!-- IMAGEN -->

          <div class="modal-image">

            <img
              :src="product.image"
              :alt="product.name"
            >

            <span
              v-if="product.isNew"
              class="new-badge"
            >
              Nuevo
            </span>

          </div>


          <!-- INFORMACIÓN -->

          <div class="modal-content">

            <div class="product-heading">

              <span class="product-category">
                {{ product.category }}
              </span>

              <h2>
                {{ product.name }}
              </h2>

              <div class="price-row">

                <strong>
                  {{ formatPrice(currentPrice) }}
                </strong>

                <span
                  v-if="currentPrice !== product.price"
                  class="original-price"
                >
                  {{ formatPrice(product.price) }}
                </span>

              </div>

              <span class="price-unit">
                Precio por pieza
              </span>

            </div>


            <!-- COLOR -->

            <div
              v-if="product.colors?.length"
              class="option-section"
            >

              <div class="option-heading">

                <span>Color</span>

                <strong>
                  {{ selectedColor }}
                </strong>

              </div>

              <div class="option-buttons">

                <button
                  v-for="color in product.colors"
                  :key="color"
                  type="button"
                  :class="{
                    active: selectedColor === color
                  }"
                  @click="selectedColor = color"
                >
                  {{ color }}
                </button>

              </div>

            </div>


            <!-- TALLA -->

            <div
              v-if="product.sizes?.length"
              class="option-section"
            >

              <div class="option-heading">
                <span>Talla</span>
              </div>

              <div class="option-buttons sizes">

                <button
                  v-for="size in product.sizes"
                  :key="size"
                  type="button"
                  :class="{
                    active: selectedSize === size
                  }"
                  @click="selectedSize = size"
                >
                  {{ size }}
                </button>

              </div>

            </div>


            <!-- CANTIDAD -->

            <div class="quantity-section">

              <div class="quantity-heading">

                <span>Cantidad</span>

                <span
                  v-if="nextTier"
                  class="next-tier"
                >
                  Agrega
                  {{ nextTier.min - quantity }}
                  más para precio especial
                </span>

              </div>

              <div class="quantity-control">

                <button
                  type="button"
                  @click="decreaseQuantity"
                >
                  −
                </button>

                <span>
                  {{ quantity }}
                </span>

                <button
                  type="button"
                  @click="increaseQuantity"
                >
                  +
                </button>

              </div>

            </div>


            <!-- MAYOREO -->

            <div
              v-if="product.wholesale?.tiers?.length"
              class="wholesale-box"
            >

              <div class="wholesale-heading">

                <div>
                  <span>Precio por volumen</span>

                  <p>
                    Compra más y obtén mejor precio.
                  </p>
                </div>

                <span
                  v-if="activeTier"
                  class="applied-badge"
                >
                  Precio aplicado
                </span>

              </div>


              <!-- PRECIO NORMAL -->

              <div
                class="tier-row"
                :class="{
                  active: !activeTier
                }"
              >

                <span>
                  1–{{ product.wholesale.tiers[0].min - 1 }}
                  piezas
                </span>

                <strong>
                  {{ formatPrice(product.price) }} c/u
                </strong>

              </div>


              <!-- ESCALAS -->

              <div
                v-for="(tier, index) in product.wholesale.tiers"
                :key="tier.min"
                class="tier-row"
                :class="{
                  active: activeTier?.min === tier.min
                }"
              >

                <span>

                  <template
                    v-if="index < product.wholesale.tiers.length - 1"
                  >
                    {{ tier.min }}–{{
                      product.wholesale.tiers[index + 1].min - 1
                    }}
                    piezas
                  </template>

                  <template v-else>
                    {{ tier.min }}+ piezas
                  </template>

                </span>

                <strong>
                  {{ formatPrice(tier.price) }} c/u
                </strong>

              </div>

            </div>


            <!-- TOTAL -->

            <div class="modal-total">

              <div>

                <span>
                  Total
                </span>

                <small>
                  {{ quantity }}
                  {{ quantity === 1 ? 'pieza' : 'piezas' }}
                </small>

              </div>

              <strong>
                {{ formatPrice(subtotal) }}
              </strong>

            </div>


            <!-- AGREGAR -->

            <button
              type="button"
              class="add-cart-button"
              @click="addToCart"
            >

              <span>
                Agregar al carrito
              </span>

              <span>
                {{ formatPrice(subtotal) }}
              </span>

            </button>


            <p class="purchase-note">
              Tu pedido se confirmará directamente por WhatsApp.
            </p>

          </div>

        </div>

      </div>

    </Transition>

  </Teleport>
</template>

<style scoped>
.modal-backdrop {
  position: fixed;
  inset: 0;

  z-index: 9999;

  display: grid;
  place-items: center;

  padding: 30px;

  background: rgba(26, 23, 22, .55);
  backdrop-filter: blur(5px);
}

.product-modal {
  position: relative;

  width: min(1050px, 100%);
  max-height: calc(100vh - 60px);

  display: grid;
  grid-template-columns: 1.05fr .95fr;

  overflow: hidden;

  background: #fffaf8;

  box-shadow:
    0 35px 100px rgba(25, 20, 18, .25);
}


/* CERRAR */

.close-button {
  position: absolute;

  top: 20px;
  right: 20px;

  z-index: 5;

  width: 42px;
  height: 42px;

  display: grid;
  place-items: center;

  border: 0;
  border-radius: 50%;

  background: rgba(255, 255, 255, .94);
  color: #24211f;

  font-family: Georgia, serif;
  font-size: 25px;
  font-weight: 300;

  cursor: pointer;

  transition:
    transform .2s ease,
    background .2s ease;
}

.close-button:hover {
  transform: rotate(90deg);
  background: #fff;
}


/* IMAGEN */

.modal-image {
  position: relative;

  min-height: 680px;

  overflow: hidden;

  background: #f3ede4;
}

.modal-image img {
  width: 100%;
  height: 100%;

  position: absolute;
  inset: 0;

  object-fit: cover;
}

.new-badge {
  position: absolute;

  top: 22px;
  left: 22px;

  padding: 8px 12px;

  background: #e9b8c4;
  color: #24211f;

  font-size: 8px;
  font-weight: 700;
  letter-spacing: .13em;
  text-transform: uppercase;
}


/* CONTENIDO */

.modal-content {
  overflow-y: auto;

  padding: 70px 55px 45px;
}

.product-heading {
  padding-bottom: 32px;

  border-bottom: 1px solid #e7ded9;
}

.product-category {
  display: block;

  margin-bottom: 12px;

  color: #8b9b89;

  font-size: 9px;
  font-weight: 600;
  letter-spacing: .18em;
  text-transform: uppercase;
}

.product-heading h2 {
  margin: 0 0 18px;

  color: #24211f;

  font-family: Georgia, "Times New Roman", serif;
  font-size: clamp(38px, 4vw, 55px);
  font-weight: 400;
  font-style: italic;
  line-height: 1;
}

.price-row {
  display: flex;
  align-items: center;
  gap: 12px;
}

.price-row > strong {
  color: #24211f;

  font-size: 18px;
  font-weight: 600;
}

.original-price {
  color: #a69d98;

  font-size: 12px;

  text-decoration: line-through;
}

.price-unit {
  display: block;

  margin-top: 4px;

  color: #9a918c;

  font-size: 8px;
  letter-spacing: .08em;
  text-transform: uppercase;
}


/* OPCIONES */

.option-section {
  padding: 27px 0;

  border-bottom: 1px solid #e7ded9;
}

.option-heading {
  display: flex;
  align-items: center;
  justify-content: space-between;

  margin-bottom: 15px;
}

.option-heading > span {
  color: #24211f;

  font-size: 9px;
  font-weight: 700;
  letter-spacing: .13em;
  text-transform: uppercase;
}

.option-heading strong {
  color: #8d8580;

  font-size: 10px;
  font-weight: 400;
}

.option-buttons {
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
}

.option-buttons button {
  min-width: 72px;
  min-height: 39px;

  padding: 0 15px;

  border: 1px solid #ddd3ce;

  background: transparent;
  color: #665f5b;

  font-family: inherit;
  font-size: 9px;

  cursor: pointer;

  transition:
    border .2s ease,
    background .2s ease,
    color .2s ease;
}

.option-buttons button:hover {
  border-color: #24211f;
}

.option-buttons button.active {
  border-color: #24211f;

  background: #24211f;
  color: #fff;
}

.option-buttons.sizes button {
  min-width: 48px;
}


/* CANTIDAD */

.quantity-section {
  padding: 27px 0;

  border-bottom: 1px solid #e7ded9;
}

.quantity-heading {
  display: flex;
  align-items: center;
  justify-content: space-between;

  gap: 20px;

  margin-bottom: 14px;
}

.quantity-heading > span:first-child {
  color: #24211f;

  font-size: 9px;
  font-weight: 700;
  letter-spacing: .13em;
  text-transform: uppercase;
}

.next-tier {
  color: #788c78;

  font-size: 8px;
  font-weight: 600;
}

.quantity-control {
  width: 145px;
  height: 45px;

  display: grid;
  grid-template-columns: 45px 1fr 45px;

  border: 1px solid #ddd3ce;
}

.quantity-control button {
  border: 0;

  background: transparent;
  color: #24211f;

  font-size: 18px;

  cursor: pointer;
}

.quantity-control span {
  display: grid;
  place-items: center;

  color: #24211f;
  font-size: 12px;
  font-weight: 600;
}

/* MAYOREO */

.wholesale-box {
  margin-top: 28px;

  padding: 23px;

  background: #e5ece4;
}

.wholesale-heading {
  display: flex;
  align-items: flex-start;
  justify-content: space-between;

  gap: 20px;

  margin-bottom: 17px;
}

.wholesale-heading > div > span {
  color: #24211f;

  font-size: 9px;
  font-weight: 700;
  letter-spacing: .12em;
  text-transform: uppercase;
}

.wholesale-heading p {
  margin: 5px 0 0;

  color: #718071;

  font-size: 9px;
}

.applied-badge {
  padding: 6px 8px;

  background: #fff;
  color: #657865;

  font-size: 7px;
  font-weight: 700;
  letter-spacing: .08em;
  text-transform: uppercase;
}

.tier-row {
  display: flex;
  align-items: center;
  justify-content: space-between;

  padding: 11px 0;

  border-top: 1px solid rgba(36, 33, 31, .1);

  color: #6c786b;

  font-size: 9px;
}

.tier-row strong {
  color: #4d5c4c;

  font-weight: 600;
}

.tier-row.active {
  color: #24211f;
}

.tier-row.active strong {
  color: #24211f;
}


/* TOTAL */

.modal-total {
  display: flex;
  align-items: flex-end;
  justify-content: space-between;

  padding: 30px 0 20px;
}

.modal-total > div {
  display: flex;
  flex-direction: column;
  gap: 4px;
}

.modal-total span {
  color: #24211f;

  font-size: 9px;
  font-weight: 700;
  letter-spacing: .12em;
  text-transform: uppercase;
}

.modal-total small {
  color: #99908b;

  font-size: 9px;
}

.modal-total > strong {
  color: #24211f;

  font-family: Georgia, "Times New Roman", serif;
  font-size: 28px;
  font-weight: 400;
}


/* BOTÓN */

.add-cart-button {
  width: 100%;
  min-height: 56px;

  display: flex;
  align-items: center;
  justify-content: space-between;

  padding: 0 22px;

  border: 0;

  background: #24211f;
  color: #fff;

  font-family: inherit;
  font-size: 9px;
  font-weight: 600;
  letter-spacing: .12em;
  text-transform: uppercase;

  cursor: pointer;

  transition: background .2s ease;
}

.add-cart-button:hover {
  background: #a97d87;
}

.purchase-note {
  margin: 13px 0 0;

  color: #99908b;

  font-size: 8px;
  text-align: center;
}


/* TRANSICIÓN */

.modal-enter-active,
.modal-leave-active {
  transition: opacity .25s ease;
}

.modal-enter-active .product-modal,
.modal-leave-active .product-modal {
  transition:
    transform .3s ease,
    opacity .3s ease;
}

.modal-enter-from,
.modal-leave-to {
  opacity: 0;
}

.modal-enter-from .product-modal,
.modal-leave-to .product-modal {
  opacity: 0;
  transform: translateY(15px) scale(.985);
}


/* RESPONSIVE */

@media (max-width: 850px) {
  .modal-backdrop {
    padding: 15px;
  }

  .product-modal {
    max-height: calc(100vh - 30px);

    grid-template-columns: 1fr;

    overflow-y: auto;
  }

  .modal-image {
    min-height: 480px;
  }

  .modal-image img {
    position: relative;
  }

  .modal-content {
    overflow: visible;

    padding: 45px 30px 35px;
  }
}

@media (max-width: 520px) {
  .modal-backdrop {
    padding: 0;
  }

  .product-modal {
    width: 100%;
    height: 100vh;
    max-height: none;

    display: block;
  }

  .modal-image {
    min-height: 430px;
  }

  .modal-content {
    padding: 38px 20px 35px;
  }

  .quantity-heading {
    align-items: flex-start;
    flex-direction: column;
    gap: 7px;
  }
}
</style>