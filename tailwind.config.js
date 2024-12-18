import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

const plugin = require('tailwindcss/plugin')

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    darkMode: 'class',

    theme: {
        fontFamily: {
            serif: ['Playfair Display', ...defaultTheme.fontFamily.serif],
            display: ['Lovelo', ...defaultTheme.fontFamily.sans],
            sans: ['Plus Jakarta Sans', ...defaultTheme.fontFamily.sans],
        },
        fontSize: {
            'display': ['61px', { lineHeight: '91.5px' }],
            'h1': ['49px', { lineHeight: '73.5px' }],
            'h2': ['39px', { lineHeight: '58.5px' }],
            'h3': ['31px', { lineHeight: '37.2px' }],
            'headline': ['25px', { lineHeight: '30px' }],
            'subtitle': ['20px', { lineHeight: '24px' }],
            'body': ['16px', { lineHeight: '19.2px' }],
            'detail': ['13px', { lineHeight: '15.6px' }],
            'tiny': ['10px', { lineHeight: '12px' }],
        },
        fontWeight: {
            thin: '200',
            light: '300',
            normal: '400',
            medium: '500',
            semibold: '600',
            bold: '700',
            black: '800'
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
            'full': '9999px'
        },
        extend: {
            textShadow: {
                sm: '0 1px 2px var(--tw-shadow-color)',
                DEFAULT: '0 2px 4px var(--tw-shadow-color)',
                lg: '0 8px 16px var(--tw-shadow-color)',
            },
            colors: {
                primary: {
                    50: '#f0f9ff',
                    100: '#e0f2fe',
                    200: '#bae6fd',
                    300: '#7dd3fc',
                    400: '#38bdf8',
                    500: '#0ea5e9',
                    600: '#0284c7',
                    700: '#0369a1',
                    800: '#075985',
                    900: '#0c4a6e',
                    950: '#082f49',
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
        require('@tailwindcss/forms'),
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
};
