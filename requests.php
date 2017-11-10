<html>
<head><title>supply</title></head>
<link rel="stylesheet" href="rotc.css">
<h1>Pending Requests</h1>
    <form method="post" action="rotc.php">
        <button type="submit" >Home</button>
        <button type="submit" >Log Out</button>
    </form>
    <form method="post" action="login_success.php">
        <button type="submit" >Admin Home</button>
    </form>
<?php
    require("databaseconnect.php");

if($db->connect_errno){
    printf("Connect failed: %s\n", $db->connect_error);
    exit();
}

$showtablequery="SELECT * FROM requests";
$showtableresult= mysqli_query($link, $showtablequery) 
    or trigger_error($db->error); ?>
    <TABLE>
<TR>
<TH>First Name</TH>
<TH>Last Name</TH>
<TH>Email</TH>
<TH>Equipment ID</TH>
<TH>MS Level</TH>
<TH>Message</TH>
<TH>Request ID</TH>
</TR>
<?php
$array = array('firstname', 'lastname', 'email','equipment','mslevel','message(optional)','requestid');
        while($row = mysqli_fetch_array($showtableresult)) {

    echo "<TR>";
    foreach($array as $field) { 
        echo "<TD>".$row[$field]."</TD>";
    }
    echo "</TR>";
} ?>
        </TABLE>