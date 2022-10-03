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
            // base: "/",
            // srcDir: "public/src",
            // filename: "sw.js",
            strategies: "registerSW",
            includeAssets: ['favicon.ico', 'favicon-16x16.png',
                'favicon-32x32.png', 'apple-touch-icon.png', 'mstile-150x150.png', 'safari-pinned-tab.svg'],
            manifest: {
                name: "Kugoo",
                short_name: "Kugoo",
                description: "Kugoo Самокаты",
                start_url: ".",
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
            workbox: {
                  globPatterns: [
                    // '**/*.{js,css,json,webmanifest,woff,woff2,png,ico,svg}',
					'*/*.*',
					'*.*'
				  ],
                navigateFallback: null,
            },
            injectRegister: 'script',
            registerType: 'autoUpdate',
            devOptions: {
                enabled: true
            }
        }),
    ],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
        },
    },
});
