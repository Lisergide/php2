<?php
/**
 * Created by PhpStorm.
 * User: U_M113S
 * Date: 04.03.2019
 * Time: 9:43
 */

namespace app\controllers;

use app\models\Order;
use app\models\repositories\OrderRepository;
use app\models\repositories\SessionRepository;

class OrderController {

  public function sendOrder(){
    if ($this->getOrder()) {
      $order = json_encode($this->getOrder());
      $orderObj = new Order($id = null, $order, $this->getUser());
      (new OrderRepository())->save($orderObj);
      (new SessionRepository())->unsetCart();
    }
  }

  public function getClassName() {
    return 'order';
  }

  public function getOrder(){
    return (new OrderRepository())-> getOrder();
  }

  public function getUser(){
    return (new OrderRepository())-> getUser();
  }

}