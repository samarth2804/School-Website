<?php
$name = $_POST['name'];
$visitor_email = $_POST['email']


$email_from = 'hnnmemorialpublicschool@gmail.com';
$email_subject = 'New Admission';
$email_body = "User Name : $name.\n"
              "User Email : $visitor_email.\n"
$to = 'rupaskk01@gmail.com';
$headers = "From: $email_from \r\n";
$headers .= "Reply-To : $visitor_email ";

mail($to,$headers);
header("location: admission.html");

?>