<?php
/**
 * Created by PhpStorm.
 * User: U_M113S
 * Date: 04.03.2019
 * Time: 9:42
 */

namespace app\controllers;

use app\models\repositories\OrderRepository;
use app\base\App;

class CheckoutController extends Controller {

  public function actionIndex() {
    $productsInOrder = (new OrderRepository())->getOrder();
    if (!$productsInOrder) {
      $productsInOrder = [];
    }
    echo $this->render("order", ['products' => $productsInOrder, 'className' => $this->getClassName()]);
  }

  public function actionLogin() {
    (new UserController())->login();
  }

  public function actionRegister() {
    (new UserController())->register();
  }

  public function actionOrder() {
    App::call()->request->getHttpReferrer();
    (new OrderController())->sendOrder();
  }

  public function getClassName() {
    return 'checkout';
  }
}