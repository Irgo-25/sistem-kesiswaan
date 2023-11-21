/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {

        extend: {
            fontFamily:{
                'Lexend': ['Lexend'],
            },
            fontWeight:{
                'Lexend1' : 100,
                'Lexend4' : 400
            }
        },
    },
    plugins: ["flowbite/plugin"],
};
