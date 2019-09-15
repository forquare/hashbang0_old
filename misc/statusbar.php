<?php

	$location = $_GET["location"];
	$section = $_GET["section"];
	$language = $_GET["language"];
	
	if(!$location || $location == "welcome"){
		print('<a href="?location=welcome">Home</a>');
		return true;
	}
	
	if($location == "about"){
		print('<a href="?location=welcome">Home</a> &gt; <a href="?location=about">About Ben</a>');
		return true;
	}
	
	

	$locationArray = explode("/",$location);
	$HOME = "?location=";
	$link = $HOME;
	for($a=0; $a < count($locationArray)-1; $a++) {
		if($a == 0){
			print('<a href="'.$link.'">Home</a> &gt; ');
			$link .= $locationArray[$a];
		}
		else{
			$link .= "/" . $locationArray[$a];
		}

		if($a == count($locationArray)-2){
			if($locationArray[$a + 1] == "index"){
				$link .= "/index";
				print('<a href="'.$link.'">'.str_replace("_", " ", $locationArray[$a]).'</a>');
			}
			else{
				$ENDING = $locationArray[$a + 1];
				print('<a href="'.$link.'/index">'.str_replace("_", " ", $locationArray[$a]).'</a>');
				print(' &gt; <a href="'.$link.'/'.$ENDING.'">'.str_replace("_", " ", $ENDING).'</a>');
			}
		}
		else{
			print('<a href="'.$link.'/index">'.str_replace("_", " ", $locationArray[$a]).'</a> &gt; ');
		}
	}
	
	if($section){
		$sectionArray = explode("/",$section);
		$HOME = "&section=";
		$link .= $HOME;
		for($a=0;$a<count($sectionArray);$a++) {
			if($a == 0){
				print(' &gt; ');
			}

			$link .= $sectionArray[$a];

			print('<a href="'.$link.'">'.str_replace("_", " ", $sectionArray[$a]).'</a>');

		}
	}
	
	if($language){
		$languageArray = explode("/",$language);
		$HOME = "&language=";
		$link .= $HOME;
		for($a=0;$a<count($languageArray);$a++) {
			if($a == 0){
				print(' &gt; ');
			}

			$link .= $languageArray[$a];

			print('<a href="'.$link.'">'.str_replace("_", " ", $languageArray[$a]).'</a>');

		}
	}
?>