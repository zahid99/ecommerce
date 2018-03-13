<?php


class Session{
    
    public function __init() {
         session_start();
         
    }
    
    
     public  function  set($key,$value){
         $_SESSION['$key']=$value;      
         
     }
    
     
     public  function get($key) {
         if(isset($_SESSION['$key'])){
         return $_SESSION['$key'];
         }
             else {
             return FALSE;
                  }
     }
     
     public  function chechSession() {
         self::__init();
        
         if(self::get('login')==FALSE){
             self::session_destroy();
             header('Location:admin_login.php');
         }
         

     }
     
     public  function session_destroy() {
         session_destroy();
     }
}

