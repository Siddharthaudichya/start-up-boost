<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$database = "rk"; 

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM reg WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
       
        session_start();
        $_SESSION['email'] = $email;
        echo "<script> alert('Login successful.'); </script>";
    } else {
      
        echo "<script> alert('Invalid email or password.'); </script>";
    }
}

$conn->close();
?>