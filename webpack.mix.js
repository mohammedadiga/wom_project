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
    .copy('resources/assets/js/pages/widgets.js', 'public/js')

    .copy('resources/assets/bundles/libscripts.bundle.js', 'public/js/bundles')
    .copy('resources/assets/bundles/vendorscripts.bundle.js', 'public/js/bundles')
    .copy('resources/assets/bundles/mainscripts.bundle.js', 'public/js/bundles')

    .copy('resources/assets/bundles/chartist.bundle.js', 'public/js/bundles')
    .copy('resources/assets/bundles/knob.bundle.js', 'public/js/bundles')
    .copy('resources/assets/bundles/c3.bundle.js', 'public/js/bundles')
    .vue()
    // .copy('resources/fonts/*', 'public/fonts')
    .sass('resources/assets/scss/main.scss', 'public/css')
    .sass('resources/sass/app.scss', 'public/css')

    .copy('resources/assets/vendor/animate-css/vivify.min.css', 'public/css')
    .copy('resources/assets/vendor/c3/c3.min.css', 'public/css/vendor')
    .copy('resources/assets/vendor/chartist/css/chartist.min.css', 'public/css/vendor')
    .copy('resources/assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css', 'public/css/vendor')
    .copy('resources/assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css', 'public/css/vendor')

    .disableNotifications()
    .sourceMaps()
    .webpackConfig(require('./webpack.config'));


if (mix.inProduction()) {
    mix.version();
}
