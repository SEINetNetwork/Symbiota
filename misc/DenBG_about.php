<?php
include_once('../config/symbini.php');
header("Content-Type: text/html; charset=".$CHARSET);
?>
<html>
	<head>
		<title>About Project</title>
		<?php
		$activateJQuery = false;
		include_once($SERVER_ROOT.'/includes/head.php');
		?>
	</head>
	<body>
		<?php
		$displayLeftMenu = false;
		include($SERVER_ROOT.'/includes/header.php');
		?>
		<div class="navpath">
			<a href="../index.php"><?php echo (isset($LANG['HOME'])?$LANG['HOME']:'Home'); ?></a> &gt;
			<b><?php echo (isset($LANG['ABOUT_PROJECT'])?$LANG['ABOUT_PROJECT']:'DenBG > About the Project'); ?></b>
		</div>
		<div style="display: block; margin-left: auto; margin-right:auto;width: 25%;">
		<img src="<?php echo $CLIENT_ROOT; ?>/images/layout/Denver_Ecoflora_Final.png" />
		</div>
		<!-- This is inner text! -->
		<div id="innertext" style="margin-left:150px; margin-right:150px; text-align:center">
			<h1>Denver EcoFlora</h1>
			<h4>[Under Construction]</h4>			
			<h3><a href="https://www.inaturalist.org/projects/denver-ecoflora-project">View our project on iNaturalist</a></h3>
			<h3>More information here: <a href="https://www.botanicgardens.org/citizen-science">www.botanicgardens.org/citizen-science</a></h3>
			<p></p>
			<p>Launched in 2020, the Denver EcoFlora Project has two main goals. First, to meaningfully engage citizens in observing, protecting and preserving the metro area's native plant species and second, to assemble novel observations and data on the metro area's flora to better inform policy decisions concerning land management and conservation strategies. Anyone can participate in the Denver EcoFlora Project - all you need is access to a smartphone and a few minutes to spend learning the citizen science application iNaturalist. The EcoFlora Project consists of plant and fungal observations made within the Denver-Boulder metro area. Participants are driven to grow observations through monthly EcoQuests, which challenge participants to discover biodiversity in different areas (yard, park, national forest) or in different ways (species color, smell or relevance in current research).</p>
			<hr>
			</div>
		
		<?php
		include($SERVER_ROOT.'/includes/footer.php');
		?>
	</body>
</html>