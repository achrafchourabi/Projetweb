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

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="http://localhost/viewsback/">Session Administrateur</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
            <a class="navbar-brand">Produits Maison et jardin</a>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="http://localhost/viewsback/">Accueil
              <span class="sr-only">(current)</span>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

               <h1 class="my-4"> <a  href="http://localhost/viewsback/">Catégories</a></h1>

        <div class="list-group">
          <a href="salledebain.php" class="list-group-item">Categorie salle de bain</a>
          <a href="maisonetjardin.php" class="list-group-item">Categorie Maison et Jardin</a>
          <a href="cuisine.php" class="list-group-item">Categorie Cuisine</a>
          <br>
          <br>
          <form method="POST" action="ajouterproduit.html">
         <input type="submit" name="ajouter" value="Ajouter un produit">
       </form> 
       <br>
        </div>

      </div>
      <!-- /.col-lg-3 -->


      <div class="col-lg-9">

        
          
        </div>
<?PHP
include "C:/wamp64/www/core/produitCore.php";
$produit1C=new produitC ();
$listeproduits=$produit1C->afficherproduitmaisonetjardin();
//var_dump($listeEmployes->fetchAll());
?>

        <div class="row">
<?PHP
foreach($listeproduits as $row){
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
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>

              </div>
            </div>

          </div>

        


   
<?PHP
}
?>
          <tr> <h2><?php
       $produit2C=new produitC ();
        $produit2C->totalproduitmaisonetjardin() ;  ?></h2></tr>
        </div>
        </div>

        <!-- /.row -->
 
      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Votre site web 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
