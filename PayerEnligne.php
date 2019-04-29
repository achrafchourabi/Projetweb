<?php
include "../vendor/sms/sms.php";
include "../entities/Panier.php";
include "../core/PanierCore.php";
include "../../config.php";
include "../vendor/phpmailer/PHPMailerAutoload.php";

$pan=new PanierCore();
$pan->ValiderAchat();

$liste=$pan->recupererType();
$somme=$pan->somme();

require('../vendor/fpdf/fpdf.php');

//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();

//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(130  ,5,'Socite de travaux et maintenance general',0,0);
$pdf->Cell(59   ,5,'Clien',0,1);//end of line

//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);

$pdf->Cell(130  ,5,'[Street Address]',0,0);
$pdf->Cell(59   ,5,'',0,1);//end of line

$pdf->Cell(130  ,5,'[Megrine, Tunis, 2080]',0,0);
$pdf->Cell(25   ,5,'Date',0,0);
$pdf->Cell(34   ,5,'[29/04/2019]',0,1);//end of line

$pdf->Cell(130  ,5,'Phone [+26000417]',0,0);
$pdf->Cell(25   ,5,'Invoice #',0,0);
$pdf->Cell(34   ,5,'[######]',0,1);//end of line

$pdf->Cell(130  ,5,'Fax [+71111555]',0,0);
$pdf->Cell(25   ,5,'Customer ID',0,0);
$pdf->Cell(34   ,5,'[#######]',0,1);//end of line

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189  ,10,'',0,1);//end of line

//billing address
$pdf->Cell(100  ,5,'Bill to',0,1);//end of line

//add dummy cell at beginning of each line for indentation
$pdf->Cell(10   ,5,'',0,0);
$pdf->Cell(90   ,5,'[Name]',0,1);

$pdf->Cell(10   ,5,'',0,0);
$pdf->Cell(90   ,5,'[Company Name]',0,1);

$pdf->Cell(10   ,5,'',0,0);
$pdf->Cell(90   ,5,'[Address]',0,1);

$pdf->Cell(10   ,5,'',0,0);
$pdf->Cell(90   ,5,'[Phone]',0,1);

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189  ,10,'',0,1);//end of line

//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(130  ,5,'Description',1,0);
$pdf->Cell(25   ,5,'Taxable',1,0);
$pdf->Cell(34   ,5,'Amount',1,1);//end of line

$pdf->SetFont('Arial','',12);

//Numbers are right-aligned so we give 'R' after new line parameter
foreach ($liste as $row) {
    # code...

$pdf->Cell(130  ,5,$row['type'],1,0);
$pdf->Cell(25   ,5,$row['quantite'],1,0);
$pdf->Cell(34   ,5,$row['prix'],1,1,'R');//end of line

}
//summary
$pdf->Cell(130  ,5,'',0,0);
$pdf->Cell(25   ,5,'Subtotal',0,0);
$pdf->Cell(4    ,5,'$',1,0);
$pdf->Cell(30   ,5,$somme,1,1,'R');//end of line


$pdf->Output("facture.pdf");



$username = 'Selim01';
$password = '1121997sz';
$messages = array(
array('to'=>'+21626000417', 'body'=>'votre demande a été effectuer'),
);
$result = new sms();
$result->send_message( json_encode($messages), "https://api.bulksms.com/v1/messages", $username, $password );



 $mail = new PHPMailer();
$mail->isSMTP(); // Paramétrer le Mailer pour utiliser SMTP 
$mail->Host = 'smtp.gmail.com'; // Spécifier le serveur SMTP
$mail->SMTPAuth = true; // Activer authentication SMTP
$mail->Username = 'sloumazaa@gmail.com'; // Votre adresse email d'envoi
$mail->Password = '1121997sz'; // Le mot de passe de cette adresse email
$mail->SMTPSecure = 'ssl'; // Accepter SSL
$mail->Port = 465;

$mail->setFrom('from@example.com', 'Mailer'); // Personnaliser l'envoyeur
$mail->addAddress('sloumazaa@gmail.com', 'Rania User'); // Ajouter le destinataire
//$mail->addAddress('To2@example.com'); 
//$mail->addReplyTo('info@example.com', 'Information'); // L'adresse de réponse
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->addAttachment('facture.pdf'); // Ajouter un attachement
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg'); 
$mail->isHTML(true); // Paramétrer le format des emails en HTML ou non

$mail->Subject = 'STMG';
$mail->Body = 'Votre achat est bien confirmé , ce mail inclu votre facture';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
if(!$mail->send()) {
   echo 'Erreur, message non envoyé.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
   echo 'Le message a bien été envoyé !';
}

                echo"Merci pour votre confiance";
                echo "<a href='../../index.php'> cliquer ici pour retouner";
                $pan->supprimerTout();


?>