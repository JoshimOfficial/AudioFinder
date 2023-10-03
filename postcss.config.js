const tailwindcss = require('tailwindcss');
const purgecss = require('@fullhuman/postcss-purgecss');

module.exports = {
  plugins: [
    tailwindcss,
    ...(process.env.NODE_ENV === 'production'
      ? [
          purgecss({
            content: [
              './resources/**/*.blade.php',
              './resources/**/*.js',
              './resources/**/*.vue',
            ],
            defaultExtractor: (content) =>
              content.match(/[\w-/:]+(?<!:)/g) || [],
          }),
        ]
      : []),
    require('autoprefixer'),
  ],
};
