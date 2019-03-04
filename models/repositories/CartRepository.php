<?php
/**
 * Created by PhpStorm.
 * User: U_M113S
 * Date: 26.02.2019
 * Time: 14:09
 */

namespace app\models\repositories;

use app\models\Cart;

class CartRepository extends Repository {

  public function __construct($cart = null, $id = null) {
    parent::__construct();
    new SessionRepository ($cart, $id);
  }

  public function getCart() {
    return (new SessionRepository())->getCart();
  }

  public function decreaseItemQ_ty($id) {
    (new SessionRepository())->decreaseItemQ_ty($id);
  }

  public function deleteItem($id) {
    (new SessionRepository())->deleteItem($id);
  }

  public function clearCart() {
    (new SessionRepository())->clearCart();
  }

  public function getTableName(): string {
    return 'cart';
  }

  function getRecordClass() {
    return Cart::class;
  }
}