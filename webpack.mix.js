let mix = require('laravel-mix');

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

mix.styles([
    'resources/assets/css/frontend/app.css',
    'resources/assets/css/frontend/base.css',
    'resources/assets/css/frontend/lightbox.css',
    'resources/assets/css/frontend/product.review.css',
], 'public/frontend/css/all.min.css');

mix.styles([
	'resources/assets/css/frontend/checkout.css'
], 'public/frontend/css/checkout.min.css');

mix.scripts([
    'resources/assets/js/frontend/api.jquery.js',
    'resources/assets/js/frontend/appear.js',
    'resources/assets/js/frontend/checkout.js',
    'resources/assets/js/frontend/cs.script.js',
    'resources/assets/js/frontend/custom.js',
    'resources/assets/js/frontend/jquery-prettyphoto.min.js',
    'resources/assets/js/frontend/jquery-prettyphotoboot.min.js',
    'resources/assets/js/frontend/jquery-zoom.min.js',
    'resources/assets/js/frontend/main.js',
    'resources/assets/js/frontend/money-helper.js',
    'resources/assets/js/frontend/nprogress.js',
    'resources/assets/js/frontend/option-selectors.js',
    'resources/assets/js/frontend/product.review.js',
    'resources/assets/js/frontend/rx.all.min.js',
    'resources/assets/js/frontend/select2-full.min.js',
    'resources/assets/js/frontend/twine.js',
    'resources/assets/js/frontend/ua-parser.pack.js',
    'resources/assets/js/frontend/validator.min.js'
], 'public/frontend/js/bundle.min.js');

if (mix.inProduction()) {
    mix.version();
}

mix.disableNotifications();

