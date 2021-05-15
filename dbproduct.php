<?php
session_start();
require_once("db.php");
if(isset($_POST)){
	$name=mysqli_real_escape_string($conn,$_POST['name']);
	$code=mysqli_real_escape_string($conn,$_POST['code']);
	$img_src=mysqli_real_escape_string($conn,$_POST['img_src']);
	$sql="INSERT INTO parts(name,code,img_src)
	VALUES ('$name','$code','$img_src')";
	if($conn->query($sql)===TRUE){

		$_SESSION['registercompleted']=true;
		header("Location:addproduct.php");
		exit();
	}else{
	echo"ERROR".$sql."<br>".$conn->error;	
	}
}