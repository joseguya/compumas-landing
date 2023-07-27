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

const srcJs = 'resources/assets/js/';
const destJs = 'public/js/';

const srcCss = 'resources/assets/css/';
const destCss = 'public/css/';

const srcVendor = 'resources/assets/vendors/';
const srcVendorRsplugin = 'resources/assets/vendors/rs-plugin/';


// all global js files into app.js
mix.combine(
    [
        srcJs + 'jquery-1.11.0.min.js',
        srcVendor + 'bootstrap/js/bootstrap.min.js',
        srcVendorRsplugin + 'js/jquery.themepunch.plugins.min.js',
        srcVendorRsplugin + 'js/jquery.themepunch.revolution.min.js',
        srcJs + 'jquery.fitImage.js',
        srcJs + 'jquery.imgpreload.min.js',
        srcJs + 'jquery.parallax.js',
        srcJs + 'jquery.scrollTo-1.4.3.1-min.js',
        srcJs + 'jquery.magnific-popup.min.js',
        srcJs + 'isotope.pkgd.min.js',
        srcJs + 'SmoothScroll.min.js',
        srcJs + 'jquery.mb.YTPlayer.js',
        srcJs + 'scripts.js',
    ], destJs + 'app.min.js')
    .version();

mix.styles(
    [
        srcVendor + 'bootstrap/css/bootstrap.min.css',
        srcVendorRsplugin + '/css/settings.css',
        srcCss + 'magnific-popup.css',
        srcCss + 'styles.css',
        srcCss + 'small.css',
        srcCss + 'less.css',
        srcCss + '/colors/blue.css',
    ], destCss + 'compumas.min.css'
).version();