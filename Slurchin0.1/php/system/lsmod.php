<?php

/**
 * Runs 'lsmod' command
 * */

	session_start();
	if($_SESSION['id'] == 1){
		echo system('lsmod', $retval);
	}else{
		echo "Unauthorized";
	}
