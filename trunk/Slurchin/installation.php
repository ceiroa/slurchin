<?php
    
	//Look for lsusb
	$lsusbIn = checkUsbUtils();
	
	//Get lsusb (and others), if we didn't have it
	if(!$lsusbIn){
		system('ipkg install usbutils');
	} else {
		echo "<p>The 'lsusb' command is already working.</p>";
	}
	
	//Run lsusb, and get output
	//Do we save the output to a file and then read it, 
	//or do we read it directly from the shell?
	$lsusbOutput = system('lsusb > usb ....');
	if($lsusbOutput==''){
		$knownCamera = true;		
	}
	
	//If the camera is the Logitech Quickcam for Notebooks Deluxe
	if($knownCamera){
		//Look for drivers in the computer
		$driversIn = checkDrivers();
		
		//Download and install them, if needed
		if(!$driversIn){
			downloadDrivers();
			system('insmod '); //Load driver 1
			system('insmod '); //Load driver 2
			system('insmod '); //Load driver 3
		} else {
			echo "<p>Drivers already installed. Cool.</p>";
		}
		
		//Check if the drivers are loaded
		$driversLoaded = driversLoaded();
		
		//If drivers are not loaded, load them
		if(!$driversLoaded){
			loadDrivers();
		} else {
			echo "<p>And they are loaded too!</p>";
		}
		
		//Look for w3cam program
		$w3camIn = checkW3cam();
		
		//If it's not installed, install it
		if(!$w3camIn){
			system('ipkg install w3cam');
			
			//Get input from console and print it to screen
				
		}
		
	} else {
		echo "Sorry, unnknown camera";
	}
	
	
	
	
	
	function checkForDrivers() {
		
	}
	
	
?>
