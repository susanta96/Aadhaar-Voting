<?php
session_start();

include_once('connect.php');

$check="SELECT * FROM data WHERE a_id = '$_POST[aadhaar]'";
$rs = mysqli_query($conn,$check);
// $data = mysqli_fetch_assoc($rs);
$data = mysqli_fetch_array($rs,MYSQLI_ASSOC);
// echo $data['pass'];
$_SESSION['phn'] = $data['phn_no'];
$_SESSION['email'] = $data['mail_id'];
$_SESSION['name'] = $data['name'];
$_SESSION['aadhaar']= $_POST['aadhaar'];
// echo '<br>';
// echo $_POST["pass"];
// $password = $_POST['pass'];
 // $password_hash = password_hash($_POST["pass"],PASSWORD_BCRYPT);
// $pass_db = $data['pass'];
// echo '<br>';
// echo $password_hash;
//   if ($password_hash === $pass_db)
//
//  {
//     echo "Correct password";
//     header('location:checkexist.php');
//
//   } else {
//     echo "Incorrect password";
//   }



// See the password_hash() example to see where this came from.
$hash = $data['pass'];
// $password = $_POST["pass"];
if (password_verify($_POST["pass"],$hash)) {
    echo 'Password is valid!';
    header('location:checkexist.php');
} else {
    echo 'Invalid password.';
}
?>
