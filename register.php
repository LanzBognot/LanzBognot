<?php
$username = $_POST['username'];
$name = $_POST['name'];
$password = $_POST['password'];
$re-enter = $_POST['re-enter'];

//Database connection
$conn = new mysqli('localhost','root','','register swamp test');
if($conn->connect-error){
    die('Connection Failed : '.$conn->connect_error'');
}else{
    $stmt = $conn->prepare("insert into registration(username, name, password, re-enter) values(?, ?, ?, ?)");
    $stmt->bind_param("ssss",$username, $name, $password, $re-enter);
    $stmt->execute();
    echo "registration successful...";
    $stmt->close();
    $conn->close();
}
?>