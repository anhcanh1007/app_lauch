/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            backgroundImage: {
                "back-header": "url('/public/images/backheader2.jpg')",
            },
            fontFamily: {
                'lato': ['Lato', 'san'],
            }
        },
    },
    plugins: [],
};
