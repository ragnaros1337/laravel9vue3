import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import { VitePWA } from 'vite-plugin-pwa';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
        VitePWA({
            mode: "development",
            base: "/",
            srcDir: "src",
            filename: "sw.js",
            includeAssets: ['favicon.ico', 'apple-touch-icon.png', 'masked-icon.svg'],
            strategies: "injectManifest",
            manifest: {
                name: "Kugoo",
                short_name: "Kugoo",
                description: "Kugoo Самокаты",
                start_url: "./",
                icons: [
                    {
                        "src": "/android-chrome-192x192.png",
                        "sizes": "192x192",
                        "type": "image/png"
                    },
                    {
                        "src": "/android-chrome-512x512.png",
                        "sizes": "512x512",
                        "type": "image/png"
                    }
                ],
                theme_color: "#464eb6",
                background_color: "#464eb6",
                display: "standalone",
            },
            // injectRegister: 'script',
            // registerType: 'autoUpdate',
            // devOptions: {
            //     enabled: true
            // }
        }),
    ],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
        },
    },
});
