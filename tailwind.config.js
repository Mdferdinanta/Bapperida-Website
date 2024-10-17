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
        primary: {
          50: '#EEFAFA',
          100: '#D8F4F4',
          200: '#B2E9EA',
          300: '#8ADDDF',
          400: '#62D2D4',
          500: '#3AC6C9',
          600: '#2DA1A3',
          700: '#248183',
          800: '#1B6263',
          900: '#134243',
          950: '#0E3233',
        },
        mist: {
          50: '#F8FCFC',
          100: '#F1F9F8',
          200: '#E2F0F0',
          300: '#CBE1E1',
          400: '#94B7B8',
          500: '#648A8B',
          600: '#476869',
          700: '#335455',
          800: '#1E3A3B',
          900: '#0F262A',
          950: '#021217',
        },
      }
    },
  },
  plugins: [],
}