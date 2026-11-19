import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
    host: '0.0.0.0',
    port: 5173,                 // puerto interno, no cambia
    strictPort: true,
    cors: true,
    origin: 'http://localhost:5174',   // puerto publicado en el host
    hmr: {
        host: 'localhost',
        clientPort: 5172,       // puerto publicado en el host
    },
    watch: { usePolling: true },
},
});
