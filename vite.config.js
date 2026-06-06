import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { bunny } from 'laravel-vite-plugin/fonts';
import tailwindcss from '@tailwindcss/vite';
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
            ],
            refresh: true,
            fonts: [
                bunny('Instrument Sans', {
                    weights: [400, 500, 600],
                }),
            ],
        }),
        tailwindcss(),
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
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
