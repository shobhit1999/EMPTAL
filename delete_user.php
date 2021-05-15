<?php
session_start();
if (empty($_SESSION['adminid'])) {
	header("Location:index.php");
	exit();
}
require_once("db.php");
if (isset($_GET)) {
	$sql="DELETE from register WHERE userid='$_GET[id]'";
	if ($conn->query($sql)) {
		header("Location: user.php");
		exit();
	}else{
		echo "Error";
	}
	# code...
}
