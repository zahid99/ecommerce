<?php
include('./database/admin.php');
$id=$_GET['id'];

           $product_info=new Admin();
           $obj_update=new Admin();
           $result=$product_info->view_product_by_id($id);    //for select Category Status                                             
           
           $row=  mysqli_fetch_array($result);
          // echo $row['category_status'];
           //cnange publication status
           if($row['publication_status']=='1'){
              $product_status=0; 
           }
           else{
               $product_status=1;
               
           }
           $obj_update=$obj_update->update_product_publication_status($product_status, $id); //Update product status
           
         //  echo $row['category_status'];
          // echo $category_status.' '.$id;
           if($obj_update){
               
               header('Location:manage_product.php');
           }
           