<?php

include('./database/admin.php');
echo $id=$_GET['id'];
$delete_manufacturer=new Admin();

$delete_manufacturer=$delete_manufacturer->delete_category($id);
if($delete_manufacturer){
    header('Location:manage_category.php');
}
