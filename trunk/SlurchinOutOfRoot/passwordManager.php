<?php

	class passwordManager
	{
		var $password;
		
		function __construct(){
			//You need to substitute this value for the password you want to use.
			$this->password = 'XXXXXX';
		}
		
		function comparePsswrds($pssw){
			if($pssw==$this->password){
				return true;
			}else{
				return false;
			}
		}
	}

?>