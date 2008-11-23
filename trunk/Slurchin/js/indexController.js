
	$(document).ready(main);
	
	function main(){
 		//Add event listeners
		$("#login").click(function(){ 
								//Get password
								var pssw = $('#password').val();
								
								//Submit password to server-side file
								$.post('./php/logIn.php', {password: pssw}, 
								function(data){								
									$("#error").text(data);
									//Read text returned
									var redirect = $("#error").text(); 
									if(redirect=="Valid"){
										//Redirect
										window.location = "controlPanel.php";
									}
								});
		});
	}