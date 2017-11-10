<link rel="stylesheet" href="rotc.css">
<html>
<body>
    <form method="post" action="rotc.php">
        <button type="submit" >Home</button>
        <button type="submit" >Log Out</button>
    </form>
    <form method="post" action="requests.php">
        <button type="submit" >See Pending Requests</button>
    </form>
<header>Welcome Admin</header>
    <p>Enter Equipment ID to Change Equipment Availability</p>
    <form method="post" action="">
    <input type="text" name="something" value="" /> 
    <input  type="submit" name="changetoavailable" value = "Increase quantity"/>
    <input type="submit" name="changetounavailable" value = "Decrease quantity"/>
    <input type="submit" name="refresh" value="refresh equipment table"/>
    </form>
<?php
session_start();
require("databaseconnect.php");
if($db->connect_errno){
    printf("Connect failed: %s\n", $db->connect_error);
    exit();
}
if($_SESSION['sesh_user']){
header("Location: main_login.php");
    echo "hello";
exit();
}

$equipmentID = $_POST['something']; 
$equipmentID = preg_replace('/\s+/', '', $equipmentID);
$showtablequery="SELECT * FROM rotcarmy";
$showtableresult= mysqli_query($link, $showtablequery) 
    or trigger_error($db->error); ?>
    <TABLE>
<TR>
<TH>ID</TH>
<TH>Name</TH>
<TH>Availability</TH>
</TR>
<?php
$array = array('equipment_id', 'equipment_name', 'availability');
        while($row = mysqli_fetch_array($showtableresult)) {

    echo "<TR>";
    foreach($array as $field) { 
        echo "<TD>".$row[$field]."</TD>";
    }
    echo "</TR>";
} ?>
        </TABLE>

  
<?php
        if(isset($_POST['changetoavailable'])) {
            $query = "UPDATE rotcarmy
            SET availability= availability + 1
            WHERE equipment_id = '$equipmentID';";
            
            $result = mysqli_query($link, $query) 
        or trigger_error($db->error);
            
            if ($result) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
            }
        if(isset($_POST['changetounavailable'])) {
            $query = "UPDATE rotcarmy
            SET availability= availability - 1
            WHERE equipment_id = '$equipmentID';";
            $result = mysqli_query($link, $query) 
        or trigger_error($db->error);
            
            if ($result) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
            }
            if(isset($_POST['refresh'])) { ?>
                 <TABLE>
<TR>
<TH>ID</TH>
<TH>Name</TH>
<TH>Availability</TH>
</TR>
<?php
$array = array('equipment_id', 'equipment_name', 'availability');
        while($row = mysqli_fetch_array($showtableresult)) {

    echo "<TR>";
    foreach($array as $field) { 
        echo "<TD>".$row[$field]."</TD>";
    }
    echo "</TR>";
} ?>
        </TABLE>
<?php
            }

    
$db->close();
 ?> 
        


</body>
</html>