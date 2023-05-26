/*
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
*/

import { defineConfig } from 'vite';

export default defineConfig({
  build: {
    manifest: true,
    outDir: 'public/assets',
    emptyOutDir: true,
    rollupOptions: {
      input: {
        index: './resources/js/index.js',
      },
    },
  },
});
