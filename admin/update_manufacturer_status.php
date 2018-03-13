<?php
include('./database/admin.php');
$id=$_GET['id'];
           $manufacturer_info=new Admin();
           $obj_update=new Admin();
           $result=$manufacturer_info->view_manufacturer_by_id($id);    //for select Category Status                                             
           
           $row=  mysqli_fetch_array($result);
          // echo $row['category_status'];
           if($row['publication_status']=='1'){
              $manufacturer_status=0; 
           }
           else{
               $manufacturer_status=1;
               
           }
           $obj_update=$obj_update->update_manufacturer_publication_status($manufacturer_status, $id); //Update Category status
           
         //  echo $row['category_status'];
          // echo $category_status.' '.$id;
           if($obj_update){
               
               header('Location:manage_manufacturer.php');
           }
           