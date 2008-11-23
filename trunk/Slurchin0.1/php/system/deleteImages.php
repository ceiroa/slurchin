<?php

/**
 * Deletes all images from the 'images' folder
 * */
session_start();
if($_SESSION['id'] == 1){
	$delete = $_GET['delete'];
	if($delete==1){
		$dir = '/var/www/Slurchin/pictures/';
		$images = glob($dir.'*.jpg');
	  	foreach($images as $v){
	  		unlink($v);
	  	}
	}
}else{
	echo "Unauthorized";
}