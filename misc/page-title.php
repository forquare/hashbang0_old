<?php

	$location = $_GET["location"];
	$section = $_GET["section"];
	$language = $_GET["language"];
	
	if(!$location || $location == "welcome"){
		print('Home');
		return true;
	}
	
	if($location == "about"){
		print('Home &gt; About Ben');
		return true;
	}
	
	

	$locationArray = explode("/",$location);
	for($a=0;$a<count($locationArray)-1;$a++) {
		if($a == 0){
			print('Home &gt; ');
		}
		
		if($a == count($locationArray)-2){
			if($locationArray[$a + 1] == "index"){
				print(ucwords(str_replace("_", " ", $locationArray[$a])));
			}
			else{
				$ENDING = $locationArray[$a + 1];
				print(ucwords(str_replace("_", " ", $locationArray[$a])));
				print(" &gt; ".ucwords(str_replace("_", " ", $ENDING)));
			}
		}
		else{
			print(ucwords(str_replace("_", " ", $locationArray[$a])).' &gt; ');
		}
	}
	
	if($section){
		$sectionArray = explode("/",$section);
		for($a=0;$a<count($sectionArray);$a++) {
			if($a == 0){
				print(' &gt; ');
			}

			print(ucwords(str_replace("_", " ", $sectionArray[$a])));

		}
	}
	
	
	
	if($language){
		$languageArray = explode("/",$language);
		for($a=0;$a<count($languageArray);$a++) {
			if($a == 0){
				print(' &gt; ');
			}

			print(ucwords(str_replace("_", " ", $languageArray[$a])));

		}
	}
		
?>