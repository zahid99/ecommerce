<?php //include("../config/user.php");
        $product_info=new User();
?>  

 <?php
                $data=$product_info->view_featured_product();
   
                ?>

<h2 class="heading-title"><span>Featured Products</span></h2>
          <div class="box-content">
            <ul id="myRoundabout">
               <?PHP  while ($row1= mysqli_fetch_array($data))
                {                   
                   ?>
                
              <li>
                  <div class="prod_holder"> <a href="viewPages/product_details.php?id=<?PHP echo $row1['id'] ?> && category_id=<?PHP echo $row1['category_id'] ?>"> <img src="admin/product_image/<?PHP echo $row1['product_image']?>" alt="" /> </a>
                  <h3><?PHP echo $row1['product_name'] ?></h3>
                </div>
                <span class="pricetag"><?PHP echo $row1['product_price']; ?></span>
              </li>
              <?PHP } ?>
     
            </ul>
            <a href="#" class="previous_round">Previous</a> <a href="#" class="next_round">Next</a> </div>