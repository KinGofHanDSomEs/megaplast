import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { bunny } from 'laravel-vite-plugin/fonts';
import tailwindcss from '@tailwindcss/vite';
<<<<<<< HEAD

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
=======
import { viteStaticCopy } from 'vite-plugin-static-copy';
export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/fonts.css',
                'resources/css/media.css',

                'resources/js/vacancies.js',
                'resources/js/about/projects.js',
                'resources/js/header.js',
                'resources/js/functions.js',
                'resources/js/auth.js',
                'resources/js/manage/profile.js',
                'resources/js/manage/navigation.js',
                'resources/js/manage/header.js',
                'resources/js/manage/orders.js'
            ],
>>>>>>> 65a6a6386df3e72542fe014458e036af01f8b9f6
            refresh: true,
            fonts: [
                bunny('Instrument Sans', {
                    weights: [400, 500, 600],
                }),
            ],
        }),
        tailwindcss(),
<<<<<<< HEAD
=======
        viteStaticCopy({
            targets: [
                {
                    src: 'resources/fonts',
                    dest: '..'
                },
                {
                    src: 'resources/images',
                    dest: '..'
                }
            ]
        })
>>>>>>> 65a6a6386df3e72542fe014458e036af01f8b9f6
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
