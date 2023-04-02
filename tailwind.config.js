/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {    
      fontFamily: {
      'font-1': ['"Cedarville Cursive"', 'cursive'],
      'font-2': ['"Kaushan Script"', 'cursive'],   
      },
    },
  },
  plugins: [
    require('@tailwindcss/aspect-ratio'),
  ],
}
