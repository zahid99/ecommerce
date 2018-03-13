<?PHP 
//include_once ('../config/user.php');
   $product=new User();
   $latest_product=$product->view_latest_product();
   
   
?>

<div class="box">
          <h2 class="heading-title"><span>Latest Products</span></h2>
          <div class="box-content">
            <div class="box-product fixed">
                <?PHP
                while ($latest_product_data=  mysqli_fetch_array($latest_product)){
                ?>
                <div class="prod_hold"> <a class="wrap_link" href="product_details.php?id=<?PHP echo $latest_product_data['id'] ?>"> <span class="image"><img src="../admin/product_image/<?PHP echo $latest_product_data['product_image']?>" alt="Spicylicious store" width="180" height="200" /></span> </a>
                <div class="pricetag_small"> <span class="old_price">$ 19 999,99</span> <span class="new_price">$ 14 999,99</span> </div>
                <div class="info">
                  <h3><?PHP echo $latest_product_data['product_short_desc'] ?></h3>
                  <p><?PHP echo $latest_product_data['product_long_desc'] ?>.</p>
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