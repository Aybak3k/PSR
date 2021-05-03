<?php

echo "<pre>";

  $userName = $_POST['name'];
  $userEmail = $_POST['email'];
  $userPhone = $_POST['phone'];
  // $userMessage = $_POST['message'];

  $to = "lasagnastudios1@gmail.com";
  $subject = "LEAD: Website Form Submission";
  $body = "";

  $body .= "Name: " .$userName. "\r\n";
  $body .= "Email: " .$userEmail. "\r\n";
  $body .= "Phone: " .$userPhone. "\r\n";
  // $body .= "Message: " .$userMessage. "\r\n";

  mail($to,$subject,$body);

  header("location:thank-you.html");
echo "</pre>";
?>
