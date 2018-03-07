<?php
function loggin($name,$password)
{
	$retVal = false;
	if($name=='waldemar' && $password=='gustav'){
		$_SESSION['loggedIn'] = true;
		
		
		
		
		
		
		
		
		
		$retVal = true;	
	}	
	return $retVal;
}
?>