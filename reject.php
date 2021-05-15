<?php
session_start();
require_once("db.php");
$sql="UPDATE request SET status='Rejected' WHERE id='$_GET[id]' ";
if($conn->query($sql)===TRUE)
{
header("Location:vrequest.php");
exit();
}else{
	echo "ERROR".$sql."<br>".$conn->error;
}
?>