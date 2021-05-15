<?php
session_start();
require_once("db.php");
if(isset($_POST)){
    date_default_timezone_set('Asia/Calcutta');
    $heading=mysqli_real_escape_string($conn,$_POST['heading']);
    $content=mysqli_real_escape_string($conn,$_POST['content']);
    $Dt=date('y-m-d');
    $writer=$_SESSION['name'];
    $sql="INSERT INTO news(heading,Dt,content,writer)
    VALUES ('$heading','$Dt','$content','$writer')";
    if($conn->query($sql)===TRUE){

        $_SESSION['shared']=true;
        header("Location:sharenews.php");
        exit();
    }else{
    echo"ERROR".$sql."<br>".$conn->error;   
    }

}

?>