<?PHP
include "C:/wamp64/www/test/core/livraisonC.php";
$livraison1C=new LivraisonC();
$listeLivraisons=$livraison1C->afficherLivraisonsback($_POST['Idclient']);

//var_dump($listeEmployes->fetchAll());
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gestion livraison</title>
    <link rel="stylesheet" type="text/css" href="css/stylesheet_bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/stylesheet_bootstrap_theme.css" />
    <link rel="stylesheet" type="text/css" href="css/stylesheet_categories.css" />
    <link rel="stylesheet" type="text/css" href="css/stylesheet_custom.css" />
    <link rel="stylesheet" type="text/css" href="css/stylesheet_font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/stylesheet_lightbox-0.5.css" />
    <link rel="stylesheet" type="text/css" href="css/stylesheet_mega_menu.css" />
    <link rel="stylesheet" type="text/css" href="css/stylesheet_product_list.css" />
    <link rel="stylesheet" type="text/css" href="css/stylesheet_responsive.css" />
    <link rel="stylesheet" type="text/css" href="css/stylesheet_suggestionbox.css" />
    <link rel="stylesheet" type="text/css" href="css/index_home.css" />
    <script type="text/javascript" src="jscript/jscript_jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="jscript/jscript_jquery.carouFredSel-6.2.1-packed.js"></script>
    <script type="text/javascript" src="jscript/jscript_jquery.elevateZoom-3.0.8.min.js"></script>
    <script type="text/javascript" src="jscript/jscript_jquery.equalheights.js"></script>
    <script type="text/javascript" src="jscript/jscript_jquery.matchHeight.js"></script>
    <script type="text/javascript" src="jscript/jscript_jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="jscript/jscript_jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript" src="jscript/jscript_jquery.simplr.smoothscroll.min.js"></script>
    <script type="text/javascript" src="jscript/jscript_jquery.touchSwipe.min.js"></script>
    <script type="text/javascript" src="jscript/jscript_jquery.ui.totop.js"></script>
    <script type="text/javascript" src="jscript/jscript_menu_top.js"></script>
    <script type="text/javascript" src="jscript/jscript_script_bootstrap.js"></script>
    <script type="text/javascript" src="jscript/jscript_stotal-storage.min.js"></script>
    <script type="text/javascript" src="jscript/jscript_suggestionbox.js"></script>
    <script type="text/javascript" src="jscript/jscript_top.js"></script>
    <script type="text/javascript" src="jscript/jscript_xeasyTooltip.js"></script>
    <script type="text/javascript" src="jscript/jscript_xjquery.easing.1.3.js"></script>
    <script type="text/javascript" src="jscript/jscript_xjquery.jqtransform.js"></script>
    <script type="text/javascript" src="jscript/jscript_xjquery.lightbox-0.5.js"></script>
    <script type="text/javascript" src="jscript/jscript_xjscript_script.app.js"></script>
    <script src="main.js"></script>
</head>

<body>
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
                            <p>(800) 234-5678</p>
                            <span>Hours: 9am-7pm PST M-Fr</span>
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
                                <a href="home.html"><img src="images/logo.png"  alt="" /></a>
                            <!-- ========================== -->
                        </div>
                        <div class="col-xs-12 col-sm-9 col-md-9">
                            <div class="header_cust_block clearfix">
                                <p>Free Shipping</p>
                                <div>
                                    <span>on orders over $499.</span>
                                    <span>This offer is valid on all our store items.</span>
                                </div>
                            </div>
                            <div class="shopping_cart" id="shopping_cart">
                                <!-- ========== SHOPPING CART ========== -->
                                                                <div class="shop-box-wrap">
                                    <span class="cart_title" >Cart</span><span class="st3"> (empty) </span>                                </div>
                                <div class="shopping_cart_content" id="shopping_cart_content" >
                                    <div class="none"> Your cart is empty</div>                                </div> 
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
         
        <li class="categories-li"><a class="drop">Categories<span class="label">New!</span></a><!-- bof cateories    -->
     
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
                 <div class="item_1"><a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=redirect&amp;action=banner&amp;goto=1"><img src="images/cat_banner_1.jpg" class="img-responsive" alt="Water taps" title=" Water taps " width="1170" height="450" /><div class="title"><span>Water taps</span></div></a>
          </div><div class="item_2"><a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=redirect&amp;action=banner&amp;goto=2"><img src="images/cat_banner_2.jpg" class="img-responsive" alt="Sinks" title=" Sinks " width="1170" height="450" /><div class="title"><span>Sinks</span></div></a>
          </div><div class="item_3"><a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=redirect&amp;action=banner&amp;goto=3"><img src="images/cat_banner_3.jpg" class="img-responsive" alt="Bathrooms" title=" Bathrooms " width="1170" height="450" /><div class="title"><span>Bathrooms</span></div></a>
          </div>              </div>
                 
               </div>
        </li><!-- eof categories  -->
                    <li class="specials_p"><a class="drop">Specials<span class="label">Sale!</span></a>
    <!-- bof specials -->
        
            <div class="dropdown col-9">
                                    <div class="special_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porttitor egestas dictum. Proin dolor lacus, placerat non magna in, ultricies molestie nisl. Aliquam dui dolor, bibendum eget diam ac, pellentesque ultricies dui. Pellentesque mattis sit amet nibh eget pulvinar. Curabitur nec turpis porta dui sollicitudin dignissim. Duis cursus leo sit amet quam posuere, in iaculis quam dignissim. Donec est nulla, tristique quis dignissim at, rutrum non massa. In ultrices tellus turpis, at vehicula justo fringilla ut. Cras a eros sagittis, placerat nulla ac, condimentum mi. Mauris ornare sem vel laoreet fermentum. In hac habitasse platea dictumst. </p></div>
                                <div class="list_carousel responsive">
                    <ul id="fcarousel">
                                                                    <li class="col-products">
                                        <div class="product-col">
                                                <div class="img">
                                                    <a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=product_info&amp;cPath=&amp;products_id=11"><img src="images/11.png" class="img-responsive" alt="Vigo Single Hole Waterfall Bathroom Faucet Less Handles - VG0300" title=" Vigo Single Hole Waterfall Bathroom Faucet Less Handles - VG0300 " width="200" height="200" /></a>                                                </div>
                                                <div class="sale-label">Sale</div>
                                            <div class="prod-info">
                                                <h5><a class="product-name name" href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=product_info&amp;cPath=&amp;products_id=11">Vigo Single Hole Waterfall Bathroom Faucet Less Handles - VG...</a></h5>
                                                <div class="text">
                                                    The supplies we sell in our store are of premium q...                                                </div>
                                                <div class="price">
                                                    <strong>&nbsp;<span class="productSpecialPrice">$522.40</span><span class="normalprice">$653.00 </span><span class="productPriceDiscount">-20%</span></strong>                                                </div>
                                            </div>
                                          </div>
                                        </li>
                                                                                <li class="col-products">
                                        <div class="product-col">
                                                <div class="img">
                                                    <a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=product_info&amp;cPath=&amp;products_id=12"><img src="images/12.png" class="img-responsive" alt="Vigo Tempered Glass Bathroom Sink - VG07505" title=" Vigo Tempered Glass Bathroom Sink - VG07505 " width="200" height="200" /></a>                                                </div>
                                                <div class="sale-label">Sale</div>
                                            <div class="prod-info">
                                                <h5><a class="product-name name" href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=product_info&amp;cPath=&amp;products_id=12">Vigo Tempered Glass Bathroom Sink - VG07505...</a></h5>
                                                <div class="text">
                                                    The supplies we sell in our store are of premium q...                                                </div>
                                                <div class="price">
                                                    <strong>&nbsp;<span class="productSpecialPrice">$105.40</span><span class="normalprice">$124.00 </span><span class="productPriceDiscount">-15%</span></strong>                                                </div>
                                            </div>
                                          </div>
                                        </li>
                                                                                <li class="col-products">
                                        <div class="product-col">
                                                <div class="img">
                                                    <a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=product_info&amp;cPath=&amp;products_id=13"><img src="images/13.png" class="img-responsive" alt="Vigo Two Handle Widespread Pull-Out Spray Bar Faucet with Soap D" title=" Vigo Two Handle Widespread Pull-Out Spray Bar Faucet with Soap D " width="200" height="200" /></a>                                                </div>
                                                <div class="sale-label">Sale</div>
                                            <div class="prod-info">
                                                <h5><a class="product-name name" href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=product_info&amp;cPath=&amp;products_id=13">Vigo Two Handle Widespread Pull-Out Spray Bar Faucet with So...</a></h5>
                                                <div class="text">
                                                    The supplies we sell in our store are of premium q...                                                </div>
                                                <div class="price">
                                                    <strong>&nbsp;<span class="productSpecialPrice">$514.25</span><span class="normalprice">$605.00 </span><span class="productPriceDiscount">-15%</span></strong>                                                </div>
                                            </div>
                                          </div>
                                        </li>
                                                                                <li class="col-products">
                                        <div class="product-col">
                                                <div class="img">
                                                    <a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=product_info&amp;cPath=&amp;products_id=14"><img src="images/14.png" class="img-responsive" alt="Waterstone Traditional Deck Mount One Handle Single Hole Pot Fil" title=" Waterstone Traditional Deck Mount One Handle Single Hole Pot Fil " width="200" height="200" /></a>                                                </div>
                                                <div class="sale-label">Sale</div>
                                            <div class="prod-info">
                                                <h5><a class="product-name name" href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=product_info&amp;cPath=&amp;products_id=14">Waterstone Traditional Deck Mount One Handle Single Hole Pot...</a></h5>
                                                <div class="text">
                                                    The supplies we sell in our store are of premium q...                                                </div>
                                                <div class="price">
                                                    <strong>&nbsp;<span class="productSpecialPrice">$743.25</span><span class="normalprice">$991.00 </span><span class="productPriceDiscount">-25%</span></strong>                                                </div>
                                            </div>
                                          </div>
                                        </li>
                                                                                <li class="col-products">
                                        <div class="product-col">
                                                <div class="img">
                                                    <a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=product_info&amp;cPath=&amp;products_id=15"><img src="images/15.png" class="img-responsive" alt="Watts 1-in x 1-ft Reinforced PVC Reinforced Braided Vinyl Tubing" title=" Watts 1-in x 1-ft Reinforced PVC Reinforced Braided Vinyl Tubing " width="200" height="200" /></a>                                                </div>
                                                <div class="sale-label">Sale</div>
                                            <div class="prod-info">
                                                <h5><a class="product-name name" href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=product_info&amp;cPath=&amp;products_id=15">Watts 1-in x 1-ft Reinforced PVC Reinforced Braided Vinyl Tu...</a></h5>
                                                <div class="text">
                                                    The supplies we sell in our store are of premium q...                                                </div>
                                                <div class="price">
                                                    <strong>&nbsp;<span class="productSpecialPrice">$213.50</span><span class="normalprice">$305.00 </span><span class="productPriceDiscount">-30%</span></strong>                                                </div>
                                            </div>
                                          </div>
                                        </li>
                                                                                <li class="col-products">
                                        <div class="product-col">
                                                <div class="img">
                                                    <a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=product_info&amp;cPath=&amp;products_id=16"><img src="images/16.png" class="img-responsive" alt="Whirlpool 40 Gallons 6-Year Regular Electric Water Heater" title=" Whirlpool 40 Gallons 6-Year Regular Electric Water Heater " width="200" height="200" /></a>                                                </div>
                                                <div class="sale-label">Sale</div>
                                            <div class="prod-info">
                                                <h5><a class="product-name name" href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=product_info&amp;cPath=&amp;products_id=16">Whirlpool 40 Gallons 6-Year Regular Electric Water Heater...</a></h5>
                                                <div class="text">
                                                    The supplies we sell in our store are of premium q...                                                </div>
                                                <div class="price">
                                                    <strong>&nbsp;<span class="productSpecialPrice">$435.50</span><span class="normalprice">$871.00 </span><span class="productPriceDiscount">-50%</span></strong>                                                </div>
                                            </div>
                                          </div>
                                        </li>
                                                            </ul>
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
                    <a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=products_new">
                        <span>New Products</span>   
                    </a>  
                </li>  
              
                <li class="  ">  
                    <a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=specials">
                        <span>Specials</span>   
                    </a>  
                </li>  
              
                <li class="  ">  
                    <a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=reviews">
                        <span>Reviews</span>   
                    </a>  
                </li>  
              
                <li class="  ">  
                    <a href="shipping.html">
                        <span>Shipping</span>   
                    </a>  
                </li>  
              
                <li class=" last ">  
                    <a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=gv_faq">
                        <span>FAQs</span>   
                    </a>  
                </li>  
              
  </ul>
</nav>

                                    </div>
               </div>
        </li><!-- eof quick links -->
            <li class="manufacturers-li"><a class="drop">Manufacturers<span class="label"></span></a><!--bof shop by brand   -->
            <div class="dropdown col-3">
                <div class="firstcolumn">

              <ul >
               <li ><a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index&amp;manufacturers_id=3"><img src="images/manufacturers/logo_bosch.png" class="img-responsive" alt="Bosch" title=" Bosch " width="1024" height="242" /></a></li>
<li ><a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index&amp;manufacturers_id=1"><img src="images/manufacturers/logo_gerber.png" class="img-responsive" alt="Gerber" title=" Gerber " width="724" height="724" /></a></li>
<li ><a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index&amp;manufacturers_id=2"><img src="images/manufacturers/logo_viessmann.png" class="img-responsive" alt="Viessmann" title=" Viessmann " width="3390" height="1129" /></a></li>
            </ul>
            
        </div>
            </div>
        </li><!-- eof shop by brand    -->
                
            
        <li class="information-li"><a class="drop">Info<span class="label"></span></a><!-- bof information -->
 
        <div class="dropdown col-3">
        

                    <h3>General Info</h3>
                    <ul>
                                        <li><a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=site_map">Site Map</a></li>
                                                            <li><a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=gv_faq">Gift Certificate FAQ</a></li>
                                                            <li><a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=discount_coupon">Discount Coupons</a></li>
                                                            <li><a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=unsubscribe">Newsletter Unsubscribe</a></li>
                                         </ul>   
                    <div class="clearfix"></div>
                     <h3 class="second">Customers</h3>
                     <ul>
                                <li><a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=login">Log In</a></li>
                    <li><a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=create_account">Create Account</a></li>
                                            <li><a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=contact_us">Contact Us</a></li>
                                            <li><a href="shipping.html">Shipping &amp; Returns</a></li>
                                                                    <li><a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=privacy">Privacy Notice</a></li>
                                                                    <li><a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=conditions">Conditions of Use</a></li>
                                             </ul>   

           </div>

    </li><!-- eof information -->
         
        <li class="customer_service"><a class="drop">Shipping &amp; Returns<span class="label"></span></a><!-- bof customer service -->
        
            <div class="dropdown col-5">
           
                <div class="col_cs">
                    <h3>Shipping</h3>
                </div>

                <div class="col_cs">
                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam interdum feugiat ipsum vehicula sollicitudin. Integer sed lacus eget risus consectetur ullamcorper. Pellentesque rutrum ullamcorper faucibus. Nam porttitor iaculis enim, mattis tristique velit tristique bibendum. </p>             
                </div>
       
                <div class="col_cs">
                      <h3>Delivery</h3>
                </div>
                <div class="col_cs">
                 <p>Etiam interdum feugiat ipsum vehicula sollicitudin. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed lacus eget risus consectetur ullamcorper. Pellentesque rutrum ullamcorper faucibus. Nam porttitor iaculis enim, mattis tristique velit tristique bibendum. </p>             
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


<!-- deprecated - to use uncomment this section
<div id="" class="content">This is the main define statement for the page for english when no template defined file exists. It is located in: <strong>/includes/languages/english/index.php</strong></div>
-->

<!-- deprecated - to use uncomment this section
<div id="" class="content">Define your main Index page copy here.</div>
-->


 
</ul>
</div>
<!-- eof: featured products  -->





</div>        </div>
      
                      </div>
                </div>
                    <aside class="column left_column col-xs-12 col-sm-3">
                           </aside>
                    <div class="clearfix"></div>
        <!--bof-custom block display-->
         <!-- bof tm custom block -->
<!-- eof tm custom block -->
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
                                <p>(800) 234-5678</p>
                                <span>Hours: 9am-7pm PST M-Fr</span>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
        
          <section class="ie9_all">
              <div class="container">
          <div class="row">
            
            
          <div class="main-col 
          
           left_column      col-sm-12 ">
      
             <div class="row">
      
            <div class="center_column col-xs-12
                    col-sm-12 with_col ">
              
      <div class="centerColumn" id="loginDefault">
      
      <div class="heading"><h1>Voila vos livraisons celon votre Id !</h1></div>
      
      <div class="tie">
          <div class="tie-indent">
            <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Tableau de vos livraisons</h4>
                <hr>
                <thead>
                  <tr>
                    <td>Id</td>
                    <td>Date</td>
                    <td>Secteur</td>
                    <td>Id Client</td>
                    <td>Id Livreur</td>
                    <td>Etat</td>
                    <td>Evlauer le livreur</td>
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
    <td><form method="POST" action="evaluerlivreur.php">
    <input type="submit" name="evaluer" value="evaluer">
    <input type="hidden" value="<?PHP echo $row['Idlivreur']; ?>" name="Idlivreur">
    </form>
    </td>
    <?PHP
}
?>
</table>
  <footer>
    <div class="footer-container">
        


    <div class="container">
        <div class="row">
        <div class="footer-menu col-xs-12 col-sm-3">
            <h2 class="title_btn1">Quick Links</h2>
                                    
<div class="ezpagesFooterCol col1" style="width: 100%">
<ul>
  <li><a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index" class="activeILPage">Home</a></li>
  <li><a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=products_new">New Products</a></li>
  <li><a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=specials">Specials</a></li>
  <li><a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=products_all">All Products</a></li>
  <li><a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=reviews">Reviews</a></li>
  <li><a href="shipping.html">Shipping</a></li>
  <li><a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=gv_faq">FAQs</a></li>
</ul>
</div>                  </div>
        <div class="account col-xs-12 col-sm-3 mb">
            <h2 class="title_btn2">Customers</h2>
             <ul class="account_list">
                                <li><a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=login">Log In</a></li>
                <li><a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=create_account">Create Account</a></li>
                                                        <li><a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=shippinginfo">Shipping &amp; Returns</a></li>
                                                        <li><a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=privacy">Privacy Notice</a></li>
                                                        <li><a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=conditions">Conditions of Use</a></li>
                             </ul>   
        </div>
        <div class="social col-xs-12 col-sm-3 mb">
            <h2 class="title_btn3">Follow Us</h2>
            <ul class="social_list">
                <li><a href="http://www.facebook.com">Facebook</a></li>
                <li><a href="http://www.twitter.com">Twitter</a></li>
                <li><a href="#">RSS</a></li>
            </ul>
        </div>
        <div class="contact-block col-xs-12 col-sm-3 mb">
            <h2 class="title_btn4">Contact Us</h2>
            <div class="contact_list">
                <p>Company Inc., 8901 Marmora Road,<br/>
Glasgow, D04 89GR</p>
                <div class="phone">
                    (800) 234-5678                </div>
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
                <p>Copyright &copy; 2019 <a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index" target="_blank">Plumbing Supplies Store</a>. Powered by <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a> &nbsp;| &nbsp;<a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=privacy">Privacy Notice</a> &nbsp;| &nbsp;<a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=page_2">Template settings</a>
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
</body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>
