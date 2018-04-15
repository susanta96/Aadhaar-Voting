<?php

include_once('connect.php');
session_start();
//$name=$_POST['name'];
$aadhaar=$_SESSION['aadhaar'];
$name=$_SESSION['name'];
$phn=$_SESSION['phn'];
$email=$_SESSION['email'];
$dob=$_SESSION['dob'];

$password_string = $_SESSION['pass'];
  $password_hash = password_hash($_SESSION["pass"],PASSWORD_DEFAULT);

//$dob=$_SESSION['dob'];


$query2 =  "INSERT INTO data (a_id,name,phn_no,mail_id,dob,pass)
                VALUES ('$aadhaar','$name','$phn','$email','$dob','$password_hash')";


if (!mysqli_query($conn,$query2))
{
    echo("Error description: " . mysqli_error($conn));
}
else{

    header('location:../../login.php');
}

?>
