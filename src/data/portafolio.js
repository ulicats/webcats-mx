import auralis from '@/assets/portafolio/universo-auralis.png'
import auralisBanner from '@/assets/portafolio/auralis-banner.png'
import casillas from '@/assets/portafolio/casillas.webp'
import ale from '@/assets/portafolio/derma.webp'
import erik from '@/assets/portafolio/erik.webp'
import limalum from '@/assets/portafolio/limalum.webp'
import niticolor from '@/assets/portafolio/niticolor.webp'
import nutricion from '@/assets/portafolio/nutricion.webp'
import wlcapital from '@/assets/portafolio/wlcapital.webp'
import arce from '@/assets/portafolio/arce.jpg'
import arceBanner from '@/assets/portafolio/arce-banner.png'
import bear from '@/assets/portafolio/bear.webp'

export const portafolio = [
  {
    id: 1,
    title: 'Universo Auralis',
    slug: 'universo-auralis',
    client: 'Novela de ciencia ficción',
    category: 'Editorial · Ciencia ficción',
    image: auralis,
    banner: auralisBanner,

    description:
      'Diseño y desarrollo del sitio web oficial de Universo Auralis, una novela de ciencia ficción presentada mediante una experiencia digital inmersiva. La plataforma permite conocer la historia, explorar personajes y planetas, leer capítulos gratuitos y acceder a la compra del libro.',

    technologies: [
      'Vue 3',
      'Vite',
      'JavaScript',
      'CSS',
      'Responsive',
      'SEO',
      'Open Graph',
      'Vercel'
    ],

    features: [
      'Diseño web completamente personalizado',
      'Presentación interactiva de personajes',
      'Sección de planetas y escenarios',
      'Sistema de capítulos gratuitos',
      'Galería de lectores y comunidad',
      'Integración con Amazon',
      'Optimización para celulares y tablets',
      'Configuración SEO y Open Graph'
    ],

    url: 'https://universoauralis.com',
    featured: true
  },

  {
    id: 2,
    title: 'Casillas Abogados Penalistas',
    slug: 'casillasabogados',
    client: 'Despacho jurídico',
    category: 'Legal',
    image: casillas,

    description:
      'Página informativa para un despacho de abogados penalistas, mostrando especialidades, experiencia y medios de contacto para solicitar asesoría legal.'
  },

  {
    id: 3,
    title: 'Dermatóloga Ale Romero',
    slug: 'dermatologia',
    client: 'Consultorio dermatológico',
    category: 'Salud',
    image: ale,

    description:
      'Plataforma informativa para un consultorio dermatológico, con secciones de servicios, tratamientos, galería de resultados y medios de contacto para agendar citas.'
  },

  {
    id: 4,
    title: 'Cirujano Oncólogo - Dr. Erik',
    slug: 'oncologo',
    client: 'Consultorio médico',
    category: 'Salud',
    image: erik,

    description:
      'Sitio profesional para un cirujano oncólogo, mostrando especialidades, trayectoria médica, información de consulta y formulario de contacto.'
  },

  {
    id: 5,
    title: 'Limalum - Vidrio y Aluminio',
    slug: 'limalum',
    client: 'Empresa de vidrio y aluminio',
    category: 'Industria',
    image: limalum,

    description:
      'Página corporativa para una empresa de vidrio y aluminio, mostrando servicios, proyectos realizados y medios de contacto para solicitar cotizaciones.'
  },

  {
    id: 6,
    title: 'NitiColor - Impresión',
    slug: 'niticolor',
    client: 'Servicios de impresión',
    category: 'Servicios',
    image: niticolor,

    description:
      'Sitio web para una empresa especializada en impresión y soluciones gráficas, presentando sus servicios, productos, trabajos realizados y medios de contacto para cotizaciones.'
  },

  {
    id: 7,
    title: 'Nutrióloga Georgina',
    slug: 'nutricion',
    client: 'Consultorio de nutrición',
    category: 'Salud',
    image: nutricion,

    description:
      'Plataforma informativa diseñada para una especialista en nutrición, mostrando servicios, planes de consulta, enfoque profesional y contenido para sus pacientes.'
  },

  {
    id: 8,
    title: 'White Lotus Capital',
    slug: 'wlc',
    client: 'Firma financiera',
    category: 'Finanzas',
    image: wlcapital,

    description:
      'Página corporativa para una firma financiera, destacando servicios de crédito, soluciones para empresas y atención personalizada para instituciones financieras.',
  },

  {
  id: 9,
  title: 'Arce Cabañas Mazamitla',
  slug: 'arce',
  client: 'Hospedaje turístico',
  category: 'Turismo',

  // Imagen que aparece en el grid del portafolio
  image: arce,

  // Imagen horizontal que aparece al abrir la modal
  banner: arceBanner,

  description:
    'Diseño y desarrollo de un sitio web para Arce Cabañas Mazamitla, enfocado en presentar el hospedaje, mostrar las instalaciones y facilitar solicitudes de reservación. El proyecto incluye galería fotográfica, información detallada de las cabañas, tarifas, formulario de disponibilidad, integración con WhatsApp, ubicación en Google Maps y reseñas reales de Google.',

  technologies: [
    'Vue 3',
    'Vite',
    'JavaScript',
    'CSS',
    'Responsive',
    'Google Places API',
    'Google Maps',
    'WhatsApp'
  ],

  features: [
    'Diseño web personalizado',
    'Diseño responsive',
    'Galería de 26 fotografías con lightbox',
    'Integración de reseñas reales de Google',
    'Mapa interactivo de Google',
    'Formulario de solicitud de disponibilidad',
    'Generación automática de mensaje para WhatsApp',
    'Información detallada de cabañas y tarifas',
    'Preguntas frecuentes',
    'Optimización para dispositivos móviles'
  ]
},

  {
    id: 10,
    title: 'Bear – Torneo de Calistenia',
    slug: 'bear',
    client: 'Evento deportivo',
    category: 'Deporte',
    image: bear,

    description:
      'Página promocional creada para un torneo de calistenia, con un diseño visual dinámico orientado a captar participantes y promover la marca del gimnasio.'
  }
]