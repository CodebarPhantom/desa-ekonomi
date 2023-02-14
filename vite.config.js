import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                //Admin
                'resources/sass/app.scss',
                'resources/js/app.js',

                //User
                // 'resources/css/bizbook/bootstrap.css',
                // 'resources/css/bizbook/fonts.css',
                // //'resources/css/bizbook/icon.woff2',
                // 'resources/js/bizbook/jquery.min.js',
                // 'resources/js/bizbook/jquery-ui.js',
                // 'resources/css/bizbook/jquery-ui.css',
                // 'resources/css/bizbook/style.css',
                // 'resources/js/bizbook/bootstrap.min.js',
                // 'resources/js/bizbook/custom_validation.js',
                // 'resources/js/bizbook/custom.js',
                // 'resources/js/bizbook/html5shiv.js',


                // 'resources/js/bizbook/jquery.validate.min.js',
                // 'resources/js/bizbook/listing_filter.js',
                // 'resources/js/bizbook/popper.min.js',
                // 'resources/js/bizbook/product_filter.js',
                // 'resources/js/bizbook/respond.min.js',
                // 'resources/js/bizbook/select-opt.js',
                // 'resources/js/bizbook/slick.js'
            ],
            refresh: true,
        }),
    ],
});
