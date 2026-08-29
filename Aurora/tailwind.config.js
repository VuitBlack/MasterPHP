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
                aurora: {
                    bg: '#120E2F',
                    card: '#9B5975',
                    'card-hover': '#A86481',
                    input: '#7E3E5B',
                    dark: '#0B081E',
                    accent: '#D896B2',
                    text: '#F8E9F0',
                },
            },
        },
    },

    plugins: [forms],
};
