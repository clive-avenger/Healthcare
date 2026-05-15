<?php
// Get user information from the form
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$time = $_POST['time'];

// Send confirmation email
$to = $email;
$subject = 'Appointment Confirmation';
$message = "
<html>
<head>
  <title>Appointment Confirmation</title>
</head>
<body>
  <p>Dear $name,</p>
  <p>Your appointment has been confirmed for $date at $time. We look forward to seeing you!</p>
  <p>Thank you,</p>
  <p>Home-based Health Portal Team</p>
</body>
</html>
";
$headers = 'From: Home-based Health Portal <noreply@homebasedhealthportal.com>' . "\r\n";
$headers .= 'Content-type: text/html' . "\r\n";

mail($to, $subject, $message, $headers);

// Send confirmation text message
$message = "Dear $name, your appointment has been confirmed for $date at $time. We look forward to seeing you! - Home-based Health Portal Team";
$to = $phone.'@sms-gateway';
$headers = 'From: Home-based Health Portal <noreply@homebasedhealthportal.com>' . "\r\n";

mail($to, '', $message, $headers);
?>