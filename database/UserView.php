<?php

include('../config/db_config.php');
class UserView{
     public $db;
     
     public function __construct() {
         $this->db=new mysqli(db_host, db_user, db_password, db_name)  ;
     }
     
    
     //product
     
     public function view_product() {
         $sql="SELECT * FROM tbl_product";
         $result= mysqli_query($this->db,$sql);
         return $result;
     }
    
}