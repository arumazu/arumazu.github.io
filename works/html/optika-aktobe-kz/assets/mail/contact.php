<?php
include('mysmtpconfig.php');
include('smtpClass.php');
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$to = "kseniya.bedenko@gmail.com";
$from = "contactform@optika-aktobe.kz";
$subject = $_POST['name'] ." || ". $_POST['email'];
$body = $_POST['message'];
$SMTPMail = new SMTPClient ($SmtpServer, $SmtpPort, $SmtpUser, $SmtpPass, $from, $to, $subject, $body);
$SMTPChat = $SMTPMail->SendMail();
}
?>
