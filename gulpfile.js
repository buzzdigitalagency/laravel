var elixir = require('laravel-elixir');
require('laravel-elixir-imagemin-wrapper');
require('laravel-elixir-livereload');
require('laravel-elixir-lost');
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(
    function (mix) {
        mix
        //Basic
            .sass('app.scss')
            .lost('../../public/css/app.css')
            .sass('packages/pace.scss')
            .styles([
                '../bower/animate.css/animate.css'
            ], 'public/css/animate.css')
            .scripts([
                '../bower/jquery/dist/jquery.js',
                '../bower/bootstrap-sass/assets/javascripts/bootstrap.js'
            ], 'public/js/app.js')
            //Admin
            .sass('admin.scss')
            .styles([
                '../../../public/css/admin.css',
                '../bower/metisMenu/src/metisMenu.css',
                '../bower/startbootstrap-sb-admin-2/dist/css/sb-admin-2.css'
            ], 'public/css/admin.css')
            .scripts([
                '../bower/jquery/dist/jquery.js',
                '../bower/bootstrap-sass/assets/javascripts/bootstrap.js',
                '../bower/metisMenu/src/metisMenu.js',
                '../bower/startbootstrap-sb-admin-2/dist/js/sb-admin-2.js'
            ], 'public/js/admin.js')
            //Additional
            .version(['css/app.css', 'css/admin.css', 'js/admin.js', 'js/app.js'])
            .copy('public/fonts', 'public/build/fonts')
            .imagemin(
                'resources/assets/imgs', 'public/imgs',
                {
                    optimizationLevel: 7,
                    progressive: true,
                    interlaced: true
                }
            )
            .livereload()
        ;
    }
);