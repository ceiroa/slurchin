/**
 * @author carlos
 */
	var driversOk = 0;

 	$(document).ready(main);
 
 	function main(){
 	//Add event listeners
		$("#takePic").click(function(){
			$("#install").html('');
			$("#wait").text(' Wait for it... ');
			var now = getNow();
			
			$.get('./php/getImages.php?takepic=1&time=' + now, function(data){
				//alert(data);
				$('#pictureStatus').text(data);
				
				//If we had storage, we would save different pictures with different names.
				//We would also have to modify 'php/getImages.php' accordingly.
				//$('#pic').attr('src', './pictures/' + currentTime + '.jpg');
				
				//If we don't, we just call it pic
				$('#pic').attr('src', './pictures/pic.jpg');
				$("#wait").text('');
			});
		});
		
		$("#install").click(function(){
			
			//Check if drivers are loaded
			checkDrivers();
			checkUsb();	
			checkW3cam();
		});
	}
	
	function getNow(){
		var d = new Date();
		var curr_date = d.getDate();
		var curr_month = d.getMonth();
		var curr_year = d.getFullYear();
		var curr_hour = d.getHours();
		var curr_min = d.getMinutes();

		var currentTime = curr_date + curr_month + curr_year + curr_hour + curr_min;
		return currentTime;
	}
	
	function checkUsb(){
		//Check if 'lsusb' utility is there
		$.get('./php/lsusb.php', function(data){			
			$('#usbStatus').text(data);
			var usbStatus = $('#usbStatus').text();
			
			var lsusbWorking = usbStatus.indexOf('Device');
			
			if(lsusbWorking!=-1){
				$('#lsusbWorking').text("Command lsusb working.");
				
				var hasCamera = usbStatus.indexOf('046d:08a9');
			
				if (hasCamera != -1) {
					hasCameraStatus = "Camera found!";
					$('#hasCamera').text(hasCameraStatus);
				}
			} else {
				$('#lsusbWorking').text("Command lsusb not working. You need to install usbutils.");
			}
		});
	}

	function checkDrivers(){
		
		$.get('./php/lsmod.php', function(data){
				
			$('#driversStatus').text(data);
			var driversStatus = $('#driversStatus').text();
			var driver1 = driversStatus.indexOf('v4l2_common');
			var driver2 = driversStatus.indexOf('v4l1_compat');
			var driver3 = driversStatus.indexOf('videodev');
			var driver4 = driversStatus.indexOf('gspca');
			
			//If we have the drivers loaded, tell the user.
			if (driver1 != -1 && driver2 != -1 && driver3 !=-1 && driver4!=-1) {
				$('#driversLoaded').text("Drivers are loaded.<br/><hr/>");
				
			} else {
				var driversErrorMessage = '<p>Not all the necessary drivers to run the application are loaded.' +
				'You need the following drivers:</p><p>v4l2_common<br/>v4l1_compat<br/>videodev<br/>gspca</p>' +
				'<p>Please read the documentation at http://code.google.com/p/slurchin/wiki/Drivers for help.</p>' +
				'<p>Click the "Check System" button again when drivers are installed and loaded.</p>';
				
				$('#driversLoaded').html(driversErrorMessage);
			}
		});
	}