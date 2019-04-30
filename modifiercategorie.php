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
include "C:/wamp64/www/entities/categorie.php";
include "C:/wamp64/www/core/categorieCore.php";
if (isset($_GET['idcat'])){
	$categorieC=new categorieC();
    $result=$categorieC->recuperercategorie($_GET['idcat']);
	foreach($result as $row){
		$idcat=$row['idcat'];
		$nomcat=$row['nomcat'];
		
?>
<form method="POST" style="position: absolute; top: 150px; left: 500px;">
<table>
<h2>Modifier une catégorie</h2>
    <br>
<tr>
<td>idcat</td>
<td><input type="number" name="idcat" value="<?PHP echo $idcat ?>"></td>
</tr>
<tr>
<td>Nomcat</td>
<td><input type="text" name="nomcat" value="<?PHP echo $nomcat ?>"></td>
</tr>

<tr>
<td><td></td></td>
<td><input type="submit" name="modifier" value="Modifier la catégorie"></td>
<td><a href="categorie.php"><input type="button" name="" value="Annuler"></a></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="idcat_ini" value="<?PHP echo $_GET['idcat'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$categorie=new categorie($_POST['idcat'],$_POST['nomcat']);
	$categorieC->modifiercategorie($categorie,$_POST['idcat_ini']);
	echo $_POST['idcat_ini'];
	header('Location: categorie.php');
}
?>
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