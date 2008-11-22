
	$(document).ready(main);
	
	function main(){
 		//Add event listeners
		$("#login").click(function(){ 
								var pssw = $('#password').val();
								$.post('./php/logIn.php', {password: pssw}, 
								function(data){								
									$("#error").text(data);
									var redirect = $("#error").text(); 
									if(redirect=="Valid"){
										window.location = "controlPanel.php";
									}
								});
		});
	}