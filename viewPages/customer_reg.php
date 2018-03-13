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
<script src="../assets/js/countries.js" type="text/javascript"></script>
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
   <div id="content_holder" class="fixed">
    <div class="inner">
        <div class="breadcrumb"> <a href="../index.php">Home</a> » <a href="cart.php">Cart</a> » Checkout </div>
      <h2 class="heading-title"><span>Checkout</span></h2>
      <div id="content"> 
        
        <!-- ACCORDION -->
        <div id="accordion" class="checkout">
          <h2><a href="#">Customer Login</a></h2>
          <div>
            <table class="form">
              <tbody>
                <tr>
                  <td><span class="required">*</span> Email:</td>
                  <td><input type="text" class="large-field" value="" name="email"/></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> Password:</td>
                  <td><input type="password" class="large-field" value="" name="password"/></td>
                </tr>
                
                
                <tr>
                  <td><span class="required"></span> </td>
                  <td><input type="button" class="large-field" value="LOGIN" name="login"/></td>
                </tr>
                
                
              </tbody>
            </table>
          </div>
          <h2><a href="#">Customer Registration</a></h2>
          <div>
              
              <?PHP 
               $customer=new User();
               if(isset($_POST['Registration'])){
                   extract($_POST);
                   print_r($_POST);
                   $reg_password=  md5($reg_password);
               $customer_insert=$customer->customer_reg($name, $email, $reg_password, $dob, $city, $country, $zip);
              
               if($customer_insert){
                   $message="Create Account";
               }
               
               }
              ?>
              
              
              <form method="post">
            <table class="form">
              <tbody>
                <tr>
                  <td><span class="required">*</span> Customer Name:</td>
                  <td><input type="text" class="large-field"  name="name"/></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> Email:</td>
                  <td><input type="text" class="large-field"  name="email" onkeyup="check(this.value)" ="" /> <p id="tst" style="color: red"></p></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> Password:</td>
                  <td><input type="password" class="large-field"  name="reg_password"/></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> Date of Birth:</td>
                  <td><input type="text" class="date"  name="dob"/>example formate:1995-01-01</td>
                </tr>
                
                <tr>
                  <td><span class="required">*</span> City:</td>
                  <td><input type="text" class="large-field" value="" name="city"/></td>
                </tr>
                
                <tr>
                  <td><span class="required">*</span> Country:</td>
                  <td><select class="large-field" id="country" name="country"> </select>
                  </td>
                </tr>
                  <tr>
                  <td><span class="required">*</span> Post Code:</td>
                  <td><input type="text" class="large-field"  name="zip"/></td>
                </tr>
                  
                <tr>
                  <td><span class="required"></span> </td>
                  <td><input type="submit" class="large-field" value="Registration" name="Registration"/></td>
                </tr>
              </tbody>
            </table>
              </form>
            
          </div>      
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
<script language="javascript">
	populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
	
</script>


<script>
            
            if(window.XMLHttpRequest){
                xmlhttp=new XMLHttpRequest();
            }
            
    function check(divid) {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("tst").innerHTML =
          this.responseText;
              
        }
      };
      xhttp.open("GET", "ServerText.php?id="+divid, true);
      xhttp.send();
  }
  </script>

</body>
</html>
