<?php
if(isset($_POST["submit"])) {
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $email_from = $_POST['email'];

  $email_subject = 'New Form Submission';
  $email_body = "User Name: $name.\n".
                  "User Email: $visitor_email.\n".
                  "Subject: $subject.\n".
                  "Message: $message.\n";

  $to = "mikanmuchiri@gmail.com";

  $headers = "From: $email_from \r\n";

  $headers = "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);

  header("Location:contact.html");
  echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
}
?>
