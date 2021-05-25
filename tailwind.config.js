const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    darkMode: 'media',
    // mode: "jit",

    purge: [
        './resources/views/**/*.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            zIndex: {
                '-1': '-1',
                '-10': '-10',
                '-20': '-20',
                '-30': '-30',
                '-40': '-40',
                '-50': '-50',
                '-60': '-60',
                '-70': '-70',
                '-80': '-80',
                '-90': '-90',
                '-100': '-100',
                '100': '100',
                '200': '200',
                '300': '300',
                '400': '400',
                '500': '500',
                '600': '600',
                '700': '700',
                '800': '800',
                '900': '900',
                '1000': '1000',
                '1100': '1100',
                '1200': '1200',
                '1300': '1300',
                '1400': '1400',
                '1500': '1500',
                '1600': '1600',
                '1700': '1700',
                '1800': '1800',
                '1900': '1900',
                '2000': '2000',
            }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
            zIndex: ['hover', 'active'],
            backgroundOpacity: ['active'],
            scale: ['active', 'group-hover'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
