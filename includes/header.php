<script>
<!--
if (top.frames.length!=0)
  top.location=self.document.location;
// -->
</script>
<table id="maintable" cellspacing="0">
	<tr>
		<td id="header" colspan="3">
			<div style="clear:both; width:100%; height:170px; border-bottom:1px solid #000000;">
				<div style="float:left">
					<img src="<?php echo $CLIENT_ROOT; ?>/images/layout/left_logo.jpg" style="margin:0px 30px;width:230px" />
				</div>
				<div style="margin-left: 40px; color: #fff; font-family: 'Mate', serif; letter-spacing: 1px; text-shadow: 0 0 7px rgba(0,0,0,0.5);">
					<div style="margin-top:30px; font-size:60px; line-height:48px;">
						North American EcoFloras
					</div>
				</div>
			</div>
			<div id="top_navbar">
				<div id="right_navbarlinks">
					<?php
					if($USER_DISPLAY_NAME){
						?>
						<span style="">
							Welcome <?php echo $USER_DISPLAY_NAME; ?>!
						</span>
						<span style="margin-left:5px;">
							<a href="<?php echo $CLIENT_ROOT; ?>/profile/viewprofile.php">My Profile</a>
						</span>
						<span style="margin-left:5px;">
							<a href="<?php echo $CLIENT_ROOT; ?>/profile/index.php?submit=logout">Logout</a>
						</span>
						<?php
					}
					else{
						?>
						<span style="">
							<a href="<?php echo $CLIENT_ROOT.'/profile/index.php?refurl='.$_SERVER['SCRIPT_NAME'].'?'.htmlspecialchars($_SERVER['QUERY_STRING'], ENT_QUOTES); ?>">
								Log In
							</a>
						</span>
						<span style="margin-left:5px;">
							<a href="<?php echo $CLIENT_ROOT; ?>/profile/newprofile.php">
								New Account
							</a>
						</span>
						<?php
					}
					?>
					<span style="margin-left:5px;margin-right:5px;">
						<a href='<?php echo $CLIENT_ROOT; ?>/sitemap.php'>Sitemap</a>
					</span>

				</div>
				<ul id="hor_dropdown">
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/index.php" >Home</a>
					</li>
					<li>
						<a href="#" >Search</a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/collections/index.php" >Search Collections</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/imagelib/search.php" >Search Images</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/collections/map/index.php" target="_blank">Map Search</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#" >Chicago Botanical Garden</a>
						<ul>
							<li>
								<a href"#" >Project Information</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=140" >Checklists</a>
							</li>
						</ul>						
					</li>
					<li> 
						<a href="#" >Denver Botanical Garden</a>
						<ul>
							<li>
								<a href"#" >Project Information</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=141" >Checklists</a>
							</li>
						</ul>
					</li>	
					<li>
						<a href="#" >Desert Botanical Garden</a>
						<ul>
							<li>
								<a href"#" >Project Information</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=139" >Checklists</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#" >NY Botanical Garden</a>
						<ul>
							<li>
								<a href"#" >Project Information</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=115" >Checklists</a>
							</li>
						</ul>
					<li>
						<a href="#" >Selby Botanical Garden</a>
						<ul>
							<li>
								<a href"#" >Project Information</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=138" >Checklists</a>
							</li>
						</ul>
					<li>
						<a href="#" >Interactive Tools</a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist" >Dynamic Checklist</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=key" >Dynamic Key</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#" >Resources</a>
					</li>
				</ul>
			</div>
		</td>
	</tr>
	<tr>
		<td id='middlecenter'  colspan="3">