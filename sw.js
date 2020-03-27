var cache_name = 'finance-cache';
var cached_urls = [
  './js/index.js',
  './index.php',
  './css/mdbpro.min.css',
  './css/main.css',
  './js/mdbpro.min.js',
  './structure/head.html',
  './structure/body.html',
  './public/components/loading.html',
  './public/components/modal.html',
  './public/components/mobileView.php',
  './public/components/webView.php',
  './public/components/smp_login.html',
  './public/components/smp_navbar.html',
  './public/components/sidenav.php',
  './public/components/wb_login.html',
  './js/jquery-3.4.1.min.js',
  './js/bootstrap.min.js',
  './controller/home.controller.php',
  './controller/login.controller.php',
  './controller/sair.controller.php',
  './public/404.html',
  './public/view/Home/home.view.php',
  './public/Painel.controller.php'
];

self.addEventListener('install', function(event) {
  event.waitUntil(
    caches.open(cache_name)
    .then(function(cache) {
      return cache.addAll(cached_urls);
    })
  );
});

self.addEventListener('activate', function(event) {
  event.waitUntil(
    caches.keys().then(function(cacheNames) {
      return Promise.all(
        cacheNames.map(function(cacheName) {
          if (cacheName.startsWith('pages-cache-') && staticCacheName !== cacheName) {
            return caches.delete(cacheName);
          }
        })
      );
    })
  );
});

// self.addEventListener('fetch', function(event) {
//     event.respondWith(
//       caches.match(event.request)
//       .then(cacheResponse=>(cacheResponse || fetch(event.request))),
//     );
//   });