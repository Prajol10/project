<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
    <link rel="stylesheet" href="confirmation-style.css">
</head>
<body>

<header class="header">
    <a href="home.html" class="logo">Car Rental</a>
</header>

<main class="main-content">
    <div class="confirmation-container">
        <h2>Payment Successful!</h2>
        <p>Thank you for choosing MotorChadam.</p>
        <div class="confirmation-details">
            <p><strong>Name:</strong> <?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?></p>
            <p><strong>Email:</strong> <?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?></p>
            <p><strong>Phone:</strong> <?php echo isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : ''; ?></p>
            <p><strong>Date of Birth:</strong> <?php echo isset($_POST['dob']) ? htmlspecialchars($_POST['dob']) : ''; ?></p>
            <p><strong>Driving License Number:</strong> <?php echo isset($_POST['license']) ? htmlspecialchars($_POST['license']) : ''; ?></p>
            <p><strong>Rental Start Date:</strong> <?php echo isset($_POST['fromDate']) ? htmlspecialchars($_POST['fromDate']) : ''; ?></p>
            <p><strong>Rental End Date:</strong> <?php echo isset($_POST['toDate']) ? htmlspecialchars($_POST['toDate']) : ''; ?></p>
            <p><strong>Selected Car:</strong> <?php echo isset($_POST['carModel']) ? htmlspecialchars($_POST['carModel']) : ''; ?></p>
            <!-- You can add additional details as needed -->
            <p><strong>Reservation Code:</strong> 0OB3UYYU</p>
        </div>
    </div>
</main>

</body>
</html>
