<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Car - Car Rental</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Remove Car</h1>
    
    <form action="remove_car_handler.php" method="POST">
        <label for="model">Model:</label><br>
        <input type="text" id="model" name="model" required><br>
        
        <input type="submit" value="Remove Car">
    </form>
</body>
</html>
