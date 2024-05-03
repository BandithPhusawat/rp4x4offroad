/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors:{
        colorSystem: '#d30d0d',
      },
      backgroundImage: {
        'banner-home': "url('/icons/car_bg.jpg')",
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
],
}

