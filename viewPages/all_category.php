<?php
     include("../config/user.php");
//echo get_include_path();
    //include(__DIR__."/config/config.php");
    
     
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Spicylicious - Premium HTML template by D.Koev</title>
<link rel="stylesheet" href="../assets/stylesheet/stylesheet.css" type="text/css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'/>
<link rel="stylesheet" type="text/css" href="assets/stylesheet/jquery-ui-1.8.9.custom.css" />
<!-- jQuery and Custom scripts -->
<script src="../assets/js/jquery-1.5.2.min.js" type="text/javascript"></script>
<script src="../assets/js/jquery.cycle.lite.1.0.min.js" type="text/javascript"></script>
<script src="../assets/js/custom_scripts.js" type="text/javascript"></script>
<script src="../assets/js/jquery.roundabout.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../assets/js/jquery-ui-1.8.9.custom.min.js"></script>
<script type="text/javascript" src="assets/js/tabs.js"></script>
<!-- Tipsy -->
<script src="../assets/js/tipsy/jquery.tipsy.js" type="text/javascript"></script>
<link href="../assets/js/tipsy/css.tipsy.css" rel="stylesheet" type="text/css" />
<script src="../assets/js/jquery.tweet.js" type="text/javascript"></script>
<link href="../assets/js/jquery.tweet.css" rel="stylesheet" type="text/css" />
</head>

<body>
<!-- MAIN WRAPPER -->
<div id="container"> 
  
  <!-- SIDEFEATURES -->
  <?PHP include('side_features.php') ?>
  <!-- END OF SIDEFEATURES --> 
  
  <!-- HEADER -->
  <div id="header">
    <div class="inner">
      <ul class="main_menu menu_left">
        <li><a href="account.php">My Account</a></li>
        <li><a href="">Wish List <b>(3)</b></a></li>
        <li><a href="">About Us</a></li>
        <li class="warning"><a href="../index.php">Home</a>
          <ul class="secondary">
            <li><a href="">Home </a></li> 
          </ul>
        </li>
      </ul>
        <div id="logo"><a href="../index.php"><img src="image/logo.png" width="217" height="141" alt="Spicylicious store" /></a></div>
      <ul class="main_menu menu_right">
        <li><a href="">Compare</a></li>
        <li><a href="cart.php">Shopping Cart</a></li>
        <li><a href="">Checkout</a></li>
        <li><a href="">Contact Us</a></li>
      </ul>
       <?PHP include ('../pages/login_session.php'); ?>
      <div class="menu">
        <ul id="topnav">
    
        <?PHP 
             $category_info=new User();
             $category_info=$category_info->viewCategory();
             $value=  mysqli_num_rows($category_info);
             
             while ($row=  mysqli_fetch_array($category_info)){
        ?>
            <li><a href="all_category.php?category_id=<?PHP echo $row['category_id'] ?>"><?PHP echo $row['category_name'] ?></a></li>
             <?PHP } ?>
        </ul>
      </div>
    </div>
  </div>
  <!-- END OF HEADER --> 
  
  <!-- CONTENT -->
   <div id="content_holder" class="fixed">
    <div class="inner">
        <div class="breadcrumb"> <a href="../index.php">Home</a> » Desktops </div>
      
      
      <div class="product-filter">
        <div class="product-compare"><a href="#" id="compare_total">Product Compare (0)</a></div>
        <div class="limit"><b>Show:</b>
          <select>
            <option value="" selected="selected">8</option>
            <option value="">25</option>
            <option value="">50</option>
            <option value="">75</option>
            <option value="">100</option>
          </select>
        </div>
        <div class="sort"><b>Sort By:</b>
          <select>
            <option value="" selected="selected">Default</option>
            <option value="">Name (A - Z)</option>
            <option value="">Name (Z - A)</option>
            <option value="">Price (Low &gt; High)</option>
            <option value="">Price (High &gt; Low)</option>
            <option value="">Rating (Highest)</option>
            <option value="">Rating (Lowest)</option>
            <option value="">Model (A - Z)</option>
            <option value="">Model (Z - A)</option>
          </select>
        </div>
      </div>
      
      <?PHP 
         $product=new User();
         $product_info=$product->view_category_group();
      ?>
      
      <!-- LEFT COLUMN -->
      <div id="column-left">
        <div class="box">
          <h3 class="heading-title"><span>Categories</span></h3>
          <div class="box-content box-category">
            <ul>
                
                <?PHP while ($category_product_data=  mysqli_fetch_array($product_info)){ ?>
                <li><a href="all_category.php?category_id=<?PHP echo $category_product_data['category_id']?>"><?PHP echo $category_product_data['category_name'] ?> (<?PHP echo $category_product_data['COUNT(tbl_product.id)'] ?>)</a></li>
              
                <?PHP } ?>
              
            </ul>
          </div>
        </div>
        <div class="box">
          <h3 class="heading-title"><span>Bestsellers</span></h3>
          <div class="box-content">
              <div class="product_unit"> <a class="image" href=""><img src="../admin/product_image/680374.jpg" alt="" height="80" width="70" /></a> <span class="name">Microsoft Surface</span> <span class="price">90,000</span> </div>
           
            <div class="clear"></div>
          </div>
        </div>
      </div>
      <!-- END OF LEFT COLUMN -->
      
      <?PHP 
         
      $get_category_product=$product->view_category_product($_GET['category_id']);
      
      ?>
      
      <div id="content" class="content-column-left">
        <div class="cat_list fixed">
            
            <?PHP while ($get_category_product_date=  mysqli_fetch_array($get_category_product)) {?>
            
            <div class="prod_hold"> <a class="wrap_link" href="product_details.php?id=<?PHP echo $get_category_product_date['id'] ?>&&category_id=<?PHP echo $get_category_product_date['category_id'] ?>">
                  <span class="image"><img src="../admin/product_image/<?PHP echo $get_category_product_date['product_image'] ?>" alt="Spicylicious store" height="190" width="170" /></span>
            </a>
            <div class="pricetag_small"> <span class="old_price"></span> <span class="new_price"><?PHP echo $get_category_product_date['product_price'] ?></span> </div>
            <div class="info">
              <h3><?PHP echo $get_category_product_date['product_name'] ?></h3>
              <p><?PHP echo $get_category_product_date['product_short_desc'] ?>.</p>
              <a class="add_to_cart_small" href="#">Add to cart</a> <a class="wishlist_small" href="#">Wishlist</a> <a class="compare_small" href="#">Compare</a> </div>
          </div>
            
            <?PHP } ?>
          
        
          
          
         
         
         
          
         
          
          <div class="clear"></div>
        </div>
        <div class="pagination">
          <div class="links"> <b>1</b> <a href="#">2</a> <a href="#">&gt;</a> <a href="#">&gt;|</a> </div>
          <div class="results">Showing 1 to 12 of 23 (2 Pages)</div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- END OF CONTENT --> 
  
  <!-- PRE-FOOTER -->
  <div id="pre_footer">
    <div class="inner">

    </div>
  </div>
  <!-- END OF PRE-FOOTER --> 
  
  <!-- FOOTER -->
  <div id="footer">
    <div class="inner">
      <div class="column_big"> 
        <!-- FOOTER MODULES AREA -->
        <div class="footer_modules">
          <h3>About ZETTABYTE</h3>
          <p>ZETTABYTE ZETTABYTE </p>
        </div>
        <!-- END OF FOOTER MODULES AREA -->
        <div class="footer_social">
          <h3>Spread the word</h3>
          <!-- AddThis Button BEGIN -->
          <div class="addthis_toolbox addthis_default_style "><script type="text/javascript">
      //<![CDATA[
            document.write('<a class="addthis_button_google_plusone" g:plusone:size="medium"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>');
      //]]>
     </script> 
          </div>
          <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4e7280075406aa87"></script> 
          <!-- AddThis Button END --> 
        </div>
      </div>
      <div class="column_small">
        <h3>Customer Service</h3>
        <ul>
          <li><a href="../index.php">Home</a></li>
          <li><a href="account.php">My Account</a></li>
          <li><a href="#">Order History</a></li>
          <li><a href="#">Wishlist</a></li>
        
        </ul>
      </div>
      <div class="column_small">
        <h3>Information</h3>
        <ul>
          <li><a href="about.html">About Us</a></li>
          <li><a href="#">Delivery Information</a></li>
          <li><a href="#">Privacy policy</a></li>
          <li><a href="#">Terms and conditions</a></li>
          <li><a href="contact.html">Contact Us</a></li>
          <li><a href="sitemap.html">site map</a></li>
        </ul>
      </div>
      <div class="column_small">
        <h3>Manufacturer</h3>
        <?PHP 
         $manufacturer=new User();
         
         $manufacturer_view=$manufacturer->view_manufacturer();
         
         while($manufacturer_data=  mysqli_fetch_array($manufacturer_view)){
         
        ?>
        <ul>
            <li><a href="manufacturer.php?id=<?PHP echo $manufacturer_data['manufacturer_id'] ?>"><?PHP echo $manufacturer_data['manufacturer_name'] ?></a></li>
          
        </ul>
        
         <?PHP } ?>
      </div>
      <div class="clear"></div>
      <span class="copyright">Developed by <a href="http://www.facebook.com/zahid.cse07">MD.ZAHID HASAN</a>. </span> </div>
  </div>
  <!-- END OF FOOTER --> 
  
</div>
<!-- END OF MAIN WRAPPER --> 
<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script> 
<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/d_koev.json?callback=twitterCallback2&amp;count=3"></script> 
<script type="text/javascript"><!--
$(document).ready(function() {
$('#twitter_update_list').cycle({
		fx: 'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
		next:   '#tweet_next', 
    	prev:   '#tweet_prev'
		}); 
		});
//--></script> 
<script type="text/javascript">
   $(document).ready(function() {
		var interval;
		$('ul#myRoundabout')
		.roundabout({
		  	'btnNext': '.next_round',
			'btnPrev': '.previous_round' 
		  }
		  )
		.hover(
		function() {

		clearInterval(interval);
		},
		function() {

		interval = startAutoPlay();
		});

		interval = startAutoPlay();
		});
		function startAutoPlay() {
		return setInterval(function() {
		$('ul#myRoundabout').roundabout_animateToPreviousChild();
		}, 3000);
	} 
</script>
</body>
</html>
