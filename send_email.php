<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set up email
    $to = "kunmyboi94@gmail.com"; // Replace with your email address
    $subject = "New Message from $name";
    $headers = "From: $email";

    // Send email
    $mailSuccess = mail($to, $subject, $message, $headers);

    if ($mailSuccess) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email. Please try again later.";
    }
} else {
    // Redirect if accessed directly
    header("Location: index.html"); // Replace with your form page
    exit();
}
?>

