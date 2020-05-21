const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

require('laravel-mix-purgecss');

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


mix.js('resources/js/app.js', 'public/js')
  mix.scripts([
    'node_modules/imagesloaded/imagesloaded.pkgd.min.js'
  ], 'public/js/vendor.js')
  mix.styles([
    'node_modules/@glidejs/glide/dist/css/glide.core.min.css',
    'node_modules/@glidejs/glide/dist/css/glide.theme.min.css',
    ], 'public/css/vendor.css')
  mix.sass('resources/sass/app.scss', 'public/css')
    .options({
      processCssUrls: false,
      postCss: [ tailwindcss('./tailwind.config.js') ]
    });
