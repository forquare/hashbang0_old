<?php
	//Grab the location from the URL
	$page = $_GET["location"];
	$section = $_GET["section"];
	$language = $_GET["language"];
	
	$page = str_replace("tutorials", "useful_geek_stuff", $page);
	
	
	
?>

<?php
	//EXCEPTIONS TO LICENCE/STANDARDS

	$location = $_GET["location"];
	$locationArray = explode("/",$location);
	
	if($locationArray[0] == "gallery"){
		$CC_license = false;
	}
	

?>