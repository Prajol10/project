<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "car_rental");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$model = $_POST['model'];

// Delete car from database
$sql = "DELETE FROM cars WHERE Model='$model'";

if (mysqli_query($conn, $sql)) {
    echo "Car removed successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
