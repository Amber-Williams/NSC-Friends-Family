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
			#product-component-54de0baf158 {
				max-width: none !important;
				margin-bottom: 10px;
			}

		/* END */
	</style>

	<div class="row">
		<div class="col-sm-12">
			<h1 class="h1-individuals">NeriumFirm Advanced Firming Body Cream </h1>
		</div>	
	</div>

	<div class="row">
		<div class="col-sm-12">
			<div class="productsLine"></div>
		</div>	
	</div>


	<div class="col-sm-6 move-center">
		<img src="../images/NSC.NADA.BF.CartonAndTube.LR.RGB.jpg" alt="Advanced Firming Cream" height="500px" class="productImg-responsive"/>
	</div>

	<div class="col-sm-6">
		<h2 class="title-individual-h2">NeriumFirm Advanced Firming Body Cream
		<br /> $30 <span class="line-through text-thinnest">$120</span>| <span class="title-individual-h2-small">200ml / 6.7 fl. oz<span></h2>
		<div id='product-component-54de0baf158'><br/></div>
		<!--REMOVE THIS ONCE FIRM IS AVAILABLE 
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
					node: document.getElementById('product-component-54de0baf158'),
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
		END-->

		<div class="individual-menu" >
			<button class="menu-choices" id="benefits">Benefits<div class="benefits-border-bottom"></div></button>
			<button class="menu-choices" id="keyIngredients">Ingredients<div class="keyIngredients-border-bottom"></div></button>
			<button class="menu-choices" id="how2">Usage<div class="how2-border-bottom"></div></button>
		</div>
	

		<span class="benefits-text">
			<p>Advanced NeriumFirm Body Cellulite Cream with its latest slim-figuring technology helps decrease the appearance of fat tissue, smooth cellulite, and enhance skin elasticity while moisturizing, hydrating, protecting the skin against environmental stressors and minimizing existing damage. Recommended to be included in your daily exercise routine prior to daily work-out to sooth sore muscles, firm, lift, and tone your body. It contains a robust combination of multi-functional ingredients working in synergy to leave you feeling toned and luminous.</p>
			<p>Dermatologist Tested.</p>
			<p>FDA-registered, over-the counter (OTC), formula.  Produced in accordance to FDA Good Manufacturing Practices (cGMP) guidelines.</p>
		</span>

		<span class="ing-text">
			<ul class="add-list-bullets space-above">
				<li><p>Dimethicone - Skin Protectant</p></li>
				<li><p>Menthol - Topical Analgesic</p></li>
				<li><p>Patented Nerium Oleander Extract - Antioxidant Cell Protection</p></li>
				<li><p>Caffeine - Antioxidant</p></li>
				<li><p>Forskohlii Root Extract - Anti-inflammatory</p></li>
				<li><p>Green Tea Leaf Extract - Antioxidant</p></li>
				<li><p>Olive Leaf Extract - Antioxidant and Anti-inflamatory Properties</p></li>
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
					<p class="text">Dimethicone, Menthol, <br/>Water (Aqua), Aloe Barbadensis Leaf Juice, Ethylhexyl, Palmitate, Hydrogenated Polyisobutene, Glycerin, Cetyl, Alcohol, Pentylene Glycol, Cetearyl Alcohol, Hydrolyzed Egg Shell Membrane (Peptide Matrix - Collagen & Elastin), Caffeine, Nerium Oleander Extract, Salix Nigra (Willow), Bark Extract, Caprylyl Glycol, Sorbitan Stearate, Camellia, Oleifera (Green Tea) Leaf Extract, Menthol, Isohexadecane, Ceteareth-20, Polysorbate 80, Olea Europaea (Olive) Leaf Extract, Hydroxyethyl Acrylate/Sodium Acryloyldimethyl Taurate, Theobroma Cacao (Cocoa) Seed Butter, Glyceryl Caprylate, Xanthan Gum, Butyrospermum Parkii (Shea) Butter, Caprylic/Capric Triglyceride, Coleus Forskohlii Root Extract, Sodium Hyaluronate, Tocopherol, Disodium EDTA, Retinyl Palmitate, Tocopheryl Acetate, Leuconostoc/Radish Root Ferment Filtrate, Fragrance, Potassium Sorbate</p>
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

			<p>Apply to targeted areas in a circular motion for 20 seconds or until fully absorbed. For optimal results, use twice daily. Also recommended for application prior to exercise routine.</p>
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