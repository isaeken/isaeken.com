const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  darkMode: 'class',
  content: [
    'index.html',
  ],
  theme: {
    extend: {
      fontFamily: {
        'karla': ['Karla', ...defaultTheme.fontFamily.sans],
      },
      animation: {
        'move-x': 'move-x 2s ease-in-out infinite',
        'move-y': 'move-y 2s ease-in-out infinite',
        'move-x-screen': 'move-x-screen 4s ease-in-out infinite',
        'move-y-screen': 'move-y-screen 4s ease-in-out infinite',
      },
      keyframes: {
        'move-x': {
          '0%, 100%': { transform: 'translateX(-10px)' },
          '50%': { transform: 'translateX(10px)' },
        },
        'move-y': {
          '0%, 100%': { transform: 'translateY(-10px)' },
          '50%': { transform: 'translateY(10px)' },
        },
        'move-x-screen': {
          '0%, 100%': { transform: 'translateX(-50vw)' },
          '50%': { transform: 'translateX(50vw)' },
        },
        'move-y-screen': {
          '0%, 100%': { transform: 'translateY(-50vh)' },
          '50%': { transform: 'translateY(50vh)' },
        }
      }
    },
  },
  plugins: [

  ],
}
