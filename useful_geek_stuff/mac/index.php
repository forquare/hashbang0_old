<?php
	$section = $_GET["section"];
?>

<h1>Mac OS</h1>

<p>
	<a href="?location=useful_geek_stuff/mac/index">UNIX home</a><br />
	<a href="?location=useful_geek_stuff/mac/index&amp;section=1">Burning a cross-platform CD</a> | 
	<br />
	
	<?php
		if($section > 1){
			$prev = $section - 1;
			print '<a href="?location=useful_geek_stuff/mac/index&amp;section=' . $prev . '">&lt;&lt;Previous</a>';
			print " | ";
		}
		else{
			print "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		}
		
		$next = $section + 1;
		if(file_exists("useful_geek_stuff/mac/" . $next . ".html")){
			print '<a href="?location=useful_geek_stuff/mac/index&amp;section=' . $next . '">Next&gt;&gt;</a>';
		}
		if(file_exists("useful_geek_stuff/mac/" . $next . ".php")){
			print '<a href="?location=useful_geek_stuff/mac/index&amp;section=' . $next . '">Next&gt;&gt;</a>';
		}
	?>
	
</p>



<?php
	if(!$section){
		include("useful_geek_stuff/mac/home.php");
	}
	else{
		if(file_exists("useful_geek_stuff/mac/" . $section . ".html")){
			include("useful_geek_stuff/mac/" . $section . ".html");
		}
		else if(file_exists("useful_geek_stuff/mac/" . $section . ".php")){
			include("useful_geek_stuff/mac/" . $section . ".php");
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
			print '<a href="?location=useful_geek_stuff/mac/index&amp;section=' . $prev . '">&lt;&lt;Previous</a>';
			print " | ";
		}
		else{
			print "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		}
		
		$next = $section + 1;
		if(file_exists("useful_geek_stuff/mac/" . $next . ".html")){
			print '<a href="?location=useful_geek_stuff/mac/index&amp;section=' . $next . '">Next&gt;&gt;</a>';
		}
		if(file_exists("useful_geek_stuff/mac/" . $next . ".php")){
			print '<a href="?location=useful_geek_stuff/mac/index&amp;section=' . $next . '">Next&gt;&gt;</a>';
		}
	?>
</p>
