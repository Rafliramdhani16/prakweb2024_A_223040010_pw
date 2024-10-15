/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./app/views/**/*.php", // Memperbaiki jalur untuk mencakup semua file PHP di bawah direktori views
    "./public/**/*.php",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
