<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<head><title>supply</title></head>
<link rel="stylesheet" href="rotc.css">
    <form method="post" action="main_login.php">
    <input type="submit" name="Login" value = "Admin"/>
    </form>
<form method="post" action="request_form.php">
    <input type="submit" name="Request" value = "Request Equipment" />
    </form>
<h1>Seton Hall Army ROTC</h1>
<body>  
<form method="post" action="">
    Equipment Search: 
    <input type="text" name="something" value="" placeholder="EquipmentID.."/> 
    <input  type="submit" name="submitavailable" value = "Search"/>
    </form>


<?php
require("databaseconnect.php");

if($db->connect_errno){
    printf("Connect failed: %s\n", $db->connect_error);
    exit();
}

$name=$_POST['something'];
$name = preg_replace('/\s+/', '', $name);

$query = "SELECT * FROM rotcarmy WHERE rotcarmy.equipment_name LIKE '%".$name."%'";

//$queryTwo = "SELECT * FROM rotcarmy WHERE rotcarmy.equipment_name LIKE '%".$name."%' AND rotcarmy.availability= 'unavailable' ORDER BY rotcarmy.equipment_id";
    
$result = mysqli_query($link, $query) 
    or trigger_error($db->error);


    if(isset($_POST['submitavailable'])) {
       // echo 'You entered ', htmlspecialchars($_POST['somethin']);
//var_dump($result);    ?>
<TABLE>
<TR>
<TH>ID</TH>
<TH>Name</TH>
<TH>Availability</TH>
</TR>
<?php
$array = array('equipment_id', 'equipment_name', 'availability');
        while($row = mysqli_fetch_array($result)) {

    echo "<TR>";
    foreach($array as $field) { 
        echo "<TD>".$row[$field]."</TD>";
    }
    echo "</TR>";
}
}
    
$db->close();
 ?> 
</TABLE>
 </body>
</html>