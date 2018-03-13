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
<script type="../text/javascript" src="assets/js/jquery-ui-1.8.9.custom.min.js"></script>
<script type="../text/javascript" src="assets/js/tabs.js"></script>
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
  <?PHP include ('./side_features.php'); ?>
  <!-- END OF SIDEFEATURES --> 
  
  <!-- HEADER -->
  <div id="header">
    <div class="inner">
      <ul class="main_menu menu_left">
        <li><a href="">My Account</a></li>
        <li><a href="">Wish List <b>(3)</b></a></li>
        <li><a href="">About Us</a></li>
        <li class="warning"><a href="../index.php">Home</a>
          <ul class="secondary">
              <li><a href="../index.php">Home </a></li>
            
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
        <?PHP include('../pages/login_session.php') ?>
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
        <div class="breadcrumb"> <a href="../index.php">Home</a> » <a href="account.php">Account</a> » Shopping Cart</div>
      <h2 class="heading-title"><span>Shopping Cart</span></h2>
      <div id="content">
        <div class="cart-info">
          <table>
            <thead>
              <tr>
                <td class="remove">Remove</td>
                <td class="image">Image</td>
                <td class="name">Product Name</td>
                <td class="model">Remove</td>
                 <td class="model">UPDATE</td>
                <td class="quantity">Quantity</td>
                <td class="price">Unit Price</td>
                <td class="total">Total</td>
              </tr>
            </thead>
              
             <?PHP
                
                if(isset($_POST['update'])){
                extract($_POST);
                //print_r($_POST);
                $update =new user();
                $update_info=$update->update_cart($order_details_id,$quantity);
                if($update_info){
                  echo "UPDATE";
                }
                }
             ?>
           


              <?PHP 
              $total=0;
                 $cart=new User();
                 echo session_id();
                 $cart_info=$cart->view_cart(session_id());
                 
              ?>
              
            <tbody>
                <?PHP 
              while ($cart_data = mysqli_fetch_array($cart_info)){
                ?>




              <tr>
                <td class="remove"><input type="checkbox" value="48" name="remove[]"/></td>
                <td class="image"><a href="product.html"><img src="../admin/product_image/<?PHP echo $cart_data['product_image']; ?>" alt="Image" width="70" height="70"/></a></td>
                <td class="name"><a href="product.html"><?PHP  echo $cart_data['product_name'] ?></a> <span class="stock">***</span>
                  <div> </div></td>
                <td class="model"><a class="button" href="remove_cart.php?order_id=<?PHP echo $cart_data['order_details_id'] ?>"><span>REMOVE</span></a></td>

                <form method="post">
                <td class="model"><button name="update">UPDATE</button></td>
                <td class="quantity"><input type="text" size="3" value="<?PHP echo $cart_data['product_sales_quantity'] ?>" name="quantity"/></td>
                <td><input type="hidden" name="order_details_id" value="<?PHP echo $cart_data['order_details_id'] ?>"></td>
                
                <td class="price"><?PHP echo $cart_data['product_price'] ?></td>
                <td class="total"><?PHP echo $subTotal=$cart_data['product_price']*$cart_data['product_sales_quantity'] ?></td>
                  <?PHP  $total=$total+$subTotal; ?>

                  </form>
              </tr>
                
              <?PHP } ?>
            </tbody>
          </table>
        </div>
        
      
        <div class="buttons">
          <div class="left"><a class="button" onclick="#"><span>Update</span></a></div>
          <div class="right"><a class="button" 
                                <?PHP if(isset($_SESSION['login'])){ ?>href="payment.php" <?PHP  } else { ?>
                                href="customer_reg.php"  <?PHP } ?>><span>Checkout</span></a></div>
         
          
          <div class="center"><a class="button" href="#"><span>Continue Shopping</span></a></div>
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


</body>
</html>
