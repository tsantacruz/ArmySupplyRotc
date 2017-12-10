<?php
session_start();
if (!isset($_SESSION['sesh_user']) || $_SESSION['sesh_user'] === '') { 

?>

<script text="text/javascript">
window.location.href = "main_login.html";
</script>
<?php
}

?>
<html>
<head><title>supply</title></head>
    <link rel="stylesheet" href= "css/bootstrap.min.css">
<link rel="stylesheet" href="rotcc.css">
        <div id= "mydiv" name="mydiv" class="inline">
     <ul>
<li><a class="active" href=requests.php>Pending Requests</a></li>
<li><a  href=login_success.php>Admin Home</a></li>
 <li><a href=logout.php>Logout</a></li>
</ul>
     </div> 
    <div style="float: auto;"><IMG SRC="university-logo-desktop.png"></IMG>
<h2>Pending Requests</h2>
    <body>  
     <form method="post" action="" style="margin-left:200px;">
         Enter Request ID to resolve request:
         <input type="text" name="requestid" value="" style="margin-top: 100px;">
        <input type="submit" name="resolverequest" value="Resolve Request" class="btn btn-lg btn-success btn-block"  style="width:250px; margin:auto;">
    </form>
<?php
$requestID = $_POST['requestid']; 
        
    require("databaseconnect.php");

if($db->connect_errno){
    printf("Connect failed: %s\n", $db->connect_error);
    exit();
}
//DELETE FROM `requests` WHERE requestid= 
$showtablequery="SELECT * FROM requests";
$showtableresult= mysqli_query($link, $showtablequery) 
    or trigger_error($db->error);
                if(isset($_POST['resolverequest'])) {
                    $updateRequestQuery="DELETE FROM `requests`
                        WHERE requestid='$requestID';";
                    $updateRequestResult= mysqli_query($link, $updateRequestQuery) 
                        or trigger_error($db->error); 
                    $resetAutoIncrementQuery="ALTER TABLE requests AUTO_INCREMENT = 0";
                    $resetAutoIncrementResult= mysqli_query($link, $resetAutoIncrementQuery) 
                        or trigger_error($db->error); 
                    echo "<meta http-equiv=refresh content=\"0; URL=requests.php\">";
                }
        ?>
 <div style="overflow: scroll; height: 500px;">   
<TABLE class="table">
<TR>
<TH>First Name</TH>
<TH>Last Name</TH>
<TH>Email</TH>
<TH>Equipment Name</TH>
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
        </div>
    </body>
</html>