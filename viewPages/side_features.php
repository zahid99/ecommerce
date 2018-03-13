<?PHP 
     session_start();
    $cart=new User();
    
    
       $total=0;
       
       
       if(isset($_SESSION['login']) && isset($_SESSION['id'])){
           $delete_cart=$cart->delete_cart();
           
           echo $_SESSION['id'];
           $cart_info=$cart->view_cart_by_user_id($_SESSION['id']);
           
          ?>  
        <div id="sidefeatures">
    <ul>
      <li class="side_cart"><span class="icon">Shopping Cart</span>
        <div id="cart">
          <div class="heading">
            <h4>Shopping </h4>
            <span id="cart_total">3 item(s) - $1099.99</span> </div>
          <div class="content">
            <table class="cart">
              <tbody>
                  <?PHP 
                     while ($cart_data=  mysqli_fetch_array($cart_info)){
                  ?>
                  
                <tr>
                    <td class="image"><a href="#"><img alt="productImage" src="../admin/product_image/<?PHP echo $cart_data['product_image'] ?>" width="50" height="50"/></a></td>
                  <td class="name"><a href="#"><?PHP echo $cart_data['product_name'] ?></a>
                    <div> </div></td>
                  <td class="quantity">x&nbsp;<?PHP echo $cart_data['product_sales_quantity'] ?></td>
                  <td class="total"><?PHP echo $subTotal= $cart_data['product_price']*$cart_data['product_sales_quantity'] ?></td>
                  <td class="remove"><img title="Remove" alt="Remove" src="image/close.png"/></td>
                  
                  <?PHP $total=$total+$subTotal; ?>
                </tr>
                
                     <?PHP } ?>
              </tbody>
            </table>
            <table class="total">
              <tbody>
                <tr>
                  <td align="right"><b>Sub-Total</b></td>
                  <td align="right"><?PHP echo $total ?></td>
                </tr>
                <tr>
                  <td align="right"><b>VAT 17.5%</b></td>
                  <td align="right">$80.50</td>
                </tr>
                <tr>
                  <td align="right"><b>Total</b></td>
                  <td align="right"><?PHP echo $total ?></td>
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
      <li class="side_search"><span class="icon">Search Product</span>
        <div id="search">
          <input type="text" onkeydown="this.style.color = '#000000';" onclick="this.value = '';" value="Search " name="filter_name"/>
          <a href="#" class="button-search"></a> </div>
      </li>
    </ul>
  </div>   
           
       <?PHP }     
       
       else{
    $cart_info=$cart->view_cart(session_id());
    $delete_cart=$cart->delete_cart_by_session(session_id());
    
       
?>

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
                  <?PHP 
                     while ($cart_data=  mysqli_fetch_array($cart_info)){
                  ?>
                  
                <tr>
                    <td class="image"><a href="#"><img alt="productImage" src="../admin/product_image/<?PHP echo $cart_data['product_image'] ?>" width="50" height="50"/></a></td>
                  <td class="name"><a href="#"><?PHP echo $cart_data['product_name'] ?></a>
                    <div> </div></td>
                  <td class="quantity">x&nbsp;<?PHP echo $cart_data['product_sales_quantity'] ?></td>
                  <td class="total"><?PHP echo $subTotal= $cart_data['product_price']*$cart_data['product_sales_quantity'] ?></td>
                  <td class="remove"><img title="Remove" alt="Remove" src="image/close.png"/></td>
                  
                  <?PHP $total=$total+$subTotal; ?>
                </tr>
                
                     <?PHP } ?>
              </tbody>
            </table>
            <table class="total">
              <tbody>
                <tr>
                  <td align="right"><b>Sub-Total</b></td>
                  <td align="right"><?PHP echo $total ?></td>
                </tr>
                <tr>
                  <td align="right"><b>VAT 17.5%</b></td>
                  <td align="right">$80.50</td>
                </tr>
                <tr>
                  <td align="right"><b>Total</b></td>
                  <td align="right"><?PHP echo $total ?></td>
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
          <input type="text" onkeydown="this.style.color = '#000000';" onclick="this.value = '';" value="Search Product" name="filter_name"/>
          <a href="#" class="button-search"></a> </div>
      </li>
    </ul>
  </div>

<?PHP } 