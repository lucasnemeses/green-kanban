const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            'green': {
                '87': '#8CC587',
                '54': '#107154',
                '38': '#3A5138',
                '75': '#748B75',
            },
            'grey': {
                'B3': '#000000B3',
                '29': '#00000029',
                'E6': '#000000E6',
                '70': '#707070',
                'E5': '#000000E5',
                '80': '#00000080',
                '4D': '#0000004D',
                'B9': '#B9C5B9',
                '0D': '#0000000D',
                '1A': '#0000001A'
            },
            'yellow': '#F7E702',
            'red': '#A31E20',
            'pink': '#D60297',
            'red': '#A31E20',
            'white': '#FFFFFF',
            'black': '#000000',
            'modal': '#00000080'
        }
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
