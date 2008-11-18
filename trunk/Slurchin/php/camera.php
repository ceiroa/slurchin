<?php

ini_set('display_errors', '1');

/**
 * Controls the functionality of the camera
 * @return 
 */

class camera {
	
	function __construct(){
		
	}
	
	function takePicture($resolution, $picturesFolderPath){
		//Where do we set the right parameters for the camera? Constructor?
		//Should they already be hardcoded or should we let the user define them?
		
		//Save picture in the pictures folder
		system ('vidcat -d /dev/video0 -s ' . $resolution . ' >' . $picturesFolderPath);		
	}
	
	function takePictureAtSetInterval($interval){
		//Override the picture, unless alarm has been triggered
	}
	
}

?>