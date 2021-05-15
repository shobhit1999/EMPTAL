<?php
session_start();
require_once("db.php");
if(isset($_POST)){
	$username=mysqli_real_escape_string($conn,$_POST['email']);
	$pass=mysqli_real_escape_string($conn,$_POST['pass']);
	$sql="SELECT * from admin where username='$username' and pass='$pass'";
	$result=$conn->query($sql);
	if($result->num_rows>0) {
		while ($row=$result->fetch_assoc()) {
			$_SESSION['username']=$row['username'];
			$_SESSION['adminid']=$row['adminid'];
			header("Location: admindashboard.php");
			exit();
		}

	}
	else{
		$_SESSION['loginError']=true;
		header("Location:admin.php");
		exit();
	}
	$conn->close();
}else{
	header("Location: admin.php");
	exit();
}