<?php

/**
 * Takes a picture, and saves it in the 'pictures' folder
 * */

	error_reporting (E_ALL);
	ini_set('display_errors', '1');
	
	session_start();
	
	if($_SESSION['id'] == 1){
		$takePic = $_GET['takepic'];
		$currentTime = $_GET['time'];
		
		if($takePic == 1){	
			system ('vidcat -d /dev/video0 -s  640x480 > /var/www/Slurchin/pictures/' . $currentTime . '.jpg');	
			
			//If we had configure the server to access a folder outside of the root, we could save the image there
			//system ('vidcat -d /dev/video0 -s  640x480 > /var/SlurchinOutOfRoot/pictures/pic.jpg');
			//chmod ('/var/SlurchinOutOfRoot/pictures/pic.jpg', 0777);
		}
		
	}else{
		echo "Unauthorized";
	}

