<?php
  //$headers = "From: demomail\r\n";
  //$headers .= 'Content-Type: text/plain; charset=utf-8';
  $to = 'onannotravel@gmail.com'; // Use your own email address
  $subject = 'Feedback from my site';
  $message = 'Name: ' . $_POST['userName'] . "\r\n\r\n";
  $message .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
  $message .= 'Comments: ' . $_POST['message'] . "\r\n\r\n";
  $message .= 'Phone: ' . $_POST['mobile'];
  echo $message;

  $success = mail($to, $subject, $message, $headers);
 
?>

