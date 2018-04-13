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
			#product-component-645fb6ff25d {
				max-width: none !important;
				margin-bottom: 10px;
			}
		/* END */
	</style>

	<div class="row">
		<div class="col-sm-12">
			<h1 class="h1-individuals">Advanced Daily Face Cream</h1>
		</div>	
	</div>

	<div class="row">
		<div class="col-sm-12">
			<div class="productsLine"></div>
		</div>	
	</div>


	<div class="col-sm-6 move-center">
		<img src="../images/Updated-Advanced-Packaging/NSC.ADV.DC.BottleAndCarton.HR.CMYK.V1.png" alt="Advanced Daily Face Treatment" height="500px" class="productImg-responsive"/>
	</div>

	<div class="col-sm-6">
		<h2 class="title-individual-h2">Advanced Daily Face Cream 
		<br /> $32 <span class="line-through text-thinnest">$100</span>| <span class="title-individual-h2-small">30ml / 1 fl. oz<span></h2>
		<div id='product-component-645fb6ff25d'></div>
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
					node: document.getElementById('product-component-645fb6ff25d'),
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
			<p>Advanced Daily Face Cream is a multi-dimensional skin moisturizing formula designed to help protect skin against sun damage/environmental stressors, improve moisture retention and skin hydration while helping to normalize and restore skin to its youthful appearance. For application to the face, neck, and other areas of the body, this skin protecting and hydrating day cream combines revolutionary key ingredients that actively work together to awaken and refresh your skin’s youthful, luminous tone.</p>
			<p>Dermatologist Tested.</p>
			<p>FDA-registered, over-the counter (OTC), formula.  Produced in accordance to FDA Good Manufacturing Practices (cGMP) guidelines.</p>
		</span>

		<span class="ing-text">
			<ul class="add-list-bullets space-above">
				<li><p>Zinc Oxide - Natural Sunscreen</p></li>
				<li><p>Patented Nerium Oleander Extract - Antioxidant Cell Protection</p></li>
				<li><p>Hyaluronic Acid - Moisturizer</p></li>
				<li><p>Niacinamide - Vitamin B3</p></li>
				<li><p>Superoxide Dismutase - Antioxidant Enzyme</p></li>
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
					<p class="text">Zinc Oxide, <br/>Water, C12-15 Alkyl Benzoate, Glycerin, Aloe Barbadenis Leaf Juice, Cetearyl Alcohol, Ceteth-20 Phosphate, Oleth-3 Phosphate, Isostearic Acid, Silica, Nerium Oleander Leaf Extract, Hydrolyzed Egg Shell Membrane, (Peptide Matrix - Collagen & Elastin), Caprylyl Glycol, Leuconostoc/Radish Root Ferment Filtrate, Superoxide Dismutase, Polygonum Aviculare Extract, Dimethicone, Cetearyl Glucoside, Niacinamide, Sodium Hyaluronate, Tetrahexyldecyl Ascorbate, Glyceryl Caprylate, Avena Sativa (Oat) Kernel Extract, Chamomilla Recutita (Matricaria) Flower Extract, Rosmarinus Officinalis (Rosemary) Leaf Extract, Tocopheryl Acetate, Dipotassium Glycyrrhizinate, Palmitoyl Dipeptide-5 Diaminobutyroyl Hydroxythreonine, Palmitoyl Tripeptide-5, Tetradecyl Aminobutyroylvalylaminobutyric Urea Trifluoroacetate, Glyceryl Stearate Citrate, Magnesium Chloride, Xanthan Gum, Disodium EDTA, Phenylpropanol, Dicetyl Phosphate, Polyhydroxystearic Acid, Potassium Sorbate, Fragrance, Mica, Titanium Dioxide, Pentylene Glycol, Phenoxyethanol, Sodium Benzoate, Tromethamine</p>
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

			<p>Apply generously before sun exposure and as needed.</p>
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