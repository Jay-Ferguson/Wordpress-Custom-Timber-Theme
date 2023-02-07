let mix = require('laravel-mix');
// your Wordpress theme name here
var themename = "blank";
const themePath = 'wp-content/themes/' + themename + '';
const resources =  themePath + '/src';
mix.setPublicPath(`${themePath}/assets`);

mix.sass(`${resources}/scss/app.scss`, `${themePath}/assets/css`).sourceMaps();
mix.js(`${resources}/js/app.js`, `${themePath}/assets/js`)

//mix.browserSync('https://mywebsite.test');

mix.browserSync({
     proxy: "http://timberwp.local/",
     files: [
         `${themePath}/**/*.php`,
         `${themePath}/**/*.js`,
         `${themePath}/**/*.css`,
         `${themePath}/**/*.twig`,
     ]
 });