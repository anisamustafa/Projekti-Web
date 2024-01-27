<?php
class Product {
    private $id;
    private $name;
    private $price;
    private $discount;
    private $image;

    public function __construct($name, $price, $discount = 0, $image) {
        $this->name = $name;
        $this->price = $price;
        $this->discount = $discount;
        $this->image = $image;
    }

    public function calculateDiscountedPrice() {
        return $this->price - ($this->price * $this->discount / 100);
    }
}
?>
