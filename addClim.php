<?php
include "../entities/Panier.php";
include "../core/PanierCore.php";
include "../entities/services.php";
include "../../config.php";
include "../core/serviceCore.php";
include "../vendor/phpmailer/PHPMailerAutoload.php";
include "../vendor/sms/sms.php";
//include "../vendor/phpmailer/PHPMailerAutoload.php";





         if (isset($_POST['demande'])and isset($_POST['details'])and isset($_POST['lieu'])and isset($_POST['secteur'])and isset($_POST['nom']) and isset($_POST['type']))
            {
              $clim1= new services(1,$_POST['demande'],$_POST['lieu'],$_POST['secteur'],$_POST['details'],$_POST['nom'],$_POST['type']);
                //<($_POST['demande'],$_POST['lieu'],$_POST['secteur'],$_POST['details'],$_POST['nom']);
                $clim1C=new servCore();
                $clim1C->ajouterService($clim1);
                
                $list=$clim1C->afficherClim();
              foreach ($list as $row) {
                  $compteur=$row[0];
              }
                $panier1= new Panier(1,$compteur,$_POST['quantite'],$_POST['prix']);
                $panierC= new PanierCore();
                $panierC->ajouterPanier($panier1);


$mail = new PHPMailer();
$mail->isSMTP(); // Paramétrer le Mailer pour utiliser SMTP 
$mail->Host = 'smtp.gmail.com'; // Spécifier le serveur SMTP
$mail->SMTPAuth = true; // Activer authentication SMTP
$mail->Username = 'sloumazaa@gmail.com'; // Votre adresse email d'envoi
$mail->Password = '1121997sz'; // Le mot de passe de cette adresse email
$mail->SMTPSecure = 'ssl'; // Accepter SSL
$mail->Port = 465;

$mail->setFrom('from@example.com', 'Mailer'); // Personnaliser l'envoyeur
$mail->addAddress('rania.arfaoui.1@esprit.tn', 'Rania User'); // Ajouter le destinataire
//$mail->addAddress('To2@example.com'); 
//$mail->addReplyTo('info@example.com', 'Information'); // L'adresse de réponse
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz'); // Ajouter un attachement
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg'); 
$mail->isHTML(true); // Paramétrer le format des emails en HTML ou non

$mail->Subject = 'STMG';
$mail->Body = 'Votre formulaire est bien confirmé';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
if(!$mail->send()) {
   echo 'Erreur, message non envoyé.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
   echo 'Le message a bien été envoyé !';
}
               

$username = 'redjohn01';
$password = '1121997sz';
$messages = array(
array('to'=>'+21624253178', 'body'=>'votre demande a été effectuer'),
);
$result = new sms();
$result->send_message( json_encode($messages), "https://api.bulksms.com/v1/messages", $username, $password );




                header("location:clim.php");
            }
                else
                
                {echo`IMPOSSIBLE D AJOUTER`;}


?> 