<?php
	$section = $_GET["section"];
?>

<h1>UNIX commands &amp; tools</h1>

<p>
	<a href="?location=useful_geek_stuff/unix/index">UNIX home</a><br />
	<a href="?location=useful_geek_stuff/unix/index&amp;section=1">Common commands</a> | 
	<a href="?location=useful_geek_stuff/unix/index&amp;section=2">Tarbals</a> | 
	<a href="?location=useful_geek_stuff/unix/index&amp;section=3">SSH</a> | 
	<a href="?location=useful_geek_stuff/unix/index&amp;section=4">SCP</a> | 
	<a href="?location=useful_geek_stuff/unix/index&amp;section=5">RSYNC</a> | 
	<a href="?location=useful_geek_stuff/unix/index&amp;section=6">SED</a> | 
	<a href="?location=useful_geek_stuff/unix/index&amp;section=7">Screen</a> | 
	<a href="?location=useful_geek_stuff/unix/index&amp;section=8">CRON</a> | 
	<a href="?location=useful_geek_stuff/unix/index&amp;section=9">Reverse SSH</a> |
	<a href="?location=useful_geek_stuff/unix/index&amp;section=10">Download folder/site with WGET</a> |
	<br />
	
	<?php
		if($section > 1){
			$prev = $section - 1;
			print '<a href="?location=useful_geek_stuff/unix/index&amp;section=' . $prev . '">&lt;&lt;Previous</a>';
			print " | ";
		}
		else{
			print "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		}
		
		$next = $section + 1;
		if(file_exists("useful_geek_stuff/unix/" . $next . ".html")){
			print '<a href="?location=useful_geek_stuff/unix/index&amp;section=' . $next . '">Next&gt;&gt;</a>';
		}
		if(file_exists("useful_geek_stuff/unix/" . $next . ".php")){
			print '<a href="?location=useful_geek_stuff/unix/index&amp;section=' . $next . '">Next&gt;&gt;</a>';
		}
	?>
	
</p>



<?php
	if(!$section){
		include("useful_geek_stuff/unix/home.php");
	}
	else{
		if(file_exists("useful_geek_stuff/unix/" . $section . ".html")){
			include("useful_geek_stuff/unix/" . $section . ".html");
		}
		else if(file_exists("useful_geek_stuff/unix/" . $section . ".php")){
			include("useful_geek_stuff/unix/" . $section . ".php");
		}
		else{
			include("oops.html");
		}
	}
?>

<p>
	<?php
		if($section > 1){
			$prev = $section - 1;
			print '<a href="?location=useful_geek_stuff/unix/index&amp;section=' . $prev . '">&lt;&lt;Previous</a>';
			print " | ";
		}
		else{
			print "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		}
		
		$next = $section + 1;
		if(file_exists("useful_geek_stuff/unix/" . $next . ".html")){
			print '<a href="?location=useful_geek_stuff/unix/index&amp;section=' . $next . '">Next&gt;&gt;</a>';
		}
		if(file_exists("useful_geek_stuff/unix/" . $next . ".php")){
			print '<a href="?location=useful_geek_stuff/unix/index&amp;section=' . $next . '">Next&gt;&gt;</a>';
		}
	?>
</p>
