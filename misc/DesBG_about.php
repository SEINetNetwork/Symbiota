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
	<body style="background-color:#FFFFFF">
		<?php
		$displayLeftMenu = false;
		include($SERVER_ROOT.'/includes/header.php');
		?>
		<div class="navpath" style="margin:10px;">
			<a href="../index.php"><?php echo (isset($LANG['HOME'])?$LANG['HOME']:'Home'); ?></a> &gt;
			<b><?php echo (isset($LANG['ABOUT_PROJECT'])?$LANG['ABOUT_PROJECT']:'DesBG > About the Project'); ?></b>
		</div>
		<h1>
		<img src="<?php echo $CLIENT_ROOT; ?>/images/layout/Phoenix_Ecoflora_Final.png" style="float:left;height:150px;margin:10px">
		Metro Phoenix EcoFlora<h1>
		<h2><span style="font-weight:normal;">The Metro Phoenix EcoFlora project was based at the Desert Botanical Garden, and focused on the flora of the Metro Phoenix Area (Maricopa & Pinal counties).</span></p>
		<h3 style="clear:left;text-align:center;"><a href="https://www.inaturalist.org/projects/metro-phoenix-ecoflora">View our project on iNaturalist</a></h3>
		<h3 style="text-align:center;"> More information here: <a href="https://dbg.org/partner-initiatives/ecoflora/">dbg.org/partner-initiatives/ecoflora/</a></h3>
		</div>
		<?php
		include($SERVER_ROOT.'/includes/footer.php');
		?>
	</body>
</html>