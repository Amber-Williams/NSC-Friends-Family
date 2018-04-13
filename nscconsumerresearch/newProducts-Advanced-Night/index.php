<?php include('../deepPageHeader.php'); ?>	
<!--Link Required for Shopify Buttons to work-->
<script type="text/javascript" src="https://sdks.shopifycdn.com/js-buy-sdk/v0/latest/shopify-buy.umd.polyfilled.min.js"></script>
<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="js/jssor.slider-25.2.1.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<style>
		/* Leave these in page */
			li {
				color:#323C92;
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
			#product-component-f08db13a52d {
				max-width: none !important;
				margin-bottom: 10px;
			}
		/* END */
	</style>

	<div class="row">
		<div class="col-sm-12">
			<h1 class="h1-individuals">Advanced Nightly Face Treatment</h1>
		</div>	
	</div>

	<div class="row">
		<div class="col-sm-12">
			<div class="productsLine"></div>
		</div>	
	</div>


	<div class="col-sm-6 move-center">
		<img src="../images/Updated-Advanced-Packaging/NSC.ADV.NC.BottleAndCarton.HR.CMYK.V1.png" alt="Advanced Nightly Face Treatment" height="500px" class="productImg-responsive"/>
	</div>

	<div class="col-sm-6">
		<h2 class="title-individual-h2">Advanced Nightly Face Treatment
		<br /> $32 <span class="line-through text-thinnest">$120</span> | <span class="title-individual-h2-small">30ml / 1 fl. oz<span></h2>
		<div id='product-component-f08db13a52d'></div>
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
					node: document.getElementById('product-component-f08db13a52d'),
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
			<p>Advanced Nightly Face Treatment is a rich, concentrated age-defying skin protection formula designed to fight oxidative stress and improve the appearance of aging and sun damaged skin while promoting healthy skin of face, neck, and décolletage. This treatment is infused with a matrix of skin revitalizing key ingredients which work in synergy to reduce the appearance of fine lines and wrinkles, enhance and restore your skin’s ability to look fresh, natural, and radiant overnight.</p>
			<p>Dermatologist Tested.</p>
			<p>FDA-registered, over-the counter (OTC), formula.  Produced in accordance to FDA Good Manufacturing Practices (cGMP) guidelines. </p>
		</span>

		<span class="ing-text">
			<ul class="add-list-bullets space-above">
				<li><p>Dimethicone - Skin Protectant</p></li>
				<li><p>Patented Nerium Oleander Extract - Antioxidant Cell Protection</p></li>
				<li><p>Peptide Matrix - Collagen and Elastin</p></li>
				<li><p>Niacinamide - Vitamin B3</p></li>
				<li><p>Chia Seed Oil - Omega-3</p></li>
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
					<p class="text">Dimethicone, <br/>Water (Aqua), Aloe Barbadensis Leaf Juice, Hydrolyzed Egg Shell Membrane (Peptide Matrix - Collagen & Elastin), Nerium Oleander Leaf Extract, Niacinamide, Glycerin, Propanediol, Butylene Glycol, Glyceryl Stearate, Hydroxyethyl Acrylate/Sodium Acryloyldimethyl Taurate Copolymer, Hydrogenated Polydecene, Cocos Nucifera (Coconut) Oil, Caprylic/Capric Triglyceride, Helianthus Annuus (Sunflower) Seed Oil, Squalane, Cetearyl Olivate, Sorbitan Olivate, C12-15 Alkyl Benzoate, Stearic Acid, Leuconostoc/Radish Root Ferment Filtrate, Butyrospermum Parkii (Shea) Butter, Theobroma Cacao (Cocoa) Seed Butter, Polysorbate 80, Caprylyl Glycol, Salvia Hispanica (Chia) Seed Oil, Rosmarinus Officinalis (Rosemary) Leaf Extract, Sodium Lactate, Tocopheryl Acetate, Xanthan Gum, Cymbopogon Schoenanthus Extract, Disodium EDTA, Acetyl Hexapeptide-30, Alteromonas Ferment Extract, Arginine, Caramel, Potassium Sorbate, Glyceryl Caprylate, Phenylpropanol, Limonene, Citral, Hydroxycitronellal, Linalool</p>
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

			<p>Apply as needed. After cleansing skin thoroughly, apply four (+/-) 
			pumps to face, neck, and décolletage. Rinse skin in the morning following usage. </p>
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