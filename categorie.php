<HTML>
<head>
    <meta charset="utf-8">
	<script type="text/javascript" src="ajouterproduit.js"></script>
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="http://localhost/viewsback/">Session Administrateur</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
            <a class="navbar-brand">Tous vos produits</a>

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

       <h1 class="my-4"> <a  href="http://localhost/viewsback/" >Catégories</a></h1>
        <div class="list-group">
          <a href="salledebain.php" class="list-group-item">Categorie salle de bain</a>
          <a href="maisonetjardin.php" class="list-group-item">Categorie Maison et Jardin</a>
          <a href="cuisine.php" class="list-group-item">Categorie Cuisine</a>
          <br>
          <br>
          
       <br>
       

        </div>

      </div>


<?PHP
          
include "C:/wamp64/www/core/categorieCore.php";
          


$categorie1C=new categorieC ();
$listecategories=$categorie1C->affichercategorie();


?>

<header>  <script type="text/javascript" src="categorie.js"></script>
</header>
<table border="1" style="position: absolute;top: 150px; left: 500px;">
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
         <input type="submit" name="ajouter" value="Ajouter une Catégorie" style="position: absolute;left:150px ; top:320px ;">
       </form>   
        </div>
        <div class="col-lg-9">








      </div>
    </div>
    <!-- /.row -->

  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  
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
</HTMl>