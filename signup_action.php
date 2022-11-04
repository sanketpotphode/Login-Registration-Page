<?php
require_once 'dbConfig.php';
session_start();

$full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$dob = mysqli_real_escape_string($conn, $_POST['dob']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);
$md5password = md5($password);

$sqlCheckNo = "SELECT * FROM `users` WHERE `phone` = '$phone'";
$resultCheckNo = mysqli_query($conn, $sqlCheckNo);
$countCheckNo = mysqli_num_rows($resultCheckNo);

$sqlCheckEmail = "SELECT * FROM `users` WHERE `email` = '$email'";
$resultCheckEmail = mysqli_query($conn, $sqlCheckEmail);
$countCheckEmail = mysqli_num_rows($resultCheckEmail);

if ($countCheckEmail != 1) {
    if ($countCheckNo != 1) {
        if ($password == $confirm_password) {
            $sql = "INSERT INTO users (full_name, email, dob, phone, password) VALUES ('$full_name', '$email', '$dob', '$phone', '$md5password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $_SESSION['message'] = "Registration Successfull";
                echo "<script>
                        alert('Registration Successfull!!');
                        window.location.href = 'login_signup.php';
                    </script>";
            } else {
                echo "<br>" . $_SESSION['error'] = "Error: " . mysqli_error($conn);
                die;
            }
        } else {

            echo "<br>" . $_SESSION['error'] = "Password and Confirm Password do not match.";
            echo "<script>
                        alert('Password and Confirm Password do not match.');
                        window.location.href = 'login_signup.php';
                    </script>";
        }
    } else {
        echo "<script>
                    alert('Please Try Another Mobile Number, This Is Already Exist.');
                    window.location.href = 'login_signup.php';
                </script>";
    }
} else {
    echo "<script>
                alert('Please Try Another Email Id, This Is Already Exist.');
                window.location.href = 'login_signup.php';
            </script>";
}
