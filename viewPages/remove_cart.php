<?PHP
include ('../config/user.php');
$id=$_GET['order_id'];

$delete=new User();
$delete_info=$delete->delete_cart_by_order_id($id);

header('Location:cart.php');