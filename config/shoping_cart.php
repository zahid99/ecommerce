<?php

session_start();
class Product{
    private $productId;
    private $producrName;
    private $price;
    
    public function __construct($productID,$productName,$price) {
        $this->productId=$productID;
        $this->producrName=$productName;
        $this->price=$price;
    }
    
  
   public $cart_product = array();



    public function getId() {
        return $this->productId;
        
    }
    
    public function getName() {
        return $this->producrName;
    }
    
    public function getPrice() {
        return $this->price;
    }
    
    public function addItem($pID) {
        $this->cart_product=$pID;
       
    }
    
}