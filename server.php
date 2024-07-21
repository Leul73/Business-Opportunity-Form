<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $conn->real_escape_string($_POST['name']);
$phone = $conn->real_escape_string($_POST['phone']);
$age = (int)$_POST['age'];
$status = $conn->real_escape_string($_POST['status']);
$appointment = $conn->real_escape_string($_POST['appointment']);

$sql = "INSERT INTO registrations (name, phone, age, status, appointment)
VALUES ('$name', '$phone', $age, '$status', '$appointment')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>