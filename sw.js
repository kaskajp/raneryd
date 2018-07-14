'use strict';
const VERSION = 'cache-v40180621093749+0000';
const urls = ['/', '/pages/about', '/pages/contact', '/robots.txt', '/manifest.json', '/assets/images/icon-128x128.png', '/assets/images/icon-144x144.png', '/assets/images/icon-152x152.png', '/assets/images/icon-192x192.png', '/assets/images/icon-512x512.png', 'https://avatars3.githubusercontent.com/u/1626458?s=460&v=4'];
self.addEventListener('install', event => {
    event.waitUntil(caches.open(VERSION).then(cache => cache.addAll(urls)));
});
self.addEventListener('activate', event => {
    event.waitUntil(caches.keys().then(keys => {
        return Promise.all(keys.filter(key => key !== VERSION).map(key => caches.delete(key)));
    }));
});
self.addEventListener('fetch', event => {
    event.respondWith(caches.match(event.request).then(response => response || fetch(event.request)));
});
