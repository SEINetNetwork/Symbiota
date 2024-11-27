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
			<b><?php echo (isset($LANG['ABOUT_PROJECT'])?$LANG['ABOUT_PROJECT']:'CBG > About the Project'); ?></b>
		</div>
		<h1> 
		<img src="<?php echo $CLIENT_ROOT; ?>/images/layout/Chicago_Ecoflora_Final.png" style="float:left;height:150px;margin:10px">
		Chicago EcoFlora </h1>
		<h2><span style="font-weight:normal;">The Chicago EcoFlora project was based at the Chicago Botanic Garden and is focused on the plants of Cook County, Illinois. In addition to using iNaturalist, the Chicago EcoFlora project also uses Budburst, another community science platform for documenting plant phenology. </span></h2>
		<h3 style="clear:left;text-align:center;"><a href="https://www.inaturalist.org/projects/ecoflora-chicago">View project on iNaturalist</a></h3>
		<h3 style="text-align:center;"> More information here: <a href="https://budburst.org/chicago-ecoflora">budburst.org/chicago-ecoflora</a></h3>
		</div>
		<?php
		include($SERVER_ROOT.'/includes/footer.php');
		?>
		</table>
	</body>
</html>