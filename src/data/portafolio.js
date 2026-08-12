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
  id: 3,
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
    title: 'Demo Nutriólogo',
    slug: 'nutriologo',
    client: 'Consultorio de nutrición',
    category: 'Salud',
    image: nutriologo,
    banner: nutriologoBanner,
    status: 'demo',

    description: 'En construcción'
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
    title: 'Demo Gym',
    slug: 'gym',
    client: 'Gimnasio',
    category: 'Deporte y fitness',
    image: gym,
    banner: gymBanner,
    status: 'demo',

    description: 'En construcción'
  }
]