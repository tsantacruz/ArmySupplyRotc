<?php
session_start();
require("databaseconnect.php");
if($db->connect_errno){
    printf("Connect failed: %s\n", $db->connect_error);
    exit();
}
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
         <li><a class="active"href=inventory.php>Edit Inventory</a></li>
<li><a  href=login_success.php>Admin Home</a></li>
  <li><a href=requests.php>Pending Requests</a></li>
 <li><a href=logout.php>Logout</a></li>

<?php
         require("databaseconnect.php");
?>


</ul>
     </div> 

<div style="float: auto;"><IMG SRC="university-logo-desktop.png"></div>

    <h6>Change availability</h6 >

    <form method="post" action=""style="margin-left:200px;">
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
            ?><br><br>
    <input  type="text" name="availability" value="" placeholder="Quantity..."style="display:block; margin:auto;"/> <br>
    <input type="submit" name="update" value="Update" class="btn btn-lg btn-success btn-block"  style="width:200px; margin:auto;"/><br><br>
        
    </form>
    
    
    <h6 style="margin-left:200px;">Add Equipment Entry</h6>
    <form method="post" action="" style="margin-left:200px;">
    <input  type="text" name="equipmentname" value="" placeholder="Equipment Name..."style="display:block; margin:auto;"/> <br>
    <input  type="text" name="availability" value="" placeholder="Quantity..."style="display:block; margin:auto;"/> <br>
    <input type="submit" name="add" value="Add entry" class="btn btn-lg btn-success btn-block"  style="width:200px; margin:auto;"/><br><br>
    </form>
    
    <h6 style="margin-left:200px;">Delete Equipment Entry</h6>
    <form method="post" action="" style="margin-left:200px;">
        <select name = "selectedEquipment"/>
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
            <br><br>
            <input type="submit" name="delete" value="Delete entry" class="btn btn-lg btn-success btn-block"  style="width:200px; margin:auto;" /><br><br>
    </form>
    
    
<?php

$availability = $_POST['availability'];
$equipmentID = $_POST['selected']; 
$equipmentToDelete = $_POST['selectedEquipment'];
$showtablequery="SELECT * FROM rotcarmy";
$showtableresult= mysqli_query($link, $showtablequery) 
    or trigger_error($db->error); 
 

  

        if(isset($_POST['update'])) {
            $query = "UPDATE rotcarmy
            SET availability= '$availability'
            WHERE equipment_name = '$equipmentID';";
            
            $result = mysqli_query($link, $query) 
        or trigger_error($db->error);
            
            if ($result) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
            }
    $equipmentName = $_POST['equipmentname']; // this is the sender's Email address
    $quantity = $_POST['availability'];

    
    
    
if(isset($_POST['add'])){
     $query = "INSERT INTO `rotcarmy`(`equipment_name`, `availability`) VALUES ('$equipmentName','$quantity')";
    $result = mysqli_query($link, $query) 
    or trigger_error($db->error);
       if ($result) {
    echo "Equipment has been added to the database!";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
            }
    
      if(isset($_POST['delete'])) {
                    $deleteEntry="DELETE FROM `rotcarmy`
                        WHERE equipment_name='$equipmentToDelete';";
                    $deleteEntryResult= mysqli_query($link, $deleteEntry) 
                        or trigger_error($db->error); 
                    $resetAutoIncrementQuery="ALTER TABLE rotcarmy AUTO_INCREMENT = 0";
                    $resetAutoIncrementResult= mysqli_query($link, $resetAutoIncrementQuery) 
                        or trigger_error($db->error); 
                       if ($resetAutoIncrementResult) {
    echo "Equipment has been deleted from the database!";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
                    
                }
  
     

    
$db->close();
 ?> 
        

    </div>
    </body>