<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $mail = $_POST['mail'];
  $message = $_POST['message'];
  $subject = 'Inquiry';

  $mailTo = "contact@iwibooks.com";
  $headers = "From: $mail";
  $txt = "You have received an e-mail from ".$name.".\n\n".$phone.".\n\n".$message.".\n\n";

  mail($mailTo, $subject, $txt, $headers);
  header("Location: thankyou.html?mailsend");
}

?>