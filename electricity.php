<?php
  include "../entities/services.php";
include "../core/serviceCore.php";
include "../entities/Panier.php";
include "../core/PanierCore.php";
include "../../config.php";
$pan=new PanierCore();
$listePanier=$pan->afficherPanier();
$cPanier = $pan->countPanier();

$ClimR=new ServCore();
$listeClima=$ClimR->afficherElectricity();
?>


<!doctype html>
<html>
<head>
<title>STMG </title>
<meta charset="utf-8">

<link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="../../lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="../../lib/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="../../lib/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="../../lib/advanced-datatable/css/DT_bootstrap.css" />

<link rel="stylesheet" type="text/css" href="../../css/stylesheet_bootstrap.css" />
<link rel="stylesheet" type="text/css" href="../../css/stylesheet_bootstrap_theme.css" />
<link rel="stylesheet" type="text/css" href="../../css/stylesheet_categories.css" />
<link rel="stylesheet" type="text/css" href="../../css/stylesheet_custom.css" />
<link rel="stylesheet" type="text/css" href="../../css/stylesheet_font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="../../css/stylesheet_lightbox-0.5.css" />
<link rel="stylesheet" type="text/css" href="../../css/stylesheet_mega_menu.css" />
<link rel="stylesheet" type="text/css" href="../../css/stylesheet_product_list.css" />
<link rel="stylesheet" type="text/css" href="../../css/stylesheet_responsive.css" />
<link rel="stylesheet" type="text/css" href="../../css/stylesheet_suggestionbox.css" />
<link rel="stylesheet" type="text/css" href="../../css/index_home.css" />
<script type="text/javascript" src="../../jscript/jscript_jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="../../jscript/jscript_jquery.carouFredSel-6.2.1-packed.js"></script>
<script type="text/javascript" src="../../jscript/jscript_jquery.elevateZoom-3.0.8.min.js"></script>
<script type="text/javascript" src="../../jscript/jscript_jquery.equalheights.js"></script>
<script type="text/javascript" src="../../jscript/jscript_jquery.matchHeight.js"></script>
<script type="text/javascript" src="../../jscript/jscript_jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="../../jscript/jscript_jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="../../jscript/jscript_jquery.simplr.smoothscroll.min.js"></script>
<script type="text/javascript" src="../../jscript/jscript_jquery.touchSwipe.min.js"></script>
<script type="text/javascript" src="../../jscript/jscript_jquery.ui.totop.js"></script>
<script type="text/javascript" src="../../jscript/jscript_menu_top.js"></script>
<script type="text/javascript" src="../../jscript/jscript_script_bootstrap.js"></script>
<script type="text/javascript" src="../../jscript/jscript_stotal-storage.min.js"></script>
<script type="text/javascript" src="../../jscript/jscript_suggestionbox.js"></script>
<script type="text/javascript" src="../../jscript/jscript_top.js"></script>
<script type="text/javascript" src="../../jscript/jscript_xeasyTooltip.js"></script>
<script type="text/javascript" src="../../jscript/jscript_xjquery.easing.1.3.js"></script>
<script type="text/javascript" src="../../jscript/jscript_xjquery.jqtransform.js"></script>
<script type="text/javascript" src="../../jscript/jscript_xjquery.lightbox-0.5.js"></script>
<script type="text/javascript" src="../../jscript/jscript_xjscript_script.app.js"></script>
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
                            <p>(00216) 98963635</p>
                            <span>Horaires d'ouverture : 9h-17h</span>
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
                                <a href="http://localhost/views/mainpage.php"><img src="http://localhost/views/logostmg.png"  alt="" /></a>
                            <!-- ========================== -->
                        </div>
                        <div class="col-xs-12 col-sm-9 col-md-9">
                            <div class="header_cust_block clearfix">
                                <p>Livraison gratuite</p>
                                <div>
                                    <span>Pour tout achat supérieur à 99 dt</span>
                                    <span>Offre valable sur tout le site</span>
                                </div>
                            </div>
                            <div class="shopping_cart" id="shopping_cart">
                                <!-- ========== SHOPPING CART ========== -->
                                                                <div class="shop-box-wrap">
                                  <span class="cart_title" >Panier</span><span class="st3"> <?php echo $cPanier ?> </span>                                </div>
                                <div class="shopping_cart_content" id="shopping_cart_content" >
                                    <ul class="cart-down"><li class="cart_item">
                       
                       <div class="shop-box-wrap">
                                   

                              
                                   
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
                            </div>
                       
                            </div>
                            <!-- =================================== -->    
                             <div id="search_block" class="clearfix">
                                <!-- ========== SEARCH ========== -->
                                <form name="quick_find_header" action="../../http://livedemo00.template-help.com/zencart_55417/index.php?main_page=advanced_search_result" method="get" class="form-inline form-search pull-right">
                                        <input type="hidden" name="main_page" value="advanced_search_result" /><input type="hidden" name="search_in_description" value="1" />                                        <label class="sr-only" for="searchInput">Rechercher</label>
                                        <input class="form-control" id="searchInput" type="text" name="keyword" />
                                        <button type="submit" class="button-search"><i class="fa fa-search"></i><b>Rechercher</b></button>
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
         
        <li class="categories-li"><a class="drop">Catégories<span class="label">Nouveau !</span></a><!-- bof cateories    -->
     
            <div class="dropdown col-9">
<div class="levels">
            <ul class="level2"><li data-match-height="cat-ul-gen" class="submenu col-inner">
<a href="http://localhost/views/salledebain.php">Salle de bain</a><ul class="level3"><li>
<a href="http://localhost/views/accessoiresSB.php">Accessoires de salle de bain</a></li><li>
<a href="http://localhost/views/baignoire.php">Baignoires</a></li><li>

<a href="http://localhost/views/robinets.php">Robinetterie et Lavabo</a></li></ul></li><li data-match-height="cat-ul-gen" class="submenu col-inner">
<a href="http://localhost/views/MaisonetJardin.php">Maison et Jardin</a><ul class="level3"><li>
<a href="http://localhost/views/tuyaux.php">Tuyaux et Echangeurs</a></li><li>
</li><li>
</li></ul></li><li data-match-height="cat-ul-gen" class="submenu col-inner">
<a href="http://localhost/views/cuisine.php">Cuisine</a><ul class="level3"><li>
</li><li>
</li><li></ul>                        
          </div>
                
               <div class="clearfix"></div>
               <div class="categories-banners">
                 <div class="item_1"><a href="http://localhost/views/MaisonetJardin.php"><img src="../../images/cat_banner_1.jpg" class="img-responsive" alt="Water taps" title=" Water taps " width="1170" height="450" /><div class="title"><span>Maison et Jardin</span></div></a>
          </div><div class="item_2"><a href="http://localhost/views/cuisine.php"><img src="../../images/cat_banner_2.jpg" class="img-responsive" alt="Sinks" title=" Sinks " width="1170" height="450" /><div class="title"><span>Cuisine</span></div></a>
          </div><div class="item_3"><a "><img src="../../images/cat_banner_3.jpg" class="img-responsive" alt="Bathrooms" title=" Bathrooms " width="1170" height="450" /><div class="title"><span>Réparation</span></div></a>
          </div>              </div>
                 
               </div>
        </li><!-- eof categories  -->
                    <li class="specials_p"><a class="drop">A la une<span class="label">Promo !</span></a>
    <!-- bof specials -->
        
            <div class="dropdown col-9">
                                    <div class="special_text"><p>Profitez des offres du moment et recevez des points de fidélité sur votre carte .  Offres valables dans la limite des stocks disponibles ! </p></div>
                                <div class="list_carousel responsive">
                    <ul id="fcarousel">
                                                                    <li class="col-products">
                                        <div class="product-col">
                                                <div class="img">
                                                    <a href="http://localhost/views/produit1.php"><img src="../../images/11.png" class="img-responsive" alt="Vigo Single Hole Waterfall Bathroom Faucet Less Handles - VG0300" title=" Robinet style moderne Cuisine et Salle de bain" width="200" height="200" /></a>                                                </div>
                                                <div class="sale-label">Promo</div>
                                            <div class="prod-info">
                                                <h5><a class="product-name name" href="http://localhost/views/produit1.php">Robinet style moderne Cuisine et Salle de bain</a></h5>
                                                <div class="text">
                                                    The supplies we sell in our store are of premium q...                                                </div>
                                                <div class="price">
                                                    <strong>&nbsp;<span class="productSpecialPrice">71.00 DT</span><span class="normalprice">89 DT </span><span class="productPriceDiscount">-20%</span></strong>                                                </div>
                                            </div>
                                          </div>
                                        </li>
                                                                                <li class="col-products">
                                        <div class="product-col">
                                                <div class="img">
                                                    <a href="http://localhost/views/produit2.php"><img src="../../images/12.png" class="img-responsive" alt="Vigo Tempered Glass Bathroom Sink - VG07505" title=" Lavabo en céramique Bronze style carthage " width="200" height="200" /></a>                                                </div>
                                                <div class="sale-label">Promo</div>
                                            <div class="prod-info">
                                                <h5><a class="http://localhost/views/produit2.php">Lavabo en céramique Bronze style carthage</a></h5>
                                                <div class="text">
                                                    The supplies we sell in our store are of premium q...                                                </div>
                                                <div class="price">
                                                    <strong>&nbsp;<span class="productSpecialPrice">90 DT</span><span class="normalprice">124.00 DT </span><span class="productPriceDiscount">-15%</span></strong>                                                </div>
                                            </div>
                                          </div>
                                        </li>
                                                                                <li class="col-products">
                                        <div class="product-col">
                                                <div class="img">
                                                    <a ><img src="../../images/13.png" class="img-responsive" alt="Vigo Two Handle Widespread Pull-Out Spray Bar Faucet with Soap D" title=" Echangeur double fonction Cuisine et Jardin" width="200" height="200" /></a>                                                </div>
                                                <div class="sale-label">Promo</div>
                                            <div class="prod-info">
                                                <h5><a class="product-name name" >Echangeur double fonction Cuisine et Jardin</a></h5>
                                                <div class="text">
                                                    The supplies we sell in our store are of premium q...                                                </div>
                                                <div class="price">
                                                    <strong>&nbsp;<span class="productSpecialPrice">105 DT</span><span class="normalprice">122.5 DT </span><span class="productPriceDiscount">-15%</span></strong>                                                </div>
                                            </div>
                                          </div>
                                        </li>
                                                                                <li class="col-products">
                                        <div class="product-col">
                                                <div class="img">
                                                    <a ><img src="../../images/14.png" class="img-responsive" alt="Waterstone Traditional Deck Mount One Handle Single Hole Pot Fil" title=" Echangeur traditionnel en Inox à une poignée" width="200" height="200" /></a>                                                </div>
                                                <div class="sale-label">Promo</div>
                                            <div class="prod-info">
                                                <h5><a class="product-name name" >Echangeur traditionnel en Inox à une poignée</a></h5>
                                                <div class="text">
                                                    The supplies we sell in our store are of premium q...                                                </div>
                                                <div class="price">
                                                    <strong>&nbsp;<span class="productSpecialPrice">45.50 DT</span><span class="normalprice">70 DT </span><span class="productPriceDiscount">-25%</span></strong>                                                </div>
                                            </div>
                                          </div>
                                        </li>
                                                                                <li class="col-products">
                                        <div class="product-col">
                                                <div class="img">
                                                    <a href="http://localhost/views/produit3.php"><img src="../../images/15.png" class="img-responsive" alt="Watts 1-in x 1-ft Reinforced PVC Reinforced Braided Vinyl Tubing" title=" Tuyau Jardin 70 mètres Résistant" width="200" height="200" /></a>                                                </div>
                                                <div class="sale-label">Promo</div>
                                            <div class="prod-info">
                                                <h5><a class="product-name name" href="http://localhost/views/produit3.php">Tuyau Jardin 70 mètres Résistant</a></h5>
                                                <div class="text">
                                                    The supplies we sell in our store are of premium q...                                                </div>
                                                <div class="price">
                                                    <strong>&nbsp;<span class="productSpecialPrice">19.99 DT</span><span class="normalprice">30 DT </span><span class="productPriceDiscount">-30%</span></strong>                                                </div>
                                            </div>
                                          </div>
                                        </li>
                                                                                <li class="col-products">
                                        <div class="product-col">
                                                <div class="img">
                                                    <a ><img src="../../images/16.png" class="img-responsive" alt="Whirlpool 40 Gallons 6-Year Regular Electric Water Heater" title=" Chauffe-eau électrique 40W en inox" width="200" height="200" /></a>                                                </div>
                                                <div class="sale-label">Promo</div>
                                            <div class="prod-info">
                                                <h5><a class="product-name name" >Chauffe-eau électrique 40W en inox</a></h5>
                                                <div class="text">
                                                    The supplies we sell in our store are of premium q...                                                </div>
                                                <div class="price">
                                                    <strong>&nbsp;<span class="productSpecialPrice">199 DT</span><span class="normalprice">250 DT </span><span class="productPriceDiscount">-50%</span></strong>                                                </div>
                                            </div>
                                          </div>
                                        </li>
                                                            </ul>
                <a id="prev2" class="prev" href="#">&lt;</a>
                <a id="next2" class="next" href="#">&gt;</a>
                 </div> 
                 
            </div><!-- eof specials -->

     </li>
            <li class="specials_p"><a class="drop">Services<span class="label">Meilleur!</span></a>
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
                                                <div class="sale-label">Meilleur</div>
                                            <div class="prod-info">
                                                <h5><a class="product-name name" href="clim.php">Le service Climatisation est basé sur la répartion...</a></h5>
                                                <div class="text">
                                                    The supplies we sell in our store are of premium q...                                                </div>
                                                <div class="price">
                                                  <strong>&nbsp;<span class="productSpecialPrice">100-300 dt</span></strong>                                                </div>
                                            </div>
                                          </div>
                                        </li>
                                                                                <li class="col-products">
                                        <div class="product-col">
                                                <div class="img">
                                                    <a href="electricity.php"><img src="../../images/elect.jpg" class="img-responsive" title="la réparation de tous ce qui éléctrique est selon vos demandes" width="200" height="200" /></a>
                                                    </div>
                                                <div class="sale-label">Meilleur</div>
                                            <div class="prod-info">
                                                <h5><a class="product-name name" href="electricity.php">la réparation de tous ce qui éléctrique est...</a></h5>
                                               
                                                <div class="price">
                                                  <strong>&nbsp;<span class="productSpecialPrice">100-200 dt </span></strong>                                                </div>
                                            </div>
                                          </div>
                                        </li>
                                                                                <li class="col-products">
                                        <div class="product-col">
                                                <div class="img">
                                                    <a href="peint.php"><img src="../../images/peint.jpg" class="img-responsive" title="la peinture est selon votre espaces " width="200" height="200" /></a>
                                                  </div>
                                                <div class="sale-label">Meilleur</div>
                                            <div class="prod-info">
                                                <h5><a class="product-name name" href="peint.php">mentionnez votre espaces , nous avons tous les couleurs...</a></h5>
                                               
                                                <div class="price">
                                                  <strong>&nbsp;<span class="productSpecialPrice">300-3000 dt</span></strong>                                                </div>
                                            </div>
                                          </div>
                                        </li>
                                                                                <li class="col-products">
                                        <div class="product-col">
                                                <div class="img">
                                                    <a href="plomb.php"><img src="../../images/plomb.jpg" class="img-responsive" title="le service plomberie est ..." width="200" height="200" /></a>                                                </div>
                                                <div class="sale-label">Meilleur</div>
                                            <div class="prod-info">
                                                <h5><a href="plomb.php">le service plomberie est selon vos demandes ...</a></h5>
                                                
                                                <div class="price">
                                                  <strong>&nbsp;<span class="productSpecialPrice">50-200dt</span></strong>                                                </div>
                                            </div>
                                          </div>
                                        </li>
                                                                                <li class="col-products">
                                        <div class="product-col">
                                                <div class="img">
                                                    <a href="resto.php"><img src="../../images/resto.jpg" class="img-responsive" title="le service restauration est une réparation de tous les matériaux de la cuisine" width="200" height="200" /></a>                                                </div>
                                                <div class="sale-label">Meilleur</div>
                                            <div class="prod-info">
                                                <h5><a class="product-name name" href="resto.php">nous réparons les fours,les frigidaires...</a></h5>
                                               
                                                <div class="price">
                                                  <strong>&nbsp;<span class="productSpecialPrice">100-500dt</span></strong>                                                </div>
                                            </div>

                                          </div>

                                        </li>
                                          <div> <strong><a href="ID.php">Suivez le déroulement de votre Service</a></strong></div>
                                                            </ul>
       <li class="quicklinks-li"><a class="drop">Liens Rapides</a><span class="label"></span><!-- bof quick links  -->
             <div class="dropdown col-2 ">
                <div class="firstcolumn">
                                            <nav> 
  <ul class="ez-menu">
      
                <li class="  first">  
                    <a href="http://localhost/views/touslesP1.php">
                        <span>Tous les produits</span>   
                    </a>  
                </li>  
              
                <li class="  ">  
                    <a href="http://localhost/views/alaune.php">
                        <span>A la une</span>   
                    </a>  
                </li>  
              
                  
              
                <li class="  ">  
                    <a href="http://localhost/views/contacts.php">
                        <span>Nous contacter</span>   
                    </a>  
                </li>  
              
                <li class=" last ">  
                    <a href="http://localhost/views/faq.php">
                        <span>FAQ</span>   
                    </a>  
                </li>  
              
  </ul>
</nav>

                                    </div>
               </div>
        </li><!-- eof quick links -->
                 
        <li class="manufacturers-li"><a class="drop">Les Equipementiers<span class="label"></span></a><!--bof shop by brand   -->
            <div class="dropdown col-3">
                <div class="firstcolumn">

              <ul >
                 
                       
                
                
               <li ><a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index&amp;manufacturers_id=3"><img src="../../images/manufacturers/logo_bosch.png" class="img-responsive" alt="Bosch" title=" Bosch " width="1024" height="242" /></a></li>
<li ><a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index&amp;manufacturers_id=1"><img src="../../images/manufacturers/logo_gerber.png" class="img-responsive" alt="Gerber" title=" Gerber " width="724" height="724" /></a></li>
<li ><a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index&amp;manufacturers_id=2"><img src="../../images/manufacturers/logo_viessmann.png" class="img-responsive" alt="Viessmann" title=" Viessmann " width="3390" height="1129" /></a></li>
            </ul>
            
        </div>
            </div>
        </li><!-- eof shop by brand    -->
                
            
        <li class="information-li"><a class="drop">Infos<span class="label"></span></a><!-- bof information -->
 
        <div class="dropdown col-3">
        

                    <h3>En Général</h3>
                    <ul>
                                        <li><a href="http://localhost/views/architecture.php">Architecture du site</a></li>
                                                            <li><a href="http://localhost/views/faq.php">FAQ</a></li>
                                                            <li><a href="http://localhost/views/coupon.php">Utiliser un code</a></li>
                                                            <li><a href="http://localhost/views/nl.php">Se désabonner de la Newsletter</a></li>
                                         </ul>   
                    <div class="clearfix"></div>
                     <h3 class="second">Client</h3>
                     <ul>
                                <li><a >Se connecter</a></li>
                    <li><a>Créer un compte</a></li>
                                            <li><a >Nous contacter</a></li>
                                            <li><a>Livraison &amp; Réclamation</a></li>
                                                                    <li><a >Asisstance confidentialité</a></li>
                                                                    <li><a >Conditions d'utilisation</a></li>
                                             </ul>   

           </div>

    </li><!-- eof information -->
         
        <li class="customer_service"><a class="drop">Livraison &amp; Réclamation<span class="label"></span></a><!-- bof customer service -->
        
            <div class="dropdown col-5">
           
                <div class="col_cs">
                    <h3>Livraison</h3>
                </div>

                <div class="col_cs">
                 <p>Après confirmation de commande, la Société s’engage à livrer à son transporteur toutes les références commandées par l’acheteur et ce dans les délais les plus courts. Ce transporteur s’engage, par contrat avec la Société, à livrer la commande à l’adresse de livraison renseignée par le Client, et fournie au transporteur par la Société </p>             
                </div>
       
                <div class="col_cs">
                      <h3>Réclamation</h3>
                </div>
                <div class="col_cs">
                 <p>Il appartient au Client de vérifier le contenu du colis au moment de la livraison et de formuler les réserves, le cas échéant, sur le bordereau de livraison en présence du transporteur. Ces réserves devront être adressées à la Société, dans un délai de 2 jours ouvrés à compter du lendemain de la date de livraison du colis, à défaut de quoi le droit à la réclamation cessera d’être acquis :

par email à info@incept-sport.fr
ou par fax au 01 46 49 10 81 </p>             
                </div>      
            </div><!-- eof customer service -->

     </li>
        
    </ul><!-- eof mega-menu -->

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

              <div class="slider"> 
          <!-- begin edit for ZX Slideshow -->
                    <script>
jQuery(window).load(function() {
        jQuery('#slider').nivoSlider({
            effect: 'fold',
            animSpeed: 500,
            pauseTime: 4000,
            directionNav: true,
            directionNavHide: true,
            controlNav: false,
            pauseOnHover: true,
            captionOpacity: 0.8         });
    });

</script>


    </div> 
               





  <!-- ========== CATEGORIES TABS ========= -->
      <!-- ==================================== -->
                
    
    <!-- ============================ -->

        <section class="ie9_all">
          <div class="container">
      <div class="row">
        <div class="col-xs-12">
                      <div class="col-xs-12">
                    
                        <br>
                        <br>
                        <br>
                        <br>
                          <div id="navBreadCrumb" class="breadcrumb">  <a class="home" href="../../index.php"></a>
 <span>Service Electricity</span>
</div>
                  </div>
      <div class="main-col 
    
     left_column      ">

     <div class="row">

        <div class="center_column col-xs-12
        col-sm-12 ">
          
<div class="centerColumn" id="productGeneral">
    <div class="wrapper bot-border"> 
    <!--bof Prev/Next bottom position -->
      </div>
  <div class="tie">
    <div class="tie-indent">
      <div class="page-content"> 
      <!--bof Form start--> 

 
        <!--eof Form start-->
          
                  
        <!--bof Category Icon -->
          
                  
        
      <div class="row">
        <div class="main-image col-xs-12 col-sm-6">
          <div id="fb-root"></div>
          <!--bof Main Product Image -->
                     


<div id="productMainImage" class="pull-left image-block">
  <span class="image"><a href="#">
  <img src="../../images/elect.jpg" class="img-responsive"  width="200" height="200" />  <span class="zoom"></span></a></span>
  
</div>                      
          <!--eof Main Product Image--> 
          <!--bof Additional Product Images -->
                              <ul id="productAdditionalImages">
            
    

   
 
          </ul>
              <!--eof Additional Product Images -->
         

   <div class="video_desc">
            <div class="row">
            <!--bof  -->
                
            <!--eof YouTube -->
            <!--bof Product description -->
                        <div id="productDescription" class="description biggerText col-sm-12 col-xs-12 col-sm-12 ">STMG vous présente toujours les précédentes services qu'elle a offert à ses chers clients.Notre objectif est votre satisfaction</div>
                        <!--eof Product description --> 
            </div>
       </div>
    </div>
          <div class="pb-center-column col-xs-12 col-sm-6"> 
            <!--bof free ship icon  -->
                        <!--eof free ship icon  -->
            <h2 class="title_product">Notre service éléctricitée</h2>
           
            <!--bof Product description -->
                        <div id="shortDescription" class="description">Pour toute installation électrique de courant faible ou fort, nous vous assurons un travail soigné, dans le respect des normes de sécurité.

Equipés pour faire face à toutes les demandes, nous intervenons aussi bien chez le particulier que le professionnel sur l'ensemble de la région.</div>
                        <!--eof Product description -->
            <!--bof Product details list  -->
                  <ul class="instock">
              <li><strong>Horaire du travail </strong>de 8h à 18h</li>
 <li><strong>responsable </strong>Ali</li>
            </ul>
                        <!--eof Product details list  --> 
           
            <div class="wrapper atrib2"> 
              <!--bof Attributes Module -->
                <form  name="FormulaireElectricity" method="POST" action="addElect.php" onsubmit="return verifForm(this)" >
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                                            <div id="productAttributes">

<div class="wrapperAttribsOptions">
<h4 class="optionName back">Nom de votre Société</h4>
<input type="text" name="nom" onblur="verifdet(this)>
</div>

<div class="wrapperAttribsOptions">
<h4 class="optionName back"><label class="attribsSelect" for="attrib-2">Lieu</label></h4>

<select name="lieu"class="form-control">
  <option name="lieu">Select from below ...</option>
  <option name="lieu">Grand Tunis</option>
  <option name="lieu">autre</option>
</select>

</div>

<div class="wrapperAttribsOptions">
<h4 class="optionName back">Type de votre demande</h4>

<select name="demande" class="form-control">
      <option  value="37">Select from below ...</option>
  <option name="demande" value="Installation">Installation</option>
  <option name="demande" value="Panne">Panne</option>
  <option name="demande" value="autre">autre</option>
</select>


<h4 class="optionName back" Plus de détai²ls à propos votre demande:></h4>

    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    

<textarea name="details"  row="4" cols="40"  onblur="verifdet(this)" ></textarea>
<input type="hidden" name="secteur" value="electricitée">
<input type="hidden" name="type" value="electricity">


</div>

</div>                                   

</div>                                            <!--eof Attributes Module --> 
              
           
             <div class="add_to_cart_block"> 
              <!--bof Add to Cart Box -->
                                <div id="button_product">
                <input type="text" class="form-control" name="prix" value="30.40" readonly=""></input>
                              
            </div>                       
            
                                          <!--eof Add to Cart Box--> 
            </div>
            </div>
              
            <div id="button_product">
                <div class="add_to_cart_row">
                  <strong class="fleft text2">
                    <input type="text" class="form-control" name="quantite" value="1" readonly="" />
                   </strong><span class="buttonRow">
                    <input type="submit" class="btn btn-success add-to-cart" value="add-to-cart">




                    </span></div> 
                    </form>
</form>
</section>
<footer>
    <div class="footer-container">
        


    <div class="container">
        <div class="row">
        <div class="footer-menu col-xs-12 col-sm-3">
            <h2 class="title_btn1">Liens Rapides</h2>
                                    
<div class="ezpagesFooterCol col1" style="width: 100%">
<ul>
  <li><a href="http://localhost/views/mainpage1.php" class="activeILPage">Home</a></li>
  <li><a href="http://localhost/views/touslesP1.php">Tous les produits</a></li>
  <li><a href="http://localhost/views/alaune.php">A la une</a></li>
  
  <li><a href="http://localhost/views/contacts.php">Nous contacter</a></li>
  <li><a href="http://localhost/views/faq.php">FAQ</a></li>
</ul>
</div>                  </div>
        <div class="account col-xs-12 col-sm-3 mb">
            <h2 class="title_btn2">Client</h2>
             <ul class="account_list">
                                <li><a >Se connecter</a></li>
                <li><a >Créer un compte</a></li>
                                                        <li><a >Livraison &amp; Réclamation</a></li>
                                                        <li><a >Assisstance confidentialité</a></li>
                                                        <li><a >Conditions d'utilisation</a></li>
                             </ul>   
        </div>
        <div class="social col-xs-12 col-sm-3 mb">
            <h2 class="title_btn3">Suivez nous</h2>
            <ul class="social_list">
                <li><a href="http://www.facebook.com">Facebook</a></li>
                <li><a href="http://www.twitter.com">Twitter</a></li>
                <li><a href="#">RSS</a></li>
            </ul>
        </div>
        <div class="contact-block col-xs-12 col-sm-3 mb">
            <h2 class="title_btn4">Nous contacter</h2>
            <div class="contact_list">
                <p>3 Rue de la Galité <br/>
Ben Arous</p>
                <div class="phone">
                    (00216) 98963635                </div>
            </div>
        </div>
                <div><!-- {%FOOTER_LINK} --></div>
                </div>
        <div class="back_to_top"><a href="#"></a></div>
    </div>    


    </div>
    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <!-- ========== COPYRIGHT ========== -->
                <p>Copyright &copy; 2019 <a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index" target="_blank">STMG</a>. Powered by <a href="https://www.facebook.com/Dead-Rabbits-411527309699011/?modal=admin_todo_tour" target="_blank">Dead Rabbits.</a> &nbsp; &nbsp; &nbsp; &nbsp;
                                </p>
            <!-- =============================== -->
          </div>
        </div>
      </div>
    </div>
  </footer>
<!-- ============================ --> 
</div>
<!-- ========================================= -->

<script type="text/javascript">
 var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-7078796-5']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();</script>
</body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script>
  





  <!-- ========== CATEGORIES TABS ========= -->
      <!-- ==================================== -->
                
    
    <!-- ============================ -->

        

</body>
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
   if(champ.value.length < 5 || champ.value.length > 25)
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

function verifdet(champ)
{
   if(champ.value.length < 5 || champ.value.length > 50)
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
   var pseudoOk = verifnom(f.nom);
   var mailOk = verifdet(f.details);

   
   if(pseudoOk && mailOk)
      return true;
   else
   {
      alert("Veuillez remplir correctement tous les champs");
      return false;
   }
}
</script>
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
   if(champ.value.length < 5 || champ.value.length > 25)
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

function verifdet(champ)
{
   if(champ.value.length < 5 || champ.value.length > 50)
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
   var pseudoOk = verifnom(f.nom);
   var mailOk = verifdet(f.details);

   
   if(pseudoOk && mailOk)
      return true;
   else
   {
      alert("Veuillez remplir correctement tous les champs");
      return false;
   }
}
</script>
</html>