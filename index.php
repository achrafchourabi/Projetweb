<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin plateforme - STMG</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Interface Administrateur</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Accueil
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Catégories</h1>
                   

           <?PHP
          
include "C:/wamp64/www/core/categorieCore.php";
          


$categorie1C=new categorieC ();
$listecategories=$categorie1C->affichercategorie();


?>

<header>  <script type="text/javascript" src="categorie.js"></script>
</header>
<table border="1">
<tr>
<td>idcat</td>
<td>Nomcat</td>

<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listecategories as $row){
  ?>
  <tr>
  <td><?PHP echo $row['idcat']; ?></td>
  <td><?PHP echo $row['nomcat']; ?></td>
  
  <td><form method="POST" action="supprimercategorie.php">
  <input type="submit" name="supprimer" value="supprimer" onclick="verif3()">
  <input type="hidden" value="<?PHP echo $row['idcat']; ?>" name="idcat">
  </form>
  </td>
  <td><a href="modifiercategorie.php?idcat=<?PHP echo $row['idcat']; ?>">
  Modifier</a></td>
  </tr>
  <?PHP
}
?>
</table>
          
       <form method="POST" action="ajoutercategorie.html">
         <input type="submit" name="ajouter" value="Ajouter Catégorie">
       </form>   
        </div>
        <div class="col-lg-9">
<h1 class="my-4">Sous-Catégories</h1> 
      <?PHP

include "C:/wamp64/www/core/souscategorieCore.php";


$souscategorie1C=new souscategorieC ();
$listesouscategories=$souscategorie1C->affichersouscategorie();

//var_dump($listeEmployes->fetchAll());
?>
<header>  <script type="text/javascript" src="souscategorie.js"></script>
</header>
<table border="1">
<tr>
<td>idsouscat</td>
<td>Nomsouscat</td>
<td>categorie</td>


<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listesouscategories as $row){
  ?>
  <tr>
  <td><?PHP echo $row['idsouscat']; ?></td>
  <td><?PHP echo $row['nomsouscat']; ?></td>
  <td><?PHP echo $row['numcat']; ?></td>

  
  <td><form method="POST" action="supprimersouscategorie.php">
  <input type="submit" name="supprimer" value="supprimer" onclick="verif3()">
  <input type="hidden" value="<?PHP echo $row['idsouscat']; ?>" name="idsouscat">
  </form>
  </td>
  <td><a href="modifiersouscategorie.php?idsouscat=<?PHP echo $row['idsouscat']; ?>">
  Modifier</a></td>
  </tr>
  <?PHP
}
?>
</table>
<form method="POST" action="ajoutersouscategorie.html">
         <input type="submit" name="ajouter" value="Ajouter Sous-Catégorie">
       </form> 

      <!-- /.col-lg-3 -->
<h1 class="my-4">Produits</h1> 

      <?PHP
include "C:/wamp64/www/core/produitCore.php";
$produit1C=new produitC ();
$listeproduits=$produit1C->afficherproduit();

//var_dump($listeEmployes->fetchAll());
?>
<header>  <script type="text/javascript" src="produit.js"></script>
</header>
<table border="1">
<tr>
<td>id</td>
<td>Nom</td>
<td>idsouscat</td>
<td>idcat</td>
<td>prix</td>
<td>qte</td>
<td>etat</td>
<td>remise</td>

<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeproduits as $row){
  ?>
  <tr>
  <td><?PHP echo $row['id']; ?></td>
  <td><?PHP echo $row['nom']; ?></td>
  <td><?PHP echo $row['idsouscat']; ?></td>
  <td><?PHP echo $row['idcat']; ?></td>
  <td><?PHP echo $row['prix']; ?></td>
  <td><?PHP echo $row['qte']; ?></td>
  <td><?PHP echo $row['etat']; ?></td>
  <td><?PHP echo $row['remise']; ?></td>
  
  <td><form method="POST" action="supprimerproduit.php">
  <input type="submit" name="supprimer" value="supprimer" onclick="verif3()">
  <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
  </form>
  </td>
  <td><a href="modifierproduit.php?id=<?PHP echo $row['id']; ?>">
  Modifier</a></td>
  </tr>
  <?PHP
}
?>
</table>
<form method="POST" action="ajouterproduit.html">
         <input type="submit" name="ajouter" value="Ajouter produit">
       </form> 


        </div>
      </div>
    </div>
    
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark" >
    <div class="container" style="margin: auto">
      <p class="m-0 text-center text-white">Copyright &copy; Votre site web 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
