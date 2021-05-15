<?php
session_start();
require_once("db.php");
if(isset($_POST)){
	$name=mysqli_real_escape_string($conn,$_POST['name']);
$reason=mysqli_real_escape_string($conn,$_POST['reason']);
$mobile=mysqli_real_escape_string($conn,$_POST['mobile']);
$fd=mysqli_real_escape_string($conn,$_POST['fd']);
$td=mysqli_real_escape_string($conn,$_POST['td']);
$status=mysqli_real_escape_string($conn,$_POST['status']);
$id=$_SESSION['userid'];
$sql = "INSERT INTO request(id,name,fd,td,reason,mobile,status)
	VALUES ('$id','$name','$fd','$td','$reason','$mobile','$status')";
	if($conn->query($sql)===TRUE){
		$_SESSION['requestcompleted']=true;
		header("Location:dashboard.php");
		exit();
	}else{
	echo"ERROR".$sql."<br>".$conn->error;	
	}
}else{
	header("Location:lrequest.php");
	exit();
}
?>