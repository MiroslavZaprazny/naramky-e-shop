/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      spacing: {
        '130': '32.5rem'
      },
      colors: {
        'dark-green': '#809A6F',
        'light-green': '#94B49F',
        'dark-brown': '#483838',
        'light-navy-blue': '#73A9AD',
        'dark-navy-blue': '#488FB1'
      }
    },
  },
  plugins: [],
}
