<?php
session_start();
require_once("db.php");
if (isset($_POST)) {
	date_default_timezone_set('Asia/Calcutta');
	$date=date('y-m-d');
	$name=mysqli_real_escape_string($conn,$_POST['name']);
	$remarks=mysqli_real_escape_string($conn,$_POST['remarks']);
	$radio=mysqli_real_escape_string($conn,$_POST['radio']);
	$sql="SELECT * FROM attendance WHERE name='$name' AND Dt='$date'";
	$result=$conn->query($sql);
	if($result->num_rows==0)
	{
		$p='0';
		$a='0';
		$l='0';
		if ($_POST['radio']=='Present') {
		$p='1';
	}elseif ($_POST['radio']=='Absent') {
		$a='1';
	}else{
		$l='1';
	}
		$sql = "INSERT INTO attendance(name,Dt,present,absent,late,Status,remarks)
	VALUES ('$name','$date','$p','$a','$l','$_POST[radio]','$remarks')";
	if($conn->query($sql)===TRUE){
		header("Location:attendance.php");
		exit();
	}else{
	echo"ERROR".$sql."<br>".$conn->error;	
	}
}else{
	$_SESSION['attendance']=true;
	header("Location:attendance.php");
	exit();
}

}
?>