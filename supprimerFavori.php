<?PHP
include "../entities/Favori.php";
include "../core/FavoriCore.php";
include "../../config.php";

$pan=new FavoriCore();
if(isset($_POST['ID_panier'])){
$pan->supprimerFavori($_POST['ID_panier']);}





	header('Location: fave.php');

?>