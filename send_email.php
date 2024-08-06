<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "itp1613@gmail.com"; // Replace with your email address
    $subject = "New message from your website";
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST["message"]);
    $headers = "From: " . $email;

    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>