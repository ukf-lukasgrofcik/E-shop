let mix = require('laravel-mix');

mix
    .sass('resources/assets/custom/scss/auth.scss', 'public/css/sass')
    .sass('resources/assets/custom/scss/admin.scss', 'public/css/sass')

    .styles([
        'resources/assets/bootstrap-5.2.2-dist/css/bootstrap.css',
        'public/css/sass/auth.css',
    ], 'public/css/auth.css')

    .styles([
        'resources/assets/bootstrap-5.2.2-dist/css/bootstrap.css',
        'public/css/sass/admin.css',
    ], 'public/css/admin.css');
