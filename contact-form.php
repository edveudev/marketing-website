<?php


$fullname = $_POST['fullname'];
$institution = $_POST['institution'];
$title = $_POST['title'];
$email = $_POST['email'];
$message = $_POST['message'];

$mailheader = "From:".$fullname."<".$email.">\r\n";
$subject = "Online Form:".$fullname." - ".$institution;
$recipient = "info@edveu.com";

mail($recipient, $subject, $message, $mailheader)
or die("Error!");



echo"message sent";

?>