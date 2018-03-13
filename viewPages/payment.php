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
        <li><a href="account.php">My Account</a></li>
        <li><a href="">Wish List <b>(3)</b></a></li>
        <li><a href="">About Us</a></li>
        <li class="warning"><a href="../index.php">Home</a>
          <ul class="secondary">
            <li><a href="index2.html">Home </a></li>
            
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
      <?PHP 
        if(isset($_SESSION['name']) && isset($_SESSION['login'])){ ?>
<div id="welcome"> Welcome visitor <?PHP echo $_SESSION['name'] ?> <a href="pages/logout.php">Logout</a>.</div>  
        
          <?PHP } else {?>
        ?>
        <div id="welcome"> Welcome visitor you can <a href="viewPages/account.php">login</a> or <a href="viewPages/customer_reg.php">create an account</a>. </div>
          <?PHP } ?>
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
  <?PHP 
   $total=0;
                 $cart=new User();
                 echo session_id();
                 $cart_info=$cart->view_cart(session_id());
 
                 
                 if(isset($_POST['continue'])){
                     extract($_POST);
                     print_r($_POST);
                   
                     
                     $payment=$cart->payment($_SESSION['id'], $payment_method, $status);
                     if($payment){
                         echo "payment succesfully";
                     }
                 }
                 ?>
  
 
   <div id="content_holder" class="fixed">
    <div class="inner">
        <div class="breadcrumb"> <a href="../index.php">Home</a> » <a href="">Cart</a> » Checkout </div>
      <h2 class="heading-title"><span>Checkout</span></h2>
      <div id="content"> 
        
        <!-- ACCORDION -->
        <div id="accordion" class="checkout">
         
          
         
   <h2><a href="#">Payment Method</a></h2>
          <div>
            <p>Please select the preferred payment method to use on this order.</p>
            
            
            <form method="post">
                
            <table class="form">
              <tbody>
                <tr>
                  <td style="width: 1px;"><input type="radio"  id="cod" value="PayPal" name="payment_method"/></td>
                  <td><label for="cod">PayPal</label></td>
                </tr>
                
                <tr>
                    <td style="width: 1px;"><input type="radio" id="tod" checked="checked" value="Cash On Delivery" name="payment_method"/></td>
                  <td><label for="tod">Cash On Delivery</label></td>
                </tr>
              </tbody>
            </table>
           
                <input type="hidden" value="pending" name="status"></input>
            <b>Add Comments About Your Order</b>
            <textarea style="width: 98%;" rows="8" cols="20" name="comment"></textarea>
            <br/>
            <br/>
            <div class="buttons">
              <div class="right">I have read and agree to the <a href="http://metagraphics.eu/cartmania1_5/index.php?route=nformation/information/info&amp;information_id=5" class="fancybox"><b>Terms &amp; Conditions</b></a>
                <input type="checkbox" value="1" name="agree"/>
                <button class="button" id="button-payment" name="continue"><span>Continue</span></button>></div>
            </div>
            
             </form> 
          </div>
          <h2><a href="#">Confirm Order</a></h2>
          
          <?PHP 
           if(isset($_POST['confirm'])){
                     extract($_POST);
                     print_r($_POST);
                 }
          
          ?>
          
          
          <form method="post">
          <div class="checkout-product">
            <table>
              <thead>
                <tr>
                  <td class="name">Product Name</td>
                  <td class="model"></td>
                  <td class="quantity">Quantity</td>
                  <td class="price">Price</td>
                  <td class="total">Total</td>
                </tr>
              </thead>
                
                
              <tbody>
                  
                  <?PHP 
                   while ($cart_data = mysqli_fetch_array($cart_info)){
                  ?>
                  
                <tr>
                  <td class="name"><a href=""><?PHP echo $cart_data['product_name'] ?></a></td>
                  <td class="model"></td>
                  <td class="quantity"><?PHP echo $cart_data['product_sales_quantity'] ?></td>
                  <td class="price"><?PHP echo $cart_data['product_price'] ?></td>
                  <td class="total"><?PHP echo $subTotal=$cart_data['product_price']*$cart_data['product_sales_quantity']  ?></td>
                  <?PHP $total=$subTotal; ?>
                </tr>
                   <?PHP } ?>
              </tbody>
                
                <?PHP 
                
                $payment_id=$cart->get_payment_id($_SESSION['id']);
                $payment_data=  mysqli_fetch_array($payment_id);
                
                if(isset($_POST['confirm'])){
                    extract($_POST);
                    print_r($_POST);
                    
                    $order_insert=$cart->add_order($_SESSION['id'], $payment_data['payment_id'], $total);
                    if($order_insert){
                        echo "order";
                        
                        $order_id=$cart->get_order_id($_SESSION['id']);
                        $order_id_data=  mysqli_fetch_array($order_id);
                      $order_details_update=$cart->update_order_details(session_id(), $order_id_data['order_id']);
                      if($order_details_update){
                          echo "Update";
                      }
                    }
                }
                ?>
                
                
                <form method="post">
              <tfoot>
                <tr>
                  <td class="price" colspan="4"><b>Sub-Total:</b></td>
                  <td class="total"><?PHP echo $total ?></td>
                </tr>
                
                <tr>
                  <td class="price" colspan="4"><b>VAT 17.5%:</b></td>
                  <td class="total"><?PHP echo$total*(17.5/100) ?></td>
                </tr>
                <tr>
                  <td class="price" colspan="4"><b>Total:</b></td>
                  <td class="total"><?PHP echo $total+$total*(17.5/100) ?></td>
                </tr>
              </tfoot>
            </table>
              <input type="hidden" value="<?PHP echo $total+$total*(17.5/100) ?>" name="total"></input>
               <input type="hidden" value="" name=""></input>
                <input type="hidden" value="" name=""></input>
            <div class="buttons">
                <div class="right"><button class="button" id="button-confirm" name="confirm"><span>Confirm Order</span></button></div>
            </div>
              
          
          </div>       
              </form>
        </div>
      
      
        <!-- END OF ACCORDION --> 
        
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
          <h3>About spicylicious</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
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
          <li><a href="#">Home</a></li>
          <li><a href="#">My Account</a></li>
          <li><a href="#">Order History</a></li>
          <li><a href="#">Wishlist</a></li>
          <li><a href="#">Newsletter</a></li>
          <li><a href="#">Returns</a></li>
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
