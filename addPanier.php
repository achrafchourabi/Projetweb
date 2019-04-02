<?php
include "../entities/PanierH.php";

 if (isset($_POST['quantite']) and (isset($_POST['prix'])))
 {
          $paniers= new Panier($_POST['ID_panier'],$_POST['quantite'],$_POST['prix']);
              
                $paniers->ajouterPanier($paniers);
                header("location: ../clim.php");
            }
                else
                	                {echo`IMPOSSIBLE D AJOUTER`;}

            
               

?> 