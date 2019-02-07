<?php
/**
 * Created by PhpStorm.
 * User: liser
 * Date: 07.02.2019
 * Time: 23:23
 */

class Product {

    private $id;
    private $name;
    private $price;
    private $category;
    private $vendor;

    function __construct($id, $name, $price, $category, $vendor) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->vendor = $vendor;
    }

    public function showProductInfo() {
        echo '<hr>';
        echo "$this->name - $this->category - $this->vendor - $this->price $ <br>";
    }
}