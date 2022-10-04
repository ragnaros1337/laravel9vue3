const cacheName = 'v1';
const cacheAssets = [
    '/'
    '/apple-touch-icon.png',
    '/browserconfig.xml',
    '/favicon.ico',
    '/favicon-16x16.png',
    '/favicon-32x32.png',
    '/mstile-150x150.png',
    '/safari-pinned-tab.svg',
    '/index.php',
];

//Call Install Event
self.addEventListener('install', (event) => {
    console.log('ServiceWorker: Installed');

    event.waitUntil(
        caches
            .open(cacheName)
            .then(cache => {
                console.log('Service Worker: Caching Files');
                cache.addAll(cacheAssets);
                fetch('/cache-file').then(function (response) {
                    response.json().then(function(data){
                        for (const item in data) {
                            if (item.endsWith('css') || (item.endsWith('js') && !item.includes('workbox')))
                                cache.add('/build/' + data[item].file);
                        }
                    })
                })
            })
            .then(() => self.skipWaiting())
    );
})

//Call Activate Event
self.addEventListener('activate', (event) => {
    console.log('ServiceWorker: Activated');
    // Remove old cache
    event.waitUntil(
        caches.keys().then(cacheNames => {
            return Promise.all(
                cacheNames.map(cache => {
                    if(cache !== cacheName){
                        console.log('Service Worker: Clearing old cache');
                        return caches.delete(cache);
                    }
                })
            )
        })
    )
})

//Call Fetch Event
self.addEventListener('fetch', event => {
    console.log('Service Worker: Fetching');
    event.respondWith(
        fetch(event.request).catch(() => caches.match(event.request))
    )
})
