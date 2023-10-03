const mix = require('laravel-mix');
require('laravel-mix-purgecss');
const fs = require('fs');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .purgeCss({
       enabled: mix.inProduction(),
       content: [
           './resources/views/**/*.blade.php',
           './resources/js/**/*.vue',
       ],
   })
   .options({
        postCss: [
            require("tailwindcss")('./tailwind.config.js'),
            require('postcss-rename')({
                strategy: !mix.inProduction() ? 'none' : 'minimal',
                outputMapCallback: function (map) {
                    let content =
                        '<?php\n\nreturn [\n\n' +
                        Object.entries(map).map(([k, v]) => {
                            return `\t'${k}' => '${v}'`;
                        }).join(', \n')
                        + '\n\n];'
                    fs.writeFile('config/map.php', content, err => {
                        if (err) {
                            console.error(err)
                            return
                        }
                    })
                }
            })
        ],
    });

const MangleCssClassPlugin = require('mangle-css-class-webpack-plugin');

module.exports = {
     plugins: [
       new MangleCssClassPlugin({
         classNameRegExp: '[cl]-[a-z][a-zA-Z0-9_]*',
         log: true,
       }),
     ],
};
