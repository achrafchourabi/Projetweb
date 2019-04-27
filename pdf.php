<?php
  //require 'connect.php';
  /*$objectPdo = new PDO('mysql:host=localhost;dbname=services', 'root', '');
  $pdoStat = $objectPdo->prepare('SELECT * FROM panier ORDER BY ID ASC ');
  $executeIsOK = $pdoStat->execute();
  $produit= $pdoStat->fetchAll();*/
  include "../entities/services.php";
include "../core/serviceCore.php";
include "../entities/Panier.php";
include "../core/PanierCore.php";
include "../../config.php";





  $pan=new PanierCore();
$listePanier=$pan->recupererType();
$affchage=$pan->afficherPanier();
$cPanier = $pan->countPanier();


$total=$pan->somme();
      

 ?>




<!DOCTYPE html>
<html>
<head>
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="lib/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="lib/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="lib/advanced-datatable/css/DT_bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="../css/stylesheet_bootstrap.css" />
<link rel="stylesheet" type="text/css" href="../css/stylesheet_bootstrap_theme.css" />
<link rel="stylesheet" type="text/css" href="../css/stylesheet_categories.css" />
<link rel="stylesheet" type="text/css" href="../css/stylesheet_custom.css" />
<link rel="stylesheet" type="text/css" href="../css/stylesheet_font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="../css/stylesheet_lightbox-0.5.css" />
<link rel="stylesheet" type="text/css" href="../css/stylesheet_mega_menu.css" />
<link rel="stylesheet" type="text/css" href="../css/stylesheet_product_list.css" />
<link rel="stylesheet" type="text/css" href="../css/stylesheet_responsive.css" />
<link rel="stylesheet" type="text/css" href="../css/stylesheet_suggestionbox.css" />
<link rel="stylesheet" type="text/css" href="../css/index_home.css" />
<script type="text/javascript" src="../jscript/jscript_jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="../jscript/jscript_jquery.carouFredSel-6.2.1-packed.js"></script>
<script type="text/javascript" src="../jscript/jscript_jquery.elevateZoom-3.0.8.min.js"></script>
<script type="text/javascript" src="../jscript/jscript_jquery.equalheights.js"></script>
<script type="text/javascript" src="../jscript/jscript_jquery.matchHeight.js"></script>
<script type="text/javascript" src="../jscript/jscript_jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="../jscript/jscript_jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="../jscript/jscript_jquery.simplr.smoothscroll.min.js"></script>
<script type="text/javascript" src="../jscript/jscript_jquery.touchSwipe.min.js"></script>
<script type="text/javascript" src="../jscript/jscript_jquery.ui.totop.js"></script>
<script type="text/javascript" src="../jscript/jscript_menu_top.js"></script>
<script type="text/javascript" src="../jscript/jscript_script_bootstrap.js"></script>
<script type="text/javascript" src="../jscript/jscript_stotal-storage.min.js"></script>
<script type="text/javascript" src="../jscript/jscript_suggestionbox.js"></script>
<script type="text/javascript" src="../jscript/jscript_top.js"></script>
<script type="text/javascript" src="../jscript/jscript_xeasyTooltip.js"></script>
<script type="text/javascript" src="../jscript/jscript_xjquery.easing.1.3.js"></script>
<script type="text/javascript" src="../jscript/jscript_xjquery.jqtransform.js"></script>
<script type="text/javascript" src="../jscript/jscript_xjquery.lightbox-0.5.js"></script>
<script type="text/javascript" src="../jscript/jscript_xjscript_script.app.js"></script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pro Systemes</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <br>
          <i class="fa fa-globe"></i> Liste de Produit
          <small class="pull-right"></small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        <br>
        From
        <address>
          <strong>STMG</strong><br>
          tunis<br>
          Phone: (+216) 54454333<br>
          Email: STMG.info@gmail.com

        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <br>
        To
        <address>
          <strong>Client</strong><br>
          Tunis<br>
          Phone: (+216) 26000417<br>
          Email: mohamedselim.zaalouni@esprit.tn<br>
        </address>
        <br>
      </div>
      <!-- /.col -->
      
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
         <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
  <thead>
    <tr>
      <th scope="col">Code Panier</th>
      <th scope="col">Nom produit</th>
      <th scope="col">quantite</th>
      <th scope="col">prix</th>

     
    </tr>
  </thead>
  <tbody>
          <?php foreach ($listePanier as $row): ?> 
              <tr>
                <td><?PHP echo $row['ID_panier']; ?></td>
                <td><?PHP echo $row['type']; ?></td>
                <td><?PHP echo $row['quantite']; ?></td>
                <td><?PHP echo $row['prix']; ?></td>
              

                <td>
      
                </td>
                
              </tr>
                  <?php endforeach; 
                  ?>
                  <tr>
                    <td></td>
                    <td></td>
                    <td> nombre de produit : <?php echo $cPanier ?></td>
                    <td> Total : <?PHP echo $total  ?></td>
                  </tr>
    </tbody>
</table>

    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      
      <!-- /.col -->
      
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

</body>
</html>
