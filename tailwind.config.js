/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    light: "rgb(116,64,242)",
                    DEFAULT: "rgb(4,4,40)",
                    dark: "rgb(2,2,20)",
                },
            },
        },
    },
    plugins: [],
};
