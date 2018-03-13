<?php
include ('../config/db_config.php');

class Admin {
    
    public $db;
    public function __construct() {
        $this->db=new MySQLi(db_host, db_user, db_password, db_name);
       
       if(mysqli_connect_errno()){
           echo "Could Not Connect toDatabase".  mysql_errno();
           exit();
       }    
    }
    
    
    //Caregory
    
    public function admin_login($username,$password){
      // echo "SELECT *FROM tbl_admin WHERE admin_email='$username' AND password='$password'";
        $sql="SELECT *FROM tbl_admin WHERE admin_email='$username' AND password='$password'";
        $result=  mysqli_query($this->db, $sql);   
        return $result;
        
    }
    
    public function add_category($name,$desc,$status){
       echo "INSERT INRO tbl_category VALUES(NULL ,'$name','$desc','$status')";
        $sql="INSERT INTO tbl_category VALUES(NULL ,'$name','$desc','$status')";
        $result=  mysqli_query($this->db, $sql);
        return $result;
    }
    
    public function delete_category($id) {
        $sql="DELETE FROM tbl_category WHERE category_id='$id'";
        $result=  mysqli_query($this->db, $sql);
        return $result;
    }
    
    public function view_category() {
        $sql="SELECT * FROM tbl_category";
        $result=  mysqli_query($this->db, $sql);
        return $result;
    }
    
     public function view_category_by_id($id) {
        $sql="SELECT * FROM tbl_category WHERE category_id='$id'";
        $result=  mysqli_query($this->db, $sql);
        return $result;
    }
    
    
     public function update_category_publication_status($category_status,$id) {
         $sql="UPDATE tbl_category SET category_status='$category_status' WHERE category_id='$id'";
         $result=  mysqli_query($this->db, $sql);
         return $result;
     }
     
     public function update_category_info($id,$name,$desc,$status) {
         $sql="UPDATE tbl_category SET category_name='$name' ,category_desc='$desc' ,category_status='$status' WHERE category_id='$id'";
         $result=  mysqli_query($this->db, $sql);
         return $result;
     }
     
     //Manufacturer
     
     public function add_manufacturer($id,$name,$description,$publication_status) {
         $query="INSERT INTO tbl_manufacturer VALUES('$id','$name','$description','$publication_status')";
         $result=  mysqli_query($this->db, $query);
         return $result;
     }
     
     public function view_manufacturer() {
         
         $sql="SELECT * FROM tbl_manufacturer";
        $result=  mysqli_query($this->db, $sql);
        return $result;
     }
     
     public function delete_manufacturer($id) {
          $sql="DELETE FROM tbl_manufacturer WHERE manufacturer_id='$id'";
        $result=  mysqli_query($this->db, $sql);
        return $result;
     }
     
     public function update_manufacturer_publication_status($manufacturer_status,$id) {
        // echo "UPDATE tbl_manufacturer SET publication_status='$manufacturer_status' WHERE manufacturer_id='$id'";
         $sql="UPDATE tbl_manufacturer SET publication_status='$manufacturer_status' WHERE manufacturer_id='$id'";
         $result=  mysqli_query($this->db, $sql);
         return $result;
     }
    
     
     public function view_manufacturer_by_id($id) {
        $sql="SELECT * FROM tbl_manufacturer WHERE manufacturer_id='$id'";
        $result=  mysqli_query($this->db, $sql);
        return $result;
    }
    
    
    public function update_manufacturer($name,$desc,$status,$id) {
        $sql="UPDATE tbl_manufacturer SET manufacturer_name='$name' ,manufacturer_desc='$desc' ,publication_status='$status' WHERE manufacturer_id='$id'";
         $result=  mysqli_query($this->db, $sql);
         return $result;
    }
    //Product
    
    public function add_product($product_name,$category_name,$manufacturer_name,$product_price,$producr_quantity,$re_order,$featured_product,$short_desc,$long_desc,$image,$status){
       
        $sql="INSERT INTO tbl_product VALUES(NULL,'$product_name','$category_name','$manufacturer_name','$product_price','$producr_quantity','$re_order','$featured_product','$short_desc','$long_desc','$image','$status')";
        $result=  mysqli_query($this->db, $sql);
        return $result;
    } 
        
    public function view_product() {
         $sql="SELECT * FROM tbl_product";
         $result= mysqli_query($this->db,$sql);
         return $result;
    }
    
    
    public function update_product_publication_status($product_status,$id) {
        // echo "UPDATE tbl_manufacturer SET publication_status='$manufacturer_status' WHERE manufacturer_id='$id'";
         $sql="UPDATE tbl_product SET publication_status='$product_status' WHERE id='$id'";
         $result=  mysqli_query($this->db, $sql);
         return $result;
     }
    
     
     public function view_product_by_id($id) {
        $sql="SELECT * FROM tbl_product WHERE id='$id'";
        $result=  mysqli_query($this->db, $sql);
        return $result;
    }
    
    public function delete_product($id) {
          $sql="DELETE FROM tbl_product WHERE id='$id'";
        $result=  mysqli_query($this->db, $sql);
        return $result;
     }
     
     
}
