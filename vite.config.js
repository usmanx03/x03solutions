import { defineConfig } from 'vite';
import tailwindcss from '@tailwindcss/vite';
import { fileURLToPath } from 'url';
import { dirname, resolve } from 'path';

const __filename = fileURLToPath(import.meta.url);
const __dirname = dirname(__filename);

export default defineConfig({
    base: './',
    plugins: [tailwindcss()],
    build: {
        outDir: 'docs',
        emptyOutDir: true,
        rollupOptions: {
            input: {
                main: resolve(__dirname, 'index.html'),
                solutions: resolve(__dirname, 'solutions.html'),
                contact: resolve(__dirname, 'contact.html'),
                philosophy: resolve(__dirname, 'philosophy.html'),
                'industry-healthcare': resolve(__dirname, 'industry-healthcare.html'),
                'industry-payments': resolve(__dirname, 'industry-payments.html'),
                'industry-warehouse': resolve(__dirname, 'industry-warehouse.html'),
                'industry-retail': resolve(__dirname, 'industry-retail.html'),
                'industry-enterprise': resolve(__dirname, 'industry-enterprise.html'),
                'industry-other': resolve(__dirname, 'industry-other.html'),
            },
        },
    },
});
