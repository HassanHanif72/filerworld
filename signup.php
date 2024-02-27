<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $service = $_POST["service"];
  $desc = $_POST["message"];
  
  $_SESSION['name'] = $name;

  // Prepare the email message
  $to = "info@filerworld.com";
  $subject = "Filer World";
  $message = "Name: $name\n";
  $message .= "Email: $email\n";
  $message .= "Phone: $phone\n";
  $message .= "Service: $service\n";
  $message .= "Message: $desc\n";

  // Send the email
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  if (mail($to, $subject, $message, $headers)) {
    header("Location: thank-you");
  } else {
    echo "Sorry, there was an error sending your message.";
  }
}
?>
