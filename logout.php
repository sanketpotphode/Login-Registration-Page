<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["useremail"]);
   header('Refresh: 0; URL = index.php');
?>