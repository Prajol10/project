<?php
extension_loaded('mysqli') or die('MySQLi extension not found. Please enable it in your PHP configuration.');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "car_rental";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input from POST request
$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Insert user data into the database
$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

$response = array();

if ($conn->query($sql) === TRUE) {
    $response['success'] = true;
    $response['message'] = 'User registered successfully!';
} else {
    $response['success'] = false;
    $response['message'] = 'Error: ' . $conn->error;
}

echo json_encode($response);

$conn->close();
?>
