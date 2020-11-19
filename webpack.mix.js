const mix = require('laravel-mix');
require('dotenv').config();

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */
if (!mix.inProduction()) {
    mix.webpackConfig({
        devtool: 'source-map',
        
    })
    .sourceMaps()
}

mix.react('resources/js/reactApp/index.jsx', 'public/js/app.js')
    .postCss('resources/css/app.css', 'public/css', 
    [require('postcss-import'),require('tailwindcss'),
    ])
    .browserSync({
        host: 'localhost',
        port: 3000,
        proxy: {
            target: process.env.APP_URL
        }
    });
// add versioning (creates mix.manifest.json)
mix.version();


















// {
//     test: /\.(gif|png|jpg|svg)(\?.*$|$)/,
//     use: [
//       {
//         loader: 'url-loader',
//         options: {
//           limit: 8192,
//           name: '[name].[ext]',
//           publicPath: 'assets/' // or whatever the path you're using for assets is
//         },
//       },
//     ],
//   },



//.webpackConfig(require('./webpack.config'));
