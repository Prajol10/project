<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="payment_form.css">
    <title>Car Rental Payment</title>
    <link rel="icon" type="image/x-icon" href="/images/android-chrome-192x192.png">
</head>
<body>

<header class="header">
    <a href="#" class="logo">Car Rental</a>
</header>

<main class="main-content">
    <div class="payment-form-container">
        <h2>Payment Details</h2>
        <form id="paymentForm" action="process_payment.php" method="post">
            <label for="cardNumber">Card Number:</label>
            <input type="text" id="cardNumber" name="cardNumber" pattern="[0-9]{16}" placeholder="16-digit card number" required>

            <label for="expiryDate">Expiry Date:</label>
            <input type="text" id="expiryDate" name="expiryDate" pattern="(0[1-9]|1[0-2])\/[0-9]{2}" placeholder="MM/YY" required>

            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" pattern="[0-9]{3}" placeholder="3-digit CVV" required>

            <!-- Hidden input fields to store user information -->
            <input type="hidden" id="name" name="name" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
            <input type="hidden" id="email" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
            <input type="hidden" id="phone" name="phone" value="<?php echo isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : ''; ?>">
            <input type="hidden" id="dob" name="dob" value="<?php echo isset($_POST['dob']) ? htmlspecialchars($_POST['dob']) : ''; ?>">
            <input type="hidden" id="license" name="license" value="<?php echo isset($_POST['license']) ? htmlspecialchars($_POST['license']) : ''; ?>">
            <input type="hidden" id="fromDate" name="fromDate" value="<?php echo isset($_POST['fromDate']) ? htmlspecialchars($_POST['fromDate']) : ''; ?>">
            <input type="hidden" id="toDate" name="toDate" value="<?php echo isset($_POST['toDate']) ? htmlspecialchars($_POST['toDate']) : ''; ?>">
            <input type="hidden" id="carModel" name="carModel" value="<?php echo isset($_POST['carModel']) ? htmlspecialchars($_POST['carModel']) : ''; ?>">

            <button type="submit">Submit Payment Details</button>
        </form>
    </div>
</main>

</body>
</html>
