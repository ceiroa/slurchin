<?php

ini_set('display_errors', '1');

session_start();

include_once('camera.php');

if($_SESSION['id'] == 1){
	$takePic = $_GET['takepic'];

	//echo ("<p>Takepic get var:" . $takePic . "</p>");
	
	echo("<p>Creating new camera</p>");
	$camera = new camera();
	
	if($takePic == 1){
		echo("<p>Taking picture</p>");
		$camera->takePicture('640x480', '/var/SlurchinOutOfRoot/pictures/pic.jpg');
	}
}else{
	echo "Unauthorized";
}

