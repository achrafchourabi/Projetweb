<?php

include "C:/wamp64/www/Services/entities/Panier.php";
include "C:/wamp64/www/Services/core/PanierCore.php";
include "C:/wamp64/www/entities/produit.php";

include "C:/wamp64/www/core/produitCore.php";
include "vendor/phpmailer/PHPMailerAutoload.php";

            $mail = new PHPMailer();


            $mail->IsSMTP();  // telling the class to use SMTP
            $mail->SMTPDebug = 2;
            $mail->Mailer = "smtp";
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 587;
            $mail->SMTPAuth = true; // turn on SMTP authentication
            $mail->Username = "sloumazaa@gmail.com"; // SMTP username
            $mail->Password = "1121997sz"; // SMTP password 
            //s$Mail->Priority = 1;

            $mail->AddAddress("mohamedachraf.chourabi@esprit.tn","Name");
            //$mail->SetFrom($visitor_email, $name);
           // $mail->AddReplyTo($visitor_email,$name);

            $mail->Subject  = "Un message de votre site STMG";
            $mail->Body     =" TEST";
            $mail->WordWrap = 50;  

            if(!$mail->Send()) {
            echo 'Message was not sent.';
            echo 'Mailer error: ' . $mail->ErrorInfo;
            } else {
            echo 'Message has been sent.';            }

?>