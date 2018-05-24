<?php include('../deepPageHeader.php'); ?>	
<!--Link Required for Shopify Buttons to work-->
<script type="text/javascript" src="https://sdks.shopifycdn.com/js-buy-sdk/v0/latest/shopify-buy.umd.polyfilled.min.js"></script>

	<style>
		.shopifyButton-container {
		display: flex;
		justify-content: space-around;
		flex-wrap:wrap;
		align-items: center;
		}
		.shopify-buy__btn-wrapper {
			margin-top:0px !important;
		}
	</style>

<!--Scrips Per Shopify Buy Button-->
<!--Night cream-->
<script type="text/javascript">
	/*<![CDATA[*/

	(function () {
	var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
	if (window.ShopifyBuy) {
		if (window.ShopifyBuy.UI) {
		ShopifyBuyInit();
		} else {
		loadScript();
		}
	} else {
		loadScript();
	}

	function loadScript() {
		var script = document.createElement('script');
		script.async = true;
		script.src = scriptURL;
		(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
		script.onload = ShopifyBuyInit;
	}

	function ShopifyBuyInit() {
		var client = ShopifyBuy.buildClient({
		domain: 'neriumskincare-products.myshopify.com',
		apiKey: '2cdb9a49c2303d785f531d4e716b34c4',
		appId: '6',
		});

		ShopifyBuy.UI.onReady(client).then(function (ui) {
		ui.createComponent('product', {
			id: [11499393290],
			node: document.getElementById('product-component-8683e9dba0a'),
			moneyFormat: '%24%7B%7Bamount%7D%7D',
			options: {
	"product": {
		"variantId": "all",
		"width": "240px",
		"contents": {
		"img": false,
		"imgWithCarousel": false,
		"title": false,
		"variantTitle": false,
		"price": false,
		"description": false,
		"buttonWithQuantity": false,
		"quantity": false
		},
		"styles": {
		"product": {
			"text-align": "left",
			"@media (min-width: 601px)": {
			"max-width": "100%",
			"margin-left": "0",
			"margin-bottom": "50px"
			}
		},
		"button": {
			"background-color": "#a1d2e6",
			"font-family": "Arial, sans-serif",
			"padding-left": "8px",
			"padding-right": "8px",
			"display": "block",
        	"margin": "0 auto",
			":hover": {
			"background-color": "#91bdcf"
			},
			":focus": {
			"background-color": "#91bdcf"
			},
			"font-weight": "normal"
		},
		"variantTitle": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"title": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal",
			"color": "#808080"
		},
		"description": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"price": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"compareAt": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal",
			"color": "#4c4c4c",
			"font-size": "12px"
		}
		}
	},
	"cart": {
		"contents": {
		"button": true
		},
		"styles": {
		"button": {
			"background-color": "#a1d2e6",
			"font-family": "Arial, sans-serif",
			":hover": {
			"background-color": "#91bdcf"
			},
			":focus": {
			"background-color": "#91bdcf"
			},
			"font-weight": "normal"
		},
		"footer": {
			"background-color": "#ffffff"
		}
		}
	},
	"modalProduct": {
		"contents": {
		"img": false,
		"imgWithCarousel": true,
		"variantTitle": false,
		"buttonWithQuantity": true,
		"button": false,
		"quantity": false
		},
		"styles": {
		"product": {
			"@media (min-width: 601px)": {
			"max-width": "100%",
			"margin-left": "0px",
			"margin-bottom": "0px"
			}
		},
		"button": {
			"background-color": "#a1d2e6",
			"font-family": "Arial, sans-serif",
			"padding-left": "8px",
			"padding-right": "8px",
			":hover": {
			"background-color": "#91bdcf"
			},
			":focus": {
			"background-color": "#91bdcf"
			},
			"font-weight": "normal"
		},
		"variantTitle": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"title": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"description": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"price": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"compareAt": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		}
		}
	},
	"toggle": {
		"styles": {
		"toggle": {
			"font-family": "Arial, sans-serif",
			"background-color": "#a1d2e6",
			":hover": {
			"background-color": "#91bdcf"
			},
			":focus": {
			"background-color": "#91bdcf"
			},
			"font-weight": "normal"
		}
		}
	},
	"option": {
		"styles": {
		"label": {
			"font-family": "Arial, sans-serif"
		},
		"select": {
			"font-family": "Arial, sans-serif"
		}
		}
	},
	"productSet": {
		"styles": {
		"products": {
			"@media (min-width: 601px)": {
			"margin-left": "-20px"
			}
		}
		}
	}
	}
		});
		});
	}
	})();
	/*]]>*/
</script>
<!--Day cream-->
<script type="text/javascript">
	/*<![CDATA[*/

	(function () {
	var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
	if (window.ShopifyBuy) {
		if (window.ShopifyBuy.UI) {
		ShopifyBuyInit();
		} else {
		loadScript();
		}
	} else {
		loadScript();
	}

	function loadScript() {
		var script = document.createElement('script');
		script.async = true;
		script.src = scriptURL;
		(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
		script.onload = ShopifyBuyInit;
	}

	function ShopifyBuyInit() {
		var client = ShopifyBuy.buildClient({
		domain: 'neriumskincare-products.myshopify.com',
		apiKey: '2cdb9a49c2303d785f531d4e716b34c4',
		appId: '6',
		});

		ShopifyBuy.UI.onReady(client).then(function (ui) {
		ui.createComponent('product', {
			id: [11499382474],
			node: document.getElementById('product-component-c857cfc0b09'),
			moneyFormat: '%24%7B%7Bamount%7D%7D',
			options: {
	"product": {
		"variantId": "all",
		"width": "240px",
		"contents": {
		"img": false,
		"imgWithCarousel": false,
		"title": false,
		"variantTitle": false,
		"price": false,
		"description": false,
		"buttonWithQuantity": false,
		"quantity": false
		},
		"styles": {
		"product": {
			"text-align": "left",
			"@media (min-width: 601px)": {
			"max-width": "100%",
			"margin-left": "0",
			"margin-bottom": "50px"
			}
		},
		"button": {
			"background-color": "#a1d2e6",
			"font-family": "Arial, sans-serif",
			"padding-left": "8px",
			"padding-right": "8px",
			"display": "block",
			"margin": "0 auto",
			":hover": {
			"background-color": "#91bdcf"
			},
			":focus": {
			"background-color": "#91bdcf"
			},
			"font-weight": "normal"
		},
		"variantTitle": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"title": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal",
			"color": "#808080"
		},
		"description": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"price": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"compareAt": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal",
			"color": "#4c4c4c",
			"font-size": "12px"
		}
		}
	},
	"cart": {
		"contents": {
		"button": true
		},
		"styles": {
		"button": {
			"background-color": "#a1d2e6",
			"font-family": "Arial, sans-serif",
			":hover": {
			"background-color": "#91bdcf"
			},
			":focus": {
			"background-color": "#91bdcf"
			},
			"font-weight": "normal"
		},
		"footer": {
			"background-color": "#ffffff"
		}
		}
	},
	"modalProduct": {
		"contents": {
		"img": false,
		"imgWithCarousel": true,
		"variantTitle": false,
		"buttonWithQuantity": true,
		"button": false,
		"quantity": false
		},
		"styles": {
		"product": {
			"@media (min-width: 601px)": {
			"max-width": "100%",
			"margin-left": "0px",
			"margin-bottom": "0px"
			}
		},
		"button": {
			"background-color": "#a1d2e6",
			"font-family": "Arial, sans-serif",
			"padding-left": "8px",
			"padding-right": "8px",
			":hover": {
			"background-color": "#91bdcf"
			},
			":focus": {
			"background-color": "#91bdcf"
			},
			"font-weight": "normal"
		},
		"variantTitle": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"title": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"description": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"price": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"compareAt": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		}
		}
	},
	"toggle": {
		"styles": {
		"toggle": {
			"font-family": "Arial, sans-serif",
			"background-color": "#a1d2e6",
			":hover": {
			"background-color": "#91bdcf"
			},
			":focus": {
			"background-color": "#91bdcf"
			},
			"font-weight": "normal"
		}
		}
	},
	"option": {
		"styles": {
		"label": {
			"font-family": "Arial, sans-serif"
		},
		"select": {
			"font-family": "Arial, sans-serif"
		}
		}
	},
	"productSet": {
		"styles": {
		"products": {
			"@media (min-width: 601px)": {
			"margin-left": "-20px"
			}
		}
		}
	}
	}
		});
		});
	}
	})();
	/*]]>*/
</script>
<!--Combo cream-->
<!-- DELETE until DAY and night Duo becomes availale
<script type="text/javascript">
	/*<![CDATA[*/

	(function () {
	var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
	if (window.ShopifyBuy) {
		if (window.ShopifyBuy.UI) {
		ShopifyBuyInit();
		} else {
		loadScript();
		}
	} else {
		loadScript();
	}

	function loadScript() {
		var script = document.createElement('script');
		script.async = true;
		script.src = scriptURL;
		(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
		script.onload = ShopifyBuyInit;
	}

	function ShopifyBuyInit() {
		var client = ShopifyBuy.buildClient({
		domain: 'neriumskincare-products.myshopify.com',
		apiKey: '2cdb9a49c2303d785f531d4e716b34c4',
		appId: '6',
		});

		ShopifyBuy.UI.onReady(client).then(function (ui) {
		ui.createComponent('product', {
			id: [437476622346],
			node: document.getElementById('product-component-d8ea795e602'),
			moneyFormat: '%24%7B%7Bamount%7D%7D',
			options: {
	"product": {
		"variantId": "all",
		"width": "240px",
		"contents": {
		"img": false,
		"imgWithCarousel": false,
		"title": false,
		"variantTitle": false,
		"price": false,
		"description": false,
		"buttonWithQuantity": false,
		"quantity": false
		},
		"styles": {
		"product": {
			"text-align": "right",
			"@media (min-width: 601px)": {
			"max-width": "100%",
			"margin-left": "0",
			"margin-bottom": "50px"
			}
		},
		"button": {
			"background-color": "#a1d2e6",
			"font-family": "Arial, sans-serif",
			"padding-left": "8px",
			"padding-right": "8px",
			"display": "block",
        	"margin": "0 auto",
			":hover": {
			"background-color": "#91bdcf"
			},
			":focus": {
			"background-color": "#91bdcf"
			},
			"font-weight": "normal"
		},
		"variantTitle": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"title": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal",
			"color": "#808080"
		},
		"description": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"price": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"compareAt": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal",
			"color": "#4c4c4c",
			"font-size": "12px"
		}
		}
	},
	"cart": {
		"contents": {
		"button": true
		},
		"styles": {
		"button": {
			"background-color": "#a1d2e6",
			"font-family": "Arial, sans-serif",
			":hover": {
			"background-color": "#91bdcf"
			},
			":focus": {
			"background-color": "#91bdcf"
			},
			"font-weight": "normal"
		},
		"footer": {
			"background-color": "#ffffff"
		}
		}
	},
	"modalProduct": {
		"contents": {
		"img": false,
		"imgWithCarousel": true,
		"variantTitle": false,
		"buttonWithQuantity": true,
		"button": false,
		"quantity": false
		},
		"styles": {
		"product": {
			"@media (min-width: 601px)": {
			"max-width": "100%",
			"margin-left": "0px",
			"margin-bottom": "0px"
			}
		},
		"button": {
			"background-color": "#a1d2e6",
			"font-family": "Arial, sans-serif",
			"padding-left": "8px",
			"padding-right": "8px",
			":hover": {
			"background-color": "#91bdcf"
			},
			":focus": {
			"background-color": "#91bdcf"
			},
			"font-weight": "normal"
		},
		"variantTitle": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"title": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"description": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"price": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"compareAt": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		}
		}
	},
	"toggle": {
		"styles": {
		"toggle": {
			"font-family": "Arial, sans-serif",
			"background-color": "#a1d2e6",
			":hover": {
			"background-color": "#91bdcf"
			},
			":focus": {
			"background-color": "#91bdcf"
			},
			"font-weight": "normal"
		}
		}
	},
	"option": {
		"styles": {
		"label": {
			"font-family": "Arial, sans-serif"
		},
		"select": {
			"font-family": "Arial, sans-serif"
		}
		}
	},
	"productSet": {
		"styles": {
		"products": {
			"@media (min-width: 601px)": {
			"margin-left": "-20px"
			}
		}
		}
	}
	}
		});
		});
	}
	})();
	/*]]>*/
</script>
END-->
<!--Bodycream-->
<!--DELETE when body available
<script type="text/javascript">
	/*<![CDATA[*/
	(function () {
	var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
	if (window.ShopifyBuy) {
		if (window.ShopifyBuy.UI) {
		ShopifyBuyInit();
		} else {
		loadScript();
		}
	} else {
		loadScript();
	}

	function loadScript() {
		var script = document.createElement('script');
		script.async = true;
		script.src = scriptURL;
		(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
		script.onload = ShopifyBuyInit;
	}

	function ShopifyBuyInit() {
		var client = ShopifyBuy.buildClient({
		domain: 'neriumskincare-products.myshopify.com',
		apiKey: '2cdb9a49c2303d785f531d4e716b34c4',
		appId: '6',
		});

		ShopifyBuy.UI.onReady(client).then(function (ui) {
		ui.createComponent('product', {
			id: [11518862154],
			node: document.getElementById('product-component-f6809364766'),
			moneyFormat: '%24%7B%7Bamount%7D%7D',
			options: {
	"product": {
		"variantId": "all",
		"width": "240px",
		"contents": {
		"img": false,
		"imgWithCarousel": false,
		"title": false,
		"variantTitle": false,
		"price": false,
		"description": false,
		"buttonWithQuantity": false,
		"quantity": false
		},
		"styles": {
		"product": {
			"text-align": "left",
			"@media (min-width: 601px)": {
			"max-width": "100%",
			"margin-left": "0",
			"margin-bottom": "50px"
			}
		},
		"button": {
			"background-color": "#a1d2e6",
			"font-family": "Arial, sans-serif",
			"padding-left": "8px",
			"padding-right": "8px",
			"display": "block",
			"margin": "0 auto",
			":hover": {
			"background-color": "#91bdcf"
			},
			":focus": {
			"background-color": "#91bdcf"
			},
			"font-weight": "normal"
		},
		"variantTitle": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"title": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal",
			"color": "#808080"
		},
		"description": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"price": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"compareAt": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal",
			"color": "#4c4c4c",
			"font-size": "12px"
		}
		}
	},
	"cart": {
		"contents": {
		"button": true
		},
		"styles": {
		"button": {
			"background-color": "#a1d2e6",
			"font-family": "Arial, sans-serif",
			":hover": {
			"background-color": "#91bdcf"
			},
			":focus": {
			"background-color": "#91bdcf"
			},
			"font-weight": "normal"
		},
		"footer": {
			"background-color": "#ffffff"
		}
		}
	},
	"modalProduct": {
		"contents": {
		"img": false,
		"imgWithCarousel": true,
		"variantTitle": false,
		"buttonWithQuantity": true,
		"button": false,
		"quantity": false
		},
		"styles": {
		"product": {
			"@media (min-width: 601px)": {
			"max-width": "100%",
			"margin-left": "0px",
			"margin-bottom": "0px"
			}
		},
		"button": {
			"background-color": "#a1d2e6",
			"font-family": "Arial, sans-serif",
			"padding-left": "8px",
			"padding-right": "8px",
			":hover": {
			"background-color": "#91bdcf"
			},
			":focus": {
			"background-color": "#91bdcf"
			},
			"font-weight": "normal"
		},
		"variantTitle": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"title": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"description": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"price": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"compareAt": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		}
		}
	},
	"toggle": {
		"styles": {
		"toggle": {
			"font-family": "Arial, sans-serif",
			"background-color": "#a1d2e6",
			":hover": {
			"background-color": "#91bdcf"
			},
			":focus": {
			"background-color": "#91bdcf"
			},
			"font-weight": "normal"
		}
		}
	},
	"option": {
		"styles": {
		"label": {
			"font-family": "Arial, sans-serif"
		},
		"select": {
			"font-family": "Arial, sans-serif"
		}
		}
	},
	"productSet": {
		"styles": {
		"products": {
			"@media (min-width: 601px)": {
			"margin-left": "-20px"
			}
		}
		}
	}
	}
		});
		});
	}
	})();
	/*]]>*/
</script>  
END-->
<!--Dermal cream-->
<script type="text/javascript">
	/*<![CDATA[*/

	(function () {
	var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
	if (window.ShopifyBuy) {
		if (window.ShopifyBuy.UI) {
		ShopifyBuyInit();
		} else {
		loadScript();
		}
	} else {
		loadScript();
	}

	function loadScript() {
		var script = document.createElement('script');
		script.async = true;
		script.src = scriptURL;
		(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
		script.onload = ShopifyBuyInit;
	}

	function ShopifyBuyInit() {
		var client = ShopifyBuy.buildClient({
		domain: 'neriumskincare-products.myshopify.com',
		apiKey: '2cdb9a49c2303d785f531d4e716b34c4',
		appId: '6',
		});

		ShopifyBuy.UI.onReady(client).then(function (ui) {
		ui.createComponent('product', {
			id: [320240680970],
			node: document.getElementById('product-component-982b1d5c493'),
			moneyFormat: '%24%7B%7Bamount%7D%7D',
			options: {
	"product": {
		"variantId": "all",
		"width": "240px",
		"contents": {
		"img": false,
		"imgWithCarousel": false,
		"title": false,
		"variantTitle": false,
		"price": false,
		"description": false,
		"buttonWithQuantity": false,
		"quantity": false
		},
		"styles": {
		"product": {
			"text-align": "right",
			"@media (min-width: 601px)": {
			"max-width": "100%",
			"margin-left": "0",
			"margin-bottom": "50px"
			}
		},
		"button": {
			"background-color": "#a1d2e6",
			"font-family": "Arial, sans-serif",
			"padding-left": "8px",
			"padding-right": "8px",
			"display": "block",
			"margin": "0 auto",
			":hover": {
			"background-color": "#91bdcf"
			},
			":focus": {
			"background-color": "#91bdcf"
			},
			"font-weight": "normal"
		},
		"variantTitle": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"title": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal",
			"color": "#808080"
		},
		"description": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"price": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"compareAt": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal",
			"color": "#4c4c4c",
			"font-size": "12px"
		}
		}
	},
	"cart": {
		"contents": {
		"button": true
		},
		"styles": {
		"button": {
			"background-color": "#a1d2e6",
			"font-family": "Arial, sans-serif",
			":hover": {
			"background-color": "#91bdcf"
			},
			":focus": {
			"background-color": "#91bdcf"
			},
			"font-weight": "normal"
		},
		"footer": {
			"background-color": "#ffffff"
		}
		}
	},
	"modalProduct": {
		"contents": {
		"img": false,
		"imgWithCarousel": true,
		"variantTitle": false,
		"buttonWithQuantity": true,
		"button": false,
		"quantity": false
		},
		"styles": {
		"product": {
			"@media (min-width: 601px)": {
			"max-width": "100%",
			"margin-left": "0px",
			"margin-bottom": "0px"
			}
		},
		"button": {
			"background-color": "#a1d2e6",
			"font-family": "Arial, sans-serif",
			"padding-left": "8px",
			"padding-right": "8px",
			":hover": {
			"background-color": "#91bdcf"
			},
			":focus": {
			"background-color": "#91bdcf"
			},
			"font-weight": "normal"
		},
		"variantTitle": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"title": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"description": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"price": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"compareAt": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		}
		}
	},
	"toggle": {
		"styles": {
		"toggle": {
			"font-family": "Arial, sans-serif",
			"background-color": "#a1d2e6",
			":hover": {
			"background-color": "#91bdcf"
			},
			":focus": {
			"background-color": "#91bdcf"
			},
			"font-weight": "normal"
		}
		}
	},
	"option": {
		"styles": {
		"label": {
			"font-family": "Arial, sans-serif"
		},
		"select": {
			"font-family": "Arial, sans-serif"
		}
		}
	},
	"productSet": {
		"styles": {
		"products": {
			"@media (min-width: 601px)": {
			"margin-left": "-20px"
			}
		}
		}
	}
	}
		});
		});
	}
	})();
	/*]]>*/
</script>
<!--Psorasis cream-->
<script type="text/javascript">
	/*<![CDATA[*/

	(function () {
	var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
	if (window.ShopifyBuy) {
		if (window.ShopifyBuy.UI) {
		ShopifyBuyInit();
		} else {
		loadScript();
		}
	} else {
		loadScript();
	}

	function loadScript() {
		var script = document.createElement('script');
		script.async = true;
		script.src = scriptURL;
		(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
		script.onload = ShopifyBuyInit;
	}

	function ShopifyBuyInit() {
		var client = ShopifyBuy.buildClient({
		domain: 'neriumskincare-products.myshopify.com',
		apiKey: '2cdb9a49c2303d785f531d4e716b34c4',
		appId: '6',
		});

		ShopifyBuy.UI.onReady(client).then(function (ui) {
		ui.createComponent('product', {
			id: [11887200714],
			node: document.getElementById('product-component-eac131e17f6'),
			moneyFormat: '%24%7B%7Bamount%7D%7D',
			options: {
	"product": {
		"variantId": "all",
		"width": "240px",
		"contents": {
		"img": false,
		"imgWithCarousel": false,
		"title": false,
		"variantTitle": false,
		"price": false,
		"description": false,
		"buttonWithQuantity": false,
		"quantity": false
		},
		"styles": {
		"product": {
			"text-align": "right",
			"@media (min-width: 601px)": {
			"max-width": "100%",
			"margin-left": "0",
			"margin-bottom": "50px"
			}
		},
		"button": {
			"background-color": "#a1d2e6",
			"font-family": "Arial, sans-serif",
			"padding-left": "8px",
			"padding-right": "8px",
			"display": "block",
			"margin": "0 auto",
			":hover": {
			"background-color": "#91bdcf"
			},
			":focus": {
			"background-color": "#91bdcf"
			},
			"font-weight": "normal"
		},
		"variantTitle": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"title": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal",
			"color": "#808080"
		},
		"description": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"price": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"compareAt": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal",
			"color": "#4c4c4c",
			"font-size": "12px"
		}
		}
	},
	"cart": {
		"contents": {
		"button": true
		},
		"styles": {
		"button": {
			"background-color": "#a1d2e6",
			"font-family": "Arial, sans-serif",
			":hover": {
			"background-color": "#91bdcf"
			},
			":focus": {
			"background-color": "#91bdcf"
			},
			"font-weight": "normal"
		},
		"footer": {
			"background-color": "#ffffff"
		}
		}
	},
	"modalProduct": {
		"contents": {
		"img": false,
		"imgWithCarousel": true,
		"variantTitle": false,
		"buttonWithQuantity": true,
		"button": false,
		"quantity": false
		},
		"styles": {
		"product": {
			"@media (min-width: 601px)": {
			"max-width": "100%",
			"margin-left": "0px",
			"margin-bottom": "0px"
			}
		},
		"button": {
			"background-color": "#a1d2e6",
			"font-family": "Arial, sans-serif",
			"padding-left": "8px",
			"padding-right": "8px",
			":hover": {
			"background-color": "#91bdcf"
			},
			":focus": {
			"background-color": "#91bdcf"
			},
			"font-weight": "normal"
		},
		"variantTitle": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"title": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"description": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"price": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"compareAt": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		}
		}
	},
	"toggle": {
		"styles": {
		"toggle": {
			"font-family": "Arial, sans-serif",
			"background-color": "#a1d2e6",
			":hover": {
			"background-color": "#91bdcf"
			},
			":focus": {
			"background-color": "#91bdcf"
			},
			"font-weight": "normal"
		}
		}
	},
	"option": {
		"styles": {
		"label": {
			"font-family": "Arial, sans-serif"
		},
		"select": {
			"font-family": "Arial, sans-serif"
		}
		}
	},
	"productSet": {
		"styles": {
		"products": {
			"@media (min-width: 601px)": {
			"margin-left": "-20px"
			}
		}
		}
	}
	}
		});
		});
	}
	})();
	/*]]>*/
</script>
<!--Cold Sore cream-->
<script type="text/javascript">
	/*<![CDATA[*/

	(function () {
	var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
	if (window.ShopifyBuy) {
		if (window.ShopifyBuy.UI) {
		ShopifyBuyInit();
		} else {
		loadScript();
		}
	} else {
		loadScript();
	}

	function loadScript() {
		var script = document.createElement('script');
		script.async = true;
		script.src = scriptURL;
		(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
		script.onload = ShopifyBuyInit;
	}

	function ShopifyBuyInit() {
		var client = ShopifyBuy.buildClient({
		domain: 'neriumskincare-products.myshopify.com',
		apiKey: '2cdb9a49c2303d785f531d4e716b34c4',
		appId: '6',
		});

		ShopifyBuy.UI.onReady(client).then(function (ui) {
		ui.createComponent('product', {
			id: [11887094858],
			node: document.getElementById('product-component-b1efa04609b'),
			moneyFormat: '%24%7B%7Bamount%7D%7D',
			options: {
	"product": {
		"variantId": "all",
		"width": "240px",
		"contents": {
		"img": false,
		"imgWithCarousel": false,
		"title": false,
		"variantTitle": false,
		"price": false,
		"description": false,
		"buttonWithQuantity": false,
		"quantity": false
		},
		"styles": {
		"product": {
			"text-align": "right",
			"@media (min-width: 601px)": {
			"max-width": "100%",
			"margin-left": "0",
			"margin-bottom": "50px"
			}
		},
		"button": {
			"background-color": "#a1d2e6",
			"font-family": "Arial, sans-serif",
			"padding-left": "8px",
			"padding-right": "8px",
			"display": "block",
			"margin": "0 auto",
			":hover": {
			"background-color": "#91bdcf"
			},
			":focus": {
			"background-color": "#91bdcf"
			},
			"font-weight": "normal"
		},
		"variantTitle": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"title": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal",
			"color": "#808080"
		},
		"description": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"price": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"compareAt": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal",
			"color": "#4c4c4c",
			"font-size": "12px"
		}
		}
	},
	"cart": {
		"contents": {
		"button": true
		},
		"styles": {
		"button": {
			"background-color": "#a1d2e6",
			"font-family": "Arial, sans-serif",
			":hover": {
			"background-color": "#91bdcf"
			},
			":focus": {
			"background-color": "#91bdcf"
			},
			"font-weight": "normal"
		},
		"footer": {
			"background-color": "#ffffff"
		}
		}
	},
	"modalProduct": {
		"contents": {
		"img": false,
		"imgWithCarousel": true,
		"variantTitle": false,
		"buttonWithQuantity": true,
		"button": false,
		"quantity": false
		},
		"styles": {
		"product": {
			"@media (min-width: 601px)": {
			"max-width": "100%",
			"margin-left": "0px",
			"margin-bottom": "0px"
			}
		},
		"button": {
			"background-color": "#a1d2e6",
			"font-family": "Arial, sans-serif",
			"padding-left": "8px",
			"padding-right": "8px",
			":hover": {
			"background-color": "#91bdcf"
			},
			":focus": {
			"background-color": "#91bdcf"
			},
			"font-weight": "normal"
		},
		"variantTitle": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"title": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"description": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"price": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		},
		"compareAt": {
			"font-family": "Arial, sans-serif",
			"font-weight": "normal"
		}
		}
	},
	"toggle": {
		"styles": {
		"toggle": {
			"font-family": "Arial, sans-serif",
			"background-color": "#a1d2e6",
			":hover": {
			"background-color": "#91bdcf"
			},
			":focus": {
			"background-color": "#91bdcf"
			},
			"font-weight": "normal"
		}
		}
	},
	"option": {
		"styles": {
		"label": {
			"font-family": "Arial, sans-serif"
		},
		"select": {
			"font-family": "Arial, sans-serif"
		}
		}
	},
	"productSet": {
		"styles": {
		"products": {
			"@media (min-width: 601px)": {
			"margin-left": "-20px"
			}
		}
		}
	}
	}
		});
		});
	}
	})();
	/*]]>*/
</script>


	<div class="row">
		<div class="col-sm-12">
			<h1 class="h1-index space-above"> BEAUTY AND HEALTH PRODUCTS </h1>
		</div>	
	</div>

	<div class="row">
		<div class="col-sm-12">
			<div class="productsLine"></div>
            <h2 class="h2-index">Free Shipping</h2>
		</div>	
	</div>
	
	<div class="shopifyButton-container"> 
		<div id='product-component-8683e9dba0a'>
			<a href="../newProducts-Advanced-Night/index.php">
				<img src="../images/Updated-Advanced-Packaging/NSC.ADV.NC.Bottle.HR.CMYK.V2.png" alt="Advanced Nightly Face Treatment" height="300px" class="productImg-responsive"/>
				<p class="p-index">Nerium Advanced Nightly Face Treatment</p>
				<p class="p-index red-text">Sales Price $32</p>
				<p class="p-index line-through">$120</p>
			</a>
		</div>
		
		<div id='product-component-c857cfc0b09'>
			<a href="../newProducts-Advanced-Day/index.php">
				<img src="../images/Updated-Advanced-Packaging/NSC.ADV.DC.Bottle.HR.CMYK.V2.png" alt="Advanced Daily Face Cream" height="300px"class="productImg-responsive"/>
				<p class="p-index">Nerium Advanced Daily <br/>Face Cream</p>
				<p class="p-index red-text">Sales Price $32</p>
				<p class="p-index line-through">$100</p>
			</a>
		</div>
		
		<!--<div id='product-component-d8ea795e602'>
			<a href="#">
				<img src="../images/AdvancedLine/NightDayCombo.png" alt="Advanced Daily Face Cream and Nightly Face Treatment" height="300px"class="productImg-responsive"/>
				<p class="p-index">Nerium Advanced <br/>Daily and Nightly Duo</p>
				<p class="p-index red-text">Sales Price $210</p>
				<p class="p-index line-through">$2100</p>
			</a>
		</div>-->

		<div id='product-component-f6809364766!!DELETEWHENAVAILABLE'>
			<a href="../newProducts-Advanced-Firm/index.php">
				<img src="../images/NSC.NADA.BF.Tube.Front.200ml.LR.RGB.jpg" alt="Advanced Firming Cream" height="300px"class="productImg-responsive"/>
				<p class="p-index">NeriumFirm Advanced <br/>Firming Body Cream</p>
				<p class="p-index red-text">Sales Price $32</p>
				<p class="p-index line-through">$120</p>
			</a>
			<div class="coming-soon-btn-container">
				<button class="coming-soon-btn">COMING SOON</button>
			</div>
		</div>
	
		<div id='product-component-982b1d5c493'>
			<a href="../newProducts-Dermal/index.php">
				<img src="../images/TL-packaging-web/Therapy.Dermal.Bottle-SMALL2.jpg" alt="Dermal Therapy for Pain Relief" height="300px" class="productImg-responsive"/>
				<p class="p-index">NeriumRX Dermal Pain <br/>Relief Therapy</p>
				<p class="p-index red-text">Sales Price $22</p>
				<p class="p-index line-through">$43.95</p>
			</a>
			<!-- DELETE IF COMING SOON 
            <div class="coming-soon-btn-container">
				<button class="coming-soon-btn">COMING SOON</button>
			</div>
            -->
		</div>
		
		<div id='product-component-eac131e17f6'>
			<a href="../newProducts-Psoriasis/index.php">
				<img src="../images/TL-packaging-web/Therapy.Psoriasis.bottle-SMALL2.jpg" alt="Psoriasis Therapy for Pain Relief" height="300px" class="productImg-responsive"/>
				<p class="p-index">NeriumRX Psoriasis <br/>Relief Therapy</p>
				<p class="p-index red-text">Sales Price $20</p>
				<p class="p-index line-through">$39.95</p>
			</a>
			<!-- DELETE IF COMING SOON 
            <div class="coming-soon-btn-container">
				<button class="coming-soon-btn">COMING SOON</button>
			</div>
            -->
		</div>

		<div id='product-component-b1efa04609b'>
			<a href="../newProducts-ColdSore/index.php">
				<img src="../images/TL-packaging-web/Therapy.CS.LM.Dual.Group-BOTTLES-SMALL.jpg" alt="Cold Sore Duo Therapy for Cold Sore relief and anti-reoccurance" height="300px" class="productImg-responsive"/>
				<p class="p-index">NeriumCS Cold Sore Therapy <br/>and Daily Lip Maintance</p>
				<p class="p-index red-text">Sales Price $18</p>
				<p class="p-index line-through">$29.95</p>
			</a>
			<!-- DELETE IF COMING SOON 
            <div class="coming-soon-btn-container">
				<button class="coming-soon-btn">COMING SOON</button>
			</div>
            -->
		</div>
		
		
  	</div>
	

<?php include('../deepPageFooter.php'); ?>

