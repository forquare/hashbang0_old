<!DOCTYPE html>
<html><head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
		<meta name="author" content="Flux User" >
		<meta name="description" content="My Website" >
		<meta name="keywords" content="Flux, Mac" >
		<title>My Webpage</title>
	<link href="main.css" rel="stylesheet" media="screen" type="text/css" ></head>
	<body style="left:0; top:-1px; " >
	
<div style="left:0; top:0; " flux:masterref="header:index.html" id="header" ><p id="headertext" style="height:0; " flux:masterrefchild="1617819336" >Faye Griffiths Photography</p></div><div style="" flux:masterref="menu:index.html" id="menu" ><div style="left:0; top:0; " flux:masterrefchild="1399125485" ><a href="index.html" target="" name="" flux:masterrefchild="156091745" >Home</a></div><a href="contact.php" target="" name="" flux:masterrefchild="101027544" ></a><div style="" flux:masterrefchild="1356425228" ><a href="contact.php" target="" name="" flux:masterrefchild="101027544" ></a><a href="contact.html" target="" name="" flux:masterrefchild="1899894091" >Contact</a></div><div style="" flux:masterrefchild="585640194" ><a href="contact.php" target="" name="" flux:masterrefchild="937186357" >About Faye</a></div></div><div style="" id="main" ><div style="" flux:masterref="sidebar:index.html" id="sidebar" ><div style="" id="sidebar_piece" flux:masterrefchild="1646035001" ></div><div style="" id="sidebar_piece" flux:masterrefchild="1025921153" ></div></div><div style="" id="content" ><?php require_once('lib/recaptchalib.php');
$publickey = "fayegriffiths-photography.co.uk";

$hidden = $_POST['hidden'];
$user_name = $_POST['name'];
$user_email = $_POST['email'];
$user_message = $_POST['message'];

if(!empty($hidden)){
	$resp = recaptcha_check_answer(
		$privatekey,
		$_SERVER["REMOTE_ADDR"],
		$_POST["recaptcha_challenge_field"],
		$_POST["recaptcha_reponse_field"]);
	if(!$resp->is_valid){
		//entered incorrectly
		echo "The reCAPTCHA wasn't entered correctly.  Go back and try again." . "(reCAPTCHA said: " . $resp->error .")";
	}else{
		$to = "ben.lavery@gmail.com";
		$subject = "Website Enquiry";
		$headers = "From: $user_email";
		$message = "From: $user_name\r\n" . "Message: $user_message";
		if(mail($to, $subject, $message, $headers)){
			echo "<p>Many thanks for your message.</p>";
		}else{
			echo "<p>Emailing failed.  Please try again later.</p>";
		}
	}
}else{
	echo "<form method='post' action='contact.php'>";
	echo "<input type='hidden' value='hidden' name='hidden'/>";
	echo "Name: <input type='text' name='name' value='' cols='10' /><br />";
	echo "E-mail: <input type='text' name='email' value='' cols='20' /><br />";
	echo "Message:<br /><textarea name='message' value='' cols='80' rows='5'></textarea><br />";
	echo recaptcha_get_html($publickey);
	echo "<input type='submit' value='Submit' />";
	echo "</form>";
}?></div><div style="" flux:masterref="clearer:index.html" id="clearer" ></div></div><div style="" flux:masterref="footer:index.html" id="footer" ><p flux:masterrefchild="510616708" >Copyright © Faye Griffiths 2012</p></div></body></html>