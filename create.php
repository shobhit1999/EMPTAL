<!DOCTYPE html>
<html>
<?php
include('t.php');
error_reporting(0);
$ucode=$_POST['U_CODE'];
$uname=$_POST['U_NAME'];
$email=$_POST['EMAIL_ID'];
$pass=$_POST['PASSWORD'];
if(!$_POST['submit']){
echo "all fields are required";}
else
{
	$sql="INSERT into signup
	values ($ucode,'$uname','$email','$pass')";
	if(mysqli_query($conn,$sql)){
	echo "suces";}
		else{
		echo "fail";}		
	}
?>
<head>
<title>Create</title>
</head>
<body>
<form action="create.php" method="POST">
Code:<input type="number" name="U_CODE">
Name:<input type="text" name="U_NAME">
EMAIL_ID:<input type="text" name="EMAIL_ID">
PASSWORD:<input type="password" name="PASSWORD">
<input type="submit" name="submit" value="signup">
</form>
</body>
</html>