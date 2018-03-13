<?php

include("../config/user.php");



$givenTExt=$_GET['id'];
//echo $givenTExt;

$userdata=new user();
$user_info=$userdata->view_customer();
while($data=mysqli_fetch_array($user_info)){
  
  $dataarray[]=$data['email_address'];

}



//$data = array('php','java','python');

if(in_array($givenTExt,$dataarray)){
    echo "Not Available";
}

 else {
  echo "Available";    
}


