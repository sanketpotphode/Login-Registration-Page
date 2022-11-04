<?php
include_once('dbConfig.php');

session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$password = md5($password);

$sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password' AND `status` = 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count == 1) {
    $_SESSION['username'] = $row['fullname'];
    $_SESSION['useremail'] = $row['email'];
    header('Location: index.php');
} else {
    echo "
    <script>
    alert('XXX Username OR Password is Invalid XXX');
    window.location.href = 'login_signup.php';
    </script>
    ";
}
