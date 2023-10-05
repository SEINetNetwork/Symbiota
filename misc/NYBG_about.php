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
			<b><?php echo (isset($LANG['ABOUT_PROJECT'])?$LANG['ABOUT_PROJECT']:'NYBG > About the Project'); ?></b>
		</div>
		<div>
		<h1>
		<img src="<?php echo $CLIENT_ROOT; ?>/images/layout/NY_Ecoflora_Final.png" style="float:left;height:150px;margin:10px">
		New York City EcoFlora</h1>
		<h2><span style="font-weight:normal;">The New York City EcoFlora project is based at the New York Botanical Garden, and is focused on the flora and fauna of New York City (Bronx, Kings, New York, Queens, & Richmond counties).</span></h2>
		<h3 style="clear:left;text-align:center;"><a href="https://www.inaturalist.org/projects/new-york-city-ecoflora">View our project on iNaturalist</a></h3>
		<h3 style="text-align:center;"> More information here: <a href="https://www.nybg.org/science-project/new-york-city-ecoflora">www.nybg.org/science-project/new-york-city-ecoflora</a></h3>
		</div>
		<?php
		include($SERVER_ROOT.'/includes/footer.php');
		?>
		</table>
	</body>
</html>