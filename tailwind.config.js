/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        'azul-oscuro': '#080c1c',
      }
    },
  },
  plugins: [require("daisyui")],
}

