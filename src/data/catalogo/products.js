export const products = [
  {
    id: 1,
    slug: 'bolsa-siena',
    name: 'Bolsa Siena',
    category: 'bolsas',
    price: 749,

    image:
      'https://images.unsplash.com/photo-1584917865442-de89df76afd3?auto=format&fit=crop&w=900&q=85',

    images: [],

    colors: [
      'Rojo',
      'Beige',
      'Negro'
    ],

    sizes: [],

    isNew: true,
    bestseller: true,
    featured: true,
    available: true,

    wholesale: {
      enabled: true,
      tiers: [
        {
          min: 6,
          price: 679
        },
        {
          min: 12,
          price: 599
        }
      ]
    }
  },

  {
    id: 2,
    slug: 'tenis-essential',
    name: 'Tenis Essential',
    category: 'calzado',
    price: 899,

    image:
      'https://images.unsplash.com/photo-1549298916-b41d501d3772?auto=format&fit=crop&w=900&q=85',

    images: [],

    colors: [
      'Café',
      'Blanco',
      'Negro'
    ],

    sizes: [
      '23',
      '24',
      '25',
      '26',
      '27'
    ],

    isNew: true,
    bestseller: false,
    featured: true,
    available: true,

    wholesale: {
      enabled: true,
      tiers: [
        {
          min: 6,
          price: 829
        },
        {
          min: 12,
          price: 769
        }
      ]
    }
  },

  {
    id: 3,
    slug: 'lentes-aura',
    name: 'Lentes Aura',
    category: 'accesorios',
    price: 399,

    image:
      'https://images.unsplash.com/photo-1511499767150-a48a237f0083?auto=format&fit=crop&w=900&q=85',

    images: [],

    colors: [
      'Negro',
      'Dorado'
    ],

    sizes: [],

    isNew: true,
    bestseller: true,
    featured: true,
    available: true,

    wholesale: {
      enabled: true,
      tiers: [
        {
          min: 6,
          price: 349
        },
        {
          min: 12,
          price: 299
        }
      ]
    }
  },

  {
    id: 4,
    slug: 'bolsa-rose',
    name: 'Bolsa Rose',
    category: 'bolsas',
    price: 649,

    image:
      'https://images.unsplash.com/photo-1566150905458-1bf1fc113f0d?auto=format&fit=crop&w=900&q=85',

    images: [],

    colors: [
      'Rosa',
      'Beige'
    ],

    sizes: [],

    isNew: false,
    bestseller: true,
    featured: false,
    available: true,

    wholesale: {
      enabled: true,
      tiers: [
        {
          min: 6,
          price: 589
        },
        {
          min: 12,
          price: 529
        }
      ]
    }
  },

  {
    id: 5,
    slug: 'classic-watch',
    name: 'Classic Watch',
    category: 'accesorios',
    price: 1099,

    image:
      'https://images.unsplash.com/photo-1524805444758-089113d48a6d?auto=format&fit=crop&w=900&q=85',

    images: [],

    colors: [
      'Café',
      'Negro'
    ],

    sizes: [],

    isNew: false,
    bestseller: true,
    featured: true,
    available: true,

    wholesale: {
      enabled: false,
      tiers: []
    }
  },

  {
    id: 6,
    slug: 'soft-blazer',
    name: 'Soft Blazer',
    category: 'ropa',
    price: 999,

    image:
      'https://images.unsplash.com/photo-1496747611176-843222e1e57c?auto=format&fit=crop&w=900&q=85',

    images: [],

    colors: [
      'Beige',
      'Rosa'
    ],

    sizes: [
      'CH',
      'M',
      'G'
    ],

    isNew: true,
    bestseller: false,
    featured: true,
    available: true,

    wholesale: {
      enabled: true,
      tiers: [
        {
          min: 6,
          price: 899
        },
        {
          min: 12,
          price: 829
        }
      ]
    }
  },

  {
    id: 7,
    slug: 'tenis-nude',
    name: 'Tenis Nude',
    category: 'calzado',
    price: 849,

    image:
      'https://images.unsplash.com/photo-1542291026-7eec264c27ff?auto=format&fit=crop&w=900&q=85',

    images: [],

    colors: [
      'Rojo',
      'Negro'
    ],

    sizes: [
      '23',
      '24',
      '25',
      '26',
      '27'
    ],

    isNew: false,
    bestseller: true,
    featured: false,
    available: true,

    wholesale: {
      enabled: true,
      tiers: [
        {
          min: 6,
          price: 779
        },
        {
          min: 12,
          price: 719
        }
      ]
    }
  },

  {
    id: 8,
    slug: 'bolsa-mini',
    name: 'Bolsa Mini',
    category: 'bolsas',
    price: 599,

    image:
      'https://images.unsplash.com/photo-1584917865442-de89df76afd3?auto=format&fit=crop&w=900&q=85',

    images: [],

    colors: [
      'Rojo',
      'Negro'
    ],

    sizes: [],

    isNew: true,
    bestseller: true,
    featured: false,
    available: true,

    wholesale: {
      enabled: true,
      tiers: [
        {
          min: 6,
          price: 539
        },
        {
          min: 12,
          price: 479
        }
      ]
    }
  },

  {
    id: 9,
    slug: 'rose-beauty',
    name: 'Rose Beauty',
    category: 'belleza',
    price: 459,

    image:
      'https://images.unsplash.com/photo-1596462502278-27bfdc403348?auto=format&fit=crop&w=900&q=85',

    images: [],

    colors: [],

    sizes: [],

    isNew: true,
    bestseller: false,
    featured: true,
    available: true,

    wholesale: {
      enabled: true,
      tiers: [
        {
          min: 6,
          price: 419
        },
        {
          min: 12,
          price: 379
        }
      ]
    }
  },

  {
    id: 10,
    slug: 'essential-top',
    name: 'Essential Top',
    category: 'ropa',
    price: 449,

    image:
      'https://images.unsplash.com/photo-1529139574466-a303027c1d8b?auto=format&fit=crop&w=900&q=85',

    images: [],

    colors: [
      'Blanco',
      'Rosa',
      'Negro'
    ],

    sizes: [
      'CH',
      'M',
      'G'
    ],

    isNew: false,
    bestseller: false,
    featured: false,
    available: true,

    wholesale: {
      enabled: true,
      tiers: [
        {
          min: 6,
          price: 399
        },
        {
          min: 12,
          price: 349
        }
      ]
    }
  },

  {
    id: 11,
    slug: 'golden-details',
    name: 'Golden Details',
    category: 'accesorios',
    price: 329,

    image:
      'https://images.unsplash.com/photo-1515562141207-7a88fb7ce338?auto=format&fit=crop&w=900&q=85',

    images: [],

    colors: [
      'Dorado'
    ],

    sizes: [],

    isNew: false,
    bestseller: false,
    featured: false,
    available: true,

    wholesale: {
      enabled: true,
      tiers: [
        {
          min: 6,
          price: 289
        },
        {
          min: 12,
          price: 249
        }
      ]
    }
  },

  {
    id: 12,
    slug: 'everyday-look',
    name: 'Everyday Look',
    category: 'ropa',
    price: 799,

    image:
      'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?auto=format&fit=crop&w=900&q=85',

    images: [],

    colors: [
      'Amarillo',
      'Negro'
    ],

    sizes: [
      'CH',
      'M',
      'G'
    ],

    isNew: true,
    bestseller: false,
    featured: true,
    available: true,

    wholesale: {
      enabled: false,
      tiers: []
    }
  }
]