<?php
include "../entities/restaurant.php";

            if (isset($_POST['demande_resto'])and isset($_POST['details_resto'])and isset($_POST['lieu_resto'])and isset($_POST['secteur_resto'])and isset($_POST['nom_resto']))
            {
                $res=new Resto ($_POST['ID_resto'],$_POST['demande_resto'],$_POST['lieu_resto'],$_POST['secteur_resto'],$_POST['details_resto'],$_POST['nom_resto']);
                $res->ajouterResto($res);
                header("location:../core/resto.php");
            }
                else
                
                {echo`IMPOSSIBLE D AJOUTER`;}

?> 