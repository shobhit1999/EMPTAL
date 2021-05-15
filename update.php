<?php
session_start();
require_once("db.php");
if(isset($_POST))
{
	$name=mysqli_real_escape_string($conn,$_POST['name']);
	$country=mysqli_real_escape_string($conn,$_POST['country']);
$city=mysqli_real_escape_string($conn,$_POST['city']);
$pincode=mysqli_real_escape_string($conn,$_POST['pincode']);
$sex=mysqli_real_escape_string($conn,$_POST['sex']);
$dob=mysqli_real_escape_string($conn,$_POST['dob']);
$doj=mysqli_real_escape_string($conn,$_POST['doj']);
$department=mysqli_real_escape_string($conn,$_POST['department']);
$address=mysqli_real_escape_string($conn,$_POST['address']);
$phone=mysqli_real_escape_string($conn,$_POST['phone']);
$mobile=mysqli_real_escape_string($conn,$_POST['mobile']);
$sql="UPDATE register SET name='$name',country='$country',city='$city',pincode='$pincode',sex='$sex',dob='$dob',doj='$doj',department='$department',address='$address',phone='$phone',mobile='$mobile' WHERE userid='$_SESSION[userid]'";
if($conn->query($sql)===TRUE)
{
header("Location:dashboard.php");
exit();
}else{
	echo "ERROR".$sql."<br>".$conn->error;
}
$conn->close();
}else{
	header("Location: dashboard.php");
	exit();
}