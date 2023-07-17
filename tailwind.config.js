/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            colors: {
                'myBlue-700': '#145378',
                'myRed-800': '#B23A48'
            }
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
}
