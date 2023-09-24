/** @type {import('tailwindcss').Config} */
import defaultTheme from 'tailwindcss/defaultTheme';
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        screens: {
            'sm': '576px',
            'md': '768px',
            'lg': '992px',
            'xl': '1200px',
            '2xl': '1400px',
        },
        extend: {
            fontFamily: {
                primary: ['Fredoka', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: '#FF9B24',
                secondary: '#00BBAE',
                dark: '#1b1b1b',
                danger: '#FF577B',
                grey: '#424242',
            },
        },
    },
    plugins: [],
}
