//STEP-2 install serviceworker
self.addEventListener('install', function(event) {
console.log('Atang sasmita :installing...');
//script di atas yaitu menginstall service worker jika berhasil maka akan tampil 'Atang sasmita :isntalling...' di console log
// TODO 3.4: Skip waiting
self.skipWaiting();
});
//STEP-3 activate service worker
self.addEventListener('activate', function(event) {
console.log('Atang Sasmita :Service worker activating...');
//script di atas akan mengaktifkan funtion service worker jika berhasil makan akan menampilkan 'Atang Sasmita :Service worker activating...' di console log
});
//STEP-4 fetch service worker
self.addEventListener('fetch', function(event) {
console.log('Atang Sasmita :Fetching:', event.request.url);
});
//script di atas jika sudah mendapatkan respon dari server kemudian data tersebut di fetch dan di dimasukkan ke dalam cache localdan jika berhasil maka akan menmapilkan 'Atang Sasmita :Fetching:' di console log
//STEP-5 mendaptarkan file yang akan di cache
//offline quickstart
var CACHE_NAME = 'atangsasmita-cache';
var urlsToCache = [
'.',
'index.html',
'css/bootstrap.css',
'style/style.css',
'image/img.jpg',
'https://fonts.googleapis.com/icon?family=Material+Icons',
'js/jquery-3.3.1.min.js',
'js/bootstrap.min.js',
'js/jquery.easing.1.3.js'
];
//STEP-5 mengsintall filel yang sudah di daftarkan untuk di cache
//script di atas membuat variabel bernama CACHE_NAME dengan value 'static-cache', kemudian ada array yang di mana terdapat file yang akan terdaftar untuk di cache dan ketika jaringan offline file yang sudah di cache itu masih berjalan di atas browser
		self.addEventListener('install', function(event) {
			event.waitUntil(
				caches.open(CACHE_NAME)
				.then(function(cache) {
			return cache.addAll(urlsToCache);
				})
			);
		});
//script di atas yaitu mengisntall fungsi cache dengan mengambil semua file yang sudah di cache dari dari variabel CACHE_NAME		
//STEP-6 megefetch file response dari server
self.addEventListener('fetch', function(event) {
		event.respondWith(
			caches.match(event.request)
			.then(function(response) {
		return response || fetchAndCache(event.request);
				})
			);
		});
//STEP-7 mengambil file yang sudah di cache ketika jaringan offline
//script di atas akan mengfetch file yang berada pada CACHE_NAME
function fetchAndCache(url) {
	return fetch(url)
		.then(function(response) {
		// Check if we received a valid response
		if (!response.ok) {
			throw Error(response.statusText);
			} 
		return caches.open(CACHE_NAME)
			.then(function(cache) {
			cache.put(url, response.clone());
		return response;
		});
	})
//script di atas jika tidak ada responese dari server atau offline maka akan menmapilkan error dan akan mereturn file yang sudah di cache di dalam CACHE_NAME kemudian di render ke browser	
	.catch(function(error) {
	console.log('Request failed:', error);
// You could return a custom offline 404 page here
	});
	}



