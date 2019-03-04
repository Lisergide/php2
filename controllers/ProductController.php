<?php
/**
 * Created by PhpStorm.
 * User: U_M113S
 * Date: 26.02.2019
 * Time: 15:55
 */

namespace app\controllers;

use app\models\repositories\ProductRepository;
use app\models\repositories\SessionRepository;
use app\models\repositories\CartRepository;
use app\base\App;

class ProductController extends Controller {

  public function actionIndex() {
    new SessionRepository();
    $products = (new ProductRepository())->getAll();
    echo $this->render("featureditems", ['product' => $products, 'className' => $this->getClassName()]);
  }

  public function actionDel() {
    App::call()->request->getHttpReferrer();
    $id = App::call()->request->getParams()['id'];
    (new CartRepository())->deleteItem($id);
  }

//  public function actionCard() {
//    $this->useLayout = false;
//    $id = (new Request())->getParams()['id'];
//    $product = (new ProductRepository())->getOne($id);
//    echo $this->render("card", ['product' => $product, 'className' => $this->getClassName()]);
//  }

  public function getClassName() {
    return 'product';
  }
}