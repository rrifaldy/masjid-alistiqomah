/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#14745B',
        secondary: '#D1AE4F',
        white: '#FFFFFF',
      },
    },
  },
  plugins: [],
}

