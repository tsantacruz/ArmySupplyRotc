<link rel="stylesheet" href= "css/bootstrap.min.css">
<link rel="stylesheet" href="rotcc.css">
<html>
<body>
    <div id= "mydiv" name="mydiv" class="inline">
     <ul>
<li><a class="active" href=main_login.php>Admin Home</a></li>
  <li><a href=requests.php>Pending Requests</a></li>
  <li><a href=rotc.php>Home</a></li>


</ul>
     </div> 

<h1>Welcome Admin</h1>
    <form method="post" action="">
<select name = "selected">
  <option value="Select">Select</option>}
<option value="Bag, Barracks Laundry">Bag, Barracks Laundry</option>
<option value="Bag, Duffle">Bag, Duffle</option>
<option value="Bag, Waterproof">Bag, Waterproof</option>
<option value="Cover, Helmet digital">Cover, Helmet digital</option>
<option value="Cup, Water Canteen">Cup, Water Canteen</option>
<option value="Poncho, Wet Weather">Poncho, Wet Weather</option>
<option value="Elbow Pads">Elbow Pads</option>
<option value="Knee Pads">Knee Pads</option>
<option value="Mollee Ruck Large Digital">Mollee Ruck Large Digital</option>
<option value="Fighting Load Carrier(Zipper)">Fighting Load Carrier(Zipper)</option>
<option value="Rifleman Set W/Tactical Assault Panel">Rifleman Set W/Tactical Assault Panel</option>
<option value="Compass, magnetic Unmtd">Compass, magnetic Unmtd</option>
<option value="Helmet Ground Troop">Helmet Ground Troop</option>
<option value="Liner, Coat Cold Weather Nylon">Liner, Coat Cold Weather Nylon</option>
<option value="Mat, Sleeping">Mat, Sleeping</option>
<option value="Liner, Poncho">Liner, Poncho</option>
<option value="Sleep System Modular">Sleep System Modular</option>
<option value="Shirt, CW Olive Fleece">Shirt, CW Olive Fleece</option>
<option value="Parka, ECW Urban Grey">Parka, ECW Urban Grey</option>
<option value="Trouser, ECW Urban Grey">Trouser, ECW Urban Grey</option>
<option value="Jacket, Wet Weather ACU">Jacket, Wet Weather ACU</option>
<option value="Trouser, Wet Weather ACU">Trouser, Wet Weather ACU</option>
<option value="Canteen, Water Plastic 1 qt">Canteen, Water Plastic 1 qt</option>
<option value="Boots, Combat Summer">Boots, Combat Summer</option>
<option value="Boots, Combat CW">Boots, Combat CW</option>
<option value="Boots, OCP Summer">Boots, OCP Summer</option>
<option value="Boots, OCP Winter">Boots, OCP Winter</option>
<option value="Beret, Ranger">Beret, Ranger</option>
<option value="Belt, Trousers Men’s">Belt, Trousers Men’s</option>
<option value="Belts, Trouser Wmn’s">Belts, Trouser Wmn’s</option>
<option value="Cap, Synthetic Green">Cap, Synthetic Green</option>
<option value="Cap, Synthetic Black">Cap, Synthetic Black</option>
<option value="Coat, ACU">Coat, ACU</option>
<option value="Trouser, ACU">Trouser, ACU</option>
<option value="Coat, OCP">Coat, OCP</option>
<option value="Trouser, OCP">Trouser, OCP</option>
<option value="Buckle, Clip End Mens">Buckle, Clip End Mens</option>
<option value="Buckle, Clip End Wmn’s">Buckle, Clip End Wmn’s</option>
<option value="Coat, Wmn’s ASU">Coat, Wmn’s ASU</option>
<option value="Skirt, Wmn’s Asu">Skirt, Wmn’s Asu</option>
<option value="Slacks, Wmn’s ASU">Slacks, Wmn’s ASU</option>
<option value="Coat, Men’s ASU">Coat, Men’s ASU</option>
<option value="Trousers, Men’s ASU">Trousers, Men’s ASU</option>
<option value="Coat, CW ACU">Coat, CW ACU</option>
<option value="Belt, High Visibility">Belt, High Visibility</option>
<option value="Glove Inserts, Black/Green">Glove Inserts, Black/Green</option>
<option value="Gloves,Leather, Black/Green">Gloves,Leather, Black/Green</option>
<option value="Necktab, Wmn’s">Necktab, Wmn’s</option>
<option value="Necktie, Men’s">Necktie, Men’s</option>
<option value="Cap, Patrol ACU">Cap, Patrol ACU</option>
<option value="Cap, Patrol OCP">Cap, Patrol OCP</option>
<option value="Jacket, PFU">Jacket, PFU</option>
<option value="Pants, PFU">Pants, PFU</option>
<option value="Trunks, PFU">Trunks, PFU</option>
<option value="T-Shirt, PFU S/S">T-Shirt, PFU S/S</option>
<option value="T-Shirt, PFU L/S">T-Shirt, PFU L/S</option>
<option value="Shoes, Wmn’s Pano">Shoes, Wmn’s Pano</option>
<option value="Shoes, Men’s Pano">Shoes, Men’s Pano</option>
<option value="Shirt, Wmn’s S/S">Shirt, Wmn’s S/S</option>
<option value="Shirt, Wmn’s L/S">Shirt, Wmn’s L/S</option>
<option value="Shirt, Men’s S/S">Shirt, Men’s S/S</option>
<option value="Shirt, Men’s L/S">Shirt, Men’s L/S</option>
<option value="Socks, Wool Gr/Black">Socks, Wool Gr/Black</option>
<option value="US Army ACU">US Army ACU</option>
<option value="US Army OCP">US Army OCP</option>
<option value="Nametape ACU">Nametape ACU</option>
<option value="Nametape OCP">Nametape OCP</option>
<option value="US Flag Reverse">US Flag Reverse</option>
<option value="Leadership ACU">Leadership ACU</option>
<option value="Leadership OCP">Leadership OCP</option>
<option value="Shoulder Boards">Shoulder Boards</option>
<option value="Rank ACU">Rank ACU</option>
<option value="Rank OCP">Rank OCP</option>
<option value="Rank Brass">Rank Brass</option>
<option value="Rank Subdude">Rank Subdude</option>
<option value="ROTC Brass">ROTC Brass</option>
</select>     
    <input  type="submit" name="changetoavailable" value="Return"/>
    <input type="submit" name="changetounavailable" value="Checked Out"/>
    </form>
    
    <form method="post" action="">
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
$equipmentID = $_POST['selected']; 
$showtablequery="SELECT * FROM rotcarmy";
$showtableresult= mysqli_query($link, $showtablequery) 
    or trigger_error($db->error); ?>
 <div style="overflow: scroll; height: 500px;">   
<TABLE class="table">
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
}
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
}
            }
     

    
$db->close();
 ?> 
        


</body>
</html>