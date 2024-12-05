<footer>
	<div class="logo-gallery">
		<?php
		//include($SERVER_ROOT . '/accessibility/module.php');
		?>
		<a href="https://www.imls.gov" target="_blank" aria-label="<?= "Visit IMLS site" ?>">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/imlslogo.jpg" alt="Institute for Museum and Library Services" />
		</a>
		<a href="https://biodiversity.ku.edu/" target="_blank" title="Visit KU BI website" aria-label="Visit KU BI website">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/KU_BI.png"  alt="KU BI Logo" />
		</a>
		<a href="https://biokic.asu.edu" target="_blank" title="<?= $LANG['F_BIOKIC'] ?>" aria-label="Visit BioKIC website">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/logo-asu-biokic.png"  alt="<?= $LANG['F_BIOKIC_LOGO'] ?>" />
		</a>
	</div>
	<p>
		This project was made possible in part by the Institute of Museum and Library Services [MG-70-19-0057-19].
	</p>
	<p>
		<?= (empty($DEFAULT_TITLE) ? 'This portal' : $DEFAULT_TITLE) . ' ' . 'is part of the SEINet Portal Network. <a href="https://symbiota.org/seinet/" target="_blank">Learn more here</a>.'; ?>
	</p>
	<p>
		<?= $LANG['F_POWERED_BY'] ?> <a href="https://symbiota.org/" target="_blank">Symbiota</a>.
	</p>
</footer>