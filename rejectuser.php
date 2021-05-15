<?php
session_start();
require_once("db.php");
$sql="UPDATE register SET active='0' WHERE userid='$_GET[id]' ";
if($conn->query($sql)===TRUE)
{
header("Location:userrequest.php");
exit();
}else{
	echo "ERROR".$sql."<br>".$conn->error;
}
?>