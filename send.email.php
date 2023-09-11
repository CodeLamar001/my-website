<?php
// Set the recipient email address (your Gmail address)
$to = "sharifabdulai84@gmail.com";

// Get form data
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

// Set email subject
$subject = "Contact Form Submission from $name";

// Compose the email message
$email_message = "Name: $name\n";
$email_message .= "Email: $email\n";
$email_message .= "Message:\n$message\n";

// Send the email
mail($to, $subject, $email_message);

// Redirect the user to a thank-you page
header("Location: thank-you.html");
?>
