<?php include('../deepPageHeader.php'); ?>	
<!--Link Required for Shopify Buttons to work-->
<script type="text/javascript" src="https://sdks.shopifycdn.com/js-buy-sdk/v0/latest/shopify-buy.umd.polyfilled.min.js"></script>
<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
  <script src="js/jssor.slider-25.2.1.min.js" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<style>
		/* Leave these in page */
			li {
				color:#C3002F;
			}
			button { 
				border:none; 
			} 
			.shopify-buy__btn-wrapper {
				margin-top:0px !important;
			}
			.shopifyButton-container {
			display: flex;
			justify-content: space-around;
			flex-wrap:wrap;
			align-items: center;
			}
			#product-component-6b8cccb69f9 {
				max-width: none !important;
				margin-bottom: 10px;
			}
		/* END */
	</style>

	<div class="row">
		<div class="col-sm-12">
			<h1 class="h1-individuals">NeriumRX Dermal Pain Relief Therapy</h1>
		</div>	
	</div>

	<div class="row">
		<div class="col-sm-12">
			<div class="productsLine"></div>
		</div>	
	</div>


	<div class="col-sm-6 move-center">
		<img src="../images/TL-packaging-web/Therapy.Dermal.Group-SMALL.jpg" alt="Dermal Pain Relief Therapy Bottle and Boxing" height="500px" class="productImg-responsive"/>
	</div>

	<div class="col-sm-6">
		<h2 class="title-individual-h2">NeriumRX Dermal Pain Relief Therapy 
		<br /> $22 <span class="line-through text-thinnest">$42</span>| <span class="title-individual-h2-small">30ml / 1 fl. oz<span></h2>
		<div id='product-component-6b8cccb69f9'><br/></div>
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
					node: document.getElementById('product-component-6b8cccb69f9'),
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
					"padding-left": "25px",
					"padding-right": "25px",
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
		

		<div class="individual-menu" >
			<button class="menu-choices" id="benefits">Benefits<div class="benefits-border-bottom"></div></button>
			<button class="menu-choices" id="keyIngredients">Ingredients<div class="keyIngredients-border-bottom"></div></button>
			<button class="menu-choices" id="how2">Usage<div class="how2-border-bottom"></div></button>
		</div>
	

		<span class="benefits-text">
		<p>Introducing the first ever fast acting Dermal Pain Relief Therapy. This pain relieving formula is designed to provide instant relief and support to symptoms of shingles and various other skin conditions. With powerful skin protecting and effective ingredients, this formulation is a fast-acting spray that will quickly help to relieve symptoms such as pain, itching, tingling and burning caused from various skin conditions such as shingles, sunburns, scrapes and insect bites. </p>
		</span>

		<span class="ing-text">
			<ul class="add-list-bullets space-above">
				<li><p>Camphor - an effective topical pain reliever. Known for its duel hot and cold activity, it numbs and cools the nerve endings then warms the painful area as it increases blood flow to stiff and sore muscles or joints. In addition, this essential oil’s odor gives off a calming, soothing effect.</p></li>
				<li><p>Patented Nerium Oleander Extract - Powerful antioxidant and anti-microbial activity.</p></li>
				<li><p>Biova – Antioxidant and helps increase production of collagen and elastin by dermal fibroblasts.</p></li>
				<li><p>Tea Tree Oil - a natural infection fighter</p></li>
				<li><p>Lavender oil – helps numb the area, working to relieve pain.</p></li>
				<li><p>Dimethicone - creates a protective barrier on top of the skin, effectively preventing skin infections. </p></li>
			</ul>
			<section class="tabBox">
				<div class="hideSeekTab">
					<div class="labelBox">
					<h3 class="title">View Full Ingredients</h3>
					<div class="iconBox">
						<span class="line left"></span>
						<span class="line right"></span>
					</div>
					</div>
					<p class="text">CAMPHOR (3.0 %), <br/> ALOE BARBADENSIS LEAF JUICE, NERIUM OLEANDER (OLEANDER) LEAF EXTRACT, GLYCERIN, WATER (AQUA), HYDROLYZED EGG SHELL MEMBRANE, PELARGONIUM GRAVEOLENS FLOWER OIL, ALLANTOIN, CAPSICUM FRUTESCENS FRUIT EXTRACT, DIMETHICONE, LINUM USITATISSIMUM (LINSEED) SEED OIL, TOCOPHEROL, CETEARYL ALCOHOL, GLYCERYL CAPRYLATE, GLYCERYL STEARATE, LEUCONOSTOC/RADISH ROOT FERMENT FILTRATE, CITRUS AURANTIUM DULCIS (ORANGE) PEEL EXTRACT, SODIUM LAUROYL GLUTAMATE, STEARIC ACID, LYSOLECITHIN, SCLEROTIUM GUM, POTASSIUM SORBATE, MICROCRYSTALLINE CELLULOSE, BENZYL ALCOHOL, LAVANDULA ANGUSTIFOLIA (LAVENDER) OIL, LYSINE HCL, MENTHOL, PULLULAN, XANTHAN GUM, DIPOTASSIUM GLYCYRRHIZATE, GLYCERYL UNDECYLENATE, MELALEUCA ALTERNIFOLIA (TEA TREE) LEAF OIL, CELLULOSE GUM, OLEA EUROPAEA (OLIVE) LEAF EXTRACT</p>
				</div>
			</section>
			<!--Script for Ingredient Stack Accordian -->
			<script>
				$(function() {
				// when a tab is clicked   
				$('.hideSeekTab').on('click', function() {
					// if the one you clicked is open,      
					if ($(this).find('p').hasClass('open')) {
					// then close it.
					$('.hideSeekTab .open').slideToggle().removeClass('open');
					$('.iconBox').removeClass('closed');
					// otherwise,
					} else {
					// close all tabs,
					$('.hideSeekTab .open').slideToggle().removeClass('open');
					// and open the one you clicked
					$(this).find('p').slideToggle().addClass('open');
					$('.iconBox').removeClass('closed');
					$(this).find('.iconBox').addClass('closed');
					}
				});
				});
			</script>
			<!--END Script for Ingredient Stack Accordian -->
		</span>

		<span class="how2-text">

			<p>Apply to shingles, sun-burn, scrapes, insect bites and other dermal pain related conditions 3 to 4 times daily for 
			fast-acting pain relief.</p>
		</span>
	</div>

	<script>
		$(document).ready(function(){
			$("#benefits").click(function(){
				$(".benefits-text").show();
				$(".ing-text").hide();
				$(".how2-text").hide();
				$('.benefits-border-bottom').show();
				$('.keyIngredients-border-bottom').hide();
				$('.how2-border-bottom').hide();
			});
			$("#keyIngredients").click(function(){
				$(".ing-text").show();
				$(".how2-text").hide();
				$(".benefits-text").hide();
				$('.benefits-border-bottom').hide();
				$('.benefits-border-bottom').hide();
				$('.keyIngredients-border-bottom').show();
				$('.how2-border-bottom').hide();
			});
			$("#how2").click(function(){
				$(".how2-text").show();
				$(".ing-text").hide();
				$(".benefits-text").hide();
				$('.benefits-border-bottom').hide();
				$('.benefits-border-bottom').hide();
				$('.keyIngredients-border-bottom').hide();
				$('.how2-border-bottom').show();
			});
		});
	</script>
	<style>

	</style>

<?php include('../deepPageFooter.php'); ?>