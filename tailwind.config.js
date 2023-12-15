module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                Lexend: ["Lexend"],
            },
            colors: {
                primary: "#FD8D14",
                second: "#18495f",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
