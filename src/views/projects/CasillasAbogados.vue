<template>
  <main class="bg-white text-neutral-900 font-inter">
    <SiteHeader />
    <Hero />
    <TrustBar />

    <Services :items="services" />

    <About />
    <Process />
    <FAQ />

    <ContactCTA
      :phones="phones"
      :whatsapp="whatsapp"
      formspreeUrl="https://formspree.io/f/XXXXXXX"
    />

    <SiteFooter />
  </main>
</template>

<script setup>
import SiteHeader from "../../components/projects/casillas/Header.vue";
import Hero from "../../components/projects/casillas/Hero.vue";
import TrustBar from "../../components/projects/casillas/TrustBar.vue";
import Services from "../../components/projects/casillas/Services.vue";
import About from "../../components/projects/casillas/About.vue";
import Process from "../../components/projects/casillas/Process.vue";
import FAQ from "../../components/projects/casillas/FAQ.vue";
import ContactCTA from "../../components/projects/casillas/ContactCTA.vue";
import SiteFooter from "../../components/projects/casillas/Footer.vue";
import { useHead } from "@unhead/vue";

useHead({
  title: "Casillas Abogados Penalistas | Nayarit",
  meta: [
    {
      name: "description",
      content:
        "Firma de abogados en Nayarit. Litigio y asesoría penal, civil, familiar, agrario, mercantil y juicio de amparo."
    },
    { property: "og:title", content: "Casillas Abogados Penalistas | Nayarit" },
    {
      property: "og:description",
      content:
        "Defensa penal y asesoría integral. Atención profesional y seguimiento puntual."
    },
    { property: "og:type", content: "website" },
    // cuando tengas dominio final, agregamos og:url
    // { property: "og:url", content: "https://casillasabogados.com/" },

    // imagen para compartir (pon una imagen real en /public/casillas/og.jpg)
    { property: "og:image", content: "/casillas/og.jpg" },
    { name: "twitter:card", content: "summary_large_image" }
  ],
  link: [
    // favicon SOLO para esta ruta
    { rel: "icon", type: "image/png", href: "/casillas/favicon.png" }
  ]
});

const services = [
  { title: "Materia Penal", desc: "Si eres señalado por haber participado en un delito..." },
  { title: "Materia familiar", desc: "Te representamos y asesoramos ante los Juzgados..." },
  { title: "Materia Civil", desc: "Te realizamos tus contratos comerciales..." },
  { title: "Colaboración", desc: "¿Resides fuera de Nayarit y necesitas..." },
  { title: "Materia Agraria", desc: "Asesoría legal y solución de controversias..." },
  { title: "Materia Mercantil", desc: "Te brindamos certidumbre y seguridad jurídica..." },
];

const phones = ["(311) 123-4567"];      // cámbialo por el real
const whatsapp = "523111234567";       // cámbialo por el real
</script>
