<HTML>
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

<body>
<?PHP
include "C:/wamp64/www/test/entities/livraison.php";
include "C:/wamp64/www/test/core/livraisonC.php";
if (isset($_GET['Id'])){
	$livraisonC=new LivraisonC();
    $result=$livraisonC->recupererLivraison($_GET['Id']);
	foreach($result as $row){
		$id=$row['Id'];
		$date=$row['Date'];
		$secteur=$row['Secteur'];
		$idclient=$row['Idclient'];
		$idlivreur=$row['Idlivreur'];
    $etat=$row['Etat']
?>
<form method="POST" >
<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Ajouter Livreur</h3>
        <!-- BASIC FORM VALIDATION -->
        <!-- /row -->
        <!-- FORM VALIDATION -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" onsubmit="return verifForm(this)">
                	<div class="form-group ">
                    <label for="Id" class="control-label col-lg-2">Id</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="Id" name="Id" type="number" value="<?PHP echo $id?>" onblur="verifidc(this)"/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="Date" class="control-label col-lg-2">Date</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="Date" name="Date" type="date" value="<?PHP echo $date?>" onblur="verifdate(this)"/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="Secteur" class="control-label col-lg-2">Secteur</label>
                    <SELECT name="Secteur" id="Secteur" size="1">
                    <option value="Tunis">Tunis</option>
                    <option value="Ariana">Ariana</option>
                    <option value="Marsa">Marsa</option>
                    <option value="Autres">Autres</option>  
                    </SELECT>
                  </div>
                  <div class="form-group ">
                    <label for="Idclient" class="control-label col-lg-2">Id client</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="Idclient" name="Idclient" type="number" value="<?PHP echo $idclient?>" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="Idlivreur" class="control-label col-lg-2">Id livreur</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="Idlivreur" name="Idlivreur" type="number" value="<?PHP echo $idlivreur?>"/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="Etat" class="control-label col-lg-2">Etat</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="Etat" name="Etat" type="number" value="<?PHP echo $etat?>"/>
                    </div>
                  </div>
                  
                  <input type="submit" name="modifier" value="modifier" href="afficherLivraison.php"></td>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$livraison=new livraison($_POST['Id'],$_POST['Date'],$_POST['Secteur'],$_POST['Idclient'],$_POST['Idlivreur'],$_POST['Etat']);
	$livraisonC->modifierLivraison($livraison,$_POST['Id']);
	echo $_POST['Id'];

}
?>
</body>
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
        <a href="form_validation.html#" class="go-top">
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
  <script src="lib/form-validation-script.js"></script>

</body>
<script type="text/javascript">
    function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}


function verifdate(champ)
{
   if(champ.value.length != 10 )
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function verifidc(champ)
{
   if(champ.value < 1 || champ.value > 4)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}


function verifForm(f)
{
   var pseudoOk = verifdate(f.Date);
   var mailOk = verifidc(f.Idclient);
   
   if(pseudoOk && mailOk )
      return true;
   else
   {
      alert("Veuillez remplir correctement tous les champs");
      return false;
   }
}
</script>

</HTMl>