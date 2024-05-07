<?php
// Establishing connection with the database
$servername = "localhost";
$username = "root"; 
$password = ""; 
$database = "customerinfo"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



// CREATE operation
if(isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $number = $_POST['number'];

    $sql = "INSERT INTO account_details (firstName, lastName, gender, emal, password, number)
    VALUES ('$firstName', '$lastName', '$gender', '$email', '$password', '$number')";

    if ($conn->query($sql) === TRUE) {
        echo 'Registration successful. Data inserted into the table.<br><br><button><a href="./index.php">Return Home</a></button>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>