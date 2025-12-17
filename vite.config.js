import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel({
            // TAMBAHKAN 'app.jsx' SEBAGAI ENTRY POINT BARU
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/app.jsx',
                'resources/js/welcomeAnimations.jsx'
            ],
            refresh: true,
        }),
        // TAMBAHKAN PLUGIN REACT
        react(),
    ],
});