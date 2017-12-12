<?php

$user = 'ps93j2ru0f6x1av1';
$password = 'qlwtb0988ju4tet5';
$db = 'syts3ep6wfq9xjo0';
$host = 'dyud5fa2qycz1o3v.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
$port = 3306;


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
   $link, 
   $db
);

?>