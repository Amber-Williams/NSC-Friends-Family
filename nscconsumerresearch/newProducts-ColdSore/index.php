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
			#product-component-a3dee81e8bc {
				max-width: none !important;
				margin-bottom: 10px;
			}
		/* END */
	</style>

	<div class="row">
		<div class="col-sm-12">
			<h1 class="h1-individuals">NeriumCS Cold Sore Duo</h1>
		</div>	
	</div>

	<div class="row">
		<div class="col-sm-12">
			<div class="productsLine"></div>
		</div>	
	</div>


	<div class="col-sm-6 move-center">
		<img src="../images/TL-packaging-web/Therapy.CS.LM.Dual.Group-SMALL.jpg" alt="Cold Sore Therapy and Daily Lip Maintance" height="500px" class="productImg-responsive"/>
	</div>

	<div class="col-sm-6">
		<h2 class="title-individual-h2">NeriumCS Cold Sore Therapy and Daily Lip Maintance
		<br /> $18 <span class="line-through text-thinnest">$29.95</span>| <span class="title-individual-h2-small">8ml / 0.2 fl. oz<span></h2>
		<div id='product-component-a3dee81e8bc'><br/></div>
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
							node: document.getElementById('product-component-a3dee81e8bc'),
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
		<p>This treatment system works together to fight against symptoms of cold sores and delay the reoccurrence. Introducing a one of a kind treatment system that not only provides instant relief from cold sores, but also increases protection against them. 
		</p>
		<b>Cold Sore Therapy</b> <p>Provides fast-acting pain relief upon first contact and stimulates healing; while helping to reduce the appearance and spread of the cold sore lesions. Formulated with powerful ingredients, this dynamic treatment helps to calm, improve cold sore appearance while easing discomfort and inflammation in the process.
		</p>
		<b>Daily Lip Maintenance</b> <p>Daily Lip Maintenance is designed to provide hydration and increased protection to the lips following breakouts, thereby ensuring continuous overall lip health. With powerful active ingredients, this formula incorporates sun protection to ensure that your lips are protected from harmful environmental elements and stressors.
		</p>
		</span>

		<span class="ing-text">
		<b>NeriumCS Cold Sore Therapy</b>
			<ul class="add-list-bullets space-above">
				<li><p>Camphor - works upon application to relieve pain. </p></li>
				<li><p>Patented Nerium Oleander Extract - Powerful antioxidant and anti-microbial activity.</p></li>
				<li><p>Biova – Works to enhance immunity activity in Nerium Oleander extract.</p></li>
				<li><p>Docosanol – This key ingredient speeds up the healing of cold sores and symptoms associated with cold sores. Working to block the virus from entering healthy skin cells.</p></li>
				<li><p>Geranium oil – speed up healing and decrease scarring.</p></li>
				<li><p>Olive leaf extract - has antiviral, antibacterial, anti-fungal and immune boosting properties.</p></li>
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
					<p class="text">CAMPHOR (2.0 %),<br/> ALOE BARBADENSIS LEAF JUICE, NERIUM OLEANDER (OLEANDER) LEAF EXTRACT, BEHENYL ALCOHOL, COCOS NUCIFERA (COCONUT) OIL, GLYCERIN, ARACHIDYL ALCOHOL, CETEARYL OLIVATE, HYDROLYZED EGG SHELL MEMBRANE, OLEA EUROPAEA (OLIVE) FRUIT OIL, WATER (AQUA), SORBITAN OLIVATE, SUCROSE COCOATE, DIMETHICONE, LINUM USITATISSIMUM (LINSEED) SEED OIL, TOCOPHEROL, ARACHIDYL GLUCOSIDE, PELARGONIUM GRAVEOLENS FLOWER OIL, ALLANTOIN, LEUCONOSTOC/RADISH ROOT FERMENT FILTRATE, XANTHAN GUM, POTASSIUM SORBATE, CARRAGEENAN, BENZYL ALCOHOL, ASCORBYL PALMITATE, DIPOTASSIUM GLYCYRRHIZATE, LYSINE HCL, OLEA EUROPAEA (OLIVE) LEAF EXTRACT </p>
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

			<b>NeriumCS Daily Lip Maintenance</b>
			<ul class="add-list-bullets space-above">
				<li><p>Allantoin – works to protect the skin from environmental stressors and bacteria.</p></li>
				<li><p>Patented Nerium Oleander Extract - Powerful antioxidant and anti-microbial activity.</p></li>
				<li><p>Biova – Works to enhance immunity activity in Nerium Oleander extract.</p></li>
				<li><p>Linseed Oil – also known as Flaxseed oil, this ingredient works to balance and maintain the lip’s oil and reduce inflammation, helping to repair the skin.</p></li>
				<li><p>Coconut Fruit Extract – delivers non-irritating moisturizing and conditioning benefits effectively to the skin.</p></li>
				<li><p>Anise Fruit Extract – this extract provides instant relief to damaged skin while stimulating blood circulation. </p></li>
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
					<p class="text">ALLANTOIN (0.5%),<br/> ALOE BARBADENSIS LEAF JUICE, GLYCERIN, PROPANEDIOL, NERIUM OLEANDER (OLEANDER) LEAF EXTRACT, ETHYLHEXYL METHOXYCINNAMATE, HYDROLYZED EGG SHELL MEMBRANE, WATER (AQUA), GLYCERYL CAPRYLATE, HYDROXYETHYLCELLULOSE, GLYCERYL STEARATE, CAPRYLIC/CAPRIC TRIGLYCERIDE, LINUM USITATISSIMUM (LINSEED) SEED OIL, CARRAGEENAN, LYSOLECITHIN, SCLEROTIUM GUM, PELARGONIUM GRAVEOLENS FLOWER OIL, LEUCONOSTOC/RADISH ROOT FERMENT FILTRATE, BENZYL ALCOHOL, PULLULAN, XANTHAN GUM, GLYCERYL UNDECYLENATE, POTASSIUM SORBATE, BUTTER EXTRACT, COCOS NUCIFERA (COCONUT) FRUIT EXTRACT, CUCUMIS MELO CANTALUPENSIS FRUIT EXTRACT, MUSA SAPIENTUM (BANANA) FRUIT EXTRACT, PIMPINELLA ANISUM (ANISE) FRUIT EXTRACT, PRUNUS ARMENIACA (APRICOT) FRUIT EXTRACT, PYRUS MALUS (APPLE) FRUIT EXTRACT, SANTALUM ALBUM (SANDALOWOOD) EXTRACT, VACCINIUM MACROCARPON (CRANBERRY) FRUIT EXTRACT, VANILLA PLANIFOLIA FRUIT EXTRACT</p>
				</div>
			</section>
		</span>

		<span class="how2-text">

			<p>Step 1 -
			Cold Sore Therapy: Apply to cold sore 3 to 4 times daily. Recommended to clean hands and virus site before applying. 
			<br/><br/>
			Step 2 –
			Once cold sore is fully healed, stop using Cold Sore Therapy.
			<br/><br/>
			Step 3 -
			Daily Lip Maintenance: Apply as needed to prevent recurrence of cold sore. Use only after cold sore is fully healed.  Recommended to clean applicator in between use. 
			</p>
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