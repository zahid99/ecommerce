<?php

include('./database/admin.php');
echo $id=$_GET['id'];
$delete_product=new Admin();
$product_info=new Admin();

$product_info=$product_info->view_product_by_id($id);
$data=  mysqli_fetch_array($product_info);

$var=unlink("product_image/".$data['product_image']);

echo $var;
$delete_product=$delete_product->delete_product($id);
if($delete_product&&$var){
    header('Location:manage_product.php');
}
