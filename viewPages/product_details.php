<?php
     include("../config/user.php");
//echo get_include_path();
    //include(__DIR__."/config/config.php");
     
     $manufacturer_id="";
     $get_manufacturer_name="";
     
     $message="";
     session_start(); 
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
        <li><a href="">My Account</a></li>
        <li><a href="">Wish List <b>(3)</b></a></li>
        <li><a href="">About Us</a></li>
        <li class="warning"><a href="../index.php">Home</a>
          <ul class="secondary">
              <li><a href="../index.php">Home</a></li>
            
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
  
  <?PHP  
  
      $product_id=$_GET['id'];
      $category_id=$_GET['category_id'];
       $product=new User();
       //get product details
       $product_details=$product->view_product_details($product_id);
       $product_data=  mysqli_fetch_array($product_details);
       
       //get manufacturer name
       $manufacturer_deatails=$product->view_manufacturer_name($product_data['manufacturer_id']);
       $manufacturer_data=  mysqli_fetch_array($manufacturer_deatails);
       
       $related_product=$product->view_related_product($category_id, $product_data['manufacturer_id'],$product_id);
       
       
  // Related Product
       
       
  ?>
  
  <div id="content_holder" class="fixed">
    <div class="inner">
        <div class="breadcrumb"> <a href="../index.php">Home</a> » <a href="manufacturer.php?id=<?PHP echo $product_data['manufacturer_id'] ?>"><?PHP echo $manufacturer_data['manufacturer_name'] ?></a> » <?PHP echo $product_data['product_name'] ?> </div>
      <h2 class="heading-title"><span><?PHP echo $product_data['product_name'] ?></span></h2>
      
      <!-- PRODUCT INFO -->
      <div class="product-info fixed">
        <div class="left">
            <div class="image"> <a href="" class="cloud-zoom" id="zoom1" rel="adjustX: 5, adjustY:0, zoomWidth:550, zoomHeight:400, showTitle: false"> <img src="../admin/product_image/<?PHP echo $product_data['product_image'] ?>" alt='' title="Pizza Delicioso" width="300" height="300" /></a> <span class="pricetag"><?PHP echo $product_data['product_price'] ?></span> </div>
          <div class="image-additional">
            <div class="image_car_holder">
              <ul class="jcarousel-skin-opencart">
                  <li><a href='' class='cloud-zoom-gallery' title='Thumbnail 1' rel="useZoom: 'zoom1', smallImage: 'image/smallimage.jpg' "> <img src="" alt = "Thumbnail 1"/> </a></li>
                <li><a href='image/bigimage01.jpg' class='cloud-zoom-gallery' title='Thumbnail 2' rel="useZoom: 'zoom1', smallImage: 'image/smallimage1.jpg'"> <img src="image/tiny2.jpg" alt = "Thumbnail 2"/> </a></li>
                <li><a href='image/bigimage02.jpg' class='cloud-zoom-gallery' title='Thumbnail 3' rel="useZoom: 'zoom1', smallImage: 'image/smallimage2.jpg' "> <img src="image/tiny3.jpg" alt = "Thumbnail 3"/> </a></li>
                <li><a href='image/bigimage00.jpg' class='cloud-zoom-gallery' title='Thumbnail 1' rel="useZoom: 'zoom1', smallImage: 'image/smallimage.jpg' "> <img src="image/tiny1.jpg" alt = "Thumbnail 1"/> </a></li>
                <li><a href='image/bigimage01.jpg' class='cloud-zoom-gallery' title='Thumbnail 2' rel="useZoom: 'zoom1', smallImage: 'image/smallimage1.jpg'"> <img src="image/tiny2.jpg" alt = "Thumbnail 2"/> </a></li>
                <li><a href='image/bigimage02.jpg' class='cloud-zoom-gallery' title='Thumbnail 3' rel="useZoom: 'zoom1', smallImage: 'image/smallimage2.jpg' "> <img src="image/tiny3.jpg" alt = "Thumbnail 3"/> </a></li>
                <li><a href='image/bigimage01.jpg' class='cloud-zoom-gallery' title='Thumbnail 2' rel="useZoom: 'zoom1', smallImage: 'image/smallimage1.jpg'"> <img src="image/tiny2.jpg" alt = "Thumbnail 2"/> </a></li>
                <li><a href='image/bigimage02.jpg' class='cloud-zoom-gallery' title='Thumbnail 3' rel="useZoom: 'zoom1', smallImage: 'image/smallimage2.jpg' "> <img src="image/tiny3.jpg" alt = "Thumbnail 3"/> </a></li>
              </ul>
            </div>
            <script type="text/javascript"><!--
      $('.image-additional ul').jcarousel({
	  vertical: false,
	  visible: 4,
	  scroll: 1
      });
      //--></script> 
          </div>
        </div>
        <div class="right">
          <div class="description"> <span>Brand:</span> <a href="#"><?PHP echo $manufacturer_data['manufacturer_name'] ?></a><br/>
            
            <span>Availability:</span><?PHP if($product_data['product_quantity']>0){?> In Stock <?PHP echo $product_data['product_quantity'] ?><?PHP }else 
            {
                ?>
            No stock <?PHP } ?>
            <!-- AddThis Button BEGIN -->
          <div class="addthis_toolbox addthis_default_style "><script type="text/javascript">
      //<![CDATA[
            document.write('<a class="addthis_button_google_plusone" g:plusone:size="medium"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>');
      //]]>
     </script> 
          </div>
          <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4e7280075406aa87"></script> 
          <!-- AddThis Button END -->
            
            <div class="reviews"> <img alt="3 reviews" src="image/stars-5.png"/>
              <p>Based on <a href="#" title="Read reviews">3 reviews</a></p>
            </div>
          </div>
          <div class="options">
            <div class="option" id="option-217"><b><span class="required">*</span> Select Size:</b>
              <select name="option[217]">
                <option value=""> --- Please Select --- </option>
                <option value="4">Small (+$4.70) </option>
                <option value="3">Middle (+$3.53) </option>
                <option value="1">Large (+$1.18) </option>
              </select>
            </div>
           
          </div>
            
            <?PHP echo $message; ?>
            
            <?PHP 
               if($_SERVER['REQUEST_METHOD']=='POST'){
                   $cart= new User();
                   
                   $check=$cart->cart_data_by_id(session_id(), $product_id);
                   
                   $row=  mysqli_fetch_array($check);
                  
                  // extract($_POST);
                   //print_r($_POST);
                   
                    if($row){
                       $message="Already added";
                   }
                   
                   else{
                   if(isset($_SESSION['login'])&&isset($_SESSION['name'])){
                     $order_details=$cart->add_order_details($session_id, $product_id, $product_name, $product_price, $quantity,$product_image);  
                   }
                   
                   $order_details=$cart->add_order_details($session_id, $product_id, $product_name, $product_price, $quantity,$product_image);
                   
                   if($order_details){
                       $message="Add To Cart";
                   }
                   }
               }
            ?>
            <h4 style="color: red"> <?PHP if (isset($message)) echo $message ?></h4>
           
            <form method="post">
            
          <div class="cart"> <span class="label">Qty:</span>
              <input type="hidden" value="<?PHP echo session_id() ?>" size="2" name="session_id" id=""  />
              <input type="hidden" value="<?PHP echo $product_id ?>" size="2" name="product_id" id=""  />
               <input type="hidden" value="<?PHP echo $product_data['product_name'] ?>" size="2" name="product_name"  />
                <input type="hidden" value="<?PHP echo $product_data['product_price'] ?>" size="2" name="product_price" />
                <input type="hidden" size="3" value="<?PHP echo $product_data['product_image'] ?>" name="product_image"/>
              
            <input type="text" value="1" size="2" name="quantity" id="qty"/>
           
            <button class="btn-info" id="button-cart" title="Add to Cart"><span>Add to Cart</span></a></button> <a href="#" class="wish_button" title="Add to Wish List">Add to Wish List</a> <a href="#" class="compare_button" title="Add to Compare">Add to Compare</a> </div>
            
            </form>
                
                
        </div>
        <div class="clear"></div>
      
      </div>
      <!-- END OF PRODUCT INFO -->
      
      <div id="content">
        <div class="box">
          <h2 class="heading-title"><span>Description</span></h2>
          <div class="box-content">
              <p><?PHP echo $product_data['product_long_desc'] ?> </p>
          </div>
        </div>
        <div class="box">
          <h2 class="heading-title"><span>Reviews (3)</span></h2>
          <div class="box-content box-rating"> <a class="comment_switch" href="#"> <span class="button_comments">View Comments</span> <span class="button_review">Write Review</span> </a>
            <div class="box-comments">
              <div class="content"> <span>Dimitar Koev | 05/09/2011</span> <img src="image/stars-5.png" alt="3 reviews"/>
                <p>Lorem Ipsum is simply dummy  .</p>
              </div>
              
              
            </div>
            <div class="box-write">
              <h3 id="review-title">Write a review</h3>
              <span class="label">Your Name:</span>
              <input type="text" value="" name="name"/>
              <br/>
              <br/>
              <span class="label">Your Review:</span>
              <textarea style="width: 98%;" rows="10" cols="40" name="text"></textarea>
              <span style="font-size: 11px;"><span style="color: #FF0000;">Note:</span> HTML is not translated!</span><br/>
              <br/>
              <span class="label">Rating:</span> <span>Bad</span>&nbsp;
              <input type="radio" value="1" name="rating"/>
              &nbsp;
              <input type="radio" value="2" name="rating"/>
              &nbsp;
              <input type="radio" value="3" name="rating"/>
              &nbsp;
              <input type="radio" value="4" name="rating"/>
              &nbsp;
              <input type="radio" value="5" name="rating"/>
              &nbsp; <span>Good</span><br/>
              <br/>
              <span class="label">Enter the code in the box below:</span>
              <input type="text" value="" name="captcha"/>
              <br/>
              <img id="captcha" alt="" src="image/captcha.jpg"/><br/>
              <br/>
              <div class="buttons">
                <div class="left"><a class="button" id="button-review"><span>Submit Review</span></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="cat_list">
          <h2 class="heading-title"><span>Related Products</span></h2>
          
          <?PHP 
          while( $related_product_data=  mysqli_fetch_array($related_product)){             
         // }
          ?>
          <div class="prod_hold"> <a class="wrap_link" href="product_details.php?id=<?PHP echo $related_product_data['id'] ?>&& category_id=<?PHP echo $related_product_data['category_id'] ?>">
                  <span class="image"><img src="../admin/product_image/<?PHP echo $related_product_data['product_image'] ?>" alt="Spicylicious store"  width="150" height="200"/></span>
            </a>
            <div class="pricetag_small"> <span class="old_price">$ 19 999,99</span> <span class="new_price"><?PHP echo $related_product_data['product_price'] ?></span> </div>
            <div class="info">
              <h3><?PHP echo $related_product_data['product_short_desc'] ?></h3>
              <p><?PHP echo $related_product_data['product_long_desc'] ?>.</p>
              <a class="add_to_cart_small" href="#">Add to cart</a> <a class="wishlist_small" href="#">Wishlist</a> <a class="compare_small" href="#">Compare</a> </div>
          </div>
          
          <?PHP } ?>
          
         
         
          <div class="clear"></div>
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
            <li><a href="cart.php">Order History</a></li>
          <li><a href="">Wishlist</a></li>
          
        </ul>
      </div>
      <div class="column_small">
        <h3>Information</h3>
        <ul>
          <li><a href="">About Us</a></li>
          <li><a href="">Delivery Information</a></li>
          <li><a href="#">Privacy policy</a></li>
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
            <li><a href="manufacturer.php?id=<?PHP echo $manufacturer_data['manufacturer_id']; ?>"><?PHP echo $manufacturer_data['manufacturer_name'] ?></a></li>
          
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
