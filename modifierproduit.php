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
include "C:/wamp64/www/entities/produit.php";
include "C:/wamp64/www/core/produitCore.php";
if (isset($_GET['id'])){
	$produitC=new produitC();
    $result=$produitC->recupererproduit($_GET['id']);
	foreach($result as $row){
		$id=$row['id'];
		$nom=$row['nom'];
		$idsouscat=$row['idsouscat'];
		$idcat=$row['idcat'];
		$prix=$row['prix'];
		$qte=$row['qte'];
		$etat=$row['etat'];
		$remise=$row['remise'];
				$photo=$row['photo'];

		
?>
<form method="POST" style="position: absolute; top: 150px; left: 500px;">

<h2>Modifier produit</h2>
<br>
<table>
<tr>
<td>Id du produit</td>
<td><input type="number" name="id" min="0" value="<?PHP echo $id ?>"></td>
</tr>
<tr>
<td>Nom du produit</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>Nom de la catégorie</td>
<td><input type="number" name="idsouscat" min="0" value="<?PHP echo $idsouscat ?>"></td>
</tr>
<tr>
<td>Nom de la sous catégorie</td>
<td><input type="number" name="idcat" min="0" value="<?PHP echo $idcat ?>"></td>
</tr>
<tr>
<td>Prix</td>
<td><input type="number" name="prix" min="0" value="<?PHP echo $prix ?>"></td>
</tr>
<tr>
<td>Quantite</td>
<td><input type="number" name="qte" min="0" value="<?PHP echo $qte ?>"></td>
</tr>
<tr>
<td>Disponibilité</td>
<td><input type="number" name="etat" min="0" max="1" value="<?PHP echo $etat ?>"></td>
</tr>
<tr>
<td>Remise</td>
<td><input type="number" name="remise" min="0" max="100" value="<?PHP echo $remise ?>"></td>
</tr>
<tr>
<td>Photo</td>
<td><input type="file" name="photo"  value="<?PHP echo $photo ?>"></td>
</tr>


<tr>
<td></td>
<td><input type="submit" name="modifier" value="Modifier le produit"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="idi" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$produit=new produit($_POST['id'],$_POST['nom'],$_POST['idsouscat'],$_POST['idcat'],$_POST['prix'],$_POST['qte'],$_POST['etat'],$_POST['remise'], $_POST['photo']);
	$produitC->modifierproduit($produit,$_POST['idi']);
	echo $_POST['idi'];
	header('Location: index.php');
}
?>
</div>
      <!-- /.col-lg-9 -->

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