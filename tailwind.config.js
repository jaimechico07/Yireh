/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./views/*.{html,php}",
    "./views/**/*.{html,php}",
    "./views/**/**/*.{html,php}",
    "./components/*.{html,php}",
    "*.{html,php}",
  ],
  theme: {
    fontFamily: {
      "future-round": ["Futura Round", "sans-serif"],
    },
    extend: {
      fontSize: {},
      backgroundImage: {
        "primary-green-100": "rgba(31, 177, 9, 0.8)",
        "home-100": "url('/public/img/home/hero/personalized-mugs.png')",
        "about-100": "url('/public/img/about-us/hero/home-about-us.svg')",
        "products-100": "url('/public/img/products/hero-products.svg')",
      },
      colors: {
        "primary-100": "#EFFAED",
        "primary-200": "#4ACA03",
        "primary-300": "#1FB109",
        "primary-400": "#ADCF23;",
        "primary-500": "#BEC0BF",
        "primary-600": "#7B7D7C",
        "primary-700": "#515151",
      },
      // NO ELIMINAR
      container: {
        center: true,
        padding: {
          DEFAULT: "1rem",
          md: "4rem",
        },
      },
      borderRadius: {},
    },
  },
  plugins: [],
};
