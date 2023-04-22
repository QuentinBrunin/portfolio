/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './resources/js/**/*.vue',
    'node_modules/flowbite-vue/**/*.{js,jsx,ts,tsx}',
    './node_modules/flowbite/**/*.js'
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms', 'flowbite/plugin'),
  ],
}
