/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**.html", "./js**.js"],
  theme: {
    screens: {
      sm: "480px",
      md: "768px",
      lg: "976px",
      xl: "1440px",
    },
    extend: {
      colors: {
        greenPrime: "#009d59",
      },
      fontFamily: {
        primary: "Poppins",
      },
      animation: {
        "infinite-scroll": "infinite-scroll 25s linear infinite",
      },
      backgroundImage: {
        sectionbg: "url(../../img/others/lines-Illustration-00pacity.png)",
      },
    },
  },
  plugins: [],
};
