<?php
/**
 * Created by PhpStorm.
 * User: U_M113S
 * Date: 26.02.2019
 * Time: 15:30
 */

namespace app\models;


class Order extends Record {

  public $id;
  public $order;
  public $user;
  public $status = 'new';

  public function __construct($id = null, $order = null, $user = null, $status = 'new') {
    $this->id = $id;
    $this->order = $order;
    $this->user = $user;
    $this->status = $status;
  }
}