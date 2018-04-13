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
			#product-component-2cde4017722 {
				max-width: none !important;
				margin-bottom: 10px;
			}
		/* END */
	</style>

	<div class="row">
		<div class="col-sm-12">
			<h1 class="h1-individuals">NeriumRX Psoriasis Relief Therapy</h1>
		</div>	
	</div>

	<div class="row">
		<div class="col-sm-12">
			<div class="productsLine"></div>
		</div>	
	</div>


	<div class="col-sm-6 move-center">
		<img src="../images/TL-packaging-web/Therapy.Psoriasis.Group-WithBox-SMALL.jpg" alt="Psoriasis Relief Therapy Bottle and Boxing" height="500px" class="productImg-responsive"/>
	</div>

	<div class="col-sm-6">
		<h2 class="title-individual-h2">NeriumRX Psoriasis Relief Therapy
		<br /> $20 <span class="line-through text-thinnest">$35</span>| <span class="title-individual-h2-small">30ml / 1 fl. oz<span></h2>
		<div id='product-component-2cde4017722'><br/></div>
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
							node: document.getElementById('product-component-2cde4017722'),
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
		<p>This fast-acting Psoriasis relief cream is a powerful formula designed to help relieve and sooth skin’s itching, irritation, redness, flakiness and scaling, along with other symptoms associated with psoriasis and seborrheic dermatitis. Formulated for ultra-strength, this cream performs as a skin protectant while enhancing rejuvenation of the skin, reducing active flare-ups, and delaying future recurrences.</p>
		</span>

		<span class="ing-text">
			<ul class="add-list-bullets space-above">
				<li><p>Salicylic acid - exfoliates the skin by softening and dissolving keratin (protein that causes the skin cells to stick together)</p></li>
				<li><p>Patented Nerium Oleander Extract - Powerful antioxidant to reduce the impact of inflammation.</p></li>
				<li><p>Biova – Relief of pain and works to normalize collagen and elastin skin structures.</p></li>
				<li><p>Parsely Basil extract – As a source of vitamin A, this key ingredient encourages healthy skin cell production. </p></li>
				<li><p>Collidal Oatmeal -   helps smooth and comfort skin that is itchy and dry.</p></li>
				<li><p>Caster seed oil – works to condition the skin giving it moisture and softness.</p></li>
				<li><p>Shea Butter – replenishes and nourishes the skin with natural vitamin and essential fatty acids.</p></li>
				<li><p>Coconut Extract – derived from the meat of the coconut, this extract is highly absorbent while it moisturizes, nourishing moisture into the skin effectively. </p></li>
				<li><p>Apricot Extract – Soften and smooth the skin when activated by the skin’s oils </p></li>
				<li><p>Oregon Grape Root Extract – this grape root extract grown in Oregon helps combat skin irritants associated with psoriasis and other atopic dermatitis illnesses. </p></li>
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
					<p class="text">SALICYLIC ACID (2%),<br/> ALOE BARBADENSIS LEAF JUICE, NERIUM OLEANDER (OLEANDER) LEAF EXTRACT, PROPANEDIOL, HYDROLYZED EGG SHELL MEMBRANE, WATER (AQUA), CETYL ALCOHOL, GLYCERIN, GLYCERYL STEARATE, POTASSIUM CETYL PHOSPHATE, CAPRYLIC/CAPRIC TRIGLYCERIDE, GLYCERYL CAPRYLATE, CETEARYL OLIVATE, DIMETHICONE, OCIMUM BASILICUM (BASIL) EXTRACT, RICINUS COMMUNIS (CASTOR) SEED OIL, SORBITAN OLIVATE, LYSOLECITHIN, SCLEROTIUM GUM, ALLANTOIN, ARGININE, BUTYROSPERMUM PARKII (SHEA) BUTTER, CARUM PETROSELINUM (PARSLEY) EXTRACT, COLLOIDAL OATMEAL, OLEA EUROPAEA (OLIVE) FRUIT OIL, PELARGONIUM GRAVEOLENS FLOWER OIL, PRUNUS ARMENIACA (APRICOT) FRUIT EXTRACT, TOCOPHEROL, XANTHAN GUM, LEUCONOSTOC/RADISH ROOT FERMENT FILTRATE, PULLULAN, AQUA, LINUM USITATISSIMUM (LINSEED) SEED OIL, SODIUM BENZOATE, BENZYL ALCOHOL, POTASSIUM SORBATE, CITRIC ACID, DIPOTASSIUM GLYCYRRHIZATE, GLYCERYL UNDECYLENATE, LECITHIN, MAHONIA AQUIFOLIUM ROOT EXTRACT, SEA SALT, BUTTER EXTRACT, COCOS NUCIFERA (COCONUT) FRUIT EXTRACT, CUCUMIS MELO CANTALUPENSIS FRUIT EXTRACT, MUSA SAPIENTUM (BANANA) FRUIT EXTRACT, PIMPINELLA ANISUM (ANISE) FRUIT EXTRACT, PLANKTON EXTRACT, PYRUS MALUS (APPLE) FRUIT EXTRACT, SANTALUM ALBUM (SANDALOWOOD) EXTRACT, VACCINIUM MACROCARPON (CRANBERRY) FRUIT EXTRACT, VANILLA PLANIFOLIA FRUIT EXTRACT </p>
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

			<p>Apply to affected areas 1 to 4 times daily until condition subsides.</p>
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