<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$message=$_POST['message'];

$email_from='shivay1921142@gndec.ac.in';
$email_subject="New Form Submission";
$email_body="User Name: $name.\n"."User Email: $visitor_email.\n"."User Message: $message
.\n";
$to="bhandarishivay2001@gmail.com";
$headers="From: $email_from \r\n";
$headers .="Reply-To: $visitor_email \r\n"; mail($to,$email_subject,$email_body,$headers); header("Location: Practical-7.html");
?>
