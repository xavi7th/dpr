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

mix.js('resources/assets/js/app.js', 'public/js/vue-app.js')
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
