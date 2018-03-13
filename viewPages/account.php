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
        <div id="welcome"> Welcome visitor you can <a href="account.php">login</a> or <a href="customer_reg.php">create an account</a>. </div>
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
    <div id="content_holder">
    <div class="inner">
        <div class="breadcrumb"> <a href="../index.php">Home</a> » Account Login</div>
      <h2 class="heading-title"><span>Account Login</span></h2>
      
      <!-- RIGHT COLUMN -->
      <div id="column-right">
        <div class="box">
          <h3 class="heading-title"><span>My Account</span></h3>
          <div class="box-content box-account">
            <ul>
              <li><a class="active" href="">Login</a></li>
              <li><a href="customer_reg.php">Register</a></li>
              <li><a href="">Forgotten Password</a></li>
              <li><a href="">My Account</a></li>
              <li><a href="">Wish List</a></li>
              
            </ul>
          </div>
        </div>
      </div>
      <!-- END OF RIGHT COLUMN -->
      
      <div id="content" class="content-column-right">
        <div class="content account-page">
          <div class="box-login">
              
              <?PHP
              
              $login=new User();
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    extract($_POST);
                    print_r($_POST);
                    $password=  md5($password);
                    $login_info=$login->userLogin($email, $password);
                    
                    $login_data=  mysqli_num_rows($login_info);
                    
                    if($login_data){
                        echo "Login Successfully";
                        
                        $_SESSION['login']='login';
                        
                        $username=$login->user_info($email);
                        $customer_data=  mysqli_fetch_array($username);
                        
                        $_SESSION['name']=$customer_data['customer_name'];
                        $_SESSION['id']=$customer_data['customer_id'];
                    }
                }
              ?>
              
              <form method="post">
            <div class="box-content fixed">
              <div class="stitched"></div>
              <div class="left">
                <h6>Register Account</h6>
                <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
                <a class="button" id="button-contact"><span>Continue</span></a> </div>
              <div class="right">
                <h6>I am a returning customer</h6>
                <span class="label">E-mail Address:</span>
                <input type="text" value="" name="email"/>
                <br/>
                <br/>
                <span class="label">Password:</span>
                <input type="text" value="" name="password"/>
                <a href="#" class="forgotten">Forgotten Password?</a> <button class="button" id="button-login"><span>Login</span></button> </div>
              <div class="stitched"></div>
            </div>
              </form>
          </div>
        </div>
      </div>
      <div class="clear"></div>
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
          <li><a href="">My Account</a></li>
          <li><a href="">Order History</a></li>
          <li><a href="">Wishlist</a></li>
          
        </ul>
      </div>
      <div class="column_small">
        <h3>Information</h3>
        <ul>
          <li><a href="">About Us</a></li>
          <li><a href="">Delivery Information</a></li>
          <li><a href="">Privacy policy</a></li>
          <li><a href="#">Terms and conditions</a></li>
          <li><a href="">Contact Us</a></li>
          <li><a href="">site map</a></li>
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
