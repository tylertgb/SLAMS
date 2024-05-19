/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./**.html', './js**.js'],
  theme: {
    screens: {
      sm: '480px',
      md: '768px',
      lg: '976px',
      xl: '1440px',
    },
    extend: {
      colors: {
        greenPrime: '#009d59',
        greenSec: '#00b45e',
        yellowPrime: '#f4b400',
        yellowSec: '#df9f20',
        textPrime: '#707070',
      },
      fontFamily: {
        primary: 'Poppins'
      },
      animation: {
        'infinite-scroll': 'infinite-scroll 25s linear infinite',
      },
      keyframes: {
        'infinite-scroll': {
            from: { transform: 'translateX(0)' },
            to: { transform: 'translateX(-100%)' },
        }
      },     
      backgroundImage: {
        sectionbg: 'url(../../img/others/lines-Illustration-00pacity.png)',
      },
    },
  },
  plugins: [],
}

