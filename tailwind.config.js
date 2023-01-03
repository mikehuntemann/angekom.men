const defaultTheme = require('tailwindcss/defaultTheme')
module.exports = {
  content: [
    "./site/templates/*.php",
    "./site/snippets/*.php",
    "./site/tailwind/*.css",
  ],
  theme: {
    extend: {
      letterSpacing: {
        "ex-widest": ".25em",
      },
      fontSize: {
        "ex-3xl": "1.9em",
      },
      backgroundColor: {
        "ex-light": "#D7D8D6",
        "ex-dark": "#2C2F39",
        "ex-yellow": "#FFE613",
        "ex-green": "#3EA446",
        "ex-black": "#1A1919",
      },
      colors: {
        "ex-light": "#D7D8D6",
        "ex-dark": "#2C2F39",
        "ex-yellow": "#FFE613",
        "ex-green": "#3EA446",
        "ex-black": "#1A1919",
      },
      fontFamily: {
        "examen-text-regular": "Arial Narrow",
        "examen-headline-regular": "Bloque Mono Regular",
        "examen-headline-bold": "Bloque Mono Bold",
      },
    },
  },
  variants: {},
  plugins: [
    require('@tailwindcss/aspect-ratio'),
  ],
};
