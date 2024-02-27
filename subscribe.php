<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $email = $_POST["email"];
  
  // Prepare the email message
  $to = "info@filerworld.com";
  $subject = "Filer World Subscription";
  $message .= "Email: $email\n";

  // Send the email
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  if (mail($to, $subject, $message, $headers)) {
    header("Location: thank-you-for-your-subscription");
  } else {
    echo "Sorry, there was an error sending your message.";
  }
}
?>
