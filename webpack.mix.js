const mix = require('laravel-mix');

const src_path = 'src'; // resources
const public_path = 'dist'; // public

mix.js(src_path + '/js/app.js', 'js')
    .sass(src_path + '/sass/app.scss', 'css')
    .setPublicPath(public_path)
    .copyDirectory(src_path + '/images', public_path + '/images')
    .browserSync({
        proxy: 'alrehab.test',
        host: 'alrehab.test',
        open: 'external',
        files: [
            './' + src_path + '/views/**/*.blade.php',
            './' + public_path + '/css/app.css'
        ]
    });