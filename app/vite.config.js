import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/scss/app.scss",
                "resources/js/app.js",
                "resources/scss/home/index.scss",
                "resources/scss/services.scss",
            ],
            refresh: true,
        }),
    ],
    server: {
    host: '0.0.0.0',
        port: 5181,
        hmr: {
        host: '127.0.0.1',
    },
},
});
