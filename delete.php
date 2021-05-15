<?php
session_start();
require_once("db.php");
$sql="UPDATE register SET active='0' WHERE userid='$_SESSION[userid]' ";
if($conn->query($sql)===TRUE)
{
header("Location:logout.php");
exit();
}else{
	echo "ERROR".$sql."<br>".$conn->error;
}
?>