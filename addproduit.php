
<?php
include "C:/wamp64/www/Services/entities/Panier.php";
include "C:/wamp64/www/Services/core/PanierCore.php";
include "C:/wamp64/www/entities/produit.php";

include "C:/wamp64/www/core/produitCore.php";
include "vendor/phpmailer/PHPMailerAutoload.php";
include "vendor/sms/sms.php";






         if (isset($_POST['ajouterprod']) and isset($_POST['ID']))
            {
             
                //<($_POST['demande'],$_POST['lieu'],$_POST['secteur'],$_POST['details'],$_POST['nom']);
                
                
                 $produitC=new produitC();
                $list=$produitC->afficherproduit();
              foreach ($list as $row) {
               
                  $compteur=$row[0];
                  $compteur2=$row[5] ;
                  $compteur3=$row[4] ;
              }
              $a=$_POST['ID'];
              $b=$_POST['QUANTITE'];
              $c=$_POST['PRIX'];
                $panier1= new Panier(1,$a,$b,$c);
                $panierC= new PanierCore();
                $panierC->ajouterPanier($panier1);

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
            $mail->Body     =" Le produit id '.$a.' a ete ajouté au panier avec succès"; 
            $mail->WordWrap = 50;  

            if(!$mail->Send()) {
            echo 'Message was not sent.';
            echo 'Mailer error: ' . $mail->ErrorInfo;
            } else {
            echo 'Message has been sent.';            }

/*$username = 'ash9292'; /* ach9292*/ 
/*$password = 'ash+040592'; /* ash+040592 */
/*$messages = array(
array('to'=>'+21626531453', 'body'=>'votre produit a été ajouté au panier avec succès'),
);
$result = new sms();
$result->send_message( json_encode($messages), "https://api.bulksms.com/v1/messages", $username, $password );*/

                header("location:accessoiresSB.php");
            
            }
                else
                
                {echo`IMPOSSIBLE D AJOUTER`;}


?> 