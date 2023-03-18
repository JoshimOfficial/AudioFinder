const mix = require('laravel-mix');
require('laravel-mix-purgecss');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .purgeCss({
       enabled: mix.inProduction(),
       content: [
           './resources/views/**/*.blade.php',
           './resources/js/**/*.vue',
       ],
   });
