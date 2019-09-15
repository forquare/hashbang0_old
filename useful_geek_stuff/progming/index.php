<?php
	$language = $_GET["language"];
	$section = $_GET["section"];
?>


<?php
	
	if((!$section) && (!$language)){
		include("useful_geek_stuff/progming/home.php");
	}
	else{
		if(!$section){
			include("useful_geek_stuff/progming/languages/" . $language . ".php");
		}
		if(!$language){
			include("useful_geek_stuff/progming/" . $section . "/home.php");
		}
	}
		
	if($section && $language){	
		if(file_exists("useful_geek_stuff/progming/" . $section . "/" . $language . ".html")){
			include("useful_geek_stuff/progming/" . $section . "/" . $language . ".html");
		}
		else if(file_exists("useful_geek_stuff/progming/" . $section . "/" . $language . ".php")){
			include("useful_geek_stuff/progming/" . $section . "/" . $language . ".php");
		}
		else{
			include("oops.html");
		}
	}
?>