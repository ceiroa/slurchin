/**
 * @author carlos
 */

 $(document).ready(main);
 
 function main(){
 	//Add event listeners
		$("#takePic").click(function(){

			$.get('./php/getImages.php?takepic=1', function(data){
				//alert(data);
				$('#pictureStatus').html(data);
				$('#pic').attr('src', '/var/SlurchinOutOfRoot/pictures/pic.jpg');
			});
		});
		
		$("#install").click(function(){
			
			//Check if drivers are loaded
			/*$.get('./php/lsmod.php', function(data){
				$('#driversStatus').text(data);
				var driversStatus = $('#driversStatus').text();
				var driver1 = driversStatus.indexOf('');
				var driver2 = driversStatus.indexOf('');
				var driver3 = driversStatus.indexOf('');
				
				//If drivers are not loaded, load them
				
				//If we cannot load them, see if they are there
			});*/
			
			//Check if 'lsusb' utility is there
			$.get('./php/lsusb.php', function(data){			
				$('#usbStatus').text(data);
				var usbStatus = $('#usbStatus').text();
				var hasCamera = usbStatus.indexOf('046d:08a9');
				
				if (hasCamera != -1) {
					hasCameraStatus = "Camera found!";
					$('#hasCamera').text(hasCameraStatus);
				}
				
			/*if (status.length == 0) {
			 $('#installStatus').text(data);
			 }
			 else {
			 
			 status = status + data;
			 $('#installStatus').text(status);
			 }*/
			});
		});
	}
