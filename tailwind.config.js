import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        // "./src/**/*.{html,js}"
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                lavender: '#347dc6', 
                light_blue: '#F6F8FD'
              },
        },
    },
    safelist: [
        // BACKGROUND SOFT
        'bg-blue-50',
        'bg-green-50',
        'bg-yellow-50',
        'bg-orange-50',
        'bg-red-50',
        'bg-gray-50',
        'bg-indigo-50',
        'bg-purple-50',

        // FONT COLORS (sesuai yg kamu pakai di JS)
        'text-blue-500',
        'text-green-500',
        'text-yellow-500',
        'text-yellow-400',
        'text-orange-500',
        'text-purple-500',
        'text-indigo-500',
        'text-red-500',
        'text-gray-500',
    ],
    plugins: [],
};