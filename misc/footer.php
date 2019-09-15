<p>
	<?php

		if ($xhtml_valid == 1) {
			echo '<a href="http://validator.w3.org/check?uri=referer">';
			echo '<img src="img/buttons/w3c_xhtml_1.1.png"';
			echo ' alt="Valid XHTML 1.1!"';
			echo ' class="badge"/>';
			echo '</a>';
		}

		if ($css_valid == 1) {
			echo '<a href="http://jigsaw.w3.org/css-validator/check?uri=referer">';
			echo '<img src="img/buttons/w3c_css_2.1.png"';
			echo ' alt="Valid CSS!"';
			echo ' class="badge"/>';
			echo '</a>';
		}

		if ($CC_license == 1) {
			echo '<a href="http://creativecommons.org/licenses/by-nc-sa/2.0/uk/">';
			echo '<img alt="Creative Commons License" ';
			echo ' src="img/buttons/cc_by-nc-sa.png"';
			echo ' class="badge"/>';
			echo '</a>';
		}
		else{
			echo '<a href="http://creativecommons.org/licenses/by-nc-nd/2.0/uk/">';
			echo '<img alt="Creative Commons License" ';
			echo ' src="img/buttons/gallery_licence.png"';
			echo ' class="badge"/>';
			echo '</a>';
		}
		
		echo '<a href="http://www.linode.com/?r=d626993fa474bf547382848bde302c23317e3898"><img alt="Join today and receive a $20 discount!" src="img/buttons/help_join now!.png" class="badge" /></a>';
	?>
	
	
	
	
	<br />

	Copyright © 2007 - <?php print(date('Y'));?> <a class="link" href='?location=about'>Ben Lavery</a><br />
	
	Last uploaded: <?php $modified = file('misc/modified'); print(trim($modified[0])); ?> <br />

	Designed and maintained by <a class="link" href='?location=about'>Ben Lavery</a> - <a class="link" href="mailto:&#98;&#101;&#110;&#46;&#108;&#97;&#118;&#101;&#114;&#121;&#64;&#104;&#97;&#115;&#104;&#98;&#97;&#110;&#103;&#48;&#46;&#99;&#111;&#109;">&#98;&#101;&#110;&#46;&#108;&#97;&#118;&#101;&#114;&#121;&#64;&#104;&#97;&#115;&#104;&#98;&#97;&#110;&#103;&#48;&#46;&#99;&#111;&#109;</a><br />
	
	<?php
		if ($CC_license == 1) {
			echo 'This page and its contents by <a class="link" href="?location=about">Ben Lavery</a> is licensed under a <a class="link" href="http://creativecommons.org/licenses/by-nc-sa/2.0/uk/">Creative Commons Attribution-Non-Commercial-Share Alike 2.0 UK</a><br /><br />';
		}
		else{
			echo 'This page and its contents by <a class="link" href="?location=about">Ben Lavery</a> is licensed under a <a class="link" href="http://creativecommons.org/licenses/by-nc-nd/2.0/uk/">Creative Commons Attribution-Non-Commercial-No Derivative Works 2.0 UK: England &amp; Wales License</a><br /><br />';
		}
?>

Powered by <a class="link" href="http://www.linode.com/?r=d626993fa474bf547382848bde302c23317e3898">Linode.com</a><br /><br />

</p>