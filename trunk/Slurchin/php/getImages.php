<?php

error_reporting (E_ALL);
ini_set('display_errors', '1');

session_start();

include_once('camera.php');

if($_SESSION['id'] == 1){
	$takePic = $_GET['takepic'];
	//$currentTime = $_GET['time'];
	
	if($takePic == 1){	
		//If we had storage, we could do a different name to each picture.
		//We would also have to modify 'js/getImagescontroller.js' accordingly.
		//system ('vidcat -d /dev/video0 -s  640x480 > /var/www/Slurchin/pictures/' . $currentTime . '.jpg');	
		
		//If we don't, we overwrite it
		system ('vidcat -d /dev/video0 -s  640x480 > /var/www/Slurchin/pictures/pic.jpg');	
	}
	
}else{
	echo "Unauthorized";
}

