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
<body>
	<?php
	include($SERVER_ROOT.'/includes/header.php');
	?>
	<!-- This is inner text! -->
	<div id="innertext">
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
		<h3>APRIL 2021</h3>
		</div>
		<div id="container5">
			<div id="container4">
				<div id="container3">
					<div id="container2">
						<div id="container1">
							<div id="col1" style="text-align:center">
							<h4><u>New York City EcoFlora</u></h4>
							<h2>CHECK FOR CHERRY</h2>
							<p>How many flowering cherry trees (<i>Prunus</i> spp.) can you find?</p>
							<p><a href="https://www.nybg.org/content/uploads/2021/03/NYCEcoFlora_Prunus.pdf">Guide to <i>Prunus</i> in NYC</a></p>
							<p><a href="https://www.inaturalist.org/projects/check-for-cherry">Upload your observations to iNaturalist</a></p>
							</div>
							<div id="col2" style="text-align:center">
							<h4><u>Chicago EcoFlora</u></h4>
							<h2>BLUEBELLS RING IN SPRING / BEGONE BRADFORD PEAR</h2>
							<p>How many native Virginia bluebells (<i>Mertensia virginica</i>) and invasive Bradford pear (<i>Pyrus calleryana</i>) can you find?</p>
							<p><a href="https://budburst.org/april-ecoquest">Upload your observations to Budburst</a></p>
							</div>
							<div id="col3" style="text-align:center">
							<h4><u>Sarasota-Manatee EcoFlora</u></h4>
							<h2>PLANTS THAT POP!</h2>
							<p>How many ballistochorous plants (rapid ejection of seeds by explosive fruit dehiscence) can you find?</p>
							<p><a href="https://www.inaturalist.org/projects/plants-that-pop-sarasota-manatee-ecoflora-april-ecoquest">Upload your observations to iNaturalist</a></p>
							</div>
							<div id="col4" style="text-align:center">
							<h4><u>Metro Phoenix EcoFlora</u></h4>
							<h2>LOOKIN' SHARP</h2>
							<p>How many cacti (Family Cactaceae) can you find?</p>
							<p><a href="https://www.inaturalist.org/projects/lookin-sharp">Upload your observations to iNaturalist</a></p>
							</div>
							<div id="col5" style="text-align:center">
							<h4><u>Denver EcoFlora</u></h4>
							<h2>PASQUE FLOWERS</h2>
							<p>How many pasque flowers (<i>Pulsatilla nuttalliana</i>) can you find?</p>
							<p><a href="https://www.inaturalist.org/projects/denver-ecoquest-april-2021-pasque-flowers">Upload your observations to iNaturalist</a></p>
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