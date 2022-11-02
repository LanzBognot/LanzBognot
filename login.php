<?php

session_start();
include 'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$username = stripcslashes($username);
$password = stripcslashes($password);

$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

$sql = "SELECT user_id FROM reglog WHERE username='$username'
and password='$password'
";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)== 1) {
    header("location:contactus.html");
}

else {
    $error = "Incorrect username or password";
}

?>