<?php
session_start();
include("databaseconnect.php");
//$_SESSION['sesh_user'] = "test";
if (!isset($_SESSION['sesh_user']) || $_SESSION['sesh_user'] === '') { 

?>

<script text="text/javascript">
window.location.href = "main_login.html";
</script>
<?php
}

?>
<link rel="stylesheet" href= "css/bootstrap.min.css">
<link rel="stylesheet" href="rotcc.css">
<html>
<body>
   
    <div id= "mydiv" name="mydiv" class="inline">
     <ul>
<li><a class="active" href=main_login.html>Admin Home</a></li>
  <li><a href=requests.php>Pending Requests</a></li>
<li><a href=inventory.php>Edit Inventory</a></li>
 <li><a href=logout.php>Logout</a></li>
         </ul>




     </div> 
    <div style="float: auto;"><IMG SRC="university-logo-desktop.png"></IMG>
<br>
    <form method="post" action="">
<select name = "selected"/>
     <option value="Select">Select Equipment</option>
            <?php
            $sql = "SELECT equipment_name FROM rotcarmy";
            $result = mysqli_query($link, $sql) 
        or trigger_error($db->error);
            while ($row = mysqli_fetch_array($result)) {
                echo "<option value='".$row['equipment_name']."'>".$row['equipment_name'].'</option>';                    
            }
            echo "</select>"; 
            ?>
        <br>
        <div class="row">
    <input  type="submit" name="changetoavailable" value="Return" class="btn btn-lg btn-success btn-block"  style="width:120px; margin:auto;"/>
    <input type="submit" name="changetounavailable" value="Checked Out" class="btn btn-lg btn-success btn-block"  style="width:200px; margin:auto; "/>
            </div>
    </form>
    

    
<?php
if($db->connect_errno){
    printf("Connect failed: %s\n", $db->connect_error);
    exit();
}

$equipmentID = $_POST['selected']; 
$showtablequery="SELECT * FROM rotcarmy";
$showtableresult= mysqli_query($link, $showtablequery) 
    or trigger_error($db->error); ?>
        <br>
 <div style="overflow: scroll; height: 500px;">   
<TABLE class="table">
<TR>
<TH>ID</TH>
<TH>Name</TH>
<TH>Quantity</TH>
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
    </div>

  
<?php
        if(isset($_POST['changetoavailable'])) {
            $query = "UPDATE rotcarmy
            SET availability= availability + 1
            WHERE equipment_name = '$equipmentID';";
            
            $result = mysqli_query($link, $query) 
        or trigger_error($db->error);
            
            if ($result) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}echo "<meta http-equiv=refresh content=\"0; URL=login_success.php\">";
            }
        if(isset($_POST['changetounavailable'])) {
            $query = "UPDATE rotcarmy
            SET availability= availability - 1
            WHERE equipment_name = '$equipmentID';";
            $result = mysqli_query($link, $query) 
        or trigger_error($db->error);
            
            if ($result) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}echo "<meta http-equiv=refresh content=\"0; URL=login_success.php\">";
            }
     

    
$db->close();
 ?> 
        
    </div>

</body>
</html>