<?php
include "vendor/sms/sms.php";

$username = 'Selim05';
$password = '1121997sz';
$messages = array(
array('to'=>'+21626531453', 'body'=>'votre demande a été effectuer'),
);
$result = new sms();
$result->send_message( json_encode($messages), "https://api.bulksms.com/v1/messages", $username, $password );


?>