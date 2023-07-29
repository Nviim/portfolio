<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["message-name"];
    $email = $_POST["message-email"];
    $message = $_POST["message"];
    $subject = $_POST["message-subject"];
    $to = "naim.benj@gmail.com"; // Replace with the recipient's email address
    $headers = "From: " . $email . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
}
?>
