<?php
/**
 * Created by PhpStorm.
 * User: U_M113S
 * Date: 26.02.2019
 * Time: 15:32
 */

namespace app\models;


class Product extends Record {

  public $id;
  public $name;
  public $descriptions;
  public $price;
  public $vendor_id;
  public $img_src;

  public function __construct($id = null, $name = null, $descriptions = null, $price = null, $vendor_id = null, $img_src = null) {
    $this->id = $id;
    $this->name = $name;
    $this->descriptions = $descriptions;
    $this->price = $price;
    $this->vendor_id = $vendor_id;
    $this->img_src = $img_src;
  }

  public function getClassName() {
    return Product::class;
  }
}