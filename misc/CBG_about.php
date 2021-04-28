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
			<b><?php echo (isset($LANG['ABOUT_PROJECT'])?$LANG['ABOUT_PROJECT']:'CBG > About the Project'); ?></b>
		</div>
		<div style="display: block; margin-left: auto; margin-right:auto;width: 25%;">
		<img src="<?php echo $CLIENT_ROOT; ?>/images/layout/Chicago_Ecoflora_Final.png"/>
		</div>
		<!-- This is inner text! -->
		<div id="innertext" style="margin:10px 20px;text-align:center">
			<h1> Chicago EcoFlora </h1>
			<h4> [Under Construction] </h4>
			<h3> More information here: <a href="https://budburst.org/chicago-ecoflora">budburst.org/chicago-ecoflora</a></h3>
			<p></p>
			<p>Now more than ever we need to understand urban flora-both native and invasive species. The Chicago EcoFlora project is collecting observations of plants in Cook County, Illinois to learn more about local plant life and contribute to conservation planning. With your help, we will collect data on important native species and troublesome new invaders that call our city home. This project will inform Chicago Park District, the Forest Preserves of Cook County, and other land managers about native plants that need protection and invasive species that need control.</p>
			<hr>
			<img src="<?php echo $CLIENT_ROOT; ?>/images/layout/budburst.png" "width=500px"/>
			</div>
		<?php
		include($SERVER_ROOT.'/includes/footer.php');
		?>
	</body>
</html>