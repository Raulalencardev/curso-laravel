import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { bunny } from 'laravel-vite-plugin/fonts';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        tailwindcss(), 
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            // Força o Vite a monitorar explicitamente todos os seus arquivos Blade e recarregar o navegador
            refresh: [
                'resources/routes/**',
                'routes/**',
                'resources/views/**',
                'resources/views/**/*.blade.php',
            ],
            fonts: [
                bunny('Instrument Sans', {
                    weights:[400, 500, 600],
                }),
            ],
        }),
    ],
    server: {
        watch: {
            usePolling: true,
            interval: 100, // Força a verificação a cada 100ms
        },
    },
});
