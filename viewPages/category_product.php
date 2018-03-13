<?php
     include("../config/user.php");
//echo get_include_path();
    //include(__DIR__."/config/config.php");
     
     $category_id="";
     $get_category_name="";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Spicylicious - Premium HTML template by D.Koev</title>
<link rel="stylesheet" href="../assets/stylesheet/stylesheet.css" type="text/css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'/>
<link rel="stylesheet" type="text/css" href="../assets/stylesheet/jquery-ui-1.8.9.custom.css" />
<!-- jQuery and Custom scripts -->
<script src="../assets/js/jquery-1.5.2.min.js" type="text/javascript"></script>
<script src="../assets/js/jquery.cycle.lite.1.0.min.js" type="text/javascript"></script>
<script src="../assets/js/custom_scripts.js" type="text/javascript"></script>
<script src="../assets/js/jquery.roundabout.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../assets/js/jquery-ui-1.8.9.custom.min.js"></script>
<script type="text/javascript" src="../assets/js/tabs.js"></script>
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
  <div id="sidefeatures">
    <ul>
      <li class="side_cart"><span class="icon">Shopping Cart</span>
        <div id="cart">
          <div class="heading">
            <h4>Shopping Cart</h4>
            <span id="cart_total">3 item(s) - $1099.99</span> </div>
          <div class="content">
            <table class="cart">
              <tbody>
                <tr>
                  <td class="image"><a href="#"><img alt="Spicylicious" src="image/cart_pic1.jpg"/></a></td>
                  <td class="name"><a href="#">Product name 1</a>
                    <div> </div></td>
                  <td class="quantity">x&nbsp;1</td>
                  <td class="total">$117.50</td>
                  <td class="remove"><img title="Remove" alt="Remove" src="image/close.png"/></td>
                </tr>
                <tr>
                  <td class="image"><a href="#"><img title="Palm Treo Pro" alt="Palm Treo Pro" src="image/cart_pic2.jpg"/></a></td>
                  <td class="name"><a href="#">Product name 2</a>
                    <div> </div></td>
                  <td class="quantity">x&nbsp;1</td>
                  <td class="total">$328.99</td>
                  <td class="remove"><img title="Remove" alt="Remove" src="image/close.png"/></td>
                </tr>
                <tr>
                  <td class="image"><a href="#"><img title="Canon EOS 5D" alt="Canon EOS 5D" src="image/cart_pic3.jpg"/></a></td>
                  <td class="name"><a href="#">Product name 3</a>
                    <div> - <small>Extra Cheese</small><br/>
                    </div></td>
                  <td class="quantity">x&nbsp;1</td>
                  <td class="total">$94.00</td>
                  <td class="remove"><img title="Remove" alt="Remove" src="image/close.png"/></td>
                </tr>
              </tbody>
            </table>
            <table class="total">
              <tbody>
                <tr>
                  <td align="right"><b>Sub-Total</b></td>
                  <td align="right">$459.99</td>
                </tr>
                <tr>
                  <td align="right"><b>VAT 17.5%</b></td>
                  <td align="right">$80.50</td>
                </tr>
                <tr>
                  <td align="right"><b>Total</b></td>
                  <td align="right">$540.49</td>
                </tr>
              </tbody>
            </table>
            <div class="checkout"><a class="button" href="checkout.html"><span>Checkout</span></a></div>
          </div>
        </div>
      </li>
      <li class="side_currency"><span class="icon">Currency</span>
        <div id="currency"> Currency <a href="#" title="Euro">€</a> <a href="#" title="Pound Sterling">£</a> <a title="US Dollar">$</a> </div>
      </li>
      <li class="side_lang"><span class="icon">Language</span>
        <div id="language"> Language <a href="#" title="English"><img src="image/gb.png" alt="Spicylicious store"/></a> <a href="#" title="Deutsch"><img src="image/de.png" alt="Spicylicious store"/></a> <a title="Bylgarski"><img src="image/bg.png" alt="Spicylicious store"/></a> </div>
      </li>
      <li class="side_search"><span class="icon">Search</span>
        <div id="search">
          <input type="text" onkeydown="this.style.color = '#000000';" onclick="this.value = '';" value="Search" name="filter_name"/>
          <a href="#" class="button-search"></a> </div>
      </li>
    </ul>
  </div>
  <!-- END OF SIDEFEATURES --> 
  
  <!-- HEADER -->
  <div id="header">
    <div class="inner">
      <ul class="main_menu menu_left">
        <li><a href="account.html">My Account</a></li>
        <li><a href="wish.html">Wish List <b>(3)</b></a></li>
        <li><a href="about.html">About Us</a></li>
        <li class="warning"><a href="../index.php">Home</a>
          <ul class="secondary">
              <li><a href="../index.php">Home with LI SLIDER</a></li>
            <li><a href="#">Test</a></li>
            <li><a href="#">ABC</a></li>
            <li><a href="#">DEF</a></li>
            <li><a href="#">GHI</a></li>
          </ul>
        </li>
      </ul>
        <div id="logo"><a href="../index.php"><img src="image/logo.png" width="217" height="141" alt="Spicylicious store" /></a></div>
      <ul class="main_menu menu_right">
        <li><a href="compare.html">Compare</a></li>
        <li><a href="cart.html">Shopping Cart</a></li>
        <li><a href="checkout.html">Checkout</a></li>
        <li><a href="contact.html">Contact Us</a></li>
      </ul>
      <div id="welcome"> Welcome visitor you can <a href="#">login</a> or <a href="#">create an account</a>. </div>
      <div class="menu">
        <ul id="topnav">
    
        <?PHP 
             $category_info=new User();
             $category_info=$category_info->viewCategory();
             $value=  mysqli_num_rows($category_info);
             
             while ($row=  mysqli_fetch_array($category_info)){
        ?>
            <li><a href="category_product.php?cat_id=<?PHP echo $row['category_id'] ?>"><?PHP echo $row['category_name'] ?></a></li>
             <?PHP } ?>
        </ul>
      </div>
    </div>
  </div>
  <!-- END OF HEADER --> 
  
  <!-- CONTENT -->
  <div id="content_holder" class="fixed">
    <div class="inner">
      <div id="content">
        <div class="box featured-box">
        
            <?PHP include("../pages/slider.php") ?>
            
        </div>
        <div class="box">
          <h2 class="heading-title"><span>Welcome to Spicylicious</span></h2>
          <div class="box-content">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>
        </div>
        
       
          <?PHP //include('./view_manufacturer_product.php') ?>
          
          <?PHP 
          
          $category_id=$_GET['cat_id'];
          
   $product=new User();
   $category_product=$product->view_category_product($category_id);
     
?>

<div class="box">
          <h2 class="heading-title"><span><?PHP //echo $get_manufacturer_name ?>Category Products</span></h2>
          <div class="box-content">
            <div class="box-product fixed">
                <?PHP
                while ($category_product_data=  mysqli_fetch_array($category_product)){
                ?>
                <div class="prod_hold"> <a class="wrap_link" href="product_details.php?id=<?PHP echo $category_product_data['id']  ?>&& category_id=<?PHP echo $category_product_data['category_id'] ?>"> <span class="image"><img src="../admin/product_image/<?PHP echo $category_product_data['product_image']?>" alt="Spicylicious store" width="180" height="200" /></span> </a>
                <div class="pricetag_small"> <span class="old_price">$ 19 999,99</span> <span class="new_price"><?PHP echo $category_product_data['product_price'] ?></span> </div>
                <div class="info">
                  <h3><?PHP echo $category_product_data['product_short_desc'] ?></h3>
                  <p><?PHP echo $category_product_data['product_long_desc'] ?>.</p>
                  <a class="add_to_cart_small" href="#">Add to cart</a> <a class="wishlist_small" href="#">Wishlist</a> <a class="compare_small" href="#">Compare</a> </div>
              </div>
                
                <?PHP  }?>
                
               <!-----
              <div class="prod_hold"> <a class="wrap_link" href="product.html"> <span class="image"><img src="image/prod_pic2.jpg" alt="Spicylicious store" /></span> </a>
                <div class="pricetag_small"> <span class="price">$ 147,99</span> </div>
                <div class="info">
                  <h3>Very long product name goes here</h3>
                  <p>Suspendisse eget nunc lorem. Sed convallis mattis est, quis dignissim magna varius et.</p>
                  <a class="add_to_cart_small" href="#">Add to cart</a> <a class="wishlist_small" href="#">Wishlist</a> <a class="compare_small" href="#">Compare</a> </div>
              </div>
              <div class="prod_hold"> <a class="wrap_link" href="product.html"> <span class="image"><img src="image/prod_pic3.jpg" alt="Spicylicious store" /></span> </a>
                <div class="pricetag_small"> <span class="price">$ 472,99</span> </div>
                <div class="info">
                  <h3>Very long product name goes here</h3>
                  <p>Suspendisse eget nunc lorem. Sed convallis mattis est, quis dignissim magna varius et.</p>
                  <a class="add_to_cart_small" href="#">Add to cart</a> <a class="wishlist_small" href="#">Wishlist</a> <a class="compare_small" href="#">Compare</a> </div>
              </div>
              <div class="prod_hold"> <a class="wrap_link" href="product.html"> <span class="image"><img src="image/prod_pic4.jpg" alt="Spicylicious store" /></span> </a>
                <div class="pricetag_small"> <span class="price">$ 219,99</span> </div>
                <div class="info">
                  <h3>Very long product name goes here</h3>
                  <p>Suspendisse eget nunc lorem. Sed convallis mattis est, quis dignissim magna varius et.</p>
                  <a class="add_to_cart_small" href="#">Add to cart</a> <a class="wishlist_small" href="#">Wishlist</a> <a class="compare_small" href="#">Compare</a> </div>
              </div>
              <div class="prod_hold"> <a class="wrap_link" href="product.html"> <span class="image"><img src="image/prod_pic5.jpg" alt="Spicylicious store" /></span> </a>
                <div class="pricetag_small"> <span class="price">$ 101,99</span> </div>
                <div class="info">
                  <h3>Very long product name goes here</h3>
                  <p>Suspendisse eget nunc lorem. Sed convallis mattis est, quis dignissim magna varius et.</p>
                  <a class="add_to_cart_small" href="#">Add to cart</a> <a class="wishlist_small" href="#">Wishlist</a> <a class="compare_small" href="#">Compare</a> </div>
              </div>
              <div class="prod_hold"> <a class="wrap_link" href="product.html"> <span class="image"><img src="image/prod_pic6.jpg" alt="Spicylicious store" /></span> </a>
                <div class="pricetag_small"> <span class="price">$ 56,67</span> </div>
                <div class="info">
                  <h3>Very long product name goes here</h3>
                  <p>Suspendisse eget nunc lorem. Sed convallis mattis est, quis dignissim magna varius et.</p>
                  <a class="add_to_cart_small" href="#">Add to cart</a> <a class="wishlist_small" href="#">Wishlist</a> <a class="compare_small" href="#">Compare</a> </div>
              </div>
              <div class="prod_hold"> <a class="wrap_link" href="product.html"> <span class="image"><img src="image/prod_pic7.jpg" alt="Spicylicious store" /></span> </a>
                <div class="pricetag_small"> <span class="price">$ 21,50</span> </div>
                <div class="info">
                  <h3>Very long product name goes here</h3>
                  <p>Suspendisse eget nunc lorem. Sed convallis mattis est, quis dignissim magna varius et.</p>
                  <a class="add_to_cart_small" href="#">Add to cart</a> <a class="wishlist_small" href="#">Wishlist</a> <a class="compare_small" href="#">Compare</a> </div>
              </div>
              <div class="prod_hold"> <a class="wrap_link" href="product.html"> <span class="image"><img src="image/prod_pic8.jpg" alt="Spicylicious store" /></span> </a>
                <div class="pricetag_small"> <span class="price">$ 176,99</span> </div>
                <div class="info">
                  <h3>Very long product name goes here</h3>
                  <p>Suspendisse eget nunc lorem. Sed convallis mattis est, quis dignissim magna varius et.</p>
                  <a class="add_to_cart_small" href="#">Add to cart</a> <a class="wishlist_small" href="#">Wishlist</a> <a class="compare_small" href="#">Compare</a> </div>
              </div>
                
                ---->
            </div>
            <div class="clear"></div>
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
            <li><a href="manufacturer.php?id=<?PHP echo $manufacturer_data['manufacturer_id']; ?>"><?PHP echo $manufacturer_data['manufacturer_name'] ?></a></li>
          
        </ul>
        
         <?PHP } ?>
      </div>
      <div class="clear"></div>
      <span class="copyright">Developed by <a href="http://themeforest.net/user/Koev/portfolio?ref=Koev">MD.ZAHID HASAN</a>. </span> </div>
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
