/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./index.php'] ,
  theme: {
    extend: {},
  },
  plugins: [require("daisyui")],
  daisyui: {
    daisyui: {
      themes: ["light", "dark", "cupcake"],
    },
  }
}



