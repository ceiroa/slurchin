/**
 * @author carlos
 */

 $(document).ready(main);
 
 function main(){
 	//Add event list	eners
		$("#takePic").click(function(){
			$.get('./php/camera.php?takepic=1', function(){
				$('#pic').attr('src', './pictures/pic.jpg');
			});
		});
		$("#install").click(function(){
			$.get('./php/lsusb.php', function(data){
				
				//alert(data);	
				
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
