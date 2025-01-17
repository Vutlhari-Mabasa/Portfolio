<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Your email address
    $to = "mabasaking2@gmail.com";  // Replace with your email address

    // Email subject
    $subject = "Contact Form Submission from $name";

    // Email body
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // Email headers
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Email successfully sent";
    } else {
        echo "Email sending failed";
    }
} else {
    echo "Invalid request";
}
?>
