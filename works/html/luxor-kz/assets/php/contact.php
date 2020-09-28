<?php
include('mysmtpconfig.php');
include('smtpClass.php');
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$to = "akulina-222@mail.ru";
$from = "contactform@luxor-aktobe.kz";
$subject = $_POST['name'] ." || ". $_POST['email'];
$body = $_POST['message'];
$SMTPMail = new SMTPClient ($SmtpServer, $SmtpPort, $SmtpUser, $SmtpPass, $from, $to, $subject, $body);
$SMTPChat = $SMTPMail->SendMail();
}
?>