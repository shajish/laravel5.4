const { mix } = require('laravel-mix');

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


 mix
 .js('resources/assets/js/app.js', 'public/js')
 .copy('resources/assets/js/semantic.min.js', 'public/js')
 .sass('resources/assets/sass/app.scss', 'public/css')
 .less('resources/assets/less/icon.less','public/css')
 .style(['public/css/semantic.min.css'],'public/css/custom.min.css');
