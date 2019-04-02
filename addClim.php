<?php
include "../entities/Climatiseur.php";



            if (isset($_POST['demande'])and isset($_POST['details'])and isset($_POST['lieu'])and isset($_POST['secteur'])and isset($_POST['nom']))
            {
            	$clim1= new Climatiseur($_POST['ID'],$_POST['demande'],$_POST['lieu'],$_POST['secteur'],$_POST['details'],$_POST['nom']);
                //<($_POST['demande'],$_POST['lieu'],$_POST['secteur'],$_POST['details'],$_POST['nom']);
                $clim1->ajouterClim($clim1);
                header("location: ../clim.php");
            }
                else
                
                {echo`IMPOSSIBLE D AJOUTER`;}

?> 