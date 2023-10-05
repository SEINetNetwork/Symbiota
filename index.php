<?php
include_once('config/symbini.php');
include_once('content/lang/index.'.$LANG_TAG.'.php');
header("Content-Type: text/html; charset=".$CHARSET);
?>
<html>
<head>
	<title><?php echo $DEFAULT_TITLE; ?> Home</title>
	<?php
	$activateJQuery = true;
	include_once($SERVER_ROOT.'/includes/head.php');
	include_once($SERVER_ROOT.'/includes/googleanalytics.php');
	?>
	<link href="css/quicksearch.css" type="text/css" rel="Stylesheet" />
	<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="js/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
	<script src="js/symb/api.taxonomy.taxasuggest.js" type="text/javascript"></script>
	<script src="js/jquery.slides.js"></script>
</head>
<body>
	<?php
	include($SERVER_ROOT.'/includes/header.php');
	?>
				<div id="innertext">
					<div style="float:right;margin-left:15px;">
						<div id="quicksearchdiv">
							<form name="quicksearch" id="quicksearch" action="<?php echo $CLIENT_ROOT; ?>/taxa/index.php" method="get" onsubmit="return verifyQuickSearch(this);">
								<div id="quicksearchtext" >Search Taxon
								</div>
								<input id="taxa" type="text" name="taxon" />
								<button name="formsubmit"  id="quicksearchbutton" type="submit" value="Search Terms">Search</button>
							</form>
						</div>
					<div>
					<link rel="stylesheet" href="<?php echo $CLIENT_ROOT; ?>/css/slideshowstyle.css">
				<style>
				@font-face{
					font-family:"FontAwesome";
					src:url("<?php echo $CLIENT_ROOT; ?>/css/images/fontawesome-webfont.eot?v=3.0.1");
					src:url("<?php echo $CLIENT_ROOT; ?>/css/images/fontawesome-webfont.eot?#iefix&v=3.0.1") format("embedded-opentype"),
						url("<?php echo $CLIENT_ROOT; ?>/css/images/fontawesome-webfont.woff?v=3.0.1") format("woff"),
						url("<?php echo $CLIENT_ROOT; ?>/css/images/fontawesome-webfont.ttf?v=3.0.1") format("truetype");
					font-weight: normal;
					font-style:normal
				}
				a.slidesjs-next,
				a.slidesjs-previous,
				a.slidesjs-play,
				a.slidesjs-stop {
					background-image: url("<?php echo $CLIENT_ROOT; ?>/css/images/btns-next-prev.png"); background-repeat: no-repeat;
				}
				.slidesjs-pagination li a {
					background-image: url("<?php echo $CLIENT_ROOT; ?>/css/images/pagination.png"); background-position: 0 0;
				}
				#slideshowcontainer{ clear:both; width:350px; height:425px; }
				.slideshowDiv{ width:350px; height:400px;position:relative; }
				.slideshowImageDiv{ width:350px; max-height:400px; overflow:hidden; }
				.slideshowImageDiv img{ position: absolute; top: -9999px; bottom: -9999px; left: -9999px; right: -9999px; margin: auto; max-width:350px; max-height:400px; }
				.slideshowBaseDiv{ width:350px; position:absolute; bottom:0; font-size:12px; background-color:rgba(255,255,255,0.8); }
				.slideshowCitationDiv{ clear:both; padding-left:3px; padding-right:3px; }
				.slideshowHideLink{ font-size:9px; text-decoration:none; float:right; clear:both; margin-right:5px; }
				.slideshowShowLink{ font-size:9px; text-decoration:none; float:right; clear:both; margin-right:5px; display:none; }
				</style>
				<div id="slideshowcontainer"><div class="container"><div id="slides">
				<div class="slideshowDiv">
					<div class="slideshowImageDiv">
							<img src="<?php echo $CLIENT_ROOT; ?>/images/layout/slideshow/FallenSaguaro.jpg">
					</div>
					<div class="slideshowBaseDiv">
						<div class="slideshowCaptionDiv">
							<div class="slideshowCitationDiv">Metro Phoenix EcoFlora
							</div>
						</div>
					</div>
				</div>
				<div class="slideshowDiv">
					<div class="slideshowImageDiv">
						<img src="<?php echo $CLIENT_ROOT; ?>/images/layout/slideshow/Chicago_FallWoodsWalk.jpg">
					</div>
				    <div class="slideshowBaseDiv">
						<div class="slideshowCaptionDiv">
							<div class="slideshowCitationDiv">Chicago EcoFlora	
							</div>
						</div>
					</div>
				</div>
				<div class="slideshowDiv">
					<div class="slideshowImageDiv">
						<img src="<?php echo $CLIENT_ROOT; ?>/images/layout/slideshow/Denver_slide.png">
					</div>
					<div class="slideshowBaseDiv">
						<div class="slideshowCaptionDiv">
							<div class="slideshowCitationDiv">Denver EcoFlora
							</div>
						</div>
					</div>
				</div>
				<div class="slideshowDiv">
					<div class="slideshowImageDiv">
							<img src="<?php echo $CLIENT_ROOT; ?>/images/layout/slideshow/Selby_slide.jpg">
					</div>
					<div class="slideshowBaseDiv">
						<div class="slideshowCaptionDiv">
							<div class="slideshowCitationDiv">Sarasota-Manatee EcoFlora
							</div>
						</div>
					</div>
				</div>
				<div class="slideshowDiv">
					<div class="slideshowImageDiv">
							<img src="<?php echo $CLIENT_ROOT; ?>/images/layout/slideshow/NYC_slide.jpg">
					</div>
					<div class="slideshowBaseDiv">
						<div class="slideshowCaptionDiv">
							<div class="slideshowCitationDiv">New York City EcoFlora
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript">
				$(function() {
					$("#slides").slidesjs({
								width: 350,
								height: 400,
								play: {
									active: true,
									auto: true,
									interval: 7000,
									swap: true
								}
					});
				});
			</script>			</div>
		</div>
		<h1>Welcome to the EcoFloras of North America!</h1>
		<div style="padding: 0px 10px; font-size:120%">
			<p>EcoFlora is a participatory science project that aims to document, understand, and conserve urban biodiversity. First launched in 2017 at the New York Botanical Garden, the program expanded in 2020 to four additional partner gardens: Desert Botanical Garden, Denver Botanic Gardens, Marie Selby Botanical Gardens and the Chicago Botanic Garden. Visit the "Project Information" pages on each projects' tabs to learn more about each EcoFlora project!</p>
			<p>The projects combine existing knowledge from herbaria and libraries with real-time observations of plants and their ecological partners, made using iNaturalist. These data can then be combined to learn more about the past, present, and future of urban biodiversity.</p>
		</div>
	</div>
	</td>
	</tr>
	<?php
	include($SERVER_ROOT.'/includes/footer.php');
	?>
	</table> 
</body>
</html>
