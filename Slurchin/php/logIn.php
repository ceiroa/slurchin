<?php

	/**
	 * Restricts access to the application
	 * */
	
	ini_set('display_errors', '1');
		
	include_once('../../../SlurchinOutOfRoot/passwordManager.php');
	
	if(!empty($_POST)){
		$pManager = new passwordManager();
		$valid = $pManager->comparePsswrds($_POST['password']);
		if($valid){
			session_start(); 
			$_SESSION['id'] = 1;
			echo ("Valid");
		}else{
			echo ("Wrong Password");
		}
	}
?>