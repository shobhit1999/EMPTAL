<?php
session_start();
require_once("db.php");
if(isset($_POST)){
	$name=mysqli_real_escape_string($conn,$_POST['name']);
	$DOA=mysqli_real_escape_string($conn,$_POST['DOA']);
	$award=mysqli_real_escape_string($conn,$_POST['award']);
	$sql="INSERT INTO awards(award,DOA,name)
	VALUES ('$award','$DOA','$name')";
	if($conn->query($sql)===TRUE){

		$_SESSION['register']=true;
		header("Location:addaward.php");
		exit();
	}else{
	echo"ERROR".$sql."<br>".$conn->error;	
	}
}