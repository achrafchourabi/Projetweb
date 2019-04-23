<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>STMG Admin session</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>


                <?php
                include "C:/wamp64/www/core/produitCore.php";
                
        $produit1C=new produitC ();
$liste=$produit1C->rechercher(); ?>
<div class="row"> <?php
foreach($liste as $row){
	
	?>
	<div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="<?php echo $row['photo']; ?>" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#"><?PHP echo $row['nom']; ?></a>
                </h4>
                <h5><?PHP echo $row['prix']; ?> DT</h5>
                <p class="card-text" >ID :<?PHP echo $row['id']; ?>
                  <br>Quantite : <?PHP echo $row['qte']; ?>
                  <br>Disponible : <?PHP echo $row['etat']; ?>
                  <br>Remise : <?PHP echo $row['remise']; ?> %  
                  <br><td><form method="POST" action="supprimerproduit.php">
  <input type="submit" name="supprimer" value="Supprimer" onclick="verif3()">
  <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
  </form>
  </td>
  <td><a href="modifierproduit.php?id=<?PHP echo $row['id']; ?>">
  Modifier</a></td>  
	</p>
</div>

</div>

</div>
<?php } ?>
</div>

</html>



