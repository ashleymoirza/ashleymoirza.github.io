<?php
//get data from form  
$FLname = $_POST['firstLastName'];
$email= $_POST['emailInfo'];
$message= $_POST['Message'];

$to = "info@developondemand.io";
$subject = "New Form Submission";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:EmailVerification.html");
?>