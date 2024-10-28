import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
const plugin = require('tailwindcss/plugin')

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views//*.blade.php',
  ],

  theme: {
    fontFamily: {
      sans: ['Plus Jakarta Sans', ...defaultTheme.fontFamily.sans],
    },
    fontSize: {
      'display': ['61px', { lineHeight: '91.5px', lineSpacing: '-0.02em' }],
      'h1': ['49px', { lineHeight: '73.5px', lineSpacing: '0.02em' }],
      'h2': ['39px', { lineHeight: '58.5px', lineSpacing: '0.02em' }],
      'h3': ['31px', { lineHeight: '37.2px', lineSpacing: '0em' }],
      'headline': ['25px', { lineHeight: '30px', lineSpacing: '0em' }],
      'subtitle': ['20px', { lineHeight: '24px', lineSpacing: '0em' }],
      'body': ['16px', { lineHeight: '19.2px', lineSpacing: '0em' }],
      'detail': ['13px', { lineHeight: '15.6px', lineSpacing: '0em' }],
      'tiny': ['10px', { lineHeight: '12px', lineSpacing: '0.4em' }],
    },
    fontWeight: {
      displayBold: '800',
      displayNormal: '500',
      displayLight: '200',
      h1Bold: '800',
      h1Normal: '500',
      h1Light: '200',
      h2Bold: '700',
      h2Normal: '400',
      h2Light: '200',
      h3Bold: '700',
      h3Normal: '400',
      h3Light: '300',
      headlineBold: '700',
      headlineNormal: '400',
      headlineLight: '300',
      subtitleBold: '700',
      subtitleNormal: '400',
      subtitleLight: '300',
      bodyBold: '700',
      bodyNormal: '400',
      bodyLight: '300',
      detailBold: '600',
      detailNormal: '400',
      detailLight: '300',
      tinyBold: '600',
      tinyNormal: '400',
      tinyLight: '300',
    },
    borderRadius: {
      'none': '0',
      '2xs': '4px',
      'xs': '8px',
      'sm': '12px',
      'md': '16px',
      'lg': '24px',
      'xl': '32px',
      '2xl': '64px',
      '3xl': '128px',
      'full': '9999px',
    },
    extend: {
      textShadow: {
        sm: '0 1px 2px var(--tw-shadow-color)',
        DEFAULT: '0 2px 4px var(--tw-shadow-color)',
        lg: '0 8px 16px var(--tw-shadow-color)',
      },
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
      },
    },
  },

  plugins: [
    forms,
    plugin(function ({ matchUtilities, theme }) {
      matchUtilities(
        {
          'text-shadow': (value) => ({
            textShadow: value,
          }),
        },
        { values: theme('textShadow') }
      )
    }),
  ],
}
