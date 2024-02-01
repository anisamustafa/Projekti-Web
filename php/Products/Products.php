<?php

class Products{
   private $product_id;
   private $product_name;
   private $product_description;
   private $product_price;
   private $product_discount;
   private $product_image;

public function __construct($product_id,$product_name,$product_description,$product_price,$product_discount,$product_image){
                  $this->product_id = $product_id;
                  $this->product_name = $product_name;
                  $this->product_description = $product_description;
                  $this->product_price = $product_price;
                  $this->product_discount = $product_discount;
                  $this->product_image = $product_image;
}

   public function getProductId() {
      return $this->product_id;
   }

   public function getProductName() {
      return $this->product_name;
   }

   public function getProductDescription() {
      return $this->product_description;
   }

   public function getProductPrice() {
      return $this->product_price;
   }

   public function getProductDiscount() {
      return $this->product_discount;
   }

   public function getProductImage() {
      return $this->product_image;
   }


   public function setProductId($product_id) {
      $this->product_id = $product_id;
   }

   public function setProductName($product_name) {
      $this->product_name = $product_name;
   }

   public function setProductDescription($product_description) {
      $this->product_description = $product_description;
   }

   public function setProductPrice($product_price) {
      $this->product_price = $product_price;
   }

   public function setProductDiscount($product_discount) {
      $this->product_discount = $product_discount;
   }

   public function setProductImage($product_image) {
      $this->product_image = $product_image;
   }
}

?>