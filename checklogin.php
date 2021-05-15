<?php
session_start();
require_once("db.php");
if(isset($_POST)){
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$pass=mysqli_real_escape_string($conn,$_POST['pass']);
	$pass=base64_encode(strrev(md5($pass)));
	$sql="SELECT * from register where email='$email' and pass='$pass'";
	$result=$conn->query($sql);
	if($result->num_rows>0) {
		while ($row=$result->fetch_assoc()) {
			if ($row['active']=='2') {
				$_SESSION['userloginError']=true;
				header("Location:login.php");
				exit();
			}elseif ($row['active']=='0') {
				$_SESSION['userloginError0']=true;
				header("Location:login.php");
				exit();
			}elseif ($row['active']=='1') {
			
			$_SESSION['name']=$row['name'];
			$_SESSION['email']=$row['email'];
			$_SESSION['userid']=$row['userid'];
			$_SESSION['dob']=$row['dob'];
		$_SESSION['time']=time();
			header("Location: dashboard.php");
			exit();
		}
	}
	}
	else{
		$_SESSION['loginError']=true;
		header("Location:login.php");
		exit();
	}
	$conn->close();
}else{
	header("Location: login.php");
	exit();
}