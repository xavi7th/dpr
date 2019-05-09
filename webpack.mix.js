let mix = require('laravel-mix')

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.webpackConfig({
    resolve: {
        extensions: ['.js', '.vue', '.json'],
        alias: {
            // 'vue$': 'vue/dist/vue.esm.js',
            '@utilities-components': __dirname + '/resources/assets/js/components/Utilities',
            '@nav-components': __dirname + '/resources/assets/js/components/Nav',
            '@reports-components': __dirname + '/resources/assets/js/components/Reports',
            '@components': __dirname + '/resources/assets/js/components',
            '@js-assets': __dirname + '/resources/assets/js',
        },
    },
})

mix.js('resources/assets/js/app.js', 'public/js/vue-app.js')
    .autoload({
        jquery: ['$', 'jQuery'],
    })
    .sass('resources/assets/sass/app.scss', 'public/css/custom.css')
    .styles(
        [
            'resources/assets/lte/AdminLTE-2.4.3/bower_components/bootstrap/dist/css/bootstrap.min.css',
            'resources/assets/lte/AdminLTE-2.4.3/bower_components/font-awesome/css/font-awesome.min.css',
            'resources/assets/lte/AdminLTE-2.4.3/bower_components/Ionicons/css/ionicons.min.css',
            'resources/assets/lte/AdminLTE-2.4.3/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css',
            'resources/assets/lte/AdminLTE-2.4.3/bower_components/select2/dist/css/select2.min.css',
            'resources/assets/lte/AdminLTE-2.4.3/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css',
            'resources/assets/lte/AdminLTE-2.4.3/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
            'resources/assets/lte/AdminLTE-2.4.3/bower_components/bootstrap-daterangepicker/daterangepicker.css',
            'resources/assets/lte/AdminLTE-2.4.3/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
            'resources/assets/lte/AdminLTE-2.4.3/plugins/iCheck/all.css',
            'resources/assets/lte/AdminLTE-2.4.3/dist/css/AdminLTE.min.css',
            'resources/assets/lte/AdminLTE-2.4.3/dist/css/skins/_all-skins.min.css',
            'public/css/custom.css',
        ],
        'public/css/app.css'
    )
    .scripts(
        [
            'resources/assets/lte/AdminLTE-2.4.3/bower_components/jquery/dist/jquery.js',
            'resources/assets/lte/AdminLTE-2.4.3/bower_components/jquery-ui/jquery-ui.min.js',
            'resources/assets/lte/AdminLTE-2.4.3/bower_components/bootstrap/dist/js/bootstrap.min.js',
            'resources/assets/lte/AdminLTE-2.4.3/bower_components/select2/dist/js/select2.full.min.js',
            'resources/assets/lte/AdminLTE-2.4.3/bower_components/jquery-slimscroll/jquery.slimscroll.min.js',
            'resources/assets/lte/AdminLTE-2.4.3/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
            'resources/assets/lte/AdminLTE-2.4.3/bower_components/bootstrap-daterangepicker/dist/js/daterangepicker.js',
            'resources/assets/lte/AdminLTE-2.4.3/bower_components/datatables.net/js/jquery.dataTables.min.js',
            'resources/assets/lte/AdminLTE-2.4.3/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js',
            'resources/assets/lte/AdminLTE-2.4.3/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js',
            'resources/assets/lte/AdminLTE-2.4.3/plugins/input-mask/jquery.inputmask.js',
            'resources/assets/lte/AdminLTE-2.4.3/plugins/input-mask/jquery.inputmask.date.extensions.js',
            'resources/assets/lte/AdminLTE-2.4.3/plugins/input-mask/jquery.inputmask.extensions.js',
            'resources/assets/lte/AdminLTE-2.4.3/plugins/iCheck/icheck.min.js',
            'resources/assets/lte/AdminLTE-2.4.3/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
            'resources/assets/lte/AdminLTE-2.4.3/bower_components/fastclick/lib/fastclick.js',
            'resources/assets/lte/AdminLTE-2.4.3/dist/js/adminlte.min.js',
            'resources/assets/lte/AdminLTE-2.4.3/dist/js/demo.js',
            'public/js/vue-app.js',
        ],
        'public/js/app.js'
    )
    .sourceMaps()

// mix.browserSync('localhost:8000')

mix.browserSync({
    proxy: 'localhost:8000',
    // reloadDelay: 1000,
    // Don't show any notifications in the browser.
    // notify: false,
    // Inject CSS changes
    injectChanges: true,
    ghostMode: {
        clicks: false,
        forms: false,
        scroll: false,
    },
    // Attempt to use the URL "http://my-private-site.localtunnel.me"
    // tunnel: "daniel",
    // Will not attempt to determine your network status, assumes you're ONLINE.
    // online: false,
    // proxy: {
    // 	target: 'localhost:8000',
    // 	reqHeaders: function () {
    // 		return {
    // 			host: "localhost:3000"
    // 		};
    // 	}
    // },
    // browser: "vivaldi",
    // browser: ["google chrome"],
    files: [
        '!app/**/*.php',
        'resources/views/**/*.php',
        '!resources/**/*.js',
        'resources/**/*.vue',
        //  'public/**/*.html',
        //  'public/**/*.php',
        'public/js/**/*.js',
        '!public/js/**/libraries.js',
        '!public/css/**/*.css',
        '!public/css/**/*.map',
        //  'app/Modules/**/*.vue',
        //  'app/Modules/**/*.blade.php'
    ],
})
