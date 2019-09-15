<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>#!0 A Place of Geekery - <?php include("misc/page-title.php"); ?></title>
	
	<script type="text/javascript" src="js/non-lightbox/cookie.js"></script>
	
	<?php
		$PLAIN = $_COOKIE["hashbangplain"];
		
		if($PLAIN == "no" || $PLAIN == "null" || ! $PLAIN){
			print('<link rel="stylesheet" type="text/css" href="css/content.css" />'."\n\t");
			print('<link rel="stylesheet" type="text/css" href="css/footer.css" />'."\n\t");
			print('<link rel="stylesheet" type="text/css" href="css/menu.css" />'."\n\t");
			print('<link rel="stylesheet" type="text/css" href="css/middle_content.css" />'."\n\t");
			print('<link rel="stylesheet" type="text/css" href="css/misc.css" />'."\n\t");
			print('<link rel="stylesheet" type="text/css" href="css/sidebar.css" />'."\n\t");
			print('<link rel="stylesheet" type="text/css" href="css/status_bar.css" />'."\n\t");
			print('<link rel="stylesheet" type="text/css" href="css/title.css" />'."\n\t");
			print('<link rel="stylesheet" type="text/css" href="css/body.css" />'."\n\t");
			print('<link rel="stylesheet" type="text/css" href="css/gallery.css" />'."\n\t");
			print(''."\n\t");
			print('<link rel="stylesheet" type="text/css" href="css/lightbox.css" />'."\n\t");
			print(''."\n\t");
			print(''."\n\t");
			print(''."\n\t");
			print('<script type="text/javascript" src="js/prototype.js"></script>'."\n\t");
			print('<script type="text/javascript" src="js/scriptaculous.js?load=effects,builder"></script>'."\n\t");
			print('<script type="text/javascript" src="js/lightbox.js"></script>'."\n\t");
		}
	?>

	<link rel="icon" type="image/png" href="img/favicon.png" />
	
</head>

<?php
	#Set defaults for displaying how valid the site is
	$xhtml_valid = true;
	$css_valid = true;
	$CC_license = true;
?>

<body>
	<div id="main">
		
		<!-- Title -->
		<div id="title"></div>
		
		<!-- Content -->
		<div id="content">
			<div id="titlebar">
				<div id="titlebarmain">
					<div id="titlebarleft"></div>
					<div id="titlebarright"></div>
					<p>Hash Bang Zero</p>
				</div>
				
			</div>
			
			<!-- Menu -->
			<div id="menu"><?php include("menu/menu.php"); ?></div>
			
			<!-- Middle Content -->
			<div id="middle_content">
				<!-- Body -->
				<div id="body"><?php include("misc/body.php"); ?></div>
			</div>
			
			<!-- Status bar -->
			<div id="statusbar"><p><?php include("misc/statusbar.php"); ?></p></div>
		</div>
		
		<!-- Footer -->
		<div id="footer">
			<?php include("misc/footer.php"); ?>
		</div>
		
	</div>
</body>
</html>