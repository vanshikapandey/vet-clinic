<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['emailAddress'];
$message= $_POST['message'];
$to = "pvanshika217@mail.com";
$subject = "Mail From Canine Pet & Veterinary Clinic";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>