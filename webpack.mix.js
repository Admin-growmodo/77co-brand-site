const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix
  .jigsaw()
  // .js('source/_assets/js/main.js', 'js')
  .sass("source/_assets/scss/main.scss", "source/assets/build/css")
  .js(
    ["source/_assets/js/main.js"],
    "source/assets/build/js/scripts.js", true
  )
  .copyDirectory("source/_assets/img/", "source/assets/build/img")
  .options({
    processCssUrls: false,
  })
  .version()
  .scripts([
    'node_modules/swiper/swiper-bundle.min.js',
    'node_modules/bs5-lightbox/dist/index.bundle.min.js',
  ], 'source/assets/build/js/plugins.js')
  .styles([
    'node_modules/swiper/swiper-bundle.min.css',
  ], 'source/assets/build/css/plugins.css')
  .copyDirectory('node_modules/ionicons', 'source/assets/build/ionicons');
