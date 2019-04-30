<?PHP
include "C:/wamp64/www/test/core/livraisonC.php";
$livraison1C=new LivraisonC();
$listeLivraisons=$livraison1C->afficherLivraisons();

//var_dump($listeEmployes->fetchAll());
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>STMG Admin</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>
</head>
 <!-- =======================================================
   body
  ======================================================= -->
<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><img src="img/logo.png" width="120"></a> 
      <!--logo end-->
      <div class="nav notify-row" id="top_menu"> </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.html">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <li class="mt">
            <a class="active" href="index.html">
              <i class="fa fa-dashboard"></i>
              <span>Tableau de bord</span>
              </a>
          </li>
          <li>
            <a href="index.html">
              <i class="fa fa-lightbulb-o"></i>
              <span>Produits</span>
              </a>
          </li>
          <li>
            <a href="index.html">
              <i class="fa fa-bolt"></i>
              <span>Services</span>
              </a>
          </li>
          <li>
            <a href="index.html">
              <i class="fa fa-shopping-cart"></i>
              <span>Commandes</span>
              </a>
          </li>
          <li>
            <a href="index.html">
              <i class="fa fa-users"></i>
              <span>Clients</span>
              </a>
          </li>
          <li>
            <a href="index.html">
              <i class="fa fa-tags"></i>
              <span>Promotions</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-truck"></i>
              <span>Livraisons</span>
              </a>
              <ul class="sub">
              <li><a href="form_validation.html">Gestion Livreurs</a></li>
              <li><a href="form_validation2.php">Gestion Livraisons</a></li>
              <li><a href="afficherEvaluation.php">Gestion Evaluation</a></li>
              <li><a href="statistique.php">Statistique des évaluatons pour les livreurs</a></li>
            </ul>
          </li>
          <li>
              <a href="index.html">
                <i class="fa fa-map-marker"></i>
                <span>Localisation</span>
                </a>
            </li>
            <li>
              <a href="index.html">
                <i class="fa fa-wrench"></i>
                <span>Paramétres</span>
                </a>
            </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Afficher Livraison</h3>
        <!-- row -->
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <hr>
                <thead>
                  <tr>
                    <td>Id</td>
                    <td>Date</td>
                    <td>Secteur</td>
                    <td>Id client</td>
                    <td>Id Livreur</td>
                    <td>Etat</td>
                    <td>supprimer</td>
                    <td>affecter</td>
                    <td>modifier</td>
                  </tr>
                </thead>

<?PHP
foreach($listeLivraisons as $row){
	?>
	<tr>
	<td><?PHP echo $row['Id']; ?></td>
	<td><?PHP echo $row['Date']; ?></td>
	<td><?PHP echo $row['Secteur']; ?></td>
  <td><?PHP echo $row['Idclient']; ?></td>
	<td><?PHP echo $row['Idlivreur']; ?></td>
	<td><?PHP echo $row['Etat']; ?></td>
	<td><form method="POST" action="supprimerLivraison.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['Id']; ?>" name="Id">
	</form>
	</td>
  <td><a href="affecterLivraison.php?Id=<?PHP echo $row['Id']; ?>">
  affecter</a>
  </td>
	<td><a href="modifierLivraison.php?Id=<?PHP echo $row['Id']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>
<form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="rechercherLivraison.php">
  <div class="form-group ">
                    <label for="champ" class="control-label col-lg-2">Champ a rechercher</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="champ" name="champ" type="text" />
                    </div>
                  </div>
  <input type="submit" name="rechercher" value="rechercher">
</form>
<form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="afficherLivraison1.php">
  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit" name="TriAsc" value="TriAsc">Tri Asc</button>
                    </div>
                  </div>
</form>
<form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="afficherLivraison2.php">
  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit" name="TriDesc" value="TriDesc">Tri Desc</button>
                    </div>
                  </div>
</form>
</div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="basic_table.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  
</body>

</html>





