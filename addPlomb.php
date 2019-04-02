<?php
include "../entities/plomberie.php";

            if ( isset($_POST['details_plomb'])and isset($_POST['lieu_plomb'])and isset($_POST['nom_plomb'])and isset($_POST['demande_plomb']))
            {
                $plomb=new Plomb ($_POST['ID_plomb'],$_POST['lieu_plomb'],$_POST['details_plomb'],$_POST['nom_plomb'],$_POST['demande_plomb']);
                $plomb->ajouterPlomb($plomb);
                header("location: ../plomb.php");
            }
                else
                
                {echo`IMPOSSIBLE D AJOUTER`;}

?> 