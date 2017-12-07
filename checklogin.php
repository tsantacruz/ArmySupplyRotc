<link rel="stylesheet" href= "css/bootstrap.min.css">
<link rel="stylesheet" href="rotcc.css">
<?php
session_start();
require("databaseconnect.php");

if($conn->connect_errno){
    //echo "it did nto work";
    printf("Connect failed: %s\n", $db->connect_error);
    exit();
}

// username and password sent from form 
$myusername=$_POST['myusername']; 
$myusername = preg_replace('/\s+/', '', $myusername);
$mypassword=$_POST['mypassword']; 
$mypassword = preg_replace('/\s+/', '', $mypassword);


if ($conn) {
    $usrPassSQL = mysqli_query($link, "SELECT username, password FROM `admins` WHERE `admins`.username = '$myusername'");
}
$sqlResult = mysqli_fetch_assoc($usrPassSQL);
$usrPassword = $sqlResult['password'];
$usrUsername = $sqlResult['username'];


// Mysql_num_row is counting table row
//$count=mysqli_num_rows($sqlResult);
// If result matched $myusername and $mypassword, table row must be 1 row

if (($usrUsername === $myusername) && ($usrPassword === $mypassword)) {
    $_SESSION['sesh_user'] = $myusername;
    //echo "that worked!";
    echo "<script type='text/javascript'> document.location = 'login_success.php'; </script>";
    exit();
} else {
    echo "Your Username or Password is incorrect";
}

//if($count==1){
//echo"it worked";
//// Register $myusername, $mypassword and redirect to file "login_success.php"
//session_register("myusername");
//session_register("mypassword"); 
//header("location:login_success.php");
//}

?>