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
			<b><?php echo (isset($LANG['ABOUT_PROJECT'])?$LANG['ABOUT_PROJECT']:'DesBG > About the Project'); ?></b>
		</div>
		<div style="display: block; margin-left: auto; margin-right:auto;width: 25%;">
		<img src="<?php echo $CLIENT_ROOT; ?>/images/layout/Phoenix_Ecoflora_Final.png"/>
		</div>
		<!-- This is inner text! -->
		<div id="innertext" style="margin-left:150px; margin-right:150px; text-align:center">
			<h1>Metro Phoenix EcoFlora<h1>
			<h4>[Under Construction]</h4>
			<h3><a href="https://www.inaturalist.org/projects/metro-phoenix-ecoflora">View our project on iNaturalist</a></h3>
			<h3> More information here: <a href="https://dbg.org/partner-initiatives/ecoflora/">dbg.org/partner-initiatives/ecoflora/</a></h3>
			<p></p>
			<p>The Metro Phoenix EcoFlora project is making plant science meaningful and open for everyone, while we learn about the biodiversity of our urban desert home. We need your help! This is an opportunity to contribute to real-life science while studying plants in metro Phoenix, what is happening with them, and how these plants are interacting with other organisms. The information gathered through this project will provide insight into bigger biodiversity science questions and contribute to local conservation efforts.</p>
			<hr>
		<img src="<?php echo $CLIENT_ROOT; ?>/images/layout/cazca.png" "width=500px"/>

		</div>
		<?php
		include($SERVER_ROOT.'/includes/footer.php');
		?>
	</body>
</html>