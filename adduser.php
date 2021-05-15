<?php
session_start();
require_once("db.php");
if(isset($_POST)){
		date_default_timezone_set('Asia/Calcutta');
	$name=mysqli_real_escape_string($conn,$_POST['name']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$pass=mysqli_real_escape_string($conn,$_POST['pass']);
$pass=base64_encode(strrev(md5($pass)));
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
$active="2";
$sql="SELECT email from register where email='$email'";
	$result=$conn->query($sql);
	$n = new DateTime($dob);
	$t = new DateTime( date('y-m-d'));
	$d = $t->diff($n);
	if($result->num_rows==0 && $d->y>=18) {
	$sql = "INSERT INTO register(name,email,pass,country,city,pincode,sex,dob,doj,department,address,phone,mobile,active)
	VALUES ('$name','$email','$pass','$country','$city','$pincode','$sex','$dob','$doj','$department','$address','$phone','$mobile','$active')";
	if($conn->query($sql)===TRUE){

		$_SESSION['registercompleted']=true;
		header("Location:login.php");
		exit();
	}else{
	echo"ERROR".$sql."<br>".$conn->error;	
	}
}else{
	if ($d->y<18) {
		$_SESSION['registere']=true;
	header("Location:register.php");
	exit();
	}
	else{
	$_SESSION['registererror']=true;
	header("Location:register.php");
	exit();
}
}
}else{
	header("Location:register.php");
	exit();
}
?>