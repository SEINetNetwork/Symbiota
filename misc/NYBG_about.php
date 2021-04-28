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
			<b><?php echo (isset($LANG['ABOUT_PROJECT'])?$LANG['ABOUT_PROJECT']:'NYBG > About the Project'); ?></b>
		</div>
		<div style="display: block; margin-left: auto; margin-right:auto;width: 25%;">
		<img src="<?php echo $CLIENT_ROOT; ?>/images/layout/NY_Ecoflora_Final.png" />
		</div>
		<!-- This is inner text! -->
		<div id="innertext" style="margin:10px 20px; text-align:center ">
			<h1>New York City EcoFlora<h1>
			<h4>[Under Construction]</h4>
			<h3><a href="https://www.inaturalist.org/projects/new-york-city-ecoflora">View our project on iNaturalist</a></h3>
			<h3> More information here: <a href="https://www.nybg.org/science-project/new-york-city-ecoflora">www.nybg.org/science-project/new-york-city-ecoflora</a></h3>
		</div>
		<?php
		include($SERVER_ROOT.'/includes/footer.php');
		?>
	</body>
</html>