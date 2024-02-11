<?php
// Connect to MySQL
$servername = "localhost";
$username = "root"; // default XAMPP username
$password = ""; // default XAMPP password
$database = "car_rental"; // name of your database

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$license = $_POST['license'];
$fromDate = $_POST['fromDate'];
$toDate = $_POST['toDate'];
$licenseImage = $_FILES['licenseImage']['name'];

// Upload license image
$targetDir = "uploads/"; // Directory where images will be stored
$targetFilePath = $targetDir . basename($licenseImage);
move_uploaded_file($_FILES['licenseImage']['tmp_name'], $targetFilePath);

// Insert form data into database
$sql = "INSERT INTO rental_info (name, email, phone, dob, license, fromDate, toDate, licenseImage) 
        VALUES ('$name', '$email', '$phone', '$dob', '$license', '$fromDate', '$toDate', '$licenseImage')";

if ($conn->query($sql) === TRUE) {
    // Redirect to payment_form.html
    header("Location: payment_form.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
