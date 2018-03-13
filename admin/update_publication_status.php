<?php

$id=$_GET['id'];
include('./database/admin.php');
           $category_info=new Admin();
           $obj_update=new Admin();
           $data=$category_info->view_category_by_id($id);    //for select Category Status                                             
           $row=  mysqli_fetch_array($data);
          // echo $row['category_status'];
           if($row['category_status']=='1'){
              $category_status=0; 
           }
           else{
               $category_status=1;
               
           }
           $obj_update=$obj_update->update_category_publication_status($category_status, $id); //Update Category status
           
         //  echo $row['category_status'];
          // echo $category_status.' '.$id;
           if($obj_update){
               
               header('Location:manage_category.php');
           }
           