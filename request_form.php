<link rel="stylesheet" href="rotc.css">
<html>
<body>
    <form method="post" action="rotc.php">
        <button type="submit" >Home</button>
    </form>
<form>
  First name:<br>
  <input type="text" name="firstname"><br>
  Last name:<br>
  <input type="text" name="lastname"><br>
  Email Address:<br>
  <input type="text" name= "email"><br>
  Equipment ID:<br>
  <input type="text" name= "equipment id"><br>
    Message:<br>
    <textarea rows="5" name="message" cols="30"></textarea><br>
</form>
<form method="post" action="">
    <button type="submit" name = "submitrequest">Send Request</button>
</form>    
    

<?php
//error_reporting(-1);
//ini_set('display_errors', 'On');
//set_error_handler("var_dump");
require("databaseconnect.php");
    
if(isset($_POST['submitrequest'])){
    $to = "jbenedict72696@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $subject = "Equipment Request";
    $subject2 = "Copy of your Equipment Request";
    $message = $firstname . " " . $lastname . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $firstname . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    if(mail){
    echo "Mail Sent. Thank you " . $firstname . ", we will contact you shortly.";
    }
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }

?>
        


</body>
</html>