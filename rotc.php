<html>
<head><title>supply</title></head>
<link rel="stylesheet" href="rotc.css">
<h1>Rotc Supply Database</h1>
<body>  
<form method="post" action="">
    <input type="text" name="something" value=""> Search by name</input>
    <input type="submit" name="submit" />
  </form>


<?php
$user = 'root';
$password = 'root';
$db = 'rotc_army_supply';
$host = 'localhost';
$port = 8889;
$name=$_POST['something'];
$availability = $_POST['Availability'];


$link = mysqli_init();
$conn = mysqli_real_connect(
   $link, 
   $host, 
   $user, 
   $password, 
   $db,
   $port
);
$db_selected = mysqli_select_db(
   $db, 
   $link
);

if($db->connect_errno){
    printf("Connect failed: %s\n", $db->connect_error);
    exit();
}


$query = "SELECT * FROM rotcarmy WHERE rotcarmy.equipment_name LIKE '%".$name."%' ORDER BY rotcarmy.equipment_id";

$result = mysqli_query($link, $query) 
    or trigger_error($db->error);

    if(isset($_POST['submit'])) {
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