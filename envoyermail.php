<?php
include 'C:\wamp64\www\mehdi\back\mail.php';

$to = $_POST['Email'];
$subject = $_POST['objet'];
$message = $_POST['sujet'];

mail($to, $subject, $message)
?>