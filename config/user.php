<?php


include('db_config.php');
//include ('../admin/database/admin.php');
//include(__DIR__."/config/db_config.php");

class User{
     public $db;
     
     public function __construct() {
        $this->db=new MySQLi(db_host, db_user, db_password, db_name);
       
       if(mysqli_connect_errno()){
           echo "Could Not Connect toDatabase".  mysql_errno();
           exit();
       }  
      // session_start();
    }
     
     public function viewCategory() {
         $sql="SELECT * FROM tbl_category WHERE category_status='1'";
        $result=  mysqli_query($this->db, $sql);
        return $result;
     }
     
     
     
     
     //product
     
     public function view_featured_product() {
        // echo "SELECT * FROM tbl_product";
         //echo "SELECT * FROM tbl_product WHERE publication_status='1' ";
         $sql="SELECT * FROM tbl_product WHERE publication_status='1' ";
         $result= mysqli_query($this->db,$sql);
         return $result;
     }
     
      public function view_latest_product() {
        
        // echo "SELECT * FROM tbl_product WHERE publication_status='1' AND ";
         $sql="SELECT * FROM tbl_product WHERE publication_status='1' AND is_featured='1' LIMIT 8";
         $result= mysqli_query($this->db,$sql);
         return $result;
     }
     
      public function view_product_details($product_id) {
        // echo "SELECT * FROM tbl_product";
        // echo "SELECT * FROM tbl_product WHERE publication_status='1' AND ";
         $sql="SELECT * FROM tbl_product WHERE id='$product_id'";
         $result= mysqli_query($this->db,$sql);
         return $result;
     }
     
     public function view_related_product($category_id,$manufacturer_id,$product_id) {
       // echo "SELECT * FROM tbl_product WHERE manufacturer_id='$manufacturer_id' AND category_id='$category_id' ";
         $sql="SELECT * FROM tbl_product WHERE manufacturer_id='$manufacturer_id' AND category_id='$category_id' AND id !='$product_id'";
         $result= mysqli_query($this->db,$sql);
         return $result;
         
     }
     
     public function view_category_product($cat_id) {
         $sql="SELECT * FROM tbl_product WHERE category_id='$cat_id'";
        $result=  mysqli_query($this->db, $sql);
        return $result;
     }
     
     
     public function view_category_group() {
         $sql="SELECT COUNT(tbl_product.id) ,tbl_category.category_name , tbl_product.category_id FROM 
             tbl_category ,tbl_product WHERE tbl_category.category_id=tbl_product.category_id AND tbl_category.category_status='1' GROUP by tbl_product.category_id ";
    
         $result=  mysqli_query($this->db, $sql);
         return $result;
         
         
     }
     
     //manufacturer
     
     public function view_manufacturer() {
         
         $sql="SELECT * FROM tbl_manufacturer WHERE publication_status='1'";
        $result=  mysqli_query($this->db, $sql);
        return $result;
     }
     
     public function view_manufacturer_by_id($id) {
                 $sql="SELECT * FROM tbl_product WHERE manufacturer_id='$id' ";
        $result=  mysqli_query($this->db, $sql);
        return $result;

     }
    
      public function view_manufacturer_name($id) {
                 $sql="SELECT * FROM tbl_manufacturer WHERE manufacturer_id='$id' ";
        $result=  mysqli_query($this->db, $sql);
        return $result;

     }
     
     
     //CART
     
     public function add_order_details($order_id,$product_id,$product_name,$product_price,$qty,$image) {
         echo "INSERT INTO tbl_order_details VALUES(NULL,'$order_id','$product_id','$product_name','$product_price','$qty','$image')";;
         $sql="INSERT INTO tbl_order_details VALUES(NULL,'$order_id','$product_id','$product_name','$product_price','$qty','$image')";
     
         $result=  mysqli_query($this->db, $sql);
         return $result;
     }

public function update_cart($order_id,$quentity) {
       //  echo "UPDATE tbl_order_details SET product_sales_quantity='$quentity' WHERE order_details_id='$order_id' ";
         $sql="UPDATE tbl_order_details SET product_sales_quantity='$quentity' WHERE order_details_id='$order_id' ";    
         $result=  mysqli_query($this->db, $sql);
         return $result;
     }

     
     //access from sideFeatures
     public function delete_cart() {
         //echo " DELETE FROM `tbl_order_details` WHERE order_id IN(SELECT tbl_order_details.order_id FROM tbl_order WHERE tbl_order.order_id!=tbl_order_details.order_id)";
         $sql=" DELETE FROM `tbl_order_details` WHERE order_id IN(SELECT tbl_order_details.order_id FROM tbl_order WHERE tbl_order.order_id!=tbl_order_details.order_id)";
         $result=  mysqli_query($this->db, $sql);
         return $result;
     }
     
     public function delete_cart_by_session($session_id) {
         $sql=" DELETE FROM tbl_order_details WHERE order_id!='$session_id' AND order_id IN    (SELECT tbl_order_details.order_id FROM tbl_order WHERE tbl_order.order_id!=tbl_order_details.order_id) ";
         $result=  mysqli_query($this->db, $sql);
         return$result;
     }
     
     //id=ordeId
     public function delete_cart_by_order_id($id) {
         echo "DELETE FROM tbl_order_details WHERE order_details_id='$id'";
         $sql="DELETE FROM tbl_order_details WHERE order_details_id='$id'";
         $result=  mysqli_query($this->db, $sql);
         return$result;
     }
     
     public function view_cart($session_id) {
         //echo "SELECT* FROM tbl_order_details WHERE order_id='$session_id'";
         $sql="SELECT* FROM tbl_order_details WHERE order_id='$session_id'";
         $result= mysqli_query($this->db, $sql);
         return $result;
     }
     
      public function cart_data_by_id($session_id,$product_id) {
         //echo "SELECT* FROM tbl_order_details WHERE order_id='$session_id'";
         $sql="SELECT * FROM tbl_order_details WHERE order_id='$session_id' AND product_id='$product_id'";
         $result= mysqli_query($this->db, $sql);
         return $result;
     }
     
     public function view_cart_by_user_id($user_id) {
         $sql="SELECT * FROM `tbl_order_details` WHERE `order_id`="
                 . "(SELECT tbl_order.order_id FROM tbl_order WHERE tbl_order.customer_id='$user_id')";
         $result= mysqli_query($this->db, $sql);
         return $result;
     }
     
     
     //user ACCOUNT
     
     public function userLogin($email,$password) {
         $sql="SELECT* FROM tbl_customer WHERE email_address='$email' AND password='$password'";
         $result= mysqli_query($this->db, $sql);
         return $result;
     }
     
 
     public function user_info($email) {
         $sql="SELECT* FROM tbl_customer WHERE email_address='$email'";
         $result= mysqli_query($this->db, $sql);
         return $result;
     }
     
     
     public function customer_reg($name,$email,$password,$dob,$city,$country,$zip){
       //echo  "INSERT INTO tbl_customer VALUES(NULL,'$name','$email','$password','$dob','$city','$country','$zip')";
         $sql="INSERT INTO tbl_customer VALUES(NULL,'$name','$email','$password','$dob','$city','$country','$zip')";
         $result=  mysqli_query($this->db, $sql);
         return $result;
     }
     
     public function view_customer() {
         $sql="SELECT * FROM tbl_customer";
         $result=  mysqli_query($this->db, $sql);
         return $result;
     }
     
     public function get_payment_id($customer_id) {
         $sql="SELECT payment_id FROM tbl_payment WHERE customer_id='$customer_id' ";
         $result= mysqli_query($this->db, $sql);
         return $result;
     }
     
      public function get_order_id($customer_id) {
         $sql="SELECT * FROM tbl_order WHERE customer_id='$customer_id' ";
         $result= mysqli_query($this->db, $sql);
         return $result;
     }
     
     
     public function update_order_details($session_id,$order_id) {
         $sql="UPDATE tbl_order_details SET order_id='$order_id' WHERE order_id='$session_id'";
         $result=  mysqli_query($this->db, $sql);
         return $result;
     }
     
     public function add_order($cus_id,$payment_id,$total) {
         $sql="INSERT INTO tbl_order VALUES(NULL,'$cus_id','','$payment_id','','$total','','')";
         $result=  mysqli_query($this->db, $sql);
         return $result;
     }
     //customer payment
     
     public function payment($cutomer_id,$payment_type,$payment_status) {
         $sql="INSERT INTO tbl_payment VALUES(NULL,'$cutomer_id','$payment_type','$payment_status')";
         $result=  mysqli_query($this->db, $sql);
         return $result;
     }
     
     //user session
     
     public function session_start() {
         session_start();
     }
     
      public function session_destroy() {
          session_destroy();
     }
}

