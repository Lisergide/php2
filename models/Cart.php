<?php
/**
 * Created by PhpStorm.
 * User: U_M113S
 * Date: 26.02.2019
 * Time: 14:13
 */

namespace app\models;


class Cart extends Record {

  public $id;
  public $name;
  public $description;
  public $price;
  public $vendor_id;

  public function __construct($id = null, $name = null, $description = null, $price = null, $vendor_id = null) {
    $this->id = $id;
    $this->name = $name;
    $this->description = $description;
    $this->price = $price;
    $this->vendor_id = $vendor_id;
  }
}