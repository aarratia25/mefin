const mix = require("laravel-mix");

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
    .sass("resources/sass/main.scss", "public/css/dashmix.css")
    .sass("resources/sass/dashmix/theme/xwork.scss", "public/css/themes/")

    /* JS */
    .js("resources/js/dashmix/app.js", "public/js/dashmix.app.js")

    /* Tools */
    .browserSync("localhost:8000")
    .disableNotifications()

    /* Options */
    .options({
        processCssUrls: false
    });
