import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './node_modules/flowbite/**/*.js'
    ],
    theme: {
        extend: {
            colors: {
                'my-red-600': '#DA535B',
                'my-orange-600': '#FF6640',
                'my-blue-400': '#1497d7',
                'my-blue-600': '#3F49AC',
                'my-yellow-400': '#FEDD3F',
                'my-beige-300': '#FFDFCB',
            }
        },
    },
    plugins: [
        require('flowbite/plugin')
    ]
};
