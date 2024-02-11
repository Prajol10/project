<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Car</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>

<h2>Add Car</h2>

<form action="add_car_handler.php" method="post" enctype="multipart/form-data">
    <label for="model">Model:</label>
    <input type="text" id="model" name="model" required><br><br>

    <label for="company">Company:</label>
    <input type="text" id="company" name="company" required><br><br>

    <label for="year">Year:</label>
    <input type="number" id="year" name="year" required><br><br>

    <label for="mileage">Mileage:</label>
    <input type="number" id="mileage" name="mileage" required><br><br>

    <label for="price">Price:</label>
    <input type="number" id="price" name="price" required><br><br>

    <label for="rating">Rating:</label>
    <input type="number" id="rating" name="rating" step="0.1" min="0" max="5" required><br><br>

    <label for="fuel_type">Fuel Type:</label>
    <input type="text" id="fuel_type" name="fuel_type" required><br><br>

    <label for="vehicle_type">Vehicle Type:</label>
    <input type="text" id="vehicle_type" name="vehicle_type" required><br><br>

    <label for="image">Image:</label>
    <input type="file" id="image" name="image" accept="image/*" required><br><br>

    <input type="submit" value="Add Car">
</form>

</body>
</html>
