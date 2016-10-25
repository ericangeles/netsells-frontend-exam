const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

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


elixir(mix => {
    mix.sass('app.scss');

    mix.scripts([
      'resources/assets/js/app.js'
    ], 'public/js/app.js', 'resources/assets')
    .scripts([
      'resources/assets/js/script.js',
      'resources/assets/js/backtotop.js'
    ], 'public/js/script.js', 'resources/assets')
    .scripts([
      'node_modules/jquery/dist/jquery.min.js',
      'node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js'
    ], 'public/js/vendor.js', 'node_modules');

});
