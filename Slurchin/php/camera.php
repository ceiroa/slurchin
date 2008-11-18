<?php

/**
 * Controls the functionality of the camera
 * @return 
 */

class camera {
	
	function __construct(){
		
	}
	
	function takePicture(){
		//Where do we set the right parameters for the camera? Constructor?
		//Should they already be hardcoded or should we let the user define them?
		
		//Save picture in the pictures folder
		system ('vidcat -d /dev/video0 -s 640x480 > /var/www/pic.jpg');		
	}
	
	function takePictureAtSetInterval($interval){
		//Override the picture, unless alarm has been triggered
	}
	
}

?>