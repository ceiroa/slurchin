<?php	ini_set('display_errors', '1');	session_start();	if($_SESSION['id'] != 1){		die('Unauthorized');	}?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml">  <head>    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>      <title>Slurchin Command Center</title>	  <link type="text/css" rel="stylesheet" href="css/stylesMain.css"/>	  <script src="js/jquery.js" type="text/javascript"></script>	  <script src="js/controlPanelController.js" type="text/javascript"></script>   </head>   <body>   		<h1>Slurchin Command Center</h1>		<div id="main">			<p>[You should click "Check System" once to make sure all the necessary components			are properly installed.]</p>			<!-- With this button we check the system requirements -->			<div id="install">				<button id="install">Check System</button>								<div><pre id="driversStatus"></pre></div>				<div id="driversLoaded"></div>								<div id="lsusbWorking"></div>				<div><pre id="usbStatus"></pre></div>								<div id="hasCamera"></div>			</div><br/>			<!-- With this button we take picture -->			<div id="takepics">				<button id="takePicture">Take Pic</button><span id="wait"></span>				<div id="pictureStatus"></div><br/>				<div><img id="pic" src=""/></div>			</div>		</div>   				   </body></html>