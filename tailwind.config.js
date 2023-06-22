const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: "class",
    content: [
        // './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        // './vendor/laravel/jetstream/**/*.blade.php',
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: {
                'footer-texture': "url('/9.jpg')",
                'whyus-texture': "url('/8.jpg')",
                'hero-texture': "url('/herovideo.mp4')",
              }
        },
    },

    plugins: [],
};
