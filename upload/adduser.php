<?php
session_start();
require_once("db.php");
if(isset($_POST)){
		date_default_timezone_set('Asia/Calcutta');
	$name=mysqli_real_escape_string($conn,$_POST['name']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$pass=mysqli_real_escape_string($conn,$_POST['pass']);
$pass=password_hash($pass, PASSWORD_DEFAULT);
$gender=mysqli_real_escape_string($conn,$_POST['gender']);
$department=mysqli_real_escape_string($conn,$_POST['Department']);
$address=mysqli_real_escape_string($conn,$_POST['address']);
$mobile=mysqli_real_escape_string($conn,$_POST['mobile']);
$image = $_FILES['profile']['name'];
$target = "images/".basename($image);
$active="2";
$time=time();
$sql="SELECT email from user where email='$email'";
	$result=$conn->query($sql);
	if($result->num_rows==0) {
	$sql = "INSERT INTO user(name,email,password,gender,contact,address,department,photo,active,time)
	VALUES ('$name','$email','$pass','$gender','$mobile','$address','$department','$image','$active','$time')";
	if($conn->query($sql)===TRUE and move_uploaded_file($_FILES['profile']['tmp_name'], $target)){

		$_SESSION['registercompleted']=true;
		header("Location:index.php");
		exit();
	}else{
	echo"ERROR".$sql."<br>".$conn->error;	
	}
}
}else{
	header("Location:register.php");
	exit();
}
?>