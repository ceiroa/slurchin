<?php
//echo '<pre id="lsusbOutput">';

// Outputs all the result of shellcommand "ls", and returns
// the last output line into $last_line. Stores the return value
// of the shell command in $retval.
session_start();
if($_SESSION['id'] == 1){
	echo system('lsusb', $retval);
}else{
	echo "Unauthorized";
}
//strchr(string,search)
?>
