<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Car Rental</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <h1>Admin Panel - Car Rental</h1>
    
    <h2>Car List:</h2>
    <ul>
        <?php
        // Connect to the database
        $conn = mysqli_connect("localhost", "root", "", "car_rental");

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Fetch cars from the database
        $sql = "SELECT * FROM cars";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // Output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "<li>{$row['Company']} {$row['Model']} - Year: {$row['Year']} | Price: {$row['Price']}</li>";
            }
        } else {
            echo "0 results";
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </ul>

    <a href="add_car.php">Add New Car</a>
    <a href="remove_car.php">Remove Car</a>
</body>
</html>
