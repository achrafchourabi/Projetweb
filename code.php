<?php
include "../entities/services.php";
include "../core/serviceCore.php";
include "../entities/Panier.php";
include "../core/PanierCore.php";
include "../../config.php";
include "../entities/servAdmin.php";
include "../core/servAdminCore.php";


$serv=new servAdminCore();
$listeServ=$serv->afficherSuivie();

  $pan=new PanierCore();
$listePanier=$pan->afficherPanier();
$affchage=$pan->afficherPanier();
$cPanier = $pan->countPanier();
$total=$pan->somme();

$ClimR=new ServCore();
$listeClima=$ClimR->afficherClim();

?>



<!doctype html>
<html>
<head>
<title>STMG </title>
<meta charset="utf-8">

<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
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
<body id="indexHomeBody">
  
  
<div id="page">
<!-- ========== IMAGE BORDER TOP ========== --> 

<!-- BOF- BANNER TOP display -->

    <!-- EOF- BANNER TOP display -->
    
    <!-- ====================================== --> 

    <!-- ========== HEADER ========== -->
      



    <header>
        <div class="nav">
            <div class="container">
                <div class="row">                       
                    <div class="col-xs-12 col-md-7 col-lg-7 fright">
                        </div>
                        <ul class="header_user_info customer_links">
                        <!-- ========== NAVIGATION LINKS ========== --> 
                                          
                        <li><a class="" href="s'inscrire.html">S'inscrire</a></li>
                        <li><a class="" href="connecter.html">Se Connecter</a> </li>
                              
                                                    <!-- ====================================== -->
                        </ul>
                    </div>
                    <div class="col-xs-12 col-md-5 col-lg-5">
                        <div class="phone">
                            <p>+21698963635</p>
                            <span>Heures de travail: 8h-19h</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="bottom">
                <div class="container">
                    <div class="row clearfix">
                        <div id="header_logo" class="col-xs-12 col-sm-3">
                            <!-- ========== LOGO ========== -->
                                <a href="../index.php"><img src="../images/logo.png"  alt="" /></a>
                            <!-- ========================== -->
                        </div>
                        <div class="col-xs-12 col-sm-9 col-md-9">
                            <div class="header_cust_block clearfix">
                                <p>Livraison gratuite</p>
                                <div>
                                    <span>pour la commande de plus de 200dt</span>
                                    <span>Cet offre est valide pour tous nots catégories</span>
                                </div>
                            </div>
                            <div class="shopping_cart" id="shopping_cart">
                                <!-- ========== SHOPPING CART ========== -->
                                <div class="shop-box-wrap">
                                    <span class="cart_title" >Panier</span><span class="st3"> <?php echo $cPanier ?> </span>

                              
                                    <div class="shopping_cart_content" id="shopping_cart_content" >
                                    <form method="POST" action="supprimerPanier.php">
                                        <div class="center_info">
                                        
                                    <?PHP
                                    

                                    foreach($listePanier as $row){
                                      ?>  
                                        <table>
                                        <tr>
                                            <td><div class="none"> <input type="hidden" name="ID_panier" value="<?PHP echo $row['ID_panier'];?>">  <?php echo "Produit" .$row['ID']; echo "| Quantité: ".$row['quantite']; ?></div> </td>
                                             

                                                                          
                                        </tr>
                                       
                                    <?php } ?>
                                    <td></td><td><a href="cart.php">modifier</a></td> 
                                     </table>
                                    
                                </div>
                                    </form>
                                </div>
                            </div>
                              </div>
                            <!-- =================================== -->  
                             <div id="search_block" class="clearfix">
                                <!-- ========== SEARCH ========== -->
                                <form name="quick_find_header" action="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=advanced_search_result" method="get" class="form-inline form-search pull-right">
                                        <input type="hidden" name="main_page" value="advanced_search_result" /><input type="hidden" name="search_in_description" value="1" />                                        <label class="sr-only" for="searchInput">Search</label>
                                        <input class="form-control" id="searchInput" type="text" name="keyword" />
                                        <button type="submit" class="button-search"><i class="fa fa-search"></i><b>Search</b></button>
                                </form>
                                <!-- ============================ -->
                            </div>  
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                             
                            <div class="top_menu clearfix">
                              <div class="cat-title">MENU</div>
                                <!--bof-mega menu display-->
                                  
<div id="mega-wrapper" class="stickUpTop"><!-- bof mega-wrapper -->

    <ul class="mega-menu col-sm-12"><!-- bof mega-menu -->
       
        <li class="categories-li"><a class="drop">Catégories<span class="label">Nouveau!</span></a><!-- bof cateories    -->
     
            <div class="dropdown col-9">
<div class="levels">
            <ul class="level2"><li data-match-height="cat-ul-gen" class="submenu col-inner">
<a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index&amp;cPath=1">Bathroom</a><ul class="level3"><li>
<a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index&amp;cPath=1_31">Lorem</a></li><li>
<a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index&amp;cPath=1_32">Ipsum</a></li><li>
<a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index&amp;cPath=1_33">Dolor</a></li><li>
<a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index&amp;cPath=1_34">Sit epsum</a></li></ul></li><li data-match-height="cat-ul-gen" class="submenu col-inner">
<a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index&amp;cPath=2">Home & Garden</a><ul class="level3"><li>
<a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index&amp;cPath=2_35">Doloriicus</a></li><li>
<a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index&amp;cPath=2_36">Vivamus</a></li><li>
<a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index&amp;cPath=2_37">Nullam</a></li><li>
<a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index&amp;cPath=2_38">Vivamus fauci</a></li></ul></li><li data-match-height="cat-ul-gen" class="submenu col-inner">
<a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index&amp;cPath=3">Kitchen</a><ul class="level3"><li>
<a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index&amp;cPath=3_39">Cursus nisi et</a></li><li>
<a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index&amp;cPath=3_40">Vivamus congue</a></li><li>
<a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index&amp;cPath=3_41">Dapibus elit</a></li></ul></li><li data-match-height="cat-ul-gen" class="submenu col-inner">
<a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index&amp;cPath=4">Repair Parts</a><ul class="level3"><li>
<a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index&amp;cPath=4_42">Quisque condi</a></li><li>
<a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index&amp;cPath=4_43">Lorem eget su</a></li><li>
<a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index&amp;cPath=4_44">Nullam eget</a></li></ul></li><li data-match-height="cat-ul-gen" class="submenu col-inner">
<a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index&amp;cPath=5">Tools</a><ul class="level3"><li>
<a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index&amp;cPath=5_45">Facilisis pur</a></li><li>
<a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index&amp;cPath=5_46">Finibus mi</a></li></ul></li><li>
<a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index&amp;cPath=6">Water Heaters</a></li><li>
<a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index&amp;cPath=7">Supplies</a></li><li>
<a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index&amp;cPath=8">Sinks</a></li><li>
<a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index&amp;cPath=9">Water Taps</a></li><li>
<a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index&amp;cPath=10">Accessories</a></li></ul>                        
          </div>
                
               <div class="clearfix"></div>
               <div class="categories-banners">
         <div class="item_1"><a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=redirect&amp;action=banner&amp;goto=1"><img src="../images/cat_banner_1.jpg" class="img-responsive" alt="Water taps" title=" Water taps " width="1170" height="450" /><div class="title"><span>Water taps</span></div></a>
      </div><div class="item_2"><a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=redirect&amp;action=banner&amp;goto=2"><img src="../images/cat_banner_2.jpg" class="img-responsive" alt="Sinks" title=" Sinks " width="1170" height="450" /><div class="title"><span>Sinks</span></div></a>
      </div><div class="item_3"><a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=redirect&amp;action=banner&amp;goto=3"><img src="../images/cat_banner_3.jpg" class="img-responsive" alt="Bathrooms" title=" Bathrooms " width="1170" height="450" /><div class="title"><span>Bathrooms</span></div></a>
      </div>              </div>
                 
               </div>
        </li><!-- eof categories  -->
                  <li class="specials_p"><a class="drop">Services<span class="label">Sale!</span></a>
    <!-- bof specials -->
        
            <div class="dropdown col-9">
                                <div class="special_text"><p>Notre sociétée possède un patrimoine de talents, que nous mettons à votre disposition afin d’apporter des solutions rapides et efficaces à toutes vos problématiques. Nous comprenons vos demandes en définissons vos priorités  . </p></div>
                                <div class="list_carousel responsive">
                    <ul id="fcarousel">
                                                                    <li class="col-products">
                                        <div class="product-col">
                                                <div class="img">
                                                    <a href="clim.php"><img src="../../images/clim.jpg" class="img-responsive" title="répartion et entretien des chauffages et climatiseurs " width="200" height="200" /></a>
                                                </div>
                                                <div class="sale-label">Sale</div>
                                            <div class="prod-info">
                                                <h5><a class="product-name name" href="#">Le service Climatisation est basé sur la répartion...</a></h5>
                                                <div class="text">
                                                    The supplies we sell in our store are of premium q...                                                </div>
                                                <div class="price">
                                                  <strong>&nbsp;<span class="productSpecialPrice">$100</span><span class="normalprice">$120.00 </span><span class="productPriceDiscount">-20%</span></strong>                                                </div>
                                            </div>
                                          </div>
                                        </li>
                                                                                <li class="col-products">
                                        <div class="product-col">
                                                <div class="img">
                                                    <a href="electricity.php"><img src="../../images/elect.jpg" class="img-responsive" title="la réparation de tous ce qui éléctrique est selon vos demandes" width="200" height="200" /></a>
                                                    </div>
                                                <div class="sale-label">Sale</div>
                                            <div class="prod-info">
                                                <h5><a class="product-name name" href="#">la réparation de tous ce qui éléctrique est...</a></h5>
                                                <div class="text">
                                                    The supplies we sell in our store are of premium q...                                                </div>
                                                <div class="price">
                                                  <strong>&nbsp;<span class="productSpecialPrice">$105</span><span class="normalprice">$120.00 </span><span class="productPriceDiscount">-15%</span></strong>                                                </div>
                                            </div>
                                          </div>
                                        </li>
                                                                                <li class="col-products">
                                        <div class="product-col">
                                                <div class="img">
                                                    <a href="peint.php"><img src="../../images/peint.jpg" class="img-responsive" title="la peinture est selon votre espaces " width="200" height="200" /></a>
                                                  </div>
                                                <div class="sale-label">Sale</div>
                                            <div class="prod-info">
                                                <h5><a class="product-name name" href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=product_info&amp;cPath=&amp;products_id=13">mentionnez votre espaces , nous avons tous les couleurs...</a></h5>
                                                <div class="text">
                                                    The supplies we sell in our store are of premium q...                                                </div>
                                                <div class="price">
                                                  <strong>&nbsp;<span class="productSpecialPrice">$100</span><span class="normalprice">$120 </span><span class="productPriceDiscount">-15%</span></strong>                                                </div>
                                            </div>
                                          </div>
                                        </li>
                                                                                <li class="col-products">
                                        <div class="product-col">
                                                <div class="img">
                                                    <a href="plomb.php"><img src="../../images/plomb.jpg" class="img-responsive" title="le service plomberie est ..." width="200" height="200" /></a>                                                </div>
                                                <div class="sale-label">Sale</div>
                                            <div class="prod-info">
                                                <h5><a class="#">le service plomberie est selon vos deamndes ...</a></h5>
                                                <div class="text">
                                                    The supplies we sell in our store are of premium q...                                                </div>
                                                <div class="price">
                                                  <strong>&nbsp;<span class="productSpecialPrice">$100</span><span class="normalprice">$120 </span><span class="productPriceDiscount">-25%</span></strong>                                                </div>
                                            </div>
                                          </div>
                                        </li>
                                                                                <li class="col-products">
                                        <div class="product-col">
                                                <div class="img">
                                                    <a href="resto.php"><img src="../../images/resto.jpg" class="img-responsive" title="le service restauration est une réparation de tous les matériaux de la cuisine" width="200" height="200" /></a>                                                </div>
                                               
                                            <div class="prod-info">
                                                <h5><a class="product-name name" href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=product_info&amp;cPath=&amp;products_id=15">nous réparons les fours,les frigidaires...</a></h5>
                                                <div class="text">
                                                    The supplies we sell in our store are of premium q...                                                </div>
                                                <div class="price">
                                                  <strong>&nbsp;<span class="productSpecialPrice">$100</span><span class="normalprice">$120 </span><span class="productPriceDiscount">-30%</span></strong>                                                </div>
                                            </div>
                                          </div>
                                        </li>
                                                                                <li class="col-products">
                                        <div class="product-col">
                                                <div class="img">
                                                    <a href="#"><img src="../../images/autres.png" class="img-responsive" title="avez-vous d'autres demandes ou propositions?"  width="200" height="200" /></a>  
                                                </div>
                                                <div class="sale-label">Sale</div>
                                            <div class="prod-info">
                                                <h5><a class="product-name name" href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=product_info&amp;cPath=&amp;products_id=16">Nous sommes à votre disposition pour des spéciales demandes...</a></h5>
                                                <div class="text">
                                                    The supplies we sell in our store are of premium q...                                                </div>
                                                <div class="price">
                                                  <strong>&nbsp;<span class="productSpecialPrice">$5</span><span class="normalprice">$50 </span><span class="productPriceDiscount">-50%</span></strong>                                                </div>
                                            </div>
                                          </div>
                                        </li>
                                                            </ul>
                                                            <!--HOUNI EL MENU LEZMOU YETAAWED-->
        <a id="prev2" class="prev" href="#">&lt;</a>
        <a id="next2" class="next" href="#">&gt;</a>
                 </div> 
                 
            </div><!-- eof specials -->

   </li>
          
       <li class="quicklinks-li"><a class="drop">Quick Links</a><span class="label"></span><!-- bof quick links  -->
             <div class="dropdown col-2 ">
                <div class="firstcolumn">
                                <nav> 
  <ul class="ez-menu">
      
                <li class="  first">  
                    <a href="#">
                        <span>New Products</span>   
                    </a>  
                </li>  
              
                <li class="  ">  
                    <a href="#">
                        <span>Specials</span>   
                    </a>  
                </li>  
              
                <li class="  ">  
                    <a href="#">
                        <span>Reviews</span>   
                    </a>  
                </li>  
              
                <li class="  ">  
                    <a href="#">
                        <span>Contacts</span>   
                    </a>  
                </li>  
              
                <li class=" last ">  
                    <a href="#">
                        <span>FAQs</span>   
                    </a>  
                </li>  
              
  </ul>
</nav>

                                    </div>
               </div>
        </li>
        <!-- eof quick links -->
         
      <li class="manufacturers-li"><a class="drop">Manufacturers<span class="label"></span></a><!--bof shop by brand   -->
            <div class="dropdown col-3">
                <div class="firstcolumn">

              <ul >
               <li ><a href="#"><img src="../images/manufacturers/logo_bosch.png" class="img-responsive" alt="Bosch" title=" Bosch " width="1024" height="242" /></a></li>
<li ><a href="#" class="img-responsive" alt="Gerber" title=" Gerber " width="724" height="724" /></a></li>
<li ><a href="#" class="img-responsive" alt="Viessmann" title=" Viessmann " width="3390" height="1129" /></a></li>
        </ul>
            
    </div>
            </div>
        </li><!-- eof shop by brand    -->
                
      
        <li class="information-li"><a class="drop">Info<span class="label"></span></a><!-- bof information -->
 
      <div class="dropdown col-3">
        

                  <h3>General Info</h3>
                    <ul>
                                    <li><a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=site_map">Site Map</a></li>
                                                      <li><a href="#">Gift Certificate FAQ</a></li>
                                                      <li><a href="#">Discount Coupons</a></li>
                                                      <li><a href="#">Newsletter Unsubscribe</a></li>
                                       </ul>   
          <div class="clearfix"></div>
                     <h3 class="second">Customers</h3>
                     <ul>
                        <li><a href="#">Log In</a></li>
                  <li><a href="#">Create Account</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                          <li><a href="#">Shipping &amp; Returns</a></li>
                                                                  <li><a href="#">Privacy Notice</a></li>
                                                                  <li><a href="#">Conditions of Use</a></li>
                                             </ul>   

           </div>

    </li>
    <!-- eof information -->
       
      <li class="customer_service"><a class="drop">Shipping &amp; Returns<span class="label"></span></a><!-- bof customer service -->
        
            <div class="dropdown col-5">
           
                <div class="col_cs">
                    <h3>Shipping</h3>
                </div>

                <div class="col_cs">
               <p>Ahki aal shipping wech</p>             
                </div>
       
                <div class="col_cs">
                      <h3>Delivery</h3>
        </div>
        <div class="col_cs">
               <p>ahki aal delivery wesh </p>             
                </div>      
            </div><!-- eof customer service -->

   </li>
      
    </ul>
    <!-- eof mega-menu!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->

</div><!-- eof mega-wrapper -->
 
                                <!--eof-mega menu display--> 
                                <div class="clearBoth"></div> 
                            </div>
                                                    </div>
                    </div>
              </div>
        </div>
    </header>
    

       




    <!-- ========== CATEGORIES TABS ========= -->
            <!-- ==================================== -->
                
    
    <!-- ============================ -->

        <section class="ie9_all">
          <div class="container">
      <div class="row">
        <div class="col-xs-12">
                      <div id="navBreadCrumb" class="breadcrumb">  <a class="home" href="http://livedemo00.template-help.com/zencart_55417/"></a>
 <span> The Shopping Cart</span>
</div>
                  </div>
      <div class="main-col 
      
       left_column      col-sm-12 ">

         <div class="row">

        <div class="center_column col-xs-12
                col-sm-12 with_col ">
          <div class="centerColumn" id="shoppingCartDefault">

<div class="heading"><h1>Your Shopping Cart Contents</h1>

 
                

                       
         <br>
            <br>
               <br>
                  <br>
                     <br>
                        <br>
                           <br>
                              <br>
                                 <br>
                                    <br>
                                       <br>
                                          <br>
                                             <br>
                                                <br>
                                                   <br>
                                                      <br>
                                                         <br>
                                                            
                                                                  <br>

                  <script type="text/javascript">
    function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";

   else
      champ.style.backgroundColor = "";
}


function verifnom(champ)
{
     var age = parseInt(champ.value);
   if(isNaN(age) || age < 1 || age > 10)
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
   var pseudoOk = verifnom(f.note)

   
   if(pseudoOk)
      return true;
   else
   {
      alert("Veuillez remplir correctement tous les champs");
      return false;
   }
}
</script>
                          
                                     
</html>
