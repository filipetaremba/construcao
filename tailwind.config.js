/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./app/Views/**/*.php",
    "./public/assets/js/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        navy:    '#0D1F4E',
        gold:    '#E8A020',
        'gold-dark': '#c98a18',
        light:   '#F5F5F0',
        steel:   '#6B7A99',
        primary: '#0D1F4E',
        accent:  '#E8A020',
        'accent-dark': '#c98a18',
        secondary: '#162c6e',
      },
      fontFamily: {
        display: ['"Barlow Condensed"', 'sans-serif'],
        body:    ['"Inter"', 'sans-serif'],
      },
    }
  },
  plugins: [],
}