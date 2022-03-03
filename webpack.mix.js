const mix = require('laravel-mix');

mix.browserSync( {
    proxy: {
        target: 'robinassists.test',
        ws: true,
    },
    files: [
        '*.php',
        'build/css/app.css',
        'build/scripts/app.js',
    ],
    watch: true,
    browser: 'firefox developer edition',
    open: 'local',
} );

mix.sass('resources/assets/sass/app.scss', 'resources/assets/css/app.css')
    .postCss('resources/assets/css/app.css', 'build/css/app.css', [
        require('autoprefixer'),
    ]);

mix.js('resources/assets/scripts/app.js', 'build/scripts/app.js');