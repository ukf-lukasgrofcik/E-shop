let mix = require('laravel-mix');

mix
    .sass('resources/assets/custom/scss/preloader.scss', 'public/css/sass')
    .sass('resources/assets/custom/scss/auth.scss', 'public/css/sass')
    .sass('resources/assets/custom/scss/admin.scss', 'public/css/sass')

    .styles([
        'resources/assets/bootstrap-5.2.2-dist/css/bootstrap.css',
        'public/css/sass/preloader.css',
        'public/css/sass/auth.css',
    ], 'public/css/auth.css')

    .scripts([
        'resources/assets/bootstrap-5.2.2-dist/js/bootstrap.bundle.js',
    ], 'public/js/auth.js')

    .styles([
        'resources/assets/bootstrap-5.2.2-dist/css/bootstrap.css',
        'resources/assets/DataTables/datatables.css',
        'public/css/sass/preloader.css',
        'public/css/sass/admin.css',
    ], 'public/css/admin.css')

    .scripts([
        'resources/assets/jquery/jquery-3.6.1.js',
        'resources/assets/DataTables/datatables.js',
        'resources/assets/bootstrap-5.2.2-dist/js/bootstrap.bundle.js',
        'resources/assets/custom/js/admin.js',
    ], 'public/js/admin.js');
