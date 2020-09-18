let mix = require('laravel-mix');

mix.js('assets/main.js', './js/scripts.js')
    .postCss('assets/style.css', './', [
    require('tailwindcss'),
  ])