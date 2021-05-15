<?php

function isSessionExpired() {
 
	$current_time = time(); 
	if(isset($_SESSION['time']) and isset($_SESSION["userid"])){ 
		if(((time() - $_SESSION['time']) >2592000)){
			return true; 
		} 
	}
	return false;
}
?>