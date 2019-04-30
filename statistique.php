
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
              <li><a href="form_validation2.html">Gestion Livraisons</a></li>
              <li><a href="afficherEvaluation.php">Gestion Evaluation</a></li>
              <li><a href="statistique.php">Statistique des évaluatons pour les livreurs</a></li>
              <li><a href="stat.php">Statistique des évaluatons pour les livreurs</a></li>
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
  <CENTER>
     <?php  
 $connect = mysqli_connect("localhost", "root", "", "projetweb");  
 $query = "SELECT Idlivreur, count(*) as number FROM evaluation group by Note ;";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>les statistiques de vos evaluations</title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Idlivreur', 'number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["Idlivreur"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Statistiques selon les evaluations',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head>  
      <body>  
           <br /><br />  
           <div style="width:900px;">  
                <h3 align="center">Vos requetes d'assistance selon les statistiques</h3>  
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
           </div>  
      </body>  
 </html>  
  </CENTER>
  
<script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/chart.min.js"></script>
  <script src="js/chart-data.js"></script>
  <script src="js/easypiechart.js"></script>
  <script src="js/easypiechart-data.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/custom.js"></script>
  
</body>
</html>
