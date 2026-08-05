/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.html",
    "./src/**/*.{vue,js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {
      colors: {
        primary: "#1B2E4A",   // Azul corporativo
        accent: "#4DBFD9",    // Teal de tus lentes
        dark: "#2F3B45",      // Gris oscuro del logo
        light: "#D6D6D6",     // Gris claro
        
        gold: {
          50: "#FFF8E6", 
          200: "#F6D58B",
          400: "#D9B25F",
          500: "#C9A24D", // el bueno
          700: "#8A6A22",
        },
      },
      
     fontFamily: {
        inter: ["Inter", "sans-serif"],
        playfair: ['Playfair Display', 'serif'],
        poppins: ["Poppins", "sans-serif"],
      },

    },
  },
  plugins: [],
}
