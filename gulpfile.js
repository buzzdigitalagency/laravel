var elixir = require('laravel-elixir');
require('laravel-elixir-imagemin-wrapper');
require('laravel-elixir-livereload');
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
            .sass('app.scss')
            .sass('packages/pace.scss')
            .scripts([
                '../bower/jquery/dist/jquery.js',
                '../bower/bootstrap-sass/assets/javascripts/bootstrap.js',
            ], 'public/js/app.js')
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