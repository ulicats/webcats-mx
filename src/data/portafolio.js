import auralis from '@/assets/portafolio/universo-auralis.png'
import auralisBanner from '@/assets/portafolio/auralis-banner.png'

import hospedajes from '@/assets/portafolio/hospedajes.png'
import hospedajesBanner from '@/assets/portafolio/hospedajes-banner.png'

import catalogo from '@/assets/portafolio/catalogo.png'
import catalogoBanner from '@/assets/portafolio/catalogo-banner.png'

import aluminio from '@/assets/portafolio/aluminio.png'
import aluminioBanner from '@/assets/portafolio/aluminio-banner.png'

import despacho from '@/assets/portafolio/despacho.png'
import despachoBanner from '@/assets/portafolio/despacho-banner.png'

import cosmetologia from '@/assets/portafolio/cosmetologia.png'
import cosmetologiaBanner from '@/assets/portafolio/cosmetologia-banner.png'

import dermatologia from '@/assets/portafolio/dermatologia.png'
import dermatologiaBanner from '@/assets/portafolio/dermatologia-banner.png'

import firma from '@/assets/portafolio/firma.png'
import firmaBanner from '@/assets/portafolio/firma-banner.png'

import gym from '@/assets/portafolio/gym.png'
import gymBanner from '@/assets/portafolio/gym-banner.png'

import nutriologo from '@/assets/portafolio/nutriologo.png'
import nutriologoBanner from '@/assets/portafolio/nutriologo-banner.png'

import oncologo from '@/assets/portafolio/oncologo.png'
import oncologoBanner from '@/assets/portafolio/oncologo-banner.png'

import casillas from '@/assets/projects/casillas/1.jpg'
import casillas1 from '@/assets/projects/casillas/1.jpg'
import casillas2 from '@/assets/projects/casillas/2.jpg'
import casillas3 from '@/assets/projects/casillas/3.jpg'
import casillas4 from '@/assets/projects/casillas/4.jpg'
import casillas5 from '@/assets/projects/casillas/5.jpg'
import casillasBanner from '@/assets/projects/casillas/1.jpg'

import limalum from '@/assets/projects/lima/1.jpg'
import lima1 from '@/assets/projects/lima/1.jpg'
import lima2 from '@/assets/projects/lima/2.jpg'
import lima3 from '@/assets/projects/lima/3.jpg'
import lima4 from '@/assets/projects/lima/4.jpg'
import lima5 from '@/assets/projects/lima/5.jpg'
import lima6 from '@/assets/projects/lima/6.jpg'
import lima7 from '@/assets/projects/lima/7.jpg'
import lima8 from '@/assets/projects/lima/8.jpg'
import limalumBanner from '@/assets/projects/lima/1.jpg'


export const portafolio = [
  {
    id: 1,
    title: 'Universo Auralis',
    slug: 'universo-auralis',
    client: 'Novela de ciencia ficción',
    category: 'Editorial · Ciencia ficción',
    image: auralis,
    banner: auralisBanner,
    status: 'production',

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
    title: 'Demo Hospedajes',
    slug: 'hospedajes',
    client: 'Hospedaje turístico',
    category: 'Turismo',
    image: hospedajes,
    banner: hospedajesBanner,
    status: 'demo',

    description:
      'Diseño y desarrollo de un sitio web demo para hospedaje, enfocado en presentar el hospedaje, mostrar las instalaciones y facilitar solicitudes de reservación. El proyecto incluye galería fotográfica, información detallada del local, casa, departamento o cabaña, tarifas, formulario de disponibilidad, integración con WhatsApp, ubicación en Google Maps y reseñas de Google.',

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
      'Galería de fotografías con lightbox',
      'Integración de reseñas de Google',
      'Mapa interactivo de Google',
      'Formulario de solicitud de disponibilidad',
      'Generación automática de mensaje para WhatsApp',
      'Información detallada de espacios y tarifas',
      'Preguntas frecuentes',
      'Optimización para dispositivos móviles'
    ],

    featured: true
  },

 {
  id: 3,
  title: 'Demo Catálogo de Productos',
  slug: 'catalogo-productos',
  client: 'Catálogo comercial',
  category: 'Comercio · Productos',
  status: 'demo',

  // Imagen cuadrada que aparece en el grid del portafolio
  image: catalogo,

  // Banner horizontal que aparece al abrir la modal
  banner: catalogoBanner,

  description:
    'En construcción',

  technologies: [
    'Vue 3',
    'Vite',
    'JavaScript',
    'CSS',
    'Responsive'
  ],

  features: [
    'Catálogo visual de productos',
    'Organización por categorías',
    'Vista detallada de productos',
    'Diseño adaptable a diferentes tipos de negocio',
    'Interfaz responsive para celulares y tablets',
    'Integración con WhatsApp para solicitar información o cotizaciones'
  ],

  featured: false
  },

  {
    id: 4,
    title: 'Demo Dermatología',
    slug: 'dermatologia',
    client: 'Consultorio dermatológico',
    category: 'Salud',
    image: dermatologia,
    banner: dermatologiaBanner,
    status: 'demo',

    description: 'En construcción'
  },

  {
    id: 5,
    title: 'Demo Oncología',
    slug: 'oncologia',
    client: 'Consultorio de oncología',
    category: 'Salud',
    image: oncologo,
    banner: oncologoBanner,
    status: 'demo',

    description: 'En construcción'
  },

{
  id: 6,
  title: 'Demo Vidrio y Aluminio',
  slug: 'vidriosaluminio',
  client: 'Demo comercial',
  category: 'Industria',
  image: aluminio,
  banner: aluminioBanner,
  status: 'demo',

  description:
    'Demo web para empresas de vidrio y aluminio, diseñado con una estética arquitectónica inspirada en fachadas, ventanales y estructuras de cristal. Incluye catálogo de materiales, proceso de trabajo, galería de proyectos por categorías, cobertura de servicio, preguntas frecuentes y cotizador con envío directo a WhatsApp.',

  technologies: [
    'Vue 3',
    'Vite',
    'JavaScript',
    'CSS',
    'Responsive Design'
  ],

  features: [
    'Diseño arquitectónico inspirado en vidrio y aluminio',
    'Galería dinámica de proyectos',
    'Filtrado de trabajos por categorías',
    'Lightbox para visualizar proyectos',
    'Catálogo interactivo de materiales y acabados',
    'Proceso de trabajo',
    'Cobertura de servicio',
    'Cotizador interactivo',
    'Solicitud de cotización por WhatsApp',
    'Preguntas frecuentes',
    'Diseño responsive'
  ]
},

  {
    id: 7,
    title: 'Demo Cosmetología',
    slug: 'cosmetologia',
    client: 'Centro de cosmetología',
    category: 'Belleza',
    image: cosmetologia,
    banner: cosmetologiaBanner,
    status: 'demo',

    description: 'En construcción'
  },

  {
    id: 8,
    title: 'Demo Nutrióloga',
    slug: 'nutriologa',
    client: 'Consultorio de nutrición',
    category: 'Salud',
    image: nutriologo,
    banner: nutriologoBanner,
    status: 'demo',

    description:
      'Demo web profesional para nutriólogas y consultorios de nutrición, diseñado con una estética limpia, cálida y enfocada en bienestar. Incluye presentación profesional, servicios nutricionales, metodología de consulta, resultados, testimonios, preguntas frecuentes y sistema de contacto para facilitar la captación de nuevos pacientes.',

    technologies: [
      'Vue 3',
      'Vite',
      'JavaScript',
      'CSS',
      'Responsive Design'
    ],

    features: [
      'Diseño profesional orientado a nutrición y bienestar',
      'Presentación de la especialista',
      'Sección de servicios nutricionales',
      'Control de peso',
      'Nutrición deportiva',
      'Nutrición clínica',
      'Consultas en línea',
      'Proceso de atención paso a paso',
      'Sección de resultados y experiencia',
      'Testimonios de pacientes',
      'Preguntas frecuentes',
      'Sección para agendar consulta',
      'Contacto directo por WhatsApp',
      'Diseño responsive'
    ]
  },

  {
    id: 9,
    title: 'Demo Firma Financiera',
    slug: 'firma-financiera',
    client: 'Firma financiera',
    category: 'Finanzas',
    image: firma,
    banner: firmaBanner,
    status: 'demo',

    description: 'En construcción'
  },

  {
    id: 10,
    title: 'Demo Despacho Jurídico',
    slug: 'despacho-juridico',
    client: 'Despacho jurídico',
    category: 'Legal',
    image: despacho,
    banner: despachoBanner,
    status: 'demo',

    description: 'En construcción'
  },

  {
    id: 11,
    title: "Demo Gym",
    slug: "gym",
    client: "Iron Pulse Performance Club",
    category: "Deporte y Fitness",
    image: gym,
    banner: gymBanner,
    status: "demo",
    description: "Sitio web conceptual desarrollado para un gimnasio de alto rendimiento. El proyecto presenta una identidad visual deportiva y moderna, enfocada en mostrar instalaciones, beneficios, entrenadores, membresías y canales de contacto de forma clara y atractiva.",
    features: [
      "Diseño deportivo y responsive",
      "Hero de alto impacto",
      "Sección de beneficios del gimnasio",
      "Presentación de instalaciones y áreas de entrenamiento",
      "Galería interactiva de instalaciones",
      "Lightbox para visualizar fotografías",
      "Presentación de entrenadores y especialidades",
      "Planes y membresías",
      "Preguntas frecuentes con acordeón",
      "Llamadas a la acción para captar nuevos miembros",
      "Ubicación integrada con Google Maps",
      "Botón flotante de WhatsApp",
      "Navegación interna por secciones"
    ],
    "technologies": [
      "Vue.js",
      "Vite",
      "JavaScript",
      "HTML5",
      "CSS3",
      "Responsive Design"
    ]
  },

  {
  id: 12,
  title: 'Casillas Abogados Penalistas',
  slug: 'casillas-abogados-penalistas',
  client: 'Despacho jurídico',
  category: 'Legal · Tepic, Nayarit',
  image: casillas,
  banner: casillasBanner,
  status: 'local',

  location: 'Tepic, Nayarit',

  description:
    'Proyecto de desarrollo de página web en Tepic, Nayarit realizado para Casillas Abogados Penalistas, despacho especializado en servicios jurídicos y derecho penal. El sitio fue diseñado para presentar los servicios profesionales del despacho, sus áreas de atención y facilitar el contacto con potenciales clientes mediante una experiencia clara, profesional y adaptable a dispositivos móviles. Este proyecto forma parte de los trabajos de desarrollo web realizados por Webcats para negocios y profesionistas en Tepic, Nayarit.',

  technologies: [
    'Diseño web',
    'Responsive Design',
    'JavaScript',
    'CSS',
    'WhatsApp',
    'SEO'
  ],

  features: [
    'Diseño web orientado a servicios jurídicos',
    'Presentación de áreas de práctica',
    'Información del despacho',
    'Diseño responsive',
    'Integración de medios de contacto',
    'Contacto mediante WhatsApp',
    'Estructura optimizada para navegación',
    'Proyecto desarrollado para cliente en Tepic, Nayarit'
  ],

  gallery: [
  casillas1,
  casillas2,
  casillas3,
  casillas4,
  casillas5,
],

  seo: {
    title:
      'Casillas Abogados Penalistas | Desarrollo Web en Tepic, Nayarit | Webcats',

    description:
      'Proyecto de desarrollo de página web realizado por Webcats para Casillas Abogados Penalistas en Tepic, Nayarit. Diseño web profesional para despacho jurídico.',

    keywords: [
      'páginas web en Tepic Nayarit',
      'desarrollo web Tepic',
      'diseño web Tepic',
      'páginas web Nayarit',
      'desarrollo de páginas web para abogados',
      'Webcats Tepic'
    ]
  },

  featured: false
},

{
  id: 13,
  title: 'Limalum Vidrios y Aluminios',
  slug: 'limalum-vidrios-aluminios',
  client: 'Empresa de vidrios y aluminio',
  category: 'Industria · Nayarit',
  image: limalum,
  banner: limalumBanner,
  status: 'local',

  location: 'Nayarit',

  description:
    'Proyecto de desarrollo de página web en Nayarit realizado para Limalum, empresa dedicada a soluciones de vidrio y aluminio. El sitio fue desarrollado para presentar sus servicios, trabajos realizados, materiales y acabados mediante una experiencia visual enfocada en facilitar la consulta de proyectos y la solicitud de cotizaciones. Este proyecto forma parte de los trabajos de diseño y desarrollo web realizados por Webcats para empresas de Nayarit.',

  technologies: [
    'Diseño web',
    'JavaScript',
    'CSS',
    'Responsive Design',
    'WhatsApp'
  ],

  features: [
    'Diseño web orientado a vidrio y aluminio',
    'Galería de trabajos realizados',
    'Presentación de servicios',
    'Catálogo de materiales y acabados',
    'Diseño responsive',
    'Solicitud de cotización',
    'Integración con WhatsApp',
    'Proyecto desarrollado para empresa de Nayarit'
  ],

  gallery: [
  lima1,
  lima2,
  lima3,
  lima4,
  lima5,
  lima6,
  lima7,
  lima8,
],

  seo: {
    title:
      'Limalum | Desarrollo de Página Web en Nayarit | Webcats',

    description:
      'Proyecto de desarrollo de página web realizado por Webcats para Limalum, empresa de vidrios y aluminio en Nayarit. Conoce el diseño y características del proyecto.',

    keywords: [
      'páginas web en Nayarit',
      'desarrollo web Nayarit',
      'diseño web Nayarit',
      'páginas web para empresas en Nayarit',
      'desarrollo web para vidrierías',
      'Webcats Nayarit'
    ]
  },

  featured: false
  }
]