<?php
// cart.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form fields from cart.html
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $address = htmlspecialchars($_POST['address']);

    echo "<!DOCTYPE html>";
    echo "<html lang='en'>";
    echo "<head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Order Confirmation - MK-Cosmetics</title>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
            <style>
                body {
                    font-family: 'Poppins', sans-serif;
                    background-color: #f9f9f9;
                    padding: 50px;
                }
                .confirmation {
                    background-color: white;
                    border-radius: 12px;
                    padding: 30px;
                    box-shadow: 0 0 10px rgba(0,0,0,0.1);
                }
            </style>
          </head>";
    echo "<body>";
    echo "<div class='container'>";
    echo "<div class='confirmation'>";
    echo "<h2 class='text-success mb-4'>✅ Order Placed Successfully!</h2>";
    echo "<p><strong>Email:</strong> " . $email . "</p>";
    echo "<p><strong>Password:</strong> " . str_repeat('*', strlen($password)) . "</p>";
    echo "<p><strong>Shipping Address:</strong> " . nl2br($address) . "</p>";
    echo "<p class='mt-4'>📦 Your order has been received. Thank you for shopping with <strong>MK-Cosmetics</strong>!</p>";
    echo "<a href='index.html' class='btn btn-primary mt-3'>Back to Home</a>";
    echo "</div>";
    echo "</div>";
    echo "</body>";
    echo "</html>";
} else {
    // If accessed directly without POST
    header("Location: cart.html");
    exit();
}
?>
