/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**/*.html",       // All HTML files in the root directory and its subdirectories
    "./admin/**/*.html", // All HTML files in the admin directory and its subdirectories
    "./student/**/*.html", // All HTML files in the student directory and its subdirectories
    "./**/*.js",          // All JavaScript files in the root directory and its subdirectories
  ],
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
    },
  },
  plugins: [],
};

