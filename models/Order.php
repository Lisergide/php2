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
  public $user;
  public $address;
  public $orderJson;
  public $status;

  static function getTableName(): string {
    return 'orders';
  }
}