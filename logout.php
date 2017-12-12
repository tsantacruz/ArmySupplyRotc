<?php
session_start();
session_destroy();
unset($_SESSION['sesh_user']);  
echo "<meta http-equiv=refresh content=\"0; URL=main_login.html\">";
?>