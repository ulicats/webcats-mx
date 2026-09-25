<script setup>
import { useRouter } from 'vue-router'
import { catalogConfig } from '../../../data/catalogo/catalogConfig'

const router = useRouter()

const irInicio = () => {
  router.push({
    name: 'Project',
    params: { slug: 'catalogo' }
  })
}

const irCatalogo = (query = {}) => {
  router.push({
    name: 'catalogo-productos',
    query
  })
}

const irSeccionHome = async (seccion) => {
  await router.push({
    name: 'Project',
    params: { slug: 'catalogo' },
    hash: `#${seccion}`
  })
}

const abrirWhatsApp = () => {
  const numero = catalogConfig.contact.whatsapp

  if (!numero) return

  const mensaje = encodeURIComponent(
    'Hola, me gustaría recibir información sobre sus productos.'
  )

  window.open(
    `https://wa.me/${numero}?text=${mensaje}`,
    '_blank',
    'noopener,noreferrer'
  )
}
</script>

<template>
  <footer id="contacto" class="auralyn-footer">

    <!-- BENEFIT / CTA -->
    <div class="footer-cta">
      <div>
        <span>¿Tienes alguna duda?</span>
        <h2>Hablemos.</h2>
      </div>

      <button
        type="button"
        class="whatsapp-button"
        @click="abrirWhatsApp"
      >
        Pedir por WhatsApp
        <span>→</span>
      </button>
    </div>

    <!-- MAIN FOOTER -->
    <div class="footer-main">

      <!-- BRAND -->
      <div class="footer-brand">
        <button
          type="button"
          class="brand-button"
          @click="irInicio"
        >
          <span class="brand-name">
            AURALYN
          </span>

          <span class="brand-subtitle">
            BOUTIQUE & LIFESTYLE
          </span>
        </button>

        <p>
          Moda, accesorios y detalles
          para tu estilo.
        </p>
      </div>

      <!-- EXPLORA -->
      <div class="footer-column">
        <span class="footer-title">
          Explora
        </span>

        <button
          type="button"
          class="footer-link"
          @click="irInicio"
        >
          Inicio
        </button>

        <button
          type="button"
          class="footer-link"
          @click="irCatalogo()"
        >
          Catálogo
        </button>

        <button
          type="button"
          class="footer-link"
          @click="irCatalogo({ new: 'true' })"
        >
          Novedades
        </button>

       <button
          type="button"
          class="footer-link"
          @click="irCatalogo()"
        >
          Mayoreo
        </button>
      </div>

      <!-- CATEGORÍAS -->
      <div class="footer-column">
        <span class="footer-title">
          Categorías
        </span>

        <button
          type="button"
          class="footer-link"
          @click="irCatalogo({ category: 'ropa' })"
        >
          Ropa
        </button>

        <button
          type="button"
          class="footer-link"
          @click="irCatalogo({ category: 'calzado' })"
        >
          Calzado
        </button>

        <button
          type="button"
          class="footer-link"
          @click="irCatalogo({ category: 'accesorios' })"
        >
          Accesorios
        </button>

        <button
          type="button"
          class="footer-link"
          @click="irCatalogo({ category: 'belleza' })"
        >
          Belleza
        </button>
      </div>

      <!-- REDES -->
      <div class="footer-column">
        <span class="footer-title">
          Síguenos
        </span>

        <!--
          Cuando tengamos las redes reales,
          aquí ponemos sus URLs.
        -->

        <span class="social-placeholder">
          Instagram
        </span>

        <span class="social-placeholder">
          Facebook
        </span>

        <span class="social-placeholder">
          TikTok
        </span>
      </div>

    </div>

    <!-- BOTTOM -->
    <div class="footer-bottom">

      <span>
        © {{ new Date().getFullYear() }} Auralyn.
      </span>

      <div>
        <!--
          Por ahora son texto para evitar href="#".
          Cuando hagamos estas vistas las convertimos
          en RouterLink.
        -->

        <span class="legal-placeholder">
          Aviso de privacidad
        </span>

        <span class="legal-placeholder">
          Términos
        </span>
      </div>

      <span class="footer-signature">
        Boutique · Mayoreo · Lifestyle
      </span>

    </div>

  </footer>
</template>

<style scoped>
.auralyn-footer {
  width: 100%;
  background: #fffaf8;
  color: #24211f;
}

/* =========================================
   CTA
========================================= */

.footer-cta {
  width: min(100% - 80px, 1500px);
  margin: 0 auto;

  padding: 65px 0;

  display: flex;
  align-items: flex-end;
  justify-content: space-between;
  gap: 40px;

  border-bottom: 1px solid #e7ded9;
}

.footer-cta > div {
  display: flex;
  flex-direction: column;
}

.footer-cta > div > span {
  margin-bottom: 8px;

  color: #8c706f;

  font-size: 10px;
  font-weight: 600;
  letter-spacing: 0.25em;
  text-transform: uppercase;
}

.footer-cta h2 {
  margin: 0;

  font-family: Georgia, "Times New Roman", serif;
  font-size: clamp(50px, 5vw, 78px);
  font-weight: 400;
  font-style: italic;
  line-height: 1;
}

/* =========================================
   WHATSAPP
========================================= */

.whatsapp-button {
  min-height: 50px;

  display: inline-flex;
  align-items: center;
  gap: 30px;

  padding: 0 25px;

  border: 0;

  background: #24211f;
  color: #fff;

  font-family: inherit;
  font-size: 11px;
  font-weight: 600;

  letter-spacing: 0.08em;
  text-transform: uppercase;

  cursor: pointer;

  transition:
    background 0.25s ease,
    transform 0.25s ease;
}

.whatsapp-button:hover {
  background: #aebfae;
  color: #24211f;

  transform: translateY(-2px);
}

.whatsapp-button span {
  font-size: 18px;
}

/* =========================================
   MAIN
========================================= */

.footer-main {
  width: min(100% - 80px, 1500px);
  margin: 0 auto;

  padding: 65px 0;

  display: grid;
  grid-template-columns: 2fr repeat(3, 1fr);
  gap: 70px;
}

/* =========================================
   BRAND
========================================= */

.footer-brand {
  display: flex;
  align-items: flex-start;
  flex-direction: column;
}

.brand-button {
  display: flex;
  align-items: flex-start;
  flex-direction: column;

  padding: 0;

  border: 0;
  background: transparent;

  color: inherit;

  font-family: inherit;
  text-align: left;

  cursor: pointer;
}

.brand-name {
  font-size: 26px;
  font-weight: 600;
  letter-spacing: 0.3em;
}

.brand-subtitle {
  margin-top: 7px;

  color: #77706c;

  font-size: 8px;
  letter-spacing: 0.28em;
}

.footer-brand p {
  max-width: 270px;
  margin: 25px 0 0;

  color: #77706c;

  font-size: 13px;
  line-height: 1.7;
}

/* =========================================
   COLUMNAS
========================================= */

.footer-column {
  display: flex;
  align-items: flex-start;
  flex-direction: column;

  gap: 13px;
}

.footer-title {
  margin-bottom: 8px;

  color: #8c706f;

  font-size: 9px;
  font-weight: 700;

  letter-spacing: 0.2em;
  text-transform: uppercase;
}

/* =========================================
   LINKS / BOTONES
========================================= */

.footer-link {
  position: relative;

  padding: 0;

  border: 0;
  background: transparent;

  color: #514c49;

  font-family: inherit;
  font-size: 13px;

  cursor: pointer;

  transition:
    color 0.2s ease,
    transform 0.2s ease;
}

.footer-link:hover {
  color: #a97d87;

  transform: translateX(3px);
}

/* =========================================
   REDES PLACEHOLDER
========================================= */

.social-placeholder {
  color: #514c49;

  font-size: 13px;

  opacity: 0.7;

  cursor: default;
}

/* =========================================
   BOTTOM
========================================= */

.footer-bottom {
  width: min(100% - 80px, 1500px);
  margin: 0 auto;

  min-height: 75px;

  display: flex;
  align-items: center;
  justify-content: space-between;

  gap: 30px;

  border-top: 1px solid #e7ded9;

  color: #8d8581;

  font-size: 10px;
}

.footer-bottom > div {
  display: flex;
  gap: 25px;
}

.legal-placeholder {
  color: inherit;
  cursor: default;
}

.footer-signature {
  letter-spacing: 0.1em;
  text-transform: uppercase;
}

/* =========================================
   RESPONSIVE
========================================= */

@media (max-width: 850px) {

  .footer-cta,
  .footer-main,
  .footer-bottom {
    width: calc(100% - 48px);
  }

  .footer-main {
    grid-template-columns: 1.5fr 1fr 1fr;
  }

  .footer-column:last-child {
    grid-column: 2;
  }
}

@media (max-width: 600px) {

  .footer-cta {
    padding: 50px 0;

    align-items: flex-start;
    flex-direction: column;
  }

  .footer-main {
    padding: 50px 0;

    grid-template-columns: 1fr 1fr;

    gap: 45px 25px;
  }

  .footer-brand {
    grid-column: 1 / -1;
  }

  .footer-column:last-child {
    grid-column: auto;
  }

  .footer-bottom {
    padding: 25px 0;

    align-items: flex-start;
    flex-direction: column;

    min-height: auto;
  }

  .footer-bottom > div {
    flex-direction: column;
    gap: 10px;
  }
}
</style>