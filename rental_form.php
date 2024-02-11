<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Form</title>
    <link rel="stylesheet" href="rental_form.css">
</head>
<body>

<header class="header">
    <!-- Add header content -->
</header>

<main class="main-content">
    <div class="rental-form-container">
        <h2>Rental Form</h2>
        <form id="rentalForm" action="process_rental.php" method="post" enctype="multipart/form-data">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>

            <label for="license">Driving License Number:</label>
            <input type="text" id="license" name="license" required>

            <label for="fromDate">From Date:</label>
            <input type="date" id="fromDate" name="fromDate" required>

            <label for="toDate">To Date:</label>
            <input type="date" id="toDate" name="toDate" required>

            <label for="licenseImage">Upload Driving License:</label>
            <input type="file" id="licenseImage" name="licenseImage" accept="image/*" required>

            <!-- Add hidden input field to store selected car model -->
            <input type="hidden" id="carModel" name="carModel" value="<?php echo isset($_GET['model']) ? htmlspecialchars($_GET['model']) : ''; ?>">

            <button type="submit">Submit</button>
        </form>
    </div>
</main>

</body>
</html>
