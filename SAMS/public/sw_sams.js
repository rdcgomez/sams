importScripts('https://storage.googleapis.com/workbox-cdn/releases/4.3.1/workbox-sw.js');

if (workbox) {

  // top-level routes we want to precache
  workbox.precaching.precacheAndRoute(['/']);

  // injected assets by Workbox CLI
  workbox.precaching.precacheAndRoute([
  {
    "url": "css/app.css",
    "revision": "2fa52afb98a55f79f01dedca4e75313f"
  },
  {
    "url": "favicon.ico",
    "revision": "d41d8cd98f00b204e9800998ecf8427e"
  },
  {
    "url": "images/icons/icon-128x128.png",
    "revision": "f8a336ba8186ac2cc804a814ccc0b4a2"
  },
  {
    "url": "images/icons/icon-144x144.png",
    "revision": "0c454b477fd19c9a86fec7628ebf4a70"
  },
  {
    "url": "images/icons/icon-152x152.png",
    "revision": "29326e9bf80fde0aaafa991fbf72c792"
  },
  {
    "url": "images/icons/icon-192x192.png",
    "revision": "92b1fea3b4f5292345cfeee748d34722"
  },
  {
    "url": "images/icons/icon-384x384.png",
    "revision": "cfa96e849a6b31ad7b422efbaea92845"
  },
  {
    "url": "images/icons/icon-512x512.png",
    "revision": "caaf878eda743fe9863bcf39d2ebcceb"
  },
  {
    "url": "images/icons/icon-72x72.png",
    "revision": "60f30cdb1d7a57f04dfeb3b7242fe2ad"
  },
  {
    "url": "images/icons/icon-96x96.png",
    "revision": "3c308269d3042dee4d27d3734d08d77a"
  },
  {
    "url": "img/apc.png",
    "revision": "d330fa56f955b2038434a811fefeace8"
  },
  {
    "url": "js/app.js",
    "revision": "e54459cac7781439c7dad1a76d9b6545"
  },
  {
    "url": "manifest.json",
    "revision": "00b5a143bae3e642e1e542c6d8a07108"
  }
]);

  // match routes for homepage
  workbox.routing.registerRoute(
      /^\/(?:(home)?(\/.*)?)$/,
      new workbox.strategies.NetworkFirst({
          cacheName: 'static-resources',
      })
  );

  // js/css files
  workbox.routing.registerRoute(
      /\.(?:js|css)$/,
      new workbox.strategies.StaleWhileRevalidate({
          cacheName: 'static-resources',
      })
  );

  // images
  workbox.routing.registerRoute(
      // Cache image files.
      /\.(?:png|jpg|jpeg|svg|gif)$/,
      // Use the cache if it's available.
      new workbox.strategies.CacheFirst({
          // Use a custom cache name.
          cacheName: 'image-cache',
          plugins: [
              new workbox.expiration.Plugin({
                  // Cache upto 50 images.
                  maxEntries: 50,
                  // Cache for a maximum of a week.
                  maxAgeSeconds: 7 * 24 * 60 * 60,
              })
          ],
      })
  );

}