<?php
class Product {
    private $product_id;
    private $roduct_name;
    private $product_price;
    private $product_discount;
    private $product_image;

    public function __construct($name, $price, $discount = 0, $image) {
        $this->product_name = $product_name;
        $this->product_price = $product_price;
        $this->product_discount = $product_discount;
        $this->product_image = $product_image;
    }   
    public function getProductName() {
        return $this->product_name;
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


    public function calculateDiscountedPrice() {
        return $this->product_price - ($this->product_price * $this->discount / 100);
    }
}
?>
