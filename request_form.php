<link rel="stylesheet" href= "css/bootstrap.min.css">
<link rel="stylesheet" href="rotcc.css">
<?php 
require("databaseconnect.php");
?>
<html>
<body>
     <div id= "mydiv" name="mydiv" class="inline">
     <ul>
  <li><a class="active" href="#home">Submit Request</a></li>
  <li><a href=main_login.php>Admin Login</a></li>
  <li><a href=rotc.php>Home</a></li>

</ul>
     </div> 
    <form method="post" action="rotc.php">
        <div style="float: auto;"><IMG SRC="university-logo-desktop.png"></div>
        <button type="submit" class="btn btn-lg btn-success btn-block"  style="width:110px; margin:auto;">Home</button>
    </form>
<form method="post" action=""style="margin-left:200px;">
  First name:<br>
  <input type="text" name="firstname" value=""placeholder="First Name.."><br>
  Last name:<br>
  <input type="text" name="lastname" value="" placeholder="Last name.."><br>
  Email Address:<br>
  <input type="text" name= "email" value="" placeholder="Email.."><br>
  Equipment Name:<br>
 <select name = "selected" style="width: 100px;"/>
  <option value="Select">Select</option>
        <?php
            $sql = "SELECT equipment_name FROM rotcarmy";
            $result = mysqli_query($link, $sql) 
        or trigger_error($db->error);
            while ($row = mysqli_fetch_array($result)) {
                echo "<option value='".$row['equipment_name']."'>".$row['equipment_name'].'</option>';                    
            }
            echo "</select>"; 
            ?>  <br>
    MS Level<br>
<select name = "mslevel" id="mslevel" style="width: 100px;" >
  <option value="Select">Select</option>}
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
    </select><br>
    Message (Optional):<br>
<textarea rows="5" name="message" cols="30" value=""></textarea><br><br>
<input type="submit" name = "submitrequest" value="Send Request" class="btn btn-lg btn-success btn-block"  style="width:200px; margin:auto;"/> 
</form>
   
    

<?php
//error_reporting(-1);
//ini_set('display_errors', 'On');
//set_error_handler("var_dump");
require("databaseconnect.php");
    $email = $_POST['email']; // this is the sender's Email address
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $message = $_POST['message'];
    $equipmentName= $_POST['selected'];
    $msLevel= $_POST['mslevel'];
    
    
    
if(isset($_POST['submitrequest'])){
     $query = "INSERT INTO `requests`(`firstname`, `lastname`, `email`, `equipment`, `mslevel`, `message(optional)`) VALUES ('$firstname','$lastname','$email','$equipmentName','$msLevel','$message')";
    $result = mysqli_query($link, $query) 
    or trigger_error($db->error);
       if ($result) {
    echo "Your request has been submitted!";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
            }
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    
?>
        


</body>
</html>