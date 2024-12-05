/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    'node_modules/preline/dist/*.js',
  ],
  theme: {
    extend: {
        fontFamily: {
            roboto:["Roboto Condensed", "sans-serif"],
            asul:["Asul", "sans-serif"],
            merri:["Merriweather", "sans-serif"],
            lex: ["Lexend", "sans-serif"]

        },
        animation: {
            marquee: 'marquee 25s linear infinite',
        },
        keyframes: {
            marquee: {
                '0%': { transform: 'translateX(0%)' },
                '100%': { transform: 'translateX(-100%)' },
            },
        },
        screens: {
            'print': { 'raw': 'print' },
        },
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            'tangerine': '#FF613C',
        },
    },
  },
  plugins: [
    require('preline/plugin'),

  ],
}

