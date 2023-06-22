<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['Name'];
  $email = $_POST['Email'];
  $subject = $_POST['Subject'];
  $message = $_POST['Message'];
  
  $to = "thecodingproject221@gmail.com"; // Change this to your email address
  $headers = "From: $name <$email>" . "\r\n";
  $headers .= "Reply-To: $email" . "\r\n";
  
  if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
  } else {
    echo "Failed to send email.";
  }
}
?>
