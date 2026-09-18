import heroImg from "../assets/projects/arquitectura/hero.png";
import studioImg from "../assets/projects/arquitectura/studio.png";

export const archProjects = [
  {
    id: 1,
    code: "PR-001",

    title: "Casa Nogal",
    slug: "casa-nogal",

    category: "Residencial",

    location: "Tepic, Nayarit",
    area: "320 m²",
    year: "2026",
    status: "Construido",

    cover: heroImg,

    description:
      "Casa Nogal es una vivienda contemporánea desarrollada a partir de una composición horizontal que conecta los espacios interiores con patios, jardines y áreas abiertas. El proyecto busca aprovechar la iluminación natural, la ventilación cruzada y una relación constante entre arquitectura y paisaje.",

    gallery: [
      heroImg,
      studioImg,
      heroImg,
      studioImg
    ],

    plans: [
      {
        id: 1,
        title: "Planta Baja",
        image: studioImg
      }
    ],

    concepts: [
      "Iluminación natural",
      "Ventilación cruzada",
      "Patio central",
      "Integración interior-exterior"
    ]
  },

  {
    id: 2,
    code: "PR-002",

    title: "Hospital Norte",
    slug: "hospital-norte",

    category: "Salud",

    location: "Guadalajara, Jalisco",
    area: "4,200 m²",
    year: "2025",
    status: "Construido",

    cover: studioImg,

    description:
      "Hospital Norte propone una arquitectura funcional y clara orientada a optimizar recorridos, iluminación, operación médica y experiencia de pacientes y personal.",

    gallery: [
      studioImg,
      heroImg,
      studioImg
    ],

    plans: [
      {
        id: 1,
        title: "Planta General",
        image: studioImg
      }
    ],

    concepts: [
      "Circulaciones eficientes",
      "Iluminación natural",
      "Separación de flujos",
      "Flexibilidad funcional"
    ]
  },

  {
    id: 3,
    code: "PR-003",

    title: "Torre Vértice",
    slug: "torre-vertice",

    category: "Edificios",

    location: "Monterrey, Nuevo León",
    area: "8,600 m²",
    year: "2026",
    status: "En desarrollo",

    cover: heroImg,

    description:
      "Torre Vértice desarrolla un programa vertical de usos mixtos mediante una fachada modular y una organización estructural que permite flexibilidad interior.",

    gallery: [
      heroImg,
      studioImg,
      heroImg
    ],

    plans: [
      {
        id: 1,
        title: "Planta Tipo",
        image: studioImg
      }
    ],

    concepts: [
      "Modulación estructural",
      "Flexibilidad",
      "Fachada pasiva",
      "Uso mixto"
    ]
  },

  {
    id: 4,
    code: "PR-004",

    title: "Alameda Residencial",
    slug: "alameda-residencial",

    category: "Fraccionamientos",

    location: "Tepic, Nayarit",
    area: "24 ha",
    year: "2026",
    status: "En desarrollo",

    cover: studioImg,

    description:
      "Alameda Residencial plantea un desarrollo habitacional organizado alrededor de áreas verdes, recorridos peatonales y espacios comunitarios.",

    gallery: [
      studioImg,
      heroImg,
      studioImg
    ],

    plans: [
      {
        id: 1,
        title: "Plan Maestro",
        image: studioImg
      }
    ],

    concepts: [
      "Espacios comunitarios",
      "Áreas verdes",
      "Movilidad peatonal",
      "Integración urbana"
    ]
  }
];

export const archCategories = [
  "Todos",
  "Residencial",
  "Salud",
  "Edificios",
  "Fraccionamientos",
  "Comercial",
  "Interiores",
  "Remodelaciones"
];