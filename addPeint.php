<?php
include "../entities/peinture.php";

            if ( isset($_POST['lieu_peint'])and isset($_POST['details_peint'])and isset($_POST['nom_peint'])and isset($_POST['demande_peint']))
            {
                $pein=new Peint ($_POST['ID_peint'],$_POST['lieu_peint'],$_POST['details_peint'],$_POST['nom_peint'],$_POST['demande_peint']);
                $pein->ajouterPeint($pein);
                header("location:../core/peint.php");
            }
                else
                
                {echo`IMPOSSIBLE D AJOUTER`;}

?> 