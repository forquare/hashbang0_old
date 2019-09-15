<?php
	
	//Loads any redirections needed.
	//Also grabs location from URL	
	include("EXCEPTIONS.php");
	
	//If there is nothing after the URL display the welcome page
	if(!$page){
		include("welcome.php");
	}
	else{	
		//If the page specified in the URL exists then display it
		if(file_exists($page . ".html")){
			include($page . ".html");
		}
		else{
			//This is used if a page doesn't have a .html ending
			//You could always add the .html ending in the code...
			//But I didn't think of doing that :P
			if(file_exists($page . ".php")){
				include($page . ".php");
			}
			else{
				//If worst comes to worst and you can't find the page
				//Display an appologetic page
				include("oops.html");
			}
		}
	}
?>