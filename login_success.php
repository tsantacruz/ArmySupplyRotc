<link rel="stylesheet" href="rotc.css">
<html>
<body>
    <form method="post" action="rotc.php">
        <button type="submit" >Home</button>
        <button type="submit" >Log Out</button>
    </form>
<header>Welcome Admin</header>
    <p>Enter ID to Change Equipment Status</p>
    <form method="post" action="">
    <input type="text" name="something" value="" /> 
    <input  type="submit" name="changetoavailable" value = "make available"/>
    <input type="submit" name="changetounavailable" value = "make unavailable"/>
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

  

        if(isset($_POST['changetoavailable'])) {
            $query = "UPDATE rotcarmy
            SET availability='available'
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
            SET availability='unavailable'
            WHERE equipment_id = '$equipmentID';";
            $result = mysqli_query($link, $query) 
        or trigger_error($db->error);
            
            if ($result) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
            }
    
$db->close();
 ?> 
        


</body>
</html>