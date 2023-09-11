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
		<table id="maintable">
		<?php
		$displayLeftMenu = false;
		include($SERVER_ROOT.'/includes/header.php');
		?>
		<div class="navpath" style="margin:10px;">
			<a href="../index.php"><?php echo (isset($LANG['HOME'])?$LANG['HOME']:'Home'); ?></a> &gt;
			<b><?php echo (isset($LANG['ABOUT_PROJECT'])?$LANG['ABOUT_PROJECT']:'DenBG > About the Project'); ?></b>
		</div>
		<h1> 
		<img src="<?php echo $CLIENT_ROOT; ?>/images/layout/Denver_Ecoflora_Final.png" style="float:left;height:150px;margin:10px">
		Denver EcoFlora </h1>			
			<h2><span style="font-weight:normal;width:85%">The Denver EcoFlora project was based at the Denver Botanical Gardens and is focused on the plants and fungi of the Boulder-Denver Metro Area (Adams, Arapahoe, Broomfield, Denver, Douglas, and Jefferson counties).</span></p>
			<h3 style="clear:left;text-align:center;"><a href="https://www.inaturalist.org/projects/denver-ecoflora-project">View our project on iNaturalist</a></h3>
			<h3 style="text-align:center;">More information here: <a href="https://www.botanicgardens.org/citizen-science">www.botanicgardens.org/citizen-science</a></h3>
			</div>
		<?php
		include($SERVER_ROOT.'/includes/footer.php');
		?>
		</table>
	</body>
</html>