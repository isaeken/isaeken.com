const mix = require('laravel-mix');

mix
    .setPublicPath('public_html')
    .js('resources/js/app.js', 'js')
    .postCss('resources/css/app.css', 'css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .browserSync('127.0.0.1:8000');

if (mix.inProduction()) {
    mix.version();
}
