/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    container: {
      center: true,
      padding: '8px',
    },
    fontFamily: {
      josefin: ['Josefin Sans', 'sans-serif'],
    },
    screens: {
      'mobile': '480px',      
      'tablet': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
      '2xl': '1536px',
      '3xl': '1920px',
    },
    
    extend: {
      colors: {
        'primary': {
          '50': '#e5f5ff',
          '100': '#c6e2ff',
          '200': '#a9d3ff',
          '300': '#8ccfff',
          '400': '#74c1ff',
          '500': '#009ebf',
          '600': '#0093b9',
          '700': '#0089b4',
          '800': '#007fae',
          '900': '#0074a7',
        }
      },
      
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
    require('flowbite/plugin')
  ],
}
