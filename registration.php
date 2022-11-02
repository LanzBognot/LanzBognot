<?php
session_start();
include 'connection.php';

if(isset($_POST['signup']))
{
    $username = $_POST['username'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    
    $username = stripcslashes($username);
    $name = stripcslashes($name);
    $password = stripcslashes($password);
    
    $username = mysqli_real_escape_string($conn, $username);
    $name = mysqli_real_escape_string($conn, $name);
    $password = mysqli_real_escape_string($conn, $password);
    
    $sql="INSERT INTO reglog(username,name,password)
    VALUES('$username','$name','$password')
    ";
    
    if(mysqli_query($conn, $sql)) {
        ?>
        <script>alert('Successfully Registered');</script>
        <?php
        header("location:contactus.html");
    }
    else {
        ?>
        <script>alert('Error in register');</script>
        <?php
    }
}
    

?>