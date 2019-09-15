<?php
	$webkit = stristr($_SERVER['HTTP_USER_AGENT'],"WebKit");
	$KHTML = stristr($_SERVER['HTTP_USER_AGENT'],"KHTML");
?>

<ul id="nav">
	<li>
		<a href='?location=welcome'>Home</a>
	</li>
	
	
	<li>
		<a href='?location=about'>About Ben</a>
	</li>
	
	
	<li>
		<a href='http://blog.hashbang0.com'>Blog</a>
	</li>
	
	
	<li>
		<a href="#">Stuff</a>
		<?php 
			include("interesting_stuff.php");
		?>
	</li>
	
	<li>
		<a href="#">View</a>
		<?php 
			include("view.php"); 
		?>
	</li>
	
	<li>
		<a href="#">Links</a>
		<?php 
			include("external.php"); 
		?>
	</li>
</ul>