<?PHP

include "../../config.php";
include "../../Services/entities/services.php";
include "../../Services/core/serviceCore.php";
include "../../Services/entities/servAdmin.php";
include "../../Services/core/servAdminCore.php";


            if ( isset($_POST['etat']) and isset($_POST['nomTech']))
            {
            	//$clim1= new services($_POST['ID'],$_POST['demande'],$_POST['lieu'],$_POST['secteur'],$_POST['details'],$_POST['nom'],$_POST['type'],$_POST['etat'],$_POST['nomTech']);
                //<($_POST['demande'],$_POST['lieu'],$_POST['secteur'],$_POST['details'],$_POST['nom']);
                $clim1C=new servCore();
               $climaff= $clim1C->recupererServ($_POST['ID']);
               foreach ($climaff as $row) {
               	$compteur=$row[0];
               }		

               $admin=new ServAdmin($compteur,$_POST['etat'],$_POST['nomTech']);
               $admina=new servAdminCore();
               $admina->ajouterServicaa($admin);
              
                header("location: back_resto.php");
            }
                else
                
                {echo`IMPOSSIBLE D AJOUTER`;}
//*/

?>