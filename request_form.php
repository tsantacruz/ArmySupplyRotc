<link rel="stylesheet" href="rotc.css">
<html>
<body>
    <form method="post" action="rotc.php">
        <button type="submit" >Home</button>
    </form>
<form method="post" action="">
  First name:<br>
  <input type="text" name="firstname" value=""><br>
  Last name:<br>
  <input type="text" name="lastname" value=""><br>
  Email Address:<br>
  <input type="text" name= "email" value=""><br>
  Equipment ID:<br>
  <input type="text" name= "equipmentid" value=""><br>
    MS Level<br>
  <input type="text" name= "mslevel" value=""><br>
    Message (Optional):<br>
<textarea rows="5" name="message" cols="30" value=""></textarea><br>
<input type="submit" name = "submitrequest" value="Send Request"/> 
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
    $equipmentID= $_POST['equipmentid'];
    $msLevel= $_POST['mslevel'];
    
    
    
if(isset($_POST['submitrequest'])){
     $query = "INSERT INTO `requests`(`firstname`, `lastname`, `email`, `equipment`, `mslevel`, `message(optional)`) VALUES ('$firstname','$lastname','$email','$equipmentID','$msLevel','$message')";
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