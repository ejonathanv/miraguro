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
            },
            colors: {
                'miraguro-base': '#554D4A',
                'miraguro-blue': '#2CA6E7',
                'miraguro-green': '#A3DA24',
                'miraguro-green-light': '#88B463',
                'miraguro-green-dark': '#3C9518',
                'miraguro-brown': '#A19A96',
                'miraguro-red': '#DD3200',
                'miraguro-gray': '#7B7572',
                'miraguro-light': '#F7EFEB',
            },
        },
    },

    plugins: [forms],
};
