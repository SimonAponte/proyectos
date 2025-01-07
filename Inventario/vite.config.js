import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        host: '0.0.0.0',  // Esto hace que Vite escuche en todas las interfaces
        port: 3000,        // Establece el puerto a 3000
    },
    proxy: {
        '/': {
            target: 'http://laravel-app:8080',  // Nombre del servicio de Laravel en Docker
            changeOrigin: true,
            secure: false,
        },
    },
});
