const cacheName = 'v2';


//Install Event
self.addEventListener('install', (event) => {

})

//Activate Event
self.addEventListener('activate', (event) => {
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

//Fetch Event
self.addEventListener('fetch', event => {
    console.log('Service Worker: Fetching');
    event.respondWith(
        fetch(event.request)
            .then(res => {
                //Make copy of response
                const resClone = res.clone();
                //Open cache
                caches
                    .open(cacheName)
                    .then(cache => {
                        //Add response to cache
                        cache.put(event.request, resClone);
                    });
                return res;
            })
            .catch(err => {
                caches.match(event.request).then(res => res)
            })
    )
})

//Check existing cache
//caches.has(cacheName)
//	.then((hasCache) => {
		//Something
//});

//Three type of url:
//let url1 = '/img/img01.jpg?id=one'; //thats elements of array in cache
//let url2 = new URL('http://localhost:8000/img/img01.jpg?id=two'); //must be protocol http://...
//let utl3 = new Request('/img/img01.jpg?id=three'); //url1 or url2
//cache.add(url1);

//Search in cache
//cache.match() - in choosen cache
//cache.matchAll() - in choosen cache
//caches.match() - in all cache

//Not an error if not find
//return caches.match(url1)
//	.then(cacheResponse => {
//		if(cacheResponse && cacheResponse.status < 400
//		&& cacheResponse.headers.has('content-type') 
//		&& cacheResponse.headers.get('content-type').match(/^image\//i))
//	})