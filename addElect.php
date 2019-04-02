<?php
include "../entities/Elect.php";

            if ( isset($_POST['details_elect'])and isset($_POST['lieu_elect'])and isset($_POST['nom_elect'])and isset($_POST['demande_elect']))
            {
                $elec=new Elect ($_POST['ID_elect'],$_POST['lieu_elect'],$_POST['details_elect'],$_POST['nom_elect'],$_POST['demande_elect']);
                $elec->ajouterElect($elec);
                header("location:../core/electricity.php");
            }
                else
                
                {echo`IMPOSSIBLE D AJOUTER`;}

?> 