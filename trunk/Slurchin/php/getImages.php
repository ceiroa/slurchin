<?php

ini_set('display_errors', '1');

include_once('camera.php');

//The endpoint receives a username and password (or just a key?) and returns the pictures
//matching a criteria? Hmmm, we only have one picture...

/**
 * 
 * @return{picture}
 * @return{datepicture}
 * @return{timepicture}
 * 
 */

$takePic = $_GET['takepic'];

echo ("<p>Takepic get var:" . $takePic . "</p>");

echo("<p>Creating new camera</p>");
$camera = new camera();

if($takePic == 1){
	echo("<p>Taking picture</p>");
	$camera->takePicture('640x480', '/var/www/Slurchin/pictures/pic.jpg');
}

