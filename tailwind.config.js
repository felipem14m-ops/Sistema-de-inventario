import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                heading: ['Outfit', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                agro: {
                    50: '#f2fbf5',
                    100: '#e1f6e8',
                    200: '#c4ebd4',
                    300: '#96d8b6',
                    400: '#60bc90',
                    500: '#3ba376',
                    600: '#2b825d',
                    700: '#25684d',
                    800: '#20533f',
                    900: '#1b4435',
                    950: '#0e261d',
                },
            },
        },
    },

    plugins: [forms],
};
