<?php
require_once 'dbConfig.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_signup";

// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>