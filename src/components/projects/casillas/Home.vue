<template>
  <main class="home">
    <Header />

    <Hero
      title="Casillas Abogados Penalistas"
      subtitle="Somos una firma de abogados con presencia en el estado de Nayarit, dedicada al litigio y asesoría en materia penal, con especialidad en el Sistema de Justicia Penal Oral, así como en la materia civil, familiar, agrario, mercantil y juicio de amparo."
      ctaText="Agenda una consulta"
      ctaHref="#contacto"
    />

    <TrustBar />

    <Services :items="services" />

    <About
      title="Nosotros"
      p1="Casillas y Asociados abogados, es una firma de abogados en el Estado de Nayarit, fundada en el año 2012, dedicado primordialmente en el litigio y asesoría penal en sus diversas instancias. Actualmente nuestra firma es encabezada por licenciado Miguel Ángel Casillas, como socio fundador."
      p2="Nuestro compromiso es brindar un servicio con calidad, excelencia y profesionalismo."
    />

    <Process />

    <Testimonials />

    <FAQ />

    <ContactCTA
      id="contacto"
      title="Contáctanos"
      note="Cuéntanos tu caso. Respuesta rápida y trato profesional."
      :phones="phones"
      :whatsapp="whatsapp"
      formspreeUrl="https://formspree.io/f/XXXXXXX"
    />

    <!-- Footer lo hacemos al final como dijiste -->
    <!-- <Footer /> -->
  </main>
</template>

<script>
import Header from "./Header.vue";
import Hero from "./Hero.vue";
import TrustBar from "./TrustBar.vue";
import Services from "./Services.vue";
import About from "./About.vue";
import Process from "./Process.vue";
import Testimonials from "./Testimonials.vue";
import FAQ from "./FAQ.vue";
import ContactCTA from "./ContactCTA.vue";
// import Footer from "./Footer.vue";

export default {
  name: "Home",
  components: {
    Header,
    Hero,
    TrustBar,
    Services,
    About,
    Process,
    Testimonials,
    FAQ,
    ContactCTA,
    // Footer
  },
  data() {
    return {
      // aquí metemos TODO el texto de servicios del cliente (de tu home viejo)
      services: [
        {
          title: "Materia Penal",
          desc:
            "Si eres señalado por haber participado en un delito o eres víctima, acércate a nosotros, brindamos asesoría especializada en materia penal en sistema acusatorio e inquisitivo. Ponemos a tu servicio el estudio de carpeta de investigación, representación legal desde la investigación inicial, etapa intermedia, juicio oral, ejecución de sanciones, juicio de amparo penal, en el Sistema Integral para Adolescentes."
        },
        {
          title: "Materia Familiar",
          desc:
            "Te representamos y asesoramos ante los Juzgados en materia familiar en el estado de Nayarit, en asuntos relacionados con pensión alimenticia, divorcios, juicios sucesorios, y todos los temas relacionados en materia familiar."
        },
        {
          title: "Materia Civil",
          desc:
            "Te realizamos tus contratos comerciales, contrato de compra-venta, contratos para renta de propiedades, además prestamos asesoría en litigios civiles, usucapión de propiedades y juicios o amparos."
        },
        {
          title: "Colaboración",
          desc:
            "¿Resides fuera de Nayarit y necesitas realizar algún trámite legal dentro del estado? Nosotros te ayudamos. Realizamos colaboración de tus asuntos legales dentro del Estado de Nayarit."
        },
        {
          title: "Materia Agraria",
          desc:
            "Asesoría legal y solución de controversias en materia agraria, representación a poblados ejidales y comunidades indígenas en defensa de sus derechos colectivos; así como a ejidatarios, posesionarios y avecindados."
        },
        {
          title: "Materia Mercantil",
          desc:
            "Te brindamos certidumbre y seguridad jurídica en el quehacer comercial, te representamos en litigio mercantil."
        }
      ],

      // ⚠️ pon aquí los datos reales del cliente (tel/whats) cuando me los pegues
      phones: ["(XXX) XXX-XXXX"],
      whatsapp: "52XXXXXXXXXX"
    };
  }
};
</script>

<style scoped>
.home {
  background: #0b1220; /* fondo premium oscuro */
  color: #eaf0ff;
}
</style>
