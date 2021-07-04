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
				<img style="width:100%" src="<?php echo $CLIENT_ROOT; ?>/images/layout/EcoFlorasNA_banner.png"/>
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
		<div style="text-align:center">
		<h2>Monthly EcoQuest Challenges</h2>
		<h3>JUNE 2021</h3>
		</div>
		<div id="container5">
			<div id="container4">
				<div id="container3">
					<div id="container2">
						<div id="container1">
							<div id="col1" style="text-align:center">
							<h3><u>New York City EcoFlora</u></h3>
							<h2>FERN FORAY</h2>
							<p>How many species of fern can you find? Is Japanese Painted Fern naturalized in NYC?</p>
							<p><a href="https://www.inaturalist.org/projects/fern-foray">Upload your observations to iNaturalist</a></p>
							</div>
							<div id="col2" style="text-align:center">
							<h3><u>Chicago EcoFlora</u></h3>
							<h2>PUMPED FOR PURPLE FLOWERS / SEARCH OUT SWALLOWWORTS</h2>
							<p>How many native purple wildflowers (spiderwort [<i>Tradescantia ohiensis</i>], eastern purple coneflower [<i>Echinacea purpurea</i>]) and invasive swallowworts (<i>Vincetoxicum</i> sp.) can you find?</p>
							<p><a href="https://budburst.org/june-ecoquest">Upload your observations to Budburst</a></p>
							</div>
							<div id="col3" style="text-align:center">
							<h3><u>Sarasota-Manatee EcoFlora</u></h3>
							<h2>LEAPING INTO WATERLILIES</h2>
							<p>There are 8 species of native lilies and lotuses found in our counties. How many can you find?</p>
							<p><a href="https://www.inaturalist.org/projects/leaping-into-lilies-june-sarasota-manatee-ecoflora-ecoquest">Upload your observations to iNaturalist</a></p>
							</div>
							<div id="col4" style="text-align:center">
							<h3><u>Metro Phoenix EcoFlora</u></h3>
							<h2>THE NIGHT SHIFT</h2>
							<p>How many nocturnal pollinators can you observe?</p>
							<p><a href="https://www.inaturalist.org/projects/the-night-shift">Upload your observations to iNaturalist</a></p>
							</div>
							<div id="col5" style="text-align:center">
							<h3><u>Denver EcoFlora</u></h3>
							<h2>HEUCHERA HUNT</h2>
							<p>There are 4 species of <i>Heuchera</i> recorded from the Denver metro area, which commonly grow on rock faces. How many can you find?</p>
							<p><a href="https://www.inaturalist.org/projects/june-ecoquest-heuchera-hunt">Upload your observations to iNaturalist</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>	
	<p></p>
	</div>
	
	</div>
	<?php
	include($SERVER_ROOT.'/includes/footer.php');
	?>
</body>
</html>