<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $cardNumber = htmlspecialchars($_POST['card_number']);
    $expiryDate = htmlspecialchars($_POST['expiry_date']);
    $cvv = htmlspecialchars($_POST['cvv']);

    // Validate and process payment information here using a payment gateway API
    // For example, using Stripe or PayPal APIs

    // Redirect or display a message based on payment result
    echo "Payment processed for $name. Card Number: $cardNumber.";
    header("Location: successful.html?name=" . urlencode($name));
    exit();
} else {
    echo "Invalid request method.";
}
?>