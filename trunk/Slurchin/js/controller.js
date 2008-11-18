/**
 * @author carlos
 */

 $(document).ready(main);
 
 function main() {
 	//Add event listeners
	$("#takePic").click(function(){
		$.get("./php/camera.php?takepic=1");
	});
	$("#install").click(function(){
		$.get("./php/installation.php");
	});
 }
