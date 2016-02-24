var dirTema = document.querySelector("meta[name='theme_path']").getAttribute('content');

require.config({
	baseUrl: '/',
    urlArgs: "v=004",
    waitSeconds : 30,
	shim: {
		'jq_ui' : {
			deps : ['jquery'],
		},
		'bxSlider' : {
			deps : ['jquery'],
		},
		'elevateZoom' : {
			deps : ['jquery'],
		},
		"noty" : {
			deps : ['jquery'],
		},
	},

	paths: {
		// LIBRARY
		jquery 			: dirTema+'/assets/js/lib/jquery.min',
		bxSlider		: dirTema+'/assets/js/lib/jquery.bxslider.min',
		elevateZoom		: dirTema+'/assets/js/lib/jquery.elevatezoom',

		// MAIN LIBRARY
		router          : 'js/router',
		cart			: 'js/shop_cart',
		jq_ui			: 'js/jquery-ui',
		noty			: 'js/jquery.noty',

		// CONTROLLER
		home            : dirTema+'/assets/js/pages/home',
		main            : dirTema+'/assets/js/pages/default',
		produk          : dirTema+'/assets/js/pages/produk',
	}
});
require([
	'router',
	'main',
	'cart'
], function(router,main,cart)
{
	// HOME
	router.define('/','home@run');
	router.define('home', 'home@run');

	// PRODUK
	router.define('produk/*', 'produk@run');
	
	router.run();
	main.run();
	cart.run();
});