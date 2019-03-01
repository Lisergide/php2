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

  protected $session;

  public function sessionStatus() {
    return $this->session;
  }

  public function __construct($cart = null, $id = null) {
    parent::__construct();
    if (!$this->session) {
      session_start();
      $this->session = true;
    }
    if ($cart != null || $id != null) {
      $counter = $_SESSION['goodsCounter'][$id] += 1;
      $_SESSION['cart'][$id] = $cart;
      $_SESSION['cart'][$id]->q_ty = $counter;
      $_SESSION['cart'][$id]->total_price = $counter * $_SESSION['cart'][$id]->price;
    }
  }

  public function getCart() {
    return $_SESSION['cart'];
  }

  public function decreaseItemQ_ty($id) {
    if ($counter = $_SESSION['goodsCounter'][$id] > 1) {
      $counter = $_SESSION['goodsCounter'][$id] -= 1;
      $_SESSION['cart'][$id]->q_ty = $counter;
      $_SESSION['cart'][$id]->total_price = $counter * $_SESSION['cart'][$id]->price;
    } else {
      unset($_SESSION['cart'][$id], $_SESSION['goodsCounter'][$id], $_SESSION);
    }
  }

  public function deleteItem($id) {
    unset($_SESSION['cart'][$id], $_SESSION['goodsCounter'][$id], $_SESSION);
  }

  public function clearCart() {
    unset($_SESSION['cart'], $_SESSION['goodsCounter'], $_SESSION);
  }

  public function getTableName(): string {
    return 'cart';
  }

  function getRecordClass() {
    return Cart::class;
  }
}