<?php
 $dbhost="localhost";
$dbuser="root";
$dbpass="ROOT";
$db="HRProtal";
$conn=new mysqli($dbhost,$dbuser,$dbpass,$db);
if($conn->connect_error)
{
echo "connection failed";
}
?>