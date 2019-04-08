const mix = require('laravel-mix');

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
  mix.scripts(['node_modules/lity/dist/lity.min.js'], 'public/js/vendor.js')
  mix.styles(['node_modules/lity/dist/lity.min.css'], 'public/css/vendor.css')
  mix.sass('resources/sass/app.scss', 'public/css');
