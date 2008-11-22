<?php
session_start();
if($_SESSION['id'] == 1){
	echo system('lsusb', $retval);
}else{
	echo "Unauthorized";
}
