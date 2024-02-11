<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include the database connection file
    include_once "db_connection.php";

    // Get form data
    $model = $_POST['model'];
    $company = $_POST['company'];
    $year = $_POST['year'];
    $mileage = $_POST['mileage'];
    $price = $_POST['price'];
    $rating = $_POST['rating'];
    $fuelType = $_POST['fuel_type'];
    $vehicleType = $_POST['vehicle_type'];

    // Image handling
    $targetDir = "images/";
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            exit();
        }

        // Move uploaded file to destination directory
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            // Insert car data into database
            $sql = "INSERT INTO cars (Model, Company, Year, Mileage, Price, Rating, FuelType, VehicleType, Image) 
                    VALUES ('$model', '$company', $year, $mileage, $price, $rating, '$fuelType', '$vehicleType', '$targetFile')";
            
            if (mysqli_query($conn, $sql)) {
                echo "Car added successfully.";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "File is not an image.";
    }

    // Close database connection
    mysqli_close($conn);
}
?>
