import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/scss/app.scss",
                "resources/js/app.js",
                "resources/scss/home/index.scss",
                "resources/pdf/CV_POULY_REMI.pdf",
            ],
            refresh: true,
        }),
    ],
});
