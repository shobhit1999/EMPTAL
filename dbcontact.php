<?php
session_start();
require_once("db.php");
if(isset($_POST)){
	$name=mysqli_real_escape_string($conn,$_POST['name']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$comment=mysqli_real_escape_string($conn,$_POST['comments']);
	$sql="INSERT INTO contact(name,email,comment)
	VALUES ('$name','$email','$comment')";
	if($conn->query($sql)===TRUE){
		header("Location:index.php");
		exit();
	}else{
	echo"ERROR".$sql."<br>".$conn->error;	
	}
}