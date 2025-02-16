import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true, // Removed `changeOrigin: true` (not needed)
        }),
        vue(), // Ensure Vue is properly added as a plugin
    ],
    resolve: {
        alias: {
            'vue': 'vue/dist/vue.esm-bundler.js', // Fix for runtime compilation issues
            '@': path.resolve(__dirname, 'resources/js'), // Alias for cleaner imports
        },
    },
    server: {
        host: '127.0.0.1', // Ensure it runs locally
        cors: {
            origin: 'http://edison.local', // Allow requests only from this domain
            methods: ['GET', 'POST', 'PUT', 'DELETE', 'OPTIONS'],
            allowedHeaders: ['Content-Type', 'Authorization'],
        },
    },
});
