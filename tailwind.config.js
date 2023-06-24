/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Inter", "sans-serif"],
            },
            container: {
                center: true,
                padding: "2rem",
            },
        },
    },
    plugins: [require("@tailwindcss/typography")],
};
