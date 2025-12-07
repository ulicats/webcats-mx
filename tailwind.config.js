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
      },
      fontFamily: {
        sans: ["Inter", "sans-serif"],
        title: ["Poppins", "sans-serif"],
      },
    },
  },
  plugins: [],
}
