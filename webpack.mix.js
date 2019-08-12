const mix = require('laravel-mix');
const path = require('path');
const tailwindcss = require('tailwindcss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.setPublicPath(path.resolve(__dirname, "./"));

// build app
mix.js('resources/js/app.js', '/public_html/js')
    .sass('resources/sass/app.scss', 'public_html/css')
    .options({
        processCssUrls: false,
        postCss: [ tailwindcss('tailwind.config.js') ],
    });

mix.browserSync({
    proxy: {
        target: 'https://vueforms.localhost'
    },
    port: 3000,
    host: 'vueforms.localhost',
    open: false,
    files:[
        'resources/js/**/**/**',
        'resources/views/**/**/**'
    ]
});

