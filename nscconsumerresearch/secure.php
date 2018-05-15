<?php include('homePageHeader.php'); ?>
	<div class="row">
		<div class="col-xs-12 slider frontPage-slider">
			<!-- slider begin -->
			<script src="liptherapy/js/jssor.slider-26.3.0.min.js" type="text/javascript"></script>
			<script type="text/javascript">
				jssor_1_slider_init = function() {

					var jssor_1_options = {
					$AutoPlay: 1,
					$Align: 0,
					$ArrowNavigatorOptions: {
						$Class: $JssorArrowNavigator$
					},
					$BulletNavigatorOptions: {
						$Class: $JssorBulletNavigator$,
						$SpacingX: 15,
						$SpacingY: 10
					}
					};

					var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

					/*#region responsive code begin*/

					var MAX_WIDTH = 834;

					function ScaleSlider() {
						var containerElement = jssor_1_slider.$Elmt.parentNode;
						var containerWidth = containerElement.clientWidth;

						if (containerWidth) {

							var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

							jssor_1_slider.$ScaleWidth(expectedWidth);
						}
						else {
							window.setTimeout(ScaleSlider, 30);
						}
					}

					ScaleSlider();

					$Jssor$.$AddEvent(window, "load", ScaleSlider);
					$Jssor$.$AddEvent(window, "resize", ScaleSlider);
					$Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
					/*#endregion responsive code end*/
				};
			</script>
			<style>
				/* jssor slider loading skin double-tail-spin css */

				.jssorl-004-double-tail-spin img {
					animation-name: jssorl-004-double-tail-spin;
					animation-duration: 1.2s;
					animation-iteration-count: infinite;
					animation-timing-function: linear;
				}

				@keyframes jssorl-004-double-tail-spin {
					from {
						transform: rotate(0deg);
					}

					to {
						transform: rotate(360deg);
					}
				}


				.jssorb031 {position:absolute;}
				.jssorb031 .i {position:absolute;cursor:pointer;}
				.jssorb031 .i .b {fill:#FFF;fill-opacity:1;stroke:#A1D2E6;;stroke-width:1200;stroke-miterlimit:10;stroke-opacity:0.3;}
				.jssorb031 .i:hover .b {fill:#fff;fill-opacity:.7;stroke:#000;stroke-opacity:.5;}
				.jssorb031 .iav .b {fill:#A1D2E6;;stroke:#A1D2E6;;fill-opacity:1;} /* edited */
				.jssorb031 .i.idn {opacity:.3;}

				.jssora051 {display:block;position:absolute;cursor:pointer;}
				.jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
				.jssora051:hover {opacity:.8;}
				.jssora051.jssora051dn {opacity:.5;}
				.jssora051.jssora051ds {opacity:.3;pointer-events:none;}


				
							.carousel-title-1 {
								top: 46%;
								background-color: #2C347F;
								left: 71%;
								position: absolute;
								padding: 10px 20px 10px 20px;
							}
							.carousel-title-2 {
								top: 61%;
								background-color: #A60101;
								left: 65%;
								position: absolute;
								padding: 10px 25px 10px 25px;
							}
							.carousel-title-text {
								color:white;
								font-family:arial;
								font-size:1em;
								font-weight: bold;
								margin-bottom: none;
							}
			</style>
			<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:834px;height:430px;overflow:hidden;visibility:hidden;">
				<!-- Loading Screen -->
				<div data-u="loading" class="jssorl-004-double-tail-spin" style="position:absolute;top:0px;left:0px;text-align:center;background-color:rgba(0,0,0,0.7);">
					<img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="liptherapy/images/therapypage/carousel/double-tail-spin.svg" />
				</div>
				<div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:838px;height:430px;overflow:hidden;">
					<div>
						<img data-u="image" src="images/NSC.FF.Web.Carousel.NADA.V1.jpg" />
						<div class="carousel-title-1">
							<a class="carousel-title-text" href="newProducts/">Buy Now</a> 
						</div>

					</div>
					<div>
						<img data-u="image" src="images/NSC.FF.Web.Slider.TL.R-2.V2.jpg" />
					</div>
					<div>
						<img data-u="image" src="images/NSC.FF.Web.Slider.PNAE.V3.jpg" />
					</div>
					<div>
						<img data-u="image" src="images//NSC.TL.Web.Carousel.All.V3.png" />
					</div>
					<div>
						<img data-u="image" src="images/Slider-Banner-HSFL.jpg" />
					</div>
				</div>
				<!-- Bullet Navigator -->
				<div data-u="navigator" class="jssorb031" style="position:absolute;bottom:60px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
					<div data-u="prototype" class="i" style="width:16px;height:16px;">
						<svg viewbox="0 0 16000 16000" style="position:absolute;top:-10px;left:0;width:100%;height:100%;">
							<circle class="b" cx="8000" cy="8000" r="5800"></circle>
						</svg>
					</div>
				</div>
				<!-- Arrow Navigator -->
				<div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
					<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
						<polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
					</svg>
				</div>
				<div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
					<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
						<polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
					</svg>
				</div>
			</div>
			<script type="text/javascript">jssor_1_slider_init();</script>
			<!-- #endregion Jssor Slider End -->
		</div>
	</div><!-- row -->
	<div class="row">
		<div class="col-sm-12">
			<p>Nerium SkinCare, Inc. is a US-based subsidiary of Nerium Biotechnology, Inc. with a foundation in biotechnology research, Nerium SkinCare is dedicated to offering health and beauty solutions based on available scientific research and proven customer success. Our natural products are formulated on results observed after years of continuing research of the Nerium oleander extract, at leading medical institutions, and are manufactured using the latest scientific methods and technology.</p>
			
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 CR-mobile-banner">
		  <img src="images2/consumerResearch-signup-banner-mobile.jpg"/>
		  <a href="consumerResearch/"><button class="btn-consumerResearch">JOIN NOW</button></a>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 banner consumerResearch-banner">
			<div class="col-xs-8 float-right CR-mobile-background">
				<a href="consumerResearch/"><button class="btn-consumerResearch">JOIN NOW</button></a>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<a class="collection-a" href="AdvancedLine">
				<div class="banner products-ADVANCED">
					<h1 class="collection-h1" >NERIUM ADVANCED</h1>
					<h3 class="collection-h3">THE BEAUTY OF SCIENCE</h3>
					<img src="images/Products-ADVANCED-img.png" alt="Nerium SkinCare Advanced Product Line"/>
					<button class="collection-btn" >Explore the Collection</button>
				</div>
			</a>
		</div>	
	</div>	
    <div class="row">
		<div class="col-sm-12">
			<a class="collection-a" href="TherapyLine">
				<div class="banner products-RX">
					<h1 class="collection-h1">NERIUMRX THERAPY</h1>
					<h3 class="collection-h3">SKIN HEALTH</h3>
					<img src="images/Products-RX-img.png" alt="Nerium SkinCare Advanced Product Line"/>
					<button class="collection-btn">Explore the Collection</button>
				</div>
			</a>
		</div>	
	</div>	
<!--LEAVE THIS REMOVED UNLESS WE ARE SELLING THE NERIUMAD 

	 <div class="row">
		<div class="col-sm-12">
			<a class="collection-a" href="#">
				<div class="banner products-AD">
					<h1 class="collection-h1" >NERIUMAD</h1>
					<h3 class="collection-h3">THE ORIGINAL NERIUM OLEANDER EXTRACT PRODUCTS</h3>
					<img src="../images/Products-AD-img.png" alt="Nerium SkinCare Advanced Product Line"/>
					<button class="collection-btn">Explore the Collection</button>
				</div>
			</a>
		</div>	
	</div>		
END-->
	

<?php include('homePageFooter.php'); ?>
