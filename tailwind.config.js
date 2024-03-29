/** @type {import('tailwindcss').Config} */
module.exports = {
  mode: 'jit',
  darkMode: 'class',
    content: [
        './dist/*.html',
        './*.{html,js,php}',
        "./public/*.php",
        "./node_modules/flowbite/**/*.js",
        './storage/views/**/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.js",
    ],
    theme: {
      extend: {
        colors: {
          'primary': '#5850ec',
          'primary-light': '#00bfff'
        }
      },
    },
    variants: {
      extend: {},
    },
    plugins: [
      require('@tailwindcss/typography'),
      require('@tailwindcss/forms'),
      require('flowbite/plugin')
    ],
  }
  