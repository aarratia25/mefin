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

mix
    /* CSS */
    .sass('resources/sass/main.scss', 'public/css/dashmix.css')
    .sass('resources/sass/dashmix/theme/xwork.scss', 'public/css/theme/')

    /* JS */
    .js('resources/js/dashmix/app.js', 'public/js/dashmix.app.js')

    /* PLUGINS */
    
    .styles([
        'public/js/plugins/sweetalert2/sweetalert2.min.css',
    ], 'public/css/plugins.css')

    .scripts([
        'public/js/plugins/es6-promise/es6-promise.auto.min.js',
        'public/js/plugins/sweetalert2/sweetalert2.min.js',

        // CONFIGS
        'public/js/plugins/config/SweetAlert.js',
    ],'public/js/plugins.js')

    /* Tools */
    .browserSync('localhost:8000')
    .disableNotifications()

    /* Options */
    .options({
        processCssUrls: false
    });
