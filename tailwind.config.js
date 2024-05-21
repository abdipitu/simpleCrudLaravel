/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        spce : ['Space+Grotesk', 'sans-serif'],
        poppins : ['Poppins', 'sans-serif'],
        inter : ['Inter', 'sans-serif'],
      },
    },
  },
  plugins: [require("rippleui")],
}

