<?php

function isLoginSessionExpired() {
 
	$current_time = time();
	
	if(isset($_SESSION['time']) and isset($_SESSION['userid']) ){ 
		if(((time() - $_SESSION['time']) >900)){
			return true; 
		} 
	}
	return false;
}
?>