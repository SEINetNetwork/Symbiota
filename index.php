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
<<<<<<< Updated upstream
	<style type="text/css">
		#container5 {
	clear:left;
	float:left;
	width:100%;
	overflow:hidden;
	background:#eee; /* column 5 background colour */
}
#container4 {
	clear:left;
	float:left;
	width:100%;
	position:relative;
	right:20%;
	background:#b2f0f9; /* column 4 background colour */
}
#container3 {
	clear:left;
	float:left;
	width:100%;
	position:relative;
	right:20%;
	background:#89ffa2; /* column 3 background colour */
}
#container2 {
	clear:left;
	float:left;
	width:100%;
	position:relative;
	right:20%;
	background:#ffa7a7; /* column 2 background colour */
}
#container1 {
	float:left;
	width:100%;
	position:relative;
	right:20%;
	background:#fff689; /* column 1 background colour */
}
#col1 {
	float:left;
	width:16%;
	position:relative;
	left:82%;
	overflow:hidden;
}
#col2 {
	float:left;
	width:16%;
	position:relative;
	left:86%;
	overflow:hidden;
}
#col3 {
	float:left;
	width:16%;
	position:relative;
	left:90%;
	overflow:hidden;
}
#col4 {
	float:left;
	width:16%;
	position:relative;
	left:94%;
	overflow:hidden;
}
#col5 {
	float:left;
	width:16%;
	position:relative;
	left:98%;
	overflow:hidden;
}
		}
		
	</style>
</head>
<body style="background-color:#FFFFFF">
	<?php
	include($SERVER_ROOT.'/includes/header.php');
	?>
	<!-- This is inner text! -->
	<div id="innertext" style="padding-top:0px">
		<section >
			<div class="hero-bg">
				<img style="width:100%" src="<?php echo $CLIENT_ROOT; ?>/images/layout/EcoFlorasNA_Banner.png"/>
			</div>
		</section>
			
			
		<div style="text-align:center; margin-left: 150px; margin-right:150px;">
			<h1> Welcome to the EcoFloras of North America! </h1>
			<hr>
			<h2>What is an EcoFlora?</h2>
			<p>EcoFloras are a new kind of flora that leverage the power of new technologies and community science to document and conserve native biodiversity. Pioneered by the New York Botanical Garden in 2017, EcoFloras are now being implemented by the Desert Botanical Garden, Denver Botanic Gardens, Marie Selby Botanical Gardens and the Chicago Botanic Garden. Visit the "Project Information" pages to learn more about their programs and information!</p>
			<p>The projects combine existing knowledge from herbaria and libraries with real-time observations of plants and their ecological partners.</p>
			<p>Participants are encouraged to explore their communities and record observations using iNaturalist or Budburst. Exploration of urban biodiversity supports increased environmental literacy and fosters public appreciation of the natural world, while engaging urban residents in local conservation advocacy</p>
			<p>This site can be used to:
			<ul style="text-align:center;list-style-position:inside;"><li>create dynamic species checklists for a defined area</li>
			<li>search and browse herbarium specimens and real-time observations of plant taxa</li></ul></p> 
		<hr>
		</div>	
	</div>
	<?php
	include($SERVER_ROOT.'/includes/footer.php');
	?>
</body>
</html>
=======
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
>>>>>>> Stashed changes
