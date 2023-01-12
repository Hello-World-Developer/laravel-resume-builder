import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/client/cv-form-create.js',
                'resources/js/client/js-pdf.js',
            ],
            refresh: true,
        }),
    ],
});
