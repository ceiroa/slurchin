<?php
	ini_set('display_errors', '1');
		
	include_once('../../SlurchinOutOfRoot/passwordManager.php');
	
	if(!empty($_POST)){
		$pManager = new passwordManager();
		$valid = $pManager->comparePsswrds($_POST['password']);
		if($valid){
			session_start(); 
			$_SESSION['id'] = 1;
			header( 'Location: controlPanel.php');
		}else{
			echo ("Wrong Password");
		}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
      	<title>Slurchin Command Center</title>
	</head>
   <body>
   		<?php
			
			
			if(empty($_POST)){
				echo '
					<div id="content">
						<form method="POST" action="index.php">
							Please Enter Password: <input type="password" name="password" />
							<input type="submit" value="Log In" />
						</form>
					</div>   
				';
			}
		?>
						
   </body>
</html>